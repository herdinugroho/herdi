
<div class="content-wrapper">
  <section class="content">
    <?php foreach ($tb_kontak as $ar){?>
  <?php echo form_open_multipart('ar_kontak/update');?>
      <div class="form-group">
        <label>No Kantor</label>
        <input type="hidden" name="id_kontak" class="form-control" value="<?php echo $ar->id_kontak ?>">
        <input type="text" name="no_kantor" class="form-control" value="<?php echo $ar->no_kantor ?>">
      </div>

      <div class="form-group">
         <label>Email Kantor</label>
         <input type="text" name="email_kantor" class="form-control" value="<?php echo $ar->email_kantor ?>">
      </div>

      <div class="form-group">
        <label>Website</label>
        <input type="text" name="website" class="form-control" value="<?php echo $ar->website ?>">
      </div>

       <div class="form-group">
         <label>Alamat Kantor</label>
         <input type="text" name="alamat_kantor" class="form-control" value="<?php echo $ar->alamat_kantor ?>">
      </div>

       <div class="form-group">
         <label>maps</label>
         <input type="text" name="maps" class="form-control" value="<?php echo $ar->maps ?>">
      </div>

      <button type="reset" class="btn btn-danger">Reset</button>
      <button type="submit" class="btn btn-primary">Simpan </button>
    <?php echo form_close();?>
  <?php } ?>
  </section>
</div>
</div>