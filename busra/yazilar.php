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
                                                  <th>foto</th>
                                                <th>BAŞLIK</th>
                                                <th>DÜZENLE</th>
                                                 <th>SİL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
 <a href="yazi-ekle.php"><button class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus"></i>YAZI EKLE</button></a>
 <br><br><br>
                                                <?php
                                                     include"baglan.php";
                                                     $yazilar=$db->prepare("SELECT *  FROM yazilar ORDER BY yazi_id DESC");
                                                     $yazilar->execute();
                                                     $yazicek = $yazilar->fetchALL(PDO::FETCH_ASSOC);
                                                     $yazisay=$yazilar->rowcount();

                                                     if($yazisay){
                                                     	foreach ($yazicek as $row) {
                                                     		
                                                     	


                                                     
                                                     ?>
                                                     
                                           
                                            <tr>
                                                <td   name="yazi_id" id="yazi_id"> <?php echo $row["yazi_id"] ;?></td>
                                            
                                                  <td  name="yazi_tarih" id="yazi_tarih"><?php echo $row["yazi_tarih"] ;?></td>
                                                      <td  name="yazi_foto" id="yazi_foto"> <img src="/busra/images/<?php echo $row["yazi_foto"] ;?>" style="width:100px"> </td>
                                                <td  name="yazi_title" id="yazi_title"><?php echo $row["yazi_title"] ;?></td>

                                               <td>   <a href="yazi-duzenle.php?yazi_id=<?php echo $row["yazi_id"] ?>"><button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Düzenle</button></a>
                                               </td><td>
                                                  <a href="islem.php?yazisil_id=<?php echo $row["yazi_id"] ?>"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Sil</button></a>
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