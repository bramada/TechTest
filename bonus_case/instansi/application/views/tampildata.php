<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<nav class="navbar navbar-light bg-light justify-content-center">
	<center>
	<h2>DATA INSTANSI</h2>
	</center>
	<hr>
</nav>

<section class="container">
	<div class="row">
		<div class="col-md-12">

			<?php
				if(isset($_SESSION['hapus_sukses']) || isset($_SESSION['update_sukses'])) :
					$notif = '';

					isset($_SESSION['hapus_sukses']) ? $notif .= $_SESSION['hapus_sukses'] : '';
					isset($_SESSION['update_sukses']) ? $notif .= $_SESSION['update_sukses'] : '';
			?>
			<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Sukses!</strong> <?php echo $notif; ?>
			</div>
			<?php
				endif;
			?>

			<div class="panel panel-primary">
				<div class="panel-heading">Data Instansi <?php echo $this->session->userdata('nama') ?> </div>
				<div class="panel-body">

					<div class="card form-group">
						<?php $attributes = array('class' => 'row'); ?>
						<?php echo form_open('Home/search',$attributes);?>
						<div class="col-md-4" style="padding-bottom: 15px;">
							<input type="text" class="form-control" name="keyword" placeholder="cari instansi" >
						</div>
						<div class="col-md-2" style="padding-bottom: 15px;">
							<button type="submit" class="btn btn-secondary"><span class="glyphicon glyphicon-search"></span> Cari</button>
						</div>
						<?php echo form_close();?>
					</div>

					<hr>
					<div class="col-md-12" style="padding-bottom: 15px;">
						<a href="<?php echo base_url('home/formtambah'); ?>">
							<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>
								Tambah</button>
						</a>
					</div>

					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Aksi</th>
										<th>Instansi</th>
										<th>Deskripsi</th>
									</tr>
								</thead>

								<tbody>
									<?php
										$no = 1;
										foreach($database as $db) : ?>
									<tr>
										<td><?php echo $no; ?></td>
										<td>
											<a href="<?php echo base_url('home/formedit/'.$db->ID); ?>"><button
													type="button" class="btn btn-default btn-xs"><span
														class="glyphicon glyphicon-pencil"
														aria-hidden="true"></span> Perbarui</button></a>
											<a href="<?php echo base_url('home/hapusdata/'.$db->ID); ?>"
												onclick="return confirm('Anda yakin hapus ?')"><button type="button"
													class="btn btn-danger btn-xs"><span
														class="glyphicon glyphicon-remove"></span> Hapus</button></a>
										</td>
										<td><?php echo $db->nama; ?></td>
										<td><?php echo $db->deskripsi; ?></td>
									</tr>
									<?php
										$no++;
										endforeach;
									?>
								</tbody>
							</table>

						</div>
					</div>


				</div>
			</div>
		</div>
	</div>/
</section>
