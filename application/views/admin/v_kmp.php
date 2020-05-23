
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
                  <li class="breadcrumb-item active" aria-current="page">KMP</li>
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
              <h2 class="mb-0">Daftar KMP</h3>
                <div class="col text-right">
                  <a href="#!" data-toggle="modal" data-target="#largeModal" class="btn btn-sm btn-success"><span class="ni ni-fat-add"></span>Tambah KMP</a>
                </div>

            </div>
            <div class="table-responsive">
              <table class="table table-bordered table-condensed" style="font-size:11px;" id="mydata">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" style="text-align:center;width:40px;">No</th>
                        <th scope="col">KMP</th>
						<th scope="col">Lintasan</th>
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
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        <td><?php echo $nm;?></td>
						<td><?php echo $linam;?></td>
                        <td style="text-align:center;">
                            <a class="btn btn-warning btn-sm" href="#modalEditKMP<?php echo $id?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
							<a class="btn btn-danger btn-sm" href="#modalHapusKMP<?php echo $id?>" data-toggle="modal" title="Hapus"><span class="fa fa-times"></span> Hapus</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>

          </div>
          </div>
        </div>

      </div>
      <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Tambah KMP</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/kmp/tambah_kmp'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >KMP</label>
                        <div class="col-xs-9">
                            <input name="kmp" class="form-control" type="text" placeholder="Masukkan nama KMP" required>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-xs-3" >Lintasan</label>
                        <div class="col-xs-9">
								<select name="lintasan" class="form-control" placeholder="" >
                                    <?php foreach ($lintasan->result() as $row) :?>
                                    <option value="<?php echo $row->lintasan_id;?>"><?php echo $row->lintasan_nama;?></option>
                                    <?php endforeach;?>
                                </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info btn-sm">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>

        <!-- ============ MODAL EDIT =============== -->
        <?php
                    foreach ($data->result_array() as $a) {
                        $id=$a['kmp_id'];
						$nm=$a['kmp_nama'];
						$linid=$a['kmp_lintasan_id'];
						
                    ?>
                <div id="modalEditKMP<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Edit KMP</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/kmp/edit_kmp'?>">
                        <div class="modal-body">
                            <input name="kode" type="hidden" value="<?php echo $id;?>">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >KMP</label>
                        <div class="col-xs-9">
                            <input name="kmp" class="form-control" type="text" value="<?php echo $nm;?>" required>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-xs-3" >Lintasan</label>
                        <div class="col-xs-9">
								<select name="lintasan" class="form-control" placeholder="" >
                                    <?php foreach ($lintasan->result() as $row) :?>
                                    <option value="<?php echo $row->lintasan_id;?>"><?php echo $row->lintasan_nama;?></option>
                                    <?php endforeach;?>
                                </select>
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
		<!-- ============ MODAL HAPUS =============== -->
		<?php
                          foreach ($data->result_array() as $a) {
							$id=$a['kmp_id'];
							$nm=$a['kmp_nama'];
							$linid=$a['kmp_lintasan_id'];
                          ?>
                      <div id="modalHapusKMP<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                          <div class="modal-dialog">
                          <div class="modal-content">
                          <div class="modal-header">
                              <h3 class="modal-title" id="myModalLabel">Hapus KMP</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                          </div>
                          <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/kmp/hapus_kmp'?>">
                              <div class="modal-body">
                                  <p>Yakin mau menghapus data ini..?</p>
                                          <input name="kode" type="hidden" value="<?php echo $id; ?>">
                              </div>
                              <div class="modal-footer">
                                  <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                  <button type="submit" class="btn btn-primary">Hapus</button>
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
                                         '<span class="alert-inner--text"><strong>Berhasil! </strong> Input data kmp </span>'+
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
                                     '<span class="alert-inner--text"><strong>Berhasil!</strong> Edit data kmp !</span>'+
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

</body>

</html>
