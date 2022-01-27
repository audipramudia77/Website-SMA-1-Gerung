<?php
require 'database.php';
if (isset($_POST['simpan'])) {
    $id_siswa=$_POST['id_siswa'];
    $txtnis = $_POST['txtnis'];
    $txtnama_siswa = $_POST['txtnama_siswa'];
    $txtjk = $_POST['txtjk'];
    $txtkelas = $_POST['txtkelas'];
    $txtprestasi = $_POST['txtprestasi'];
    $txtgambar = $_POST['txtgambar'];
    $txtgambar_upload = $_POST['txtgambar_upload'];
    if ($txtgambar == ""){
        $txtgambar = $txtgambar_upload; 
    }

    $sql = "UPDATE siswa SET 
    nis='$txtnis',nama_siswa='$txtnama_siswa',jk='$txtjk',kelas='$txtkelas',prestasi='$txtprestasi',gambar='$txtgambar' WHERE id_siswa=$id_siswa";

    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('location: siswa.php');
    } else {
        echo 'Query Error : ' . mysqli_error($koneksi);
    }
}
   


?>