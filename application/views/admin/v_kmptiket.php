
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
                  <li class="breadcrumb-item active" aria-current="page">Stok Tiket</li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- Card stats -->

        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
		<!-- Tab table -->
		<div class="nav-wrapper">
			<ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
				<li class="nav-item">
					<a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-curved-next mr-2"></i>Penumpang</a>
				</li>
				<li class="nav-item">
					<a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bus-front-12 mr-2"></i>Kendaraan</a>
				</li>
				
			</ul>
		</div>
		<div class="card shadow">
			<div class="card-body">
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
					<div class="card shadow">
            <div class="card-header border-0">
              <h2 class="mb-0">Daftar Stok Tiket KMP</h3>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered table-condensed" style="font-size:11px;" id="mydata">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" style="text-align:center;width:40px;">No</th>
                        <th scope="col">KMP</th>
												<th scope="col">Eko. Anak</th>
												<th scope="col">Eko. Dewasa</th>
												<th scope="col">Bis. Anak</th>
												<th scope="col">Bis. Dewasa</th>
												<th scope="col">VIP Anak</th>
												<th scope="col">VIP Dewasa</th>
												
                        <th scope="col" style="width:140px;text-align:center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no=0;
                    foreach ($data->result_array() as $a):
                        $no++;
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
						
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        <td><?php echo $nm;?> - <?php echo $linam;?></td>
												<td><?php echo $tiketekoaa;?></td>
												<td><?php echo $tiketekodw;?></td>
												<td><?php echo $tiketbisaa;?></td>
												<td><?php echo $tiketbisdw;?></td>
												<td><?php echo $tiketvipaa;?></td>
												<td><?php echo $tiketvipdw;?></td>

												
                        <td style="text-align:center;">
                            <a class="btn btn-success btn-sm" href="#modalEditKMP<?php echo $id?>" data-toggle="modal" title="Tambah"><span class="ni ni-fat-add"></span> Tambah</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>

          </div>
          </div>
					</div>
					<div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
					<div class="card shadow">
            <div class="card-header border-0">
              <h2 class="mb-0">Daftar Stok Tiket KMP</h3>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered table-condensed" style="font-size:11px;" id="mydata2">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" style="text-align:center;width:40px;">No</th>
                        <th scope="col">KMP</th>
												<th scope="col">Gol.1</th>
												<th scope="col">Gol.2</th>
												<th scope="col">Gol.3</th>
												<th scope="col">Gol.4</th>
												<th scope="col">Gol.5</th>
												<th scope="col">Gol.6</th>
												<th scope="col">Gol.7</th>
												<th scope="col">Gol.8</th>
												<th scope="col">Gol.9</th>
                        <th scope="col" style="width:140px;text-align:center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no=0;
                    foreach ($data->result_array() as $a):
                        $no++;
                        $id=$a['kmp_id'];
						$nm=$a['kmp_nama'];
						$linid=$a['kmp_lintasan_id'];
						$linam=$a['lintasan_nama'];
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
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        <td><?php echo $nm;?> - <?php echo $linam;?></td>
												<td><?php echo $tiketgol1;?></td>
												<td><?php echo $tiketgol2;?></td>
												<td><?php echo $tiketgol3;?></td>
												<td><?php echo $tiketgol4;?></td>
												<td><?php echo $tiketgol5;?></td>
												<td><?php echo $tiketgol6;?></td>
												<td><?php echo $tiketgol7;?></td>
												<td><?php echo $tiketgol8;?></td>
												<td><?php echo $tiketgol9;?></td>
                        <td style="text-align:center;">
                            <a class="btn btn-success btn-sm" href="#modalEditKMP<?php echo $id?>" data-toggle="modal" title="Tambah"><span class="ni ni-fat-add"></span> Tambah</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>

          </div>
          </div>
					</div>
					
				</div>
			</div>
		</div>
          
        </div>

      </div>
      
        <!-- ============ MODAL TAMBAH =============== -->
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
                <div id="modalEditKMP<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Tambah Stok Tiket KMP</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/tiket/edit_kmptiket'?>">
                        <div class="modal-body">
                            <input name="kode" type="hidden" value="<?php echo $id;?>">
														<div class="row">
															<div class="col-lg-6">
																<div class="form-group">
																	<label class="control-label col-xs-3" >KMP :</label>
																	<input name="kmp" class="form-control" type="hidden" value="<?php echo $nm;?>" required>
																	<label class="control-label col-xs-3" ><?php echo $nm;?></label>
																</div>
																</div>
																<div class="col-lg-6">
																<div class="form-group">
																<label class="control-label col-xs-3" >Lintasan :</label>
																<input name="lintasan" class="form-control" type="hidden" value="<?php echo $linid;?>" required>
																<label class="control-label col-xs-3" ><?php echo $linam;?></label>
																</div>
																</div>
														</div>
														<!-- Divider -->
														<hr class="mt-1">
														<h4>Penumpang Ekonomi:</h4>
														<div class="row">
															<div class="col-lg-6">
																<div class="form-group">
																		<label class="control-label" >Anak-Anak</label>
																		<div>
																			<input name="tiketekoaa" class="form-control" type="number" min="0" value="<?php echo $tiketekoaa;?>" required>
																		</div>
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																		<label class="control-label" >Dewasa</label>
																		<div>
																			<input name="tiketekodw" class="form-control" type="number" min="0" value="<?php echo $tiketekodw;?>" required>
																		</div>
																</div>
															</div>
														</div>
														<!-- Divider -->
														<hr class="mt-1">
														<h4>Penumpang Bisnis:</h4>
														<div class="row">
															<div class="col-lg-6">
																<div class="form-group">
																		<label class="control-label" >Anak-Anak</label>
																		<div>
																			<input name="tiketbisaa" class="form-control" type="number" min="0" value="<?php echo $tiketbisaa;?>" required>
																		</div>
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																		<label class="control-label" >Dewasa</label>
																		<div>
																			<input name="tiketbisdw" class="form-control" type="number" min="0" value="<?php echo $tiketbisdw;?>" required>
																		</div>
																</div>
															</div>
														</div>
														<!-- Divider -->
														<hr class="mt-1">
														<h4>Penumpang VIP:</h4>
														<div class="row">
															<div class="col-lg-6">
																<div class="form-group">
																		<label class="control-label" >Anak-Anak</label>
																		<div>
																			<input name="tiketvipaa" class="form-control" type="number" min="0" value="<?php echo $tiketvipaa;?>" required>
																		</div>
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																		<label class="control-label" >Dewasa</label>
																		<div>
																			<input name="tiketvipdw" class="form-control" type="number" min="0" value="<?php echo $tiketvipdw;?>" required>
																		</div>
																</div>
															</div>
														</div>
														<!-- Divider -->
														<hr class="mt-1">
														<h4>Kendaraan :</h4>
														<div class="row">
															<div class="col-lg-4">
																<div class="form-group">
																		<label class="control-label" >Golongan I</label>
																		<div>
																			<input name="tiketgol1" class="form-control" type="number" min="0" value="<?php echo $tiketgol1;?>" required>
																		</div>
																</div>
															</div>
															<div class="col-lg-4">
																<div class="form-group">
																		<label class="control-label" >Golongan II</label>
																		<div>
																			<input name="tiketgol2" class="form-control" type="number" min="0" value="<?php echo $tiketgol2;?>" required>
																		</div>
																</div>
															</div>
															<div class="col-lg-4">
																<div class="form-group">
																		<label class="control-label" >Golongan III</label>
																		<div>
																			<input name="tiketgol3" class="form-control" type="number" min="0" value="<?php echo $tiketgol3;?>" required>
																		</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-4">
																<div class="form-group">
																		<label class="control-label" >Golongan IV</label>
																		<div>
																			<input name="tiketgol4" class="form-control" type="number" min="0" value="<?php echo $tiketgol4;?>" required>
																		</div>
																</div>
															</div>
															<div class="col-lg-4">
																<div class="form-group">
																		<label class="control-label" >Golongan V</label>
																		<div>
																			<input name="tiketgol5" class="form-control" type="number" min="0" value="<?php echo $tiketgol5;?>" required>
																		</div>
																</div>
															</div>
															<div class="col-lg-4">
																<div class="form-group">
																		<label class="control-label" >Golongan VI</label>
																		<div>
																			<input name="tiketgol6" class="form-control" type="number" min="0" value="<?php echo $tiketgol6;?>" required>
																		</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-4">
																<div class="form-group">
																		<label class="control-label" >Golongan VII</label>
																		<div>
																			<input name="tiketgol7" class="form-control" type="number" min="0" value="<?php echo $tiketgol7;?>" required>
																		</div>
																</div>
															</div>
															<div class="col-lg-4">
																<div class="form-group">
																		<label class="control-label" >Golongan VIII</label>
																		<div>
																			<input name="tiketgol8" class="form-control" type="number" min="0" value="<?php echo $tiketgol8;?>" required>
																		</div>
																</div>
															</div>
															<div class="col-lg-4">
																<div class="form-group">
																		<label class="control-label" >Golongan IX</label>
																		<div>
																			<input name="tiketgol9" class="form-control" type="number" min="0" value="<?php echo $tiketgol9;?>" required>
																		</div>
																</div>
															</div>
														</div>
										

                </div>
                        <div class="modal-footer">
                            <button class="btn btn-sm" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-info btn-sm">Update</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            <?php
        }
        ?>
		



      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">

          </div>

        </div>
      </footer>
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

      <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo base_url().'assets/dist/js/bootstrap-select.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.price_format.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/bootstrap-datetimepicker.min.js'?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url().'assets/js/bootstrap-notify.js'?>"></script>
  <?php
 $message = $this->session->flashdata('message');
 $msg = $this->session->flashdata('msg');
 if($msg == "tambahkmp"){
?>
     <script type="text/javascript">
            $(document).ready(function(){
             $.notify({

             },{
                     type: 'success',
                     timer: 100,
                     template: '<div class="alert alert-success alert-dismissible fade show" role="alert">'+
                                         '<span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>'+
                                         '<span class="alert-inner--text"><strong>Berhasil! </strong> Input data tiket kmp </span>'+
                                         '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                         '<span aria-hidden="true">&times;</span>'+
                                         '</button>'+
                                         '</div>'


             });

        });
    </script>
<?php
};?>
<?php
if($msg == "editkmp"){
?>
 <script type="text/javascript">
        $(document).ready(function(){
         $.notify({

         },{
                 type: 'success',
                 timer: 100,
                 template: '<div class="alert alert-success alert-dismissible fade show" role="alert">'+
                                     '<span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>'+
                                     '<span class="alert-inner--text"><strong>Berhasil!</strong> Edit data tiket kmp !</span>'+
                                     '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                     '<span aria-hidden="true">&times;</span>'+
                                     '</button>'+
                                     '</div>'

         });

    });
</script>
<?php
}
elseif($msg == "hapuskmp"){
?>
 <script type="text/javascript">
        $(document).ready(function(){
         $.notify({

         },{
                 type: 'warning',
                 timer: 100,
                 template: '<div class="alert alert-warning alert-dismissible fade show" role="alert">'+
                                     '<span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>'+
                                     '<span class="alert-inner--text"><strong>Peringatan!</strong> Data kmp telah dihapus !</span>'+
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

<script type="text/javascript">
    $(document).ready(function() {
        $('#mydata').DataTable();
    } );
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#mydata2').DataTable();
    } );
</script>

</body>

</html>
