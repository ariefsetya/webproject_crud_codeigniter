<a class="btn btn-success" href="<?php echo base_url("mahasiswa/tambah");?>">Tambah Data</a>

<table class="table table-hovered">
	<thead>
		<tr>
			<th>No</th>
			<th>NPM</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no = 1;
		foreach ($mahasiswa as $key) { 
		?>
		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $key->npm;?></td>
			<td><?php echo $key->nama;?></td>
			<td><?php echo $key->kelas;?></td>
			<td><a href="<?php echo base_url("mahasiswa/edit/".$key->id);?>">Edit</a></td>
			<td><a onclick="return confirm('Apakah Anda ingin menghapus data <?php echo $key->nama;?>?')" href="<?php echo base_url("mahasiswa/delete/".$key->id);?>">Hapus</a></td>
		</tr>
		<?php } ?>
	</tbody>
</table>