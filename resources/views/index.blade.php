@extends($pageTheme.'page-layouts.default')

@section("Title", "Me You and The Gospel")

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
    <div class="stage-featured clearfix">

        <div class="col-md-6 card" style="background-image: url(/img/love-in-sand@0,75x.jpg);">
            @component("components.card", ['title' => "The Gospel?"])
                Globally restore proactive e-services and cost effective relationships. Seamlessly coordinate collaborative platforms.
            @endcomponent
        </div>
        <div class="col-md-6 card" style="background-image: url(/img/love-in-sand@0,75x.jpg);">
            @component("components.card", ['title' => 'You Me and the Gospel'])
                Globally restore proactive e-services and cost effective relationships. Seamlessly coordinate collaborative platforms.
            @endcomponent
        </div>

    </div>

    <section class="sub-header text-center">

        <div class="container">
            <h1>
                Just add content
            </h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est error quae nostrum beatae,
                iusto accusantium repudiandae accusamus veritatis, voluptatum nesciunt dolorem aspernatur saepe a
                asperiores.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea doloribus similique officiis laudantium
                ratione praesentium. Voluptatibus, commodi saepe molestias ea iure optio dignissimos. Non, iusto.
            </p>
        </div>
    </section>

    @include($pageTheme.'shared.footer')



@endsection
