          <!-- general form elements -->
            <div class="card card-primary">
              <div >
                <h3 ><b>Rumah Cluster</b></h3>
                <ol class="breadcrumb">
                 <li class="breadcrumb-item active">Home</li>
                  <li class="breadcrumb-item active">Property</li>
                 <li class="breadcrumb-item active">Rumah Cluster</li>
                </ol>
              </div>
            </div>

              <section class="content">
                <button class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Cluster</button>
                
                <table class="table">
                  <tr>
                    <th>NO</th>
                    <th>NAMA RUMAH</th>
                    <th>DETAIL</th>
                    <th>HARGA</th>
                    <th>PETA</th>
                     <th>FOTO</th>  
                    <th>HAPUS</th>
                    <th>EDIT</th>
                  </tr>
                  
                  <?php 
                  $no = 1 ;
                  ?>
                  <?php foreach ($ar_cluster as $ar):?>
                  <tr>
                    <td>
                      <?php echo $no++?>
                    </td>
                    <td>
                      <?php echo $ar->namarumah ?>  
                    </td>

                    <td style="white-space: pre-line;">
                      <?php echo $ar->detail ?>
                    </td>
                    <td style="white-space: pre-line;">
                      <?php echo $ar->harga ?>
                    </td>
                    <td>
                      <?php echo $ar->peta ?>
                    </td>
                    <td>
                      <img src="<?php echo base_url();?>assets/images/<?php echo $ar->foto;?>" width="90" height="110">
                       <img src="<?php echo base_url();?>assets/images/<?php echo $ar->foto1;?>" width="90" height="110">
                        <img src="<?php echo base_url();?>assets/images/<?php echo $ar->foto2;?>" width="90" height="110">
                        <img src="<?php echo base_url();?>assets/images/<?php echo $ar->foto3;?>" width="90" height="110">
                        <img src="<?php echo base_url();?>assets/images/<?php echo $ar->foto4;?>" width="90" height="110">
                        <img src="<?php echo base_url();?>assets/images/<?php echo $ar->foto5;?>" width="90" height="110">
                    </td>
                    <td onclick="javascript:return confirm ('Anda Yakin Akan Menghapus ?')"><?php echo anchor('ar_cluster/hapus/'.$ar->id_cluster,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash "></i></div>') ;?>
                    </td>
                    <td><?php echo anchor('ar_cluster/edit/'.$ar->id_cluster,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>');?>
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
        <?php  echo form_open_multipart('ar_cluster/tambah_aksi');?>          
          <div class="form-group">
            <label>NamaRumah</label>
            <input type="text" name="namarumah" class="form-control">
          </div>

          <div class="form-group" >
            <label>Desc</label>
            <textarea type="text" name="desc" class="form-control" >
               Harga Jual  : Rp. 
              All In           : Rp.
              Type            :
              Alamat        :
            </textarea>
          </div>


          <div class="form-group" >
            <label>Detail</label>
            <textarea type="text" name="detail" class="form-control" ></textarea>
          </div>

          <div class="form-group">
            <label>Harga</label>
            <textarea type="text" name="harga" class="form-control"></textarea>
          </div>

           <div class="form-group">
            <label>Alamat</label>
            <textarea type="text" name="alamat" class="form-control"></textarea>
          </div>

          <div class="form-group">
            <label>Peta</label>
            <input type="text" name="peta" class="form-control">
          </div>

          <div class="form-group">
            <label>Upload Foto</label>
            <input type="file" name="foto" class="form-control">
            <input type="file" name="foto1" class="form-control">
            <input type="file" name="foto2" class="form-control">
            <input type="file" name="foto3" class="form-control">
            <input type="file" name="foto4" class="form-control">
            <input type="file" name="foto5" class="form-control">
          </div>
          
          <button type="Reset" class="btn btn-danger">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
      
        <?php echo form_close();?>
      </div>
    </div>
  </div>
</div>


