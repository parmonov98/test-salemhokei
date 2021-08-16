<?php /* /home/dev/www/test.salemhokei.loc/resources/views/admin/partials/topnav.blade.php */ ?>
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="/assets/admin/img/user_photo.png" alt=""><?php echo e(Auth::user()->name); ?>

                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="/admin/profile/">Профиль</a></li>
                        <li>
                            <a href="/admin/logout/" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i>Выйти</a>
                            <form id="logout-form" action="<?php echo e(url('/admin/logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>