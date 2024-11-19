@php use Carbon\Carbon; @endphp
<section style="margin-top: 200px;margin-bottom: 200px;">
    <div class="container" style="margin-bottom: 50px;">
        <div class="row">
            <div class="col">
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <h1 class="fs-2 fw-semibold" style="font-family: Campton;color: var(--bs-black);">{{ __("Latest Update") }}</h1><a class="fs-5" href="#" style="color: #292F78;font-family: Campton;">{{ __("More Info") }}&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2929 5.29289C12.6834 4.90237 13.3166 4.90237 13.7071 5.29289L17.7071 9.29289C18.0976 9.68342 18.0976 10.3166 17.7071 10.7071L13.7071 14.7071C13.3166 15.0976 12.6834 15.0976 12.2929 14.7071C11.9024 14.3166 11.9024 13.6834 12.2929 13.2929L14.5858 11H3C2.44772 11 2 10.5523 2 10C2 9.44772 2.44772 9 3 9H14.5858L12.2929 6.70711C11.9024 6.31658 11.9024 5.68342 12.2929 5.29289Z" fill="currentColor"></path>
                        </svg></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-none d-md-block">
        <div class="row" style="margin-bottom: 72px;">
            @if(isset($articles))
                @foreach($articles as $article)
                    <a href="/news/{{ $article->slug }}" style="color: black">
                    <div class="col-md-4" wire:key="{{ $loop->iteration }}">
                        <div><img class="img-fluid" style="margin-bottom: 36px; height: 334px;" src="{{ asset("$article->thumbnail") }}"></div>
                        <p class="fw-light" style="font-family: Campton;color: #8F90A6;">{{ Carbon::parse($article->created_at)->format("F j, Y") }}</p>

                            <h1 class="fs-4 fw-semibold" style="color: var(--bs-black);font-family: Campton;margin-top: 8px;margin-bottom: 8px;">{!! app()->getLocale() == "id" ? $article->title_indonesia : $article->title_english !!}</h1>

                        <p class="fs-5 fw-light" style="color: var(--bs-black);font-family: Campton;">{!! app()->getLocale() == "id"
                            ? \Illuminate\Support\Str::limit($article->content_indonesia, 60, '...')
                            : \Illuminate\Support\Str::limit($article->content_english, 60, '...') !!}</p>
                    </div>
                    </a>
                @endforeach
            @endif
        </div>
    </div>

    <div class="container d-sm-block d-md-none">
        <div class="slick-slider" style="margin-bottom: 72px;">
            @if(isset($articles))
                @foreach($articles as $article)
                    <a href="/news/{{ $article->slug }}" style="color: black">
                    <div class="slick-item">
                        <div class="col-md-4" wire:key="{{ $loop->iteration }}">
                            <div><img class="img-fluid" style="margin-bottom: 36px; height: 334px;" src="{{ asset("$article->thumbnail") }}"></div>
                            <p class="fw-light" style="font-family: Campton;color: #8F90A6;">{{ Carbon::parse($article->created_at)->format("F j, Y") }}</p>

                            <h1 class="fs-4 fw-semibold" style="color: var(--bs-black);font-family: Campton;margin-top: 8px;margin-bottom: 8px;">{!! app()->getLocale() == "id" ? $article->title_indonesia : $article->title_english !!}</h1>

                            <p class="fs-5 fw-light" style="color: var(--bs-black);font-family: Campton;">{!! app()->getLocale() == "id"
                            ? \Illuminate\Support\Str::limit($article->content_indonesia, 60, '...')
                            : \Illuminate\Support\Str::limit($article->content_english, 60, '...') !!}</p>
                        </div>
                    </div>
                    </a>
                @endforeach
            @endif
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.slick-slider').slick({
                dots: false, // untuk menampilkan dot navigasi
                infinite: true, // untuk mengatur infinite scrolling
                speed: 500, // kecepatan transisi
                slidesToShow: 1, // jumlah slide yang tampil per halaman
                slidesToScroll: 1, // jumlah slide yang digulirkan per klik
                adaptiveHeight: true, // untuk menyesuaikan tinggi slider dengan konten
                variableWidth: true,
            });
        });

    </script>

</section>


