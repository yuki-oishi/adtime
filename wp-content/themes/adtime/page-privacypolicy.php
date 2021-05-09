<?php
    get_header();
?>

<main role="main" aria-label="Content" class="p-privacy">
    <div class="p-privacy__kv">
        <div class="container">
            <h1>プライバシーポリシー</h1>
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
        <h1 class="c-pagetitle">プライバシーポリシー</h1>
        <p>
          お客様の個人情報の適切な取扱い及び保護が、株式会社アドタイムにとって社会的責務であると考えております。<br>
          当サイトをご利用いただきましたお客様からご提供いただいたり、その他の方法により当社が取得した個人情報は、<br>
          下記に明記する個人情報保護に関する基本方針に基づき、適切に取扱い、保護に努めてまいります。
        </p>
        <div class="policy-list">
            <div class="single-plicy">
                <p class="c-title">１．個人情報の定義</p>
                <p>『個人情報』とは、以下のような特定の個人を識別できるものをいいます。</p>
                <p class="ml-3">氏名、住所、生年月日、性別、電話番号、電子メールアドレス等。
                    他の情報と容易に照合することができ、この照合により特定の個人を識別できることとなる情報。</p>
            </div> <!-- /.single-plicy -->

            <div class="single-plicy">
                <p class="c-title">２．個人情報の利用</p>
                <p>お客様の個人情報は、当社が利用できるものとします。<br>お客様の個人情報の利用目的は、次のとおりとします。</p>
                <p class="ml-3">
                    お客様のお申し込みの内容を履行するため <br>
                    お客様に対してダイレクトメール、電子メール等により情報をご提供するため <br>
                    お客様から寄せられたご意見、ご要望にお応えするため <br>
                    アフターサービス、メンテナンス等の目的のためにお客様と接触する必要が生じたとき <br>
                    </p><br>
                <p>
                    お客様の個人情報を当社以外が利用する必要が生じた場合、及び上記の利用目的以外に利用する必要が生じた
                    場合には、お客様の事前の同意を得た上で、提供または利用させていただきます。</p>
            </div> <!-- /.single-plicy -->

            <div class="single-plicy">
                <p class="c-title">３．個人情報の第三者への提供</p>
                <p>お客様からご提供頂いた個人情報は次のいずれかに該当する場合を除きいかなる第三者にも提供しません。</p>
                <p class="ml-3">
                    お客様から同意をいただいた場合<br>
                    お客様個人が識別できない状態にしている場合<br>
                    国の機関・地方公共団体が法令の定める事務を遂行することに対して協力する必要がある場合<br>
                    法令に基づく場合
                    </p>
            </div> <!-- /.single-plicy -->

            <div class="single-plicy">
                <p class="c-title">４．お客様の個人情報の管理</p>
                <p class="ml-3">
                    当社は、社員に対する教育啓蒙活動を実施するほか、個人情報を取り扱う部門ごとに責任者を置き、
                    お客様の個人情報の適切な管理に努めます。<br>
                    当社は、お客様の個人データへの不正なアクセスや漏洩、滅失、毀損等を防止するため、
                    当社のWEBサイト等についてセキュリティの維持に努めます。</p>
            </div> <!-- /.single-plicy -->
            
            <div class="single-plicy">
                <p class="c-title">５．お客様の個人データの開示、訂正、追加、利用停止、消去</p>
                <p>
                    当社に保有されているお客様の個人データについて、お客様ご自身が開示、訂正、追加、利用停止、消去の各請求を
                    要望される場合は、当社まで直接ご請求ください。該当ご請求がお客様ご自身によるものであることが確認できた
                    場合は、お客様の個人データの開示、訂正、追加、利用停止、消去を行います。</p>
                <p class="ml-3">
                    上記の開示等の実施、不実施については、ご請求のあったお客様に対してご連絡いたします。<br>
                    なお、不実施の場合はその理由をご説明するよう努めます。
                </p>
            </div> <!-- /.single-plicy -->
            
            <div class="single-plicy">
                <p class="c-title">６．免責</p>
                <p>当サイトにリンクされている他のWEBサイトにおけるお客様の個人情報等の保護、取扱い等については、一切責任を負うものではありません。</p>
            </div> <!-- /.single-plicy -->
            
            <div class="single-plicy">
                <p class="c-title">７．お問合わせ先</p>
                <p>株式会社アドタイムの個人情報に関するお問い合わせ先は、下記までお願い致します。</p>
                <p class="ml-3">
                    <strong>【Webの場合】</strong><br>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c-link">お問合わせフォーム</a>よりお問合わせ下さい。
                </p><br>
                <p class="ml-3">
                    <strong>【郵送の場合】</strong><br>
                    所在地：〒164-0011 東京都中野区中央4-6-15　中野中央ビル
                    株式会社アドタイム
                </p>
            </div> <!-- /.single-plicy -->
            
        </div> <!-- /.policy-list -->
      </div>
		</section>
		<!-- /section -->
  </main>
<?php
    get_footer();    
?>