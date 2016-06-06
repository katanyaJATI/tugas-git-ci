<?php
class M_data extends CI_Model{

	function ambil_dataus(){ // select table user
		return $this->db->get('tb_user');
	}

	function cek_user($table,$where){
		return $this->db->get_where($table,$where);
	}

	function input_dataus($data,$table){ // Inser data user
		$this->db->insert($table,$data);
	}

	function ubah_dataus($where,$table){ // select table user untuk update
		return $this->db->get_where($table,$where);
	}

	function cek_password($table,$where){
		return $this->db->get_where($table,$where);
	}

	function update_dataus($where,$data,$table){ // update user
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_dataus($where,$table){ // Hapus data user
		$this->db->where($where);
		$this->db->delete($table);
	}

/* ------------------------------  BATAS  ----------------------------------*/

	function ambil_databm(){ // select table bookmark
		return $this->db->get('tb_bookmark');
	}

	function input_databm($data,$table){ // Inser data bookmark
		$this->db->insert($table,$data);
	}

	function ubah_databm($where,$table){ // select table bookmark untuk update
		return $this->db->get_where($table,$where);
	}

	function update_databm($where,$data,$table){ // update bookmark
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_databm($where,$table){ // Hapus data bookmark
		$this->db->where($where);
		$this->db->delete($table);
	}

/* ------------------------------ BATAS --------------------------------- */

	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

}
?>