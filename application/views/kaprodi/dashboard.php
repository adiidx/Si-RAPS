<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url().'assets/img/mini-logo-si-raps.png'?>">
  <title> Dashboard - Si-RAPS</title>
</head>
<body>
  Selamat Datang <b><?php echo $this->session->userdata("user_nama") ?></b> di halaman Kaprodi<br>
  <a href="<?php echo base_url() ?>index.php/kaprodi/dashboard/logout" type="submit" class="btn btn-success"><i class="fa fa-sign-out"></i> Logout</a>
</body>
</html>