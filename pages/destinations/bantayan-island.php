<?php
$pageTitle = 'Bantayan Island Travel Guide | Discover Cebu';
$pageDescription = 'Explore Bantayan Island, Cebu, with beach guides, ferry information, travel tips, things to do, and frequently asked questions.';

include __DIR__ . '/../../includes/header.php';
?>

<link rel="stylesheet" href="/Cebu/assets/css/destination-detail.css">

<main class="destination-detail-page">

    <!-- HERO SECTION (Reduced Height) -->
    <section
        class="hero detail-hero"
        style="background-image: url('../../assets/images/bantayan.jpg'); min-height: 400px; padding-bottom: 50px;"
    >
        <div class="hero-overlay"></div>

        <div class="hero-content" style="padding-top: 40px;">
            <span class="eyebrow hero-eyebrow">
                YOUR CEBU ISLAND GUIDE
            </span>

            <h1>Bantayan <em>Island</em></h1>

            <p>
                Discover white-sand beaches, crystal-clear waters,
                peaceful coastal villages, and unforgettable island
                adventures in northern Cebu.
            </p>
        </div>

        <div class="hero-caption">
            <span>📍 Northern Cebu, Philippines</span>
            <span>ISLAND ESCAPE · BEACHES · CULTURE</span>
        </div>

        <!-- ANIMATED WAVE: SAME HERO EFFECT AS MOALBOAL -->
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


    <!-- QUICK INFORMATION -->
    <section class="quick-stats-bar">

        <div class="stat-item">
            <span class="stat-label">DESTINATION</span>
            <span class="stat-value">Bantayan Island</span>
            <span class="stat-desc">Northern Cebu, Philippines</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">BEST FOR</span>
            <span class="stat-value">Beach Getaways</span>
            <span class="stat-desc">
                Swimming, sunsets, and island exploration
            </span>
        </div>

        <div class="stat-item">
            <span class="stat-label">HOW TO GET THERE</span>
            <span class="stat-value">Bus + Ferry</span>
            <span class="stat-desc">Travel via Hagnaya Port</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">RECOMMENDED STAY</span>
            <span class="stat-value">2–3 Days</span>
            <span class="stat-desc">
                Allow time to explore the island
            </span>
        </div>

    </section>


    <!-- MAIN CONTENT LAYOUT -->
    <div class="destination-layout">

        <!-- MAIN CONTENT COLUMN -->
        <article class="main-content">

            <!-- BREADCRUMBS -->
            <nav class="breadcrumbs" aria-label="Breadcrumb">
                <a href="/Cebu/index.php">Home</a>
                &gt;
                <a href="/Cebu/index.php#explore">Destinations</a>
                &gt;
                <span>Bantayan Island</span>
            </nav>


            <!-- INTRODUCTION AND MAP -->
            <section class="intro-section">

                <div class="intro-text-content">

                    <p>
                        Bantayan Island is a popular island destination
                        in northern Cebu known for its beautiful
                        beaches, laid-back atmosphere, and coastal
                        scenery. It is a great option for travelers
                        looking for a relaxing escape from the busy city.
                    </p>

                    <p>
                        The island includes the municipalities of
                        Santa Fe, Bantayan, and Madridejos. Visitors
                        can enjoy beach activities, explore local
                        communities, try fresh seafood, and discover
                        historic landmarks.
                    </p>

                    <p>
                        Most travelers reach the island by taking a
                        bus or other land transport from Cebu City to
                        Hagnaya Port, followed by a ferry to Santa Fe.
                        Travel time depends on traffic, waiting time,
                        and ferry schedules.
                    </p>

                </div>

                <div class="intro-map-wrapper">

                    <iframe
                        class="location-map"
                        title="Map of Bantayan Island, Cebu"
                        src="https://www.openstreetmap.org/export/embed.html?bbox=123.65%2C11.05%2C124.05%2C11.35&layer=mapnik&marker=11.1667%2C123.7333"
                        width="100%"
                        height="230"
                        style="border: 0;"
                        loading="lazy"
                    ></iframe>

                    <div class="map-caption">

                        <strong>Bantayan Island, Cebu</strong>

                        <p>
                            Located northwest of mainland Cebu.
                            Plan your route before traveling.
                        </p>

                        <a
                            class="text-link"
                            href="https://www.google.com/maps/search/?api=1&query=Bantayan+Island+Cebu"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            Open in Google Maps ↗
                        </a>

                    </div>

                </div>

            </section>


            <!-- LOCAL TRAVEL TIP -->
            <div class="local-tip-alert">

                <div class="tip-icon">💡</div>

                <div>
                    <strong>LOCAL TRAVEL TIP</strong>

                    <p>
                        Check ferry schedules and weather conditions
                        before leaving for Hagnaya Port. During busy
                        holidays, arrive early and allow extra time
                        for queues and boarding.
                    </p>
                </div>

            </div>


            <!-- HOW TO GET THERE -->
            <section id="transport-guide">

                <h2 class="section-title">
                    How to Get to Bantayan Island from Cebu City
                </h2>

                <div class="transport-option highlighted">

                    <div class="option-header">

                        <span class="option-icon check">1</span>

                        <div class="option-title-group">
                            <h3>Bus to Hagnaya Port</h3>
                            <span class="time-badge">
                                Mainland journey
                            </span>
                        </div>

                    </div>

                    <p>
                        Travel to Cebu North Bus Terminal and look
                        for a bus bound for Hagnaya Port. Journey
                        time varies with traffic, stops, and the
                        bus service you choose.
                    </p>

                </div>


                <div class="transport-option">

                    <div class="option-header">

                        <span class="option-icon bus">2</span>

                        <div class="option-title-group">
                            <h3>Ferry to Santa Fe Port</h3>
                            <span class="time-badge">Sea crossing</span>
                        </div>

                    </div>

                    <p>
                        At Hagnaya Port, take a ferry serving the
                        Santa Fe route. Confirm the latest departure
                        times, fares, and passenger requirements
                        with the ferry operator.
                    </p>

                </div>


                <div class="transport-option">

                    <div class="option-header">

                        <span class="option-icon bus">3</span>

                        <div class="option-title-group">
                            <h3>Explore Bantayan Island</h3>
                            <span class="time-badge">Local transport</span>
                        </div>

                    </div>

                    <p>
                        Once you arrive, arrange local transportation
                        to your accommodation. Depending on your
                        destination, options may include tricycles,
                        motorcycles, or rented vehicles.
                    </p>

                </div>

            </section>


            <!-- SHARED DESTINATION PHOTO GALLERY -->
            <section class="destination-gallery-section">

                <h2 class="section-title">
                    Discover Bantayan Island
                </h2>

                <p class="gallery-description">
                    Explore Bantayan's beautiful beaches, clear
                    waters, coastal sunsets, and peaceful island life.
                </p>

                <div class="destination-gallery">

                    <figure>
                        <img
                            src="/Cebu/assets/images/bantayan-beach.jpg"
                            alt="White sand beach on Bantayan Island"
                            loading="lazy"
                        >
                        <figcaption>White-Sand Beaches</figcaption>
                    </figure>

                    <figure>
                        <img
                            src="/Cebu/assets/images/bantayan-sunset.jpg"
                            alt="Sunset along the coast of Bantayan Island"
                            loading="lazy"
                        >
                        <figcaption>Coastal Sunsets</figcaption>
                    </figure>

                    <figure>
                        <img
                            src="/Cebu/assets/images/bantayan-ocean.jpg"
                            alt="Clear ocean waters near Bantayan Island"
                            loading="lazy"
                        >
                        <figcaption>Clear Blue Waters</figcaption>
                    </figure>

                    <figure>
                        <img
                            src="/Cebu/assets/images/bantayan-town.jpg"
                            alt="Local community on Bantayan Island"
                            loading="lazy"
                        >
                        <figcaption>Local Island Life</figcaption>
                    </figure>

                </div>

            </section>


            <!-- WHAT TO EXPECT -->
            <section id="things-to-do">

                <h2 class="section-title">What to Expect</h2>

                <div class="expect-grid">

                    <div class="expect-card">
                        <h3>🏖️ Beautiful Beaches</h3>

                        <p>
                            Enjoy stretches of sand, relaxing coastal
                            views, and swimming opportunities.
                            Follow local safety guidance and check
                            sea conditions before entering the water.
                        </p>
                    </div>

                    <div class="expect-card">
                        <h3>🌅 Relaxing Island Atmosphere</h3>

                        <p>
                            Expect a slower pace of life, coastal
                            scenery, and peaceful places to unwind
                            away from the busier parts of Cebu.
                        </p>
                    </div>

                    <div class="expect-card">
                        <h3>🍤 Local Food</h3>

                        <p>
                            Try seafood and Filipino dishes at local
                            eateries. Ask about prices before ordering
                            and look for restaurants that suit your
                            budget.
                        </p>
                    </div>

                    <div class="expect-card">
                        <h3>🛵 Island Exploration</h3>

                        <p>
                            Visit different coastal areas and local
                            attractions. Plan your stops ahead of time
                            and confirm transportation availability
                            for your chosen route.
                        </p>
                    </div>

                </div>

                <div class="info-alert note">

                    <div class="alert-icon">ℹ️</div>

                    <p>
                        Weather, sea conditions, transport schedules,
                        and attraction access can change. Check local
                        updates before your trip and follow posted
                        safety instructions.
                    </p>

                </div>

            </section>


            <!-- PLACES TO VISIT -->
            <section id="places-to-visit">

                <h2 class="section-title">
                    Places to Visit in Bantayan Island
                </h2>

                <div class="transport-option">

                    <div class="option-header">

                        <span class="option-icon check">🏖️</span>

                        <div class="option-title-group">
                            <h3>Santa Fe Beaches</h3>
                        </div>

                    </div>

                    <p>
                        Explore the beaches around Santa Fe, a popular
                        base for visitors. Enjoy the shoreline, take
                        photographs, and relax by the sea.
                    </p>

                </div>


                <div class="transport-option">

                    <div class="option-header">

                        <span class="option-icon bus">⛪</span>

                        <div class="option-title-group">
                            <h3>Saints Peter and Paul Church</h3>
                        </div>

                    </div>

                    <p>
                        Visit this historic church in Bantayan town
                        and learn about the island's religious and
                        cultural heritage. Be respectful during
                        services and other religious activities.
                    </p>

                </div>


                <div class="transport-option">

                    <div class="option-header">

                        <span class="option-icon bus">🌊</span>

                        <div class="option-title-group">
                            <h3>Madridejos Coastal Areas</h3>
                        </div>

                    </div>

                    <p>
                        Explore the northern part of the island for
                        coastal scenery and a glimpse of local life.
                        Check transportation options before heading
                        to more distant areas.
                    </p>

                </div>

            </section>


            <!-- TRAVEL TIPS -->
            <section id="travel-tips">

                <h2 class="section-title">
                    Travel Tips for Your Visit
                </h2>

                <div class="beach-guide-grid">

                    <div class="beach-guide-card teal">

                        <h3>Before You Leave</h3>

                        <ul>
                            <li>Confirm ferry schedules and fares.</li>
                            <li>Book accommodation ahead during holidays.</li>
                            <li>Bring cash for small local purchases.</li>
                            <li>Check the weather forecast.</li>
                        </ul>

                    </div>

                    <div class="beach-guide-card sand">

                        <h3>While Exploring</h3>

                        <ul>
                            <li>Bring sun protection and drinking water.</li>
                            <li>Follow beach and swimming safety rules.</li>
                            <li>Respect local communities and customs.</li>
                            <li>Dispose of rubbish responsibly.</li>
                        </ul>

                    </div>

                </div>

            </section>


            <!-- FAQ -->
            <section id="faq">

                <h2 class="section-title">
                    Bantayan Island: Frequently Asked Questions
                </h2>

                <div class="faq-container">

                    <details class="faq-item">
                        <summary>
                            How do I get to Bantayan Island from Cebu City?
                        </summary>

                        <div class="faq-answer">
                            Travel to Hagnaya Port by land, then take
                            a ferry to Santa Fe Port on Bantayan Island.
                            Check current schedules and ticket details
                            before departing.
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>
                            How many days should I spend on the island?
                        </summary>

                        <div class="faq-answer">
                            Two to three days is a useful starting
                            point for exploring beaches and local
                            attractions. Your ideal stay depends on
                            your itinerary and travel time.
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>
                            When is a good time to visit?
                        </summary>

                        <div class="faq-answer">
                            Choose dates based on your preferred
                            weather and activities. Conditions vary
                            throughout the year, so check forecasts
                            and sea conditions before traveling.
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>
                            Can I explore the island without a private car?
                        </summary>

                        <div class="faq-answer">
                            Yes. You can investigate local transport
                            options such as tricycles and motorcycles.
                            Availability and prices depend on the
                            area and time of your visit.
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>
                            What should I bring to Bantayan Island?
                        </summary>

                        <div class="faq-answer">
                            Bring comfortable clothing, swimwear,
                            sun protection, drinking water, cash,
                            personal essentials, and any booking
                            confirmations you need.
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>
                            Are ferry schedules guaranteed?
                        </summary>

                        <div class="faq-answer">
                            No. Schedules can change because of
                            weather, sea conditions, operational
                            requirements, or holidays. Confirm your
                            trip with the ferry operator before
                            leaving for the port.
                        </div>
                    </details>

                </div>

            </section>


            <!-- RELATED DESTINATION GUIDES -->
            <section id="related-guides">

                <h2 class="section-title">
                    Explore More Cebu Guides
                </h2>

                <div class="route-guide-grid">

                    <a
                        class="route-guide-link"
                        href="/Cebu/pages/destinations/moalboal.php"
                    >
                        Moalboal Travel Guide
                    </a>

                    <a
                        class="route-guide-link"
                        href="/Cebu/index.php#explore"
                    >
                        More Cebu Destinations
                    </a>

                    <a
                        class="route-guide-link"
                        href="/Cebu/index.php#transport"
                    >
                        Cebu Transportation
                    </a>

                    <a
                        class="route-guide-link"
                        href="/Cebu/index.php#food"
                    >
                        Cebu Local Food
                    </a>

                </div>

            </section>

        </article>


        <!-- SIDEBAR -->
        <aside class="sidebar">

            <!-- MAIN SIDEBAR CARD -->
            <div class="sidebar-card quote-card">

                <span class="sidebar-pill">
                    PLAN YOUR GETAWAY
                </span>

                <h3>Ready to explore Bantayan Island?</h3>

                <p>
                    Plan your ferry journey, choose your accommodation,
                    and discover the beaches and local attractions
                    that interest you.
                </p>

                <a
                    class="button button-blue"
                    style="width: 100%; margin-bottom: 10px; border-radius: 30px;"
                    href="https://www.google.com/maps/search/?api=1&query=Bantayan+Island+Cebu"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Explore the Island ↗
                </a>

                <a
                    class="button button-outline"
                    style="width: 100%; border-radius: 30px;"
                    href="#travel-tips"
                >
                    View Travel Tips
                </a>

                <p class="small-note" style="margin-top: 15px;">
                    Confirm transportation details and local conditions
                    before your departure.
                </p>

            </div>


            <!-- RELATED LINKS -->
            <div class="sidebar-card related-guides">

                <h4>YOU MAY ALSO LIKE</h4>

                <div class="sidebar-routes">

                    <a
                        class="sidebar-link"
                        href="/Cebu/pages/destinations/moalboal.php"
                    >
                        → Moalboal: beaches and marine life
                    </a>

                    <a
                        class="sidebar-link"
                        href="/Cebu/index.php#explore"
                    >
                        → Discover more Cebu destinations
                    </a>

                    <a
                        class="sidebar-link"
                        href="/Cebu/index.php#transport"
                    >
                        → Transportation tips for Cebu
                    </a>

                    <a
                        class="sidebar-link"
                        href="/Cebu/index.php#food"
                    >
                        → Taste Cebu's local specialties
                    </a>

                </div>

            </div>


            <!-- TRAVEL CHECKLIST -->
            <div class="sidebar-card">

                <span class="sidebar-pill">
                    TRAVEL CHECKLIST
                </span>

                <h3 style="color: var(--navy); font-size: 19px;">
                    Before You Go
                </h3>

                <p style="color: var(--muted); font-size: 14px; line-height: 1.8;">
                    ✓ Check ferry schedules<br>
                    ✓ Confirm accommodation<br>
                    ✓ Prepare cash and essentials<br>
                    ✓ Check weather conditions<br>
                    ✓ Plan your return journey
                </p>

            </div>

        </aside>

    </div>

</main>

<?php
include __DIR__ . '/../../includes/footer.php';
?>