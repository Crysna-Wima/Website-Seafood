<?php
require 'functions.php';
session_start();
if(!isset($_SESSION["login"])) {
    header("Location: auth-login.php");
}

//mendapatkan data user
$id = $_SESSION["login"];
$result = mysqli_query($conn, "SELECT * FROM calon_konsumen WHERE id_calon_konsumen = '$id'");
$row = mysqli_fetch_assoc($result);


session_start();
// mendaptkan id produk dari url
$id_produk = $_GET['id'];
//jk sudah ada produk itu dikeranjang, maka produk itu jumlahnya di +1
if(isset($_SESSION[ 'keranjang'][$id_produk])){
     $_SESSION['keranjang'][$id_produk]+=1;
}
//selain itu (blm ada di keranjang),mk produk itu dianggap dibeli 1
else
{
     $_SESSION[ 'keranjang'][$id_produk] = 1;
}
// echo "<pre>";
// print r($ SESSION);
// echo "</pre>";
//larikan ke halaman keranjang
echo "<script>alert('produk telah masuk ke keranjang belanja');</script>";
echo "<script>location='keranjang.php';</script>";
?>