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
			<li>
				<a href="<?php echo base_url() ?>admin/kelola_pengguna"><i class="fas fa-user-cog"></i> <span>Kelola Pengguna</span></a>
			</li>
			<li class="active">
				<a href="<?php echo base_url() ?>admin/akun"><i class="fas fa-user-circle"></i> <span>Akun</span></a>
			</li>
		</ul>
	</section>
</aside>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Edit Profil</h1>
		<ol class="breadcrumb">
		    <li><a href="<?php echo base_url() ?>admin/akun"><i class="fa fa-tachometer-alt"></i> Akun</a></li>
		    <li class="active">Edit Profil</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
	        <div class="col-md-1"></div>
			<div class="col-md-6">
			    <div class="box box-default">
				    <div class="box-header with-border">
				        <h3 class="box-title"><i class="fas fa-id-card"></i> Informasi Pribadi</h3>
				        <div class="box-tools pull-right">
					        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				        </div>
				    </div>
				    <div class="box-body">
					    <div class="row">
					        <form class="form-horizontal" method="POST" action="<?php echo base_url() ?>admin/akun/update_profil">
					            <div class="col-md-12">
					                <div class="box-body">
					                    <div class="form-group">
					                    	<div class="col-sm-1"></div>
					                      	<label class="col-sm-3 control-label" style="text-align: left;">Nama</label>
					                      	<div class="col-sm-8">
					                        	<input type="text" name="fnama" class="form-control" style="text-transform: capitalize;" value="<?php echo $data_pengguna->nama ?>" required>
					                        	<input type="hidden" name="id_pengguna" value="<?php echo $data_pengguna->id_pengguna ?>">
					                      	</div>
					                    </div>
					                    <div class="form-group">
					                      	<div class="col-sm-1"></div>
					                      	<label class="col-sm-3 control-label" style="text-align: left;">NIDN</label>
					                      	<div class="col-sm-8">
					                        	<input type="text" name="fnidn" minlength="1" maxlength="10" class="form-control" value="<?php echo $data_pengguna->nidn ?>">
					                      	</div>
					                    </div>
							            <div class="form-group">
					                    	<div class="col-sm-1"></div>
							                <label class="col-sm-3 control-label" style="text-align: left;">Jabatan</label>
							                <div class="col-sm-8">
					                        	<select name="fjabatan" class="form-control" required>
								                    <option value="">-- Jabatan --</option>
								                    <option value="Kepala Tata Usaha" <?php echo ($data_pengguna->jabatan == 'Kepala Tata Usaha' ? ' selected' : ''); ?>>Kepala Tata Usaha</option>
								                    <option value="Staf Tata Usaha" <?php echo ($data_pengguna->jabatan == 'Staf Tata Usaha' ? ' selected' : ''); ?>>Staf Tata Usaha</option>
								                    <option value="Tenaga Pengajar" <?php echo ($data_pengguna->jabatan == 'Tenaga Pengajar' ? ' selected' : ''); ?>>Tenaga Pengajar</option>
								                </select>
					                      	</div>
							            </div>
							            <div class="form-group">
					                    	<div class="col-sm-1"></div>
							                <label class="col-sm-3 control-label" style="text-align: left;">Homebase</label>
							                <div class="col-sm-8">
					                        	<select name="fhomebase" class="form-control" required>
								                    <option value="">-- Homebase --</option>
								                    <option value="S1 Teknik Informatika" <?php echo ($data_pengguna->homebase == 'S1 Teknik Informatika' ? ' selected' : ''); ?>>S1 Teknik Informatika</option>
								                    <option value="S1 Sistem Informasi" <?php echo ($data_pengguna->homebase == 'S1 Sistem Informasi' ? ' selected' : ''); ?>>S1 Sistem Informasi</option>
								                    <option value="D3 Sistem Informasi" <?php echo ($data_pengguna->homebase == 'D3 Sistem Informasi' ? ' selected' : ''); ?>>D3 Sistem Informasi</option>
								                    <option value="Fakultas Teknologi Informasi" <?php echo ($data_pengguna->homebase == 'Fakultas Teknologi Informasi' ? ' selected' : ''); ?>>Fakultas Teknologi Informasi</option>
								                </select>
					                      	</div>
							            </div>
					                </div>
					            </div>
					    </div>
				    </div>
				    <div class="box-footer"></div>
				</div>
			</div>
			<div class="col-md-4">
			    <div class="box box-default">
				    <div class="box-header with-border">
				        <h3 class="box-title"><i class="fas fa-user-circle"></i> Informasi Akun</h3>
				        <div class="box-tools pull-right">
					        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				        </div>
				    </div>
				    <div class="box-body">
					    <div class="row">
						        <div class="col-md-12">
						            <div class="box-body">
							            <div class="form-group">
							                <label class="col-sm-4 control-label" style="text-align: left;">Username</label>
							                <div class="col-sm-8">
					                        	<input type="text" name="fusername" minlength="6" maxlength="20" class="form-control" value="<?php echo $data_auth->username ?>" required>
					                      	</div>
							            </div><br><br>
							            <div class="form-group">
							                <label class="col-sm-4 control-label" style="text-align: left;">Password</label>
							                <div class="col-sm-8">
					                        	<input type="text" name="fpassword" minlength="6" maxlength="20" class="form-control" value="<?php echo $data_auth->password ?>" required>
					                      	</div>
							            </div><br><br>
							            <div class="form-group">
							                <label class="col-sm-4 control-label" style="text-align: left;">Level</label>
							                <div class="col-sm-8">
					                        	<input type="text" class="form-control" value="<?php echo $hak_akses->hak_akses ?>" readonly>
					                      	</div>
							            </div>
						            </div>
						            <div class="box-footer pull-right">
							            <input type="submit" name="submit" class="btn btn-info" value="Simpan">
						            </div>
						        </div>
					        </form>
					    </div>
				    </div>
				    <div class="box-footer"></div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</section>
</div>

<?php 
	$this->load->view("public_part/footer");
?>