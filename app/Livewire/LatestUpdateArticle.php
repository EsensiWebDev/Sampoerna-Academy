<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy]
class LatestUpdateArticle extends Component
{
    public ?string $articleFor = "ALL";

    public function detailPage() {
        $this->js("alert('asd')");
    }


    public function placeholder()
    {
        return <<<'HTML'
            <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>

        HTML;
    }

    public function render()
    {
        $articles = Article::where('article_for', $this->articleFor)
            ->orderBy('created_at', 'DESC')
            ->get();


        return view('livewire.latest-update-article', [
            "articles" => $articles
        ]);
    }
}
