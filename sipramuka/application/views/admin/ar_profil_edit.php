
<div class="content-wrapper">
  <section class="content">
    <?php foreach ($tb_profil as $ar){?>
  <?php echo form_open_multipart('ar_profil/update');?>
      <div class="form-group">
        <label>Nama Marketing</label>
        <input type="hidden" name="id_profil" class="form-control" value="<?php echo $ar->id_profil ?>">
        <input type="text" name="nama_marketing" class="form-control" value="<?php echo $ar->nama_marketing ?>">
      </div>

      <div class="form-group">
         <label>Jabatan</label>
         <input type="text" name="jabatan" class="form-control" value="<?php echo $ar->jabatan ?>">
      </div>

      <div class="form-group">
        <label>foto</label>
        <input type="file" name="foto" class="form-control" value="<?php echo $ar->foto ?>">
      </div>

       <div class="form-group">
         <label>Whatsapp</label>
         <input type="text" name="wa" class="form-control" value="<?php echo $ar->wa ?>">
      </div>

       <div class="form-group">
         <label>No Hp</label>
         <input type="text" name="nohp" class="form-control" value="<?php echo $ar->nohp ?>">
      </div>

      <button type="reset" class="btn btn-danger">Reset</button>
      <button type="submit" class="btn btn-primary">Simpan </button>
    <?php echo form_close();?>
  <?php } ?>
  </section>
</div>