<link rel="stylesheet" href="{{ asset('style/css/components/partials/footer-style.css') }}">
<footer>
    <div class="container" id="contact">
      <div class="content">
        <div class="items col-sm-3.5">
        <img src="{{ asset('images/polibatam-logo.png') }}" alt="" class="logo-polibatam">
          <h6>Info Contact</h6>
          <p>{{ $gedung }}</p>
          <div class="lokasi">
            <i></i>
            <p><a href="https://maps.app.goo.gl/XG2gJyXTDdoSUEgVA
              ">{{ $address }}</a></p>
          </div>
          <div class="email">
            <p><a href="">{{$email}}/a></p>
          </div>
          <div class="nomorHp">
            <p><a href="">{{$no}}</a></p>
          </div>
        </div>
      </div>
      <div class="social-media" style="margin-top: 0;">
        <div class="items">
            <div class="logo">
                <a href="" class="instagram"><img src="{{ asset('images/instagram.jpg') }}" alt=""></a>
            </div>
            <div class="logo">
                <a href="" class="tiktok"><img src="{{ asset('images/tiktok.png') }}" alt=""></a>
            </div>
            <div class="logo">
                <a href="" class="youtube"><img src="{{ asset('images/youtube.png') }}" alt=""></a>
            </div>
        </div>
      </div>
    </div>
  </footer>