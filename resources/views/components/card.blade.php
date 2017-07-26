<div layout="row bottom-center">

    <div class="">
        <div class="card-description text-left">
            <div class="card-title text-uppercase h1 oswald text-left">
                <a href="{{ $url }}">{{ $title or "The Post Title" }}</a>
            </div>
            <div class="lead">
                {{ Extras::str_limit($slot, 40) }}
            </div>
        </div>
    </div>

</div>

