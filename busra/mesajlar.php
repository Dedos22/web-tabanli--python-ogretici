<?php
include"baglan.php";
include"header.php";




?>




  
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                       
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                
                                               
                                                <th>TARİH</th>
                                                  <th>KONU</th>
                                                <th>GÖNDEREN İSİM</th>
                                                <th>AÇIKLAMA</th>
                                                <th>DURUM</th>
                                                 <th>CEVAPLA</th>
                                                  <th>SİL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
 
 <br><br><br>
                                                <?php
                                                     include"baglan.php";
                                                     $mesajlar=$db->prepare("SELECT *  FROM mesajlar ORDER BY mesaj_id DESC");
                                                     $mesajlar->execute();
                                                     $mesajcek = $mesajlar->fetchALL(PDO::FETCH_ASSOC);
                                                     $yazisay=$mesajlar->rowcount();

                                                     if($yazisay){
                                                     	foreach ($mesajcek as $row) {
                                                     		
                                                     	


                                                     
                                                     ?>
                                                     
                                           
                                            <tr>
                                                <td   name="mesaj_id" id="mesaj_id"> <?php echo $row["mesaj_id"] ;?></td>
                                            
                                                  <td  name="mesaj_tarih" id="mesaj_tarih"><?php echo $row["mesaj_tarih"] ;?></td>
                                                      
                                                <td  name="mesaj_konu" id="mesaj_konu"><?php echo $row["mesaj_konu"] ;?></td>

                                                <td  name="mesaj_gonderenisim" id="mesaj_gonderenisim"><?php echo $row["mesaj_gonderenisim"] ;?></td>

                                                   <td  name="mesaj_aciklama" id="mesaj_aciklama"><?php echo $row["mesaj_aciklama"] ;?></td>


                                                   <td>
                                                    <?php

                                                    if ($row["mesaj_okunma"]==1) {
                                                        echo "<span class='fa fa-eye-slash' ></span>";
                                                        # code...
                                                    }else{
                                                        echo "<span class='fa fa-eye' ></span>";
                                                    }





                                                      ?>
                                                       


                                                   </td>

                                               <td>   <a href="cevapla.php?mesaj_id=<?php echo $row["mesaj_id"] ?>"><button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>GÖRÜNTÜLE</button></a>
                                               </td><td>
                                                  <a href="islem.php?mesajsil_id=<?php echo $row["mesaj_id"] ?>"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> SİL</button></a>
                                               </td>
                                            </tr>
                                
                                                <?php } } ?>


                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
            <?php         
include"footer.php";
?>