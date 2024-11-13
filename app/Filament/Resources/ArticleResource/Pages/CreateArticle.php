<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use App\Filament\Resources\ArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Log;

class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;

    protected function afterCreate()
    {
        $article = $this->record; // Menangkap model article yang baru dibuat

        Log::info($article);

        if ($article) {
            \SEO\Seo::save($article, route('read-article', $article->slugs), [
                'title' => $article->title_indonesia,
            ]);
        }
    }
}
