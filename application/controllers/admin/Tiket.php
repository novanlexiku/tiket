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
	//Fungsi edit/tambah tiket
	function edit_kmptiket(){
	if($this->session->userdata('user_level')=='1'){
		$kode=$this->input->post('kode');
		$kmp=$this->input->post('kmp');
		$linid=$this->input->post('lintasan');
		$tiketekoaa=$this->input->post('tiketekoaa');
		$tiketekodw=$this->input->post('tiketekodw');
		$tiketbisaa=$this->input->post('tiketbisaa');
		$tiketbisdw=$this->input->post('tiketbisdw');
		$tiketvipaa=$this->input->post('tiketvipaa');
		$tiketvipdw=$this->input->post('tiketvipdw');
		$tiketgol1=$this->input->post('tiketgol1');
		$tiketgol2=$this->input->post('tiketgol2');
		$tiketgol3=$this->input->post('tiketgol3');
		$tiketgol4=$this->input->post('tiketgol4');
		$tiketgol5=$this->input->post('tiketgol5');
		$tiketgol6=$this->input->post('tiketgol6');
		$tiketgol7=$this->input->post('tiketgol7');
		$tiketgol8=$this->input->post('tiketgol8');
		$tiketgol9=$this->input->post('tiketgol9');
		$this->m_kmptiket->update_kmptiket($kode,$kmp,$linid,$tiketekoaa,$tiketekodw,$tiketbisaa,$tiketbisdw,$tiketvipaa,$tiketvipdw,$tiketgol1,$tiketgol2,$tiketgol3,$tiketgol4,$tiketgol5,$tiketgol6,$tiketgol7,$tiketgol8,$tiketgol9);
		echo $this->session->set_flashdata('msg','editkmp');
		redirect('admin/tiket');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	
}
