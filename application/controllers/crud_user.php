<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_user extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	function index(){ // Load halaman semua user
		$data['user'] = $this->m_data->ambil_dataus()->result(); // meng-generate hasil query menjadi array
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
		$this->m_data->input_dataus($data,'tb_user');
		redirect('crud_user');
	}

	function hapus_user($id){ // Aksi hapus user, $id berguna untuk menangkap data id yang di kirim melalui url
		$where = array('id' => $id);
		$this->m_data->hapus_dataus($where,'tb_user');
		redirect('crud_user');
	}

	function ubah_user($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->ubah_dataus($where,'tb_user')->result(); // meng-generate hasil query menjadi array
		$this->load->view('templates/header');
		$this->load->view('edit_user',$data);
		$this->load->view('templates/footer');
	}

	function ubah_user_aksi(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'username' => $username,
			'password' => $password
			);
		$where = array(
			'id' => $id
			);
		$this->m_data->update_dataus($where,$data,'tb_user');
		redirect('crud_user');
	}
}
?>