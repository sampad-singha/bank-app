<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AccountResource\Pages;
use App\Filament\Resources\AccountResource\RelationManagers;
use App\Models\Account;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Enums\GenderStatus;
use PhpParser\Node\Stmt\Label;
use PHPUnit\Metadata\Group;

class AccountResource extends Resource
{
    protected static ?string $model = Account::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('account_holder_name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('account_id')
                    ->label('Account No')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('balance')
                    ->label('Balance')
                    ->searchable()
                    ->sortable()
                    ->money(),
                Tables\Columns\TextColumn::make('dob')
                    ->label('Date of Birth')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mobile')
                    ->label('Mobile')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nid')
                    ->label('NID')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('passport')
                    ->label('Passport')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tin')
                    ->label('TIN')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('occupation')
                    ->label('Occupation')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('income')
                    ->label('Income')
                    ->searchable()
                    ->sortable()
                    ->money(),
                Tables\Columns\TextColumn::make('income_source')
                    ->label('Income Source')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('division')
                    ->label('Present Division')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('district')
                    ->label('Present District')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('thana')
                    ->label('Present Thana')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('post_code')
                    ->label('Present Post Code')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('house_road')
                    ->label('Present House/Road')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('p_division')
                    ->label('Permanent Division')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('p_district')
                    ->label('Permanent District')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('p_thana')
                    ->label('Permanent Thana')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('p_post_code')
                    ->label('Permanent Post Code')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('p_house_road')
                    ->label('Permanent House/Road')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ref_name')
                    ->label('Reference Name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ref_account_no')
                    ->label('Reference Account No')
                    ->searchable()
                    ->sortable(),


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAccounts::route('/'),
            'create' => Pages\CreateAccount::route('/create'),
            'edit' => Pages\EditAccount::route('/{record}/edit'),
        ];
    }
}
