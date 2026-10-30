<?php
$pageTitle = "Temple of Leah | Smart Tourist Navigator";
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
        style="background-image: url('../../assets/images/temple.jpg'); min-height: 400px; padding-bottom: 50px;"
    >
        <div class="hero-overlay"></div>

        <div class="hero-content" style="padding-top: 40px;">
            <span class="hero-eyebrow">ARCHITECTURE & VIEWS</span>

            <h1>Temple of Leah</h1>

            <p>
                A grand Roman-inspired landmark with panoramic views 
                over Cebu City, built as a symbol of undying love.
            </p>
        </div>

        <div class="hero-caption">
            <span>Cebu City, Philippines</span>
            <span>Discover Cebu's Grand Architecture</span>
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
            <span class="stat-value">Busay, Cebu City</span>
            <span class="stat-desc">In the mountains above the city</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">HIGHLIGHT</span>
            <span class="stat-value">Roman Architecture</span>
            <span class="stat-desc">Museum & monument</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">EXPERIENCE</span>
            <span class="stat-value">Panoramic Views</span>
            <span class="stat-desc">Overlooking Cebu City</span>
        </div>

        <div class="stat-item">
            <span class="stat-label">TRAVEL STYLE</span>
            <span class="stat-value">Cultural Trip</span>
            <span class="stat-desc">Sightseeing & photography</span>
        </div>
    </section>

    <!-- MAIN CONTENT AND SIDEBAR -->
    <div class="destination-layout">

        <article class="main-content">

            <!-- INTRODUCTION AND MAP -->
            <section id="destination-overview">
                <h2 class="section-title">Discover the Temple of Leah</h2>

                <div class="intro-section">
                    <div class="intro-text-content">
                        <p>
                            The Temple of Leah is a majestic, Roman-inspired architectural landmark 
                            located in the hills of Busay, Cebu City. It was built by Teodorico Adarna 
                            as a symbol of his undying love and devotion to his late wife, Leah.
                        </p>
                        <p>
                            Often referred to as the "Taj Mahal of Cebu," the temple features grand 
                            staircases, towering columns, intricate statues, and a museum filled with 
                            the family's personal belongings and art collection.
                        </p>
                        <p>
                            Aside from its historical and architectural significance, the temple offers 
                            sweeping panoramic views of Cebu City and the surrounding mountains, making 
                            it a favorite spot for photographers and sightseers.
                        </p>
                    </div>

                    <div class="intro-map-wrapper">
                        <iframe
                            class="location-map"
                            title="Temple of Leah location map"
                            src="https://www.openstreetmap.org/export/embed.html?bbox=123.840%2C10.335%2C123.880%2C10.370&layer=mapnik&marker=10.354%2C123.864"
                            loading="lazy"
                            style="border: 0;"
                        ></iframe>
                        <div class="map-caption">
                            <strong>Temple of Leah</strong>
                            <p>Busay, Cebu City, Philippines</p>
                            <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Temple+of+Leah+Cebu" target="_blank" rel="noopener noreferrer">
                                Open Google Maps ↗
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PHOTO GALLERY -->
            <section id="destination-gallery-section">
                <h2 class="section-title">Explore the Architecture</h2>
                <p>
                    Marvel at the grand Roman-inspired design, intricate details, 
                    and stunning views from the temple grounds.
                </p>

                <div class="destination-gallery">
                    <figure>
                        <img src="../../assets/images/temple.jpg" alt="Temple of Leah grand facade" loading="lazy">
                        <figcaption>The Grand Facade</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/temple-statues.jpg" alt="Statues at the Temple of Leah" loading="lazy">
                        <figcaption>Intricate Statues</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/temple-view.jpg" alt="View from the Temple of Leah" loading="lazy">
                        <figcaption>Panoramic Views</figcaption>
                    </figure>
                    <figure>
                        <img src="../../assets/images/temple-interior.jpg" alt="Museum interior" loading="lazy">
                        <figcaption>The Museum</figcaption>
                    </figure>
                </div>
            </section>

            <!-- LOCAL TRAVEL TIP -->
            <div class="local-tip-alert">
                <span class="tip-icon">💡</span>
                <div>
                    <strong>LOCAL TRAVEL TIP</strong>
                    <p>
                        Visit in the late afternoon (around 3:00–5:00 PM) to catch the sunset 
                        over the city. It can get chilly and windy up in the mountains, so 
                        bringing a light jacket is a good idea. Prepare for an entrance fee.
                    </p>
                </div>
            </div>

            <!-- TRANSPORTATION GUIDE -->
            <section id="transport-guide">
                <h2 class="section-title">How to Get There</h2>
                <p>
                    The Temple of Leah is located in Busay, about 30–45 minutes from 
                    Cebu City center, depending on traffic.
                </p>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon bus">🚌</span>
                        <div class="option-title-group">
                            <h3>Habal-Habal or Taxi</h3>
                            <span class="time-badge">~30-45 mins</span>
                        </div>
                    </div>
                    <p>
                        From JY Square Mall in Lahug, take a taxi or a habal-habal (motorcycle taxi) 
                        straight to the temple. This is the fastest and most direct way.
                    </p>
                </div>

                <div class="transport-option">
                    <div class="option-header">
                        <span class="option-icon">🚗</span>
                        <div class="option-title-group">
                            <h3>Private Vehicle</h3>
                        </div>
                    </div>
                    <p>
                        Drive up through the scenic Transcentral Highway. There is parking available 
                        on-site, though it can get busy during weekends.
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
                        <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=Temple+of+Leah+Cebu" target="_blank" rel="noopener noreferrer">
                            Find Temple of Leah on Google Maps ↗
                        </a>
                    </p>
                </div>
            </section>

            <!-- THINGS TO DO -->
            <section id="things-to-do">
                <h2 class="section-title">Things to Do</h2>
                <div class="expect-grid">
                    <div class="expect-card">
                        <h3>📸 Take Photos</h3>
                        <p>
                            The grand staircase and Roman columns provide an incredible backdrop 
                            for photos.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🏛️ Explore the Museum</h3>
                        <p>
                            Visit the underground museum to see the family's art collection and 
                            personal memorabilia.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>🌅 Watch the Sunset</h3>
                        <p>
                            Enjoy a spectacular view of the Cebu City skyline as the sun goes down.
                        </p>
                    </div>
                    <div class="expect-card">
                        <h3>☕ Grab a Coffee</h3>
                        <p>
                            There are small cafes nearby where you can relax and enjoy the cool 
                            mountain air.
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
                        The temperature in Busay is noticeably cooler than in the city.
                    </li>
                    <li>
                        <strong>Wear comfortable shoes.</strong>
                        You will be walking up and down stairs and uneven terrain.
                    </li>
                    <li>
                        <strong>Bring cash.</strong>
                        Entrance fees and parking are usually paid in cash.
                    </li>
                    <li>
                        <strong>Go on a weekday.</strong>
                        Weekends can get very crowded, making it hard to take clean photos.
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
                            Yes, there is a standard entrance fee for adults and children. 
                            Check local listings for the most up-to-date prices.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>How long does it take to explore?</summary>
                        <div class="faq-answer">
                            Most visitors spend about 1 to 2 hours exploring the temple grounds, 
                            taking photos, and visiting the museum.
                        </div>
                    </details>
                    <details class="faq-item">
                        <summary>Is it accessible for people with disabilities?</summary>
                        <div class="faq-answer">
                            The temple involves multiple levels and stairs. While there are ramps 
                            in some areas, accessibility is limited.
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
                    <a class="route-guide-link" href="oslob.php">Oslob</a>
                    <a class="route-guide-link" href="../../index.php">Back to Home</a>
                </div>
            </section>

        </article>

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="sidebar-card quote-card">
                <span class="sidebar-pill">PLAN YOUR VISIT</span>
                <h3>Temple of Leah</h3>
                <p>
                    Make the most of your trip by planning your transportation 
                    and checking the weather before heading up the mountain.
                </p>
                <a class="button button-blue" href="https://www.google.com/maps/search/?api=1&query=Temple+of+Leah+Cebu" target="_blank" rel="noopener noreferrer">
                    View Location ↗
                </a>
                <a class="button button-outline" href="#travel-tips">
                    Read Travel Tips
                </a>
                <p class="small-note">
                    Confirm current local arrangements before traveling.
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