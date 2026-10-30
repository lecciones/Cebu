// ========================================
// DESTINATION PAGE SCRIPT
// File: assets/js/destination.js
// ========================================

document.addEventListener("DOMContentLoaded", function() {
    
    // 1. Set current year in footer
    var yearEl = document.getElementById('currentYear');
    if (yearEl) {
        yearEl.textContent = new Date().getFullYear();
    }

    // 2. Mobile Menu Toggle
    var menuToggle = document.getElementById('menuToggle');
    var navLinks = document.getElementById('navLinks');
    
    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', function() {
            navLinks.classList.toggle('open');
            var expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !expanded);
        });
    }

    // 3. Initialize Leaflet Map
    var mapContainer = document.getElementById('map');
    if (!mapContainer) return; 

    var map = L.map('map', {
        center: [10.65, 123.85],
        zoom: 9,
        zoomControl: true,
        scrollWheelZoom: false
    });

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
        maxZoom: 18
    }).addTo(map);

    // 4. Destination Coordinates
    var destinations = {
        'cebu': { coords: [10.3157, 123.8854], label: 'Cebu City' },
        'mactan': { coords: [10.3075, 123.9793], label: 'Mactan Airport' },
        'moalboal': { coords: [9.9500, 123.3667], label: 'Moalboal' },
        'oslob': { coords: [9.4833, 123.3833], label: 'Oslob' },
        'kawasan': { coords: [9.8667, 123.3833], label: 'Kawasan Falls' },
        'bantayan': { coords: [11.1500, 123.7333], label: 'Bantayan Island' },
        'malapascua': { coords: [11.3333, 124.1167], label: 'Malapascua' },
        'simala': { coords: [9.9833, 123.6000], label: 'Simala Shrine' },
        'osmena': { coords: [9.8500, 123.5167], label: 'Osmeña Peak' },
        'carcar': { coords: [10.1000, 123.6333], label: 'Carcar City' },
        'camotes': { coords: [10.5333, 124.4000], label: 'Camotes Islands' },
        'sumilon': { coords: [9.4667, 123.4167], label: 'Sumilon Island' },
        'liloan': { coords: [9.5500, 123.3500], label: 'Liloan Port' },
        
        // Newly added locations
        'bohol': { coords: [9.8500, 124.1435], label: 'Bohol' },
        'dumaguete': { coords: [9.3068, 123.3054], label: 'Dumaguete' },
        'siquijor': { coords: [9.2142, 123.5147], label: 'Siquijor' },
        'hagnaya': { coords: [11.0333, 123.9667], label: 'Hagnaya Port' },
        'maya': { coords: [11.2667, 124.0500], label: 'Maya Port' },
        'balamban': { coords: [10.5000, 123.7167], label: 'Balamban' },
        'pier': { coords: [10.3000, 123.9100], label: 'Cebu City Pier' },
        'resorts': { coords: [10.2900, 123.9800], label: 'Mactan Resorts' },
        'highlands': { coords: [10.3667, 123.8333], label: 'Cebu Highlands' }
    };

    // 5. Add Markers to Map
    for (var key in destinations) {
        var dest = destinations[key];
        var customIcon = L.divIcon({
            className: 'custom-marker-wrapper',
            html: '<div class="custom-marker"></div><div class="marker-label">' + dest.label + '</div>',
            iconSize: [14, 14],
            iconAnchor: [7, 7]
        });
        L.marker(dest.coords, { icon: customIcon }).addTo(map);
    }

    // 6. Route Styles
    var routeStyles = {
        road: { color: '#0077B6', weight: 4, opacity: 0.8, dashArray: null },
        ferry: { color: '#f4c95d', weight: 3, opacity: 0.9, dashArray: '8, 8' }
    };

    // 7. Route Definitions
    var routes = {
        // From Cebu City
        'cebu-moalboal': { points: [destinations.cebu.coords, destinations.carcar.coords, destinations.moalboal.coords], type: 'road' },
        'cebu-oslob': { points: [destinations.cebu.coords, destinations.carcar.coords, destinations.simala.coords, destinations.oslob.coords], type: 'road' },
        'cebu-kawasan': { points: [destinations.cebu.coords, destinations.carcar.coords, destinations.moalboal.coords, destinations.kawasan.coords], type: 'road' },
        'cebu-bantayan': { points: [destinations.cebu.coords, destinations.bantayan.coords], type: 'ferry' },
        'cebu-malapascua': { points: [destinations.cebu.coords, destinations.malapascua.coords], type: 'ferry' },
        'cebu-camotes': { points: [destinations.cebu.coords, destinations.camotes.coords], type: 'ferry' },
        'cebu-bohol': { points: [destinations.cebu.coords, destinations.bohol.coords], type: 'ferry' },
        'cebu-dumaguete': { points: [destinations.cebu.coords, destinations.dumaguete.coords], type: 'ferry' },
        'cebu-siquijor': { points: [destinations.cebu.coords, destinations.siquijor.coords], type: 'ferry' },
        'cebu-balamban': { points: [destinations.cebu.coords, destinations.balamban.coords], type: 'road' },
        'cebu-carcar': { points: [destinations.cebu.coords, destinations.carcar.coords], type: 'road' },
        'cebu-simala': { points: [destinations.cebu.coords, destinations.carcar.coords, destinations.simala.coords], type: 'road' },
        'cebu-osmena': { points: [destinations.cebu.coords, destinations.carcar.coords, destinations.osmena.coords], type: 'road' },
        'cebu-pier': { points: [destinations.cebu.coords, destinations.pier.coords], type: 'road' },
        'cebu-mactan': { points: [destinations.cebu.coords, destinations.mactan.coords], type: 'road' },
        'cebu-highlands': { points: [destinations.cebu.coords, destinations.highlands.coords], type: 'road' },

        // From Mactan Airport
        'mactan-moalboal': { points: [destinations.mactan.coords, destinations.cebu.coords, destinations.carcar.coords, destinations.moalboal.coords], type: 'road' },
        'mactan-oslob': { points: [destinations.mactan.coords, destinations.cebu.coords, destinations.carcar.coords, destinations.simala.coords, destinations.oslob.coords], type: 'road' },
        'mactan-kawasan': { points: [destinations.mactan.coords, destinations.cebu.coords, destinations.carcar.coords, destinations.moalboal.coords, destinations.kawasan.coords], type: 'road' },
        'mactan-bantayan': { points: [destinations.mactan.coords, destinations.cebu.coords, destinations.bantayan.coords], type: 'ferry' },
        'mactan-malapascua': { points: [destinations.mactan.coords, destinations.cebu.coords, destinations.malapascua.coords], type: 'ferry' },
        'mactan-camotes': { points: [destinations.mactan.coords, destinations.cebu.coords, destinations.camotes.coords], type: 'ferry' },
        'mactan-bohol': { points: [destinations.mactan.coords, destinations.cebu.coords, destinations.bohol.coords], type: 'ferry' },
        'mactan-dumaguete': { points: [destinations.mactan.coords, destinations.cebu.coords, destinations.dumaguete.coords], type: 'ferry' },
        'mactan-siquijor': { points: [destinations.mactan.coords, destinations.cebu.coords, destinations.siquijor.coords], type: 'ferry' },
        'mactan-balamban': { points: [destinations.mactan.coords, destinations.cebu.coords, destinations.balamban.coords], type: 'road' },
        'mactan-cebu': { points: [destinations.mactan.coords, destinations.cebu.coords], type: 'road' },
        'mactan-highlands': { points: [destinations.mactan.coords, destinations.highlands.coords], type: 'road' },
        'mactan-osmena': { points: [destinations.mactan.coords, destinations.cebu.coords, destinations.carcar.coords, destinations.osmena.coords], type: 'road' },
        'mactan-pier': { points: [destinations.mactan.coords, destinations.pier.coords], type: 'road' },

        // South Cebu & Coastal
        'oslob-moalboal': { points: [destinations.oslob.coords, destinations.moalboal.coords], type: 'road' },
        'moalboal-oslob': { points: [destinations.moalboal.coords, destinations.oslob.coords], type: 'road' },
        'carcar-simala': { points: [destinations.carcar.coords, destinations.simala.coords], type: 'road' },
        'simala-oslob': { points: [destinations.simala.coords, destinations.oslob.coords], type: 'road' },
        'simala-carcar': { points: [destinations.simala.coords, destinations.carcar.coords], type: 'road' },
        'simala-cebu': { points: [destinations.simala.coords, destinations.carcar.coords, destinations.cebu.coords], type: 'road' },
        'simala-mactan': { points: [destinations.simala.coords, destinations.carcar.coords, destinations.cebu.coords, destinations.mactan.coords], type: 'road' },
        'carcar-cebu': { points: [destinations.carcar.coords, destinations.cebu.coords], type: 'road' },
        'carcar-mactan': { points: [destinations.carcar.coords, destinations.cebu.coords, destinations.mactan.coords], type: 'road' },
        'carcar-oslob': { points: [destinations.carcar.coords, destinations.simala.coords, destinations.oslob.coords], type: 'road' },
        'oslob-carcar': { points: [destinations.oslob.coords, destinations.simala.coords, destinations.carcar.coords], type: 'road' },
        'oslob-dumaguete': { points: [destinations.oslob.coords, destinations.dumaguete.coords], type: 'ferry' },
        'dumaguete-oslob': { points: [destinations.dumaguete.coords, destinations.oslob.coords], type: 'ferry' },
        'oslob-simala': { points: [destinations.oslob.coords, destinations.simala.coords], type: 'road' },
        'oslob-cebu': { points: [destinations.oslob.coords, destinations.simala.coords, destinations.carcar.coords, destinations.cebu.coords], type: 'road' },
        'oslob-mactan': { points: [destinations.oslob.coords, destinations.simala.coords, destinations.carcar.coords, destinations.cebu.coords, destinations.mactan.coords], type: 'road' },
        'moalboal-cebu': { points: [destinations.moalboal.coords, destinations.carcar.coords, destinations.cebu.coords], type: 'road' },
        'moalboal-mactan': { points: [destinations.moalboal.coords, destinations.carcar.coords, destinations.cebu.coords, destinations.mactan.coords], type: 'road' },
        'moalboal-liloan': { points: [destinations.moalboal.coords, destinations.liloan.coords], type: 'road' },
        'liloan-moalboal': { points: [destinations.liloan.coords, destinations.moalboal.coords], type: 'road' },
        'moalboal-hagnaya': { points: [destinations.moalboal.coords, destinations.hagnaya.coords], type: 'road' },
        'hagnaya-moalboal': { points: [destinations.hagnaya.coords, destinations.moalboal.coords], type: 'road' },
        'moalboal-maya': { points: [destinations.moalboal.coords, destinations.maya.coords], type: 'road' },
        'maya-moalboal': { points: [destinations.maya.coords, destinations.moalboal.coords], type: 'road' },

        // North Cebu & Islands
        'bantayan-cebu': { points: [destinations.bantayan.coords, destinations.cebu.coords], type: 'ferry' },
        'bantayan-mactan': { points: [destinations.bantayan.coords, destinations.cebu.coords, destinations.mactan.coords], type: 'ferry' },
        'malapascua-cebu': { points: [destinations.malapascua.coords, destinations.cebu.coords], type: 'ferry' },
        'malapascua-mactan': { points: [destinations.malapascua.coords, destinations.cebu.coords, destinations.mactan.coords], type: 'ferry' },
        'malapascua-moalboal': { points: [destinations.malapascua.coords, destinations.moalboal.coords], type: 'ferry' },
        'moalboal-malapascua': { points: [destinations.moalboal.coords, destinations.malapascua.coords], type: 'ferry' },
        'malapascua-bohol': { points: [destinations.malapascua.coords, destinations.bohol.coords], type: 'ferry' },
        'bohol-malapascua': { points: [destinations.bohol.coords, destinations.malapascua.coords], type: 'ferry' },
        'camotes-cebu': { points: [destinations.camotes.coords, destinations.cebu.coords], type: 'ferry' },
        'camotes-mactan': { points: [destinations.camotes.coords, destinations.cebu.coords, destinations.mactan.coords], type: 'ferry' },
        'bohol-moalboal': { points: [destinations.bohol.coords, destinations.moalboal.coords], type: 'ferry' },
        'moalboal-bohol': { points: [destinations.moalboal.coords, destinations.bohol.coords], type: 'ferry' },
        'bohol-cebu': { points: [destinations.bohol.coords, destinations.cebu.coords], type: 'ferry' },
        'bohol-mactan': { points: [destinations.bohol.coords, destinations.cebu.coords, destinations.mactan.coords], type: 'ferry' },

        // Ferries & Port Transfers
        'mactan-resorts': { points: [destinations.mactan.coords, destinations.resorts.coords], type: 'road' },
        'cebu-resorts': { points: [destinations.cebu.coords, destinations.resorts.coords], type: 'road' },
        'resorts-moalboal': { points: [destinations.resorts.coords, destinations.moalboal.coords], type: 'road' },
        'resorts-oslob': { points: [destinations.resorts.coords, destinations.oslob.coords], type: 'road' },
        'resorts-kawasan': { points: [destinations.resorts.coords, destinations.kawasan.coords], type: 'road' },
        'kawasan-resorts': { points: [destinations.kawasan.coords, destinations.resorts.coords], type: 'road' },
        'mactan-maya': { points: [destinations.mactan.coords, destinations.maya.coords], type: 'road' },
        'maya-cebu': { points: [destinations.maya.coords, destinations.cebu.coords], type: 'road' },
        'maya-mactan': { points: [destinations.maya.coords, destinations.mactan.coords], type: 'road' },
        'cebu-maya': { points: [destinations.cebu.coords, destinations.maya.coords], type: 'road' },
        'pier-moalboal': { points: [destinations.pier.coords, destinations.moalboal.coords], type: 'road' },
        'moalboal-pier': { points: [destinations.moalboal.coords, destinations.pier.coords], type: 'road' },
        'mactan-lapu': { points: [destinations.mactan.coords, destinations.pier.coords], type: 'road' },
        'pier-mactan-lapu': { points: [destinations.pier.coords, destinations.mactan.coords], type: 'road' },
        'osmena-cebu': { points: [destinations.osmena.coords, destinations.cebu.coords], type: 'road' },
        'osmena-mactan': { points: [destinations.osmena.coords, destinations.mactan.coords], type: 'road' },
        'sumilon-cebu': { points: [destinations.sumilon.coords, destinations.cebu.coords], type: 'ferry' },
        'sumilon-mactan': { points: [destinations.sumilon.coords, destinations.mactan.coords], type: 'ferry' },
        'sumilon-oslob': { points: [destinations.sumilon.coords, destinations.oslob.coords], type: 'ferry' },
        'mactan-sumilon': { points: [destinations.mactan.coords, destinations.sumilon.coords], type: 'ferry' },
        'cebu-sumilon': { points: [destinations.cebu.coords, destinations.sumilon.coords], type: 'ferry' },
        'balamban-mactan': { points: [destinations.balamban.coords, destinations.mactan.coords], type: 'road' },
        'balamban-cebu': { points: [destinations.balamban.coords, destinations.cebu.coords], type: 'road' }
    };

    var activePolyline = null;

    // 8. Draw Route Function
    function drawRoute(routeKey) {
        if (activePolyline) {
            map.removeLayer(activePolyline);
        }
        
        var route = routes[routeKey];
        if (!route) return;

        var style = routeStyles[route.type];
        activePolyline = L.polyline(route.points, {
            color: style.color,
            weight: style.weight,
            opacity: style.opacity,
            dashArray: style.dashArray,
            lineCap: 'round',
            lineJoin: 'round'
        }).addTo(map);

        map.fitBounds(activePolyline.getBounds(), { padding: [50, 50] });
    }

    // 9. Attach Events to Route Pills
    var pills = document.querySelectorAll('.pill');
    
    pills.forEach(function(pill) {
        pill.addEventListener('mouseenter', function() {
            drawRoute(this.getAttribute('data-route'));
        });
        
        pill.addEventListener('click', function() {
            pills.forEach(function(p) { p.classList.remove('active'); });
            this.classList.add('active');
            drawRoute(this.getAttribute('data-route'));
        });
    });

    // 10. Clear route when clicking on the map
    map.on('click', function() {
        if (activePolyline) {
            map.removeLayer(activePolyline);
        }
        pills.forEach(function(p) { p.classList.remove('active'); });
    });
});