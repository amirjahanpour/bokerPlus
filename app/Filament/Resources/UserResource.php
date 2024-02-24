<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make()
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->markAsRequired()
                            ->minLength(2)
                            ->maxLength(50)
                            ->string(),
                        TextInput::make('family')
                            ->required()
                            ->markAsRequired()
                            ->string()
                            ->minLength(2)
                            ->maxLength(50),
                        TextInput::make('username')
                            ->required()
                            ->markAsRequired()
                            ->string()
                            ->minLength(2)
                            ->maxLength(100)
                            ->unique(ignoreRecord: true)
                            ->helperText('Your full name here, including any middle names.')
                            ->suffixIcon('heroicon-m-user-circle'),
                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->string()
                            ->markAsRequired()
                            ->dehydrated(fn(?string $state): bool => filled($state))
                            ->unique(ignoreRecord: true)
                            ->datalist([
                                '@gmail.com',
                                '@yahoo.com',
                            ])
                            ->suffixIcon('heroicon-m-envelope'),
                        TextInput::make('password')
                            ->autocomplete('new-password')
                            ->password()
                            ->markAsRequired()
                            ->minLength(6)
                            ->string()
                            ->confirmed()
                            ->dehydrateStateUsing(fn(string $state): string => Hash::make($state))
                            ->dehydrated(fn(?string $state): bool => filled($state))
                            ->required(fn(string $operation): bool => $operation === 'create'),
                        TextInput::make('password_confirmation')
                            ->autocomplete('new-password')
                            ->password()
                            ->required()
                            ->string()
                            ->markAsRequired()
                            ->minLength(6)
                            ->required(fn(string $operation): bool => $operation === 'create')
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(isIndividual: true)
                    ->limit(30)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }
                        return $state;
                    }),
                TextColumn::make('family')
                    ->searchable(isIndividual: true)
                    ->limit(30)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }
                        return $state;
                    }),
                TextColumn::make('username')
                    ->limit(30)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }
                        return $state;
                    })
                    ->icon('heroicon-m-user-circle')
                    ->searchable(isIndividual: true),
                TextColumn::make('email')
                    ->icon('heroicon-m-envelope')
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('email_verified_at')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->jalaliDate(),
                TextColumn::make('created_at')
                    ->sortable()
                    ->toggleable()
                    ->jalaliDate(),
                TextColumn::make('updated_at')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->jalaliDate(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make()

            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                CreateAction::make(),
            ])
            ->defaultSort('created_at', 'DESC');
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
