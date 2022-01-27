
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
           
          </div>


          <!-- Modal Logout -->
          <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data Siswa</a>
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'database.php';
                $query = "SELECT * FROM siswa";
                $sql = mysqli_query($koneksi, $query);
                $no = 1;
                while ($data = mysqli_fetch_object($sql)) {
                ?>

                    <tr>
                        <td> <?php echo $no++; ?> </td>
                        <td> <?php echo $data->nis; ?> </td>
                        <td> <?php echo $data->nama_siswa; ?> </td>
                        <td> <?php echo $data->jk; ?> </td>
                        <td> <?php echo $data->kelas; ?> </td>
                        <td> <?php echo $data->gambar; ?> </td>
                        <td>
                            <a href="edit.php?id_siswa=<?= $data->id_siswa; ?>">
                                <input type="submit" value="edit" class="btn btn-warning">
                            </a>

                            <?php
                            if ($_SESSION['role'] == 'admin') {
                            ?>
                                <a href="hapus.php?id_siswa=<?= $data->id_siswa?>">
                                    <input type="submit" value="hapus" onclick="confirm('yakin hapus data?')" class="btn btn-danger">
                                </a>
                            <?php
                            }
                            ?>

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