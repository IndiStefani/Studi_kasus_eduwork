<?php
$nama    = ucwords($_POST['nama_pd']); //ucwords untuk mengubah huruf depan dari setiap kata menjadi kapital
$hrg    = $_POST['hrg'];
$status    = $_POST['status'];
$kategori    = $_POST['kategori_id'];
$gender    = $_POST['gender_id'];
$size    = $_POST['size_id'];

$nama_file = $_FILES['file']['name'];
$path = $_FILES['file']['tmp_name'];

include_once("koneksi.php");
if (move_uploaded_file($path, 'assets/img/produk'.$nama_file)) {
   $result = mysqli_query($conn, "INSERT INTO product (nama_pd, image, hrg, status, kategori_id, gender_id, size_id) VALUES
            ('$nama', '$nama_file', '$hrg', '$status', '$kategori', '$gender', '$size');");
   if (!$result) {
      echo "maaf gagal memasukkan gambar";
   } else {
      header("Location:data.php");
   }
}
