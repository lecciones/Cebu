<?php
// pages/transport.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A highly visual, practical guide to navigating Cebu's jeepneys, taxis, buses, and ferries.">
    <title>Transport Guide | Smart Tourist Navigator</title>

    <!-- Fonts & Main Stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/transport.css">
    <script src="../assets/js/transport.js" defer></script>
</head>

<body>

    <!-- HEADER -->
    <header class="site-header" id="home">
        <a class="brand" href="../index.php">
            <span class="brand-mark">✦</span>
            <span>Smart Tourist <strong>Navigator</strong></span>
        </a>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation" aria-expanded="false">☰</button>
        <nav class="nav-links" id="navLinks">
            <a href="../index.php">Home</a>
            <a href="destination.php">Destinations</a>
            <a href="../index.php#map-section">Map & Routes</a>
            <a href="../index.php#food">Local Food</a>
            <a href="transport.php" class="active">Transport</a>
            <a href="../index.php#plan">Plan Trip</a>
        </nav>
        <a href="../index.php#explore" class="header-cta">Back to Home ↗</a>
    </header>

    <!-- HERO SECTION -->
    <section class="hero transport-hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <span class="eyebrow hero-eyebrow">GETTING AROUND</span>
            <h1>The Ultimate Cebu<br><em>Transport Guide.</em></h1>
            <p>Master the jeepneys, beat the traffic, and reach the islands. A highly visual guide for navigating Cebu in 2026.</p>
        </div>
        <div class="hero-caption">
            <span>03 / TRANSPORT & NAVIGATION</span>
            <span>Cebu, Philippines</span>
        </div>
        <div class="hero-wave" aria-hidden="true">
            <svg class="wave-svg wave-back" viewBox="0 0 2880 120" preserveAspectRatio="none"><path d="M0 50 C240 0 480 100 720 50 S1200 0 1440 50 S1920 100 2160 50 S2640 0 2880 50 V120 H0 Z"></path></svg>
            <svg class="wave-svg wave-front" viewBox="0 0 2880 120" preserveAspectRatio="none"><path d="M0 65 C240 110 480 20 720 65 S1200 110 1440 65 S1920 20 2160 65 S2640 110 2880 65 V120 H0 Z"></path></svg>
        </div>
    </section>

    <!-- VISUAL GUIDE CONTENT -->
    <section class="visual-guide-section">
        <div class="guide-wrapper">

            <!-- SECTION 1: JEEPNEYS -->
            <div class="transport-module">
                <div class="module-header">
                    <span class="module-icon">🚐</span>
                    <div>
                        <span class="module-tag">LOCAL STAPLE</span>
                        <h2>The Jeepney System</h2>
                    </div>
                </div>
                
                <div class="module-grid">
                    <!-- How to Read Codes -->
                    <div class="info-card">
                        <h3>📍 Reading the Codes</h3>
                        <p>Jeepneys don't have maps. They use alphanumeric codes. The number is the main route, the letter is the variation.</p>
                        <div class="code-examples">
                            <span class="code-pill">04L <small>Lahug ↔ Ayala</small></span>
                            <span class="code-pill">17B <small>IT Park ↔ Carbon</small></span>
                            <span class="code-pill">13C <small>Talamban ↔ Colon</small></span>
                        </div>
                        <p class="micro-note">Pro tip: Google Maps doesn't track these. Ask a local at the terminal!</p>
                    </div>

                    <!-- How to Pay -->
                    <div class="info-card">
                        <h3>💵 How to Pay</h3>
                        <p><strong>Fare (2026):</strong> ₱14 (Traditional) / ₱17 (Modern Aircon).</p>
                        <ol class="step-list">
                            <li>Hand your cash to the passenger next to you.</li>
                            <li>Say: <strong>"Bayad palihug"</strong> (Payment, please).</li>
                            <li>Your change is passed back hand-to-hand.</li>
                        </ol>
                        <p class="micro-note">⚠️ Always carry small bills. Drivers rarely have change for ₱500.</p>
                    </div>

                    <!-- How to Exit -->
                    <div class="info-card">
                        <h3>🚪 How to Get Off</h3>
                        <p>There are no bus stops. You must signal the driver.</p>
                        <div class="phrase-box">
                            <span>Say: "Para po!" or "Lugar lang"</span>
                        </div>
                        <p>Say it loud enough for the driver to hear a few seconds before your stop.</p>
                    </div>
                </div>
            </div>

            <!-- SECTION 2: APPS & TAXIS -->
            <div class="transport-module">
                <div class="module-header">
                    <span class="module-icon">📱</span>
                    <div>
                        <span class="module-tag">BEAT THE TRAFFIC</span>
                        <h2>Ride-Hailing & Taxis</h2>
                    </div>
                </div>
                
                <div class="module-grid">
                    <!-- Car Apps -->
                    <div class="info-card">
                        <h3>🚗 Car Apps</h3>
                        <p><strong>Grab:</strong> The most reliable. Fixed pricing, no haggling.</p>
                        <p><strong>InDrive:</strong> You name your fare. Can be cheaper, but less consistent.</p>
                    </div>

                    <!-- Motorcycles -->
                    <div class="info-card">
                        <h3>🏍️ Motorcycle Taxis</h3>
                        <p>Fastest way to beat traffic. All provide helmets.</p>
                        <ul class="app-list">
                            <li><strong>Angkas:</strong> Largest fleet, best for first-timers.</li>
                            <li><strong>Move It:</strong> Backed by Grab, good backup.</li>
                        </ul>
                        <p class="micro-note">⚠️ No large luggage allowed on motorcycles.</p>
                    </div>

                    <!-- Metered Taxis -->
                    <div class="info-card highlight-card">
                        <h3>🚕 White Taxis</h3>
                        <p><strong>Flag-down:</strong> ₱40 + ₱13.50/km.</p>
                        <p><strong>Airport to City:</strong> ~₱250–400 (14km).</p>
                        <div class="alert-box">
                            <strong>The Golden Rule:</strong> Insist on the meter. If they quote a flat rate, walk to the next taxi.
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION 3: BUSES -->
            <div class="transport-module">
                <div class="module-header">
                    <span class="module-icon">🚌</span>
                    <div>
                        <span class="module-tag">FIXED ROUTES</span>
                        <h2>City & Airport Buses</h2>
                    </div>
                </div>
                
                <div class="module-grid">
                    <div class="info-card">
                        <h3>✈️ MyBus (Airport)</h3>
                        <p>Connects Mactan Airport to <strong>SM City Cebu</strong> and Talisay.</p>
                        <p><strong>Schedule:</strong> Every 20 mins (7 AM – 10 PM).</p>
                        <p><strong>Fare:</strong> ~₱60.</p>
                        <p class="micro-note">Best budget option if your hotel is near the route.</p>
                    </div>

                    <div class="info-card">
                        <h3>🏙️ CIBUS (City Loops)</h3>
                        <p>Modern aircon buses looping through <strong>Ayala</strong>, <strong>IT Park</strong>, <strong>Fuente</strong>, and <strong>SM Seaside</strong>.</p>
                        <p><strong>Fare:</strong> ₱15–26.</p>
                        <p>Great for navigating between business districts without jeepney transfers.</p>
                    </div>
                </div>
            </div>

            <!-- SECTION 4: PROVINCIAL TRAVEL -->
            <div class="transport-module">
                <div class="module-header">
                    <span class="module-icon">🏝️</span>
                    <div>
                        <span class="module-tag">OUT OF TOWN</span>
                        <h2>Provincial Travel</h2>
                    </div>
                </div>
                
                <div class="module-grid">
                    <!-- North Terminal -->
                    <div class="info-card">
                        <h3>⬆️ North Bus Terminal</h3>
                        <p><em>Located near SM City Cebu.</em></p>
                        <div class="route-fare-table">
                            <div><strong>To Bantayan Island:</strong> Bus to Hagnaya (₱300) + Ferry to Santa Fe.</div>
                            <div><strong>To Malapascua:</strong> Bus to Maya Port (₱370) + Boat to island.</div>
                        </div>
                        <div class="alert-box warning">
                            <strong>Timing:</strong> Leave by early afternoon or you'll miss the last ferry!
                        </div>
                    </div>

                    <!-- South Terminal -->
                    <div class="info-card">
                        <h3>⬇️ South Bus Terminal</h3>
                        <p><em>For Oslob, Moalboal, Simala.</em></p>
                        <div class="route-fare-table">
                            <div><strong>Carcar City:</strong> ₱110 (Aircon)</div>
                            <div><strong>Simala Shrine:</strong> ₱150 (Aircon)</div>
                            <div><strong>Moalboal:</strong> ₱240 (Aircon)</div>
                            <div><strong>Oslob (Bato):</strong> ₱380 (Aircon)</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION 5: NEW INITIATIVES -->
            <div class="transport-module new-module">
                <div class="module-header">
                    <span class="module-icon">✨</span>
                    <div>
                        <span class="module-tag">NEW FOR 2026</span>
                        <h2>Tabang Pambyahe & BRT</h2>
                    </div>
                </div>
                
                <div class="module-grid">
                    <div class="info-card">
                        <h3>🚌 Tabang Pambyahe</h3>
                        <p>A new subsidized bus service with strict standards: GPS, aircon, and <strong>no standing passengers</strong>.</p>
                        <p><strong>Routes:</strong> IT Park to Danao, and South Terminal to Simala.</p>
                    </div>

                    <div class="info-card">
                        <h3>🚏 Cebu BRT Status</h3>
                        <p>A 2.38km segment from <strong>South Terminal to Capitol</strong> is nearly complete. If active, it offers a traffic-free lane through the city center.</p>
                    </div>
                </div>
            </div>

            <!-- BACK BUTTON -->
            <div class="back-btn-wrap">
                <a class="button button-dark" href="../index.php#transport">
                    ← Back to Homepage
                </a>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="site-footer" id="about">
        <div class="footer-main">
            <div class="footer-brand">
                <a class="brand" href="../index.php">
                    <span class="brand-mark">✦</span>
                    <span>Smart Tourist <strong>Navigator</strong></span>
                </a>
                <p>Your local guide to attractions, food, and travel information across Cebu.</p>
            </div>
            <div>
                <h4>Explore</h4>
                <a href="../index.php#explore">Destinations</a>
                <a href="destination.php">Map & Routes</a>
                <a href="../index.php#food">Local Food</a>
            </div>
            <div>
                <h4>Plan</h4>
                <a href="transport.php">Transport Tips</a>
                <a href="../index.php#plan">Plan Your Trip</a>
                <a href="../index.php#about">About the Project</a>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© <span id="currentYear"></span> Smart Tourist Navigator — Cebu</span>
            <span>Made for curious travelers.</span>
        </div>
    </footer>
</body>
</html>