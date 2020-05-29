<?php
class M_laporan extends CI_Model{
	
	function get_stok_tiket(){
		$hsl=$this->db->query("select kmp.kmp_id, kmp.kmp_nama, kmp.kmp_lintasan_id, kmp.kmp_tiketekoaa, kmp.kmp_tiketekodw, kmp.kmp_tiketbisaa, kmp.kmp_tiketbisdw, kmp.kmp_tiketvipaa, kmp.kmp_tiketvipdw, kmp.kmp_tiketgol1,
		kmp.kmp_tiketgol2, kmp.kmp_tiketgol3, kmp.kmp_tiketgol4, kmp.kmp_tiketgol5, kmp.kmp_tiketgol6, kmp.kmp_tiketgol7, kmp.kmp_tiketgol8, kmp.kmp_tiketgol9, lin.lintasan_id, lin.lintasan_nama from tbl_kmp kmp, tbl_lintasan lin where kmp.kmp_lintasan_id = lin.lintasan_id order by kmp_id asc");
		return $hsl;
	}
	// Penumpang
	function get_data_penumpang_pertanggal($tanggal){
		$hsl=$this->db->query("SELECT p.penumpang_tiket_seri,DATE_FORMAT(tanggal,'%d %M %Y') AS tanggal,p.penumpang_tiket_seri,p.penumpang_nama,p.penumpang_alamat,p.penumpang_usia,p.penumpang_jk,p.penumpang_kmp,k.kmp_id,k.kmp_nama,k.kmp_lintasan_id,l.lintasan_id,l.lintasan_nama,p.penumpang_tiket,p.penumpang_passport FROM tbl_penumpang p, tbl_kmp k, tbl_lintasan l WHERE DATE(tanggal)='$tanggal' and p.penumpang_kmp = k.kmp_id and k.kmp_lintasan_id = l.lintasan_id ORDER BY tanggal");
		return $hsl;
	}
	function get_data_penumpang_perlintasan($linid,$tanggal){
		$hsl=$this->db->query("SELECT p.penumpang_tiket_seri,DATE_FORMAT(tanggal,'%d %M %Y') AS tanggal,p.penumpang_tiket_seri,p.penumpang_nama,p.penumpang_alamat,p.penumpang_usia,p.penumpang_jk,p.penumpang_kmp,k.kmp_id,k.kmp_nama,k.kmp_lintasan_id,l.lintasan_id,l.lintasan_nama,p.penumpang_tiket,p.penumpang_passport FROM tbl_penumpang p, tbl_kmp k, tbl_lintasan l WHERE k.kmp_lintasan_id='$linid' and DATE(tanggal)='$tanggal' and p.penumpang_kmp = k.kmp_id and k.kmp_lintasan_id = l.lintasan_id ORDER BY tanggal");
		return $hsl;
	}
	// Kendaraan
	function get_data_kendaraan_pertanggal($tanggal){
		$hsl=$this->db->query("SELECT p.kendaraan_tiket_seri,DATE_FORMAT(tanggal,'%d %M %Y') AS tanggal,p.kendaraan_tiket_seri,p.kendaraan_nama_pengemudi,p.kendaraan_plat_no,p.kendaraan_alamat,p.kendaraan_usia,p.kendaraan_jk,p.kendaraan_kmp,k.kmp_id,k.kmp_nama,k.kmp_lintasan_id,l.lintasan_id,l.lintasan_nama,p.kendaraan_golongan,p.kendaraan_penumpang_lain FROM tbl_p_kendaraan p, tbl_kmp k, tbl_lintasan l WHERE DATE(tanggal)='$tanggal' and p.kendaraan_kmp = k.kmp_id and k.kmp_lintasan_id = l.lintasan_id ORDER BY tanggal");
		return $hsl;
	}
	function get_data_kendaraan_perlintasan($linid,$tanggal){
		$hsl=$this->db->query("SELECT p.kendaraan_tiket_seri,DATE_FORMAT(tanggal,'%d %M %Y') AS tanggal,p.kendaraan_tiket_seri,p.kendaraan_nama_pengemudi,p.kendaraan_plat_no,p.kendaraan_alamat,p.kendaraan_usia,p.kendaraan_jk,p.kendaraan_kmp,k.kmp_id,k.kmp_nama,k.kmp_lintasan_id,l.lintasan_id,l.lintasan_nama,p.kendaraan_golongan,p.kendaraan_penumpang_lain FROM tbl_p_kendaraan p, tbl_kmp k, tbl_lintasan l WHERE k.kmp_lintasan_id='$linid' and DATE(tanggal)='$tanggal' and p.kendaraan_kmp = k.kmp_id and k.kmp_lintasan_id = l.lintasan_id ORDER BY tanggal");
		return $hsl;
	}


	function tampil_lintasan(){
		$hsl=$this->db->query("select * from tbl_lintasan order by lintasan_id asc");
		return $hsl;
	}
	function get_bulan_penumpang(){
		$hsl=$this->db->query("SELECT DISTINCT DATE_FORMAT(tanggal,'%M %Y') AS bulan FROM tbl_penumpang");
		return $hsl;
	}
	function get_tahun_penumpang(){
		$hsl=$this->db->query("SELECT DISTINCT YEAR(tanggal) AS tahun FROM tbl_penumpang");
		return $hsl;
	}

}
