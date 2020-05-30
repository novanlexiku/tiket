<?php
class M_surat extends CI_Model{
	
	function get_data_penumpang_perlintasan($linid,$tanggal){
		$hsl=$this->db->query("SELECT p.penumpang_tiket_seri,DATE_FORMAT(tanggal,'%d %M %Y') AS tanggal,p.penumpang_tiket_seri,p.penumpang_nama,p.penumpang_alamat,p.penumpang_usia,p.penumpang_jk,p.penumpang_kmp,k.kmp_id,k.kmp_nama,k.kmp_lintasan_id,l.lintasan_id,l.lintasan_nama,p.penumpang_tiket,p.penumpang_passport FROM tbl_penumpang p, tbl_kmp k, tbl_lintasan l WHERE k.kmp_lintasan_id='$linid' and DATE(tanggal)='$tanggal' and p.penumpang_kmp = k.kmp_id and k.kmp_lintasan_id = l.lintasan_id ORDER BY tanggal");
		return $hsl;
	}
	function simpan_surat($petugas,$nahkoda,$manager,$syahbandar){
		date_default_timezone_set('Asia/Jakarta');
		$now = date('Y-m-d H:i:s');
		$hsl=$this->db->query("INSERT INTO tbl_surat(surat_petugas,surat_nahkoda,surat_manager,surat_syahbandar,tanggal) VALUES ('$petugas','$nahkoda','$manager','$syahbandar','$now')");
		return $hsl;
	}
	function tampil_surat($tanggal){
		$hsl=$this->db->query("SELECT * FROM tbl_surat WHERE DATE(tanggal)='$tanggal'");
		return $hsl;
	}

	function get_total_dewasa($linid,$tanggal){
		$this->db->select('*');
		$this->db->from('tbl_penumpang');
		$this->db->where('penumpang_usia >',13);
		$this->db->where('tanggal=',$tanggal);
		$this->db->select('kmp_id,kmp_lintasan_id');
        $this->db->join('tbl_kmp', 'penumpang_kmp=kmp_id');
		$this->db->where('kmp_lintasan_id=',$linid);
		return $this->db->count_all_results();
	}
	function get_total_anak($linid,$tanggal){
		$this->db->select('*');
		$this->db->from('tbl_penumpang');
		$this->db->where('penumpang_usia <',13);
		$this->db->where('tanggal=',$tanggal);
		$this->db->select('kmp_id,kmp_lintasan_id');
        $this->db->join('tbl_kmp', 'penumpang_kmp=kmp_id');
		$this->db->where('kmp_lintasan_id=',$linid);
		return $this->db->count_all_results();
	}
	function get_total_gol1($linid,$tanggal){
		$this->db->select('*');
		$this->db->from('tbl_p_kendaraan');
		$this->db->where('kendaraan_golongan=',1);
		$this->db->where('tanggal=',$tanggal);
		$this->db->select('kmp_id,kmp_lintasan_id');
        $this->db->join('tbl_kmp', 'kendaraan_kmp=kmp_id');
		$this->db->where('kmp_lintasan_id=',$linid);
		return $this->db->count_all_results();
	}
	function get_total_gol2($linid,$tanggal){
		$this->db->select('*');
		$this->db->from('tbl_p_kendaraan');
		$this->db->where('kendaraan_golongan=',2);
		$this->db->where('tanggal=',$tanggal);
		$this->db->select('kmp_id,kmp_lintasan_id');
        $this->db->join('tbl_kmp', 'kendaraan_kmp=kmp_id');
		$this->db->where('kmp_lintasan_id=',$linid);
		return $this->db->count_all_results();
	}
	function get_total_gol3($linid,$tanggal){
		$this->db->select('*');
		$this->db->from('tbl_p_kendaraan');
		$this->db->where('kendaraan_golongan=',3);
		$this->db->where('tanggal=',$tanggal);
		$this->db->select('kmp_id,kmp_lintasan_id');
        $this->db->join('tbl_kmp', 'kendaraan_kmp=kmp_id');
		$this->db->where('kmp_lintasan_id=',$linid);
		return $this->db->count_all_results();
	}
	function get_total_gol4($linid,$tanggal){
		$this->db->select('*');
		$this->db->from('tbl_p_kendaraan');
		$this->db->where('kendaraan_golongan=',4);
		$this->db->where('tanggal=',$tanggal);
		$this->db->select('kmp_id,kmp_lintasan_id');
        $this->db->join('tbl_kmp', 'kendaraan_kmp=kmp_id');
		$this->db->where('kmp_lintasan_id=',$linid);
		return $this->db->count_all_results();
	}
	function get_total_gol5($linid,$tanggal){
		$this->db->select('*');
		$this->db->from('tbl_p_kendaraan');
		$this->db->where('kendaraan_golongan=',5);
		$this->db->where('tanggal=',$tanggal);
		$this->db->select('kmp_id,kmp_lintasan_id');
        $this->db->join('tbl_kmp', 'kendaraan_kmp=kmp_id');
		$this->db->where('kmp_lintasan_id=',$linid);
		return $this->db->count_all_results();
	}
	function get_total_gol6($linid,$tanggal){
		$this->db->select('*');
		$this->db->from('tbl_p_kendaraan');
		$this->db->where('kendaraan_golongan=',6);
		$this->db->where('tanggal=',$tanggal);
		$this->db->select('kmp_id,kmp_lintasan_id');
        $this->db->join('tbl_kmp', 'kendaraan_kmp=kmp_id');
		$this->db->where('kmp_lintasan_id=',$linid);
		return $this->db->count_all_results();
	}
	function get_total_gol7($linid,$tanggal){
		$this->db->select('*');
		$this->db->from('tbl_p_kendaraan');
		$this->db->where('kendaraan_golongan=',7);
		$this->db->where('tanggal=',$tanggal);
		$this->db->select('kmp_id,kmp_lintasan_id');
        $this->db->join('tbl_kmp', 'kendaraan_kmp=kmp_id');
		$this->db->where('kmp_lintasan_id=',$linid);
		return $this->db->count_all_results();
	}
	function get_total_gol8($linid,$tanggal){
		$this->db->select('*');
		$this->db->from('tbl_p_kendaraan');
		$this->db->where('kendaraan_golongan=',8);
		$this->db->where('tanggal=',$tanggal);
		$this->db->select('kmp_id,kmp_lintasan_id');
        $this->db->join('tbl_kmp', 'kendaraan_kmp=kmp_id');
		$this->db->where('kmp_lintasan_id=',$linid);
		return $this->db->count_all_results();
	}
	function get_total_gol9($linid,$tanggal){
		$this->db->select('*');
		$this->db->from('tbl_p_kendaraan');
		$this->db->where('kendaraan_golongan=',9);
		$this->db->where('tanggal=',$tanggal);
		$this->db->select('kmp_id,kmp_lintasan_id');
        $this->db->join('tbl_kmp', 'kendaraan_kmp=kmp_id');
		$this->db->where('kmp_lintasan_id=',$linid);
		return $this->db->count_all_results();
	}


}
