  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">Berita Terbaru</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Lihat Berita Terupdate</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->

 

  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <!-- search option start -->
              <form action="#">
                <img src="<?php echo base_url().'assets/images/icons/hppro.png'?>" alt="" width="350">
              </form>
              <!-- search option end -->
            </div>
          


            <div class="single-blog-page">
              <div class="left-blog">
                <h4>Property Kami</h4>
                <ul>
                  <li>
                    <a href="<?php echo base_url().'home/r_cluster'; ?>"><i class="fa fa-home"></i> Rumah Cluster</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url().'home/r_subsidi'; ?>"><i class="fa fa-home"></i> Rumah Subsidi </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url().'home/r_ruko'; ?>"><i class="fa fa-university"></i> Ruko </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url().'home/r_rukost'; ?>"><i class="fa fa-bed"></i> Rukost </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url().'home/r_kavling'; ?>"><i class="fa fa-industry"></i> Kavling</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="single-blog-page">
              <div class="left-tags blog-tags">
                <div class="popular-tag left-side-tags left-blog">
                  <h4>Sosial Media Kami</h4>
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-youtube-play"></i> Youtube</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End left sidebar -->
      

        
  

        <!-- Start single blog -->
            <div class="col-md-8 col-sm-8 col-xs-12">
               <?php 
    $no = 1 ;
   ?>
   <?php foreach ($ar_news as $ar):?>  

              <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog-details.html" >
											<img src="<?php echo base_url();?>assets/images/<?php echo $ar->foto;?>" alt="Herdi">
										</a>
                </div>
                <div class="blog-meta">
                <span class="author-meta">
                  <i class="fa fa-user"></i> admin 
                </span> 
                  <span class="date-type">
											<i class="fa fa-calendar"></i><?php echo $ar->tanggal?>
										</span>
                </div>
                <div class="blog-text">
                  <h4>
											<a href="#"><?php echo $ar->judul ?></a>
										</h4>
                  <p>
                    <?php echo $ar->singkat ?>
                  </p>
                </div>
                <span>
										<?php echo anchor('ar_news/detail_news/'.$ar->id_news,'<span class="ready-btn" >Lihat Selengkapnya</span>'
                )?>
									</span>
              </div>
            </div>
            </div>
            <!-- End single blog -->
<?php endforeach; ?>





            <div class="blog-pagination">
              <ul class="pagination">
                <li><a href="#">&lt;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  <!-- End Blog Area -->

  <div class="clearfix"></div>
