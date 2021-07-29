<header class="header">
    <div class="container">
        <div class="logo">
            <a href="/<?php echo e($lang); ?>" title="Главная">
                <img class="logo_img" src="/assets/img/logo.svg" alt="">
                <img class="mobile_logo_img" src="/assets/img/salem-hokkey-logo.png" alt="">
            </a>
        </div>
        <div class="menu-btn-wrapper">
            <div class="menu-btn">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="header-right">
            <div class="header-right__top">
                

            </div>
            <?php if($lang == 'kk'): ?>
            <nav class="menu menu--kk"><?php else: ?><nav class="menu">
                    <?php endif; ?>
                    <ul>
        <li><a href="/<?php echo e($lang . '/about'); ?>" title="<?php echo e(__('default.pages.header.about')); ?>"><span
                        data-title="<?php echo e(__('default.pages.header.about')); ?>"><?php echo e(__('default.pages.header.about')); ?></span></a>
                    </li>
                    <li><a href="/<?php echo e($lang . '/schools'); ?>" title="<?php echo e(__('default.pages.header.schools')); ?>"><span
                                data-title="<?php echo e(__('default.pages.header.schools')); ?>"><?php echo e(__('default.pages.header.schools')); ?></span></a>
                    </li>
                    <li>
                        <a href="javascript:;" title="<?php echo e(__('default.pages.header.to_parents')); ?>">
                            <span
                                data-title="<?php echo e(__('default.pages.header.to_parents')); ?>"><?php echo e(__('default.pages.header.to_parents')); ?></span>
                        </a>

                    </li>
                    <li><a href="/<?php echo e($lang . '/equipment'); ?>" title="<?php echo e(__('default.pages.header.equipment')); ?>"><span
                                data-title="<?php echo e(__('default.pages.header.equipment')); ?>"><?php echo e(__('default.pages.header.equipment')); ?></span></a>
                    </li>
                    <li><a href="/<?php echo e($lang . '/faq'); ?>" title="<?php echo e(__('default.pages.header.equipment')); ?>"><span
                                data-title="<?php echo e(__('default.pages.for_parents.whats_start')); ?>"><?php echo e(__('default.pages.for_parents.whats_start')); ?></span></a>
                    </li>
                    <li>
                        <a href="/<?php echo e($lang . '/news'); ?>" title="<?php echo e(__('default.pages.header.news')); ?>">
                            <span
                                data-title="<?php echo e(__('default.pages.header.news')); ?>"><?php echo e(__('default.pages.header.news')); ?></span>
                        </a>
                    </li>
                    <li>

                    </li>
                    </ul>
<div class="language" style="padding-left: 2em;">
                            <?php if($lang == 'ru'): ?>
                            <a href="/kk<?php echo e($uri); ?>" title="KZ">KZ</a><span>|</span><a href="/ru<?php echo e($uri); ?>" title="RU"
                                class="active">RU</a>
                            <?php else: ?>
                            <a href="/kk<?php echo e($uri); ?>" title="KZ" class="active">KZ</a><span>|</span><a
                                href="/ru<?php echo e($uri); ?>" title="RU">RU</a>
                            <?php endif; ?>
                        </div>
                    

                </nav>
        </div>
    </div>
</header>


<?php /**PATH /home/dev/Documents/laravel/test.salemhokei.kz/resources/views/app/layout/components/header.blade.php ENDPATH**/ ?>