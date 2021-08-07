@extends("app.layout.index")

@section('styles')

    <link rel="stylesheet" href="{{asset('assets/css/video.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/JiSlider.css')}}">
    <style>
        #JiSlider {
            width: 100%;
            height: 100%;
        }
    </style>
@endsection

@section('title', __('default.site_name'))



@section('content')
  <div style="background-image: url(/assets/img/pattern1.png);
                                background-size: 1440px; opacity: .5;" class="main-wrapper__bg"></div>

  @if ($lang == 'kk')
    <section class="banner">

    <div class='player-container'>
      <div class='player'>
      <video id='video'  src='https://player.vimeo.com/external/271851475.sd.mp4?s=1a5c9b2541b420c133ded968b7c042fda26a8c0e&profile_id=165' autoplay="true" muted="muted" playsinline></video>
        <div class='play-btn-big'></div>
        <div class='controls'>
          <div class="time"><span class="time-current"></span><span class="time-total"></span></div>
          <div class='progress'>
            <div class='progress-filled'></div>
          </div>
          <div class='controls-main'>
            <div class='controls-left'>
              <div class='volume'>
                <div class='volume-btn loud'>
                  <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.75497 17.6928H2C0.89543 17.6928 0 16.7973 0 15.6928V8.30611C0 7.20152 0.895431 6.30611 2 6.30611H6.75504L13.9555 0.237289C14.6058 -0.310807 15.6 0.151473 15.6 1.00191V22.997C15.6 23.8475 14.6058 24.3098 13.9555 23.7617L6.75497 17.6928Z" transform="translate(0 0.000518799)" fill="white"/>
                    <path id="volume-low" d="M0 9.87787C2.87188 9.87787 5.2 7.66663 5.2 4.93893C5.2 2.21124 2.87188 0 0 0V2C1.86563 2 3.2 3.41162 3.2 4.93893C3.2 6.46625 1.86563 7.87787 0 7.87787V9.87787Z" transform="translate(17.3333 7.44955)" fill="white"/>

                    <path id="volume-high" d="M0 16.4631C4.78647 16.4631 8.66667 12.7777 8.66667 8.23157C8.66667 3.68539 4.78647 0 0 0V2C3.78022 2 6.66667 4.88577 6.66667 8.23157C6.66667 11.5773 3.78022 14.4631 0 14.4631V16.4631Z" transform="translate(17.3333 4.15689)" fill="white"/>
                <path id="volume-off" d="M1.22565 0L0 1.16412L3.06413 4.0744L0 6.98471L1.22565 8.14883L4.28978 5.23853L7.35391 8.14883L8.57956 6.98471L5.51544 4.0744L8.57956 1.16412L7.35391 0L4.28978 2.91031L1.22565 0Z" transform="translate(17.3769 8.31403)" fill="white"/>
                  </svg>

                </div>
                <div class='volume-slider'>
                  <div class='volume-filled'></div>
                </div>
              </div>
            </div>
            <div class='play-btn paused'></div>
            <div class="controls-right">
              <div class='fullscreen'>
                <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z" transform="translate(2 2)" fill="white"/>
      </svg>


      </div>
            </div>
        </div>
      </div>
    </div>
      {{-- <video class="w-100" autoplay loop controls>
        <source src="/assets/Tech-Hockey-Intro-Video.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support the video tag.
      </video> --}}
      {{-- <a href="#" title="{{ __('default.pages.main.details') }}">
        <img src="/assets/img/banner_KZ.jpg" alt="" class="hidden-xs">
        <img src="/assets/img/banner_mob_KZ.jpg" alt="" class="hidden-sm hidden-md hidden-lg">
      </a> --}}
    </section>
  @else
    <section class="banner">
        <div id="JiSlider" class="jislider">
            <ul>
                <li>
                    <div class="video-player">
                        <video src="{{asset('assets/videos/Tech-Hockey-Intro-Video.mp4')}}" poster="{{asset('assets/videos/thumbnail-video.png')}}" class="video"></video>
                        <div class="player-controls">
                            <button class="play-button" title="Play">►</button>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="video-player">
                        <video src="{{asset('assets/videos/Tech-Hockey-Intro-Video.mp4')}}" poster="{{asset('assets/videos/thumbnail-video.png')}}" class="video"></video>
                        <div class="player-controls">
                            <button class="play-button" title="Play">►</button>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="video-player">
                        <video src="{{asset('assets/videos/Tech-Hockey-Intro-Video.mp4')}}" poster="{{asset('assets/videos/thumbnail-video.png')}}" class="video"></video>
                        <div class="player-controls">
                            <button class="play-button" title="Play">►</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
{{--    <div class='player-container'>--}}
{{--        <div class='player'>--}}
{{--            <video id='video'--}}
{{--                   src='https://player.vimeo.com/external/271851475.sd.mp4?s=1a5c9b2541b420c133ded968b7c042fda26a8c0e&profile_id=165'--}}
{{--                   autoplay playsinline></video>--}}
{{--            <div class='play-btn-big'></div>--}}
{{--            <div class='controls'>--}}
{{--                <div class="time"><span class="time-current"></span><span class="time-total"></span></div>--}}
{{--                <div class='controls-main'>--}}
{{--                    <div class='controls-left'>--}}
{{--                        <div class='volume'>--}}
{{--                            <div class='volume-btn loud'>--}}
{{--                                <svg width="26" height="24" viewBox="0 0 26 24" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path--}}
{{--                                        d="M6.75497 17.6928H2C0.89543 17.6928 0 16.7973 0 15.6928V8.30611C0 7.20152 0.895431 6.30611 2 6.30611H6.75504L13.9555 0.237289C14.6058 -0.310807 15.6 0.151473 15.6 1.00191V22.997C15.6 23.8475 14.6058 24.3098 13.9555 23.7617L6.75497 17.6928Z"--}}
{{--                                        transform="translate(0 0.000518799)" fill="white"/>--}}
{{--                                    <path id="volume-low"--}}
{{--                                          d="M0 9.87787C2.87188 9.87787 5.2 7.66663 5.2 4.93893C5.2 2.21124 2.87188 0 0 0V2C1.86563 2 3.2 3.41162 3.2 4.93893C3.2 6.46625 1.86563 7.87787 0 7.87787V9.87787Z"--}}
{{--                                          transform="translate(17.3333 7.44955)" fill="white"/>--}}

{{--                                    <path id="volume-high"--}}
{{--                                          d="M0 16.4631C4.78647 16.4631 8.66667 12.7777 8.66667 8.23157C8.66667 3.68539 4.78647 0 0 0V2C3.78022 2 6.66667 4.88577 6.66667 8.23157C6.66667 11.5773 3.78022 14.4631 0 14.4631V16.4631Z"--}}
{{--                                          transform="translate(17.3333 4.15689)" fill="white"/>--}}
{{--                                    <path id="volume-off"--}}
{{--                                          d="M1.22565 0L0 1.16412L3.06413 4.0744L0 6.98471L1.22565 8.14883L4.28978 5.23853L7.35391 8.14883L8.57956 6.98471L5.51544 4.0744L8.57956 1.16412L7.35391 0L4.28978 2.91031L1.22565 0Z"--}}
{{--                                          transform="translate(17.3769 8.31403)" fill="white"/>--}}
{{--                                </svg>--}}

{{--                            </div>--}}
{{--                            <div class='volume-slider'>--}}
{{--                                <div class='volume-filled'></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class='play-btn paused'></div>--}}
{{--                    <div class="controls-right">--}}
{{--                        <div class='fullscreen'>--}}
{{--                            <svg width="30" height="22" viewBox="0 0 30 22" fill="none"--}}
{{--                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path--}}
{{--                                    d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z"--}}
{{--                                    transform="translate(2 2)" fill="white"/>--}}
{{--                            </svg>--}}


{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>
  @endif
  {{-- <div class="rink-bg"> --}}
  {{-- <img src="/assets/img/ice-rink.svg" alt=""> --}}
  {{-- </div> --}}


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


      </div>
  </section>

  <section>
    <div class="container">
            <div class="row row--multiline text-center">
        <div class="col-sm-4">
          <div class="privilege">
            <img src="/assets/img/privilege2.svg" alt="" class="privilege__img">
            <div class="privilege__text">
              <span class="privilege__count">23</span>
              <span class="privilege__title">{!! __('default.pages.main.schools_count') !!}</span>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="privilege">
            <img src="/assets/img/privilege1.svg" alt="" class="privilege__img">
            <div class="privilege__text">
              <span class="privilege__count">6850</span>
              <span class="privilege__title">{!! __('default.pages.main.children_count') !!}</span>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="privilege">
            <img src="/assets/img/privilege3.svg" alt="" class="privilege__img">
            <div class="privilege__text">
              <span class="privilege__count">116</span>
              <span class="privilege__title">{!! __('default.pages.main.teams_count') !!}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- <section>
    <div class="container">
      <h2 class="title-primary">{{ __('default.pages.main.articles_title') }}</h2>
      <div class="row row--multiline">
        @foreach ($articles as $article)
          <div class="col-md-4 col-sm-6">
            <a href="/{{ $lang }}/article/{{ $article->alias }}" title="" class="card">
              <div class="card__img">
                <img src="{!! $article->avatar !!}" alt="">
              </div>
              <div class="card__date">{{ date('d.m.Y', strtotime($article->published_at)) }}</div>
              <h4 class="card__title">
                {{ $article->getAttribute('name_' . $lang) ?? $article->getAttribute('name_ru') }}
              </h4>
              <span class="btn btn--arrow">{{ __('default.pages.main.detail_article') }}</span>
            </a>
          </div>
        @endforeach
      </div>
      <br>
      <br>
      <div class="text-center">
        <a href="/{{ $lang }}/news_articles" title="{{ __('default.pages.main.articles_all') }}"
          class="btn btn--arrow btn--red">{{ __('default.pages.main.articles_all') }}</a>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <h2 class="title-primary">{{ __('default.pages.main.albums_title') }}</h2>
      <div class="row row--multiline">
        @foreach ($albums as $album)
          <div class="col-md-4 col-sm-6">
            <a href="/{{ $lang }}/album/{{ $album->id }}" title="" class="card card__type2">
              <div class="card__img">
                <img src="{{ $album->avatar }}" alt="">
              </div>
              <div class="card__date">{{ date('d.m.Y', strtotime($album->published_at)) }}</div>
              <h4 class="card__title">{!! $album->getAttribute('name_' . $lang) ?? $album->getAttribute('name_ru') !!}</h4>
            </a>
          </div>
        @endforeach
      </div>
      <br>
      <br>
      <div class="text-center">
        <a href="/{{ $lang }}/news_albums" title="{{ __('default.pages.main.albums_all') }}"
          class="btn btn--arrow btn--red">{{ __('default.pages.main.albums_all') }}</a>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <h2 class="title-primary">{{ __('default.pages.main.videos_title') }}</h2>
      <div class="row row--multiline">
        @foreach ($videos as $video)
          <div class="col-sm-6">
            <a href="{!! $video->getAttribute('link_' . $lang) ?? $video->getAttribute('link_ru') !!}" data-fancybox title="" class="card card__type2">
              <div class="card__img video-cover">
                <div class="video-cover__play"></div>
                @php
                  $url = $video->getAttribute('link_' . $lang);
                  if (empty($video->getAttribute('link_' . $lang))) {
                      $url = $video->getAttribute('link_ru');
                  }
                  parse_str(parse_url($url, PHP_URL_QUERY), $vars);
                @endphp
                <img src="{{ 'https://img.youtube.com/vi/' . $vars['v'] . '/sddefault.jpg' }}" alt="">
              </div>
              <h4 class="card__title">{!! $video->getAttribute('name_' . $lang) ?? $video->getAttribute('name_ru') !!}</h4>
            </a>
          </div>
        @endforeach
      </div>
      <br>
      <br>
      <div class="text-center">
        <a href="/{{ $lang }}/news_videos" title="{{ __('default.pages.main.videos_all') }}"
          class="btn btn--arrow btn--red">{{ __('default.pages.main.videos_all') }}</a>
      </div>
    </div>
  </section> --}}
@endsection

@section('scripts')

  <!--Only this page's scripts-->
  <script src="{{asset('assets/js/JiSlider.js')}}"></script>
  <script src="{{asset('assets/js/video.js')}}"></script>

  <script>
      $(window).load(function () {
          $('#JiSlider').JiSlider({auto: false, color: '#fff', start: 3, stay: 5000, reverse: true, easing:'ease', time: 500 }).addClass('ff')
      })
  </script>

  <script>
      new VideoPlayer({ 'selector': '.video-player' });
  </script>
@endsection
