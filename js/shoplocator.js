/**
 * CC Pardawala — Interactive Gujarat Showroom Map Scripts
 */
document.addEventListener('DOMContentLoaded', function() {
    const mapElement = document.getElementById('gujaratMap');
    if (!mapElement) return;

    // Active Showroom Locations across Gujarat
    const stores = [
        {
            id: 'vadodara',
            city: 'Vadodara',
            cityLabel: 'Vadodara',
            name: "Vadodara's Exclusive Showroom",
            badge: 'Main HQ & Exclusive',
            address: 'SB-1 To 5, LA-CITADEL COMPLEX, Nutan Bharat Society, Dr Rustom Cama Marg, Opposite Velvet Bakers, Alkapuri, Vadodara - 390007',
            hours: '10:00 AM – 8:30 PM (All 7 Days Open)',
            phone: '+91 95865 41555',
            lat: 22.3106938,
            lng: 73.1706691,
            isFlagship: true,
            gmapsUrl: 'https://maps.google.com/?q=LA-CITADEL+COMPLEX+Alkapuri+Vadodara'
        },
        {
            id: 'rajkot',
            city: 'Rajkot',
            cityLabel: 'Rajkot',
            name: 'Rajkot Showroom',
            badge: 'Experience Studio',
            address: 'Ground Floor 3/4 Block A, Pramukh Swami Arcade, Yagnik Road, Malaviya Chowk, Rajkot - 360 001',
            hours: '10:00 AM – 8:30 PM',
            phone: '+91 98797 54155',
            lat: 22.2965,
            lng: 70.7963,
            isFlagship: false,
            gmapsUrl: 'https://maps.google.com/?q=Pramukh+Swami+Arcade+Yagnik+Road+Malaviya+Chowk+Rajkot'
        },
        {
            id: 'jamnagar',
            city: 'Jamnagar',
            cityLabel: 'Jamnagar 1',
            name: 'Jamnagar Showroom 1',
            badge: 'Experience Studio',
            address: 'Amber Cinema Road, NEO Square Seller, Under Poonamben Maadam Office, Jamnagar - 361008',
            hours: '10:00 AM – 8:30 PM',
            phone: '+91 99792 88033',
            lat: 22.4674,
            lng: 70.0614,
            isFlagship: false,
            gmapsUrl: 'https://maps.google.com/?q=NEO+Square+Amber+Cinema+Road+Jamnagar'
        },
        {
            id: 'jamnagar2',
            city: 'Jamnagar',
            cityLabel: 'Jamnagar 2',
            name: 'Jamnagar Showroom 2',
            badge: 'Experience Studio',
            address: 'Guru Govind Singh Hospital Road, Jamnagar - 361008',
            hours: '10:00 AM – 8:30 PM',
            phone: '+91 99792 88033',
            lat: 22.4760,
            lng: 70.0670,
            isFlagship: false,
            gmapsUrl: 'https://maps.google.com/?q=Guru+Govind+Singh+Hospital+Road+Jamnagar'
        },
        {
            id: 'junagadh',
            city: 'Junagadh',
            cityLabel: 'Junagadh',
            name: 'Junagadh Showroom',
            badge: 'Regional Center',
            address: 'Talav Gate, Opp. Sahyog chamber, Near Railway Crossing, Junagadh - 362001',
            hours: '10:00 AM – 8:30 PM',
            phone: '+91 99786 54155',
            lat: 21.5222,
            lng: 70.4579,
            isFlagship: false,
            gmapsUrl: 'https://maps.google.com/?q=Talav+Gate+Junagadh'
        },
        {
            id: 'morbi',
            city: 'Morbi',
            cityLabel: 'Morbi',
            name: 'Morbi Showroom',
            badge: 'Regional Center',
            address: 'Ravapar Road, Opp. New Rajkot Nagrik Bank, Shop No. 8-9, Sidhhivinayk Complex, Ground Floor, Morbi - 363641',
            hours: '10:00 AM – 8:30 PM',
            phone: '+91 99251 84281',
            lat: 22.8173,
            lng: 70.8378,
            isFlagship: false,
            gmapsUrl: 'https://maps.google.com/?q=Sidhhivinayk+Complex+Ravapar+Road+Morbi'
        },
        {
            id: 'dhoraji',
            city: 'Dhoraji',
            cityLabel: 'Dhoraji',
            name: 'Dhoraji Showroom',
            badge: 'Regional Outlet',
            address: 'Junagadh Road, Opp. Vijay Oil Mill, Dhoraji - 360410',
            hours: '10:00 AM – 8:30 PM',
            phone: '+91 98257 71719',
            lat: 21.7340,
            lng: 70.4447,
            isFlagship: false,
            gmapsUrl: 'https://maps.google.com/?q=Junagadh+Road+Dhoraji'
        }
    ];

    // Initialize Leaflet Map centered on Gujarat
    const map = L.map('gujaratMap', {
        center: [22.25, 71.3],
        zoom: 8,
        scrollWheelZoom: false
    });

    // 100% Free OpenStreetMap Tile Layer (Zero API Key, Zero Cost)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors | CC Pardawala',
        maxZoom: 19
    }).addTo(map);

    const markers = {};

    // Add pins with permanent city labels on top of each pin
    stores.forEach(store => {
        const cityLabel = store.cityLabel || store.city;
        const iconHtml = store.isFlagship ? 
            `<div class="custom-map-pin flagship" title="${store.name}"><i class="fa-solid fa-location-dot"></i></div>` : 
            `<div class="custom-map-pin" title="${store.name}"><i class="fa-solid fa-location-dot"></i></div>`;

        const customIcon = L.divIcon({
            html: iconHtml,
            className: 'custom-leaflet-marker',
            iconSize: [44, 44],
            iconAnchor: [22, 22],
            popupAnchor: [0, -28]
        });

        const popupContent = `
            <div style="min-width: 240px; max-width: 290px;">
                <span class="map-popup-badge">${store.badge}</span>
                <h4 class="map-popup-title">${store.name}</h4>
                <p class="map-popup-address"><i class="fa-solid fa-map-pin text-gold me-1"></i> ${store.address}</p>
                <p style="font-size: 0.8rem; color: #C5A880; margin: 0 0 10px 0;"><i class="fa-solid fa-clock me-1"></i> ${store.hours}</p>
                <div class="map-popup-actions">
                    <a href="tel:${store.phone}" class="map-popup-btn">
                        <i class="fa-solid fa-phone"></i> Call
                    </a>
                    <a href="${store.gmapsUrl}" target="_blank" class="map-popup-btn-outline">
                        <i class="fa-solid fa-diamond-turn-right"></i> Directions
                    </a>
                </div>
            </div>
        `;

        const marker = L.marker([store.lat, store.lng], { icon: customIcon }).addTo(map);

        // Permanent luxury city label badge on top of the pin
        marker.bindTooltip(cityLabel, {
            permanent: true,
            direction: 'top',
            className: `map-city-tooltip${store.isFlagship ? ' flagship' : ''}`,
            offset: [0, -20]
        });

        marker.bindPopup(popupContent);

        // When pin clicked: highlight corresponding store card
        marker.on('click', function() {
            highlightStoreCard(store.id);
        });

        markers[store.id] = marker;
    });

    function highlightStoreCard(storeId) {
        document.querySelectorAll('.store-card').forEach(card => card.classList.remove('highlighted'));
        const targetCard = document.getElementById('store-card-' + storeId);
        if (targetCard) {
            targetCard.classList.add('highlighted');
            // Keep user on the map without scrolling down
        }
    }

    // Function to focus map from card click
    function focusStoreOnMap(storeId) {
        const store = stores.find(s => s.id === storeId);
        if (store && markers[storeId]) {
            // Scroll map into view
            document.getElementById('gujaratMap').scrollIntoView({ behavior: 'smooth', block: 'center' });

            setTimeout(() => {
                map.flyTo([store.lat, store.lng], 13, { duration: 1.2 });
                setTimeout(() => {
                    markers[storeId].openPopup();
                }, 1000);
            }, 300);
        }
    }

    // Attach click to card & "Locate on Map" buttons
    document.querySelectorAll('.view-on-map-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const storeId = this.getAttribute('data-target-store');
            if (storeId) focusStoreOnMap(storeId);
        });
    });

    document.querySelectorAll('.store-card').forEach(card => {
        card.addEventListener('click', function() {
            const storeId = this.getAttribute('data-store-id');
            if (storeId) focusStoreOnMap(storeId);
        });
    });
});
