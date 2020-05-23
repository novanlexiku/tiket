<?php
class M_kmp extends CI_Model{

	function hapus_kmp($kode){
		$hsl=$this->db->query("DELETE FROM tbl_kmp where kmp_id='$kode'");
		return $hsl;
	}

	function update_kmp($kode,$kmp,$linid){
		$hsl=$this->db->query("UPDATE tbl_kmp set kmp_nama='$kmp', kmp_lintasan_id='$linid'
		where kmp_id='$kode'");
		return $hsl;
	}

	function tampil_kmp(){
		$hsl=$this->db->query("select kmp.kmp_id, kmp.kmp_nama, kmp.kmp_lintasan_id, lin.lintasan_id, lin.lintasan_nama from tbl_kmp kmp, tbl_lintasan lin where kmp.kmp_lintasan_id = lin.lintasan_id order by kmp_id asc");
		return $hsl;
	}

	function tampil_lintasan(){
		$hsl=$this->db->query("select * from tbl_lintasan order by lintasan_id asc");
		return $hsl;
	}

	function simpan_kmp($kmp,$linid,$tiket){
		$hsl=$this->db->query("INSERT INTO tbl_kmp(kmp_nama,kmp_lintasan_id) VALUES ('$kmp','$linid')");
		return $hsl;
	}

}
