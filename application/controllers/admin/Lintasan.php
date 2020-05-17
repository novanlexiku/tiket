<?php
class Lintasan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_lintasan');
	}
	function index(){
	if($this->session->userdata('user_level')=='1'){
		$data['data']=$this->m_lintasan->tampil_lintasan();
		$title = array(
      'title' => 'Halaman Lintasan' ,
	    );
		$this->load->view('nav/header',$title);
		$this->load->view('admin/v_lintasan',$data);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function tambah_lintasan(){
	if($this->session->userdata('user_level')=='1'){
		$ken=$this->input->post('lintasan');
		$desk=$this->input->post('jarak');
		$this->m_lintasan->simpan_lintasan($ken,$desk);
		echo $this->session->set_flashdata('msg','tambahlintasan');
		redirect('admin/lintasan');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function edit_lintasan(){
	if($this->session->userdata('user_level')=='1'){
		$kode=$this->input->post('kode');
		$ken=$this->input->post('lintasan');
		$desk=$this->input->post('jarak');
		$this->m_lintasan->update_lintasan($kode,$ken,$desk);
		echo $this->session->set_flashdata('msg','editlintasan');
		redirect('admin/lintasan');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function hapus_lintasan(){
	if($this->session->userdata('user_level')=='1'){
		$kode=$this->input->post('kode');
		$this->m_lintasan->hapus_lintasan($kode);
		echo $this->session->set_flashdata('msg','hapuslintasan');
		redirect('admin/lintasan');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
}
