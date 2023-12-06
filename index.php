<!DOCTYPE html>
<html>

<head>
    <title>Wisata Kota Cilacap</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/css/style.css" rel="stylesheet" />
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow mb-5">
        <div class="container">
            <a class="navbar-brand" href="index.php">Wisata Cilacap</a>
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
                <h2>Website Pariwisata Kota Cilacap</h2>
                <br><br>
                <img src="img/cilacap.png" height="250px" style="display: block; margin: auto;">
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
                    <h5>Wisata Cilacap</h5>
                    <p class="mt-4">Salah satu kabupaten di Provinsi Jawa Tengah. Ibu kotanya adalah Kota Cilacap. Memiliki 3 destinasi pariwisata utama yaitu Pantai Teluk Penyu, Benteng pendem, dan museum Soesilo Soedarman.</p>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
