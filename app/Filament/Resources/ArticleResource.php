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
                Forms\Components\Toggle::make('isPublished') // Add the toggle field
                    ->label('Publish Article') // Label for the toggle
                    ->onColor('success') // Optional: Add a color when it's enabled
                    ->offColor('danger') // Optional: Add a color when it's disabled
                    ->default(true) // Set the default value (Published)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->minLength(5)
                    ->maxLength(255)
                    ->unique('articles', 'slug', ignoreRecord: true),
                Forms\Components\DatePicker::make('created_at') // Add the created_at field
                    ->default(now()) // Default to today's date
                    ->required()
                    ->label('Created At'),
                Forms\Components\TextInput::make('title_indonesia')
                    ->minLength(5)
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('title_english')
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
                    ->label('Thumbnail'),
                Forms\Components\RichEditor::make('content_indonesia')
                    ->columnSpan(4),
                Forms\Components\RichEditor::make('content_english')
                    ->columnSpan(4),
                Forms\Components\Hidden::make('lang')
                    ->default('id') // Set the default value
                    ->columnSpanFull(),
                Forms\Components\Hidden::make('link') // Add the hidden link field
                    ->default(fn($get) => url('/news/' . $get('slug'))) // Dynamically create the URL using the slug field
                    ->columnSpanFull(),
            ])
            ->columns(1);
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
