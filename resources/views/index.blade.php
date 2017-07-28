@extends($pageTheme.'page-layouts.default')

@section("title", "You Me and The Gospel")

@section('body')
 @include("partials.site-nav")
    <div class="cover-fold stage">
        <header class="landing" data-aos="fade-up">
            <section class="cover">
                <div class="layout-table">
                    <div class="layout-row">
                        <div class="logo">
                            <img src="/img/ymgospel.png" alt="Logo">
                        </div>
                    </div>
                </div>
            </section>
        </header>
    </div>

    <div class="stage-featured clearfix" layout="row">

        @if(count($featured))
            @foreach($featured as $feature)
                <div class="card col-md-4" style="background-image: url({{$feature->post_thumbnail}}?w=640)">
                    @component("components.card", ['title' => $feature->title, "url" => "/articles/".$feature->id ])
                        {{ $feature->excerpt }}
                    @endcomponent
                </div>
            @endforeach
        @endif

    </div>
    <section class="container">
        <div class="word">
            <div class="flex-center">
                <div class="text-center">
                    <p class="text-center">(THE WORD)</p>
                    <h1 class="oswald">"By this everyone will know that you are my disciples, if you love one another."</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="text-left">
        <div class="container ">
            <section class="row">
                @include("articles.index")
            </section>
        </div>
    </section>

    @include($pageTheme.'shared.footer')

@endsection
