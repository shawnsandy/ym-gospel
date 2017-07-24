@if(empty($articles))
    <p class="alert alert-info lead text-center">
        Sorry no articles found
    </p>
@else
    @foreach($articles as $article)
        <div class="col-md-6 articles">

            <article>
                <p class="h2 oswald text-uppercase" >{{ $article->title }}</p>
                <p><img class="img-responsive" src="{{ $article->post_thumbnail }}?w=550&h=316&fit=crop-center" alt="cover image"></p>
                <p class=""><small>{{ $article->created_since }}</small></p>

                <div class="content">
                    <p class="description">
                        {{ $article->the_excerpt }}
                    </p>
                    <p class="text-right">
                        <a class="btn btn-default" href="/articles/{{ $article->id }}">Read Article</a>
                    </p>
                </div>
            </article>

        </div>

    @endforeach
    <div class="text-center">{{ $articles->links() }}</div>
@endif
