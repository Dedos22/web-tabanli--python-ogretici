<!DOCTYPE html>
<html lang="en">

<?php

include 'header.php';
$yazilar=$db->prepare("SELECT * FROM yazilar   ");
$yazilar->execute();
$yazicek=$yazilar->fetchALL(PDO::FETCH_ASSOC);

foreach ($yazicek as $row) { ?>

 


 <div class="media-body">
     <center> 
                            <h3 class="title mb-1">
                                <a href="detay.php?yazi_id=<?php echo $row["yazi_id"]; ?>"><?php echo $row["yazi_title"]; ?></a>
                            </h3>
                            <a href="detay.php?yazi_id=<?php echo $row["yazi_id"]; ?> ">
                              <img class="post-thumb d-md-flex img-fluid " src="/busra/images/<?php echo $row['yazi_foto']; ?>" style="width: 400px" ></center>
                            </a>

                            <div class="intro"><?php echo $row["yazi_on_icerik"]; ?></div>
                            <a class="more-link" href="detay.php?yazi_id=<?php echo $row["yazi_id"]; ?>">Daha fazla oku&rarr;</a>
                            <br>  <div class="meta mb-1">
                                <i class="fas fa-calendar-alt  fa-fw mr-2"></i>
                                <span class="date"><?php echo date( "d.m.Y", strtotime($row["yazi_tarih"])); ?></span>
                            </div>
                            <hr>
                        </div>

<?php } ?>


 </div>
</div>

<!-- Sidebar -->
<div id="sidebar">

<?php

include 'navbar.php';

include 'footer.php';
?>