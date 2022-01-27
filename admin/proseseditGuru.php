<?php
    require 'database.php';
    if (isset($_POST['simpan'])) {
        $id_guru=$_POST['id_guru'];
        $txtnip = $_POST['txtnip'];
        $txtnama_guru = $_POST['txtnama_guru'];
        $txtjk = $_POST['txtjk'];
        $txtmapel = $_POST['txtmapel'];

        $sql = "UPDATE guru SET 
        nip='$txtnip',nama_guru='$txtnama_guru',jk='$txtjk',mapel='$txtmapel' WHERE id_guru=$id_guru";

        $query = mysqli_query($koneksi, $sql);
        if ($query) {
            header('location: guru.php');
        } else {
            echo 'Query Error : ' . mysqli_error($koneksi);
        }
    }

    ?>