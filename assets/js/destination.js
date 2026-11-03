/* =========================================================
   SMART TOURIST NAVIGATOR - CEBU
   Interactive Destination Routes

   Hover / Focus = Preview Route
   Click = Open Destination Detail Page (if available)
   ========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    /* =====================================================
       1. CHECK LEAFLET AND MAP ELEMENT
       ===================================================== */

    var mapElement = document.getElementById('map');

    if (typeof L === 'undefined') {
        console.error('Leaflet library was not loaded.');
        return;
    }

    if (!mapElement) {
        console.error('Map element was not found.');
        return;
    }


    /* =====================================================
       2. INITIALIZE LEAFLET MAP
       ===================================================== */

    var cebuMap = L.map('map').setView([10.3157, 123.8854], 9);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors',
        maxZoom: 19
    }).addTo(cebuMap);


    /* =====================================================
       3. DESTINATION COORDINATES
       Coordinates are approximate map locations.
       ===================================================== */

    var locations = {

        // Cebu City and nearby areas
        'Cebu City': [10.3157, 123.8854],
        'Cebu City Pier': [10.2960, 123.9050],
        'Mactan-Cebu Airport': [10.3075, 123.9794],
        'Mactan-Cebu International Airport': [10.3075, 123.9794],
        'Mactan Airport': [10.3075, 123.9794],

        // Cebu City attractions
        'Cebu Ocean Park': [10.2915, 123.8815],
        'SM Seaside City Cebu': [10.2918, 123.8817],
        'Ayala Center Cebu': [10.3181, 123.9058],
        'SM City Cebu': [10.3117, 123.9185],
        'Ayala Malls Central Bloc': [10.3300, 123.9060],
        'IL Corso': [10.2890, 123.8790],
        'Carbon Market': [10.2950, 123.8980],
        'Taboan Market': [10.2910, 123.8940],
        'Colon Street': [10.2965, 123.8980],
        'Museo Sugbo': [10.3020, 123.9030],
        'Cebu Metropolitan Cathedral': [10.2955, 123.9010],
        'Cebu Heritage Monument': [10.2965, 123.9000],
        'Yap-Sandiego Ancestral House': [10.2965, 123.9005],
        'Jesuit House of 1730': [10.2960, 123.9000],
        'Cebu Provincial Capitol': [10.3150, 123.8910],
        'Jumalon Butterfly Sanctuary': [10.2860, 123.8700],

        // Historical attractions
        "Magellan's Cross": [10.2940, 123.9020],
        'Basilica del Santo Niño': [10.2940, 123.9020],
        'Basilica': [10.2940, 123.9020],
        'Fort San Pedro': [10.2928, 123.9050],
        'Casa Gorordo': [10.2980, 123.9010],
        'Temple of Leah': [10.3650, 123.8680],

        // Cebu viewpoints and highlands
        'Cebu Highlands': [10.3500, 123.8700],
        'TOPS Cebu': [10.3650, 123.8680],
        'Sirao Flower Garden': [10.4050, 123.8720],
        'Cebu Taoist Temple': [10.3300, 123.8840],
        'Buwakan ni Alejandra': [10.4300, 123.8500],
        'Mount Kan-Irag': [10.3750, 123.8750],

        // Mactan and Lapu-Lapu
        'Mactan Resorts': [10.2900, 124.0000],
        'Mactan / Lapu-Lapu': [10.3100, 123.9500],
        'Mactan Shrine': [10.3120, 124.0180],
        '10,000 Roses Cafe': [10.2590, 124.0030],
        'Olango Island': [10.2670, 124.0560],
        'Olango Island Wildlife Sanctuary': [10.2670, 124.0560],
        'Mactan Newtown': [10.3100, 124.0150],
        'Caohagan Island': [10.2470, 124.0620],
        'Sulpa Island': [10.2450, 124.0400],

        // South Cebu
        'Moalboal': [9.9430, 123.3990],
        'Oslob': [9.5200, 123.4300],
        'Kawasan Falls': [9.8241, 123.3745],
        'Carcar City': [10.1060, 123.6400],
        'Simala Shrine': [9.9833, 123.6000],
        'Osmeña Peak': [9.8500, 123.5167],
        'Sumilon Island': [9.4300, 123.3800],
        'Tumalog Falls': [9.4750, 123.3900],
        'Aguinid Falls': [9.4800, 123.3800],
        'Inambakan Falls': [9.5900, 123.3500],
        'Dao Falls': [9.5700, 123.3800],
        'Bojo River': [9.8700, 123.4300],
        'Lambug Beach': [9.8300, 123.3900],
        'Argao Heritage Town': [9.8800, 123.6000],
        'Boljoon Heritage Town': [9.6300, 123.4800],
        'Dalaguete Beaches': [9.7600, 123.5300],
        'Mantayupan Falls': [10.1200, 123.7100],

        // North Cebu
        'Bantayan Island': [11.2056, 123.7331],
        'Malapascua Island': [11.3333, 124.1167],
        'Carnaza Island': [11.4700, 124.0800],
        'Virgin Island, Bantayan': [11.1800, 123.7400],
        'Kota Beach': [11.1400, 123.6700],
        'Gibitngil Island': [11.0600, 124.0000],
        'Medellin': [11.1300, 123.9600],
        'San Remigio Beaches': [11.0800, 123.9400],
        'Tuburan Springs': [10.7300, 123.8300],
        'Luyang Cave': [11.0500, 123.9900],
        'Timubo Cave': [11.1500, 123.6900],

        // Ports
        'Liloan Port': [9.6000, 123.3400],
        'Hagnaya Port': [11.1500, 123.9500],
        'Maya Port': [11.3200, 124.0200],

        // Nearby islands and provinces
        'Camotes Islands': [10.6500, 124.4200],
        'Bohol': [9.6500, 123.8500],
        'Dumaguete': [9.3068, 123.3054],
        'Siquijor': [9.2000, 123.5500],

        // Other Cebu locations
        'Balamban': [10.5000, 123.7167],

        // Display-name aliases used by route pill labels
        "10,000 Roses": [10.2590, 124.0030],
        "Argao": [9.8800, 123.6000],
        "Boljoon": [9.6300, 123.4800],
        "Dalaguete": [9.7600, 123.5300],
        "Ayala Center": [10.3181, 123.9058],
        "Central Bloc": [10.3300, 123.9060],
        "SM Seaside": [10.2918, 123.8817],
        "Jesuit House": [10.2960, 123.9000],
        "Yap-Sandiego House": [10.2965, 123.9005],
        "TOPS": [10.3650, 123.8680],
        "Taoist Temple": [10.3300, 123.8840],
        "San Remigio": [11.0800, 123.9400],
        "Virgin Island Bantayan": [11.1800, 123.7400]

    };


    /* =====================================================
       4. DESTINATION DETAIL PAGE LINKS

       These are the destination PHP pages.

       Paths are relative to pages/destination.php.
       ===================================================== */

    var destinationPages = {

        // Original destination pages
        "Bantayan Island": "destinations/bantayan-island.php",
        "Basilica": "destinations/basilica.php",
        "Basilica del Santo Niño": "destinations/basilica.php",
        "Casa Gorordo": "destinations/casa-gorordo.php",
        "Kawasan Falls": "destinations/kawasan-falls.php",
        "Magellan's Cross": "destinations/magellan-cross.php",
        "Malapascua Island": "destinations/malapascua-island.php",
        "Moalboal": "destinations/moalboal.php",
        "Nalusuan Island": "destinations/nalusuan-island.php",
        "Oslob": "destinations/oslob.php",
        "Osmeña Peak": "destinations/osmena-peak.php",
        "Fort San Pedro": "destinations/san-pedro.php",
        "Simala Shrine": "destinations/simala-shrine.php",
        "Sumilon Island": "destinations/sumilon-island.php",
        "Temple of Leah": "destinations/temple-leah.php",
        "Tumalog Falls": "destinations/tumalog-falls.php",

        // Cebu City destinations
        "Ayala Center Cebu": "destinations/cebu-city/ayala-center.php",
        "Carbon Market": "destinations/cebu-city/carbon-market.php",
        "Cebu Metropolitan Cathedral": "destinations/cebu-city/cebu-cathedral.php",
        "Cebu Heritage Monument": "destinations/cebu-city/cebu-heritage-monument.php",
        "Cebu Ocean Park": "destinations/cebu-city/cebu-ocean-park.php",
        "Cebu Provincial Capitol": "destinations/cebu-city/cebu-provincial-capitol.php",
        "Central Bloc": "destinations/cebu-city/central-bloc.php",
        "Colon Street": "destinations/cebu-city/colon-street.php",
        "IL Corso": "destinations/cebu-city/il-corso.php",
        "Jesuit House": "destinations/cebu-city/jesuit-house.php",
        "Jumalon Butterfly Sanctuary": "destinations/cebu-city/jumalon-butterfly-sanctuary.php",
        "Museo Sugbo": "destinations/cebu-city/museo-sugbo.php",
        "SM City Cebu": "destinations/cebu-city/sm-city-cebu.php",
        "SM Seaside City Cebu": "destinations/cebu-city/sm-seaside.php",
        "Taboan Market": "destinations/cebu-city/taboan-market.php",
        "Yap-Sandiego Ancestral House": "destinations/cebu-city/yap-sandiego-house.php",

        // Highlands and viewpoints
        "Buwakan ni Alejandra": "destinations/highlands-viewpoints/buwakan-ni-alejandra.php",
        "Mount Kan-Irag": "destinations/highlands-viewpoints/mount-kan-irag.php",
        "Sirao Flower Garden": "destinations/highlands-viewpoints/sirao-flower-garden.php",
        "Taoist Temple": "destinations/highlands-viewpoints/taoist-temple.php",
        "TOPS Cebu": "destinations/highlands-viewpoints/tops-cebu.php",

        // Mactan and nearby islands
        "Caohagan Island": "destinations/mactan-islands/caohagan-island.php",
        "Mactan Newtown": "destinations/mactan-islands/mactan-newtown.php",
        "Mactan Shrine": "destinations/mactan-islands/mactan-shrine.php",
        "Olango Island": "destinations/mactan-islands/olango-island.php",
        "Sulpa Island": "destinations/mactan-islands/sulpa-island.php",
        "10,000 Roses": "destinations/mactan-islands/ten-thousand-roses.php",

        // North Cebu
        "Carnaza Island": "destinations/north-cebu/carnaza-island.php",
        "Gibitngil Island": "destinations/north-cebu/gibitngil-island.php",
        "Kota Beach": "destinations/north-cebu/kota-beach.php",
        "Luyang Cave": "destinations/north-cebu/luyang-cave.php",
        "Medellin": "destinations/north-cebu/medellin.php",
        "San Remigio": "destinations/north-cebu/san-remigio.php",
        "Timubo Cave": "destinations/north-cebu/timubo-cave.php",
        "Tuburan Springs": "destinations/north-cebu/tuburan-springs.php",
        "Virgin Island, Bantayan": "destinations/north-cebu/virgin-island-bantayan.php",

        // South Cebu
        "Aguinid Falls": "destinations/south-cebu/aguinid-falls.php",
        "Argao": "destinations/south-cebu/argao.php",
        "Bojo River": "destinations/south-cebu/bojo-river.php",
        "Boljoon": "destinations/south-cebu/boljoon.php",
        "Dalaguete": "destinations/south-cebu/dalaguete.php",
        "Dao Falls": "destinations/south-cebu/dao-falls.php",
        "Inambakan Falls": "destinations/south-cebu/inambakan-falls.php",
        "Lambug Beach": "destinations/south-cebu/lambug-beach.php",
        "Mantayupan Falls": "destinations/south-cebu/mantayupan-falls.php",

        // Route-label aliases
        "Ayala Center": "destinations/cebu-city/ayala-center.php",
        "SM Seaside": "destinations/cebu-city/sm-seaside.php",
        "TOPS": "destinations/highlands-viewpoints/tops-cebu.php",
        "Virgin Island Bantayan": "destinations/north-cebu/virgin-island-bantayan.php",
        "Yap-Sandiego House": "destinations/cebu-city/yap-sandiego-house.php"

    };


    /* =====================================================
       5. ROUTE STYLES
       ===================================================== */

    var routeStyles = {

        road: {
            color: '#0077B6',
            weight: 5,
            opacity: 0.85
        },

        ferry: {
            color: '#D49B45',
            weight: 5,
            opacity: 0.9,
            dashArray: '10, 10'
        }

    };


    /* =====================================================
       6. DETERMINE ROUTE TYPE

       Island connections are shown as ferry/transit
       previews. Other connections are shown as roads.

       These are visual guides, not actual navigation
       tracks or confirmed ferry schedules.
       ===================================================== */

    function getRouteType(startName, endName) {

        var ferryLocations = [
            'Bantayan Island',
            'Malapascua Island',
            'Camotes Islands',
            'Bohol',
            'Dumaguete',
            'Siquijor',
            'Sumilon Island',
            'Olango Island',
            'Olango Island Wildlife Sanctuary',
            'Caohagan Island',
            'Sulpa Island',
            'Carnaza Island',
            'Virgin Island, Bantayan',
            'Virgin Island Bantayan',
            'Gibitngil Island'
        ];

        if (
            ferryLocations.includes(startName) ||
            ferryLocations.includes(endName)
        ) {
            return 'ferry';
        }

        return 'road';
    }


    /* =====================================================
       7. BUILD ROUTES FROM PHP PILLS

       The route names are read directly from the text
       inside each .pill element.

       This means the data-route ID does not need to
       match a separate JavaScript route list.
       ===================================================== */

    var routes = {};

    var pills = document.querySelectorAll('.pill[data-route]');

    pills.forEach(function (pill) {

        var routeKey = pill.getAttribute('data-route');

        var routeName = pill.textContent.trim();

        var destinations = routeName.split('→');

        if (destinations.length !== 2) {
            console.warn('Invalid route label:', routeName);
            return;
        }

        var startName = destinations[0].trim();

        var endName = destinations[1].trim();

        var startCoordinates = locations[startName];

        var endCoordinates = locations[endName];

        if (!startCoordinates || !endCoordinates) {
            console.warn('Missing coordinates for route:', routeName);
            return;
        }

        routes[routeKey] = {

            name: routeName,

            start: startName,

            end: endName,

            points: [
                startCoordinates,
                endCoordinates
            ],

            type: getRouteType(startName, endName)

        };

    });


    /* =====================================================
       8. ROUTE INFORMATION CONTAINER
       ===================================================== */

    var activePolyline = null;

    var startMarker = null;

    var endMarker = null;

    var routeInfo = document.createElement('div');

    routeInfo.className = 'route-info';

    routeInfo.style.display = 'none';

    var routesPanel = document.querySelector('.routes-panel');

    if (routesPanel) {
        routesPanel.insertBefore(routeInfo, routesPanel.firstChild);
    }


    /* =====================================================
       9. CLEAR PREVIOUS ROUTE
       ===================================================== */

    function clearRoute(resetButtons) {

        if (activePolyline) {
            cebuMap.removeLayer(activePolyline);
            activePolyline = null;
        }

        if (startMarker) {
            cebuMap.removeLayer(startMarker);
            startMarker = null;
        }

        if (endMarker) {
            cebuMap.removeLayer(endMarker);
            endMarker = null;
        }

        routeInfo.style.display = 'none';

        if (resetButtons !== false) {

            pills.forEach(function (pill) {
                pill.classList.remove('active');
            });

        }

    }


    /* =====================================================
       10. DRAW SELECTED ROUTE ON MAP
       ===================================================== */

    function drawRoute(routeKey) {

        var route = routes[routeKey];

        if (!route) {
            console.warn('Route not found:', routeKey);
            return;
        }

        // Remove the previous route
        clearRoute(false);

        var style = routeStyles[route.type];


        // Draw route line
        activePolyline = L.polyline(route.points, {

            color: style.color,

            weight: style.weight,

            opacity: style.opacity,

            dashArray: style.dashArray || null,

            lineCap: 'round',

            lineJoin: 'round'

        }).addTo(cebuMap);


        // Starting point marker
        startMarker = L.marker(route.points[0])
            .addTo(cebuMap)
            .bindPopup(
                '<strong>Starting point:</strong> ' + route.start
            );


        // Destination marker
        endMarker = L.marker(route.points[1])
            .addTo(cebuMap)
            .bindPopup(
                '<strong>Destination:</strong> ' + route.end
            );


        // Automatically zoom to route
        cebuMap.fitBounds(activePolyline.getBounds(), {

            padding: [50, 50],

            maxZoom: 12,

            animate: true

        });


        // Google Maps directions
        var travelMode = route.type === 'ferry'
            ? 'transit'
            : 'driving';

        var googleMapsURL =
            'https://www.google.com/maps/dir/?api=1' +
            '&origin=' + encodeURIComponent(route.start) +
            '&destination=' + encodeURIComponent(route.end) +
            '&travelmode=' + travelMode;


        // Display route information
        routeInfo.style.display = 'block';

        routeInfo.innerHTML = `

            <h3>${route.name}</h3>

            <p>
                ${route.type === 'ferry'
                    ? 'This connection may involve boat or ferry transportation. Check the available ports, operators, and schedules before traveling.'
                    : 'This is a road route preview. Actual roads, traffic conditions, and travel times may vary.'}
            </p>

            <a
                href="${googleMapsURL}"
                target="_blank"
                rel="noopener noreferrer"
                class="google-maps-button"
            >
                Open in Google Maps ↗
            </a>

            <p class="route-note">
                The line on this map is a visual route guide, not a turn-by-turn road or sea track.
            </p>

        `;

    }


    /* =====================================================
       11. HOVER TO PREVIEW ROUTE
       ===================================================== */

    pills.forEach(function (pill) {

        pill.addEventListener('mouseenter', function () {

            var routeKey = this.getAttribute('data-route');

            if (!routes[routeKey]) {
                return;
            }

            pills.forEach(function (button) {
                button.classList.remove('active');
            });

            this.classList.add('active');

            drawRoute(routeKey);

        });


        /* Keyboard focus also previews the route */

        pill.addEventListener('focus', function () {

            var routeKey = this.getAttribute('data-route');

            if (!routes[routeKey]) {
                return;
            }

            pills.forEach(function (button) {
                button.classList.remove('active');
            });

            this.classList.add('active');

            drawRoute(routeKey);

        });


        /* =================================================
           12. CLICK TO OPEN DESTINATION DETAIL PAGE
           ================================================= */

        pill.addEventListener('click', function () {

            var routeKey = this.getAttribute('data-route');

            var route = routes[routeKey];

            if (!route) {
                return;
            }

            // Check if the destination has a detail page
            var destinationPage = destinationPages[route.end];

            // Otherwise, check the starting location
            if (!destinationPage) {
                destinationPage = destinationPages[route.start];
            }

            // Navigate only when a page is registered
            if (destinationPage) {

                window.location.href = destinationPage;

            } else {

                // Keep the route preview if no page exists yet
                drawRoute(routeKey);

            }

        });

    });


    /* =====================================================
       13. CLEAR ROUTE WHEN MAP IS CLICKED
       ===================================================== */

    cebuMap.on('click', function () {

        clearRoute(true);

    });


    /* =====================================================
       14. MOBILE NAVIGATION
       ===================================================== */

    var menuToggle = document.getElementById('menuToggle');

    var navLinks = document.getElementById('navLinks');

    if (menuToggle && navLinks) {

        menuToggle.addEventListener('click', function () {

            var isOpen = navLinks.classList.toggle('open');

            menuToggle.setAttribute(
                'aria-expanded',
                String(isOpen)
            );

            menuToggle.textContent = isOpen ? '✕' : '☰';

        });

    }


    /* =====================================================
       15. FOOTER CURRENT YEAR
       ===================================================== */

    var currentYear = document.getElementById('currentYear');

    if (currentYear) {
        currentYear.textContent = new Date().getFullYear();
    }


    /* =====================================================
       16. INITIALIZATION COMPLETE
       ===================================================== */

    console.log('Cebu map initialized successfully.');

    console.log('Available routes:', Object.keys(routes).length);

    console.log('Destination route interactions ready.');

});