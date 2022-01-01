<?php
session_start();
require 'functions.php';

if(!isset($_SESSION["login"])) {
    header("Location: auth-login.php");
}

//mendapatkan data user
$id = $_SESSION["login"];
$result = mysqli_query($conn, "SELECT * FROM calon_konsumen WHERE id_calon_konsumen = '$id'");
$row = mysqli_fetch_assoc($result);

if(empty($_SESSION["keranjang" ]) OR !isset($_SESSION["keranjang"])) {
   echo "<script>alert('keranjang kosong, silahkan belanja dulu');</script>";
   echo "<script>location='index.php';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="index.html" class="navbar-brand sidebar-gone-hide" style="margin-left: M_1_PI;">SEAFOOD</a>
        <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>
        <form class="form-inline ml-auto">
          <ul class="navbar-nav">
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-3.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b>
                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?= $row['nama_calon_konsumen'] ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.php" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><i class="fas fa-arrow-right" style="color: #0d6efd; cursor: default;"></i><span></span></a>
            </li>
            <li class="nav-item active">
              <a href="#" class="nav-link"><i class="fas fa-paper-plane"></i><span>Pemesanan</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><i class="fas fa-arrow-right" style="color: #0d6efd; cursor: default;"></i><span></span></a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="fas fa-money-bill-wave-alt"></i><span>Pembayaran</span></a>
            </li>
            <li class="nav-item">
              <a href="keranjang.php" class="nav-link" style="margin-left:400px;"><i class="fas fa-shopping-cart"></i><span>Keranjang Belanja</span></a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Check Out</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="checkout.php">Dashboard/Checkout</a></div>
            </div>
          </div>
        </section>
        <section>
            <div class="card">
                <div class="header" style="margin: 20px;">
                    <h4 style="font-size: xs-large; color: #0d6efd; text-align: center;">Detail Pemesanan</h4><br>
                    <form method="POST" class="needs-validation" novalidate="">
                        <p style="font-size: larger;">Nama Customer&emsp;&emsp;&emsp;&emsp;: <?=$row["nama_calon_konsumen"]?></p>
                        <p style="font-size: larger;">Email Customer&emsp;&emsp;&emsp;&emsp;: <?=$row["email_calon_konsumen"]?></p>
                        <div class="row" style="margin-left: auto;">
                            <p style="font-size: larger;">Alamat&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;:</p>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="summernote-simple" required name="alamat"></textarea>
                            </div>
                        </div>
                    
                        </div>
                        <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Sub Harga</th>
                                </tr>
                                <?php $nomor = 1; ?>
                                <?php $totalbelanja = 0;?>
                                <?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
                                <?php 
                                $barang = $conn->query("SELECT a.*, b.*, c.*, d.*, e.*
                                FROM `penawaran` a JOIN `katalog_barang` b ON a.`id_katalog`=b.`id_katalog`
                                JOIN `detail_katalog` c ON b.`id_katalog` = c.`id_katalog`
                                JOIN `barang` d ON c.`id_barang` = d.`id_barang`
                                JOIN `jenis_barang` e ON d.`id_jenis` = e.`id_jenis` WHERE d.`id_barang` = '$id_produk'");
                                $row1 = $barang->fetch_assoc();
                                $subharga = $row1["harga_jual"]*$jumlah;
                                ?>
                                <tr>
                                    <td><?=$nomor?></td>
                                    <td><?= $row1["nama_barang"] ?></td>
                                    <td>Rp. <?=number_format($row1["harga_jual"]) ?></td>
                                    <td><?= $jumlah?></td>
                                    <td>Rp. <?= number_format($subharga) ?></td>
                                </tr>
                                <?php $nomor++; ?>
                                <?php $totalbelanja+=$subharga ?>
                                <?php endforeach ?>
                                <tfoot>
                                    <th colspan="4">Total Belanja</th>
                                    <th>Rp. <?= number_format($totalbelanja)?></th>
                                </tfoot>
                            </table>
                        </div>
                        </div>
                        <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                            </ul>
                        </nav>
                        </div>
                        <button type="submit" class="btn btn-success mb-4" name="checkout" style="max-width: fit-content; align-self: center;">Chekout</button>
                    </form>
                <?php 
                    if (isset($_POST["checkout"])) {
                        $id_customer = $row["id_calon_konsumen"];
                        $id_penawaran = $row1["id_penawaran"];
                        $tgl = date("Y-m-d h:i:s");
                        $status = "01";
                        $alamat = $_POST["alamat"];
                        $totalharga = $totalbelanja;
                    
                        // menyimpan ke tabel pemesanan
                        $conn->query("INSERT INTO `pemesanan`(
                        `id_calon_konsumen`, 
                        `id_penawaran`, 
                        `alamat_pengiriman`, 
                        `total_harga`) 
                        VALUES('$id_customer', '$id_penawaran', '$alamat', '$totalharga')");

                        //mendapatkan id pemesanan terakhir
                        $last_id = mysqli_query($conn, "SELECT * FROM pemesanan
                        WHERE id_pemesanan = CONCAT('PEM',LPAD((SELECT COUNT(*) FROM pemesanan),5,'0'))");
                        $id = mysqli_fetch_assoc($last_id);


                        $id_pemesanan = $id["id_pemesanan"];
                        // menyimpan ke detail pemesanan
                        foreach ($_SESSION["keranjang"] as $id_produk => $jumlah){
                            $barang = $conn->query("SELECT a.*, b.*, c.*, d.*, e.*
                            FROM `penawaran` a JOIN `katalog_barang` b ON a.`id_katalog`=b.`id_katalog`
                            JOIN `detail_katalog` c ON b.`id_katalog` = c.`id_katalog`
                            JOIN `barang` d ON c.`id_barang` = d.`id_barang`
                            JOIN `jenis_barang` e ON d.`id_jenis` = e.`id_jenis` WHERE d.`id_barang` = '$id_produk'");
                            $row1 = $barang->fetch_assoc();

                            $total_berat = $row1["berat_barang"]*$jumlah;
                            $subharga = $row1["harga_jual"]*$jumlah;

                            mysqli_query($conn, "INSERT INTO detail_pemesanan VALUES('$id_pemesanan', '$id_produk', $subharga, '$total_berat')");
                        }

                        //menghapus barang di keranjang
                        unset($_SESSION["keranjang"]);

                        // tampilan dialihkan ke halaman nota, nota dari pemesanan yang barusan
                        echo "<script>alert('pemesanan sukses');</script>";
                        echo "<script>location='nota.php?id=$id_pemesanan';</script>";

                    }
                ?>
            </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>
