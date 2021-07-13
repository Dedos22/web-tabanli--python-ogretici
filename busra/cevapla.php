<?php
include"baglan.php";
include"header.php";




?>

<?php
include"baglan.php";
                $id=$_GET["mesaj_id"];
                $mesajlar=$db->prepare("SELECT *  FROM mesajlar WHERE mesaj_id=?");
                $mesajlar->execute(array($id));
                $mesajcek = $mesajlar->fetch(PDO::FETCH_ASSOC);

  ?>


  <!-- PAGE CONTAINER-->

        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>MESAJ </strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="islem.php?mesaj_id=<?php echo $mesajcek["mesaj_id"]; ?>" method="POST">
          <div class="form-group">
            <label class="font-weight-bold"> İsim </label><br>
            <input type="text" class="form-control" value="<?php echo $mesajcek["mesaj_gonderenisim"] ?>" disabled>
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Gönderen Mail</label><br>
            <input type="text" class="form-control"  value="<?php echo $mesajcek["mesaj_gonderenmail"] ?>" disabled>
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Konu</label><br>
            <input type="text" class="form-control" value="<?php echo $mesajcek["mesaj_konu"] ?>" disabled>
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Tarih</label><br>
            <input type="text" class="form-control"  value="<?php echo $mesajcek["mesaj_tarih"] ?>" disabled>
          </div>
          <div class="form-group">
            <label class="font-weight-bold">İçerik</label><br>
            <textarea class="form-control"  rows="10" disabled><?php echo $mesajcek["mesaj_aciklama"] ?></textarea>
          </div>
        </form>

       

        
                                    </div>
                                </div>
                            </div>

                            
                        </div>
            <?php         
include"footer.php";
?>