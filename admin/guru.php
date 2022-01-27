

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
            <h1 class="h3 mb-0 text-gray-800">Data Guru</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="blank.html">Home</a></li>
              <li class="breadcrumb-item">Pages</li>
              <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
            </ol>
          </div>


          <!-- Modal Logout -->
          <a href="tambahGuru.php" class="btn btn-primary mb-3">Tambah Data Guru</a>
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Jenis Kelamin</th>
                    <th>Mata Pelajaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'database.php';
                $query = "SELECT * FROM guru";
                $sql = mysqli_query($koneksi, $query);
                $no = 1;
                while ($data = mysqli_fetch_object($sql)) {
                ?>

                    <tr>
                        <td> <?php echo $no++; ?> </td>
                        <td> <?php echo $data->nip; ?> </td>
                        <td> <?php echo $data->nama_guru; ?> </td>
                        <td> <?php echo $data->jk; ?> </td>
                        <td> <?php echo $data->mapel; ?> </td>
                        <td>
                            <a href="editGuru.php?id_guru=<?= $data->id_guru; ?>">
                                <input type="submit" value="edit" class="btn btn-warning">
                            </a>

                                <a href="hapusGuru.php?id_guru=<?= $data->id_guru?>">
                                    <input type="submit" value="hapus" onclick="confirm('yakin hapus data?')" class="btn btn-danger">
                                </a>
                           

                        </td>

                    </tr>

                <?php
                }
                ?>


            </tbody>
        </table>
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