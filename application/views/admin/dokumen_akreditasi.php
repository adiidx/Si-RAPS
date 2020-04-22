<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  	<link rel="shortcut icon" href="<?php echo base_url().'assets/img/logo-si-raps-37x37.png'?>">
 	<title>Dokumen Akreditasi | Si-RAPS</title>
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
	     				<a href="<?php echo base_url() ?>index.php/login/logout">
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
		 			<li class="active">
						<a href="#"><i class="fas fa-folder-open"></i> <span>Dokumen Akreditasi</span></a>
					</li>
					<li>
						<a href="<?php echo base_url() ?>admin/kelola_user"><i class="fas fa-user-cog"></i> <span>Kelola User</span></a>
					</li>
					<li>
						<a href="<?php echo base_url() ?>admin/akun"><i class="fas fa-user-circle"></i> <span>Akun</span></a>
					</li>
		  		</ul>
		  	</section>
		</aside>

		<div class="content-wrapper">
		  	<section class="content-header">
		  		<h1>Dokumen Akreditasi</h1>
		     	<ol class="breadcrumb">
		       		<li><a href="#"><i class="fa fa-tachometer-alt"></i> Dokumen Akreditasi</a></li>
		     	</ol>
		  	</section>
		  	<section class="content">
		   		<div class="row">
		     		<div class="col-lg-4 col-xs-6">
		     			<div class="small-box bg-light-blue">
		       				<div class="inner">
		       					<h3>
		              				Standar 1
		            			</h3>
		      					<p>Visi, Misi, Tujuan, dan Strategi</p>
		       				</div>
		       				<div class="icon">
		       					<i class="fas fa-bullseye" style="font-size:70px"></i>
		       				</div>
		       				<a href="#" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
		     			</div>
		     		</div>
		      		<div class="col-lg-4 col-xs-6">
		       			<div class="small-box bg-olive">
		         			<div class="inner">
		         				<h3>
				              		Standar 2
				            	</h3>
		         				<p>Tata Pamong, Tata Kelola, dan Kerjasama</p>
		         			</div>
		         			<div class="icon">
		         				<i class="fas fa-users" style="font-size:70px"></i>
		         			</div>
		         			<a href="#" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
		       			</div>
		      		</div>
		      		<div class="col-lg-4 col-xs-6">
		       			<div class="small-box bg-orange">
		         			<div class="inner">
		         				<h3>
		              				Standar 3
		            			</h3>
		         				<p>Mahasiswa</p>
		         			</div>
		         			<div class="icon">
		         				<i class="fas fa-user-graduate" style="font-size:70px"></i>
		         			</div>
		         			<a href="#" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
		       			</div>
		      		</div>
		      		<div class="col-lg-4 col-xs-6">
		       			<div class="small-box bg-blue">
		         			<div class="inner">
		         				<h3>
		              				Standar 4
		            			</h3>
		         				<p>Sumber Daya Manusia</p>
		         			</div>
		         			<div class="icon">
		         				<i class="fas fa-chalkboard-teacher" style="font-size:70px"></i>
		         			</div>
		         			<a href="#" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
		       			</div>
		      		</div>
		      		<div class="col-lg-4 col-xs-6">
		       			<div class="small-box bg-green">
		         			<div class="inner">
		         				<h3>
		              				Standar 5
		            			</h3>
		         				<p>Keuangan, Sarana, dan Prasarana</p>
		         			</div>
		         			<div class="icon">
		         				<i class="fas fa-money-check-alt" style="font-size:70px"></i>
		         			</div>
		         			<a href="#" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
		       			</div>
		      		</div>
		      		<div class="col-lg-4 col-xs-6">
		       			<div class="small-box bg-yellow">
		         			<div class="inner">
		         				<h3>
		              				Standar 6
		            			</h3>
		         				<p>Pendidikan</p>
		         			</div>
		         			<div class="icon">
		         				<i class="fas fa-graduation-cap" style="font-size:70px"></i>
		         			</div>
		         			<a href="#" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
		       			</div>
		      		</div>
		      		<div class="col-lg-4 col-xs-6">
		       			<div class="small-box bg-light-blue">
		         			<div class="inner">
		         				<h3>
		              				Standar 7
		            			</h3>
		         				<p>Penelitian</p>
		         			</div>
		         			<div class="icon">
		         				<i class="fab fa-researchgate" style="font-size:70px"></i>
		         			</div>
		         			<a href="#" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
		       			</div>
		      		</div>
		      		<div class="col-lg-4 col-xs-6">
		       			<div class="small-box bg-olive">
		         			<div class="inner">
		         				<h3>
		              				Standar 8
		            			</h3>
		         				<p>Pengabdian kepada Masyarakat</p>
		         			</div>
		         			<div class="icon">
		         				<i class="fas fa-people-carry" style="font-size:70px"></i>
		         			</div>
		         			<a href="#" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
		       			</div>
		      		</div>
		      		<div class="col-lg-4 col-xs-6">
		       			<div class="small-box bg-orange">
		         			<div class="inner">
		         				<h3>
		              				Standar 9
		            			</h3>
		         				<p>Luaran dan Capaian Tridharma</p>
		         			</div>
		         			<div class="icon">
		         				<i class="fas fa-address-book" style="font-size:70px"></i>
		         			</div>
		         			<a href="#" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
		       			</div>
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