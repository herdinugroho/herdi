
<div class="content-wrapper">
  <section class="content">
    <?php foreach ($tb_login as $ar){?>
  <?php echo form_open_multipart('login/update');?>
      <div class="form-group">
        <label>Username</label>
        <input type="hidden" name="id_user" class="form-control" value="<?php echo $ar->id_user ?>">
        <input type="text" name="username" class="form-control" value="<?php echo $ar->username ?>">
      </div>

      <div class="form-group">
         <label>Password</label>
         <input type="text" name="password" class="form-control" value="<?php echo $ar->password ?>">
      </div>

      <button type="reset" class="btn btn-danger">Reset</button>
      <button type="submit" class="btn btn-primary">Simpan </button>
    <?php echo form_close();?>
  <?php } ?>
  </section>
</div>