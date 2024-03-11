@extends('compro.template.navbar')
@section('bagan')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('CP/img/about.jpg');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Shipping</h2>
            <p>Rest assured, our shipping service guarantees the prompt and fresh delivery of your seafood orders to your location, wherever you may be. Count on Fish On Bait Company Asia for dependable doorstep delivery.</p>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>Shippings</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
          <img src="{{ url('CP/img/shippingabout.jpg') }}" class="img-fluid" alt="" style="height: 750px; width:600px">
        </div>
        <div class="col-lg-6 content order-last  order-lg-first">
          <h3>Shipping</h3>
          <p>
            We entrust the shipping of our products to renowned companies. These industry leaders ensure the safe and efficient transportation of our goods to destinations worldwide. With their extensive experience and reliable services, we can guarantee timely deliveries and the utmost satisfaction for our customers.
          </p>
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <div>
                <h5>Safety Standards</h5>
                <p>Our selected shipping companies adhere to strict safety protocols, ensuring that your goods are handled with the utmost care throughout the shipping process, reducing the risk of damage or loss.</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <div>
                <h5>Reliability</h5>
                <p>With a proven track record of reliability and efficiency, our shipping partners consistently deliver on their promises, providing peace of mind to both us and our customers regarding the timely arrival of shipments.</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <div>
                <h5>Global Reach</h5>
                <p>Partnering with these reputable shipping companies allows us to access a vast network of routes and destinations, ensuring that your orders can be delivered to virtually any location worldwide, regardless of complexity or distance.                </p>
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
        <span>Shipping Expedition</span>
        <h2>Shipping Expedition</h2>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-4 col-md-6 d-flex">
          <div class="member">
            <img src="{{ url('CP/img/maersk.jpg')}}" class="img-fluid" alt="">
            <div class="member-content">
              <h4>Maersk Line</h4>
              <p>
                Contact us to inquire about the estimated shipping costs and arrival times.
              </p>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 d-flex">
          <div class="member">
            <img src="{{ url('CP/img/oocl.jpg')}}" class="img-fluid" alt="">
            <div class="member-content">
              <h4>Orient Overseas Container Line (OOCL)</h4>
              <p>
                Contact us to inquire about the estimated shipping costs and arrival times.
              </p>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 d-flex">
          <div class="member">
            <img src="{{ url('CP/img/cmacgm.jpg')}}" class="img-fluid" alt="">
            <div class="member-content">
              <h4>Compagnie Maritime d'Affrètement and Compagnie Générale Maritime (CMA CGM)</h4>
              <p>
                Contact us to inquire about the estimated shipping costs and arrival times.
              </p>
            </div>
          </div>
        </div><!-- End Team Member -->
        
        <div class="col-lg-4 col-md-6 d-flex">
          <div class="member">
            <img src="{{ url('CP/img/pillines.jpg')}}" class="img-fluid" alt="">
            <div class="member-content">
              <h4>Pacific International Lines (PIL Lines)</h4>
              <p>
                Contact us to inquire about the estimated shipping costs and arrival times.
              </p>
            </div>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>
  </section><!-- End Our Team Section -->

</main><!-- End #main -->
@endsection