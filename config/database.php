<?php 
/**
* 
*/
class Database 
{
	
	private $host = "127.0.0.1";
	private $user = "root";
	private $pass = "";
	private $db_name = "CrudOOP";
	public $conn;

	public function getConnection() {
		$this->conn = null;

		try {
			$this->conn = new PDO("mysql:host" . $this->host . ";dbname=" . $this->db_name, $this->user, $this->pass);
		} catch (PDOException $exception) {
			echo "koneksi gagal" . $exception->getMessage();
		}

		return $this->conn;
	}
	
}

 ?>