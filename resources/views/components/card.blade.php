<div layout="row top-center">
    <div class="">
            <div class="card-title text-uppercase h1 oswald text-left">
                <a href="{{ $url }}">{{ $title or "The Post Title" }}</a>
            </div>

            <p class="card-description text-left lead">
                {{ $slot }}
            </p>
    </div>
</div>

