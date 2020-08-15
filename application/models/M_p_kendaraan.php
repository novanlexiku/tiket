<?php
class M_p_kendaraan extends CI_Model
{

	function tampil_kmp()
	{
		$hsl = $this->db->query("select kmp.kmp_id, kmp.kmp_nama, kmp.kmp_lintasan_id, kmp.kmp_tiketekoaa, kmp.kmp_tiketekodw, kmp.kmp_tiketbisaa, kmp.kmp_tiketbisdw, kmp.kmp_tiketvipaa, kmp.kmp_tiketvipdw, kmp.kmp_tiketgol1,
		kmp.kmp_tiketgol2, kmp.kmp_tiketgol3, kmp.kmp_tiketgol4, kmp.kmp_tiketgol5, kmp.kmp_tiketgol6, kmp.kmp_tiketgol7, kmp.kmp_tiketgol8, kmp.kmp_tiketgol9, lin.lintasan_id, lin.lintasan_nama from tbl_kmp kmp, tbl_lintasan lin where kmp.kmp_lintasan_id = lin.lintasan_id order by kmp_id asc");
		return $hsl;
	}

	function tampil_lintasan()
	{
		$hsl = $this->db->query("select * from tbl_lintasan order by lintasan_id asc");
		return $hsl;
	}
	function tampil_kendaraan()
	{
		$hsl = $this->db->query("select * from tbl_kendaraan order by kendaraan_id asc");
		return $hsl;
	}


	function tampil_p_kendaraan()
	{
		$hsl = $this->db->query("select k.kendaraan_no,	k.kendaraan_tiket_seri,	k.kendaraan_nama_pengemudi,	k.kendaraan_plat_no, k.kendaraan_alamat, k.kendaraan_usia, k.kendaraan_jk, k.kendaraan_kmp,	k.kendaraan_golongan, k.tanggal, k.kendaraan_penumpang_lain, kmp.kmp_id, kmp.kmp_nama from tbl_p_kendaraan k, tbl_kmp kmp where k.kendaraan_kmp = kmp.kmp_id order by tanggal desc");
		return $hsl;
	}

	function simpan_kendaraan($kode, $noseri, $nama, $alamat, $plat, $usia, $jk, $tgl, $jg, $kmp, $pl)
	{

		$hsl =
			$this->db->trans_begin();
		$this->db->trans_strict(FALSE);
		$this->db->query("INSERT INTO tbl_p_kendaraan(kendaraan_tiket_seri,kendaraan_nama_pengemudi,kendaraan_plat_no,kendaraan_alamat,kendaraan_usia,kendaraan_jk,kendaraan_kmp,kendaraan_golongan,tanggal,kendaraan_penumpang_lain) VALUES ('$noseri','$nama','$plat','$alamat','$usia','$jk','$kmp','$jg','$tgl','$pl')");
		if ($jg == '1') {
			$gol1 = '1';
			$this->db->query("update tbl_kmp set kmp_tiketgol1=kmp_tiketgol1-'$gol1' where kmp_id='$kode'");
		} elseif ($jg == '2') {
			$gol2 = '1';
			$this->db->query("update tbl_kmp set kmp_tiketgol2=kmp_tiketgol2-'$gol2' where kmp_id='$kode'");
		} elseif ($jg == '3') {
			$gol3 = '1';
			$this->db->query("update tbl_kmp set kmp_tiketgol3=kmp_tiketgol3-'$gol3' where kmp_id='$kode'");
		} elseif ($jg == '4') {
			$gol4 = '1';
			$this->db->query("update tbl_kmp set kmp_tiketgol4=kmp_tiketgol4-'$gol4' where kmp_id='$kode'");
		} elseif ($jg == '5') {
			$gol5 = '1';
			$this->db->query("update tbl_kmp set kmp_tiketgol5=kmp_tiketgol5-'$gol5' where kmp_id='$kode'");
		} elseif ($jg == '6') {
			$gol6 = '1';
			$this->db->query("update tbl_kmp set kmp_tiketgol6=kmp_tiketgol6-'$gol6' where kmp_id='$kode'");
		} elseif ($jg == '7') {
			$gol7 = '1';
			$this->db->query("update tbl_kmp set kmp_tiketgol7=kmp_tiketgol7-'$gol7' where kmp_id='$kode'");
		} elseif ($jg == '8') {
			$gol8 = '1';
			$this->db->query("update tbl_kmp set kmp_tiketgol8=kmp_tiketgol8-'$gol8' where kmp_id='$kode'");
		} elseif ($jg == '9') {
			$gol9 = '1';
			$this->db->query("update tbl_kmp set kmp_tiketgol9=kmp_tiketgol9-'$gol9' where kmp_id='$kode'");
		}

		$this->db->trans_complete();
		return $hsl;
	}


	function simpan_penumpang($noseri, $nama, $alamat, $usia, $jk, $tgl, $kmp, $passport)
	{

		$hsl =
			$this->db->trans_start();
		$this->db->query("INSERT INTO tbl_penumpang(penumpang_tiket_seri,penumpang_nama,penumpang_alamat,penumpang_usia,penumpang_jk,penumpang_kmp,tanggal,penumpang_passport) VALUES ('$noseri','$nama','$alamat','$usia','$jk','$kmp','$tgl','$passport')");
		$this->db->trans_complete();
		return $hsl;
	}



	function get_penumpang($noseri)
	{
		$hsl = $this->db->query("SELECT p.penumpang_tiket_seri,DATE_FORMAT(tanggal,'%d %M %Y') AS tanggal,p.penumpang_tiket_seri,p.penumpang_nama,p.penumpang_alamat,p.penumpang_usia,p.penumpang_jk,p.penumpang_kmp,k.kmp_id,k.kmp_nama,k.kmp_lintasan_id,l.lintasan_id,l.lintasan_nama,p.penumpang_tiket,p.penumpang_passport FROM tbl_penumpang p, tbl_kmp k, tbl_lintasan l WHERE penumpang_tiket_seri='$noseri' and p.penumpang_kmp = k.kmp_id and k.kmp_lintasan_id = l.lintasan_id ORDER BY tanggal");
		return $hsl;
	}
	function get_data_kendaraan_perlintasan($noseri, $kenid, $tanggal)
	{
		$hsl = $this->db->query("SELECT p.kendaraan_tiket_seri,DATE_FORMAT(tanggal,'%d %M %Y') AS tanggal,p.kendaraan_tiket_seri,p.kendaraan_nama_pengemudi,p.kendaraan_plat_no,p.kendaraan_alamat,p.kendaraan_usia,p.kendaraan_jk,p.kendaraan_kmp,k.kmp_id,k.kmp_nama,k.kmp_lintasan_id,p.kendaraan_golongan,p.kendaraan_penumpang_lain, g.kendaraan_id, g.kendaraan_nama, g.kendaraan_desk FROM tbl_p_kendaraan p, tbl_kmp k, tbl_kendaraan g WHERE p.kendaraan_kmp = k.kmp_id and p.kendaraan_golongan=g.kendaraan_id and p.kendaraan_tiket_seri='$noseri' and p.kendaraan_kmp='$kenid' and DATE(tanggal)='$tanggal'");
		return $hsl;
	}
	function get_kendaraan($noseri)
	{
		$hsl = $this->db->query("SELECT * FROM tbl_p_kendaraan where kendaraan_tiket_seri='$noseri'");
		return $hsl;
	}

	function get_serial_gol1()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(kendaraan_tiket_seri,6)) AS kd_max FROM tbl_p_kendaraan");
		$kd = "";
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $k) {
				$tmp = ((int)$k->kd_max) + 1;
				$kd = sprintf("%06s", $tmp);
			}
		} else {
			$kd = "000001";
		}
		return "KGL1" . $kd;
	}
	function get_serial_gol2()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(kendaraan_tiket_seri,6)) AS kd_max FROM tbl_p_kendaraan");
		$kd = "";
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $k) {
				$tmp = ((int)$k->kd_max) + 1;
				$kd = sprintf("%06s", $tmp);
			}
		} else {
			$kd = "000001";
		}
		return "KGL2" . $kd;
	}
	function get_serial_gol3()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(kendaraan_tiket_seri,6)) AS kd_max FROM tbl_p_kendaraan");
		$kd = "";
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $k) {
				$tmp = ((int)$k->kd_max) + 1;
				$kd = sprintf("%06s", $tmp);
			}
		} else {
			$kd = "000001";
		}
		return "KGL3" . $kd;
	}
	function get_serial_gol4()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(kendaraan_tiket_seri,6)) AS kd_max FROM tbl_p_kendaraan");
		$kd = "";
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $k) {
				$tmp = ((int)$k->kd_max) + 1;
				$kd = sprintf("%06s", $tmp);
			}
		} else {
			$kd = "000001";
		}
		return "KGL4" . $kd;
	}
	function get_serial_gol5()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(kendaraan_tiket_seri,6)) AS kd_max FROM tbl_p_kendaraan");
		$kd = "";
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $k) {
				$tmp = ((int)$k->kd_max) + 1;
				$kd = sprintf("%06s", $tmp);
			}
		} else {
			$kd = "000001";
		}
		return "KGL5" . $kd;
	}
	function get_serial_gol6()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(kendaraan_tiket_seri,6)) AS kd_max FROM tbl_p_kendaraan");
		$kd = "";
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $k) {
				$tmp = ((int)$k->kd_max) + 1;
				$kd = sprintf("%06s", $tmp);
			}
		} else {
			$kd = "000001";
		}
		return "KGL6" . $kd;
	}
	function get_serial_gol7()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(kendaraan_tiket_seri,6)) AS kd_max FROM tbl_p_kendaraan");
		$kd = "";
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $k) {
				$tmp = ((int)$k->kd_max) + 1;
				$kd = sprintf("%06s", $tmp);
			}
		} else {
			$kd = "000001";
		}
		return "KGL7" . $kd;
	}
	function get_serial_gol8()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(kendaraan_tiket_seri,6)) AS kd_max FROM tbl_p_kendaraan");
		$kd = "";
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $k) {
				$tmp = ((int)$k->kd_max) + 1;
				$kd = sprintf("%06s", $tmp);
			}
		} else {
			$kd = "000001";
		}
		return "KGL8" . $kd;
	}
	function get_serial_gol9()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(kendaraan_tiket_seri,6)) AS kd_max FROM tbl_p_kendaraan");
		$kd = "";
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $k) {
				$tmp = ((int)$k->kd_max) + 1;
				$kd = sprintf("%06s", $tmp);
			}
		} else {
			$kd = "000001";
		}
		return "KGL9" . $kd;
	}
}
