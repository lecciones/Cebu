<?php
$pageTitle = "Fort San Pedro | Smart Tourist Navigator";
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
        style="background-image: url('../../assets/images/fort.jpg'); min-height: 400px; padding-bottom: 50px;"
    >
        <div class="hero-overlay"></div>

        <div class="hero-content" style="padding-top: 40px;">
            <span class="hero-eyebrow">HERITAGE & HISTORY</span>

            <h1>Fort San<br><em>Pedro.</em></h1>

            <p>
                A historic Spanish military fort built in 1738, now a peaceful 
                garden and museum in the heart of Cebu City.
            </p>
        </div>

        <div class="hero-caption">
            <span>Cebu City, Philippines</span>
            <span>Discover Cebu's Colonial Past</span>
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
            <span class="stat-desc">Near Pier 1, downtown</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">HIGHLIGHT</span>
            <span class="stat-value">Spanish Fort</span>
            <span class="stat-desc">Oldest triangular bastion</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">EXPERIENCE</span>
            <span class="stat-value">Historical & Gardens</span>
            <span class="stat-desc">Museum & photo spot</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">TRAVEL STYLE</span>
            <span class="stat-value">Quick Stop</span>
            <span class="stat-desc">Usually 30-60 mins</span>
        </div>
    </section>

    <!-- MAIN CONTENT AND SIDEBAR -->
    <div class="destination-layout">

        <article class="main-content">

            <!-- INTRODUCTION AND MAP -->
            <section id="destination-overview">
                <h2 class="section-title">Discover Fort San Pedro</h2>

                <div class="intro-section">
                    <div class="intro-text-content">
                        <p>
                            Fuerte de San Pedro, or Fort San Pedro, is a military defense structure 
                            built by the Spanish under the command of Miguel López de Legazpi. 
                            It is the oldest triangular bastion fort in the Philippines.
                        </p>
                        <p>
                            Originally built of wood in 1565, it was later replaced by a stone 
                            structure in 1738 to repel Muslim raiders. Over the centuries, it 
                            served as a military barracks, a prison, and even a zoo.
                        </p>
                        <p>
                            Today, it is a peaceful walled garden featuring a small museum that 
                            houses Spanish artifacts, paintings, and documents. The fort offers 
                            a quiet escape from the bustling city and beautiful views of the port.
                        </p>
                    </div>

                    <div class="intro-map-wrapper">
                        <iframe
                            class="location-map"
                            title="Fort San Pedro location map"
                            src="https://www.openstreetmap.org/export/embed.html?bbox=123.900%2C10.288%2C123.915%2C10.298&layer=mapnik&marker=10.2928%2C123.9058"
                            loading="lazy"
                            style="border: 0;"
                        ></iframe>
                        <div class="map-caption">
                            <strong>Fort San Pedro</strong>
                            <p>Cebu City, Philippines</p>
                            <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Fort+San+Pedro+Cebu" target="_blank" rel="noopener noreferrer">
                                Open Google Maps ↗
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PHOTO GALLERY -->
            <section id="destination-gallery-section">
                <h2 class="section-title">Explore the Fort</h2>
                <p>
                    Walk along the stone walls, explore the garden, and learn about 
                    Cebu's colonial history in the museum.
                </p>

                <div class="destination-gallery">
                    <figure>
                        <img src="../../assets/images/fort.jpg" alt="Fort San Pedro entrance" loading="lazy">
                        <figcaption>The Fort Entrance</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/fort-walls.jpg" alt="Stone walls of the fort" loading="lazy">
                        <figcaption>Stone Walls</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/fort-garden.jpg" alt="Garden inside the fort" loading="lazy">
                        <figcaption>Peaceful Gardens</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/fort-view.jpg" alt="View from the fort" loading="lazy">
                        <figcaption>Views from the Bastion</figcaption>
                    </figure>
                </div>
            </section>

            <!-- LOCAL TRAVEL TIP -->
            <div class="local-tip-alert">
                <span class="tip-icon">💡</span>
                <div>
                    <strong>LOCAL TRAVEL TIP</strong>
                    <p>
                        Combine your visit here with the Basilica del Santo Niño and Magellan's Cross, 
                        as they are all within walking distance. Visit in the late afternoon 
                        when the sun is less intense, making it perfect for photos.
                    </p>
                </div>
            </div>

            <!-- TRANSPORTATION GUIDE -->
            <section id="transport-guide">
                <h2 class="section-title">How to Get There</h2>
                <p>
                    Fort San Pedro is located in the downtown area, near Pier 1 and 
                    Plaza Independencia.
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
                        Take a taxi or Grab to Plaza Independencia. The entrance to the fort 
                        is right next to the plaza.
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
                        If you are visiting the Basilica or Magellan's Cross, you can easily 
                        walk to the fort in about 10 minutes.
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
                        <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Fort+San+Pedro+Cebu" target="_blank" rel="noopener noreferrer">
                            Find Fort San Pedro on Google Maps ↗
                        </a>
                    </p>
                </div>
            </section>

            <!-- THINGS TO DO -->
            <section id="things-to-do">
                <h2 class="section-title">Things to Do</h2>
                <div class="expect-grid">
                    <div class="expect-card">
                        <h3>🏛️ Explore the Museum</h3>
                        <p>
                            See the preserved Spanish artifacts, including coins, 
                            documents, and paintings inside the fort.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>📸 Walk the Walls</h3>
                        <p>
                            Climb to the top of the bastions and walk along the 
                            stone walls for a view of the city and the port.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🌳 Relax in the Garden</h3>
                        <p>
                            The central courtyard is a peaceful, shaded garden 
                            perfect for taking a break from the heat.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🏛️ Visit Plaza Independencia</h3>
                        <p>
                            The plaza right outside the fort is a historic site itself, 
                            featuring a monument to Miguel López de Legazpi.
                        </p>
                    </div>
                </div>
            </section>

            <!-- TRAVEL TIPS -->
            <section id="travel-tips">
                <h2 class="section-title">Travel Tips</h2>
                <ul class="editorial-list">
                    <li>
                        <strong>Bring an umbrella.</strong>
                        The fort is largely outdoors, so sun protection is a must.
                    </li>
                    <li>
                        <strong>Allow 1 hour.</strong>
                        The fort is not massive, but you'll want time to walk the 
                        walls and visit the museum.
                    </li>
                    <li>
                        <strong>Go on a weekday.</strong>
                        It is much quieter during the week than on weekends.
                    </li>
                    <li>
                        <strong>Look for the oldest tree.</strong>
                        There is a very old tree in the center of the courtyard 
                        that is believed to be a witness to history.
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
                            Yes, there is a small entrance fee (around ₱30) for adults. 
                            Children and seniors may have discounted rates.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>Is it wheelchair accessible?</summary>
                        <div class="faq-answer">
                            The main garden area is mostly flat, but the stone walls and 
                            museum require climbing stairs, which may be difficult 
                            for those with mobility issues.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>What are the opening hours?</summary>
                        <div class="faq-answer">
                            The fort is typically open from 8:00 AM to 10:00 PM daily.
                        </div>
                    </details>
                </div>
            </section>

            <!-- RELATED DESTINATIONS -->
            <section id="related-guides">
                <h2 class="section-title">Explore More Destinations</h2>
                <div class="route-guide-grid">
                    <a class="route-guide-link" href="basilica-santo-nino.php">Basilica del Santo Niño</a>
                    <a class="route-guide-link" href="magellans-cross.php">Magellan's Cross</a>
                    <a class="route-guide-link" href="casa-gorordo.php">Casa Gorordo</a>
                    <a class="route-guide-link" href="../../index.php">Back to Home</a>
                </div>
            </section>

        </article>

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="sidebar-card quote-card">
                <span class="sidebar-pill">PLAN YOUR VISIT</span>
                <h3>Fort San Pedro</h3>
                <p>
                    Step back in time and explore the oldest Spanish fort in the 
                    Philippines, right in the heart of Cebu City.
                </p>
                <a class="button button-blue" href="https://www.google.com/maps/search/?api=1&query=Fort+San+Pedro+Cebu" target="_blank" rel="noopener noreferrer">
                    View Location ↗
                </a>
                <a class="button button-outline" href="#travel-tips">
                    Read Travel Tips
                </a>
                <p class="small-note">
                    Open daily from 8:00 AM.
                </p>
            </div>

            <div class="sidebar-card related-guides">
                <h4>RELATED DESTINATIONS</h4>
                <div class="sidebar-routes">
                    <a class="sidebar-link" href="basilica-santo-nino.php">Explore the Basilica →</a>
                    <a class="sidebar-link" href="magellans-cross.php">Explore Magellan's Cross →</a>
                    <a class="sidebar-link" href="casa-gorordo.php">Explore Casa Gorordo →</a>
                </div>
            </div>
        </aside>

    </div>

</main>

<?php include '../../includes/footer.php'; ?>