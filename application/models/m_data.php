<?php
class M_data extends CI_Model{
	function ambil_dataus(){
		return $this->db->get('tb_user');
	}

	function input_dataus($data,$table){ // Inser data user
		$this->db->insert($table,$data);
	}

	function ubah_dataus($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_dataus($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_dataus($where,$table){ // Hapus data user
		$this->db->where($where);
		$this->db->delete($table);
	}
}
?>