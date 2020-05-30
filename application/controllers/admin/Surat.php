<?php
class Surat extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_kendaraan');
		$this->load->model('m_kmp');
		$this->load->model('m_kmptiket');
		$this->load->model('m_lintasan');
		$this->load->model('m_p_kendaraan');
		$this->load->model('m_penumpang');
		$this->load->model('m_laporan');
		$this->load->model('m_surat');
	}
	function index(){
	if($this->session->userdata('user_level')=='1'|| $this->session->userdata('user_level')=='2'){
		$data['data']=$this->m_kmptiket->tampil_kmptiket();
		$data['lintasan']=$this->m_lintasan->tampil_lintasan();
		$title = array(
      'title' => 'Halaman Surat' ,
	    );
		$this->load->view('nav/header',$title);
		$this->load->view('admin/v_surat',$data);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	
	function surat_jalan(){
		$linid=$this->input->post('lintasan');
		$tanggal=$this->input->post('tgl');
		$petugas=$this->input->post('nama_petugas');
		$nahkoda=$this->input->post('nama_nahkoda');
		$manager=$this->input->post('nama_manager');
		$syahbandar=$this->input->post('nama_syahbandar');

		$x = array(
			'lintasan' => $this->m_laporan->get_data_penumpang_perlintasan($linid,$tanggal),
			'dewasa' => $this->m_surat->get_total_dewasa($linid,$tanggal),
			'anak' => $this->m_surat->get_total_anak($linid,$tanggal),
			'gol1' => $this->m_surat->get_total_gol1($linid,$tanggal),
			'gol2' => $this->m_surat->get_total_gol2($linid,$tanggal),
			'gol3' => $this->m_surat->get_total_gol3($linid,$tanggal),
			'gol4' => $this->m_surat->get_total_gol4($linid,$tanggal),
			'gol5' => $this->m_surat->get_total_gol5($linid,$tanggal),
			'gol6' => $this->m_surat->get_total_gol6($linid,$tanggal),
			'gol7' => $this->m_surat->get_total_gol7($linid,$tanggal),
			'gol8' => $this->m_surat->get_total_gol8($linid,$tanggal),
			'gol9' => $this->m_surat->get_total_gol9($linid,$tanggal),
			'surat' => $this->m_surat->tampil_surat($tanggal)
		);
		
		$this->m_surat->simpan_surat($petugas,$nahkoda,$manager,$syahbandar);
		$this->load->view('admin/surat/v_surat_jalan',$x);
	}
	 
}
