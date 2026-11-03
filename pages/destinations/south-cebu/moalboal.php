<?php
$pageTitle = "Moalboal Sardine Run | Smart Tourist Navigator";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageTitle; ?></title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
    
    <!-- MAIN STYLESHEET (Global Design) -->
    <link rel="stylesheet" href="/Cebu/assets/css/style.css">

    <!-- DESTINATION SPECIFIC STYLESHEET -->
    <link rel="stylesheet" href="/Cebu/assets/css/destination-detail.css?v=<?= time(); ?>">
</head>
<body>

    <!-- HEADER NAVIGATION -->
    <header class="site-header" id="home">
        <a class="brand" href="/Cebu/index.php">
            <span class="brand-mark">✦</span>
            <span>Smart Tourist <strong>Navigator</strong></span>
        </a>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation" aria-expanded="false">☰</button>
        <nav class="nav-links" id="navLinks">
            <a href="/Cebu/index.php">Home</a>
            <a href="/Cebu/index.php#explore">Destinations</a>
            <a href="/Cebu/index.php#map-section">Map & Routes</a>
            <a href="/Cebu/index.php#food">Local Food</a>
            <a href="/Cebu/index.php#transport">Transport</a>
            <a href="/Cebu/index.php#plan">Plan Trip</a>
        </nav>
        <a href="/Cebu/index.php#explore" class="header-cta">Start Exploring ↗</a>
    </header>

    <main class="destination-detail-page">

        <!-- HERO SECTION -->
        <section class="hero detail-hero" style="background-image: url('/Cebu/assets/images/destination/moalboal.jpg'); min-height: 400px; padding-bottom: 50px;">
            <div class="hero-overlay"></div>

            <div class="hero-content" style="padding-top: 40px;">
                <span class="hero-eyebrow">OCEAN & ADVENTURE</span>
                <h1>Moalboal<br><em>Sardine Run.</em></h1>
                <p>
                    Experience millions of sardines and sea turtles just meters from the
                    shore in this vibrant coastal town on Cebu's south-west coast.
                </p>
            </div>

            <div class="hero-caption">
                <span>Moalboal, Cebu, Philippines</span>
                <span>A Complete Destination Guide</span>
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
                <span class="stat-label">FROM CEBU CITY</span>
                <span class="stat-value">~90 km</span>
                <span class="stat-desc">2.5–3 hours by private car</span>
            </div>
            <div class="stat-item">
                <span class="stat-label">FROM MACTAN AIRPORT</span>
                <span class="stat-value">~100 km</span>
                <span class="stat-desc">3–3.5 hours via the bridge</span>
            </div>
            <div class="stat-item">
                <span class="stat-label">REGION</span>
                <span class="stat-value">South-west Cebu</span>
                <span class="stat-desc">Coastal town near Panagsama</span>
            </div>
            <div class="stat-item">
                <span class="stat-label">BEST TIME</span>
                <span class="stat-value">Feb – May</span>
                <span class="stat-desc">Sardines year-round</span>
            </div>
        </section>

        <!-- MAIN CONTENT AND SIDEBAR -->
        <div class="destination-layout">

            <article class="main-content">

                <!-- INTRODUCTION AND MAP -->
                <section id="destination-overview">
                    <h2 class="section-title">Discover Moalboal</h2>

                    <div class="intro-section">
                        <div class="intro-text-content">
                            <p>
                                Moalboal sits on Cebu's south-west coast, about 90 km from Cebu City.
                                Its sardine run is one of the Philippines' most famous marine
                                attractions — you can snorkel right near the shore without needing
                                a boat.
                            </p>
                            <p>
                                Green sea turtles are often spotted in the same coastal waters,
                                feeding in the seagrass beds. Most travellers visit for a day trip
                                or an overnight stay, combining the sardine run and sea turtles
                                with a Pescador Island boat tour.
                            </p>
                            <p>
                                The drive from Cebu City usually takes around 2.5–3 hours by private
                                car. Public buses can take longer because of traffic and stops along
                                the route. Some travellers also visit Kawasan Falls for canyoneering
                                farther south.
                            </p>
                        </div>

                        <div class="intro-map-wrapper">
                            <iframe
                                class="location-map"
                                title="Moalboal location map"
                                src="https://www.openstreetmap.org/export/embed.html?bbox=123.350%2C9.930%2C123.430%2C9.990&layer=mapnik&marker=9.9619%2C123.3747"
                                loading="lazy"
                                style="border: 0;"
                            ></iframe>
                            <div class="map-caption">
                                <strong>Moalboal</strong>
                                <p>Cebu, Philippines</p>
                                <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Moalboal+Cebu" target="_blank" rel="noopener noreferrer">
                                    Open Google Maps ↗
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- PHOTO GALLERY -->
                <section id="destination-gallery-section">
                    <h2 class="section-title">Discover Moalboal</h2>
                    <p>
                        Explore Moalboal's beautiful coastline, colourful marine life,
                        and unforgettable underwater scenery.
                    </p>

                    <div class="destination-gallery">
                        <figure>
                            <img src="/Cebu/assets/images/moalboal-beach.jpg" alt="Beach scenery in Moalboal, Cebu" loading="lazy">
                            <figcaption>Beautiful Beaches</figcaption>
                        </figure>
                        <figure>
                            <img src="/Cebu/assets/images/moalboal-sardines.jpg" alt="School of sardines swimming underwater" loading="lazy">
                            <figcaption>The Famous Sardine Run</figcaption>
                        </figure>
                        <figure>
                            <img src="/Cebu/assets/images/moalboal-turtle.jpg" alt="Sea turtle swimming in Moalboal" loading="lazy">
                            <figcaption>Sea Turtle Encounters</figcaption>
                        </figure>
                        <figure>
                            <img src="/Cebu/assets/images/moalboal-panagsama.jpg" alt="Panagsama Beach in Moalboal" loading="lazy">
                            <figcaption>Panagsama Beach</figcaption>
                        </figure>
                    </div>
                </section>

                <!-- LOCAL TRAVEL TIP -->
                <div class="local-tip-alert">
                    <span class="tip-icon">⭐</span>
                    <div>
                        <strong>LOCAL TIP</strong>
                        <p>
                            Try snorkelling in the morning when visibility and lighting may be
                            favourable. Bring reef-safe sunscreen, follow local marine guidelines,
                            and avoid touching or chasing the marine life.
                        </p>
                    </div>
                </div>

                <!-- TRANSPORTATION GUIDE -->
                <section id="transport-guide">
                    <h2 class="section-title">How to Get to Moalboal</h2>
                    <p>
                        Moalboal is about 2.5–3 hours from Cebu City by private car, longer
                        by public transport.
                    </p>

                    <div class="transport-option highlighted">
                        <div class="option-header">
                            <span class="option-icon check">✓</span>
                            <div class="option-title-group">
                                <h3>Private transfer</h3>
                                <span class="time-badge">~2.5–3 hrs</span>
                            </div>
                        </div>
                        <p>
                            Travel directly from your hotel or the airport in a private,
                            air-conditioned car or van. Ask the provider for the current fare
                            and confirm whether stops and other fees are included.
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
                            Go to Cebu South Bus Terminal and look for a Ceres Liner bus
                            travelling via Barili toward the south-western part of Cebu.
                            Confirm the destination with the conductor before boarding.
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
                            Shared vans may offer a quicker alternative to the bus, depending
                            on traffic, departure time, passenger pickups, and luggage space.
                            Confirm the fare and drop-off location before travelling.
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
                            <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Moalboal+Cebu" target="_blank" rel="noopener noreferrer">
                                Find Moalboal on Google Maps ↗
                            </a>
                        </p>
                    </div>
                </section>

                <!-- THINGS TO DO -->
                <section id="things-to-do">
                    <h2 class="section-title">What to Expect</h2>
                    <div class="expect-grid">
                        <div class="expect-card">
                            <h3>🐟 The Sardine Run</h3>
                            <p>
                                Watch large schools of sardines move together in the water near
                                Panagsama Beach. Follow local snorkelling rules and avoid touching
                                the fish or coral.
                            </p>
                        </div>
                        <div class="expect-card">
                            <h3>🐢 Sea Turtles</h3>
                            <p>
                                Green sea turtles can sometimes be seen feeding in seagrass areas.
                                Observe them from a respectful distance and never chase or touch them.
                            </p>
                        </div>
                        <div class="expect-card">
                            <h3>🌊 Pescador Island</h3>
                            <p>
                                Join a local boat tour to explore the island's marine environment,
                                snorkelling spots, and diving areas. Check sea conditions before
                                heading out.
                            </p>
                        </div>
                        <div class="expect-card">
                            <h3>🏖️ White Beach (Basdaku)</h3>
                            <p>
                                Visit this sandy beach for swimming, relaxing, and enjoying the
                                coastal scenery. Check current entrance and parking fees before
                                your visit.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- TRAVEL TIPS -->
                <section id="travel-tips">
                    <h2 class="section-title">Travel Tips</h2>
                    <ul class="editorial-list">
                        <li>
                            <strong>Visit in the morning.</strong>
                            Snorkelling visibility and lighting are usually best before the
                            afternoon crowd arrives.
                        </li>
                        <li>
                            <strong>Bring reef-safe sunscreen.</strong>
                            Protect the coral and marine life while protecting your skin.
                        </li>
                        <li>
                            <strong>Bring cash.</strong>
                            Many local shops, tricycle drivers, and small restaurants do not
                            accept cards.
                        </li>
                        <li>
                            <strong>Respect the marine life.</strong>
                            Do not touch, feed, or chase the sardines and turtles. Follow the
                            guidelines given by local operators.
                        </li>
                    </ul>
                </section>

                <!-- FREQUENTLY ASKED QUESTIONS -->
                <section id="faq">
                    <h2 class="section-title">Moalboal: Frequently Asked Questions</h2>
                    <div class="faq-container">
                        <details class="faq-item">
                            <summary>How long is the drive from Cebu City to Moalboal?</summary>
                            <div class="faq-answer">
                                The journey usually takes around 2.5–3 hours by private car,
                                but traffic and road conditions can make it longer. Public
                                transport may take additional time.
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>Can I see the sardine run and turtles on a day trip?</summary>
                            <div class="faq-answer">
                                Yes. A day trip is possible, but plan enough time for travel,
                                meals, snorkelling, and the return journey. An early departure
                                from Cebu City is recommended.
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>Do I need a boat to see the sardine run?</summary>
                            <div class="faq-answer">
                                The sardine run is commonly viewed by snorkelling near the shore
                                at Panagsama Beach. Follow local rules and ask local operators
                                about current conditions and applicable fees.
                            </div>
                        </details>
                        <details class="faq-item">
                            <summary>What should I bring to Moalboal?</summary>
                            <div class="faq-answer">
                                Bring swimwear, a towel, drinking water, sun protection, a
                                waterproof bag, and cash for local transportation, food, and
                                applicable fees. Consider bringing your own snorkelling gear
                                if you have it.
                            </div>
                        </details>
                    </div>
                </section>

                <!-- RELATED DESTINATIONS -->
                <section id="related-guides">
                    <h2 class="section-title">Explore More Destinations</h2>
                    <div class="route-guide-grid">
                        <a class="route-guide-link" href="/Cebu/pages/destinations/malapascua-island.php">Malapascua Island</a>
                        <a class="route-guide-link" href="/Cebu/pages/destinations/bantayan-island.php">Bantayan Island</a>
                        <a class="route-guide-link" href="/Cebu/pages/destinations/oslob.php">Oslob Whale Sharks</a>
                        <a class="route-guide-link" href="/Cebu/index.php">Back to Home</a>
                    </div>
                </section>

            </article>

            <!-- SIDEBAR -->
            <aside class="sidebar">
                <div class="sidebar-card quote-card">
                    <span class="sidebar-pill">PLAN YOUR VISIT</span>
                    <h3>Moalboal Sardine Run</h3>
                    <p>
                        Experience the thrill of swimming alongside millions of sardines
                        and encountering sea turtles in this vibrant coastal town.
                    </p>
                    <a class="button button-blue" href="https://www.google.com/maps/search/?api=1&query=Moalboal+Cebu" target="_blank" rel="noopener noreferrer">
                        View Location ↗
                    </a>
                    <a class="button button-outline" href="#travel-tips">
                        Read Travel Tips
                    </a>
                    <p class="small-note">
                        Best conditions: February to May.
                    </p>
                </div>

                <div class="sidebar-card related-guides">
                    <h4>RELATED DESTINATIONS</h4>
                    <div class="sidebar-routes">
                        <a class="sidebar-link" href="/Cebu/pages/destinations/malapascua-island.php">Explore Malapascua Island →</a>
                        <a class="sidebar-link" href="/Cebu/pages/destinations/bantayan-island.php">Explore Bantayan Island →</a>
                        <a class="sidebar-link" href="/Cebu/pages/destinations/oslob.php">Explore Oslob →</a>
                    </div>
                </div>
            </aside>

        </div>

    </main>

    <!-- FOOTER -->
    <footer class="site-footer" id="about">
        <div class="footer-main">
            <div class="footer-brand">
                <a class="brand" href="/Cebu/index.php">
                    <span class="brand-mark">✦</span>
                    <span>Smart Tourist <strong>Navigator</strong></span>
                </a>
                <p>Your local guide to attractions, food, and travel information across Cebu.</p>
            </div>
            <div>
                <h4>Explore</h4>
                <a href="/Cebu/index.php#explore">Destinations</a>
                <a href="/Cebu/index.php#map-section">Map & Routes</a>
                <a href="/Cebu/index.php#food">Local Food</a>
            </div>
            <div>
                <h4>Plan</h4>
                <a href="/Cebu/index.php#transport">Transport Tips</a>
                <a href="/Cebu/index.php#plan">Plan Your Trip</a>
                <a href="/Cebu/index.php#about">About the Project</a>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© <span id="currentYear"></span> Smart Tourist Navigator — Cebu</span>
            <span>Made for curious travelers.</span>
        </div>
    </footer>

    <!-- NOTIFICATION MESSAGE -->
    <div id="toast" class="toast" role="status" aria-live="polite"></div>

    <!-- Script for Mobile Menu & Year -->
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');
        if (menuToggle && navLinks) {
            menuToggle.addEventListener('click', function() {
                navLinks.classList.toggle('open');
            });
        }
    </script>
</body>
</html>