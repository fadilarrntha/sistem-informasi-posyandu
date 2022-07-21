<div class="right_col" role="main">
	<div class="page-title">
		<div class="title_left">
			<h3>Data Anak</h3>
		</div>
	</div>
	<div class="flash-dataw" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>
	<?php if ($this->session->flashdata('msg')) : ?>

	<?php endif; ?>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_title">
					<button type="button" class="btn btn-primary" data-toggle="modal"
						data-target="#addDataAnakModal">Tambah Data Anak</button>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box table-responsive">
								<table id="datatable" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>No</th>
											<th>NIK</th>
											<th>Nama Lengkap</th>
											<th>Tempat/Tanggal Lahir</th>
											<th>Jenis Kelamin</th>
											<th>Nama Ibu</th>
											<th>Action</th>
										</tr>
									</thead>

									<tbody>
										<?php $i = 1; ?>
										<?php foreach ($anak as $n) : ?>
										<tr>
											<th scope="row">
												<center><?= $i; ?></center>
											</th>
											<td><?= $n['nik_anak']; ?></td>
											<td><?= $n['nama_anak']; ?></td>
											<td><?= $n['tempat_lahir'] . ', ' . $n['tgl_lahir']; ?></td>
											<td><?= $n['jenis_kelamin']; ?></td>
											<td><?= $n['nama_ibu']; ?></td>
											<td>
												<!-- <a data-toggle="modal" data-target="#viewDataAnakModal<?= $n['id_anak']; ?>" href="<?= base_url(); ?>anak/viewDataAnak/<?= $n['id_anak']; ?>" class="btn btn-info btn-circle btn-sm">
                                                        <i class="fa fa-sticky-note"></i>
                                                    </a> -->
												<!-- <a data-toggle="modal"
													data-target="#editDataAnakModal<?= $n['id_anak']; ?>" -->
													<a href="<?= base_url(); ?>anak/edit/<?= $n['id_anak']; ?>"
													class="btn btn-warning btn-circle btn-sm">
													<i class="fa fa-edit"></i>
												</a>
												<a data-toggle="tooltip"
													href="<?= base_url(''); ?>anak/deleteDataAnak/<?= $n['id_anak']; ?>"
													class="btn btn-danger btn-circle btn-sm tbl-hapus" title="Delete">
													<i class="fa fa-trash"></i>
												</a>
											</td>
										</tr>
										<?php $i++; ?>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- modals -->
	<!-- Large modal -->
	<div class="modal fade bs-example-modal-lg" id="addDataAnakModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Form Data Anak </h4>
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
				</div>
				<form id="demo-form2" action="<?php echo base_url('anak/createDataAnak') ?>"
					class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 form-group">
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="nik-anak">NIK
										Anak</label>
									<div class="col-md-9">
										<input type="text" id="nik-anak" name="nik-anak" required="required"
											data-inputmask="'mask' : '9999999999999999'" class="form-control">
									</div>
								</div>
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-anak">Nama
										Anak</label>
									<div class="col-md-9">
										<input type="text" id="nama-anak" name="nama-anak" required="required"
											class="form-control">
									</div>
								</div>
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="tmt-lahir">Tempat
										Lahir</label>
									<div class="col-md-9">
										<input type="text" id="tmt-lahir" name="tmt-lahir" class="form-control">
									</div>
								</div>
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir
									</label>
									<div class="col-md-9">
										<input id="tgl-lahir" name="tgl-lahir" class="date-picker form-control"
											placeholder="dd-mm-yyyy" type="text" required="required" type="text"
											onfocus="this.type='date'" onmouseover="this.type='date'"
											onclick="this.type='date'" onblur="this.type='text'"
											onmouseout="timeFunctionLong(this)">
										<script>
											function timeFunctionLong(input) {
												setTimeout(function () {
													input.type = 'text';
												}, 60000);
											}

										</script>
									</div>
								</div>
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align"
										for="jenis-kelamin">Jenis Kelamin</label>
									<div class="col-md-9">
										<select name="jenis-kelamin" id="jenis-kelamin" class="form-control" required>
											<option value="">-- Pilih Jenis Kelamin --</option>
											<option value="Laki-Laki">Laki-Laki</option>
											<option value="Perempuan">Perempuan</option>
										</select>
									</div>
								</div>
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="ibu_id">Nama
										Ibu</label>
									<div class="col-md-9">
										<select name="ibu_id" id="ibu_id" class="form-control" required>
											<option value="">-- Pilih Ibu --</option>
											<?php foreach ($ibu as $m) : ?>
											<option value="<?= $m['id_ibu']; ?>"><?= $m['nama_ibu']; ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
				</form>
			</div>
		</div>
	</div>
</div>
