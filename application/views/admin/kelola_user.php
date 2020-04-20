<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  	<link rel="shortcut icon" href="<?php echo base_url().'assets/img/logo-si-raps-37x37.png'?>">
 	<title>User | Si-RAPS</title>
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
 	<!-- CSS DataTable -->
 	<link rel="stylesheet" href="<?php echo base_url().'assets/datatables/css/bootstrap.min.css'?>">
 	<link rel="stylesheet" href="<?php echo base_url().'assets/datatables/css/dataTables.bootstrap.min.css'?>">
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
		   				<a class="btn btn-success btn-md" href='<?php echo base_url() ?>admin/kelola_user/tambah_user'><i class="fa fa-user-plus"></i> TAMBAH USER</a><br><br>
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
					                            	<a class="btn btn-success btn-sm" href="<?php echo base_url() ?>admin/kelola_user/edit_user/<?php echo $user->id_user ?>"><i class="fa fa-edit"></i></a>
					                            </td>
			                          	<?php
			                            	}else{
			                            ?>
			                            		<td style="text-align: center;">
					                            	<a class="btn btn-success btn-sm" href="<?php echo base_url() ?>admin/kelola_user/edit_user/<?php echo $user->id_user ?>"><i class="fa fa-edit"></i></a>
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
	<!-- DataTable Plugin -->
	<script src="<?php echo base_url().'assets/datatables/js/jquery.dataTables.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/datatables/js/dataTables.bootstrap.min.js'?>"></script>
	<script>
    $(document).ready(function(){
        $('#data-table').DataTable();
    });
</script>
</body>
</html>