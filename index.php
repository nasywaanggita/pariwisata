<!DOCTYPE html>
<html>

<head>
    <title>Pesona Jogja</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/css/style.css" rel="stylesheet" />
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow mb-5">
        <div class="container">
            <a class="navbar-brand" href="index.php">Pesona Jogja</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=penjualan">Grafik Penjualan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=wisata">Tempat Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=pesanan">Pesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
        if (isset($_GET['page'])){
            $page = $_GET['page'];
            if($page == 'wisata'){
                include('wisata.php');
            }
            else if ($page == 'pesanan'){
                include('pesanan.php');
            }
            else if ($page == 'detail'){
                include('detail.php');
            } 
            else if ($page == 'penjualan'){
                include('penjualan.php');
            } else if ($page == 'hapus'){
                include('hapus.php');
            } 
        } else {
    
        
    
        ?>

    <div class="content-wrapper">
        <div class="container">
            <center>
                <h1 style="font-family:Vijaya; font-size: 35pt"><b>Selamat Datang</h1>
                <h2>Website Pariwisata Yogyakarta</h2>
                <br><br>
                <img src="img/logojogja.png" height="300px" style="display: block; margin: auto;">
            </center>
        </div>
    </div>

<?php
}
?>

    <!-- footer -->
    <footer class="container-fluid mt-5">
        <div class="container">
            <div class="row pt-4 pb-3">
                <div class="col-md-4">
                    <h5>Yogyakarta</h5>
                    <p class="mt-4">Yogyakarta adalah kota di Indonesia yang dikenal dengan warisan budayanya yang kaya dan pemandangannya yang indah. Ada banyak tempat untuk dikunjungi di Yogyakarta, mulai dari situs sejarah hingga keajaiban alam.</p>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
