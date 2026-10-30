<?php
$pageTitle = "Osmeña Peak | Smart Tourist Navigator";
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
        style="background-image: url('../../assets/images/osmena.jpg'); min-height: 400px; padding-bottom: 50px;"
    >
        <div class="hero-overlay"></div>

        <div class="hero-content" style="padding-top: 40px;">
            <span class="hero-eyebrow">MOUNTAIN PEAK</span>

            <h1>Osmeña<br><em>Peak.</em></h1>

            <p>
                Cebu's highest point, offering dramatic views of rolling hills 
                and the sea at sunrise.
            </p>
        </div>

        <div class="hero-caption">
            <span>Dalaguete, Cebu, Philippines</span>
            <span>Discover Cebu's Highest Peak</span>
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
            <span class="stat-value">Dalaguete, Cebu</span>
            <span class="stat-desc">Southern Cebu</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">HIGHLIGHT</span>
            <span class="stat-value">Mountain Peak</span>
            <span class="stat-desc">1,013 meters above sea level</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">EXPERIENCE</span>
            <span class="stat-value">Hiking & Sunrise</span>
            <span class="stat-desc">Outdoor adventure</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">BEST TIME</span>
            <span class="stat-value">Early Morning</span>
            <span class="stat-desc">4:00 AM – 6:00 AM</span>
        </div>
    </section>

    <!-- MAIN CONTENT AND SIDEBAR -->
    <div class="destination-layout">

        <article class="main-content">

            <!-- INTRODUCTION AND MAP -->
            <section id="destination-overview">
                <h2 class="section-title">Discover Osmeña Peak</h2>

                <div class="intro-section">
                    <div class="intro-text-content">
                        <p>
                            Osmeña Peak is the highest mountain in Cebu, standing at 1,013 meters 
                            above sea level. It is located in the town of Dalaguete, about 2.5 to 
                            3 hours from Cebu City.
                        </p>
                        <p>
                            The peak is famous for its unique landscape of rolling, jagged hills 
                            that resemble the Chocolate Hills of Bohol. From the summit, you can 
                            see a stunning panorama of the coastline and the sea.
                        </p>
                        <p>
                            The hike to the peak is relatively easy, usually taking about 15 to 20 
                            minutes from the jump-off point. Many visitors come here for sunrise 
                            or sunset, camping, and photography.
                        </p>
                    </div>

                    <div class="intro-map-wrapper">
                        <iframe
                            class="location-map"
                            title="Osmeña Peak location map"
                            src="https://www.openstreetmap.org/export/embed.html?bbox=123.500%2C9.830%2C123.530%2C9.860&layer=mapnik&marker=9.8500%2C123.5167"
                            loading="lazy"
                            style="border: 0;"
                        ></iframe>
                        <div class="map-caption">
                            <strong>Osmeña Peak</strong>
                            <p>Dalaguete, Cebu, Philippines</p>
                            <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Osmena+Peak+Cebu" target="_blank" rel="noopener noreferrer">
                                Open Google Maps ↗
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PHOTO GALLERY -->
            <section id="destination-gallery-section">
                <h2 class="section-title">Explore the Peak</h2>
                <p>
                    See the jagged hills, the sea of clouds, and the stunning 
                    views from Cebu's highest point.
                </p>

                <div class="destination-gallery">
                    <figure>
                        <img src="../../assets/images/osmena.jpg" alt="Osmeña Peak" loading="lazy">
                        <figcaption>The Jagged Hills</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/osmena-sunrise.jpg" alt="Sunrise at Osmeña Peak" loading="lazy">
                        <figcaption>Sunrise Views</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/osmena-camp.jpg" alt="Camping at Osmeña Peak" loading="lazy">
                        <figcaption>Camping Grounds</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/osmena-trail.jpg" alt="Trail to Osmeña Peak" loading="lazy">
                        <figcaption>The Hiking Trail</figcaption>
                    </figure>
                </div>
            </section>

            <!-- LOCAL TRAVEL TIP -->
            <div class="local-tip-alert">
                <span class="tip-icon">💡</span>
                <div>
                    <strong>LOCAL TRAVEL TIP</strong>
                    <p>
                        The temperature at the peak can be quite cold and windy, especially 
                        before sunrise. Bring a jacket or a light blanket. Also, be prepared 
                        for muddy trails if it has rained recently.
                    </p>
                </div>
            </div>

            <!-- TRANSPORTATION GUIDE -->
            <section id="transport-guide">
                <h2 class="section-title">How to Get There</h2>
                <p>
                    Osmeña Peak is about 2.5 to 3 hours from Cebu City. The most common 
                    route is via the Cebu South Bus Terminal.
                </p>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon bus">🚌</span>
                        <div class="option-title-group">
                            <h3>Bus to Dalaguete</h3>
                            <span class="time-badge">2.5 - 3 hrs</span>
                        </div>
                    </div>
                    <p>
                        From Cebu South Bus Terminal, take a Ceres bus bound for Bato via 
                        Dalaguete or Oslob. Ask the conductor to drop you at the 
                        Dalaguete junction (Mantalongon).
                    </p>
                </div>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon">🛵</span>
                        <div class="option-title-group">
                            <h3>Habal-Habal to Jump-off</h3>
                        </div>
                    </div>
                    <p>
                        From the Dalaguete junction, take a habal-habal (motorcycle taxi) 
                        to the Osmeña Peak jump-off point. It's about a 30-minute ride.
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
                        <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Osmena+Peak+Cebu" target="_blank" rel="noopener noreferrer">
                            Find Osmeña Peak on Google Maps ↗
                        </a>
                    </p>
                </div>
            </section>

            <!-- THINGS TO DO -->
            <section id="things-to-do">
                <h2 class="section-title">Things to Do</h2>
                <div class="expect-grid">
                    <div class="expect-card">
                        <h3>🌅 Watch the Sunrise</h3>
                        <p>
                            Hike up before dawn to catch the spectacular sunrise over 
                            the hills and the sea.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>📸 Take Photos</h3>
                        <p>
                            The jagged hills and dramatic clouds make Osmeña Peak a 
                            photographer's paradise.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>⛺ Go Camping</h3>
                        <p>
                            Pitch a tent at the designated camping area and spend the 
                            night under the stars.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🥾 Hike the Trails</h3>
                        <p>
                            Explore the surrounding trails that connect to other peaks 
                            and nearby waterfalls.
                        </p>
                    </div>
                </div>
            </section>

            <!-- TRAVEL TIPS -->
            <section id="travel-tips">
                <h2 class="section-title">Travel Tips</h2>
                <ul class="editorial-list">
                    <li>
                        <strong>Bring a jacket.</strong>
                        It can get very cold and windy at the peak, especially in the 
                        early morning.
                    </li>
                    <li>
                        <strong>Wear proper footwear.</strong>
                        The trail can be rocky and muddy. Wear shoes with good grip.
                    </li>
                    <li>
                        <strong>Bring cash.</strong>
                        There are no ATMs near the jump-off point. Bring cash for 
                        entrance fees, habal-habal fares, and food.
                    </li>
                    <li>
                        <strong>Leave no trace.</strong>
                        Take your rubbish with you and respect the local environment.
                    </li>
                </ul>
            </section>

            <!-- FREQUENTLY ASKED QUESTIONS -->
            <section id="faq">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <div class="faq-container">
                    <details class="faq-item">
                        <summary>How difficult is the hike?</summary>
                        <div class="faq-answer">
                            The hike is relatively easy, taking about 15 to 20 minutes 
                            from the jump-off point. It is suitable for beginners.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>Is there an entrance fee?</summary>
                        <div class="faq-answer">
                            Yes, there is a small entrance fee (around ₱50) for adults. 
                            There may also be a camping fee if you stay overnight.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>What is the best time to visit?</summary>
                        <div class="faq-answer">
                            The best time to visit is during the dry season, from December 
                            to May. For the clearest views, go early in the morning.
                        </div>
                    </details>
                </div>
            </section>

            <!-- RELATED DESTINATIONS -->
            <section id="related-guides">
                <h2 class="section-title">Explore More Destinations</h2>
                <div class="route-guide-grid">
                    <a class="route-guide-link" href="kawasan-falls.php">Kawasan Falls</a>
                    <a class="route-guide-link" href="moalboal.php">Moalboal</a>
                    <a class="route-guide-link" href="oslob.php">Oslob Whale Sharks</a>
                    <a class="route-guide-link" href="../../index.php">Back to Home</a>
                </div>
            </section>

        </article>

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="sidebar-card quote-card">
                <span class="sidebar-pill">PLAN YOUR VISIT</span>
                <h3>Osmeña Peak</h3>
                <p>
                    Experience the highest point in Cebu and witness the breathtaking 
                    sunrise over the jagged hills.
                </p>
                <a class="button button-blue" href="https://www.google.com/maps/search/?api=1&query=Osmena+Peak+Cebu" target="_blank" rel="noopener noreferrer">
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
                    <a class="sidebar-link" href="kawasan-falls.php">Explore Kawasan Falls →</a>
                    <a class="sidebar-link" href="moalboal.php">Explore Moalboal →</a>
                    <a class="sidebar-link" href="oslob.php">Explore Oslob →</a>
                </div>
            </div>
        </aside>

    </div>

</main>

<?php include '../../includes/footer.php'; ?>