<?php
   include 'koneksi.php';

   if($_SERVER['REQUEST_METHOD']=='POST') {
      $nomor_surat = $_POST['nomor_surat'];
      $id_kategori = $_POST['id_kategori'];
      $judul = $_POST['judul'];
      $tipe_file = $_FILES['file']['type'];
      
      if ($tipe_file == "application/pdf"){
         $judul = trim($_POST['judul']);
         $nama_file = trim($_FILES['file']['name']);

         $sql = "INSERT INTO arsip (nomor_surat, id_kategori,judul) VALUES('$nomor_surat','$id_kategori','$judul')";
         mysqli_query($conn,$sql);

         $query = mysqli_query($conn,"SELECT id FROM arsip ORDER BY id DESC LIMIT 1");
         $data = mysqli_fetch_array($query);

         $generate = date("ymd_").$judul;
         $nama_baru = $generate.".pdf";
         $file_tmp = $_FILES['file']['tmp_name'];
         $folder = "pdf";

         move_uploaded_file($file_tmp, "$folder/$nama_baru");
         
         mysqli_query($conn,"UPDATE arsip SET nama_file='$nama_baru' WHERE id='$data[id]' ");

         echo "<script>alert('Berhasil Mengarsip Surat!');
               window.location.href='index.php';
               </script>";
      } else{
         echo mysqli_error($conn);
         // echo "<script>alert('Gagal Mengarsip Surat!');history.go(-1);</script>".mysqli_error($conn);
      }
   }
?>

