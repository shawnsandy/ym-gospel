<div layout="row bottom-left">
    <div class="">
            <div class="card-title text-uppercase h2 oswald text-left">
                <a href="">{{ $title or "The Post Title" }}</a>
            </div>

            <p class="card-description text-left lead">
                {{ $slot }}
            </p>
    </div>
</div>

