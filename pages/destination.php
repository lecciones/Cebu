<?php
// pages/destination.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Discover Cebu attractions, local food, transport tips and travel routes.">
    <title>Destinations & Routes | Smart Tourist Navigator</title>

    <!-- Main Stylesheet (Up one level) -->
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <!-- Destination Page Stylesheet (Up one level) -->
    <link rel="stylesheet" href="../assets/css/destination.css">

    <!-- Leaflet CSS (Needs to be here for the map to work) -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    
    <!-- Leaflet JS Library -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    
    <!-- Custom Destination JS (Up one level) -->
    <script src="../assets/js/destination.js" defer></script>
</head>

<body>

    <!-- HEADER -->
    <header class="site-header" id="home">
        <a class="brand" href="../index.php">
            <span class="brand-mark">✦</span>
            <span>Smart Tourist <strong>Navigator</strong></span>
        </a>

        <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation" aria-expanded="false">
            ☰
        </button>

        <nav class="nav-links" id="navLinks">
            <a href="../index.php">Home</a>
            <a href="destination.php" class="active">Destinations</a>
            <a href="../index.php#map-section">Map & Routes</a>
            <a href="../index.php#food">Local Food</a>
            <a href="../index.php#transport">Transport</a>
            <a href="../index.php#plan">Plan Trip</a>
        </nav>

        <a href="../index.php#explore" class="header-cta">Back to Home ↗</a>
    </header>


    <!-- MAIN CONTENT -->
    <main>

        <!-- HERO SECTION -->
        <section class="hero destination-hero">
            <div class="hero-overlay"></div>

            <div class="hero-content">
                <span class="eyebrow hero-eyebrow">EXPLORE THE ISLAND</span>
                <h1>
                    Where to go in Cebu -<br>
                    <em>and how to get there.</em>
                </h1>
                <p>
                    Honest, practical guides to the best of Cebu, with real distances and drive times from Cebu City and Mactan airport. Select a route below to trace it on the map.
                </p>
                <div class="hero-actions">
                    <a href="#routes" class="button button-gold">View Routes ↓</a>
                    <a href="../index.php#explore" class="button button-glass">◎ Back to Attractions</a>
                </div>
                <div class="hero-footnote">✦ Hover or tap a route to trace it on the map.</div>
            </div>

            <div class="hero-caption">
                <span>02 / ROUTES & DESTINATIONS</span>
                <span>Cebu, Philippines</span>
            </div>

            <!-- ANIMATED WAVE -->
            <div class="hero-wave" aria-hidden="true">
                <svg class="wave-svg wave-back" viewBox="0 0 2880 120" preserveAspectRatio="none">
                    <path d="M0 50 C240 0 480 100 720 50 S1200 0 1440 50 S1920 100 2160 50 S2640 0 2880 50 V120 H0 Z"></path>
                </svg>
                <svg class="wave-svg wave-front" viewBox="0 0 2880 120" preserveAspectRatio="none">
                    <path d="M0 65 C240 110 480 20 720 65 S1200 110 1440 65 S1920 20 2160 65 S2640 110 2880 65 V120 H0 Z"></path>
                </svg>
            </div>
        </section>


        <!-- MAIN GRID: MAP & ROUTES -->
        <section class="section destination-grid-section" id="routes">
            
            <div class="section-heading">
                <div>
                    <span class="eyebrow">FIND YOUR WAY</span>
                    <h2>Routes we <em>drive</em></h2>
                    <p>Hover or tap a route to trace it on the map - solid lines are roads, dashed lines are boats and ferries.</p>
                </div>
            </div>

            <div class="destination-layout">
                
                <!-- LEFT: INTERACTIVE MAP -->
                <div class="map-wrapper">
                    <div id="map"></div>
                </div>

                <!-- RIGHT: ROUTE PILLS -->
                <div class="routes-panel">
                    
                    <!-- FROM CEBU CITY -->
                    <div class="routes-group">
                        <span class="route-group-title">From Cebu City</span>
                        <div class="pills-container">
                            <div class="pill" data-route="cebu-moalboal">Cebu City → Moalboal</div>
                            <div class="pill" data-route="cebu-oslob">Cebu City → Oslob</div>
                            <div class="pill" data-route="cebu-kawasan">Cebu City → Kawasan Falls</div>
                            <div class="pill" data-route="cebu-bantayan">Cebu City → Bantayan Island</div>
                            <div class="pill" data-route="cebu-malapascua">Cebu City → Malapascua Island</div>
                            <div class="pill" data-route="cebu-camotes">Cebu City → Camotes Islands</div>
                            <div class="pill" data-route="cebu-bohol">Cebu City → Bohol</div>
                            <div class="pill" data-route="cebu-dumaguete">Cebu City → Dumaguete</div>
                            <div class="pill" data-route="cebu-siquijor">Cebu City → Siquijor</div>
                            <div class="pill" data-route="cebu-balamban">Cebu City → Balamban</div>
                            <div class="pill" data-route="cebu-carcar">Cebu City → Carcar City</div>
                            <div class="pill" data-route="cebu-simala">Cebu City → Simala Shrine</div>
                            <div class="pill" data-route="cebu-osmena">Cebu City → Osmeña Peak</div>
                            <div class="pill" data-route="cebu-pier">Cebu City Pier → Mactan-Cebu Airport</div>
                            <div class="pill" data-route="cebu-mactan">Cebu City → Mactan-Cebu Airport</div>
                            <div class="pill" data-route="cebu-highlands">Cebu City → Cebu Highlands</div>
                        </div>
                    </div>

                    <!-- FROM MACTAN AIRPORT -->
                    <div class="routes-group">
                        <span class="route-group-title">From Mactan Airport</span>
                        <div class="pills-container">
                            <div class="pill" data-route="mactan-moalboal">Mactan Airport → Moalboal</div>
                            <div class="pill" data-route="mactan-oslob">Mactan Airport → Oslob</div>
                            <div class="pill" data-route="mactan-kawasan">Mactan Airport → Kawasan Falls</div>
                            <div class="pill" data-route="mactan-bantayan">Mactan Airport → Bantayan Island</div>
                            <div class="pill" data-route="mactan-malapascua">Mactan Airport → Malapascua Island</div>
                            <div class="pill" data-route="mactan-camotes">Mactan Airport → Camotes Islands</div>
                            <div class="pill" data-route="mactan-bohol">Mactan Airport → Bohol</div>
                            <div class="pill" data-route="mactan-dumaguete">Mactan Airport → Dumaguete</div>
                            <div class="pill" data-route="mactan-siquijor">Mactan Airport → Siquijor</div>
                            <div class="pill" data-route="mactan-balamban">Mactan Airport → Balamban</div>
                            <div class="pill" data-route="mactan-cebu">Mactan Airport → Cebu City</div>
                            <div class="pill" data-route="mactan-highlands">Mactan Airport → Cebu Highlands</div>
                            <div class="pill" data-route="mactan-osmena">Mactan Airport → Osmeña Peak</div>
                            <div class="pill" data-route="mactan-pier">Mactan Airport → Cebu City Pier</div>
                        </div>
                    </div>

                    <!-- SOUTH CEBU ROUTES -->
                    <div class="routes-group">
                        <span class="route-group-title">South Cebu & Coastal</span>
                        <div class="pills-container">
                            <div class="pill" data-route="oslob-moalboal">Oslob → Moalboal</div>
                            <div class="pill" data-route="moalboal-oslob">Moalboal → Oslob</div>
                            <div class="pill" data-route="carcar-simala">Carcar City → Simala Shrine</div>
                            <div class="pill" data-route="simala-oslob">Simala Shrine → Oslob</div>
                            <div class="pill" data-route="simala-carcar">Simala Shrine → Carcar City</div>
                            <div class="pill" data-route="simala-cebu">Simala Shrine → Cebu City</div>
                            <div class="pill" data-route="simala-mactan">Simala Shrine → Mactan-Cebu Airport</div>
                            <div class="pill" data-route="carcar-cebu">Carcar City → Cebu City</div>
                            <div class="pill" data-route="carcar-mactan">Carcar City → Mactan-Cebu Airport</div>
                            <div class="pill" data-route="carcar-oslob">Carcar City → Oslob</div>
                            <div class="pill" data-route="oslob-carcar">Oslob → Carcar City</div>
                            <div class="pill" data-route="oslob-dumaguete">Oslob → Dumaguete</div>
                            <div class="pill" data-route="dumaguete-oslob">Dumaguete → Oslob</div>
                            <div class="pill" data-route="oslob-simala">Oslob → Simala Shrine</div>
                            <div class="pill" data-route="oslob-cebu">Oslob → Cebu City</div>
                            <div class="pill" data-route="oslob-mactan">Oslob → Mactan-Cebu Airport</div>
                            <div class="pill" data-route="moalboal-cebu">Moalboal → Cebu City</div>
                            <div class="pill" data-route="moalboal-mactan">Moalboal → Mactan-Cebu Airport</div>
                            <div class="pill" data-route="moalboal-liloan">Moalboal → Liloan Port</div>
                            <div class="pill" data-route="liloan-moalboal">Liloan Port → Moalboal</div>
                            <div class="pill" data-route="moalboal-hagnaya">Moalboal → Hagnaya Port</div>
                            <div class="pill" data-route="hagnaya-moalboal">Hagnaya Port → Moalboal</div>
                            <div class="pill" data-route="moalboal-maya">Moalboal → Maya Port</div>
                            <div class="pill" data-route="maya-moalboal">Maya Port → Moalboal</div>
                        </div>
                    </div>

                    <!-- NORTH & ISLAND CONNECTIONS -->
                    <div class="routes-group">
                        <span class="route-group-title">North Cebu & Islands</span>
                        <div class="pills-container">
                            <div class="pill" data-route="bantayan-cebu">Bantayan Island → Cebu City</div>
                            <div class="pill" data-route="bantayan-mactan">Bantayan Island → Mactan-Cebu Airport</div>
                            <div class="pill" data-route="malapascua-cebu">Malapascua Island → Cebu City</div>
                            <div class="pill" data-route="malapascua-mactan">Malapascua Island → Mactan-Cebu Airport</div>
                            <div class="pill" data-route="malapascua-moalboal">Malapascua Island → Moalboal</div>
                            <div class="pill" data-route="moalboal-malapascua">Moalboal → Malapascua Island</div>
                            <div class="pill" data-route="malapascua-bohol">Malapascua Island → Bohol</div>
                            <div class="pill" data-route="bohol-malapascua">Bohol → Malapascua Island</div>
                            <div class="pill" data-route="camotes-cebu">Camotes Islands → Cebu City</div>
                            <div class="pill" data-route="camotes-mactan">Camotes Islands → Mactan-Cebu Airport</div>
                            <div class="pill" data-route="bohol-moalboal">Bohol → Moalboal</div>
                            <div class="pill" data-route="moalboal-bohol">Moalboal → Bohol</div>
                            <div class="pill" data-route="bohol-cebu">Bohol → Cebu City</div>
                            <div class="pill" data-route="bohol-mactan">Bohol → Mactan-Cebu Airport</div>
                        </div>
                    </div>

                    <!-- FERRIES & PORTS -->
                    <div class="routes-group">
                        <span class="route-group-title">Ferries & Port Transfers</span>
                        <div class="pills-container">
                            <div class="pill" data-route="mactan-resorts">Mactan Resorts → Cebu City</div>
                            <div class="pill" data-route="cebu-resorts">Cebu City → Mactan Resorts</div>
                            <div class="pill" data-route="resorts-moalboal">Mactan Resorts → Moalboal</div>
                            <div class="pill" data-route="resorts-oslob">Mactan Resorts → Oslob</div>
                            <div class="pill" data-route="resorts-kawasan">Mactan Resorts → Kawasan Falls</div>
                            <div class="pill" data-route="kawasan-resorts">Kawasan Falls → Mactan Resorts</div>
                            <div class="pill" data-route="mactan-maya">Mactan-Cebu Airport → Maya Port</div>
                            <div class="pill" data-route="maya-cebu">Maya Port → Cebu City</div>
                            <div class="pill" data-route="maya-mactan">Maya Port → Mactan-Cebu Airport</div>
                            <div class="pill" data-route="cebu-maya">Cebu City → Maya Port</div>
                            <div class="pill" data-route="pier-moalboal">Cebu City Pier → Moalboal</div>
                            <div class="pill" data-route="moalboal-pier">Moalboal → Cebu City Pier</div>
                            <div class="pill" data-route="mactan-lapu">Mactan / Lapu-Lapu → Cebu City Pier</div>
                            <div class="pill" data-route="pier-mactan-lapu">Cebu City Pier → Mactan / Lapu-Lapu</div>
                            <div class="pill" data-route="osmena-cebu">Osmeña Peak → Cebu City</div>
                            <div class="pill" data-route="osmena-mactan">Osmeña Peak → Mactan-Cebu Airport</div>
                            <div class="pill" data-route="sumilon-cebu">Sumilon Island → Cebu City</div>
                            <div class="pill" data-route="sumilon-mactan">Sumilon Island → Mactan-Cebu Airport</div>
                            <div class="pill" data-route="sumilon-oslob">Sumilon Island → Oslob</div>
                            <div class="pill" data-route="mactan-sumilon">Mactan-Cebu Airport → Sumilon Island</div>
                            <div class="pill" data-route="cebu-sumilon">Cebu City → Sumilon Island</div>
                            <div class="pill" data-route="balamban-mactan">Balamban → Mactan-Cebu Airport</div>
                            <div class="pill" data-route="balamban-cebu">Balamban → Cebu City</div>
                        </div>
                    </div>
                    
                    <div class="route-legend">
                        <span class="legend-item"><span class="legend-line road"></span> Road Transfer</span>
                        <span class="legend-item"><span class="legend-line ferry"></span> Boat / Ferry</span>
                    </div>

                </div>

            </div>

            <!-- BOTTOM NAVIGATION BUTTON -->
            <div class="browse-destinations-wrap">
                <a class="button button-dark browse-destinations" href="../index.php#explore">
                    ← Back to Popular Attractions
                </a>
            </div>

        </section>

    </main>


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
                <a href="../index.php#transport">Transport Tips</a>
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