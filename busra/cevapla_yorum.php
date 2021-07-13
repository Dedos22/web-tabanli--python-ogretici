<?php
include"baglan.php";
include"header.php";




?>

<?php
include"baglan.php";

                $id=$_GET["id"];
                $mesajlar=$db->prepare("SELECT *  FROM yorum WHERE id=?");
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
                                        <strong>CEVAPLA </strong> 
                                    </div>
                                    <div class="card-body card-block">
                                         <form action="cevapp.php?id=<?php echo $mesajcek["id"]; ?>" method="POST">

          <input type="hidden" name="yorum_ekleyen" value="Admin"> 
          <input type="hidden" name="yorum_eposta" value="demetduz2696@gmail.com"> 
          <input type="hidden" name="yorum_yazi_id" value="<?php echo $mesajcek["yazi_id"] ?>"> 


          <div class="form-group">
            <label class="font-weight-bold">Yorum Ekleyen</label><br>
            <input type="text" class="form-control" value="<?php echo $mesajcek["adi"] ?>">
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Yapılan Yorum</label><br>
            <textarea class="form-control"  rows="10" disabled ><?php echo $mesajcek["mesaj"] ?></textarea>
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Cevapla</label><br>
            <textarea class="form-control" name="yorum_icerik" rows="10" >

              ?></textarea>
          </div>

          <button type="submit"  class="btn btn-primary btn-block" >Cevapla</button>      
        </form>
        
                                    </div>
                                </div>
                            </div>

                            
                        </div>
            <?php         
include"footer.php";
?>