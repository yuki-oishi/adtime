<div class="customer-voice_wrapper">
    <div class="upside_wrappper">
        <h2><?php echo get_field('title'); ?></h2>
        <?php if (get_field('tanto')): ?>
        <h3>担当業務</h3>
        <p><?php echo get_field('tanto'); ?></p>
        <?php endif; ?>
        <h3>趣味</h3>
        <p><?php echo get_field('hobby'); ?></p>
        <h3>自己紹介</h3>
        <p><?php echo get_field('my_info'); ?></p>
    </div>
    <div class="downside_wrapper">
        <div class="user">
        <?php 
            $image = get_field('image'); 
            $alt = $image['alt'];
            $url = $image['sizes']['medium'];
        ?>
            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
            <span><?php echo get_field('name'); ?>さん<br><?php echo get_field('history'); ?></span>
        </div>
    </div>
</div>