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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/pertanyaan/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>ID_Pertanyaan</th>
										<th>ID_Kategori</th>
										<th>ID_Survey</th>
										<th>Pertanyaan</th>
										<th>Tanggal</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($pertanyaan as $pertanyaan): ?>
									<tr>
										<td width="150">

											<?php echo $pertanyaan->id_pertanyaan ?>
										</td>
										<td>
											<?php echo $pertanyaan->id_kategori ?>
										</td>
										<td>
											<?php echo $pertanyaan->id_survey ?>
										</td>
										<td>
											<?php echo $pertanyaan->pertanyaan ?>
										</td>
										<td>
											<?php echo $pertanyaan->tanggal ?>
										</td>
									
										<td>									
											<a href="<?php echo site_url('admin/pertanyaan/edit/'.$pertanyaan->id_pertanyaan) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>

											<a onclick="deleteConfirm('<?php echo site_url('admin/pertanyaan/delete/'.$pertanyaan->id_pertanyaan) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

</body>

</html>