<?php
class M_kmptiket extends CI_Model{

	

	function update_kmptiket($kode,$kmp,$linid,$tiket){
		$hsl=$this->db->query("UPDATE tbl_kmp set kmp_nama='$kmp', kmp_lintasan_id='$linid', kmp_tiket='$tiket' where kmp_id='$kode'");
		return $hsl;
	}

	function tampil_kmptiket(){
		$hsl=$this->db->query("select kmp.kmp_id, kmp.kmp_nama, kmp.kmp_lintasan_id, kmp.kmp_tiket, lin.lintasan_id, lin.lintasan_nama from tbl_kmp kmp, tbl_lintasan lin where kmp.kmp_lintasan_id = lin.lintasan_id order by kmp_id asc");
		return $hsl;
	}

	function tampil_lintasan(){
		$hsl=$this->db->query("select * from tbl_lintasan order by lintasan_id asc");
		return $hsl;
	}

}
