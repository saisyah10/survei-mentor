<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/survey/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">
						<form action="<?php base_url('admin/survey/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">ID Angkatan</label>
								 <select name="id_angkatan" class="form-control <?php echo form_error('id_angkatan') ? 'is-invalid':'' ?>" >
								 	<option value='' selected>-pilih- </option>
								 		<?php 
								 			foreach ($id_angkatan as $key => $value) {
								 				echo "<option value = '$value->id_angkatan'> $value->angkatan</option>";
								 			}
								 		?>
								 </select>
								<div class="invalid-feedback">
									<?php echo form_error('id_angkatan') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">nama_survey</label>
								<input class="form-control <?php echo form_error('nama_survey') ? 'is-invalid':'' ?>"
								 type="text" name="nama_survey" placeholder="Nama survey ?" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_survey') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Deskripsi</label>
								<input class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>"
								 type="text" name="deskripsi" placeholder="Deskripsi ?" />
								<div class="invalid-feedback">
									<?php echo form_error('deskripsi') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Tanggal</label>
								<input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
								 type="text" name="tanggal" placeholder="Tanggal ?" />
								<div class="invalid-feedback">
									<?php echo form_error('Tanggal') ?>
								</div>
							</div>
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>
			

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>