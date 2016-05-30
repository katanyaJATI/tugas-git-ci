<table id="tabel" class="table table-striped ">
	<thead>
    	<tr>
        	<th colspan="4">
        		<a href="<?php echo base_url(); ?>index.php/home/tambah_user" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Tambah User</a>
        	</th>
        </tr>
    	<tr>
        	<th>No</th>
            <th>Username</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php 
		$no = 0;
		foreach($user as $u){
			$no++; 
			if($u->username != $this->session->userdata('nama')){ ?>
    	<tr>
        	<td><?php echo $no; ?></td>
            <td><?php echo $u->username; ?></td>
            <td>
            	<?php echo anchor('home/ubah_user/'.$u->id,'<i class="fa fa-edit"> Ubah</i>', 'class="btn btn-default"'); ?>
            	<?php echo anchor('home/hapus_user/'.$u->id,'<i class="fa fa-trash"> Hapus</i>', 'class="btn btn-danger"'); ?>
            </td>
	    </tr>
	    <?php }} ?>
    </tbody>
    <tfoot>
    	<tr>
	        <th>No</th>
	        <th>Username</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
</table>