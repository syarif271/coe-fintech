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
    <link rel="stylesheet" href="<?php echo e(asset('style/css/global/global-style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/css/global/reset-style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/css/global/responsive.css')); ?>">
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
  </div>

  <?php if (isset($component)) { $__componentOriginal406b6a4a1f98b3338dc30085e6b63602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal406b6a4a1f98b3338dc30085e6b63602 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button.pagination','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button.pagination'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal406b6a4a1f98b3338dc30085e6b63602)): ?>
<?php $attributes = $__attributesOriginal406b6a4a1f98b3338dc30085e6b63602; ?>
<?php unset($__attributesOriginal406b6a4a1f98b3338dc30085e6b63602); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal406b6a4a1f98b3338dc30085e6b63602)): ?>
<?php $component = $__componentOriginal406b6a4a1f98b3338dc30085e6b63602; ?>
<?php unset($__componentOriginal406b6a4a1f98b3338dc30085e6b63602); ?>
<?php endif; ?>

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
</html><?php /**PATH C:\laragon\www\coe-fintech\resources\views/pages/news-page.blade.php ENDPATH**/ ?>