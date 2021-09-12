@extends("app.layout.index")

@section("title",__("default.site_name").' | '.__("default.pages.for_parents.training"))

@section('styles')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet"/>

    <style>

        .tabs-left, .tabs-right {
            border-bottom: none;
            padding-top: 2px;
        }

        .tabs-left {
            border-right: 1px solid #ddd;
        }

        .tabs-right {
            border-left: 1px solid #ddd;
        }

        .tabs-left > li, .tabs-right > li {
            float: none;
            margin-bottom: 2px;
        }

        .tabs-left > li {
            margin-right: -1px;
        }

        .tabs-right > li {
            margin-left: -1px;
        }

        .tabs-left > li.active > a,
        .tabs-left > li.active > a:hover,
        .tabs-left > li.active > a:focus {
            border-bottom-color: #ddd;
            border-right-color: transparent;
        }

        .tabs-right > li.active > a,
        .tabs-right > li.active > a:hover,
        .tabs-right > li.active > a:focus {
            border-bottom: 1px solid #ddd;
            border-left-color: transparent;
        }

        .tabs-left > li > a {
            border-radius: 4px 0 0 4px;
            margin-right: 0;
            display: block;
        }

        .tabs-right > li > a {
            border-radius: 0 4px 4px 0;
            margin-right: 0;
        }

        .tab-menu-container {
            position: relative;
        }

        .fixed-tab-menu {
            position: absolute;
            left: 0;
            z-index: 9999;
            background-color: #fff;
            max-width: 300px;
            transform: translateX(-100%);
        }

        .parents-section {
            min-height: 800px;
        }

        @media screen and (max-width: 767px) {
            .fixed-tab-menu {
                position: static;
                background-color: #fff;
                top: 0;
                max-width: 100%;
                transform: translateX(0%);
                margin-bottom: 30px;
            }
        }
    </style>
@endsection

@section("content")
    <section class="field-bg parents-section">

        @include('app.layout.components.page-title')

        <div class="container">
            <div class="row tab-menu-container">
                <!-- Navigation Buttons -->
                <div class="col-md fixed-tab-menu">
                    <ul class="nav nav-pills nav-stacked" id="myTabs">
                        <li class="active"><a href="#training-content" data-toggle="pill">Тренировки</a></li>
                        <li><a href="#food-content" data-toggle="pill">Питание</a></li>
                        <li><a href="#psychology-content" data-toggle="pill">Психология</a></li>
                    </ul>
                </div>

                <!-- Content -->
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active" id="training-content">

                            <div class="container">
                                <div class="training-steps">
                                    <h2>
                                        {!! __("default.pages.for_parents.training_title") !!}
                                    </h2>

                                    <div class="steps text-center">
                                        <div class="row row--multiline">
                                            <div class="col-sm-4">
                                                <div class="step step__blue">
                                                    <div class="step__icon">
                                                        <img src="/assets/img/step1.svg" alt="">
                                                    </div>
                                                    <div class="step__text">
                                                        {!! __("default.pages.for_parents.step_one_content") !!}
                                                    </div>
                                                    <div class="step__title">{{__("default.pages.for_parents.step_title")}}
                                                        1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="step step__pink">
                                                    <div class="step__icon">
                                                        <img src="/assets/img/step2.svg" alt="">
                                                    </div>
                                                    <div class="step__text">
                                                        {!! __("default.pages.for_parents.step_two_content") !!}
                                                    </div>
                                                    <div class="step__title">{{__("default.pages.for_parents.step_title")}}
                                                        2
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="step step__green">
                                                    <div class="step__icon">
                                                        <img src="/assets/img/step3.svg" alt="">
                                                    </div>
                                                    <div class="step__text">
                                                        {!! __("default.pages.for_parents.step_three_content") !!}
                                                    </div>
                                                    <div class="step__title">{{__("default.pages.for_parents.step_title")}}
                                                        3
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="white-block">
                                        <div class="plain-text plain-text__24">
                                            {!! __("default.pages.for_parents.training_content") !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="food-content">

                            <div class="container">

                                <div class="white-block">
                                    <div class="plain-text plain-text__24">
                                        {!! __("default.pages.for_parents.food_content") !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="psychology-content">

                            <div class="container">

                                <div class="white-block">
                                    <div class="plain-text plain-text__24">
                                        {!! __("default.pages.for_parents.psychology_content") !!}
                                    </div>
                                    <div class="slogan">
                                        <img src="/assets/img/boy-icon.svg" alt="">
                                        <div>
                                            {!! __("default.pages.for_parents.psychology_outro") !!}
                                        </div>
                                        <img src="/assets/img/girl-icon.svg" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        </div>
    </section>
@endsection

@section("scripts")
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
@endsection
