// ========================================
// CUSTOM ILLUSTRATED MAP LOGIC — ENHANCED
// File: assets/js/transport.js
// ========================================

document.addEventListener("DOMContentLoaded", function () {
    var mapContainer = document.getElementById('cebuMap');
    if (!mapContainer) return;

    // ---------------------------------------------------------
    // 1. Initialize the Map
    // ---------------------------------------------------------
    var bounds = L.latLngBounds([9.3, 123.2], [11.4, 124.3]);

    var map = L.map('cebuMap', {
        center: [10.45, 123.85],
        zoom: 9,
        minZoom: 8,
        maxZoom: 12,
        maxBounds: bounds,
        maxBoundsViscosity: 1.0,
        zoomControl: true,
        attributionControl: false
    });

    // ---------------------------------------------------------
    // 2. Base Map (clean, light CartoDB layer)
    // ---------------------------------------------------------
    L.tileLayer('https://{s}.basemaps.cartocdn.com/light_nolabels/{z}/{x}/{y}{r}.png', {
        subdomains: 'abcd',
        maxZoom: 20
    }).addTo(map);

    // ---------------------------------------------------------
    // 3. Cebu Island Polygon
    // ---------------------------------------------------------
    var cebuShape = [
        [11.35, 124.05], [11.10, 123.95], [10.85, 123.95], [10.55, 123.95],
        [10.30, 124.05], [10.10, 123.80], [9.85, 123.60], [9.60, 123.45],
        [9.45, 123.35], [9.55, 123.25], [9.75, 123.25], [9.95, 123.30],
        [10.15, 123.45], [10.35, 123.50], [10.60, 123.65], [10.85, 123.75],
        [11.10, 123.75], [11.25, 123.85], [11.35, 124.05]
    ];

    L.polygon(cebuShape, {
        className: 'cebu-island-shape'
    }).addTo(map);

    // ---------------------------------------------------------
    // 4. Destination Data (now with category + description)
    // ---------------------------------------------------------
    var locations = {
        'malapascua': {
            lat: 11.33, lng: 124.11, label: 'Malapascua',
            badge: false, category: 'island',
            desc: 'Diving paradise famous for thresher sharks.'
        },
        'bantayan': {
            lat: 11.20, lng: 123.73, label: 'Bantayan Island',
            badge: false, category: 'island',
            desc: 'White-sand beaches and fresh seafood.'
        },
        'camotes': {
            lat: 10.53, lng: 124.40, label: 'Camotes Islands',
            badge: false, category: 'island',
            desc: 'Quiet coves, caves, and lake views.'
        },
        'cebu_city': {
            lat: 10.31, lng: 123.88, label: 'Cebu City',
            badge: true, category: 'city',
            desc: 'The Queen City of the South — gateway hub.'
        },
        'airport': {
            lat: 10.30, lng: 123.98, label: 'Mactan Airport',
            badge: true, category: 'city',
            desc: 'Mactan-Cebu International Airport (MCIA).'
        },
        'balamban': {
            lat: 10.50, lng: 123.71, label: 'Balamban',
            badge: false, category: 'town',
            desc: 'Home of the famous adventure park.'
        },
        'carcar': {
            lat: 10.10, lng: 123.63, label: 'Carcar',
            badge: false, category: 'town',
            desc: 'Known for lechon and heritage houses.'
        },
        'simala': {
            lat: 9.98, lng: 123.60, label: 'Simala Shrine',
            badge: false, category: 'landmark',
            desc: 'Miraculous Marian shrine — a must-visit.'
        },
        'moalboal': {
            lat: 9.95, lng: 123.36, label: 'Moalboal',
            badge: false, category: 'island',
            desc: 'Sardine run and turtle snorkeling spot.'
        },
        'kawasan': {
            lat: 9.86, lng: 123.38, label: 'Kawasan Falls',
            badge: false, category: 'landmark',
            desc: 'Turquoise multi-tiered waterfall.'
        },
        'dao': {
            lat: 9.72, lng: 123.38, label: 'Dao Falls',
            badge: false, category: 'landmark',
            desc: 'Tall, dramatic waterfall in Samboan.'
        },
        'osmena': {
            lat: 9.85, lng: 123.51, label: 'Osmeña Peak',
            badge: false, category: 'landmark',
            desc: 'Cebu\'s highest peak with ridge views.'
        },
        'tumalog': {
            lat: 9.50, lng: 123.40, label: 'Tumalog Falls',
            badge: false, category: 'landmark',
            desc: 'Curtain-like falls near Oslob.'
        },
        'oslob': {
            lat: 9.48, lng: 123.38, label: 'Oslob',
            badge: false, category: 'town',
            desc: 'Whale shark watching and heritage sites.'
        },
        'sumilon': {
            lat: 9.46, lng: 123.41, label: 'Sumilon Island',
            badge: false, category: 'island',
            desc: 'Sandbar island with clear snorkeling.'
        }
    };

    // ---------------------------------------------------------
    // 5. Category legend (inline, top-left of map)
    // ---------------------------------------------------------
    var legend = L.control({ position: 'topleft' });
    legend.onAdd = function () {
        var div = L.DomUtil.create('div', 'map-legend');
        div.innerHTML =
            '<div class="legend-title">Legend</div>' +
            '<div class="legend-row"><span class="legend-dot dot-island"></span>Island</div>' +
            '<div class="legend-row"><span class="legend-dot dot-town"></span>Town</div>' +
            '<div class="legend-row"><span class="legend-dot dot-landmark"></span>Landmark</div>' +
            '<div class="legend-row"><span class="legend-dot dot-city"></span>City / Hub</div>' +
            '<div class="legend-row"><span class="legend-dash"></span>Ferry route</div>';
        return div;
    };
    legend.addTo(map);

    // ---------------------------------------------------------
    // 6. Add Custom HTML Markers + Click Popups
    // ---------------------------------------------------------
    var markers = {};

    for (var key in locations) {
        var loc = locations[key];
        var badgeClass = loc.badge ? 'dark-badge' : '';

        var customIcon = L.divIcon({
            className: 'custom-marker-wrapper',
            html:
                '<div class="custom-map-marker ' + badgeClass + ' cat-' + loc.category + '">' +
                loc.label +
                '</div>',
            iconSize: [0, 0],
            iconAnchor: [0, 0]
        });

        var marker = L.marker([loc.lat, loc.lng], {
            icon: customIcon,
            title: loc.label
        }).addTo(map);

        // Rich popup on click
        marker.bindPopup(
            '<div class="map-popup">' +
            '<strong>' + loc.label + '</strong>' +
            '<p>' + loc.desc + '</p>' +
            '<span class="popup-tag">' + loc.category + '</span>' +
            '</div>',
            { closeButton: true, maxWidth: 220 }
        );

        // Hover: bring marker to front
        marker.on('mouseover', function (e) {
            e.target.setZIndexOffset(1000);
        });
        marker.on('mouseout', function (e) {
            e.target.setZIndexOffset(0);
        });

        markers[key] = marker;
    }

    // ---------------------------------------------------------
    // 7. Draw Ferry Lines (animated dashed)
    // ---------------------------------------------------------
    var ferryStyle = {
        color: '#0077B6',
        weight: 1.5,
        opacity: 0.6,
        className: 'ferry-route',
        dashArray: '6 8'
    };

    var ferryRoutes = [
        { name: 'Cebu → Bantayan', pts: [[10.31, 123.88], [11.03, 123.96], [11.20, 123.73]] },
        { name: 'Cebu → Malapascua', pts: [[10.31, 123.88], [11.26, 124.05], [11.33, 124.11]] },
        { name: 'Cebu → Camotes', pts: [[10.31, 123.88], [10.53, 124.40]] },
        { name: 'Oslob → Sumilon', pts: [[9.48, 123.38], [9.46, 123.41]] }
    ];

    ferryRoutes.forEach(function (route) {
        var line = L.polyline(route.pts, ferryStyle).addTo(map);
        line.bindTooltip(route.name, {
            sticky: true,
            className: 'ferry-tooltip',
            direction: 'top'
        });
    });

    // ---------------------------------------------------------
    // 8. Smooth scroll helper — if URL has #, focus map
    // ---------------------------------------------------------
    if (window.location.hash === '#cebuMap') {
        setTimeout(function () {
            mapContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }, 300);
    }
});