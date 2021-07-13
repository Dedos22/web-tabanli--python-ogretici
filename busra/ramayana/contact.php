 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
 <!-- Contact Form -->
            <section class="contact-form">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
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
                        <input type="submit" value="Gönder">
                        <?php   ?>
                        <input type="hidden" name="konuid" value="$konuid">
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

                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907" width="100%" height="420px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </section>
           