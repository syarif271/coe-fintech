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
    <link rel="stylesheet" href="<?php echo e(asset('style/css/global/global-style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/css/global/reset-style.css')); ?>">
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

        <div class="events-grid">
            <!-- Event 1 -->
             <?php if (isset($component)) { $__componentOriginalf991a92145a17eaa748db6eb4c6cadf5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf991a92145a17eaa748db6eb4c6cadf5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.event-card','data' => ['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.event-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.event-card','data' => ['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.event-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.event-card','data' => ['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.event-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.event-card','data' => ['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.event-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.event-card','data' => ['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.event-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.event-card','data' => ['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.event-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.event-card','data' => ['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.event-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.event-card','data' => ['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.event-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.event-card','data' => ['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.event-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.event-card','data' => ['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cards.event-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('eventdetail')).'','image' => ''.e(asset('images/slide-02.jpg')).'','name' => 'Tech Conference','date' => '15 JUN','title' => 'Neon Futures','desc' => 'An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights.','added' => 'Added: 2 days ago']); ?>
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

</body>
</html><?php /**PATH C:\laragon\www\coe-fintech\resources\views/pages/events-page.blade.php ENDPATH**/ ?>