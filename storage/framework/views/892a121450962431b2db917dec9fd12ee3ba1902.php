<div id="request" class="form-modal" style="display:none">
    <h3 class="title-primary text-center"><?php echo e(__("default.pages.modals.write_us")); ?></h3>
    <form class="form" method="post" action="/contact_mail">
        <?php echo e(csrf_field()); ?>

        <div class="input-group">
            <input type="text" name="name" placeholder="<?php echo e(__("default.pages.modals.name")); ?>" class="input-regular" required>
        </div>
        <div class="input-group">
            <input type="tel" name="phone" placeholder="<?php echo e(__("default.pages.modals.phone")); ?>" onfocus="$(this).inputmask('+7 999 999 99 99')"
                   class="input-regular" required>
        </div>
        <div class="input-group">
            <input type="email" name="email" placeholder="<?php echo e(__("default.pages.modals.email")); ?>" class="input-regular" required>
        </div>
        <div class="input-group">
            <textarea name="message" placeholder="<?php echo e(__("default.pages.modals.message")); ?>" class="input-regular"></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn"><?php echo e(__("default.pages.modals.send")); ?></button>
        </div>
    </form>
</div>

<div id="testLesson" class="form-modal" style="display:none">
    <h3 class="title-primary text-center"><?php echo e(__("default.pages.modals.try_lesson_title")); ?></h3>
    <form class="form" method="post" action="/record_to_school">
        <?php echo e(csrf_field()); ?>

        <div class="input-group">
            <input type="text" name="name" placeholder="<?php echo e(__("default.pages.modals.name")); ?>" class="input-regular" required>
        </div>
        <div class="input-group">
            <input type="tel" name="phone" placeholder="<?php echo e(__("default.pages.modals.phone")); ?>" onfocus="$(this).inputmask('+7 999 999 99 99')"
                   class="input-regular" required>
        </div>
        <div class="input-group">
            <input type="email" name="email" placeholder="<?php echo e(__("default.pages.modals.email")); ?>" class="input-regular" required>
        </div>
        <?php if(!empty($item->regions[0])): ?>
            <div class="input-group">
                <input type="hidden" name="region" class="input-regular"
                       value="<?php echo $item->regions[0]->getAttribute('name_'.$lang) ?? $item->regions[0]->getAttribute('name_ru'); ?>">
            </div>
        <?php endif; ?>
        <div class="text-center">
            <button type="submit" class="btn"><?php echo e(__("default.pages.modals.send_write")); ?></button>
        </div>
    </form>
</div>


<div id="equipment_bib" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.bib")); ?></h4>
    <p><?php echo e(__("default.pages.equipment.bib_content")); ?></p>
    <?php echo __("default.pages.equipment.bib_video"); ?>

</div>

<div id="equipment_pads" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.pads")); ?></h4>
    <p><?php echo e(__("default.pages.equipment.pads_content")); ?></p>
    <?php echo __("default.pages.equipment.pads_video"); ?>


</div>
<div id="equipment_gaiters" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.gaiters")); ?></h4>
    <p><?php echo e(__("default.pages.equipment.gaiters_content")); ?></p>
    <?php echo __("default.pages.equipment.gaiters_video"); ?>


</div>

<div id="equipment_sink" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.sink")); ?></h4>
    <p><?php echo e(__("default.pages.equipment.sink_content")); ?></p>
</div>

<div id="neck_protection" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.neck_protection")); ?></h4>
    <p><?php echo e(__("default.pages.equipment.neck_protection_content")); ?></p>
    <?php echo __("default.pages.equipment.neck_video"); ?>

</div>

<div id="equipment_kneecap" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.kneecap")); ?></h4>
    <?php echo e(__("default.pages.equipment.kneecap_video")); ?>


</div>

<div id="equipment_shields" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.shields")); ?></h4>
    <p><?php echo e(__("default.pages.equipment.shields_content")); ?></p>
    <?php echo __("default.pages.equipment.shields_video"); ?>


</div>

<div id="hockey_goal" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.main.hockey_goal_title")); ?></h4>
    <p><?php echo e(__("default.pages.main.hockey_goal_content")); ?></p>

</div>

<div id="referee_field" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.main.referee_field_title")); ?></h4>
    <p><?php echo __("default.pages.main.referee_field_content"); ?></p>
</div>

<div id="washer_field" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.main.washer_field_title")); ?></h4>
    <p><?php echo __("default.pages.main.washer_field_content"); ?></p>
</div>

<div id="hockey_field" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.main.hockey_field_title")); ?></h4>
    <?php echo __("default.pages.main.hockey_field_content"); ?>

</div>

<div id="scoreboard" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.main.scoreboard_title")); ?></h4>
    <p><?php echo __("default.pages.main.scoreboard_content"); ?></p>
</div>

<div id="ice_machine" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.main.ice_machine_title")); ?></h4>
    <p><?php echo __("default.pages.main.ice_machine_content"); ?></p>
</div>

<div id="tribune" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.main.tribune_title")); ?></h4>
    <p><?php echo __("default.pages.main.tribune_content"); ?></p>
</div>

<div id="tribune" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.main.tribune_title")); ?></h4>
    <p><?php echo __("default.pages.main.tribune_desc"); ?></p>
</div>

<div id="bench" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.main.bench_title")); ?></h4>
    <p><?php echo __("default.pages.main.bench_desc"); ?></p>
</div>

<div id="penalty_box" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.main.penalty_box_title")); ?></h4>
    <p><?php echo __("default.pages.main.penalty_box_desc"); ?></p>
</div>

<div id="zone_a" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.main.zone_a_title")); ?></h4>
    <p><?php echo __("default.pages.main.zone_a_desc"); ?></p>
</div>

<div id="zone_b" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.main.zone_b_title")); ?></h4>
    <p><?php echo __("default.pages.main.zone_b_desc"); ?></p>
</div>

<div id="zone_c" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.main.zone_c_title")); ?></h4>
    <p><?php echo __("default.pages.main.zone_c_desc"); ?></p>
</div>

<div id="goalkeeper" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.about.goalkeeper_title")); ?></h4>
    <p><?php echo __("default.pages.about.goalkeeper_content"); ?></p>
</div>

<div id="defender" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.about.defender_title")); ?></h4>
    <p><?php echo __("default.pages.about.defender_content"); ?></p>
</div>

<div id="forward" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.about.forward_title")); ?></h4>
    <p><?php echo __("default.pages.about.forward_content"); ?></p>
</div>

<div id="equipment_player" class="form-modal" style="display:none">
    
    <?php echo __("default.pages.equipment.player_content"); ?>

</div>

<div id="equipment_helmet" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.helmet")); ?></h4>
    <?php echo __("default.pages.equipment.helmet_content"); ?>

    <?php echo __("default.pages.equipment.helmet_video"); ?>


</div>

<div id="equipment_shorts" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.shorts")); ?></h4>
    <?php echo __("default.pages.equipment.shorts_content"); ?>

    <?php echo __("default.pages.equipment.shorts_video"); ?>


</div>

<div id="equipment_stick" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.stick")); ?></h4>
    <?php echo __("default.pages.equipment.stick_content"); ?>

    <?php echo __("default.pages.equipment.stick_video"); ?>


</div>

<div id="equipment_skates" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.skates")); ?></h4>
    <?php echo __("default.pages.equipment.skates_content"); ?>

    <?php echo __("default.pages.equipment.skates_video"); ?>


</div>

<div id="equipment_gloves" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.gloves")); ?></h4>
    <?php echo __("default.pages.equipment.gloves_content"); ?>

    <?php echo __("default.pages.equipment.gloves_video"); ?>


</div>

<div id="equipment_jersey" class="form-modal" style="display:none">
    <h4 class="title-primary text-center"><?php echo e(__("default.pages.equipment.jersey")); ?></h4>
    <?php echo __("default.pages.equipment.jersey_content"); ?>

    <?php echo __("default.pages.equipment.jersey_video"); ?>


</div>

<div id="messageSuccess" class="form-modal" style="display:none">
    <h3 class="title-primary text-center"><?php echo e(__("default.pages.modals.success_message")); ?></h3>

    
        
    
</div>
<?php if(session()->has('success')): ?>
    <script>
        $.fancybox.open({
            src: "#messageSuccess",
            touch: false
        })
    </script>

<?php endif; ?><?php /**PATH /home/dev/www/test.salemhokei.loc/resources/views/app/partials/modals/request.blade.php ENDPATH**/ ?>