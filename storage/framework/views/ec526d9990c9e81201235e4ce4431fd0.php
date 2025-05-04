<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo e(asset('style/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('style/css/style-news.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/css/owl.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/css/animate.css')); ?>">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <title>Document</title>
</head>
<body>
    <section class="all-news">
        <div class="container">
            <div class="content">
                <h4> Lorem ipsum, dolor sit amet consectetur adipisicing elit</h4>
                <img src="<?php echo e(asset('images/slide-03.jpg')); ?>" alt="">
                <div class="text">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, ea voluptatem dolore eveniet itaque amet repellat qui suscipit natus perspiciatis ipsum beatae excepturi nihil autem, inventore aliquam rem repudiandae incidunt?.  Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias sit voluptates ipsum nulla dolore, assumenda, nobis vitae rerum corrupti at expedita repellendus dolorum? Deserunt iure explicabo delectus quam corporis quo?</p>
                <br><br>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni eveniet, rem delectus, tenetur incidunt ex eos voluptatem facere, distinctio sit eaque voluptate iure suscipit molestiae aperiam beatae odio dolore! Expedita. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat ab eos suscipit sequi, animi ullam veritatis cumque veniam ad delectus mollitia eum molestias iste quo doloribus. Ad odit ratione atque!</p>
                <br><br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam explicabo iusto eum, laudantium, laboriosam facilis totam non a, dolorem labore dolorum in repellat dicta praesentium? Excepturi dolore quisquam vel expedita!</p>
                <br><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta voluptatem, placeat magnam in tempore nihil nemo quod. Quaerat similique quis distinctio accusantium incidunt nihil expedita aperiam, cupiditate natus, suscipit qui. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ullam provident quasi odio sunt itaque, unde consequuntur est ad numquam, laboriosam eligendi possimus libero, quae omnis ab doloremque animi modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, consectetur hic? Eos aliquid nisi odit nesciunt rem, consectetur atque architecto quasi debitis odio molestiae ut blanditiis vel magni, repudiandae illum? lore</p>
                </div>
            </div>
        </div>
    </section>

    <?php if (isset($component)) { $__componentOriginal3bcc21be352e90c327647659b100c2a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3bcc21be352e90c327647659b100c2a9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.footer','data' => ['gedung' => '| Gedung Monas Polibatam |','address' => 'Jl. Ahmad Yani, Batam, 29462','email' => 'tu-mb@polibatam.ac.id','no' => '+(62) 896 4354 9395']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['gedung' => '| Gedung Monas Polibatam |','address' => 'Jl. Ahmad Yani, Batam, 29462','email' => 'tu-mb@polibatam.ac.id','no' => '+(62) 896 4354 9395']); ?>
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
</html><?php /**PATH C:\laragon\www\coe-fintech\resources\views/pages/events-detail.blade.php ENDPATH**/ ?>