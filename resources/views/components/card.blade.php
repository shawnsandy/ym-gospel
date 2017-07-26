<div layout="row bottom-center">
    <div class="">
            <div class="card-title text-uppercase h1 oswald text-left">
                <a href="{{ $url }}">{{ $title or "The Post Title" }}</a>
            </div>

            <p class="card-description text-left lead">
                {{ Extras::str_limit($slot, 40) }}
            </p>
    </div>
</div>

