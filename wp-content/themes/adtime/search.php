<?php
/*
Template Name: Search Page
*/
?><?php get_header(); ?>
<?php 
  // 投稿タイプ毎に検索結果のテンプレなどを変える。
  $post_type_slug = get_query_var( 'post_type' );
  if (is_array($post_type)) {
    $post_type_slug = reset( $post_type );
  }
?>

<main class="p-archive p-archive-column p-archive-works">
  <div class="p-archive__kv">
    <div class="container">
        <h1 class="pagetitle"><?php if ($post_type_slug == 'column') {?>アドコラム<?php }else{ ?>制作実績<?php }?>一覧</h1>
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
        <h2 class="c-contenttitle mt-5">「<?php echo $_GET['s']; ?>」の検索結果</h2>
        <!-- <p>アドコラムでは、ポスティングやWEB集客に関するお悩みから解決方法、集客・運用ノウハウ等、気になる情報をお届けします。</p> -->
        <!-- <h3 class="c-search_header">アドコラムをカテゴリーから探す</h3>
        <div class="c-search-categorybox">
          <a class="c-search-categoryboxs-mobile-button"></a>
          <ul class="c-search-categorybox__list">
            <li class="item">
                <a href="<?php echo home_url('/column/'); ?>">全て</a>
            </li>
            <?php
              $terms = get_terms( 'column_cat', 'orderby=description&order=ASC' );
              foreach ( $terms as $term ) :
            ?>
            <li class="item">
                <a href="?column_cat=<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
            </li>
            <?php endforeach; ?>     
          </ul>
        </div> -->
        <?php pagination(); ?>
        <!-- <h3 class="c-sec-title">最新記事一覧</h3> -->
        <?php
          echo '<div class="mb-1">';
          if (have_posts()) {
            if (isset($_GET['s']) && empty($_GET['s'])) {
                echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
            } else {
                echo '「'.$_GET['s'] .'」の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
            }
          } else {
            echo '検索結果0件'; 
          }
          echo '</div>';
        ?>
        <?php if ($post_type_slug == 'column') : ?>
              <div class="s-article__list">
              <?php
                  while (have_posts()) :
                      the_post();
              ?>
              <article class="item">
                <a href="<?php the_permalink();?>" class="link">
                  <div class="box">
                    <div class="imagewrap" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>);">
                      <!-- <img class="" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"> -->
                    </div>
                    <div class="contentwrap">
                      <p class="title"><?php echo wp_trim_words(get_the_title(), 30); ?></p>
                      <p class="excerpt"><?php echo wp_trim_words( get_the_content(),200); ?></p>
                      <p class="c-time_cate">
                        <i class="far fa-clock"></i>&nbsp;<?php the_time('Y.m.d'); ?>&nbsp;
                        <?php $terms = wp_get_object_terms($post->ID,'column_cat'); ?>
                        <?php foreach($terms as $term) : ?>
                          <span class="c-category"><?php echo $term->name; ?></span>
                        <?php endforeach; ?>
                      </p>
                    </div>
                  </div>
                </a>
              </article>
              <?php
                  endwhile;
              ?>
            </div>
        <?php elseif ($post_type_slug == 'works') : ?>
          <div class="s-works__list">
            <?php while (have_posts()) :
                  the_post(); ?>
              <?php get_template_part( 'content/content', 'sub' ); ?>
            <?php endwhile; ?>
          </div>
        <?php elseif ($post_type_slug == 'voice') : ?>
          <div class="c-voice__list">
            <?php while (have_posts()) :
                  the_post(); ?>
              <?php get_template_part( 'content/list', 'voice' ); ?>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
        <?php pagination(); ?>
   
      </div><!-- main -->
      <!-- sidebar -->
      <div class="three columns">
        <?php  
          if ($post_type_slug == 'works') { 
            include('sidebar-search-works.php'); 
          } else if ($post_type_slug == 'voice') { 
            include('sidebar-search-voice.php'); 
          } else { 
            include('sidebar-search.php'); 
          } ?>
      </div><!-- sidebar -->
    </div><!-- row -->
  </div><!-- container -->
</main>
<?php 
get_footer(); ?>