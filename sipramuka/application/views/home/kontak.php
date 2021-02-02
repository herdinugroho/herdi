
  <!-- Start Wellcome Area -->
  <div class="wellcome-area">
    <div class="well-bg">
      <div class="test-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="wellcome-text">
              <div class="well-text text-center">
                <h2>kontak Perusahaan</h2>
                <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0s">
                <p class="title3">
                  "Jika ada pertanyaan bisa langsung hubungi kontak dibawah" 
                </p>
                </div>
                 <a class="ready-btn page-scroll" href="<?php echo base_url().'home'; ?>">Home</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Wellcome Area -->

  <!-- Start Suscrive Area -->
  <div class="suscribe-area">
    <div class="container">
      <div class="row">
        <div>
         <div class="suscribe-text text-center">
            <h3><marquee>Kami Siap Membantu!!</marquee></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Suscrive Area -->

  <?php 
    $no = 1 ;
   ?>
   <?php foreach ($ar_kontak as $ar):?>                   
    <td>
      <?php echo $no++?>
    </td>


<!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                    <span>Handphone</span><br>
                  <?php echo $ar->no_kantor ?>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  <?php echo $ar->email_kantor ?><br>
                  <span><?php echo $ar->website ?></span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Location: <?php echo $ar->alamat_kantor ?><br>
                  <span>Indonesia</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map -->
          <div align="center">
            <!-- Start Map -->
           <?php echo $ar->maps ?>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->



  
<?php endforeach; ?>
