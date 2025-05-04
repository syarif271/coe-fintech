<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Events | Event Horizons</title>
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
            <h1>All Events</h1>
            <p>Browse through our complete collection of upcoming events, workshops, and conferences designed to inspire and connect.</p>
            <div class="filter-controls">
                <button class="filter-btn active">All Events</button>
                <button class="filter-btn">Conferences</button>
                <button class="filter-btn">Workshops</button>
                <button class="filter-btn">Networking</button>
                <button class="filter-btn">Upcoming</button>
            </div>
        </header>

        <div class="all-events-grid">
            <!-- Event 1 -->
            <div class="event-card">
                <a href="<?php echo e(route('eventdetail')); ?>">
                    <div class="event-image">
                        <img src="<?php echo e(asset('images/slide-02.jpg')); ?>" alt="Tech Conference">
                        <div class="event-date">15 JUN</div>
                        <div class="event-category">Conference</div>
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
                <a href="<?php echo e(route('eventdetail')); ?>">
                    <div class="event-image">
                    <img src="../a<?php echo e(asset('images/slide-02.jpg')); ?>t="Design Workshop">
                    <div class="event-date">22 JUL</div>
                    <div class="event-category">Workshop</div>
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
                <a href="<?php echo e(route('eventdetail')); ?>">
                    <div class="event-image">
                    <img src="../a<?php echo e(asset('images/slide-02.jpg')); ?>t="Networking Event">
                    <div class="event-date">05 AUG</div>
                    <div class="event-category">Networking</div>
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

            <!-- Event 4 -->
            <div class="event-card">
                <a href="<?php echo e(route('eventdetail')); ?>">
                    <div class="event-image">
                    <img src="../a<?php echo e(asset('images/slide-02.jpg')); ?>t="Hackathon">
                    <div class="event-date">12 SEP</div>
                    <div class="event-category">Hackathon</div>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Code Pulse</h3>
                    <p class="event-description">A 24-hour hackathon challenging developers to create solutions for social impact.</p>
                    <div class="event-meta">
                        <span>Added: 5 days ago</span>
                        <span>↗</span>
                    </div>
                </div>
                </a>
            </div>

            <!-- Event 5 -->
            <div class="event-card">
                <a href="<?php echo e(route('eventdetail')); ?>">
                    <div class="event-image">
                    <img src="../a<?php echo e(asset('images/slide-02.jpg')); ?>t="Art Exhibition">
                    <div class="event-date">18 OCT</div>
                    <div class="event-category">Exhibition</div>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Digital Canvas</h3>
                    <p class="event-description">Exploring the fusion of traditional art techniques with digital mediums in this interactive exhibition.</p>
                    <div class="event-meta">
                        <span>Added: 2 weeks ago</span>
                        <span>↗</span>
                    </div>
                </div>
                </a>
            </div>

            <!-- Event 6 -->
            <div class="event-card">
                <a href="<?php echo e(route('eventdetail')); ?>">
                    <div class="event-image">
                    <img src="../a<?php echo e(asset('images/slide-02.jpg')); ?>t="Startup Pitch">
                    <div class="event-date">25 NOV</div>
                    <div class="event-category">Pitch Night</div>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Founder's Arena</h3>
                    <p class="event-description">Startups pitch their ideas to a panel of investors in this high-energy evening event.</p>
                    <div class="event-meta">
                        <span>Added: 1 week ago</span>
                        <span>↗</span>
                    </div>
                </div>
                </a>
            </div>

            <!-- Event 7 -->
            <div class="event-card">
                <a href="news-detail.html">
                    <div class="event-image">
                        <img src="<?php echo e(asset('images/slide-02.jpg')); ?>" alt="VR Workshop">
                        <div class="event-date">03 DEC</div>
                        <div class="event-category">Workshop</div>
                    </div>
                    <div class="event-content">
                        <h3 class="event-title">VR Frontiers</h3>
                        <p class="event-description">Hands-on workshop exploring the latest in virtual reality development and design principles.</p>
                        <div class="event-meta">
                            <span>Added: 4 days ago</span>
                            <span>↗</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Event 8 -->
            <div class="event-card">
                <a href="<?php echo e(route('eventdetail')); ?>">
                    <div class="event-image">
                    <img src="../a<?php echo e(asset('images/slide-02.jpg')); ?>t="AI Lecture">
                    <div class="event-date">15 JAN</div>
                    <div class="event-category">Lecture</div>
                </div>
                <div class="event-content">
                    <h3 class="event-title">AI Ethics Unpacked</h3>
                    <p class="event-description">Leading thinkers discuss the ethical implications of artificial intelligence in our daily lives.</p>
                    <div class="event-meta">
                        <span>Added: Yesterday</span>
                        <span>↗</span>
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
            <button class="page-btn">4</button>
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

</body>
</html><?php /**PATH C:\laragon\www\coe-fintech\resources\views/frontend/events-page.blade.php ENDPATH**/ ?>