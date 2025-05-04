<link rel="stylesheet" href="<?php echo e(asset('style/css/components/card/news-card.css')); ?>">

<div class="news-card" style="margin: 0px 10px;">
  <a href="<?php echo e($url); ?>">
      <div class="news-item" >
        <img src="<?php echo e($image); ?>" alt="Berita 1">
        <div class="news-content">
          <h3><?php echo e($title); ?></h3>
          <hr style="border: 0; height:1px; background: #000000; margin: 15px 0;">
          <p class="date"><?php echo e($date); ?></p>
          <p class="description"><?php echo e($desc); ?></p>
        </div>
      </div>
    </a>
 </div> 
  <?php /**PATH C:\laragon\www\coe-fintech\resources\views/components/cards/news-card.blade.php ENDPATH**/ ?>