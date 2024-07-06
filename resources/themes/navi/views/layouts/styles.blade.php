{{-- preloaded fonts --}}
<link rel="preload" href="{{ asset('themes/velocity/assets/fonts/font-rango/rango.ttf') . '?o0evyv' }}" as="font" crossorigin="anonymous" />

{{-- bootstrap --}}

{{-- bootstrap flipped for rtl --}}
@if (core()->getCurrentLocale() && core()->getCurrentLocale()->direction === 'rtl')
@endif

{{-- mix versioned compiled file --}}
<link rel="stylesheet" type="text/css" href="{{ asset('/themes/navi/assets/css/velocity.css', 'themes/navi/assets') }}" />

<!-- NEW TEMPLATE -->
<link rel="stylesheet" type="text/css" href="{{ asset('/themes/navi/assets/css/navi/plugins/swiper.min.css', 'themes/navi/assets') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('/themes/navi/assets/css/navi/style.css', 'themes/navi/assets') }}" />
<!-- NEW TEMPLATE -->

{{-- extra css --}}
@stack('css')

{{-- custom css --}}
<style>
    {!! core()->getConfigData('general.content.custom_scripts.custom_css') !!}
</style>
