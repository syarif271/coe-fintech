<link rel="stylesheet" href="<?php echo e(asset('style/css/components/partials/footer-style.css')); ?>">
<footer>
    <div class="container" id="contact">
      <div class="content">
        <div class="items col-sm-3.5">
        <img src="<?php echo e(asset('images/polibatam-logo.png')); ?>" alt="" class="logo-polibatam">
          <h6>Info Contact</h6>
          <p><?php echo e($gedung); ?></p>
          <div class="lokasi">
            <i></i>
            <p><a href="https://maps.app.goo.gl/XG2gJyXTDdoSUEgVA
              "><?php echo e($address); ?></a></p>
          </div>
          <div class="email">
            <p><a href=""><?php echo e($email); ?>/a></p>
          </div>
          <div class="nomorHp">
            <p><a href=""><?php echo e($no); ?></a></p>
          </div>
        </div>
      </div>
      <div class="social-media" style="margin-top: 0;">
        <div class="items">
            <div class="logo">
                <a href="" class="instagram"><img src="<?php echo e(asset('images/instagram.jpg')); ?>" alt=""></a>
            </div>
            <div class="logo">
                <a href="" class="tiktok"><img src="<?php echo e(asset('images/tiktok.png')); ?>" alt=""></a>
            </div>
            <div class="logo">
                <a href="" class="youtube"><img src="<?php echo e(asset('images/youtube.png')); ?>" alt=""></a>
            </div>
        </div>
      </div>
    </div>
  </footer><?php /**PATH C:\laragon\www\coe-fintech\resources\views/components/partials/footer.blade.php ENDPATH**/ ?>