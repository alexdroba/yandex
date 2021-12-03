<?php
    $name = $_POST['user_name'];
	$phone = $_POST['user_phone'];

	$to = "info@asmart-group.ru"; 
	$from = "test_acc_alexdroba@mail.ru";
	$subject = "Заявка c сайта";
	
	$msg = "
    Имя: $name 
    Телефон: $phone"; 	

	$headers = 'From: test_acc_alexdroba@mail.ru' . "\r\n" .
    'Reply-To: test_acc_alexdroba@mail.ru' . "\r\n";

	mail($to, $subject, $msg, $headers);
    header('location: index.html');
?>


