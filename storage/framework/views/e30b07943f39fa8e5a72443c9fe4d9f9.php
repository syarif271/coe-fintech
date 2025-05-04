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
                      <p><?php echo e($about); ?></p>
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
                  <?php echo e($vision); ?>

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
                  <p><?php echo e($mission); ?></p>
                </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section><?php /**PATH C:\laragon\www\coe-fintech\resources\views/components/partials/about.blade.php ENDPATH**/ ?>