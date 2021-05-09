<title>アドコラム｜【チラシ×WEB集客のプロ】総合広告代理店のアドタイム</title>
<meta name="description" content="アドコラムでは、ポスティングやWEB集客に関するお悩みから解決方法、集客・運用ノウハウ等、気になる情報を発信しています。">
<?php get_header();
while (have_posts()) {
  the_post();
?>
<main class="p-single p-single-column">
  <div class="p-archive__kv">
    <div class="container">
        <h1 class="pagetitle">アドコラム</h1>
    </div>
  </div>
  <div class="breadcrumb">
    <div class="container">
      <?php custom_breadcrumb(); ?>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <!-- main -->
      <div class="nine columns">
        <div class="article_info">
          <i class="far fa-clock"></i>&nbsp;<?php the_time('Y.m.d'); ?>&nbsp;
          <?php $terms = wp_get_object_terms($post->ID,'column_cat'); ?>
          <?php foreach($terms as $term) { ?>
            <span class="c-category"><?php echo $term->name; ?></span>
          <?php } ?>
        </div>
        <h2 class="c-contenttitle"><?php the_title() ?></h2>
        <div class="eyecatch" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>);"></div>
        <div class="excerpt"><?php echo get_field('excerpt'); ?></div>
        <div class="post">
          <?php the_content(); ?>
        </div>
        <div class="c-pagination-detail">
						<ul>
							<li><?php
											if (wp_is_mobile()) {
												twpp_adjacent_post_link(true, 6);

											} else {
												twpp_adjacent_post_link(true);
											}
									?>
							</li>
							<li><a href="<?php echo esc_url( home_url( '/column/' ) ); ?>" >コラム一覧</a></li>
							<li><?php
											if (wp_is_mobile()) {
												twpp_adjacent_post_link(false, 6);

											} else {
												twpp_adjacent_post_link(false);
											}
									?>
							</li>
						</ul>
        </div>
        <section class="recommend_wrapper">
          <h3 class="recommend_title">おススメ！関連するコラム</h3>
          <?php
          $terms = get_the_terms($post->ID,'column_cat');
          $slug;
          foreach( $terms as $term ) {
              $slug = $term->slug;
          }

          $args = array(
                  'posts_per_page' => 8, // 表示する投稿数
                  'post_type' => array('column'), // 取得する投稿タイプのスラッグ
                  'orderby' => 'date', //日付で並び替え
                  'order' => 'DESC', // 降順 or 昇順
                  'post__not_in' => array($post->ID),
                  'tax_query'      => array(
                      array(
                      'taxonomy' => 'column_cat',  // カスタムタクソノミー名
                      'field'    => 'slug',  // ターム名を term_id,slug,name のどれで指定するか
                      'terms'    => $slug // タクソノミーに属するターム名
                      )
                  )
              );
          
          $my_posts = get_posts($args);
          if (count($my_posts) == 0) {
              echo '<p>関連するコラムはありません</p>';
          } else {
              echo '<ul class="recommend_list">';
              foreach ($my_posts as $post) : setup_postdata($post); ?>
                  <li class="item">
                      <a href="<?php the_permalink();?>" class="c-black ho8">
                          <?php 
                          if(has_post_thumbnail( get_the_ID() )) { ?>
                              <img class="imgBlock" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>">
                          <?php } ?>
                          
                          <i class="far fa-clock"></i> <?php the_time('Y.m.d'); ?>
                          <h4 class="">
                              <?php 
                              if (wp_is_mobile()) {
                                  echo wp_trim_words(get_the_title(), 15); 
                              } else {
                                  echo wp_trim_words(get_the_title(), 20); 
                              } ?>
                          </h4>
                          <p><?php echo wp_trim_words( get_the_content(),20); ?></p>
                      </a>
                  </li>
              <?php 
              endforeach; ?>
              </ul>
          <?php } ?>
      </section>
      </div><!-- main -->
      <!-- sidebar -->
      <div class="three columns">
        <?php include('sidebar-search.php'); ?>
      </div><!-- sidebar -->
    </div><!-- row -->
  </div><!-- container -->
</main>
<?php 
}
get_footer(); ?>