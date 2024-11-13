<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use App\Filament\Resources\ArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;

    protected function afterCreate()
    {
        $article = $this->record; // Menangkap model article yang baru dibuat

        if ($article) {
            \SEO\Seo::save($article, route('read-article', $article->slugs), [
                'title' => $article->title_indonesia,
            ]);
        }
    }
}
