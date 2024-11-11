<?php

namespace App\Livewire\Pages;

use App\Models\Article;
use Livewire\Component;

class DetailArticle extends Component
{
    public string $slug;

    public function render()
    {
        $article = Article::where('slugs', $this->slug)->first();

        return view('livewire.pages.detail-article', compact('article'));
    }

    public function detailPage(string $slugs) {
        $this->redirect("/articles/{$slugs}");
    }
}
