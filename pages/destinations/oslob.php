<?php
$pageTitle = "Oslob Whale Sharks | Smart Tourist Navigator";
$currentPage = "destinations";

// Include header (goes UP TWO LEVELS to the root 'includes' folder)
include __DIR__ . '/../../includes/header.php';
?>

<main class="destination-detail-page">
    
    <!-- SPECIFIC CSS FOR THIS PAGE -->
    <link rel="stylesheet" href="../../assets/css/destination-detail.css">

    <!-- HERO SECTION (Reduced Height) -->
    <section
        class="hero detail-hero"
        style="background-image: url('../../assets/images/oslob.jpg'); min-height: 400px; padding-bottom: 50px;"
    >
        <div class="hero-overlay"></div>

        <div class="hero-content" style="padding-top: 40px;">
            <span class="hero-eyebrow">MARINE LIFE & COASTAL</span>

            <h1>Oslob Whale<br><em>Sharks.</em></h1>

            <p>
                Swim alongside the gentle giants of the sea in the clear waters 
                of southern Cebu—an unforgettable marine encounter.
            </p>
        </div>

        <div class="hero-caption">
            <span>Oslob, Cebu, Philippines</span>
            <span>Discover Cebu's Marine Giants</span>
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
            <span class="stat-value">Oslob, Cebu</span>
            <span class="stat-desc">Southern tip of Cebu</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">HIGHLIGHT</span>
            <span class="stat-value">Whale Sharks</span>
            <span class="stat-desc">Butanding interaction</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">EXPERIENCE</span>
            <span class="stat-value">Snorkeling / Diving</span>
            <span class="stat-desc">Marine sanctuary</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">BEST TIME</span>
            <span class="stat-value">Early Morning</span>
            <span class="stat-desc">6:00 AM – 8:00 AM</span>
        </div>
    </section>

    <!-- MAIN CONTENT AND SIDEBAR -->
    <div class="destination-layout">

        <article class="main-content">

            <!-- INTRODUCTION AND MAP -->
            <section id="destination-overview">
                <h2 class="section-title">Discover Oslob</h2>

                <div class="intro-section">
                    <div class="intro-text-content">
                        <p>
                            Oslob is a coastal town in southern Cebu famous for its 
                            whale shark interaction. Locally known as "butanding," these 
                            gentle giants gather in the waters off Barangay Tan-awan, 
                            where locals feed them small shrimp.
                        </p>
                        <p>
                            While the practice is controversial among conservationists, 
                            it has become a major tourist draw. The activity is tightly 
                            regulated: you must watch a briefing, wear a life vest, and 
                            keep a safe distance (at least 4 meters) from the sharks.
                        </p>
                        <p>
                            Beyond the whale sharks, Oslob is also home to the stunning 
                            Tumalog Falls and the historic Cuartel Ruins, making it a 
                            great day trip or overnight destination.
                        </p>
                    </div>

                    <div class="intro-map-wrapper">
                        <iframe
                            class="location-map"
                            title="Oslob location map"
                            src="https://www.openstreetmap.org/export/embed.html?bbox=123.350%2C9.450%2C123.420%2C9.550&layer=mapnik&marker=9.5255%2C123.3761"
                            loading="lazy"
                            style="border: 0;"
                        ></iframe>
                        <div class="map-caption">
                            <strong>Oslob</strong>
                            <p>Southern Cebu, Philippines</p>
                            <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Oslob+Whale+Shark+Watching+Cebu" target="_blank" rel="noopener noreferrer">
                                Open Google Maps ↗
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PHOTO GALLERY -->
            <section id="destination-gallery-section">
                <h2 class="section-title">Explore the Coast</h2>
                <p>
                    From the gentle giants of the sea to the cascading waters of Tumalog Falls.
                </p>

                <div class="destination-gallery">
                    <figure>
                        <img src="../../assets/images/oslob.jpg" alt="Whale shark in Oslob" loading="lazy">
                        <figcaption>Whale Sharks</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/tumalog.jpg" alt="Tumalog Falls" loading="lazy">
                        <figcaption>Tumalog Falls</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/oslob-cuartel.jpg" alt="Cuartel Ruins" loading="lazy">
                        <figcaption>Cuartel Ruins</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/oslob-coast.jpg" alt="Oslob coastline" loading="lazy">
                        <figcaption>Coastal Views</figcaption>
                    </figure>
                </div>
            </section>

            <!-- LOCAL TRAVEL TIP -->
            <div class="local-tip-alert">
                <span class="tip-icon">💡</span>
                <div>
                    <strong>LOCAL TRAVEL TIP</strong>
                    <p>
                        Arrive as early as possible (before 6:00 AM) to secure a slot 
                        and avoid the intense midday heat. Wear reef-safe sunscreen, 
                        as regular sunscreen can harm the whale sharks and coral.
                    </p>
                </div>
            </div>

            <!-- TRANSPORTATION GUIDE -->
            <section id="transport-guide">
                <h2 class="section-title">How to Get There</h2>
                <p>
                    Oslob is about 3.5 to 4 hours from Cebu City. Most travelers 
                    leave very early in the morning to catch the whale sharks.
                </p>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon bus">🚌</span>
                        <div class="option-title-group">
                            <h3>Bus from South Bus Terminal</h3>
                            <span class="time-badge">3.5 - 4 hrs</span>
                        </div>
                    </div>
                    <p>
                        From Cebu South Bus Terminal, take a Ceres bus bound for Bato via Oslob. 
                        Ask the conductor to drop you at the "Whale Shark Watching" area in Tan-awan.
                    </p>
                </div>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon">🚗</span>
                        <div class="option-title-group">
                            <h3>Private Car / Van</h3>
                        </div>
                    </div>
                    <p>
                        For a more comfortable trip, hire a private van. You can leave later 
                        and stop at other attractions like Simala Shrine or Tumalog Falls 
                        along the way.
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
                        <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Oslob+Whale+Shark+Watching+Cebu" target="_blank" rel="noopener noreferrer">
                            Find Oslob on Google Maps ↗
                        </a>
                    </p>
                </div>
            </section>

            <!-- THINGS TO DO -->
            <section id="things-to-do">
                <h2 class="section-title">Things to Do</h2>
                <div class="expect-grid">
                    <div class="expect-card">
                        <h3>🦈 Whale Shark Watching</h3>
                        <p>
                            Snorkel or dive with the whale sharks. Follow the rules 
                            strictly and listen to your guide's briefing.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>💦 Visit Tumalog Falls</h3>
                        <p>
                            A short motorbike ride from the whale shark area, this 
                            curtain waterfall is a refreshing stop.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🏛️ Explore Cuartel Ruins</h3>
                        <p>
                            See the unfinished coral stone barracks built during the 
                            Spanish colonial era.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🏝️ Sumilon Island</h3>
                        <p>
                            Take a short boat ride to this island known for its 
                            shifting white sandbar and marine sanctuary.
                        </p>
                    </div>
                </div>
            </section>

            <!-- TRAVEL TIPS -->
            <section id="travel-tips">
                <h2 class="section-title">Travel Tips</h2>
                <ul class="editorial-list">
                    <li>
                        <strong>Do not touch the whale sharks.</strong>
                        Keep a safe distance (4 meters) and avoid chasing them.
                    </li>
                    <li>
                        <strong>No sunscreen in the water.</strong>
                        Wash off any regular sunscreen before entering the water; 
                        it is toxic to the sharks and coral.
                    </li>
                    <li>
                        <strong>Bring a dry bag.</strong>
                        You will need a secure place for your phone and valuables 
                        while you are in the water.
                    </li>
                    <li>
                        <strong>Carry cash.</strong>
                        Fees for the whale sharks, local transport (tricycles/motorbikes), 
                        and food are usually paid in cash.
                    </li>
                </ul>
            </section>

            <!-- FREQUENTLY ASKED QUESTIONS -->
            <section id="faq">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <div class="faq-container">
                    <details class="faq-item">
                        <summary>Is swimming with whale sharks ethical?</summary>
                        <div class="faq-answer">
                            It is a controversial practice. Locals feed the sharks to keep 
                            them in the area. If you choose to participate, follow all 
                            rules strictly and do not touch or ride the sharks.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>How much does it cost?</summary>
                        <div class="faq-answer">
                            For Filipinos, it is around ₱500 for snorkeling. For foreigners, 
                            it is ₱1,000 (snorkeling) or ₱1,500 (diving). This includes the 
                            briefing and gear.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>Can I just watch from the boat?</summary>
                        <div class="faq-answer">
                            Yes, there is a "watcher" option for those who do not want to 
                            get in the water, which is cheaper.
                        </div>
                    </details>
                </div>
            </section>

            <!-- RELATED DESTINATIONS -->
            <section id="related-guides">
                <h2 class="section-title">Explore More Destinations</h2>
                <div class="route-guide-grid">
                    <a class="route-guide-link" href="sumilon-island.php">Sumilon Island</a>
                    <a class="route-guide-link" href="tumalog-falls.php">Tumalog Falls</a>
                    <a class="route-guide-link" href="moalboal.php">Moalboal</a>
                    <a class="route-guide-link" href="../../index.php">Back to Home</a>
                </div>
            </section>

        </article>

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="sidebar-card quote-card">
                <span class="sidebar-pill">PLAN YOUR VISIT</span>
                <h3>Oslob Whale Sharks</h3>
                <p>
                    Get an early start and prepare for a once-in-a-lifetime encounter 
                    with these gentle giants.
                </p>
                <a class="button button-blue" href="https://www.google.com/maps/search/?api=1&query=Oslob+Whale+Shark+Watching+Cebu" target="_blank" rel="noopener noreferrer">
                    View Location ↗
                </a>
                <a class="button button-outline" href="#travel-tips">
                    Read Travel Tips
                </a>
                <p class="small-note">
                    Arrive before 6 AM to avoid long lines.
                </p>
            </div>

            <div class="sidebar-card related-guides">
                <h4>RELATED DESTINATIONS</h4>
                <div class="sidebar-routes">
                    <a class="sidebar-link" href="sumilon-island.php">Explore Sumilon Island →</a>
                    <a class="sidebar-link" href="tumalog-falls.php">Explore Tumalog Falls →</a>
                    <a class="sidebar-link" href="moalboal.php">Explore Moalboal →</a>
                </div>
            </div>
        </aside>

    </div>

</main>

<?php include '../../includes/footer.php'; ?>