
  <!-- Start Suscrive Area -->
  <div class="suscribe-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
          <div class="suscribe-text text-center">
            <h3>Masih Bingung ? Ingin Bertanya ?</h3>
            <a class="sus-btn" href="https://wa.me/6281283061501" ><i class="fa fa-whatsapp" ></i> &nbsp Hubungi Kami</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Suscrive Area -->

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2 class="animated bounce infinite"><img src="<?php echo base_url('assets/images/icons/hppro.png')?>" width="80">  <span>si</span>Pramuka.</h2>
                </div>


                <p>CV.HANGGARA PUTRA PROPERTY Kami adalah agent yang bergerak di bidang property yang ada 
                di Kota Karawang</p>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Kami siap membantu bagi yang ingin memiliki rumah atau ingin berinvestasi dibidang property
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> 0812 8306 1501</p>
                  <p><span>Email:</span> herdi.nugroho1912@gmail.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Sosial Media Kami</h4>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <hr class="my-4">
            </div>
            <!-- Single button -->
             <button type="button" class="btn btn-default btn-sm" disabled="disabled"><i class="fa fa-eye" aria-hidden="true"></i> <span><?php $count_my_page = ("hitcounter.txt"); $hits = file($count_my_page); $hits[0] ++; $fp = fopen($count_my_page , "w"); fputs($fp , "$hits[0]"); fclose($fp); echo $hits[0]; ?></span> Views</button>
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="fa fa-share-alt" aria-hidden="true"></i> Share <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                       <li><a href="www.fa"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                       <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp</a></li>
                    </ul>
                </div>
            <!-- Single button -->    
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright2020 <strong>SIPramuka</strong>.Design by : Herdi Nugroho
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url('assets/home/lib/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/home/lib/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/home/lib/owlcarousel/owl.carousel.min.js')?>"></script>
  <script src="<?php echo base_url('assets/home/lib/venobox/venobox.min.js')?>"></script>
  <script src="<?php echo base_url('assets/home/lib/knob/jquery.knob.js')?>"></script>
  <script src="<?php echo base_url('assets/home/lib/wow/wow.min.js')?>"></script>
  <script src="<?php echo base_url('assets/home/lib/parallax/parallax.js')?>"></script>
  <script src="<?php echo base_url('assets/home/lib/easing/easing.min.js')?>"></script>
  <script src="<?php echo base_url('assets/home/lib/nivo-slider/js/jquery.nivo.slider.js')?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/home/lib/appear/jquery.appear.js')?>"></script>
  <script src="<?php echo base_url('assets/home/lib/isotope/isotope.pkgd.min.js')?>"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url('assets/home/contactform/contactform.js')?>"></script>

  <script src="<?php echo base_url('assets/home/js/main.js')?>"></script>
</body>

</html>
