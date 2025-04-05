<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?= base_url() ?>" class="h1">Admin Library</a>
    </div>
    <div class="card-body">
      <?php 
      // notification
      $errors = session()->getFlashdata('errors');
      if (!empty($errors)) { ?>
        <div class="alert alert-danger" role="alert">
          <h4>Periksa Entry Form</h4>
          <ul>
            <?php foreach ($errors as $key => $value) {?>
              <li><?= esc($error) ?></li>
            <?php } ?>
          </ul>
        </div>
      <?php } ?>
      ?>
      <?php echo form_open('Login/CekLoginAdmin') ?>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <a class="btn btn-success" href="<?= base_url(); ?>"><i class="fas fa-arrow-left mx-1"></i>Back</a>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      <?php echo form_close('') ?>

    </div>
    <!-- /.card-body -->
  </div>
</div>