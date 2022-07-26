<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA TBL_TESTIMONI</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
	    
					<tr>
						<td width='200'>Pesan <?php echo form_error('pesan') ?></td>
						<td> <textarea class="form-control" rows="3" name="pesan" id="pesan" placeholder="Pesan"><?php echo $pesan; ?></textarea></td>
					</tr>
	
					<tr>
						<td width='200'>Penulis <?php echo form_error('penulis') ?></td><td><input type="text" class="form-control" name="penulis" id="penulis" placeholder="Penulis" value="<?php echo $penulis; ?>" /></td>
					</tr>
	
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id_testimoni" value="<?php echo $id_testimoni; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('testimoni') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>