<?php
include"baglan.php";
include"header.php";




?>

<?php
include"baglan.php";
                $ayarlar=$db->prepare("SELECT *  FROM ayarlar");
                $ayarlar->execute();
                $ayarcek = $ayarlar->fetch(PDO::FETCH_ASSOC);

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
                                        <strong>YÖNETİM PANELİ</strong> 
                                        
                                        <i style="position: absolute;left:1000px"  ><a href="logout.php">Logout</a> </i>
                                      
                                    </div>
<?php
include"baglan.php";
               $yorumlar=$db->prepare("SELECT *  FROM yorum ");
                $yorumlar->execute();
                $yorumcek = $yorumlar->fetch(PDO::FETCH_ASSOC);
                $count = $yorumlar->rowCount();

                 $mesajlar=$db->prepare("SELECT *  FROM mesajlar ");
                $mesajlar->execute();
                $mesajcek = $mesajlar->fetch(PDO::FETCH_ASSOC);
                $countt = $mesajlar->rowCount();

                 $yazilar=$db->prepare("SELECT *  FROM yazilar ");
                $yazilar->execute();
                $yazicek = $yazilar->fetch(PDO::FETCH_ASSOC);
                $yazicount = $yazilar->rowCount();

  ?>


 <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number"> <?php print($count)    ?></h2>
                                <span class="desc">YORUM SAYISI</span>
                                <div class="icon">
                                 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number"><?php print($countt)    ?></h2>
                                <span class="desc">Mesaj sayısı</span>
                                <div class="icon">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number"><?php print($yazicount)    ?></h2>
                                <span class="desc">İçerik Sayısı</span>
                                <div class="icon">
                                   
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->






                                <div class="card">
                                    
                                    <div class="card-footer">
                                        
                                    </div>
                                </div>
                            </div>

                            
                        </div>
            <?php         
include"footer.php";
?>