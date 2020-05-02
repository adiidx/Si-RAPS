<!-- header di controller Kelola_dokumen -->

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
			<li class="active">
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
			<li>
				<a href="<?php echo base_url() ?>tim_akreditasi/akun"><i class="fas fa-user-circle"></i> <span>Akun</span></a>
			</li>
		</ul>
	</section>
</aside>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Upload Dokumen</h1>
		<ol class="breadcrumb">
		    <li><a href="#"><i class="fa fa-tachometer-alt"></i> Upload Dokumen</a></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
		   	<div class="col-md-12">
		   		<div class="box box-default">
				    <div class="box-header with-border">
				        <h3 class="box-title"><i class="fas fa-upload"></i> Upload Dokumen Standar <?php echo $this->session->userdata('pj_standar'); ?></h3>
				        <div class="box-tools pull-right">
					        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				        </div>
				    </div>
				    <div class="box-body">
					    <div class="row">
					        <?php echo form_open_multipart('tim_akreditasi/kelola_dokumen/upload') ?>
					        	<div class="col-md-2"></div>
					            <div class="col-md-8">
					                <div class="box-body form-horizontal">
					                	<div class="form-group">
					                      	<label class="col-sm-4 control-label">Judul Dokumen</label>
					                      	<div class="col-sm-8">
					                        	<input type="text" name="fjudul_dokumen" class="form-control" style="text-transform: capitalize;" placeholder="Masukkan Judul Dokumen" required>
					                      	</div>
					                    </div>
					                	<div class="form-group">
					                      	<label class="col-sm-4 control-label">(DOC, DOCX, PDF)</label>
					                      	<div class="col-sm-8">
					                        	<input type="file" name="fnama_dokumen" class="form-control" required>
					                        	<?php echo $error ?>
					                      	</div>
					                    </div>
					                    <div class="form-group">
					                      	<label class="col-sm-4 control-label">Standar</label>
					                      	<div class="col-sm-8">
					                        	<input type="text" name="fstandar" class="form-control" style="text-transform: capitalize;" value="<?php echo $this->session->userdata('pj_standar'); ?>" readonly>
					                      	</div>
					                    </div>
							            <div class="form-group">
							                <label class="col-sm-4 control-label">Penyusun</label>
					                      	<div class="col-sm-8">
					                        	<input type="hidden" name="fid_user" class="form-control" style="text-transform: capitalize;" value="<?php echo $this->session->userdata('user_id'); ?>" readonly>
					                        	<input type="text" name="" class="form-control" style="text-transform: capitalize;" value="<?php echo $this->session->userdata('user_nama'); ?>" readonly>
					                      	</div>
							            </div>
							            <div class="form-group">
					                      	<label class="col-sm-4 control-label">NIDN</label>
					                      	<div class="col-sm-8">
					                        	<input type="text" name="" class="form-control" style="text-transform: capitalize;" value="<?php echo $this->session->userdata('user_nidn'); ?>" readonly>
					                      	</div>
					                    </div>
							            <div class="box-footer pull-right">
									        <input type="reset" class="btn btn-default" value="Batal">
									        <input type="submit" name="submit" class="btn btn-info" value="Simpan">
								        </div>
					                </div>
					            </div>
						        <div class="col-md-2"></div>
					        <?php echo form_close() ?>
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