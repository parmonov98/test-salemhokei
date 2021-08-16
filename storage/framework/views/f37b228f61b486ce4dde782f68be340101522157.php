<?php $__env->startSection("title",__("default.site_name").' | '.$item->getAttribute('name_'.$lang) ?? $item->getAttribute('name_ru')); ?>

<?php $__env->startSection("content"); ?>
    <div style="background-image: url(/assets/img/pattern1.png);
    background-size: 1440px; opacity: .5;" class="main-wrapper__bg"></div>
    <section>
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="/<?php echo e($lang); ?>"
                       title="<?php echo e(__("default.pages.main.title")); ?>"><?php echo e(__("default.pages.main.title")); ?></a></li>
                <li><a href="/<?php echo e($lang); ?>/schools" title="<?php echo e(__("default.pages.schools.title")); ?>"><?php echo e(__("default.pages.schools.title")); ?></a></li>
                <li><span><?php echo $item->getAttribute('name_'.$lang) ?? $item->getAttribute('name_ru'); ?></span></li>
            </ul>
            <article class="article">
                <div class="title-block">
                    <h1 class="title-primary"><?php echo $item->getAttribute('name_'.$lang) ?? $item->getAttribute('name_ru'); ?></h1>
                </div>


                <div class="row row--multiline">
                    <div class="col-sm-5 col-md-4">
                        <div class="article-sidebar margin-50">
                            <img src="<?php echo $item->avatar; ?>" class="article__image article__image--school" alt="">
                            <div class="text-center">
                                <a href="#testLesson" title="<?php echo e(__("default.pages.schools.testLesson")); ?>" data-fancybox="" class="btn"><?php echo e(__("default.pages.schools.testLesson")); ?></a>
                            </div>
                        </div>
                        <div class="share">
                            <span><?php echo e(__("default.pages.schools.share")); ?>:</span>
                            <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                            <script src="https://yastatic.net/share2/share.js"></script>
                            <div class="ya-share2" data-services="vkontakte,facebook,twitter,whatsapp,telegram"></div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-8">
                        <div class="plain-text">
                            <p><strong><?php echo $item->regions[0]->getAttribute('name_'.$lang) ?? $item->regions[0]->getAttribute('name_ru'); ?></strong></p>
                            <?php echo $item->getAttribute('annotation_'.$lang) ?? $item->getAttribute('annotation_ru'); ?><br>
                            <?php echo $item->getAttribute('description_'.$lang) ?? $item->getAttribute('description_ru'); ?>

                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("scripts"); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app.layout.index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev/www/test.salemhokei.loc/resources/views/app/pages/school.blade.php ENDPATH**/ ?>