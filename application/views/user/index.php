<div class="right_col" role="main">
	<div class="page-title">
		<div class="title_left">
			<h3>Data Akun Pengguna</h3>
		</div>
	</div>
	<div class="flash-datae" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>
	<?php if ($this->session->flashdata('msg')) : ?>

	<?php endif; ?>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_title">
					<button type="button" class="btn btn-primary" data-toggle="modal"
						data-target="#addDataUserModal">Tambah Akun Pengguna</button>
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
											<th>Nama</th>
											<th>Username</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>
										<?php
                                        $q = $this->db->get('petugas');
                                        $dist =  array();
                                        if ($q->num_rows() > 0) {
                                            foreach ($q->result() as $row) {
                                                $dist[] = $row;
                                            }
                                        }

                                        foreach ($users as $e) : ?>
										<tr>
											<th scope="row">
												<center><?= $i; ?></center>
											</th>
											<td><?php
                                            foreach ($dist as $item) {
                                                $item->id_petugas;
                                                if ($item->id_petugas == $e['petugas_id']) echo
                                                $item->nama_petugas;
                                            }?>
											</td>
											<td><?= $e['username']; ?></td>
											<td>
												<a data-toggle="modal"
													data-target="#editDataUserModal<?= $e['id_users']; ?>"
													href="<?= base_url(); ?>petugas/updateDataUser/<?= $e['id_users']; ?>"
													class="btn btn-warning btn-circle btn-sm">
													<i class="fa fa-edit"></i>
												</a>
												<a data-toggle="tooltip"
													href="<?= base_url(''); ?>user/deleteDataUser/<?= $e['id_users']; ?>"
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
	<?php
    $q = $this->db->get('petugas');
    $dist =  array();
    if ($q->num_rows() > 0) {
        foreach ($q->result() as $row) {
            $dist[] = $row;
        }
    }
    
    $a = 0;
    foreach ($users as $row) {
        $a++;
        ?>
	<div class="modal fade bs-example-modal-lg" id="addDataUserModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Form Data Akun Pengguna</h4>
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
				</div>
				<form id="demo-form2" action="<?php echo base_url('user/createDataUser') ?>"
					class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 form-group">
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="petugas-id">Nama
										Petugas</label>
									<div class="col-md-9">
										<select name="petugas-id" id="petugas-id" class="form-control" required>
											<option value="">-- Pilih Petugas --</option>
											<?php
                                                // var_dump($row['user_id'])  ;
                                                // die;
                                                if (count($dist)) {
                                                    foreach ($dist as $item) {
                                                ?>
											<option value="<?php echo $item->id_petugas; ?>"
												<?php if ($item->id_petugas == $row['petugas_id']) echo 'selected'; ?>>
												<?php echo $item->nama_petugas; ?></option>
											<?php
                                                    }
                                                }
                                                ?>
										</select>
									</div>
								</div>
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align"
										for="username">Username</label>
									<div class="col-md-9">
										<input type="text" id="username" name="username" class="form-control">
									</div>
								</div>
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align"
										for="password">Password</label>
									<div class="col-md-9">
										<input type="password" id="password1" name="password1" class="form-control">
									</div>
								</div>
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align"
										for="level-id">Role</label>
									<div class="col-md-9">
										<select name="level-id" id="level-id" class="form-control" required>
											<option value="">-- Pilih Role --</option>
											<option value="Petugas">Petugas</option>
											<option value="Admin">Admin</option>
										</select>
									</div>
								</div>
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align"
										for="is-active">Status</label>
									<div class="col-md-9">
										<select name="is-active" id="is-active" class="form-control" required>
											<option value="">-- Pilih Status --</option>
											<option value="1">Aktif</option>
											<option value="0">Non-Aktif</option>
										</select>
									</div>
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
	<?php } ?>

	<!-- modals -->
	<!-- Large modal -->
	<?php
	$q = $this->db->get('petugas');
    $dist =  array();
    if ($q->num_rows() > 0) {
        foreach ($q->result() as $row) {
            $dist[] = $row;
        }
    }
    $a = 0;
    foreach ($users as $row) {
        $a++;
    ?>
	<div class="modal fade bs-example-modal-lg" id="editDataUserModal<?= $row['id_users']; ?>" tabindex=" -1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Edit Form Data Pengguna</h4>
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
				</div>
				<form id="demo-form2" action="<?php echo base_url('user/updateDataUser/') . $row['id_users']; ?>"
					class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 form-group">
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align"
										for="username">Username</label>
									<div class="col-md-9">
										<input type="hidden" id="petugas-id" name="petugas-id" class="form-control" value="<?= $row['petugas_id'] ?>">
										<input type="text" id="username" name="username" class="form-control" value="<?= $row['username'] ?>" readonly>
									</div>
								</div>
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align"
										for="level-id">Role</label>
									<div class="col-md-9">
										<select name="level-id" id="level-id" class="form-control" required>
											<option value="">-- Pilih Role --</option>
											<option value="Petugas" <?php if ($row['level_id'] == "Petugas") {
                                                                                echo "selected";
                                                                            } ?>>Petugas</option>
											<option value="Admin" <?php if ($row['level_id'] == "Admin") {
                                                                                echo "selected";
                                                                            } ?>>Admin</option>
										</select>
									</div>
								</div>
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align"
										for="is-active">Status</label>
									<div class="col-md-9">
										<select name="is-active" id="is-active" class="form-control" required>
											<option value="">-- Pilih Status --</option>
											<option value="1" <?php if ($row['is_active'] == "1") {
                                                                                echo "selected";
                                                                            } ?>>Aktif</option>
											<option value="0" <?php if ($row['is_active'] == "0") {
                                                                                echo "selected";
                                                                            } ?>>Non-Aktif</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
				</form>
			</div>
		</div>
	</div>
	<?php
    }
    ?>
</div>
