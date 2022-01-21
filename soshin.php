<?php 	session_start();

  if(
    isset( $_SESSION['token'] , $_POST['token']) 
    &&  $_SESSION['token'] == $_POST['token']
  )

  foreach ($_POST as $key => $value) {
      $post[$key] = htmlspecialchars($value ,ENT_QUOTES);
  }


  mb_language("ja");
  mb_internal_encoding("UTF-8");

  $site_name = 'お酒販売株式会社';
  $admin_email = 'sample@sample.jp';
  $mailto   = "$admin_email , $post[mail]";
  $subject = "メールタイトル";
  $header = "From: " .mb_encode_mimeheader($site_name) ."<{$admin_email}>";

  mb_send_mail($mailto , $subject , $post['comment'] , $header);

  header('Location: ./complete.html');