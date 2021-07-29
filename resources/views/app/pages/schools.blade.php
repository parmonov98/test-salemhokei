@extends("app.layout.index")

@section("title",__("default.site_name").' | '.__("default.pages.schools.title"))

@section("content")
    <div style="background-image: url(/assets/img/pattern1.png);
    background-size: 1440px; opacity: .5;" class="main-wrapper__bg"></div>

    <section class="blue-title">
        <div class="container">
            <div class="title-block text-center">
                <h1 class="title-primary">{{ __("default.pages.schools.title") }}</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="title-block">
                <div class="row row--multiline">
                    <div class="col-auto">
                        <form action="">
                            <select name="type" class="chosen input-regular auto-width no-search"
                                    onchange="$(this).closest('form').submit()"
                                    data-placeholder="{{ __("default.pages.schools.choose_region") }}" required>
                                <option class="hidden" value="" selected
                                        disabled>{{ __("default.pages.schools.choose_region") }}</option>
                                @foreach($regions as $region)
                                    <option value="{!! $region->getAttribute('id')!!}">{!! $region->getAttribute('name_'.$lang) ?? $region->getAttribute('name_ru') !!}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                </div>
            </div>

            <div class="margin-50">
                @foreach($schools as $school)
                    <div class="school">
                        <div class="row row--multiline">
                            <div class="col-sm-4">
                                <div class="school__img">
                                    <img src="{!! $school->avatar!!}" alt="">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="school-desc">
                                    <h3 class="school__title">{!! $school->getAttribute('name_'.$lang) ?? $school->getAttribute('name_ru') !!}</h3>
                                    <div class="school__text">
                                        <p>{!! $school->getAttribute('annotation_'.$lang) ?? $school->getAttribute('annotation_ru') !!}</p>
                                    </div>
                                    <a href="/{{$lang}}/school/{{$school->alias}}" title="{{ __("default.pages.schools.detail") }}" class="btn btn--arrow btn--red">{{ __("default.pages.schools.detail") }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{--<div class="margin-50">--}}
                {{--<div class="row row--multiline">--}}
                    {{--@foreach($schools as $school)--}}
                        {{--<div class="col-sm-6 col-md-6">--}}
                            {{--<a href="/{{$lang}}/school/{{$school->alias}}" title="" class="card">--}}
                                {{--<div class="card__img">--}}
                                    {{--<img src="{!! $school->avatar!!}" alt="">--}}
                                {{--</div>--}}
                                {{--<h4 class="card__title">{!! $school->getAttribute('name_'.$lang) ?? $school->getAttribute('name_ru') !!}</h4>--}}
                                {{--<span class="card__annotation">{!! $school->regions[0]->getAttribute('name_'.$lang) ?? $school->regions[0]->getAttribute('name_'.$lang) !!}</span>--}}
                                {{--<hr>--}}
                                {{--<span class="btn btn--arrow btn--red">{{ __("default.pages.schools.detail") }}</span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            {{--</div>--}}

            <ul class="pagination">
                {{ $schools->links('app.pages.paginate') }}
            </ul>
        </div>
    </section>
@endsection

@section("scripts")

@endsection
