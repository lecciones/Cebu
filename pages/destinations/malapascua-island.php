<?php
$pageTitle = "Malapascua Island | Smart Tourist Navigator";
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
        style="background-image: url('../../assets/images/malapascua.jpg'); min-height: 400px; padding-bottom: 50px;"
    >
        <div class="hero-overlay"></div>

        <div class="hero-content" style="padding-top: 40px;">
            <span class="hero-eyebrow">DIVE PARADISE</span>

            <h1>Malapascua<br><em>Island.</em></h1>

            <p>
                A quiet island in northern Cebu famous for daily thresher shark dives, 
                vibrant coral reefs, and beautiful white-sand beaches.
            </p>
        </div>

        <div class="hero-caption">
            <span>Daanbantayan, Cebu, Philippines</span>
            <span>Discover Cebu's Hidden Gem</span>
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
            <span class="stat-value">Daanbantayan</span>
            <span class="stat-desc">Northern tip of Cebu</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">HIGHLIGHT</span>
            <span class="stat-value">Thresher Sharks</span>
            <span class="stat-desc">Daily diving encounters</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">EXPERIENCE</span>
            <span class="stat-value">Diving & Beaches</span>
            <span class="stat-desc">Marine sanctuary</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">BEST TIME</span>
            <span class="stat-value">Year-round</span>
            <span class="stat-desc">Best visibility: Mar - Jun</span>
        </div>
    </section>

    <!-- MAIN CONTENT AND SIDEBAR -->
    <div class="destination-layout">

        <article class="main-content">

            <!-- INTRODUCTION AND MAP -->
            <section id="destination-overview">
                <h2 class="section-title">Discover Malapascua Island</h2>

                <div class="intro-section">
                    <div class="intro-text-content">
                        <p>
                            Malapascua Island is a small, peaceful island located off the northern tip 
                            of Cebu in Daanbantayan. It is world-renowned among divers for being one of 
                            the only places on Earth where you can reliably see thresher sharks in their 
                            natural habitat.
                        </p>
                        <p>
                            The thresher sharks come to the nearby Monad Shoal, a sunken island, every 
                            morning to be cleaned by small reef fish. Aside from the sharks, the island 
                            offers beautiful white-sand beaches, vibrant coral reefs, and a laid-back 
                            atmosphere.
                        </p>
                        <p>
                            Getting there involves a scenic 3.5 to 4-hour bus ride from Cebu City to 
                            Maya Port, followed by a short 30-minute boat ride to the island.
                        </p>
                    </div>

                    <div class="intro-map-wrapper">
                        <iframe
                            class="location-map"
                            title="Malapascua Island location map"
                            src="https://www.openstreetmap.org/export/embed.html?bbox=124.080%2C11.300%2C124.150%2C11.360&layer=mapnik&marker=11.3333%2C124.1167"
                            loading="lazy"
                            style="border: 0;"
                        ></iframe>
                        <div class="map-caption">
                            <strong>Malapascua Island</strong>
                            <p>Daanbantayan, Cebu, Philippines</p>
                            <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Malapascua+Island+Cebu" target="_blank" rel="noopener noreferrer">
                                Open Google Maps ↗
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PHOTO GALLERY -->
            <section id="destination-gallery-section">
                <h2 class="section-title">Explore the Island</h2>
                <p>
                    From the underwater world of thresher sharks to the serene beaches 
                    of Bounty Beach.
                </p>

                <div class="destination-gallery">
                    <figure>
                        <img src="../../assets/images/malapascua.jpg" alt="Malapascua Island beach" loading="lazy">
                        <figcaption>Bounty Beach</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/malapascua-shark.jpg" alt="Thresher shark" loading="lazy">
                        <figcaption>Thresher Sharks</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/malapascua-sunset.jpg" alt="Sunset at Malapascua" loading="lazy">
                        <figcaption>Island Sunsets</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/malapascua-lighthouse.jpg" alt="Lighthouse at Malapascua" loading="lazy">
                        <figcaption>The Lighthouse</figcaption>
                    </figure>
                </div>
            </section>

            <!-- LOCAL TRAVEL TIP -->
            <div class="local-tip-alert">
                <span class="tip-icon">💡</span>
                <div>
                    <strong>LOCAL TRAVEL TIP</strong>
                    <p>
                        Thresher shark dives require an early start, usually leaving at 4:30 AM 
                        to reach the shoal by sunrise. If you are not a diver, you can still enjoy 
                        snorkeling, island hopping, and relaxing on the beautiful beaches.
                    </p>
                </div>
            </div>

            <!-- TRANSPORTATION GUIDE -->
            <section id="transport-guide">
                <h2 class="section-title">How to Get There</h2>
                <p>
                    Malapascua is about 3.5 to 4 hours from Cebu City. The journey involves 
                    a bus to Maya Port and a boat to the island.
                </p>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon bus">🚌</span>
                        <div class="option-title-group">
                            <h3>Bus to Maya Port</h3>
                            <span class="time-badge">3.5 - 4 hrs</span>
                        </div>
                    </div>
                    <p>
                        From Cebu North Bus Terminal, take a Ceres bus bound for Maya Port 
                        in Daanbantayan. The bus ride is scenic and passes through several towns.
                    </p>
                </div>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon">🚤</span>
                        <div class="option-title-group">
                            <h3>Boat to Malapascua</h3>
                            <span class="time-badge">30 mins</span>
                        </div>
                    </div>
                    <p>
                        From Maya Port, take a local outrigger boat (bangka) to Malapascua Island. 
                        Boats run regularly during daylight hours.
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
                        <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Malapascua+Island+Cebu" target="_blank" rel="noopener noreferrer">
                            Find Malapascua Island on Google Maps ↗
                        </a>
                    </p>
                </div>
            </section>

            <!-- THINGS TO DO -->
            <section id="things-to-do">
                <h2 class="section-title">Things to Do</h2>
                <div class="expect-grid">
                    <div class="expect-card">
                        <h3>🦈 Dive with Thresher Sharks</h3>
                        <p>
                            Join an early morning dive to Monad Shoal to see these incredible 
                            sharks in their natural cleaning stations.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🏖️ Relax on Bounty Beach</h3>
                        <p>
                            The main beach on the island, lined with dive resorts and restaurants. 
                            Perfect for sunbathing and swimming.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🚶 Island Trekking</h3>
                        <p>
                            Walk around the island to explore local villages, the lighthouse, 
                            and hidden coves.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🤿 Snorkeling & Island Hopping</h3>
                        <p>
                            Take a boat tour to nearby islets like Kalanggaman Island or 
                            Gato Island for snorkeling and exploring.
                        </p>
                    </div>
                </div>
            </section>

            <!-- TRAVEL TIPS -->
            <section id="travel-tips">
                <h2 class="section-title">Travel Tips</h2>
                <ul class="editorial-list">
                    <li>
                        <strong>Bring cash.</strong>
                        There are ATMs on the island, but they can be unreliable. Bring 
                        enough cash for your entire stay.
                    </li>
                    <li>
                        <strong>Book dives in advance.</strong>
                        If you are visiting for the thresher sharks, book your dives with 
                        a reputable dive shop before you arrive.
                    </li>
                    <li>
                        <strong>Pack light.</strong>
                        The boats from Maya Port can be small, and carrying large luggage 
                        can be difficult.
                    </li>
                    <li>
                        <strong>Respect the marine life.</strong>
                        Do not touch or chase the sharks or any other marine animals. 
                        Follow your dive guide's instructions.
                    </li>
                </ul>
            </section>

            <!-- FREQUENTLY ASKED QUESTIONS -->
            <section id="faq">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <div class="faq-container">
                    <details class="faq-item">
                        <summary>Do I need to be a diver to see the thresher sharks?</summary>
                        <div class="faq-answer">
                            Yes, the thresher sharks are typically seen at Monad Shoal, which 
                            is a dive site at a depth of about 20-25 meters. It is not accessible 
                            for snorkeling.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>Is there a ferry schedule?</summary>
                        <div class="faq-answer">
                            There is no fixed ferry schedule. Boats leave Maya Port when there 
                            are enough passengers. It is best to arrive at Maya Port before 3:00 PM 
                            to ensure you get a boat before dark.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>What is the best time to visit?</summary>
                        <div class="faq-answer">
                            The island is accessible year-round, but the best time for diving 
                            and clear water is during the dry season, from March to June.
                        </div>
                    </details>
                </div>
            </section>

            <!-- RELATED DESTINATIONS -->
            <section id="related-guides">
                <h2 class="section-title">Explore More Destinations</h2>
                <div class="route-guide-grid">
                    <a class="route-guide-link" href="bantayan-island.php">Bantayan Island</a>
                    <a class="route-guide-link" href="oslob.php">Oslob Whale Sharks</a>
                    <a class="route-guide-link" href="moalboal.php">Moalboal</a>
                    <a class="route-guide-link" href="../../index.php">Back to Home</a>
                </div>
            </section>

        </article>

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="sidebar-card quote-card">
                <span class="sidebar-pill">PLAN YOUR VISIT</span>
                <h3>Malapascua Island</h3>
                <p>
                    Experience the thrill of diving with thresher sharks and enjoy the 
                    peaceful atmosphere of this northern Cebu gem.
                </p>
                <a class="button button-blue" href="https://www.google.com/maps/search/?api=1&query=Malapascua+Island+Cebu" target="_blank" rel="noopener noreferrer">
                    View Location ↗
                </a>
                <a class="button button-outline" href="#travel-tips">
                    Read Travel Tips
                </a>
                <p class="small-note">
                    Best diving: March to June.
                </p>
            </div>

            <div class="sidebar-card related-guides">
                <h4>RELATED DESTINATIONS</h4>
                <div class="sidebar-routes">
                    <a class="sidebar-link" href="bantayan-island.php">Explore Bantayan Island →</a>
                    <a class="sidebar-link" href="oslob.php">Explore Oslob →</a>
                    <a class="sidebar-link" href="moalboal.php">Explore Moalboal →</a>
                </div>
            </div>
        </aside>

    </div>

</main>

<?php include '../../includes/footer.php'; ?>