<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Wikrama HighSchool</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css"
    />

    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/tiny-slider.css" />
    <link rel="stylesheet" href="css/glightbox.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/datepicker.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/index.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-2 py-3">
      <div class="container-xl">
        <a class="navbar-brand d-flex align-items-center" href="index.html">
          <img src="./images/suzuran-logo.png" alt="" class="col-1" />
          <h3 class="ms-3 text-white _nav_brand">Wikrama</h3>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white active" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white active" href="/register"
                >Register</a
              >
            </li>
            @auth
            <li class="nav-item">
              <a class="nav-link text-white active" href="/dashboard"
                >Dashboard</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-white active" href="/logout"
                >Logout</a
              >
            </li>
            @endauth

          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

      <footer
      class="ftco-footer img"
      style="background-image: url(images/car.png)"
    >
      <div class="overlay"></div>
      <div class="container-xl">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget">
              <h2 class="ftco-heading-2 logo d-flex text-center">
                <a class="navbar-brand" href="index.html">
                  <img src="images/wikrama-logo.png" alt="" class="col-3" />
                  <h1 class="_nav_brand text-white">Wikrama Highschool</h1>
                </a>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/datepicker.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
