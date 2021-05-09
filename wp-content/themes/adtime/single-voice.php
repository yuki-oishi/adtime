<title>お客様の声｜【チラシ×WEB集客のプロ】総合広告代理店のアドタイム</title>
<meta name="description" content="アドタイムのお客様の声をご紹介しています。当社のサービスをご利用いただいたお客様の声とともに、実績（成果）を詳しくご紹介いたします。">
<?php get_header();
while (have_posts()) {
  the_post();
?>
<main class="p-single p-single-voice">
  <div class="p-archive__kv">
    <div class="container">
        <h1 class="pagetitle">お客様の声</h1>
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
        <?php 
        // slug取得しwebとpostingで分ける
        $terms = wp_get_object_terms($post->ID,'works_cat');
        $termslug = '';
        foreach( $terms as $term ) {
          $termslug =  $term->slug;
        }
        ?>
        <article class="s-article mt-3">
          <p class="c-time_cate">
            <i class="far fa-clock"></i>&nbsp;<?php the_time('Y.m.d'); ?>&nbsp;
            <?php $terms = wp_get_object_terms($post->ID,'voice_cat'); ?>
            <?php foreach($terms as $term) { ?>
              <span class="c-category"><?php echo $term->name; ?></span>
            <?php } ?>
          </p>
          <h2 class="sitename c-contenttitle"><?php echo get_field('company_name'); ?>様</h2>

          <div class="s-article__content">
            <div class="info">
              <div class="left<?php if (!get_field('single_image')) echo ' left-100'; ?>">
                <p class="txt01"><?php echo get_field('single_title'); ?></p>
                <table>
                  <tr>
                    <th><i class="far fa-check-square"></i> 業界</th>
                    <td><?php echo get_field('company_type'); ?></td>
                  </tr>
                  <tr>
                    <th><i class="far fa-check-square"></i> サービス</th>
                    <td><?php echo get_field('service_name'); ?></td>
                  </tr>
                  <?php if ($termslug == 'posting') : ?>
                    <tr>
                      <th><i class="far fa-check-square"></i> 配布エリア</th>
                      <td><?php echo get_field('area'); ?></td>
                    </tr>
                    <tr>
                      <th><i class="far fa-check-square"></i> 配布部数</th>
                      <td><?php echo get_field('maisu'); ?></td>
                    </tr>
                    <tr>
                      <th><i class="far fa-check-square"></i> 広告サイズ</th>
                      <td><?php echo get_field('size'); ?></td>
                    </tr>
                    <?php elseif ($termslug == 'web') : ?>
                      <?php echo get_field('maisu'); ?>
                      <tr>
                        <th><i class="far fa-check-square"></i> 集客施策</th>
                        <td><?php echo get_field('maisu'); ?></td>
                      </tr>
                    <?php endif; ?>
                </table>
              </div>
              <?php if (get_field('single_image')): ?>
                <div class="right">
                  <a href="<?php echo get_field('single_image'); ?>" class="link" data-lightbox="image" data-title="">
                    <img src="<?php echo get_field('single_image'); ?>">
                  </a>
                </div>
              <?php endif; ?>
            </div>
            <div class="result">
              <h3 class="c-title">アドタイムの実績（成果）</h3>
              <p class="txt02"><?php echo get_field('archive_title'); ?></p>
              <h4 class="c-title-underline"><i class="far fa-comment"></i> お客様の声</h4>
              <div class="fukidashi_wrapper mb-4">
                <div class="person">
                  <div class="iconwrap">
                    <i class="icofont-user-male icon"></i>
                  </div>
                  <p>
                    <span class="area"><?php echo get_field('company_type'); ?></span>
                    <span class="name"><?php echo get_field('name'); ?>様</span>
                  </p>
                </div>
                <div class="fukidashi fukidashi-customer">
                  <p><?php echo get_field('single_voice'); ?></p>
                </div>
              </div>
              <h4 class="c-title-underline"><i class="fas fa-user-edit"></i> 担当者からのコメント</h4>
              <div class="fukidashi_wrapper re mb-2">
                <div class="fukidashi fukidashi-staff">
                  <p><?php echo get_field('comment'); ?></p>
                </div>
                <div class="person">
                  <div class="iconwrap iconwrap-staff">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/corporate-owner2.png" alt="アドタイムスタッフ">
                  </div>
                  <p>
                    <span class="area">アドタイム</span>
                    <span class="name">スタッフ</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </article>

        <div class="c-pagination-detail">
            <ul>
              <li>
               <?php 
                  $prevpost = get_adjacent_post( false, '', true, 'voice_cat' );
                  if ($prevpost) {
                    echo sprintf(
                      '<a href="%s">%s</a>', 
                      esc_url( get_permalink( $prevpost->ID ) ),
                      '前のお客様へ'
                    );
                  }
               ?> 
              </li>
              <li><a href="<?php echo esc_url( home_url( '/voice/' ) ); ?>" >お客様の声一覧</a></li>
              <li>
              <?php 
                  $nextpost = get_adjacent_post( false, '', false, 'voice_cat' );
                  if ($nextpost) {
                    echo sprintf(
                      '<a href="%s">%s</a>', 
                      esc_url( get_permalink( $nextpost->ID ) ),
                      '次のお客様へ'
                    );
                  }
               ?>
              </li>
            </ul>
        </div>
        <section class="recommend_wrapper">
          <h3 class="recommend_title">関連するお客様の声</h3>
          <?php
          $terms = get_the_terms($post->ID,'voice_cat');
          $slug;
          foreach( $terms as $term ) {
              $slug = $term->slug;
          }

          $args = array(
                  'posts_per_page' => 8, // 表示する投稿数
                  'post_type' => array('voice'), // 取得する投稿タイプのスラッグ
                  'orderby' => 'date', //日付で並び替え
                  'order' => 'DESC', // 降順 or 昇順
                  'post__not_in' => array($post->ID),
                  'tax_query'      => array(
                      array(
                      'taxonomy' => 'voice_cat',  // カスタムタクソノミー名
                      'field'    => 'slug',  // ターム名を term_id,slug,name のどれで指定するか
                      'terms'    => $slug // タクソノミーに属するターム名
                      )
                  )
              );
          
          $my_posts = get_posts($args);
          if (count($my_posts) == 0) {
              echo '<p>関連するお客様の声はありません</p>';
          } else {
              echo '<ul class="">
                      <div class="swiper-container voice-swiper">
                        <div class="swiper-wrapper c-voice__list c-voice__list-swiper">';
              foreach ($my_posts as $post) : setup_postdata($post);
                  echo '<div class="swiper-slide">';
                  get_template_part( 'content/list', 'voice' );
                  echo '</div>';
                ?>
              <?php 
              endforeach; 
              echo '    </div>
                      </div>
                    </ul>
                    <div class="swiper-nav-wrap">
                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>
                    </div>
                    ';
              ?>
              
          <?php } ?>
        </section>
      </div><!-- main -->
      <!-- sidebar -->
      <div class="three columns">
        <?php include('sidebar-search-voice.php'); ?>
      </div><!-- sidebar -->
    </div><!-- row -->
  </div><!-- container -->
</main>
<script>
  jQuery(function() {
    new Swiper ('.voice-swiper', {
    // 以下にオプションを設定
    loop: true, //最後に達したら先頭に戻る
    slidesPerView: 2,
    autoplay: {
        delay: 2500,
        disableOnInteraction: true
    },
    speed: 500,
    effect: "slide",
    paginationClickable: true,
    slidesPerView: "auto",
    spaceBetween: 10,
    // autoHeight: true,
       
    //ページネーション表示の設定
    // pagination: { 
    //   el: '.swiper-pagination', //ページネーションの要素
    //   type: 'bullets', //ページネーションの種類
    //   clickable: true, //クリックに反応させる
    // },
   
    //ナビゲーションボタン（矢印）表示の設定
    navigation: { 
      nextEl: '.swiper-button-next', //「次へボタン」要素の指定
      prevEl: '.swiper-button-prev', //「前へボタン」要素の指定
    },
    // ブレークポイント指定
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        480: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        960: {
            slidesPerView: 2,
            spaceBetween: 10
        }
    }

  });
});
</script>
<?php 
}
get_footer(); ?>