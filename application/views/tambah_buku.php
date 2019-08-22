<!DOCTYPE html>
<html>
<head>
	<title><?=$header; ?></title>
</head>
<body>
	<?php 
	echo form_open('buku/proses');
	?>
	<table>
		<tr>
			<td>Nama Buku</td>
			<td>:</td>
			<td>
				<?php echo form_input('nama_buku', '', 'required="required"');?>
			</td>
		</tr>
		<tr>
			<td>Pengarang</td>
			<td>:</td>
			<td>
				<?php echo form_input('pengarang', '', 'required="required"');?>
			</td>
		</tr>
		<tr>
			<td>Tahun Terbit</td>
			<td>:</td>
			<td>
				<?php echo form_input(array('type' => 'number', 'name' => 'tahun', 'required' => 'required'));?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<?php echo form_input(array('type' => 'submit', 'name' => 'add', 'value' => 'Tambah'));?>
			</td>
		</tr>
	</table>
	<?php echo form_close();
	?>
</body>
</html>