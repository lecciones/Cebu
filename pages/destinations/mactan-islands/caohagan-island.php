<?php
$pageTitle = "Caohagan Island | Smart Tourist Navigator";
$pageDescription = "A small island near Olango known for its coastal scenery, fishing community, and simple island experiences.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A small island near Olango known for its coastal scenery, fishing community, and simple island experiences.">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/Cebu/assets/css/style.css">
    <link rel="stylesheet" href="/Cebu/assets/css/destination-detail.css?v=<?= time(); ?>">
</head>
<body>
    <header class="site-header" id="home">
        <a class="brand" href="/Cebu/index.php">
            <span class="brand-mark">✦</span>
            <span>Smart Tourist <strong>Navigator</strong></span>
        </a>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation" aria-expanded="false">☰</button>
        <nav class="nav-links" id="navLinks">
            <a href="/Cebu/index.php">Home</a>
            <a href="/Cebu/index.php#explore">Destinations</a>
            <a href="/Cebu/index.php#map-section">Map &amp; Routes</a>
            <a href="/Cebu/index.php#food">Local Food</a>
            <a href="/Cebu/index.php#transport">Transport</a>
            <a href="/Cebu/index.php#plan">Plan Trip</a>
        </nav>
        <a href="/Cebu/index.php#explore" class="header-cta">Start Exploring ↗</a>
    </header>

    <main class="destination-detail-page">
        <section class="hero detail-hero" style="background-image: url('/Cebu/assets/images/destination/caohagan-island.jpg'); min-height: 400px; padding-bottom: 50px;">
            <div class="hero-overlay"></div>
            <div class="hero-content" style="padding-top: 40px;">
                <span class="hero-eyebrow">ISLAND & COMMUNITY TOURISM</span>
                <h1>Caohagan Island</h1>
                <p>A small island near Olango known for its coastal scenery, fishing community, and simple island experiences.</p>
            </div>
            <div class="hero-caption">
                <span>Olango island group, near Mactan</span>
                <span>Discover Cebu</span>
            </div>
            <div class="hero-wave" aria-hidden="true">
                <svg class="wave-svg wave-back" viewBox="0 0 1440 120" preserveAspectRatio="none">
                    <path d="M0,45 C180,105 360,0 540,48 S900,108 1080,48 S1260,0 1440,45 L1440,120 L0,120 Z"></path>
                </svg>
                <svg class="wave-svg wave-front" viewBox="0 0 1440 120" preserveAspectRatio="none">
                    <path d="M0,78 C180,10 360,115 540,75 S900,10 1080,75 S1260,115 1440,78 L1440,120 L0,120 Z"></path>
                </svg>
            </div>
        </section>

        <section class="quick-stats-bar">
            <div class="stat-item"><span class="stat-label">LOCATION</span><span class="stat-value">Olango island group, near Mactan</span><span class="stat-desc">Cebu, Philippines</span></div>
            <div class="stat-item"><span class="stat-label">HIGHLIGHT</span><span class="stat-value">Small island community</span><span class="stat-desc">Destination feature</span></div>
            <div class="stat-item"><span class="stat-label">EXPERIENCE</span><span class="stat-value">Island & Community Tourism</span><span class="stat-desc">Explore local attractions</span></div>
            <div class="stat-item"><span class="stat-label">TRAVEL STYLE</span><span class="stat-value">Island & community experience</span><span class="stat-desc">Plan ahead for your visit</span></div>
        </section>

        <div class="destination-layout">
            <article class="main-content">
                <section id="destination-overview">
                    <h2 class="section-title">Discover Caohagan Island</h2>
                    <div class="intro-section">
                        <div class="intro-text-content">
                            <p>Caohagan Island is part of the Olango island group off Mactan. Visitors come for its coastal environment and community-based island experience.</p>
                            <p>A small island near Olango known for its coastal scenery, fishing community, and simple island experiences.</p>
                            <p>Confirm boat arrangements and available facilities in advance.</p>
                        </div>
                        <div class="intro-map-wrapper">
                            <iframe class="location-map" title="Caohagan Island location map"
                                src="https://www.google.com/maps?q=Caohagan+Island+Cebu&output=embed"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border: 0;"></iframe>
                            <div class="map-caption">
                                <strong>Caohagan Island</strong>
                                <p>Olango island group, near Mactan</p>
                                <a class="text-link" href="https://www.google.com/maps/search/?api=1&amp;query=Caohagan+Island+Cebu" target="_blank" rel="noopener noreferrer">Open Google Maps ↗</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="destination-gallery-section">
                    <h2 class="section-title">Explore Caohagan Island</h2>
                    <p>Use these image references to add your own photographs of the destination. Replace the filenames with images you have saved in your project.</p>
                    <div class="destination-gallery">
                        <figure>
                            <img src="/Cebu/assets/images/caohagan-island-01.jpg" alt="Caohagan Island - main attraction" loading="lazy">
                            <figcaption>Main attraction</figcaption>
                        </figure>
                        <figure>
                            <img src="/Cebu/assets/images/caohagan-island-02.jpg" alt="Caohagan Island - visitor experience" loading="lazy">
                            <figcaption>Visitor experience</figcaption>
                        </figure>
                        <figure>
                            <img src="/Cebu/assets/images/caohagan-island-03.jpg" alt="Caohagan Island - local scenery" loading="lazy">
                            <figcaption>Local scenery</figcaption>
                        </figure>
                        <figure>
                            <img src="/Cebu/assets/images/caohagan-island-04.jpg" alt="Caohagan Island - nearby surroundings" loading="lazy">
                            <figcaption>Nearby surroundings</figcaption>
                        </figure>
                    </div>
                </section>

                <div class="local-tip-alert">
                    <span class="tip-icon">💡</span>
                    <div><strong>LOCAL TRAVEL TIP</strong><p>Confirm boat arrangements and available facilities in advance.</p></div>
                </div>

                <section id="transport-guide">
                    <h2 class="section-title">How to Get There</h2>
                    <p>Plan your route to Caohagan Island from your starting point in Cebu. Available public transport, road conditions, and travel times can change, so confirm the latest details locally.</p>
                    <div class="transport-option">
                        <div class="option-header"><span class="option-icon bus">🚕</span><div class="option-title-group"><h3>Taxi or Ride-Hailing</h3></div></div>
                        <p>For a direct trip, check whether a taxi or ride-hailing service accepts trips to Olango island group, near Mactan. Confirm the drop-off point with your driver before departure.</p>
                    </div>
                    <div class="transport-option">
                        <div class="option-header"><span class="option-icon">🚌</span><div class="option-title-group"><h3>Public Transport</h3></div></div>
                        <p>Ask the local tourism office, terminal staff, or an authorized operator for the current bus, jeepney, or boat route serving Olango island group, near Mactan. Routes and schedules may change.</p>
                    </div>
                    <div class="transport-option">
                        <div class="option-header"><span class="option-icon">📍</span><div class="option-title-group"><h3>Find the Location</h3></div></div>
                        <p><a class="text-link" href="https://www.google.com/maps/search/?api=1&amp;query=Caohagan+Island+Cebu" target="_blank" rel="noopener noreferrer">Find Caohagan Island on Google Maps ↗</a></p>
                    </div>
                </section>

                <section id="things-to-do">
                    <h2 class="section-title">Things to Do</h2>
                    <div class="expect-grid">
                        <div class="expect-card">
                            <h3>Explore</h3>
                            <p>Arrange a local boat trip and island visit.</p>
                        </div>
                        <div class="expect-card">
                            <h3>Discover</h3>
                            <p>Enjoy the shoreline and sea views.</p>
                        </div>
                        <div class="expect-card">
                            <h3>Enjoy</h3>
                            <p>Learn about local island life through respectful interaction.</p>
                        </div>
                        <div class="expect-card">
                            <h3>Experience</h3>
                            <p>Ask local operators about available meals or activities.</p>
                        </div>
                    </div>
                </section>

                <section id="travel-tips">
                    <h2 class="section-title">Travel Tips</h2>
                    <ul class="editorial-list">
                        <li>Arrange boats with recognized local operators.</li>
                        <li>Confirm weather and sea conditions before departure.</li>
                        <li>Bring cash, water, and sun protection.</li>
                        <li>Take all rubbish back with you and respect local property.</li>
                    </ul>
                </section>

                <section id="faq">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <div class="faq-container">
                        <details class="faq-item"><summary>How do I reach the island?</summary><div class="faq-answer">How do I reach the island? Boat transfers are required; arrange details with local operators.</div></details>
                        <details class="faq-item"><summary>Are facilities extensive?</summary><div class="faq-answer">Are facilities extensive? Facilities may be limited, so prepare essentials before travelling.</div></details>
                        <details class="faq-item"><summary>Do I need to confirm details before visiting?</summary><div class="faq-answer">Yes. Check current access, operating hours, fees, transport, and safety advisories with the official attraction, local tourism office, or authorized operator before travelling.</div></details>
                    </div>
                </section>

                <section id="related-guides">
                    <h2 class="section-title">Explore More Destinations</h2>
                    <div class="route-guide-grid">
                        <a class="route-guide-link" href="/Cebu/pages/destinations/olango-island.php">Olango Island</a>
                        <a class="route-guide-link" href="/Cebu/pages/destinations/sulpa-island.php">Sulpa Island</a>
                        <a class="route-guide-link" href="/Cebu/pages/destinations/mactan-shrine.php">Mactan Shrine</a>
                        <a class="route-guide-link" href="/Cebu/index.php">Back to Home</a>
                    </div>
                </section>
            </article>

            <aside class="sidebar">
                <div class="sidebar-card quote-card">
                    <span class="sidebar-pill">PLAN YOUR VISIT</span>
                    <h3>Caohagan Island</h3>
                    <p>A small island near Olango known for its coastal scenery, fishing community, and simple island experiences. Confirm current visitor information before setting out.</p>
                    <a class="button button-blue" href="https://www.google.com/maps/search/?api=1&amp;query=Caohagan+Island+Cebu" target="_blank" rel="noopener noreferrer">View Location ↗</a>
                    <a class="button button-outline" href="#travel-tips">Read Travel Tips</a>
                    <p class="small-note">Operating details, access, and transport may change. Verify before travelling.</p>
                </div>
                <div class="sidebar-card related-guides">
                    <h4>RELATED DESTINATIONS</h4>
                    <div class="sidebar-routes">
                        <a class="sidebar-link" href="/Cebu/pages/destinations/olango-island.php">Explore Olango Island →</a>
                        <a class="sidebar-link" href="/Cebu/pages/destinations/sulpa-island.php">Explore Sulpa Island →</a>
                        <a class="sidebar-link" href="/Cebu/pages/destinations/mactan-shrine.php">Explore Mactan Shrine →</a>
                    </div>
                </div>
            </aside>
        </div>
    </main>

    <footer class="site-footer" id="about">
        <div class="footer-main">
            <div class="footer-brand">
                <a class="brand" href="/Cebu/index.php"><span class="brand-mark">✦</span><span>Smart Tourist <strong>Navigator</strong></span></a>
                <p>Your local guide to attractions, food, and travel information across Cebu.</p>
            </div>
            <div><h4>Explore</h4><a href="/Cebu/index.php#explore">Destinations</a><a href="/Cebu/index.php#map-section">Map &amp; Routes</a><a href="/Cebu/index.php#food">Local Food</a></div>
            <div><h4>Plan</h4><a href="/Cebu/index.php#transport">Transport Tips</a><a href="/Cebu/index.php#plan">Plan Your Trip</a><a href="/Cebu/index.php#about">About the Project</a></div>
        </div>
        <div class="footer-bottom"><span>© <span id="currentYear"></span> Smart Tourist Navigator — Cebu</span><span>Made for curious travelers.</span></div>
    </footer>

    <div id="toast" class="toast" role="status" aria-live="polite"></div>
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');
        if (menuToggle && navLinks) {
            menuToggle.addEventListener('click', function() {
                const isOpen = navLinks.classList.toggle('open');
                menuToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            });
        }
    </script>
</body>
</html>
