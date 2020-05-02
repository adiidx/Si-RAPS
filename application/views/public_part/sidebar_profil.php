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