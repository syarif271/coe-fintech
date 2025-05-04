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
    <link href="<?php echo e(asset('style/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo e(asset('style/css/style-homepage.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/css/owl.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/css/animate.css')); ?>">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
<!--

TemplateMo 574 Mexant

https://templatemo.com/tm-574-mexant

-->
  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          <img src="" alt="">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                          <li class="scroll-to-section"><a href="#news">Berita</a></li>
                          <li class="scroll-to-section"><a href="#partners">Mitra</a></li>
                          <li class="scroll-to-section"><a href="#events">agenda</a></li>
                          <li class="scroll-to-section"><a href="#coe">COE</a></li>    
                          <li class="scroll-to-section"><a href="#contact">kontak</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

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
    <div class="container">
        <h2>Berita Terbaru</h2>
        <div class="news-grid">
          <a href="<?php echo e(route('newsdetail')); ?>">
            <div class="news-item" >
              <img src="<?php echo e(asset('images/slide-03.jpg')); ?>" alt="Berita 1">
              <div class="news-content">
                  <h3>Judul Berita 1</h3>
                  <hr style="border: 0; height:2px; background: #000000; margin: 15px 0;">
                  <p class="date">10 Maret 2025</p>
                  <p class="description">Deskripsi singkat tentang berita 1 yang menjelaskan isi berita dengan ringkas...</p>
              </div>
            </div>
          </a>
          
          <a href="<?php echo e(route('newsdetail')); ?>">
            <div class="news-item" >
              <img src="<?php echo e(asset('images/slide-01.jpg')); ?>" alt="Berita 1">
              <div class="news-content">
                  <h3>Judul Berita 1</h3>
                  <hr style="border: 0; height:2px; background: #000000; margin: 15px 0;">
                  <p class="date">10 Maret 2025</p>
                  <p class="description">Deskripsi singkat tentang berita 1 yang menjelaskan isi berita dengan ringkas...</p>
              </div>
            </div>
          </a>

          <a href="<?php echo e(route('newsdetail')); ?>">
            <div class="news-item" >
              <img src="<?php echo e(asset('images/slide-02.jpg')); ?>" alt="Berita 1">
              <div class="news-content">
                  <h3>Judul Berita 1</h3>
                  <hr style="border: 0; height:2px; background: #000000; margin: 15px 0;">
                  <p class="date">10 Maret 2025</p>
                  <p class="description">Deskripsi singkat tentang berita 1 yang menjelaskan isi berita dengan ringkas...</p>
              </div>
            </div>
          </a>

          <a href="<?php echo e(route('newsdetail')); ?>">
            <div class="news-item" >
              <img src="<?php echo e(asset('images/slide-03.jpg')); ?>" alt="Berita 1">
              <div class="news-content">
                  <h3>Judul Berita 1</h3>
                  <hr style="border: 0; height:2px; background: #000000; margin: 15px 0;">
                  <p class="date">10 Maret 2025</p>
                  <p class="description">Deskripsi singkat tentang berita 1 yang menjelaskan isi berita dengan ringkas...</p>
              </div>
            </div>
          </a>

          </div>
            <div class="view-all">
              <a href="<?php echo e(route('newspage')); ?>" class="view-all-button">
                  <i class="icon">📖</i>  Semua Berita
              </a>
           </div>
    </div>
  </section>

  <section class="partners" id="partners">
    <div class="container">
      <div class="row carousel" id="carousel">
        <div class="carousel-items">
          <div class="col-lg-2 col-sm-4 col-6">
            <div class="item">
              <img src="<?php echo e(asset('images/client-01.png')); ?>" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6">
            <div class="item">
              <img src="<?php echo e(asset ('images/client-01.png')); ?>" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6">
            <div class="item">
              <img src="<?php echo e(asset ('images/client-01.png')); ?>" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6">
            <div class="item">
              <img src="<?php echo e(asset ('images/client-01.png')); ?>" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6">
            <div class="item">
              <img src="<?php echo e(asset ('images/client-01.png')); ?>" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6">
            <div class="item">
              <img src="<?php echo e(asset ('images/client-01.png')); ?>" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6">
            <div class="item">
              <img src="<?php echo e(asset ('images/client-01.png')); ?>" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6">
            <div class="item">
              <img src="<?php echo e(asset ('images/client-01.png')); ?>" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6">
            <div class="item">
              <img src="<?php echo e(asset ('images/client-01.png')); ?>" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6">
            <div class="item">
              <img src="<?php echo e(asset ('images/client-01.png')); ?>" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6">
            <div class="item">
              <img src="<?php echo e(asset ('images/client-01.png')); ?>" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6">
            <div class="item">
              <img src="<?php echo e(asset ('images/client-01.png')); ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="events-container" id="events">
    <div class="section-header">
        <h2><span>Event</span></h2>
        <p>Where ideas collide and creativity unfolds. Our curated events are designed to inspire and connect.</p>
    </div>
    
    <div class="events-grid">
        <!-- Event 1 -->
        <div class="event-card">
          <a href="<?php echo e(route ('eventdetail')); ?>">
            <div class="event-image">
                <img src="<?php echo e(asset('images/slide-03.jpg')); ?>" alt="Tech Conference">
                <div class="event-date">15 JUN</div>
            </div>
            <div class="event-content">
                <h3 class="event-title">Neon Futures</h3>
                <p class="event-description">An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.</p>
                <div class="event-meta">
                    <span>Added: 2 days ago</span>
                    <span>↗</span>
                </div>
            </div>
          </a>
            
        </div>
        
        <!-- Event 2 -->
        <div class="event-card">
          <a href="<?php echo e(route ('eventdetail')); ?>">
            <div class="event-image">
                <img src="<?php echo e(asset('images/slide-03.jpg')); ?>" alt="Design Workshop">
                <div class="event-date">22 JUL</div>
            </div>
            <div class="event-content">
                <h3 class="event-title">Grid & Chaos</h3>
                <p class="event-description">Breaking design rules in this experimental workshop where structure meets creative anarchy.</p>
                <div class="event-meta">
                    <span>Added: 1 week ago</span>
                    <span>↗</span>
                </div>
            </div>
          </a>
        </div>
        
        <!-- Event 3 -->
        <div class="event-card">
          <a href="<?php echo e(route ('eventdetail')); ?>">
            <div class="event-image">
                <img src="<?php echo e(asset('images/slide-03.jpg')); ?>" alt="Networking Event">
                <div class="event-date">05 AUG</div>
            </div>
            <div class="event-content">
                <h3 class="event-title">Silent Disco</h3>
                <p class="event-description">Networking reimagined - connect without words through curated experiences and vibration.</p>
                <div class="event-meta">
                    <span>Added: 3 days ago</span>
                    <span>↗</span>
                </div>
            </div>
          </a>
        </div>
    </div>
    
    <div style="padding: 2rem; text-align: center;">
      <a href="<?php echo e(route('eventpage')); ?>" class="view-more-btn">
          Explore All Events
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
      </a>
    </div>
</div>

  <section class="coe-section" id="coe">
    <h2>CENTER OF EXCELLENT</h2>
    <div class="container-coe">
      <a href="<?php echo e(route('coe1')); ?>" class="box">
        <div class="coe-card">

            <div class="coe-title">Center Of Commercialization and Product Sales</div>
            <div class="coe-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ad deleniti quisquam recusandae! Itaque et quasi ducimus tempora. Doloremque ab voluptate labore dolorum eveniet soluta, nemo magnam ipsa incidunt maxime?</div>
        </div> 
      </a>

      <a href="<?php echo e(asset('source/COE-1.html')); ?>" class="box">
        <div class="coe-card">

            <div class="coe-title">COX BIZHUB</div>
            <div class="coe-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae pariatur sed molestiae quam doloribus corporis doloremque maiores, consectetur reiciendis ab maxime, eos dicta deserunt ad voluptate commodi! Cumque, nihil facilis.</div>
            
        </div>
      </a>

      <a href="<?php echo e(asset('source/COE-1.html')); ?>" class="box">
        <div class="coe-card">
            <div class="coe-title">Global Trade and supply chain management</div>
            <div class="coe-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil cupiditate enim corrupti molestiae dolorem similique neque fuga porro, non, tempora velit explicabo aperiam quos? Nisi aliquid doloribus nihil optio quaerat.</div>
        </div>
      </a>
      
      <a href="<?php echo e(asset('source/COE-1.html')); ?>" class="box">
        <div class="coe-card">
            <div class="coe-title">COX AFINTEC</div>
            <div class="coe-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ratione deserunt laborum sunt reiciendis blanditiis autem, porro ea quae, aperiam culpa dicta commodi ipsum excepturi et veritatis nemo, voluptatem reprehenderit.</div>
        </div>
      </a>
      
      <a href="<?php echo e(asset('source/COE-1.html')); ?>" class="box">
        <div class="coe-card">
            <div class="coe-title">Center Of Tax Center</div>
            <div class="coe-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit magnam tempore soluta atque recusandae iure quibusdam impedit! Totam esse laudantium quas nam saepe, similique soluta ea repellat, voluptates aspernatur fuga?</div>
        </div>
      </a>

    </div>
  </section>

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
</html><?php /**PATH C:\laragon\www\coe-fintech\resources\views/frontend/homepage.blade.php ENDPATH**/ ?>