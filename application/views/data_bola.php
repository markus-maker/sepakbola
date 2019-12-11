<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Stadion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
		<style>
			table, tr, td {border: 1px solid black;
			}
		</style>
</head>
<body>
	<div id="wrapper">
		<header>
			<hgroup>
			<h1>Detail Stadion</h1>
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
	$template = array(
		'table_open' => '<table border="collapse"
		cellpadding="5" cellspacing="0" class="mytable">');
		$this->table->set_template($template);
		$this->table->set_heading('No' , 'Nama Stadion' , 'Lokasi' , 'Kapasitas' , 'Update', 'Hapus');		
	$no = 1;
	foreach ($data_bola as $sf) :
		$this->table->add_row($no++, $sf->nama_std, $sf->lokasi, $sf->kapasitas, anchor('Bola/ambil_data_bola/'.
		$sf->id,'Edit'), anchor('Bola/hapus/'.$sf->id,'Hapus'));
	endforeach;
	if($this->session->flashdata('success')){
		echo $this->session->flashdata('success')."<br><br>";
	}
	echo $this->table->generate();
	 ?>
	 </section>
		<footer>						
    <a>@Copyright By Markus & Cahyo</a>		
		</footer>
	</div>
</body>
</html>