<?php
class M_p_kendaraan extends CI_Model{

	function tampil_kmp(){
		$hsl=$this->db->query("select kmp.kmp_id, kmp.kmp_nama, kmp.kmp_lintasan_id, kmp.kmp_tiketekoaa, kmp.kmp_tiketekodw, kmp.kmp_tiketbisaa, kmp.kmp_tiketbisdw, kmp.kmp_tiketvipaa, kmp.kmp_tiketvipdw, kmp.kmp_tiketgol1,
		kmp.kmp_tiketgol2, kmp.kmp_tiketgol3, kmp.kmp_tiketgol4, kmp.kmp_tiketgol5, kmp.kmp_tiketgol6, kmp.kmp_tiketgol7, kmp.kmp_tiketgol8, kmp.kmp_tiketgol9, lin.lintasan_id, lin.lintasan_nama from tbl_kmp kmp, tbl_lintasan lin where kmp.kmp_lintasan_id = lin.lintasan_id order by kmp_id asc");
		return $hsl;
	}

	function tampil_lintasan(){
		$hsl=$this->db->query("select * from tbl_lintasan order by lintasan_id asc");
		return $hsl;
	}

	function simpan_kendaraan($kode,$noseri,$nama,$alamat,$plat,$usia,$jk,$tgl,$jg,$kmp,$lintasan,$pl,$gol1,$gol2,$gol3,$gol4,$gol5,$gol6,$gol7){

		$hsl=
		$this->db->trans_begin();
		$this->db->trans_strict(FALSE);
		$this->db->query("INSERT INTO tbl_p_kendaraan(kendaraan_tiket_seri,kendaraan_nama_pengemudi,kendaraan_plat_no,kendaraan_alamat,kendaraan_usia,kendaraan_jk,kendaraan_kmp_nama,kendaraan_golongan,tanggal,kendaraan_penumpang_lain) VALUES ('$noseri','$nama','$plat','$alamat','$usia','$jk','$kmp :$lintasan','$jg','$tgl','$pl')");
		$this->db->query("update tbl_kmp set kmp_tiketgol1=kmp_tiketgol1-'$gol1',kmp_tiketgol2=kmp_tiketgol2-'$gol2',kmp_tiketgol3=kmp_tiketgol3-'$gol3',kmp_tiketgol4=kmp_tiketgol4-'$gol4',kmp_tiketgol5=kmp_tiketgol5-'$gol5',kmp_tiketgol6=kmp_tiketgol6-'$gol6',kmp_tiketgol7=kmp_tiketgol7-'$gol7' where kmp_id='$kode'");
		// , kmp_tiketgol8=kmp_tiketgol8-'$gol8'
		// $this->db->query("update tbl_kmp set kmp_tiketgol9=kmp_tiketgol9-'$gol9' where kmp_id='$kode'");

		$this->db->trans_complete(); 
		return $hsl;
	}

	

	function get_kendaraan($noseri){
		$hsl=$this->db->query("SELECT * FROM tbl_p_kendaraan where kendaraan_tiket_seri='$noseri'");
		return $hsl;
	}

	function get_serial_gol1(){
		$q = $this->db->query("SELECT MAX(RIGHT(kendaraan_tiket_seri,6)) AS kd_max FROM tbl_p_kendaraan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "KGL1".$kd;
	}
	function get_serial_gol2(){
		$q = $this->db->query("SELECT MAX(RIGHT(kendaraan_tiket_seri,6)) AS kd_max FROM tbl_p_kendaraan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "KGL2".$kd;
	}
	function get_serial_gol3(){
		$q = $this->db->query("SELECT MAX(RIGHT(kendaraan_tiket_seri,6)) AS kd_max FROM tbl_p_kendaraan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "KGL3".$kd;
	}
	function get_serial_gol4(){
		$q = $this->db->query("SELECT MAX(RIGHT(kendaraan_tiket_seri,6)) AS kd_max FROM tbl_p_kendaraan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "KGL4".$kd;
	}
	function get_serial_gol5(){
		$q = $this->db->query("SELECT MAX(RIGHT(kendaraan_tiket_seri,6)) AS kd_max FROM tbl_p_kendaraan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "KGL5".$kd;
	}
	function get_serial_gol6(){
		$q = $this->db->query("SELECT MAX(RIGHT(kendaraan_tiket_seri,6)) AS kd_max FROM tbl_p_kendaraan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "KGL6".$kd;
	}
	function get_serial_gol7(){
		$q = $this->db->query("SELECT MAX(RIGHT(kendaraan_tiket_seri,6)) AS kd_max FROM tbl_p_kendaraan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "KGL7".$kd;
	}
	function get_serial_gol8(){
		$q = $this->db->query("SELECT MAX(RIGHT(kendaraan_tiket_seri,6)) AS kd_max FROM tbl_p_kendaraan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "KGL8".$kd;
	}
	function get_serial_gol9(){
		$q = $this->db->query("SELECT MAX(RIGHT(kendaraan_tiket_seri,6)) AS kd_max FROM tbl_p_kendaraan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "KGL9".$kd;
	}

}
