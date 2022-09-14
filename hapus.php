<?php
include 'koneksi.php';

$id=$_GET['id'];

$query="DELETE FROM arsip WHERE id='$id'";
$result=mysqli_query($conn,$query);

if ($result) {
	echo "<script> alert('Data berhasil dihapus!'); window.location.href='index.php'; </script>";
	?>
	
	<?php
} else{
    echo mysqli_error();
	//echo "<script> alert('Data gagal dihapus!'); window.location.href='hapus.php'; </script>";
	?>
	
	<?php
}
?>

