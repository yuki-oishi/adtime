<title>スタッフ紹介｜【チラシ×WEB集客のプロ】総合広告代理店のアドタイム</title>
<meta name="description" content="アドタイムのスタッフをご紹介しています。お客様にご満足いただけるよう、全力でサポートさせていただきます。">
<?php get_header(); ?>
<main class="p-archive p-archive-staff c-staff">
  <div class="p-archive__kv">
    <div class="container">
        <h1 class="pagetitle">スタッフ紹介</h1>
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
      <div class="twelve columns">
        <h2 class="c-contenttitle mt-5">スタッフ紹介</h2>
        <p>アドタイムを支えているスタッフをご紹介します。<br>お客様にご満足いただけるよう、全力でサポートさせていただきいます。</p>
        <div class="tabs">
          <input id="tab22" type="radio" name="tab_item4" checked>
          <label class="tab_item" for="tab22">配布スタッフの紹介</label>
          <input id="tab23" type="radio" name="tab_item4">
          <label class="tab_item" for="tab23">WEB集客スタッフの紹介</label>
          <div class="tab_content" id="tab22_content">
            <div class="tab_content_description">
              <div class="c-txtsp">
                <div class="s-article__list entry-items1">
                <?php 
                  $tax1 = 'staff_cat';
                  $tax2 = 'customer_type';
                  if ( isset( $_GET[$tax1] ) ) $tax1_get = $_GET[$tax1]; else $tax1_get = 'all'; //URLパラメータを取得
                  if ( isset( $_GET[$tax2] ) ) $tax2_get = $_GET[$tax2]; else $tax2_get = 'all'; //URLパラメータを取得
                  $tax1_terms = get_terms( $tax1, '&hide_empty=true' );
                  $tax2_terms = get_terms( $tax2, '&hide_empty=true' );
                  //tax_Queryにパラメータを代入
                  $cnt = 3;// 初期表示件数
                  $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
                  $args = array(
                    'post_type' => 'staff',
                    'paged' => $paged,
                    'posts_per_page' => $cnt,
                    'staff_cat' => 'posting',
                  );
                  if ( $tax1_get !== 'all' ) { 
                    $tax1_arg = array(
                      'taxonomy' => $tax1,
                      'field' => 'slug',
                      'terms' => $tax1_get,
                    );
                  } else {
                    $tax1_arg = '';
                  }
                  if ( $tax2_get !== 'all' ) { 
                    $tax2_arg = array(
                      'taxonomy' => $tax2,
                      'field' => 'slug',
                      'terms' => $tax2_get,
                    );
                  } else {
                    $tax2_arg = '';
                  }
                  if ( !empty($tax1_arg) || !empty($tax2_arg) ){
                    $args['tax_query'] = array(
                      $tax1_arg, $tax2_arg
                    );
                  }
                  //クエリを出力
                  $wp_query = new WP_Query();
                  $wp_query->query( $args );
                  while ( $wp_query->have_posts() ) : $wp_query->the_post();
                    get_template_part( 'content/content', 'staff' );
                  endwhile;
                ?>
                <?php wp_reset_postdata(); ?>
                </div>
                <div class="entry-loading entry-loading1"></div>
                <?php
                $all_args = array(
                  'post_type'      => 'staff',
                  'staff_cat'      => 'posting',
                  'posts_per_page' => -1,
                );

                $all_query = new WP_Query($all_args);
                $all_post_count = $all_query->found_posts;
                if ($cnt < $all_post_count) {
                  echo '<div class="entry-more entry-more1">もっと見る</div>';
                }
                else if (count($posts) > $cnt) {
                  echo '<div class="entry-more entry-more1">もっと見る</div>';
                } 
                
                
                // if (count($posts) > $cnt) {
                //     echo '<div class="entry-more entry-more1">もっと見る</div>';
                // }
                 ?>
              </div><!-- c-txtsp -->
            </div><!-- tab_content_description -->
          </div><!-- tab_content -->
          <div class="tab_content" id="tab23_content">
            <div class="tab_content_description">
              <div class="c-txtsp">
                <div class="s-article__list entry-items2">
                  <?php 
                    //tax_Queryにパラメータを代入
                    $cnt2 = 3;// 初期表示件数
                    $paged2 = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
                    $args = array(
                      'post_type' => 'staff',
                      'paged' => $paged2,
                      'posts_per_page' => $cnt2,
                      'staff_cat' => 'web',
                    );
                    if ( !empty($tax1_arg) || !empty($tax2_arg) ){
                      $args['tax_query'] = array(
                        $tax1_arg, $tax2_arg
                      );
                    }
                    //クエリを出力
                    $wp_query = new WP_Query();
                    $wp_query->query( $args );
                    while ( $wp_query->have_posts() ) : $wp_query->the_post();
                      get_template_part( 'content/content', 'staff' );
                    endwhile;
                  ?>
                  <?php wp_reset_postdata(); ?>
                </div>
                <div class="entry-loading entry-loading2"></div>
                <?php
                $all_args = array(
                  'post_type'      => 'staff',
                  'staff_cat'      => 'web',
                  'posts_per_page' => -1,
                );

                $all_query = new WP_Query($all_args);
                $all_post_count = $all_query->found_posts;
                if ($cnt2 < $all_post_count) {
                  echo '<div class="entry-more entry-more2">もっと見る</div>';
                }
                else if (count($posts) > $cnt2) {
                  echo '<div class="entry-more entry-more2">もっと見る</div>';
                } 
                // if (count($posts) > $cnt2) {
                //     echo '<div class="entry-more entry-more2">もっと見る</div>';
                // }
                 ?>
              </div><!-- c-txtsp -->
            </div><!-- tab_content_description -->
          </div><!-- tab_content -->
        </div>

        <?php //pagination(); ?>
      </div><!-- main -->
      <!-- sidebar -->
      <!-- <div class="three columns"> -->
        <?php //include('sidebar-search-voice.php'); ?>
      <!-- </div>sidebar -->
    </div><!-- row -->
  </div><!-- container -->
</main>
<script>
jQuery(function() {
  let documentHeight1 = jQuery(document).height();
  let windowsHeight1 = jQuery(window).height();
  let url = "https://adtime-tokyo23ku.jp/renew/wp-content/themes/adtime/ajax-item.php";
  let postNumNow1 = 3; /* 最初に表示されている記事数 */
  let postNumAdd1 = 3; /* 追加する記事数 */
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
            post_type   : 'staff',
            cat         : 'posting',
          },
          success: function(response) {
            // if (response != "") {
              console.log(response);
              data = JSON.parse(response);
              jQuery(".entry-items1").append(data[0]);
              jQuery(".entry-loading1").removeClass("is-show");
              if (data[1] > 0) {
                jQuery(".entry-more1").removeClass("is-hide");
              }
              documentHeight1 = jQuery(document).height();
              postNumNow1 += postNumAdd1;
              flag1 = false;
            // }
          }
        });
      }
    }
  });
  let documentHeight2 = jQuery(document).height();
  let windowsHeight2 = jQuery(window).height();
  let postNumNow2 = 3; /* 最初に表示されている記事数 */
  let postNumAdd2 = 3; /* 追加する記事数 */
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
            post_type   : 'staff',
            cat_name    : 'staff_cat',
            cat         : 'web',
          },
          success: function(response) {
            
            data = JSON.parse(response);console.log(data);
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