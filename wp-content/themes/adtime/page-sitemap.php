<?php
    get_header();
?>

<main role="main" aria-label="Content" class="p-sitemap">
    <div class="p-sitemap__kv">
        <div class="container">
            <h1>サイトマップ</h1>
        </div>
    </div>
    <div class="breadcrumb">
      <div class="container">
        <?php custom_breadcrumb(); ?>
      </div>
    </div>
		<!-- section -->
		<section class="">
      <div class="container">
        <h1 class="c-pagetitle">サイトマップ</h1>
        <p>
            当サイトの掲載・ご案内している内容をまとめたサイトマップをご用意致しました。<br>
            お好きな項目をクリックすると、各種サービスのご紹介やお問合わせなどのページへアクセスできます。
        </p>


        <div class="p-sitemap__listwrap">
          <div class="p-sitemap__col">
            <h2 class="c-title">《サービス》</h2>
            <ul class="p-sitemap__list">
              <li class="s-sitemap__listitem"><a href="<?php echo esc_url(home_url('/#posting')); ?>">ポスティング</a></li>
              <li class="s-sitemap__listitem"><a href="<?php echo esc_url(home_url('/#design')); ?>">デザイン</a></li>
              <li class="s-sitemap__listitem"><a href="<?php echo esc_url(home_url('/#print')); ?>">印刷</a></li>
              <li class="s-sitemap__listitem"><a href="<?php echo esc_url(home_url('/#web')); ?>">WEB集客</a></li>
            </ul>
          </div>
          <div class="p-sitemap__col">
            <h2 class="c-title">《アドタイムについて》</h2>
            <ul class="p-sitemap__list">
              <li class="s-sitemap__listitem"><a href="<?php echo esc_url(home_url('/')); ?>">トップページ</a></li>
              <li class="s-sitemap__listitem"><a href="<?php echo esc_url(home_url('/#reason')); ?>">選ばれる理由</a></li>
              <li class="s-sitemap__listitem"><a href="<?php echo esc_url(home_url('/staff/')); ?>">スタッフ紹介</a></li>
              <li class="s-sitemap__listitem"><a href="<?php echo esc_url(home_url('/company/')); ?>">会社概要</a></li>
              <li class="p-sitemap__listitem"><a href="<?php echo esc_url(home_url('/privacy/')); ?>">プライバシーポリシー</a></li>
              <li class="p-sitemap__listitem"><a href="<?php echo esc_url(home_url('/sitemap/')); ?>">サイトマップ</a></li>

            </ul>
          </div>
          <div class="p-sitemap__col">
            <h2 class="c-title">《その他》</h2>
            <ul class="p-sitemap__list">
              <li class="s-sitemap__listitem"><a href="<?php echo esc_url(home_url('/#price')); ?>">料金のご案内</a></li>
              <li class="s-sitemap__listitem"><a href="<?php echo esc_url(home_url('/#flow')); ?>">ご利用の流れ</a></li>
              <li class="s-sitemap__listitem"><a href="<?php echo esc_url(home_url('/voice/')); ?>">お客様の声</a></li>
              <li class="s-sitemap__listitem"><a href="<?php echo esc_url(home_url('/works/')); ?>">制作実績</a></li>
              <li class="s-sitemap__listitem"><a href="<?php echo esc_url(home_url('/#faq')); ?>"">よくある質問</a></li>
              <li class="s-sitemap__listitem"><a href="<?php echo esc_url(home_url('/contact/')); ?>">無料お見積り・ご相談</a></li>
              <li class="s-sitemap__listitem"><a href="<?php echo esc_url(home_url('/column/')); ?>">アドコラム</a></li>
            </ul>
          </div>
        </div>
      </div>

			
		</section>
		<!-- /section -->
  </main>
<?php
    get_footer();    
?>