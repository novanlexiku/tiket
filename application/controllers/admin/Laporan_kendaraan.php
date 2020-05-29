<?php
class Laporan_kendaraan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_p_kendaraan');
		$this->load->model('m_kmp');
		$this->load->model('m_kmptiket');
		$this->load->model('m_lintasan');
		$this->load->model('m_p_kendaraan');
		$this->load->model('m_p_kendaraan');
		$this->load->model('m_laporan');
	}
	function index(){
	if($this->session->userdata('user_level')=='1'|| $this->session->userdata('user_level')=='2'){
		$data['data']=$this->m_kmptiket->tampil_kmptiket();
		$data['lintasan']=$this->m_lintasan->tampil_lintasan();
		$title = array(
      'title' => 'Halaman Laporan' ,
	    );
		$this->load->view('nav/header',$title);
		$this->load->view('admin/v_laporankendaraan',$data);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function lap_stok_tiket(){
		$x['data']=$this->m_laporan->get_stok_tiket();
		$this->load->view('admin/laporan/v_lap_stok_tiket_kendaraan',$x);
	}
	
	function lap_kendaraan_pertanggal(){
		$tanggal=$this->input->post('tgl');
		$x['data']=$this->m_laporan->get_data_kendaraan_pertanggal($tanggal);
		$this->load->view('admin/laporan/v_lap_kendaraan_pertanggal',$x);
	}

	function lap_kendaraan_perlintasan(){
		$linid=$this->input->post('lintasan');
		$tanggal=$this->input->post('tgl');
		$x['lintasan']=$this->m_laporan->get_data_kendaraan_perlintasan($linid,$tanggal);
		$this->load->view('admin/laporan/v_lap_kendaraan_perlintasan',$x);
	}
	
}
