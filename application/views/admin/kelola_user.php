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
				<a href="#"><i class="fas fa-user-cog"></i> <span>Kelola User</span></a>
			</li>
			<li>
				<a href="<?php echo base_url() ?>admin/akun"><i class="fas fa-user-circle"></i> <span>Akun</span></a>
			</li>
		</ul>
	</section>
</aside>

<div class="content-wrapper">
	<section class="content-header">
		<h1>User</h1>
		<ol class="breadcrumb">
		    <li><a href="#"><i class="fa fa-tachometer-alt"></i> User</a></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
		   	<div class="col-md-12">
		   		<a class="btn btn-success btn-md" href="<?php echo base_url() ?>admin/kelola_user/tambah_user"><i class="fa fa-user-plus"></i> TAMBAH USER</a><br><br>
		   		<?php if(isset($error)) { echo $error; }; ?>
			    <table class="table table-striped table-bordered table-responsive" id="data-table" width="100%" cellspacing="0">
				    <thead>
						<tr>
							<th><strong>No</strong></th>
							<th><strong>Nama</strong></th>
							<th><strong>NIDN</strong></th>
							<th><strong>Jabatan</strong></th>
							<th><strong>PJ Standar</strong></th>
							<th><strong>Homebase</strong></th>
							<th><strong>Username</strong></th>
							<th><strong>Level</strong></th>
							<th><strong>Aksi</strong></th>
						</tr>
				    </thead>
				    <tbody>
				        <?php 
			                $no = 1;
			                foreach($data_user as $user){
			            ?>
			                <tr>
								<td><?php echo $no++;?></td>
								<td><?php echo $user->nama;?></td>
								<td style="text-align: center;"><?php echo $user->nidn;?></td>
								<td><?php echo $user->jabatan;?></td>
								<td style="text-align: center;"><?php echo $user->penanggungjawab_standar;?></td>
								<td><?php echo $user->homebase;?></td>
								<td><?php echo $user->username;?></td>
								<td><?php echo $user->level;?></td>
								<?php 
			                        if($user->level == "Admin"){
								?>
			                          	<td style="text-align: center;">
					                        <a class="btn btn-primary btn-sm" href="<?php echo base_url() ?>admin/kelola_user/edit_user/<?php echo $user->id_user ?>"><i class="fa fa-edit"></i></a>
					                    </td>
								<?php
			                        }else{
								?>
			                            <td style="text-align: center;">
					                        <a class="btn btn-primary btn-sm" href="<?php echo base_url() ?>admin/kelola_user/edit_user/<?php echo $user->id_user ?>"><i class="fa fa-edit"></i></a>
		                					<a class="btn btn-danger btn-sm" href="<?php echo base_url() ?>admin/kelola_user/hapus_user/<?php echo $user->id_user ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></a>
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