<header class="header">
    <div class="container">
        <div class="logo">
            <a href="/{{ $lang }}" title="Главная">
                <img class="logo_img" src="/assets/img/logo.svg" alt="">
                <img class="mobile_logo_img" src="/assets/img/salem-hokkey-logo.png" alt="">
            </a>
        </div>
        <div class="menu-btn-wrapper">
            <div class="menu-btn">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="header-right">
            <div class="header-right__top">
                {{-- <a href="#" title="instagram:salem.hokei" class="btn"><i class="icon-instagram"></i>
          <span>salem.hokei</span></a>
        <a href="#" title="play air hockey" class="btn btn--red"><i class="icon-air-hockey"></i> <span>play air
            hockey</span></a>
        <a href="#request" data-fancybox="" title="{{ __('default.pages.header.contact_us') }}"
                class="btn btn--dark"><i class="icon-envelope"></i>
                <span>{{ __('default.pages.header.contact_us') }}</span></a> --}}

            </div>
            @if ($lang == 'kk')
            <nav class="menu menu--kk">@else<nav class="menu">
                    @endif
                    {{-- <ul>
        <li><a href="/{{ $lang . '/about' }}" title="{{ __('default.pages.header.about') }}"><span
                        data-title="{{ __('default.pages.header.about') }}">{{ __('default.pages.header.about') }}</span></a>
                    </li>
                    <li><a href="/{{ $lang . '/schools' }}" title="{{ __('default.pages.header.schools') }}"><span
                                data-title="{{ __('default.pages.header.schools') }}">{{ __('default.pages.header.schools') }}</span></a>
                    </li>
                    <li>
                        <a href="javascript:;" title="{{ __('default.pages.header.to_parents') }}">
                            <span
                                data-title="{{ __('default.pages.header.to_parents') }}">{{ __('default.pages.header.to_parents') }}</span>
                        </a>

                    </li>
                    <li><a href="/{{ $lang . '/equipment' }}" title="{{ __('default.pages.header.equipment') }}"><span
                                data-title="{{ __('default.pages.header.equipment') }}">{{ __('default.pages.header.equipment') }}</span></a>
                    </li>
                    <li><a href="/{{ $lang . '/faq' }}" title="{{ __('default.pages.header.equipment') }}"><span
                                data-title="{{ __('default.pages.for_parents.whats_start') }}">{{ __('default.pages.for_parents.whats_start') }}</span></a>
                    </li>
                    <li>
                        <a href="/{{ $lang . '/news' }}" title="{{ __('default.pages.header.news') }}">
                            <span
                                data-title="{{ __('default.pages.header.news') }}">{{ __('default.pages.header.news') }}</span>
                        </a>
                    </li>
                    <li>

                    </li>
                    </ul> --}}

                    <div class="row">
                        <a href="/{{ $lang}}/" title="instagram:salem.hokei" class="btn" style="padding-right: 2em;">
                        SALEM!
                        </a>

                        {!! $MyNavBar->asUl() !!}

                        <div class="language" style="padding-left: 2em;">
                            @if ($lang == 'ru')
                            <a href="/kk{{ $uri }}" title="KZ">KZ</a><span>|</span><a href="/ru{{ $uri }}" title="RU"
                                class="active">RU</a>
                            @else
                            <a href="/kk{{ $uri }}" title="KZ" class="active">KZ</a><span>|</span><a
                                href="/ru{{ $uri }}" title="RU">RU</a>
                            @endif
                        </div>

                    </div>

                </nav>
        </div>
    </div>
</header>
{{-- //YOU MUST HAVE JQUERY LOADED BEFORE menu scripts --}}
{{-- @push('scripts')
  {!! Menu::scripts() !!}
@endpush --}}
