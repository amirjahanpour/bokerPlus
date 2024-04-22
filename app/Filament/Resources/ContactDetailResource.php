<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactDetailResource\Pages;
use App\Models\ContactDetail;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactDetailResource extends Resource
{
    protected static ?string $model = ContactDetail::class;

    public static function getModelLabel(): string
    {
        return __('contact detail');
    }

    public static function getPluralModelLabel(): string
    {
        return __('contact detail');
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->translateLabel(),
                TextColumn::make('family')
                    ->sortable()
                    ->translateLabel(),
                TextColumn::make('phone')
                    ->sortable()
                    ->translateLabel(),
                TextColumn::make('telegramID')
                    ->sortable()
                    ->translateLabel(),
                TextColumn::make('brokerName')
                    ->sortable()
                    ->translateLabel(),
                TextColumn::make('cabinNumber')
                    ->sortable()
                    ->translateLabel(),
                TextColumn::make('message')
                    ->toggleable()
                    ->limit(30)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }
                        return $state;
                    })
                    ->translateLabel(),
            ])
            ->filters([
                //
            ])
            ->actions([
//                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
//                Tables\Actions\BulkActionGroup::make([
//                    Tables\Actions\DeleteBulkAction::make(),
//                ]),
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
            'index' => Pages\ListContactDetails::route('/'),
//            'create' => Pages\CreateContactDetail::route('/create'),
//            'edit' => Pages\EditContactDetail::route('/{record}/edit'),
        ];
    }
}
