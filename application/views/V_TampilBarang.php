<a class="btn btn-sm btn-success" href="<?php echo base_url().'index.php/C_Barang/formTambahBarang'?>">+Data Barang</a> <br/><br/>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr>
	<th><center>No</th>
	<th><center>Kode Barang</th>
	<th><center>Nama Barang</th>
	<th><center>Harga</th>
	<th><center>Aksi</th>
</tr>
</thead>
<tbody>
	<?php 
		$no=0;
		foreach ($tampil->result_array() as $a):
		$no++;
		$kode=$a['kode'];
		$nama=$a['nama'];
		$harga=$a['harga'];
	?>
<tr>
	<td style="text-align:center;"><?php echo $no;?></td>
	<td style="text-align:center;"><?php echo $kode;?></td>
	<td style="text-align:center;"><?php echo $nama;?></td>
	<td style="text-align:center;"><?php echo $harga;?></td>
	<td style="text-align:center;">
		<input type="button" class="btn btn-sm btn-info" value="Edit" onClick="location.href=('<?php echo
		base_url().'index.php/C_Barang/formEditBarang/'.$kode?>')">
		<input type="button" class="btn btn-sm btn-danger" value="Hapus" onClick="pesan=confirm('Yakin data ini dihapus ?'); if(pesan) location.href=('<?php echo base_url().'index.php/C_Barang/hapus/'.$kode?>'); else return false;">
	</td>
</tr>
	<?php endforeach;?>
</tbody>
</table>