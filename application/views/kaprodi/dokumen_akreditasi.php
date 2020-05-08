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
		       			<h3>Kriteria 1</h3>
		      			<p>Visi, Misi, Tujuan, dan Strategi</p>
		       		</div>
		       		<div class="icon">
		       			<i class="fas fa-bullseye" style="font-size:70px"></i>
		       		</div>
		       		<a href="<?php echo base_url() ?>kaprodi/dokumen_akreditasi/kriteria_1" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		     	</div>
		    </div>
		    <div class="col-lg-4 col-xs-6">
		       	<div class="small-box bg-olive">
		         	<div class="inner">
		         		<h3>Kriteria 2</h3>
		         		<p>Tata Pamong, Tata Kelola, dan Kerjasama</p>
		         	</div>
		         	<div class="icon">
		         		<i class="fas fa-users" style="font-size:70px"></i>
		         	</div>
		         	<a href="<?php echo base_url() ?>kaprodi/dokumen_akreditasi/kriteria_2" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		       	</div>
		    </div>
		    <div class="col-lg-4 col-xs-6">
		       	<div class="small-box bg-orange">
		         	<div class="inner">
		         		<h3>Kriteria 3</h3>
		         		<p>Mahasiswa</p>
		         	</div>
		         	<div class="icon">
		         		<i class="fas fa-user-graduate" style="font-size:70px"></i>
		         	</div>
		         	<a href="<?php echo base_url() ?>kaprodi/dokumen_akreditasi/kriteria_3" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		       	</div>
		    </div>
		    <div class="col-lg-4 col-xs-6">
		       	<div class="small-box bg-blue">
		         	<div class="inner">
		         		<h3>Kriteria 4</h3>
		         		<p>Sumber Daya Manusia</p>
		         	</div>
		         	<div class="icon">
		         		<i class="fas fa-chalkboard-teacher" style="font-size:70px"></i>
		         	</div>
		         	<a href="<?php echo base_url() ?>kaprodi/dokumen_akreditasi/kriteria_4" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		       	</div>
		    </div>
		    <div class="col-lg-4 col-xs-6">
		       	<div class="small-box bg-green">
		         	<div class="inner">
		         		<h3>Kriteria 5</h3>
		         		<p>Keuangan, Sarana, dan Prasarana</p>
		         	</div>
		         	<div class="icon">
		         		<i class="fas fa-money-check-alt" style="font-size:70px"></i>
		         	</div>
		         	<a href="<?php echo base_url() ?>kaprodi/dokumen_akreditasi/kriteria_5" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		       	</div>
		    </div>
		    <div class="col-lg-4 col-xs-6">
		       	<div class="small-box bg-yellow">
		         	<div class="inner">
		         		<h3>Kriteria 6</h3>
		         		<p>Pendidikan</p>
		         	</div>
		         	<div class="icon">
		         		<i class="fas fa-graduation-cap" style="font-size:70px"></i>
		         	</div>
		         	<a href="<?php echo base_url() ?>kaprodi/dokumen_akreditasi/kriteria_6" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		       	</div>
		    </div>
		    <div class="col-lg-4 col-xs-6">
		       	<div class="small-box bg-light-blue">
		         	<div class="inner">
		         		<h3>Kriteria 7</h3>
		         		<p>Penelitian</p>
		         	</div>
		         	<div class="icon">
		         		<i class="fab fa-researchgate" style="font-size:70px"></i>
		         	</div>
		         	<a href="<?php echo base_url() ?>kaprodi/dokumen_akreditasi/kriteria_7" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		       	</div>
		    </div>
		    <div class="col-lg-4 col-xs-6">
		       	<div class="small-box bg-olive">
		         	<div class="inner">
		         		<h3>Kriteria 8</h3>
		         		<p>Pengabdian kepada Masyarakat</p>
		         	</div>
		         	<div class="icon">
		         		<i class="fas fa-people-carry" style="font-size:70px"></i>
		         	</div>
		         	<a href="<?php echo base_url() ?>kaprodi/dokumen_akreditasi/kriteria_8" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		       	</div>
		    </div>
		    <div class="col-lg-4 col-xs-6">
		       	<div class="small-box bg-orange">
		         	<div class="inner">
		         		<h3>Kriteria 9</h3>
		         		<p>Luaran dan Capaian Tridharma</p>
		         	</div>
		         	<div class="icon">
		         		<i class="fas fa-address-book" style="font-size:70px"></i>
		         	</div>
		         	<a href="<?php echo base_url() ?>kaprodi/dokumen_akreditasi/kriteria_9" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		       	</div>
		    </div>
		    <div class="col-lg-4 col-xs-6">
		       	<div class="small-box bg-red">
		         	<div class="inner">
		         		<h3>Dokumen</h3>
		         		<h3>Pelengkap</h3>
		         	</div>
		         	<div class="icon">
		         		<i class="fas fa-file-alt" style="font-size:70px"></i>
		         	</div>
		         	<a href="<?php echo base_url() ?>kaprodi/dokumen_akreditasi/dokumen_pelengkap" class="small-box-footer">Lihat dokumen <i class="fa fa-arrow-circle-right"></i></a>
		       	</div>
		    </div>
		</div>
	</section>
</div>

<?php 
	$this->load->view("public_part/footer");
?>