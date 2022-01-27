
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'head.php';
    ?>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php
    include 'sider.php';
    ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php
    include 'navbar.php';
    ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
        

          <h2 class="alert alert-info">Edit Data Siswa</h2>


<?php

require 'database.php';
if (isset($_GET['id_siswa'])){

    $id_siswa=$_GET['id_siswa'];
    $query="SELECT * FROM siswa WHERE id_siswa=$id_siswa";
    $sql=mysqli_query($koneksi,$query);
    $data=mysqli_fetch_object($sql);
}

?>

<form action="prosesEdit.php" method="post">
    <input type="hidden" name="id_siswa" value="<?=$id_siswa?>">
    <div class="mb-3">
        <label>NIS</label>
        <input required type="text" name="txtnis" class="form-control" value="<?= $data->nis; ?>">
    </div>

    <div class="mb-3">
        <label>Nama Siswa</label>
        <input type="text" name="txtnama_siswa" class="form-control" value="<?=$data->nama_siswa;?>">
    </div>

    <div class="mb-3">
        <label>Jeni Kelamin</label>
        <select name="txtjk" class="form-control">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
            <?=$data->jk;?>
        </select>
       
    </div>

    <div class="mb-3">
        <label>Keyword</label>
        <select name="txtkelas"  class="form-control">
            <option value="Mipa-1">Mipa-1</option>
            <option value="Mipa-2">Mipa-2</option>
            <option value="Mipa-3">Mipa-3</option>
            <option value="Mipa-4">Mipa-4</option>
            <option value="Mipa-5">Mipa-5</option>
            <option value="Mipa-6">Mipa-6</option>
            <option value="Ips-1">Ips-1</option>
            <option value="Ips-2">Ips-2</option>
            <option value="ips-3">Ips-3</option>
            <?=$data->kelas;?>
        </select>
    </div>
    <div class="mb-3">
        <label>Prestasi</label>
        <input required type="text" name="txtprestasi" class="form-control" value="<?=$data->prestasi;?>">
    </div>
    <div class="form-group">
                            <label for="exampleInputFile">Gambar</label>
                            <div class="input-group">
                                <div c lass="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="txtgambar">
                                    <input type="hiden" class="custom-file-input" id="gambar" name="txtgambar_upload" value="<?=$data->gambar;?>">
                                    <label class="custom-file-label" id="gambar" for="exampleInputFile">Pilih Gambar</label>
                                </div>
                            </div>
                        </div>

    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
    <a href="siswa.php" class="btn btn-secondary">Kembali</a>
</form>
          <!-- Modal Logout -->
          
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <?php
    include 'footer.php';
    ?>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php
    include 'javascript.php';
  ?>

</body>

</html>