<section id="news">
    <section>
        <div class="d-flex align-items-end"
            style="height: 600px;background: url(&quot;assets/img/Banner/banner%20news.webp&quot;) center / cover no-repeat;">
            <div class="container" style="padding-bottom: 64px;">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="font-family: Campton;color: var(--bs-white);">{{ __('Latest Updates') }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-top: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @php
                        $article = \App\Models\Article::orderBy('created_at', 'DESC')->first();

                    @endphp

                    @if (isset($article) && $article->isPublished)
                        <div class="d-flex flex-row justify-content-start align-items-end"
                            style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 100%), url('{{ asset("{$article->thumbnail}") }}') center / cover no-repeat; height: 676px;">

                            <div class="flex-fill px-5" style="padding-left: 140px;padding-bottom: 36px;">
                                @php
                                    $locale = app()->getLocale();
                                    $title = '';
                                    $content = '';

                                    // Tentukan judul berdasarkan locale
                                    if ($locale == 'id') {
                                        $title = $article->title_indonesia ?? $article->title_english;
                                    } elseif ($locale == 'en') {
                                        $title = $article->title_english ?? $article->title_indonesia;
                                    }

                                    // Tentukan konten berdasarkan locale
                                    if ($locale == 'id') {
                                        $content =
                                            \Illuminate\Support\Str::limit($article->content_indonesia, 250, '...') ??
                                            \Illuminate\Support\Str::limit($article->content_english, 250, '...');
                                    } elseif ($locale == 'en') {
                                        $content =
                                            \Illuminate\Support\Str::limit($article->content_english, 250, '...') ??
                                            \Illuminate\Support\Str::limit($article->content_indonesia, 250, '...');
                                    }
                                @endphp

                                <h1 class="fs-4 fw-semibold"
                                    style="color: var(--bs-black);font-family: Campton;margin-top: 8px;margin-bottom: 8px;">
                                    {!! $title !!}
                                </h1>
                                <p class="fw-light"
                                    style="font-family: Campton;color: var(--bs-black);color:black!important;margin-top: 10px;">
                                    {!! $content !!}
                                </p>
                                <a href="/news/{{ $article->slug }}"
                                    style="font-family: Campton;color: #292F78;">{{ __('Read More') }}&nbsp;
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 20 20" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.2929 5.29289C12.6834 4.90237 13.3166 4.90237 13.7071 5.29289L17.7071 9.29289C18.0976 9.68342 18.0976 10.3166 17.7071 10.7071L13.7071 14.7071C13.3166 15.0976 12.6834 15.0976 12.2929 14.7071C11.9024 14.3166 11.9024 13.6834 12.2929 13.2929L14.5858 11H3C2.44772 11 2 10.5523 2 10C2 9.44772 2.44772 9 3 9H14.5858L12.2929 6.70711C11.9024 6.31658 11.9024 5.68342 12.2929 5.29289Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>

    <section style="margin-top: 80px;margin-bottom: 280px;">
        <div class="container">
            <div class="row">
                @if (isset($articles) && $articles->count() > 1)
                    @foreach ($articles->skip(1) as $article)
                        <div class="col-md-6 col-sm-12 col-lg-4 py-4 px-3" wire:key="{{ $loop->iteration }}">
                            <a href="/news/{{ $article->slug }}" style="color: black">
                                <div>
                                    <img class="img-fluid"
                                        style="margin-bottom: 36px; height: 334px; width: 100%; object-fit: cover;"
                                        src="{{ asset($article->thumbnail) }}" alt="Article Thumbnail">
                                </div>
                                <p class="fw-light" style="font-family: Campton; color: #8F90A6;">
                                    {{ \Carbon\Carbon::parse($article->created_at)->format('F j, Y') }}
                                </p>
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
                                                preg_replace('/$$[^$$]*$$/', '', strip_tags($article->content_english)),
                                                100,
                                                '...',
                                            );
                                @endphp

                                <h1 class="fs-4 fw-semibold"
                                    style="color: var(--bs-black); font-family: Campton; margin-top: 8px; margin-bottom: 8px;">
                                    {!! $title !!}
                                </h1>
                                <p class="fs-5 fw-light"
                                    style="color: var(--bs-black); font-family: Campton; word-wrap: break-word;">
                                    {!! $content !!}
                                </p>
                            </a>
                        </div>
                    @endforeach
                @else
                    <h1>This does not have the latest update</h1>
                @endif

            </div>

            {{-- ini pagination --}}
            @if ($articles->hasPages())
                <div class="row justify-content-center">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="pagination-container">
                            {{ $articles->onEachSide(0)->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            @endif
        </div>

    </section>
    @include('components.form')

</section>
