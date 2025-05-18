<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberResource\Pages;
use App\Filament\Resources\MemberResource\RelationManagers;
use App\Models\Member;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Storage;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('lastname')
                    ->required(),
                Forms\Components\TextInput::make('function')
                    ->required(),
                Forms\Components\TextInput::make('facebook_link'),
                Forms\Components\TextInput::make('x_link'),
                Forms\Components\TextInput::make('instagram_link'),
                Forms\Components\TextInput::make('github_link'),
                Forms\Components\TextInput::make('portfolio'),
                FileUpload::make('avatar')
                    ->required()
                    ->avatar()
                    ->imageEditor()
                    ->directory('members')
                    ->visibility('public')
                    ->disk('public')
                    ->previewable(true)
                    ->imagePreviewHeight('250'),
                Forms\Components\TextInput::make('email')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lastname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('function')
                    ->searchable(),
                Tables\Columns\TextColumn::make('portfolio'),
                ImageColumn::make('avatar')
                    ->circular()
                    ->size(50)
                    ->extraImgAttributes(fn (Member $record): array => [
                        'alt' => "{$record->name} photo",
                        'loading' => 'lazy',
                    ])
                    ->checkFileExistence(false)
                    ->getStateUsing(fn ($record) => asset('storage/'.$record->avatar))
                    ->openUrlInNewTab(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Joined at')
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?string $navigationBadgeTooltip = 'Total team members';

}
