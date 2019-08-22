<!DOCTYPE html>
<html>
<head>
</head>
<body>

</body>
</html>

<div style="margin-bottom: 20px;">
</div>
<table class="data" border="2">
	<tr>
		<th>No.</th>
		<th>Nama Buku</th>
		<th>Pengarang</th>
		<th>Tahun Terbit</th>
	</tr>
	<?php
	$no = 1;
	foreach ($buku as $b => $row) { ?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$row->nama_buku;?></td>
			<td><?=$row->pengarang;?></td>
			<td><?=$row->tahun_terbit;?></td>
		</tr>
		<?php
		}
		?>	
</table>
