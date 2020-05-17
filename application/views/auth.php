<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>E-Tiket</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url()?>assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body class="bg-default">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="dashboard.html">
        <img src="<?php echo base_url()?>assets/img/brand/white.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="dashboard.html">
                <img src="<?php echo base_url()?>assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <hr class="d-lg-none" />
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
							<div class="text-muted text-center mt-2 mb-3">LOGIN</div>
              </div>
              <form role="form" action="<?php echo base_url().'index.php/auth'; ?>" method="post" accept-charset="utf-8" >
										<div class="form-group mb-3">
											<div class="input-group input-group-alternative">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="ni ni-email-83"></i></span>
												</div>
												<input class="form-control" name="user_username" placeholder="Username" type="text" required>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group input-group-alternative">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
												</div>
												<input class="form-control" name="user_password" placeholder="Password" type="password" required>
											</div>
										</div>
										<div class="text-center">
											<button type="submit" class="btn btn-primary my-4">Login</button>
										</div>
							</form>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
          </div>
        </div>
        
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo base_url()?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
	<script src="<?php echo base_url()?>assets/js/argon.js?v=1.2.0"></script>
	<!--  Notifications Plugin    -->
<script src="<?php echo base_url().'assets/js/bootstrap-notify.js'?>"></script>
<?php

$message = $this->session->flashdata('message');
if($message == "usernamesalah"){
  ?>
  <script type="text/javascript">
  $(document).ready(function(){
    $.notify({

    },{

      timer: 200,
      template: '<div class="alert alert-warning alert-dismissible fade show" role="alert">'+
      '<span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>'+
      '<span class="alert-inner--text"><strong>Peringatan!</strong> Username yang anda masukkan Salah!</span>'+
      '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
      '<span aria-hidden="true">&times;</span>'+
      '</button>'+
      '</div>'


    });

  });
  </script>
  <?php
}elseif($message == "passwordsalah"){
  ?>
  <script type="text/javascript">
  $(document).ready(function(){
    $.notify({

    },{
      type: 'danger',
      timer: 500,
      template: '<div class="alert alert-warning alert-dismissible fade show" role="alert">'+
      '<span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>'+
      '<span class="alert-inner--text"><strong>Peringatan!</strong> Password yang anda masukkan Salah!</span>'+
      '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
      '<span aria-hidden="true">&times;</span>'+
      '</button>'+
      '</div>'

    });

  });
</script>
<?php
}
else{
  ?>
  <script type="text/javascript">
  $(document).ready(function(){
    $.notify({

    },{
      type: 'info',
      timer: 100,
      template: '<div class="alert alert-success alert-dismissible fade show" role="alert">'+
      '<span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>'+
      '<span class="alert-inner--text"><strong>Info!</strong> Anda telah logout, silahkan login kembali !</span>'+
      '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
      '<span aria-hidden="true">&times;</span>'+
      '</button>'+
      '</div>'
    });

  });
</script>
<?php
};
?>
</body>

</html>
