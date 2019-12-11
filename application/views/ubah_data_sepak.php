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
    //print_r ($ambil_data_sepak);
	echo form_open('Sepak/ubah_data');	
	echo form_fieldset('Data Jadwal Pertandingan Sepak Bola');
	$id_jdw = array('id_jdw'=>$ambil_data_sepak->id_jdw);
	$nama_clb = array('nama_clb'=>$ambil_data_sepak->nama_clb);
	$jadwal= array('jadwal'=>$ambil_data_sepak->jadwal);
	$kategori = array('kategori'=>$ambil_data_sepak->kategori);
	echo form_label('Nama Club Yang Bertanding : ');
	echo form_hidden('id_jdw', $id_jdw['id_jdw']);
	echo form_input('nama_clb', $nama_clb['nama_clb']);
	echo "<br>";
	echo form_error('jadwal');
	echo "<br>";
	echo form_label('Jadwal Petandingan : ');
	echo form_input('jadwal', $jadwal['jadwal']);
	echo "<br>";
	echo form_error('jadwal');
	echo "<br>";
	$options = array(
		'VVIP' => 'VVIP = $2500', 
		'VIP' => 'VIP = $1000',
		'EKONOMI' => 'EKONOMI = $200',
	);
	echo form_label('Kategori Harga : ');
	echo form_dropdown('kategori', $options);
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