<title>制作実績｜【チラシ×WEB集客のプロ】総合広告代理店のアドタイム</title>
<meta name="description" content="制作実績では、アドタイムのホームページ制作からチラシ（フライヤー）・パンフレット制作の実績をご紹介しています。">
<?php get_header();
while (have_posts()) {
  the_post();
?>
<main class="p-single p-single-works">
  <div class="p-archive__kv">
    <div class="container">
        <h1 class="pagetitle">制作実績</h1>
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
        if ( $termslug == 'web' ||$termslug == 'create_website' || $termslug == 'renewal' || $termslug == 'landingpage') {?>
          <section class="s-article-web">
            <div class="tac mb-3 mt-3">
              <a class="c-button c-button-secondary" href="<?php echo home_url('/works/'); ?>">実績一覧に戻る</a>
            </div>
            <article class="s-article-web__article">
              <i class="far fa-clock"></i>&nbsp;<?php the_time('Y.m.d'); ?>&nbsp;
              <?php $terms = wp_get_object_terms($post->ID,'works_cat'); ?>
              <?php foreach($terms as $term) { ?>
                <span class="c-category"><?php echo $term->name; ?></span>
              <?php } ?>
              <h2 class="sitename c-contenttitle"><?php echo get_field('site_name'); ?></h2>
              <div class="contetwrap">
                <div class="imagewrap">
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>">
                </div>
                <div class="detailwrap">
                  <?php if (!wp_is_mobile()) : ?><p class="detail-ttl ">制作事例の詳細</p><?php endif; ?>
                  <table>
                    <tr>
                      <th>顧客名</th>
                      <td><?php echo get_field('customer_name'); ?></td>
                    </tr>
                    <tr>
                      <th>業種</th>
                      <td>
                        <?php 
                          $terms = wp_get_object_terms($post->ID, 'customer_type');
                          if ( !is_wp_error( $terms ) ) : ?>
                            <a href="<?php echo home_url('/works/'); ?>?customer_type=<?php echo $terms[0]->slug; ?>"><?php echo $terms[0]->name; ?></a>
                          <?php endif;?>
                      </td>
                    </tr>
                    <tr>
                      <th>対応時期 / 制作期間</th>
                      <td><?php echo get_field('date'); ?> / <?php echo get_field('month'); ?></td>
                    </tr>
                    <tr>
                      <th>サイト種別</th>
                      <td><?php echo get_field('site_type'); ?></td>
                    </tr>
                  </table>
                  <p class="comment-tit">
                    担当者コメント
                  </p>
                  <p class="comment-txt">
                    <?php echo get_field('comment'); ?>
                  </p>
                  <a target="_blank" class="db c-button c-button-icon" href="<?php echo get_field('url'); ?>"><i class="fas fa-desktop"></i> このサイトを見る</a>
                </div>
              </div>
            </article>
          </section>
        <?php 
        } elseif ( $termslug == 'posting' || $termslug == 'leaflets' || $termslug == 'pamphlet' || $termslug == 'flyer' ) {?>
          <section class="s-article-posting">
            <div class="tac mb-3 mt-3">
              <a class="c-button c-button-secondary" href="<?php echo home_url('/works/'); ?>">実績一覧に戻る</a>
            </div>
            <article class="s-article-posting__article">
              <i class="far fa-clock"></i>&nbsp;<?php the_time('Y.m.d'); ?>&nbsp;
              <?php $terms = wp_get_object_terms($post->ID,'works_cat'); ?>
              <?php foreach($terms as $term) { ?>
                <span class="c-category"><?php echo $term->name; ?></span>
              <?php } ?>
              <h2 class="sitename c-contenttitle"><?php echo get_field('company_name'); ?></h2>
              <div class="contetwrap">
                <ul class="table">
                  <li class="item"><span class="txt01">種別</span><span class="txt02"><?php echo get_field('type'); ?></span></li>
                  <li class="item"><span class="txt01">用紙サイズ</span><span class="txt02"><?php echo get_field('size'); ?></span></li>
                  <li class="item"><span class="txt01">ページ数</span><span class="txt02"><?php echo get_field('page'); ?></span></li>
                  <li class="item"><span class="txt01">折り方</span><span class="txt02"><?php echo get_field('ori'); ?></span></li>
                </ul>
                <?php if(have_rows('images')): ?>
                  <p class="txt01"><i class="fas fa-book-open"></i> ページの角を本のようにページをめくれます。</p>
                  <div class="flipbook-viewport">
                    <div class="flipbook" id="flipbook">
                      <?php while(have_rows('images')): the_row(); ?>
                        <!-- <img src="<?php the_sub_field('image'); ?>"> -->
                        <div style="background-image:url(<?php the_sub_field('image'); ?>)"></div>
                      <?php endwhile; ?>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            </article>
          </section>
        <?php 
        } else { ?>
          <div class="article_info">
            <i class="far fa-clock"></i>&nbsp;<?php the_time('Y.m.d'); ?>&nbsp;
            <?php $terms = wp_get_object_terms($post->ID,'works_cat'); ?>
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
        <?php } ?>
        <div class="c-pagination-works">
						<ul>
							<?php
                single_works_pager(true);
                single_works_pager(false);
              ?>
						</ul>
        </div>
      </section>
      </div><!-- main -->
      <!-- sidebar -->
      <div class="three columns">
        <?php include('sidebar-search-works.php'); ?>
      </div><!-- sidebar -->
    </div><!-- row -->
  </div><!-- container -->
</main>
<script>
jQuery(function() {
  if ($("#flipbook").length > 0) {
    if (window.matchMedia && window.matchMedia('(max-device-width: 640px)').matches) {
      var winh = ($(window).width() - 30) * 1.4; 
      $("#flipbook").turn({
        // 自動でページをめくったときの高さ
        elevation: 50,
        // ページめくりのスピード(ms)
        duration: 1000,
        // ページをめくるときの影->有効
        gradients: true,
        // 自動中央揃え->無効
        autoCenter: false,
        // 右開きか左開きかの設定->右開き
        direction: 'ltr',
        display:'single',
        height: winh
      });
    } else {
      $("#flipbook").turn({
        // 自動でページをめくったときの高さ
        elevation: 50,
        // ページめくりのスピード(ms)
        duration: 1000,
        // ページをめくるときの影->有効
        gradients: true,
        // 自動中央揃え->無効
        autoCenter: false,
        // 右開きか左開きかの設定->右開き
        direction: 'ltr',
        height: '580px',
      });
    }
  }
});
</script>
<?php 
}
get_footer(); ?>