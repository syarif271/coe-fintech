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
    <link rel="stylesheet" href="<?php echo e(asset('style/css/global-style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/css/owl.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/css/animate.css')); ?>">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  </head>

<body>

  <?php if (isset($component)) { $__componentOriginal21b90aee62eb729a70bc5150038e88d2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal21b90aee62eb729a70bc5150038e88d2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal21b90aee62eb729a70bc5150038e88d2)): ?>
<?php $attributes = $__attributesOriginal21b90aee62eb729a70bc5150038e88d2; ?>
<?php unset($__attributesOriginal21b90aee62eb729a70bc5150038e88d2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal21b90aee62eb729a70bc5150038e88d2)): ?>
<?php $component = $__componentOriginal21b90aee62eb729a70bc5150038e88d2; ?>
<?php unset($__componentOriginal21b90aee62eb729a70bc5150038e88d2); ?>
<?php endif; ?>

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
          <?php if (isset($component)) { $__componentOriginal9825f3459428e0040ca758a949f77651 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9825f3459428e0040ca758a949f77651 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.news-card','data' => ['url' => ''.e(route('newsdetail')).'','image' => ''.e(asset('images/slide-01.jpg')).'','title' => 'Remaja tewas di belakang gedung technopreneur','date' => '15 April 2025','desc' => 'seorang remaja ditemukan oleh pamdal dalam kondisi tidak bernyawa']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.news-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('newsdetail')).'','image' => ''.e(asset('images/slide-01.jpg')).'','title' => 'Remaja tewas di belakang gedung technopreneur','date' => '15 April 2025','desc' => 'seorang remaja ditemukan oleh pamdal dalam kondisi tidak bernyawa']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9825f3459428e0040ca758a949f77651)): ?>
<?php $attributes = $__attributesOriginal9825f3459428e0040ca758a949f77651; ?>
<?php unset($__attributesOriginal9825f3459428e0040ca758a949f77651); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9825f3459428e0040ca758a949f77651)): ?>
<?php $component = $__componentOriginal9825f3459428e0040ca758a949f77651; ?>
<?php unset($__componentOriginal9825f3459428e0040ca758a949f77651); ?>
<?php endif; ?>
          <?php if (isset($component)) { $__componentOriginal9825f3459428e0040ca758a949f77651 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9825f3459428e0040ca758a949f77651 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.news-card','data' => ['url' => ''.e(route('newsdetail')).'','image' => ''.e(asset('images/slide-01.jpg')).'','title' => 'Remaja tewas di belakang gedung technopreneur','date' => '15 April 2025','desc' => 'seorang remaja ditemukan oleh pamdal dalam kondisi tidak bernyawa']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.news-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('newsdetail')).'','image' => ''.e(asset('images/slide-01.jpg')).'','title' => 'Remaja tewas di belakang gedung technopreneur','date' => '15 April 2025','desc' => 'seorang remaja ditemukan oleh pamdal dalam kondisi tidak bernyawa']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9825f3459428e0040ca758a949f77651)): ?>
<?php $attributes = $__attributesOriginal9825f3459428e0040ca758a949f77651; ?>
<?php unset($__attributesOriginal9825f3459428e0040ca758a949f77651); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9825f3459428e0040ca758a949f77651)): ?>
<?php $component = $__componentOriginal9825f3459428e0040ca758a949f77651; ?>
<?php unset($__componentOriginal9825f3459428e0040ca758a949f77651); ?>
<?php endif; ?>
          <?php if (isset($component)) { $__componentOriginal9825f3459428e0040ca758a949f77651 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9825f3459428e0040ca758a949f77651 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.news-card','data' => ['url' => ''.e(route('newsdetail')).'','image' => ''.e(asset('images/slide-01.jpg')).'','title' => 'Remaja tewas di belakang gedung technopreneur','date' => '15 April 2025','desc' => 'seorang remaja ditemukan oleh pamdal dalam kondisi tidak bernyawa']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.news-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('newsdetail')).'','image' => ''.e(asset('images/slide-01.jpg')).'','title' => 'Remaja tewas di belakang gedung technopreneur','date' => '15 April 2025','desc' => 'seorang remaja ditemukan oleh pamdal dalam kondisi tidak bernyawa']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9825f3459428e0040ca758a949f77651)): ?>
<?php $attributes = $__attributesOriginal9825f3459428e0040ca758a949f77651; ?>
<?php unset($__attributesOriginal9825f3459428e0040ca758a949f77651); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9825f3459428e0040ca758a949f77651)): ?>
<?php $component = $__componentOriginal9825f3459428e0040ca758a949f77651; ?>
<?php unset($__componentOriginal9825f3459428e0040ca758a949f77651); ?>
<?php endif; ?>
          <?php if (isset($component)) { $__componentOriginal9825f3459428e0040ca758a949f77651 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9825f3459428e0040ca758a949f77651 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.news-card','data' => ['url' => ''.e(route('newsdetail')).'','image' => ''.e(asset('images/slide-01.jpg')).'','title' => 'Remaja tewas di belakang gedung technopreneur','date' => '15 April 2025','desc' => 'seorang remaja ditemukan oleh pamdal dalam kondisi tidak bernyawa']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.news-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('newsdetail')).'','image' => ''.e(asset('images/slide-01.jpg')).'','title' => 'Remaja tewas di belakang gedung technopreneur','date' => '15 April 2025','desc' => 'seorang remaja ditemukan oleh pamdal dalam kondisi tidak bernyawa']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9825f3459428e0040ca758a949f77651)): ?>
<?php $attributes = $__attributesOriginal9825f3459428e0040ca758a949f77651; ?>
<?php unset($__attributesOriginal9825f3459428e0040ca758a949f77651); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9825f3459428e0040ca758a949f77651)): ?>
<?php $component = $__componentOriginal9825f3459428e0040ca758a949f77651; ?>
<?php unset($__componentOriginal9825f3459428e0040ca758a949f77651); ?>
<?php endif; ?>
          </div>
            <?php if (isset($component)) { $__componentOriginaldf6f555bdaf90c81aa4474664cc9ac77 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf6f555bdaf90c81aa4474664cc9ac77 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.explore-button','data' => ['url' => ''.e(route('newspage')).'','name' => 'Explore All News']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.explore-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('newspage')).'','name' => 'Explore All News']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldf6f555bdaf90c81aa4474664cc9ac77)): ?>
<?php $attributes = $__attributesOriginaldf6f555bdaf90c81aa4474664cc9ac77; ?>
<?php unset($__attributesOriginaldf6f555bdaf90c81aa4474664cc9ac77); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf6f555bdaf90c81aa4474664cc9ac77)): ?>
<?php $component = $__componentOriginaldf6f555bdaf90c81aa4474664cc9ac77; ?>
<?php unset($__componentOriginaldf6f555bdaf90c81aa4474664cc9ac77); ?>
<?php endif; ?>
    </div>
  </section>

  <section class="partners" id="partners">
    <div class="container">
      <div class="row carousel" id="carousel">
        <div class="carousel-items">
          <?php if (isset($component)) { $__componentOriginal73f3f38335b073ede684be0de998026f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73f3f38335b073ede684be0de998026f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.partner','data' => ['logo' => ''.e(asset('images/client-01.png')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.partner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['logo' => ''.e(asset('images/client-01.png')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $attributes = $__attributesOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__attributesOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $component = $__componentOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__componentOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
          <?php if (isset($component)) { $__componentOriginal73f3f38335b073ede684be0de998026f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73f3f38335b073ede684be0de998026f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.partner','data' => ['logo' => ''.e(asset('images/client-01.png')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.partner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['logo' => ''.e(asset('images/client-01.png')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $attributes = $__attributesOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__attributesOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $component = $__componentOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__componentOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
          <?php if (isset($component)) { $__componentOriginal73f3f38335b073ede684be0de998026f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73f3f38335b073ede684be0de998026f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.partner','data' => ['logo' => ''.e(asset('images/client-01.png')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.partner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['logo' => ''.e(asset('images/client-01.png')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $attributes = $__attributesOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__attributesOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $component = $__componentOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__componentOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
          <?php if (isset($component)) { $__componentOriginal73f3f38335b073ede684be0de998026f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73f3f38335b073ede684be0de998026f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.partner','data' => ['logo' => ''.e(asset('images/client-01.png')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.partner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['logo' => ''.e(asset('images/client-01.png')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $attributes = $__attributesOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__attributesOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $component = $__componentOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__componentOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
          <?php if (isset($component)) { $__componentOriginal73f3f38335b073ede684be0de998026f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73f3f38335b073ede684be0de998026f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.partner','data' => ['logo' => ''.e(asset('images/client-01.png')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.partner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['logo' => ''.e(asset('images/client-01.png')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $attributes = $__attributesOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__attributesOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $component = $__componentOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__componentOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
          <?php if (isset($component)) { $__componentOriginal73f3f38335b073ede684be0de998026f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73f3f38335b073ede684be0de998026f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.partner','data' => ['logo' => ''.e(asset('images/client-01.png')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.partner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['logo' => ''.e(asset('images/client-01.png')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $attributes = $__attributesOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__attributesOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $component = $__componentOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__componentOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
          <?php if (isset($component)) { $__componentOriginal73f3f38335b073ede684be0de998026f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73f3f38335b073ede684be0de998026f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.partner','data' => ['logo' => ''.e(asset('images/client-01.png')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.partner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['logo' => ''.e(asset('images/client-01.png')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $attributes = $__attributesOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__attributesOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $component = $__componentOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__componentOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
          <?php if (isset($component)) { $__componentOriginal73f3f38335b073ede684be0de998026f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73f3f38335b073ede684be0de998026f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.partner','data' => ['logo' => ''.e(asset('images/client-01.png')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.partner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['logo' => ''.e(asset('images/client-01.png')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $attributes = $__attributesOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__attributesOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $component = $__componentOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__componentOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
          <?php if (isset($component)) { $__componentOriginal73f3f38335b073ede684be0de998026f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73f3f38335b073ede684be0de998026f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.partner','data' => ['logo' => ''.e(asset('images/client-01.png')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.partner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['logo' => ''.e(asset('images/client-01.png')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $attributes = $__attributesOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__attributesOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $component = $__componentOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__componentOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
          <?php if (isset($component)) { $__componentOriginal73f3f38335b073ede684be0de998026f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73f3f38335b073ede684be0de998026f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.partner','data' => ['logo' => ''.e(asset('images/client-01.png')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.partner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['logo' => ''.e(asset('images/client-01.png')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $attributes = $__attributesOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__attributesOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $component = $__componentOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__componentOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
          <?php if (isset($component)) { $__componentOriginal73f3f38335b073ede684be0de998026f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73f3f38335b073ede684be0de998026f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.partner','data' => ['logo' => ''.e(asset('images/client-01.png')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.partner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['logo' => ''.e(asset('images/client-01.png')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $attributes = $__attributesOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__attributesOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $component = $__componentOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__componentOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
          <?php if (isset($component)) { $__componentOriginal73f3f38335b073ede684be0de998026f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73f3f38335b073ede684be0de998026f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.partner','data' => ['logo' => ''.e(asset('images/client-01.png')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.partner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['logo' => ''.e(asset('images/client-01.png')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $attributes = $__attributesOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__attributesOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $component = $__componentOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__componentOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
          <?php if (isset($component)) { $__componentOriginal73f3f38335b073ede684be0de998026f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73f3f38335b073ede684be0de998026f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.partner','data' => ['logo' => ''.e(asset('images/client-01.png')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.partner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['logo' => ''.e(asset('images/client-01.png')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $attributes = $__attributesOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__attributesOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $component = $__componentOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__componentOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
          <?php if (isset($component)) { $__componentOriginal73f3f38335b073ede684be0de998026f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73f3f38335b073ede684be0de998026f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.partner','data' => ['logo' => ''.e(asset('images/client-01.png')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.partner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['logo' => ''.e(asset('images/client-01.png')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $attributes = $__attributesOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__attributesOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $component = $__componentOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__componentOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
          <?php if (isset($component)) { $__componentOriginal73f3f38335b073ede684be0de998026f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73f3f38335b073ede684be0de998026f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.partner','data' => ['logo' => ''.e(asset('images/client-01.png')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.partner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['logo' => ''.e(asset('images/client-01.png')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $attributes = $__attributesOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__attributesOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73f3f38335b073ede684be0de998026f)): ?>
<?php $component = $__componentOriginal73f3f38335b073ede684be0de998026f; ?>
<?php unset($__componentOriginal73f3f38335b073ede684be0de998026f); ?>
<?php endif; ?>
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
        
        <?php if (isset($component)) { $__componentOriginalf991a92145a17eaa748db6eb4c6cadf5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf991a92145a17eaa748db6eb4c6cadf5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.event-card','data' => ['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-01.jpg')).'','name' => 'Tech Conference','title' => 'Webinar Digital Marketing','date' => '25 Agustus 2024','desc' => 'Pelajari strategi pemasaran digital terkini','added' => 'Ditambahkan 3 hari lalu']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.event-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-01.jpg')).'','name' => 'Tech Conference','title' => 'Webinar Digital Marketing','date' => '25 Agustus 2024','desc' => 'Pelajari strategi pemasaran digital terkini','added' => 'Ditambahkan 3 hari lalu']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf991a92145a17eaa748db6eb4c6cadf5)): ?>
<?php $attributes = $__attributesOriginalf991a92145a17eaa748db6eb4c6cadf5; ?>
<?php unset($__attributesOriginalf991a92145a17eaa748db6eb4c6cadf5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf991a92145a17eaa748db6eb4c6cadf5)): ?>
<?php $component = $__componentOriginalf991a92145a17eaa748db6eb4c6cadf5; ?>
<?php unset($__componentOriginalf991a92145a17eaa748db6eb4c6cadf5); ?>
<?php endif; ?>

        
        <?php if (isset($component)) { $__componentOriginalf991a92145a17eaa748db6eb4c6cadf5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf991a92145a17eaa748db6eb4c6cadf5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.event-card','data' => ['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-01.jpg')).'','name' => 'Tech Conference','title' => 'Workshop UI/UX Design','date' => '1 September 2024','desc' => 'Mastering Figma untuk desain profesional','added' => 'Ditambahkan 1 minggu lalu']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.event-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-01.jpg')).'','name' => 'Tech Conference','title' => 'Workshop UI/UX Design','date' => '1 September 2024','desc' => 'Mastering Figma untuk desain profesional','added' => 'Ditambahkan 1 minggu lalu']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf991a92145a17eaa748db6eb4c6cadf5)): ?>
<?php $attributes = $__attributesOriginalf991a92145a17eaa748db6eb4c6cadf5; ?>
<?php unset($__attributesOriginalf991a92145a17eaa748db6eb4c6cadf5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf991a92145a17eaa748db6eb4c6cadf5)): ?>
<?php $component = $__componentOriginalf991a92145a17eaa748db6eb4c6cadf5; ?>
<?php unset($__componentOriginalf991a92145a17eaa748db6eb4c6cadf5); ?>
<?php endif; ?>
        
        <?php if (isset($component)) { $__componentOriginalf991a92145a17eaa748db6eb4c6cadf5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf991a92145a17eaa748db6eb4c6cadf5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.event-card','data' => ['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-01.jpg')).'','name' => 'Tech Conference','title' => 'Workshop UI/UX Design','date' => '1 September 2024','desc' => 'Mastering Figma untuk desain profesional','added' => 'Ditambahkan 1 minggu lalu']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.event-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-01.jpg')).'','name' => 'Tech Conference','title' => 'Workshop UI/UX Design','date' => '1 September 2024','desc' => 'Mastering Figma untuk desain profesional','added' => 'Ditambahkan 1 minggu lalu']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf991a92145a17eaa748db6eb4c6cadf5)): ?>
<?php $attributes = $__attributesOriginalf991a92145a17eaa748db6eb4c6cadf5; ?>
<?php unset($__attributesOriginalf991a92145a17eaa748db6eb4c6cadf5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf991a92145a17eaa748db6eb4c6cadf5)): ?>
<?php $component = $__componentOriginalf991a92145a17eaa748db6eb4c6cadf5; ?>
<?php unset($__componentOriginalf991a92145a17eaa748db6eb4c6cadf5); ?>
<?php endif; ?>
    </div>
    <?php if (isset($component)) { $__componentOriginaldf6f555bdaf90c81aa4474664cc9ac77 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf6f555bdaf90c81aa4474664cc9ac77 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.explore-button','data' => ['url' => ''.e(route('eventpage')).'','name' => 'Explore all events']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.explore-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('eventpage')).'','name' => 'Explore all events']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldf6f555bdaf90c81aa4474664cc9ac77)): ?>
<?php $attributes = $__attributesOriginaldf6f555bdaf90c81aa4474664cc9ac77; ?>
<?php unset($__attributesOriginaldf6f555bdaf90c81aa4474664cc9ac77); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf6f555bdaf90c81aa4474664cc9ac77)): ?>
<?php $component = $__componentOriginaldf6f555bdaf90c81aa4474664cc9ac77; ?>
<?php unset($__componentOriginaldf6f555bdaf90c81aa4474664cc9ac77); ?>
<?php endif; ?>
</div>

  <section class="coe-section" id="coe">
    <h2>CENTER OF EXCELLENT</h2>
    <div class="container-coe">
      <?php if (isset($component)) { $__componentOriginal069dccc33fb03e003b31c2d0c6533b58 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal069dccc33fb03e003b31c2d0c6533b58 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.card-coe','data' => ['title' => 'COX BIZHUB','desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum porro aperiam explicabo odio laudantium mollitia accusantium, aliquid veritatis ullam atque enim quidem nisi, laborum illum qui numquam repellendus omnis unde.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.card-coe'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'COX BIZHUB','desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum porro aperiam explicabo odio laudantium mollitia accusantium, aliquid veritatis ullam atque enim quidem nisi, laborum illum qui numquam repellendus omnis unde.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal069dccc33fb03e003b31c2d0c6533b58)): ?>
<?php $attributes = $__attributesOriginal069dccc33fb03e003b31c2d0c6533b58; ?>
<?php unset($__attributesOriginal069dccc33fb03e003b31c2d0c6533b58); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal069dccc33fb03e003b31c2d0c6533b58)): ?>
<?php $component = $__componentOriginal069dccc33fb03e003b31c2d0c6533b58; ?>
<?php unset($__componentOriginal069dccc33fb03e003b31c2d0c6533b58); ?>
<?php endif; ?>
      <?php if (isset($component)) { $__componentOriginal069dccc33fb03e003b31c2d0c6533b58 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal069dccc33fb03e003b31c2d0c6533b58 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.card-coe','data' => ['title' => 'COX BIZHUB','desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum porro aperiam explicabo odio laudantium mollitia accusantium, aliquid veritatis ullam atque enim quidem nisi, laborum illum qui numquam repellendus omnis unde.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.card-coe'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'COX BIZHUB','desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum porro aperiam explicabo odio laudantium mollitia accusantium, aliquid veritatis ullam atque enim quidem nisi, laborum illum qui numquam repellendus omnis unde.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal069dccc33fb03e003b31c2d0c6533b58)): ?>
<?php $attributes = $__attributesOriginal069dccc33fb03e003b31c2d0c6533b58; ?>
<?php unset($__attributesOriginal069dccc33fb03e003b31c2d0c6533b58); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal069dccc33fb03e003b31c2d0c6533b58)): ?>
<?php $component = $__componentOriginal069dccc33fb03e003b31c2d0c6533b58; ?>
<?php unset($__componentOriginal069dccc33fb03e003b31c2d0c6533b58); ?>
<?php endif; ?>
      <?php if (isset($component)) { $__componentOriginal069dccc33fb03e003b31c2d0c6533b58 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal069dccc33fb03e003b31c2d0c6533b58 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.card-coe','data' => ['title' => 'COX BIZHUB','desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum porro aperiam explicabo odio laudantium mollitia accusantium, aliquid veritatis ullam atque enim quidem nisi, laborum illum qui numquam repellendus omnis unde.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.card-coe'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'COX BIZHUB','desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum porro aperiam explicabo odio laudantium mollitia accusantium, aliquid veritatis ullam atque enim quidem nisi, laborum illum qui numquam repellendus omnis unde.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal069dccc33fb03e003b31c2d0c6533b58)): ?>
<?php $attributes = $__attributesOriginal069dccc33fb03e003b31c2d0c6533b58; ?>
<?php unset($__attributesOriginal069dccc33fb03e003b31c2d0c6533b58); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal069dccc33fb03e003b31c2d0c6533b58)): ?>
<?php $component = $__componentOriginal069dccc33fb03e003b31c2d0c6533b58; ?>
<?php unset($__componentOriginal069dccc33fb03e003b31c2d0c6533b58); ?>
<?php endif; ?>
      <?php if (isset($component)) { $__componentOriginal069dccc33fb03e003b31c2d0c6533b58 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal069dccc33fb03e003b31c2d0c6533b58 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.card-coe','data' => ['title' => 'COX BIZHUB','desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum porro aperiam explicabo odio laudantium mollitia accusantium, aliquid veritatis ullam atque enim quidem nisi, laborum illum qui numquam repellendus omnis unde.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.card-coe'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'COX BIZHUB','desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum porro aperiam explicabo odio laudantium mollitia accusantium, aliquid veritatis ullam atque enim quidem nisi, laborum illum qui numquam repellendus omnis unde.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal069dccc33fb03e003b31c2d0c6533b58)): ?>
<?php $attributes = $__attributesOriginal069dccc33fb03e003b31c2d0c6533b58; ?>
<?php unset($__attributesOriginal069dccc33fb03e003b31c2d0c6533b58); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal069dccc33fb03e003b31c2d0c6533b58)): ?>
<?php $component = $__componentOriginal069dccc33fb03e003b31c2d0c6533b58; ?>
<?php unset($__componentOriginal069dccc33fb03e003b31c2d0c6533b58); ?>
<?php endif; ?>
      <?php if (isset($component)) { $__componentOriginal069dccc33fb03e003b31c2d0c6533b58 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal069dccc33fb03e003b31c2d0c6533b58 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.card-coe','data' => ['title' => 'COX BIZHUB','desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum porro aperiam explicabo odio laudantium mollitia accusantium, aliquid veritatis ullam atque enim quidem nisi, laborum illum qui numquam repellendus omnis unde.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.card-coe'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'COX BIZHUB','desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum porro aperiam explicabo odio laudantium mollitia accusantium, aliquid veritatis ullam atque enim quidem nisi, laborum illum qui numquam repellendus omnis unde.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal069dccc33fb03e003b31c2d0c6533b58)): ?>
<?php $attributes = $__attributesOriginal069dccc33fb03e003b31c2d0c6533b58; ?>
<?php unset($__attributesOriginal069dccc33fb03e003b31c2d0c6533b58); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal069dccc33fb03e003b31c2d0c6533b58)): ?>
<?php $component = $__componentOriginal069dccc33fb03e003b31c2d0c6533b58; ?>
<?php unset($__componentOriginal069dccc33fb03e003b31c2d0c6533b58); ?>
<?php endif; ?>
    </div>
  </section>

  <?php if (isset($component)) { $__componentOriginal3bcc21be352e90c327647659b100c2a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3bcc21be352e90c327647659b100c2a9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.footer','data' => ['gedung' => '| Gedung Mohammad Natsir Polibatam |','address' => 'Jl.Ahmad Yani, Batam, 29462','email' => 'tu-mb@polibatam.ac.id','no' => '+(62) 896 4354 9395']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['gedung' => '| Gedung Mohammad Natsir Polibatam |','address' => 'Jl.Ahmad Yani, Batam, 29462','email' => 'tu-mb@polibatam.ac.id','no' => '+(62) 896 4354 9395']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3bcc21be352e90c327647659b100c2a9)): ?>
<?php $attributes = $__attributesOriginal3bcc21be352e90c327647659b100c2a9; ?>
<?php unset($__attributesOriginal3bcc21be352e90c327647659b100c2a9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bcc21be352e90c327647659b100c2a9)): ?>
<?php $component = $__componentOriginal3bcc21be352e90c327647659b100c2a9; ?>
<?php unset($__componentOriginal3bcc21be352e90c327647659b100c2a9); ?>
<?php endif; ?>
  
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
</html><?php /**PATH C:\laragon\www\coe-fintech\resources\views/pages/homepage.blade.php ENDPATH**/ ?>