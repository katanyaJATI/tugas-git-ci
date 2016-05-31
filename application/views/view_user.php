<table id="tabel" class="table table-striped ">
	<thead>
    	<tr>
        	<th colspan="4">
        		<a href="<?php echo base_url(); ?>index.php/home/tambah_user" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Tambah User</a>
        		<button class="btn btn-sm btn-default" data-toggle="modal" data-target="#tbh_user"><i class="fa fa-plus"></i> Tambah User Modal</button>
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
			if($u->username != $this->session->userdata('nama')){
			$no++; ?>
    	<tr>
        	<td><?php echo $no; ?></td>
            <td><?php echo $u->username; ?></td>
            <td>
            	<?php echo anchor('home/ubah_user/'.$u->id,'<i class="fa fa-edit"> Ubah</i>', 'class="btn btn-default"'); ?>
            	<button class="btn btn-default" data-toggle="modal" data-target="#ubh<?php echo $u->id; ?>"><i class="fa fa-edit"></i> Ubah Modal</button>
            	<button class="btn btn-danger" data-toggle="modal" data-target="#hps<?php echo $u->id; ?>"><i class="fa fa-remove"></i> Hapus</button>
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

  <!-- modal add user -->
  <form action="<?php echo base_url(); ?>index.php/home/tambah_user_aksi" method="POST">
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
                <input type="text" name="username" class="form-control" maxlength="20" placeholder="Username">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" maxlength="20" placeholder="Password">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            <button type="submit" name="tbh_mapel" class="btn btn-primary">Tambah!</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- /modal add user -->

<?php foreach($user as $u){ ?>
  <!-- modal edit user -->
  <form action="<?php echo base_url(); ?>index.php/home/ubah_user_aksi" method="POST">
    <div class="modal fade" id="ubh<?php echo $u->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                <input type="hidden" name="id" value="<?php echo $u->id ?>">
                <input type="text" name="username" class="form-control" maxlength="20" placeholder="Username" value="<?php echo $u->username ?>" readonly="">
              </div>
              <div class="form-group">
                <label>Password Lama</label>
                <input type="password" name="password_lm" class="form-control" maxlength="20" placeholder="Masukkan password lama">
              </div>
              <div class="form-group">
                <label>Password Lama</label>
                <input type="password" name="password" class="form-control" maxlength="20" placeholder="Masukkan password baru">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            <button type="submit" name="tbh_mapel" class="btn btn-primary">Ubah!</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- /modal edit user -->


  <!-- modal remove user -->
    <div class="modal fade" id="hps<?php echo $u->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Hapus Kelas</h4>
          </div>
          <div class="modal-body">
            <center><p>Apakah Anda Yakin Akan Mengkapus Data User : <strong><?php echo $u->username; ?></strong> ?</p></center>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            <?php echo anchor('home/hapus_user/'.$u->id,'<i class="fa fa-trash"> Hapus</i>', 'class="btn btn-danger hapus_data"'); ?>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- /modal remove user -->
<?php } ?>