<?php
class P_kendaraan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_p_kendaraan');
	}
	function index(){
	if($this->session->userdata('user_level')=='1'|| $this->session->userdata('user_level')=='2'){
		$x = array (
			'data' => $this->m_p_kendaraan->tampil_kmp(),
		  'lintasan'=>    $this->m_p_kendaraan->tampil_lintasan()
		  
		);
		$title = array(
      'title' => 'Halaman Daftar Kendaraan' ,
	    );
		$this->load->view('nav/header',$title);
		$this->load->view('admin/v_psn_kendaraan',$x);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function tambah_kendaraan(){
		if($this->session->userdata('user_level')=='1'|| $this->session->userdata('user_level')=='2'){
			$kode=$this->input->post('kode');
			$nama=$this->input->post('nama');
			$alamat=$this->input->post('alamat');
			$plat=$this->input->post('plat');
			$usia=$this->input->post('usia');
			$jk=$this->input->post('jenis_kelamin');
			$tgl=$this->input->post('tgl');
			$jg=$this->input->post('jenis_gol');
			$kmp=$this->input->post('nama_kapal');
			$pl=$this->input->post('penumpang_lain');
			if($jg=='Gol.1'){
				$noseri=$this->m_p_kendaraan->get_serial_gol1();
			}
			elseif($jg=='Gol.2'){
				$noseri=$this->m_p_kendaraan->get_serial_gol2();
			}
			elseif($jg=='Gol.3'){
				$noseri=$this->m_p_kendaraan->get_serial_gol3();
			}
			elseif($jg=='Gol.4'){
				$noseri=$this->m_p_kendaraan->get_serial_gol4();
			}
			elseif($jg=='Gol.5'){
				$noseri=$this->m_p_kendaraan->get_serial_gol5();
			}
			elseif($jg=='Gol.6'){
				$noseri=$this->m_p_kendaraan->get_serial_gol6();
			}
			elseif($jg=='Gol.7'){
				$noseri=$this->m_p_kendaraan->get_serial_gol7();
			}
			elseif($jg=='Gol.8'){
				$noseri=$this->m_p_kendaraan->get_serial_gol8();
			}
			elseif($jg=='Gol.9'){
				$noseri=$this->m_p_kendaraan->get_serial_gol9();
			}
			
			
			$this->m_p_kendaraan->simpan_kendaraan($kode,$noseri,$nama,$alamat,$plat,$usia,$jk,$tgl,$jg,$kmp,$pl);
			echo $this->session->set_flashdata('msg','tambahkendaraan');
			redirect('p_kendaraan');
		}else{
			echo "Halaman tidak ditemukan";
		}
		}
	
}
