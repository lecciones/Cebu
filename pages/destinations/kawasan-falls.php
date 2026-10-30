<?php
$pageTitle = "Kawasan Falls | Smart Tourist Navigator";
$currentPage = "destinations";

include '../../includes/header.php';
?>

<main class="destination-detail-page">
    
    <link rel="stylesheet" href="/Cebu/assets/css/destination-detail.css">

    <!-- HERO SECTION (Reduced Height) -->
    <!-- Added inline style to force a smaller height on this specific hero -->
    <section
        class="hero detail-hero"
        style="background-image: url('/Cebu/assets/images/kawasan.jpg'); min-height: 400px; padding-bottom: 50px;"
    >
        <div class="hero-overlay"></div>

        <div class="hero-content" style="padding-top: 40px;">
            <span class="hero-eyebrow">CEBU'S NATURAL WONDER</span>

            <h1>Kawasan Falls</h1>

            <p>
                Discover turquoise waters, lush tropical forests,
                and unforgettable adventures in Badian, Cebu.
            </p>
        </div>

        <div class="hero-caption">
            <span>Badian, Cebu, Philippines</span>
            <span>Discover Cebu's Natural Beauty</span>
        </div>

        <!-- ANIMATED DOUBLE WAVE -->
        <div class="hero-wave" aria-hidden="true">
            <svg class="wave-svg wave-back" viewBox="0 0 1440 120" preserveAspectRatio="none">
                <path d="M0,45 C180,105 360,0 540,48 S900,108 1080,48 S1260,0 1440,45 L1440,120 L0,120 Z"></path>
            </svg>
            <svg class="wave-svg wave-front" viewBox="0 0 1440 120" preserveAspectRatio="none">
                <path d="M0,78 C180,10 360,115 540,75 S900,10 1080,75 S1260,115 1440,78 L1440,120 L0,120 Z"></path>
            </svg>
        </div>
    </section>

    <!-- QUICK STATISTICS -->
    <section class="quick-stats-bar">

        <div class="stat-item">
            <span class="stat-label">LOCATION</span>
            <span class="stat-value">Badian, Cebu</span>
            <span class="stat-desc">Southern Cebu</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">HIGHLIGHT</span>
            <span class="stat-value">Waterfalls</span>
            <span class="stat-desc">Natural scenery</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">EXPERIENCE</span>
            <span class="stat-value">Canyoneering</span>
            <span class="stat-desc">Guided adventure</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">TRAVEL STYLE</span>
            <span class="stat-value">Nature Trip</span>
            <span class="stat-desc">Outdoor exploration</span>
        </div>

    </section>

    <!-- MAIN CONTENT AND SIDEBAR -->
    <div class="destination-layout">

        <article class="main-content">

            <!-- INTRODUCTION AND MAP -->
            <section id="destination-overview">

                <h2 class="section-title">
                    Discover Kawasan Falls
                </h2>

                <div class="intro-section">

                    <div class="intro-text-content">

                        <p>
                            Kawasan Falls is one of Cebu's best-known
                            natural attractions. It is famous for its
                            blue-green water, cascading waterfalls,
                            and tropical forest surroundings.
                        </p>

                        <p>
                            Located in Badian, southern Cebu, it offers
                            visitors a chance to appreciate nature,
                            take photographs, and explore available
                            guided outdoor activities.
                        </p>

                        <p>
                            Whether you are traveling with friends or
                            exploring Cebu on your own, Kawasan Falls
                            can be a memorable stop on your itinerary.
                            Check local access rules and conditions
                            before planning your visit.
                        </p>

                    </div>

                    <div class="intro-map-wrapper">

                        <iframe
                            class="location-map"
                            title="Kawasan Falls location map"
                            src="https://www.openstreetmap.org/export/embed.html?bbox=123.365%2C9.790%2C123.405%2C9.825&layer=mapnik&marker=9.807%2C123.375"
                            loading="lazy"
                            style="border: 0;"
                        ></iframe>

                        <div class="map-caption">

                            <strong>Kawasan Falls</strong>

                            <p>Badian, Cebu, Philippines</p>

                            <a
                                class="text-link"
                                href="https://www.google.com/maps/search/?api=1&query=Kawasan+Falls+Badian+Cebu"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                Open Google Maps ↗
                            </a>

                        </div>

                    </div>

                </div>

            </section>

            <!-- PHOTO GALLERY -->
            <section id="destination-gallery-section">

                <h2 class="section-title">
                    Explore the Scenery
                </h2>

                <p>
                    Discover the waterfalls, turquoise water, and
                    lush tropical surroundings of this popular
                    southern Cebu destination.
                </p>

                <div class="destination-gallery">

                    <figure>
                        <img
                            src="/Cebu/assets/images/kawasan.jpg"
                            alt="Kawasan Falls surrounded by tropical greenery"
                            loading="lazy"
                        >
                        <figcaption>Kawasan Falls</figcaption>
                    </figure>

                    <figure>
                        <img
                            src="/Cebu/assets/images/kawasan-turquoise-water.jpg"
                            alt="Turquoise water at Kawasan Falls"
                            loading="lazy"
                        >
                        <figcaption>Turquoise Water</figcaption>
                    </figure>

                    <figure>
                        <img
                            src="/Cebu/assets/images/kawasan-canyoneering.jpg"
                            alt="Guided canyoneering adventure"
                            loading="lazy"
                        >
                        <figcaption>Canyoneering Adventure</figcaption>
                    </figure>

                    <figure>
                        <img
                            src="/Cebu/assets/images/kawasan-river.jpg"
                            alt="Tropical river surrounded by vegetation"
                            loading="lazy"
                        >
                        <figcaption>Tropical River Scenery</figcaption>
                    </figure>

                </div>

            </section>

            <!-- LOCAL TRAVEL TIP -->
            <div class="local-tip-alert">

                <span class="tip-icon">💡</span>

                <div>
                    <strong>LOCAL TRAVEL TIP</strong>

                    <p>
                        Visit early when possible, wear suitable footwear,
                        and follow local safety instructions. For
                        canyoneering, use an authorized guide and
                        appropriate safety equipment.
                    </p>
                </div>

            </div>

            <!-- TRANSPORTATION GUIDE -->
            <section id="transport-guide">

                <h2 class="section-title">
                    How to Get There
                </h2>

                <p>
                    Kawasan Falls is located in Badian, southern Cebu.
                    Your journey will depend on your starting point,
                    traffic, road conditions, and transportation choice.
                </p>

                <div class="transport-option">

                    <div class="option-header">
                        <span class="option-icon bus">🚌</span>

                        <div class="option-title-group">
                            <h3>Bus from Cebu City</h3>

                            <span class="time-badge">
                                Check current schedules
                            </span>
                        </div>
                    </div>

                    <p>
                        Travel to Cebu City's South Bus Terminal and
                        confirm which bus route serves Badian. Ask the
                        operator where to get off for Kawasan Falls
                        before boarding.
                    </p>

                </div>

                <div class="transport-option">

                    <div class="option-header">
                        <span class="option-icon">🚗</span>

                        <div class="option-title-group">
                            <h3>Private Vehicle</h3>
                        </div>
                    </div>

                    <p>
                        Drive toward Badian using a navigation app.
                        Check road conditions, parking arrangements,
                        and the route before leaving.
                    </p>

                </div>

                <div class="transport-option">

                    <div class="option-header">
                        <span class="option-icon">🛵</span>

                        <div class="option-title-group">
                            <h3>From Moalboal</h3>
                        </div>
                    </div>

                    <p>
                        Arrange local transportation or a tour from
                        Moalboal. Confirm the fare, pickup location,
                        and return journey in advance.
                    </p>

                </div>

                <div class="transport-option">

                    <div class="option-header">
                        <span class="option-icon">📍</span>

                        <div class="option-title-group">
                            <h3>Find the Location</h3>
                        </div>
                    </div>

                    <p>
                        <a
                            class="text-link"
                            href="https://www.google.com/maps/search/?api=1&query=Kawasan+Falls+Badian+Cebu"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            Find Kawasan Falls on Google Maps ↗
                        </a>
                    </p>

                </div>

            </section>

            <!-- THINGS TO DO -->
            <section id="things-to-do">

                <h2 class="section-title">
                    Things to Do
                </h2>

                <div class="expect-grid">

                    <div class="expect-card">
                        <h3>📸 Enjoy the Scenery</h3>
                        <p>
                            Admire the waterfalls and take photos while
                            respecting local rules and other visitors.
                        </p>
                    </div>

                    <div class="expect-card">
                        <h3>🛶 Try Canyoneering</h3>
                        <p>
                            Join a guided adventure if available.
                            Follow the safety briefing and use
                            the required equipment.
                        </p>
                    </div>

                    <div class="expect-card">
                        <h3>🌿 Explore Nature</h3>
                        <p>
                            Enjoy the tropical surroundings and stay
                            on permitted paths.
                        </p>
                    </div>

                    <div class="expect-card">
                        <h3>👥 Travel with Friends</h3>
                        <p>
                            Plan a group trip and allow enough time
                            for transportation and rest.
                        </p>
                    </div>

                </div>

            </section>

            <!-- TRAVEL TIPS -->
            <section id="travel-tips">

                <h2 class="section-title">
                    Travel Tips
                </h2>

                <ul class="editorial-list">

                    <li>
                        <strong>Wear suitable footwear.</strong>
                        Choose footwear appropriate for wet and
                        slippery surfaces.
                    </li>

                    <li>
                        <strong>Bring essentials.</strong>
                        Carry drinking water and a change of clothes.
                    </li>

                    <li>
                        <strong>Protect your belongings.</strong>
                        Keep your phone and valuables protected from water.
                    </li>

                    <li>
                        <strong>Check local conditions.</strong>
                        Weather, access rules, and activity availability
                        can change.
                    </li>

                    <li>
                        <strong>Follow safety instructions.</strong>
                        Use qualified guides for canyoneering and
                        avoid unsafe jumps.
                    </li>

                    <li>
                        <strong>Protect the environment.</strong>
                        Take your rubbish with you and respect nature.
                    </li>

                </ul>

            </section>

            <!-- FREQUENTLY ASKED QUESTIONS -->
            <section id="faq">

                <h2 class="section-title">
                    Frequently Asked Questions
                </h2>

                <div class="faq-container">

                    <details class="faq-item">
                        <summary>Where is Kawasan Falls?</summary>

                        <div class="faq-answer">
                            Kawasan Falls is located in Badian,
                            southern Cebu, Philippines.
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>Can beginners try canyoneering?</summary>

                        <div class="faq-answer">
                            Some guided trips may accommodate beginners.
                            Tell your guide about your experience and
                            swimming ability, and follow all safety rules.
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>What should I bring?</summary>

                        <div class="faq-answer">
                            Bring suitable footwear, drinking water,
                            a change of clothes, sun protection, and
                            a waterproof bag where appropriate.
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>Do I need to check fees before visiting?</summary>

                        <div class="faq-answer">
                            Yes. Confirm current entrance fees, access
                            arrangements, operating hours, and activity
                            availability with local tourism authorities
                            or authorized operators.
                        </div>
                    </details>

                </div>

            </section>

            <!-- RELATED DESTINATIONS -->
            <section id="related-guides">

                <h2 class="section-title">
                    Explore More Destinations
                </h2>

                <div class="route-guide-grid">

                    <a class="route-guide-link" href="moalboal.php">
                        Moalboal
                    </a>

                    <a class="route-guide-link" href="bantayan-island.php">
                        Bantayan Island
                    </a>

                    <a class="route-guide-link" href="oslob.php">
                        Oslob
                    </a>

                    <a class="route-guide-link" href="../../index.php">
                        Back to Home
                    </a>

                </div>

            </section>

        </article>

        <!-- SIDEBAR -->
        <aside class="sidebar">

            <div class="sidebar-card quote-card">

                <span class="sidebar-pill">
                    PLAN YOUR VISIT
                </span>

                <h3>Discover Kawasan Falls</h3>

                <p>
                    Prepare for your trip by checking transportation,
                    weather conditions, and local activity requirements.
                </p>

                <a
                    class="button button-blue"
                    href="https://www.google.com/maps/search/?api=1&query=Kawasan+Falls+Badian+Cebu"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    View Location ↗
                </a>

                <a class="button button-outline" href="#travel-tips">
                    Read Travel Tips
                </a>

                <p class="small-note">
                    Confirm current local arrangements before traveling.
                </p>

            </div>

            <div class="sidebar-card related-guides">

                <h4>RELATED DESTINATIONS</h4>

                <div class="sidebar-routes">

                    <a class="sidebar-link" href="moalboal.php">
                        Explore Moalboal →
                    </a>

                    <a class="sidebar-link" href="bantayan-island.php">
                        Explore Bantayan Island →
                    </a>

                    <a class="sidebar-link" href="oslob.php">
                        Explore Oslob →
                    </a>

                </div>

            </div>

        </aside>

    </div>

</main>

<?php include '../../includes/footer.php'; ?>