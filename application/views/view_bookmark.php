<table id="tabel" class="table table-striped ">
	<thead>
    	<tr>
        	<th colspan="4">
        		<a href="<?php echo base_url(); ?>index.php/home/tambah_bookmark" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Tambah Bookmark</a>
        		<button class="btn btn-sm btn-default" data-toggle="modal" data-target="#tbh_bookmark"><i class="fa fa-plus"></i> Tambah Bookmark Modal</button>
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


<!-- modal add user -->
<form method="POST" class="bookmark-simpan">
	<div class="modal fade" id="tbh_bookmark" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    	<div class="modal-dialog">
        	<div class="modal-content">
          		<div class="modal-header">
           			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            		<h4 class="modal-title">Tambah Bookmark</h4>
          		</div>
          		<div class="modal-body">
            		<div class="col-md-12 center-margin">
              			<div class="form-group">
                			<label>Title</label>
                			<input type="text" name="title" id="title" class="form-control" maxlength="20" placeholder="Title">
              			</div>
			            <div class="form-group">
			            	<label>Url</label>
			            	<input type="text" name="url" id="url" class="form-control" maxlength="20" placeholder="Url">
			            </div>
			            <div class="form-group">
			            	<label>Deskripsi</label>
			            	<textarea class="form-control" id="description" name="description" placeholder="Deskripsi"></textarea>
			            </div>
            			<div class="form-group">
			                <div class="progress">
								<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"  aria-valuemin="0" aria-valuemax="100" style="width: 0%">
							    </div>
							</div>
              			</div>
					</div>
          		</div>
		        <div class="modal-footer">
		            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
		            <a class="btn btn-primary simpan_data">Tambah!</a>
		        </div>
        	</div>
		</div>
    </div>
</form>
<!-- /modal add user -->

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


<script type="text/javascript">
	
      /* -------- INSERT DATA AJAX JQUERY -------- */
      $(document).ready(function(){
        $(".simpan_data").click(function(){
          var data = $('.bookmark-simpan').serialize();
          $.ajax({
            type: 'POST',
            url: "<?php echo base_url(); ?>index.php/home/tambah_bookmark_aksi",
            data: data,
            beforeSend: function(){
              $('.progress-bar-striped').animate({width:'60%'}, 1500);
            },
            success: function() {
              $('.progress-bar-striped').animate({width:'100%'}, 0);
              setTimeout( function() { 
                $('#tbh_bookmark').modal('hide');
                $('#title, #url, #description').val(''); 
                $('.progress-bar-striped').animate({width:'0%'}, 0);
              }, 1000 );
              $('.tampildata').load("view_user.php");
            }
          });
        });
      });
      /* -------- AKHIR INSERT DATA AJAX JQUERY -------- */
</script>