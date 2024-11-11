<section id="news" style="{{ is_null($article) ? "background-color: #2b3035" : ""}}">

    @if(is_null($article))
        <div style="color: white;display: flex; justify-content: center; align-items: center; height: 100vh;">
            <h1>{{ __("Article Not Found") }}</h1>
        </div>
    @else
        <section>
            <div class="d-flex align-items-end" style="height: 600px;background: url({{ asset("storage/$article->thumbnail") }}) center / cover no-repeat;">
                <div class="container" style="padding-bottom: 64px;">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 style="font-family: Campton;color: var(--bs-white);">{{ $article->title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif


        <section id="content" class="px-4 py-4">
                {!! app()->getLocale() == 'id' ? $article->content_indonesia : $article->content_english !!}
        </section>

</section>

