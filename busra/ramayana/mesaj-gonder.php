<?php
include"../baglan.php";

$isim=$_POST['isim'];
$email=$_POST['email'];
$konu=$_POST['konu'];
$aciklama=$_POST['aciklama'];
//if () {

try{
    //Bir mysql sorgusu ile uyeler tablosuna verileri eklettiriyoruz.
    $kaydet=$db->query("INSERT INTO mesajlar (mesaj_gonderenisim, mesaj_gonderenmail, mesaj_konu, mesaj_aciklama, mesaj_tarih) VALUES ('".$isim."','".$email."','".$konu."','".$aciklama."', now())");
    //echo "veriler eklendi";   
    header("Location:iletisim.php");
    
}catch(Exception $ex){
    echo "başarısız";   
}


//echo $isim." ".$email." ".$konu." ".$aciklama;

/*
function reCaptcha($response){
    
    $fields=[
      'secret' => '6Ldzc84ZAAAAAOESB8wh3RpEMTdqEuJE33i2ofCU',
      'response' => $response,
    ];
    $ch=curl_init('https:/www.google.com/recaptcha/api/siteverify');
    curl_setopt_array($ch,[
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($fields),
        CURLOPT_RETURNTRANSFER => true
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result, true);
    
}

if(!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])){
    $kontrol="bos";
}else {
    $result = reCaptcha($_POST['g-recaptcha-response']);
    if($result['success']==1){
        $kontrol="yes";
    }else{
        $kontrol="no";
    }
}

include '../baglan.php';
extract($_POST);
if($_POST){
	if( !$isim || !$email || !$konu || !$aciklama || ($kontrol == "bos") ){
		echo "bos";
	}else if($kontrol == "yes"){
		$mesajlar = $db->prepare("INSERT INTO mesajlar SET mesaj_gonderenisim=?, mesaj_gonderenemail=?, mesaj_konu=?, mesaj_aciklama=?");
		$insert = $mesajlar->execute(array($isim, $email, $konu, $aciklama));
		if($insert){
			echo "yes";
		}else {
			echo "no";
		}
	}else{
	    echo "no";
	}
}*/
?>