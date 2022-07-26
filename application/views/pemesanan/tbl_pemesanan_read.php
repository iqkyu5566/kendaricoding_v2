
<div class="content-wrapper">
	
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">DETAIL DATA TBL_PEMESANAN</h3>
			</div>
		
		<table class='table table-bordered'>        

	
			<tr>
				<td>Nama Pemesan</td>
				<td><?php echo $nama_pemesan; ?></td>
			</tr>
	
			<tr>
				<td>Email</td>
				<td><?php echo $email; ?></td>
			</tr>
	
			<tr>
				<td>Ket</td>
				<td><?php echo $ket; ?></td>
			</tr>
	
			<tr>
				<td></td>
				<td><a href="<?php echo site_url('pemesanan') ?>" class="btn btn-default">Kembali</a></td>
			</tr>
	
		</table>
		</div>
	</section>
</div>