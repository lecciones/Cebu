<?php
$pageTitle = "Casa Gorordo | Smart Tourist Navigator";
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
        style="background-image: url('../../assets/images/gorordo.jpg'); min-height: 400px; padding-bottom: 50px;"
    >
        <div class="hero-overlay"></div>

        <div class="hero-content" style="padding-top: 40px;">
            <span class="hero-eyebrow">ANCESTRAL HOUSE</span>

            <h1>Casa<br><em>Gorordo.</em></h1>

            <p>
                A preserved 19th-century ancestral house that offers a glimpse 
                into the life and culture of a prominent Cebuano family.
            </p>
        </div>

        <div class="hero-caption">
            <span>Cebu City, Philippines</span>
            <span>Discover Cebu's Heritage</span>
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
            <span class="stat-desc">Near Colon Street</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">HIGHLIGHT</span>
            <span class="stat-value">Ancestral House</span>
            <span class="stat-desc">19th-century museum</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">EXPERIENCE</span>
            <span class="stat-value">Historical & Cultural</span>
            <span class="stat-desc">Artifacts & heritage</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">TRAVEL STYLE</span>
            <span class="stat-value">Quick Stop</span>
            <span class="stat-desc">Usually 1 hour</span>
        </div>
    </section>

    <!-- MAIN CONTENT AND SIDEBAR -->
    <div class="destination-layout">

        <article class="main-content">

            <!-- INTRODUCTION AND MAP -->
            <section id="destination-overview">
                <h2 class="section-title">Discover Casa Gorordo</h2>

                <div class="intro-section">
                    <div class="intro-text-content">
                        <p>
                            Casa Gorordo is a historic house museum located in Cebu City. 
                            It was originally the residence of the Gorordo family, a prominent 
                            Cebuano clan, and was built in the 19th century.
                        </p>
                        <p>
                            The house is a classic example of Filipino colonial architecture, 
                            featuring a mix of indigenous, Spanish, and Chinese influences. 
                            Inside, you can see original furniture, household items, and 
                            personal belongings of the family, giving you a glimpse into 
                            the life of the elite during that era.
                        </p>
                        <p>
                            The museum also hosts rotating art exhibits and cultural events. 
                            It is a peaceful and educational stop for anyone interested in 
                            Cebu's history.
                        </p>
                    </div>

                    <div class="intro-map-wrapper">
                        <iframe
                            class="location-map"
                            title="Casa Gorordo location map"
                            src="https://www.openstreetmap.org/export/embed.html?bbox=123.895%2C10.290%2C123.910%2C10.300&layer=mapnik&marker=10.2950%2C123.9020"
                            loading="lazy"
                            style="border: 0;"
                        ></iframe>
                        <div class="map-caption">
                            <strong>Casa Gorordo</strong>
                            <p>Cebu City, Philippines</p>
                            <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Casa+Gorordo+Museum+Cebu" target="_blank" rel="noopener noreferrer">
                                Open Google Maps ↗
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PHOTO GALLERY -->
            <section id="destination-gallery-section">
                <h2 class="section-title">Explore the Museum</h2>
                <p>
                    Step back in time and explore the beautifully preserved rooms, 
                    the antique furniture, and the lush courtyard of Casa Gorordo.
                </p>

                <div class="destination-gallery">
                    <figure>
                        <img src="../../assets/images/gorordo.jpg" alt="Casa Gorordo facade" loading="lazy">
                        <figcaption>The Ancestral House</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/gorordo-interior.jpg" alt="Inside Casa Gorordo" loading="lazy">
                        <figcaption>Historic Interiors</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/gorordo-courtyard.jpg" alt="Courtyard of Casa Gorordo" loading="lazy">
                        <figcaption>The Courtyard</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/gorordo-artifacts.jpg" alt="Artifacts at Casa Gorordo" loading="lazy">
                        <figcaption>Family Artifacts</figcaption>
                    </figure>
                </div>
            </section>

            <!-- LOCAL TRAVEL TIP -->
            <div class="local-tip-alert">
                <span class="tip-icon">💡</span>
                <div>
                    <strong>LOCAL TRAVEL TIP</strong>
                    <p>
                        Casa Gorordo is within walking distance of the Basilica del Santo Niño 
                        and Magellan's Cross. You can easily combine these three heritage sites 
                        into a single walking tour. Check for guided tours at the museum for 
                        a deeper understanding of the house's history.
                    </p>
                </div>
            </div>

            <!-- TRANSPORTATION GUIDE -->
            <section id="transport-guide">
                <h2 class="section-title">How to Get There</h2>
                <p>
                    Casa Gorordo is located in the historic downtown area of Cebu City, 
                    just a short walk from Colon Street.
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
                        Take a taxi or Grab to Casa Gorordo. Ask the driver to drop you at 
                        the museum entrance on Lopez Jaena Street.
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
                        Fort San Pedro or the Basilica.
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
                        <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Casa+Gorordo+Museum+Cebu" target="_blank" rel="noopener noreferrer">
                            Find Casa Gorordo on Google Maps ↗
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
                            Tour the historic rooms and see the family's original furniture, 
                            artwork, and personal belongings.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>📸 Take Photos</h3>
                        <p>
                            The colonial architecture and lush courtyard provide a beautiful 
                            backdrop for photos.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🎨 See Art Exhibits</h3>
                        <p>
                            The museum often hosts rotating art exhibits and cultural events.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>☕ Relax at the Cafe</h3>
                        <p>
                            There is a small cafe on-site where you can enjoy a drink and 
                            a snack after your tour.
                        </p>
                    </div>
                </div>
            </section>

            <!-- TRAVEL TIPS -->
            <section id="travel-tips">
                <h2 class="section-title">Travel Tips</h2>
                <ul class="editorial-list">
                    <li>
                        <strong>Check the opening hours.</strong>
                        The museum is usually open from Tuesday to Sunday, 10:00 AM to 6:00 PM.
                    </li>
                    <li>
                        <strong>Respect the artifacts.</strong>
                        Do not touch the furniture or other items on display.
                    </li>
                    <li>
                        <strong>Photography rules.</strong>
                        Photography is generally allowed, but check for any specific 
                        restrictions at the entrance.
                    </li>
                    <li>
                        <strong>Take a guided tour.</strong>
                        If available, a guided tour can provide valuable context and 
                        stories about the house.
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
                            Discounts may be available for students and seniors.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>How long does it take to visit?</summary>
                        <div class="faq-answer">
                            Most visitors spend about 1 hour exploring the museum and 
                            the courtyard.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>Is it accessible for people with disabilities?</summary>
                        <div class="faq-answer">
                            The ground floor is mostly accessible, but the upper floor 
                            requires climbing a traditional wooden staircase.
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
                    <a class="route-guide-link" href="fort-san-pedro.php">Fort San Pedro</a>
                    <a class="route-guide-link" href="../../index.php">Back to Home</a>
                </div>
            </section>

        </article>

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="sidebar-card quote-card">
                <span class="sidebar-pill">PLAN YOUR VISIT</span>
                <h3>Casa Gorordo</h3>
                <p>
                    Step back in time and explore the elegant ancestral home of one of 
                    Cebu's most prominent families.
                </p>
                <a class="button button-blue" href="https://www.google.com/maps/search/?api=1&query=Casa+Gorordo+Museum+Cebu" target="_blank" rel="noopener noreferrer">
                    View Location ↗
                </a>
                <a class="button button-outline" href="#travel-tips">
                    Read Travel Tips
                </a>
                <p class="small-note">
                    Open from Tuesday to Sunday.
                </p>
            </div>

            <div class="sidebar-card related-guides">
                <h4>RELATED DESTINATIONS</h4>
                <div class="sidebar-routes">
                    <a class="sidebar-link" href="basilica-santo-nino.php">Explore the Basilica →</a>
                    <a class="sidebar-link" href="magellans-cross.php">Explore Magellan's Cross →</a>
                    <a class="sidebar-link" href="fort-san-pedro.php">Explore Fort San Pedro →</a>
                </div>
            </div>
        </aside>

    </div>

</main>

<?php include '../../includes/footer.php'; ?>