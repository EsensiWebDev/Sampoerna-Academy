<section id="news" style="{{ is_null($article) ? 'background-color: #2b3035' : '' }}">
    @if (is_null($article))
        <div style="color: white;display: flex; justify-content: center; align-items: center; height: 100vh;">
            <h1>{{ __('Article Not Found') }}</h1>
        </div>
    @else
        <section>

            <div class="d-flex align-items-end"
                style="height: 600px; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0) 100%),url('{{ asset($article->thumbnail) }}') center / cover no-repeat,linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0) 100%);">

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


    <section id="content" class="px-md-4 py-4 mx-4">
        <div class="row px-md-4 py-md-5">
            <div class="col-md-9 col-sm-12 pe-md-5">
                {!! $content !!}
            </div>
            <div class="col-md-3 col-sm-12" >
                <h3 style="color:#8a8a8a">Recent Post</h3>
                <div class="d-flex flex-column">
                    @if (isset($articles) && $articles->count() > 1)
                        @foreach ($articles as $article)
                            <div class="mt-4 rounded" style="background-color: #292F78;"
                                wire:key="{{ $loop->iteration }}">
                                <a href="/news/{{ $article->slug }}" style="color: black">
                                    <div>

                                        <img class="img-fluid rounded-top"
                                            style="margin-bottom: 36px; height: 204px; width: 100%; object-fit: cover;"
                                            src="{{ asset($article->thumbnail) }}" alt="Article Thumbnail">
                                    </div>

                                    @php
                                        $locale = app()->getLocale();
                                        $title =
                                            $locale == 'id'
                                                ? $article->title_indonesia ?? $article->title_english
                                                : $article->title_english ?? $article->title_indonesia;
                                        $content =
                                            $locale == 'id'
                                                ? \Illuminate\Support\Str::limit(
                                                    preg_replace(
                                                        '/$$[^$$]*$$/',
                                                        '',
                                                        strip_tags($article->content_indonesia),
                                                    ),
                                                    100,
                                                    '...',
                                                )
                                                : \Illuminate\Support\Str::limit(
                                                    preg_replace(
                                                        '/$$[^$$]*$$/',
                                                        '',
                                                        strip_tags($article->content_english),
                                                    ),
                                                    100,
                                                    '...',
                                                );
                                    @endphp

                                    <div class="px-4">

                                        <p class="fw-light" style="font-family: Campton; color: white;">
                                            {{ \Carbon\Carbon::parse($article->created_at)->format('F j, Y') }}
                                        </p>
                                        <h1 class="fs-5 fw-semibold"
                                            style="color: var(--bs-white); font-family: Campton; margin-top: 8px; margin-bottom: 8px;">
                                            {!! $title !!}
                                        </h1>
                                        <p class=" fw-light"
                                            style="color: var(--bs-white); font-family: Campton; word-wrap: break-word;">
                                            {!! $content !!}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
    </section>
    @include('components.form')

</section>
