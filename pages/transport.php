<?php
// pages/transport.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Comprehensive guide to public transportation in Metro Cebu and across the province.">
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
            <p>Clear, candid, and highly practical advice for navigating Metro Cebu and the province.</p>
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

    <!-- GUIDE CONTENT -->
    <section class="guide-section">
        <div class="guide-container">
            
            <!-- SIDEBAR TOC -->
            <aside class="guide-sidebar">
                <div class="toc-card">
                    <h3>Jump to Section</h3>
                    <ul>
                        <li><a href="#jeepney">1. The Jeepney System</a></li>
                        <li><a href="#taxis">2. Ride-Hailing & Taxis</a></li>
                        <li><a href="#buses">3. City & Airport Buses</a></li>
                        <li><a href="#provincial">4. Provincial Travel</a></li>
                    </ul>
                </div>
            </aside>

            <!-- MAIN CONTENT -->
            <div class="guide-content">

                <!-- 1. JEEPNEYS -->
                <article class="guide-card" id="jeepney">
                    <div class="guide-card-header">
                        <span class="guide-icon">▤</span>
                        <h2>1. The Jeepney System</h2>
                    </div>
                    <p class="lead">Cebu's jeepneys are the backbone of local transport, but they run on a route code system rather than a formal map. You need to know the code for your destination before you board.</p>
                    
                    <div class="info-block">
                        <h4>The Alphanumeric Code System</h4>
                        <p>Codes like <strong>04C</strong>, <strong>17B</strong>, or <strong>13C</strong> are not random. The number generally indicates the primary corridor (e.g., 04 routes serve Lahug/Carbon; 13 serves Talamban). The letter denotes a specific variation (e.g., 13B goes to Carbon, 13C goes to Colon). <em>Google Maps does not track jeepney routes—ask a local!</em></p>
                    </div>

                    <div class="info-block">
                        <h4>Fares & Payment</h4>
                        <p>Minimum fare is <strong>₱13</strong> (traditional) or <strong>₱15–17</strong> (modern aircon). Hand your cash to the passenger next to you and say <strong>"Bayad palihug"</strong> (Payment, please). Your change is passed back the same way. <em>Always carry small bills and coins.</em></p>
                    </div>

                    <div class="info-block highlight-box">
                        <h4>How to Get Off</h4>
                        <p>There are no formal stops. Say <strong>"Para po!"</strong> or <strong>"Lugar lang"</strong> (Just here) loud enough for the driver to hear a few seconds before your stop. If unsure, tell the driver your destination when you board.</p>
                    </div>
                </article>

                <!-- 2. TAXIS -->
                <article class="guide-card" id="taxis">
                    <div class="guide-card-header">
                        <span class="guide-icon">↗</span>
                        <h2>2. Digital Ride-Hailing & Taxis</h2>
                    </div>
                    <p class="lead">For point-to-point trips, especially with luggage or at night, app-based options are the most reliable.</p>

                    <div class="info-block">
                        <h4>Ride-Sharing Apps</h4>
                        <p><strong>Grab</strong> is the dominant app, offering fixed pricing. <strong>InDrive</strong> lets you name your fare (cheaper, but less consistent).</p>
                    </div>

                    <div class="info-block">
                        <h4>Motorcycle Taxis</h4>
                        <p><strong>Angkas</strong> is the largest fleet and best for first-timers. <strong>Move It</strong> (backed by Grab) is a good backup. All provide helmets. <em>No large luggage allowed.</em></p>
                    </div>

                    <div class="info-block">
                        <h4>Metered White Taxis</h4>
                        <p>Flag-down rate is <strong>₱40</strong> + <strong>₱13.50/km</strong>. Airport to City (14km) is roughly <strong>₱250–400</strong>.</p>
                    </div>

                    <div class="guide-tip">
                        <strong>The Golden Rule</strong>
                        Insist that the driver uses the meter. If a driver quotes a flat fare, walk to the next taxi in the queue—flat rates are almost always higher. Yellow "airport taxis" have a higher flag-down rate (₱70).
                    </div>
                </article>

                <!-- 3. BUSES -->
                <article class="guide-card" id="buses">
                    <div class="guide-card-header">
                        <span class="guide-icon">≈</span>
                        <h2>3. Large City & Airport Buses</h2>
                    </div>
                    <p class="lead">Cebu has a growing network of fixed-route, air-conditioned buses that are ideal for getting between major malls and the airport.</p>

                    <div class="info-block">
                        <h4>MyBus (Airport to City)</h4>
                        <p>Connects Mactan Airport to <strong>SM City Cebu</strong> and <strong>SM Seaside City</strong>. Buses run every 20 minutes. The best budget option if your hotel is near these malls.</p>
                    </div>

                    <div class="info-block">
                        <h4>CIBUS (City Loops)</h4>
                        <p>A modern bus service looping through <strong>Ayala Center</strong>, <strong>IT Park</strong>, <strong>Fuente Osmeña</strong>, and <strong>SM Seaside</strong>. Fares are low (₱15–26) and air-conditioned.</p>
                    </div>
                </article>

                <!-- 4. PROVINCIAL TRAVEL -->
                <article class="guide-card" id="provincial">
                    <div class="guide-card-header">
                        <span class="guide-icon">⌁</span>
                        <h2>4. Provincial Travel</h2>
                    </div>
                    <p class="lead">For trips outside Metro Cebu, you must go to one of two major bus terminals. Do not try to catch these buses from the roadside—they will be full.</p>

                    <div class="info-block">
                        <h4>Cebu North Bus Terminal</h4>
                        <p>Located near SM City Cebu (verify locally). Use this for <strong>Bantayan Island</strong> (bus to Hagnaya Port, then ferry) and <strong>Malapascua</strong> (bus to Maya Port, then boat).</p>
                    </div>

                    <div class="info-block">
                        <h4>Cebu South Bus Terminal</h4>
                        <p>For southern destinations like <strong>Moalboal</strong> and <strong>Oslob</strong>. Take a Ceres bus bound for the specific town. Air-conditioned buses are worth the small extra cost (₱20–40 more) as they make fewer stops.</p>
                    </div>

                    <div class="guide-tip">
                        <strong>Critical Timing Tips</strong>
                        For Bantayan: Leave Cebu by early afternoon, or you'll miss the last ferry.<br><br>
                        For Malapascua: Leave by mid-morning to have a buffer before the last boats depart (around 4:30–5:30 PM).
                    </div>
                </article>

                <!-- BACK BUTTON -->
                <div class="back-btn-wrap">
                    <a class="button button-dark" href="../index.php#transport">
                        ← Back to Homepage
                    </a>
                </div>
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