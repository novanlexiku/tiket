
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/beranda';?>">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
					<?php
                    foreach ($data->result_array() as $a) {
                        $id=$a['kmp_id'];
						$nm=$a['kmp_nama'];
						$linid=$a['kmp_lintasan_id'];
						$linam=$a['lintasan_nama'];
						$tiketekoaa=$a['kmp_tiketekoaa'];
						$tiketekodw=$a['kmp_tiketekodw'];
						$tiketbisaa=$a['kmp_tiketbisaa'];
						$tiketbisdw=$a['kmp_tiketbisdw'];
						$tiketvipaa=$a['kmp_tiketvipaa'];
						$tiketvipdw=$a['kmp_tiketvipdw'];
						$tiketgol1=$a['kmp_tiketgol1'];
						$tiketgol2=$a['kmp_tiketgol2'];
						$tiketgol3=$a['kmp_tiketgol3'];
						$tiketgol4=$a['kmp_tiketgol4'];
						$tiketgol5=$a['kmp_tiketgol5'];
						$tiketgol6=$a['kmp_tiketgol6'];
						$tiketgol7=$a['kmp_tiketgol7'];
						$tiketgol8=$a['kmp_tiketgol8'];
						$tiketgol9=$a['kmp_tiketgol9'];
                    ?>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0"><?php echo $nm;?></h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $linam;?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap"><button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#exampleModal">
											Detail
										</button></span>
                  </p>
                </div>
              </div>
            </div>
			<?php
        }
        ?>
          </div>
					<!-- Modal -->
					<?php
                    foreach ($data->result_array() as $a) {
                        $id=$a['kmp_id'];
						$nm=$a['kmp_nama'];
						$linid=$a['kmp_lintasan_id'];
						$linam=$a['lintasan_nama'];
						$tiketekoaa=$a['kmp_tiketekoaa'];
						$tiketekodw=$a['kmp_tiketekodw'];
						$tiketbisaa=$a['kmp_tiketbisaa'];
						$tiketbisdw=$a['kmp_tiketbisdw'];
						$tiketvipaa=$a['kmp_tiketvipaa'];
						$tiketvipdw=$a['kmp_tiketvipdw'];
						$tiketgol1=$a['kmp_tiketgol1'];
						$tiketgol2=$a['kmp_tiketgol2'];
						$tiketgol3=$a['kmp_tiketgol3'];
						$tiketgol4=$a['kmp_tiketgol4'];
						$tiketgol5=$a['kmp_tiketgol5'];
						$tiketgol6=$a['kmp_tiketgol6'];
						$tiketgol7=$a['kmp_tiketgol7'];
						$tiketgol8=$a['kmp_tiketgol8'];
						$tiketgol9=$a['kmp_tiketgol9'];
                    ?>
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel"><?php echo $nm;?>: <?php echo $linam;?></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-right"></i> <?php echo $tiketekoaa;?></span>
                    <span class="text-nowrap">Tiket Ekonomi Anak</span>
                  </p>
									<p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-right"></i> <?php echo $tiketekodw;?></span>
                    <span class="text-nowrap">Tiket Ekonomi Dewasa</span>
                  </p>
									<p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-right"></i> <?php echo $tiketbisaa;?></span>
                    <span class="text-nowrap">Tiket Bisnis Anak</span>
                  </p>
									<p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-right"></i> <?php echo $tiketbisdw;?></span>
                    <span class="text-nowrap">Tiket Bisnis Dewasa</span>
                  </p>
									
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<?php
        }
        ?>
					<!-- end modal -->
        </div>
      </div>
    </div>
   
  </div>
  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo base_url()?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?php echo base_url()?>assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url()?>assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
