<?php 
$no = 0;
	$data = array();
	foreach($user as $u){
	$no++; 
		$row_data = array(
			'no' => $no,
			'id' => $u->id,
			'title' => $u->title,
			'url' => $u->url,
			'description' => $u->description
		);
	   array_push($data, $row_data);
	}
echo json_encode(array("result" => $data));
?>