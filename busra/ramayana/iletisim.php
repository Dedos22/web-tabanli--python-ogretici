<!DOCTYPE html>
<html lang="en">

<?php

include 'header.php';
 ?>

  <div class="container" >
        <div class="bg-info text-white text-center py-2 mt-5">
             <h2>İletişim Sayfası</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d391768.355431781!2d32.48257158608294!3d39.90356622124967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d347d520732db1%3A0xbdc57b0c0842b8d!2sAnkara%2C+T%C3%BCrkiye!5e0!3m2!1str!2sus!4v1556530231994!5m2!1str!2sus" width="100%" height="435" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <form   id="mesajForm" method="POST"  action="mesaj-gonder.php">
                    <div class="card mt-4">
                        <div class="card-body p-3">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-user text-info"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="isim" name="isim" placeholder="Ad Soyad" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-envelope text-info"></i>
                                        </div>
                                    </div>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-Posta" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-tag text-info"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="konu" name="konu" placeholder="Konu" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-comment text-info"></i>
                                        </div>
                                    </div>
                                    <textarea class="form-control" id="aciklama" name="aciklama" placeholder="Lütfen Mesajınızı Buraya Yazın.." rows="6" required></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" onclick="mesajGonder();" value="gönder" >
                               
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




 </div>
</div>

<!-- Sidebar -->
<div id="sidebar">




<?php

include 'navbar.php';

include 'footer.php';
?>