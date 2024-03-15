<?php

namespace App\Filament\Resources;

use App\Enums\PostStatus;
use App\Filament\Resources\NavigationResource\Pages;
use App\Models\Navigation;
use App\Models\Post;
use Carbon\Carbon;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class NavigationResource extends Resource
{
    protected static ?string $model = Navigation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return __('navigation');
    }

    public static function getPluralModelLabel(): string
    {
        return __('navigation managements');
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
                                    ->content(
                                        fn(Navigation $record): ?string =>
                                        Carbon::create($record->created_at)?->diffForHumans()
                                    )
                                    ->translateLabel(),
                                Placeholder::make('updated_at')
                                    ->content(
                                        fn(Navigation $record): ?string =>
                                        (!empty($record->updated_at)) ? Carbon::create($record->updated_at ?? null)?->diffForHumans() : ''
                                    )
                                ->translateLabel()
                            ])
                            ->columnSpan(['lg' => 1])
                            ->hidden(fn(?Navigation $record) => $record === null),
                    ]),
                Forms\Components\Group::make()
                    ->schema([
                        Section::make()
                            ->schema([
                                TextInput::make('title')
                                    ->suffixIcon('heroicon-m-cube-transparent')
                                    ->string()
                                    ->required()
                                    ->translateLabel(),
                                Select::make('ownerID')
                                    ->suffixIcon('heroicon-m-archive-box')
                                    ->options(
                                        Navigation::whereNull('ownerID')
                                        ->pluck('title','id')
                                    )
                                    ->native(false)
                                    ->suffixIcon('heroicon-m-circle-stack')
                                    ->searchable()
                                    ->nullable()
                                    ->translateLabel(),
                                Select::make('postID')
                                    ->label('Post')
                                    ->suffixIcon('heroicon-m-archive-box')
                                    ->options(
                                        Post::where('status',PostStatus::Published)
                                            ->pluck('title','id')
                                    )
                                    ->native(false)
                                    ->suffixIcon('heroicon-m-circle-stack')
                                    ->searchable()
                                    ->requiredWith('ownerID')
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
                            ])
                            ->columns(2),
                    ])
                    ->columnSpan(['lg' => fn(?Navigation $record) => $record === null ? 3 : 2]),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->translateLabel()
                    ->toggleable(),
                TextColumn::make('ownerID')
                    ->formatStateUsing(
                        fn(string $state): string => Navigation::find($state)->title
                    )
                    ->translateLabel(),
                TextColumn::make('post.title')
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
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNavigations::route('/'),
            'create' => Pages\CreateNavigation::route('/create'),
            'edit' => Pages\EditNavigation::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return parent::getEloquentQuery()
            ->with('post');
    }
}
