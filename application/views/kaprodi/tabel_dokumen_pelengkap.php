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
				<a href="<?php echo base_url() ?>kaprodi/dokumen_akreditasi"><i class="fas fa-folder-open"></i> <span>Dokumen Akreditasi</span></a>
			</li>
			<li>
				<a href="<?php echo base_url() ?>kaprodi/validasi_dokumen"><i class="fas fa-file-signature"></i> <span>Validasi Dokumen</span></a>
			</li>
			<li>
				<a href="<?php echo base_url() ?>kaprodi/akun"><i class="fas fa-user-circle"></i> <span>Akun</span></a>
			</li>
		</ul>
	</section>
</aside>

<div class="content-wrapper">
	<section class="content-header">
		<h1><?= $header ?></h1>
		<ol class="breadcrumb">
		    <li><a href="<?php echo base_url() ?>kaprodi/dokumen_akreditasi"><i class="fa fa-tachometer-alt"></i> Dokumen Akreditasi</a></li>
		    <li class="active"><?= $header ?></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
		   	<div class="col-md-12">
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
						            <a class="btn btn-success btn-sm" title="Download" href='<?php echo base_url() ?>kaprodi/dokumen_akreditasi/download_dokumen_pelengkap/<?php echo $dokumen->nama_dokumen; ?>'><i class="fas fa-download"></i><b> DOWNLOAD</b></a>
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