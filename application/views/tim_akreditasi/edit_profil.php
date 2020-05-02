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
				<a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi"><i class="fas fa-folder-open"></i> <span>Dokumen Akreditasi</span></a>
			</li>
			<li>
			<?php 
			    if($this->session->userdata("pj_standar") == "1"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_1"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("pj_standar") == "2"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_2"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("pj_standar") == "3"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_3"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("pj_standar") == "4"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_4"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("pj_standar") == "5"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_5"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("pj_standar") == "6"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_6"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("pj_standar") == "7"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_7"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("pj_standar") == "8"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_8"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("pj_standar") == "9"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_9"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }
			?>
			</li>
			<li class="active">
				<a href="<?php echo base_url() ?>tim_akreditasi/akun"><i class="fas fa-user-circle"></i> <span>Akun</span></a>
			</li>
		</ul>
	</section>
</aside>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Edit Profil</h1>
		<ol class="breadcrumb">
		    <li><a href="<?php echo base_url() ?>tim_akreditasi/akun"><i class="fa fa-tachometer-alt"></i> Akun</a></li>
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
					        <form class="form-horizontal" method="POST" action="<?php echo base_url() ?>tim_akreditasi/akun/update_profil">
					            <div class="col-md-12">
					                <div class="box-body">
					                    <div class="form-group">
					                      	<label class="col-sm-5 control-label" style="text-align: left;">Nama</label>
					                      	<div class="col-sm-7">
					                        	<input type="text" name="fnama" class="form-control" style="text-transform: capitalize;" value="<?php echo $data_user->nama ?>" required>
					                        	<input type="hidden" name="id_user" value="<?php echo $data_user->id_user ?>">
					                      	</div>
					                    </div>
					                    <div class="form-group">
					                      	<label class="col-sm-5 control-label" style="text-align: left;">NIDN</label>
					                      	<div class="col-sm-7">
					                        	<input type="text" name="fnidn" minlength="10" maxlength="10" onkeypress="return hanyaAngka(event)" class="form-control" value="<?php echo $data_user->nidn ?>" required>
					                      	</div>
					                    </div>
							            <div class="form-group">
											<label class="col-sm-5 control-label" style="text-align: left;">Jabatan</label>
							                <div class="col-sm-7">
					                        	<input type="text" name="fjabatan" minlength="6" maxlength="20" class="form-control" value="<?php echo $data_user->jabatan ?>" readonly>
					                      	</div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-5 control-label" style="text-align: left;">Penanggungjawab Standar</label>
							                <div class="col-sm-7">
					                        	<select name="fpenanggungjawab_standar" class="form-control" required>
								                    <option value="">-- Penanggungjawab Standar --</option>
								                    <option value="1" <?php echo ($data_user->penanggungjawab_standar == '1' ? ' selected' : ''); ?>>1. Visi, Misi, Tujuan, dan Strategi</option>
								                    <option value="2"<?php echo ($data_user->penanggungjawab_standar == '2' ? ' selected' : ''); ?>>2. Tata Pamong, Tata Kelola, dan Kerjasama</option>
								                    option value="3"<?php echo ($data_user->penanggungjawab_standar == '3' ? ' selected' : ''); ?>>3. Mahasiswa</option>
								                    <option value="4"<?php echo ($data_user->penanggungjawab_standar == '4' ? ' selected' : ''); ?>>4. Sumber Daya Manusia</option>
								                    <option value="5"<?php echo ($data_user->penanggungjawab_standar == '5' ? ' selected' : ''); ?>>5. Keuangan, Sarana, dan Prasarana</option>
								                    <option value="6"<?php echo ($data_user->penanggungjawab_standar == '6' ? ' selected' : ''); ?>>6. Pendidikan</option>
								                    <option value="7"<?php echo ($data_user->penanggungjawab_standar == '7' ? ' selected' : ''); ?>>7. Penelitian</option>
								                    <option value="8"<?php echo ($data_user->penanggungjawab_standar == '8' ? ' selected' : ''); ?>>8. Pengabdian kepada Masyarakat</option>
								                    <option value="9"<?php echo ($data_user->penanggungjawab_standar == '9' ? ' selected' : ''); ?>>9. Luaran dan Capaian Tridharma</option>
								                    <option value="-"<?php echo ($data_user->penanggungjawab_standar == '-' ? ' selected' : ''); ?>>-</option>
								                </select>
					                      	</div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-5 control-label" style="text-align: left;">Homebase</label>
							                <div class="col-sm-7">
					                        	<select name="fhomebase" class="form-control" required>
								                    <option value="">-- Homebase --</option>
								                    <option value="S1 Teknik Informatika" <?php echo ($data_user->homebase == 'S1 Teknik Informatika' ? ' selected' : ''); ?>>S1 Teknik Informatika</option>
								                    <option value="S1 Sistem Informasi" <?php echo ($data_user->homebase == 'S1 Sistem Informasi' ? ' selected' : ''); ?>>S1 Sistem Informasi</option>
								                    <option value="D3 Sistem Informasi" <?php echo ($data_user->homebase == 'D3 Sistem Informasi' ? ' selected' : ''); ?>>D3 Sistem Informasi</option>
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
					                        	<input type="text" name="fusername" minlength="6" maxlength="20" class="form-control" value="<?php echo $data_user->username ?>" required>
					                      	</div>
							            </div><br><br>
							            <div class="form-group">
							                <label class="col-sm-4 control-label" style="text-align: left;">Password</label>
							                <div class="col-sm-8">
					                        	<input type="text" name="fpassword" minlength="6" maxlength="20" class="form-control" value="<?php echo $data_user->password ?>" required>
					                      	</div>
							            </div><br><br>
							            <div class="form-group">
							                <label class="col-sm-4 control-label" style="text-align: left;">Level</label>
							                <div class="col-sm-8">
					                        	<input type="text" name="flevel" minlength="6" maxlength="20" class="form-control" value="<?php echo $data_user->level ?>" readonly>
					                      	</div>
							            </div><br><br>
							            <div>
							                <label class="control-label">&nbsp;&nbsp;&nbsp;</label>
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