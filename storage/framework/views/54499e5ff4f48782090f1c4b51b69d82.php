<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Semua Berita</title>
  <link href="<?php echo e(asset('style/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo e(asset('style/css/news-style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/css/owl.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/css/animate.css')); ?>">
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

      <div class="all-news-grid">
          <!-- News 1 -->
          <div class="news-card">
            <a href="<?php echo e(route('newsdetail')); ?>">
              <div class="news-image">
                  <img src="<?php echo e(asset('images/slide-01.jpg')); ?>" alt="Tech Innovation">
                  <div class="news-date">15 JUN</div>
                  <div class="news-category">Updates</div>
              </div>
              <div class="news-content">
                  <h3 class="news-title">Revolutionizing Tech Education</h3>
                  <p class="news-excerpt">Discover how our new curriculum integrates cutting-edge technologies with project-based learning for real-world impact.</p>
                  <div class="news-date">
                      <span>25 April 2025</span>
                      <a href="<?php echo e(route('newsdetail')); ?>" class="read-more">Read More →</a>
                  </div>
              </div>
            </a>
          </div>

          <!-- News 2 -->
          <div class="news-card">
            <a href="<?php echo e(route('newsdetail')); ?>">
              <div class="news-image">
                  <img src="<?php echo e(asset('images/slide-01.jpg')); ?>" alt="Campus Event">
                  <div class="news-date">22 JUL</div>
                  <div class="news-category">Events</div>
              </div>
              <div class="news-content">
                  <h3 class="news-title">Annual Tech Symposium</h3>
                  <p class="news-excerpt">Join industry leaders and innovators for three days of inspiring talks, workshops, and networking opportunities.</p>
                  <div class="news-date">
                      <span>10 April 2025</span>
                      <a href="<?php echo e(route('newsdetail')); ?>" class="read-more">Read More →</a>
                  </div>
              </div>
            </a>
          </div>

          <!-- News 3 -->
          <div class="news-card">
            <a href="<?php echo e(route('newsdetail')); ?>">
              <div class="news-image">
                  <img src="<?php echo e(asset('images/slide-01.jpg')); ?>" alt="Research Paper">
                  <div class="news-date">05 AUG</div>
                  <div class="news-category">Research</div>
              </div>
              <div class="news-content">
                  <h3 class="news-title">AI in Education Study</h3>
                  <p class="news-excerpt">Groundbreaking research reveals how AI-powered tools are transforming learning experiences worldwide.</p>
                  <div class="news-date">
                      <span>1 April 2025</span>
                      <a href="<?php echo e(route('newsdetail')); ?>" class="read-more">Read More →</a>
                  </div>
              </div>
            </a>
          </div>

          <!-- News 4 -->
          <div class="news-card">
            <a href="<?php echo e(route('newsdetail')); ?>">
              <div class="news-image">
                  <img src="<?php echo e(asset('images/slide-01.jpg')); ?>" alt="Student Achievement">
                  <div class="news-date">12 SEP</div>
                  <div class="news-category">Achievements</div>
              </div>
              <div class="news-content">
                  <h3 class="news-title">National Coding Champions</h3>
                  <p class="news-excerpt">Our student team secures first place in national programming competition for the third consecutive year.</p>
                  <div class="news-date">
                      <span>5 Maret 2025</span>
                      <a href="<?php echo e(route('newsdetail')); ?>" class="read-more">Read More →</a>
                  </div>
              </div>
            </a>
              
          </div>

          <!-- News 5 -->
          <div class="news-card">
            <a href="<?php echo e(route('newsdetail')); ?>">
              <div class="news-image">
                  <img src="<?php echo e(asset('images/slide-01.jpg')); ?>" alt="New Campus">
                  <div class="news-date">18 OCT</div>
                  <div class="news-category">Announcements</div>
              </div>
              <div class="news-content">
                  <h3 class="news-title">New Campus Expansion</h3>
                  <p class="news-excerpt">State-of-the-art facilities opening in 2025 with focus on immersive technologies and collaborative spaces.</p>
                  <div class="news-date">
                      <span>28 April 2025</span>
                      <a href="<?php echo e(route('newsdetail')); ?>" class="read-more">Read More →</a>
                  </div>
              </div>    
            </a>
              
          </div>

          <!-- News 6 -->
          <div class="news-card">
            <a href="<?php echo e(route('newsdetail')); ?>">
              <div class="news-image">
                <img src="<?php echo e(asset('images/slide-01.jpg')); ?>"alt="Alumni Success">
                <div class="news-date">25 NOV</div>
                <div class="news-category">Alumni</div>
            </div>
            <div class="news-content">
                <h3 class="news-title">Startup Success Story</h3>
                <p class="news-excerpt">Alumni-founded AI startup reaches unicorn status, credits institute's mentorship program.</p>
                <div class="news-date">
                    <span>15 April 2025</span>
                    <a href="<?php echo e(route('newsdetail')); ?>" class="read-more">Read More →</a>
                </div>
            </div>
            </a>
          </div>
      </div>

      <div class="pagination">
          <button class="page-btn">←</button>
          <button class="page-btn active">1</button>
          <button class="page-btn">2</button>
          <button class="page-btn">3</button>
          <button class="page-btn">→</button>
      </div>
  </div>

  <footer>
    <div class="container" id="contact">
      <div class="row">
        <img src="<?php echo e(asset('images/polibatam-logo.png')); ?>" alt="" class="logo-polibatam">
        <div class="col-sm-3.5">
          <h6>Info Kontak</h6>
          <p>| Gedung Monas Politeknik Negeri Batam |</p>
          <div class="lokasi">
            <i></i>
            <p><a href="https://maps.app.goo.gl/XG2gJyXTDdoSUEgVA
              ">Jl.Ahmad Yani, Batam, 29462</a></p>
          </div>
          <div class="email">
            <i class=""></i>
            <p><a href="">tu-mb@polibatam.ac.id</a></p>
          </div>
          <div class="nomorHp">
            <p><a href="">+(62) 896 4354 9395</a></p>
          </div>
        </div>
      </div>
      <div class="social-media">
        <a href="" class="instagram"><img src="<?php echo e(asset('images/facebook-logo (1).jpg')); ?>" alt=""></a>
        <a href="" class="facebook"><img src="<?php echo e(asset('images/facebook-logo (1).png')); ?>" alt=""></a>
        <a href="" class="youtube"><img src="<?php echo e(asset('images/facebook-logo (2).png')); ?>" alt=""></a>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="<?php echo e(asset('style/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('style/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <script src="<?php echo e(asset('style/js/isotope.min.js')); ?>"></script>
    <script src="<?php echo e(asset('style/js/owl-carousel.js')); ?>"></script>

    <script src="<?php echo e(asset('style/js/tabs.js')); ?>"></script>
    <script src="<?php echo e(asset('style/js/swiper.js')); ?>"></script>
    <script src="<?php echo e(asset('style/js/custom.js')); ?>"></script>
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
</html><?php /**PATH C:\laragon\www\coe-fintech\resources\views/frontend/news-page.blade.php ENDPATH**/ ?>