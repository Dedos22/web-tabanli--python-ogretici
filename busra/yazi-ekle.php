<?php
include"baglan.php";
include"header.php";




?>

<link rel="stylesheet" href="ckeditor/plugins/codesnippet/lib/highlight/styles/monokai.css" />

<script src="ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js" type="text/javascript"></script>

<script>hljs.initHighlightingOnLoad();</script>


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
                                        <strong>YAZI EKLE</strong> 
                                    </div>
                                    <div class="card-body card-block">

                                        <form action="islem.php" method="POST" enctype="multipart/form-data" class="form-horizontal">

                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input"  class=" form-control-label">foto</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     
                                                  
                                                    
                                                </div>
                                            </div>


                                            <div class="form-group">
        
          <input type="file" class="form-control-file"  name="yazi_foto">
        </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input"  class=" form-control-label">Başlık</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                       <!-- BASLIK-->
                                                    <input type="text"  name="yazi_title"   class="form-control">
                                                    
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">ÖN İçerik</label>
                                                </div>
                                                   <div class="col-12 col-md-9">
                                                    <textarea name="yazi_on_icerik"  id="ckeditor1" class="ckeditor"></textarea>
                                                   
                                                </div>
                                            </div>
                                           

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">İçerik</label>
                                                </div>
                                                   <div class="col-12 col-md-9">
                                                    <textarea name="yazi_icerik"  id="ckeditor1" class="ckeditor"></textarea>
                                                   
                                                </div>
                                            </div>

                                           
                                            
                                           
                                            
                                           
                                </div>
                                <div class="card">
                                    
                                    <div class="card-footer">
                                        <button type="submit" name="yazi_ekle" class="btn btn-primary btn-sm">
                                          EKLE
                                     
                                         </button>
                                          </form>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
            <?php         
include"footer.php";
?>