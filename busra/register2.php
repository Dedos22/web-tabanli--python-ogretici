<?php
include 'baglan.php';

$kadi = $_POST['kadi'];

$sifre=$_POST['sifre'];


try{
    //Bir mysql sorgusu ile uyeler tablosuna verileri eklettiriyoruz.
    $kaydet=$db->query("INSERT INTO admin (admin_kadi,admin_sifre) VALUES ('".$kadi."','".$sifre."')");
    //echo "veriler eklendi";   
    header("Location:register.php");
    
}catch(Exception $ex){
    echo "başarısız";   
}
?>