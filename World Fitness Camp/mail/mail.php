<?php 
	  session_start();
	  
	  header('Content-Type: text/html; charset=utf-8');

	  $errorMessage1 = 'Не заполнено поле "ИМЯ"<br/>';

	  $errorMessage2 = 'Не заполнено поле "ТЕЛЕФОН"<br/>';

	  $errorMessage3 = 'Не заполнено поле "E-MAIL"<br/>';

	  $errorMes = '';

	  $name = strip_tags(trim($_POST['name']));
	  $phone = strip_tags(trim($_POST['phone']));
	  $addr = $_POST['email'];
	  $mess = $_POST['mess'];

	  if ( empty($name) ) {
	  	 $errorMes .= $errorMessage1;
	  }

	  if ( empty($phone) ) {
	  	 $errorMes .= $errorMessage2;
	  }

	  if ( empty($addr) ) {
	  	$errorMes .= $errorMessage3;
	  }

	  if ( empty($errorMes) ){
	  		$email = "descendended@gmail.com";

	  		$mailfrom = "no-reply@fitness-camp.ru";

	  		$message ="Новое сообщение с сайта <br/>
	  				  <strong>ФИО </strong> {$name}<br/>
	  				  <strong>Телефон </strong> {$phone}<br/>
	  				  <strong>E-MAIL </strong> {$addr}<br/>
	  				  <strong>Сообщение </strong> {$mess}<br/>";

	  		$message2 ="Ответ с сайта <br/> Ваше сообщение получено. С вами свяжутся в ближайшее время";

	  		$subject = "Новое сообещние";

	  		$subject .= "?=utf-8?b?".base64_encode($subject)."?=";
	  		$subject2 = "Ваш ответ с сайта";
	  		$subject2 .= "?=utf8?b?".base64_encode($subject2)."?=";
	
	  		$headers = "From: {$mailfrom}\r\n";
	  		$headers .= "Mime-Version: 1.0 \r\n";
	  		$headers .= "Content-type: text/html; charset=UTF-8\r\n";

	  		$host = mail($email, $subject, $message, $headers);

	  		$host2 = mail($addr, $subject2, $message2, $headers);

	  		if(!$host && !$host2){
	  			echo "Сообщение не отправлено!";
	  		} else{
	  			echo "Спасибо! Ваше сообщение отправлено!";
	  		}

	} else {
	  	echo $errorMes;
	}
?>