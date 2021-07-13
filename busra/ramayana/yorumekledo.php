<?php
include '../baglan.php';
$ad = htmlspecialchars($_POST['ad'],ENT_QUOTES);
$email = $_POST['email'];
$mesaj = htmlspecialchars($_POST['mesaj'],ENT_QUOTES);
$konuid=$_POST['konuid'];



try{
    //Bir mysql sorgusu ile uyeler tablosuna verileri eklettiriyoruz.
    $kaydet=$db->query("INSERT INTO yorum (adi,email,mesaj,yazi_id,tarih) 
    	VALUES ('".$ad."','".$email."','".$mesaj."',".$konuid.",  now())");
    //echo "veriler eklendi";   
    header("Location:index.php");
    
}catch(Exception $ex){
    echo "başarısız";   
}

?>