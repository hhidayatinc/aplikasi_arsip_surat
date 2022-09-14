<?Php
include 'koneksi.php';
//Susunan Struktur file :> $file = 'file/501-862-1-SM.Pdf';
$file = $_GET['url'];
if (file_exists($file)) {
    header('Content-Description: file Transfer');
    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="' .$file .'"');
    header('Expires: 0');
    header('Cache-Control: Must-Revalidate');
    header('Pragma: Public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>