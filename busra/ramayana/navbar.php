

 <div class="inner">

            <!-- Search Box -->
            <section id="search" class="alt">
              <form method="get" action="ara.php">
                <input type="text" name="ara" id="ara" placeholder="Search..." />
              </form>
            </section>
              
            <!-- Menu -->

            <nav id="menu">
              <ul>
              	 <li><a href="index.php">ANASAYFA</a></li>
               
              	<?php
              	include"baglan.php";
              	$kategoriler=$db->prepare("SELECT *  FROM yazilar");
              	$kategoriler->execute();
              	$kategori_listele = $kategoriler->fetchALL(PDO::FETCH_ASSOC);

              	foreach ($kategori_listele as $row) { ?>
              		 <li><a href="detay.php?yazi_id=<?php echo $row["yazi_id"] ; ?>"><?php echo $row["yazi_title"] ; ?></a></li>
              	

                   <?php }	 ?>
               



               
              
                <li><a href="iletisim.php">İLETİŞİM</a></li>
                <li><a href="https://www.google.com">External Link</a></li>
              </ul>
            </nav>

            <!-- Featured Posts -->
            <div class="featured-posts">
              <div class="heading">
                <h2>SOSYAL MEDYA</h2>
              </div>
              <?php
include"baglan.php";
                $ayarlar=$db->prepare("SELECT *  FROM ayarlar");
                $ayarlar->execute();
                $ayarcek = $ayarlar->fetchALL(PDO::FETCH_ASSOC);
       	foreach ($ayarcek as $row) { ?>
  
                <!-- Facebook -->
                  <a class="btn btn-primary" style="background-color: #3b5998" href="<?php echo $row["site_facebook"] ; ?>" role="button">facebook</a>
              <!-- Google -->
                   <a class="btn btn-primary" style="background-color: #dd4b39" href="<?php echo $row["site_google"] ; ?>" role="button">google</a>
               <br><br>
             <!-- Instagram -->
                   <a class="btn btn-primary" style="background-color: #ac2bac" href="<?php echo $row["site_instagram"] ; ?>" role="button" >instagram</a>
                   <!-- Youtube -->
               <a class="btn btn-primary" style="background-color: #ed302f" href="<?php echo $row["site_youtube"] ; ?>" role="button" >youtube</a>
            </div>
 
            <!-- Footer -->
            <footer id="footer">
              <p class="copyright"><?php echo $row["site_desc"] ; ?></p>

              <!-- Facebook -->
     <?php }	 ?>
            </footer>

          </div>