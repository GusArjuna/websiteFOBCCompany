@extends('compro.template.navbar')
@section('bagan')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('CP/img/about.jpg');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Countries Reached</h2>
            <p>Fish On Bait Company Asia delivers premium seafood to various countries, bringing the taste of the ocean to your table, wherever you are.</p>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>Countries Reached</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
          <img src="{{ url('CP/img/countrydest.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 content order-last  order-lg-first">
          <h3>Export Destination</h3>
          <p>
            We pride ourselves on our extensive reach, catering to a wide range of export destinations across the globe. From bustling metropolitan areas to remote corners of the world, our products find their way to discerning customers who appreciate quality seafood. With a commitment to expanding our export destinations, we continuously seek new opportunities to bring the taste of the ocean to every corner of the globe.
          </p>
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <div>
                <h5>Global Accessibility</h5>
                <p>Our dedication to expanding our export destinations means that no matter where you are, you can enjoy our premium seafood products. We strive to reach even the most remote locations, ensuring that everyone has access to the freshest catches from the sea.</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <div>
                <h5>Efficient Logistics</h5>
                <p>Leveraging advanced logistics solutions, we streamline the export process to ensure timely deliveries to all our destinations. Whether it's a bustling city or a remote island, our efficient logistics network ensures that your orders arrive promptly and in pristine condition</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <div>
                <h5>Customer-Centric Approach</h5>
                <p>At the heart of our efforts to expand our export destinations is our commitment to customer satisfaction. We listen to the needs and preferences of our customers and tailor our export strategies to meet their demands. By putting our customers first, we ensure that they receive the highest quality seafood products, no matter where they are located.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team pt-0">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <span>Export Destinations</span>
        <h2>Export Destinations</h2>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-4 col-md-6 d-flex">
          <div class="member">
            <img src="{{ url('CP/img/auckland.jpeg')}}" class="img-fluid" style="height: 300px; width:400px" alt="">
            <div class="member-content">
              <h4>Auckland</h4>
              <span>New Zealand</span>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 d-flex">
          <div class="member">
            <img src="{{ url('CP/img/miami.png')}}" class="img-fluid" style="height: 300px; width:400px" alt="">
            <div class="member-content">
              <h4>Miami</h4>
              <span>Florida</span>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 d-flex">
          <div class="member">
            <img src="{{ url('CP/img/australia.jpg')}}" class="img-fluid" style="height: 300px; width:400px" alt="">
            <div class="member-content">
              <h4>Australia</h4>
              <span>Australia</span>
            </div>
          </div>
        </div><!-- End Team Member -->
        
        <div class="col-lg-4 col-md-6 d-flex">
          <div class="member">
            <img src="{{ url('CP/img/pago pago.png')}}" class="img-fluid" style="height: 300px; width:400px" alt="">
            <div class="member-content">
              <h4>Pago pago</h4>
              <span>American Samoa</span>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 d-flex">
          <div class="member">
            <img src="{{ url('CP/img/honolulu.png')}}" class="img-fluid" style="height: 300px; width:400px" alt="">
            <div class="member-content">
              <h4>Honolulu</h4>
              <span>Hawaii</span>
            </div>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>
  </section><!-- End Our Team Section -->

</main><!-- End #main -->
@endsection