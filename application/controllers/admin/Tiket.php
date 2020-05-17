<?php
class Tiket extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_kmptiket');
	}
	function index(){
	if($this->session->userdata('user_level')=='1'){
		$x = array (
			'data' => $this->m_kmptiket->tampil_kmptiket(),
		  'lintasan'=>    $this->m_kmptiket->tampil_lintasan()
		  
		);
		$title = array(
      'title' => 'Halaman Tiket' ,
	    );
		$this->load->view('nav/header',$title);
		$this->load->view('admin/v_kmptiket',$x);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function edit_kmptiket(){
	if($this->session->userdata('user_level')=='1'){
		$kode=$this->input->post('kode');
		$kmp=$this->input->post('kmp');
		$linid=$this->input->post('lintasan');
		$tiket=$this->input->post('tiket');
		$this->m_kmptiket->update_kmptiket($kode,$kmp,$linid,$tiket);
		echo $this->session->set_flashdata('msg','editkmp');
		redirect('admin/tiket');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	
}
