<div class="c-widget_area">
  <form method="get" action="<?php echo $url; ?>" class="d-flex">
    <input name="s" id="s" type="text" placeholder="キーワード" value="<?php if(is_search()){ echo get_search_query();} ?>" />
    <button id="submit" type="submit" value="" class="search-button">
    <i class="fas fa-search"></i>
    </button>
  </form>
</div>
<div class="c-widget_area">
  <div class="c-widget_area__menuwrap">
    <h3 class="c-widget_area__title">メニュー</h3>
    <ul class="c-widget_area__list">
        <li><a href="<?php echo home_url('/') ?>"><i class="fas fa-caret-right"></i>トップページ</a>
        <li><a href="<?php echo home_url('/#service') ?>"><i class="fas fa-caret-right"></i>サービス</a>
        <li><a href="<?php echo home_url('/#reason') ?>"><i class="fas fa-caret-right"></i>選ばれる理由</a>
        <li><a href="<?php echo home_url('/#price') ?>"><i class="fas fa-caret-right"></i>料金のご案内</a>
        <li><a href="<?php echo home_url('/#flow') ?>"><i class="fas fa-caret-right"></i>ご利用の流れ</a>
        <li>
          <div class="ac-content">
              <label for="side1">実績</label>
              <input id="side1" type="checkbox">
              <div class="ac-cont">
                  <div><a href="<?php echo home_url('/voice/') ?>"><i class="fas fa-caret-right"></i>お客様の声</a></div>
                  <div><a href="<?php echo home_url('/works/') ?>"><i class="fas fa-caret-right"></i>制作実績</a></div>
              </div>
          </div>

          
        <li><a href="<?php echo home_url('/#faq') ?>"><i class="fas fa-caret-right"></i>よくある質問</a>
        <li><a href="<?php echo home_url('/contact/') ?>"><i class="fas fa-caret-right"></i>無料お見積り・ご相談</a>
        <li><a href="<?php echo home_url('/company/') ?>"><i class="fas fa-caret-right"></i>会社概要</a>
    </ul>
  </div>
</div> <!-- /.widgetarea -->