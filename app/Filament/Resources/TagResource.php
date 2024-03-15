<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TagResource\Pages;
use App\Models\Tag;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Carbon\Carbon;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class TagResource extends Resource
{
    protected static ?string $model = Tag::class;

    protected static ?string $navigationIcon = 'heroicon-o-hashtag';


    public static function getModelLabel(): string
    {
        return __('tag');
    }

    public static function getPluralModelLabel(): string
    {
        return __('tag managements');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Section::make()
                            ->schema([
                                Placeholder::make('created_at')
                                    ->translateLabel()
                                    ->content(fn(Tag $record): ?string => Carbon::create($record->created_at)?->diffForHumans()),
                                Placeholder::make('updated_at')
                                    ->translateLabel()
                                    ->content(fn(Tag $record): ?string => (!empty($record->updated_at)) ? Carbon::create($record->updated_at ?? null)?->diffForHumans() : ''),
                            ])
                            ->columnSpan(['lg' => 1])
                            ->hidden(fn(?Tag $record) => $record === null),
                    ]),
                Forms\Components\Group::make()
                    ->schema([
                        Section::make()
                            ->schema([
                                TextInput::make('name')
                                    ->suffixIcon('heroicon-m-cube-transparent')
                                    ->string()
                                    ->markAsRequired()
                                    ->required()
                                    ->translateLabel(),
                                Select::make('isArchive')
                                    ->suffixIcon('heroicon-m-archive-box')
                                    ->options(
                                        [
                                            true => 'Yes',
                                            false => 'No'
                                        ]
                                    )
                                    ->default(true)
                                    ->native(false)
                                    ->suffixIcon('heroicon-m-circle-stack')
                                    ->required()
                                    ->translateLabel(),
                                TextInput::make('sort')
                                    ->required()
                                    ->numeric()
                                    ->suffixIcon('heroicon-m-calendar-days')
                                    ->default(1)
                                    ->translateLabel()
                            ])
                            ->columns(2),

                    ])
                    ->columnSpan(['lg' => fn(?Tag $record) => $record === null ? 3 : 2]),

            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->translateLabel(),
                TextColumn::make('sort')
                    ->toggleable()
                ->translateLabel(),
                TextColumn::make('isArchive')
                    ->translateLabel(),
                TextColumn::make('created_at')
                    ->sortable()
                    ->toggleable()
                    ->jalaliDate()
                    ->translateLabel(),
                TextColumn::make('updated_at')
                    ->sortable()
                    ->toggleable()
                    ->jalaliDate()
                    ->translateLabel(),
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
            'index' => Pages\ListTags::route('/'),
            'create' => Pages\CreateTag::route('/create'),
            'edit' => Pages\EditTag::route('/{record}/edit'),
        ];
    }
}
