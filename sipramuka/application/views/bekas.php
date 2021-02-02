function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}








				
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="<?php echo base_url();?>assets/images/<?php echo $detail_subsidi->foto;?>" >

							<div class="carousel-caption">
							Depan Rumah      </div>
						</div>
						<div class="item">
							<img src="<?php echo base_url();?>assets/images/<?php echo $detail_subsidi->foto1;?>">

							<div class="carousel-caption">
							Dalam Rumah</div>
						</div>

						<div class="item">
							<img src="<?php echo base_url();?>assets/images/<?php echo $detail_subsidi->foto2;?>">

							<div class="carousel-caption">
							lainnya  </div>
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

				<br>