<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA TBL_PEMESANAN</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
	
					<tr>
						<td width='200'>Nama Pemesan <?php echo form_error('nama_pemesan') ?></td><td><input type="text" class="form-control" name="nama_pemesan" id="nama_pemesan" placeholder="Nama Pemesan" value="<?php echo $nama_pemesan; ?>" /></td>
					</tr>
	
					<tr>
						<td width='200'>Email <?php echo form_error('email') ?></td><td><input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" /></td>
					</tr>
	    
					<tr>
						<td width='200'>Ket <?php echo form_error('ket') ?></td>
						<td> <textarea class="form-control" rows="3" name="ket" id="ket" placeholder="Ket"><?php echo $ket; ?></textarea></td>
					</tr>
	
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id_pemesanan" value="<?php echo $id_pemesanan; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('pemesanan') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>