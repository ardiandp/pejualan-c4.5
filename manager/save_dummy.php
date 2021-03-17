<?php
// Jika mendownload faker dengan composer
require_once '../vendor/autoload.php';
require_once '../config/koneksi.php';

// inisialisasi faker
$faker = Faker\Factory::create('id_ID');


$kode_barang = rand(1111,9999);
$jenis_barang = $_POST['jenis'];
$merek = $_POST['merek'];
$tahun1 = $_POST['tahun1'];
$tahun2 = $_POST['tahun2'];
$tahun = $faker->numberBetween($tahun1,$tahun2); 
$harga1 = $_POST['harga1'];
$harga2 = $_POST['harga2'];
$harga = $faker->numberBetween($harga1,$harga2); ; 
$status = $_POST['status'];
$record = $_POST['record']; 

for($i=1; $i <= $record; $i++){ 
	$kode_barang = rand(1111,9999);
	$jenis_barang = $_POST['jenis'];
	$merek = $_POST['merek'];
	$tahun1 = $_POST['tahun1'];
	$tahun2 = $_POST['tahun2'];
	$tahun = $faker->numberBetween($tahun1,$tahun2); 
	$harga1 = $_POST['harga1'];
	$harga2 = $_POST['harga2'];
	$harga = $faker->numberBetween($harga1,$harga2); ; 
	$status = $_POST['status'];
//lakukan insert ke database tabel pegawai
$insert=mysql_query("INSERT INTO data_survey (id,kode_barang,jenis_barang,merek,tahun,harga,status) VALUES ('','$kode_barang', '$jenis_barang','$merek','$tahun','$harga','$status')");

//$result = mysqli_query($sql);
}

if($insert)
{
	echo "<script>window.alert('$record Data Berhasil Di tambahkan');
			window.location='semua-data.html'</script>";
}
else
{
	echo "Pesan error: ".mysql_error();
}

?>