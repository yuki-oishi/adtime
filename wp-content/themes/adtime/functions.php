<?php
  function wpcf7_validate_spam_message( $result, $tag ) {
    $value = str_replace(array(PHP_EOL,' '), '', esc_attr($_POST['your-name']));
    if (!empty($value)) {
      if (preg_match('/^[!-~]+$/', $value)) {
        $result['valid'] = false;
        $result['reason'] = array('your-name' => '日本語で入力してください');
      }
    }
    $value = str_replace(array(PHP_EOL,' '), '', esc_attr($_POST['contact-detail']));
    if (!empty($value)) {
      if (preg_match('/^[!-~]+$/', $value)) {
        $result['valid'] = false;
        $result['reason'] = array('contact-detail' => '日本語で入力してください');
      }
    }
    return $result;
  }
  add_filter( 'wpcf7_validate', 'wpcf7_validate_spam_message', 10, 2 );

  add_theme_support('post-thumbnails');

  function show_limit_title($limit = 20) {
    global $post;
    $title = $post->post_title;
    
    if( mb_strlen( $title ) > $limit) {
      $title= mb_substr( $title , 0 , $limit ) ;
      $show_title = $title. '･･･' ;
    } else {
      $show_title = $title;
    }
   
    echo $show_title;
  }
/* the_archive_title 余計な文字を削除 */
add_filter( 'get_the_archive_title', function ($title) {
  if (is_category()) {
      $title = single_cat_title('',false);
  } elseif (is_tag()) {
      $title = single_tag_title('',false);
  } elseif (is_tax()) {
      $title = single_term_title('',false);
  } elseif (is_post_type_archive() ){
    $title = post_type_archive_title('',false);
  } elseif (is_date()) {
      $title = get_the_time('Y年n月');
  } elseif (is_search()) {
      $title = '検索結果：'.esc_html( get_search_query(false) );
  } elseif (is_404()) {
      $title = '「404」ページが見つかりません';
  } else {

  }
  return $title;
});
function get_breadcrumb() {
    //HOME>と表示
    $sep = '<li><i class="fas fa-angle-right"></i></li>';
    echo '<ul><li><a href="'.get_bloginfo('url').'" >トップ</a></li>';
    echo $sep;
  
    //投稿記事ページとカテゴリーページでの、カテゴリーの階層を表示
    $cats = '';
    $cat_id = '';
    if ( is_single() ) {
      $cats = get_the_category();
      if( isset($cats[0]->term_id) ) $cat_id = $cats[0]->term_id;
    }
    else if ( is_category() ) {
      $cats = get_queried_object();
      $cat_id = $cats->parent;
    }
    $cat_list = array();
    while ($cat_id != 0){
      $cat = get_category( $cat_id );
      $cat_link = get_category_link( $cat_id );
      array_unshift( $cat_list, '<a href="'.$cat_link.'">'.$cat->name.'</a>' );
      $cat_id = $cat->parent;
    }
    foreach($cat_list as $value){
      echo '<li>'.$value.'</li>';
      echo $sep;
    }
  
    //現在のページ名を表示
    if ( is_singular() ) {
      if ( is_attachment() ) {
        previous_post_link( '<li>%link</li>' );
        echo $sep;
      }
      the_title( '<li>', '</li>' );
    }
    else if( is_archive() ) the_archive_title( '<li>', '</li>' );
    else if( is_search() ) echo '<li>検索 : '.get_search_query().'</li>';
    else if( is_404() ) echo '<li>ページが見つかりません</li>';
    echo '</ul>';
}
function pagination($pages = '', $range = 2) {
  $showitems = ($range * 2)+1;//表示するページ数（５ページを表示）

  global $paged;//現在のページ値
  if(empty($paged)) $paged = 1;//デフォルトのページ

  if($pages == '')
  {
      global $wp_query;
      $pages = $wp_query->max_num_pages;//全ページ数を取得
      if(!$pages)//全ページ数が空の場合は、１とする
      {
          $pages = 1;
      }
  }

  if(1 != $pages)//全ページが１でない場合はページネーションを表示する
  {
  echo '<div class="pager">';
  echo '<ul class="pagination">';
  //Prev：現在のページ値が１より大きい場合は表示
      if($paged > 1) echo '<li class="pre"><a href="'.get_pagenum_link($paged - 1).'"><span>«</span></a></li>';

      for ($i=1; $i <= $pages; $i++)
      {
          if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
          {
             echo ($paged == $i)? '<li><a class="active" href="'.get_pagenum_link($i).'"><span>'.$i.'</span></a></li>':'<li><a href="'.get_pagenum_link($i).'"><span>'.$i.'</span></a></li>';
          }
      }
 //Next：総ページ数より現在のページ値が小さい場合は表示
 if ($paged < $pages) echo '<li class="next"><a href="'.get_pagenum_link($paged + 1).'"><span>»</span></a></li>';
 echo "</ul>";
 echo "</div>";
  }
}
function twpp_adjacent_post_link( $previous = true, $max_length = 10, $trim_marker = '...' ) {
  $html = '';
  $post = get_adjacent_post( false, '', $previous );
  
  if( !empty( $post ) ) {
    $title = apply_filters( 'the_title', $post->post_title );

    if( mb_strlen( $title ) > $max_length ) {
      $title = mb_substr( $title, 0, $max_length ) . $trim_marker;
    }    

    $html .= sprintf(
      '<a href="%s">%s</a>',
      esc_url( get_permalink( $post->ID ) ),
      $title
    );

    echo $html;
  }  
}
// function twpp_adjacent_post_link_width_image( $previous = true, $max_length = 13, $trim_marker = '...' ) {
//   $html = '';
//   $post = $previous? get_previous_post( true, '', 'posting' ): get_next_post( true, '', 'posting' );
//   // $post = get_adjacent_post( true, '', $previous );
//   $txt = $previous ? '<i class="fas fa-arrow-left"></i> 前の制作実績へ' : '次の制作実績へ <i class="fas fa-arrow-right"></i>';
//   if( !empty( $post ) ) {
//     $title = apply_filters( 'the_title', $post->post_title );

//     if( mb_strlen( $title ) > $max_length ) {
//       $title = mb_substr( $title, 0, $max_length ) . $trim_marker;
//     }    
//     $html = '<li>';
//     $html .= sprintf(
//       '<a class="link" href="%s"><div class="txtwrap"><p class="txt01">'.$txt.'</p><p class="txt02">%s</p></div>',
//       esc_url( get_permalink( $post->ID ) ),
//       $title
//     );
//     $html .='<div class="imgwrap"><img src="'.get_the_post_thumbnail_url( $post->ID, 'small' ).'">';
//     $html .='</div></a></li>';

//     echo $html;
//   }  
// }
if ( ! function_exists( 'custom_breadcrumb' ) ) {
  function custom_breadcrumb() {
    // トップページでは何も出力しないように
    if ( is_front_page() ) return false;
    //そのページのWPオブジェクトを取得
    $wp_obj = get_queried_object();
    echo '<div id="breadcrumb">'.  //id名などは任意で
      '<ul>'.
        '<li>'.
          '<a href="'. esc_url( home_url() ) .'"><span>トップ</span></a>'.
        '</li>';
    if ( is_attachment() ) {
      /**
       * 添付ファイルページ ( $wp_obj : WP_Post )
       * ※ 添付ファイルページでは is_single() も true になるので先に分岐
       */
      $post_title = apply_filters( 'the_title', $wp_obj->post_title );
      echo '<li><span>'. esc_html( $post_title ) .'</span></li>';
    } elseif ( is_single() ) {
      /**
       * 投稿ページ ( $wp_obj : WP_Post )
       */
      $post_id    = $wp_obj->ID;
      $post_type  = $wp_obj->post_type;
      $post_title = apply_filters( 'the_title', $wp_obj->post_title );
      // カスタム投稿タイプかどうか
      if ( $post_type !== 'post' ) {
        $the_tax = "";  //そのサイトに合わせて投稿タイプごとに分岐させて明示的に指定してもよい
        // 投稿タイプに紐づいたタクソノミーを取得 (投稿フォーマットは除く)
        $tax_array = get_object_taxonomies( $post_type, 'names');
        foreach ($tax_array as $tax_name) {
            if ( $tax_name !== 'post_format' ) {
                $the_tax = $tax_name;
                break;
            }
        }
        $post_type_link = esc_url( get_post_type_archive_link( $post_type ) );
        $post_type_label = esc_html( get_post_type_object( $post_type )->label );
        //カスタム投稿タイプ名の表示
        echo '<li>'.
              '<a href="'. $post_type_link .'">'.
                '<span>'. $post_type_label .'</span>'.
              '</a>'.
            '</li>';
        } else {
          $the_tax = 'category';  //通常の投稿の場合、カテゴリーを表示
        }
        // 投稿に紐づくタームを全て取得
        $terms = get_the_terms( $post_id, $the_tax );
        // タクソノミーが紐づいていれば表示
        if ( $terms !== false ) {
          $child_terms  = array();  // 子を持たないタームだけを集める配列
          $parents_list = array();  // 子を持つタームだけを集める配列
          //全タームの親IDを取得
          foreach ( $terms as $term ) {
            if ( $term->parent !== 0 ) {
              $parents_list[] = $term->parent;
            }
          }
          //親リストに含まれないタームのみ取得
          foreach ( $terms as $term ) {
            if ( ! in_array( $term->term_id, $parents_list ) ) {
              $child_terms[] = $term;
            }
          }
          // 最下層のターム配列から一つだけ取得
          $term = $child_terms[0];
          if ( $term->parent !== 0 ) {
            // 親タームのIDリストを取得
            $parent_array = array_reverse( get_ancestors( $term->term_id, $the_tax ) );
            foreach ( $parent_array as $parent_id ) {
              $parent_term = get_term( $parent_id, $the_tax );
              $parent_link = esc_url( get_term_link( $parent_id, $the_tax ) );
              $parent_name = esc_html( $parent_term->name );
              echo '<li>'.
                    '<a href="'. $parent_link .'">'.
                      '<span>'. $parent_name .'</span>'.
                    '</a>'.
                  '</li>';
            }
          }
          $term_link = esc_url( get_term_link( $term->term_id, $the_tax ) );
          $term_name = esc_html( $term->name );
          // 最下層のタームを表示
          echo '<li>'.
                '<a href="'. $term_link .'">'.
                  '<span>'. $term_name .'</span>'.
                '</a>'.
              '</li>';
        }
        // 投稿自身の表示
        echo '<li><span>'. esc_html( strip_tags( $post_title ) ) .'</span></li>';
    } elseif ( is_page() || is_home() ) {
      /**
       * 固定ページ ( $wp_obj : WP_Post )
       */
      $page_id    = $wp_obj->ID;
      $page_title = apply_filters( 'the_title', $wp_obj->post_title );
      // 親ページがあれば順番に表示
      if ( $wp_obj->post_parent !== 0 ) {
        $parent_array = array_reverse( get_post_ancestors( $page_id ) );
        foreach( $parent_array as $parent_id ) {
          $parent_link = esc_url( get_permalink( $parent_id ) );
          $parent_name = esc_html( get_the_title( $parent_id ) );
          echo '<li>'.
                '<a href="'. $parent_link .'">'.
                  '<span>'. $parent_name .'</span>'.
                '</a>'.
              '</li>';
        }
      }
      // 投稿自身の表示
      echo '<li><span>'. esc_html( strip_tags( $page_title ) ) .'</span></li>';
    } elseif ( is_post_type_archive() ) {
      /**
       * 投稿タイプアーカイブページ ( $wp_obj : WP_Post_Type )
       */
      echo '<li><span>'. esc_html( $wp_obj->label ) .'</span></li>';
    } elseif ( is_date() ) {
      /**
       * 日付アーカイブ ( $wp_obj : null )
       */
      $year  = get_query_var('year');
      $month = get_query_var('monthnum');
      $day   = get_query_var('day');
      if ( $day !== 0 ) {
        //日別アーカイブ
        echo '<li>'.
              '<a href="'. esc_url( get_year_link( $year ) ) .'"><span>'. esc_html( $year ) .'年</span></a>'.
            '</li>'.
            '<li>'.
              '<a href="'. esc_url( get_month_link( $year, $month ) ) . '"><span>'. esc_html( $month ) .'月</span></a>'.
            '</li>'.
            '<li>'.
              '<span>'. esc_html( $day ) .'日</span>'.
            '</li>';
      } elseif ( $month !== 0 ) {
        //月別アーカイブ
        echo '<li>'.
              '<a href="'. esc_url( get_year_link( $year ) ) .'"><span>'. esc_html( $year ) .'年</span></a>'.
            '</li>'.
            '<li>'.
              '<span>'. esc_html( $month ) .'月</span>'.
            '</li>';
      } else {
        //年別アーカイブ
        echo '<li><span>'. esc_html( $year ) .'年</span></li>';
      }
    } elseif ( is_author() ) {
      /**
       * 投稿者アーカイブ ( $wp_obj : WP_User )
       */
      echo '<li><span>'. esc_html( $wp_obj->display_name ) .' の執筆記事</span></li>';
    } elseif ( is_archive() ) {
      /**
       * タームアーカイブ ( $wp_obj : WP_Term )
       */
      $term_id   = $wp_obj->term_id;
      $term_name = $wp_obj->name;
      $tax_name  = $wp_obj->taxonomy;
      /* ここでタクソノミーに紐づくカスタム投稿タイプを出力しても良いでしょう。 */
      // 親ページがあれば順番に表示
      if ( $wp_obj->parent !== 0 ) {
        $parent_array = array_reverse( get_ancestors( $term_id, $tax_name ) );
        foreach( $parent_array as $parent_id ) {
          $parent_term = get_term( $parent_id, $tax_name );
          $parent_link = esc_url( get_term_link( $parent_id, $tax_name ) );
          $parent_name = esc_html( $parent_term->name );
          echo '<li>'.
                '<a href="'. $parent_link .'">'.
                  '<span>'. $parent_name .'</span>'.
                '</a>'.
              '</li>';
        }
      }
      // ターム自身の表示
      echo '<li>'.
            '<span>'. esc_html( $term_name ) .'</span>'.
          '</li>';
    } elseif ( is_search() ) {
      /**
       * 検索結果ページ
       */
      echo '<li><span>「'. esc_html( get_search_query() ) .'」で検索した結果</span></li>';
    
    } elseif ( is_404() ) {
      /**
       * 404ページ
       */
      echo '<li><span>お探しの記事は見つかりませんでした。</span></li>';
    } else {
      /**
       * その他のページ（無いと思うけど一応）
       */
      echo '<li><span>'. esc_html( get_the_title() ) .'</span></li>';
    }
    echo '</ul></div>';  // 冒頭に合わせた閉じタグ
  }
}
function single_works_pager( $previous = true, $max_length = 13, $trim_marker = '...' ) {
  $html = '';

  /* ---------- シングルのページャー ---------- */
  $taxonomies = get_post_taxonomies();
  foreach( $taxonomies as $tax ){
    $tax1 = $tax;
    break;
  }
  $post = $previous ? get_previous_post( 'in_same_term', '', $tax1 ): get_next_post( 'in_same_term', '', $tax1 );
  $txt = $previous ? '<i class="fas fa-arrow-left"></i> 前の制作実績へ' : '次の制作実績へ <i class="fas fa-arrow-right"></i>';


  if( !empty( $post )){
    $title = apply_filters( 'the_title', $post->post_title );

    if( mb_strlen( $title ) > $max_length ) {
      $title = mb_substr( $title, 0, $max_length ) . $trim_marker;
    }    
    $html = '<li>';
    $html .= sprintf(
      '<a class="link" href="%s"><div class="txtwrap"><p class="txt01">'.$txt.'</p><p class="txt02">%s</p></div>',
      esc_url( get_permalink( $post->ID ) ),
      $title
    );
    $html .='<div class="imgwrap"><img src="'.get_the_post_thumbnail_url( $post->ID, 'small' ).'">';
    $html .='</div></a></li>';

    echo $html;
  }
}