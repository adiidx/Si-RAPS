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
				<a href="#"><i class="fas fa-folder-open"></i> <span>Dokumen Akreditasi</span></a>
			</li>
			<li>
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
		       			<h3>Standar 1</h3>
		      			<p>Visi, Misi, Tujuan, dan Strategi</p>
		       		</div>
		       		<div class="icon">
		       			<i class="fas fa-bullseye" style="font-size:70px"></i>
		       		</div>
		       		<a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_1" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		     	</div>
		    </div>
		    <div class="col-lg-4 col-xs-6">
		       	<div class="small-box bg-olive">
		        	<div class="inner">
		         		<h3>Standar 2</h3>
		         		<p>Tata Pamong, Tata Kelola, dan Kerjasama</p>
		         	</div>
		         	<div class="icon">
		         		<i class="fas fa-users" style="font-size:70px"></i>
		         	</div>
		         	<a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_2" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		       	</div>
		    </div>
		    <div class="col-lg-4 col-xs-6">
		       	<div class="small-box bg-orange">
		         	<div class="inner">
		         		<h3>Standar 3</h3>
		         		<p>Mahasiswa</p>
		         	</div>
		         	<div class="icon">
		         		<i class="fas fa-user-graduate" style="font-size:70px"></i>
		         	</div>
		         	<a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_3" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		       	</div>
		    </div>
		    <div class="col-lg-4 col-xs-6">
		       	<div class="small-box bg-blue">
		         	<div class="inner">
		         		<h3>Standar 4</h3>
		         		<p>Sumber Daya Manusia</p>
		         	</div>
		         	<div class="icon">
		         		<i class="fas fa-chalkboard-teacher" style="font-size:70px"></i>
		         	</div>
		         	<a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_4" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		       	</div>
		    </div>
		    <div class="col-lg-4 col-xs-6">
		       	<div class="small-box bg-green">
		         	<div class="inner">
		         		<h3>Standar 5</h3>
		         		<p>Keuangan, Sarana, dan Prasarana</p>
		         	</div>
		         	<div class="icon">
		         		<i class="fas fa-money-check-alt" style="font-size:70px"></i>
		         	</div>
		         	<a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_5" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		       	</div>
		    </div>
		    <div class="col-lg-4 col-xs-6">
		       	<div class="small-box bg-yellow">
		         	<div class="inner">
		         		<h3>Standar 6</h3>
		         		<p>Pendidikan</p>
		         	</div>
		         	<div class="icon">
		         		<i class="fas fa-graduation-cap" style="font-size:70px"></i>
		         	</div>
		         	<a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_6" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		       	</div>
		    </div>
		    <div class="col-lg-4 col-xs-6">
		       	<div class="small-box bg-light-blue">
		         	<div class="inner">
		         		<h3>Standar 7</h3>
		         		<p>Penelitian</p>
		         	</div>
		         	<div class="icon">
		         		<i class="fab fa-researchgate" style="font-size:70px"></i>
		         	</div>
		         	<a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_7" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		       	</div>
		    </div>
		    <div class="col-lg-4 col-xs-6">
		       	<div class="small-box bg-olive">
		         	<div class="inner">
		         		<h3>Standar 8</h3>
		         		<p>Pengabdian kepada Masyarakat</p>
		         	</div>
		         	<div class="icon">
		         		<i class="fas fa-people-carry" style="font-size:70px"></i>
		         	</div>
		         	<a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_8" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		       	</div>
		    </div>
		    <div class="col-lg-4 col-xs-6">
		       	<div class="small-box bg-orange">
		         	<div class="inner">
		         		<h3>Standar 9</h3>
		         		<p>Luaran dan Capaian Tridharma</p>
		         	</div>
		         	<div class="icon">
		         		<i class="fas fa-address-book" style="font-size:70px"></i>
		         	</div>
		         	<a href="<?php echo base_url() ?>tim_akreditasi/dokumen_akreditasi/standar_9" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		       	</div>
		    </div>
		</div>
	</section>
</div>

<?php 
	$this->load->view("public_part/footer");
?>