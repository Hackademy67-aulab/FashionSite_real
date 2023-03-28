<x-layout>
    <x-slot name=title>{{Route::currentRouteName()}}</x-slot>
    <div class="container-fluid">
        <div class="row header justify-content-center">
            <div class="col-12">

                <!-- NAVBAR -->
                <x-navbar/>
                <!-- FINE NAVBAR -->

                {{-- @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif --}}

                    <h3 class="text-center m-0 p-0 display-6 justdropped" style="position:relative; top:8.5rem; color: #5c5c5c; font-size: 2.5rem; font-weight:400">just dropped</h3>
                    <h2 class="text-center m-0 p-0" id="h2">Designed specially for you</h2>

                <!-- BUTTON HIM HER -->
                <div class="container-fluid bg-danger img_w_m" style="height:65vh">
                    <div class="row h-100">
                       <div class="col-12 col-lg-6 bg-primary bgimg-w d-flex justify-content-center align-items-center">
                            <button class="fw-bold px-5 py-2 text-secondary">For her</button>
                        </div>
                        <div class="col-12 col-lg-6 bg-light bgimg-m d-flex justify-content-center align-items-center">
                            <button class="fw-bold px-5 py-2 text-secondary">For him</button>
                        </div>
                    </div>
                </div>
                <!-- FINE BUTTON HIM HER -->

            </div>
        </div>
    </div>



    <h4 class="text-dark text-center  h2  fw-bold flashsales" style="margin-top: 454px; margin-bottom: 50px;">Flash sales</h4>

    <!-- Swiper -->
    <div class="swiper mySwiper reveal fade-bottom" style="width: 70%; height: 55vh;">
        <div class="swiper-wrapper" style="height: 75%;">

        <div class="swiper-slide watch d-flex flex-column mx-2 mx-lg-3">
            <article class="articoli mt-5 m-lg-0">
                <p class="fw-bold w-100  text-center text-dark d-flex justify-content-center m-0">Silverside WristWatch</p>
                <div class="d-flex justify-content-center">
                    <p class=" fw-semibold text-body-secondary text-decoration-line-through me-2">$200</p>
                    <p  class=" fw-semibold discountcolor">$120</p>
                </div>
            </article>
        </div>

        <div class="swiper-slide nike d-flex flex-column mx-2 mx-lg-3">
            <article class="articoli mt-5 m-lg-0">
                <p class="fw-bold w-100  text-center text-dark d-flex justify-content-center m-0">Nike Dunk</p>
                <div class="d-flex justify-content-center">
                    <p class=" fw-semibold text-body-secondary text-decoration-line-through me-2">$180</p>
                    <p  class=" fw-semibold discountcolor">$160</p>
                </div>
            </article>
        </div>

        <div class="swiper-slide adidas d-flex flex-column mx-2 mx-lg-3">
            <article class="articoli mt-5 m-lg-0">
                <p class="fw-bold w-100  text-center text-dark d-flex justify-content-center m-0">T-shirt Adidas</p>
                <div class="d-flex justify-content-center">
                    <p class=" fw-semibold text-body-secondary text-decoration-line-through me-2">$30</p>
                    <p  class=" fw-semibold discountcolor">$15</p>
                </div>
            </article>
        </div>

        <div class="swiper-slide sauvage d-flex flex-column mx-2 mx-lg-3">
            <article class="articoli mt-5 m-lg-0">
                <p class="fw-bold w-100  text-center text-dark d-flex justify-content-center m-0">Sauvage Dior</p>
                <div class="d-flex justify-content-center">
                    <p class=" fw-semibold text-body-secondary text-decoration-line-through me-2">$100</p>
                    <p  class=" fw-semibold discountcolor">$80</p>
                </div>
            </article>
        </div>

        <div class="swiper-slide watch d-flex flex-column mx-2 mx-lg-3 ">
            <article class="articoli mt-5 m-lg-0">
                <p class="fw-bold w-100  text-center text-dark d-flex justify-content-center m-0">Silverside WristWatch</p>
                <div class="d-flex justify-content-center">
                    <p class=" fw-semibold text-body-secondary text-decoration-line-through me-2">$200</p>
                    <p  class=" fw-semibold discountcolor">$120</p>
                </div>
            </article>
        </div>

        <div class="swiper-slide nike d-flex flex-column mx-2 mx-lg-3">
            <article class="articoli  mt-5 m-lg-0">
                <p class="fw-bold w-100  text-center text-dark d-flex justify-content-center m-0">Nike Dunk</p>
                <div class="d-flex justify-content-center">
                    <p class=" fw-semibold text-body-secondary text-decoration-line-through me-2">$180</p>
                    <p  class=" fw-semibold discountcolor">$160</p>
                </div>
            </article>
        </div>

        <div class="swiper-slide adidas d-flex flex-column mx-2 mx-lg-3">
            <article class="articoli  mt-5 m-lg-0">
                <p class="fw-bold w-100  text-center text-dark d-flex justify-content-center m-0">T-shirt Adidas</p>
                <div class="d-flex justify-content-center">
                    <p class=" fw-semibold text-body-secondary text-decoration-line-through me-2">$30</p>
                    <p  class=" fw-semibold discountcolor">$15</p>
                </div>
            </article>
        </div>

        <div class="swiper-slide sauvage d-flex flex-column imglink mx-2 mx-lg-3">
            <article class="articoli  mt-5 m-lg-0">
                <p class="fw-bold w-100  text-center text-dark d-flex justify-content-center m-0">Sauvage Dior</p>
                <div class="d-flex justify-content-center">
                    <p class=" fw-semibold text-body-secondary text-decoration-line-through me-2">$100</p>
                    <p  class=" fw-semibold discountcolor">$80</p>
                </div>
            </article>
        </div>



        </div>
        <div class="swiper-button-next discountcolor" style="position: absolute; top: 20vh;"></div>
        <div class="swiper-button-prev discountcolor" style="position: absolute; top: 20vh;"></div>
        <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
            </svg>
            <span></span>
            </div>
    </div>

    <div class="d-flex justify-content-center">
        <button class="bg-dark text-white my-5 my-lg-0 px-5 py-3 h6 fw-bold reveal fade-bottom ">View all</button>
    </div>

    <div class="container-fluid d-flex align-items-center mt-0 pt-4 mt-lg-5 pt-lg-5 flex-column reveal fade-bottom ">

        <div class="row everyday" style="width: 60%; height:50rem;">
            <div class=" col-12 col-lg-6 d-flex flex-column justify-content-center px-1 px-lg-5 everydayp">
                <h4 class="fw-bold mb-2" style="color: #616161">Everyday collection 2021</h4>
                <h3 class="h1 fw-bold mb-4">Be yourself</h2>
                <p class="w-75 mb-5 ">The ideal selection for your everyday use ina Super Saver range within a reasonable price range is here for you to keep you stay steady % trendy.</p>
                <button class="bg-dark text-white px-5 py-3 h6 fw-bold" style="width:fit-content">Explore</button>
            </div>
            <div class=" col-12 col-lg-6 imgeveryday d-flex justify-content-center text-white align-items-end">
                <section>
                    <a href="" style="text-decoration: none" class="text-white mb-3 h5">Outfit</a>
                    <i class="fa-solid fa-arrow-right ms-2 mb-3"></i>
                </section>
            </div>
        </div>

        <div class="row pt-2 articles " style="width: 60%; height:35rem;">
        <div class="col-12 col-lg-4 jacket d-flex justify-content-center text-white align-items-end ">
            <section>
                <a href="" style="text-decoration: none" class="text-white mb-3 h5">Jacket</a>
                <i class="fa-solid fa-arrow-right ms-2 mb-3"></i>
            </section>
        </div>
        <div class="col-12 col-lg-4 px-0 my-2 my-lg-0 ">
            <section class="caps d-flex justify-content-center text-white align-items-end h-100 mx-lg-2">
                <a href="" style="text-decoration: none" class="text-white mb-3 h5">Hats</a>
                <i class="fa-solid fa-arrow-right ms-2 mb-3"></i>
            </section>
        </div>
        <div class="col-12 col-lg-4 sneakers d-flex justify-content-center text-white align-items-end">
            <section>
                <a href="" style="text-decoration: none" class="text-white mb-3 h5">Sneakers</a>
                <i class="fa-solid fa-arrow-right ms-2 mb-3"></i>
            </section>
        </div>
    </div>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        autoplay: {
        delay: 2500,
        disableOnInteraction: false
        },
        freeMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },

        on: {
        autoplayTimeLeft(s, time, progress) {
            progressCircle.style.setProperty("--progress", 1 - progress);
            progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        }
        },

        breakpoints: {
  // when window width is >= 320px
  320: {
    slidesPerView: 2,
    spaceBetween: 20
  },
  // when window width is >= 480px
  480: {
    slidesPerView: 2,
    spaceBetween: 30
  },
  // when window width is >= 640px
  640: {
    slidesPerView: 4,
    spaceBetween: 40
  }
}


        });





    </script>
</x-layout>
