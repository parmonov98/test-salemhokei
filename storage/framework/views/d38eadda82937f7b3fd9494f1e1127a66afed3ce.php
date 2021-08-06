<?php $__env->startSection("title",__("default.site_name").' | '.__("default.pages.for_parents.whats_start")); ?>

<?php $__env->startSection("content"); ?>
    <div style="background: url(/assets/img/pattern4.png);
    background-size: 1440px; opacity: .75;" class="main-wrapper__bg"></div>

    <section class="blue-title">
        <div class="container">
            <div class="title-block text-center">
                <h1 class="title-primary"><?php echo e(__("default.pages.for_parents.whats_start")); ?></h1>
            </div>
        </div>
    </section>

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

            <div class="spoilers spoilers--independent">
                <div class="spoiler">
                    <div class="spoiler__title">
                        <span><?php echo __("default.pages.faq.info_title_1"); ?></span>
                    </div>
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            <?php echo __("default.pages.faq.info_desc_1"); ?>

                        </div>
                    </div>
                </div>
                <div class="spoiler">
                    <div class="spoiler__title">
                        <span><?php echo __("default.pages.faq.info_title_2"); ?></span>
                    </div>
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            <?php echo __("default.pages.faq.info_desc_2"); ?>

                        </div>
                    </div>
                </div>
                <div class="spoiler">
                    <div class="spoiler__title">
                        <span><?php echo __("default.pages.faq.info_title_3"); ?></span>
                    </div>
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            <?php echo __("default.pages.faq.info_desc_3"); ?>

                        </div>
                    </div>
                </div>
                <div class="spoiler">
                    <div class="spoiler__title">
                        <span><?php echo __("default.pages.faq.info_title_4"); ?></span>
                    </div>
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            <?php echo __("default.pages.faq.info_desc_4"); ?>

                        </div>
                    </div>
                </div>
                <div class="spoiler">
                    <div class="spoiler__title">
                        <span><?php echo __("default.pages.faq.info_title_5"); ?></span>
                    </div>
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            <?php echo __("default.pages.faq.info_desc_5"); ?>

                        </div>
                    </div>
                </div>
                <div class="spoiler">
                    <div class="spoiler__title">
                        <span><?php echo __("default.pages.faq.info_title_6"); ?></span>
                    </div>
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            <?php echo __("default.pages.faq.info_desc_6"); ?>

                        </div>
                    </div>
                </div>
                <div class="spoiler">
                    <div class="spoiler__title">
                        <span><?php echo __("default.pages.faq.info_title_7"); ?></span>
                    </div>
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            <?php echo __("default.pages.faq.info_desc_7"); ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("scripts"); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app.layout.index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dev/Documents/laravel/test.salemhokei.kz/resources/views/app/pages/faq.blade.php ENDPATH**/ ?>