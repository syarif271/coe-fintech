<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Semua Berita</title>
  <link href="{{ asset('style/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('style/css/news-style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/global/global-style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/global/reset-style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/global/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  
</head>
<body>
  <div class="container">
      <header class="page-header">
          <h1>Latest News</h1>
          <p>Stay updated with the latest announcements, articles, and insights from our community and partners.</p>
          <div class="filter-controls">
              <button class="filter-btn active">All News</button>
              <button class="filter-btn">Updates</button>
              <button class="filter-btn">Articles</button>
              <button class="filter-btn">Announcements</button>
              <button class="filter-btn">Interviews</button>
          </div>
      </header>

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
          <x-cards.news-card
            url="{{ route('newsdetail') }}"
            image="{{ asset('images/slide-01.jpg') }}"
            title="Remaja tewas di belakang gedung technopreneur"
            date="15 April 2025"
            desc="seorang remaja ditemukan oleh pamdal dalam kondisi tidak bernyawa"
          />
      </div>
  </div>

  <x-button.pagination/>

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