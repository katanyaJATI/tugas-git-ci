<table id="tabel_bookmark" class="table table-striped ">
	<thead>
    	<tr>
        	<th colspan="4">
        		<a href="<?php echo base_url(); ?>index.php/home/tambah_bookmark" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Tambah Bookmark</a>
        		<button class="btn btn-sm btn-default" data-toggle="modal" data-target="#tbh_bookmark"><i class="fa fa-plus"></i> Tambah Bookmark Modal</button>
        		<a class="btn btn-sm btn-default refresh"><i class="fa fa-refresh"></i> REFRESH</a>
        	</th>
        </tr>
    	<tr>
        	<th>No</th>
            <th>Title</th>
            <th>Url</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tfoot>
    	<tr>
	        <th>No</th>
	        <th>Title</th>
            <th>Url</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
</table>


<!-- modal add bookmark -->
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
                			<input type="text" name="title" id="title" class="form-control" placeholder="Title">
              			</div>
			            <div class="form-group">
			            	<label>Url</label>
			            	<input type="text" name="url" id="url" class="form-control" placeholder="Url">
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
		            <button class="btn btn-primary simpan_data">Tambah!</button>
		        </div>
        	</div>
		</div>
    </div>
</form>
<!-- /modal add bookmark -->


<!-- modal edit bookmark -->
<form method="POST" class="bookmark-ubah">
    <div class="modal fade" id="ubh" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    	<div class="modal-dialog">
        	<div class="modal-content">
	        	<div class="modal-header">
	            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            		<h4 class="modal-title">Ubah Bookmark</h4>
          		</div>
          		<div class="modal-body">
            		<div class="col-md-12 center-margin">
		            	<div class="form-group">
		                	<label>Title</label>
		                	<input type="hidden" name="id" class="id" id="id">
		                	<input type="text" name="title" id="title" class="form-control title" placeholder="Title">
		            	</div>
              			<div class="form-group">
                			<label>Url</label>
                			<input type="text" name="url" id="url" class="form-control url" placeholder="Url">
			            </div>
            			<div class="form-group">
                			<label>Deskripsi</label>
			                <textarea class="form-control description" name="description" id="description" style="height:100px"></textarea>
            			</div>
			            <div class="form-group">
            			    <div class="progress">
								<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"  aria-valuemin="0" aria-valuemax="100" style="width: 0%">
				    			</div>
							</div>
            			</div>
			            <div class="form-group">
            			    <div class="alert-euy">
							</div>
            			</div>
            		</div>
          		</div>
          		<div class="modal-footer">
		            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
		            <button class="btn btn-primary ubah_data id_mem" id="id_mem">Ubah!</button>
		        </div>
        	</div>
    	</div>
    </div>
</form>
<!-- /modal edit bookmark -->



<!-- modal remove bookmark -->
<div class="modal fade" id="hps" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
	    <div class="modal-content">
    	    <div class="modal-header">
        	    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            	<h4 class="modal-title">Hapus Bookmark</h4>
        	</div>
        	<div class="modal-body">
            	<center><p>Apakah Anda Yakin Akan Mengkapus Data Bookmark : <strong class="title"></strong> ?</p></center>
        	</div>
        	<div class="modal-footer">
            	<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            	<button class="btn btn-danger delete_data id_mem" id="id_mem"><i class="fa fa-trash"></i> Hapus</button>
        	</div>
        </div>
    </div>
</div>
<!-- /modal remove bookmark -->


<script type="text/javascript">
    $(document).ready(function(){

    	$(".refresh").click(function(){
    		bookmark.ajax.reload();
    	});

		/* -------- INSERT DATA AJAX JQUERY -------- */
        $(".simpan_data").click(function(){
       		var data = $('.bookmark-simpan').serialize();
        	$.ajax({
	            type: 'POST',
	            url: "<?php echo base_url(); ?>index.php/home/tambah_bookmark_aksi",
	            data: data,
	            beforeSend: function(){
		            $('.progress-bar-striped').animate({width:'60%'}, 1500);
		            $('.simpan_data').attr('disabled','true');
	            },
            	success: function() {
		            $('.progress-bar-striped').animate({width:'100%'}, 0);
              		$('.simpan_data').removeAttr('disabled');
              		bookmark.ajax.reload();
		            setTimeout( function() { 
		                $('#tbh_bookmark').modal('hide');
		                $('#title, #url, #description').val(''); 
		                $('.progress-bar-striped').animate({width:'0%'}, 0);
		            }, 1000 );
            	}
        	});
        });
		/* -------- AKHIR INSERT DATA AJAX JQUERY -------- */	

		/* -------- UPDATE DATA AJAX JQUERY -------- */
        $(".ubah_data").click(function(){
       		var id = $(this).attr('id');
       		var data = $('.bookmark-ubah').serialize();
        	$.ajax({
	            type: 'POST',
	            url: "<?php echo base_url(); ?>index.php/home/ubah_bookmark_aksi",
	            data: data,
	            beforeSend: function(){
		            $('.progress-bar-striped').animate({width:'60%'}, 1500);
		            $('.ubah_data').attr('disabled','true');
	            },
            	success: function(response) {
					if(response == "ok"){
			            $('.progress-bar-striped').animate({width:'100%'}, 0);
			            $(".alert-euy").html("<div class='form-group'><div class='alert alert-success' role='alert'><i class='fa fa-check'></i> Data Berhasil Dirubah</div></div>");
	              		$('.ubah_data').removeAttr('disabled');
	              		bookmark.ajax.reload();
			            setTimeout( function() { 
			                $('#ubh').modal('hide'); 
			                $('.progress-bar-striped').animate({width:'0%'}, 0);
	              			$(".alert-euy").empty();
			            }, 1500 );
    				}else{
			            $('.progress-bar-striped').animate({width:'100%'}, 0);
			            $(".alert-euy").html("<div class='form-group'><div class='alert alert-danger' role='alert'><i class='fa fa-remove'></i> GAGAL UPDATE DATA</div></div>");
	              		$('.ubah_data').removeAttr('disabled');
	              		setTimeout( function() { 
			                $('#ubh').modal('hide'); 
			                $('.progress-bar-striped').animate({width:'0%'}, 0);
	              			$(".alert-euy").empty();
	              		}, 1500);
    				}
            	}
        	});
        });
		/* -------- AKHIR UPDATE DATA AJAX JQUERY -------- */

		/* -------- DELETE DATA AJAX JQUERY -------- */
		$(".delete_data").click(function(){
			var id = $(this).attr('id');
			$.ajax({
			    type:'POST',
			    url:'hapus_bookmark/'+id,
			    success:function(data) {
			    	if(data) {   // DO SOMETHING
		        		$('#hps').modal('hide');
		        		bookmark.ajax.reload();
		        	} else { }
		   		}
			});
		});
     	/* -------- AKHIR DELETE DATA AJAX JQUERY -------- */
    });

		$('#ubh').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var id = button.data('id') // Extract info from data-* attributes
			var title = button.data('title') // Extract info from data-* attributes
			var url = button.data('url') // Extract info from data-* attributes
			var description = button.data('description') // Extract info from data-* attributes
			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this)
			modal.find('.id').val(id)
			modal.find('.title').val(title)
			modal.find('.url').val(url)
			modal.find('.description').val(description)
			modal.find('.id_mem').attr('id_mem', id)
		})

		$('#hps').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var id = button.data('id') // Extract info from data-* attributes
			var title = button.data('title') // Extract info from data-* attributes
			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this)
			modal.find('.title').text(title)
			modal.find('.id_mem').attr('id', id)
		})
</script>