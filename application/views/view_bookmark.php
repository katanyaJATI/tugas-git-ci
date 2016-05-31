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
            	<button class="btn btn-danger" data-toggle="modal" data-target="#hps<?php echo $u->id; ?>"><i class="fa fa-remove"></i> Hapus</button>
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


<?php foreach($user as $u){ ?>
  <!-- modal remove class -->
    <div class="modal fade" id="hps<?php echo $u->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Hapus Kelas</h4>
          </div>
          <div class="modal-body">
            <center><p>Apakah Anda Yakin Akan Mengkapus Data Bookmark : <strong><?php echo $u->title; ?></strong> ?</p></center>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            <?php echo anchor('home/hapus_bookmark/'.$u->id,'<i class="fa fa-trash"> Hapus</i>', 'class="btn btn-danger"'); ?>
          </div>
        </div>
      </div>
    </div>
  <!-- /modal remove class -->
<?php } ?>