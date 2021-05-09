<article class="item">
  <a href="<?php the_permalink();?>" class="link">
    <div class="box">
      <?php 
      $image_url = '';
      $image_type = get_field('archive_image_type');
      if ($image_type == 'posting') {
        $image_url = get_template_directory_uri(). '/assets/images/voice/posting-thumbnail.png';
      } else if ($image_type == 'web') {
        $image_url = get_template_directory_uri(). '/assets/images/voice/web-thumbnail.png';
      } else {
        $image_url = get_field('archive_image');
      }
      ?>
      <?php if (wp_is_mobile()): ?>
        <h3 class="ttl"><span><?php echo wp_trim_words(get_field('company_type'),8); ?></span></h3>
      <?php else: ?>
        <h3 class="ttl"><span><?php echo wp_trim_words(get_field('company_type'),15); ?></span></h3>
      <?php endif; ?>

      <div class="imagewrap" style="">
        <img width="90" src="<?php echo $image_url; ?>">
      </div>
      <div class="contentwrap">
        <p class="company_name"><?php echo wp_trim_words(get_field('company_name'), 10); ?>様</p>
        <p class="c-time_cate">
          <i class="far fa-clock"></i>&nbsp;<?php the_time('Y.m.d'); ?>&nbsp;
          <?php $terms = wp_get_object_terms($post->ID,'voice_cat'); ?>
          <?php foreach($terms as $term) { ?>
            <span class="c-category"><?php echo $term->name; ?></span>
          <?php } ?>
        </p>
        <p class="title"><?php echo get_field('archive_title'); ?></p>
        <p class="excerpt"><?php echo wp_trim_words(get_field('kanso'),60); ?></p>
      </div>
      <span class="c-morelink">続きはこちら<i class="fas fa-arrow-right"></i></span>
    </div>
  </a>
</article>
