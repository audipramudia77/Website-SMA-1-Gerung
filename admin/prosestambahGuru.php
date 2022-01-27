<?php
    require 'database.php';
    if (isset($_POST['simpan'])) {
        $txtnip = $_POST['txtnip'];
        $txtnama_guru = $_POST['txtnama_guru'];
        $txtjk = $_POST['txtjk'];
        $txtmapel = $_POST['txtmapel'];

        $sql = "INSERT INTO guru VALUES (NULL, '$txtnip', '$txtnama_guru', '$txtjk', '$txtmapel')";

        $query = mysqli_query($koneksi, $sql);
        if ($query) {
            header('location: guru.php');
        } else {
            echo 'Query Error : ' . mysqli_error($koneksi);
        }
    }
    ?>