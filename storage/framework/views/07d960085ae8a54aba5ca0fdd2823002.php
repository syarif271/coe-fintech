<link rel="stylesheet" href="<?php echo e(asset('style/css/components/card/event-card.css')); ?>">
<div class="event-card">
    <a href="<?php echo e($url); ?>">
        <div class="event-image">
            <img src="<?php echo e($image); ?>" alt="<?php echo e($name); ?>">
            <div class="event-date"><?php echo e($date); ?></div>
        </div>
        <div class="event-content">
            <h3 class="event-title"><?php echo e($title); ?></h3>
            <p class="event-description"><?php echo e($desc); ?></p>
            <div class="event-meta">
                <span><?php echo e($added); ?></span>
                <span>↗</span>
            </div>
        </div>
    </a>
</div><?php /**PATH C:\laragon\www\coe-fintech\resources\views/components/cards/event-card.blade.php ENDPATH**/ ?>