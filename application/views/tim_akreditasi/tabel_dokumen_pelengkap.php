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
		 	<li class="active">
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
			<li>
				<a href="<?php echo base_url() ?>tim_akreditasi/akun"><i class="fas fa-user-circle"></i> <span>Akun</span></a>
			</li>
		</ul>
	</section>
</aside>

<div class="content-wrapper">
	<section class="content-header">
		<h1><?= $header ?></h1>
		<ol class="breadcrumb">
		    <li><a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi"><i class="fa fa-tachometer-alt"></i> Dokumen Akreditasi</a></li>
		    <li class="active"><?= $header ?></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
		   	<div class="col-md-12">
			    <a class="btn btn-success btn-md" href="<?php echo base_url() ?>tim_akreditasi/kelola_dokumen/upload_dokumen_pelengkap"><i class="fas fa-upload"></i> UPLOAD DOKUMEN</a><br><br>
			    <table class="table table-striped table-bordered table-responsive" id="data-table" width="100%" cellspacing="0">
				    <thead>
					    <tr>
					        <th><strong>No</strong></th>
					        <th><strong>Judul Dokumen</strong></th>
					        <th><strong>Nama Dokumen</strong></th>
					        <th><strong>Penyusun</strong></th>
					        <th><strong>Terakhir Diperbarui</strong></th>
					        <th width="130px"><strong>Aksi</strong></th>
					    </tr>
				    </thead>
				    <tbody>
				        <?php 
			                $no = 1;
			                foreach($data_dokumen as $dokumen){
			            ?>
			                <tr>
			                    <td><?php echo $no++;?></td>
			                    <td style="text-transform: capitalize;"><?php echo $dokumen->judul_dokumen;?></td>
			                    <td><?php echo $dokumen->nama_dokumen;?></td>
			                    <td><?php echo $dokumen->nama;?></td>
			                    <td><?php echo $dokumen->tanggal_upload;?></td>
				                <td style="text-align: center;">
						            <a class="btn btn-success btn-sm" title="Download" href='<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/download_dokumen_pelengkap/<?php echo $dokumen->nama_dokumen; ?>'><i class="fas fa-download"></i></a>
						            <a class="btn btn-primary btn-sm" title="Perbarui" href="<?php echo base_url() ?>tim_akreditasi/kelola_dokumen/perbarui_dokumen_pelengkap/<?php echo $dokumen->id_dokumen_pl ?>"><i class="fa fa-edit"></i></a>
					                <a class="btn btn-danger btn-sm" title="Hapus" href="<?php echo base_url() ?>tim_akreditasi/kelola_dokumen/hapus_dokumen_pelengkap/<?php echo $dokumen->id_dokumen_pl ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></a>
						        </td>
			                </tr>
			            <?php 
			                }
			            ?>
				    </tbody>
				</table>
			</div>
		</div>
	</section>
</div>

<?php 
	$this->load->view("public_part/footer");
?>