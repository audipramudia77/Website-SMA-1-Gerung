
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Siswa</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="blank.html">Home</a></li>
              <li class="breadcrumb-item">Pages</li>
              <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
            </ol>
          </div>


          <!-- Modal Logout -->
          <h2 class="alert alert-info">Tambah Data Artikel</h2>



<form action="prosesTambahsiswa.php" method="post">

    <div class="mb-3">
        <label>NIS</label>
        <input required type="text" name="txtnis" class="form-control">
    </div>

    <div class="mb-3">
        <label>Nama Siswa</label>
        <input type="text" name="txtnama_siswa" class="form-control">
    </div>

    <div class="mb-3">
        <label>Jenis Kelamin</label>
        <select name="txtjk">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Kelas</label>
        <select name="txtkelas">
            <option value="Mipa-1">Mipa-1</option>
            <option value="Mipa-2">Mipa-2</option>
            <option value="Mipa-3">Mipa-3</option>
            <option value="Mipa-4">Mipa-4</option>
            <option value="Mipa-5">Mipa-5</option>
            <option value="Mipa-6">Mipa-6</option>
            <option value="Ips-1">Ips-1</option>
            <option value="Ips-2">Ips-2</option>
            <option value="ips-3">Ips-3</option>
        </select>
    </div>
    <div class="mb-3">
        <label>Prestasi</label>
        <input required type="text" name="txtprestasi" class="form-control">
    </div>
    <div class="form-group">
                            <label for="exampleInputFile">Gambar</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="txtgambar">
                                    <label class="custom-file-label" id="gambar" for="exampleInputFile">Pilih Gambar</label>
                                </div>
                            </div>
                        </div>

    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
    <a href="siswa.php" class="btn btn-secondary">Kembali</a>
</form>
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