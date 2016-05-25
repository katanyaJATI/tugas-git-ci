<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	function index(){ // Index page.. Login
		$data['nama_web'] = "JanakaJati.com";
		$this->load->view('login', $data);
	}
}
?>