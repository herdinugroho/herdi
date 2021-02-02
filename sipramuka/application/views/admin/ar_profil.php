          <!-- general form elements -->
              <!-- general form elements -->
            <div class="card card-primary">
              <div >
                <h3 ><b>Profil</b></h3>
                <ol class="breadcrumb">
                 <li class="breadcrumb-item active">Home</li>
                  <li class="breadcrumb-item active">Profil</li>
                </ol>
              </div>
            </div>


              <section class="content">
                <button class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Marketing</button>
                <table class="table">
                  <tr>
                    <th>NO</th>
                    <th>NAMA MARKETING</th>
                    <th>JABATAN</th>
                    <th>FOTO</th>
                    <th>WHATSAPP</th>
                    <th>NOHP</th>
                    <th>HAPUS</th>
                    <th>EDIT</th>
                  </tr>
                  
                  <?php 
                  $no = 1 ;
                  ?>
                  <?php foreach ($ar_profil as $ar):?>
                  <tr>
                    <td>
                      <?php echo $no++?>
                    </td>
                    <td>
                      <?php echo $ar->nama_marketing ?>  
                    </td>

                    <td>
                      <?php echo $ar->jabatan ?>
                    </td>
                    <td>
                      <img src="<?php echo base_url();?>assets/images/<?php echo $ar->foto;?>" width="90" height="110">
                    </td>
                    <td>
                      <?php echo $ar->wa ?>
                    </td>
                    <td>
                      <?php echo $ar->nohp ?>
                    </td>
                    
                    
                    <td onclick="javascript:return confirm ('Anda Yakin Akan Menghapus ?')"><?php echo anchor('ar_profil/hapus/'.$ar->id_profil,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash "></i></div>') ;?>
                    </td>
                    <td><?php echo anchor('ar_profil/edit/'.$ar->id_profil,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>');?>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </table>
              </section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php  echo form_open_multipart('ar_profil/tambah_aksi');?>          
          <div class="form-group">
            <label>Nama Marketing</label>
            <input type="text" name="nama_marketing" class="form-control">
          </div>

          <div class="form-group">
            <label>Jabatan</label>
            <input type="text" name="jabatan" class="form-control">
          </div>

          <div class="form-group">
            <label>Upload Foto</label>
            <input type="file" name="foto" class="form-control">
          </div>

           <div class="form-group">
            <label>Whatsapp</label>
            <input type="text" name="wa" class="form-control" >
          </div>

           <div class="form-group">
            <label>No Hp</label>
            <input type="text" name="nohp" class="form-control">
          </div>
          
          <button type="Reset" class="btn btn-danger">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
      
        <?php echo form_close();?>
      </div>
    </div>
  </div>
</div>


