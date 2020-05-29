<?php
class Kmp extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_kmp');
	}
	function index(){
	if($this->session->userdata('user_level')=='1'|| $this->session->userdata('user_level')=='2'){
		$x = array (
			'data' => $this->m_kmp->tampil_kmp(),
		  'lintasan'=>    $this->m_kmp->tampil_lintasan()
		  
		);
		$title = array(
      'title' => 'Halaman Kmp' ,
	    );
		$this->load->view('nav/header',$title);
		$this->load->view('admin/v_kmp',$x);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function tambah_kmp(){
	if($this->session->userdata('user_level')=='1'|| $this->session->userdata('user_level')=='2'){
		$kmp=$this->input->post('kmp');
		$linid=$this->input->post('lintasan');
		$tiket="0";
		$this->m_kmp->simpan_kmp($kmp,$linid,$tiket);
		echo $this->session->set_flashdata('msg','tambahkmp');
		redirect('admin/kmp');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function edit_kmp(){
	if($this->session->userdata('user_level')=='1'|| $this->session->userdata('user_level')=='2'){
		$kode=$this->input->post('kode');
		$kmp=$this->input->post('kmp');
		$linid=$this->input->post('lintasan');
		
		$this->m_kmp->update_kmp($kode,$kmp,$linid);
		echo $this->session->set_flashdata('msg','editkmp');
		redirect('admin/kmp');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function hapus_kmp(){
	if($this->session->userdata('user_level')=='1'|| $this->session->userdata('user_level')=='2'){
		$kode=$this->input->post('kode');
		$this->m_kmp->hapus_kmp($kode);
		echo $this->session->set_flashdata('msg','hapuskmp');
		redirect('admin/kmp');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
}
