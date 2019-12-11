<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sistem Informasi Pembelian Tiket Pertandingan Sepak Bola</title>	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
</head>
<body>
<div id="wrapper">
		<header>
			<hgroup>
				<h1>Sistem Informasi</h1>
				<h3>Pembelian Tiket Pertandingan Sepak Bola</h3>
			</hgroup>
			<nav>
				<ul>
					<li><a href="<?php echo base_url().'web' ?>">Beranda</a></li>
					<li><a href="<?php echo base_url().'auth' ?>">Login</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</header>
		<section>
  <h1>Silahkan login terlebih dahulu</h1>
  <div style="color: red;margin-bottom: 15px;">
    <?php
    // Cek apakah terdapat session nama message
    if($this->session->flashdata('message')){ // Jika ada
      echo $this->session->flashdata('message'); // Tampilkan pesannya
    }
    ?>
  </div>
  <form method="post" action="<?php echo base_url('index.php/auth/login') ?>">
    <label>Username</label><br>
    <input type="text" name="username" placeholder="Username"><br><br>
    <label>Password</label><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit">Login</button>
  </form>
  <br>
  <br>
  <a href="<?php echo base_url('Auth/pendaftaran'); ?>">Belum Punya Akun Klik Disini</a>
  </section>
		<footer>						
    <a>@Copyright By Markus & Cahyo</a>		
		</footer>
	</div>
</body>
</html>