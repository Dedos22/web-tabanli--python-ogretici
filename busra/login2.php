<?php
    ob_start();
    session_start();

    include"baglan.php";
     
    $kadi = $_POST['kadi'];
    $sifre = $_POST['sifre'];

    $sql = "SELECT * FROM admin WHERE admin_kadi='$kadi' AND admin_sifre='$sifre' ";
    $stmt = $db->query($sql);
    $stmt->execute();
    $result =$stmt->fetch(PDO::FETCH_OBJ);

    if ($kadi=="" || $sifre=="") {
        echo "bos";
    }else{
        if ($kadi==($_SESSION['admin_kadi'] = $result->admin_kadi) && $sifre == ($_SESSION['admin_sifre'] = $result->admin_sifre))
        {
            $_SESSION['login'] = true;
            $_SESSION['kadi_adi'] = $kadi;
            echo "ok";
        }
        else{
            echo "! Bilgiler Yanlış !";
        }
    }

/*$sql_check = query("SELECT * FROM admin WHERE admin_kadi='$kadi' AND admin_sifre='$sifre' ") or die(mysql_error());
$sql_check->execute();*/

/*
if(mysql_num_rows($sql_check))  {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $kadi;
    $_SESSION["pass"] = $sifre;
    header("Location:index.php");
}
else {
    if($kadi=="" or $sifre=="") {
        echo "<center>Lutfen kadi adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>kadi Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}*/
 
    ob_end_flush();
?>
