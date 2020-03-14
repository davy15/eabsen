<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from jumpstartthemespreview.com/target-admin/ui-table-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Feb 2020 12:50:54 GMT -->
<head>
  <title>E - ABSEN</title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="../../fonts.googleapis.com/csscd84.css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="../../fonts.googleapis.com/cssc601.css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/js/plugins/icheck/skins/minimal/blue.css">

  <!-- App CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/target-admin.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/custom.css">


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body>

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

      

     

      <ul class="nav navbar-nav navbar-right">   
          
        <li>
          <a href="javascript:;"><?= $user['name']; ?></a>
        </li>    

        <li class="dropdown navbar-profile">
          <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
            <img src="<?= base_url('assets/img/avatars/') . $user['image']; ?>" class="navbar-profile-avatar" alt="">
            <span class="navbar-profile-label">rod@rod.me &nbsp;</span>
            <i class="fa fa-caret-down"></i>
          </a>

          <ul class="dropdown-menu" role="menu">

            <li>
              <a href="page-profile.html">
                <i class="fa fa-user"></i> 
                &nbsp;&nbsp;My Profile
              </a>
            </li>

            <li class="divider"></li>

            <li>
              <a href="<?= base_url('auth/logout') ?>">
                <i class="fa fa-sign-out"></i> 
                &nbsp;&nbsp;Logout
              </a>
            </li>

          </ul>

        </li>

      </ul>

       



       

    </div> <!--/.navbar-collapse -->

  </div> <!-- /.container -->

</div> <!-- /.navbar -->