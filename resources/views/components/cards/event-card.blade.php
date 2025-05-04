<link rel="stylesheet" href="{{ asset('style/css/components/card/event-card.css') }}">
<div class="event-card">
    <a href="{{ $url }}">
        <div class="event-image">
            <img src="{{ $image }}" alt="{{ $name }}">
            <div class="event-date">{{ $date }}</div>
        </div>
        <div class="event-content">
            <h3 class="event-title">{{ $title }}</h3>
            <p class="event-description">{{ $desc }}</p>
            <div class="event-meta">
                <span>{{ $added }}</span>
                <span>↗</span>
            </div>
        </div>
    </a>
</div>