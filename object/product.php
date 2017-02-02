<?php 

/**
* 
*/
class Product
{
	private $conn;
	private $table = "barang";

	public $id;
	public $nama_barang;
	public $harga;
	public $keterangan;
	public $kategori_id;
	public $created;
	public $timestamps;
	
	function __construct($db)
	{
		return $this->conn = $db;
	}

	function create() {
		$query = "INSERT INTO " .$this->table ."  SET nama_barang=:nama_barang, harga=:harga, keterangan=:keterangan, kategori_id=:kategori_id";
	}
}

 ?>