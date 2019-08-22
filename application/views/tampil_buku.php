<!DOCTYPE html>
<html>
<head>
</head>
<body>

</body>
</html>

<div style="margin-bottom: 20px;">
<a href="<?=site_url('buku/add');?>"><button class="btn-tambah">Tambah</button></a>
</div>
<table class="data" border="2">
	<tr>
		<th>No.</th>
		<th>Nama Buku</th>
		<th>Pengarang</th>
		<th>Tahun Terbit</th>
		<th>Aksi</th>
	</tr>
	<?php
	$no = 1;
	foreach ($buku as $b => $row) { ?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$row->nama_buku;?></td>
			<td><?=$row->pengarang;?></td>
			<td><?=$row->tahun_terbit;?></td>
			<td>
				<a href="<?=site_url('buku/edit/'.$row->kode_buku);?>"><button class="btn-edit">Edit</button></a>
				<a href="<?=site_url('buku/del/'.$row->kode_buku);?>" onclick="return confirm('Yakin Ingin Menghapus?')"><button class="btn-hapus">Hapus</button></a>
			</td>
		</tr>
		<?php
		}
		?>	
</table>
