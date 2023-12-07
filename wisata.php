<?php

$data_wisata = [
    [
        'id' => 1,
        'nama_wisata' => 'Malioboro',
        'gambar' => 'img/malioboro.jpg',
        'youtube' => 'https://www.youtube.com/embed/BQTU1UP7GDg?si=68o5f_L1uuQKQ9Fa',
        'deskripsi' => 'Jalan Malioboro (Jawa: ꦢꦭꦤ꧀​ꦩꦭꦶꦪꦧꦫ, translit. Dalan Maliabara) adalah salah satu kawasan jalan dari tiga jalan, dari Tugu Yogyakarta hingga ke persimpangan Titik 0 Kilometer. Terdiri atas Jalan Margo Utomo, Jalan Malioboro, dan Jalan Margo Mulyo.'
    ],
    [
        'id' => 2,
        'nama_wisata' => 'Taman Sari',
        'gambar' => 'img/tamansari.jpg',
        'youtube' => 'https://www.youtube.com/embed/qY1eDaTxv0Y?si=FYUMHBzewui1rNEG',
        'deskripsi' => 'Taman Sari Yogyakarta atau Taman Sari Keraton Yogyakarta (Jawa: ꦠꦩꦤ꧀ꦱꦫꦶ​ꦔꦪꦺꦴꦒꦾꦏꦂꦠ, translit. Tamansari Ngayogyakarta) adalah situs bekas taman atau kebun istana Keraton Ngayogyakarta Hadiningrat, yang dapat dibandingkan dengan Taman Sari Surakarta.'
    ],
    [
        'id' => 3,
        'nama_wisata' => 'Pantai Parangtritis',
        'gambar' => 'img/parangtritis.jpg',
        'youtube' => 'https://www.youtube.com/embed/GAhnmiVbOA0?si=iCIlCojUOU2n095z',
        'deskripsi' => 'Pantai Parangtritis (Jawa: ꦥꦱꦶꦱꦶꦂ ꦥꦫꦁꦠꦿꦶꦠꦶꦱ꧀, translit. Pasisir Parangtritis) adalah tempat wisata yang terletak di Kalurahan Parangtritis, Kapanéwon Kretek, Kabupaten Bantul, Daerah Istimewa Yogyakarta. Pantai ini telah menjadi ikon pariwisata di Yogyakarta.'
    ]
];

if(isset($_GET['detail']))
{
    include('sds');
}
?>
<div class="container">
    <div class="row">
        <?php foreach($data_wisata as $wisata) : ?>
        <div class="col-md-4">
            <div class="card card-wisata">
                <img src="<?= $wisata['gambar'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $wisata['nama_wisata'] ?></h5>
                    <p class="card-text"><?= $wisata['deskripsi'] ?></p>
                    <a href="index.php?page=detail&id=<?= $wisata['id'] ?>" class="btn btn-primary px-5 float-right">Detail</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>