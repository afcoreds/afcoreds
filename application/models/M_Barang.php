<?php
class M_Barang extends CI_Model
{
	function tampildatabarang()
	{
		$hsl=$this->db->query("select * from tbl_barang");
		return $hsl;
	}	
	function simpanDataBarang($kode,$nama,$harga)
	{
		$hsl=$this->db->query("insert into tbl_barang values ('$kode','$nama','$harga')");
		return $hsl;
	}
	function salinDataBarang($kode)
	{
		$hsl=$this->db->query("select * from tbl_barang where kode='$kode'");
		return $hsl;
	}
	function editDataBarang($kode,$nama,$harga)
	{
		$hsl=$this->db->query("update tbl_barang set nama='$nama',harga='$harga' where kode='$kode'");
		return $hsl;
	}
	function hapusDataBarang($kode)
	{
		$hsl=$this->db->query("delete from tbl_barang where kode='$kode'");
		return $hsl;
	}
}
?>