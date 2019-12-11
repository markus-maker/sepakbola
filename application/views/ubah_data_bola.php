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
    //print_r ($ambil_data_bola);
	echo form_open('Bola/ubah_data');	
	echo form_fieldset('Data Stadion');
	$id = array('id'=>$ambil_data_bola->id);
	$nama_std = array('nama_std'=>$ambil_data_bola->nama_std);
	$lokasi= array('lokasi'=>$ambil_data_bola->lokasi);
	$kapasitas = array('kapasitas'=>$ambil_data_bola->kapasitas);
	echo form_label('Nama Stadion : ');
	echo form_hidden('id', $id['id']);
	echo form_input('nama_std', $nama_std['nama_std']);
	echo "<br>";
	echo form_error('nama_std');
	echo "<br>";
	echo form_label('Lokasi Petandingan : ');
	echo form_input('lokasi', $lokasi['lokasi']);
	echo "<br>";
	echo form_error('lokasi');
	echo "<br>";
	echo form_label('Kapasitas Stadion : ');
	echo form_input('kapasitas', $kapasitas['kapasitas']);
	echo "<br>";
	echo form_error('kapasitas');
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