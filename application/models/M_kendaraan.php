<?php
class M_kendaraan extends CI_Model{

	function hapus_kendaraan($kode){
		$hsl=$this->db->query("DELETE FROM tbl_kendaraan where kendaraan_id='$kode'");
		return $hsl;
	}

	function update_kendaraan($kode,$ken,$desk){
		$hsl=$this->db->query("UPDATE tbl_kendaraan set kendaraan_nama='$ken', kendaraan_desk='$desk' where kendaraan_id='$kode'");
		return $hsl;
	}

	function tampil_kendaraan(){
		$hsl=$this->db->query("select * from tbl_kendaraan order by kendaraan_id asc");
		return $hsl;
	}

	function simpan_kendaraan($ken,$desk){
		$hsl=$this->db->query("INSERT INTO tbl_kendaraan(kendaraan_nama,kendaraan_desk) VALUES ('$ken','$desk')");
		return $hsl;
	}

}
