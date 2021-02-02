          <!-- general form elements -->
              <!-- general form elements -->
            <div class="card card-primary">
              <div >
                <h3 ><b>News</b></h3>
                <ol class="breadcrumb">
                 <li class="breadcrumb-item active">Home</li>
                  <li class="breadcrumb-item active">News</li>
                </ol>
              </div>
            </div>


              <section class="content">
                <button class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data</button>
                <table class="table">
                  <tr>
                    <th>NO</th>
                    <th>JUDUL</th>
                    <th>SINGKAT</th>
                    <th>TANGGAL</th>
                    <th>FOTO</th>
                    <th>HAPUS</th>
                    <th>EDIT</th>
                  </tr>
                  
                  <?php 
                  $no = 1 ;
                  ?>
                  <?php foreach ($ar_news as $ar):?>
                  <tr>
                    <td>
                      <?php echo $no++?>
                    </td>
                    <td>
                      <?php echo $ar->judul ?>  
                    </td>

                    <td>
                      <?php echo $ar->singkat ?>
                    </td>

                    <td>
                      <?php echo $ar->tanggal?>
                    </td>

                    <td>
                    <img src="<?php echo base_url();?>assets/images/<?php echo $ar->foto;?>" width="90" height="110">
                    </td>         
                    
                    
                    <td onclick="javascript:return confirm ('Anda Yakin Akan Menghapus ?')"><?php echo anchor('ar_news/hapus/'.$ar->id_news,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash "></i></div>') ;?>
                    </td>
                    <td><?php echo anchor('ar_news/edit/'.$ar->id_news,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>');?>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </table>
              </section>


<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php  echo form_open_multipart('ar_news/tambah_aksi');?>          
          <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control">
          </div>

          <div class="form-group">
            <label>Singkat</label>
            <input type="text" name="singkat" class="form-control">
          </div>

          <div class="form-group">
            <label>Paragraph</label>
            <textarea type="text" name="detail" class="form-control" cols="30" rows="10"></textarea>
          </div>

           <div class="form-group">
            <label>Paragraph</label>
            <textarea type="text" name="detail1" class="form-control" cols="30" rows="10" ></textarea>
          </div>

          <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control">
          </div>

           <div class="form-group">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control">
          </div>
          
          <button type="Reset" class="btn btn-danger">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
      
        <?php echo form_close();?>
      </div>
    </div>
  </div>
</div>
</div>

