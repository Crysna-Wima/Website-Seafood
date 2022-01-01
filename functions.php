<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
$conn = mysqli_connect("localhost","root","","seafood1");

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

function bayar($data){
    global $conn;
    $id_pemesanan = $_GET["id"];
    $jenis = $data["jenis"];
    $total = $data["total_harga"];

    $bukti = upload();
    if (!$bukti) {
      return false;
    }
    
    $query ="INSERT INTO pembayaran(`id_pemesanan`,`bukti_pembayaran`,`jenis_pembayaran`,`total_pembayaran`)
    VALUES('$id_pemesanan','$bukti','$jenis',$total)";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
  }
  function upload(){
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile =$_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
      echo "<script>
            alert('harap upload bukti pembayaran!!');
        </script>";
        return false;
    }

    $ekstensi =['jpg','jpeg','png'];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));

    if (!in_array($ekstensigambar,$ekstensi)) {
      echo "<script>
        alert('Silahkan upload sesuai ekstensi yang ada');
      </script>";
      return false;
    }

    //cek ukuran gambar
    if ($ukuranfile > 3000000) {
      echo "<script>
      alert('Ukuran terlalu besar!');
      </script>";
      return false;
    }

    //generate nama file baru
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru.= $ekstensigambar;
    // lolos pengecekan
    move_uploaded_file($tmpname,'assets/img/bukti' . $namafilebaru);

    return $namafilebaru;

  }
?>