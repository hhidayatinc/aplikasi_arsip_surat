<!DOCTYPE html>

<?php include 'head.php';?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include 'menu.php';?>

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">
        
                        <!-- Topbar -->
                        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"></nav>
                        <!-- End of Topbar -->
        
                        <!-- Begin Page Content -->
                        <div class="container-fluid">
        
                            <!-- Page Heading -->
                            <h1 class="h3 mb-2 text-gray-800">Arsip Surat</h1>
                            <p class="mb-4">Berikut adalah surat surat telah terbit dan diarsipkan.
                                Klik "Lihat" pada kolom aksi untuk menampilkan surat.</p>
        
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <form method="post">
                                        <div class="input-group mb-3">
                                            <label for="cari" class="col-sm-2 col-form-label">Cari surat: </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="cari">
                                            </div>
                                        </div>
                                        </form>
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Nomor Surat</th>
                                                    <th>Kategori</th>
                                                    <th>Judul</th>
                                                    <th>Waktu Pengarsipan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                <?php
                                                include 'koneksi.php';

                                                if(isset($_POST['cari'])){
                                                    $cari=trim($_POST['cari']);
                                                    $query = "SELECT a.id, a.nomor_surat, a.judul, a.created_at, a.nama_file, k.kategori FROM arsip a INNER JOIN kategori k ON a.id_kategori=k.id WHERE a.judul LIKE '%".$cari."%'";
                                                    $result = mysqli_query($conn, $query);
                                                  } else{
                                                  $query = "SELECT a.id, a.nomor_surat, a.judul, a.created_at, a.nama_file, k.kategori FROM arsip a INNER JOIN kategori k ON a.id_kategori=k.id";
                                                  $result = mysqli_query($conn, $query);
                                                  }
                                                  if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $row['nomor_surat'];?></td>
                                                        <td><?php echo $row['kategori'];?></td>
                                                        <td><?php echo $row['judul'];?></td>
                                                        <td><?php echo $row['created_at'];?></td>
                                                        <td>
                                                        <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')"><input type="submit" class="btn btn-danger" value="Hapus"></a>
                                                        <a class="btn btn-success" href="download_file.php?filename=<?Php echo $row['nama_file']; ?>" role="button">Unduh</a>
                                                        <a class="btn btn-primary" href="lihat_pdf.php?id=<?php echo $row['id']; ?>" role="button">Lihat</a>
                                                    </tr>
                                                    <?php
                                                    }
                                                  } else{
                                                    echo "0 results";
                                                  }
                                                  ?>
                                            </thead>
                                            
                                            </tbody>
                                        </table>
                                        <a class="btn btn-primary" href="tambah_arsip.php" role="button">Arsipkan Surat ..</a>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                        <!-- /.container-fluid -->
        
                    </div>
                    <!-- End of Main Content -->
        
                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Your Website 2020</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->
        
                </div>

    </div>
    <!-- End of Page Wrapper -->


    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    
</body>

</html>