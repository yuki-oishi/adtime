<?php 
require_once '../../../wp-load.php';

$offset         = isset( $_POST['post_num_now'] ) ? $_POST['post_num_now'] : 1;
$posts_per_page = isset( $_POST['post_num_add'] ) ? $_POST['post_num_add'] : 0;
$cat            = isset( $_POST['cat'] ) ? $_POST['cat'] : 'web';
$post_type      = isset( $_POST['post_type'] ) ? $_POST['post_type'] : 'works';

$all_args = array();
$search_args = array();

if ($post_type == 'works') {
  $all_args = array(
    'post_type'      => $post_type,
    'works_cat'      => $cat,
    'posts_per_page' => -1,
  );
  $search_args = array(
    'post_type'      => $post_type,
    'posts_per_page' => $posts_per_page,
    'offset'         => $offset,
    'works_cat'      => $cat,
  );
} else if ($post_type == 'staff') {
  $all_args = array(
    'post_type'      => $post_type,
    'staff_cat'      => $cat,
    'posts_per_page' => -1,
  );
  $search_args = array(
    'post_type'      => $post_type,
    'posts_per_page' => $posts_per_page,
    'offset'         => $offset,
    'staff_cat'      => $cat,
  );
}

$all_query = new WP_Query($all_args);
$all_post_count = $all_query->found_posts;

$ajax_query = new WP_Query($search_args);
?>
<?php if ( $ajax_query->have_posts() ) : ?>
  <?php $entry_item = ''; ?>
  <?php ob_start(); ?>
  <?php while ( $ajax_query->have_posts() ) : ?>
    <?php $ajax_query->the_post(); 

    get_template_part( 'content/content', $post_type );


  endwhile; ?>
  <?php $entry_item .= ob_get_contents(); ?>
  <?php ob_end_clean(); ?>
  <?php echo json_encode( array( $entry_item, $all_post_count - ( $offset + $ajax_query->post_count ) ) );?>
<?php endif; ?>
<?php
wp_reset_postdata();