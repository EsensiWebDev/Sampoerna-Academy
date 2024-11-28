<?php

namespace App\Livewire\Pages;

use App\Models\Article;
use Livewire\Component;

class DetailArticle extends Component
{
    public string $slug;

    public function render()
    {
        // Get the current article by its slug
        $article = Article::where('slug', $this->slug)->first();

        // Get 3 random articles excluding the current article based on its slug
        $articles = Article::where('slug', '!=', $this->slug)
            ->inRandomOrder()  // Randomize the result
            ->paginate(3);     // Paginate the result to 3 articles per page

        return view('livewire.pages.detail-article', compact('article', 'articles'));
    }

    public function detailPage(string $slug)
    {
        $this->redirect("/articles/{$slug}");
    }
}

