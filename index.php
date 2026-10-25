
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
          content="Discover Cebu attractions, local food, transport tips and travel routes.">

    <title>Smart Tourist Navigator | Discover Cebu</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
</head>

<body>

   
    <header class="site-header" id="home">

        <a class="brand" href="#home">
            <span class="brand-mark">✦</span>
            <span>Smart Tourist <strong>Navigator</strong></span>
        </a>

        <button class="menu-toggle"
                id="menuToggle"
                aria-label="Toggle navigation"
                aria-expanded="false">
            ☰
        </button>

        <nav class="nav-links" id="navLinks">
            <a href="#home">Home</a>
            <!-- Scrolls to Popular Attractions on this page -->
            <a href="#explore">Destinations</a>
            <a href="#map-section">Map & Routes</a>
            <a href="#food">Local Food</a>
            <a href="#transport">Transport</a>
            <a href="#plan">Plan Trip</a>
        </nav>

        <a href="#explore" class="header-cta">Start Exploring ↗</a>

    </header>


    <!-- MAIN CONTENT -->
    <main>

        <!-- HERO SECTION -->
        <section class="hero">

            <div class="hero-overlay"></div>

            <div class="hero-content">

                <span class="eyebrow hero-eyebrow">
                    YOUR LOCAL GUIDE TO CEBU
                </span>

                <h1>
                    Discover the<br>
                    <em>beauty of Cebu.</em>
                </h1>

                <p>
                    Find breathtaking destinations, local flavors,
                    and helpful travel routes for your next island adventure.
                </p>

                <div class="hero-actions">
                    <a href="#explore" class="button button-gold">
                        Explore Destinations →
                    </a>

                    <a href="#map-section" class="button button-glass">
                        ◎ View Interactive Map
                    </a>
                </div>

                    <div class="hero-footnote">
            <span>✦</span> Explore local. Travel smarter.
        </div>
            </div>

            <div class="hero-caption">
                <span>01 / EXPLORE THE ISLAND</span>
                <span>Cebu, Philippines</span>
            </div>

            <!-- ANIMATED WAVE -->
            <div class="hero-wave" aria-hidden="true">

                <svg class="wave-svg wave-back"
                     viewBox="0 0 2880 120"
                     preserveAspectRatio="none">
                    <path d="M0 50 C240 0 480 100 720 50 S1200 0 1440 50 S1920 100 2160 50 S2640 0 2880 50 V120 H0 Z"></path>
                </svg>

                <svg class="wave-svg wave-front"
                     viewBox="0 0 2880 120"
                     preserveAspectRatio="none">
                    <path d="M0 65 C240 110 480 20 720 65 S1200 110 1440 65 S1920 20 2160 65 S2640 110 2880 65 V120 H0 Z"></path>
                </svg>

            </div>

        </section>


        <!-- INTRODUCTION STRIP -->
        <section class="intro-strip">

            <div>
                <span class="strip-number">01</span>
                <p>
                    <strong>Find places</strong>
                    <small>Discover popular spots and hidden gems.</small>
                </p>
            </div>

            <div>
                <span class="strip-number">02</span>
                <p>
                    <strong>Navigate easier</strong>
                    <small>View locations and open map directions.</small>
                </p>
            </div>

            <div>
                <span class="strip-number">03</span>
                <p>
                    <strong>Plan your trip</strong>
                    <small>Build a simple starting itinerary.</small>
                </p>
            </div>

        </section>


        <!-- POPULAR DESTINATIONS -->
        <section class="section" id="explore">

            <div class="section-heading">
                <div>
                    <span class="eyebrow">FIND YOUR NEXT ADVENTURE</span>
                    <h2>Popular <em>attractions</em></h2>
                    <p>
                        From turquoise waterfalls and island beaches
                        to Cebu's rich cultural heritage.
                    </p>
                </div>

                <a class="text-link" href="#map-section">
                    Explore the map ↗
                </a>
            </div>

            <!-- SEARCH AND FILTERS -->
            <div class="search-row">

                <label class="search-field">
                    <span>⌕</span>
                    <input
                        id="destinationSearch"
                        type="search"
                        placeholder="Search destinations, places, or activities..."
                        aria-label="Search destinations">
                </label>

                <div class="filter-buttons">
                    <button class="filter-button active" data-filter="all">
                        All places
                    </button>

                    <button class="filter-button" data-filter="nature">
                        Nature
                    </button>

                    <button class="filter-button" data-filter="beach">
                        Beaches
                    </button>

                    <button class="filter-button" data-filter="culture">
                        Culture
                    </button>
                </div>

            </div>


            <!-- DESTINATION CARDS -->
            <div class="destination-grid" id="destinationGrid">

                <!-- KAWASAN FALLS -->
                <article class="destination-card"
                         data-category="nature"
                         data-search="kawasan falls badian waterfall nature adventure">

                    <div class="card-image kawasan">
                        <span class="card-tag">NATURE</span>
                        <span class="image-location">Badian, Cebu</span>
                        <span class="arrival-time">◷ Suggested arrival: 7:00–9:00 AM</span>
                    </div>

                    <div class="card-content">
                        <span class="card-kicker">WATERFALLS & ADVENTURE</span>
                        <h3>Kawasan Falls</h3>
                        <p>
                            Discover turquoise water cascades
                            and tropical scenery in southern Cebu.
                        </p>

                        <button class="map-trigger"
                                data-lat="9.8241"
                                data-lng="123.3745"
                                data-title="Kawasan Falls, Badian"
                                data-desc="Waterfalls and outdoor adventure in Badian, southern Cebu.">
                            View map & directions ↗
                        </button>
                    </div>

                </article>


                <!-- BANTAYAN ISLAND -->
                <article class="destination-card"
                         data-category="beach"
                         data-search="bantayan island beach white sand sea">

                    <div class="card-image bantayan">
                        <span class="card-tag">BEACH</span>
                        <span class="image-location">Bantayan Island</span>
                        <span class="arrival-time">◷ Suggested arrival: 8:00–10:00 AM</span>
                    </div>

                    <div class="card-content">
                        <span class="card-kicker">ISLAND ESCAPE</span>
                        <h3>Bantayan Island</h3>
                        <p>
                            Enjoy white-sand shores, clear waters,
                            and a relaxed island atmosphere.
                        </p>

                        <button class="map-trigger"
                                data-lat="11.2056"
                                data-lng="123.7331"
                                data-title="Bantayan Island"
                                data-desc="Island destination in northern Cebu known for its beaches.">
                            View map & directions ↗
                        </button>
                    </div>

                </article>


                <!-- TEMPLE OF LEAH -->
                <article class="destination-card"
                         data-category="culture"
                         data-search="temple of leah cebu city architecture culture landmark">

                    <div class="card-image temple">
                        <span class="card-tag">CULTURE</span>
                        <span class="image-location">Cebu City</span>
                        <span class="arrival-time">◷ Suggested arrival: 3:00–5:00 PM</span>
                    </div>

                    <div class="card-content">
                        <span class="card-kicker">ARCHITECTURE & VIEWS</span>
                        <h3>Temple of Leah</h3>
                        <p>
                            A grand Roman-inspired landmark
                            with panoramic views over Cebu City.
                        </p>

                        <button class="map-trigger"
                                data-lat="10.3541"
                                data-lng="123.8647"
                                data-title="Temple of Leah"
                                data-desc="A Roman-inspired architectural landmark overlooking Cebu City.">
                            View map & directions ↗
                        </button>
                    </div>

                </article>


                <!-- OSLOB -->
                <article class="destination-card"
                         data-category="nature"
                         data-search="oslob whale shark marine ocean southern cebu">

                    <div class="card-image oslob">
                        <span class="card-tag">MARINE LIFE</span>
                        <span class="image-location">Oslob, Cebu</span>
                        <span class="arrival-time">◷ Suggested arrival: 6:00–8:00 AM</span>
                    </div>

                    <div class="card-content">
                        <span class="card-kicker">COASTAL EXPERIENCE</span>
                        <h3>Oslob</h3>
                        <p>
                            Explore coastal scenery and learn about
                            marine life and responsible tourism.
                        </p>

                        <button class="map-trigger"
                                data-lat="9.5255"
                                data-lng="123.3761"
                                data-title="Oslob, Cebu"
                                data-desc="Coastal destination in southern Cebu. Check local guidance before visiting.">
                            View map & directions ↗
                        </button>
                    </div>

                </article>


                <!-- MOALBOAL -->
                <article class="destination-card"
                         data-category="nature"
                         data-search="moalboal sardine run snorkeling diving marine sanctuary">

                    <div class="card-image moalboal">
                        <span class="card-tag">OCEAN</span>
                        <span class="image-location">Moalboal, Cebu</span>
                        <span class="arrival-time">◷ Suggested arrival: 7:00–9:00 AM</span>
                    </div>

                    <div class="card-content">
                        <span class="card-kicker">SNORKEL & DIVE</span>
                        <h3>Moalboal Sardine Run</h3>
                        <p>
                            Discover the famous sardine shoals
                            and rich marine life off Moalboal's coast.
                        </p>

                        <button class="map-trigger"
                                data-lat="9.9576"
                                data-lng="123.3855"
                                data-title="Moalboal Sardine Run"
                                data-desc="Marine attraction near Panagsama Beach in Moalboal.">
                            View map & directions ↗
                        </button>
                    </div>

                </article>


                <!-- MAGELLAN'S CROSS -->
                <article class="destination-card"
                         data-category="culture"
                         data-search="magellans cross cebu city history heritage landmark">

                    <div class="card-image magellan">
                        <span class="card-tag">HERITAGE</span>
                        <span class="image-location">Cebu City</span>
                        <span class="arrival-time">◷ Suggested arrival: 8:00–10:00 AM</span>
                    </div>

                    <div class="card-content">
                        <span class="card-kicker">HISTORY & CULTURE</span>
                        <h3>Magellan's Cross</h3>
                        <p>
                            Visit one of Cebu City's best-known
                            historic landmarks near the Basilica.
                        </p>

                        <button class="map-trigger"
                                data-lat="10.2936"
                                data-lng="123.8995"
                                data-title="Magellan's Cross"
                                data-desc="Historic landmark beside the Basilica Minore del Santo Niño in Cebu City.">
                            View map & directions ↗
                        </button>
                    </div>

                </article>

            </div>


            <!-- BROWSE ALL DESTINATIONS: OPENS SEPARATE PHP PAGE -->
            <div class="browse-destinations-wrap">
                <a class="button button-dark browse-destinations"
                   href="pages/destination.php">
                    Browse All Destinations
                    <span aria-hidden="true">↗</span>
                </a>
            </div>

            <p class="small-note arrival-disclaimer">
                Arrival times are suggested planning windows, not official opening hours.
                Check each attraction's current schedule and local travel conditions before visiting.
            </p>

            <p id="noResults" class="no-results" hidden>
                No destinations found. Try another search or category.
            </p>

        </section>


        <!-- INTERACTIVE MAP -->
        <section class="section map-section" id="map-section">

            <div class="section-heading">
                <div>
                    <span class="eyebrow">FIND YOUR WAY</span>
                    <h2>Interactive <em>location navigator</em></h2>
                    <p>
                        Select a destination to center the map
                        and open directions in Google Maps.
                    </p>
                </div>
            </div>

            <div class="map-panel">

                <aside class="map-info">
                    <span class="pill">SELECTED LOCATION</span>

                    <h3 id="mapLocationTitle">Cebu Island Overview</h3>

                    <p id="mapLocationDesc">
                        Choose "View map & directions" on any
                        destination card to see its location here.
                    </p>

                    <div class="map-coordinates">
                        ◎ Map location selected
                    </div>

                    <a id="externalDirections"
                       class="button button-dark"
                       href="https://www.google.com/maps/search/?api=1&query=Cebu+Philippines"
                       target="_blank"
                       rel="noopener">
                        Open in Google Maps ↗
                    </a>
                </aside>

                <div class="map-frame">
                    <iframe
                        id="mapFrame"
                        title="Map of Cebu and selected attractions"
                        loading="lazy"
                        src="https://www.openstreetmap.org/export/embed.html?bbox=123.3%2C9.4%2C124.0%2C11.3&layer=mapnik&marker=10.3157%2C123.8854">
                    </iframe>
                </div>

            </div>

            <p class="small-note">
                Map data is provided by OpenStreetMap.
                An internet connection is required.
            </p>

        </section>


        <!-- LOCAL FOOD -->
        <section class="section food-section" id="food">

            <div class="section-heading">
                <div>
                    <span class="eyebrow">A TASTE OF CEBU</span>
                    <h2>Local food & <em>delicacies</em></h2>
                    <p>
                        Make room for local flavors and memorable
                        food stops on your trip.
                    </p>
                </div>
            </div>

            <div class="food-grid">

                <article class="food-card">
                    <div class="food-image lechon"></div>

                    <div class="food-content">
                        <span class="card-kicker">MUST-TRY DISH</span>
                        <h3>Cebu Lechon</h3>
                        <p>
                            Roasted pork known for its crisp skin
                            and flavorful meat.
                        </p>
                    </div>
                </article>

                <article class="food-card">
                    <div class="food-image mango"></div>

                    <div class="food-content">
                        <span class="card-kicker">POPULAR PASALUBONG</span>
                        <h3>Dried Mangoes</h3>
                        <p>
                            A sweet Cebu favorite to bring home
                            or share with friends.
                        </p>
                    </div>
                </article>

                <article class="food-card">
                    <div class="food-image market"></div>

                    <div class="food-content">
                        <span class="card-kicker">FOOD & NIGHTLIFE</span>
                        <h3>Sugbo Mercado</h3>
                        <p>
                            A popular food-market concept with
                            local bites and street food.
                        </p>
                    </div>
                </article>

            </div>

        </section>


        <!-- TRANSPORTATION -->
        <section class="section transport-section" id="transport">

            <div class="section-heading">
                <div>
                    <span class="eyebrow">GETTING AROUND</span>
                    <h2>Explore Cebu <em>with ease</em></h2>
                    <p>
                        Consider your destination, distance,
                        and local travel conditions.
                    </p>
                </div>
            </div>

            <div class="transport-grid">

                <article class="transport-card">
                    <span class="transport-icon">▤</span>
                    <h3>Jeepneys & Buses</h3>
                    <p>
                        Common options for city travel and many
                        provincial routes. Check current routes and fares locally.
                    </p>
                </article>

                <article class="transport-card">
                    <span class="transport-icon">↗</span>
                    <h3>Taxis & Ride-Hailing</h3>
                    <p>
                        Convenient for point-to-point travel,
                        especially around urban areas.
                    </p>
                </article>

                <article class="transport-card">
                    <span class="transport-icon">≈</span>
                    <h3>Ferries & Fastcrafts</h3>
                    <p>
                        Useful for connecting Cebu with nearby islands.
                        Confirm schedules with operators.
                    </p>
                </article>

                <article class="transport-card">
                    <span class="transport-icon">⌁</span>
                    <h3>Local Motorcycles</h3>
                    <p>
                        Available in some areas for short local trips.
                        Agree on fare and prioritize safety.
                    </p>
                </article>

            </div>

        </section>


        <!-- TRIP PLANNER -->
        <section class="trip-section" id="plan">

            <div class="trip-card">

                <div class="trip-heading">
                    <span class="eyebrow hero-eyebrow">MAKE IT YOUR OWN</span>
                    <h2>Plan your Cebu <em>adventure</em></h2>
                    <p>
                        Choose a travel style and trip length
                        to get a simple starting suggestion.
                    </p>
                </div>

                <form id="tripForm" class="trip-form">

                    <div class="form-field">
                        <label for="travelerName">Name (optional)</label>
                        <input
                            id="travelerName"
                            type="text"
                            placeholder="Your name">
                    </div>

                    <div class="form-field">
                        <label for="travelStyle">Travel style</label>

                        <select id="travelStyle">
                            <option value="adventure">
                                Adventure & waterfalls
                            </option>
                            <option value="beach">
                                Island hopping & beaches
                            </option>
                            <option value="culture">
                                Food & cultural heritage
                            </option>
                            <option value="relax">
                                Relaxation & coastal views
                            </option>
                        </select>
                    </div>

                    <div class="form-field">
                        <label for="startDate">Start date (optional)</label>
                        <input id="startDate" type="date">
                    </div>

                    <div class="form-field">
                        <label for="tripDays">Number of days</label>
                        <input
                            id="tripDays"
                            type="number"
                            min="1"
                            max="14"
                            value="3"
                            required>
                    </div>

                    <button class="button button-gold form-submit"
                            type="submit">
                        Create trip suggestion →
                    </button>

                </form>


                <!-- GENERATED ITINERARY -->
                <div id="itineraryResult"
                     class="itinerary-result"
                     hidden
                     aria-live="polite">

                    <h3 id="resultTitle"></h3>
                    <p id="resultDescription"></p>
                    <p id="resultDates" class="result-date"></p>

                    <p class="small-note">
                        This is a sample suggestion, not a live booking
                        or optimized route. Confirm opening hours,
                        transport, and local conditions before traveling.
                    </p>

                </div>

            </div>

        </section>

    </main>


    <!-- FOOTER -->
    <footer class="site-footer" id="about">

        <div class="footer-main">

            <div class="footer-brand">
                <a class="brand" href="#home">
                    <span class="brand-mark">✦</span>
                    <span>Smart Tourist <strong>Navigator</strong></span>
                </a>

                <p>
                    Your local guide to attractions, food,
                    and travel information across Cebu.
                </p>
            </div>

            <div>
                <h4>Explore</h4>
                <a href="#explore">Destinations</a>
                <a href="#map-section">Map & Routes</a>
                <a href="#food">Local Food</a>
            </div>

            <div>
                <h4>Plan</h4>
                <a href="#transport">Transport Tips</a>
                <a href="#plan">Plan Your Trip</a>
                <a href="#about">About the Project</a>
            </div>

        </div>

        <div class="footer-bottom">
            <span>
                © <span id="currentYear"></span>
                Smart Tourist Navigator — Cebu
            </span>

            <span>Made for curious travelers.</span>
        </div>

    </footer>


    <!-- NOTIFICATION MESSAGE -->
    <div id="toast"
         class="toast"
         role="status"
         aria-live="polite">
    </div>

</body>
</html>
