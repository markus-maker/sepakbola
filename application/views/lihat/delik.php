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
	echo "<h2>Daftar Data Pertandingan</h2>";
	$template = array(
		'table_open' => '<table border="collapse"
		cellpadding="5" cellspacing="0" class="mytable">');
		$this->table->set_template($template);
		$this->table->set_heading('No' , 'Nama Club' , 'Jadwal' , 'Nama Stadion' , 'Lokasi' , 'Kapasitas' , 'Jenis Liga');		
	$no = 1;
	foreach ($delik as $sf) :
		$this->table->add_row($no++,$sf->nama_clb,$sf->jadwal,$sf->nama_std,$sf->lokasi,$sf->kapasitas,$sf->jenis_liga);
	endforeach;
	echo $this->table->generate();
	 ?>

</section>
		<footer>						
    <a>@Copyright By Markus & Cahyo</a>		
		</footer>
	</div>
