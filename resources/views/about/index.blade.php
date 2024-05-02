<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas Akhir</title>
    <link rel="stylesheet" href="../node_modules/aos/dist/aos.css" />
    <script src="../node_modules/aos/dist/aos.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/5fd2369345.js"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body class="bg-warning-subtle bg-gradient">
    <nav
      class="navbar navbar-expand-md navbar-dark fixed-top bg-gradient bg-primary">
      <div class="container">
        <a class="navbar-brand" href="index.html"
          ><img
            class="rounded-circle me-1"
            src="../assets/img/logo.jpg"
            alt="Bootstrap"
            width="60"
            height="60" />
          <span class="nav-hover h5">Kobessah Kopi</span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link nav-hover" href="menu.html">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-hover" href="about.html">Tentang Kami</a>
            </li>
          </ul>
          <div class="d-flex d-none" id="payment">
            <a class="btn btn-warning" href="cart.html">
              <i class="fa-solid fa-cart-shopping"></i>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- end nav -->
    <main class="container mt-5 pt-4">
      <div
        class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg in">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
          <h1 class="display-4 fw-bold lh-1 text-body-emphasis">
            Kobessah Kopi
          </h1>
          <p class="lead">
            Kobessah menyambut Anda dengan hangat di website kami! Kami dengan
            senang hati mempersembahkan beragam pesanan yang menarik dan
            berkualitas tinggi. Silakan jelajahi berbagai pilihan yang tersedia
            dan temukan produk yang sesuai dengan kebutuhan Anda.
          </p>
        </div>
        <div
          class="col-lg-4 col-md-12 col-sm-12 mb-md-5 offset-lg-1 p-0 overflow-hidden in d-sm-none d-md-block d-md-none d-lg-block">
          <img
            class="rounded-3 shadow-lg"
            src="../assets/img/produk2.jpg"
            alt=""
            width="600" />
        </div>
      </div>
    </main>
    <!-- footer -->
    <footer class="footer bg-gradient bg-primary shadow-lg mt-5">
      <div class="container text-white">
        <div class="row">
          <div class="col-md-6 mt-5 mb-5">
            <h5>Tentang</h5>
            <p>
              Kobessah merupakan tempat nongkrong nyaman dan asik untuk
              mahasiswa.
            </p>
          </div>
          <div class="col-md-6 mt-5 mb-5">
            <h5>Kontak</h5>
            <ul class="list-unstyled">
              <li>
                Alamat: Jl.Bima Sinduharjao, Kec.Ngaglik, Kab.Sleman,
                DI.Yogyakarta
              </li>
              <li>Email: Kobessah@gmail.com</li>
              <li>Phone: +62 895-6120-13456</li>
            </ul>
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col-md-12 text-center">
            <p>&copy; 2024 Kobessah Kopi</p>
          </div>
        </div>
      </div>
    </footer>
    <!--  -->
  </body>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  <script src="../node_modules/bootstrap/dist/js/vanilla-tilt.js"></script>
  <script src="../node_modules/jquery/dist/jquery.js"></script>
  <script src="script.js"></script>
</html>
