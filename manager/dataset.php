<?php
// Jika mendownload faker dengan composer
require_once '../vendor/autoload.php';
require_once '../config/koneksi.php';

// inisialisasi faker
$faker = Faker\Factory::create('id_ID');

for($i=1; $i <= 10; $i++){ 
$kode_barang = rand(1111,9999);
$jenis_barang = 'Laptop';
$merek ='Acer';
$tahun = $faker->numberBetween(2010,2020); 
$harga =30000000; 
$status ='Tidak Laris'; 

//lakukan insert ke database tabel pegawai
$insert=mysql_query("INSERT INTO data_survey (id,kode_barang,jenis_barang,merek,tahun,harga,status) VALUES ('','$kode_barang', '$jenis_barang','$merek','$tahun','$harga','$status')");

//$result = mysqli_query($sql);
}

if($result)
{
	echo "data berhasil di input";
}
else
{
	echo "Pesan error: ".mysql_error();
}

?>