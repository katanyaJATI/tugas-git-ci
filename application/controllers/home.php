<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');

		if($this->session->userdata('status') != "login"){
			redirect(base_url(""));
		}

	}

	function index(){ // Load halaman tambah bookmark
		$this->load->view('templates/header');
		$this->load->view('view_menu');
		$this->load->view('body_menu');
		$this->load->view('templates/footer');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url(''));
	}

/* --------------------------- BATAS --------------------- */

	function lihat_bookmark(){ // Load halaman semua bookmark
		$data['user'] = $this->m_data->ambil_databm()->result(); // meng-generate hasil query menjadi array
		$this->load->view('templates/header');
		$this->load->view('view_menu');
		$this->load->view('view_bookmark',$data);
		$this->load->view('templates/footer');
	}

	function detail_bookmark($id){ // Load halaman semua bookmark
		$where = array('id' => $id);
		$data['user'] = $this->m_data->ubah_databm($where,'tb_bookmark')->result(); // meng-generate hasil query menjadi array
		$this->load->view('templates/header');
		$this->load->view('view_menu');
		$this->load->view('view_detail_bookmark',$data);
		$this->load->view('templates/footer');
	}

	function tambah_bookmark(){ // Load halaman tambah bookmark
		$this->load->view('templates/header');
		$this->load->view('view_menu');
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
			'description' => nl2br($description)
			);
		$this->m_data->input_databm($data,'tb_bookmark');
		echo"<script>alert('Data Berhasil Ditambah!');window.location='../home/lihat_bookmark'</script>";
		
	}

	function hapus_bookmark($id){ // Aksi hapus bookmark, $id berguna untuk menangkap data id yang di kirim melalui url
		$where = array('id' => $id);
		$this->m_data->hapus_databm($where,'tb_bookmark');
		echo"<script>alert('Data Berhasil Dihapus!');window.location='../lihat_bookmark'</script>";
		//redirect('home/lihat_bookmark');
	}

	function ubah_bookmark($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->ubah_databm($where,'tb_bookmark')->result(); // meng-generate hasil query menjadi array
		$this->load->view('templates/header');
		$this->load->view('view_menu');
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
			'description' => nl2br($description)
			);
		$where = array(
			'id' => $id
			);
		$this->m_data->update_databm($where,$data,'tb_bookmark');
		echo"<script>alert('Data Berhasil Dirubah!');window.location='../home/lihat_bookmark'</script>";
		//redirect('home/lihat_bookmark');
	}

/* ------------------------- BATAS ---------------- */

	function lihat_user(){ // Load halaman semua user
		$data['user'] = $this->m_data->ambil_dataus()->result(); // meng-generate hasil query menjadi array
		$this->load->view('templates/header');
		$this->load->view('view_menu');
		$this->load->view('view_user',$data);
		$this->load->view('templates/footer');
	}

	function tambah_user(){ // Load halaman tambah user
		$this->load->view('templates/header');
		$this->load->view('view_menu');
		$this->load->view('input_user');
		$this->load->view('templates/footer');
	}

	function tambah_user_aksi(){ // AKsi tambah user
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'username' => $username,
			'password' => md5($password)
			);
		$this->m_data->input_dataus($data,'tb_user');
		echo"<script>alert('Data Berhasil Ditambah!');window.location='../home/lihat_user'</script>";
		//redirect('home/lihat_user');
	}

	function hapus_user($id){ // Aksi hapus user, $id berguna untuk menangkap data id yang di kirim melalui url
		$where = array('id' => $id);
		$this->m_data->hapus_dataus($where,'tb_user');
		echo"<script>alert('Data Berhasil Dihapus!');window.location='../lihat_user'</script>";
		//redirect('home/lihat_user');
	}

	function ubah_user($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->ubah_dataus($where,'tb_user')->result(); // meng-generate hasil query menjadi array
		$this->load->view('templates/header');
		$this->load->view('view_menu');
		$this->load->view('edit_user',$data);
		$this->load->view('templates/footer');
	}

	function ubah_user_aksi(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password_lm = $this->input->post('password_lm');
		$password = $this->input->post('password');

		$data = array(
			'username' => $username,
			'password' => md5($password)
			);
		$where = array(
			'id' => $id,
			'password' => md5($password_lm)
			);

		$cek_pw = $this->m_data->cek_password("tb_user",$where)->num_rows(); // Cek Password lama

		if($cek_pw > 0){
		$this->m_data->update_dataus($where,$data,'tb_user');
		echo"<script>alert('Data Berhasil Dirubah!');window.location='../home/lihat_user'</script>";
		//redirect('home/lihat_user');
		
		}else{
		echo"<script>alert('Password yang anda masukkan salah!');window.history.back();</script>";
		}

	}

}
?>