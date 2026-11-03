<?php
$pageTitle = "Yap-Sandiego Ancestral House | Smart Tourist Navigator";
$pageDescription = "A preserved ancestral house in Cebu's Parian district that offers a glimpse into domestic life during an earlier period.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A preserved ancestral house in Cebu's Parian district that offers a glimpse into domestic life during an earlier period.">
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
        <section class="hero detail-hero" style="background-image: url('/Cebu/assets/images/destination/yap-sandiego-house.jpg'); min-height: 400px; padding-bottom: 50px;">
            <div class="hero-overlay"></div>
            <div class="hero-content" style="padding-top: 40px;">
                <span class="hero-eyebrow">ANCESTRAL HOUSE & HERITAGE</span>
                <h1>Yap-Sandiego Ancestral House</h1>
                <p>A preserved ancestral house in Cebu's Parian district that offers a glimpse into domestic life during an earlier period.</p>
            </div>
            <div class="hero-caption">
                <span>Parian, Cebu City</span>
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
            <div class="stat-item"><span class="stat-label">LOCATION</span><span class="stat-value">Parian, Cebu City</span><span class="stat-desc">Cebu, Philippines</span></div>
            <div class="stat-item"><span class="stat-label">HIGHLIGHT</span><span class="stat-value">Historic ancestral house</span><span class="stat-desc">Destination feature</span></div>
            <div class="stat-item"><span class="stat-label">EXPERIENCE</span><span class="stat-value">Ancestral House & Heritage</span><span class="stat-desc">Explore local attractions</span></div>
            <div class="stat-item"><span class="stat-label">TRAVEL STYLE</span><span class="stat-value">Heritage & architecture</span><span class="stat-desc">Plan ahead for your visit</span></div>
        </section>

        <div class="destination-layout">
            <article class="main-content">
                <section id="destination-overview">
                    <h2 class="section-title">Discover Yap-Sandiego Ancestral House</h2>
                    <div class="intro-section">
                        <div class="intro-text-content">
                            <p>The Yap-Sandiego Ancestral House is one of the historic homes in the Parian area. Its traditional structure and collections help visitors imagine family and community life in old Cebu.</p>
                            <p>A preserved ancestral house in Cebu's Parian district that offers a glimpse into domestic life during an earlier period.</p>
                            <p>Check access arrangements because this is a historic property.</p>
                        </div>
                        <div class="intro-map-wrapper">
                            <iframe class="location-map" title="Yap-Sandiego Ancestral House location map"
                                src="https://www.google.com/maps?q=Yap-Sandiego+Ancestral+House+Cebu&output=embed"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border: 0;"></iframe>
                            <div class="map-caption">
                                <strong>Yap-Sandiego Ancestral House</strong>
                                <p>Parian, Cebu City</p>
                                <a class="text-link" href="https://www.google.com/maps/search/?api=1&amp;query=Yap-Sandiego+Ancestral+House+Cebu" target="_blank" rel="noopener noreferrer">Open Google Maps ↗</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="destination-gallery-section">
                    <h2 class="section-title">Explore Yap-Sandiego Ancestral House</h2>
                    <p>Use these image references to add your own photographs of the destination. Replace the filenames with images you have saved in your project.</p>
                    <div class="destination-gallery">
                        <figure>
                            <img src="/Cebu/assets/images/yap-sandiego-house-01.jpg" alt="Yap-Sandiego Ancestral House - main attraction" loading="lazy">
                            <figcaption>Main attraction</figcaption>
                        </figure>
                        <figure>
                            <img src="/Cebu/assets/images/yap-sandiego-house-02.jpg" alt="Yap-Sandiego Ancestral House - visitor experience" loading="lazy">
                            <figcaption>Visitor experience</figcaption>
                        </figure>
                        <figure>
                            <img src="/Cebu/assets/images/yap-sandiego-house-03.jpg" alt="Yap-Sandiego Ancestral House - local scenery" loading="lazy">
                            <figcaption>Local scenery</figcaption>
                        </figure>
                        <figure>
                            <img src="/Cebu/assets/images/yap-sandiego-house-04.jpg" alt="Yap-Sandiego Ancestral House - nearby surroundings" loading="lazy">
                            <figcaption>Nearby surroundings</figcaption>
                        </figure>
                    </div>
                </section>

                <div class="local-tip-alert">
                    <span class="tip-icon">💡</span>
                    <div><strong>LOCAL TRAVEL TIP</strong><p>Check access arrangements because this is a historic property.</p></div>
                </div>

                <section id="transport-guide">
                    <h2 class="section-title">How to Get There</h2>
                    <p>Plan your route to Yap-Sandiego Ancestral House from your starting point in Cebu. Available public transport, road conditions, and travel times can change, so confirm the latest details locally.</p>
                    <div class="transport-option">
                        <div class="option-header"><span class="option-icon bus">🚕</span><div class="option-title-group"><h3>Taxi or Ride-Hailing</h3></div></div>
                        <p>For a direct trip, check whether a taxi or ride-hailing service accepts trips to Parian, Cebu City. Confirm the drop-off point with your driver before departure.</p>
                    </div>
                    <div class="transport-option">
                        <div class="option-header"><span class="option-icon">🚌</span><div class="option-title-group"><h3>Public Transport</h3></div></div>
                        <p>Ask the local tourism office, terminal staff, or an authorized operator for the current bus, jeepney, or boat route serving Parian, Cebu City. Routes and schedules may change.</p>
                    </div>
                    <div class="transport-option">
                        <div class="option-header"><span class="option-icon">📍</span><div class="option-title-group"><h3>Find the Location</h3></div></div>
                        <p><a class="text-link" href="https://www.google.com/maps/search/?api=1&amp;query=Yap-Sandiego+Ancestral+House+Cebu" target="_blank" rel="noopener noreferrer">Find Yap-Sandiego Ancestral House on Google Maps ↗</a></p>
                    </div>
                </section>

                <section id="things-to-do">
                    <h2 class="section-title">Things to Do</h2>
                    <div class="expect-grid">
                        <div class="expect-card">
                            <h3>Explore</h3>
                            <p>Explore the traditional house interiors and furnishings.</p>
                        </div>
                        <div class="expect-card">
                            <h3>Discover</h3>
                            <p>Learn about the building's history from available interpretation.</p>
                        </div>
                        <div class="expect-card">
                            <h3>Enjoy</h3>
                            <p>Photograph architectural details where permitted.</p>
                        </div>
                        <div class="expect-card">
                            <h3>Experience</h3>
                            <p>Visit nearby heritage sites on foot.</p>
                        </div>
                    </div>
                </section>

                <section id="travel-tips">
                    <h2 class="section-title">Travel Tips</h2>
                    <ul class="editorial-list">
                        <li>Confirm visiting hours and admission arrangements before going.</li>
                        <li>Follow staff guidance inside the historic structure.</li>
                        <li>Avoid touching fragile objects.</li>
                        <li>Wear comfortable footwear for the heritage district.</li>
                    </ul>
                </section>

                <section id="faq">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <div class="faq-container">
                        <details class="faq-item"><summary>Can I go inside?</summary><div class="faq-answer">Can I go inside? Visitor access is subject to current house arrangements; confirm before visiting.</div></details>
                        <details class="faq-item"><summary>Where is it?</summary><div class="faq-answer">Where is it? It is in the Parian heritage district of Cebu City.</div></details>
                        <details class="faq-item"><summary>Do I need to confirm details before visiting?</summary><div class="faq-answer">Yes. Check current access, operating hours, fees, transport, and safety advisories with the official attraction, local tourism office, or authorized operator before travelling.</div></details>
                    </div>
                </section>

                <section id="related-guides">
                    <h2 class="section-title">Explore More Destinations</h2>
                    <div class="route-guide-grid">
                        <a class="route-guide-link" href="/Cebu/pages/destinations/cebu-heritage-monument.php">Cebu Heritage Monument</a>
                        <a class="route-guide-link" href="/Cebu/pages/destinations/jesuit-house.php">Jesuit House</a>
                        <a class="route-guide-link" href="/Cebu/pages/destinations/colon-street.php">Colon Street</a>
                        <a class="route-guide-link" href="/Cebu/index.php">Back to Home</a>
                    </div>
                </section>
            </article>

            <aside class="sidebar">
                <div class="sidebar-card quote-card">
                    <span class="sidebar-pill">PLAN YOUR VISIT</span>
                    <h3>Yap-Sandiego Ancestral House</h3>
                    <p>A preserved ancestral house in Cebu's Parian district that offers a glimpse into domestic life during an earlier period. Confirm current visitor information before setting out.</p>
                    <a class="button button-blue" href="https://www.google.com/maps/search/?api=1&amp;query=Yap-Sandiego+Ancestral+House+Cebu" target="_blank" rel="noopener noreferrer">View Location ↗</a>
                    <a class="button button-outline" href="#travel-tips">Read Travel Tips</a>
                    <p class="small-note">Operating details, access, and transport may change. Verify before travelling.</p>
                </div>
                <div class="sidebar-card related-guides">
                    <h4>RELATED DESTINATIONS</h4>
                    <div class="sidebar-routes">
                        <a class="sidebar-link" href="/Cebu/pages/destinations/cebu-heritage-monument.php">Explore Cebu Heritage Monument →</a>
                        <a class="sidebar-link" href="/Cebu/pages/destinations/jesuit-house.php">Explore Jesuit House →</a>
                        <a class="sidebar-link" href="/Cebu/pages/destinations/colon-street.php">Explore Colon Street →</a>
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
