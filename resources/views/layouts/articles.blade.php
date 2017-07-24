@extends($pageTheme.'page-layouts.default')

@section("title", "You Me and the Gospel")

@section('body')
<div class="article-page">
    @section('header')
        @include("partials.header")
    @show
</div>

<!-- main page content  -->
<main>
    @yield('content')
</main>

<!-- footer -->
@section('footer')
    @include($pageTheme.'shared.footer')
@show

@endsection

