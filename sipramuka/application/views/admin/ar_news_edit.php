
<div class="content-wrapper">
  <section class="content">
    <?php foreach ($tb_news as $ar){?>
  <?php echo form_open_multipart('ar_news/update');?>
      <div class="form-group">
        <label>Judul</label>
        <input type="hidden" name="id_news" class="form-control" value="<?php echo $ar->id_news ?>">
        <input type="text" name="judul" class="form-control" value="<?php echo $ar->judul ?>">
      </div>

      <div class="form-group">
         <label>Singkat</label>
         <input type="text" name="singkat" class="form-control" value="<?php echo $ar->singkat ?>">
      </div>

      <div class="form-group">
        <label>Paragraph</label>
        <textarea type="text" name="detail" class="form-control" cols="30" rows="10"value=" <?php echo $ar->detail ?>"></textarea>
      </div>

       <div class="form-group">
         <label>Paragraph</label>
         <textarea type="text" name="detail1" class="form-control" cols="30" rows="10" value="<?php echo $ar->detail1 ?>"></textarea>
      </div>

      <div class="form-group">
         <label>Tanggal</label>
         <input type="date" name="tanggal" class="form-control" value="<?php echo $ar->tanggal ?>">
      </div>

       <div class="form-group">
         <label>foto</label>
           <input type="file" name="foto" class="form-control" value="<?php echo $ar->foto ?>">
      </div>

      <button type="reset" class="btn btn-danger">Reset</button>
      <button type="submit" class="btn btn-primary">Simpan </button>
    <?php echo form_close();?>
  <?php } ?>
  </section>
</div>