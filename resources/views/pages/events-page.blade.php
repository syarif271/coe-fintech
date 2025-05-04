<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Events | Event Horizons</title>
    <link href="{{ asset('style/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('style/css/news-style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/global/global-style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/global/reset-style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/animate.css') }}">
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
             <x-cards.event-card
                url="{{ route('eventdetail') }}"
                image="{{ asset('images/slide-02.jpg') }}"
                name="Tech Conference"
                date="15 JUN"
                title="Neon Futures"
                desc="An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights."
                added="Added: 2 days ago"
             />
             <x-cards.event-card
                url="{{ route('eventdetail') }}"
                image="{{ asset('images/slide-02.jpg') }}"
                name="Tech Conference"
                date="15 JUN"
                title="Neon Futures"
                desc="An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights."
                added="Added: 2 days ago"
             />
             <x-cards.event-card
                url="{{ route('eventdetail') }}"
                image="{{ asset('images/slide-02.jpg') }}"
                name="Tech Conference"
                date="15 JUN"
                title="Neon Futures"
                desc="An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights."
                added="Added: 2 days ago"
             />
             <x-cards.event-card
                url="{{ route('eventdetail') }}"
                image="{{ asset('images/slide-02.jpg') }}"
                name="Tech Conference"
                date="15 JUN"
                title="Neon Futures"
                desc="An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights."
                added="Added: 2 days ago"
             />
             <x-cards.event-card
                url="{{ route('eventdetail') }}"
                image="{{ asset('images/slide-02.jpg') }}"
                name="Tech Conference"
                date="15 JUN"
                title="Neon Futures"
                desc="An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights."
                added="Added: 2 days ago"
             />
             <x-cards.event-card
                url="{{ route('eventdetail') }}"
                image="{{ asset('images/slide-02.jpg') }}"
                name="Tech Conference"
                date="15 JUN"
                title="Neon Futures"
                desc="An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights."
                added="Added: 2 days ago"
             />
             <x-cards.event-card
                url="{{ route('eventdetail') }}"
                image="{{ asset('images/slide-02.jpg') }}"
                name="Tech Conference"
                date="15 JUN"
                title="Neon Futures"
                desc="An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights."
                added="Added: 2 days ago"
             />
             <x-cards.event-card
                url="{{ route('eventdetail') }}"
                image="{{ asset('images/slide-02.jpg') }}"
                name="Tech Conference"
                date="15 JUN"
                title="Neon Futures"
                desc="An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights."
                added="Added: 2 days ago"
             />
             <x-cards.event-card
                url="{{ route('eventdetail') }}"
                image="{{ asset('images/slide-02.jpg') }}"
                name="Tech Conference"
                date="15 JUN"
                title="Neon Futures"
                desc="An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights."
                added="Added: 2 days ago"
             />
             <x-cards.event-card
                url="{{ route('eventdetail') }}"
                image="{{ asset('images/slide-02.jpg') }}"
                name="Tech Conference"
                date="15 JUN"
                title="Neon Futures"
                desc="An immersive tech experience exploring the intersection of AI, design, and human interaction under neon lights."
                added="Added: 2 days ago"
             />
        </div>
        <x-button.pagination/>

        <x-partials.footer
        gedung="| Gedung Mohammad Natsir Polibatam |"
        address="Jl.Ahmad Yani, Batam, 29462"
        email="tu-mb@polibatam.ac.id"
        no="+(62) 896 4354 9395"
    />

</body>
</html>