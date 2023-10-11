<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendingAccountResource\Pages;
use App\Filament\Resources\PendingAccountResource\RelationManagers;
use App\Models\Account;
use App\Models\PendingAccount;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PendingAccountResource extends Resource
{
    protected static ?string $model = Account::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static ?string $label = 'Pending Applications';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Personal Information')
                            ->schema([
                                Forms\Components\TextInput::make('account_holder_name')
                                    ->label('Name')
                                    ->required()
                                    ->autofocus(),
                                Forms\Components\TextInput::make('dob')
                                    ->label('Date of Birth')
                                    ->required()
                                    ->type('date'),
                                Forms\Components\TextInput::make('nid')
                                    ->label('NID')
                                    ->required()
                                    ->minLength(10)
                                    ->maxLength(10),
                                Forms\Components\Select::make('gender')
                                    ->options([
                                        'Male' => 'Male',
                                        'Female'=>'Female',
                                        'Other'=>'Other'
                                    ])
                                    ->required(),
                                Forms\Components\TextInput::make('nationality')
                                    ->required(),
                                Forms\Components\TextInput::make('father_name')
                                    ->label('Father\'s Name')
                                    ->required(),
                                Forms\Components\TextInput::make('mother_name')
                                    ->label('Mother\'s Name')
                                    ->required(),
                                Forms\Components\TextInput::make('spouse_name')
                                    ->label('Spouse\'s Name'),
                                Forms\Components\TextInput::make('passport')
                                    ->label('Passport'),
                                Forms\Components\TextInput::make('tin')
                                    ->label('TIN'),
                                Forms\Components\TextInput::make('occupation')
                                    ->label('Occupation')
                                    ->required(),
                                Forms\Components\TextInput::make('income')
                                    ->label('Monthly Income')
                                    ->required(),
                                Forms\Components\TextInput::make('income_source')
                                    ->label('Income Source')
                                    ->required(),
                            ]),
                        Forms\Components\Section::make('Reference Information')
                            ->schema([
                                Forms\Components\TextInput::make('ref_name')
                                    ->label('Reference Name')
                                    ->required(),
                                Forms\Components\TextInput::make('ref_account_no')
                                    ->label('Reference Account No')
                                    ->required(),
                            ]),
                    ]),
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Account Information')
                            ->schema([
                                Forms\Components\TextInput::make('email')
                                    ->label('Email')
                                    ->required()
                                    ->email(),
                                Forms\Components\TextInput::make('mobile')
                                    ->label('Mobile')
                                    ->required()
                                    ->minLength(11)
                                    ->maxLength(11),
                                Forms\Components\Select::make('account_type')
                                    ->label('Account Type')
                                    ->options([
                                        'Savings' => 'Savings',
                                        'Checking' => 'Checking',
                                        'Fixed Deposit' => 'Fixed Deposit',
                                    ])
                                    ->required(),
                                Forms\Components\Select::make('account_holder')
                                    ->label('Account Holder')
                                    ->options([
                                        '1' => 'Individual',
                                        '2' => 'Joint',
                                    ])
                                    ->required(),

                            ]),
                        Forms\Components\Section::make('Present Address')
                            ->schema([
                                Forms\Components\TextInput::make('division')
                                    ->label('Division')
                                    ->required(),
                                Forms\Components\TextInput::make('district')
                                    ->label('District')
                                    ->required(),
                                Forms\Components\TextInput::make('thana')
                                    ->label('Thana')
                                    ->required(),
                                Forms\Components\TextInput::make('post_code')
                                    ->label('Post Code')
                                    ->required(),
                                Forms\Components\TextInput::make('house_road')
                                    ->label('House/Road')
                                    ->required(),
                            ]),
                        Forms\Components\Section::make('Permanent Address')
                            ->schema([
                                Forms\Components\TextInput::make('p_division')
                                    ->label('Division')
                                    ->required(),
                                Forms\Components\TextInput::make('p_district')
                                    ->label('District')
                                    ->required(),
                                Forms\Components\TextInput::make('p_thana')
                                    ->label('Thana')
                                    ->required(),
                                Forms\Components\TextInput::make('p_post_code')
                                    ->label('Post Code')
                                    ->required(),
                                Forms\Components\TextInput::make('p_house_road')
                                    ->label('House/Road')
                                    ->required(),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('account_id')
                    ->label('Account ID')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('account_holder_name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),

            ])
            ->actions([
                Tables\Actions\Action::make('Accept')
                    ->action(function (Account $record) {
                        $record->status = 'Accepted';
                        $record->account_no = $record->branch_code . $record->account_id;
                        $record->balance = $record->primary_deposit;
                        $record->save();
                    })
                    ->visible(function (Account $record) {
                        if($record->status == 'Pending')
                            return true;
                        else
                            return false;
                    })
                    ->icon('heroicon-s-check-circle')
                    ->color('success')
                    ->requiresConfirmation(),
                Action::make('Reject')
                    ->action(function (Account $record) {
                        $record->status = 'Rejected';
                        $record->save();
                    })
                    ->visible(function (Account $record) {
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePendingAccounts::route('/'),
        ];
    }
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('status', 'Pending');
    }
    public static function canCreate(): bool
    {
        return false;
    }
//    public static function canDelete(\Illuminate\Database\Eloquent\Model $record): bool
//    {
//        return false;
//    }
}
