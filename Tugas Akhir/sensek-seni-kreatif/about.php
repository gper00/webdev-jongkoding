<?php 

require_once('dashboard/connection.php');

// fetching tabel kontak
$query = "SELECT * FROM tb_kontak";
$result = mysqli_query( $mysqli, $query );
$kontak = mysqli_fetch_assoc($result);
if( is_null($kontak) ) {
   $kontak['telepon'] = "";
   $kontak['email'] = "";
   $kontak['alamat'] = "";
   $kontak['link_gmaps'] = "";
}



$query3 = "SELECT * FROM tb_seo";
$result3 = mysqli_query( $mysqli, $query3 );
$seo = mysqli_fetch_assoc($result3);

if( is_null($seo) ) {
   $seo['author'] = "";
   $seo['description'] = "";
   $seo['keywords'] = "";
   $seo['robot_index'] = 1;
   $seo['robot_follow'] = 1;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Tentang Kami</title>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="<?= $seo['description']; ?>">
   <meta name="keywords" content="<?= $seo['keywords']; ?>">
   <meta name="author" content="<?= $seo['author']; ?>">
   <meta name="robots" content="<?= ($seo['robot_index']==1) ? "index" : "noindex"; ?>, <?= ($seo['robot_follow']==1) ? "follow" : "nofollow" ; ?>">


   
   <!--===============================================================================================-->
   <link rel="icon" type="image/png" href="images/icons/ikon.png" />
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css" />
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css" />
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css" />
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css" />
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css" />
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css" />
   <!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="css/util.css" />
   <link rel="stylesheet" type="text/css" href="css/main.css" />
   <!--===============================================================================================-->
   <!-- Bootstrap icon -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
</head>
<body class="animsition">
   <!-- Header -->
   <header class="header-v4">
      <!-- Header desktop -->
      <div class="container-menu-desktop">
         <!-- Topbar -->
         <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
               <div class="left-top-bar">
                  Selamat datang di toko kami dan selamat berbelanja!
               </div>
            </div>
         </div>
         <div class="wrap-menu-desktop how-shadow1">
            <nav class="limiter-menu-desktop container">
               <!-- Logo desktop -->
               <div class="logo-mobile">
                  <a href="index.php"><img src="images/icons/20211201_131422.png" alt="IMG-LOGO" /></a>
               </div>

               <!-- Menu desktop -->
               <div class="menu-desktop">
                  <ul class="main-menu">
                     <li>
                        <a href="index.php">Beranda</a>
                     </li>

                     <li>
                        <a href="product.php">Produk</a>
                     </li>

                     <li class="active-menu">
                        <a href="about.php">Tentang Kami</a>
                     </li>

                     <li>
                        <a href="contact.php">Kontak Kami</a>
                     </li>
                  </ul>
               </div>

               <!-- Icon header -->
               <div class="wrap-icon-header flex-w flex-r-m">
                  <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                     <i class="zmdi zmdi-search"></i>
                  </div>
               </div>
            </nav>
         </div>
      </div>

      <!-- Header Mobile -->
      <div class="wrap-header-mobile">
         <!-- Logo moblie -->
         <div class="logo-mobile">
            <a href="index.php"><img src="images/icons/20211201_131422.png" alt="IMG-LOGO" /></a>
         </div>

         <!-- Icon header -->
         <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
               <i class="zmdi zmdi-search"></i>
            </div>
         </div>

         <!-- Button show menu -->
         <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
               <span class="hamburger-inner"></span>
            </span>
         </div>
      </div>

      <!-- Menu Mobile -->
      <div class="menu-mobile">
         <ul class="main-menu-m">
            <li>
               <a href="index.php">Beranda</a>
            </li>

            <li>
               <a href="product.php">Produk</a>
            </li>

            <li>
               <a href="about.php">Tentang Kami</a>
            </li>

            <li>
               <a href="contact.php">Kontak Kami</a>
            </li>
         </ul>
      </div>

      <!-- Modal Search -->
      <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
         <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
               <img src="images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15" action="product.php">
               <button class="flex-c-m trans-04">
                  <i class="zmdi zmdi-search"></i>
               </button>
               <input class="plh3" type="text" name="search" placeholder="Cari Produk..">
            </form>
         </div>
      </div>
   </header>

   <!-- Title page -->
   <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bege.jpg')">
      <h2 class="ltext-105 cl0 txt-center">Tentang Kami</h2>
   </section>

   <!-- Content page -->
   <section class="bg0 p-t-75 p-b-120">
      <div class="container">
         <div class="row p-b-148">
            <div class="col-md-7 col-lg-8">
               <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                  <h3 class="mtext-111 cl2 p-b-16">Latar Belakang</h3>

                  <p class="stext-113 cl6 p-b-26">
                     Dusun Mengilok, Desa Batujai, Kabupaten Lombok Tengah, merupakan dusun pengrajin tenun khas Lombok. Pengrajin tenun yang sebagian besar adalah Ibu Rumah Tangga, mengalami kesulitan dalam pemasaran produk tenun yang dihasilkan.  
                  </p>

                  <p class="stext-113 cl6 p-b-26">
                     Pada awal berdirinya menggunakan nama Seni Creative. Seni Creative adalah nama lembaga yang mendidik wanita atau perempuan di dusun Mengilok untuk belajar menenun. Seni Creative juga merupakan usaha pemasaran hasil tenun. seiring berjalannya waktu, nama Seni Creative berkembang menjadi Sasak Sensek. Sasak Sensek adalah proses pembuatan, dan juga barang yang dihasilkan tenun itu sendiri sehingga lebih kepada merek dagang tenun. Tenun yang dibuat dengan nama Sasak Sensek diharapkan dapat berkembang sampai seluruh Indonesia bahkan seluruh dunia.
                  </p>

               </div>
            </div>

            <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
               <div class="how-bor1">
                  <div class="hov-img0">
                     <img src="images/tentang1.jpg" alt="IMG" />
                  </div>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
               <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                  <h3 class="mtext-111 cl2 p-b-16">Filosofi</h3>

                  <p class="stext-113 cl6 p-b-26">
                     Sasak Sensek selain merupakan media penjualan untuk membantu peningkatan ekonomi pengrajin tenun, juga sekaligus sebagai tempat pemberdayaan perempuan dan pelestarian budaya dengan mempertahankan filosofi tenun yang kental. Filosofi Songket Subanale, merupakan motif kreatif songket tertua yang melambangkan kekuasaan Tuhan Yang Maha Kuasa. Zaman dahulu, menenun songket disakralkan dengan cara saat menenun dikelilingi oleh kain putih dan tidak boleh dilihat oleh siapapun. Ketika sudah selesai, lalu diperlihatkan ke semua orang, semua kagum dengan melafazhkan Subhanallah.
                  </p>

                  <div class="bor16 p-l-29 p-b-9 m-t-22">
                     <p class="stext-114 cl6 p-r-40 p-b-11">
                        Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a
                        while.
                     </p>

                     <span class="stext-111 cl8"> - Steve Job’s </span>
                  </div>
               </div>
            </div>

            <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
               <div class="how-bor2">
                  <div class="hov-img0">
                     <img src="images/tentang2.jpg" alt="IMG" />
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Footer -->
   <footer class="bg3 p-t-75 p-b-32">
      <div class="container">
         <div class="row">
            <div class="col-sm-6 col-lg-4 p-b-50">
               <h4 class="stext-301 cl0 p-b-25">Siapa Kami?</h4>

               <p class="stext-107 cl7 size-201">Kami memproduksi kain tenun tradisional beserta produk turunannya dan memproduksi pakaian adat sasak komplit</p>

            </div>

            <div class="col-sm-6 col-lg-4 p-b-50">
               <h4 class="stext-301 cl0 p-b-25">Hubungi Kami</h4>

               <ul>
                  
                  <li class="p-b-10">
                     <span class="stext-107 cl7 size-201">
                        <i class="bi bi-telephone m-r-2"> <?= $kontak['telepon']; ?></i>
                     </span>
                  </li>
                  
                  <li class="p-b-10">
                     <span class="stext-107 cl7 size-201">
                        <i class="bi bi-envelope m-r-2"></i> <?= $kontak['email']; ?>
                     </span>
                  </li>

                  <li class="p-b-10">
                     <span class="stext-107 cl7 size-201">
                        <i class="bi bi-geo-alt m-r-2"></i> <?= $kontak['alamat']; ?>
                     </span>
                  </li>
               </ul>
            </div>

            <div class="col-lg-1">

            </div>

            <div class="col-sm-6 col-lg-3 p-b-25">
               <h4 class="stext-301 cl0 p-b-30">Ikuti Kami</h4>

               <ul>
                  <li class="p-b-10">
                     <a href="https://www.facebook.com/profile.php?id=100075187163923" target="_blank" class="stext-107 cl7 hov-cl1 trans-04"> <i class="bi bi-facebook"></i> Sasak Sensek </a>
                  </li>

                  <li class="p-b-10">
                     <a href="https://www.instagram.com/sasksensek/" target="_blank" class="stext-107 cl7 hov-cl1 trans-04"> <i class="bi bi-instagram"></i> @sasksensek </a>
                  </li>

                  <li class="p-b-10">
                     <a href="https://vt.tiktok.com/ZSeDRUN1x/" target="_blank" class="stext-107 cl7 hov-cl1 trans-04"> <i class="bi bi-tiktok"></i> @sasaksensek </a>
                  </li>
               </ul>
            </div>

         </div>

         <div class="">
            <p class="stext-107 cl7 hov-cl1 trans-04 txt-center">
               <a href="https://tokopedia.com/sasaks" target="_blank" class="m-r-15"><img src="images/tokped.svg" width="50px" alt=""></a>
               <a href="https://m.bukalapak.com/u/sasak_sensek_12329" target="_blank"><img src="images/bukalapak.svg" width="50px" alt=""></a>
            </p>
         </div>

         <div class="p-t-40">

            <p class="stext-107 cl6 txt-center">
               <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
               Copyright &copy;
               <script>
                  document.write(new Date().getFullYear());
               </script>
               All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by
               <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
               <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
         </div>
      </div>
   </footer>

   <!-- Back to top -->
   <div class="btn-back-to-top" id="myBtn">
      <span class="symbol-btn-back-to-top">
         <i class="zmdi zmdi-chevron-up"></i>
      </span>
   </div>

   <!--===============================================================================================-->
   <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
   <!--===============================================================================================-->
   <script src="vendor/animsition/js/animsition.min.js"></script>
   <!--===============================================================================================-->
   <script src="vendor/bootstrap/js/popper.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
   <!--===============================================================================================-->
   <script src="vendor/select2/select2.min.js"></script>
   <script>
      $('.js-select2').each(function () {
         $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2'),
         });
      });
   </script>
   <!--===============================================================================================-->
   <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
   <!--===============================================================================================-->
   <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
   <script>
      $('.js-pscroll').each(function () {
         $(this).css('position', 'relative');
         $(this).css('overflow', 'hidden');
         var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
         });

         $(window).on('resize', function () {
            ps.update();
         });
      });
   </script>
   <!--===============================================================================================-->
   <script src="js/main.js"></script>
</body>
</html>
