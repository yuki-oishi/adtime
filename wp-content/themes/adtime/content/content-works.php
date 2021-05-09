<article class="item">
  <div class="box">
    <div class="imagewrap" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>);">
      <div class="btnwrap">
        <div class="links">
          <a class="link" href="<?php the_permalink();?>">詳細を見る</a>
          <?php if (get_field('url')) : ?>
            <a class="link" href="<?php echo get_field('url'); ?>" target="_blank">このサイトを見る</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="detail">
      <p class="company_name">企業名:<?php echo get_field('customer_name'); ?></p>
      <?php $terms = wp_get_object_terms($post->ID,'works_cat'); ?>
      <?php foreach($terms as $term) { ?>
      <span class="c-category"><?php echo $term->name; ?></span>
      <?php } ?>
      <p class="title"><?php echo get_field('site_name'); ?></p>
      <!-- <i class="far fa-clock"></i>&nbsp;<?php the_time('Y.m.d'); ?>&nbsp; -->
      <a href="<?php the_permalink();?>" class="link"></a>
    </div>
  </div>    
</article>