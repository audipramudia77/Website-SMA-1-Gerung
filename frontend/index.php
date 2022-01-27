<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SMA 1 Gerung</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../image/sma.png" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>

    <?php
            include 'navbar.php';
        ?>

    <div class="container px-4 px-lg-5 mt-5">
    <div class="card text-white bg-secondary my-5 py-4 text-center">
            <div class="card-body">
               <div class="container">
               <div class="row">
                    <div class="col-md-4">
                    <img  src="../image/sma.png" alt="" style="height:20vh; widht:20vh;">
                    </div>
                    <div class="col-md-6">
                    <h1>Welcome SMA 1 GERUNG</h1>
                    </div>
                </div>
               </div>
            </div>
        </div>
        <!-- Heading Row-->
        <div class="row">
            <div class="col-12" >
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../image/1.jfif" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../image/gendang.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../image/tari.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
       
        <div class="row mt-4">
        <H1 style="text-align:center;"> Data Siswa Berprestasi</H1>
        <?php
                require '../admin/database.php';
                $query = "SELECT * FROM siswa";
                $sql = mysqli_query($koneksi, $query);
                $no = 1;
                while ($data = mysqli_fetch_object($sql)) {
                ?>
       
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <img src="../image/<?= $data->gambar; ?>" alt="" style="height: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data->nis; ?></h5>
                        <p class="card-text"><?php echo $data->nama_siswa; ?></p>
                        <p class="card-text"><?php echo $data->prestasi; ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
       
        <?php
                }
                ?>
                 </div>

        <div class="row mt-4">
        <H1 style="text-align:center;"> Berita </H1>
      
       
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <img src="../image/polisi.jpg" alt="" style="height: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">SANKSI SHOLAT DHUHA DAN 100 ISTIGHFAR BAGI PESERTA DIDIK TERLAMBAT</h5>
                        <p class="card-text"> Rabu, 5 Januari 2022 13:30 WIB</p>
                        <p class="card-text">Kedisiplinan penting diterapkan terhadap anak didik di Sekolah, Proses belajar mengajar akan terganggu jika siswanya tidak disiplin.</p>
                        <a href="#" class="btn btn-primary">lanjut Baca</a>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <img src="../image/tim_zero.png" alt="" style="height: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">TIM ZERO WASTE SMANGER MENGEPAKKAN SAYAP</h5>
                        <p class="card-text"> Selasa, 11 Januari 2022 08:07 WIB</p>
                        <p class="card-text">Masih ingat pepatah “Ada banyak jalan menuju Roma” ? Tentu saja ingat bukan? Tapi kali ini kita tidak akan menyoal trend</p>
                        <a href="#" class="btn btn-primary">lanjut Baca</a>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <img src="../image/belek.jpg" alt="" style="height: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">HEBOH,,, GENDANG BELEQ DEDARE SMANGER</h5>
                        <p class="card-text"> Kamis, 20 Januari 2022 23:20 WIB</p>
                        <p class="card-text">Gendang Beleq merupakan alat musik tradisional yang dimainkan secara berkelompok dengan menggunakan beberapa macam gabungan alat musik.</p>
                        <a href="#" class="btn btn-primary">lanjut Baca</a>
                    </div>
                </div>
            </div>
       
                 </div>

                 <div class="row mt-4">
                     <h1 style="text-align:center;">Daftar Guru</h1>
                       <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Jenis Kelamin</th>
                    <th>Mata Pelajaran</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php
                require '../admin/database.php';
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
                       

                    </tr>

                <?php
                }
                ?>


            </tbody>
        </table>
                 </div>

                 
        <!-- Call to Action-->
      
        <!-- Content Row-->
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-4 px-lg-5">
        <h1 class="m-0 text-center text-white"> SMA 1 Gerung</h1>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>