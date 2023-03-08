<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Pengaduan Masyarakat | Sayid Ijlal Rafi </title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <!-- Favicons -->
  <link href="assets1/img/favicon.png" rel="icon">
  <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets1/css/style.css" rel="stylesheet">
  <link href="assets1/css/style.css" rel="stylesheet">
</head>

<body style="background-image: url('assets/img/image.jpg'); background-size:cover">
  <!-- ======= Header ======= -->
  <nav class="navbar navbar-expand-lg" style="background-color:aqua">
    <div class="container">
      <a class="navbar-brand" href="index.php">Aplikasi Pengolahan Pengaduan Masyarakat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="btn btn-primary" href="index.php?page=registrasi">REGISTRASI</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-danger" href="index.php?page=login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">



    </div>
  </header><!-- End Header -->

  <?php
  if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
      case 'login':
        include 'login.php';
        break;
      case 'registrasi':
        include 'registrasi.php';
        break;

      default:
        echo "halaman tidak tersedia";
        break;
    }
  } else {
    include 'home.php';
  }

  ?>


  <footer class="footer mt-5 py-2 bg-light fixed-bottom">
    <div class="container">
      <p class="text-center">UKK RPL 2023 | Sayid Ijlal Rafi | SMKN 1 KARAWANG</p>
    </div>
  </footer>

  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>