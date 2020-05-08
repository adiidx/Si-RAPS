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
				<a href="<?php echo base_url() ?>kaprodi/dokumen_akreditasi"><i class="fas fa-folder-open"></i> <span>Dokumen Akreditasi</span></a>
			</li>
			<li class="active">
				<a href="#"><i class="fas fa-file-signature"></i> <span>Validasi Dokumen</span></a>
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
		    <li><a href="#"><i class="fa fa-tachometer-alt"></i> <?= $header ?></a></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
		   	<div class="col-md-12">
			    <table class="table table-striped table-bordered table-responsive" id="data-table" width="100%" cellspacing="0">
				    <thead>
					    <tr>
					        <th><strong>Kriteria</strong></th>
					        <th><strong>Judul Dokumen</strong></th>
					        <th><strong>Nama Dokumen</strong></th>
					        <th><strong>Penyusun</strong></th>
					        <th><strong>Tanggal Upload</strong></th>
					        <th><strong>Status Dokumen</strong></th>
					        <th><strong>Validasi / Download</strong></th>
					    </tr>
				    </thead>
				    <tbody>
				        <?php
			                foreach($data_dokumen as $dokumen){
			            ?>
			                <tr>
			                    <td><?php echo $dokumen->kriteria;?></td>
			                    <td style="text-transform:capitalize;"><?php echo $dokumen->judul_dokumen;?></td>
			                    <td><?php echo $dokumen->nama_dokumen;?></td>
			                    <td><?php echo $dokumen->nama;?></td>
			                    <td><?php echo $dokumen->tanggal_upload;?></td>
			                    <?php
			                    	if($dokumen->status_dokumen == "Telah Disetujui"){
			                    ?>
					                    <td style="text-align: center; text-transform: uppercase;">
					                    	<a class="btn btn-success btn-sm"><i class="fa fa-check"></i><b> <?php echo $dokumen->status_dokumen;?></b></a>
					                    </td>
			                    <?php
			                    	}else if($dokumen->status_dokumen == "Perlu Revisi"){
			                    ?>
					                    <td style="text-align: center; text-transform: uppercase;">
					                    	<a class="btn btn-primary btn-sm"><i class="fa fa-edit"></i><b> <?php echo $dokumen->status_dokumen;?></b></a>
					                    </td>
			                    <?php
			                    	}else if($dokumen->status_dokumen == "Belum Divalidasi"){
			                    ?>
					                    <td style="text-align: center; text-transform: uppercase;">
					                    	<a class="btn btn-danger btn-sm"><i class="fa fa-spinner"></i><b> <?php echo $dokumen->status_dokumen;?></b></a>
					                    </td>
			                    <?php
			                    	}
			                    ?>
			                    <?php 
			                        if($dokumen->status_dokumen == "Telah Disetujui"){
			                    ?>
			                    		<td style="text-align: center;">
				                			<a class="btn btn-success btn-sm" href='<?php echo base_url() ?>kaprodi/dokumen_akreditasi/download_dokumen/<?php echo $dokumen->nama_dokumen; ?>'><i class="fas fa-download"></i><b> DOWNLOAD</b></a>
					                    </td>
					            <?php 
			                        }else if($dokumen->status_dokumen == "Belum Divalidasi"){
			                    ?>
			                    		<td style="text-align: center;">
				                			<a class="text-success btn btn-sm" href='<?php echo base_url() ?>kaprodi/validasi_dokumen/setujui_dokumen/<?php echo $dokumen->id_dokumen; ?>'><i class="fas fa-check"></i><b> SETUJUI</b></a>
				                			<a class="text-primary btn btn-sm" href='<?php echo base_url() ?>kaprodi/validasi_dokumen/revisi_dokumen/<?php echo $dokumen->id_dokumen; ?>'><i class="fa fa-edit"></i><b> REVISI</b></a><br>
				                			<a class="btn btn-success btn-sm" href='<?php echo base_url() ?>kaprodi/dokumen_akreditasi/download_dokumen/<?php echo $dokumen->nama_dokumen; ?>'><i class="fas fa-download"></i><b> DOWNLOAD</b></a>
					                    </td>
					            <?php  
					            	}else{
					            ?>
					            		<td></td>
			                    <?php
			                        }
			                    ?>
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