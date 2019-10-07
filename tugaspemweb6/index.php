<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 

  $result = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['npm'])) {
          //query SQL
          $npm_upd = $_GET['npm'];
          $query = "SELECT * FROM mhs WHERE npm = '$npm_upd'"; 

          //eksekusi query
          $result = mysqli_query(connection(),$query);
      }  
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PEMWEB</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Pemrograman Web</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo "datatable.php"; ?>">Data Mahasiswa</a>
          </li>
          <!-- <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#tambah">Tambah Data</a>
          </li> -->
          <!-- <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="img/avataaars.svg" alt="">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">WEB PROFILE</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Data Diri</p>

    </div>
  </header>

  <!-- Data Mahasiswa Section -->
  <section class="page-section portfolio" id="datamhs">
    <div class="container">

      <!-- Data Mahasiswa Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Profile Mahasiswa</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <?php while($data = mysqli_fetch_array($result)): ?>
      <table>
          <br>
          <tr><td></td><td style="width: 100px" valign="top">NAMA</td><td>:</td><td><?php echo $data['nama'];  ?></td></tr>
          <tr><td></td><td valign="top">NPM</td><td>:</td><td><?php echo $data['npm'];  ?></td></tr>
          <tr><td></td><td valign="top">TTL</td><td>:</td><td><?php echo $data['ttl'];  ?></td></tr>
          <tr><td></td><td valign="top">JENIS KELAMIN</td><td>:</td><td><?php echo $data['jenis_kelamin'];  ?></td></tr>
          <tr><td></td><td valign="top">ALAMAT</td><td>:</td><td><?php echo $data['alamat'];  ?></td></tr>
          <tr><td></td><td valign="top">NO HP</td><td>:</td><td><?php echo $data['nohp'];  ?></td></tr>
          <tr><td></td><td valign="top">JURUSAN</td><td>:</td><td><?php echo $data['jrs'];  ?></td></tr>
          <tr><td></td><td valign="top">FAKULTAS</td><td>:</td><td><?php echo $data['fkl'];  ?></td></tr>
          <tr><td></td><td valign="top">UNIV</td><td>:</td><td><?php echo $data['univ'];  ?></td></tr>          
      </table>
      <?php endwhile; ?>

      
    </div>
  </section>


  

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Location</h4>
          <p class="lead mb-0">jl. medayu utara xiii no. 5
            <br>Rungkut, 60219</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Around the Web</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="https://facebook.com/rahayu.airie">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/rahayuairie">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/rahayuairie/">
            <i class="fab fa-fw fa-instagram"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/rahayuamelia">
            <i class="fab fa-fw fa-github"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">Contact Us</h4>
          <p class="lead mb-0">WA 082132368096</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; rahayuairie.</small>
    </div>
  </section>



  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.js"></script>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
