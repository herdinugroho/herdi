
  <!-- Start Wellcome Area -->
  <div class="wellcome-area">
    <div class="well-bg">
      <div class="test-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="wellcome-text">
              <div class="well-text text-center">
                <h2>Kavling</h2>
                 <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0s">
                <p class="title3">
                  "Kavling adalah bagian tanah yang sudah dipetak-petak dengan ukuran tertentu yang akan dijadikan bangunan atau tempat tinggal" 
                </p>
                </div>
                  <?php echo form_open('home/searchkavling') ?>
                <div class="subs-feilds">
                  <div class="suscribe-input">
                    <input name="keyword" class="email form-control width-80" id="sus_email" placeholder="Cari Berdasarkan Kecamatan">
                    <button type="resubmit" id="sus_submit" class="add-btn width-20">Cari kavling</button>
                    <div id="msg_Submit" class="h3 text-center hidden"></div>
                  </div>
                </div>
                 <?php echo form_close()?>
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
   <?php foreach ($ar_kavling as $ar):?>                   
  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                  <img src="<?php echo base_url();?>assets/images/<?php echo $ar->foto;?>"alt="" width="400" >
                </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head"><?php echo $ar->namarumah ?></h4>
              </a>
              <p style="white-space: pre-line;">
                <?php echo $ar->desc ?>
              </p>
              <div>
                <?php echo anchor('ar_kavling/detail_kavling/'.$ar->id_kavling,'<span class="btn btn-primary" >Lihat Selengkapnya</span>'
                )?>
              </div>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

 <?php endforeach; ?>







