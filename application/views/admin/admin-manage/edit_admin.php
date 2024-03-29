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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/admin/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/admin/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id_admin" value="<?php echo $admin->id_admin?>" />

							<div class="form-group">
								<label for="name">Nama Admin*</label>
								<input class="form-control <?php echo form_error('nama_admin') ? 'is-invalid':'' ?>"
								 type="text" name="nama_admin" placeholder="Masukkan Nama Anda" value="<?php echo $admin->nama_admin ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_admin') ?>
								</div>

                                <label for="name">Email*</label>
								<input class="form-control <?php echo form_error('email_admin') ? 'is-invalid':'' ?>"
								 type="text" name="email_admin" placeholder="Masukkan Email Anda" value="<?php echo $admin->email_admin ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('email_admin') ?>
								</div>

                                <label for="name">Password*</label>
								<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
								 type="text" name="password" placeholder="Masukkan Password" value="<?php echo $admin->password ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
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