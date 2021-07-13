<?php
include"baglan.php";



extract($_POST);

//GENEL AYARLAR GÜNCELLEME İŞLEMİ
if(isset($genel_ayarlar)){



	if(!$site_title || !$site_url || !$site_desc || !$site_keyw){
		header("Location:  genelayar.php?update=bos");
	}else{
		$ayarlar= $db->prepare("UPDATE ayarlar SET site_title=?, site_url=?,  site_keyw=?, site_desc=? 
			WHERE site_id=? ");
		$update = $ayarlar->execute(array($site_title, $site_url, $site_keyw, $site_desc, 2));
		if($update){
			header("Location:  genelayar.php?update=basarili");
		}else {
			header("Location:  genelayar.php?update=basarisiz");

		}
	}

}


//sosyal medya
if(isset($sosyal_medya)){



	if(!$site_facebook || !$site_google || !$site_instagram || !$site_youtube){
		
		header("Location:  sosyalmedya.php?update=bos");
	}else{
		$ayarlar= $db->prepare("UPDATE ayarlar SET site_facebook=?, site_google=?,  site_instagram=?, site_youtube=? 
			WHERE site_id=? ");
		$update = $ayarlar->execute(array($site_facebook, $site_google, $site_instagram, $site_youtube, 2));
		if($update){
			header("Location:  sosyalmedya.php?update=basarili");
		}else {
			header("Location:  sosyalmedya.php?update=basarisiz");

		}
	}

}


//logo
$DosyaTuru=array("image/jpeg", "image/jpg", "image/png", "image/x-png", "image/ico");
$DosyaUzanti=array("jpeg", "jpg", "png", "x-png", "ico");
if(isset($logo)){
	if($_FILES["site_logo"]["size"] >0 ){
		$kaynak=$_FILES["site_logo"]["tmp_name"];
		$isim=$_FILES["site_logo"]["name"];
		$boyut=$_FILES["site_logo"]["size"];
		$turu=$_FILES["site_logo"]["type"];

		$uzanti=substr($isim, strpos($isim, ".")+1);
		$resimAd=rand()."_".$isim;
		$hedef="../busra/images/".$resimAd;
		if($kaynak){
			if(!in_array($uzanti, $DosyaUzanti) && !in_array($turu, $DosyaTuru)){
				header("Location: logo.php?update=gecersizuzanti");
			}else{
				$sil= $db->prepare("SELECT * FROM ayarlar WHERE site_id=?");
				$sil->execute(array(1));
				$eski_resim= $sil->fetch(PDO::FETCH_ASSOC);
				$eski_resim["site_logo"];

				unlink("../busra/images/".$eski_resim["site_logo"]);
				if(move_uploaded_file($kaynak, $hedef)){
					$yukle = $db->prepare("UPDATE ayarlar SET site_logo=? WHERE site_id=?");
					$update = $yukle->execute(array($resimAd, 2));
					if($update){
						header("Location: logo.php?update=basarili");
					}else {
						header("Location: logo.php?update=basarisiz");

					}
				}

			}
		}
	}else{
		header("Location: logo.php?update=bos");
	}
}


//YAZI GÜNCELLEME
$DosyaTuru=array("image/jpeg", "image/jpg", "image/png", "image/x-png");
$DosyaUzanti=array("jpeg", "jpg", "png", "x-png");

if(isset($yazi_duzenle)){
	if($_FILES["yazi_foto"]["size"] >0 ){

		$yazi_id = $_GET["yazi_id"];
	

		$kaynak=$_FILES["yazi_foto"]["tmp_name"];
		$isim=$_FILES["yazi_foto"]["name"];
		$boyut=$_FILES["yazi_foto"]["size"];
		$turu=$_FILES["yazi_foto"]["type"];

		$uzanti=substr($isim, strpos($isim, ".")+1);
		$resimAd=rand()."_".$isim;
		$hedef="../busra/images/".$resimAd;
		if($kaynak){
			if(!in_array($uzanti, $DosyaUzanti) && !in_array($turu, $DosyaTuru)){
				header("Location: yazilar.php?update=gecersizuzanti");
			}else{
				$sil= $db->prepare("SELECT * FROM yazilar WHERE yazi_id=?");
				$sil->execute(array($yazi_id));
				$eski_resim= $sil->fetch(PDO::FETCH_ASSOC);
				$eski_resim["yazi_foto"];

				unlink("../busra/images/".$eski_resim["yazi_foto"]);
				if(move_uploaded_file($kaynak, $hedef)){
					$yukle = $db->prepare("UPDATE yazilar SET yazi_foto=?, yazi_title=?, yazi_icerik=?, yazi_on_icerik=? WHERE yazi_id=?");
					$update = $yukle->execute(array($resimAd, $yazi_title, $yazi_icerik,$yazı_on_icerik,
						$yazi_id));
					if($update){
						header("Location: yazilar.php?update=basarili");
					}else {
						header("Location: yazilar.php?update=basarisiz");

					}
				}

			}
		}
	}else{
		$yazi_id = $_GET["yazi_id"];
		if(!$yazi_title || !$yazi_icerik || !$yazi_on_icerik ){
			header("Location: yazilar.php?update=bos");
		}else{
			$yukle = $db->prepare("UPDATE yazilar SET yazi_title=?,  yazi_icerik=? , yazi_on_icerik=?  WHERE yazi_id=?");
            $update = $yukle->execute(array($yazi_title, $yazi_icerik, $yazi_on_icerik,
				$yazi_id));
			if($update){
				header("Location: yazilar.php?update=basarili");
			}else {
				header("Location: yazilar.php?update=basarisiz");

			}
		}
		
	}
}

//yazı silme
$yazisil_id=$_GET["yazisil_id"];
if(isset($yazisil_id)){

	$sil= $db->prepare("SELECT * FROM yazilar WHERE yazi_id=?");
	$sil->execute(array($yazisil_id));
	$eski_resim= $sil->fetch(PDO::FETCH_ASSOC);
	$eski_resim["yazi_foto"];
	unlink("../busra/images/".$eski_resim["yazi_foto"]);

	$siliyoruz = $db->prepare("DELETE from yazilar WHERE yazi_id=?");
	$delete = $siliyoruz->execute(array($yazisil_id));

	if($delete){
		header("Location: yazilar.php?delete=basarili");
	}else {
		header("Location: yazilar.php?delete=basarisiz");

	}

}
//yazi ekle
$DosyaTuru=array("image/jpeg", "image/jpg", "image/png", "image/x-png");
$DosyaUzanti=array("jpeg", "jpg", "png", "x-png");

if(isset($yazi_ekle)){
	if(!$yazi_title  || !$yazi_icerik || !$yazi_on_icerik || !$yazi_foto){
		header("Location: yazilar.php?insert=bos");
	}

	$kaynak=$_FILES["yazi_foto"]["tmp_name"];
	$isim=$_FILES["yazi_foto"]["name"];
	$boyut=$_FILES["yazi_foto"]["size"];
	$turu=$_FILES["yazi_foto"]["type"];

	$uzanti=substr($isim, strpos($isim, ".")+1);
	$resimAd=rand()."_".$isim;
	$hedef="../busra/images/".$resimAd;
	if($kaynak){
		if(!in_array($uzanti, $DosyaUzanti) && !in_array($turu, $DosyaTuru)){
			header("Location: yazilar.php?insert=gecersizuzanti");
		}else{
			if(move_uploaded_file($kaynak, $hedef)){
				$yukle = $db->prepare("INSERT INTO yazilar SET yazi_foto=?, yazi_title=?, yazi_icerik=?, yazi_on_icerik=?");
				$insert = $yukle->execute(array($resimAd, $yazi_title,  $yazi_icerik, $yazi_on_icerik));
				if($insert){
					header("Location: yazilar.php?insert=basarili");
				}else {
					header("Location: yazilar.php?insert=basarisiz");

				}
			}

		}
	}
}

//yorum sil

$yorumsil_id=$_GET["id"];
if(isset($yorumsil_id)){


	$yorumlar = $db->prepare("DELETE from yorum WHERE id=?");
	$delete = $yorumlar->execute(array($yorumsil_id));

	if($delete){
		header("Location: yorumlar.php?delete=basarili");
	}else {
		header("Location: yorumlar.php?delete=basarisiz");

	}

}






//MESAJ SİLME
$mesajsil_id=$_GET["mesajsil_id"];
if(isset($mesajsil_id)){


	$mesajlar = $db->prepare("DELETE from mesajlar WHERE mesaj_id=?");
	$delete = $mesajlar->execute(array($mesajsil_id));

	if($delete){
		header("Location: mesajlar.php?delete=basarili");
	}else {
		header("Location: mesajlar.php?delete=basarisiz");

	}

}

//login












?>