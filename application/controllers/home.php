<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

	function index(){ // Index page.. Login
		$this->load->view('login');
	}

	function menu_pilih(){ // Load halaman tambah bookmark
		$this->load->view('templates/header');
		$this->load->view('view_menu');
		$this->load->view('templates/footer');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_data->cek_login("tb_user",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			redirect(base_url("index.php/home/menu_pilih"));
		
		}else{
			echo"<center><h2>Username dan password salah! Harap Periksa <a href='../../'>kembali</a></h2></center>";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url(''));
	}
}
?>