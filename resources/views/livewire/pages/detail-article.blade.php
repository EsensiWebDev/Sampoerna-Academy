<section id="news" style="{{ is_null($article) ? 'background-color: #2b3035' : '' }}">
    @if (is_null($article))
        <div style="color: white;display: flex; justify-content: center; align-items: center; height: 100vh;">
            <h1>{{ __('Article Not Found') }}</h1>
        </div>
    @else
        <section>
            <div class="d-flex align-items-end"
                style="height: 600px;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0) 100%),
        url('{{ asset($article->thumbnail) }}') center / cover no-repeat,
        linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0) 100%);">

                <div class="container" style="padding-bottom: 64px;">
                    <div class="row">
                        <div class="col-md-12">
                            @php
                                $locale = app()->getLocale();
                                $title = '';
                                $content = '';

                                if ($locale == 'id') {
                                    $title = !is_null($article->title_indonesia)
                                        ? $article->title_indonesia
                                        : $article->title_english;
                                } elseif ($locale == 'en') {
                                    $title = !is_null($article->title_english)
                                        ? $article->title_english
                                        : $article->title_indonesia;
                                }

                                if ($locale == 'id') {
                                    $content = !is_null($article->content_indonesia)
                                        ? $article->content_indonesia
                                        : $article->content_english;
                                } elseif ($locale == 'en') {
                                    $content = !is_null($article->content_english)
                                        ? $article->content_english
                                        : $article->content_indonesia;
                                }
                            @endphp

                            <h1 style="font-family: Campton; color: var(--bs-white);">{!! $title !!}</h1>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    @endif


    <section id="content" class="px-4 py-4 mx-4">
        {!! $content !!}
    </section>
    @include('components.form')

</section>
