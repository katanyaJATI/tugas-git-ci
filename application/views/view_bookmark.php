<table id="tabel" class="table table-striped ">
	<thead>
    	<tr>
        	<th colspan="4">
        		<a href="<?php echo base_url(); ?>index.php/home/tambah_bookmark" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Tambah Bookmark</a>
        	</th>
        </tr>
    	<tr>
        	<th>No</th>
            <th>Title</th>
            <th>Url</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php 
		$no = 0;
		foreach($user as $u){
			$no++; 
			?>
    	<tr>
        	<td><?php echo $no; ?></td>
            <td><?php echo anchor('home/detail_bookmark/'.$u->id,$u->title);  ?></td>
            <td><?php echo anchor($u->url, $u->url, 'target="_blank"'); ?></td>
            <td>
            	<?php echo anchor('home/ubah_bookmark/'.$u->id,'<i class="fa fa-edit"> Ubah</i>', 'class="btn btn-default"'); ?>
            	<?php echo anchor('home/hapus_bookmark/'.$u->id,'<i class="fa fa-trash"> Hapus</i>', 'class="btn btn-danger"'); ?>
            </td>
	    </tr>
	    <?php } ?>
    </tbody>
    <tfoot>
    	<tr>
	        <th>No</th>
	        <th>Title</th>
            <th>Url</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
</table>