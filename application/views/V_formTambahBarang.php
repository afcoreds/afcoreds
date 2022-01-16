 <h4>Form Tambah Barang</h4>
 <form action="<?php echo base_url().'index.php/C_Barang/Simpan'?>" method="post">
 <table width="345" border="0">
   <tr>
     <td width="117">Kode Barang</td>
     <td width="8">:</td>
     <td width="198"><label>
       <input type="text" class="form-control" name="kode"/>
     </label></td>
   </tr>
   <tr>
     <td>Nama Barang</td>
     <td>:</td>
     <td><label>
       <input type="text" class="form-control"name="nama"/>
     </label></td>
   </tr>
   <tr>
     <td>Harga</td>
     <td>:</td>
     <td><label>
       <input type="number" class="form-control"name="harga"/>
     </label></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td><label><br>
        <button class="btn btn-sm btn-info" type="submit">Simpan</button>
		<a class="btn btn-sm btn-danger" href="<?php echo base_url().'index.php/C_Barang/'?>">Kembali</a>
     </label></td>
   </tr>
 </table>
 </form>