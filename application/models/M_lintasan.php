<?php
class M_lintasan extends CI_Model{

	function hapus_lintasan($kode){
		$hsl=$this->db->query("DELETE FROM tbl_lintasan where lintasan_id='$kode'");
		return $hsl;
	}

	function update_lintasan($kode,$ken,$jrk){
		$hsl=$this->db->query("UPDATE tbl_lintasan set lintasan_nama='$ken', lintasan_jrk='$jrk' where lintasan_id='$kode'");
		return $hsl;
	}

	function tampil_lintasan(){
		$hsl=$this->db->query("select * from tbl_lintasan order by lintasan_id asc");
		return $hsl;
	}

	function simpan_lintasan($ken,$jrk){
		$hsl=$this->db->query("INSERT INTO tbl_lintasan(lintasan_nama,lintasan_jrk) VALUES ('$ken','$jrk')");
		return $hsl;
	}

}
