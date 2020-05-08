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
		<h1>Pengguna</h1>
		<ol class="breadcrumb">
		    <li><a href="#"><i class="fa fa-tachometer-alt"></i> Pengguna</a></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
		   	<div class="col-md-12">
		   		<a class="btn btn-success btn-md" href="<?php echo base_url() ?>admin/kelola_pengguna/tambah_pengguna"><i class="fa fa-user-plus"></i> TAMBAH PENGGUNA</a><br><br>
		   		<?php if(isset($error)) { echo $error; }; ?>
			    <table class="table table-striped table-bordered table-responsive" id="data-table" width="100%" cellspacing="0">
				    <thead>
						<tr>
							<th><strong>No</strong></th>
							<th><strong>Nama</strong></th>
							<th><strong>NIDN</strong></th>
							<th><strong>Jabatan</strong></th>
							<th><strong>PJ Kriteria</strong></th>
							<th><strong>Homebase</strong></th>
							<th><strong>Username</strong></th>
							<th><strong>Level</strong></th>
							<th><strong>Aksi</strong></th>
						</tr>
				    </thead>
				    <tbody>
				        <?php 
			                $no = 1;
			                foreach($data_pengguna as $pengguna){
			            ?>
			                <tr>
								<td><?php echo $no++;?></td>
								<td style="text-transform: capitalize;"><?php echo $pengguna->nama;?></td>
								<td style="text-align: center;"><?php echo $pengguna->nidn;?></td>
								<td><?php echo $pengguna->jabatan;?></td>
								<td style="text-align: center;"><?php echo $pengguna->kriteria;?></td>
								<td><?php echo $pengguna->homebase;?></td>
								<td><?php echo $pengguna->username;?></td>
								<td><?php echo $pengguna->hak_akses;?></td>
								<?php 
			                        if($pengguna->id_hak_akses == "1"){
								?>
			                          	<td style="text-align: center;">
					                        <a class="btn btn-primary btn-sm" title="Edit" href="<?php echo base_url() ?>admin/kelola_pengguna/edit_pengguna/<?php echo $pengguna->id_pengguna ?>"><i class="fa fa-edit"></i></a>
					                    </td>
								<?php
			                        }else{
								?>
			                            <td style="text-align: center;">
					                        <a class="btn btn-primary btn-sm" title="Edit" href="<?php echo base_url() ?>admin/kelola_pengguna/edit_pengguna/<?php echo $pengguna->id_pengguna ?>"><i class="fa fa-edit"></i></a>
		                					<a class="btn btn-danger btn-sm" title="Hapus" href="<?php echo base_url() ?>admin/kelola_pengguna/hapus_pengguna/<?php echo $pengguna->id_pengguna ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></a>
					                    </td>
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