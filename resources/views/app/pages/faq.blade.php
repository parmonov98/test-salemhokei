@extends("app.layout.index")

@section("title",__("default.site_name").' | '.__("default.pages.for_parents.whats_start"))

@section("content")
    <div style="background: url(/assets/img/pattern4.png);
    background-size: 1440px; opacity: .75;" class="main-wrapper__bg"></div>

    @include('app.layout.components.page-title')

    <section>
        <div class="container">
            <div class="plain-text plain-text__24 plain-text__thin">
                {!! __("default.pages.faq.faq_annotation") !!}
            </div>

            @if($lang == 'kk')
                <div class="margin-50"><img src="/assets/img/how-to-start_KZ.svg" style="width: 100%" alt=""></div>
            @else
                <div class="margin-50"><img src="/assets/img/how-to-start.svg" style="width: 100%" alt=""></div>
            @endif

            <div class="spoilers spoilers--independent">
                <div class="spoiler">
                    <div class="spoiler__title">
                        <span>{!! __("default.pages.faq.info_title_1") !!}</span>
                    </div>
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            {!! __("default.pages.faq.info_desc_1") !!}
                        </div>
                    </div>
                </div>
                <div class="spoiler">
                    <div class="spoiler__title">
                        <span>{!! __("default.pages.faq.info_title_2") !!}</span>
                    </div>
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            {!! __("default.pages.faq.info_desc_2") !!}
                        </div>
                    </div>
                </div>
                <div class="spoiler">
                    <div class="spoiler__title">
                        <span>{!! __("default.pages.faq.info_title_3") !!}</span>
                    </div>
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            {!! __("default.pages.faq.info_desc_3") !!}
                        </div>
                    </div>
                </div>
                <div class="spoiler">
                    <div class="spoiler__title">
                        <span>{!! __("default.pages.faq.info_title_4") !!}</span>
                    </div>
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            {!! __("default.pages.faq.info_desc_4") !!}
                        </div>
                    </div>
                </div>
                <div class="spoiler">
                    <div class="spoiler__title">
                        <span>{!! __("default.pages.faq.info_title_5") !!}</span>
                    </div>
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            {!! __("default.pages.faq.info_desc_5") !!}
                        </div>
                    </div>
                </div>
                <div class="spoiler">
                    <div class="spoiler__title">
                        <span>{!! __("default.pages.faq.info_title_6") !!}</span>
                    </div>
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            {!! __("default.pages.faq.info_desc_6") !!}
                        </div>
                    </div>
                </div>
                <div class="spoiler">
                    <div class="spoiler__title">
                        <span>{!! __("default.pages.faq.info_title_7") !!}</span>
                    </div>
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            {!! __("default.pages.faq.info_desc_7") !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection

@section("scripts")

@endsection
