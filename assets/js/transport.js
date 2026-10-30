// ========================================
// CUSTOM ILLUSTRATED MAP LOGIC
// ========================================

document.addEventListener("DOMContentLoaded", function() {
    var mapContainer = document.getElementById('cebuMap');
    if (!mapContainer) return;

    // 1. Initialize the Map
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

    // 2. Add a clean, light base map (shows faded "NEGROS" and "BOHOL" text)
    L.tileLayer('https://{s}.basemaps.cartocdn.com/light_nolabels/{z}/{x}/{y}{r}.png', {
        subdomains: 'abcd',
        maxZoom: 20
    }).addTo(map);

    // 3. Draw the Island of Cebu (Simplified Polygon)
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

    // 4. Define the key destinations
    var locations = {
        'malapascua': { lat: 11.33, lng: 124.11, label: 'Malapascua', badge: false },
        'bantayan': { lat: 11.20, lng: 123.73, label: 'Bantayan Island', badge: false },
        'camotes': { lat: 10.53, lng: 124.40, label: 'Camotes Islands', badge: false },
        'cebu_city': { lat: 10.31, lng: 123.88, label: 'Cebu City', badge: true },
        'airport': { lat: 10.30, lng: 123.98, label: 'Mactan Airport', badge: true },
        'balamban': { lat: 10.50, lng: 123.71, label: 'Balamban', badge: false },
        'carcar': { lat: 10.10, lng: 123.63, label: 'Carcar', badge: false },
        'simala': { lat: 9.98, lng: 123.60, label: 'Simala Shrine', badge: false },
        'moalboal': { lat: 9.95, lng: 123.36, label: 'Moalboal', badge: false },
        'kawasan': { lat: 9.86, lng: 123.38, label: 'Kawasan Falls', badge: false },
        'dao': { lat: 9.72, lng: 123.38, label: 'Dao Falls', badge: false },
        'osmena': { lat: 9.85, lng: 123.51, label: 'Osmeña Peak', badge: false },
        'tumalog': { lat: 9.50, lng: 123.40, label: 'Tumalog Falls', badge: false },
        'oslob': { lat: 9.48, lng: 123.38, label: 'Oslob', badge: false },
        'sumilon': { lat: 9.46, lng: 123.41, label: 'Sumilon Island', badge: false }
    };

    // 5. Add Custom HTML Markers
    for (var key in locations) {
        var loc = locations[key];
        var badgeClass = loc.badge ? 'dark-badge' : '';
        
        var customIcon = L.divIcon({
            className: 'custom-marker-wrapper',
            html: '<div class="custom-map-marker ' + badgeClass + '">' + loc.label + '</div>',
            iconSize: [0, 0],
            iconAnchor: [0, 0]
        });

        L.marker([loc.lat, loc.lng], { icon: customIcon }).addTo(map);
    }

    // 6. Draw the Ferry Lines (Dashed)
    var ferryStyle = { color: '#0077B6', weight: 1.5, opacity: 0.6, className: 'ferry-route' };
    
    L.polyline([[10.31, 123.88], [11.03, 123.96], [11.20, 123.73]], ferryStyle).addTo(map); // Cebu to Bantayan
    L.polyline([[10.31, 123.88], [11.26, 124.05], [11.33, 124.11]], ferryStyle).addTo(map); // Cebu to Malapascua
    L.polyline([[10.31, 123.88], [10.53, 124.40]], ferryStyle).addTo(map); // Cebu to Camotes
    L.polyline([[9.48, 123.38], [9.46, 123.41]], ferryStyle).addTo(map); // Oslob to Sumilon
});