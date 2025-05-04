<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('style/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('style/css/style-coe.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/global-style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/global/reset-style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">


  </head>

<body>

<x-partials.header-coe/>

  <!-- ***** Header Area End ***** -->

<x-partials.banner-coe/>

  <!-- ***** Main Banner Area End ***** -->

  <x-partials.about
    about="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam ab beatae at totam magni consequatur incidunt, aspernatur a eos placeat officiis cum ea iure nobis asperiores inventore ducimus aperiam sapiente. 
                      <br><br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, sapiente? Maiores, iure porro, illum ab libero doloremque quo quidem molestiae quibusdam nisi fugit maxime ad iste quasi neque cupiditate! Enim."
    vision="<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam ab beatae at totam magni consequatur incidunt, aspernatur a eos placeat officiis cum ea iure nobis asperiores inventore ducimus aperiam sapiente. 
                    <br><br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, sapiente? Maiores, iure porro, illum ab libero doloremque quo quidem molestiae quibusdam nisi fugit maxime ad iste quasi neque cupiditate! Enim.</p>"
    mission="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam ab beatae at totam magni consequatur incidunt, aspernatur a eos placeat officiis cum ea iure nobis asperiores inventore ducimus aperiam sapiente. 
                    <br><br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, sapiente? Maiores, iure porro, illum ab libero doloremque quo quidem molestiae quibusdam nisi fugit maxime ad iste quasi neque cupiditate! Enim."
  />

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
            name="Explore all news"
           />
    </div>
  </section>

  <section class="publication" id="publication">
    <div class="container-public">
        <h2>publication</h2>
        <div class="slide-box" id="slideBox">
          <x-cards.publication
            image="{{ asset('images/slide-01.jpg') }}"
            caption="GEBYAR HMTI 2025"
          />
          <x-cards.publication
            image="{{ asset('images/slide-01.jpg') }}"
            caption="GEBYAR HMTI 2025"
          />
          <x-cards.publication
            image="{{ asset('images/slide-01.jpg') }}"
            caption="GEBYAR HMTI 2025"
          />
          <x-cards.publication
            image="{{ asset('images/slide-01.jpg') }}"
            caption="GEBYAR HMTI 2025"
          />
          <x-cards.publication
            image="{{ asset('images/slide-01.jpg') }}"
            caption="GEBYAR HMTI 2025"
          />
          <x-cards.publication
            image="{{ asset('images/slide-01.jpg') }}"
            caption="GEBYAR HMTI 2025"
          />
          <x-cards.publication
            image="{{ asset('images/slide-01.jpg') }}"
            caption="GEBYAR HMTI 2025"
          />
          <x-cards.publication
            image="{{ asset('images/slide-01.jpg') }}"
            caption="GEBYAR HMTI 2025"
          />
          <x-cards.publication
            image="{{ asset('images/slide-01.jpg') }}"
            caption="GEBYAR HMTI 2025"
          />
          <x-cards.publication
            image="{{ asset('images/slide-01.jpg') }}"
            caption="GEBYAR HMTI 2025"
          />
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

<div class="cohesive-header">
  <div class="header-pattern"></div>
  <div class="branding-container">
      <div class="logo-mark"></div>
      <h1 class="header-title">Center of Excellence</h1>
      <p style="color: rgba(255,255,255,0.9);">Business Innovation & Entrepreneurship</p>
  </div>
</div>

<div class="services-grid">
  <!-- Service 1 -->
  <article class="service-card">
      <span class="service-number">01</span>
      <h2 class="service-title">Business Intelligence</h2>
      <p class="service-desc">Market research & competitive analysis untuk pengambilan keputusan strategis</p>
      <a href="" class="service-cta">
          <span>Explore Service</span>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M5 12h14M12 5l7 7-7 7"/>
          </svg>
      </a>
  </article>

  <!-- Service 2 -->
  <article class="service-card">
      <span class="service-number">02</span>
      <h2 class="service-title">Capacity Building</h2>
      <p class="service-desc">Program sertifikasi dan pelatihan berbasis kompetensi industri</p>
      <a href="#" class="service-cta">
          <span>Explore Service</span>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M5 12h14M12 5l7 7-7 7"/>
          </svg>
      </a>
  </article>

  <!-- Service 3 -->
  <article class="service-card">
      <span class="service-number">03</span>
      <h2 class="service-title">Strategic Consulting</h2>
      <p class="service-desc">Pendampingan transformasi bisnis dan digitalisasi UMKM</p>
      <a href="#" class="service-cta">
          <span>Explore Service</span>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M5 12h14M12 5l7 7-7 7"/>
          </svg>
      </a>
  </article>

  <!-- Service 4 -->
  <article class="service-card">
      <span class="service-number">04</span>
      <h2 class="service-title">Innovation Lab</h2>
      <p class="service-desc">Pengembangan produk inovatif berbasis riset dan teknologi</p>
      <a href="#" class="service-cta">
          <span>Explore Service</span>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M5 12h14M12 5l7 7-7 7"/>
          </svg>
      </a>
  </article>

  <!-- Service 5 -->
  <article class="service-card">
      <span class="service-number">05</span>
      <h2 class="service-title">Ecosystem Builder</h2>
      <p class="service-desc">Kolaborasi strategis antar pelaku bisnis dan institusi</p>
      <a href="#" class="service-cta">
          <span>Explore Service</span>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M5 12h14M12 5l7 7-7 7"/>
          </svg>
      </a>
  </article>
</div>
  
<x-partials.footer
  gedung="| Gedung Monas Polibatam |"
  address="Jl. Ahmad Yani, Batam, 29462"
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
      const track = document.getElementById('slideBox');
const items = document.querySelectorAll('.box-content');
const visibleSlides = 3;
const totalSlides = items.length;
let index = 0;

const slideWidth = items[0].offsetWidth + 55; // 300 + margin

function slide() {
  index++;
  track.style.transition = 'transform 0.5s ease';
  track.style.transform = `translateX(-${index * slideWidth}px)`;

  // ketika sudah mencapai slide ke-10 (index = 10), yang terlihat adalah 9, 10, 1
  if (index === totalSlides - visibleSlides) {
    setTimeout(() => {
      track.style.transition = 'none';
      track.style.transform = `translateX(0px)`;
      index = 0;
    }, 500);
  }
}

setInterval(slide, 2000);

    </script>
    
    
  <script>
  document.querySelectorAll('.accordion-head').forEach(button => {
    button.addEventListener('click', () => {
        const accordion = button.parentElement;
        const isActive = accordion.classList.contains('active');
        
        // Tutup semua accordion
        document.querySelectorAll('.accordion').forEach(item => {
            item.classList.remove('active');
        });
        
        // Buka jika sebelumnya tertutup
        if (!isActive) {
            accordion.classList.add('active');
        }
    });
});

// Buka accordion pertama secara default
document.querySelector('.accordion').classList.add('active');
    </script>
  </body>
</html>