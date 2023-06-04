<?php
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
// print_r($_POST);

$nama    = ($_POST['nama']); //ucwords untuk mengubah huruf depan dari setiap kata menjadi kapital
$hrg    = $_POST['hrg'];
$kategori    = $_POST['kategori'];
$gender    = $_POST['gender'];
$size    = $_POST['size'];

$image = $_FILES['image']['name'];
$file_type = $_FILES['image']['type'];
$temp = $_FILES['image']['tmp_name'];
$simpan = "assets/img/produk" . $image;

move_uploaded_file($temp, $simpan);

include_once("koneksi.php");

$result = mysqli_query($conn, "INSERT INTO `product` (`id`, `nama_pd`, `image`, `hrg`, `kategori_id`, `gender_id`, `size_id`) VALUES
('$nama', '$image', '$hrg', '$kategori', '$gender', '$size');");
header('location:data.php');
?>
