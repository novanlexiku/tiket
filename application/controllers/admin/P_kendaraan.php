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
	if($this->session->userdata('user_level')=='1'){
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
			$lintasan=$this->input->post('lintasan');
			$pl=$this->input->post('penumpang_lain');
			if($jg=='Gol.I'){
				$noseri=$this->m_p_kendaraan->get_serial_gol1();
				$gol1=='1';
			}
			elseif($jg=='Gol.II'){
				$noseri=$this->m_p_kendaraan->get_serial_gol2();
				$gol2=='1';
			}
			elseif($jg=='Gol.III'){
				$noseri=$this->m_p_kendaraan->get_serial_gol3();
				$gol3=='1';
			}
			elseif($jg=='Gol.IV'){
				$noseri=$this->m_p_kendaraan->get_serial_gol4();
				$gol4=='1';
			}
			elseif($jg=='Gol.V'){
				$noseri=$this->m_p_kendaraan->get_serial_gol5();
				$gol5=='1';
			}
			elseif($jg=='Gol.VI'){
				$noseri=$this->m_p_kendaraan->get_serial_gol6();
				$gol6=='1';
			}
			elseif($jg=='Gol.VII'){
				$noseri=$this->m_p_kendaraan->get_serial_gol7();
				$gol7=='1';
			}
			elseif($jg=='Gol.VIII'){
				$noseri=$this->m_p_kendaraan->get_serial_gol8();
				$gol8=='1';
			}
			elseif($jg=='Gol.IX'){
				$noseri=$this->m_p_kendaraan->get_serial_gol9();
				$gol9=='1';
			}
			
			$this->m_p_kendaraan->simpan_kendaraan($kode,$noseri,$nama,$alamat,$plat,$usia,$jk,$tgl,$jg,$kmp,$lintasan,$gol1,$gol2,$gol3,$gol4,$gol5,$gol6,$gol7,$gol8,$gol9,$pl);
			 echo $this->session->set_flashdata('msg','tambahkendaraan');
			redirect('p_kendaraan');
		}else{
			echo "Halaman tidak ditemukan";
		}
		}
	
}
