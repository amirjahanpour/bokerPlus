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

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Section::make()
                            ->schema([
                                Placeholder::make('created_at')
                                    ->label('Created at')
                                    ->content(
                                        fn(Navigation $record): ?string =>
                                        Carbon::create($record->created_at)?->diffForHumans()
                                    ),
                                Placeholder::make('updated_at')
                                    ->label('updated at')
                                    ->content(
                                        fn(Navigation $record): ?string =>
                                        (!empty($record->updated_at)) ? Carbon::create($record->updated_at ?? null)?->diffForHumans() : ''
                                    )
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
                                    ->required(),
                                Select::make('ownerID')
                                    ->label('owner')
                                    ->suffixIcon('heroicon-m-archive-box')
                                    ->options(
                                        Navigation::whereNull('ownerID')
                                        ->pluck('title','id')
                                    )
                                    ->native(false)
                                    ->suffixIcon('heroicon-m-circle-stack')
                                    ->searchable()
                                    ->nullable(),
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
                                    ->requiredWith('ownerID'),
                                Select::make('isArchive')
                                    ->label('Archive')
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
                                    ->required(),
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
                    ->toggleable(),
                TextColumn::make('ownerID')
                    ->formatStateUsing(
                        fn(string $state): string => Navigation::find($state)->title
                    ),
                TextColumn::make('post.title'),
                TextColumn::make('created_at')
                    ->sortable()
                    ->toggleable()
                    ->jalaliDate(),
                TextColumn::make('updated_at')
                    ->sortable()
                    ->toggleable()
                    ->jalaliDate(),
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
