<?php
class P_penumpang extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_penumpang');
	}
	function index(){
	if($this->session->userdata('user_level')=='1'){
		$x = array (
			'data' => $this->m_penumpang->tampil_kmp(),
		  'lintasan'=>    $this->m_penumpang->tampil_lintasan()
		  
		);
		$title = array(
      'title' => 'Halaman Pesan Penumpang' ,
	    );
		$this->load->view('nav/header',$title);
		$this->load->view('admin/v_psn_penumpang',$x);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function tambah_kmp(){
	if($this->session->userdata('user_level')=='1'){
		$kmp=$this->input->post('kmp');
		$linid=$this->input->post('lintasan');
		$tiket="0";
		$this->m_penumpang->simpan_kmp($kmp,$linid,$tiket);
		echo $this->session->set_flashdata('msg','tambahkmp');
		redirect('admin/p_penumpang');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function edit_kmp(){
	if($this->session->userdata('user_level')=='1'){
		$kode=$this->input->post('kode');
		$kmp=$this->input->post('kmp');
		$linid=$this->input->post('lintasan');
		
		$this->m_penumpang->update_kmp($kode,$kmp,$linid);
		echo $this->session->set_flashdata('msg','editkmp');
		redirect('admin/p_penumpang');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function hapus_kmp(){
	if($this->session->userdata('user_level')=='1'){
		$kode=$this->input->post('kode');
		$this->m_penumpang->hapus_kmp($kode);
		echo $this->session->set_flashdata('msg','hapuskmp');
		redirect('admin/p_penumpang');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
}
