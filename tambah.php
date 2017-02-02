<?php 

include_once "config/database.php";
// include_once "object/product.php";
include_once "object/category.php";

//get database
$database = new Database();
$db = $database->getConnection();

//menghubungkan koneksi dengan object
// $product = new Product($db);
$category = new Category($db);

$page_title = "Tambah Barang";
include_once "templates/header.php";

?>

<?php 
echo "<div class='right-button-margin'>";
	echo "<a href='index.php' class='btn btn-default pull-right'>Lihat Data</a>";
echo "</div>";
 ?>

 <div class="row">
 	<div class="col-md-6 col-md-offset-3">
 		<div class="panel panel-primary">
 			<div class="panel-heading">
 				<h3 class="panel-title">Tambah Barang</h3>
 			</div>
 			<div class="panel-body">
 				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
				 	<div class="form-group">
				 		<label for="">Nama Barang</label>
				 		<input type="text" name="nama_barang" class="form-control">
				 	</div>
				 	<div class="form-group">
				 		<label for="">Harga Barang</label>
				 		<input type="text" name="harga_barang" class="form-control">
				 	</div>
				 	<div class="form-group">
				 		<label for="">Keterangan</label>
				 		<textarea name="keterangan" class="form-control" rows="3"></textarea>
				 	</div>

					<label for="">Kategori</label>
				 	<div class="form-group">
				 		<?php 
				 			$data = $category->read();
				 		?>
				 		<select name="Kategori" class="form-control">
				 			<option value="" disabled selected>- Pilih Kategori - </option>
				 			<?php while ($row = $data->feth(PDO::FETCH_ASSOC)) {
				 				extract($row);

							echo "<option value='{$id}'>{$nama_kategori}</option>";

				 			} ?>
				 		</select>
				 	</div>

				 	<button class="btn btn-primary">Simpan</button>


				 </form>
 			</div>
 		</div>
 	</div>
 </div>

<?php include_once "templates/footer.php"; ?>