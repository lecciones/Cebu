<?php
$pageTitle = 'Smart Tourist Navigator | Discover Cebu';
$pageDescription = 'Discover Cebu attractions, local food, transport tips and travel routes.';
include __DIR__ . '/includes/header.php';
?>

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

            <!-- 1. KAWASAN FALLS -->
            <article class="destination-card"
                     data-category="nature"
                     data-search="kawasan falls badian waterfall nature adventure">
                <a href="pages/destinations/kawasan-falls.php" class="card-link" aria-label="Read more about Kawasan Falls">
                    <div class="card-image kawasan">
                        <span class="card-tag">NATURE</span>
                        <span class="image-location">Badian, Cebu</span>
                        <span class="travel-time">🚗 2.5 - 3 hrs</span>
                    </div>
                </a>

                <div class="card-content">
                    <span class="card-kicker">WATERFALLS & ADVENTURE</span>
                    <h3><a href="pages/destinations/kawasan-falls.php">Kawasan Falls</a></h3>
                    <p>Discover turquoise water cascades and tropical scenery in southern Cebu.</p>

                    <button class="map-trigger"
                            data-lat="9.8241"
                            data-lng="123.3745"
                            data-title="Kawasan Falls, Badian"
                            data-desc="Waterfalls and outdoor adventure in Badian, southern Cebu.">
                        View map & directions ↗
                    </button>
                </div>
            </article>

            <!-- 2. BANTAYAN ISLAND -->
            <article class="destination-card"
                     data-category="beach"
                     data-search="bantayan island beach white sand sea">
                <a href="pages/destinations/bantayan-island.php" class="card-link" aria-label="Read more about Bantayan Island">
                    <div class="card-image bantayan">
                        <span class="card-tag">BEACH</span>
                        <span class="image-location">Bantayan Island</span>
                        <span class="travel-time">⛴️ 3 - 4 hrs</span>
                    </div>
                </a>

                <div class="card-content">
                    <span class="card-kicker">ISLAND ESCAPE</span>
                    <h3><a href="pages/destinations/bantayan-island.php">Bantayan Island</a></h3>
                    <p>Enjoy white-sand shores, clear waters, and a relaxed island atmosphere.</p>

                    <button class="map-trigger"
                            data-lat="11.2056"
                            data-lng="123.7331"
                            data-title="Bantayan Island"
                            data-desc="Island destination in northern Cebu known for its beaches.">
                        View map & directions ↗
                    </button>
                </div>
            </article>

            <!-- 3. TEMPLE OF LEAH -->
            <article class="destination-card"
                     data-category="culture"
                     data-search="temple of leah cebu city architecture culture landmark">
                <a href="pages/destinations/temple-leah.php" class="card-link" aria-label="Read more about Temple of Leah">
                    <div class="card-image temple">
                        <span class="card-tag">CULTURE</span>
                        <span class="image-location">Cebu City</span>
                        <span class="travel-time">🚗 30 - 45 min</span>
                    </div>
                </a>

                <div class="card-content">
                    <span class="card-kicker">ARCHITECTURE & VIEWS</span>
                    <h3><a href="pages/destinations/temple-leah.php">Temple of Leah</a></h3>
                    <p>A grand Roman-inspired landmark with panoramic views over Cebu City.</p>

                    <button class="map-trigger"
                            data-lat="10.3541"
                            data-lng="123.8647"
                            data-title="Temple of Leah"
                            data-desc="A Roman-inspired architectural landmark overlooking Cebu City.">
                        View map & directions ↗
                    </button>
                </div>
            </article>

            <!-- 4. OSLOB -->
            <article class="destination-card"
                     data-category="nature"
                     data-search="oslob whale shark marine ocean southern cebu">
                <a href="pages/destinations/oslob.php" class="card-link" aria-label="Read more about Oslob">
                    <div class="card-image oslob">
                        <span class="card-tag">MARINE LIFE</span>
                        <span class="image-location">Oslob, Cebu</span>
                        <span class="travel-time">🚗 3.5 - 4 hrs</span>
                    </div>
                </a>

                <div class="card-content">
                    <span class="card-kicker">COASTAL EXPERIENCE</span>
                    <h3><a href="pages/destinations/oslob.php">Oslob</a></h3>
                    <p>Explore coastal scenery and learn about marine life and responsible tourism.</p>

                    <button class="map-trigger"
                            data-lat="9.5255"
                            data-lng="123.3761"
                            data-title="Oslob, Cebu"
                            data-desc="Coastal destination in southern Cebu. Check local guidance before visiting.">
                        View map & directions ↗
                    </button>
                </div>
            </article>

            <!-- 5. MOALBOAL -->
            <article class="destination-card"
                     data-category="nature"
                     data-search="moalboal sardine run snorkeling diving marine sanctuary">
                <a href="pages/destinations/moalboal.php" class="card-link" aria-label="Read more about Moalboal">
                    <div class="card-image moalboal">
                        <span class="card-tag">OCEAN</span>
                        <span class="image-location">Moalboal, Cebu</span>
                        <span class="travel-time">🚗 2.5 - 3 hrs</span>
                    </div>
                </a>

                <div class="card-content">
                    <span class="card-kicker">SNORKEL & DIVE</span>
                    <h3><a href="pages/destinations/moalboal.php">Moalboal Sardine Run</a></h3>
                    <p>Discover the famous sardine shoals and rich marine life off Moalboal's coast.</p>

                    <button class="map-trigger"
                            data-lat="9.9576"
                            data-lng="123.3855"
                            data-title="Moalboal Sardine Run"
                            data-desc="Marine attraction near Panagsama Beach in Moalboal.">
                        View map & directions ↗
                    </button>
                </div>
            </article>

            <!-- 6. MAGELLAN'S CROSS -->
            <article class="destination-card"
                     data-category="culture"
                     data-search="magellans cross cebu city history heritage landmark">
                <a href="pages/destinations/magellan-cross.php" class="card-link" aria-label="Read more about Magellan's Cross">
                    <div class="card-image magellan">
                        <span class="card-tag">HERITAGE</span>
                        <span class="image-location">Cebu City</span>
                        <span class="travel-time">🚗 15 - 30 min</span>
                    </div>
                </a>

                <div class="card-content">
                    <span class="card-kicker">HISTORY & CULTURE</span>
                    <h3><a href="pages/destinations/magellan-cross.php">Magellan's Cross</a></h3>
                    <p>Visit one of Cebu City's best-known historic landmarks near the Basilica.</p>

                    <button class="map-trigger"
                            data-lat="10.2936"
                            data-lng="123.8995"
                            data-title="Magellan's Cross"
                            data-desc="Historic landmark beside the Basilica Minore del Santo Niño in Cebu City.">
                        View map & directions ↗
                    </button>
                </div>
            </article>

            <!-- 7. BASILICA DEL SANTO NIÑO -->
            <article class="destination-card"
                     data-category="culture"
                     data-search="basilica del santo nino cebu city church history heritage">
                <a href="pages/destinations/basilica.php" class="card-link" aria-label="Read more about Basilica del Santo Niño">
                    <div class="card-image basilica">
                        <span class="card-tag">HERITAGE</span>
                        <span class="image-location">Cebu City</span>
                        <span class="travel-time">🚗 15 - 30 min</span>
                    </div>
                </a>

                <div class="card-content">
                    <span class="card-kicker">OLDEST CHURCH</span>
                    <h3><a href="pages/destinations/basilica.php">Basilica del Santo Niño</a></h3>
                    <p>The oldest Roman Catholic church in the Philippines, home to the revered Santo Niño statue.</p>

                    <button class="map-trigger"
                            data-lat="10.2946"
                            data-lng="123.9024"
                            data-title="Basilica del Santo Niño"
                            data-desc="The oldest Roman Catholic church in the Philippines.">
                        View map & directions ↗
                    </button>
                </div>
            </article>

            <!-- 8. FORT SAN PEDRO -->
            <article class="destination-card"
                     data-category="culture"
                     data-search="fort san pedro cebu city history spanish colonial">
                <a href="pages/destinations/san-pedro.php" class="card-link" aria-label="Read more about Fort San Pedro">
                    <div class="card-image fort">
                        <span class="card-tag">HERITAGE</span>
                        <span class="image-location">Cebu City</span>
                        <span class="travel-time">🚗 15 - 30 min</span>
                    </div>
                </a>

                <div class="card-content">
                    <span class="card-kicker">SPANISH FORT</span>
                    <h3><a href="pages/destinations/san-pedro.php">Fort San Pedro</a></h3>
                    <p>A historic Spanish military fort built shortly after Magellan's arrival, now a peaceful garden.</p>

                    <button class="map-trigger"
                            data-lat="10.2928"
                            data-lng="123.9058"
                            data-title="Fort San Pedro"
                            data-desc="The oldest triangular bastion fort in the Philippines.">
                        View map & directions ↗
                    </button>
                </div>
            </article>

            <!-- 9. SUMILON ISLAND -->
            <article class="destination-card"
                     data-category="beach"
                     data-search="sumilon island oslob sandbar beach marine sanctuary">
                <a href="pages/destinations/sumilon-island.php" class="card-link" aria-label="Read more about Sumilon Island">
                    <div class="card-image sumilon">
                        <span class="card-tag">BEACH</span>
                        <span class="image-location">Oslob, Cebu</span>
                        <span class="travel-time">🚗 3.5 - 4 hrs</span>
                    </div>
                </a>

                <div class="card-content">
                    <span class="card-kicker">SANDBAR PARADISE</span>
                    <h3><a href="pages/destinations/sumilon-island.php">Sumilon Island</a></h3>
                    <p>Known for its shifting white sandbar and crystal-clear marine sanctuary.</p>

                    <button class="map-trigger"
                            data-lat="9.4667"
                            data-lng="123.4167"
                            data-title="Sumilon Island"
                            data-desc="A sandbar island in Oslob known for its shifting white sandbar.">
                        View map & directions ↗
                    </button>
                </div>
            </article>

            <!-- 10. MALAPASCUA ISLAND -->
            <article class="destination-card"
                     data-category="beach"
                     data-search="malapascua island thresher shark diving beach">
                <a href="pages/destinations/malapascua-island.php" class="card-link" aria-label="Read more about Malapascua Island">
                    <div class="card-image malapascua">
                        <span class="card-tag">BEACH</span>
                        <span class="image-location">Daanbantayan</span>
                        <span class="travel-time">🚗 4 - 5 hrs</span>
                    </div>
                </a>

                <div class="card-content">
                    <span class="card-kicker">DIVE PARADISE</span>
                    <h3><a href="pages/destinations/malapascua-island.php">Malapascua Island</a></h3>
                    <p>A quiet island famous for daily thresher shark dives and beautiful white-sand beaches.</p>

                    <button class="map-trigger"
                            data-lat="11.3333"
                            data-lng="124.1167"
                            data-title="Malapascua Island"
                            data-desc="Island in northern Cebu known for thresher shark diving.">
                        View map & directions ↗
                    </button>
                </div>
            </article>

            <!-- 11. OSMEÑA PEAK -->
            <article class="destination-card"
                     data-category="nature"
                     data-search="osmena peak mountain hiking sunrise view">
                <a href="pages/destinations/osmena-peak.php" class="card-link" aria-label="Read more about Osmeña Peak">
                    <div class="card-image osmena">
                        <span class="card-tag">NATURE</span>
                        <span class="image-location">Dalaguete, Cebu</span>
                        <span class="travel-time">🚗 2.5 - 3 hrs</span>
                    </div>
                </a>

                <div class="card-content">
                    <span class="card-kicker">MOUNTAIN PEAK</span>
                    <h3><a href="pages/destinations/osmena-peak.php">Osmeña Peak</a></h3>
                    <p>Cebu's highest point, offering dramatic views of rolling hills and the sea at sunrise.</p>

                    <button class="map-trigger"
                            data-lat="9.8500"
                            data-lng="123.5167"
                            data-title="Osmeña Peak"
                            data-desc="The highest point in Cebu, known for sunrise views.">
                        View map & directions ↗
                    </button>
                </div>
            </article>

            <!-- 12. SIMALA SHRINE -->
            <article class="destination-card"
                     data-category="culture"
                     data-search="simala shrine church pilgrimage architecture">
                <a href="pages/destinations/simala-shrine.php" class="card-link" aria-label="Read more about Simala Shrine">
                    <div class="card-image simala">
                        <span class="card-tag">CULTURE</span>
                        <span class="image-location">Sibonga, Cebu</span>
                        <span class="travel-time">🚗 2 - 2.5 hrs</span>
                    </div>
                </a>

                <div class="card-content">
                    <span class="card-kicker">PILGRIMAGE SITE</span>
                    <h3><a href="pages/destinations/simala-shrine.php">Simala Shrine</a></h3>
                    <p>A grand, castle-like church that serves as a major pilgrimage site in southern Cebu.</p>

                    <button class="map-trigger"
                            data-lat="9.9833"
                            data-lng="123.6000"
                            data-title="Simala Shrine"
                            data-desc="A castle-like pilgrimage church in Sibonga, Cebu.">
                        View map & directions ↗
                    </button>
                </div>
            </article>

            <!-- 13. TUMALOG FALLS -->
            <article class="destination-card"
                     data-category="nature"
                     data-search="tumalog falls oslob waterfall nature">
                <a href="pages/destinations/tumalog-falls.php" class="card-link" aria-label="Read more about Tumalog Falls">
                    <div class="card-image tumalog">
                        <span class="card-tag">NATURE</span>
                        <span class="image-location">Oslob, Cebu</span>
                        <span class="travel-time">🚗 3.5 - 4 hrs</span>
                    </div>
                </a>

                <div class="card-content">
                    <span class="card-kicker">CURTAIN WATERFALL</span>
                    <h3><a href="pages/destinations/tumalog-falls.php">Tumalog Falls</a></h3>
                    <p>A stunning, curtain-style waterfall near Oslob with a shallow, refreshing pool.</p>

                    <button class="map-trigger"
                            data-lat="9.5000"
                            data-lng="123.4000"
                            data-title="Tumalog Falls"
                            data-desc="A beautiful curtain waterfall near Oslob.">
                        View map & directions ↗
                    </button>
                </div>
            </article>

            <!-- 14. CASA GORORDO -->
            <article class="destination-card"
                     data-category="culture"
                     data-search="casa gorordo museum cebu city history ancestral house">
                <a href="pages/destinations/casa-gorordo.php" class="card-link" aria-label="Read more about Casa Gorordo">
                    <div class="card-image gorordo">
                        <span class="card-tag">MUSEUM</span>
                        <span class="image-location">Cebu City</span>
                        <span class="travel-time">🚗 15 - 30 min</span>
                    </div>
                </a>

                <div class="card-content">
                    <span class="card-kicker">ANCESTRAL HOUSE</span>
                    <h3><a href="pages/destinations/casa-gorordo.php">Casa Gorordo</a></h3>
                    <p>A preserved 19th-century ancestral house that offers a glimpse into Cebuano life.</p>

                    <button class="map-trigger"
                            data-lat="10.2950"
                            data-lng="123.9020"
                            data-title="Casa Gorordo Museum"
                            data-desc="A historic ancestral house museum in Cebu City.">
                        View map & directions ↗
                    </button>
                </div>
            </article>

            <!-- 15. NALUSUAN ISLAND -->
            <article class="destination-card"
                     data-category="beach"
                     data-search="nalusuan island mactan snorkeling marine sanctuary">
                <a href="pages/destinations/nalusuan-island.php" class="card-link" aria-label="Read more about Nalusuan Island">
                    <div class="card-image nalusuan">
                        <span class="card-tag">BEACH</span>
                        <span class="image-location">Mactan, Cebu</span>
                        <span class="travel-time">🚤 20 - 30 min</span>
                    </div>
                </a>

                <div class="card-content">
                    <span class="card-kicker">SNORKELING SPOT</span>
                    <h3><a href="pages/destinations/nalusuan-island.php">Nalusuan Island</a></h3>
                    <p>A tiny man-made island with a well-protected marine sanctuary, perfect for snorkeling.</p>

                    <button class="map-trigger"
                            data-lat="10.2500"
                            data-lng="124.0000"
                            data-title="Nalusuan Island"
                            data-desc="A small island resort and marine sanctuary near Mactan.">
                        View map & directions ↗
                    </button>
                </div>
            </article>

        </div>

        <!-- BROWSE ALL DESTINATIONS -->
        <div class="browse-destinations-wrap">
            <a class="button button-dark browse-destinations"
               href="pages/destination.php">
                Browse All Destinations
                <span aria-hidden="true">↗</span>
            </a>
        </div>

        <p class="small-note arrival-disclaimer">
            Travel times are estimated from Cebu City or Mactan Airport, depending on traffic and weather conditions.
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
                    src="https://www.openstreetmap.org/export/embed.html?bbox=123.45%2C9.40%2C124.10%2C11.35&layer=mapnik&marker=10.3157%2C123.8854">
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

            <!-- 1. LECHON -->
            <article class="food-card">
                <a href="pages/cebu-lechon.php" class="card-link" aria-label="Read more about Cebu Lechon">
                    <div class="food-image lechon"></div>
                </a>

                <div class="food-content">
                    <span class="card-kicker">MUST-TRY DISH</span>
                    <h3><a href="pages/cebu-lechon.php">Cebu Lechon</a></h3>
                    <p>Roasted pork known for its crisp skin and flavorful meat.</p>

                    <button class="map-trigger"
                            data-lat="10.3157"
                            data-lng="123.8854"
                            data-title="Cebu Lechon Spots"
                            data-desc="Best places to try authentic Cebu Lechon.">
                        View food spots ↗
                    </button>
                </div>
            </article>

            <!-- 2. DRIED MANGOES -->
            <article class="food-card">
                <a href="pages/dried-mangoes.php" class="card-link" aria-label="Read more about Dried Mangoes">
                    <div class="food-image mango"></div>
                </a>

                <div class="food-content">
                    <span class="card-kicker">POPULAR PASALUBONG</span>
                    <h3><a href="pages/dried-mangoes.php">Dried Mangoes</a></h3>
                    <p>A sweet Cebu favorite to bring home or share with friends.</p>

                    <button class="map-trigger"
                            data-lat="10.3157"
                            data-lng="123.8854"
                            data-title="Dried Mango Pasalubong"
                            data-desc="Where to buy the best dried mangoes in Cebu.">
                        View food spots ↗
                    </button>
                </div>
            </article>

            <!-- 3. SUGBO MERCADO -->
            <article class="food-card">
                <a href="pages/sugbo-mercado.php" class="card-link" aria-label="Read more about Sugbo Mercado">
                    <div class="food-image market"></div>
                </a>

                <div class="food-content">
                    <span class="card-kicker">FOOD & NIGHTLIFE</span>
                    <h3><a href="pages/sugbo-mercado.php">Sugbo Mercado</a></h3>
                    <p>A popular food-market concept with local bites and street food.</p>

                    <button class="map-trigger"
                            data-lat="10.3317"
                            data-lng="123.9063"
                            data-title="Sugbo Mercado"
                            data-desc="A popular food market in Cebu IT Park.">
                        View food spots ↗
                    </button>
                </div>
            </article>

            <!-- 4. PUSO -->
            <article class="food-card">
                <a href="pages/puso.php" class="card-link" aria-label="Read more about Puso">
                    <div class="food-image puso"></div>
                </a>

                <div class="food-content">
                    <span class="card-kicker">TRADITIONAL STAPLE</span>
                    <h3><a href="pages/puso.php">Puso</a></h3>
                    <p>Hanging rice cooked in woven coconut leaves, often paired with lechon or BBQ.</p>

                    <button class="map-trigger"
                            data-lat="10.3157"
                            data-lng="123.8854"
                            data-title="Puso (Hanging Rice)"
                            data-desc="Traditional Cebuano hanging rice.">
                        View food spots ↗
                    </button>
                </div>
            </article>

            <!-- 5. NGOHIONG -->
            <article class="food-card">
                <a href="pages/ngohiong.php" class="card-link" aria-label="Read more about Ngohiong">
                    <div class="food-image ngohiong"></div>
                </a>

                <div class="food-content">
                    <span class="card-kicker">STREET FOOD</span>
                    <h3><a href="pages/ngohiong.php">Ngohiong</a></h3>
                    <p>A crispy Cebuano spring roll stuffed with vegetables and meat, served with a special sauce.</p>

                    <button class="map-trigger"
                            data-lat="10.2980"
                            data-lng="123.8950"
                            data-title="Ngohiong Spots"
                            data-desc="Best places to try Ngohiong in Cebu.">
                        View food spots ↗
                    </button>
                </div>
            </article>

            <!-- 6. BIBINGKA & SIKWATE -->
            <article class="food-card">
                <a href="pages/bibingka-sikwate.php" class="card-link" aria-label="Read more about Bibingka and Sikwate">
                    <div class="food-image bibingka"></div>
                </a>

                <div class="food-content">
                    <span class="card-kicker">LOCAL BREAKFAST</span>
                    <h3><a href="pages/bibingka-sikwate.php">Bibingka & Sikwate</a></h3>
                    <p>A warm rice cake paired with thick, local hot chocolate—perfect for mornings.</p>

                    <button class="map-trigger"
                            data-lat="10.3157"
                            data-lng="123.8854"
                            data-title="Bibingka & Sikwate"
                            data-desc="Traditional Cebuano breakfast pairing.">
                        View food spots ↗
                    </button>
                </div>
            </article>

        </div>

        <!-- EXPLORE FOOD GUIDE BUTTON -->
        <div class="browse-destinations-wrap" style="margin-top: 40px; text-align: center;">
            <a class="button button-dark browse-destinations"
               href="pages/food.php"
               style="display: inline-flex; width: auto; padding: 14px 30px;">
                Explore Food Guide <span aria-hidden="true">↗</span>
            </a>
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

            <!-- 1. JEEPNEYS & BUSES -->
            <a href="pages/jeepneys-buses.php"
               class="transport-card"
               aria-label="Read more about Jeepneys and Buses">
                <span class="transport-icon">▤</span>
                <h3>Jeepneys & Buses</h3>
                <p>
                    Common options for city travel and many
                    provincial routes. Check current routes and fares locally.
                </p>
            </a>

            <!-- 2. TAXIS & RIDE-HAILING -->
            <a href="pages/taxis-ride-hailing.php"
               class="transport-card"
               aria-label="Read more about Taxis and Ride-Hailing">
                <span class="transport-icon">↗</span>
                <h3>Taxis & Ride-Hailing</h3>
                <p>
                    Convenient for point-to-point travel,
                    especially around urban areas.
                </p>
            </a>

            <!-- 3. FERRIES & FASTCRAFTS -->
            <a href="pages/ferries-fastcrafts.php"
               class="transport-card"
               aria-label="Read more about Ferries and Fastcrafts">
                <span class="transport-icon">≈</span>
                <h3>Ferries & Fastcrafts</h3>
                <p>
                    Useful for connecting Cebu with nearby islands.
                    Confirm schedules with operators.
                </p>
            </a>

            <!-- 4. LOCAL MOTORCYCLES -->
            <a href="pages/local-motorcycles.php"
               class="transport-card"
               aria-label="Read more about Local Motorcycles">
                <span class="transport-icon">⌁</span>
                <h3>Local Motorcycles</h3>
                <p>
                    Available in some areas for short local trips.
                    Agree on fare and prioritize safety.
                </p>
            </a>

        </div>

        <!-- READ FULL TRANSPORT GUIDE BUTTON -->
        <div class="browse-destinations-wrap" style="margin-top: 40px; text-align: center;">
            <a class="button button-dark browse-destinations"
               href="pages/transport.php"
               style="display: inline-flex; width: auto; padding: 14px 30px;">
                Read Full Transport Guide <span aria-hidden="true">↗</span>
            </a>
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
                        <option value="adventure">Adventure & waterfalls</option>
                        <option value="beach">Island hopping & beaches</option>
                        <option value="culture">Food & cultural heritage</option>
                        <option value="relax">Relaxation & coastal views</option>
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

                <button class="button button-gold form-submit" type="submit">
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

<?php include __DIR__ . '/includes/footer.php'; ?>