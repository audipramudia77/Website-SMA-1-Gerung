

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
          <form action="prosestambahGuru.php" method="post">
          <div class="mb-3">
    <label>NIP</label>
    <input required type="text" name="txtnip" class="form-control">
</div>

<div class="mb-3">
    <label>Nama Guru</label>
    <input type="text" name="txtnama_guru" class="form-control">
</div>

<div class="mb-3">
    <label>Jenis Kelamin</label>
    <select name="txtjk">
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
</div>

<div class="mb-3">
    <label>MAPEL</label>
    <select name="txtmapel">
        <option value="Biologi">Biologi</option>
        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
        <option value="Bahasa Inggris">Bahasa Inggris</option>
        <option value="Matematika">Matematika</option>
        <option value="Ekonomi">Ekonomi</option>
        <option value="Penjaskes">Penjaskes</option>
        <option value="Seni Budaya">Seni Budaya</option>
        <option value="Sosiologi">Sosiologi</option>
        <option value="Agama">Agama</option>
    </select>
</div>

<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
<a href="index.php" class="btn btn-secondary">Kembali</a>
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