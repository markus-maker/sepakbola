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
				<li><a href="<?php echo base_url('gol/data_gol') ?>">Detail Tim</a></li>
					<li><a href="<?php echo base_url('sepak/data_sepak') ?>">Detail Jadwal</a></li>
					<li><a href="<?php echo base_url('bola/data_bola') ?>">Detail Stadion</a></li>
					<li><a href="<?php echo base_url('auth/logout') ?>">Logout</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</header>
		<section>
<?php
    //print_r ($ambil_data_gol);
	echo form_open('Gol/ubah_data');	
	echo form_fieldset('Data Tim');
	$id = array('id'=>$ambil_data_gol->id);
	$nama_tim = array('nama_tim'=>$ambil_data_gol->nama_tim);
	$jenis_liga= array('jenis_liga'=>$ambil_data_gol->jenis_liga);
	$negara = array('negara'=>$ambil_data_gol->negara);
	echo form_label('Nama Tim : ');
	echo form_hidden('id', $id['id']);
	echo form_input('nama_tim', $nama_tim['nama_tim']);
	echo "<br>";
	echo form_error('nama_tim');
	echo "<br>";
	echo form_label('Jenis Liga : ');
	echo form_input('jenis_liga', $jenis_liga['jenis_liga']);
	echo "<br>";
	echo form_error('jenis_liga');
	echo "<br>";
	echo form_label('Negara : ');
	echo form_input('negara', $negara['negara']);
	echo "<br>";
	echo form_error('negara');
	echo "<br>";
	echo "<br>";
	echo form_submit('submit', 'simpan');
	echo form_close();
?>
</section>
		<footer>						
		<a>@Copyright By Markus & Cahyo</a>		
		</footer>
	</div>