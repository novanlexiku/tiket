<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title>Laporan Data Stok Tiket Penumpang</title>
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

<table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;">
<tr>
    <td colspan="2" style="width:800px;paddin-left:20px;"><center><h4>LAPORAN STOK TIKET KENDARAAN</h4></center><br/></td>
</tr>

</table>

<table border="0" align="center" style="width:900px;border:none;">
        <tr>
            <th style="text-align:left"></th>
        </tr>
</table>

<table border="1" align="center" style="width:900px;margin-bottom:20px;">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" style="text-align:center;width:40px;">No</th>
                        <th scope="col">KMP</th>
												<th scope="col">Golongan I</th>
												<th scope="col">Golongan II</th>
												<th scope="col">Golongan III</th>
												<th scope="col">Golongan IV</th>
												<th scope="col">Golongan V</th>
												<th scope="col">Golongan VI</th>
												<th scope="col">Golongan VII</th>
												<th scope="col">Golongan VIII</th>
												<th scope="col">Golongan IX</th>
												
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

												
                        
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>

</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td></td>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td align="right">Yogyakarta, <?php echo date('d-M-Y')?></td>
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
