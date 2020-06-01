<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title><?php echo $title ?></title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url()?>assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/argon.css?v=1.2.0" type="text/css">
  <!-- Custom CSS -->
  <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.min.css'?>" rel="stylesheet">

  <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/dist/css/bootstrap-select.css'?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap-datetimepicker.min.css'?>">



</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <!-- <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="<?php echo base_url()?>assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div> -->
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
				<?php if ($this->session->userdata('user_level')=='1') { ?>
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
			</li>
			</ul>
			<!-- Divider -->
			<hr class="my-3">
			<!-- Heading -->
			<h6 class="navbar-heading p-0 text-muted">
				<span class="docs-normal">E-Tiket</span>
			</h6>
			<ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'penumpang';?>">
                <i class="ni ni-curved-next text-orange"></i>
                <span class="nav-link-text">Penumpang</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'p_kendaraan';?>">
                <i class="ni ni-bus-front-12 text-primary"></i>
                <span class="nav-link-text">Kendaraan</span>
              </a>
            </li>
		  </ul>
		  <!-- Divider -->
			<hr class="my-3">
			<!-- Heading -->
			<h6 class="navbar-heading p-0 text-muted">
				<span class="docs-normal">Master Data</span>
			</h6>
			<ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'pengguna';?>">
                <i class="ni ni-circle-08 text-orange"></i>
                <span class="nav-link-text">Pengguna</span>
              </a>
            </li>
						<li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'tiket';?>">
                <i class="ni ni-tag text-primary"></i>
                <span class="nav-link-text">Stok Tiket</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
					<!-- Heading -->
			<h6 class="navbar-heading p-0 text-muted">
				<span class="docs-normal">Kategori</span>
			</h6>
			<ul class="navbar-nav">
						<li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'kendaraan';?>">
                <i class="ni ni-bus-front-12 text-primary"></i>
                <span class="nav-link-text">Gol.Kendaraan</span>
              </a>
						</li>
						<li class="nav-item">
										<a class="nav-link" href="<?php echo base_url().'lintasan';?>">
											<i class="ni ni-compass-04 text-primary"></i>
											<span class="nav-link-text">Lintasan</span>
										</a>
						</li>
						<li class="nav-item">
										<a class="nav-link" href="<?php echo base_url().'kmp';?>">
											<i class="ni ni-delivery-fast text-primary"></i>
											<span class="nav-link-text">KMP</span>
										</a>
						</li>
		  </ul>
		  <!-- Divider -->
			<hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Laporan</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
		  	<li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'laporan_penumpang';?>">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Penumpang</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'laporan_kendaraan';?>">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Kendaraan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'surat';?>">
                <i class="ni ni-collection"></i>
                <span class="nav-link-text">Surat</span>
              </a>
            </li>
          </ul>
					<?php } elseif ($this->session->userdata('user_level')=='2') { ?>
					<!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
			</li>
			</ul>
			<!-- Divider -->
			<hr class="my-3">
			<!-- Heading -->
			<h6 class="navbar-heading p-0 text-muted">
				<span class="docs-normal">E-Tiket</span>
			</h6>
			<ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'penumpang';?>">
                <i class="ni ni-curved-next text-orange"></i>
                <span class="nav-link-text">Penumpang</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'p_kendaraan';?>">
                <i class="ni ni-bus-front-12 text-primary"></i>
                <span class="nav-link-text">Kendaraan</span>
              </a>
            </li>
		  </ul>
		  <!-- Divider -->
			<hr class="my-3">
			<!-- Heading -->
			<h6 class="navbar-heading p-0 text-muted">
				<span class="docs-normal">Master Data</span>
			</h6>
			<ul class="navbar-nav">
            
						<li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'tiket';?>">
                <i class="ni ni-tag text-primary"></i>
                <span class="nav-link-text">Stok Tiket</span>
              </a>
            </li>
          </ul>
         
		  <!-- Divider -->
			<hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Laporan</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
		  	<li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'laporan_penumpang';?>">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Penumpang</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'laporan_kendaraan';?>">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Kendaraan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'surat';?>">
                <i class="ni ni-collection"></i>
                <span class="nav-link-text">Surat</span>
              </a>
            </li>
          </ul>
					<?php } ?>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?php echo base_url()?>assets/img/theme/team-1.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $this->session->userdata('user_nama');?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?php echo base_url().'logout';?>" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
