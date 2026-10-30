<?php
$pageTitle = "Magellan's Cross | Smart Tourist Navigator";
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
        style="background-image: url('../../assets/images/magellan.jpg'); min-height: 400px; padding-bottom: 50px;"
    >
        <div class="hero-overlay"></div>

        <div class="hero-content" style="padding-top: 40px;">
            <span class="hero-eyebrow">HISTORY & HERITAGE</span>

            <h1>Magellan's<br><em>Cross.</em></h1>

            <p>
                A historic landmark planted by Ferdinand Magellan in 1521, 
                symbolizing the birth of Christianity in the Philippines.
            </p>
        </div>

        <div class="hero-caption">
            <span>Cebu City, Philippines</span>
            <span>Discover Cebu's Rich History</span>
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
            <span class="stat-value">Cebu City</span>
            <span class="stat-desc">Beside the Basilica del Santo Niño</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">HIGHLIGHT</span>
            <span class="stat-value">Historic Landmark</span>
            <span class="stat-desc">Planted in 1521</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">EXPERIENCE</span>
            <span class="stat-value">Cultural & Religious</span>
            <span class="stat-desc">A symbol of faith</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">TRAVEL STYLE</span>
            <span class="stat-value">Quick Stop</span>
            <span class="stat-desc">Usually 15-30 mins</span>
        </div>
    </section>

    <!-- MAIN CONTENT AND SIDEBAR -->
    <div class="destination-layout">

        <article class="main-content">

            <!-- INTRODUCTION AND MAP -->
            <section id="destination-overview">
                <h2 class="section-title">Discover Magellan's Cross</h2>

                <div class="intro-section">
                    <div class="intro-text-content">
                        <p>
                            Magellan's Cross is a Christian cross planted by Portuguese and Spanish 
                            explorers, as ordered by Ferdinand Magellan, upon arriving in Cebu 
                            in the Philippines on April 21, 1521.
                        </p>
                        <p>
                            The original cross is encased in another wooden cross (made of tindalo wood) 
                            to protect it from people who chipped away pieces of the original as 
                            souvenirs, believing it to have miraculous powers.
                        </p>
                        <p>
                            The cross is housed in a small chapel right next to the Basilica Minore 
                            del Santo Niño. The ceiling of the chapel features a beautiful mural 
                            depicting the baptism of Rajah Humabon and his wife, Queen Juana.
                        </p>
                    </div>

                    <div class="intro-map-wrapper">
                        <iframe
                            class="location-map"
                            title="Magellan's Cross location map"
                            src="https://www.openstreetmap.org/export/embed.html?bbox=123.890%2C10.285%2C123.910%2C10.300&layer=mapnik&marker=10.2936%2C123.8995"
                            loading="lazy"
                            style="border: 0;"
                        ></iframe>
                        <div class="map-caption">
                            <strong>Magellan's Cross</strong>
                            <p>Cebu City, Philippines</p>
                            <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Magellans+Cross+Cebu" target="_blank" rel="noopener noreferrer">
                                Open Google Maps ↗
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PHOTO GALLERY -->
            <section id="destination-gallery-section">
                <h2 class="section-title">Explore the Landmark</h2>
                <p>
                    See the historic cross, the beautiful chapel ceiling, and the surrounding 
                    Plaza Sugbo.
                </p>

                <div class="destination-gallery">
                    <figure>
                        <img src="../../assets/images/magellan.jpg" alt="Magellan's Cross" loading="lazy">
                        <figcaption>The Historic Cross</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/magellan-chapel.jpg" alt="The chapel housing the cross" loading="lazy">
                        <figcaption>The Chapel</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/magellan-ceiling.jpg" alt="Mural on the chapel ceiling" loading="lazy">
                        <figcaption>Ceiling Mural</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/magellan-plaza.jpg" alt="Plaza Sugbo" loading="lazy">
                        <figcaption>Plaza Sugbo</figcaption>
                    </figure>
                </div>
            </section>

            <!-- LOCAL TRAVEL TIP -->
            <div class="local-tip-alert">
                <span class="tip-icon">💡</span>
                <div>
                    <strong>LOCAL TRAVEL TIP</strong>
                    <p>
                        Combine your visit here with the Basilica del Santo Niño and Fort San Pedro, 
                        as they are all within walking distance of each other. Be prepared for 
                        crowds and vendors selling candles and souvenirs outside.
                    </p>
                </div>
            </div>

            <!-- TRANSPORTATION GUIDE -->
            <section id="transport-guide">
                <h2 class="section-title">How to Get There</h2>
                <p>
                    Magellan's Cross is located in the heart of downtown Cebu City, 
                    right next to the Basilica.
                </p>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon bus">🚕</span>
                        <div class="option-title-group">
                            <h3>Taxi or Ride-Hailing</h3>
                            <span class="time-badge">15-30 min</span>
                        </div>
                    </div>
                    <p>
                        Take a taxi or Grab to the Basilica del Santo Niño. The cross is 
                        located immediately to the left of the church entrance.
                    </p>
                </div>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon">🚶</span>
                        <div class="option-title-group">
                            <h3>Walking Tour</h3>
                        </div>
                    </div>
                    <p>
                        If you are exploring downtown Cebu, you can easily walk here from 
                        Fort San Pedro or Colon Street.
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
                        <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Magellans+Cross+Cebu" target="_blank" rel="noopener noreferrer">
                            Find Magellan's Cross on Google Maps ↗
                        </a>
                    </p>
                </div>
            </section>

            <!-- THINGS TO DO -->
            <section id="things-to-do">
                <h2 class="section-title">Things to Do</h2>
                <div class="expect-grid">
                    <div class="expect-card">
                        <h3>🕯️ Light a Candle</h3>
                        <p>
                            Purchase a candle from the vendors outside and light it while 
                            saying a prayer.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>📸 Admire the Ceiling</h3>
                        <p>
                            Look up to see the vibrant mural depicting the baptism of the 
                            first Cebuano Christians.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>⛪ Visit the Basilica</h3>
                        <p>
                            Walk next door to explore the oldest church in the Philippines.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🏛️ Explore the Plaza</h3>
                        <p>
                            Take a stroll around Plaza Sugbo and see the historic Cebu City Hall.
                        </p>
                    </div>
                </div>
            </section>

            <!-- TRAVEL TIPS -->
            <section id="travel-tips">
                <h2 class="section-title">Travel Tips</h2>
                <ul class="editorial-list">
                    <li>
                        <strong>Go early or late.</strong>
                        Mid-day can be extremely hot and crowded with tour groups.
                    </li>
                    <li>
                        <strong>Watch your belongings.</strong>
                        The area is busy, so keep your phones and wallets secure.
                    </li>
                    <li>
                        <strong>Respect the site.</strong>
                        It is a religious monument, so behave respectfully and 
                        dress appropriately.
                    </li>
                    <li>
                        <strong>Be wary of unofficial guides.</strong>
                        You do not need a guide to see the cross; you can simply walk in.
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
                            No, entrance is free. You only pay if you choose to buy candles 
                            from the vendors.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>Is this the original cross?</summary>
                        <div class="faq-answer">
                            The original cross is encased inside the wooden cross you see today. 
                            It was encased to protect it from people taking pieces as souvenirs.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>How long does it take to visit?</summary>
                        <div class="faq-answer">
                            Most people spend about 15 to 30 minutes here, taking photos and 
                            lighting a candle. It is a quick stop.
                        </div>
                    </details>
                </div>
            </section>

            <!-- RELATED DESTINATIONS -->
            <section id="related-guides">
                <h2 class="section-title">Explore More Destinations</h2>
                <div class="route-guide-grid">
                    <a class="route-guide-link" href="basilica-santo-nino.php">Basilica del Santo Niño</a>
                    <a class="route-guide-link" href="fort-san-pedro.php">Fort San Pedro</a>
                    <a class="route-guide-link" href="casa-gorordo.php">Casa Gorordo</a>
                    <a class="route-guide-link" href="../../index.php">Back to Home</a>
                </div>
            </section>

        </article>

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="sidebar-card quote-card">
                <span class="sidebar-pill">PLAN YOUR VISIT</span>
                <h3>Magellan's Cross</h3>
                <p>
                    Step back in time at the birthplace of Christianity in the Philippines. 
                    A must-see for any history enthusiast.
                </p>
                <a class="button button-blue" href="https://www.google.com/maps/search/?api=1&query=Magellans+Cross+Cebu" target="_blank" rel="noopener noreferrer">
                    View Location ↗
                </a>
                <a class="button button-outline" href="#travel-tips">
                    Read Travel Tips
                </a>
                <p class="small-note">
                    Open daily. Best visited early in the morning.
                </p>
            </div>

            <div class="sidebar-card related-guides">
                <h4>RELATED DESTINATIONS</h4>
                <div class="sidebar-routes">
                    <a class="sidebar-link" href="basilica-santo-nino.php">Explore the Basilica →</a>
                    <a class="sidebar-link" href="fort-san-pedro.php">Explore Fort San Pedro →</a>
                    <a class="sidebar-link" href="casa-gorordo.php">Explore Casa Gorordo →</a>
                </div>
            </div>
        </aside>

    </div>

</main>

<?php include '../../includes/footer.php'; ?>