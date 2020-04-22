<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  	<link rel="shortcut icon" href="<?php echo base_url().'assets/img/logo-si-raps-37x37.png'?>">
 	<title>Edit Profil | Si-RAPS</title>
 	<!-- Tell the browser to be responsive to screen width -->
 	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 	<!-- Bootstrap 3.3.7 -->
 	<link rel="stylesheet" href="<?php echo base_url().'assets/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css'?>">
 	<!-- Font Awesome -->
 	<link rel="stylesheet" href="<?php echo base_url().'assets/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css'?>">
 	<!-- Theme style -->
 	<link rel="stylesheet" href="<?php echo base_url().'assets/AdminLTE/dist/css/AdminLTE.min.css'?>">
 	<!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
 	<link rel="stylesheet" href="<?php echo base_url().'assets/AdminLTE/dist/css/skins/_all-skins.min.css'?>">
 	<!-- Font Awesome v5.8.2 -->
 	<link rel="stylesheet" href="<?php echo base_url().'assets/fontawesome/css/all.css'?>">
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
	  	<a href="#" class="logo" style="text-decoration:none">
	  		<span class="logo-mini"><img src="<?php echo base_url().'assets/img/logo-si-raps-37x37.png'?>"></span>
	  		<span class="logo-lg"><img src="<?php echo base_url().'assets/img/logo-si-raps-135x36.png'?>"></span>
	  	</a>
	  	<nav class="navbar navbar-static-top">
	  		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
	   			<span class="sr-only">Toggle navigation</span>
	  		</a>
	  		<div class="navbar-custom-menu">
	  			<ul class="nav navbar-nav">
	   				<li class="user user-menu">
	     				<a href="<?php echo base_url() ?>login/logout">
	     					<i class="fas fa-sign-out-alt"></i><span class="hidden-xs"> Logout</span>
	     				</a>
	   				</li>
	  			</ul>
	  		</div>
	  	</nav>
		</header>
		<aside class="main-sidebar">
		  	<section class="sidebar">
				<div class="user-panel">
			   		<div class="pull-left image">
			   			<?php
				   			if($this->session->userdata("level") == "Admin"){
				                echo '<img src="'.base_url().'assets/img/ava-admin.png" class="img-circle">';
				            }else if($this->session->userdata("level") == "Tim Akreditasi"){
				                echo '<img src="'.base_url().'assets/img/ava-tim-akreditasi.png" class="img-circle">';
				            }else if($this->session->userdata("level") == "Kaprodi"){
				                echo '<img src="'.base_url().'assets/img/ava-kaprodi.png" class="img-circle">';
				            }
				        ?>
			   		</div>
			   		<div class="pull-left info">
			   			<p><?php echo $this->session->userdata("user_nama") ?></p>
			   			<a><?php echo $this->session->userdata("level") ?></a><br><br>
			   		</div>
		 		</div>
		 		<ul class="sidebar-menu" data-widget="tree">
		  			<li class="header">MAIN NAVIGATION</li>
		 			<li>
						<a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi"><i class="fas fa-folder-open"></i> <span>Dokumen Akreditasi</span></a>
					</li>
					<li>
						<a href="<?php echo base_url() ?>tim_akreditasi/kelola_dokumen"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
					</li>
					<li class="active">
						<a href="#"><i class="fas fa-user-circle"></i> <span>Akun</span></a>
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
	                <div class="col-md-1">
		   			</div>
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
								                          	<option value="3"<?php echo ($data_user->penanggungjawab_standar == '3' ? ' selected' : ''); ?>>3. Mahasiswa</option>
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
				          	<div class="box-footer">
				          	</div>
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
				          	<div class="box-footer">
				          	</div>
				        </div>
				    </div>
				    <div class="col-md-1">
		   			</div>
		   		</div>
		  	</section>
		</div>
		<footer class="main-footer">
			<div class="row">
				<div class="col-md-6"><strong>Copyright &copy; 2020 <a href="<?php echo base_url() ?>" style="text-decoration:none">Si-RAPS</a>.</strong> All rights reserved.</div>
				<div class="col-md-6" style="text-align: right;">Development Version</div>
			</div>
		</footer>
	</div>
	
	<script src="<?php echo base_url().'assets/AdminLTE/bower_components/jquery/dist/jquery.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js'?>"></script>
	<script>
	  	$.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url().'assets/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js'?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url().'assets/AdminLTE/dist/js/adminlte.min.js'?>"></script>
</body>
</html>