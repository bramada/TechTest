<?php
	defined('BASEPATH') OR exit('Akses langsung tidak diperbolehkan');
?>

<section class="container-fluid">
	<div class="row">
		<div class="form-input clearfix">
			<div class="col-md-12">

				<div class="panel panel-primary">
					<div class="panel-heading">Edit Data Instansi</div>
					<div class="panel-body">
						
						<?php echo form_open('home/updatedata/'.$db->ID, ['class' => 'form-horizontal', 'method' => 'post']); ?>

						
							<input type="hidden" class="form-control" name="id" value="<?php echo set_value('nama', $db->ID); ?>">

							<div class="form-group <?php echo (form_error('nama') != '') ? 'has-error has-feedback' : '' ?>">
								<label for="nama" class="control-label col-sm-4">Nama Instansi </label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="nama" value="<?php echo set_value('nama', $db->nama); ?>">
									<?php echo (form_error('nama') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
									<?php echo form_error('nama'); ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="deskripsi" class="control-label col-sm-4">Deskripsi </label>
								<div class="col-sm-8">
									<textarea class="form-control" name="deskripsi" value="<?php echo set_value('deskripsi'); ?>"></textarea>
									<?php echo form_error('deskripsi'); ?>
								</div>
							</div>

							<div class="form-group">
								<div class="btn-form col-sm-12">
									<a href="<?php echo base_url('home/lihatdata'); ?>"><button type="button" class='btn btn-default'>Batal</button></a>
									<button type="submit" class='btn btn-primary'>Simpan</button>
								</div>
							</div>
						<?php echo form_close(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>