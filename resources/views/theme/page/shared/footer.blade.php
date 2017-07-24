<footer class="" data-aos="fade">
    <div class="col-md-12 text-center">
        @include("partials.social-icons")
    </div>
    <div class="layout-table">
        <div class="layout-row">

 <p> {{ config('pagekit.conpany_name', 'PageKit') }}. {{ config( 'pagekit.address', 'Company Address' ) }}
            &copy; All right reserved
            </p>
            <p>
                <small>Powered by Laravel {{ App::VERSION() }}.</small>
            </p>
        </div>
    </div>
</footer>
