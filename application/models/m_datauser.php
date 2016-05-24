<?php
class M_datauser extends CI_Model{
	function ambil_data(){
		return $this->db->get('tb_user');
	}
}
?>