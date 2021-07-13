
<?php  
if($_POST){

	$gonderenemail = strip_tags($_POST["mail"]);
	$mesaj =strip_tags($_POST["mesaj"]);

	if(!$mesaj){
		echo "bos";
	}else {
		date_default_timezone_set("Europe/Istanbul");
		require("class.phpmailer.php");
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 1;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host = "srvc189.turhost.com";
		$mail->Port = 465;
		$mail->IsHTML(true);
		$mail->SetLanguage("tr","phpmailer/language"); 
		$mail->CharSet = 'utf-8';
		$mail->Username = 'admin@nejlasahin.com';
		$mail->Password = 'V+jKL]s%.HeY';
		$mail->SetFrom('admin@nejlasahin.com', 'Nejla Sahin');
		$mail->AddAddress($gonderenemail);
		$mail->Subject = "nejlasahin.com 'dan mesaj";
		$mail->Body = $mesaj;
		try {
			$mail->send();
			echo "yes";
		} catch (Exception $e) {
			echo "Email Gönderim Hatası: ". $mail->ErrorInfo;
		}
	}

}

?>