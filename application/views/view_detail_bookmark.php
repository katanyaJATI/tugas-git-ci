<div style="padding:30px;text-align:center">
	<h2>Detail Data Bookmark</h2>
	<div style="width:400px; margin:0 auto"> 
	  <?php foreach($user as $u){ ?>
	  <table class="table">
	    <tbody>
    	<?php 
			foreach($user as $u){ ?>
    		<tr>
        		<td>TITLE</td>
        		<td><?php echo $u->title; ?></td>
	    	</tr>
    		<tr>
        		<td>URL</td>
        		<td><?php echo anchor($u->url, $u->url, 'target="_blank"'); ?></td>
	    	</tr>
    		<tr>
        		<td>DESKRIPSI</td>
        		<th><?php echo $u->description; ?></th>
	    	</tr>
		    <tr>
		    	<td colspan="2">
					<?php echo anchor('home/lihat_bookmark', 'BACK', 'class="btn btn-default"'); ?>
					<?php echo anchor('home/ubah_bookmark/'.$u->id, 'EDIT', 'class="btn btn-default"'); ?>
					<?php echo anchor('home/hapus_bookmark/'.$u->id, 'HAPUS', 'class="btn btn-default"'); ?>
				</td>
		    </tr>
	    <?php } ?>
    </tbody>
</table>
	  <?php } ?>
</div>
</div>