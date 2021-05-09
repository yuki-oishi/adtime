<title>お客様の声｜【チラシ×WEB集客のプロ】総合広告代理店のアドタイム</title>
<meta name="description" content="アドタイムのお客様の声をご紹介しています。当社のサービスをご利用いただいたお客様の声とともに、実績（成果）を詳しくご紹介いたします。">
<?php get_header(); ?>
<main class="p-archive p-archive-voice">
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
        <h2 class="c-contenttitle mt-5">お客様の声一覧</h2>
        <p>アドタイムのサービスをご利用いただいたお客様の声とともに、<span class="c-red fwb">実績（成果）</span>を詳しくご紹介いたします。</p>
        <p>アドタイムでは、ご利用いただいたお客様へ<span class="c-red fwb">「リアルなお声」</span>として<span class="yellow-underline fwb">一つひとつを真摯に受け止めるべくアンケートやインタビューにご協力いただいております。</span></p>
        <p><span class="yellow-underline fwb">お褒めの言葉や至らぬ点のご指摘から全て社内で共有し、改善へと繋げております。</span></p>
        <h3 class="c-search_header">お客様の声をカテゴリーから探す</h3>
        <div class="c-search-categorybox">
          <a class="c-search-categoryboxs-mobile-button"></a>
          <ul class="c-search-categorybox__list">
          <li class="item">
                <a href="<?php echo home_url('/voice/'); ?>">全て</a>
          </li>
          <?php
            $terms = get_terms('voice_cat');
            foreach ( $terms as $term ) {
              echo '<li class="item"><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
            }
          ?>
          </ul>
        </div>
        <?php //pagination(); ?>
        <div class="c-voice__list">
          <?php
              while (have_posts()) {
                  the_post();
                  get_template_part( 'content/list', 'voice' );
          ?>
          <?php
              }
          ?>
        </div>
        <?php pagination(); ?>
      </div><!-- main -->
      <!-- sidebar -->
      <div class="three columns">
        <?php include('sidebar-search-voice.php'); ?>
      </div><!-- sidebar -->
    </div><!-- row -->
  </div><!-- container -->
</main>
<?php 
get_footer(); ?>