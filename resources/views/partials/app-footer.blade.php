<footer class="app-footer">
    <div class="site-footer-right">

        <div style="clear: both; float: right; max-width: 200px; width: 40%; margin-bottom: 10px;margin-right: 10px;text-align: right;">
            <img class="img-responsive" src="{{voyager_asset('/images/LOGO_FDER_transparente_1_0.webp')}}">
            <br>
            @php $version = Voyager::getVersion(); @endphp
            @if (!empty($version))
                {{ $version }}
            @endif
        </div>
{{--        @if (rand(1,100) == 100)--}}
{{--            <i class="voyager-rum-1"></i> {{ __('voyager::theme.footer_copyright2') }}--}}
{{--        @else--}}
{{--            {!! __('voyager::theme.footer_copyright') !!} <a href="http://thecontrolgroup.com" target="_blank">The Control Group</a>--}}
{{--        @endif--}}
{{--        @php $version = Voyager::getVersion(); @endphp--}}
{{--        @if (!empty($version))--}}
{{--            - {{ $version }}--}}
{{--        @endif--}}
    </div>
</footer>
