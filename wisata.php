<?php

$data_wisata = [
    [
        'id' => 1,
        'nama_wisata' => 'Pantai Teluk Penyu',
        'gambar' => 'img/telukpenyu.jpg',
        'youtube' => 'https://www.youtube.com/embed/Cv7KEeT_hcw',
        'deskripsi' => 'Teluk Penyu merupakan kawasan pantai di selatan Kabupaten Cilacap, utamanya sepanjang pesisir dari Kecamatan Cilacap Selatan yang lokasinya tidak 
        langsung berhubungan dengan Samudera India atau Indonesia karena dibentengi oleh Pulau Nusakambangan'
    ],
    [
        'id' => 2,
        'nama_wisata' => 'Benteng Pendem',
        'gambar' => 'img/bentengpendem.jpg',
        'youtube' => 'https://www.youtube.com/embed/__1lToGKJk8',
        'deskripsi' => 'Benteng Pendem Cilacap, adalah benteng peninggalan Belanda di pesisir pantai Teluk Penyu kabupaten Cilacap, Jawa Tengah yang dibangun pada tahun 1861 yang
        berlokasi di Jl. Benteng, Sentolokawat, Cilacap, Kec. Cilacap Sel., Kabupaten Cilacap, Jawa Tengah 53211'
    ],
    [
        'id' => 3,
        'nama_wisata' => 'Museum Soesilo Soedarman',
        'gambar' => 'img/museumss.jpg',
        'youtube' => 'https://www.youtube.com/embed/YpDIKr9KPYs',
        'deskripsi' => 'Museum Soesilo Soedarman adalah bangunan bersejarah berbentuk museum yang menyimpan peninggalan-peninggalan Jendral TNI (Purn) Soesilo Soedarman semasa mengabdikan diri. Museum ini terletak di Desa Gentasari, Kecamatan Kroya, Kabupaten Cilacap, Jawa Tengah.'
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