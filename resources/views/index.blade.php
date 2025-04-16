@extends('layouts.app')


@section('content')
<main class="main">

    <section id="hero" class="hero section dark-background">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-item active">
          <img src="assets/img/hero_4.jpg" alt="">
          <div class="carousel-container text-center">
            <h2>From Humble Beginnings to Global Impact</h2>
            <p>Discover the inspiring journey of a local farm that grew from a single hectare into one of Ethiopia’s leading agricultural exporters.</p>
            <div class="d-flex justify-content-center gap-3 mt-4">
                <a href="/about" class="btn btn-outline-success d-flex align-items-center justify-content-center text-white">
                    Learn More
                </a>
                <a href="/product" class="btn btn-outline-success d-flex align-items-center justify-content-center text-white">
                    Explore Our Products
                </a>
            </div>
            
          </div>
        </div>

      </div>

    </section>

   
    <section id="about-3" class="about-3 section">

        <div class="container">
          <div class="row gy-4 justify-content-between align-items-center">
            <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
              <img src="assets/img/photo_2025-04-16_01-01-36.jpg" alt="Image" class="img-fluid">
              <a href="assets/videos/home_video_1.mp4" class="glightbox pulsating-play-btn">
                <span class="play"><i class="bi bi-play-fill"></i></span>
              </a>
            </div>
            <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
              <h2 class="content-title mb-4">Premium Products, Grown with Purpose</h2>
              <p class="mb-4">
                Explore our range of vegetables, fruits, grains, and specialty exports cultivated for quality and sustainability.
              </p>
              
              <p><a href="/product" class="btn-cta">See Full Product Range</a></p>
            </div>
          </div>
        </div>
      </section>
    <section id="about" class="about section">

      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <img src="assets/img/photo_2025-04-16_01-01-35.jpg" alt="Image " class="img-fluid img-overlap" data-aos="zoom-out">
            </div>
            <div class="col-lg-5 ml-auto align-self-center" data-aos="fade-up" data-aos-delay="100">
              <h3 class="content-subtitle text-white opacity-50">About Us</h3>
              <h2 class="content-title mb-4">
                Our Roots:<strong> 2000</strong> to Today.
              </h2>
              <p class="opacity-90">
                From using hand-held hoses and donkeys to managing over 300 hectares with global exports — our journey reflects hard work, vision, and the strength of local communities.
              </p>
              <p class="opacity-90">
                As our ambition grew, so did our operations. Within three years, we were hiring vehicles to transport our produce — a sign of evolution and resilience. 
              </p>
              <p><a href="/about" class="btn btn-light">Read Our Full Story</a></p>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="about-3" class="about-3 section">

        <div class="container">
          <div class="row gy-4 justify-content-between align-items-center">
            <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
              <img src="assets/img/320.jpg" alt="Image" class="img-fluid">
              
            </div>
            <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
              <h2 class="content-title mb-4">Rooted in Sustainability, Grown for Impact</h2>

              <ul class="list-unstyled list-check">
                <li>800+ permanent staff employed</li>
                <li>Eco-friendly farming practices</li>
                <li>Transparent, USD-based investment operations</li>
                <li>Community development programs</li>
              </ul>
  
              <p><a href="/impact" class="btn-cta">Explore Our Impact</a></p>
            </div>
          </div>
        </div>
      </section>
    

    <section id="services-2" class="services-2 section dark-background">
        <div class="container section-title" data-aos="fade-up">
          <h2>Products </h2>
          <p>We grow a wide variety of high-quality crops, cultivated with care and harvested with precision. Our products meet both local demands and international quality standards.</p>
        </div>
  
        <div class="services-carousel-wrap">
          <div class="container">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "navigation": {
                    "nextEl": ".js-custom-next",
                    "prevEl": ".js-custom-prev"
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 3,
                      "spaceBetween": 40
                    }
                  }
                }
              </script>
              <button class="navigation-prev js-custom-prev">
                <i class="bi bi-arrow-left-short"></i>
              </button>
              <button class="navigation-next js-custom-next">
                <i class="bi bi-arrow-right-short"></i>
              </button>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="service-item">
                    <div class="service-item-contents">
                      <a href="#">
                        <span class="service-item-category">We do</span>
                        <h2 class="service-item-title">Vegetables </h2>
                      </a>
                    </div>
                    <img src="assets/img/vegetables.jpg" alt="Image" class="img-fluid">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="service-item">
                    <div class="service-item-contents">
                      <a href="#">
                        <span class="service-item-category">We do</span>
                        <h2 class="service-item-title">Fruits </h2>
                      </a>
                    </div>
                    <img src="assets/img/fruits.jpg" alt="Image" class="img-fluid">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="service-item">
                    <div class="service-item-contents">
                      <a href="#">
                        <span class="service-item-category">We do</span>
                        <h2 class="service-item-title">Grains & Legumes</h2>
                      </a>
                    </div>
                    <img src="assets/img/grains&legumes.jpg" alt="Image" class="img-fluid">
                  </div>
                </div>
  
                <div class="swiper-slide">
                  <div class="service-item">
                    <div class="service-item-contents">
                      <a href="#">
                        <span class="service-item-category">We do</span>
                        <h2 class="service-item-title">Specialty Crops</h2>
                      </a>
                    </div>
                    <img src="assets/img/specialtycrops.jpg" alt="Image" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </section>


    <section id="recent-posts" class="recent-posts section">

      <div class="container section-title" >
        <h2>From the Field: Our Blog</h2>
        <p>Stay updated with stories, insights, and updates from our growing journey. </p>
      </div>

      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" >

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                <span class="post-date">December 12</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                  </div>
                </div>

                <hr>

                <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div>

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" >

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                <span class="post-date">July 17</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                  </div>
                </div>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div>

          <div class="col-xl-4 col-md-6" >
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                <span class="post-date">September 05</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                  </div>
                </div>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div>

        </div>

      </div>

    </section>

  </main>
@endsection
