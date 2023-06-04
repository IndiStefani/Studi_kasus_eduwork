<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>Warung Pojok Omah</title>
   <meta content="" name="description">
   <meta content="" name="keywords">

   <!-- Favicons -->
   <link href="assets/img/favicon.png" rel="icon">
   <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
   <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
   <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center">

         <div class="logo me-auto">
            <h1><a href="index.php">ADA Shop</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
         </div>

         <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
               <li><a class="nav-link scrollto active" href="index.php">Beranda</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->

         <div class="header-social-links d-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
         </div>

      </div>
   </header><!-- End Header -->

   <section class="mt-4">
      <div class="container">
         <div class="content">
            <a class="btn btn-success" href="form-tambah.php" class="btn-add">Tambah</a>
            <hr>
            <table id="table-data" border="1" style="border-collapse:collapse;margin:1% 0;border:1px solid #999;" cellspacing="0" width="100%" >
               <thead align="center">
                  <th>No</th>
                  <th>Nama Produk</th>
                  <th>Gambar</th>
                  <th>Harga</th>
                  <th>Status</th>
                  <th>Aksi</th>
               </thead>

               <tbody align="center">
                  <?php
                  include "koneksi.php";
                  $query = mysqli_query($conn, "SELECT * FROM product JOIN kategori ON product.kategori_id=kategori.id_kategori JOIN gender ON product.gender_id=gender.id_gender JOIN size on product.size_id=size.id_size; "); //silahkan ganti jika error (sesuaikan dengan nama table yang ada di local)
                  ?>
                  <?php if (mysqli_num_rows($query) > 0) {
                     $no = 1;
                     while ($data = mysqli_fetch_array($query)) {
                  ?>
                  
                        <tr>
                           <td><?php echo $no ?></td>
                           <td><?php echo $data["nama_pd"]; ?></td>
                           <td><?php echo $data["image"]; ?></td>
                           <td><?php echo $data["hrg"]; ?></td>
                           <td><?php echo $data["status"]; ?></td>
                           <td>
                              <a href="form-edit.php?id=<?php echo $rows['id_user'] ?>" class="btn btn-primary">Edit</a>
                              <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="hapus.php?id=<?php echo $rows['id_user'] ?>" class="btn btn-danger">Hapus</a>
                           </td>
                        </tr>
                  <?php
                        $no++;
                     }
                  }
                  ?>
               </tbody>
            </table>
         </div>
         <!----------------------------------------------------- END CONTENT ------------------------------------------------>
      </div>
   </section>

</body>