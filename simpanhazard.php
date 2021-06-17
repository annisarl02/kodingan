<?php

//include koneksi database
include('db.php');

//get data dari form
$idpenumpang	= isset($_POST['idpenumpang']) ? $_POST['idpenumpang'] : '';
$nama 			= isset($_POST['nama']) ? $_POST['nama'] : '';
$notelp      	= isset($_POST['notelp']) ? $_POST['notelp'] : '';
$email      	= isset($_POST['email']) ? $_POST['email'] : '';
$bandara 		= isset($_POST['bandara']) ? $_POST['bandara'] : '';
$kategori 		= isset($_POST['nmkategori']) ? $_POST['nmkategori'] : '';
$deskripsi 		= isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '';
$gambar     	= isset($_POST['gambar']) ? $_POST['gambar'] : '';



    $query = "INSERT INTO penumpang (idpenumpang,nama,notelp,email,deskripsi,gambar) VALUES ('$idpenumpang', '$nama', '$notelp','$deskripsi','$gambar')";
  
   function query($query) {
	global $connection;
	$result = mysqli_query($connection, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
	if($connection) {

    //redirect ke halaman index.php 
    header("location: doctreporting.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}
}
?>