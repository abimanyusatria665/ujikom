@extends('layouts.layout')
@section('content')
    
    <section class="slider-hero">
      <div class="overlay"></div>
      <div class="hero-slider">
        <div class="item">
          <div class="work">
            <div
              class="img img2 d-flex align-items-center js-fullheight"
              style="background-image: url(images/5.jpg)"
            >
              <div class="container-xl">
                <div class="row d-flex justify-content-center">
                  <div class="col-md-7">
                    <div class="text text-center mt-lg-5">
                      <h1 class="mb-4 car-title">
                        Welcome To Wikrama HighSchool
                      </h1>
                      <p>
                        <a href="#" class="btn btn-1 p-4 py-3"
                          >Get Started
                          <span
                            class="ion-ios-arrow-round-forward text-white"
                          ></span
                        ></a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="work">
            <div
              class="img d-flex align-items-center justify-content-center js-fullheight"
              style="background-image: url(images/car.png)"
            >
              <div class="container-xl">
                <div class="row d-flex justify-content-center">
                  <!-- <div class="col-md-7">
                    <div class="text text-center mt-lg-5">
                      <h1 class="mb-4">Build Your Financial Plan With Our Specialists</h1>
                      <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <p><a href="#" class="btn btn-white p-4 py-3">Get Started <span class="ion-ios-arrow-round-forward"></span></a></p>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-1">
      <div class="container-xl">
        <div class="row g-lg-5">
          <div
            class="col-lg-6 heading-section d-flex align-items-center"
            data-aos="fade-up"
            data-aos-delay="200"
            data-aos-duration="1000"
          >
            <div class="mt-0 my-lg-5 py-5">
              <span class="subheading text-white"
                >About Wikrama Highschool</span
              >
              <h2 class="mb-4 text-white">We Already beat 100+ Highschool</h2>
              <p class="text-white">
                Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia, there live the blind texts. Separated
                they live in Bookmarksgrove right at the coast of the Semantics,
                a large language ocean.
              </p>
              <p class="text-white">
                A small river named Duden flows by their place and supplies it
                with the necessary regelialia. It is a paradisematic country, in
                which roasted parts of sentences fly into your mouth.
              </p>
              <p class="mt-4">
                <a href="#" class="btn btn-1 py-3 px-4 text-white"
                  >Learn More</a
                >
              </p>
            </div>
          </div>
          <div
            class="col-lg-6 d-flex serizawa"
            data-aos="fade-up"
            data-aos-delay="100"
            data-aos-duration="1000"
          >
            <img src="images/card-1.png" alt="" class="col-12" />
          </div>
        </div>
      </div>
    </section>

    <section
      class="ftco-section ftco-image img"
      style="background-image: url(images/car.png)"
    >
      <div class="container">
        <div class="row justify-content-end">
          <div
            class="col-md-6 heading-section"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <span class="subheading text-white">About suzuran highschool</span>
            <h2 class="mb-4 text-white">We're The Strongest</h2>
            <p class="text-white">
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the blind texts. Separated
              they live in Bookmarksgrove right at the coast of the Semantics, a
              large language ocean.
            </p>
            <a
              href="https://www.youtube.com/watch?v=nnp6ZRFEkGU"
              class="d-flex glightbox pt-4 align-items-center"
            >
              <div class="icon" style="background-color: rgb(36, 36, 36)">
                <span class="fa fa-play"></span>
              </div>
              <div class="text-white ps-4">
                <span>Watch Video</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-gallery ftco-no-pb ftco-section bg-2">
      <div class="container-xl-fluid mb-5">
        <div class="row justify-content-center">
          <div
            class="col-lg-5 heading-section text-center mb-5"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <span class="subheading text-white">Case Studies</span>
            <h2 class="mb-4 text-white">MAJOR</h2>
          </div>
        </div>
        <div class="row g-0">
          <div
            class="col-md-3"
            data-aos="fade-up"
            data-aos-delay="100"
            data-aos-duration="1000"
          >
            <a
              href="images/rpl.jpg"
              class="gallery-wrap img d-flex align-items-end justify-content-center glightbox"
              style="background-image: url(images/rpl.jpg)"
            >
              <div class="text">
                <h2 class="mb-0">PPLG</h2>
              </div>
            </a>
          </div>
          <div
            class="col-md-3"
            data-aos="fade-up"
            data-aos-delay="200"
            data-aos-duration="1000"
          >
            <a
              href="images/tkj.jpg"
              class="gallery-wrap img d-flex align-items-end justify-content-center glightbox"
              style="background-image: url(images/tkj.jpg)"
            >
              <div class="text">
                <h2 class="mb-0">TJKT</h2>
              </div>
            </a>
          </div>
          <div
            class="col-md-3"
            data-aos="fade-up"
            data-aos-delay="300"
            data-aos-duration="1000"
          >
            <a
              href="images/mmd.jpg"
              class="gallery-wrap img d-flex align-items-end justify-content-center glightbox"
              style="background-image: url(images/mmd.jpg)"
            >
              <div class="text">
                <h2 class="mb-0">DKV</h2>
              </div>
            </a>
          </div>
          <div
            class="col-md-3"
            data-aos="fade-up"
            data-aos-delay="300"
            data-aos-duration="1000"
          >
            <a
              href="images/mplb.jpg"
              class="gallery-wrap img d-flex align-items-end justify-content-center glightbox"
              style="background-image: url(images/mplb.jpg)"
            >
              <div class="text">
                <h2 class="mb-0">MPLB</h2>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
@endsection
