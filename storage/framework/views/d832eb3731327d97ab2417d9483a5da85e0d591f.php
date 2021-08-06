<?php $__env->startSection('title', __('default.site_name')); ?>

<?php $__env->startSection('content'); ?>
  <div style="background-image: url(/assets/img/pattern1.png);
                                background-size: 1440px; opacity: .5;" class="main-wrapper__bg"></div>

  <?php if($lang == 'kk'): ?>
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
      
      
    </section>
  <?php else: ?>
    <section class="banner">
    <div class='player-container'>
      <div class='player'>
      <video id='video' src='https://player.vimeo.com/external/271851475.sd.mp4?s=1a5c9b2541b420c133ded968b7c042fda26a8c0e&profile_id=165' autoplay playsinline></video>
        <div class='play-btn-big'></div>
        <div class='controls'>
          <div class="time"><span class="time-current"></span><span class="time-total"></span></div>
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
      
      
    </section>
  <?php endif; ?>
  
  
  


  <section>
      <div class="container">
          <div class="plain-text plain-text__24 plain-text__thin">
              <?php echo __("default.pages.faq.faq_annotation"); ?>

          </div>

          <?php if($lang == 'kk'): ?>
              <div class="margin-50"><img src="/assets/img/how-to-start_KZ.svg" style="width: 100%" alt=""></div>
          <?php else: ?>
              <div class="margin-50"><img src="/assets/img/how-to-start.svg" style="width: 100%" alt=""></div>
          <?php endif; ?>


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
              <span class="privilege__title"><?php echo __('default.pages.main.schools_count'); ?></span>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="privilege">
            <img src="/assets/img/privilege1.svg" alt="" class="privilege__img">
            <div class="privilege__text">
              <span class="privilege__count">6850</span>
              <span class="privilege__title"><?php echo __('default.pages.main.children_count'); ?></span>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="privilege">
            <img src="/assets/img/privilege3.svg" alt="" class="privilege__img">
            <div class="privilege__text">
              <span class="privilege__count">116</span>
              <span class="privilege__title"><?php echo __('default.pages.main.teams_count'); ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  <!--Only this page's scripts-->
  <script>

  //ELEMENT SELECTORS
  var player = document.querySelector('.player');
  var video = document.querySelector('#video');
  var playBtn = document.querySelector('.play-btn');
  var volumeBtn = document.querySelector('.volume-btn');
  var volumeSlider = document.querySelector('.volume-slider');
  var volumeFill = document.querySelector('.volume-filled');
  var textCurrent = document.querySelector('.time-current');
  var textTotal = document.querySelector('.time-total');
  var speedBtns = document.querySelectorAll('.speed-item');
  var fullscreenBtn =document.querySelector('.fullscreen');

  //GLOBAL VARS
  let lastVolume = 1;
  let isMouseDown = false;

  //PLAYER FUNCTIONS
  function togglePlay() {
    if (video.paused) {
      video.play();
    } else {
      video.pause();
    }
    playBtn.classList.toggle('paused');
  }
  function togglePlayBtn() {
    playBtn.classList.toggle('playing');
  }

  function toggleMute() {
    if(video.volume) {
      lastVolume = video.volume;
      video.volume = 0;
      volumeBtn.classList.add('muted');
      volumeFill.style.width = 0;
    } else {
      video.volume = lastVolume;
      volumeBtn.classList.remove('muted');
      volumeFill.style.width = `${lastVolume*100}%`;
    }
  }
  function changeVolume(e) {
      volumeBtn.classList.remove('muted');
      let volume = e.offsetX/volumeSlider.offsetWidth;
      volume<0.1 ? volume = 0 : volume=volume;
      volumeFill.style.width = `${volume*100}%`;
      video.volume = volume;
      if (volume > 0.7) {
        volumeBtn.classList.add('loud');
      } else if (volume < 0.7 && volume > 0) {
        volumeBtn.classList.remove('loud');
      } else if (volume == 0) {
        volumeBtn.classList.add('muted');
      }
      lastVolume = volume;
  }
  function neatTime(time) {
    // var hours = Math.floor((time % 86400)/3600)
    var minutes = Math.floor((time % 3600)/60);
    var seconds = Math.floor(time % 60);
    seconds = seconds>9?seconds:`0${seconds}`;
    return `${minutes}:${seconds}`;
  }

  function launchIntoFullscreen(element) {
    if(element.requestFullscreen) {
      element.requestFullscreen();
    } else if(element.mozRequestFullScreen) {
      element.mozRequestFullScreen();
    } else if(element.webkitRequestFullscreen) {
      element.webkitRequestFullscreen();
    } else if(element.msRequestFullscreen) {
      element.msRequestFullscreen();
    }
  }
  function exitFullscreen() {
    if(document.exitFullscreen) {
      document.exitFullscreen();
    } else if(document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if(document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
  }
  var fullscreen = false;
  function toggleFullscreen() {
    fullscreen? exitFullscreen() : launchIntoFullscreen(player)
    fullscreen = !fullscreen;
  }
  function setSpeed(e) {
    console.log(parseFloat(this.dataset.speed));
    video.playbackRate = this.dataset.speed;
    speedBtns.forEach(speedBtn =>	speedBtn.classList.remove('active'));
    this.classList.add('active');
  }
  function handleKeypress(e) {
    switch (e.key) {
      case " ":
        togglePlay();
      case "ArrowRight":
        video.currentTime += 5;
      case "ArrowLeft":
        video.currentTime -= 5;
      default:
        return;
    }
  }
  //EVENT LISTENERS
  playBtn.addEventListener('click', togglePlay);
  video.addEventListener('click', togglePlay);
  video.addEventListener('play', togglePlayBtn);
  video.addEventListener('pause', togglePlayBtn);
  video.addEventListener('ended', togglePlayBtn);

  volumeBtn.addEventListener('click', toggleMute);
  window.addEventListener('mousedown', () => isMouseDown = true)
  window.addEventListener('mouseup', () => isMouseDown = false)
  // volumeSlider.addEventListener('mouseover', changeVolume);
  volumeSlider.addEventListener('click', changeVolume);
  // progressSlider.addEventListener('click', setProgress);
  fullscreenBtn.addEventListener('click', toggleFullscreen);

  speedBtns.forEach(speedBtn => {
    speedBtn.addEventListener('click', setSpeed);
  });
  window.addEventListener('keydown', handleKeypress);

    $('.carousel-regular').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow: '<i class="icon-chevron-left"></i>',
      nextArrow: '<i class="icon-chevron-right"></i>',
      swipeToSlide: true,
      infinite: false,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    })

    window.onload= function(){
        toggleMute()
	    togglePlay();
	}
  </script>
  <!---->
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app.layout.index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev/Documents/laravel/test.salemhokei.kz/resources/views/app/pages/home/index.blade.php ENDPATH**/ ?>