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


    $query = "UPDATE penumpang SET nama = '$nama', notelp = '$notelp', email = '$email' , nmbandara = '$nmbandara' , nmkategori = '$nmkategori' , deskripsi = '$deskripsi' , gambar = '$gambar' WHERE idpenumpang = '$idpenumpang'";
   
   if ('$connection,$query') {

    //redirect ke halaman index.php 
    header("location: form-reporting.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal DiUpdate!";

}

?>