<?php $__env->startSection("title",__("default.site_name").' | '.__("default.pages.schools.title")); ?>

<?php $__env->startSection("content"); ?>
    <div style="background-image: url(/assets/img/pattern1.png);
    background-size: 1440px; opacity: .5;" class="main-wrapper__bg"></div>

    <section class="blue-title">
        <div class="container">
            <div class="title-block text-center">
                <h1 class="title-primary"><?php echo e(__("default.pages.schools.title")); ?></h1>
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
                                    data-placeholder="<?php echo e(__("default.pages.schools.choose_region")); ?>" required>
                                <option class="hidden" value="" selected
                                        disabled><?php echo e(__("default.pages.schools.choose_region")); ?></option>
                                <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo $region->getAttribute('id'); ?>"><?php echo $region->getAttribute('name_'.$lang) ?? $region->getAttribute('name_ru'); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </form>
                    </div>
                </div>
            </div>

            <div class="margin-50">
                <?php $__currentLoopData = $schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="school">
                        <div class="row row--multiline">
                            <div class="col-sm-4">
                                <div class="school__img">
                                    <img src="<?php echo $school->avatar; ?>" alt="">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="school-desc">
                                    <h3 class="school__title"><?php echo $school->getAttribute('name_'.$lang) ?? $school->getAttribute('name_ru'); ?></h3>
                                    <div class="school__text">
                                        <p><?php echo $school->getAttribute('annotation_'.$lang) ?? $school->getAttribute('annotation_ru'); ?></p>
                                    </div>
                                    <a href="/<?php echo e($lang); ?>/school/<?php echo e($school->alias); ?>" title="<?php echo e(__("default.pages.schools.detail")); ?>" class="btn btn--arrow btn--red"><?php echo e(__("default.pages.schools.detail")); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
                
                    
                        
                            
                                
                                    
                                
                                
                                
                                
                                
                            
                        
                    
                
            

            <ul class="pagination">
                <?php echo e($schools->links('app.pages.paginate')); ?>

            </ul>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("scripts"); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app.layout.index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/botdev/www/salemhokei.botdev.uz/public/resources/views/app/pages/schools.blade.php ENDPATH**/ ?>