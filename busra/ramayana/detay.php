<!DOCTYPE html>
<html lang="en">


<link rel="stylesheet" href="ckeditor/plugins/codesnippet/lib/highlight/styles/monokai.css" />

<script src="ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js" type="text/javascript"></script>

<script>hljs.initHighlightingOnLoad();</script>


<?php

include 'header.php';
$yazi_id=$_GET["yazi_id"];
$yazilar=$db->prepare("SELECT * FROM yazilar 
	 WHERE yazi_id=?  ");
$yazilar->execute(array($yazi_id));
$yazicek=$yazilar->fetch(PDO::FETCH_ASSOC);
?>
<center><img src="../images/<?php echo $yazicek["yazi_foto"] ?> " style="width: 550px"> </center>   
<h2><center>  <?php echo $yazicek["yazi_title"] ?> </center>   </h2>
<p>  <?php echo $yazicek["yazi_icerik"] ?>                       <p>

 <?php echo $yazicek["yazi_tarih"] ?>  


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
 <!-- Contact Form -->
            <section class="contact-form">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    YORUM YAP
                    <form id="contact"  action="yorumekledo.php" method="post">
                      <div class="row">
                        <div class="col-md-12">
                          <fieldset>
                            <input name="ad" type="text" class="form-control" id="ad" placeholder="Your name..." required="">
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required="">
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset>
                            <textarea name="mesaj" rows="6" class="form-control" id="mesaj" placeholder="Your message..." required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset>
                              <input type="hidden" name="konuid" value=" <?php echo $yazicek["yazi_id"] ?>">	
                        <input type="submit" value="Gönder">
                        <?php   ?>
                    
                          </fieldset>
                        </div>
                      </div>
                    </form> 
                  </div>
                  <div class="col-md-6">
                    <div id="map">
                    <!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->

                      <img src="/busra/images/2.jpg" width="100%" height="420px" frameborder="0" style="border:0" allowfullscreen>
                    </div>
                  </div>
                </div>
              </div>
            </section>

<?php


$yorumlar=$db->prepare("SELECT * FROM yorum WHERE yazi_id = ".$yazi_id);
$yorumlar->execute();
$yorum=$yorumlar->fetchALL(PDO::FETCH_ASSOC);

foreach ($yorum as $row) { ?>
<b><?php echo $row["tarih"]; ?></b>
<b><?php echo $row["adi"]; ?></b>

<p><?php echo $row["mesaj"]; ?></p>
 <img style="width: 100px" src="/busra/images/indir.jpg"><i style="color: purple"><?php echo $row["cevap"]; ?></i><br><hr style="color: purple"> 
<?php } ?>


 </div>
</div>

<!-- Sidebar -->
<div id="sidebar">

<?php

include 'navbar.php';

include 'footer.php';
?>