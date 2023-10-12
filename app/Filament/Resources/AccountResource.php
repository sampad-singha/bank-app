<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AccountResource\Pages;
use App\Filament\Resources\AccountResource\RelationManagers;
use App\Models\Account;
use App\Models\Branch;
use Filament\Actions\ActionGroup;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Enums\GenderStatus;
use Illuminate\Support\Facades\DB;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use PhpParser\Node\Stmt\Label;
use PHPUnit\Metadata\Group;
use function Laravel\Prompts\text;
use Illuminate\Database\Eloquent\Model;

class AccountResource extends Resource
{
    protected static ?string $model = Account::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

//    protected $branch_names;
//    public $branch = Branch::all();

    public static function form(Form $form): Form
    {
        $email = $form->getRecord();
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
                        Forms\Components\Section::make('Image')
                            ->schema([
                                Forms\Components\FileUpload::make('image_path')
                                    ->image()
                                    ->directory('/images')
//                                    ->getUploadedFileNameForStorageUsing(function(TemporaryUploadedFile $file){
//                                        return time() . '-' . $file->getClientOriginalName();
//                                    })
                                    ->getUploadedFileNameForStorageUsing(
                                        fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                            ->prepend(time(),'-'),
                                    )
                                    ->label('Image')
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
                                        'Saving' => 'Saving',
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
                                Forms\Components\Select::make('branch_code')
                                    ->label('Branch Name')
                                    ->options(
                                        Branch::all()->pluck('branch_name', 'branch_code')
                                    )
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
                Tables\Columns\TextColumn::make('gender')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('account_type')
                    ->label('Account Type')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
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
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('status', 'Accepted');
    }
}
