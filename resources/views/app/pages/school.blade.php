@extends("app.layout.index")

@section("title",__("default.site_name").' | '.$item->getAttribute('name_'.$lang) ?? $item->getAttribute('name_ru'))

@section("content")
    <div style="background-image: url(/assets/img/pattern1.png);
    background-size: 1440px; opacity: .5;" class="main-wrapper__bg"></div>
    <section>
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="/{{$lang}}"
                       title="{{ __("default.pages.main.title") }}">{{ __("default.pages.main.title") }}</a></li>
                <li><a href="/{{$lang}}/schools" title="{{ __("default.pages.schools.title") }}">{{ __("default.pages.schools.title") }}</a></li>
                <li><span>{!! $item->getAttribute('name_'.$lang) ?? $item->getAttribute('name_ru') !!}</span></li>
            </ul>
            <article class="article">
                <div class="title-block">
                    <h1 class="title-primary">{!! $item->getAttribute('name_'.$lang) ?? $item->getAttribute('name_ru') !!}</h1>
                </div>


                <div class="row row--multiline">
                    <div class="col-sm-5 col-md-4">
                        <div class="article-sidebar margin-50">
                            <img src="{!! $item->avatar !!}" class="article__image article__image--school" alt="">
                            <div class="text-center">
                                <a href="#testLesson" title="{{ __("default.pages.schools.testLesson") }}" data-fancybox="" class="btn">{{ __("default.pages.schools.testLesson") }}</a>
                            </div>
                        </div>
                        <div class="share">
                            <span>{{ __("default.pages.schools.share") }}:</span>
                            <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                            <script src="https://yastatic.net/share2/share.js"></script>
                            <div class="ya-share2" data-services="vkontakte,facebook,twitter,whatsapp,telegram"></div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-8">
                        <div class="plain-text">
                            <p><strong>{!! $item->regions[0]->getAttribute('name_'.$lang) ?? $item->regions[0]->getAttribute('name_ru') !!}</strong></p>
                            {!! $item->getAttribute('annotation_'.$lang) ?? $item->getAttribute('annotation_ru') !!}<br>
                            {!! $item->getAttribute('description_'.$lang) ?? $item->getAttribute('description_ru') !!}
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
@endsection

@section("scripts")

@endsection
