@extends('compro.template.navbar')
@section('bagan')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('CP/img/about.jpg');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Products</h2>
            <p>Explore our premium seafood, sourced from the depths of the ocean. Whether you're looking for fresh catches or premium selections, we have everything you need to satisfy your culinary desires.</p>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>Products</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
          <img src="{{ url('CP/img/productabout.jpg') }}" class="img-fluid" alt="" style="height: 750px; width:600px">
        </div>
        <div class="col-lg-6 content order-last  order-lg-first">
          <h3>Products</h3>
          <p>
            Indulge in the freshness of our frozen fish, frozen bait fish, and a delightful array of seafood sourced from the depths of pristine oceans. Our commitment to quality ensures that each product retains its natural flavors and nutrients, making every meal a savory delight.
          </p>
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <div>
                <h5>Premium Quality</h5>
                <p>Our products are meticulously sourced and processed to maintain their freshness and taste, guaranteeing an unparalleled dining experience.</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <div>
                <h5>Diverse Selection</h5>
                <p>From a variety of frozen fish to bait fish and other seafood options, we offer a wide range of choices to cater to different tastes and preferences.</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <div>
                <h5>Sustainability</h5>
                <p>We prioritize sustainable fishing practices and ethical sourcing methods, ensuring that our products are not only delicious but also environmentally responsible choices for conscientious consumers.                </p>
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
        <span>Our Products</span>
        <h2>Our Products</h2>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        @foreach ($products as $product)
          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="{{ url('CP/img/frozen.png')}}" class="img-fluid" alt="" style="height: 250px; width:400px">
              <div class="member-content">
                <h4>{{ $product->name }}</h4>
                <span>Start From Rp. {{ $product->price }} / box</span>
                <p>
                  The price may fluctuate depending on consumer demand and the timing of pre-orders.
                </p>
              </div>
            </div>
          </div>
        @endforeach

      </div>

    </div>
  </section><!-- End Our Team Section -->
  
  <!-- ======= Call To Action Section ======= -->
  <section id="call-to-action" class="call-to-action">
    <div class="container" data-aos="zoom-out">

      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h3>Make A Deal</h3>
          <p> Make a deal! Simply fill out the form and await our prompt contact regarding shipping arrangements.</p>
          <a class="cta-btn" href="/makeadeal">Make A Deal!</a>
          {{-- <a class="cta-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Make A Deal!</a> --}}
        </div>
      </div>

    </div>
  </section><!-- End Call To Action Section -->

</main><!-- End #main -->
@endsection