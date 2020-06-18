<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title>Laporan Kendaraan Pertanggal</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css')?>"/>
</head>
<body onload="window.print()">
<div id="laporan">
<table align="center" style="width:900px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
<!--<tr>
    <td><img src="<?php// echo base_url().'assets/img/kop_surat.png'?>"/></td>
</tr>-->
</table>
<?php
    $b=$data->row_array();
?>
<table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;">
<tr>
    <td colspan="2" style="width:800px;paddin-left:20px;"><center><h4>LAPORAN KENDARAAN TANGGAL : <?php echo $b['tanggal'];?></h4></center><br/></td>
</tr>

</table>

<table border="1" align="center" style="width:1000px;margin-bottom:20px;">
<thead>

    <tr>
        <th style="width:50px;">No</th>
        <th>No Seri Tiket</th>
        <th>Nama Kendaraan</th>
		<th>Plat Kendaraan</th>
        <th>Alamat</th>
        <th>Usia</th>
        <th>Jenis Kelamin</th>
        <th>Nama Kapal</th>
		<th style="width:80px;">Lintasan</th>
		<th>Golongan</th>
		<th style="width:100px;">Tanggal</th>
        <th>Penumpang Lain</th>
    </tr>
</thead>
<tbody>
<?php
$no=0;
								
    foreach ($data->result_array() as $i) {
        $no++;
        $noseri=$i['kendaraan_tiket_seri'];
		$nama=$i['kendaraan_nama_pengemudi'];
		$plat=$i['kendaraan_plat_no'];
        $alamat=$i['kendaraan_alamat'];
        $usia=$i['kendaraan_usia'];
        $jk=$i['kendaraan_jk'];
		$kmp=$i['kmp_nama'];
		$lin=$i['lintasan_nama'];
		$tiket=$i['kendaraan_golongan'];
		$tgl=$i['tanggal'];
        $pass=$i['kendaraan_penumpang_lain'];
?>
    <tr>
        <td style="text-align:center;"><?php echo $no;?></td>
        <td style="text-align:left;"><?php echo $noseri;?></td>
        <td style="text-align:left;"><?php echo $nama;?></td>
		<td style="text-align:left;"><?php echo $plat;?></td>
        <td style="text-align:left;"><?php echo $alamat;?></td>
        <td style="text-align:left;"><?php echo $usia;?></td>
        <td style="text-align:left;"><?php echo $jk;?></td>
        <td style="text-align:center;"><?php echo $kmp;?></td>
		<td style="text-align:center;"><?php echo $lin;?></td>
        <td style="text-align:left;"><?php echo $tiket;?></td>
        <td style="text-align:center;"><?php echo $tgl;?></td>
        <td style="text-align:left;"><?php echo $pass;?></td>
    </tr>
<?php }?>
</tbody>

</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td></td>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td align="right">Tual, <?php echo date('d-M-Y')?></td>
    </tr>
    <tr>
        <td align="right"></td>
    </tr>

    <tr>
    <td><br/><br/><br/><br/></td>
    </tr>
    <tr>
        <td align="right">( <?php echo $this->session->userdata('user_nama');?> )</td>
    </tr>
    <tr>
        <td align="center"></td>
    </tr>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <th><br/><br/></th>
    </tr>
    <tr>
        <th align="left"></th>
    </tr>
</table>
</div>
</body>
</html>
