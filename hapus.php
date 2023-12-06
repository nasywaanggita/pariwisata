<?php
require('koneksi.php');
$id = $_GET['id'];
if($id)
{
    $query = mysqli_query($koneksi,"DELETE FROM transaksi WHERE id='$id'");
    echo "
    <script>
        alert('Anda berhasil menghapus pesanan.');
        window.location.href = 'index.php?page=pesanan';
    </script>
    ";
}else{
    header('Location: index.php');
}