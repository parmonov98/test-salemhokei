<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(url('/admin/login')); ?>">
    <?php echo e(csrf_field()); ?>

    <h1>Авторизация</h1>
    <div>
        <input id="email" type="email" name="email" class="form-control" placeholder="Email" required="required" />
        <?php if($errors->has('email')): ?>
            <span class="help-block">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
        <?php endif; ?>
    </div>
    <div>
        <input id="password" type="password" name="password" class="form-control" placeholder="Пароль" data-validate-length="8,16" required="required" />
        <?php if($errors->has('password')): ?>
            <span class="help-block">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
        <?php endif; ?>
    </div>
        <div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" class="flat" name="remember" checked="<?php echo e(old('remember') ? 'checked' : ''); ?>"> Запомнить
                </label>
            </div>
            <button type="submit" class="btn btn-primary">
                Вход
            </button>
        </div>

    <div class="clearfix"></div>

    <div class="separator">
        <div>
            <p>©<?php echo e(date("Y")); ?> All Rights Reserved</p>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/botdev/www/salemhokei.botdev.uz/public/resources/views/admin/auth/login.blade.php ENDPATH**/ ?>