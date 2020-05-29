<?php
class Laporan_penumpang extends CI_Controller{
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
	}
	function index(){
	if($this->session->userdata('user_level')=='1'|| $this->session->userdata('user_level')=='2'){
		$data['data']=$this->m_kmptiket->tampil_kmptiket();
		$data['lintasan']=$this->m_lintasan->tampil_lintasan();
		$title = array(
      'title' => 'Halaman Laporan' ,
	    );
		$this->load->view('nav/header',$title);
		$this->load->view('admin/v_laporanpenumpang',$data);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function lap_stok_tiket(){
		$x['data']=$this->m_laporan->get_stok_tiket();
		$this->load->view('admin/laporan/v_lap_stok_tiket',$x);
	}
	
	function lap_penumpang_pertanggal(){
		$tanggal=$this->input->post('tgl');
		$x['data']=$this->m_laporan->get_data_penumpang_pertanggal($tanggal);
		$this->load->view('admin/laporan/v_lap_penumpang_pertanggal',$x);
	}

	function lap_penumpang_perlintasan(){
		$linid=$this->input->post('lintasan');
		$tanggal=$this->input->post('tgl');
		$x['lintasan']=$this->m_laporan->get_data_penumpang_perlintasan($linid,$tanggal);
		$this->load->view('admin/laporan/v_lap_penumpang_perlintasan',$x);
	}
	// function lap_penjualan_pertahun(){
	// 	$tahun=$this->input->post('thn');
	// 	$x['jml']=$this->m_laporan->get_total_jual_pertahun($tahun);
	// 	$x['data']=$this->m_laporan->get_jual_pertahun($tahun);
	// 	$this->load->view('admin/laporan/v_lap_jual_pertahun',$x);
	// }
	// function lap_laba_rugi(){
	// 	$bulan=$this->input->post('bln');
	// 	$x['jml']=$this->m_laporan->get_total_lap_laba_rugi($bulan);
	// 	$x['data']=$this->m_laporan->get_lap_laba_rugi($bulan);
	// 	$this->load->view('admin/laporan/v_lap_laba_rugi',$x);
	// }
}
