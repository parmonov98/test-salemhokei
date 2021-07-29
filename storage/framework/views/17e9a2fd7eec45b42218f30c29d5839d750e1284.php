<?php $__env->startSection("title",__("default.site_name").' | '.__("default.pages.articles.title")); ?>

<?php $__env->startSection("content"); ?>
    <div style="background-image: url(/assets/img/pattern1.png);
    background-size: 1440px; opacity: .5;" class="main-wrapper__bg"></div>
    <section>
        <div class="container">
            <div class="title-block">
                <ul class="breadcrumbs">
                    <li><a href="/<?php echo e($lang); ?>"
                           title="<?php echo e(__("default.pages.main.title")); ?>"><?php echo e(__("default.pages.main.title")); ?></a></li>
                    <li><span><?php echo e(__("default.pages.articles.title")); ?></span></li>
                </ul>
                <h1 class="title-primary"><img src="/assets/img/circle-icon/news.svg" alt="">
                    <span><?php echo e(__("default.pages.articles.title")); ?></span></h1>

                <div class="mobile-dropdown">
                    <div class="mobile-dropdown__title"><?php echo e(__("default.pages.articles.categories")); ?></div>
                    <div class="mobile-dropdown__desc">
                        <div class="categories-list">
                            <a href="/<?php echo e($lang); ?>/news" class="active"
                               title="<?php echo e(__("default.pages.articles.all_news")); ?>"><?php echo e(__("default.pages.articles.all_news")); ?></a>
                            <a href="/<?php echo e($lang); ?>/news_articles"
                               title="<?php echo e(__("default.pages.articles.news_articles")); ?>"><?php echo e(__("default.pages.articles.news_articles")); ?></a>
                            <a href="/<?php echo e($lang); ?>/news_videos" title="<?php echo e(__("default.pages.articles.news_videos")); ?>"
                            ><?php echo e(__("default.pages.articles.news_videos")); ?></a>
                            <a href="/<?php echo e($lang); ?>/news_albums"
                               title="<?php echo e(__("default.pages.articles.news_albums")); ?>"><?php echo e(__("default.pages.articles.news_albums")); ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="margin-50">
                <div class="row row--multiline">
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->type == 1): ?>
                            <div class="col-sm-6 col-md-4">
                                <a href="/<?php echo e($lang); ?>/article/<?php echo e($item->alias); ?>" title="" class="card">
                                    <div class="card__img">
                                        <img src="<?php echo e($item->avatar); ?>" alt="">
                                    </div>
                                    <div class="card__date"><?php echo e(date('d.m.Y', strtotime($item->published_at))); ?></div>
                                    <h4 class="card__title"><?php echo $item->getAttribute('name_'.$lang) ?? $item->getAttribute('name_ru'); ?></h4>
                                    <span class="btn btn--arrow btn--red"><?php echo e(__("default.pages.articles.detail_article")); ?></span>
                                </a>
                            </div>
                        <?php elseif($item->type == 2): ?>
                            <div class="col-sm-6 col-md-4">
                                <a href="<?php echo $item->getAttribute('link_'.$lang) ?? $item->getAttribute('link_ru'); ?>"
                                   data-fancybox title=""
                                   class="card">
                                    <div class="card__img video-cover">
                                        <div class="video-cover__play">
                                        </div>
                                        <?php
                                            $url = $item->getAttribute('link_'.$lang );
                                            if(empty($item->getAttribute('link_'.$lang ))){
                                                $url = $item->getAttribute('link_ru' );
                                            }
                                                parse_str(parse_url( $url, PHP_URL_QUERY ), $vars)
                                        ?>
                                        <img src="<?php echo e('https://img.youtube.com/vi/'.$vars['v'].'/sddefault.jpg'); ?>" alt="">
                                    </div>
                                    <div class="card__date"><?php echo e(date('d.m.Y', strtotime($item->published_at))); ?></div>
                                    <h4 class="card__title"><?php echo $item->getAttribute('name_'.$lang) ?? $item->getAttribute('name_ru'); ?></h4>
                                    <span class="btn btn--arrow btn--red"><?php echo e(__("default.pages.videos.watch")); ?></span>
                                </a>
                            </div>
                        <?php else: ?>
                            <div class="col-sm-6 col-md-4">
                                <a href="/<?php echo e($lang); ?>/album/<?php echo e($item->id); ?>" title="" class="card">
                                    <div class="card__img">
                                        <img src="<?php echo e($item->avatar); ?>" alt="">
                                    </div>
                                    <div class="card__date"><?php echo e(date('d.m.Y', strtotime($item->published_at))); ?></div>
                                    <h4 class="card__title"><?php echo $item->getAttribute('name_'.$lang) ?? $item->getAttribute('name_ru'); ?></h4>
                                    <span class="btn btn--arrow btn--red"><?php echo e(__("default.pages.main.detail_albums")); ?></span>
                                </a>
                            </div>
                        <?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <ul class="pagination">
            <?php echo e($items->links('app.pages.paginate')); ?>

            </ul>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("scripts"); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app.layout.index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev/Documents/laravel/test.salemhokei.kz/resources/views/app/pages/news.blade.php ENDPATH**/ ?>