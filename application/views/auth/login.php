

<div class="navbar">

  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <i class="fa fa-cogs"></i>
      </button>

      <a class="navbar-brand navbar-brand-image" href="index.html">
        <img src="<?= base_url(); ?>assets/img/logo.png" alt="Site Logo">
      </a>

    </div> <!-- /.navbar-header -->

    <div class="navbar-collapse collapse">

      



       
        
       

    </div> <!--/.navbar-collapse -->

  </div> <!-- /.container -->

</div> <!-- /.navbar -->

<hr class="account-header-divider">

<div class="account-wrapper">

  <div class="account-logo">
    <img src="<?= base_url(); ?>assets/img/logo-login.png" alt="Target Admin">
  </div>

    <div class="account-body">

      <h3 class="account-body-title">Login E- ABSEN</h3>

      <h5 class="account-body-subtitle">silahkan masukan akun anda</h5>

      <?= $this->session->flashdata('message'); ?>

      <form class="form account-form" method="POST" action="<?= base_url('auth'); ?>">

        <div class="form-group">
          <label for="login-username" class="placeholder-hidden">Email</label>
          <input type="text" class="form-control" name="email" id="email" placeholder="Username" value="<?= set_value('email'); ?>" tabindex="1">
          <?= form_error('email', '<small class="text-danger">', '</small>'); ?>

        </div> <!-- /.form-group -->

        <div class="form-group">
          <label for="login-password" class="placeholder-hidden">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" tabindex="2">
          <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
        </div> <!-- /.form-group -->

        

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-lg" tabindex="4">
            Signin &nbsp; <i class="fa fa-play-circle"></i>
          </button>
        </div> <!-- /.form-group -->

      </form>


    </div> <!-- /.account-body -->


  </div> <!-- /.account-wrapper -->



        

  
