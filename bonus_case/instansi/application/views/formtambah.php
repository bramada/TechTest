<?php
	defined('BASEPATH') OR exit('Akses langsung tidak diperbolehkan');
	//echo validation_errors();
?>

<section class="container-fluid">
	<div class="row">
		<div class="form-input clearfix">
			<div class="col-md-12">
				
				<?php
					if(isset($_SESSION['input_sukses']))
					{
				?>
						<div class="alert alert-success">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  	<strong>Sukses!</strong> <?php echo $_SESSION['input_sukses']; ?>
						</div>
				<?php
					}
				?>

				<div class="panel panel-primary">
					<div class="panel-heading">Tambah Data Instansi</div>
					<div class="panel-body">
						
						<?php echo form_open('home/tambahdata', ['class' => 'form-horizontal', 'method' => 'post']); ?>
							<div class="form-group <?php echo (form_error('nama') != '') ? 'has-error has-feedback' : '' ?>">
								<label for="nama" class="control-label col-sm-4">Nama Instansi </label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="nama" value="<?php echo set_value('nama'); ?>" hidden>
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