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
      'title' => 'Halaman Daftar Penumpang' ,
	    );
		$this->load->view('nav/header',$title);
		$this->load->view('admin/v_psn_penumpang',$x);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function tambah_penumpang(){
		if($this->session->userdata('user_level')=='1'|| $this->session->userdata('user_level')=='2'){
			$kode=$this->input->post('kode');
			$nama=$this->input->post('nama');
			$alamat=$this->input->post('alamat');
			$usia=$this->input->post('usia');
			$jk=$this->input->post('jenis_kelamin');
			$tgl=$this->input->post('tgl');
			$jt=$this->input->post('jenis_tiket');
			$kmp=$this->input->post('nama_kapal');
			$passport=$this->input->post('passport');
			if($jt=='Ekonomi Anak'){
				$noseri=$this->m_penumpang->get_serial_eko_anak();
			}
			elseif($jt=='Ekonomi Dewasa'){
				$noseri=$this->m_penumpang->get_serial_eko_dewasa();
			}
			elseif($jt=='Bisnis Anak'){
				$noseri=$this->m_penumpang->get_serial_bis_anak();
			}
			elseif($jt=='Bisnis Dewasa'){
				$noseri=$this->m_penumpang->get_serial_bis_dewasa();
			}
			elseif($jt=='Vip Anak'){
				$noseri=$this->m_penumpang->get_serial_vip_anak();
			}
			elseif($jt=='Vip Dewasa'){
				$noseri=$this->m_penumpang->get_serial_vip_dewasa();
			}
			if($usia>'12'&&$jt=='Ekonomi Dewasa'){
				$jtekodw='1';
			}elseif($usia<'12'&&$jt=='Ekonomi Anak'){
				$jtekoaa='1';
			}elseif($usia>'12'&&$jt=='Bisnis Dewasa'){
				$jtbisdw='1';
			}elseif($usia<'12'&&$jt=='Bisnis Anak'){
				$jtbisaa='1';
			}elseif($usia>'12'&&$jt=='Vip Dewasa'){
				$jtvipdw='1';
			}elseif($usia<'12'&&$jt=='Vip Anak'){
				$jtvipaa='1';
			} 
			$this->m_penumpang->simpan_penumpang($kode,$noseri,$nama,$alamat,$usia,$jk,$tgl,$jt,$kmp,$jtekodw,$jtekoaa,$jtbisdw,$jtbisaa,$jtvipdw,$jtvipaa,$passport);
			 echo $this->session->set_flashdata('msg','tambahpenumpang');
			redirect('penumpang');
		}else{
			echo "Halaman tidak ditemukan";
		}
		}
	
}
