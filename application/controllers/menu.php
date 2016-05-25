<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller{

	function __construct(){
		parent::__construct();
		
		if($this->session->userdata('status') != "login"){
			redirect(base_url(""));
		}
	}

	function index(){
		$this->load->view('view_menu');
	}
}
?>