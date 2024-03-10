<?php

namespace App\Filament\Resources;

use App\Enums\PostStatus;
use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use App\Models\tag;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use FilamentTiptapEditor\TiptapEditor;
use FilamentTiptapEditor\Enums\TiptapOutput;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

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
                                    ->content(fn(Post $record): ?string => Carbon::create($record->created_at)?->diffForHumans()),
                                Placeholder::make('updated_at')
                                    ->label('updated at')
                                    ->content(fn(Post $record): ?string => (!empty($record->updated_at)) ? Carbon::create($record->updated_at ?? null)?->diffForHumans() : ''),
                                Checkbox::make('showIndex')->label('show in page index')
                            ])
                            ->columnSpan(['lg' => 1])
                            ->hidden(fn(?Post $record) => $record === null),
                    ]),
                Forms\Components\Group::make()
                    ->schema([
                        Section::make()
                            ->schema([
                                TextInput::make('title')
                                    ->suffixIcon('heroicon-m-cube-transparent')
                                    ->string()
                                    ->required()
                                    ->unique(),
                                Select::make('tagID')
                                    ->label('Tag')
                                    ->suffixIcon('heroicon-m-archive-box')
                                    ->options(tag::all()->pluck('name','id'))
                                    ->native(false)
                                    ->suffixIcon('heroicon-m-circle-stack')
                                    ->searchable()
                                    ->required()
                                    ->markAsRequired(),
                                Select::make('status')
                                    ->suffixIcon('heroicon-m-archive-box')
                                    ->options(PostStatus::options())
                                    ->default(PostStatus::PendingReview)
                                    ->native(false)
                                    ->suffixIcon('heroicon-m-circle-stack')
                                    ->required()
                                    ->markAsRequired()
                                    ->columnSpanFull(),
                                FileUpload::make('posterSID')
                                    ->label('poster')
                                    ->image()
                                    ->imageEditor()
                                    ->disk('public')
                                    ->directory('images')
                                    ->visibility('public')
                                    ->required()
                                    ->markAsRequired()
                                    ->downloadable(),
                                Textarea::make('description')
                                    ->autosize()
                                    ->markAsRequired()
                            ])
                            ->columns(2),
                    ])
                    ->columnSpan(['lg' => fn(?Post $record) => $record === null ? 3 : 2]),
                Forms\Components\Group::make()
                    ->schema([
                        Section::make()
                            ->schema([
                                TagsInput::make('postHashtag')
                                    ->required()
                                    ->markAsRequired()
                            ]),
                        Section::make()
                            ->schema([
                                TiptapEditor::make('postContent')
                                    ->output(TiptapOutput::Json)
                                    ->required()
                                    ->markAsRequired()
                            ])
                    ])->columnSpanFull()
                    ->hidden(fn(?Post $record) => $record === null),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('status'),
                TextColumn::make('title')
                    ->toggleable(),
                TextColumn::make('description')
                    ->toggleable()
                    ->limit(20)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }
                        return $state;
                    }),
                TextColumn::make('created_at')
                    ->sortable()
                    ->toggleable()
                    ->jalaliDate(),
                TextColumn::make('updated_at')
                    ->sortable()
                    ->toggleable()
                    ->jalaliDate(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
