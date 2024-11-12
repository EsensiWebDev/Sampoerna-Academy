<?php

namespace App\Livewire\Pages;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class News extends Component
{
    use WithPagination;
    public function render()
    {
        $articles = Article::orderBy("created_at", "DESC")->paginate(7);

        return view('livewire.pages.news', [
            'articles' => $articles
        ]);
    }
}
