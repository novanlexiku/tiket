<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Main extends My_Controller {

		protected $access = array('1', '2');
		function __construct(){
			parent::__construct();
			if($this->session->userdata('logged_in') !=TRUE){
	            $url=base_url();
	            redirect($url);
	        };
			
			$this->load->library('datatables');
		}
		public function index()
		{
			if($this->session->userdata('user_level')=='1'|| $this->session->userdata('user_level')=='2'){
				$title = array(
		      'title' => 'Dashboard'
			    );

				$this->load->view('nav/header',$title);
				$this->load->view('admin/v_index');
			}else{
				$this->load->view('admin/v_index');
				}
		}
		
	}

	/* End of file Main.php */
	/* Location: ./application/controllers/Main.php */
