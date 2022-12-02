<?php
//Include file koneksi ke database
include "../koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$email=$_POST["email"];
$password=md5($_POST["password"]); //untuk password digunakan enskripsi md5


//Query input menginput data kedalam tabel user
  $sql="insert into users (username,email,password) values
		('$username','$email','$password')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
    echo "<script>alert('Pendaftaran Berhasil');window.location='login.php';</script>";
	exit;
  }
else {
	echo "Gagal simpan data user";
	exit;
}  

?>