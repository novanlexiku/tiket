<html lang="en" moznomarginboxes mozdisallowselectionprint>
<?php
$b = $lintasan->row_array();
?>

<head>
	<title>Laporan Daftar Penumpang Pada Kendaraan dan Kendaraan <?php echo $b['tanggal']; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css') ?>" />
</head>

<body onload="window.print()">
	<div id="laporan">
		<table align="center" style="width:900px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
			<!--<tr>
    <td><img src="<?php// echo base_url().'assets/img/kop_surat.png'?>"/></td>
</tr>-->
		</table>

		<table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;">
			<tr>
				<td colspan="2" style="width:800px;paddin-left:20px;">
					<center>
						<h4>DAFTAR PENUMPANG PADA KENDARAAN DAN KENDARAAN</h4>
					</center><br />
				</td>
			</tr>
			<tr>
				<th colspan="0" style="text-align:left;width:200px;">Tanggal</th>
				<td colspan="11" style="text-align:left;width:200px;">: <?php echo $b['tanggal']; ?></td>
			</tr>
			<tr>
				<th style="text-align:left;width:100px;">No. Kendaraan</th>
				<td style="text-align:left;">: <?php echo $b['kendaraan_plat_no']; ?></td>

			</tr>
			<tr>
				<th style="text-align:left;">Jenis Golongan</th>
				<td style="text-align:left;">: <?php echo $b['kendaraan_nama']; ?></td>

			</tr>

			<tr>
				<td><br /><br /><br /></td>
			</tr>
		</table>

		<table border="1" align="center" style="width:800px;margin-bottom:20px;">
			<thead>

				<tr>
					<th style="width:50px;">No</th>
					<th>No Seri Tiket</th>
					<th>Nama Penumpang</th>
					<th>Alamat</th>
					<th>Usia</th>
					<th>Jenis Kelamin</th>
					<th>Nama Kapal</th>
					<th>Lintasan</th>
					<th>Tanggal</th>
					<th>No Passport</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 0;
				$total = 0;
				foreach ($penumpang->result_array() as $i) {
					$no++;
					$total++;
					$noseri = $i['penumpang_tiket_seri'];
					$nama = $i['penumpang_nama'];
					$alamat = $i['penumpang_alamat'];
					$usia = $i['penumpang_usia'];
					$jk = $i['penumpang_jk'];
					$kmp = $i['kmp_nama'];
					$lin = $i['lintasan_nama'];
					$tiket = $i['penumpang_tiket'];
					$tgl = $i['tanggal'];
					$pass = $i['penumpang_passport'];
				?>
					<tr>
						<td style="text-align:center;"><?php echo $no; ?></td>
						<td style="padding-left:5px;"><?php echo $noseri; ?></td>
						<td style="text-align:center;"><?php echo $nama; ?></td>
						<td style="text-align:center;"><?php echo $alamat; ?></td>
						<td style="text-align:left;"><?php echo $usia; ?></td>
						<td style="text-align:left;"><?php echo $jk; ?></td>
						<td style="text-align:center;"><?php echo $kmp; ?></td>
						<td style="text-align:center;"><?php echo $lin; ?></td>
						<td style="text-align:right;"><?php echo $tgl; ?></td>
						<td style="text-align:right;"><?php echo $pass; ?></td>
					</tr>

				<?php } ?>
				<tr>
					<th colspan="2">Jumlah</th>
					<th><?php echo $total; ?> Orang</th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</tbody>

		</table>
		<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
			<tr>
				<td></td>
		</table>
		<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
			<tr>
				<td align="right">Tual, <?php echo $b['tanggal']; ?></td>
			</tr>
			<tr>
				<td align="right">Pengemudi</td>
			</tr>
			<tr>
				<td align="right"></td>
			</tr>

			<tr>
				<td><br /><br /><br /><br /></td>
			</tr>
			<tr>
				<td align="right">( <?php echo $b['kendaraan_nama_pengemudi']; ?> )</td>
			</tr>
			<tr>
				<td align="center"></td>
			</tr>
		</table>
		<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
			<tr>
				<th><br /><br /></th>
			</tr>
			<tr>
				<th align="left"></th>
			</tr>
		</table>
	</div>
</body>

</html>
