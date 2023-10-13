<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendingTransactionResource\Pages;
use App\Filament\Resources\PendingTransactionResource\RelationManagers;
use App\Models\Account;
use App\Models\PendingTransaction;
use App\Models\Transaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PendingTransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static ?string $label = 'Pending Transactions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\TextInput::make('account_no')
                            ->autofocus()
                            ->required()
                            ->disabled()
                            ->placeholder('Account No'),
                        Forms\Components\TextInput::make('type')
                            ->autofocus()
                            ->required()
                            ->disabled()
                            ->placeholder('Type'),
                        Forms\Components\TextInput::make('receiver_id')
                            ->autofocus()
                            ->required()
                            ->disabled()
                            ->placeholder('Receiver ID'),
                        Forms\Components\TextInput::make('amount')
                            ->autofocus()
                            ->required()
                            ->disabled()
                            ->placeholder('Amount'),
                        Forms\Components\TextInput::make('status')
                            ->autofocus()
                            ->required()
                            ->disabled()
                            ->placeholder('Status'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('account_no')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('trx_no')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('amount')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('receiver_id')
                    ->sortable()
                    ->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('Accept')
                    ->action(function (Transaction $record, Account $account) {
                        $record->status = 'Accepted';
                        $account = Account::where('account_no', $record->account_no)->first();
                        $account->balance = $account->balance - $record->amount;
                        $account->update();
                        $record->save();
                    })
                    ->visible(function (Transaction $record) {
                        if($record->status == 'Pending')
                            return true;
                        else
                            return false;
                    })
                    ->icon('heroicon-s-check-circle')
                    ->color('success')
                    ->requiresConfirmation(),
                Tables\Actions\Action::make('Reject')
                    ->action(function (Transaction $record) {
                        $record->status = 'Rejected';
                        $record->delete();
                    })
                    ->visible(function (Transaction $record) {
                        if($record->status == 'Pending')
                            return true;
                        else
                            return false;
                    })
                    ->icon('heroicon-s-x-circle')
                    ->color('danger')
                    ->requiresConfirmation(),
                Tables\Actions\ViewAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('status', 'Pending');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPendingTransactions::route('/')
        ];
    }
    public static function canCreate(): bool
    {
        return false;
    }
}
