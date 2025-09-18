<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Category;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->live(true)
                    ->afterStateUpdated(fn(string $operation,$state, Forms\Set $set)=>
                        $operation ==='create'? $set('slug',Str::slug($state)) : null
                    ),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->disabled(),
                Forms\Components\TagsInput::make('tags')
                    ->required(false),
                Forms\Components\Select::make('category_id')
                    ->label('Catégorie')
                    ->options(Category::all()->pluck('name', 'id'))
                    ->searchable()
                    ->preload() // Optionnel: précharge les options
                    ->required(),
                Forms\Components\MarkdownEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('avatar')
                    ->avatar()
                    ->directory('posts')
                    ->previewable()
                    ->imageEditor()
                    ->required(),
                Forms\Components\TextInput::make('conclusion')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('avatar')
                ->extraImgAttributes(fn (Post $record): array => [
                    'alt' => "post photo",
                    'loading' => 'lazy',
                ])
                ->checkFileExistence(false)
                ->circular()
                ->size(50)
                ->getStateUsing(fn ($record) => asset('storage/'.$record->avatar)),
                Tables\Columns\TextColumn::make('category.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->sortable()
                    ->label('Created by'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('conclusion')
                    //->dateTime()
                    //->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?string $navigationBadgeTooltip = 'Total posts';
}
