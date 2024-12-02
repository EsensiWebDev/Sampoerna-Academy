<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use App\Models\Tag;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\Select::make('article_for')
                //     ->options([
                //         "LAVENUE" => 'LAVENUE',
                //         "BSD" => 'BSD',
                //         "SENTUL" => 'SENTUL',
                //         "SURABAYA" => 'SURABAYA',
                //         "MEDAN" => "MEDAN"
                //     ])
                //     ->default("LAVENUE"),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->minLength(5)
                    ->maxLength(255)
                    ->unique('articles', 'slug'),
                Forms\Components\TextInput::make('title_indonesia')
                    ->required()
                    ->minLength(5)
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('title_english')
                    ->required()
                    ->minLength(5)
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('thumbnail')
                    ->image()
                    ->imageEditor()
                    ->columnSpan(4)
                    ->required(),
                Forms\Components\TextInput::make('lang')
                    ->default('id') // Set the default value to 'id'
                    ->disabled() // Make it uneditable
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('content_indonesia')
                    ->columnSpan(4),
                Forms\Components\TextInput::make('lang')
                    ->default('en') // Set the default value to 'id'
                    ->disabled() // Make it uneditable
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('content_english')
                    ->columnSpan(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug'),
                // Tables\Columns\TextColumn::make('article_for'),
                Tables\Columns\TextColumn::make('title'),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
