<?php
$pageTitle = "Simala Shrine | Smart Tourist Navigator";
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
        style="background-image: url('../../assets/images/simala.jpg'); min-height: 400px; padding-bottom: 50px;"
    >
        <div class="hero-overlay"></div>

        <div class="hero-content" style="padding-top: 40px;">
            <span class="hero-eyebrow">PILGRIMAGE SITE</span>

            <h1>Simala<br><em>Shrine.</em></h1>

            <p>
                A grand, castle-like church that serves as a major pilgrimage site 
                in southern Cebu, known for its miraculous image of the Virgin Mary.
            </p>
        </div>

        <div class="hero-caption">
            <span>Sibonga, Cebu, Philippines</span>
            <span>Discover Cebu's Spiritual Landmark</span>
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
            <span class="stat-value">Sibonga, Cebu</span>
            <span class="stat-desc">Southern Cebu</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">HIGHLIGHT</span>
            <span class="stat-value">Castle-like Church</span>
            <span class="stat-desc">Miraculous Virgin Mary</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">EXPERIENCE</span>
            <span class="stat-value">Pilgrimage & Faith</span>
            <span class="stat-desc">Religious site</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">TRAVEL STYLE</span>
            <span class="stat-value">Day Trip</span>
            <span class="stat-desc">2 - 2.5 hours from Cebu City</span>
        </div>
    </section>

    <!-- MAIN CONTENT AND SIDEBAR -->
    <div class="destination-layout">

        <article class="main-content">

            <!-- INTRODUCTION AND MAP -->
            <section id="destination-overview">
                <h2 class="section-title">Discover Simala Shrine</h2>

                <div class="intro-section">
                    <div class="intro-text-content">
                        <p>
                            The Monastery of the Holy Eucharist, commonly known as Simala Shrine, 
                            is a grand, castle-like church located in Sibonga, southern Cebu. It is 
                            one of the most popular pilgrimage sites in the Philippines.
                        </p>
                        <p>
                            The shrine is home to a miraculous image of the Virgin Mary, and it is 
                            believed to grant miracles and heal the sick. The architecture is 
                            stunning, with towering spires, intricate details, and beautifully 
                            landscaped gardens.
                        </p>
                        <p>
                            Visitors can attend mass, light candles, offer prayers, and explore 
                            the shrine grounds. It is a place of deep spiritual significance for 
                            many Filipinos.
                        </p>
                    </div>

                    <div class="intro-map-wrapper">
                        <iframe
                            class="location-map"
                            title="Simala Shrine location map"
                            src="https://www.openstreetmap.org/export/embed.html?bbox=123.580%2C9.960%2C123.620%2C9.990&layer=mapnik&marker=9.9833%2C123.6000"
                            loading="lazy"
                            style="border: 0;"
                        ></iframe>
                        <div class="map-caption">
                            <strong>Simala Shrine</strong>
                            <p>Sibonga, Cebu, Philippines</p>
                            <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Simala+Shrine+Cebu" target="_blank" rel="noopener noreferrer">
                                Open Google Maps ↗
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PHOTO GALLERY -->
            <section id="destination-gallery-section">
                <h2 class="section-title">Explore the Shrine</h2>
                <p>
                    Marvel at the grand architecture, the beautifully landscaped gardens, 
                    and the spiritual atmosphere of this sacred site.
                </p>

                <div class="destination-gallery">
                    <figure>
                        <img src="../../assets/images/simala.jpg" alt="Simala Shrine facade" loading="lazy">
                        <figcaption>The Grand Facade</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/simala-interior.jpg" alt="Interior of Simala Shrine" loading="lazy">
                        <figcaption>Sacred Interiors</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/simala-garden.jpg" alt="Gardens at Simala Shrine" loading="lazy">
                        <figcaption>The Gardens</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/simala-view.jpg" alt="View from Simala Shrine" loading="lazy">
                        <figcaption>Panoramic Views</figcaption>
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
                        on Sundays and during religious holidays.
                    </p>
                </div>
            </div>

            <!-- TRANSPORTATION GUIDE -->
            <section id="transport-guide">
                <h2 class="section-title">How to Get There</h2>
                <p>
                    Simala Shrine is about 2 to 2.5 hours from Cebu City. The most common 
                    route is via the Cebu South Bus Terminal.
                </p>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon bus">🚌</span>
                        <div class="option-title-group">
                            <h3>Bus to Sibonga</h3>
                            <span class="time-badge">2 - 2.5 hrs</span>
                        </div>
                    </div>
                    <p>
                        From Cebu South Bus Terminal, take a Ceres bus bound for Bato via 
                        Sibonga. Ask the conductor to drop you at the Simala Shrine junction.
                    </p>
                </div>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon">🛵</span>
                        <div class="option-title-group">
                            <h3>Habal-Habal or Tricycle</h3>
                        </div>
                    </div>
                    <p>
                        From the junction, take a habal-habal (motorcycle taxi) or tricycle 
                        to the shrine. It's about a 15-minute ride uphill.
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
                        <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Simala+Shrine+Cebu" target="_blank" rel="noopener noreferrer">
                            Find Simala Shrine on Google Maps ↗
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
                            Visit the candle lighting area to offer a prayer and light a 
                            candle for your intentions.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>📸 Take Photos</h3>
                        <p>
                            The grand architecture and beautifully landscaped gardens provide 
                            an incredible backdrop for photos.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🛍️ Buy Souvenirs</h3>
                        <p>
                            There are shops near the entrance selling religious items, 
                            souvenirs, and local delicacies.
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
                        Vendors outside the shrine sell local delicacies like 
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
                            No, entrance to the shrine is free. However, donations for 
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
                            The shrine is usually open from 6:00 AM to 6:00 PM daily. 
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
                    <a class="route-guide-link" href="oslob.php">Oslob Whale Sharks</a>
                    <a class="route-guide-link" href="sumilon-island.php">Sumilon Island</a>
                    <a class="route-guide-link" href="carcar-city.php">Carcar City</a>
                    <a class="route-guide-link" href="../../index.php">Back to Home</a>
                </div>
            </section>

        </article>

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="sidebar-card quote-card">
                <span class="sidebar-pill">PLAN YOUR VISIT</span>
                <h3>Simala Shrine</h3>
                <p>
                    Experience the spiritual heart of Cebu. Plan your visit to avoid 
                    the crowds and ensure a respectful experience.
                </p>
                <a class="button button-blue" href="https://www.google.com/maps/search/?api=1&query=Simala+Shrine+Cebu" target="_blank" rel="noopener noreferrer">
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
                    <a class="sidebar-link" href="oslob.php">Explore Oslob →</a>
                    <a class="sidebar-link" href="sumilon-island.php">Explore Sumilon Island →</a>
                    <a class="sidebar-link" href="carcar-city.php">Explore Carcar City →</a>
                </div>
            </div>
        </aside>

    </div>

</main>

<?php include '../../includes/footer.php'; ?>