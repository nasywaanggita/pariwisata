<?php
    require ('koneksi.php');
    $id = $_GET['id'];
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

    if($id == 1)
    {
        $wisata = $data_wisata[0];
    }else if($id == 2){
        $wisata = $data_wisata[1];
    }else if($id == 3){
        $wisata = $data_wisata[2];
    }
    $namaWisata = $wisata['nama_wisata'];
    $query = mysqli_query($koneksi,"SELECT * FROM daftarharga WHERE nama='$namaWisata'");
    $harga = mysqli_fetch_assoc($query)['harga'];

    if(isset($_POST['pesan']))
    {
        $nama = $_POST['nama'];
        $no_identitas = $_POST['no_identitas'];
        $no_hp = $_POST['no_hp'];
        $tanggal = $_POST['tanggal'];
        $jml = $_POST['jml'];
        $jml_anak = $_POST['jml_anak'];
        $nama_wisata = $_POST['nama_wisata'];
        $total_harga = $_POST['total_harga'];
        $tanggal_pesan = date('Y-m-d');
        if(strlen($no_identitas) == 16)
        {
            $qinsert = mysqli_query($koneksi,"INSERT INTO `transaksi` (`id`, `nama`, `no_identitas`, `no_hp`, `tanggal`, `jml`, `jml_anak`, `nama_wisata`, `total_harga`,`tanggal_pesan`) VALUES (NULL, '$nama', '$no_identitas', '$no_hp', '$tanggal', '$jml', '$jml_anak', '$nama_wisata', '$total_harga','$tanggal_pesan')");
            if($qinsert)
            {
                echo "
                <script>
                    alert('Anda berhasil melakukan pesanan.');
                    window.location.href = 'index.php?page=pesanan';
                </script>
                ";
                exit();
            }else{
                echo "
                <script>
                    alert('Anda gagal melakukan pesanan.');
                    window.location.href = 'index.php?page=pesanan';
                </script>
                ";
                exit();
            }
        }else{
            echo "
            <script>
                alert('NIK harus 16 angka.');
                window.location.href = 'index.php?page=detail&id=' + $id;
            </script>
            ";
        }
        
    }
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <img src="<?= $wisata['gambar'] ?>" alt="" class="img-fluid">
                    <h1 class="mt-4 mb-3"><?= $wisata['nama_wisata'] ?></h1>
                    <p>
                        <?= $wisata['deskripsi'] ?>
                    </p>
                    <h5 class="mt-4 mb-2">Video</h5>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?= $wisata['youtube'] ?>" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title text-center mb-4">Informasi</div>
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between">
                                    <span class="font-weight-bold">Harga</span>
                                    <span class="font-italic"><?= number_format($harga) ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title text-center mb-4">Form Pemesanan</div>
                            <form action="" method="post">
                                <input type="text" name="nama_wisata" hidden value="<?= $wisata['nama_wisata'] ?>" id="nama_wisata">
                                <input type="number" name="total_harga" id="total_harga" hidden value="<?= $wisata['nama_wisata'] ?>">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_identitas">No. Identitas</label>
                                    <input type="number" name="no_identitas" class="form-control" id="no_identitas"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No. Hp</label>
                                    <input type="text" name="no_hp" class="form-control" id="no_hp" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal Kunjungan</label>
                                    <input type="date" name="tanggal" min="<?= date('Y-m-d') ?>" class="form-control" id="tanggal" required>
                                </div>
                                <div class="form-group">
                                    <label for="jml">Jumlah Pengunjung</label>
                                    <input type="number" name="jml" class="form-control" id="jml" required>
                                </div>
                                <div class="form-group">
                                    <label for="jml_anak">Pengunjung Anak dibawah usia 12 tahun</label>
                                    <input type="number" name="jml_anak" class="form-control" id="jml_anak" required>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="setuju" required> Saya dan/ atau rombongan
                                            memahami dan setuju berdasarkan syarat dan ketentuan yang telah
                                            ditetapkan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button name="pesan" class="btn btn-block btn-primary">Pesan</button>
                                </div>
                            </form>
                            <p>
                                <h6>Total Harga : <span class="totalHarga">0</span></h6>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        var hargaWisata = '<?= $harga ?>';
        var total_harga = 0;
        var jml = 0;
        $('#jml').on('keyup', function(){
            $('#jml_anak').val('');
            jml = $(this).val();
            total_harga = (jml*hargaWisata);
            $('#jml_anak').on('keyup', function(){
                var jml_anak = $(this).val();
                var total_harga2 = (jml_anak*(hargaWisata/2));
                var total = total_harga  + total_harga2;
                $('#total_harga').val(total);
                $('.totalHarga').text(total);
            })
        })
    })
</script>