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
                         <nav class="navbar navbar-light bg-white topbar mb-4 static-top shadow"></nav>
                        <!-- End of Topbar -->
        
                        <!-- Begin Page Content -->
                        <div class="container-fluid">
        
                            <!-- Page Heading -->
                            <h1 class="h3 mb-2 text-gray-800">Arsip Surat</h1>
                            <?php
                            include 'koneksi.php';
                            $id=$_GET['id'];
                            $query = "SELECT a.nomor_surat, a.judul, a.created_at, a.nama_file, k.kategori FROM arsip a INNER JOIN kategori k ON a.id_kategori=k.id WHERE a.id='$id'";
                            $result = mysqli_query($conn, $query);
                            $data = mysqli_fetch_array($result);
                            ?>
                            <p class="mb-4">
                                Nomor Surat   : <?php echo $data['nomor_surat'];?><br>
                                Kategori      : <?php echo $data['kategori'];?><br>
                                Judul         : <?php echo $data['judul'];?><br>
                                Waktu Unggah  : <?php echo $data['created_at'];?>
                            </p>
        
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    
                                    <embed type="application/pdf" src="pdf/<?php echo $data['nama_file'];?>" width="100%" height="500"></embed>
                                    <div class="col-12">
                                        <a class="btn btn-primary" href="index.php" role="button"><< Kembali</a>
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