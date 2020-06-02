<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title>Surat Jalan</title>
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
    $b=$lintasan->row_array();
    $c=$surat->row_array();
?>
<table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;">
<tr>
<th style="text-align:left;width:100px;">DAFTAR MANIFES KMP</th>
<td style="text-align:left;">: <?php echo $b['kmp_nama'];?></td>
</tr>
<tr>
<th style="text-align:left;width:100px;">BERANGKAT DARI PELABUHAN</th>
<td style="text-align:left;">: <?php echo $c['surat_berangkat'];?></td>
</tr>
<tr>
<th colspan="0" style="text-align:left;width:200px;">TANGGAL</th>
<td colspan="11" style="text-align:left;width:200px;">: <?php echo $b['tanggal'];?></td>
</tr>
<tr>
<th style="text-align:left;">TRIP KE</th>
<td style="text-align:left;">: <?php echo $b['lintasan_nama'];?></td>
</tr>

<tr>
    <td><br/><br/><br/></td>
    </tr>
</table>

<table border="1" align="center" style="width:700px;margin-bottom:20px;">
<thead>

    <tr>
        <th style="width:50px;">No</th>
        <th>Jenis Muatan</th>
        <th>Jumlah</th>
        <th>Keterangan</th>
        
    </tr>
</thead>
<tbody>

    <tr>
        <td style="text-align:center;">1</td>
        <td style="padding-left:5px;">PENUMPANG DEWASA</td>
        <td style="text-align:center;"><?php echo $dewasa;?> ORANG</td>
        <td style="text-align:center;"></td>
    </tr>
	<tr>
        <td style="text-align:center;">2</td>
        <td style="padding-left:5px;">PENUMPANG ANAK</td>
        <td style="text-align:center;"><?php echo $anak;?> ORANG</td>
        <td style="text-align:center;"></td>
    </tr>
	<tr>
        <td style="text-align:center;">3</td>
        <td style="padding-left:5px;">GOLONGAN I (SEPEDA)</td>
        <td style="text-align:center;"><?php echo $gol1;?> UNIT</td>
        <td style="text-align:center;"></td>
    </tr>
	<tr>
        <td style="text-align:center;">4</td>
        <td style="padding-left:5px;">GOLONGAN II (SEPEDA MOTOR)</td>
        <td style="text-align:center;"><?php echo $gol2;?> UNIT</td>
        <td style="text-align:center;"></td>
    </tr>
	<tr>
        <td style="text-align:center;">5</td>
        <td style="padding-left:5px;">GOLONGAN III (SEPEDA MOTOR CC500)</td>
        <td style="text-align:center;"><?php echo $gol2;?> UNIT</td>
        <td style="text-align:center;"></td>
    </tr>
	<tr>
        <td style="text-align:center;">6</td>
        <td style="padding-left:5px;">GOLONGAN IV (RUANG PICK UP DLL)</td>
        <td style="text-align:center;"><?php echo $gol2;?> UNIT</td>
        <td style="text-align:center;"></td>
    </tr>
	<tr>
        <td style="text-align:center;">7</td>
        <td style="padding-left:5px;">GOLONGAN V (BUS SEDANG / TRUK SEDANG)</td>
        <td style="text-align:center;"><?php echo $gol2;?> UNIT</td>
        <td style="text-align:center;"></td>
    </tr>
	<tr>
        <td style="text-align:center;">8</td>
        <td style="padding-left:5px;">GOLONGAN VI (BUS BESAR / FUSO)</td>
        <td style="text-align:center;"><?php echo $gol2;?> UNIT</td>
        <td style="text-align:center;"></td>
    </tr>
	<tr>
        <td style="text-align:center;">9</td>
        <td style="padding-left:5px;">GOLONGAN VII (ALAT BERAT KARET)</td>
        <td style="text-align:center;"><?php echo $gol2;?> UNIT</td>
        <td style="text-align:center;"></td>
    </tr>
	<tr>
        <td style="text-align:center;">10</td>
        <td style="padding-left:5px;">GOLONGAN VIII (ALAT BERAT BESI)</td>
        <td style="text-align:center;"><?php echo $gol2;?> UNIT</td>
        <td style="text-align:center;"></td>
    </tr>
	<tr>
        <td style="text-align:center;">11</td>
        <td style="padding-left:5px;">GOLONGAN IX (TRUK GANDENG LEBIH DARI 16m)</td>
        <td style="text-align:center;"><?php echo $gol2;?> UNIT</td>
        <td style="text-align:center;"></td>
    </tr>
	<tr>
        <td style="text-align:center;">12</td>
        <td style="padding-left:5px;">BARANG</td>
        <td style="text-align:center;"> TON</td>
        <td style="text-align:center;"></td>
    </tr>
	<tr>
        <td style="text-align:center;">13</td>
        <td style="padding-left:5px;">HEWAN</td>
        <td style="text-align:center;"> EKOR</td>
        <td style="text-align:center;"></td>
    </tr>
</tbody>

</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td></td>
</table>
<table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">

    <tr>
		<td align="center">Yang Membuat</td>
        <td align="center">Mengetahui</td>
    </tr>
	<tr>
		<td align="center">Petugas Pelayaran</td>
        <td align="center">Nahkoda</td>
    </tr>
    <tr>
        <td align="right"></td>
    </tr>

    <tr>
    <td><br/><br/><br/><br/></td>
    </tr>
    <tr>
		<td align="center">( <?php echo $c['surat_petugas'];?> )</td>
        <td align="center">( <?php echo $c['surat_nahkoda'];?> )</td>
    </tr>
    <tr>
        <td align="center"></td>
    </tr>
	<tr>
    <td><br/><br/></td>
    </tr>
    <tr>
		<td align="center">Mengetahui</td>
        <td align="center">Mengetahui</td>
    </tr>
	<tr>
		<td align="center">Manager Usaha</td>
        <td align="center">Petugas Syahbandar</td>
    </tr>
    <tr>
        <td align="right"></td>
    </tr>

    <tr>
    <td><br/><br/><br/><br/></td>
    </tr>
    <tr>
		<td align="center">( <?php echo $c['surat_manager'];?> )</td>
        <td align="center">( <?php echo $c['surat_syahbandar'];?> )</td>
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
