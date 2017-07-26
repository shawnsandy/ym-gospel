@if(empty($articles))
    <p class="alert alert-info lead text-center">
        Sorry no articles found
    </p>
@else
    @foreach($articles as $article)
        <div class="col-md-6 articles">

            <article>


                    <a class="" href="/articles/{{ $article->id }}">
                        <img class="img-responsive" src="{{ $article->post_thumbnail }}?w=550&h=316&fit=crop-center" alt="cover image">
                    </a>


                <p class="h2 oswald text-uppercase" >{{ $article->title }}</p>

                <p class="text-muted"><small>POSTED {{ $article->created_since }}</small></p>

                <div class="content">
                    <div class="description">

                       <p> {{ $article->the_excerpt }}</p>

                    </div>
                    <p class="text-right">
                        <a class="btn btn-default" href="/articles/{{ $article->id }}">Read Article</a>
                    </p>
                </div>

            </article>

        </div>

    @endforeach
    <div class="text-center">{{ $articles->links() }}</div>
@endif
