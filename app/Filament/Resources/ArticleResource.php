<?php

// namespace App\Filament\Resources;

// use App\Filament\Resources\ArticleResource\Pages;
// use App\Models\Article;
// use Filament\Forms;
// use Filament\Forms\Form;
// use Filament\Resources\Resource;
// use Filament\Tables;
// use Filament\Tables\Table;


namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Validation\Rule;


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
                    ->unique('articles', 'slug', ignoreRecord: true),
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
                    ->disk('public')
                    ->directory('images')
                    ->columnSpanFull()
                    ->visibility('public') 
                    ->preserveFilenames()
                    ->getUploadedFileNameForStorageUsing(function ($file) {
                        return 'images/' . $file->getClientOriginalName();
                    })
                    ->label('Thumbnail'),
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
