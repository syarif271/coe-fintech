<link rel="stylesheet" href="{{ asset('style/css/components/card/news-card.css') }}">

<div class="news-card" style="margin: 0px 10px;">
  <a href="{{$url}}">
      <div class="news-item" >
        <img src="{{$image}}" alt="Berita 1">
        <div class="news-content">
          <h3>{{$title}}</h3>
          <hr style="border: 0; height:1px; background: #000000; margin: 15px 0;">
          <p class="date">{{$date}}</p>
          <p class="description">{{$desc}}</p>
        </div>
      </div>
    </a>
 </div> 
  