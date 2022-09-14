<!DOCTYPE html>

<?php include 'head.php';?>

<body id="page_top">
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
                            <h1 class="h3 mb-2 text-gray-800">Arsip Surat >> Unggah</h1>
                            <p class="mb-4">Unggah surat yang telah terbit pada form ini untuk diarsipkan.</p>
                            <p>Catatan: Gunakan file berformat PDF</p>   
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <form action="proses_arsip.php" method="post" enctype="multipart/form-data">
                                   
                                        <div class="row mb-3">
                                            <label for="nomor_surat" class="col-sm-2 col-form-label col-form-label-sm">Nomor Surat</label>
                                            <div class="col-sm">
                                                <input type="text" class="form-control form-control-sm" id="nomor_surat" name="nomor_surat">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="kategori" class="col-sm-2 col-form-label col-form-label-sm">Kategori</label>
                                            <div class="col-sm">
                                            <select required name="id_kategori" id="id_kategori" class="form-control">
                                                <?php 
                                                include 'koneksi.php';
                                                $sql = mysqli_query($conn, "SELECT * FROM kategori");
                                                foreach ($sql as $value){
                                                    ?>
                                                    <option value="<?= $value['id']; ?>"><?= $value['kategori']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="judul" class="col-sm-2 col-form-label col-form-label-sm">Judul</label>
                                            <div class="col-sm">
                                                <input type="text" class="form-control form-control-sm" id="judul" name="judul">
                                            </div>
                                        </div>
                                        <div class="row mb-5" name="nama_file">
                                            <label for="dokumen" name="nama_file" class="col-sm-2 col-form-label col-form-label-sm">File Surat(PDF)</label>
                                            <div class="col" name="nama_file">
                                                <input type="file" name="file" accept="application/pdf">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                        <a class="btn btn-primary" href="index.php" role="button"><< Kembali</a>
                                            <button type="submit" class="btn btn-primary" name="save">Tambahkan</button>
                                        </div>
                                    </form>
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