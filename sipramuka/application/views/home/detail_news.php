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
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="0s">
                <h2 class="title3">"Berita informasi mengenai seputar perkembangan mengenai perumahan"</h2>
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
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- single-blog start -->
              <article class="blog-post-wrapper">
                <div class="post-thumbnail">
                  <img src="<?php echo base_url();?>assets/images/<?php echo $detail_news->foto;?>" alt="" width="750"/>
                </div>
                <div class="post-information">
                  <h2><?php echo $detail_news->judul ?></h2>
                  <div class="entry-meta">
                    <span class="author-meta"><i class="fa fa-user"></i> <a href="#">admin</a></span>
                    <span><i class="fa fa-clock-o"></i> <?php echo $detail_news->tanggal ?></span>
                    <span class="tag-meta">
                        <i class="fa fa-folder-o"></i>
                        <a href="#">painting</a>,
                        <a href="#">work</a>
                      </span>
                    <span>
                        <i class="fa fa-tags"></i>
                        <a href="#">tools</a>,
                        <a href="#"> Humer</a>,
                        <a href="#">House</a>
                      </span>
                    <span><i class="fa fa-comments-o"></i> <a href="#">6 comments</a></span>
                  </div>
                  <div class="entry-content">
                    <p style="white-space: pre-line;"><?php echo $detail_news->detail ?></p>
                    <blockquote>
                      <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum
                        tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                    </blockquote>
                    <p style="white-space: pre-line;"><?php echo $detail_news->detail1 ?></p>
                  </div>
                </div>
              </article>



              <div class="clear"></div>
              <div class="single-post-comments">
                <div class="comment-respond">
                  <h3 class="comment-reply-title">Tinggalkan Komentar </h3>
                  <span class="email-notes">Your email address will not be published. Required fields are marked *</span>

                  <form method="POST" action="<?php echo site_url('ar_news/kirimKomen') ?>">

                    <div class="row">
                      <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                        <p>Name *</p>
                        <input type="text" placeholder="Nama" name="nama" />
                      </div>
                      <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                        <p>Email *</p>
                        <input type="email" placeholder="Email" name="email" />
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                        <p>Isi Komentar</p>
                        <textarea id="message-box" cols="30" rows="10" name="isi_komentar"></textarea>
                        <input type="submit" value="Kirim Komentar" />
                      </div>
                    </div>
                  </form>
                </div><br>
                <h3 class="comment-reply-title">Komentar </h3>
                <?php
                $query = $this->db->query("SELECT * FROM tb_komentar WHERE komen_status='0'");
                foreach ($query->result() as $utama):
                  ?>


                  <div class="comments-area">
                    <div class="comments-heading">
                   
                    <div class="comments-list">
                      <ul>
                        <li>
                          <div class="comments-details">
                            <div class="comments-list-img">
                              <img src="<?php echo base_url('assets/home/img/blog/b02.jpg')?>" alt="post-author">
                            </div>
                            <div class="comments-content-wrap">
                              <span>
                                <b><?php echo $utama->komen_nama?></b>
                                <button data-toggle="modal" data-target="#exampleModal" onclick="document.getElementById('<?php echo $utama->id_komen?>')">Balas Komentar</button>
                              </span>
                              <p><br><?php echo $utama->komen_isi?></p>
                            </div>
                          </div>
                        </li>

                        <?php
                        $id_komen=$utama->id_komen;
                        $query = $this->db->query("SELECT * FROM tb_komentar WHERE komen_status='$id_komen'");
                        foreach ($query->result() as $balasan):
                          ?>

                          <li class="threaded-comments">
                            <div class="comments-details">
                              <div class="comments-list-img">
                                <img src="<?php echo base_url('assets/home/img/blog/b02.jpg')?>" alt="">
                              </div>
                              <div class="comments-content-wrap">
                                <span>
                                  <b><?php echo $balasan->komen_nama?></b>
                                  Post author

                                </span>
                                <p><?php echo $balasan->komen_isi?></p>
                              </div>
                            </div>
                          </li>
                        <?php endforeach;?>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">Balas Komentar</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <span onclick="document.getElementById('<?php echo $utama->id_komen?>')"></span>
                              <div id="<?php echo $utama->id_komen?>" >
                                <form  method="POST" action="<?php echo site_url('ar_news/balasKomen') ?>">
                                  <div class="modal-body">
                                    <input type="hidden" name="id" value="<?php echo $utama->id_komen?>">        
                                    <div class="form-group">
                                      <label>Nama</label>
                                      <input type="text" name="nama" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                      <label>Isi Komentar</label>
                                      <textarea type="text" name="isi_komentar" class="form-control"></textarea>
                                    </div>

                                    <button type="Reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-primary" onclick="document.getElementById('<?php echo $utama->id_komen?>')">Simpan</button>

                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>

                      </ul>
                    </div>
                  </div>
                </div>
                <!-- single-blog end -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach;?>
  <!-- End Blog Area -->
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>

</div>

<!-- End Blog Area -->
