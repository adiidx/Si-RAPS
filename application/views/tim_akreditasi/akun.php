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
			    if($this->session->userdata("sess_id_kriteria") == "1"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/kriteria_1"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("sess_id_kriteria") == "2"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/kriteria_2"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("sess_id_kriteria") == "3"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/kriteria_3"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("sess_id_kriteria") == "4"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/kriteria_4"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("sess_id_kriteria") == "5"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/kriteria_5"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("sess_id_kriteria") == "6"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/kriteria_6"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("sess_id_kriteria") == "7"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/kriteria_7"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("sess_id_kriteria") == "8"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/kriteria_8"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }else if($this->session->userdata("sess_id_kriteria") == "9"){
			?>
			        <a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/kriteria_9"><i class="fas fa-upload"></i> <span>Kelola Dokumen</span></a>
			<?php
			    }
			?>
			</li>
			<li class="active">
				<a href="#"><i class="fas fa-user-circle"></i> <span>Akun</span></a>
			</li>
		</ul>
	</section>
</aside>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Akun</h1>
		<ol class="breadcrumb">
		    <li><a href="#"><i class="fa fa-tachometer-alt"></i> Akun</a></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<?php if(isset($error)) { echo $error; }; ?>
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
						        <form class="form-horizontal" method="POST" action="<?php echo base_url() ?>tim_akreditasi/akun/edit_profil">
						            <div class="col-md-12">
						                <div class="box-body">
						                    <div class="form-group">
						                    	<div class="col-sm-1"></div>
						                      	<label class="col-sm-3 control-label" style="text-align: left;">Nama</label>
						                      	<div class="col-sm-8">
						                        	<label class="control-label" style="text-align: left;">:&nbsp;&nbsp;&nbsp;<?php echo $data_pengguna->nama ?></label>
						                      	</div>
						                    </div>
						                    <div class="form-group">
						                    	<div class="col-sm-1"></div>
						                      	<label class="col-sm-3 control-label" style="text-align: left;">NIDN</label>
						                      	<div class="col-sm-8">
						                        	<label class="control-label" style="text-align: left;">:&nbsp;&nbsp;&nbsp;<?php echo $data_pengguna->nidn ?></label>
						                      	</div>
						                    </div>
								            <div class="form-group">
						                    	<div class="col-sm-1"></div>
								                <label class="col-sm-3 control-label" style="text-align: left;">Jabatan</label>
								                <div class="col-sm-8">
						                        	<label class="control-label" style="text-align: left;">:&nbsp;&nbsp;&nbsp;<?php echo $data_pengguna->jabatan ?></label>
						                      	</div>
								            </div>
								            <div class="form-group">
						                    	<div class="col-sm-1"></div>
								                <label class="col-sm-3 control-label" style="text-align: left;">Penanggungjawab Kriteria</label>
								                <div class="col-sm-8">
						                        	<label class="control-label" style="text-align: left;">:&nbsp;&nbsp;&nbsp;<?php echo $data_auth->kriteria.". ".$kriteria->nama_kriteria ?></label>
						                      	</div>
								            </div>
								            <div class="form-group">
						                    	<div class="col-sm-1"></div>
								                <label class="col-sm-3 control-label" style="text-align: left;">Homebase</label>
								                <div class="col-sm-8">
						                        	<label class="control-label" style="text-align: left;">:&nbsp;&nbsp;&nbsp;<?php echo $data_pengguna->homebase ?></label>
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
						                        	<label class="control-label" style="text-align: left;">:&nbsp;&nbsp;&nbsp;<?php echo $data_auth->username ?></label>
						                      	</div>
								            </div><br><br>
								            <div class="form-group">
								                <label class="col-sm-4 control-label" style="text-align: left;">Password</label>
								                <div class="col-sm-8">
						                        	<label class="control-label" style="text-align: left;">:&nbsp;&nbsp;&nbsp;<?php echo $data_auth->password ?></label>
						                      	</div>
								            </div><br><br>
								            <div class="form-group">
								                <label class="col-sm-4 control-label" style="text-align: left;">Level</label>
								                <div class="col-sm-8">
						                        	<label class="control-label" style="text-align: left;">:&nbsp;&nbsp;&nbsp;<?php echo $hak_akses->hak_akses ?></label>
						                      	</div>
								            </div>
							            </div>
							            <div class="box-footer pull-right">
								            <input type="submit" name="submit" class="btn btn-success" value="Edit Profil">
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
		</div>
	</section>
</div>

<?php 
	$this->load->view("public_part/footer");
?>