
<!-- Start Wellcome Area -->
<div class="wellcome-area">
  <div class="well-bg">
    <div class="test-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="wellcome-text">
            <div class="well-text text-center">
              <h2>Profil Perusahaan</h2>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0s">
                <p class="title3">
                  "Profil Singkat mengenai Hanggara Putra Properti" 
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

<!-- Start About area -->
<div id="about" class="about-area area-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>About HP Pro</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- single-well start-->
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="well-left">
          <div class="single-well">
            <a href="#">
              <img src="<?php echo base_url().'assets/home/img/asu.jpg'?>" alt="">
            </a>
          </div>
        </div>
      </div>
      <!-- single-well end-->
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="well-middle">
          <div class="single-well">
            <a href="#">
              <h4 class="sec-head"> CV.HANGGARA PUTRA PROPERTY</h4>
            </a>
            <p>
              CV.HANGGARA PUTRA PROPERTY Kami adalah agent yang bergerak di bidang property yang ada 
              di Kota Karawang
            </p>
            <ul>
              <li>
                <i class="fa fa-check"></i> Rumah Subsidi
              </li>
              <li>
                <i class="fa fa-check"></i> Rumah Cluster
              </li>
              <li>
                <i class="fa fa-check"></i> Ruko
              </li>
              <li>
                <i class="fa fa-check"></i> Rukost
              </li>
              <li>
                <i class="fa fa-check"></i> Kavling
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End col-->
    </div>
  </div>
</div>
<!-- End About area -->


<!-- Start team Area -->
<div id="team" class="our-team-area area-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>Staff & Team Marketing</h2>
        </div>
      </div>
    </div>
    <?php foreach ($ar_profil as $ar):?>                   
      <div class="row">
        <div class="team-top">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a>
                  <img align="center" src="<?php echo base_url();?>assets/images/<?php echo $ar->foto;?>" alt="" width="255">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="<?php echo $ar->wa ?> " target="blank"> <i class="fa fa-whatsapp" aria-hidden="true"></i><?php echo $ar->nohp ?></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4> <?php echo $ar->nama_marketing ?></h4>
                <p> <?php echo $ar->jabatan ?></p>
              </div>
            </div>
          </div>
          <!-- End column -->
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<!-- End Team Area -->

  
