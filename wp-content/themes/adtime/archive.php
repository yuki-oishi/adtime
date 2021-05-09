<title>制作実績｜【チラシ×WEB集客のプロ】総合広告代理店のアドタイム</title>
<meta name="description" content="アドコラムでは、ポスティングやWEB集客に関するお悩みから解決方法、集客・運用ノウハウ等、気になる情報を発信しています。">
<?php get_header(); ?>
<main class="p-archive p-archive-works">
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
        <h2 class="c-contenttitle mt-5">制作実績一覧</h2>
        <p>アドタイムがこれまで携わらせて頂いたホームページ制作からチラシ・パンフレットの制作の実績をご紹介します。</p>
        <h3 class="c-search_header">ホームページ制作実績をカテゴリーから探す</h3>
        <div class="c-search-categorybox">
          <a class="c-search-categoryboxs-mobile-button"></a>
          <ul class="c-search-categorybox__list">
            <li class="item">
                <a href="<?php echo site_url('/works/works_cat/web/'); ?>">全て</a>
            </li>
            <?php //階層1（最上位の階層）
              $terms_lv1_faq = get_terms( 'works_cat', array('orderby' => 'name','order' => 'ASC', 'hide_empty' => false, 'parent' => 0 ) );
              if ( !empty( $terms_lv1_faq ) ) :
              foreach($terms_lv1_faq as $lv1_item):
                if ($lv1_item->slug == 'web') : 
                $lv1_id = $lv1_item->term_id;
                //階層2
                $terms_lv2_faq = get_terms( 'works_cat', array('orderby' => 'name','order' => 'ASC', 'hide_empty' => false, 'parent' => $lv1_id) );
                if ( !empty( $terms_lv2_faq ) ) :
                foreach($terms_lv2_faq as $lv2_item):
                  $lv2_id = $lv2_item->term_id; ?>
                  <li class="item">
                      <a href="?works_cat=<?php echo $lv2_item->slug; ?>"><?php echo $lv2_item->name; ?></a>
                  </li>
                <?php endforeach; endif; //階層2 ?>
              <?php endif; endforeach; endif; //階層1 ?>
          </ul>
        </div>
        <div class="s-works__list entry-items1">
          <?php
          $cnt = 10;// 初期表示件数
          $posts = get_posts( array(
            'post_type' => 'works',
            'works_cat' => 'web',
            'posts_per_page' => $cnt,
          ));
          foreach($posts as $post){
            setup_postdata( $post );
            get_template_part( 'content/content', 'sub' );
          }
          ?>
        </div>
        <div class="entry-loading entry-loading1"></div>
        <?php if (count($posts) > $cnt) {
            echo '<div class="entry-more entry-more1">もっと読み込む</div>';
        } ?>

        <h3 class="c-search_header">チラシ（フライヤー）・パンフレット制作実績をカテゴリーから探す</h3>
        <div class="c-search-categorybox">
          <a class="c-search-categoryboxs-mobile-button"></a>
          <ul class="c-search-categorybox__list">
            <li class="item">
                <a href="<?php echo site_url('/works/works_cat/posting/'); ?>">全て</a>
            </li>
            <?php //階層1（最上位の階層）
              $terms_lv1_faq = get_terms( 'works_cat', array('orderby' => 'name','order' => 'ASC', 'hide_empty' => false, 'parent' => 0 ) );
              if ( !empty( $terms_lv1_faq ) ) :
              foreach($terms_lv1_faq as $lv1_item):
                if ($lv1_item->slug == 'posting') : 
                $lv1_id = $lv1_item->term_id;
                //階層2
                $terms_lv2_faq = get_terms( 'works_cat', array('orderby' => 'name','order' => 'ASC', 'hide_empty' => false, 'parent' => $lv1_id) );
                if ( !empty( $terms_lv2_faq ) ) :
                foreach($terms_lv2_faq as $lv2_item):
                  $lv2_id = $lv2_item->term_id; ?>
                  <li class="item">
                      <a href="?works_cat=<?php echo $lv2_item->slug; ?>"><?php echo $lv2_item->name; ?></a>
                  </li>
                <?php endforeach; endif; //階層2 ?>
              <?php endif; endforeach; endif; //階層1 ?>
          </ul>
        </div>
        <div class="s-works__list entry-items2">
          <?php
            $cnt = 10;// 初期表示件数
            $posts = get_posts( array(
            'post_type' => $post_type,
            'works_cat' => 'posting',
            'posts_per_page' => $cnt,
          ));
          foreach($posts as $post){
            setup_postdata( $post );
            get_template_part( 'content/content', 'sub' );
          }
          ?>
        </div>
        <div class="entry-loading entry-loading2"></div>
        <?php if (count($posts) > $cnt) {
            echo '<div class="entry-more entry-more2">もっと読み込む</div>';
        } ?>
      </div><!-- main -->
      <!-- sidebar -->
      <div class="three columns">
        <?php include('sidebar-search.php'); ?>
      </div><!-- sidebar -->
    </div><!-- row -->
  </div><!-- container -->
</main>
<script>
jQuery(function() {
  let documentHeight1 = jQuery(document).height();
  let windowsHeight1 = jQuery(window).height();
  let url = "http://adtime.local/wp-content/themes/adtime/ajax-item.php";
  let postNumNow1 = 10; /* 最初に表示されている記事数 */
  let postNumAdd1 = 4; /* 追加する記事数 */
  let flag1 = false;
  jQuery(document).on("click", ".entry-more1", function() {
    let scrollPosition1 = windowsHeight1 + jQuery(window).scrollTop();
    if (scrollPosition1 >= documentHeight1) {
      if (!flag1) {
        jQuery(".entry-more1").addClass("is-hide");
        jQuery(".entry-loading1").addClass("is-show");
        flag1 = true;
        jQuery.ajax({
          type: "POST",
          url: url,
          data: {
            post_num_now: postNumNow1,
            post_num_add: postNumAdd1,
            works_cat   : 'Web'
          },
          success: function(response) {
            data = JSON.parse(response);
            jQuery(".entry-items1").append(data[0]);
            jQuery(".entry-loading1").removeClass("is-show");
            if (data[1] > 0) {
              jQuery(".entry-more1").removeClass("is-hide");
            }
            documentHeight1 = jQuery(document).height();
            postNumNow1 += postNumAdd1;
            flag1 = false;
          }
        });
      }
    }
  });
  let documentHeight2 = jQuery(document).height();
  let windowsHeight2 = jQuery(window).height();
  let postNumNow2 = 4; /* 最初に表示されている記事数 */
  let postNumAdd2 = 4; /* 追加する記事数 */
  let flag2 = false;
  jQuery(document).on("click", ".entry-more2", function() {
    let scrollPosition2 = windowsHeight2 + jQuery(window).scrollTop();
    if (scrollPosition2 >= documentHeight2) {
      if (!flag2) {
        jQuery(".entry-more2").addClass("is-hide");
        jQuery(".entry-loading2").addClass("is-show");
        flag2 = true;
        jQuery.ajax({
          type: "POST",
          url: url,
          data: {
            post_num_now: postNumNow2,
            post_num_add: postNumAdd2,
            works_cat   : 'posting'
          },
          success: function(response) {
            data = JSON.parse(response);
            jQuery(".entry-items2").append(data[0]);
            jQuery(".entry-loading2").removeClass("is-show");
            if (data[1] > 0) {
              jQuery(".entry-more2").removeClass("is-hide");
            }
            documentHeight2 = jQuery(document).height();
            postNumNow2 += postNumAdd2;
            flag2 = false;
          }
        });
      }
    }
  });
});

</script>
<?php 
get_footer(); ?>