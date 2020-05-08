<?php 
	$this->load->view("public_part/header");
?>

<aside class="main-sidebar">
	<section class="sidebar">
		<?php 
			$this->load->view("public_part/sidebar_profil");
		?>
		<ul class="sidebar-menu" data-widget="tree">
		  	<li class="header">MAIN NAVIGATION</li>
		 	<li>
				<a href="<?php echo base_url() ?>admin/dokumen_akreditasi"><i class="fas fa-folder-open"></i> <span>Dokumen Akreditasi</span></a>
			</li>
			<li class="active">
				<a href="<?php echo base_url() ?>admin/kelola_pengguna"><i class="fas fa-user-cog"></i> <span>Kelola Pengguna</span></a>
			</li>
			<li>
				<a href="<?php echo base_url() ?>admin/akun"><i class="fas fa-user-circle"></i> <span>Akun</span></a>
			</li>
		</ul>
	</section>
</aside>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Edit Pengguna</h1>
		<ol class="breadcrumb">
		    <li><a href="<?php echo base_url() ?>admin/kelola_pengguna"><i class="fa fa-tachometer-alt"></i> Pengguna</a></li>
		    <li class="active">Edit Pengguna</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
			    <div class="box box-default">
				    <div class="box-header with-border">
				        <h3 class="box-title"><i class="fa fa-edit"></i> Edit Pengguna</h3>
				        <div class="box-tools pull-right">
					        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				        </div>
				    </div>
				    <div class="box-body">
					    <div class="row">
					        <form class="form-horizontal" method="POST" action="<?php echo base_url() ?>admin/kelola_pengguna/update_pengguna">
					            <div class="col-md-6">
					                <h4 style="text-align:right;"><i class="fas fa-id-card"></i> Informasi Pribadi</h4><hr>
					                <div class="box-body">
					                    <div class="form-group">
					                      	<label class="col-sm-4 control-label">Nama</label>
					                      	<div class="col-sm-8">
					                        	<input type="text" name="fnama" class="form-control" style="text-transform: capitalize;" value="<?php echo $data_pengguna->nama ?>" required>
					                        	<input type="hidden" name="id_pengguna" value="<?php echo $data_pengguna->id_pengguna ?>">
					                      	</div>
					                    </div>
					                    <div class="form-group">
					                      	<label class="col-sm-4 control-label">NIDN</label>
					                      	<div class="col-sm-8">
					                      	<?php
					                      		if($data_auth->id_hak_akses == "1"){
					                      	?>
					                      		<input type="text" name="fnidn" minlength="1" maxlength="10" class="form-control" value="<?php echo $data_pengguna->nidn ?>">
					                      	<?php
					                      		}else{
					                      	?>
					                      		<script>
								                    function hanyaAngka(evt){
									                    var charCode = (evt.which) ? evt.which : event.keyCode
									                    if (charCode > 31 && (charCode < 48 || charCode > 57))
									                    return false;
									                    return true;
								                    }
								                </script>
					                        	<input type="text" name="fnidn" minlength="10" maxlength="10" onkeypress="return hanyaAngka(event)" class="form-control" value="<?php echo $data_pengguna->nidn ?>" required>
					                      	<?php
					                      		}
					                      	?>
					                      	</div>
					                    </div>
							            <div class="form-group">
							                <label class="col-sm-4 control-label">Jabatan</label>
							                <div class="col-sm-8">
								                <select name="fjabatan" class="form-control" required>
								                    <option value="">-- Jabatan --</option>
								                    <option value="Ketua Program Studi" <?php echo ($data_pengguna->jabatan == 'Ketua Program Studi' ? ' selected' : ''); ?>>Ketua Program Studi</option>
								                    <option value="Tenaga Pengajar" <?php echo ($data_pengguna->jabatan == 'Tenaga Pengajar' ? ' selected' : ''); ?>>Tenaga Pengajar</option>
								                    <option value="Kepala Tata Usaha" <?php echo ($data_pengguna->jabatan == 'Kepala Tata Usaha' ? ' selected' : ''); ?>>Kepala Tata Usaha</option>
								                    <option value="Staf Tata Usaha" <?php echo ($data_pengguna->jabatan == 'Staf Tata Usaha' ? ' selected' : ''); ?>>Staf Tata Usaha</option>
								                </select>
							                </div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-4 control-label">Penanggungjawab Kriteria</label>
							                <div class="col-sm-8">
							                <?php
								                if($data_auth->id_hak_akses == "1"){
								            ?>
								                <input type="text" class="form-control" value="-" readonly>
								            <?php
								            	}else{
								            ?>
								            	<select name="fid_kriteria" class="form-control" required>
								                    <option value="">-- Penanggungjawab Kriteria --</option>
								                    <option value="1" <?php echo ($data_auth->kriteria == '1' ? ' selected' : ''); ?>>1. Visi, Misi, Tujuan, dan Strategi</option>
								                    <option value="2"<?php echo ($data_auth->kriteria == '2' ? ' selected' : ''); ?>>2. Tata Pamong, Tata Kelola, dan Kerjasama</option>
								                    <option value="3"<?php echo ($data_auth->kriteria == '3' ? ' selected' : ''); ?>>3. Mahasiswa</option>
								                    <option value="4"<?php echo ($data_auth->kriteria == '4' ? ' selected' : ''); ?>>4. Sumber Daya Manusia</option>
								                    <option value="5"<?php echo ($data_auth->kriteria == '5' ? ' selected' : ''); ?>>5. Keuangan, Sarana, dan Prasarana</option>
								                    <option value="6"<?php echo ($data_auth->kriteria == '6' ? ' selected' : ''); ?>>6. Pendidikan</option>
								                    <option value="7"<?php echo ($data_auth->kriteria == '7' ? ' selected' : ''); ?>>7. Penelitian</option>
								                    <option value="8"<?php echo ($data_auth->kriteria == '8' ? ' selected' : ''); ?>>8. Pengabdian kepada Masyarakat</option>
								                    <option value="9"<?php echo ($data_auth->kriteria == '9' ? ' selected' : ''); ?>>9. Luaran dan Capaian Tridharma</option>
								                    <option value="0"<?php echo ($data_auth->kriteria == '0' ? ' selected' : ''); ?>>Tidak Ada</option>
								                </select>
								            <?php
								        		}
								            ?>
							                </div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-4 control-label">Homebase</label>
							                <div class="col-sm-8">
							                <?php
								                if($data_auth->id_hak_akses == "1"){
								            ?>
													<select name="fhomebase" class="form-control" required>
									                    <option value="">-- Homebase --</option>
									                    <option value="S1 Teknik Informatika" <?php echo ($data_pengguna->homebase == 'S1 Teknik Informatika' ? ' selected' : ''); ?>>S1 Teknik Informatika</option>
									                    <option value="S1 Sistem Informasi" <?php echo ($data_pengguna->homebase == 'S1 Sistem Informasi' ? ' selected' : ''); ?>>S1 Sistem Informasi</option>
									                    <option value="D3 Sistem Informasi" <?php echo ($data_pengguna->homebase == 'D3 Sistem Informasi' ? ' selected' : ''); ?>>D3 Sistem Informasi</option>
									                    <option value="Fakultas Teknologi Informasi" <?php echo ($data_pengguna->homebase == 'Fakultas Teknologi Informasi' ? ' selected' : ''); ?>>Fakultas Teknologi Informasi</option>
									                </select>
											<?php
												}else{
											?>
													<select name="fhomebase" class="form-control" required>
									                    <option value="">-- Homebase --</option>
									                    <option value="S1 Teknik Informatika" <?php echo ($data_pengguna->homebase == 'S1 Teknik Informatika' ? ' selected' : ''); ?>>S1 Teknik Informatika</option>
									                    <option value="S1 Sistem Informasi" <?php echo ($data_pengguna->homebase == 'S1 Sistem Informasi' ? ' selected' : ''); ?>>S1 Sistem Informasi</option>
									                    <option value="D3 Sistem Informasi" <?php echo ($data_pengguna->homebase == 'D3 Sistem Informasi' ? ' selected' : ''); ?>>D3 Sistem Informasi</option>
									                </select>
								            <?php
												}
											?>    
							                </div>
							            </div>
					                </div>
					            </div>
						        <div class="col-md-6">
						            <h4 style="text-align:right;"><i class="fas fa-user-circle"></i> Informasi Akun</h4><hr>
						            <div class="box-body">
							            <div class="form-group">
							                <label class="col-sm-4 control-label">Username</label>
							                <div class="col-sm-8">
							                    <input type="text" name="fusername" minlength="6" maxlength="20" class="form-control" value="<?php echo $data_auth->username ?>" required>
							                </div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-4 control-label">Password</label>
							                <div class="col-sm-8">
							                    <input type="text" name="fpassword" minlength="6" maxlength="20" class="form-control" value="<?php echo $data_auth->password ?>" required>
							                </div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-4 control-label">Level</label>
							                <div class="col-sm-8">
								            <?php
								                if($data_auth->id_hak_akses == "1"){
								            ?>
													<input type="hidden" name="fhak_akses" class="form-control" value="<?php echo $data_auth->id_hak_akses ?>" readonly>
													<input type="text" class="form-control" value="<?php echo $hak_akses->hak_akses ?>" readonly>
											<?php
												}else{
											?>
													<select name="fhak_akses" class="form-control" required>
									                    <option value="">-- Level --</option>
														<option value="3" <?php echo ($data_auth->id_hak_akses == '3' ? ' selected' : ''); ?>>Kaprodi</option>
									                    <option value="2" <?php echo ($data_auth->id_hak_akses == '2' ? ' selected' : ''); ?>>Tim Akreditasi</option>
								                    </select>
								            <?php
												}
								            ?>
							                </div>
							            </div>
						            </div>
						            <div class="box-footer pull-right">
							            <input type="reset" class="btn btn-default" value="Reset">
							            <input type="submit" name="submit" class="btn btn-info" value="Simpan">
						            </div>
						        </div>
					        </form>
					    </div>
				    </div>
				    <div class="box-footer"></div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php 
	$this->load->view("public_part/footer");
?>