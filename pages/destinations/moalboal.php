<?php
// pages/destinations/moalboal.php

$pageTitle = 'Moalboal Sardine Run | Smart Tourist Navigator';
$pageDescription = 'A complete guide to the Moalboal Sardine Run, sea turtles, and getting there from Cebu City.';

// Include shared header
include __DIR__ . '/../../includes/header.php';
?>

<!-- DESTINATION DETAIL CSS -->
<link rel="stylesheet" href="../../assets/css/destination-detail.css">

<main class="destination-detail-page">

    <!-- HERO SECTION (Reduced Height) -->
    <section
        class="hero detail-hero"
        style="background-image: url('../../assets/images/moalboal.jpg'); min-height: 400px; padding-bottom: 50px;"
    >
        <div class="hero-overlay"></div>

        <div class="hero-content" style="padding-top: 40px;">
            <span class="eyebrow hero-eyebrow">OCEAN & ADVENTURE</span>

            <h1>Moalboal<br><em>Sardine Run.</em></h1>

            <p>
                Experience millions of sardines and sea turtles just
                meters from the shore in this vibrant coastal town.
            </p>
        </div>

        <div class="hero-caption">
            <span>02 / DESTINATION GUIDE</span>
            <span>Moalboal, Cebu</span>
        </div>

        <!-- ANIMATED WAVE -->
        <div class="hero-wave" aria-hidden="true">
            <svg
                class="wave-svg wave-back"
                viewBox="0 0 2880 120"
                preserveAspectRatio="none"
            >
                <path d="M0 50 C240 0 480 100 720 50 S1200 0 1440 50 S1920 100 2160 50 S2640 0 2880 50 V120 H0 Z"></path>
            </svg>

            <svg
                class="wave-svg wave-front"
                viewBox="0 0 2880 120"
                preserveAspectRatio="none"
            >
                <path d="M0 65 C240 110 480 20 720 65 S1200 110 1440 65 S1920 20 2160 65 S2640 110 2880 65 V120 H0 Z"></path>
            </svg>
        </div>
    </section>


    <!-- QUICK STATS BAR -->
    <div class="quick-stats-bar">

        <div class="stat-item">
            <span class="stat-label">FROM CEBU CITY</span>
            <span class="stat-value">~90 km</span>
            <span class="stat-desc">
                2.5–3 hours by private car (more by bus)
            </span>
        </div>

        <div class="stat-item">
            <span class="stat-label">FROM MACTAN AIRPORT</span>
            <span class="stat-value">~100 km</span>
            <span class="stat-desc">
                3–3.5 hours, including the bridge off Mactan
            </span>
        </div>

        <div class="stat-item">
            <span class="stat-label">REGION</span>
            <span class="stat-value">South-west Cebu coast</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">BEST TIME</span>
            <span class="stat-value">See below</span>
            <span class="stat-desc">
                Year-round for the sardines; the driest, calmest
                months are roughly February to May.
            </span>
        </div>

    </div>


    <!-- MAIN TWO-COLUMN LAYOUT -->
    <div class="destination-layout">

        <!-- LEFT COLUMN: MAIN CONTENT -->
        <div class="main-content">

            <!-- BREADCRUMBS -->
            <div class="breadcrumbs">
                <a href="../../index.php">Home</a>
                &gt;
                <a href="../../index.php#explore">Destinations</a>
                &gt;
                Moalboal
            </div>


            <!-- INTRODUCTION AND MAP -->
            <div class="intro-section">

                <div class="intro-text-content">

                    <p>
                        Moalboal sits on Cebu's south-west coast, about
                        90 km from Cebu City. Its sardine run is one of
                        the Philippines' famous marine attractions.
                        You can snorkel near the shore without needing
                        a boat, and green sea turtles are often spotted
                        in the same coastal waters.
                    </p>

                    <p>
                        Most travellers visit for a day trip or an
                        overnight stay, combining the sardine run and
                        sea turtles with a Pescador Island boat tour.
                        Some travellers also visit Kawasan Falls for
                        canyoneering farther south.
                    </p>

                    <p>
                        The drive from Cebu City usually takes around
                        2.5–3 hours by private car. Public buses can
                        take longer because of traffic and stops along
                        the route.
                    </p>

                </div>

                <div class="intro-map-wrapper">

                    <img
                        src="../../assets/images/map-cebu-moalboal.png"
                        alt="Map of Cebu showing Moalboal"
                        class="location-map"
                        onerror="this.style.display='none'"
                    >

                    <div class="map-caption">
                        <strong>Moalboal</strong> on the south-west
                        coast of Cebu, relative to Cebu City.
                    </div>

                </div>

            </div>


            <!-- LOCAL TIP -->
            <div class="local-tip-alert">

                <span class="tip-icon">⭐</span>

                <div>
                    <strong>LOCAL TIP</strong>

                    <p>
                        Try snorkelling in the morning when visibility
                        and lighting may be favourable. Bring reef-safe
                        sunscreen, follow local marine guidelines, and
                        avoid touching or chasing the marine life.
                    </p>
                </div>

            </div>


            <!-- HOW TO GET THERE -->
            <h2 class="section-title">
                How to get to Moalboal from Cebu City and the airport
            </h2>

            <div class="transport-option highlighted">

                <div class="option-header">

                    <span class="option-icon check">✓</span>

                    <div class="option-title-group">
                        <h3>Private transfer</h3>
                        <span class="time-badge">~2.5–3 hrs</span>
                    </div>

                </div>

                <p>
                    Travel directly from your hotel or the airport
                    in a private, air-conditioned car or van.
                    Ask the provider for the current fare and confirm
                    whether stops and other fees are included.
                </p>

            </div>


            <div class="transport-option">

                <div class="option-header">

                    <span class="option-icon bus">🚌</span>

                    <div class="option-title-group">
                        <h3>Ceres bus</h3>
                        <span class="time-badge">~3–4 hrs or longer</span>
                    </div>

                </div>

                <p>
                    Go to Cebu South Bus Terminal and look for a
                    Ceres Liner bus travelling via Barili toward
                    the south-western part of Cebu. Confirm the
                    destination with the conductor before boarding.
                </p>

            </div>


            <div class="transport-option">

                <div class="option-header">

                    <span class="option-icon bus">🚐</span>

                    <div class="option-title-group">
                        <h3>Shared van</h3>
                        <span class="time-badge">Varies</span>
                    </div>

                </div>

                <p>
                    Shared vans may offer a quicker alternative to
                    the bus, depending on traffic, departure time,
                    passenger pickups, and luggage space. Confirm
                    the fare and drop-off location before travelling.
                </p>

            </div>


            <!-- WHAT TO EXPECT -->
            <h2 class="section-title">What to expect</h2>

            <div class="expect-grid">

                <div class="expect-card">
                    <h3>🐟 The Sardine Run</h3>

                    <p>
                        Watch large schools of sardines move together
                        in the water near Panagsama Beach. Follow
                        local snorkelling rules and avoid touching
                        the fish or coral.
                    </p>
                </div>

                <div class="expect-card">
                    <h3>🐢 Sea Turtles</h3>

                    <p>
                        Green sea turtles can sometimes be seen
                        feeding in seagrass areas. Observe them
                        from a respectful distance and never chase
                        or touch them.
                    </p>
                </div>

                <div class="expect-card">
                    <h3>🌊 Pescador Island</h3>

                    <p>
                        Join a local boat tour to explore the island's
                        marine environment, snorkelling spots, and
                        diving areas. Check sea conditions before
                        heading out.
                    </p>
                </div>

                <div class="expect-card">
                    <h3>🏖️ White Beach (Basdaku)</h3>

                    <p>
                        Visit this sandy beach for swimming, relaxing,
                        and enjoying the coastal scenery. Check current
                        entrance and parking fees before your visit.
                    </p>
                </div>

            </div>


            <!-- BEST TIME TO VISIT -->
            <div class="info-alert note">

                <span class="alert-icon">ℹ️</span>

                <div>
                    <p>
                        <strong>Best time to visit:</strong>
                        February to May is generally a drier period
                        in Cebu, although weather and sea conditions
                        can change. Check the forecast before travelling.
                    </p>
                </div>

            </div>


            <!-- SHARED DESTINATION PHOTO GALLERY -->
            <!-- Uses the same CSS classes as Bantayan Island -->
            <section class="destination-gallery-section">

                <h2 class="section-title">Discover Moalboal</h2>

                <p class="gallery-description">
                    Explore Moalboal's beautiful coastline, colourful
                    marine life, and unforgettable underwater scenery.
                </p>

                <div class="destination-gallery">

                    <figure>
                        <img
                            src="../../assets/images/moalboal-beach.jpg"
                            alt="Beach scenery in Moalboal, Cebu"
                            loading="lazy"
                        >
                        <figcaption>Beautiful Beaches</figcaption>
                    </figure>

                    <figure>
                        <img
                            src="../../assets/images/moalboal-sardines.jpg"
                            alt="School of sardines swimming underwater"
                            loading="lazy"
                        >
                        <figcaption>The Famous Sardine Run</figcaption>
                    </figure>

                    <figure>
                        <img
                            src="../../assets/images/moalboal-turtle.jpg"
                            alt="Sea turtle swimming in Moalboal"
                            loading="lazy"
                        >
                        <figcaption>Sea Turtle Encounters</figcaption>
                    </figure>

                    <figure>
                        <img
                            src="../../assets/images/moalboal-panagsama.jpg"
                            alt="Panagsama Beach in Moalboal"
                            loading="lazy"
                        >
                        <figcaption>Panagsama Beach</figcaption>
                    </figure>

                </div>

            </section>


            <!-- FAQ SECTION -->
            <h2 class="section-title">
                Moalboal: Frequently Asked Questions
            </h2>

            <div class="faq-container">

                <details class="faq-item">
                    <summary>
                        How long is the drive from Cebu City to Moalboal?
                    </summary>

                    <div class="faq-answer">
                        The journey usually takes around 2.5–3 hours
                        by private car, but traffic and road conditions
                        can make it longer. Public transport may take
                        additional time.
                    </div>
                </details>

                <details class="faq-item">
                    <summary>
                        Can I see the sardine run and turtles on a day trip?
                    </summary>

                    <div class="faq-answer">
                        Yes. A day trip is possible, but plan enough
                        time for travel, meals, snorkelling, and the
                        return journey. An early departure from
                        Cebu City is recommended.
                    </div>
                </details>

                <details class="faq-item">
                    <summary>
                        Do I need a boat to see the sardine run?
                    </summary>

                    <div class="faq-answer">
                        The sardine run is commonly viewed by
                        snorkelling near the shore at Panagsama Beach.
                        Follow local rules and ask local operators
                        about current conditions and applicable fees.
                    </div>
                </details>

                <details class="faq-item">
                    <summary>
                        What should I bring to Moalboal?
                    </summary>

                    <div class="faq-answer">
                        Bring swimwear, a towel, drinking water,
                        sun protection, a waterproof bag, and cash
                        for local transportation, food, and applicable
                        fees. Consider bringing your own snorkelling
                        gear if you have it.
                    </div>
                </details>

            </div>

        </div>


        <!-- RIGHT COLUMN: SIDEBAR -->
        <aside class="sidebar">

            <!-- PRIVATE TRIP CARD -->
            <div class="sidebar-card quote-card">

                <span class="sidebar-pill">
                    REQUEST A QUOTE
                </span>

                <h3>Plan your trip to Moalboal</h3>

                <p>
                    Planning a private trip? Prepare your pickup
                    location, travel dates, and group size before
                    requesting a quotation.
                </p>

                <a
                    href="../../index.php#trip-planner"
                    class="button button-blue"
                    style="width: 100%; margin-bottom: 10px; border-radius: 30px;"
                >
                    Plan My Trip →
                </a>

                <a
                    href="../../index.php#explore"
                    class="button button-outline"
                    style="width: 100%; border-radius: 30px;"
                >
                    Explore Destinations
                </a>

                <p class="small-note" style="margin-top: 15px;">
                    Remember to confirm transportation prices,
                    schedules, and fees before your trip.
                </p>

            </div>


            <!-- RELATED GUIDES -->
            <div class="sidebar-card related-guides">

                <h4>PLAN THE FULL TRIP</h4>

                <div class="sidebar-routes">

                    <a href="#expect-grid" class="sidebar-link">
                        → Discover Moalboal's attractions
                    </a>

                    <a href="#faq" class="sidebar-link">
                        → Frequently asked questions
                    </a>

                    <a href="../../index.php#explore" class="sidebar-link">
                        → Explore more Cebu destinations
                    </a>

                    <a href="../../index.php#trip-planner" class="sidebar-link">
                        → Plan your Cebu itinerary
                    </a>

                </div>

                <div style="text-align: center; margin-top: 15px;">
                    <a
                        href="../../index.php#explore"
                        class="text-link"
                        style="font-size: 13px;"
                    >
                        ← All Cebu destinations
                    </a>
                </div>

            </div>

        </aside>

    </div>

</main>

<?php
// Include shared footer
include __DIR__ . '/../../includes/footer.php';
?>