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
		<h1>Tambah Pengguna</h1>
		<ol class="breadcrumb">
		    <li><a href="<?php echo base_url() ?>admin/kelola_pengguna"><i class="fa fa-tachometer-alt"></i> Pengguna</a></li>
		    <li class="active">Tambah Pengguna</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
			    <div class="box box-default">
				    <div class="box-header with-border">
				        <h3 class="box-title"><i class="fas fa-user-plus"></i> Tambah Pengguna</h3>
				        <div class="box-tools pull-right">
					        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				        </div>
				    </div>
				    <div class="box-body">
					    <div class="row">
					        <form class="form-horizontal" method="POST" action="<?php echo base_url() ?>admin/kelola_pengguna/simpan_pengguna">
					            <div class="col-md-6">
					                <h4 style="text-align:right;"><i class="fas fa-id-card"></i> Informasi Pribadi</h4><hr>
					                <div class="box-body">
					                    <div class="form-group">
					                      	<label class="col-sm-4 control-label">Nama</label>
					                      	<div class="col-sm-8">
					                        	<input type="text" name="fnama" class="form-control" style="text-transform: capitalize;" placeholder="Nama" required>
					                      	</div>
					                    </div>
					                    <div class="form-group">
					                      	<label class="col-sm-4 control-label">NIDN</label>
					                      	<div class="col-sm-8">
								                <script>
								                    function hanyaAngka(evt){
									                    var charCode = (evt.which) ? evt.which : event.keyCode
									                    if (charCode > 31 && (charCode < 48 || charCode > 57))
									                    return false;
									                    return true;
								                    }
								                </script>
					                        	<input type="text" name="fnidn" minlength="10" maxlength="10" onkeypress="return hanyaAngka(event)" class="form-control" placeholder="NIDN" required>
					                      	</div>
					                    </div>
							            <div class="form-group">
							                <label class="col-sm-4 control-label">Jabatan</label>
							                <div class="col-sm-8">
								                <select name="fjabatan" class="form-control" required>
								                    <option value="">-- Jabatan --</option>
								                    <option value="Ketua Program Studi">Ketua Program Studi</option>
								                    <option value="Tenaga Pengajar">Tenaga Pengajar</option>
								                </select>
							                </div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-4 control-label">Penanggungjawab Kriteria</label>
							                <div class="col-sm-8">
								                <select name="fid_kriteria" class="form-control" required>
								                    <option value="">-- Penanggungjawab Kriteria --</option>
								                    <option value="1">1. Visi, Misi, Tujuan, dan Strategi</option>
								                    <option value="2">2. Tata Pamong, Tata Kelola, dan Kerjasama</option>
								                    <option value="3">3. Mahasiswa</option>
								                    <option value="4">4. Sumber Daya Manusia</option>
								                    <option value="5">5. Keuangan, Sarana, dan Prasarana</option>
								                    <option value="6">6. Pendidikan</option>
								                    <option value="7">7. Penelitian</option>
								                    <option value="8">8. Pengabdian kepada Masyarakat</option>
								                    <option value="9">9. Luaran dan Capaian Tridharma</option>
								                    <option value="0">Tidak Ada</option>
								                </select>
							                </div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-4 control-label">Homebase</label>
							                <div class="col-sm-8">
								                <select name="fhomebase" class="form-control" required>
								                    <option value="">-- Homebase --</option>
								                    <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
								                    <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
								                    <option value="D3 Sistem Informasi">D3 Sistem Informasi</option>
								                </select>
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
							                    <input type="text" name="fusername" minlength="6" maxlength="20" class="form-control" placeholder="Username" required>
							                </div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-4 control-label">Password</label>
							                <div class="col-sm-8">
							                    <input type="text" name="fpassword" minlength="6" maxlength="20" class="form-control" placeholder="Password" required>
							                </div>
							            </div>
							            <div class="form-group">
							                <label class="col-sm-4 control-label">Hak Akses</label>
							                <div class="col-sm-8">
								                <select name="fhak_akses" class="form-control" required>
								                    <option value="">-- Hak Akses --</option>
								                    <option value="3">Kaprodi</option>
								                    <option value="2">Tim Akreditasi</option>
								                </select>
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