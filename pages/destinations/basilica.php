<?php
$pageTitle = "Basilica del Santo Niño | Smart Tourist Navigator";
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
        style="background-image: url('../../assets/images/basilica.jpg'); min-height: 400px; padding-bottom: 50px;"
    >
        <div class="hero-overlay"></div>

        <div class="hero-content" style="padding-top: 40px;">
            <span class="hero-eyebrow">HERITAGE & FAITH</span>

            <h1>Basilica del<br><em>Santo Niño.</em></h1>

            <p>
                The oldest Roman Catholic church in the Philippines, 
                home to the revered Santo Niño statue and a cornerstone of Cebuano faith.
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
            <span class="stat-desc">Downtown, near Magellan's Cross</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">HIGHLIGHT</span>
            <span class="stat-value">Oldest Church</span>
            <span class="stat-desc">Established in 1565</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">EXPERIENCE</span>
            <span class="stat-value">Historical & Religious</span>
            <span class="stat-desc">Pilgrimage site</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">TRAVEL STYLE</span>
            <span class="stat-value">Cultural Trip</span>
            <span class="stat-desc">Sightseeing & reflection</span>
        </div>
    </section>

    <!-- MAIN CONTENT AND SIDEBAR -->
    <div class="destination-layout">

        <article class="main-content">

            <!-- INTRODUCTION AND MAP -->
            <section id="destination-overview">
                <h2 class="section-title">Discover the Basilica</h2>

                <div class="intro-section">
                    <div class="intro-text-content">
                        <p>
                            The Basilica Minore del Santo Niño de Cebú is a minor basilica 
                            in Cebu City dedicated to the Santo Niño (Holy Child Jesus). 
                            It is the oldest Roman Catholic church established in the Philippines, 
                            founded in 1565.
                        </p>
                        <p>
                            The basilica houses the image of the Santo Niño, a gift from 
                            Ferdinand Magellan to Rajah Humabon's wife, Queen Juana, upon their 
                            baptism in 1521. Today, it is a major pilgrimage site and the 
                            center of the annual Sinulog Festival.
                        </p>
                        <p>
                            Visitors can attend mass, light a candle in the outdoor candle 
                            lighting area, or visit the small museum that houses religious 
                            artifacts and historical items.
                        </p>
                    </div>

                    <div class="intro-map-wrapper">
                        <iframe
                            class="location-map"
                            title="Basilica del Santo Niño location map"
                            src="https://www.openstreetmap.org/export/embed.html?bbox=123.895%2C10.288%2C123.915%2C10.300&layer=mapnik&marker=10.2946%2C123.9024"
                            loading="lazy"
                            style="border: 0;"
                        ></iframe>
                        <div class="map-caption">
                            <strong>Basilica del Santo Niño</strong>
                            <p>Cebu City, Philippines</p>
                            <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Basilica+del+Santo+Nino+Cebu" target="_blank" rel="noopener noreferrer">
                                Open Google Maps ↗
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PHOTO GALLERY -->
            <section id="destination-gallery-section">
                <h2 class="section-title">Explore the Heritage</h2>
                <p>
                    Take a visual journey through the basilica's historic facade, 
                    its sacred interiors, and the surrounding plaza.
                </p>

                <div class="destination-gallery">
                    <figure>
                        <img src="../../assets/images/basilica.jpg" alt="Basilica facade" loading="lazy">
                        <figcaption>The Historic Facade</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/basilica-interior.jpg" alt="Inside the Basilica" loading="lazy">
                        <figcaption>Sacred Interiors</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/basilica-santonino.jpg" alt="The Santo Niño statue" loading="lazy">
                        <figcaption>The Santo Niño</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/basilica-plaza.jpg" alt="The Basilica plaza" loading="lazy">
                        <figcaption>The Pilgrim Plaza</figcaption>
                    </figure>
                </div>
            </section>

            <!-- LOCAL TRAVEL TIP -->
            <div class="local-tip-alert">
                <span class="tip-icon">💡</span>
                <div>
                    <strong>LOCAL TRAVEL TIP</strong>
                    <p>
                        Dress respectfully. As this is an active place of worship, avoid 
                        wearing shorts, tank tops, or revealing clothing. If you plan to 
                        attend mass, arrive early as the church fills up quickly, especially 
                        on Sundays and during the Sinulog Festival in January.
                    </p>
                </div>
            </div>

            <!-- TRANSPORTATION GUIDE -->
            <section id="transport-guide">
                <h2 class="section-title">How to Get There</h2>
                <p>
                    The Basilica is located in the heart of downtown Cebu City, 
                    very close to Magellan's Cross and Fort San Pedro.
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
                        From most hotels in Cebu City, take a taxi or Grab to the 
                        Basilica. Ask the driver to drop you at the Plaza Sugbo, just 
                        outside the church gates.
                    </p>
                </div>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon">🚌</span>
                        <div class="option-title-group">
                            <h3>Jeepney</h3>
                        </div>
                    </div>
                    <p>
                        Take a jeepney bound for "Colon" or "Carbon" and get off near 
                        the Basilica. It's a short walk from the main road.
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
                        <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Basilica+del+Santo+Nino+Cebu" target="_blank" rel="noopener noreferrer">
                            Find the Basilica on Google Maps ↗
                        </a>
                    </p>
                </div>
            </section>

            <!-- THINGS TO DO -->
            <section id="things-to-do">
                <h2 class="section-title">Things to Do</h2>
                <div class="expect-grid">
                    <div class="expect-card">
                        <h3>🙏 Attend a Mass</h3>
                        <p>
                            Join the local Catholic community in a mass. The schedule is 
                            posted at the entrance.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🕯️ Light a Candle</h3>
                        <p>
                            Visit the outdoor candle lighting area to offer a prayer 
                            and light a candle for your intentions.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>📜 Visit the Museum</h3>
                        <p>
                            Explore the small museum that displays historical artifacts 
                            and religious vestments.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>⛪ Explore Nearby Sites</h3>
                        <p>
                            The Basilica is steps away from Magellan's Cross and a short 
                            walk from Fort San Pedro.
                        </p>
                    </div>
                </div>
            </section>

            <!-- TRAVEL TIPS -->
            <section id="travel-tips">
                <h2 class="section-title">Travel Tips</h2>
                <ul class="editorial-list">
                    <li>
                        <strong>Watch your belongings.</strong>
                        The area is crowded, especially on weekends, so keep an eye 
                        on your valuables.
                    </li>
                    <li>
                        <strong>Dress code.</strong>
                        Respectful clothing is required (no short shorts, sleeveless tops, or 
                        hats inside the church).
                    </li>
                    <li>
                        <strong>Stay for the Sinulog.</strong>
                        If you visit in January, experience the vibrant Sinulog Festival 
                        celebrated in honor of the Santo Niño.
                    </li>
                    <li>
                        <strong>Try local snacks.</strong>
                        Vendors outside the basilica sell local delicacies like 
                        bibingka and puto.
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
                            No, entrance to the church is free. However, donations for 
                            candle lighting and the museum are welcome.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>Can I take photos inside?</summary>
                        <div class="faq-answer">
                            Photography is generally allowed, but be respectful. Avoid using 
                            flash during mass and never block the aisles.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>What are the opening hours?</summary>
                        <div class="faq-answer">
                            The church is usually open from 5:00 AM to 8:00 PM daily. 
                            The museum has shorter hours, usually from 8:00 AM to 12:00 PM 
                            and 1:00 PM to 5:00 PM.
                        </div>
                    </details>
                </div>
            </section>

            <!-- RELATED DESTINATIONS -->
            <section id="related-guides">
                <h2 class="section-title">Explore More Destinations</h2>
                <div class="route-guide-grid">
                    <a class="route-guide-link" href="magellans-cross.php">Magellan's Cross</a>
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
                <h3>Basilica del Santo Niño</h3>
                <p>
                    Experience the spiritual heart of Cebu. Plan your visit to avoid 
                    the crowds and ensure a respectful experience.
                </p>
                <a class="button button-blue" href="https://www.google.com/maps/search/?api=1&query=Basilica+del+Santo+Nino+Cebu" target="_blank" rel="noopener noreferrer">
                    View Location ↗
                </a>
                <a class="button button-outline" href="#travel-tips">
                    Read Travel Tips
                </a>
                <p class="small-note">
                    Confirm current mass schedules before traveling.
                </p>
            </div>

            <div class="sidebar-card related-guides">
                <h4>RELATED DESTINATIONS</h4>
                <div class="sidebar-routes">
                    <a class="sidebar-link" href="magellans-cross.php">Explore Magellan's Cross →</a>
                    <a class="sidebar-link" href="fort-san-pedro.php">Explore Fort San Pedro →</a>
                    <a class="sidebar-link" href="casa-gorordo.php">Explore Casa Gorordo →</a>
                </div>
            </div>
        </aside>

    </div>

</main>

<?php include '../../includes/footer.php'; ?>