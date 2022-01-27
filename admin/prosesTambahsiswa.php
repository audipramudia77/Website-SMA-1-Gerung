<?php
require 'database.php';
if (isset($_POST['simpan'])) {
    $txtnis = $_POST['txtnis'];
    $txtnama_siswa = $_POST['txtnama_siswa'];
    $txtjk = $_POST['txtjk'];
    $txtkelas = $_POST['txtkelas'];
    $txtprestasi = $_POST['txtprestasi'];
    $txtgambar = $_POST['txtgambar'];

    $sql = "INSERT INTO siswa VALUES (NULL, '$txtnis', '$txtnama_siswa', '$txtjk', '$txtkelas','$txtprestasi','$txtgambar')";

    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('location: siswa.php');
    } else {
        echo 'Query Error : ' . mysqli_error($koneksi);
    }
}
?>