<?php
include"baglan.php";
//YORUM CEVAPLA
    $yorum_id = $_GET["id"];
    $yorum_icerik = $_GET["cevap"];






extract($_POST);

//GENEL AYARLAR GÜNCELLEME İŞLEMİ




    if(!$yorum_id || !$yorum_icerik ){
        header("Location:  yorumlar.php?update=bos");
    }else{
        
        $yukle = $db->prepare("UPDATE yorum SET cevap=? WHERE id=?");
        $update = $yukle->execute(array( $yorum_icerik,$yorum_id));

        if($update){
            
            header("Location: yorumlar.php?update=basarili");
        }else {
            header("Location: yorumlar.php?update=basarisiz");

        }
    }


/*
        $yukle = $db->prepare("UPDATE yorum SET cevap=? WHERE id=?");
        $update = $yukle->execute(array( $yorum_icerik,$yorum_id));

        if($update){
            
            header("Location: yorumlar.php?update=basarili");
        }else {
            header("Location: yorumlar.php?update=basarisiz");

        }
    

*/

?>



