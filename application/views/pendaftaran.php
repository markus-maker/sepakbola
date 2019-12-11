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
<?php
	echo $this->session->flashdata('pesan');
	echo form_open('Auth/proses_daftar');	
	echo form_fieldset('Pendaftaran Akun');
	echo form_label('Username : ', 'username');
	$data = array(
		'name' => 'username',
	    'placeholder' => 'Masukan Username'
	);
	echo form_input($data);
	echo "<br>";
	echo "<br>";

	echo form_label('Password : ', 'password');
	$data = array(
		'name' => 'password',
	    'placeholder' => 'Masukan Password'
	);
	echo form_password($data);
	echo "<br>";
	echo "<br>";

	echo form_label('Nama : ', 'nama');
	$data = array(
		'name' => 'nama',
	    'placeholder' => 'Masukan Nama'
	);
	echo form_input($data);
	echo "<br>";
	echo "<br>";
	echo form_submit($data);
	echo "<br>";
	echo "<br>";
	echo form_close();
?>
</section>
		<footer>						
    <a>@Copyright By Markus & Cahyo</a>		
		</footer>
	</div>