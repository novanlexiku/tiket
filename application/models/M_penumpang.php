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

	function simpan_penumpang($kode,$noseri,$nama,$alamat,$usia,$jk,$tgl,$jt,$kmp,$passport){

		$hsl=
		$this->db->trans_start();
		if($usia>'5'&&$jt=='Ekonomi'){
			$jtekodw='1';
			$jt='Ekonomi Dewasa';
			$this->db->query("update tbl_kmp set kmp_tiketekodw=kmp_tiketekodw-'$jtekodw' where kmp_id='$kode'");
		}elseif($usia<='5'&&$jt=='Ekonomi'){
			$jtekoaa='1';
			$jt='Ekonomi Anak';
			$this->db->query("update tbl_kmp set kmp_tiketekoaa=kmp_tiketekoaa-'$jtekoaa' where kmp_id='$kode'");
		}elseif($usia>'5'&&$jt=='Bisnis'){
			$jtbisdw='1';
			$jt='Bisnis Dewasa';
			$this->db->query("update tbl_kmp set kmp_tiketbisdw=kmp_tiketbisdw-'$jtbisdw' where kmp_id='$kode'");
		}elseif($usia<='5'&&$jt=='Bisnis'){
			$jtbisaa='1';
			$jt='Bisnis Anak';
			$this->db->query("update tbl_kmp set kmp_tiketbisaa=kmp_tiketbisaa-'$jtbisaa' where kmp_id='$kode'");
		}elseif($usia>'5'&&$jt=='Vip'){
			$jtvipdw='1';
			$jt='Eksekutif Dewasa';
			$this->db->query("update tbl_kmp set kmp_tiketvipdw=kmp_tiketvipdw-'$jtvipdw' where kmp_id='$kode'");
		}elseif($usia<='5'&&$jt=='Vip'){
			$jtvipaa='1';
			$jt='Eksekutif Anak';
			$this->db->query("update tbl_kmp set kmp_tiketvipaa=kmp_tiketvipaa-'$jtvipaa' where kmp_id='$kode'");
		}
		$this->db->query("INSERT INTO tbl_penumpang(penumpang_tiket_seri,penumpang_nama,penumpang_alamat,penumpang_usia,penumpang_jk,penumpang_kmp,penumpang_tiket,tanggal,penumpang_passport) VALUES ('$noseri','$nama','$alamat','$usia','$jk','$kmp','$jt','$tgl','$passport')");
		$this->db->trans_complete(); 
		return $hsl;
	}

	function get_penumpang($noseri){
		$hsl=$this->db->query("SELECT * FROM tbl_penumpang where penumpang_tiket_seri='$noseri'");
		return $hsl;
	}
 
	function get_serial_eko_anak(){
		$q = $this->db->query("SELECT MAX(RIGHT(penumpang_tiket_seri,6)) AS kd_max FROM tbl_penumpang");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "PNEA".$kd;
	}
	function get_serial_eko_dewasa(){
		$q = $this->db->query("SELECT MAX(RIGHT(penumpang_tiket_seri,6)) AS kd_max FROM tbl_penumpang");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "PNED".$kd;
	}
	function get_serial_bis_anak(){
		$q = $this->db->query("SELECT MAX(RIGHT(penumpang_tiket_seri,6)) AS kd_max FROM tbl_penumpang");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "PNBA".$kd;
	}
	function get_serial_bis_dewasa(){
		$q = $this->db->query("SELECT MAX(RIGHT(penumpang_tiket_seri,6)) AS kd_max FROM tbl_penumpang");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "PNBD".$kd;
	}
	function get_serial_vip_anak(){
		$q = $this->db->query("SELECT MAX(RIGHT(penumpang_tiket_seri,6)) AS kd_max FROM tbl_penumpang");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "PNVA".$kd;
	}
	function get_serial_vip_dewasa(){
		$q = $this->db->query("SELECT MAX(RIGHT(penumpang_tiket_seri,6)) AS kd_max FROM tbl_penumpang");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "PNVD".$kd;
	}

}
