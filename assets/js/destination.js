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
        'liloan': { coords: [9.5500, 123.3500], label: 'Liloan Port' }
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
        'cebu-moalboal': { points: [destinations.cebu.coords, destinations.carcar.coords, destinations.moalboal.coords], type: 'road' },
        'mactan-moalboal': { points: [destinations.mactan.coords, destinations.cebu.coords, destinations.carcar.coords, destinations.moalboal.coords], type: 'road' },
        'moalboal-cebu': { points: [destinations.moalboal.coords, destinations.carcar.coords, destinations.cebu.coords], type: 'road' },
        'moalboal-mactan': { points: [destinations.moalboal.coords, destinations.carcar.coords, destinations.cebu.coords, destinations.mactan.coords], type: 'road' },
        
        'cebu-oslob': { points: [destinations.cebu.coords, destinations.carcar.coords, destinations.simala.coords, destinations.oslob.coords], type: 'road' },
        'mactan-oslob': { points: [destinations.mactan.coords, destinations.cebu.coords, destinations.carcar.coords, destinations.simala.coords, destinations.oslob.coords], type: 'road' },
        
        'cebu-kawasan': { points: [destinations.cebu.coords, destinations.carcar.coords, destinations.moalboal.coords, destinations.kawasan.coords], type: 'road' },
        'mactan-kawasan': { points: [destinations.mactan.coords, destinations.cebu.coords, destinations.carcar.coords, destinations.moalboal.coords, destinations.kawasan.coords], type: 'road' },
        
        'cebu-bantayan': { points: [destinations.cebu.coords, destinations.bantayan.coords], type: 'ferry' },
        'mactan-bantayan': { points: [destinations.mactan.coords, destinations.cebu.coords, destinations.bantayan.coords], type: 'ferry' },
        'bantayan-cebu': { points: [destinations.bantayan.coords, destinations.cebu.coords], type: 'ferry' },
        
        'cebu-malapascua': { points: [destinations.cebu.coords, destinations.malapascua.coords], type: 'ferry' },
        'mactan-malapascua': { points: [destinations.mactan.coords, destinations.cebu.coords, destinations.malapascua.coords], type: 'ferry' },
        'malapascua-cebu': { points: [destinations.malapascua.coords, destinations.cebu.coords], type: 'ferry' },
        
        'cebu-carcar': { points: [destinations.cebu.coords, destinations.carcar.coords], type: 'road' },
        'cebu-simala': { points: [destinations.cebu.coords, destinations.carcar.coords, destinations.simala.coords], type: 'road' },
        'carcar-simala': { points: [destinations.carcar.coords, destinations.simala.coords], type: 'road' },
        'simala-oslob': { points: [destinations.simala.coords, destinations.oslob.coords], type: 'road' },
        
        'cebu-osmena': { points: [destinations.cebu.coords, destinations.carcar.coords, destinations.osmena.coords], type: 'road' },
        'mactan-cebu': { points: [destinations.mactan.coords, destinations.cebu.coords], type: 'road' },
        
        'oslob-moalboal': { points: [destinations.oslob.coords, destinations.moalboal.coords], type: 'road' },
        'moalboal-oslob': { points: [destinations.moalboal.coords, destinations.oslob.coords], type: 'road' },
        'liloan-moalboal': { points: [destinations.liloan.coords, destinations.moalboal.coords], type: 'road' },
        
        'cebu-camotes': { points: [destinations.cebu.coords, destinations.camotes.coords], type: 'ferry' },
        'mactan-camotes': { points: [destinations.mactan.coords, destinations.cebu.coords, destinations.camotes.coords], type: 'ferry' }
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