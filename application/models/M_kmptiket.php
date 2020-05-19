<?php
class M_kmptiket extends CI_Model{

	
	//Fungsi mengupdate data tiket pada database
	function update_kmptiket($kode,$kmp,$linid,$tiketaa,$tiketdw,$tiketgol1,$tiketgol2,$tiketgol3,$tiketgol4,$tiketgol5,$tiketgol6,$tiketgol7,$tiketgol8,$tiketgol9){
		$hsl=$this->db->query("UPDATE tbl_kmp set kmp_nama='$kmp', kmp_lintasan_id='$linid', kmp_tiketaa='$tiketaa', kmp_tiketdw='$tiketdw',
		kmp_tiketgol1='$tiketgol1', kmp_tiketgol2='$tiketgol2', kmp_tiketgol3='$tiketgol3', kmp_tiketgol4='$tiketgol4', kmp_tiketgol5='$tiketgol5',
		kmp_tiketgol6='$tiketgol6', kmp_tiketgol7='$tiketgol7', kmp_tiketgol8='$tiketgol8', kmp_tiketgol9='$tiketgol9'
		where kmp_id='$kode'");
		return $hsl;
	}
	//Fungsi mengambil data tiket
	function tampil_kmptiket(){
		$hsl=$this->db->query("select kmp.kmp_id, kmp.kmp_nama, kmp.kmp_lintasan_id, kmp.kmp_tiketaa, kmp.kmp_tiketdw, kmp.kmp_tiketgol1,
		kmp.kmp_tiketgol2, kmp.kmp_tiketgol3, kmp.kmp_tiketgol4, kmp.kmp_tiketgol5, kmp.kmp_tiketgol6, kmp.kmp_tiketgol7, kmp.kmp_tiketgol8, kmp.kmp_tiketgol9, lin.lintasan_id, lin.lintasan_nama from tbl_kmp kmp, tbl_lintasan lin where kmp.kmp_lintasan_id = lin.lintasan_id order by kmp_id asc");
		return $hsl;
	}
	//Fungsi mengambil data lintasan
	function tampil_lintasan(){
		$hsl=$this->db->query("select * from tbl_lintasan order by lintasan_id asc");
		return $hsl;
	}

}
