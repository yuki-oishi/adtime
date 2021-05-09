<?php
    get_header();
?>

<main role="main" aria-label="Content" class="p-contact">
    <div class="p-contact__kv">
        <div class="container">
            <h1>お問い合わせフォーム</h1>
        </div>
    </div>
    <div class="breadcrumb">
        <div class="container">
        <?php custom_breadcrumb(); ?>
        </div>
    </div>
    <!-- 問い合わせ -->
    
    <section class="s-form" id="s-form">
        <h1 class="c-pagetitle-obi doubleline mt-5"><strong>お問い合わせ・お見積りフォーム</strong><span class="eng">お見積り・ご相談は全て無料!<br class="__sp">最短1営業日内でご連絡いたします。</span></h1>
        <div class="container">
          <!-- <h1 class="c-pagetitle">お問い合わせ・お見積りフォーム</h1> -->
            <div class="s-form__message">
                <span class="yellow-underline fwb">どんなことでも<br class="__sp">お気軽にお問い合わせください! </span><br>
                <a href="tel:0353423026"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/phone-bnr-pc.png" alt="ご相談・お見積りも全て無料"></a>
            </div>
            <p>
                以下の情報を入力後、「入力内容の確認」ボタンを押してください。<br>
                お電話による お問い合わせも承っておりますのでお気軽にお問い合わせください。<br>
                <span class="c-red fwb">※こちらのフォームからのセールス等の営業メールの送信はお断りいたします。</span>
            </p>
            <ul class="border-box ssl-security mb-3">
                <li>・<i class="fas fa-lock"></i> 当サイトはお客様に入力していただいた情報をSSL (暗号化通信プロトコル) を使用して送信を行うため、安心してご利用頂けます。</li>
                <li>・ 半角カタカナでのご入力はお控え下さい。</li><li>・<span class="c-red">※</span>は必須入力項目です。</li>
            </ul>
            <?php echo do_shortcode( '[contact-form-7 id="5" title="contact" html_class="h-adr"]' ); ?>

        </div>
    </section>
    
  </main>
<?php
    get_footer();    
?>