<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Update Anak</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<div class="bs-example" data-example-id="simple-jumbotron">
					<?php
    $q = $this->db->get('ibu');
    $dist =  array();
    if ($q->num_rows() > 0) {
        foreach ($q->result() as $row) {
            $dist[] = $row;
        }
    }

    $a = 0;
    foreach ($anak as $row) {
        $a++;
    ?>
					<form id="demo-form2" action="<?php echo base_url('anak/updateDataAnak/') . $row['id_anak']; ?>"
						class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12 col-sm-12 form-group">
									<div class="item form-group">
										<label class="col-form-label col-md-3 col-sm-3 label-align" for="nik-anak">NIK
											Anak</label>
										<div class="col-md-9">
											<input type="text" id="nik-anak" name="nik-anak" required="required"
												class="form-control" data-inputmask="'mask' : '9999999999999999'"
												value="<?= $row['nik_anak'] ?>">
										</div>
									</div>
									<div class="item form-group">
										<label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-anak">Nama
											Anak</label>
										<div class="col-md-9">
											<input type="text" id="nama-anak" name="nama-anak" required="required"
												class="form-control" value="<?= $row['nama_anak'] ?>">
										</div>
									</div>
									<div class="item form-group">
										<label class="col-form-label col-md-3 col-sm-3 label-align"
											for="tmt-lahir">Tempat
											Lahir</label>
										<div class="col-md-9">
											<input type="text" id="tmt-lahir" name="tmt-lahir" class="form-control"
												value="<?= $row['tempat_lahir'] ?>">
										</div>
									</div>
									<div class="item form-group">
										<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal
											Lahir
										</label>
										<div class="col-md-9">
											<input id="tgl-lahir" name="tgl-lahir" class="date-picker form-control"
												placeholder="dd-mm-yyyy" type="text" required="required" type="text"
												onfocus="this.type='date'" onmouseover="this.type='date'"
												onclick="this.type='date'" onblur="this.type='text'"
												onmouseout="timeFunctionLong(this)" value="<?= $row['tgl_lahir'] ?>">
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
											<select name="jenis-kelamin" id="jenis-kelamin" class="form-control"
												required>
												<option value="">-- Pilih Jenis Kelamin --</option>
												<option value="Laki-Laki" <?php if ($row['jenis_kelamin'] == "Laki-Laki") {
                                                                                echo "selected";
                                                                            } ?>>Laki-Laki</option>
												<option value="Perempuan" <?php if ($row['jenis_kelamin'] == "Perempuan") {
                                                                                echo "selected";
                                                                            } ?>>Perempuan</option>
											</select>
										</div>
									</div>
									<div class="item form-group">
										<label class="col-form-label col-md-3 col-sm-3 label-align" for="ibu_id">Nama
											Ibu</label>
										<div class="col-md-9">
											<select name="ibu_id" id="ibu_id" class="form-control" required>
												<option value="">-- Pilih Ibu --</option>
												<?php
                                                // var_dump($row['ibu_id'])  ;
                                                // die;
                                                if (count($dist)) {
                                                    foreach ($dist as $item) {
                                                ?>
												<option value="<?php echo $item->id_ibu; ?>"
													<?php if ($item->id_ibu == $row['ibu_id']) echo 'selected'; ?>>
													<?php echo $item->nama_ibu; ?></option>
												<?php
                                                    }
                                                }
                                                ?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div>
								<button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-primary">Update</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>

