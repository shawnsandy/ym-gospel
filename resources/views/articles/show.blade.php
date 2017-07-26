@if(empty($article))

    <p class="alert alert-info lead">
        Sorry no articles found
    </p>

@else

    <div class="col-md-12">
        <div class="text-center">
            @include("partials.social-icons")
        </div>

        <article>

            <p><img src="{{ $article->post_thumbnail }}?w=1200&h=640&fit=crop-center" class="img-responsive"></p>
            <div class="article-body">
                <h1 class="oswald h1">{{ $article->title }}</h1>
                <p>
                    {{ $article->created_since }}
                </p>

                {!! $article->body !!}

            </div>
        </article>

    </div>

@endif
