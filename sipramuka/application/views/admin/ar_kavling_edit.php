
<div class="content-wrapper">
  <section class="content">
    <?php foreach ($tb_kavling as $ar){?>
  <?php echo form_open_multipart('ar_kavling/update');?>
      <div class="form-group">
        <label>Nama Rumah</label>
        <input type="hidden" name="id_kavling" class="form-control" value="<?php echo $ar->id_kavling ?>">
        <input type="text" name="namarumah" class="form-control" value="<?php echo $ar->namarumah ?>">
      </div>

       <div class="form-group" >
          <label>Desc</label>
            <textarea type="text" name="desc" class="form-control" value="<?php echo $ar->desc ?>">
              Harga Jual  : Rp. 
              All In           : Rp.
              Type            :
              Alamat        :
            </textarea>
      </div>

      <div class="form-group">
        <label>Detail</label>
        <textarea  name="detail"  class="form-control" value="<?php echo $ar->detail ?>">
        </textarea>
      </div>
      <div class="form-group">
        <label>Harga</label>
        <textarea type="text" name="harga" class="form-control" value="<?php echo $ar->harga ?>"></textarea>
      </div>

       <div class="form-group">
            <label>Alamat</label>
            <textarea type="text" name="alamat" class="form-control" value="<?php echo $ar->alamat ?>"></textarea>
      </div>

      <div class="form-group">
         <label>Peta</label>
         <input type="text" name="peta" class="form-control" value="<?php echo $ar->peta ?>">
      </div>

      <div class="form-group">
        <label>foto</label>
        <input type="file" name="foto" class="form-control" value="<?php echo $ar->foto ?>">
        <input type="file" name="foto1" class="form-control" value="<?php echo $ar->foto1 ?>">
        <input type="file" name="foto2" class="form-control" value="<?php echo $ar->foto2 ?>">
        <input type="file" name="foto3" class="form-control" value="<?php echo $ar->foto3 ?>">
        <input type="file" name="foto4" class="form-control" value="<?php echo $ar->foto4 ?>">
        <input type="file" name="foto5" class="form-control" value="<?php echo $ar->foto5 ?>">
      </div>
      <button type="reset" class="btn btn-danger">Reset</button>
      <button type="submit" class="btn btn-primary">Simpan </button>
    <?php echo form_close();?>
  <?php } ?>
  </section>
</div>