<?php
$pageTitle = "Sumilon Island | Smart Tourist Navigator";
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
        style="background-image: url('../../assets/images/sumilon.jpg'); min-height: 400px; padding-bottom: 50px;"
    >
        <div class="hero-overlay"></div>

        <div class="hero-content" style="padding-top: 40px;">
            <span class="hero-eyebrow">BEACH & SANDBAR</span>

            <h1>Sumilon<br><em>Island.</em></h1>

            <p>
                A tiny paradise off the coast of Oslob, famous for its shifting 
                white sandbar and crystal-clear marine sanctuary.
            </p>
        </div>

        <div class="hero-caption">
            <span>Oslob, Cebu, Philippines</span>
            <span>Discover Cebu's Sandbar Paradise</span>
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
            <span class="stat-desc">Just off the coast of Oslob</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">HIGHLIGHT</span>
            <span class="stat-value">Shifting Sandbar</span>
            <span class="stat-desc">White sand & clear water</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">EXPERIENCE</span>
            <span class="stat-value">Snorkeling & Beach</span>
            <span class="stat-desc">Marine sanctuary</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">TRAVEL STYLE</span>
            <span class="stat-value">Day Trip</span>
            <span class="stat-desc">Boat ride from Oslob</span>
        </div>
    </section>

    <!-- MAIN CONTENT AND SIDEBAR -->
    <div class="destination-layout">

        <article class="main-content">

            <!-- INTRODUCTION AND MAP -->
            <section id="destination-overview">
                <h2 class="section-title">Discover Sumilon Island</h2>

                <div class="intro-section">
                    <div class="intro-text-content">
                        <p>
                            Sumilon Island is a 24-hectare coral island located off the 
                            southeastern tip of Cebu in Oslob. It is best known for its 
                            shifting sandbar—a stretch of white sand that changes shape 
                            depending on the tide and the season.
                        </p>
                        <p>
                            The island is also a protected marine sanctuary, making it a 
                            fantastic spot for snorkeling and diving. The waters around 
                            the island are teeming with vibrant coral and diverse marine life.
                        </p>
                        <p>
                            You don't need to stay at the luxury resort (Bluewater Sumilon) 
                            to visit. Day-trippers can take a short boat ride from the 
                            mainland to enjoy the sandbar and snorkeling area.
                        </p>
                    </div>

                    <div class="intro-map-wrapper">
                        <iframe
                            class="location-map"
                            title="Sumilon Island location map"
                            src="https://www.openstreetmap.org/export/embed.html?bbox=123.400%2C9.450%2C123.430%2C9.480&layer=mapnik&marker=9.4667%2C123.4167"
                            loading="lazy"
                            style="border: 0;"
                        ></iframe>
                        <div class="map-caption">
                            <strong>Sumilon Island</strong>
                            <p>Oslob, Cebu, Philippines</p>
                            <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Sumilon+Island+Oslob+Cebu" target="_blank" rel="noopener noreferrer">
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
                    From the shifting white sandbar to the vibrant coral reefs, 
                    see what makes Sumilon Island a must-visit.
                </p>

                <div class="destination-gallery">
                    <figure>
                        <img src="../../assets/images/sumilon.jpg" alt="Sumilon Island sandbar" loading="lazy">
                        <figcaption>The Shifting Sandbar</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/sumilon-beach.jpg" alt="White sand beach" loading="lazy">
                        <figcaption>White Sand Beach</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/sumilon-snorkeling.jpg" alt="Snorkeling at Sumilon" loading="lazy">
                        <figcaption>Marine Sanctuary</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/sumilon-lagoon.jpg" alt="Lagoon at Sumilon" loading="lazy">
                        <figcaption>The Lagoon</figcaption>
                    </figure>
                </div>
            </section>

            <!-- LOCAL TRAVEL TIP -->
            <div class="local-tip-alert">
                <span class="tip-icon">💡</span>
                <div>
                    <strong>LOCAL TRAVEL TIP</strong>
                    <p>
                        The sandbar is best viewed during low tide. Check the tide schedule 
                        before you go, or ask your boatman—they know exactly when the 
                        sandbar will be at its widest. Bring reef-safe sunscreen!
                    </p>
                </div>
            </div>

            <!-- TRANSPORTATION GUIDE -->
            <section id="transport-guide">
                <h2 class="section-title">How to Get There</h2>
                <p>
                    Sumilon Island is a short boat ride from the mainland. Most 
                    travelers access it from the Sumilon Bluewater Resort port in Oslob.
                </p>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon bus">🚤</span>
                        <div class="option-title-group">
                            <h3>Boat from Oslob</h3>
                            <span class="time-badge">10-15 mins</span>
                        </div>
                    </div>
                    <p>
                        From the mainland, take a short bangka (outrigger boat) to the island. 
                        If you are not staying at the resort, you can arrange a day trip 
                        boat at the port.
                    </p>
                </div>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon">🚌</span>
                        <div class="option-title-group">
                            <h3>Bus to Oslob</h3>
                        </div>
                    </div>
                    <p>
                        From Cebu South Bus Terminal, take a Ceres bus bound for Bato via Oslob 
                        and get off at the Sumilon port (near the whale shark area).
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
                        <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Sumilon+Island+Oslob+Cebu" target="_blank" rel="noopener noreferrer">
                            Find Sumilon Island on Google Maps ↗
                        </a>
                    </p>
                </div>
            </section>

            <!-- THINGS TO DO -->
            <section id="things-to-do">
                <h2 class="section-title">Things to Do</h2>
                <div class="expect-grid">
                    <div class="expect-card">
                        <h3>🏖️ Walk the Sandbar</h3>
                        <p>
                            Take a stroll along the shifting white sandbar and snap 
                            photos of the stunning scenery.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🤿 Snorkeling</h3>
                        <p>
                            Explore the protected marine sanctuary, known for its 
                            vibrant coral gardens and abundant fish.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🚶 Island Trekking</h3>
                        <p>
                            Follow the short hiking trails around the island to see 
                            the lighthouse and the lagoon.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>⛱️ Relax on the Beach</h3>
                        <p>
                            Rent a cottage or find a quiet spot on the sand to relax 
                            and enjoy the sun.
                        </p>
                    </div>
                </div>
            </section>

            <!-- TRAVEL TIPS -->
            <section id="travel-tips">
                <h2 class="section-title">Travel Tips</h2>
                <ul class="editorial-list">
                    <li>
                        <strong>Check the tides.</strong>
                        The sandbar is only fully visible during low tide. Plan your 
                        trip accordingly.
                    </li>
                    <li>
                        <strong>Bring cash.</strong>
                        There are no ATMs on the island. Bring enough cash for boat 
                        fees, entrance fees, and food.
                    </li>
                    <li>
                        <strong>Use reef-safe sunscreen.</strong>
                        Protect the fragile marine sanctuary by using eco-friendly 
                        sun protection.
                    </li>
                    <li>
                        <strong>Day trip vs. Overnight.</strong>
                        The island is home to a luxury resort. If you want access to 
                        resort facilities, you may need to book a day pass in advance.
                    </li>
                </ul>
            </section>

            <!-- FREQUENTLY ASKED QUESTIONS -->
            <section id="faq">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <div class="faq-container">
                    <details class="faq-item">
                        <summary>Can I visit Sumilon without staying at the resort?</summary>
                        <div class="faq-answer">
                            Yes, you can arrange a boat trip from the mainland to visit 
                            the sandbar and snorkeling area. However, access to the resort's 
                            amenities requires a day pass.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>How much is the boat ride?</summary>
                        <div class="faq-answer">
                            Boat rides are usually arranged per group. Expect to pay around 
                            ₱1,000 to ₱1,500 for a round-trip boat ride for a small group.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>Is there food on the island?</summary>
                        <div class="faq-answer">
                            There are restaurants at the resort, but if you are just visiting 
                            the sandbar, it is best to bring your own snacks and water.
                        </div>
                    </details>
                </div>
            </section>

            <!-- RELATED DESTINATIONS -->
            <section id="related-guides">
                <h2 class="section-title">Explore More Destinations</h2>
                <div class="route-guide-grid">
                    <a class="route-guide-link" href="oslob.php">Oslob Whale Sharks</a>
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
                <h3>Sumilon Island</h3>
                <p>
                    Escape to this pristine sandbar and marine sanctuary. 
                    Perfect for a relaxing day trip from Oslob.
                </p>
                <a class="button button-blue" href="https://www.google.com/maps/search/?api=1&query=Sumilon+Island+Oslob+Cebu" target="_blank" rel="noopener noreferrer">
                    View Location ↗
                </a>
                <a class="button button-outline" href="#travel-tips">
                    Read Travel Tips
                </a>
                <p class="small-note">
                    Best visited during low tide.
                </p>
            </div>

            <div class="sidebar-card related-guides">
                <h4>RELATED DESTINATIONS</h4>
                <div class="sidebar-routes">
                    <a class="sidebar-link" href="oslob.php">Explore Oslob →</a>
                    <a class="sidebar-link" href="tumalog-falls.php">Explore Tumalog Falls →</a>
                    <a class="sidebar-link" href="moalboal.php">Explore Moalboal →</a>
                </div>
            </div>
        </aside>

    </div>

</main>

<?php include '../../includes/footer.php'; ?>