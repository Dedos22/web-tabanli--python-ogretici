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
                                        <strong>SOSYAL MEDYA DÜZENLE </strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="islem.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input"  class=" form-control-label">                                   
                                                    	<a class="btn btn-primary" style="background-color: #3b5998" href="#!" role="button"
                                                              ><i class="fab fa-facebook-f">     <input type="text"  style="height:25px;width: 660px; "  name="site_facebook" id="site_facebook" value="<?php echo $ayarcek["site_facebook"] ;?>" class="form-control"></i
                                                           ></a></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                       <!-- BASLIK-->

                                               
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="date" class=" form-control-label">

                                                    	<a class="btn btn-primary" style="background-color: #ac2bac" href="#!" role="button"
                                               ><i class="fab fa-instagram"></i
                                               > <input type="text" id="site_instagram"  style="height:25px;width: 660px; " name="site_instagram" value="<?php echo $ayarcek["site_instagram"] ;?>" class="form-control"></a>

                                           </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   
                                                   
                                                </div>
                                            </div>
                                            

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">
                                   <!-- Google -->
                                  <a class="btn btn-primary" style="background-color: #dd4b39 ;" href="#!" role="button"><i class="fab fa-google"></i>   <input type="text" style="height:25px;width: 660px; " id="site_google"  name="site_google" value="<?php echo $ayarcek["site_google"] ;?>" class="form-control">  </a></label>
                                                </div>
                                                   <div class="col-12 col-md-9">

                                                   
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">
 <!-- Youtube -->
                                                      <a class="btn btn-primary" style="background-color: #ed302f" href="#!" role="button" ><i class="fab fa-youtube"></i>
                                                      	   <input type="text" style="height:25px;width: 660px; " id="site_youtube"  name="site_youtube" value="<?php echo $ayarcek["site_youtube"] ;?>" class="form-control">


                                                      </a></label>
                                                </div>
                                                   <div class="col-12 col-md-9">
                                                 
                                                   
                                                </div>
                                            </div>
                                            
                                           
                                </div>
                                <div class="card">
                                    
                                    <div class="card-footer">
                                        <button type="submit" name="sosyal_medya"  id="sosyal_medya" class="btn btn-primary btn-sm">
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