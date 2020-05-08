<div class="user-panel">
	<div class="pull-left image">
		<?php
			if($this->session->userdata("sess_id_hak_akses") == "1"){
				echo '<img src="'.base_url().'assets/img/ava-admin.png" class="img-circle">';
			}else if($this->session->userdata("sess_id_hak_akses") == "2"){
				echo '<img src="'.base_url().'assets/img/ava-tim-akreditasi.png" class="img-circle">';
			}else if($this->session->userdata("sess_id_hak_akses") == "3"){
				echo '<img src="'.base_url().'assets/img/ava-kaprodi.png" class="img-circle">';
			}
		?>
	</div>
	<div class="pull-left info">
		<p><?php echo $session->nama ?></p>
		<a><?php echo $hak_akses->hak_akses ?></a><br><br>
	</div>
</div>