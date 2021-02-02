          <!-- general form elements -->
              <!-- general form elements -->
            <div class="card card-primary">
              <div >
                <h3 ><b>Akun</b></h3>
                <ol class="breadcrumb">
                 <li class="breadcrumb-item active">Home</li>
                  <li class="breadcrumb-item active">Setting</li>
                  <li class="breadcrumb-item active">Akun</li>
                </ol>
              </div>
            </div>


              <section class="content">
                <button class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Akun</button>
                <table class="table">
                  <tr>
                    <th>NO</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>HAPUS</th>
                    <th>EDIT</th>
                  </tr>
                  
                  <?php 
                  $no = 1 ;
                  ?>
                  <?php foreach ($v_tambah_akun as $ar):?>
                  <tr>
                    <td>
                      <?php echo $no++?>
                    </td>
                    <td>
                      <?php echo $ar->username ?>  
                    </td>

                    <td>
                      <?php echo $ar->password ?>
                    </td>
                    
                    <td onclick="javascript:return confirm ('Anda Yakin Akan Menghapus ?')"><?php echo anchor('login/hapus/'.$ar->id_user,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash "></i></div>') ;?>
                    </td>
                    <td><?php echo anchor('login/edit/'.$ar->id_user,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>');?>
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
        <?php  echo form_open_multipart('login/tambah_aksi');?>          
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control">
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="form-control">
          </div>
          
          <button type="Reset" class="btn btn-danger">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
      
        <?php echo form_close();?>
      </div>
    </div>
  </div>
</div>
</div>

