<table id="tabel_user" class="table table-striped tampildata">
	<thead>
    	<tr>
        	<th colspan="4">
        		<a href="<?php echo base_url(); ?>index.php/home/tambah_user" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Tambah User</a>
        		<button class="btn btn-sm btn-default" data-toggle="modal" data-target="#tbh_user"><i class="fa fa-plus"></i> Tambah User Modal</button>
        		<a class="btn btn-sm btn-default refresh"><i class="fa fa-refresh"></i> REFRESH</a>
        	</th>
        </tr>
    	<tr>
        	<th>No</th>
            <th>Username</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tfoot>
    	<tr>
	        <th>No</th>
	        <th>Username</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
</table>

<!-- modal add user -->
<form method="POST" class="user-simpan">
	<div class="modal fade" id="tbh_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    	<div class="modal-dialog">
        	<div class="modal-content">
          		<div class="modal-header">
           			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            		<h4 class="modal-title">Tambah User</h4>
          		</div>
          		<div class="modal-body">
            		<div class="col-md-12 center-margin">
              			<div class="form-group">
                			<label>Username</label>
                			<input type="text" name="username" id="username" class="form-control" maxlength="20" placeholder="Username">
              			</div>
			            <div class="form-group">
			            	<label>Password</label>
			            	<input type="password" name="password" id="password" class="form-control" maxlength="20" placeholder="Password">
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
		            <button class="btn btn-primary simpan_data">Tambah!</button>
		        </div>
        	</div>
		</div>
    </div>
</form>
<!-- /modal add user -->


<!-- modal edit user -->
<form method="POST" class="user-ubah">
    <div class="modal fade" id="ubh" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    	<div class="modal-dialog">
        	<div class="modal-content">
	        	<div class="modal-header">
	            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            		<h4 class="modal-title">Ubah User</h4>
          		</div>
          		<div class="modal-body">
            		<div class="col-md-12 center-margin">
		            	<div class="form-group">
		                	<label>Username</label>
		                	<input type="hidden" class="id" name="id">
		                	<input type="text" name="username" id="username" class="form-control username" maxlength="20" placeholder="Username" readonly="">
		            	</div>
              			<div class="form-group">
                			<label>Password Lama</label>
                			<input type="password" name="password_lm" id="password_lm" class="form-control" maxlength="20" placeholder="Masukkan password lama">
			            </div>
            			<div class="form-group">
                			<label>Password Baru</label>
			                <input type="password" name="password" id="password" class="form-control" maxlength="20" placeholder="Masukkan password baru">
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
<!-- /modal edit user -->

  <!-- modal remove user -->
    <div class="modal fade" id="hps" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Hapus User</h4>
          </div>
          <div class="modal-body">
            <center><p>Apakah Anda Yakin Akan Mengkapus Data User : <strong class="username"></strong> ?</p></center>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            <button class="btn btn-danger delete_data id_mem" id="id_mem"><i class="fa fa-trash"></i> Hapus</button>
          </div>
        </div>
      </div>
    </div>
<!-- /modal remove user -->

<script type="text/javascript">
    $(document).ready(function(){

    	$(".refresh").click(function(){
    		user.ajax.reload();
    	});

		/* -------- INSERT DATA AJAX JQUERY -------- */
        $(".simpan_data").click(function(){
       		var data = $('.user-simpan').serialize();
        	$.ajax({
	            type: 'POST',
	            url: "<?php echo base_url(); ?>index.php/home/tambah_user_aksi",
	            data: data,
	            beforeSend: function(){
		            $('.progress-bar-striped').animate({width:'60%'}, 1500);
		            $('.simpan_data').attr('disabled','true');
	            },
            	success: function(response) {
            		if(response == "ok"){
			            setTimeout( function() { 
			                $('#tbh_user').modal('hide');
			                $('#username, #password').val(''); 
			                $('.progress-bar-striped').animate({width:'0%'}, 0);
			            }, 1000 );
			            $('.progress-bar-striped').animate({width:'100%'}, 0);
	              		$('.simpan_data').removeAttr('disabled');
	              		user.ajax.reload();
	              	}else{
	              		$(".alert-euy").html("<div class='form-group'><div class='alert alert-danger' role='alert'><i class='fa fa-remove'></i> "+response+"</div></div>");
	              		setTimeout( function() { 
			                $('#username, #password').val(''); 
			                $('.progress-bar-striped').animate({width:'0%'}, 0);
	              			$(".alert-euy").empty();
	              			$('.simpan_data').removeAttr('disabled');
			            }, 1000 );
	              	}
            	}
        	});
        });
		/* -------- AKHIR INSERT DATA AJAX JQUERY -------- */	


		/* -------- UPDATE DATA AJAX JQUERY -------- */
        $(".ubah_data").click(function(){
       		var id = $(this).attr('id');
       		var data = $('.user-ubah').serialize();
        	$.ajax({
	            type: 'POST',
	            url: "<?php echo base_url(); ?>index.php/home/ubah_user_aksi",
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
			            setTimeout( function() { 
			                $('#ubh').modal('hide'); 
			                $('.progress-bar-striped').animate({width:'0%'}, 0);
	              			$(".alert-euy").empty();
	              			$('#password, #password_lm').val('');
			            }, 1500 );
    				}else{
			            $('.progress-bar-striped').animate({width:'100%'}, 0);
			            $(".alert-euy").html("<div class='form-group'><div class='alert alert-danger' role='alert'><i class='fa fa-remove'></i> Harap Periksa Password Lama Anda!</div></div>");
	              		$('.ubah_data').removeAttr('disabled');
	              		setTimeout( function() { 
			                $('#ubh').modal('hide'); 
			                $('.progress-bar-striped').animate({width:'0%'}, 0);
	              			$(".alert-euy").empty();
	              			$('#password, #password_lm').val('');
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
			    url:'hapus_user/'+id,
			    success:function(data) {
			    	if(data) {   // DO SOMETHING
		        		$('#hps').modal('hide');
		        		user.ajax.reload();
		        	} else { }
		   		}
			});
		});
     	/* -------- AKHIR DELETE DATA AJAX JQUERY -------- */


		$('#ubh').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var id = button.data('id') // Extract info from data-* attributes
			var username = button.data('username') // Extract info from data-* attributes
			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this)
			modal.find('.username').val(username)
			modal.find('.id').val(id)
			modal.find('.id_mem').attr('id_mem')
		})

		$('#hps').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var id = button.data('id') // Extract info from data-* attributes
			var username = button.data('username') // Extract info from data-* attributes
			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this)
			modal.find('.username').text(username)
			modal.find('.id_mem').attr('id', id)
		})

    });
</script>
<tr>