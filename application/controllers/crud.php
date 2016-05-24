<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_datauser');
	}

	function index(){
		$data['nama_web'] = "JanakaJati.com";
		$this->load->view('login', $data);
	}

	function user(){ // Load halaman semua user
		$data['user'] = $this->m_datauser->ambil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('view_user',$data);
		$this->load->view('templates/footer');
	}

	function tambah_user(){ // Load halaman tambah user
		$this->load->view('templates/header');
		$this->load->view('input_user');
		$this->load->view('templates/footer');
	}

	function tambah_user_aksi(){ // AKsi tambah user
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'username' => $username,
			'password' => $password
			);
	}
}
?>