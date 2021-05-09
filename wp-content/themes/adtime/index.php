<?php get_header(); ?>

<main class="p-index">
  <div class="container">
    <!-- ページタイトルとしてBlog -->
    <h1 class="c-pagetitle">ニュース一覧</h1>

    <!-- "blog"で全体のブロックをつくる -->
    <div class="p-index__list">
        <!-- データベースから、post_typeがpostの投稿記事を読み出す -->
        <?php
            $args = array(
            'post_type'=>'post',
            'category_name'=>'service,media',
            'order'=>'DESC',
            'orderby' => 'date',
            'posts_per_page'=>5,
            'paged'=>1
            );
        $posts = new WP_Query($args);
        ?>
        <!-- WordPressループで、記事を出力する -->
        <?php if ($posts -> have_posts()): ?> 
            <?php while ($posts -> have_posts()) : $posts ->the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="p-index__item">
                        <div class="p-index__titwrap">
                          <?php echo get_the_date('Y/m/d'); ?>
                          <span class="posttitle">
                            <?php the_title();?>
                          </span>
                        </div>
                    </div>
                </a>
            <?php endwhile; ?>
        <?php else : ?>
            <p>コンテンツがありません</p>
        <?php endif; ?>
       <!-- <div class="blog-readmore">
           <a href=<?php home_url('blogs')?>>＞ 記事一覧を見る</a>
       </div> -->
    </div>
  </div>
</main>
<?php get_footer(); ?>