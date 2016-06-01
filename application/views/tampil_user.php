<?php 
$no = 0;
	$data = array();
	foreach($user as $u){
		if($u->username != $this->session->userdata('nama')){
		$no++; 
			$row_data = array(
				'no' => $no,
				'id' => $u->id,
				'username' => $u->username
			);
		   array_push($data, $row_data);
		}}
echo json_encode(array("result" => $data));
?>