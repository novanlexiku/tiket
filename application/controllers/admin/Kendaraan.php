<?php
class Kendaraan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_kendaraan');
	}
	function index(){
	if($this->session->userdata('user_level')=='1'|| $this->session->userdata('user_level')=='2'){
		$data['data']=$this->m_kendaraan->tampil_kendaraan();
		$title = array(
      'title' => 'Halaman Kendaraan' ,
	    );
		$this->load->view('nav/header',$title);
		$this->load->view('admin/v_kendaraan',$data);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function tambah_kendaraan(){
	if($this->session->userdata('user_level')=='1'|| $this->session->userdata('user_level')=='2'){
		$ken=$this->input->post('kendaraan');
		$desk=$this->input->post('deskripsi');
		$this->m_kendaraan->simpan_kendaraan($ken,$desk);
		echo $this->session->set_flashdata('msg','tambahkendaraan');
		redirect('admin/kendaraan');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function edit_kendaraan(){
	if($this->session->userdata('user_level')=='1'|| $this->session->userdata('user_level')=='2'){
		$kode=$this->input->post('kode');
		$ken=$this->input->post('kendaraan');
		$desk=$this->input->post('deskripsi');
		$this->m_kendaraan->update_kendaraan($kode,$ken,$desk);
		echo $this->session->set_flashdata('msg','editkendaraan');
		redirect('admin/kendaraan');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function hapus_kendaraan(){
	if($this->session->userdata('user_level')=='1'|| $this->session->userdata('user_level')=='2'){
		$kode=$this->input->post('kode');
		$this->m_kendaraan->hapus_kendaraan($kode);
		echo $this->session->set_flashdata('msg','hapuskendaraan');
		redirect('admin/kendaraan');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
}
