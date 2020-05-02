<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url().'assets/img/logo-si-raps-37x37.png'?>">
  <title>User Authentication - Si-RAPS</title>   
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/fontawesome/css/all.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/loginCSS/login.css'?>">
</head>
<body>
<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header text-center mt-1">
        <?php
          $this->load->helper('html');
          echo img('assets/img/logo-si-raps-400x90.png');
        ?><br><br>
        <h5>User Authentication</h5>
      </div>
      <?php if(isset($error)) { echo $error; }; ?>
      <div class="card-body">
        <form method="POST" action="<?php echo base_url() ?>login">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda" required autofocus> 
            <?php echo form_error('username'); ?>     
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" name="password" placeholder="Masukkan Password Anda" required>
            <?php echo form_error('password'); ?>
          </div><br>
          <div class="form-group">
            <div>
              <font color="white" size="2">
                Hint (username | password) :<br>
                - admin | admin<br>
                - tim5 | tim<br>
                - kaprodi | kaprodi<br>
                **Bagian ini akan dihapus jika sistem telah release
              </font>
            </div>
            <div>
              <input type="submit" value="Login" class="btn float-right login_btn">
            </div>
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          <span style="font-size:8pt">Copyright &copy; 2020 <a href="<?php echo base_url() ?>" class="text-decoration-none text-white">Si-RAPS</a></span>
        </div>
        <div class="d-flex justify-content-center">
          <span class="text-white" style="font-size:8pt">All rights reserved.</span>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
</body>
</html>