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