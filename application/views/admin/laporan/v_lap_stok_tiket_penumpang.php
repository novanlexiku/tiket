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
    <td colspan="2" style="width:800px;paddin-left:20px;"><center><h4>LAPORAN STOK TIKET PENUMPANG</h4></center><br/></td>
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
												<th scope="col">Eko. Anak</th>
												<th scope="col">Eko. Dewasa</th>
												<th scope="col">Bis. Anak</th>
												<th scope="col">Bis. Dewasa</th>
												<th scope="col">VIP Anak</th>
												<th scope="col">VIP Dewasa</th>
												
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
