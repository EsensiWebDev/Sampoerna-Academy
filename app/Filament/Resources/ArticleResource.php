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

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Storage;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
                FileUpload::make('thumbnail')
                    ->image()                         
                    ->directory('images')              
                    ->preserveFilenames()              
                    ->columnSpanFull()
                    ->afterStateUpdated(function ($state, $get) {
                        $filename = $state->getClientOriginalName();

                        $fileUrl = asset('storage/images/' . $filename);

                        // Store the URL in the database (e.g., in the 'thumbnail' field)
                        $article = $get('article'); // Assuming you're working with an article model or form
                        $article->thumbnail = $fileUrl; // Save the full URL to the 'thumbnail' field
                        $article->save();
                    }),
                Forms\Components\RichEditor::make('content_indonesia')
                    ->columnSpan(4),
                Forms\Components\RichEditor::make('content_english')
                    ->columnSpan(4),
                Forms\Components\Hidden::make('lang')
                    ->default('id') // Set the default value
                    ->columnSpanFull(),
                Forms\Components\Hidden::make('isPublished')
                    ->default(true) // Set the default value
                    ->columnSpanFull(),
                Forms\Components\Hidden::make('link') // Add the hidden link field
                    ->default(fn($get) => url('/news/' . $get('slug'))) // Dynamically create the URL using the slug field
                    ->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('title_indonesia'),
                Tables\Columns\TextColumn::make('title_english'),
                Tables\Columns\TextColumn::make('lang'),
            ])
            ->filters([])
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
        return [];
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
