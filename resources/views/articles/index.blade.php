@if(empty($articles))
    <p class="alert alert-info lead text-center">
        Sorry no articles found
    </p>
@else
    @foreach($articles as $article)
        <div class="col-md-6">

            <article>
                <p class="h2 oswald text-uppercase" >{{ $article->title }}</p>
                <p><img class="img-responsive" src="{{ $article->post_thumbnail }}?w=1200" alt="cover image"></p>
                <p class=""><small>{{ $article->created_since }}</small></p>

                <div class="content">
                    <p>
                        {{ $article->the_excerpt }}
                    </p>
                    <p class="text-right">
                        <a class="btn btn-default" href="/articles/{{ $article->id }}">Read Article</a>
                    </p>
                </div>
                <hr>
            </article>

        </div>

    @endforeach
@endif
