<br>
<br>
<br>
   
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				
				<h2 class="display-3"><?php echo $detail_cluster->namarumah ?></h2>
				<hr class="my-4">

		  <!-- single-awesome-project start -->
        <div class="awesome-project-content">
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url();?>assets/images/<?php echo $detail_cluster->foto;?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo base_url();?>assets/images/<?php echo $detail_cluster->foto;?>">
                      <h4>Klik Gambar</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url();?>assets/images/<?php echo $detail_cluster->foto1;?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo base_url();?>assets/images/<?php echo $detail_cluster->foto1;?>">
                      <h4>Klik Gambar</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start 2-->
          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url();?>assets/images/<?php echo $detail_cluster->foto2;?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo base_url();?>assets/images/<?php echo $detail_cluster->foto2;?>">
                      <h4>Klik Gambar</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start3 -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url();?>assets/images/<?php echo $detail_cluster->foto3;?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo base_url();?>assets/images/<?php echo $detail_cluster->foto3;?>">
                      <h4>Klik Gambar</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start4 -->
          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url();?>assets/images/<?php echo $detail_cluster->foto4;?>" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo base_url();?>assets/images/<?php echo $detail_cluster->foto4;?>">
                      <h4>Klik Gambar</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start 5-->
          <div class="col-md-4 col-sm-4 col-xs-12 design photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url();?>assets/images/<?php echo $detail_cluster->foto5;?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo base_url();?>assets/images/<?php echo $detail_cluster->foto5;?>">
                      <h4>Klik Gambar</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
        </div>

				<div>
					<h4><i class="fa fa-tags" aria-hidden="true"></i> Detail Perumahan</h4>
					<p style="white-space: pre-line;">  <?php echo $detail_cluster->detail ?></p>
				<br>
					<h4><i class="fa fa-money" aria-hidden="true"></i> Rincian Harga</h4>
					<p style="white-space: pre-line;"> <?php echo $detail_cluster->harga ?></p>
				<br>
					<h4><i class="fa fa-location-arrow" aria-hidden="true"></i> Alamat</h4>
					<p><?php echo $detail_cluster->alamat ?></p>
					lihat pada 
					<a href="<?php echo $detail_cluster->peta ?> " target="blank"> <i class="fa fa-map-marker" aria-hidden="true"></i> google maps</a>
				<br>

				</div>


			</div>
		</div>
	</div>
</div>

