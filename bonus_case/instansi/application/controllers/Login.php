<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('MLogin');
		$this->load->helper(['url_helper', 'form']);
    	// $this->load->library(['session']);	

	}

	function index(){
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'nama' => $username,
			'pass' => $password
			);
		$cek = $this->MLogin->cek_login("user",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "Admin"
				);

			$this->session->set_userdata($data_session);

			redirect('/Home/lihatdata');

		}else{
			redirect('/Login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('/Login');
	}
}