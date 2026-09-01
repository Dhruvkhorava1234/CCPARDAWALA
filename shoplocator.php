<?php
$pageTitle = "Showroom & Store Locator | CC Pardawala - 7 Gujarat Locations";
$pageDescription = "Visit our 7 premium curtain, blind, and sofa experience centers across Gujarat in Vadodara, Rajkot, Jamnagar, Junagadh, Morbi, Dhoraji, and Jetpur.";
$activePage = 'shoplocator';
include 'header.php';
?>

<!-- Leaflet.js Map Stylesheet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<!-- Inner Page Banner (Centered Architectural Luxury) -->
<section class="inner-banner" style="background-image: url('img/nri/map.jpg');">
    <div class="container reveal">
        <div class="banner-centered-content">
            <span class="banner-badge">
                <i class="fa-solid fa-location-dot"></i> Gujarat Experience Centers
            </span>
            <h1 class="banner-title-center">Showroom & Store Locator</h1>
            <p class="banner-subtitle-center">
                Locate our 7 luxury showrooms across Gujarat. Click any pin on the map or select a store below to view showroom details and live GPS directions.
            </p>
            <div class="banner-breadcrumbs-center">
                <a href="index.php">Home</a>
                <span class="breadcrumb-dot">•</span>
                <span class="current-page">Store Locator</span>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     Interactive Map & Showroom Showcase
     ========================================== -->
<section class="shoplocator-section">
    <div class="container">

        <!-- Interactive Gujarat Map Box -->
        <div class="text-center mb-4 reveal">
            <span class="hero-badge" style="color: var(--accent-gold); background-color: var(--accent-light); margin-bottom: 12px; display: inline-block;">Live GPS Directory</span>
            <h2 class="section-title" style="margin-bottom: 10px;">Interactive Gujarat Map</h2>
            <p style="color: var(--text-secondary); max-width: 680px; margin: 0 auto; font-size: 1rem;">Click any gold pin to inspect outlet timings, showroom addresses, and contact numbers.</p>
        </div>

        <div class="shop-map-wrapper reveal">
            <div id="gujaratMap"></div>
        </div>
        
        <!-- Flagship Headquarters Spotlight Card -->
        <div class="flagship-box store-card reveal" id="store-card-vadodara" data-store-id="vadodara" style="cursor: pointer;">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="flagship-badge">
                        <i class="fa-solid fa-crown me-1"></i> Main Flagship Experience Center & HQ
                    </span>
                    <h2 style="font-family: var(--font-heading); font-size: 2.3rem; margin-bottom: 15px; color: var(--text-primary);">Vadodara Experience Showroom</h2>
                    <p style="color: var(--text-secondary); font-size: 1.05rem; line-height: 1.7; margin-bottom: 20px;">
                        Our flagship 5-unit studio showcasing motorized wave-pleat drapes, full acoustic home theater curtains, imported Italian fabrics, and live smart-home window track demonstrations.
                    </p>
                    <div class="d-flex flex-column gap-2 mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fa-solid fa-map-pin text-gold" style="font-size: 1.1rem; width: 20px;"></i>
                            <span style="color: var(--text-primary); font-size: 0.95rem;">SB-1 To 5, LA-CITADEL COMPLEX, Nutan Bharat Society, Dr Rustom Cama Marg, Opposite Velvet Bakers, Alkapuri, Vadodara - 390007</span>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <i class="fa-solid fa-clock text-gold" style="font-size: 1.1rem; width: 20px;"></i>
                            <span style="color: var(--text-secondary); font-size: 0.95rem;">Monday – Sunday: 10:00 AM – 8:30 PM (All 7 Days Open)</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <div class="d-flex flex-column gap-3 justify-content-lg-end">
                        <a href="https://wa.me/919586541555" target="_blank" class="btn btn-gold" style="padding: 14px 28px; display: inline-flex; align-items: center; justify-content: center; gap: 8px;">
                            <i class="fa-brands fa-whatsapp"></i> WhatsApp Concierge
                        </a>
                        <a href="tel:+919586541555" class="btn btn-outline" style="padding: 14px 28px; display: inline-flex; align-items: center; justify-content: center; gap: 8px;">
                            <i class="fa-solid fa-phone"></i> +91 95865 41555
                        </a>
                        <button type="button" class="btn btn-outline view-on-map-btn" data-target-store="vadodara" style="padding: 12px 24px; font-size: 0.9rem; border-color: var(--accent-gold); color: var(--accent-gold);">
                            <i class="fa-solid fa-location-crosshairs me-2"></i> Focus on Map
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Title for Regional Stores -->
        <div class="text-center mb-5 reveal">
            <span class="hero-badge" style="color: var(--accent-gold); background-color: var(--accent-light); margin-bottom: 12px; display: inline-block;">Regional Network</span>
            <h2 class="section-title">Regional Outlets Across Gujarat</h2>
            <p style="color: var(--text-secondary); max-width: 680px; margin: 0 auto; font-size: 1.05rem;">Click on any store card to zoom and locate it on the map above.</p>
        </div>

        <!-- 6 Regional Stores Grid -->
        <div class="stores-grid">
            
            <!-- Rajkot -->
            <div class="store-card reveal" id="store-card-rajkot" data-store-id="rajkot" style="cursor: pointer;">
                <div>
                    <span class="hero-badge" style="color: var(--accent-gold); background-color: var(--accent-light); margin-bottom: 12px; display: inline-block; font-size: 0.75rem;">Experience Studio</span>
                    <h3 class="store-card-city">Rajkot Showroom</h3>
                    <p class="store-card-address">
                        <i class="fa-solid fa-location-dot text-gold me-2"></i> Yagnik Road Commercial Plaza, Rajkot, Gujarat.
                    </p>
                </div>
                <div class="store-card-footer">
                    <a href="tel:+919586541555" class="store-call-link">
                        <i class="fa-solid fa-phone text-gold"></i> +91 95865 41555
                    </a>
                    <button type="button" class="store-route-btn view-on-map-btn" data-target-store="rajkot">
                        Locate on Map <i class="fa-solid fa-location-crosshairs ms-1"></i>
                    </button>
                </div>
            </div>

            <!-- Jamnagar -->
            <div class="store-card reveal reveal-delay-1" id="store-card-jamnagar" data-store-id="jamnagar" style="cursor: pointer;">
                <div>
                    <span class="hero-badge" style="color: var(--accent-gold); background-color: var(--accent-light); margin-bottom: 12px; display: inline-block; font-size: 0.75rem;">Experience Studio</span>
                    <h3 class="store-card-city">Jamnagar Showroom</h3>
                    <p class="store-card-address">
                        <i class="fa-solid fa-location-dot text-gold me-2"></i> Guru Govind Singh Hospital Road, Jamnagar, Gujarat.
                    </p>
                </div>
                <div class="store-card-footer">
                    <a href="tel:+919586541555" class="store-call-link">
                        <i class="fa-solid fa-phone text-gold"></i> +91 95865 41555
                    </a>
                    <button type="button" class="store-route-btn view-on-map-btn" data-target-store="jamnagar">
                        Locate on Map <i class="fa-solid fa-location-crosshairs ms-1"></i>
                    </button>
                </div>
            </div>

            <!-- Junagadh -->
            <div class="store-card reveal reveal-delay-2" id="store-card-junagadh" data-store-id="junagadh" style="cursor: pointer;">
                <div>
                    <span class="hero-badge" style="color: var(--accent-gold); background-color: var(--accent-light); margin-bottom: 12px; display: inline-block; font-size: 0.75rem;">Regional Center</span>
                    <h3 class="store-card-city">Junagadh Showroom</h3>
                    <p class="store-card-address">
                        <i class="fa-solid fa-location-dot text-gold me-2"></i> Kalwa Chowk Commercial Center, Junagadh, Gujarat.
                    </p>
                </div>
                <div class="store-card-footer">
                    <a href="tel:+919586541555" class="store-call-link">
                        <i class="fa-solid fa-phone text-gold"></i> +91 95865 41555
                    </a>
                    <button type="button" class="store-route-btn view-on-map-btn" data-target-store="junagadh">
                        Locate on Map <i class="fa-solid fa-location-crosshairs ms-1"></i>
                    </button>
                </div>
            </div>

            <!-- Morbi -->
            <div class="store-card reveal" id="store-card-morbi" data-store-id="morbi" style="cursor: pointer;">
                <div>
                    <span class="hero-badge" style="color: var(--accent-gold); background-color: var(--accent-light); margin-bottom: 12px; display: inline-block; font-size: 0.75rem;">Regional Center</span>
                    <h3 class="store-card-city">Morbi Showroom</h3>
                    <p class="store-card-address">
                        <i class="fa-solid fa-location-dot text-gold me-2"></i> Lati Road Commercial Avenue, Morbi, Gujarat.
                    </p>
                </div>
                <div class="store-card-footer">
                    <a href="tel:+919586541555" class="store-call-link">
                        <i class="fa-solid fa-phone text-gold"></i> +91 95865 41555
                    </a>
                    <button type="button" class="store-route-btn view-on-map-btn" data-target-store="morbi">
                        Locate on Map <i class="fa-solid fa-location-crosshairs ms-1"></i>
                    </button>
                </div>
            </div>

            <!-- Dhoraji -->
            <div class="store-card reveal reveal-delay-1" id="store-card-dhoraji" data-store-id="dhoraji" style="cursor: pointer;">
                <div>
                    <span class="hero-badge" style="color: var(--accent-gold); background-color: var(--accent-light); margin-bottom: 12px; display: inline-block; font-size: 0.75rem;">Regional Outlet</span>
                    <h3 class="store-card-city">Dhoraji Showroom</h3>
                    <p class="store-card-address">
                        <i class="fa-solid fa-location-dot text-gold me-2"></i> Main Bazaar Road, Dhoraji, Gujarat.
                    </p>
                </div>
                <div class="store-card-footer">
                    <a href="tel:+919586541555" class="store-call-link">
                        <i class="fa-solid fa-phone text-gold"></i> +91 95865 41555
                    </a>
                    <button type="button" class="store-route-btn view-on-map-btn" data-target-store="dhoraji">
                        Locate on Map <i class="fa-solid fa-location-crosshairs ms-1"></i>
                    </button>
                </div>
            </div>

            <!-- Jetpur -->
            <div class="store-card reveal reveal-delay-2" id="store-card-jetpur" data-store-id="jetpur" style="cursor: pointer;">
                <div>
                    <span class="hero-badge" style="color: var(--accent-gold); background-color: var(--accent-light); margin-bottom: 12px; display: inline-block; font-size: 0.75rem;">Regional Outlet</span>
                    <h3 class="store-card-city">Jetpur Showroom</h3>
                    <p class="store-card-address">
                        <i class="fa-solid fa-location-dot text-gold me-2"></i> Sardar Chowk Commercial Complex, Jetpur, Gujarat.
                    </p>
                </div>
                <div class="store-card-footer">
                    <a href="tel:+919586541555" class="store-call-link">
                        <i class="fa-solid fa-phone text-gold"></i> +91 95865 41555
                    </a>
                    <button type="button" class="store-route-btn view-on-map-btn" data-target-store="jetpur">
                        Locate on Map <i class="fa-solid fa-location-crosshairs ms-1"></i>
                    </button>
                </div>
            </div>

        </div>

        <!-- In-Home Styling Visit Callout -->
        <div class="nri-global-strip reveal" style="background: linear-gradient(135deg, rgba(28, 25, 23, 0.9), rgba(42, 36, 31, 0.94)), url('img/howwework/Work meeting.jpg') center/cover no-repeat;">
            <h3 class="nri-global-title">Can't Visit A Store? We Come To You!</h3>
            <p style="color: #D8D2C7; max-width: 720px; margin: 0 auto 30px auto; font-size: 1.05rem;">
                Schedule our mobile design studio. Our senior styling consultant visits your doorstep in Gujarat with 500+ physical fabric swatches and precision laser measuring tools.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="contact.php" class="btn btn-gold" style="padding: 14px 34px;">
                    Book Free Home Visit <i class="fa-solid fa-arrow-right ms-2"></i>
                </a>
                <a href="https://wa.me/919586541555" target="_blank" class="btn btn-outline" style="padding: 14px 30px; border-color: rgba(250, 247, 242, 0.4); color: #FAF7F2;">
                    <i class="fa-brands fa-whatsapp me-2"></i> WhatsApp Consultation
                </a>
            </div>
        </div>

    </div>
</section>

<!-- Leaflet Map Script & Custom Locator JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="js/shoplocator.js"></script>

<!-- Testimonials Section -->
<?php include 'testimonials.php'; ?>

<?php include 'footer.php'; ?>
