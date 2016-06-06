<?php 
$no = 0;
	$data = array();
	foreach($user as $u){
	$no++; 
		$row_data = array(
			'no' => $no,
			'title' => $u->title,
			'url' => "<a href='".$u->url."' target='_blank'>$u->url</a>",
			'description' => $u->description,
			'id' => "<button class='btn btn-default' data-toggle='modal' data-target='#ubh".$u->id."'><i class='fa fa-edit'></i> Ubah Modal</button>
			<button class='btn btn-danger' data-toggle='modal' data-target='#hps".$u->id."'><i class='fa fa-remove'></i> Hapus</button>"
		);
	   array_push($data, $row_data);
	}
echo json_encode(array("data" => $data));
?>