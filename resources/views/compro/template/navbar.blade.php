<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('FOBC Logo.ico')}}" rel="icon">
  <link href="{{url('CP/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('CP/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ url('CP/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ url('CP/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{ url('CP/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ url('CP/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{ url('CP/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('CP/css/main.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ url('FOBC Logo.png') }}" alt="">
        <h1>FOBC ASIA</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ url('/') }}" class="{{ ($pages)=='home'?'active':'' }}">Home</a></li>
          <li><a href="{{ url('/products') }}" class="{{ ($pages)=='products'?'active':'' }}">Products</a></li>
          <li><a href="{{ url('/shipping') }}" class="{{ ($pages)=='shipping'?'active':'' }}">Shipping</a></li>
          <li><a href="{{ url('/country') }}" class="{{ ($pages)=='country'?'active':'' }}">Countries Reached</a></li>
          <li><a class="get-a-quote" href="https://wa.me/628123035842">Contact Us</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  @yield('bagan')
  
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <span>FOBC ASIA</span>
          </a>
          <p>Fish On Bait Company Asia specializes in importing and exporting high-quality seafood. Our commitment to sourcing the freshest catches ensures satisfaction with every shipment. With expertise and dedication, we're your top choice for all seafood needs.</p>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li>
              <a data-bs-toggle="modal" data-bs-target="#exampleModal">Make A Deal!</a>
            </li>
            <li><a href="{{ url('/login') }}">Log In (Admin)</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Products</h4>
          <ul>
            <li>Frozen Fish</a></li>
            <li>Seafoods</a></li>
            <li>Frozen Bait Fish</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Sampangan No. 19 Street <br>
            Banyuwangi<br>
            Indonesia<br><br>
            <strong>Phone:</strong> +62-8123035842<br>
            <strong>Email:</strong> lulu@bp-pac.net<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        2024 &copy; Copyright <strong><span> FOBC Asia </span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ url('CP/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('CP/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ url('CP/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('CP/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('CP/vendor/aos/aos.js') }}"></script>
  <script src="{{ url('CP/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('CP/js/main.js') }}"></script>

  <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Choose What You Want!</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

</body>

</html>