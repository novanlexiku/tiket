<?php
class M_penumpang extends CI_Model{

	function tampil_kmp(){
		$hsl=$this->db->query("select kmp.kmp_id, kmp.kmp_nama, kmp.kmp_lintasan_id, kmp.kmp_tiketekoaa, kmp.kmp_tiketekodw, kmp.kmp_tiketbisaa, kmp.kmp_tiketbisdw, kmp.kmp_tiketvipaa, kmp.kmp_tiketvipdw, kmp.kmp_tiketgol1,
		kmp.kmp_tiketgol2, kmp.kmp_tiketgol3, kmp.kmp_tiketgol4, kmp.kmp_tiketgol5, kmp.kmp_tiketgol6, kmp.kmp_tiketgol7, kmp.kmp_tiketgol8, kmp.kmp_tiketgol9, lin.lintasan_id, lin.lintasan_nama from tbl_kmp kmp, tbl_lintasan lin where kmp.kmp_lintasan_id = lin.lintasan_id order by kmp_id asc");
		return $hsl;
	}

	function tampil_lintasan(){
		$hsl=$this->db->query("select * from tbl_lintasan order by lintasan_id asc");
		return $hsl;
	}

	function simpan_penumpang($kode,$noseri,$nama,$alamat,$usia,$jk,$tgl,$jt,$kmp,$lintasan,$jtekodw,$jtekoaa,$passport){

		$hsl=
		$this->db->trans_start();
		$this->db->query("INSERT INTO tbl_penumpang(penumpang_no_seri,penumpang_nama,penumpang_alamat,penumpang_usia,penumpang_jk,penumpang_kmp_nama,tanggal,penumpang_passport) VALUES ('$noseri','$nama','$alamat','$usia','$jk','$kmp :$lintasan','$tgl','$passport')");
		$this->db->query("update tbl_kmp set kmp_tiketekodw=kmp_tiketekodw-'$jtekodw' where kmp_id='$kode'");
		$this->db->query("update tbl_kmp set kmp_tiketekoaa=kmp_tiketekoaa-'$jtekoaa' where kmp_id='$kode'");
		$this->db->trans_complete(); 
		return $hsl;
	}

	function get_penumpang($noseri){
		$hsl=$this->db->query("SELECT * FROM tbl_penumpang where penumpang_no_seri='$noseri'");
		return $hsl;
	}

	function get_serial(){
		$q = $this->db->query("SELECT MAX(RIGHT(penumpang_no_seri,6)) AS kd_max FROM tbl_penumpang");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "PN".$kd;
	}

}
