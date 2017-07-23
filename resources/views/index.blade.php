@extends($pageTheme.'page-layouts.default')

@section("title", "Me You and The Gospel")

@section('body')

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
                <div class="card col-md-4" style="background-image: url({{$feature->post_thumbnail}})">
                    @component("components.card", ['title' => $feature->title])
                        {{ $feature->excerpt }}
                    @endcomponent
                </div>
            @endforeach
        @endif

    </div>

    <section class="text-left">

        <div class="container">
            <div class="row">
                @include("articles.index")
            </div>
        </div>
    </section>

    @include($pageTheme.'shared.footer')



@endsection
