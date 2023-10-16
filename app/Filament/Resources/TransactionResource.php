<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Filament\Resources\TransactionResource\RelationManagers;
use App\Models\Transaction;
use Faker\Provider\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                        Forms\Components\TextInput::make('trx_no')
                            ->required()
                            ->disabled()
                            ->placeholder('Transaction No'),
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
                        Forms\Components\TextInput::make('created_at')
                            ->autofocus()
                            ->required()
                            ->disabled()
                            ->placeholder('Created At'),
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
                Tables\Columns\TextColumn::make('amount')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('receiver_account_no')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTransactions::route('/'),
            'create' => Pages\CreateTransaction::route('/create'),
            'edit' => Pages\EditTransaction::route('/{record}/edit'),
        ];
    }
    public static function canCreate(): bool
    {
        return false;
    }
    public static function canEdit(Transaction|\Illuminate\Database\Eloquent\Model $record): bool
    {
        return false;
    }
    public static function canDelete(Transaction|\Illuminate\Database\Eloquent\Model $record): bool
    {
        return false;
    }
}
