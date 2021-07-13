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
                                              <th>CEVAP</th>
                                                 <th>CEVAPLA</th>
                                                  <th>SİL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
 
 <br><br><br>
                                                <?php
                                                     include"baglan.php";
                                                     $yorumlar=$db->prepare("SELECT *  FROM yorum ORDER BY id DESC");
                                                     $yorumlar->execute();
                                                     $yorumcek = $yorumlar->fetchALL(PDO::FETCH_ASSOC);
                                                  

                                                 
                                                     	foreach ($yorumcek as $row) {
                                                     		
                                                     	


                                                     
                                                     ?>
                                                     
                                           
                                            <tr>
                                                <td   name="id" id="id"> <?php echo $row["id"] ;?></td>
                                            
                                                  <td  name="tarih" id="tarih"><?php echo $row["tarih"] ;?></td>
                                                      
                                                <td  name="adi" id="adi"><?php echo $row["adi"] ;?></td>

                                                <td  name="email" id="email"><?php echo $row["email"] ;?></td>

                                                   <td  name="mesaj" id="mesaj"><?php echo $row["mesaj"] ;?></td>

                                                 <td  name="cevap" id="cevap"><?php echo $row["cevap"] ;?></td>
                                               <td>   <a href="cevapla_yorum.php?id=<?php echo $row["id"] ?>"><button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>CEVAPLA</button></a>
                                               </td><td>
                                                  <a href="islem.php?id=<?php echo $row["id"] ?>"><button  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Sil</button></a>
                                               </td>
                                            </tr>
                                
                                                <?php }  ?>


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