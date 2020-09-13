<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$pass = $_POST['pass'];
 $query="select * from users where email='$email' and pass='$pass'";
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,$query);
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
    $row = mysqli_fetch_assoc($data);
		$_SESSION["id"]=$row["id"];
		$_SESSION["name"]=$row["name"];
		$_SESSION["email"]=$row["email"];
    header("location:loginsuccess.php");
}else{
echo 'gagal';}
?>