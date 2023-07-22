
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/Hanna Syajida.jpeg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Hanna Syajida</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Buku Tamu</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <!-- <section id="about" class="about">
      <div class="container"> -->

        <!-- <div class="section-title">
          <h2>About</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Nama:</strong> <span>Hanna Syajida</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tempat,Tanggal Lahir:</strong> <span>05 Oktober 2002</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Lulusan:</strong> <span>S1 (Teknik Informatika) STMIK IKMI CIREBON</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>No.Hp:</strong> <span>083826944854</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span>Cirebon</span></li>
                </ul>
              </div>
            
        </div>

      </div>
    </section> End About Section -->

    <!-- ======= Skills Section ======= -->
    <!-- <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
        </div>
        <div class="row skills-content">
          <div class="col-lg-6" data-aos="fade-up">
            <div class="progress">
              <span class="skill">HTML
            </div>
            <div class="progress">
              <span class="skill">CSS 
            </div>
            <div class="progress">
              <span class="skill">JavaScript 
            </div>
          </div>
          <div class="row skills-content">
          <div class="col-lg-6" data-aos="fade-up">
            <div class="progress">
              <span class="skill">PHP 
            </div>
            <div class="progress">
              <span class="skill">Photoshop 
            </div>

          </div>

        </div>

      </div>
    </section>End Skills Section -->
    <!-- ======= Contact Section ======= -->

<?php
if(isset($_POST['btn_submit'])){
  echo '<pre>';
  var_dump($_POST);
  echo '</pre>';

  include 'conn.php';

  //siap insert data
  $s= "INSERT INTO tb_buku_tamu 
  (dari,pekerjaan,testimoni) VALUES
  ('$_POST[nama]', '$_POST[pekerjaan]', '$_POST[testimoni]')";
  // die($s);
  $q = mysqli_query($cn,$s) or die(mysqli_error($cn));
  echo 'Submit sukses.';
  exit;
}

?>
    <section id="contact" class="contact">
      <div class="container">

        <div class="form-group">
          <h2>Buku Tamu</h2>
          <p>Silahkan isi testimoni anda tentang website saya. Terima kasih!</p>
        </div>

        <div class="row" data-aos="fade-in">

          </div>

          <div class="col-lg-12">
            <form method="post">
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="nama">Nama Anda</label>
                  <input type="text" name="nama" class="form-control" id="nama" required>
                </div>
                <!-- <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div> -->
                <div class="form-group col-md-12">
                  <label for="pekerjaan">Pekerjaan</label>
                  <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required>
                </div>
              </div>
              <div class="form-group">
                  <label form="testimoni">Testimoni</label>
                  <textarea class="form-control" name="testimoni" rows="10" required></textarea>
              </div>
      
              <div class="text-center mt-2"><button class='btn btn_primary vt' name=btn_submit>Submit</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Hanna Syajida</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>