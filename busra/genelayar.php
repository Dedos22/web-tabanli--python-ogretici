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
                                        <strong>GENEL AYARLAR </strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="islem.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input"  class=" form-control-label">BAŞLIK</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                       <!-- BASLIK-->
                                                    <input type="text"  name="site_title" id="site_title" value="<?php echo $ayarcek["site_title"] ;?>" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="date" class=" form-control-label">URL</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="site_url"  name="site_url" value="<?php echo $ayarcek["site_url"] ;?>" class="form-control">
                                                   
                                                </div>
                                            </div>
                                            

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">DESCRİPTİON</label>
                                                </div>
                                                   <div class="col-12 col-md-9">
                                                    <input type="text" id="site_desc"  name="site_desc" value="<?php echo $ayarcek["site_desc"] ;?>" class="form-control">
                                                   
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">KEYWORDS</label>
                                                </div>
                                                   <div class="col-12 col-md-9">
                                                    <input type="text" id="site_keyw"  name="site_keyw" value="<?php echo $ayarcek["site_keyw"] ;?>" class="form-control">
                                                   
                                                </div>
                                            </div>
                                            
                                           
                                </div>
                                <div class="card">
                                    
                                    <div class="card-footer">
                                        <button type="submit" name="genel_ayarlar"  id="genel_ayarlar" class="btn btn-primary btn-sm">
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