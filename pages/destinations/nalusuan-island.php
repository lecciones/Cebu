<?php
$pageTitle = "Nalusuan Island | Smart Tourist Navigator";
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
        style="background-image: url('../../assets/images/nalusuan.jpg'); min-height: 400px; padding-bottom: 50px;"
    >
        <div class="hero-overlay"></div>

        <div class="hero-content" style="padding-top: 40px;">
            <span class="hero-eyebrow">SNORKELING SPOT</span>

            <h1>Nalusuan<br><em>Island.</em></h1>

            <p>
                A tiny man-made island off the coast of Mactan, famous for its 
                well-protected marine sanctuary and vibrant coral reefs.
            </p>
        </div>

        <div class="hero-caption">
            <span>Mactan, Cebu, Philippines</span>
            <span>Discover Cebu's Marine Sanctuary</span>
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
            <span class="stat-value">Mactan, Cebu</span>
            <span class="stat-desc">Just off the coast of Mactan</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">HIGHLIGHT</span>
            <span class="stat-value">Marine Sanctuary</span>
            <span class="stat-desc">Vibrant coral reefs</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">EXPERIENCE</span>
            <span class="stat-value">Snorkeling & Day Trip</span>
            <span class="stat-desc">Island resort</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">TRAVEL STYLE</span>
            <span class="stat-value">Day Trip</span>
            <span class="stat-desc">Boat ride from Mactan</span>
        </div>
    </section>

    <!-- MAIN CONTENT AND SIDEBAR -->
    <div class="destination-layout">

        <article class="main-content">

            <!-- INTRODUCTION AND MAP -->
            <section id="destination-overview">
                <h2 class="section-title">Discover Nalusuan Island</h2>

                <div class="intro-section">
                    <div class="intro-text-content">
                        <p>
                            Nalusuan Island is a tiny, man-made island resort located in the 
                            Mactan Channel, just off the coast of Mactan. Despite its small size, 
                            it is a popular destination for day trips and snorkeling.
                        </p>
                        <p>
                            The island is surrounded by a protected marine sanctuary, which has 
                            helped preserve its vibrant coral reefs and abundant marine life. 
                            This makes it one of the best snorkeling spots near Cebu City.
                        </p>
                        <p>
                            You can visit Nalusuan as a day trip, usually arranged through a 
                            local tour operator or directly at the resort's port in Mactan.
                        </p>
                    </div>

                    <div class="intro-map-wrapper">
                        <iframe
                            class="location-map"
                            title="Nalusuan Island location map"
                            src="https://www.openstreetmap.org/export/embed.html?bbox=123.980%2C10.230%2C124.020%2C10.270&layer=mapnik&marker=10.2500%2C124.0000"
                            loading="lazy"
                            style="border: 0;"
                        ></iframe>
                        <div class="map-caption">
                            <strong>Nalusuan Island</strong>
                            <p>Mactan, Cebu, Philippines</p>
                            <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Nalusuan+Island+Cebu" target="_blank" rel="noopener noreferrer">
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
                    Discover the vibrant coral reefs, the small sandy beach, and the 
                    crystal-clear waters of this marine sanctuary.
                </p>

                <div class="destination-gallery">
                    <figure>
                        <img src="../../assets/images/nalusuan.jpg" alt="Nalusuan Island" loading="lazy">
                        <figcaption>The Island Resort</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/nalusuan-beach.jpg" alt="Nalusuan beach" loading="lazy">
                        <figcaption>The Small Beach</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/nalusuan-snorkeling.jpg" alt="Snorkeling at Nalusuan" loading="lazy">
                        <figcaption>Coral Reefs</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/nalusuan-pier.jpg" alt="Nalusuan pier" loading="lazy">
                        <figcaption>The Pier</figcaption>
                    </figure>
                </div>
            </section>

            <!-- LOCAL TRAVEL TIP -->
            <div class="local-tip-alert">
                <span class="tip-icon">💡</span>
                <div>
                    <strong>LOCAL TRAVEL TIP</strong>
                    <p>
                        Bring your own snorkeling gear if you have it, as rental equipment 
                        can be limited. Also, check the tide schedule; at high tide, the 
                        small beach can be almost completely submerged.
                    </p>
                </div>
            </div>

            <!-- TRANSPORTATION GUIDE -->
            <section id="transport-guide">
                <h2 class="section-title">How to Get There</h2>
                <p>
                    Nalusuan Island is a short boat ride from Mactan. You can arrange 
                    a day trip through a local tour operator or the resort.
                </p>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon bus">🚤</span>
                        <div class="option-title-group">
                            <h3>Boat from Mactan</h3>
                            <span class="time-badge">20-30 mins</span>
                        </div>
                    </div>
                    <p>
                        Take a short outrigger boat from the Nalusuan Island Resort's 
                        port in Mactan. Transfers are usually included in the day trip package.
                    </p>
                </div>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon">🚕</span>
                        <div class="option-title-group">
                            <h3>Taxi to Mactan Port</h3>
                        </div>
                    </div>
                    <p>
                        From Cebu City or Mactan Airport, take a taxi to the resort's 
                        port area in Mactan. It is about 30-45 minutes from the city.
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
                        <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Nalusuan+Island+Cebu" target="_blank" rel="noopener noreferrer">
                            Find Nalusuan Island on Google Maps ↗
                        </a>
                    </p>
                </div>
            </section>

            <!-- THINGS TO DO -->
            <section id="things-to-do">
                <h2 class="section-title">Things to Do</h2>
                <div class="expect-grid">
                    <div class="expect-card">
                        <h3>🤿 Snorkeling</h3>
                        <p>
                            Explore the protected marine sanctuary, known for its 
                            vibrant coral gardens and abundant fish.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🏖️ Relax on the Beach</h3>
                        <p>
                            Find a spot on the small sandy beach or the wooden deck 
                            to relax and enjoy the sun.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🚶 Walk the Pier</h3>
                        <p>
                            Take a stroll along the long wooden pier that leads to the 
                            island and enjoy the views of the sea.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🍽️ Have a Picnic</h3>
                        <p>
                            Many day trip packages include lunch. Enjoy a meal by the 
                            sea while taking in the scenery.
                        </p>
                    </div>
                </div>
            </section>

            <!-- TRAVEL TIPS -->
            <section id="travel-tips">
                <h2 class="section-title">Travel Tips</h2>
                <ul class="editorial-list">
                    <li>
                        <strong>Book in advance.</strong>
                        Day trip packages can fill up, especially on weekends and holidays.
                    </li>
                    <li>
                        <strong>Bring cash.</strong>
                        There are no ATMs on the island. Bring enough cash for entrance 
                        fees, rentals, and food.
                    </li>
                    <li>
                        <strong>Use reef-safe sunscreen.</strong>
                        Protect the fragile marine sanctuary by using eco-friendly 
                        sun protection.
                    </li>
                    <li>
                        <strong>Check the weather.</strong>
                        Boat trips can be cancelled if the sea is too rough.
                    </li>
                </ul>
            </section>

            <!-- FREQUENTLY ASKED QUESTIONS -->
            <section id="faq">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <div class="faq-container">
                    <details class="faq-item">
                        <summary>Can I visit Nalusuan without staying at the resort?</summary>
                        <div class="faq-answer">
                            Yes, you can arrange a day trip package that includes round-trip 
                            boat transfers, entrance fees, and often lunch.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>How much is the day trip?</summary>
                        <div class="faq-answer">
                            Day trip packages vary, but expect to pay around ₱1,500 to ₱2,500 
                            per person, depending on the inclusions.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>Is there accommodation on the island?</summary>
                        <div class="faq-answer">
                            Yes, there is a small resort on the island that offers overnight 
                            stays, but it can be expensive.
                        </div>
                    </details>
                </div>
            </section>

            <!-- RELATED DESTINATIONS -->
            <section id="related-guides">
                <h2 class="section-title">Explore More Destinations</h2>
                <div class="route-guide-grid">
                    <a class="route-guide-link" href="moalboal.php">Moalboal</a>
                    <a class="route-guide-link" href="oslob.php">Oslob Whale Sharks</a>
                    <a class="route-guide-link" href="sumilon-island.php">Sumilon Island</a>
                    <a class="route-guide-link" href="../../index.php">Back to Home</a>
                </div>
            </section>

        </article>

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="sidebar-card quote-card">
                <span class="sidebar-pill">PLAN YOUR VISIT</span>
                <h3>Nalusuan Island</h3>
                <p>
                    Escape the city for a day and discover the vibrant underwater world 
                    of this protected marine sanctuary.
                </p>
                <a class="button button-blue" href="https://www.google.com/maps/search/?api=1&query=Nalusuan+Island+Cebu" target="_blank" rel="noopener noreferrer">
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
                    <a class="sidebar-link" href="moalboal.php">Explore Moalboal →</a>
                    <a class="sidebar-link" href="oslob.php">Explore Oslob →</a>
                    <a class="sidebar-link" href="sumilon-island.php">Explore Sumilon Island →</a>
                </div>
            </div>
        </aside>

    </div>

</main>

<?php include '../../includes/footer.php'; ?>