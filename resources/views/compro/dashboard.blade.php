@extends('compro.template.navbar')
@section('bagan')
<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Bounty from the Depths, Fish On Bait Company Asia</h2>
          <p data-aos="fade-up" data-aos-delay="100">Fish On Bait Company Asia specializes in importing and exporting high-quality seafood. Our commitment to sourcing the freshest catches ensures satisfaction with every shipment. With expertise and dedication, we're your top choice for all seafood needs.</p>
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

<main id="main">

  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
          <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
          <div>
            <h4 class="title">Products</h4>
            <p class="description">Discover our top-quality seafood sourced from the depths of the ocean. From fresh catches to premium selections, we've got your culinary needs covered.</p>
            <a href="{{ url('/products') }}" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
          <div>
            <h4 class="title">Shipping</h4>
            <p class="description">Our shipping service ensures your seafood orders arrive fresh and on time, no matter where you are. Trust Fish On Bait Company Asia for reliable delivery straight to your doorstep.</p>
            <a href="{{ url('/shipping') }}" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
          <div>
            <h4 class="title">Countries Reached</h4>
            <p class="description">Fish On Bait Company Asia delivers premium seafood to various countries, bringing the taste of the ocean to your table, wherever you are.</p>
            <a href="{{ url('/country') }}" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>
  </section><!-- End Featured Services Section -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about pt-0">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
          <img src="{{ url('CP/img/dashboardabout.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 content order-last  order-lg-first">
          <h3>About Us</h3>
          <p>
            Fish On Bait Company Asia is a trusted name in the seafood import-export industry, dedicated to delivering quality products worldwide. With a focus on excellence and sustainability, we source the freshest catches from global suppliers. Our diverse range includes fresh fish, shellfish, premium cuts, and specialty items. Committed to customer satisfaction, we uphold the highest standards of freshness and safety in every shipment. Through responsible sourcing and sustainable practices, we aim to minimize our environmental impact. Choose Fish On Bait Company Asia for premium seafood solutions you can trust.
          </p>
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-diagram-3"></i>
              <div>
                <h5>Structured Delivery</h5>
                <p>Our structured delivery system at Fish On Bait Company Asia ensures prompt and efficient shipping of our premium seafood products. Count on us for reliable and timely deliveries worldwide, right to your door.</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-truck"></i>
              <div>
                <h5>Fast Shipping</h5>
                <p>Fish On Bait Company Asia provides fast delivery services, ensuring your seafood arrives quickly and fresh, no matter where you are.</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-patch-check-fill"></i>
              <div>
                <h5>Trusted Company</h5>
                <p>At Fish On Bait Company Asia, we're your trusted seafood partner. With a reputation built on reliability and integrity, we deliver quality products and excellent service every time.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Services Section ======= -->
  <section id="service" class="services pt-0">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <span>Our Products</span>
        <h2>Our Products</h2>
        <p>Touted as the epitome of excellence, this product embodies the culmination of our dedication, expertise, and passion.</p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <div class="card-img">
              <img src="{{ url('CP/img/frozen.png') }}" alt="" class="img-fluid">
            </div>
            <h3><a href="{{ url('/products') }}" class="stretched-link">Frozen Fish</a></h3>
            <p>Indulge in the convenience and freshness of our frozen fish selection. Sourced from pristine waters and expertly frozen to preserve flavor and texture, our frozen fish products offer the perfect solution for convenient and nutritious meals. From succulent fillets to whole fish, our range caters to every culinary preference.</p>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card">
            <div class="card-img">
              <img src="{{ url('CP/img/seafood.png') }}" alt="" class="img-fluid">
            </div>
            <h3><a href="{{ url('/products') }}" class="stretched-link">Seafood</a></h3>
            <p>Dive into a world of flavor with our exquisite seafood offerings. From succulent shrimp to tender scallops, our seafood selection is sourced from the finest sources to ensure exceptional quality and taste. Whether you're craving a seafood feast or looking to elevate your favorite recipes, our seafood products are sure to impress.</p>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card">
            <div class="card-img">
              <img src="{{ url('CP/img/frozenbait.png') }}" alt="" class="img-fluid">
            </div>
            <h3><a href="{{ url('/products') }}" class="stretched-link">Frozen Bait Fish</a></h3>
            <p>For anglers and fishing enthusiasts, our frozen bait fish are a must-have companion for successful fishing trips. Sourced from premium sources and expertly frozen to preserve freshness, our bait fish ensure optimal performance on the water. Whether you're targeting freshwater or saltwater species, our frozen bait fish are the perfect choice for attracting bites and landing the big catch.</p>
          </div>
        </div><!-- End Card Item -->
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Call To Action Section ======= -->
  <section id="call-to-action" class="call-to-action">
    <div class="container" data-aos="zoom-out">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h3>Make A Deal</h3>
          <p> Make a deal! Simply fill out the form and await our prompt contact regarding shipping arrangements.</p>
          <a class="cta-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Make A Deal!</a>
        </div>
      </div>

    </div>
  </section><!-- End Call To Action Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <span>Frequently Asked Questions</span>
        <h2>Frequently Asked Questions</h2>

      </div>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-10">

          <div class="accordion accordion-flush" id="faqlist">

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                  <i class="bi bi-question-circle question-icon"></i>
                  What are the payment terms with PT. FoBC ASIA?
                </button>
              </h3>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Payment Term 30% Down And Rest After Loading/doc
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                  <i class="bi bi-question-circle question-icon"></i>
                  What are the quality qualifications of PT. FoBC ASIA?
                </button>
              </h3>
              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Quality A Grade
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                  <i class="bi bi-question-circle question-icon"></i>
                  What are the size regulations for fish from PT. FoBC ASIA?
                </button>
              </h3>
              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                    Size As Per Buyer Need
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                  <i class="bi bi-question-circle question-icon"></i>
                    What are the shipment schedule terms from PT. FoBC ASIA?
                </button>
              </h3>
              <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  <i class="bi bi-question-circle question-icon"></i>
                  Available As Per Request
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                  <i class="bi bi-question-circle question-icon"></i>
                  Can PT. FoBC ASIA accommodate pre-orders for seasonal fish or year-round?
                </button>
              </h3>
              <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                  Year Around
                </div>
              </div>
            </div><!-- # Faq item-->

          </div>

        </div>
      </div>

    </div>
  </section><!-- End Frequently Asked Questions Section -->

</main><!-- End #main -->
@endsection