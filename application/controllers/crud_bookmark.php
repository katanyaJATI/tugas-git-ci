<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_bookmark extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	function index(){ // Load halaman semua bookmark
		$data['user'] = $this->m_data->ambil_databm()->result(); // meng-generate hasil query menjadi array
		$this->load->view('templates/header');
		$this->load->view('view_bookmark',$data);
		$this->load->view('templates/footer');
	}

	function tambah_bookmark(){ // Load halaman tambah bookmark
		$this->load->view('templates/header');
		$this->load->view('input_bookmark');
		$this->load->view('templates/footer');
	}

	function tambah_bookmark_aksi(){ // AKsi tambah bookmark
		$title = $this->input->post('title');
		$url = $this->input->post('url');
		$description = $this->input->post('description');

		$data = array(
			'title' => $title,
			'url' => $url,
			'description' => $description
			);
		$this->m_data->input_databm($data,'tb_bookmark');
		redirect('crud_bookmark');
	}

	function hapus_bookmark($id){ // Aksi hapus bookmark, $id berguna untuk menangkap data id yang di kirim melalui url
		$where = array('id' => $id);
		$this->m_data->hapus_databm($where,'tb_bookmark');
		redirect('crud_bookmark');
	}

	function ubah_bookmark($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->ubah_databm($where,'tb_bookmark')->result(); // meng-generate hasil query menjadi array
		$this->load->view('templates/header');
		$this->load->view('edit_bookmark',$data);
		$this->load->view('templates/footer');
	}

	function ubah_bookmark_aksi(){
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$url = $this->input->post('url');
		$description = $this->input->post('description');

		$data = array(
			'title' => $title,
			'url' => $url,
			'description' => $description
			);
		$where = array(
			'id' => $id
			);
		$this->m_data->update_databm($where,$data,'tb_bookmark');
		redirect('crud_bookmark');
	}
}
?>