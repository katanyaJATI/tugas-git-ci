<?php 
$no = 0;
	$data = array();
	foreach($user as $u){
		if($u->username != $this->session->userdata('nama')){
		$no++; 
			$row_data = array(
				'no' => $no,
				'username' => $u->username,
				'id' => "<button class='btn btn-default' data-toggle='modal' data-id='".$u->id."' data-username='".$u->username."' data-target='#ubh'><i class='fa fa-edit'></i> Ubah Modal</button>
				<button class='btn btn-danger' data-toggle='modal' data-id='".$u->id."' data-username='".$u->username."' data-target='#hps'><i class='fa fa-remove'></i> Hapus</button>"
			);
		   array_push($data, $row_data);
		}}
echo json_encode(array("data" => $data));
?>