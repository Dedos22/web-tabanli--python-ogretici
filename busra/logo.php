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
                                        <strong>LOGO DÜZENLE</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="islem.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input"  class=" form-control-label">KULLANILAN LOGO</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                       <!-- BASLIK-->
                                                <img src="/busra/images/<?php echo $ayarcek["site_logo"] ?>" width="150px">
                                                    
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input"  class=" form-control-label">SİTE LOGO</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                       <!-- BASLIK-->
                                                    <input type="file"  name="site_logo" id="site_logo" class="form-control">
                                                    
                                                </div>
                                            </div>
                                      
                                            

                                            
                                           
                                </div>
                                <div class="card">
                                    
                                    <div class="card-footer">
                                        <button type="submit" name="logo"  id="logo" class="btn btn-primary btn-sm">
                                          Güncelle
                                     
                                         </button>
                                          </form>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
            <?php         
include"footer.php";
?>
