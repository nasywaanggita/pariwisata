<?php 
require('koneksi.php');
$tahun = date('Y-m-d');
$tanggal = date('Y-m-d');
$month = [1,2,3,4,5,6,7,8,9,10,11,12];
$jan = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE YEAR(tanggal_pesan) = '$tahun' AND MONTH(tanggal_pesan) = 01");
$feb = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE YEAR(tanggal_pesan) = '$tahun' AND MONTH(tanggal_pesan) = 02");
$mar = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE YEAR(tanggal_pesan) = '$tahun' AND MONTH(tanggal_pesan) = 03");
$apr = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE YEAR(tanggal_pesan) = '$tahun' AND MONTH(tanggal_pesan) = 04");
$mei = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE YEAR(tanggal_pesan) = '$tahun' AND MONTH(tanggal_pesan) = 05");
$jun = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE YEAR(tanggal_pesan) = '$tahun' AND MONTH(tanggal_pesan) = 06");
$jul = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE YEAR(tanggal_pesan) = '$tahun' AND MONTH(tanggal_pesan) = 07");
$agu = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE YEAR(tanggal_pesan) = '$tahun' AND MONTH(tanggal_pesan) = 08");
$sep = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE YEAR(tanggal_pesan) = '$tahun' AND MONTH(tanggal_pesan) = 09");
$okt = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE YEAR(tanggal_pesan) = '$tahun' AND MONTH(tanggal_pesan) = 10");
$nov = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE YEAR(tanggal_pesan) = '$tahun' AND MONTH(tanggal_pesan) = 11");
$des = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE YEAR(tanggal_pesan) = '$tahun' AND MONTH(tanggal_pesan) = 12");
$penjualan = [mysqli_num_rows($jan),mysqli_num_rows($feb),mysqli_num_rows($mar),mysqli_num_rows($apr),mysqli_num_rows($mei),mysqli_num_rows($jun),mysqli_num_rows($jul),mysqli_num_rows($agu),mysqli_num_rows($sep),mysqli_num_rows($okt),mysqli_num_rows($nov),mysqli_num_rows($des)];
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center">Grafik Penjualan</h6>
                </div>
                <div class="card-body">
                    <canvas id="myChart" width="400" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var penjualan = <?= json_encode($penjualan); ?>;
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober','November','Desember'],
        datasets: [{
            label: 'Penjualan',
            data: penjualan,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                display:true,
                beginAtZero: false,
                ticks:{
                    precision:0
                }
            }
        }
    }
});
</script>