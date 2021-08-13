<?php $__env->startSection('styles'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/video.css')); ?>">
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    
    <style>
        /*#JiSlider {*/
        /*    width: 100%;*/
        /*    height: 100%;*/
        /*}*/
        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #000;
        }

        .swiper-slide img {
            width: auto;
            height: auto;
            max-width: 100%;
            max-height: 100%;
            -ms-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            position: absolute;
            left: 50%;
            top: 50%;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title', __('default.site_name')); ?>



<?php $__env->startSection('content'); ?>
    <div style="background-image: url(/assets/img/pattern1.png);
                                background-size: 1440px; opacity: .5;" class="main-wrapper__bg"></div>

    <?php if($lang == 'kk'): ?>
        <section class="banner">

            <div
                style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                class="swiper-container mySwiper"
            >
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                        <div class="video-player">
                            <video muted="false" src="<?php echo e(asset('assets/videos/hockey-video.mp4')); ?>" poster="<?php echo e(asset('assets/videos/thumbnail-video.png')); ?>" class="video"></video>
                            <div class="player-controls">
                                <button class="play-button" title="Play">►</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                        <div class="video-player">
                            <video muted="false" src="<?php echo e(asset('assets/videos/hockey-video.mp4')); ?>" poster="<?php echo e(asset('assets/videos/thumbnail-video.png')); ?>" class="video"></video>
                            <div class="player-controls">
                                <button class="play-button" title="Play">►</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                        <div class="video-player">
                            <video muted="false" src="<?php echo e(asset('assets/videos/hockey-video.mp4')); ?>" poster="<?php echo e(asset('assets/videos/thumbnail-video.png')); ?>" class="video"></video>
                            <div class="player-controls">
                                <button class="play-button" title="Play">►</button>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                        <div class="video-player">
                            <video muted="false" src="<?php echo e(asset('assets/videos/hockey-video.mp4')); ?>" poster="<?php echo e(asset('assets/videos/thumbnail-video.png')); ?>" class="video"></video>
                            <div class="player-controls">
                                <button class="play-button" title="Play">►</button>
                            </div>
                        </div>


                    </div>
                    <div class="swiper-slide">
                        <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                        <div class="video-player">
                            <video muted="false" src="<?php echo e(asset('assets/videos/hockey-video.mp4')); ?>" poster="<?php echo e(asset('assets/videos/thumbnail-video.png')); ?>" class="video"></video>
                            <div class="player-controls">
                                <button class="play-button" title="Play">►</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
    <?php else: ?>
        <section class="banner">

            <div
                style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                class="swiper-container mySwiper"
            >
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                        <div class="video-player">
                            <video muted="false" src="<?php echo e(asset('assets/videos/hockey-video.mp4')); ?>" poster="<?php echo e(asset('assets/videos/thumbnail-video.png')); ?>" class="video"></video>
                            <div class="player-controls">
                                <button class="play-button" title="Play">►</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                        <div class="video-player">
                            <video muted="false" src="<?php echo e(asset('assets/videos/hockey-video.mp4')); ?>" poster="<?php echo e(asset('assets/videos/thumbnail-video.png')); ?>" class="video"></video>
                            <div class="player-controls">
                                <button class="play-button" title="Play">►</button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                        <div class="video-player">
                            <video muted="false" src="<?php echo e(asset('assets/videos/hockey-video.mp4')); ?>" poster="<?php echo e(asset('assets/videos/thumbnail-video.png')); ?>" class="video"></video>
                            <div class="player-controls">
                                <button class="play-button" title="Play">►</button>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                        <div class="video-player">
                            <video muted="false" src="<?php echo e(asset('assets/videos/hockey-video.mp4')); ?>" poster="<?php echo e(asset('assets/videos/thumbnail-video.png')); ?>" class="video"></video>
                            <div class="player-controls">
                                <button class="play-button" title="Play">►</button>
                            </div>
                        </div>


                    </div>
                    <div class="swiper-slide">
                        <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                        <div class="video-player">
                            <video muted="false" src="<?php echo e(asset('assets/videos/hockey-video.mp4')); ?>" poster="<?php echo e(asset('assets/videos/thumbnail-video.png')); ?>" class="video"></video>
                            <div class="player-controls">
                                <button class="play-button" title="Play">►</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>

        </section>
    <?php endif; ?>
    
    
    


    <section>
        <div class="container starting_area_section">
            <div class="plain-text plain-text__24 plain-text__thin">
                <?php echo __("default.pages.faq.faq_annotation"); ?>

            </div>

            <?php if($lang == 'kk'): ?>
                <div class="margin-50">
                    <a href="/<?php echo e($lang); ?>/faq" class="d-block h-75">

                        <svg class="w-100 h-100" width="165" height="93" viewBox="0 0 165 93" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M126.77 34.2969C126.77 34.2969 132.371 1.91946 103.664 6.3651e-05C93.4098 -0.0263363 89.2871 8.16646 87.6374 11.6488C85.9878 15.1309 75.9181 23.1034 68.1465 14.675C60.3748 6.24656 40.69 4.96556 34.5112 15.2039C28.3323 25.4423 35.5007 36.7288 34.8712 42.2645C34.2417 47.8001 28.4508 64.3922 38.2712 73.6463C48.0915 82.9004 61.0423 71.0387 68.0132 71.8769C72.7758 72.4495 80.7553 86.1857 97.8038 86.4279C116.628 86.6953 137.757 74.5493 132.964 53.623C131.966 42.9559 125.516 43.5226 126.77 34.2969V34.2969Z"
                                fill="#DCF0FA"/>
                            <path
                                d="M23.3353 14.1363C23.3353 20.5801 18.1115 25.804 11.6677 25.804C5.22379 25.804 0 20.5801 0 14.1363C0 7.69255 5.22379 2.46875 11.6677 2.46875C18.1115 2.46875 23.3353 7.69255 23.3353 14.1363V14.1363Z"
                                fill="#DCF0FA"/>
                            <path
                                d="M22.5846 79.6279C22.5846 83.7731 19.2242 87.1335 15.0789 87.1335C10.9336 87.1335 7.57324 83.7731 7.57324 79.6279C7.57324 75.4825 10.9336 72.1221 15.0789 72.1221C19.2242 72.1221 22.5846 75.4825 22.5846 79.6279Z"
                                fill="#DCF0FA"/>
                            <path
                                d="M164.183 83.3074C164.183 88.4276 160.033 92.5784 154.912 92.5784C149.792 92.5784 145.642 88.4276 145.642 83.3074C145.642 78.1873 149.792 74.0366 154.912 74.0366C160.033 74.0366 164.183 78.1873 164.183 83.3074Z"
                                fill="#DCF0FA"/>
                            <path
                                d="M156.791 15.7742C156.791 18.5757 154.52 20.8467 151.718 20.8467C148.917 20.8467 146.646 18.5757 146.646 15.7742C146.646 12.9728 148.917 10.7017 151.718 10.7017C154.52 10.7017 156.791 12.9728 156.791 15.7742V15.7742Z"
                                fill="#DCF0FA"/>
                            <path
                                d="M55.1399 43.0622H44.4203V41.9902C44.4203 40.1663 44.6271 38.6853 45.041 37.5473C45.4545 36.4095 46.0707 35.3707 46.8887 34.43C47.7067 33.4898 49.5449 31.8347 52.4037 29.465C53.9271 28.2238 54.6887 27.0862 54.6887 26.0517C54.6887 25.0176 54.3829 24.2137 53.7719 23.6398C53.1605 23.0663 52.2343 22.7794 50.9931 22.7794C49.6577 22.7794 48.5531 23.2215 47.6787 24.1053C46.804 24.9895 46.2444 26.5313 46.0002 28.7317L35.0547 27.3776C35.4307 23.3532 36.8928 20.1136 39.4414 17.6593C41.9894 15.2052 45.8965 13.978 51.1624 13.978C55.2622 13.978 58.572 14.834 61.0922 16.5449C64.5149 18.8582 66.2263 21.9428 66.2263 25.7978C66.2263 27.3966 65.7842 28.9388 64.9006 30.4242C64.0164 31.9102 62.2109 33.7249 59.4844 35.8686C57.5846 37.3736 56.3857 38.5818 55.8876 39.4937C55.3891 40.4061 55.1399 41.5953 55.1399 43.0622V43.0622ZM49.1172 45.9114H50.4714C53.2679 45.9114 55.5351 48.1784 55.5351 50.9749C55.5351 53.7715 53.2679 56.0386 50.4714 56.0386H49.1172C46.3206 56.0386 44.0536 53.7715 44.0536 50.9749C44.0536 48.1784 46.3206 45.9114 49.1172 45.9114Z"
                                fill="#CC0256"/>
                            <path
                                d="M50.9907 22.7803C49.655 22.7803 48.5502 23.2225 47.6757 24.1065C46.8009 24.9907 46.2414 26.5327 45.9971 28.7334"
                                stroke="#00376A" stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M45.9975 28.7336L42.4419 28.2937L38.8058 27.8439L35.0508 27.3794" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M35.0508 27.3792C35.4268 23.3543 36.8891 20.1143 39.438 17.6597" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M55.8864 39.4966C55.3878 40.4091 55.1387 41.5985 55.1387 43.0655" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M55.1387 43.0653H44.418V41.9932" stroke="#00376A" stroke-width="1.0583"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path
                                d="M44.418 41.9935C44.418 40.1694 44.6246 38.6882 45.0387 37.55C45.4522 36.4122 46.0685 35.3732 46.8866 34.4325C47.7048 33.4921 49.543 31.8368 52.4021 29.4669C53.9257 28.2255 54.6875 27.0878 54.6875 26.0532"
                                stroke="#00376A" stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path
                                d="M42.7246 15.4835C44.9809 14.4799 47.7929 13.978 51.1605 13.978C55.2608 13.978 58.571 14.834 61.0916 16.5452C64.5146 18.8587 66.2262 21.9437 66.2262 25.7991C66.2262 27.3981 65.7841 28.9405 64.9004 30.4261C64.016 31.9122 62.2104 33.7271 59.4834 35.8711"
                                stroke="#00376A" stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M49.1149 56.0432C46.3181 56.0432 44.0508 53.7759 44.0508 50.979" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M44.0508 50.9793C44.0508 49.7875 44.4625 48.6918 45.1516 47.8267" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M49.1152 45.915H50.4697" stroke="#00376A" stroke-width="1.0583"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M50.4697 45.915C53.2665 45.915 55.5339 48.1823 55.5339 50.9792" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M55.5339 50.979C55.5339 53.7759 53.2665 56.0432 50.4697 56.0432" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path
                                d="M63.2062 65.9721L57.8161 62.3717L58.1761 61.8327C58.7887 60.9156 59.3901 60.2403 59.9805 59.8071C60.5705 59.3739 61.2292 59.0585 61.9565 58.8603C62.6836 58.6623 64.1638 58.4473 66.3971 58.216C67.5801 58.1035 68.3452 57.7873 68.6926 57.2671C69.0399 56.7471 69.1561 56.2402 69.0416 55.7464C68.9269 55.2527 68.5575 54.7974 67.9334 54.3805C67.2619 53.932 66.558 53.7832 65.8214 53.934C65.0847 54.0848 64.2854 54.6721 63.4236 55.6966L58.3747 51.3395C59.9154 49.4421 61.7386 48.3043 63.8445 47.9261C65.95 47.5479 68.3268 48.2431 70.9746 50.0117C73.0361 51.3887 74.4129 52.9308 75.1055 54.6376C76.0496 56.9503 75.8742 59.0762 74.5794 61.0146C74.0424 61.8185 73.3021 62.4455 72.3589 62.8956C71.4152 63.3458 69.8978 63.6519 67.8068 63.8141C66.3461 63.9327 65.3375 64.1376 64.7807 64.4289C64.2236 64.7202 63.6989 65.2345 63.2062 65.9721V65.9721ZM59.2209 65.382L59.9018 65.8368C61.308 66.776 61.6866 68.6774 60.7473 70.0836C59.808 71.4898 57.9066 71.8683 56.5004 70.9291L55.8195 70.4742C54.4132 69.535 54.0348 67.6336 54.9741 66.2274C55.9133 64.8212 57.8147 64.4427 59.2209 65.382V65.382Z"
                                fill="#00AEEF"/>
                            <path
                                d="M67.9322 54.3804C67.2606 53.9318 66.5566 53.7831 65.82 53.9338C65.0832 54.0847 64.2838 54.6721 63.4219 55.6966"
                                stroke="#00376A" stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M63.4216 55.6964L61.7814 54.281L60.1042 52.8336L58.3721 51.3389" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M58.3721 51.3391C59.913 49.4415 61.7365 48.3035 63.8425 47.9253" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M64.7787 64.4297C64.2216 64.721 63.6969 65.2355 63.2041 65.9731" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M63.2042 65.9733L57.8135 62.3726L58.1736 61.8335" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path
                                d="M58.1738 61.8337C58.7864 60.9165 59.3879 60.2411 59.9784 59.8079C60.5684 59.3746 61.2272 59.0592 61.9545 58.8609C62.6818 58.6629 64.1621 58.4479 66.3957 58.2165C67.5788 58.1041 68.3439 57.7878 68.6914 57.2676"
                                stroke="#00376A" stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path
                                d="M66.2256 47.9346C67.6973 48.1878 69.2797 48.8799 70.9731 50.011C73.0349 51.3881 74.4118 52.9304 75.1045 54.6374C76.0487 56.9503 75.8733 59.0764 74.5784 61.015C74.0413 61.8191 73.3009 62.4461 72.3576 62.8963C71.4138 63.3466 69.8963 63.6527 67.805 63.8148"
                                stroke="#00376A" stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M55.8167 70.4759C54.4104 69.5365 54.0319 67.6349 54.9712 66.2285" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M54.9707 66.2287C55.3711 65.6294 55.9461 65.2168 56.5831 65.0132" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M59.2188 65.3833L59.8998 65.8382" stroke="#00376A" stroke-width="1.0583"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M59.8994 65.8379C61.3058 66.7773 61.6843 68.6788 60.745 70.0852" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M60.7454 70.0854C59.806 71.4918 57.9044 71.8704 56.498 70.9309" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path
                                d="M40.6435 63.0653L35.1696 66.5371L34.8224 65.9897C34.2317 65.0584 33.8576 64.235 33.7005 63.5199C33.5431 62.805 33.5213 62.075 33.6344 61.3297C33.7476 60.5847 34.1502 59.1442 34.8426 57.0082C35.2185 55.881 35.239 55.0535 34.904 54.5252C34.569 53.9971 34.1525 53.6857 33.6546 53.5905C33.1567 53.4957 32.5909 53.6491 31.9571 54.0511C31.2751 54.4836 30.8542 55.0671 30.6939 55.8016C30.5336 56.5364 30.7473 57.5049 31.3352 58.7076L25.3075 61.5611C24.196 59.3843 23.8934 57.2565 24.4 55.1778C24.9063 53.0994 26.504 51.2074 29.193 49.5019C31.2865 48.1741 33.2539 47.5393 35.095 47.5968C37.5919 47.6695 39.4649 48.6903 40.7134 50.6589C41.2311 51.4753 41.5049 52.406 41.5347 53.4506C41.5645 54.4959 41.2302 56.0073 40.5322 57.985C40.0494 59.3688 39.8286 60.374 39.8695 61.001C39.9105 61.6283 40.1684 62.3163 40.6435 63.0653V63.0653ZM38.4908 66.4709L39.1823 66.0322C40.6103 65.1265 42.5023 65.55 43.4079 66.978C44.3137 68.406 43.8902 70.298 42.4622 71.2036L41.7706 71.6422C40.3426 72.5479 38.4507 72.1245 37.545 70.6965C36.6393 69.2684 37.0627 67.3765 38.4908 66.4709Z"
                                fill="#CCE290"/>
                            <path
                                d="M31.9574 54.0522C31.2753 54.4848 30.8544 55.0684 30.6942 55.803C30.5338 56.5379 30.7473 57.5065 31.3353 58.7093"
                                stroke="#00376A" stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M31.335 58.7095L29.3769 59.6364L27.3746 60.5844L25.3066 61.5633" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M25.3065 61.5632C24.195 59.3862 23.8924 57.2581 24.399 55.1792" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M39.8701 61.0029C39.911 61.6304 40.169 62.3184 40.6441 63.0675" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M40.6439 63.0674L35.1695 66.5395L34.8223 65.992" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path
                                d="M34.8227 65.9921C34.232 65.0607 33.8577 64.2374 33.7006 63.5221C33.5432 62.8072 33.5215 62.077 33.6346 61.3317C33.7478 60.5866 34.1504 59.1459 34.8428 57.0098C35.2188 55.8824 35.2393 55.0547 34.9042 54.5264"
                                stroke="#00376A" stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path
                                d="M25.3721 53.0035C26.1993 51.7603 27.4727 50.5934 29.1923 49.5027C31.2861 48.1748 33.2537 47.5398 35.095 47.5973C37.5921 47.67 39.4654 48.691 40.714 50.6598C41.2318 51.4763 41.5055 52.4071 41.5353 53.4519C41.5651 54.4971 41.2309 56.0087 40.5328 57.9867"
                                stroke="#00376A" stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M41.772 71.6456C40.3438 72.5514 38.4517 72.1279 37.5459 70.6997" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M37.5451 70.6997C37.1591 70.0911 37.0144 69.3982 37.086 68.7334" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M38.4912 66.4734L39.1828 66.0347" stroke="#451D99" stroke-width="1.0583"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M39.1826 66.0347C40.6108 65.129 42.5029 65.5524 43.4086 66.9806" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M43.4087 66.981C44.3146 68.4093 43.8911 70.3012 42.4629 71.207" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path
                                d="M29.8428 34.5591C29.8428 35.2794 29.2589 35.8633 28.5387 35.8633C27.8183 35.8633 27.2344 35.2794 27.2344 34.5591C27.2344 33.8388 27.8183 33.2549 28.5387 33.2549C29.2589 33.2549 29.8428 33.8388 29.8428 34.5591Z"
                                stroke="#00376A" stroke-width="0.759999" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path
                                d="M87.6065 5.86279C87.6065 6.58309 87.0226 7.16689 86.3023 7.16689C85.582 7.16689 84.998 6.58309 84.998 5.86279C84.998 5.14249 85.582 4.55859 86.3023 4.55859C87.0226 4.55859 87.6065 5.14249 87.6065 5.86279Z"
                                stroke="#00376A" stroke-width="0.759999" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path
                                d="M50.8406 60.9768C50.8406 61.3677 50.5237 61.6847 50.1327 61.6847C49.7418 61.6847 49.4248 61.3677 49.4248 60.9768C49.4248 60.5859 49.7418 60.269 50.1327 60.269C50.5237 60.269 50.8406 60.5859 50.8406 60.9768"
                                stroke="#00376A" stroke-width="0.759999" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path
                                d="M92.0016 87.8417C92.0016 88.2327 91.6848 88.5496 91.2939 88.5496C90.9029 88.5496 90.5859 88.2327 90.5859 87.8417C90.5859 87.4508 90.9029 87.1338 91.2939 87.1338C91.6848 87.1338 92.0016 87.4508 92.0016 87.8417Z"
                                stroke="#00376A" stroke-width="0.759999" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path
                                d="M43.5581 3.60869C43.5581 4.13339 43.1328 4.55869 42.6081 4.55869C42.0835 4.55869 41.6582 4.13339 41.6582 3.60869C41.6582 3.08399 42.0835 2.65869 42.6081 2.65869C43.1328 2.65869 43.5581 3.08399 43.5581 3.60869Z"
                                stroke="#00376A" stroke-width="0.759999" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path
                                d="M132.489 35.4462C132.489 35.2364 132.659 35.0662 132.869 35.0662C133.079 35.0662 133.249 35.2364 133.249 35.4462H132.489ZM131.919 36.7762V36.0162L131.949 36.0155L131.978 36.0132L132.006 36.0097L132.034 36.0047L132.062 35.9983L132.088 35.9907L132.115 35.9817L132.141 35.9715L132.166 35.9602L132.19 35.9477L132.214 35.9338L132.237 35.919L132.26 35.9032L132.282 35.8859L132.302 35.8681L132.322 35.8494L132.341 35.8292L132.359 35.8084L132.376 35.7871L132.392 35.7646L132.406 35.7417L132.42 35.7179L132.433 35.693L132.444 35.6678L132.454 35.642L132.463 35.616L132.471 35.5891L132.477 35.5613L132.482 35.5335L132.486 35.505L132.488 35.4759L132.489 35.4462H133.249L133.247 35.5143L133.242 35.5816L133.234 35.6483L133.222 35.7139L133.207 35.7781L133.189 35.8414L133.168 35.9036L133.144 35.9642L133.117 36.023L133.088 36.0801L133.056 36.1359L133.022 36.19L132.985 36.2421L132.945 36.2926L132.903 36.3406L132.86 36.3864L132.813 36.4307L132.765 36.4725L132.715 36.5116L132.663 36.5488L132.609 36.5834L132.553 36.6153L132.496 36.6448L132.437 36.6715L132.376 36.6953L132.314 36.7163L132.251 36.7343L132.187 36.7491L132.121 36.7609L132.054 36.7694L131.987 36.7745L131.919 36.7762V36.7762ZM131.919 36.7762C131.709 36.7762 131.539 36.606 131.539 36.3962C131.539 36.1864 131.709 36.0162 131.919 36.0162V36.7762ZM130.589 35.4462H131.349L131.35 35.4759L131.352 35.505L131.355 35.5335L131.36 35.5613L131.367 35.5891L131.374 35.6156L131.383 35.642L131.394 35.6681L131.405 35.693L131.417 35.7176L131.431 35.7414L131.446 35.7646L131.462 35.7871L131.479 35.8087L131.497 35.8292L131.516 35.8492L131.536 35.8683L131.556 35.8861L131.578 35.903L131.6 35.919L131.624 35.9339L131.647 35.9476L131.672 35.9602L131.697 35.9715L131.723 35.9817L131.749 35.9907L131.776 35.9983L131.804 36.0047L131.832 36.0097L131.86 36.0132L131.889 36.0155L131.919 36.0162V36.7762L131.851 36.7745L131.783 36.7694L131.717 36.7609L131.651 36.7491L131.587 36.7343L131.523 36.7163L131.461 36.6953L131.401 36.6715L131.342 36.6448L131.285 36.6154L131.229 36.5833L131.175 36.5488L131.123 36.5118L131.073 36.4723L131.024 36.4305L130.978 36.3866L130.935 36.3406L130.893 36.2923L130.853 36.2421L130.816 36.19L130.782 36.1362L130.75 36.0804L130.72 36.023L130.694 35.9639L130.67 35.9036L130.649 35.8418L130.631 35.7781L130.616 35.7139L130.604 35.6483L130.596 35.5816L130.591 35.5143L130.589 35.4462V35.4462ZM130.589 35.4462C130.589 35.2364 130.759 35.0662 130.969 35.0662C131.179 35.0662 131.349 35.2364 131.349 35.4462H130.589ZM131.919 34.1162V34.8762L131.889 34.8769L131.86 34.8792L131.832 34.8827L131.804 34.8877L131.776 34.8941L131.749 34.9018L131.723 34.9106L131.697 34.9208L131.672 34.9322L131.647 34.945L131.623 34.9586L131.6 34.9733L131.578 34.9893L131.557 35.006L131.536 35.0241L131.516 35.0433L131.497 35.0629L131.479 35.0835L131.462 35.1055L131.446 35.1277L131.431 35.1508L131.417 35.175L131.405 35.1993L131.394 35.2243L131.383 35.2503L131.374 35.2766L131.367 35.3034L131.36 35.331L131.355 35.3588L131.352 35.3874L131.35 35.4165L131.349 35.4462H130.589L130.591 35.3781L130.596 35.3108L130.604 35.2442L130.616 35.1784L130.631 35.1142L130.649 35.0508L130.67 34.9887L130.694 34.9285L130.72 34.8693L130.75 34.8118L130.782 34.7564L130.816 34.7023L130.853 34.6501L130.893 34.6003L130.934 34.5519L130.979 34.5055L131.024 34.4619L131.072 34.4202L131.123 34.3805L131.175 34.3435L131.229 34.3088L131.285 34.2768L131.342 34.2476L131.401 34.221L131.461 34.197L131.524 34.176L131.587 34.1581L131.651 34.1433L131.717 34.1315L131.783 34.123L131.851 34.1179L131.919 34.1162V34.1162ZM131.919 34.1162C132.129 34.1162 132.299 34.2864 132.299 34.4962C132.299 34.706 132.129 34.8762 131.919 34.8762V34.1162ZM133.249 35.4462H132.489L132.488 35.4165L132.486 35.3874L132.482 35.3588L132.477 35.331L132.471 35.3034L132.463 35.2763L132.454 35.2503L132.444 35.2246L132.433 35.1993L132.42 35.1747L132.406 35.1505L132.392 35.1277L132.376 35.1055L132.359 35.0838L132.341 35.0629L132.322 35.0431L132.302 35.0243L132.281 35.0062L132.26 34.9891L132.237 34.9733L132.215 34.9587L132.19 34.9449L132.166 34.9322L132.14 34.9208L132.115 34.9106L132.089 34.9018L132.062 34.8941L132.034 34.8877L132.006 34.8827L131.978 34.8792L131.949 34.8769L131.919 34.8762V34.1162L131.987 34.1179L132.054 34.123L132.121 34.1315L132.187 34.1433L132.251 34.1581L132.314 34.176L132.376 34.197L132.437 34.221L132.496 34.2476L132.553 34.2769L132.608 34.3087L132.663 34.3435L132.715 34.3807L132.765 34.42L132.813 34.4617L132.859 34.5057L132.903 34.5519L132.945 34.6L132.984 34.6501L133.022 34.7023L133.056 34.7567L133.088 34.8121L133.117 34.8693L133.144 34.9282L133.168 34.9887L133.189 35.0511L133.207 35.1142L133.222 35.1784L133.234 35.2442L133.242 35.3108L133.247 35.3781L133.249 35.4462V35.4462ZM133.249 35.4462C133.249 35.656 133.079 35.8262 132.869 35.8262C132.659 35.8262 132.489 35.656 132.489 35.4462H133.249Z"
                                fill="#00376A"/>
                            <path
                                d="M32.3047 78.6616C32.3047 79.1337 31.9219 79.5166 31.4497 79.5166C30.9775 79.5166 30.5947 79.1337 30.5947 78.6616C30.5947 78.1894 30.9775 77.8066 31.4497 77.8066C31.9219 77.8066 32.3047 78.1894 32.3047 78.6616Z"
                                stroke="#00376A" stroke-width="0.759999" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M29.8428 13.0137L31.7429 15.3255" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M31.7429 13.0137L29.8428 15.3255" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M63.6221 78.6616L65.5221 80.9733" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M65.5221 78.6616L63.6221 80.9733" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M129.782 78.3608L131.682 80.6725" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M131.682 78.3608L129.782 80.6725" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M66.4746 39.7563L68.3745 42.0681" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M68.3745 39.7563L66.4746 42.0681" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M62.6719 10.7021L64.5719 13.0139" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M64.5719 10.7021L62.6719 13.0139" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M129.782 10.7021L131.682 13.0139" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M131.682 10.7021L129.782 13.0139" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path
                                d="M84.8038 29.1582V39.0002H82.3855V35.2321H80.1218V39.0002H77.6895V29.1582H80.1218V32.9263H82.3855V29.1582H84.8038Z"
                                fill="#00376A"/>
                            <path
                                d="M89.339 39.197C88.2049 39.197 87.3238 38.883 86.6958 38.255C86.0771 37.627 85.7678 36.7506 85.7678 35.6258C85.7678 34.5104 86.0396 33.6387 86.5833 33.0106C87.1363 32.3733 87.9002 32.0546 88.8751 32.0546C89.8499 32.0546 90.6044 32.4389 91.1387 33.2075C91.6824 33.9667 91.898 35.0493 91.7855 36.4553H88.158C88.3267 37.1583 88.8376 37.5098 89.6905 37.5098C90.2998 37.5098 90.8669 37.4114 91.3918 37.2146V38.8315C90.8294 39.0752 90.1451 39.197 89.339 39.197ZM88.0596 35.0634H89.6765C89.6577 34.2667 89.4093 33.8683 88.9313 33.8683C88.4064 33.8683 88.1158 34.2667 88.0596 35.0634Z"
                                fill="#00376A"/>
                            <path
                                d="M92.1475 40.7858V37.1162H92.9068C93.2817 35.8414 93.4692 34.2198 93.4692 32.2514H98.7135V37.1162H99.5009V40.7858H97.3075V39.0002H94.3409V40.7858H92.1475ZM95.1423 37.1162H96.5624V34.0792H95.536C95.4891 35.1665 95.3579 36.1788 95.1423 37.1162Z"
                                fill="#00376A"/>
                            <path
                                d="M103.536 39.197C102.402 39.197 101.521 38.883 100.893 38.255C100.274 37.627 99.9651 36.7506 99.9651 35.6258C99.9651 34.5104 100.237 33.6387 100.781 33.0106C101.334 32.3733 102.098 32.0546 103.072 32.0546C104.047 32.0546 104.802 32.4389 105.336 33.2075C105.88 33.9667 106.095 35.0493 105.983 36.4553H102.355C102.524 37.1583 103.035 37.5098 103.888 37.5098C104.497 37.5098 105.064 37.4114 105.589 37.2146V38.8315C105.027 39.0752 104.342 39.197 103.536 39.197ZM102.257 35.0634H103.874C103.855 34.2667 103.607 33.8683 103.129 33.8683C102.604 33.8683 102.313 34.2667 102.257 35.0634Z"
                                fill="#00376A"/>
                            <path
                                d="M106.822 39.0002V32.2514H109.128V34.6416H110.478V32.2514H112.784V39.0002H110.478V36.61H109.128V39.0002H106.822Z"
                                fill="#00376A"/>
                            <path
                                d="M86.3671 53.0002V43.1582H92.68V45.4078H88.7995V46.7857H90.2898C91.1897 46.7857 91.9208 47.0622 92.4832 47.6152C93.055 48.1589 93.3409 48.9181 93.3409 49.8929C93.3409 50.8678 93.055 51.6317 92.4832 52.1847C91.9208 52.7284 91.1897 53.0002 90.2898 53.0002H86.3671ZM88.7995 50.8912H89.9383C90.257 50.8912 90.5007 50.8022 90.6695 50.6241C90.8382 50.446 90.9226 50.2023 90.9226 49.8929C90.9226 49.5836 90.8335 49.3399 90.6554 49.1618C90.4867 48.9837 90.2477 48.8947 89.9383 48.8947H88.7995V50.8912Z"
                                fill="#00376A"/>
                            <path
                                d="M93.2698 53.0002L96.3911 43.1582H98.8376L101.959 53.0002H99.4281L99.0203 51.5239H96.2224L95.8147 53.0002H93.2698ZM96.7145 49.5274H98.5142L98.0502 47.8402C97.8534 47.0903 97.7081 46.3826 97.6143 45.7171C97.5112 46.467 97.3706 47.1747 97.1925 47.8402L96.7145 49.5274Z"
                                fill="#00376A"/>
                            <path
                                d="M106.303 53.197C105.028 53.197 103.969 52.7659 103.126 51.9035C102.282 51.0412 101.86 49.7898 101.86 48.1495C101.87 46.5185 102.291 45.2485 103.126 44.3392C103.96 43.4207 105.024 42.9614 106.317 42.9614C106.927 42.9614 107.55 43.0879 108.187 43.341V45.689C107.784 45.4734 107.278 45.3656 106.669 45.3656C105.975 45.3656 105.422 45.6046 105.01 46.0827C104.597 46.5607 104.391 47.2497 104.391 48.1495C104.391 49.0212 104.583 49.682 104.968 50.132C105.361 50.5819 105.905 50.8068 106.598 50.8068C107.142 50.8068 107.695 50.685 108.258 50.4413V52.8455C107.639 53.0799 106.987 53.197 106.303 53.197Z"
                                fill="#00376A"/>
                            <path d="M111.012 53.0002V45.464H108.763V43.1582H115.68V45.464H113.431V53.0002H111.012Z"
                                  fill="#00376A"/>
                            <path
                                d="M114.84 53.0002L117.962 43.1582H120.408L123.529 53.0002H120.999L120.591 51.5239H117.793L117.385 53.0002H114.84ZM118.285 49.5274H120.085L119.621 47.8402C119.424 47.0903 119.279 46.3826 119.185 45.7171C119.082 46.467 118.941 47.1747 118.763 47.8402L118.285 49.5274Z"
                                fill="#00376A"/>
                            <path
                                d="M128.468 43.1582H131.055L128.398 50.5819C128.042 51.5661 127.611 52.2503 127.104 52.6346C126.608 53.0096 126.041 53.197 125.403 53.197C124.944 53.197 124.503 53.1314 124.082 53.0002V50.849C124.475 50.9428 124.827 50.9615 125.136 50.9053C125.464 50.8678 125.755 50.6428 126.008 50.2304L122.886 43.1582H125.459L127.161 47.573L128.468 43.1582Z"
                                fill="#00376A"/>
                            <path
                                d="M110.31 62.4395C110.366 62.4395 110.441 62.4302 110.535 62.4114V63.958C110.169 64.0611 109.804 64.1127 109.438 64.1127C108.838 64.1127 108.388 63.9486 108.088 63.6206C107.629 64.0049 107.034 64.197 106.303 64.197C105.684 64.197 105.169 64.0143 104.756 63.6487C104.344 63.2831 104.138 62.7582 104.138 62.074C104.138 61.3897 104.362 60.8648 104.812 60.4993C105.272 60.1243 105.886 59.9369 106.654 59.9369C106.992 59.9369 107.329 59.979 107.667 60.0634V59.7681C107.667 59.2245 107.32 58.9527 106.626 58.9527C105.923 58.9527 105.234 59.0886 104.559 59.3604V57.4623C105.347 57.1905 106.115 57.0546 106.865 57.0546C107.868 57.0546 108.627 57.2748 109.143 57.7154C109.668 58.1466 109.93 58.8777 109.93 59.9087V62.0177C109.93 62.2989 110.057 62.4395 110.31 62.4395ZM106.964 62.7489C107.254 62.7489 107.488 62.6645 107.667 62.4958V61.3288C107.479 61.2819 107.315 61.2585 107.174 61.2585C106.612 61.2585 106.331 61.5163 106.331 62.0318C106.331 62.5098 106.542 62.7489 106.964 62.7489Z"
                                fill="#00376A"/>
                            <path
                                d="M119.007 60.6539L120.554 64.0002H118.051L117.179 61.6381H116.729V64.0002H114.494V61.6381H114.044L113.186 64.0002H110.684L112.23 60.6539L110.726 57.2514H113.2L114.03 59.6557H114.494V57.2514H116.729V59.6557H117.193L118.037 57.2514H120.498L119.007 60.6539Z"
                                fill="#00376A"/>
                            <path
                                d="M124.256 64.197C123.121 64.197 122.24 63.883 121.612 63.255C120.994 62.627 120.684 61.7506 120.684 60.6258C120.684 59.5104 120.956 58.6387 121.5 58.0106C122.053 57.3733 122.817 57.0546 123.792 57.0546C124.766 57.0546 125.521 57.4389 126.055 58.2075C126.599 58.9667 126.815 60.0493 126.702 61.4553H123.075C123.243 62.1583 123.754 62.5098 124.607 62.5098C125.216 62.5098 125.783 62.4114 126.308 62.2146V63.8315C125.746 64.0752 125.062 64.197 124.256 64.197ZM122.976 60.0634H124.593C124.574 59.2667 124.326 58.8683 123.848 58.8683C123.323 58.8683 123.032 59.2667 122.976 60.0634Z"
                                fill="#00376A"/>
                            <path d="M128.543 64.0002V59.2339H127.066V57.2514H132.339V59.2339H130.849V64.0002H128.543Z"
                                  fill="#00376A"/>
                            <path
                                d="M134.145 60.7383C134.145 60.3071 134.22 59.8994 134.37 59.5151C134.529 59.1214 134.698 58.8074 134.876 58.573C135.064 58.3293 135.232 58.0622 135.382 57.7716C135.542 57.4811 135.621 57.2092 135.621 56.9561C135.621 56.4968 135.317 56.2672 134.707 56.2672C134.089 56.2672 133.451 56.5015 132.795 56.9702V54.6503C133.611 54.191 134.431 53.9614 135.256 53.9614C136.034 53.9614 136.709 54.1676 137.28 54.58C137.862 54.9831 138.152 55.583 138.152 56.3797C138.152 56.8296 138.054 57.2702 137.857 57.7013C137.66 58.1325 137.44 58.4934 137.196 58.7839C136.962 59.0651 136.746 59.3838 136.549 59.74C136.352 60.0962 136.254 60.429 136.254 60.7383H134.145ZM135.2 64.183C134.853 64.183 134.553 64.0752 134.3 63.8596C134.056 63.644 133.934 63.33 133.934 62.9176C133.934 62.5052 134.056 62.1958 134.3 61.9896C134.553 61.774 134.853 61.6662 135.2 61.6662C135.556 61.6662 135.856 61.774 136.099 61.9896C136.352 62.1958 136.479 62.5052 136.479 62.9176C136.479 63.33 136.352 63.644 136.099 63.8596C135.856 64.0752 135.556 64.183 135.2 64.183Z"
                                fill="#00376A"/>
                            <path
                                d="M99.5397 61.8957H98.9554V64.5243H97V57H98.9554V59.7051H99.5165L100.512 57H103.011L101.183 60.4771H101.188L103.196 64.5243H100.552L99.5397 61.8957ZM104 67H102.05V62.9736H104V67Z"
                                fill="#00376A"/>
                        </svg>
                    </a>
                </div>
            <?php else: ?>
                <div class="margin-50">
                    <a href="/<?php echo e($lang); ?>/faq" class="d-block h-75">

                        <svg class="w-100 h-100" width="165" height="93" viewBox="0 0 165 93" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M126.819 34.6382C126.819 34.6382 132.42 2.26077 103.713 0.341372C93.4586 0.314972 89.3359 8.50776 87.6862 11.9901C86.0366 15.4723 75.9669 23.4448 68.1954 15.0163C60.4237 6.58787 40.7388 5.30687 34.56 15.5453C28.3811 25.7836 35.5495 37.0701 34.92 42.6058C34.2905 48.1414 28.4997 64.7335 38.3201 73.9876C48.1404 83.2417 61.0911 71.38 68.062 72.2182C72.8246 72.7908 80.8041 86.527 97.8526 86.7692C116.677 87.0366 137.806 74.8906 133.013 53.9643C132.015 43.2972 125.565 43.8639 126.819 34.6382Z"
                                fill="#DCF0FA"/>
                            <path
                                d="M23.3841 14.4776C23.3841 20.9214 18.1603 26.1453 11.7165 26.1453C5.27262 26.1453 0.0488281 20.9214 0.0488281 14.4776C0.0488281 8.03385 5.27262 2.81006 11.7165 2.81006C18.1603 2.81006 23.3841 8.03385 23.3841 14.4776Z"
                                fill="#DCF0FA"/>
                            <path
                                d="M22.6335 79.9692C22.6335 84.1144 19.2731 87.4748 15.1278 87.4748C10.9825 87.4748 7.62207 84.1144 7.62207 79.9692C7.62207 75.8238 10.9825 72.4634 15.1278 72.4634C19.2731 72.4634 22.6335 75.8238 22.6335 79.9692Z"
                                fill="#DCF0FA"/>
                            <path
                                d="M164.232 83.6487C164.232 88.7689 160.081 92.9197 154.961 92.9197C149.841 92.9197 145.69 88.7689 145.69 83.6487C145.69 78.5286 149.841 74.3779 154.961 74.3779C160.081 74.3779 164.232 78.5286 164.232 83.6487Z"
                                fill="#DCF0FA"/>
                            <path
                                d="M156.84 16.1155C156.84 18.917 154.568 21.1881 151.767 21.1881C148.965 21.1881 146.694 18.917 146.694 16.1155C146.694 13.3141 148.965 11.043 151.767 11.043C154.568 11.043 156.84 13.3141 156.84 16.1155Z"
                                fill="#DCF0FA"/>
                            <path
                                d="M55.1888 43.4035H44.4691V42.3315C44.4691 40.5076 44.6759 39.0266 45.0898 37.8886C45.5033 36.7508 46.1195 35.712 46.9375 34.7713C47.7555 33.8311 49.5937 32.176 52.4525 29.8063C53.9759 28.5651 54.7375 27.4275 54.7375 26.393C54.7375 25.3589 54.4317 24.555 53.8207 23.9811C53.2093 23.4076 52.2832 23.1207 51.042 23.1207C49.7065 23.1207 48.6019 23.5628 47.7275 24.4466C46.8528 25.3308 46.2932 26.8726 46.049 29.073L35.1035 27.7189C35.4795 23.6945 36.9416 20.4549 39.4902 18.0006C42.0382 15.5465 45.9453 14.3193 51.2112 14.3193C55.311 14.3193 58.6209 15.1753 61.1411 16.8862C64.5638 19.1995 66.2752 22.2841 66.2752 26.1391C66.2752 27.7379 65.8331 29.2801 64.9495 30.7655C64.0653 32.2515 62.2598 34.0662 59.5332 36.2099C57.6334 37.7149 56.4345 38.9231 55.9364 39.835C55.4379 40.7474 55.1888 41.9366 55.1888 43.4035ZM49.166 46.2527H50.5202C53.3168 46.2527 55.5839 48.5197 55.5839 51.3162C55.5839 54.1128 53.3168 56.3799 50.5202 56.3799H49.166C46.3694 56.3799 44.1024 54.1128 44.1024 51.3162C44.1024 48.5197 46.3694 46.2527 49.166 46.2527Z"
                                fill="#CC0256"/>
                            <path
                                d="M51.0395 23.1216C49.7038 23.1216 48.5991 23.5638 47.7246 24.4478C46.8498 25.332 46.2902 26.874 46.0459 29.0747"
                                stroke="#00376A" stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M46.0463 29.0749L42.4907 28.635L38.8546 28.1852L35.0996 27.7207" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M35.0996 27.7205C35.4756 23.6956 36.9379 20.4556 39.4868 18.001" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M55.9352 39.8379C55.4366 40.7504 55.1875 41.9398 55.1875 43.4068" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M55.1876 43.4066H44.4668V42.3345" stroke="#00376A" stroke-width="1.0583"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path
                                d="M44.4668 42.3348C44.4668 40.5107 44.6735 39.0295 45.0876 37.8913C45.5011 36.7535 46.1173 35.7145 46.9354 34.7738C47.7536 33.8334 49.5919 32.1781 52.451 29.8082C53.9746 28.5668 54.7364 27.4291 54.7364 26.3945"
                                stroke="#00376A" stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path
                                d="M42.7734 15.8248C45.0297 14.8212 47.8417 14.3193 51.2093 14.3193C55.3096 14.3193 58.6199 15.1753 61.1405 16.8865C64.5634 19.2 66.275 22.285 66.275 26.1404C66.275 27.7394 65.8329 29.2818 64.9492 30.7674C64.0648 32.2535 62.2592 34.0684 59.5322 36.2124"
                                stroke="#00376A" stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M49.1637 56.3845C46.3669 56.3845 44.0996 54.1172 44.0996 51.3203" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M44.0996 51.3206C44.0996 50.1288 44.5113 49.0331 45.2004 48.168" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M49.1641 46.2563H50.5186" stroke="#00376A" stroke-width="1.0583"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M50.5186 46.2563C53.3154 46.2563 55.5827 48.5236 55.5827 51.3205" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M55.5827 51.3203C55.5827 54.1172 53.3154 56.3845 50.5186 56.3845" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path
                                d="M63.255 66.3134L57.865 62.713L58.225 62.174C58.8376 61.2569 59.4389 60.5816 60.0293 60.1484C60.6193 59.7152 61.278 59.3998 62.0053 59.2016C62.7324 59.0036 64.2126 58.7886 66.4459 58.5573C67.6289 58.4448 68.394 58.1286 68.7414 57.6084C69.0887 57.0884 69.205 56.5815 69.0905 56.0877C68.9758 55.594 68.6064 55.1387 67.9823 54.7218C67.3108 54.2733 66.6068 54.1245 65.8702 54.2753C65.1335 54.4261 64.3343 55.0134 63.4725 56.0379L58.4236 51.6808C59.9643 49.7834 61.7875 48.6456 63.8934 48.2674C65.9989 47.8892 68.3756 48.5844 71.0234 50.353C73.0849 51.73 74.4617 53.2721 75.1543 54.9789C76.0984 57.2916 75.923 59.4175 74.6282 61.3559C74.0912 62.1598 73.3509 62.7868 72.4077 63.2369C71.464 63.6871 69.9467 63.9932 67.8557 64.1554C66.395 64.274 65.3863 64.4789 64.8295 64.7702C64.2724 65.0615 63.7477 65.5758 63.255 66.3134ZM59.2698 65.7233L59.9507 66.1781C61.3569 67.1173 61.7354 69.0187 60.7961 70.4249C59.8568 71.8311 57.9555 72.2096 56.5493 71.2704L55.8684 70.8155C54.4621 69.8763 54.0837 67.9749 55.023 66.5687C55.9622 65.1625 57.8636 64.784 59.2698 65.7233Z"
                                fill="#00AEEF"/>
                            <path
                                d="M67.981 54.7217C67.3094 54.2731 66.6054 54.1244 65.8688 54.2751C65.132 54.426 64.3326 55.0134 63.4707 56.0379"
                                stroke="#00376A" stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M63.4704 56.0377L61.8302 54.6223L60.153 53.1749L58.4209 51.6802" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M58.4209 51.6804C59.9618 49.7828 61.7853 48.6448 63.8913 48.2666" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M64.8275 64.771C64.2704 65.0623 63.7457 65.5768 63.2529 66.3144" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M63.253 66.3146L57.8623 62.7139L58.2224 62.1748" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path
                                d="M58.2227 62.175C58.8353 61.2578 59.4367 60.5824 60.0272 60.1492C60.6172 59.7159 61.2761 59.4005 62.0034 59.2022C62.7307 59.0042 64.211 58.7892 66.4446 58.5578C67.6277 58.4454 68.3928 58.1291 68.7403 57.6089"
                                stroke="#00376A" stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path
                                d="M66.2744 48.2759C67.7461 48.5291 69.3285 49.2212 71.0219 50.3523C73.0837 51.7294 74.4606 53.2717 75.1533 54.9787C76.0975 57.2916 75.9221 59.4177 74.6272 61.3563C74.0901 62.1604 73.3497 62.7874 72.4064 63.2376C71.4626 63.6879 69.9451 63.994 67.8538 64.1561"
                                stroke="#00376A" stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M55.8656 70.8172C54.4593 69.8778 54.0807 67.9762 55.02 66.5698" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M55.0195 66.57C55.4199 65.9707 55.9949 65.5581 56.6319 65.3545" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M59.2676 65.7246L59.9486 66.1795" stroke="#00376A" stroke-width="1.0583"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M59.9482 66.1792C61.3546 67.1186 61.7331 69.0201 60.7938 70.4265" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M60.7943 70.4268C59.8549 71.8332 57.9533 72.2118 56.5469 71.2723" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path
                                d="M40.6923 63.4066L35.2184 66.8784L34.8712 66.331C34.2805 65.3997 33.9064 64.5763 33.7493 63.8612C33.5919 63.1463 33.5701 62.4163 33.6832 61.671C33.7964 60.926 34.199 59.4855 34.8914 57.3495C35.2673 56.2223 35.2878 55.3948 34.9528 54.8665C34.6178 54.3384 34.2013 54.027 33.7034 53.9318C33.2055 53.837 32.6397 53.9904 32.0059 54.3924C31.3239 54.8249 30.903 55.4084 30.7427 56.1429C30.5824 56.8777 30.7961 57.8462 31.384 59.0489L25.3563 61.9024C24.2448 59.7256 23.9422 57.5978 24.4488 55.5191C24.9551 53.4407 26.5528 51.5487 29.2418 49.8432C31.3353 48.5154 33.3027 47.8807 35.1438 47.9382C37.6407 48.0109 39.5137 49.0317 40.7622 51.0002C41.2799 51.8166 41.5537 52.7473 41.5835 53.7919C41.6133 54.8372 41.279 56.3486 40.581 58.3263C40.0982 59.7101 39.8774 60.7153 39.9183 61.3423C39.9593 61.9696 40.2172 62.6576 40.6923 63.4066ZM38.5396 66.8122L39.2311 66.3735C40.6591 65.4678 42.5511 65.8913 43.4567 67.3193C44.3625 68.7473 43.939 70.6393 42.511 71.5449L41.8194 71.9835C40.3914 72.8892 38.4995 72.4658 37.5938 71.0378C36.6881 69.6097 37.1115 67.7178 38.5396 66.8122Z"
                                fill="#CCE290"/>
                            <path
                                d="M32.0062 54.3936C31.3241 54.8262 30.9032 55.4098 30.743 56.1444C30.5826 56.8793 30.7962 57.8479 31.3842 59.0506"
                                stroke="#00376A" stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M31.3839 59.0508L29.4258 59.9777L27.4234 60.9257L25.3555 61.9046" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M25.3553 61.9045C24.2438 59.7275 23.9412 57.5994 24.4478 55.5205" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M39.9189 61.3442C39.9598 61.9717 40.2178 62.6597 40.6929 63.4088" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M40.6928 63.4087L35.2183 66.8808L34.8711 66.3333" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path
                                d="M34.8715 66.3334C34.2808 65.402 33.9065 64.5787 33.7494 63.8634C33.592 63.1485 33.5703 62.4183 33.6834 61.673C33.7966 60.9279 34.1992 59.4872 34.8916 57.3511C35.2676 56.2237 35.2881 55.396 34.953 54.8677"
                                stroke="#00376A" stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path
                                d="M25.4209 53.3448C26.2481 52.1016 27.5215 50.9347 29.2411 49.844C31.3349 48.5161 33.3025 47.8811 35.1438 47.9386C37.641 48.0113 39.5142 49.0323 40.7628 51.0011C41.2806 51.8176 41.5544 52.7484 41.5842 53.7932C41.614 54.8384 41.2797 56.35 40.5816 58.328"
                                stroke="#00376A" stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M41.8208 71.9869C40.3926 72.8927 38.5005 72.4692 37.5947 71.041" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M37.5939 71.041C37.2079 70.4324 37.0633 69.7395 37.1349 69.0747" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M38.54 66.8147L39.2316 66.376" stroke="#451D99" stroke-width="1.0583"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M39.2314 66.376C40.6596 65.4703 42.5517 65.8937 43.4574 67.3219" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M43.4575 67.3223C44.3634 68.7506 43.9399 70.6426 42.5117 71.5484" stroke="#00376A"
                                  stroke-width="1.0583" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path
                                d="M29.8916 34.9004C29.8916 35.6207 29.3077 36.2046 28.5875 36.2046C27.8671 36.2046 27.2832 35.6207 27.2832 34.9004C27.2832 34.1801 27.8671 33.5962 28.5875 33.5962C29.3077 33.5962 29.8916 34.1801 29.8916 34.9004Z"
                                stroke="#00376A" stroke-width="0.759999" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path
                                d="M87.6553 6.2041C87.6553 6.9244 87.0714 7.5082 86.3511 7.5082C85.6308 7.5082 85.0469 6.9244 85.0469 6.2041C85.0469 5.4838 85.6308 4.8999 86.3511 4.8999C87.0714 4.8999 87.6553 5.4838 87.6553 6.2041Z"
                                stroke="#00376A" stroke-width="0.759999" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path
                                d="M50.8895 61.3181C50.8895 61.709 50.5725 62.0261 50.1815 62.0261C49.7906 62.0261 49.4736 61.709 49.4736 61.3181C49.4736 60.9272 49.7906 60.6104 50.1815 60.6104C50.5725 60.6104 50.8895 60.9272 50.8895 61.3181"
                                stroke="#00376A" stroke-width="0.759999" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path
                                d="M92.0505 88.183C92.0505 88.574 91.7336 88.8909 91.3427 88.8909C90.9517 88.8909 90.6348 88.574 90.6348 88.183C90.6348 87.7921 90.9517 87.4751 91.3427 87.4751C91.7336 87.4751 92.0505 87.7921 92.0505 88.183Z"
                                stroke="#00376A" stroke-width="0.759999" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path
                                d="M43.6069 3.95C43.6069 4.4747 43.1816 4.9 42.6569 4.9C42.1323 4.9 41.707 4.4747 41.707 3.95C41.707 3.4253 42.1323 3 42.6569 3C43.1816 3 43.6069 3.4253 43.6069 3.95Z"
                                stroke="#00376A" stroke-width="0.759999" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path
                                d="M132.538 35.7875C132.538 35.5777 132.708 35.4075 132.918 35.4075C133.127 35.4075 133.298 35.5777 133.298 35.7875H132.538ZM131.968 37.1175V36.3575L131.997 36.3568L132.026 36.3545L132.055 36.351L132.083 36.346L132.111 36.3396L132.137 36.332L132.164 36.323L132.19 36.3128L132.215 36.3015L132.239 36.289L132.263 36.2751L132.286 36.2603L132.308 36.2445L132.33 36.2272L132.351 36.2094L132.371 36.1907L132.39 36.1705L132.408 36.1497L132.425 36.1284L132.441 36.1059L132.455 36.083L132.469 36.0592L132.482 36.0343L132.493 36.0091L132.503 35.9833L132.512 35.9573L132.52 35.9304L132.526 35.9026L132.531 35.8748L132.535 35.8463L132.537 35.8172L132.538 35.7875H133.298L133.296 35.8556L133.291 35.9229L133.282 35.9896L133.271 36.0552L133.256 36.1194L133.238 36.1827L133.217 36.2449L133.193 36.3055L133.166 36.3643L133.137 36.4214L133.105 36.4772L133.07 36.5313L133.033 36.5834L132.994 36.6339L132.952 36.6819L132.908 36.7277L132.862 36.772L132.814 36.8138L132.764 36.8529L132.712 36.8901L132.657 36.9247L132.602 36.9566L132.545 36.9861L132.485 37.0128L132.425 37.0366L132.363 37.0576L132.3 37.0756L132.236 37.0904L132.17 37.1022L132.103 37.1107L132.036 37.1158L131.968 37.1175ZM131.968 37.1175C131.758 37.1175 131.588 36.9473 131.588 36.7375C131.588 36.5277 131.758 36.3575 131.968 36.3575V37.1175ZM130.638 35.7875H131.398L131.398 35.8172L131.401 35.8463L131.404 35.8748L131.409 35.9026L131.416 35.9304L131.423 35.9569L131.432 35.9833L131.442 36.0094L131.454 36.0343L131.466 36.0589L131.48 36.0827L131.495 36.1059L131.511 36.1284L131.528 36.15L131.546 36.1705L131.565 36.1905L131.585 36.2096L131.605 36.2274L131.627 36.2443L131.649 36.2603L131.672 36.2752L131.696 36.2889L131.721 36.3015L131.746 36.3128L131.772 36.323L131.798 36.332L131.825 36.3396L131.853 36.346L131.88 36.351L131.909 36.3545L131.938 36.3568L131.968 36.3575V37.1175L131.9 37.1158L131.832 37.1107L131.766 37.1022L131.7 37.0904L131.636 37.0756L131.572 37.0576L131.51 37.0366L131.45 37.0128L131.391 36.9861L131.334 36.9567L131.278 36.9246L131.224 36.8901L131.172 36.8531L131.122 36.8136L131.073 36.7718L131.027 36.7279L130.983 36.6819L130.942 36.6336L130.902 36.5834L130.865 36.5313L130.831 36.4775L130.799 36.4217L130.769 36.3643L130.742 36.3052L130.719 36.2449L130.698 36.1831L130.68 36.1194L130.665 36.0552L130.653 35.9896L130.644 35.9229L130.639 35.8556L130.638 35.7875ZM130.638 35.7875C130.638 35.5777 130.808 35.4075 131.018 35.4075C131.227 35.4075 131.398 35.5777 131.398 35.7875H130.638ZM131.968 34.4575V35.2175L131.938 35.2182L131.909 35.2205L131.88 35.224L131.853 35.229L131.825 35.2354L131.798 35.2431L131.772 35.2519L131.746 35.2621L131.721 35.2735L131.696 35.2863L131.672 35.2999L131.649 35.3146L131.627 35.3306L131.606 35.3473L131.585 35.3654L131.564 35.3846L131.546 35.4042L131.528 35.4248L131.511 35.4468L131.495 35.469L131.48 35.4921L131.466 35.5163L131.454 35.5406L131.442 35.5656L131.432 35.5916L131.423 35.6179L131.416 35.6447L131.409 35.6723L131.404 35.7001L131.401 35.7287L131.398 35.7578L131.398 35.7875H130.638L130.639 35.7194L130.644 35.6521L130.653 35.5855L130.665 35.5197L130.68 35.4555L130.698 35.3921L130.719 35.33L130.742 35.2698L130.769 35.2106L130.799 35.1531L130.831 35.0977L130.865 35.0436L130.902 34.9914L130.941 34.9416L130.983 34.8932L131.027 34.8468L131.073 34.8032L131.121 34.7615L131.172 34.7218L131.224 34.6848L131.278 34.6501L131.334 34.6181L131.391 34.5889L131.45 34.5623L131.51 34.5383L131.572 34.5173L131.636 34.4994L131.7 34.4846L131.766 34.4728L131.832 34.4643L131.9 34.4592L131.968 34.4575ZM131.968 34.4575C132.177 34.4575 132.348 34.6277 132.348 34.8375C132.348 35.0473 132.177 35.2175 131.968 35.2175V34.4575ZM133.298 35.7875H132.538L132.537 35.7578L132.535 35.7287L132.531 35.7001L132.526 35.6723L132.52 35.6447L132.512 35.6176L132.503 35.5916L132.493 35.5659L132.482 35.5406L132.469 35.516L132.455 35.4918L132.441 35.469L132.425 35.4468L132.408 35.4251L132.39 35.4042L132.371 35.3844L132.351 35.3656L132.33 35.3475L132.308 35.3304L132.286 35.3146L132.263 35.3L132.239 35.2862L132.215 35.2735L132.189 35.2621L132.164 35.2519L132.138 35.2431L132.111 35.2354L132.083 35.229L132.055 35.224L132.026 35.2205L131.997 35.2182L131.968 35.2175V34.4575L132.036 34.4592L132.103 34.4643L132.17 34.4728L132.236 34.4846L132.3 34.4994L132.363 34.5173L132.425 34.5383L132.486 34.5623L132.545 34.5889L132.602 34.6182L132.657 34.65L132.712 34.6848L132.764 34.722L132.814 34.7613L132.862 34.803L132.908 34.847L132.952 34.8932L132.994 34.9413L133.033 34.9914L133.07 35.0436L133.105 35.098L133.137 35.1534L133.166 35.2106L133.193 35.2695L133.217 35.33L133.238 35.3924L133.256 35.4555L133.271 35.5197L133.282 35.5855L133.291 35.6521L133.296 35.7194L133.298 35.7875ZM133.298 35.7875C133.298 35.9973 133.127 36.1675 132.918 36.1675C132.708 36.1675 132.538 35.9973 132.538 35.7875H133.298Z"
                                fill="#00376A"/>
                            <path
                                d="M32.3536 79.0029C32.3536 79.475 31.9708 79.8579 31.4986 79.8579C31.0264 79.8579 30.6436 79.475 30.6436 79.0029C30.6436 78.5307 31.0264 78.1479 31.4986 78.1479C31.9708 78.1479 32.3536 78.5307 32.3536 79.0029Z"
                                stroke="#00376A" stroke-width="0.759999" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M29.8916 13.355L31.7917 15.6668" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M31.7917 13.355L29.8916 15.6668" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M63.6709 79.0029L65.571 81.3146" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M65.571 79.0029L63.6709 81.3146" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M129.831 78.7021L131.731 81.0138" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M131.731 78.7021L129.831 81.0138" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M66.5234 40.0977L68.4233 42.4095" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M68.4233 40.0977L66.5234 42.4095" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M62.7207 11.0435L64.6207 13.3553" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M64.6207 11.0435L62.7207 13.3553" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M129.831 11.0435L131.731 13.3553" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M131.731 11.0435L129.831 13.3553" stroke="#00376A" stroke-width="0.759999"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path
                                d="M85.9066 45.7144C86.7873 45.7144 87.5494 45.562 88.2608 45.291V42.3949C87.6341 42.6659 86.9397 42.8352 86.2623 42.8352C84.6364 42.8352 83.6033 41.7683 83.6033 39.6343C83.6033 37.4156 84.738 36.2809 86.3469 36.2809C87.1091 36.2809 87.7018 36.4164 88.176 36.6704V33.8421C87.4477 33.5541 86.7026 33.3848 85.9235 33.3848C82.9258 33.3848 80.5717 35.5865 80.5547 39.6343C80.5547 43.7837 83.0274 45.7144 85.9066 45.7144ZM96.0281 45.4773H98.8056V37.3479H96.0281V40.7521C95.8079 40.8876 95.5539 40.9722 95.2321 40.9722C94.8595 40.9722 94.5546 40.7859 94.5546 40.3287V37.3479H91.7771V40.769C91.7771 42.632 93.0472 43.3603 94.3174 43.3603C95.0796 43.3603 95.4692 43.2586 96.0281 43.0385V45.4773ZM104.253 45.7144C105.286 45.7144 106.065 45.562 106.725 45.2741V43.3264C106.048 43.5804 105.438 43.6821 104.676 43.6821C103.677 43.6821 103.05 43.3264 102.83 42.4118H107.2C107.471 38.923 105.98 37.1108 103.694 37.1108C101.34 37.1108 99.9508 38.7197 99.9508 41.4126C99.9508 44.1224 101.509 45.7144 104.253 45.7144ZM102.711 40.7351C102.779 39.8036 103.101 39.2956 103.762 39.2956C104.388 39.2956 104.642 39.8036 104.659 40.7351H102.711ZM108.328 45.4773H111.105V39.7359H113.883V37.3479H108.328V45.4773ZM118.212 37.1108C115.773 37.1108 114.402 38.7536 114.402 41.4126C114.402 44.0716 115.773 45.7144 118.212 45.7144C120.651 45.7144 122.006 44.0716 122.006 41.4126C122.006 38.7367 120.651 37.1108 118.212 37.1108ZM118.212 39.4818C118.957 39.4818 119.228 40.1085 119.228 41.4126C119.228 42.7167 118.957 43.3264 118.212 43.3264C117.467 43.3264 117.196 42.7167 117.196 41.4126C117.196 40.1085 117.467 39.4818 118.212 39.4818Z"
                                fill="#00376A"/>
                            <path
                                d="M101.206 48.3011V60.1565H98.2934V55.6176H95.5667V60.1565H92.6367V48.3011H95.5667V52.84H98.2934V48.3011H101.206ZM102.098 60.1565L105.858 48.3011H108.804L112.564 60.1565H109.516L109.025 58.3782H105.654L105.163 60.1565H102.098ZM106.247 55.9732H108.415L107.856 53.9409C107.619 53.0376 107.444 52.1851 107.331 51.3835C107.207 52.2868 107.037 53.1392 106.823 53.9409L106.247 55.9732ZM117.808 60.1565V56.1426C117.086 56.4136 116.352 56.5491 115.606 56.5491C114.602 56.5378 113.783 56.247 113.151 55.6768C112.518 55.1067 112.202 54.2627 112.202 53.1449V48.3011H115.115V52.6198C115.115 53.3876 115.527 53.7715 116.352 53.7715C116.86 53.7715 117.345 53.6417 117.808 53.382V48.3011H120.721V60.1565H117.808ZM121.595 60.1565L125.355 48.3011H128.302L132.062 60.1565H129.013L128.522 58.3782H125.152L124.661 60.1565H121.595ZM125.745 55.9732H127.913L127.354 53.9409C127.117 53.0376 126.942 52.1851 126.829 51.3835C126.705 52.2868 126.535 53.1392 126.321 53.9409L125.745 55.9732ZM133.885 60.1565V51.0786H131.175V48.3011H139.507V51.0786H136.798V60.1565H133.885ZM140.636 60.1565V48.3011H143.566V52.2642H144.887C146.084 52.2642 147.063 52.6001 147.825 53.2719C148.587 53.9437 148.968 54.9232 148.968 56.2103C148.968 57.4975 148.587 58.477 147.825 59.1488C147.063 59.8206 146.084 60.1565 144.887 60.1565H140.636ZM143.566 57.4975H144.65C145.079 57.4975 145.417 57.3874 145.666 57.1672C145.914 56.9471 146.038 56.6281 146.038 56.2103C146.038 55.8039 145.911 55.4877 145.657 55.2619C145.403 55.0361 145.067 54.9232 144.65 54.9232H143.566V57.4975ZM150.842 56.2273C150.842 55.7079 150.935 55.2139 151.121 54.7454C151.308 54.2768 151.511 53.8985 151.731 53.6106C151.951 53.3227 152.154 53.0037 152.341 52.6537C152.527 52.3037 152.62 51.9763 152.62 51.6714C152.62 51.1182 152.253 50.8415 151.519 50.8415C150.774 50.8415 150.006 51.1238 149.216 51.6883V48.8939C150.198 48.3406 151.186 48.064 152.18 48.064C153.117 48.064 153.933 48.3096 154.627 48.8007C155.322 49.2919 155.669 50.0173 155.669 50.977C155.669 51.519 155.55 52.0497 155.313 52.569C155.076 53.0884 154.813 53.5203 154.526 53.8647C154.238 54.209 153.975 54.5957 153.738 55.0248C153.501 55.4539 153.382 55.8547 153.382 56.2273H150.842ZM152.112 60.3767C151.694 60.3767 151.336 60.2468 151.037 59.9871C150.737 59.7274 150.588 59.3492 150.588 58.8524C150.588 58.3556 150.737 57.9802 151.037 57.7261C151.336 57.4721 151.694 57.3451 152.112 57.3451C152.541 57.3451 152.905 57.4721 153.205 57.7261C153.504 57.9802 153.653 58.3556 153.653 58.8524C153.653 59.3492 153.504 59.7274 153.205 59.9871C152.905 60.2468 152.541 60.3767 152.112 60.3767Z"
                                fill="#00376A"/>
                        </svg>
                    </a>
                </div>
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

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

    </script>
    <script src="<?php echo e(asset('assets/js/video.js')); ?>"></script>















    <script>
        new VideoPlayer({'selector': '.video-player'});
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app.layout.index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev/www/test.salemhokei.loc/resources/views/app/pages/home/index.blade.php ENDPATH**/ ?>