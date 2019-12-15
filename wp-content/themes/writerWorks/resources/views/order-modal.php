<?php
/*
 *
 * Template Name: File upload
 *
 */


  if ( ! function_exists( 'wp_handle_upload' ) )
    require_once( ABSPATH . 'wp-admin/includes/file.php' );

  $file = & $_FILES['order_file'];

  $overrides = [ 'test_form' => false ];

  $movefile = wp_handle_upload( $file, $overrides );

  if ( $movefile && empty($movefile['error']) ) {
    echo "Файл был успешно загружен.\n";
    print_r( $movefile );
  } else {
    echo "Возможны атаки при загрузке файла!\n";
  }



$data = $_POST;

$name = $data['name_question'];
$phone = $data['phone_question'];
$email = $data['email_question'];
$view_work = $data['vid_raboti'];
$topic_work = $data['topic_work'];
$lesson = $data['predmet'];
$date_result = $data['date_result'];
$unique = $data['unique'];
$obiem_work = $data['obiem_work'];
$text = $data['additional_text'];


$content_mail = '';
ob_start();
?>
<p><?php pll_e('Имя:');?> <?php echo $name;?></p>
<p><?php pll_e('Номер телефона :');?> <?php echo $phone;?></p>
<p><?php pll_e('Email :');?> <?php echo $email;?></p>
<p><?php pll_e('Вид работы :');?> <?php echo $view_work;?></p>
<p><?php pll_e('Тема :');?> <?php echo $topic_work;?></p>
<p><?php pll_e('Предмет :');?> <?php echo $lesson;?></p>
<p><?php pll_e('Дата результата :');?> <?php echo $date_result;?></p>
<p><?php pll_e('Уникальность :');?> <?php echo $unique;?></p>
<p><?php pll_e('Обьем работы :');?> <?php echo $obiem_work;?></p>
<p><?php pll_e('Текст заказа:');?> <?php echo $text;?></p>
<?php
$content_mail = ob_get_clean();

$admin_email = get_option('admin_email');

$success = false;

$headers = array(
  "From: Me Myself <$admin_email>",
  'content-type: text/html',
);


if(wp_mail($admin_email,'Заказ от '.$email,$content_mail,$headers,$movefile)){
    //$success = true;
}

$return = array(
  'data'      => $data,
  'Success'   => $success
);

$redirect_link = wp_get_referer();

wp_redirect( $redirect_link, 301 );
exit;
?>
