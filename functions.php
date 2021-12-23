<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
$conn = mysqli_connect("localhost","root","","seafood");

function registrasi($data) {
    global $conn;

    $nama = $data["nama"];
    $email = $data["email"];
    $negara = $data["negara"];
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password-confirm"]);

    // cek email sudah ada atau belum
    $result = mysqli_query($conn, "SELECT email_calon_konsumen FROM calon_konsumen WHERE email_calon_konsumen ='$email'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('email sudah terdaftar');
            </script>";
        return false;
    }

    // cek konfirmasi password
    if($password!==$password2){
        echo "<script>
            alert('konfirmasi password tidak sesuai');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn,"INSERT INTO calon_konsumen VALUES('', '$negara', '$nama', '$email', '$password', NULL)");

    return mysqli_affected_rows($conn);

    
}
?>