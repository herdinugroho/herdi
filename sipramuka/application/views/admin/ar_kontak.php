          <!-- general form elements -->
              <!-- general form elements -->
            <div class="card card-primary">
              <div >
                <h3 ><b>Kontak Perusahaan</b></h3>
                <ol class="breadcrumb">
                 <li class="breadcrumb-item active">Home</li>
                  <li class="breadcrumb-item active">Kontak</li>
                </ol>
              </div>
            </div>


              <section class="content">
                <button class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data</button>
                <table class="table">
                  <tr>
                    <th>NO</th>
                    <th>NO KANTOR</th>
                    <th>EMAIL KANTOR</th>
                    <th>WEBSITE</th>
                    <th>ALAMAT KANTOR</th>
                    <th>HAPUS</th>
                    <th>EDIT</th>
                  </tr>
                  
                  <?php 
                  $no = 1 ;
                  ?>
                  <?php foreach ($ar_kontak as $ar):?>
                  <tr>
                    <td>
                      <?php echo $no++?>
                    </td>
                    <td>
                      <?php echo $ar->no_kantor ?>  
                    </td>

                    <td>
                      <?php echo $ar->email_kantor ?>
                    </td>
                    <td>
                      <?php echo $ar->website ?>
                    </td>
                    <td>
                      <?php echo $ar->alamat_kantor ?>
                    </td>
                   
                    
                    
                    <td onclick="javascript:return confirm ('Anda Yakin Akan Menghapus ?')"><?php echo anchor('ar_kontak/hapus/'.$ar->id_kontak,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash "></i></div>') ;?>
                    </td>
                    <td><?php echo anchor('ar_kontak/edit/'.$ar->id_kontak,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>');?>
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
        <?php  echo form_open_multipart('ar_kontak/tambah_aksi');?>          
          <div class="form-group">
            <label>NO Kantor</label>
            <input type="text" name="no_kantor" class="form-control">
          </div>

          <div class="form-group">
            <label>Email Kantor</label>
            <input type="text" name="email_kantor" class="form-control">
          </div>

          <div class="form-group">
            <label>Website</label>
            <input type="text" name="website" class="form-control">
          </div>

           <div class="form-group">
            <label>Alamat Kantor</label>
            <input type="text" name="alamat_kantor" class="form-control">
          </div>

           <div class="form-group">
            <label>Maps</label>
            <input type="text" name="maps" class="form-control">
          </div>
          
          <button type="Reset" class="btn btn-danger">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
      
        <?php echo form_close();?>
      </div>
    </div>
  </div>
</div>
</div>

