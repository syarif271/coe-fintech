<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>COE Polibatam</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('style/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('style/css/style-homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/global-style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  </head>

<body>

  <x-partials.header/>

  <!-- ***** Main Banner Area Start ***** -->
  <div class="swiper-container" id="top">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url('images/slide-01.jpg')">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="header-text">
                  <h2>Get <em>ready</em> for your business<br>&amp; upgrade <em>all aspects</em></h2>
                  <div class="div-dec"></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio cumque odit consequatur ipsam qui facere minima sequi tempore accusamus dolorum! Eveniet asperiores numquam id temporibus magni ipsam molestiae nulla consequuntur.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(images/slide-02.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="header-text">
                  <h2><em>Digital</em> Currency for you <br>&amp; Best <em>Crypto</em> Tips</h2>
                  <div class="div-dec"></div>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem sit minus esse quam odio aliquam aperiam incidunt totam fugiat, unde voluptatibus vitae, quibusdam, nam cumque! Nam cum perferendis odit nemo.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(images/slide-03.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="header-text">
                  <h2>Best One in Town<br>&amp; Crypto <em>Services</em></h2>
                  <div class="div-dec"></div>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim laudantium, exercitationem quaerat inventore vitae doloribus commodi quas ullam sunt voluptates autem velit corrupti et id facilis blanditiis provident ex ipsam!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>

  <!-- ***** Main Banner Area End ***** -->

  <section id="news" class="news-section">
    <div class="container-news">
        <h2>Berita Terbaru</h2>
        <div class="news-grid">
          <x-cards.news-card
            url="{{ route('newsdetail') }}"
            image="{{ asset('images/slide-01.jpg') }}"
            title="Remaja tewas di belakang gedung technopreneur"
            date="15 April 2025"
            desc="seorang remaja ditemukan oleh pamdal dalam kondisi tidak bernyawa"
          />
          <x-cards.news-card
            url="{{ route('newsdetail') }}"
            image="{{ asset('images/slide-01.jpg') }}"
            title="Remaja tewas di belakang gedung technopreneur"
            date="15 April 2025"
            desc="seorang remaja ditemukan oleh pamdal dalam kondisi tidak bernyawa"
          />
          <x-cards.news-card
            url="{{ route('newsdetail') }}"
            image="{{ asset('images/slide-01.jpg') }}"
            title="Remaja tewas di belakang gedung technopreneur"
            date="15 April 2025"
            desc="seorang remaja ditemukan oleh pamdal dalam kondisi tidak bernyawa"
          />
          <x-cards.news-card
            url="{{ route('newsdetail') }}"
            image="{{ asset('images/slide-01.jpg') }}"
            title="Remaja tewas di belakang gedung technopreneur"
            date="15 April 2025"
            desc="seorang remaja ditemukan oleh pamdal dalam kondisi tidak bernyawa"
          />
          </div>
            <x-button.explore-button
              url="{{ route('newspage') }}"
              name="Explore All News"
            />
    </div>
  </section>

  <section class="partners" id="partners">
    <div class="container">
      <div class="row carousel" id="carousel">
        <div class="carousel-items">
          <x-partials.partner
            logo="{{ asset('images/client-01.png') }}"
          />
          <x-partials.partner
            logo="{{ asset('images/client-01.png') }}"
          />
          <x-partials.partner
            logo="{{ asset('images/client-01.png') }}"
          />
          <x-partials.partner
            logo="{{ asset('images/client-01.png') }}"
          />
          <x-partials.partner
            logo="{{ asset('images/client-01.png') }}"
          />
          <x-partials.partner
            logo="{{ asset('images/client-01.png') }}"
          />
          <x-partials.partner
            logo="{{ asset('images/client-01.png') }}"
          />
          <x-partials.partner
            logo="{{ asset('images/client-01.png') }}"
          />
          <x-partials.partner
            logo="{{ asset('images/client-01.png') }}"
          />
          <x-partials.partner
            logo="{{ asset('images/client-01.png') }}"
          />
          <x-partials.partner
            logo="{{ asset('images/client-01.png') }}"
          />
          <x-partials.partner
            logo="{{ asset('images/client-01.png') }}"
          />
          <x-partials.partner
            logo="{{ asset('images/client-01.png') }}"
          />
          <x-partials.partner
            logo="{{ asset('images/client-01.png') }}"
          />
          <x-partials.partner
            logo="{{ asset('images/client-01.png') }}"
          />
        </div>
      </div>
    </div>
  </section>

  <div class="events-container" id="events">
    <div class="section-header">
        <h2>Event</h2>
        <p>Where ideas collide and creativity unfolds. Our curated events are designed to inspire and connect.</p>
    </div>
    <div class="events-grid">
        {{-- Event 1 --}}
        <x-cards.event-card
            url="{{ route('eventdetail') }}"
            image="{{ asset('images/slide-01.jpg') }}"
            name="Tech Conference"
            title="Webinar Digital Marketing"
            date="25 Agustus 2024"
            desc="Pelajari strategi pemasaran digital terkini"
            added="Ditambahkan 3 hari lalu"
        />

        {{-- Event 2 --}}
        <x-cards.event-card
            url="{{ route('eventdetail') }}"
            image="{{ asset('images/slide-01.jpg') }}"
            name="Tech Conference"
            title="Workshop UI/UX Design"
            date="1 September 2024"
            desc="Mastering Figma untuk desain profesional"
            added="Ditambahkan 1 minggu lalu"
        />
        {{-- Event 3 --}}
        <x-cards.event-card
            url="{{ route('eventdetail') }}"
            image="{{ asset('images/slide-01.jpg') }}"
            name="Tech Conference"
            title="Workshop UI/UX Design"
            date="1 September 2024"
            desc="Mastering Figma untuk desain profesional"
            added="Ditambahkan 1 minggu lalu"
        />
    </div>
    <x-button.explore-button
      url="{{ route('eventpage') }}"
      name="Explore all events"
    />
</div>

  <section class="coe-section" id="coe">
    <h2>CENTER OF EXCELLENT</h2>
    <div class="container-coe">
      <x-cards.card-coe
        title="COX BIZHUB"
        desc="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum porro aperiam explicabo odio laudantium mollitia accusantium, aliquid veritatis ullam atque enim quidem nisi, laborum illum qui numquam repellendus omnis unde."
      />
      <x-cards.card-coe
        title="COX BIZHUB"
        desc="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum porro aperiam explicabo odio laudantium mollitia accusantium, aliquid veritatis ullam atque enim quidem nisi, laborum illum qui numquam repellendus omnis unde."
      />
      <x-cards.card-coe
        title="COX BIZHUB"
        desc="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum porro aperiam explicabo odio laudantium mollitia accusantium, aliquid veritatis ullam atque enim quidem nisi, laborum illum qui numquam repellendus omnis unde."
      />
      <x-cards.card-coe
        title="COX BIZHUB"
        desc="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum porro aperiam explicabo odio laudantium mollitia accusantium, aliquid veritatis ullam atque enim quidem nisi, laborum illum qui numquam repellendus omnis unde."
      />
      <x-cards.card-coe
        title="COX BIZHUB"
        desc="Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum porro aperiam explicabo odio laudantium mollitia accusantium, aliquid veritatis ullam atque enim quidem nisi, laborum illum qui numquam repellendus omnis unde."
      />
    </div>
  </section>

  <x-partials.footer
    gedung="| Gedung Mohammad Natsir Polibatam |"
    address="Jl.Ahmad Yani, Batam, 29462"
    email="tu-mb@polibatam.ac.id"
    no="+(62) 896 4354 9395"
  />
  
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('style/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('style/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('style/js/isotope.min.js') }}"></script>
    <script src="{{ asset('style/js/owl-carousel.js') }}"></script>

    <script src="{{ asset('style/js/tabs.js') }}"></script>
    <script src="{{ asset('style/js/swiper.js') }}"></script>
    <script src="{{ asset('style/js/custom.js') }}"></script>
    <script>
        var interleaveOffset = 0.5;

      var swiperOptions = {
        loop: true,
        speed: 1000,
        grabCursor: true,
        watchSlidesProgress: true,
        mousewheelControl: true,
        keyboardControl: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        on: {
          progress: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              var slideProgress = swiper.slides[i].progress;
              var innerOffset = swiper.width * interleaveOffset;
              var innerTranslate = slideProgress * innerOffset;
              swiper.slides[i].querySelector(".slide-inner").style.transform =
                "translate3d(" + innerTranslate + "px, 0, 0)";
            }      
          },
          touchStart: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = "";
            }
          },
          setTransition: function(speed) {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = speed + "ms";
              swiper.slides[i].querySelector(".slide-inner").style.transition =
                speed + "ms";
            }
          }
        }
      };

      var swiper = new Swiper(".swiper-container", swiperOptions);
    </script>
    <script>
      // Ambil elemen carousel dan carousel-items
const carousel = document.getElementById("carousel");
const carouselItems = carousel.querySelector(".carousel-items");
const items = Array.from(carouselItems.children);

// Duplikasi item untuk membuat loop yang mulus
const clonedItems = items.map(item => item.cloneNode(true)); // Menyalin semua item
carouselItems.append(...clonedItems); // Menambahkan elemen duplikat di akhir

let currentIndex = 0;
const totalItems = items.length; // Jumlah item asli

// Fungsi untuk memindahkan carousel
function moveCarousel() {
  currentIndex++;
  
  if (currentIndex >= totalItems) {
    currentIndex = 0;  // Reset ke awal setelah mencapai akhir
    carouselItems.style.transition = 'none';  // Hilangkan transisi
    carouselItems.style.transform = `translateX(0)`;  // Pindahkan kembali ke awal
    setTimeout(() => {
      carouselItems.style.transition = 'transform 1s linear';  // Mulai kembali transisi
    }, 50);  // Waktu tunggu yang sangat pendek untuk mengaktifkan transisi kembali
  } else {
    const moveTo = -(100 / totalItems) * (currentIndex + 1); // Menghitung posisi geser berdasarkan index
    carouselItems.style.transform = `translateX(${moveTo}%)`; // Geser carousel ke kiri
  }
}

// Menjalankan moveCarousel setiap 3 detik
setInterval(moveCarousel, 3000); // Ganti kecepatan sesuai kebutuhan

    </script>
  </body>
</html>