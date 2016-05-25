<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

	function index(){ // Index page.. Login
		$this->load->view('login');
	}
}
?>