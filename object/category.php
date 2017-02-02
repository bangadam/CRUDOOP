<?php 

/**
* 
*/
class Category
{
	private $conn;
	private $table = 'kategori';

	public $id;
	public $nama_kategori;


	public function __construct($db)
	{
		$this->conn = $db;
	}

	function read() {
		$query = "SELECT * FROM " . $this->table . " ORDER BY nama_kategori";

		$data = $this->conn->prepare($query);
		$data->execute();

		return $data;
	}

	function readName() {
		$query = "SELECT nama_kategori FROM " . $this->table . " WHERE id = ? limit 0,1";

		$data  = $this->conn->prepare($query);
		$data->bindParam(1, $this->id);
		$data->execute();

		$row = $data->fetch(PDO::FETCH_ASSOC);

		$this->nama_kategori = $row['nama_kategori'];

	}

}

 ?>