<?php
$pageTitle = "Tumalog Falls | Smart Tourist Navigator";
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
        style="background-image: url('../../assets/images/tumalog.jpg'); min-height: 400px; padding-bottom: 50px;"
    >
        <div class="hero-overlay"></div>

        <div class="hero-content" style="padding-top: 40px;">
            <span class="hero-eyebrow">NATURE & WATERFALLS</span>

            <h1>Tumalog<br><em>Falls.</em></h1>

            <p>
                A stunning, curtain-style waterfall near Oslob with a shallow, 
                refreshing pool—perfect for a cool dip after swimming with whale sharks.
            </p>
        </div>

        <div class="hero-caption">
            <span>Oslob, Cebu, Philippines</span>
            <span>Discover Cebu's Curtain Waterfall</span>
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
            <span class="stat-desc">Near the whale shark area</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">HIGHLIGHT</span>
            <span class="stat-value">Curtain Waterfall</span>
            <span class="stat-desc">Shallow natural pool</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">EXPERIENCE</span>
            <span class="stat-value">Swimming & Nature</span>
            <span class="stat-desc">Refreshing dip</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">TRAVEL STYLE</span>
            <span class="stat-value">Quick Stop</span>
            <span class="stat-desc">Usually 1-2 hours</span>
        </div>
    </section>

    <!-- MAIN CONTENT AND SIDEBAR -->
    <div class="destination-layout">

        <article class="main-content">

            <!-- INTRODUCTION AND MAP -->
            <section id="destination-overview">
                <h2 class="section-title">Discover Tumalog Falls</h2>

                <div class="intro-section">
                    <div class="intro-text-content">
                        <p>
                            Tumalog Falls is a breathtaking waterfall located in Oslob, southern Cebu. 
                            It is famous for its unique "curtain" style—the water cascades down a 
                            wide, moss-covered rock face, creating a fine mist that cools the area.
                        </p>
                        <p>
                            The pool at the base of the falls is shallow and refreshing, making it 
                            a great spot for swimming and relaxing. The surrounding area is lush and 
                            green, with towering trees and tropical plants.
                        </p>
                        <p>
                            Because it is just a short drive from the whale shark watching area in 
                            Tan-awan, many visitors combine the two activities in a single day trip.
                        </p>
                    </div>

                    <div class="intro-map-wrapper">
                        <iframe
                            class="location-map"
                            title="Tumalog Falls location map"
                            src="https://www.openstreetmap.org/export/embed.html?bbox=123.390%2C9.490%2C123.410%2C9.510&layer=mapnik&marker=9.5000%2C123.4000"
                            loading="lazy"
                            style="border: 0;"
                        ></iframe>
                        <div class="map-caption">
                            <strong>Tumalog Falls</strong>
                            <p>Oslob, Cebu, Philippines</p>
                            <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Tumalog+Falls+Oslob+Cebu" target="_blank" rel="noopener noreferrer">
                                Open Google Maps ↗
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PHOTO GALLERY -->
            <section id="destination-gallery-section">
                <h2 class="section-title">Explore the Falls</h2>
                <p>
                    See the cascading water, the lush greenery, and the refreshing 
                    pool at the base of Tumalog Falls.
                </p>

                <div class="destination-gallery">
                    <figure>
                        <img src="../../assets/images/tumalog.jpg" alt="Tumalog Falls" loading="lazy">
                        <figcaption>The Curtain Waterfall</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/tumalog-pool.jpg" alt="The pool at Tumalog Falls" loading="lazy">
                        <figcaption>The Refreshing Pool</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/tumalog-greenery.jpg" alt="Greenery around Tumalog Falls" loading="lazy">
                        <figcaption>Lush Surroundings</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/tumalog-trail.jpg" alt="Trail to Tumalog Falls" loading="lazy">
                        <figcaption>The Access Trail</figcaption>
                    </figure>
                </div>
            </section>

            <!-- LOCAL TRAVEL TIP -->
            <div class="local-tip-alert">
                <span class="tip-icon">💡</span>
                <div>
                    <strong>LOCAL TRAVEL TIP</strong>
                    <p>
                        The road to Tumalog Falls is steep and narrow. You can take a habal-habal 
                        (motorcycle taxi) from the main road, or walk down if you're feeling 
                        adventurous. Bring water shoes, as the bottom of the pool can be slippery.
                    </p>
                </div>
            </div>

            <!-- TRANSPORTATION GUIDE -->
            <section id="transport-guide">
                <h2 class="section-title">How to Get There</h2>
                <p>
                    Tumalog Falls is about 3.5 to 4 hours from Cebu City. It is usually 
                    visited as part of a day trip to Oslob for the whale sharks.
                </p>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon bus">🚌</span>
                        <div class="option-title-group">
                            <h3>Bus to Oslob</h3>
                            <span class="time-badge">3.5 - 4 hrs</span>
                        </div>
                    </div>
                    <p>
                        From Cebu South Bus Terminal, take a Ceres bus bound for Bato via Oslob. 
                        Ask the conductor to drop you at the Tumalog Falls junction.
                    </p>
                </div>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon">🛵</span>
                        <div class="option-title-group">
                            <h3>Habal-Habal to the Falls</h3>
                        </div>
                    </div>
                    <p>
                        From the junction, take a habal-habal (motorcycle taxi) down the steep 
                        road to the falls. This is the most convenient way to get there.
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
                        <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Tumalog+Falls+Oslob+Cebu" target="_blank" rel="noopener noreferrer">
                            Find Tumalog Falls on Google Maps ↗
                        </a>
                    </p>
                </div>
            </section>

            <!-- THINGS TO DO -->
            <section id="things-to-do">
                <h2 class="section-title">Things to Do</h2>
                <div class="expect-grid">
                    <div class="expect-card">
                        <h3>💦 Swim in the Pool</h3>
                        <p>
                            Take a refreshing dip in the shallow pool at the base of the falls.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>📸 Take Photos</h3>
                        <p>
                            The curtain-style waterfall and lush greenery make for stunning 
                            photographs.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🚶 Explore the Area</h3>
                        <p>
                            Walk around the falls and explore the surrounding tropical forest.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🧺 Have a Picnic</h3>
                        <p>
                            Bring some snacks and enjoy a picnic by the water (just remember 
                            to take your trash with you).
                        </p>
                    </div>
                </div>
            </section>

            <!-- TRAVEL TIPS -->
            <section id="travel-tips">
                <h2 class="section-title">Travel Tips</h2>
                <ul class="editorial-list">
                    <li>
                        <strong>Bring water shoes.</strong>
                        The rocks at the bottom of the pool can be slippery.
                    </li>
                    <li>
                        <strong>Bring a waterproof bag.</strong>
                        Protect your phone and valuables from the mist and water.
                    </li>
                    <li>
                        <strong>Visit early or late.</strong>
                        Mid-day can be crowded, especially during peak season.
                    </li>
                    <li>
                        <strong>Watch your step.</strong>
                        The trail to the falls can be steep and uneven.
                    </li>
                </ul>
            </section>

            <!-- FREQUENTLY ASKED QUESTIONS -->
            <section id="faq">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <div class="faq-container">
                    <details class="faq-item">
                        <summary>Is there an entrance fee?</summary>
                        <div class="faq-answer">
                            Yes, there is a small entrance fee (around ₱50) for adults. 
                            There may also be a parking fee.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>Can I swim in the falls?</summary>
                        <div class="faq-answer">
                            Yes, swimming is allowed in the pool at the base of the falls. 
                            The water is usually shallow and calm.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>How long does it take to visit?</summary>
                        <div class="faq-answer">
                            Most visitors spend about 1 to 2 hours at the falls, including 
                            the time it takes to get there and back.
                        </div>
                    </details>
                </div>
            </section>

            <!-- RELATED DESTINATIONS -->
            <section id="related-guides">
                <h2 class="section-title">Explore More Destinations</h2>
                <div class="route-guide-grid">
                    <a class="route-guide-link" href="oslob.php">Oslob Whale Sharks</a>
                    <a class="route-guide-link" href="sumilon-island.php">Sumilon Island</a>
                    <a class="route-guide-link" href="moalboal.php">Moalboal</a>
                    <a class="route-guide-link" href="../../index.php">Back to Home</a>
                </div>
            </section>

        </article>

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="sidebar-card quote-card">
                <span class="sidebar-pill">PLAN YOUR VISIT</span>
                <h3>Tumalog Falls</h3>
                <p>
                    Combine your visit to Tumalog Falls with the Oslob whale sharks 
                    for a full day of adventure.
                </p>
                <a class="button button-blue" href="https://www.google.com/maps/search/?api=1&query=Tumalog+Falls+Oslob+Cebu" target="_blank" rel="noopener noreferrer">
                    View Location ↗
                </a>
                <a class="button button-outline" href="#travel-tips">
                    Read Travel Tips
                </a>
                <p class="small-note">
                    Best visited during the dry season.
                </p>
            </div>

            <div class="sidebar-card related-guides">
                <h4>RELATED DESTINATIONS</h4>
                <div class="sidebar-routes">
                    <a class="sidebar-link" href="oslob.php">Explore Oslob →</a>
                    <a class="sidebar-link" href="sumilon-island.php">Explore Sumilon Island →</a>
                    <a class="sidebar-link" href="moalboal.php">Explore Moalboal →</a>
                </div>
            </div>
        </aside>

    </div>

</main>

<?php include '../../includes/footer.php'; ?>