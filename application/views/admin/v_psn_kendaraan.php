
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
                  <li class="breadcrumb-item active" aria-current="page">Pesan Tiket</li>
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
		<div class="card shadow">
            <div class="card-header border-0">
              <h2 class="mb-0">Pesan Tiket KMP</h3>
            </div>
            <div class="table-responsive">
			<table class="table table-bordered table-condensed" style="font-size:11px;" id="mydata">
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
                        <td><?php echo $linam;?></td>
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
                            <a class="btn btn-success btn-sm" href="#modalPesanKMP<?php echo $id?>" data-toggle="modal" title="Pesan"><span class="ni ni-fat-add"></span> Pesan</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>

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
                <div id="modalPesanKMP<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Data Kendaraan</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/p_kendaraan/tambah_kendaraan'?>">
						<div class="modal-body">
								<div class="row">
											<div class="col-lg-6">
											<div class="form-group">
												<label class="form-control-label" for="input-level">Nama Kapal : <?php echo $nm;?></label>
												<input name="kode" type="hidden" value="<?php echo $id;?>">
												<input name="nama_kapal" type="hidden" value="<?php echo $id;?>">
											</div>
											</div>
											<div class="col-lg-6">
											<div class="form-group">
												<label class="form-control-label" for="input-level">Lintasan : <?php echo $linam;?></label>
												<input name="lintasan" type="hidden" value="<?php echo $linam;?>">
											</div>
											</div>
								</div>
										<hr class="my-2" />
								<div class="row">
									<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label" for="input-nama">Nama Pengemudi</label>
										<input name="nama" class="form-control" type="text" placeholder="Masukkan Nama" required>
									</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label" for="input-nama">Plat kendaraan</label>
										<input name="plat" class="form-control" type="text" placeholder="Masukkan Plat Kendaraan" required>
									</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label" for="input-alamat">Alamat</label>
										<textarea name="alamat" class="form-control" placeholder="Masukkan Alamat" rows="2" required></textarea>
									</div>
									</div>
								</div>
								<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="input-usia">Usia</label>
										<div class="input-group">
										<input name="usia" class="form-control" type="number" placeholder="Usia" required>
										<div class="input-group-append">
											<span class="input-group-text">Tahun</span>
										</div>
										</div>
									</div>
									</div>
									<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="input-kelamin">Jenis Kelamin</label>
										<select name="jenis_kelamin" class="form-control" placeholder="" required>
										<option value="Laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
										</select>
									</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
									<div class="form-group">
									<label class="form-control-label" for="input-kelamin">Tanggal</label>
									<div class='input-group date' id='datepicker' style="width:200px;">
										<div class="input-group-prepend">
										<span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
										</div>
											<input type='text' name="tgl" class="form-control datepicker" data-date-format="yyyy/mm/dd" placeholder="Tanggal" required/>
										</div>
										</div>
									</div>
									<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="input-kelamin">Golongan Kendaraan</label>
										<select name="jenis_gol" class="form-control" placeholder="" required>
										<option value="">Pilih Golongan</option>
										<option value="Gol.1">Golongan I</option>
										<option value="Gol.2">Golongan II</option>
										<option value="Gol.3">Golongan III</option>
										<option value="Gol.4">Golongan IV</option>
										<option value="Gol.5">Golongan V</option>
										<option value="Gol.6">Golongan VI</option>
										<option value="Gol.7">Golongan VII</option>
										<option value="Gol.8">Golongan VIII</option>
										<option value="Gol.9">Golongan IX</option>
										</select>
									</div>
									</div>
								</div>
								<hr class="my-2" />
								<div class="row">
									<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label" for="input-nama">Penumpang Lain</label>
										<input name="penumpang_lain" class="form-control" type="text" placeholder="Masukkan Nama Penumpang Lain">
									</div>
									</div>
								</div>
								<hr class="my-2" />
						</div>
						<div class="modal-footer">
							<button class="btn btn-sm" data-dismiss="modal" aria-hidden="true">Tutup</button>
							<button class="btn btn-sm btn-info">Simpan</button>
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
  <script src="<?php echo base_url().'assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url().'assets/js/bootstrap-notify.js'?>"></script>
  <?php
 $message = $this->session->flashdata('message');
 $msg = $this->session->flashdata('msg');
 if($msg == "tambahkendaraan"){
?>
     <script type="text/javascript">
            $(document).ready(function(){
             $.notify({

             },{
                     type: 'success',
                     timer: 100,
                     template: '<div class="alert alert-success alert-dismissible fade show" role="alert">'+
                                         '<span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>'+
                                         '<span class="alert-inner--text"><strong>Berhasil! </strong> Tambah Data Kendaraan </span>'+
                                         '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                         '<span aria-hidden="true">&times;</span>'+
                                         '</button>'+
                                         '</div>'


             });

        });
    </script>
<?php
};?>

<script>
      $.fn.datepicker.defaults.format = "mm/dd/yyyy";
     $('.datepicker').datepicker({
         startDate: new Date()
     });
 </script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#mydata').DataTable();
    } );
</script>

</body>

</html>
