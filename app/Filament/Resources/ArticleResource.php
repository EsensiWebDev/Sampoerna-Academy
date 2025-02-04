<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Rawilk\FilamentQuill\Filament\Forms\Components\QuillEditor;
use Rawilk\FilamentQuill\Enums\ToolbarButton;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                // Full-width row for the toggle
                Forms\Components\Toggle::make('isPublished')
                    ->label('Publish Article')
                    ->onColor('success')
                    ->offColor('danger')
                    ->default(true)
                    ->columnSpanFull(),

                // Group `slug` and `created_at` in a single row
                Forms\Components\Group::make([
                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->minLength(5)
                        ->maxLength(255)
                        ->unique('articles', 'slug', ignoreRecord: true)
                        ->label('Slug'),
                    Forms\Components\DatePicker::make('created_at')
                        ->default(now())
                        ->required()
                        ->label('Created At'),
                ])
                    ->columns(2), // Ensure these fields are side-by-side

                // Full-width fields for the titles
                Forms\Components\TextInput::make('title_indonesia')
                    ->minLength(5)
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->label('Title (Indonesian)'),

                Forms\Components\TextInput::make('title_english')
                    ->minLength(5)
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->label('Title (English)'),

                // Full-width field for the file upload
                Forms\Components\FileUpload::make('thumbnail')
                    ->image()
                    ->disk('public')
                    ->directory('images')
                    ->columnSpanFull()
                    ->visibility('public')
                    ->preserveFilenames()
                    ->label('Thumbnail'),

                // Full-width rich editors
                QuillEditor::make('content_indonesia')
                    ->toolbarButtons([
                        ToolbarButton::Font,
                        ToolbarButton::Size,
                        ToolbarButton::Bold,
                        ToolbarButton::Italic,
                        ToolbarButton::Underline,
                        ToolbarButton::Strike,
                        ToolbarButton::BlockQuote,
                        ToolbarButton::OrderedList,
                        ToolbarButton::UnorderedList,
                        ToolbarButton::Indent,
                        ToolbarButton::Link,
                        ToolbarButton::Image,
                        ToolbarButton::Scripts,
                        ToolbarButton::TextColor,
                        ToolbarButton::BackgroundColor,
                        ToolbarButton::Undo,
                        ToolbarButton::Redo,
                        ToolbarButton::ClearFormat,
                    ])
                    ->columnSpanFull()
                    ->label('Content (Indonesian)'),

                QuillEditor::make('content_english')
                    ->toolbarButtons([
                        ToolbarButton::Font,
                        ToolbarButton::Size,
                        ToolbarButton::Bold,
                        ToolbarButton::Italic,
                        ToolbarButton::Underline,
                        ToolbarButton::Strike,
                        ToolbarButton::BlockQuote,
                        ToolbarButton::OrderedList,
                        ToolbarButton::UnorderedList,
                        ToolbarButton::Indent,
                        ToolbarButton::Link,
                        ToolbarButton::Image,
                        ToolbarButton::Scripts,
                        ToolbarButton::TextColor,
                        ToolbarButton::BackgroundColor,
                        ToolbarButton::Undo,
                        ToolbarButton::Redo,
                        ToolbarButton::ClearFormat,
                    ])
                    ->columnSpanFull()
                    ->label('Content (English)'),

                // Hidden fields
                Forms\Components\Hidden::make('lang')
                    ->default('en') // Set the default value
                    ->columnSpanFull(),
                Forms\Components\Hidden::make('isPublished')
                    ->default(true) // Set the default value
                    ->columnSpanFull(),
                Forms\Components\Hidden::make('link') // Add the hidden link field
                    ->default(fn($get) => url('/news/' . $get('slug'))) // Dynamically create the URL using the slug field
                    ->columnSpanFull(),
            ])
            ->columns(1); // Global single-column layout
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title_indonesia')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title_english')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->date()
                    ->searchable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
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
