<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Mexant HTML5 Template - About page</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('style/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('style/css/style-coe.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/css/style-coe.css')); ?>">
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
                      <a href="<?php echo e(route('homepage')); ?>" class="logo">
                          <img src="" alt="">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="<?php echo e(route('homepage')); ?>">Home</a></li>
                          <li class="scroll-to-section"><a href="#about">About</a></li>
                          <li class="scroll-to-section"><a href="#news">News</a></li>
                          <li class="scroll-to-section"><a href="#publication">publication</a></li>
                          <li class="scroll-to-section"><a href="#events">events</a></li>
                          <li class="scroll-to-section"><a href="#services">Services</a></li>
                          <li class="scroll-to-section"><a href="#contact">Contact</a></li> 
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

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Center Commercialization & Product Sales</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Main Banner Area End ***** -->
  <section class="top-section">
    <div class="container">
      <div class="row" id="about">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="<?php echo e(asset('images/about-left-image.jpg')); ?>" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="accordions">
            <article class="accordion">
              <div class="accordion-head">
                  <span>About</span>
                  <span class="icon">
                      <i class="icon fa fa-chevron-right"></i>
                  </span>
              </div>
              <div class="accordion-body">
                  <div class="content">
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam ab beatae at totam magni consequatur incidunt, aspernatur a eos placeat officiis cum ea iure nobis asperiores inventore ducimus aperiam sapiente. 
                      <br><br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, sapiente? Maiores, iure porro, illum ab libero doloremque quo quidem molestiae quibusdam nisi fugit maxime ad iste quasi neque cupiditate! Enim.</p>
                  </div>
              </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>vision</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam ab beatae at totam magni consequatur incidunt, aspernatur a eos placeat officiis cum ea iure nobis asperiores inventore ducimus aperiam sapiente. 
                    <br><br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, sapiente? Maiores, iure porro, illum ab libero doloremque quo quidem molestiae quibusdam nisi fugit maxime ad iste quasi neque cupiditate! Enim.</p>
                </div>
            </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>Mission</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam ab beatae at totam magni consequatur incidunt, aspernatur a eos placeat officiis cum ea iure nobis asperiores inventore ducimus aperiam sapiente. 
                    <br><br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, sapiente? Maiores, iure porro, illum ab libero doloremque quo quidem molestiae quibusdam nisi fugit maxime ad iste quasi neque cupiditate! Enim.</p>
                </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section id="news" class="news-section">
    <div class="container-news">
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

  <section class="publication" id="publication">
    <div class="container-public">
        <h2>publication</h2>
        <div class="slide-box" id="slideBox">
          <a href="">
            <div class="box-content">
              <div class="image" style="background-image: url(images/slide-03.jpg);">
                <div class="caption">
                  <h6>Caption 1</h6>
                </div>
              </div>
            </div>
          </a>
          <a href="">
            <div class="box-content">
              <div class="image" style="background-image: url(images/slide-03.jpg);">
                <div class="caption">
                  <h6>Caption 2</h6>
                </div>
              </div>
            </div>
          </a>
          <a href="">
            <div class="box-content">
              <div class="image" style="background-image: url(images/slide-03.jpg);">
                <div class="caption">
                  <h6>Caption 3</h6>
                </div>
              </div>
            </div>
          </a>
          <a href="">
            <div class="box-content">
              <div class="image" style="background-image: url(images/slide-03.jpg);">
                <div class="caption">
                  <h6>Caption 4</h6>
                </div>
              </div>
            </div>
          </a>
          <a href="">
            <div class="box-content">
              <div class="image" style="background-image: url(images/slide-03.jpg);">
                <div class="caption">
                  <h6>Caption 5</h6>
                </div>
              </div>
            </div>
          </a>
          <a href="">
            <div class="box-content">
              <div class="image" style="background-image: url(images/slide-03.jpg);">
                <div class="caption">
                  <h6>Caption 6</h6>
                </div>
              </div>
            </div>
          </a>
          <a href="">
            <div class="box-content">
              <div class="image" style="background-image: url(images/slide-03.jpg);">
                <div class="caption">
                  <h6>Caption 7</h6>
                </div>
              </div>
            </div>
          </a>
          <a href="">
            <div class="box-content">
              <div class="image" style="background-image: url(images/slide-03.jpg);">
                <div class="caption">
                  <h6>Caption 8</h6>
                </div>
              </div>
            </div>
          </a>
          <a href="">
            <div class="box-content">
              <div class="image" style="background-image: url(images/slide-03.jpg);">
                <div class="caption">
                  <h6>Caption 9</h6>
                </div>
              </div>
            </div>
          </a>
          <a href="">
            <div class="box-content">
              <div class="image" style="background-image: url(images/slide-03.jpg);">
                <div class="caption">
                  <h6>Caption 10</h6>
                </div>
              </div>
            </div>
          </a>
          <a href="">
            <div class="box-content">
              <div class="image" style="background-image: url(images/slide-03.jpg);">
                <div class="caption">
                  <h6>Caption 1</h6>
                </div>
              </div>
            </div>
          </a>
          <a href="">
            <div class="box-content">
              <div class="image" style="background-image: url(../images/slide-03.jpg);">
                <div class="caption">
                  <h6>Caption 2</h6>
                </div>
              </div>
            </div>
          </a>
          <a href="">
            <div class="box-content">
              <div class="image" style="background-image: url(images/slide-03.jpg);">
                <div class="caption">
                  <h6>Caption 3</h6>
                </div>
              </div>
            </div>
          </a>
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
            <div class="event-image">
                <img src="images/slide-03.jpg" alt="Tech Conference">
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
        </div>
        
        <!-- Event 2 -->
        <div class="event-card">
            <div class="event-image">
                <img src="images/slide-03.jpg" alt="Design Workshop">
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
        </div>
        
        <!-- Event 3 -->
        <div class="event-card">
            <div class="event-image">
                <img src="images/slide-03.jpg" alt="Networking Event">
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

    <script src="<?php echo e(asset('style/bootstrap/js/isotope.min.js')); ?>"></script>
    <script src="<?php echo e(asset('style/bootstrap/js/owl-carousel.js')); ?>"></script>

    <script src="<?php echo e(asset('style/bootstrap/js/tabs.js')); ?>"></script>
    <script src="<?php echo e(asset('style/bootstrap/js/swiper.js')); ?>"></script>
    <script src="<?php echo e(asset('style/bootstrap/js/custom.js')); ?>"></script>
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
</html><?php /**PATH C:\laragon\www\coe-fintech\resources\views/frontend/COE-1.blade.php ENDPATH**/ ?>