@include('include-site.header')
<div class="page-content">
{{--    @include('include-site.main-slider')--}}
    @yield('content')
    @include('include-site.footer')
    <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span></button>
</div>
