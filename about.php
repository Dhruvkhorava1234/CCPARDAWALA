<?php
$pageTitle = "About Us | CC Pardawala - Saurashtra's Leading Home Furnishings";
$pageDescription = "CC Pardawala is renowned as the best wholesaler and manufacturer of premium curtains, modern blinds, sofa fabrics, and home furnishing items in Saurashtra, Gujarat.";
$activePage = 'about';
include 'header.php';
?>

<!-- Inner Page Banner (Centered Architectural Luxury) -->
<section class="inner-banner" style="background-image: url('img/aboutbanner.jpg');">
    <div class="container reveal">
        <div class="banner-centered-content">
            <span class="banner-badge">
                <i class="fa-solid fa-crown"></i> Est. 2002 • Handcrafted Luxury
            </span>
            <h1 class="banner-title-center">About Our Heritage</h1>
            <p class="banner-subtitle-center">
                Curating fine windows, bespoke draperies, modern blinds, and luxury living spaces across Gujarat and worldwide for over 24 years.
            </p>
            <div class="banner-breadcrumbs-center">
                <a href="index.php">Home</a>
                <span class="breadcrumb-dot">•</span>
                <span class="current-page">About Us</span>
            </div>
        </div>
    </div>
</section>

<!-- Editorial Showcase Section -->
<section class="about-showcase-section">
    <div class="container">
        <!-- Top Row: Editorial Story + Overlapping Showcase -->
        <div class="about-intro-grid">
            <!-- Left Column: Story -->
            <div class="about-intro-content reveal">
                <span class="about-badge">About CC Pardawala</span>
                <h2 class="about-main-title">Two Decades of Curating Fine Living Spaces</h2>

                <p class="about-lead-text">
                    Founded in 2002, CC Pardawala is celebrated as the premier wholesaler and bespoke manufacturer of
                    custom draperies, automated blinds, and luxury upholstery in Saurashtra, Gujarat.
                </p>

                <div class="about-quote-box">
                    "We don't simply cover windows — we sculpt light, texture, and architectural harmony into every
                    living space."
                </div>

                <p class="about-sub-text">
                    From our artisanal roots, we have expanded to 7 state-of-the-art experience centers across Vadodara,
                    Rajkot, Jamnagar, Junagadh, Morbi, Dhoraji, and Jetpur, proudly beautifying over 200,000 homes and
                    commercial residences worldwide.
                </p>

                <div class="about-highlights-list">
                    <div class="about-highlight-item">
                        <div class="about-highlight-icon"><i class="fa-solid fa-check"></i></div>
                        <span>Direct Factory Sourcing — Weaving & custom stitching under one roof</span>
                    </div>
                    <div class="about-highlight-item">
                        <div class="about-highlight-icon"><i class="fa-solid fa-check"></i></div>
                        <span>Master Tailoring — Italian precision drapery folds & motorized channels</span>
                    </div>
                    <div class="about-highlight-item">
                        <div class="about-highlight-icon"><i class="fa-solid fa-check"></i></div>
                        <span>Global NRI Assistance — Dedicated video consultations & worldwide express delivery</span>
                    </div>
                </div>

                <a href="contact.php" class="btn btn-gold">
                    Book In-Home Consultation <i class="fa-solid fa-arrow-right btn-icon"></i>
                </a>
            </div>

            <!-- Right Column: Overlapping Visual Showcase -->
            <div class="about-visual-showcase reveal reveal-delay-1">
                <!-- Floating Heritage Badge -->
                <div class="about-floating-heritage-badge">
                    <div class="about-heritage-icon">
                        <i class="fa-solid fa-crown"></i>
                    </div>
                    <div>
                        <div class="about-heritage-num">24+</div>
                        <div class="about-heritage-text">Years of Excellence</div>
                    </div>
                </div>

                <!-- Main Arched Showroom Image -->
                <div class="about-img-main-wrapper">
                    <img src="img/hero_curtains.jpg" alt="CC Pardawala Luxury Curtains" class="about-img-main">
                </div>

                <!-- Overlapping Workshop Craft Image -->
                <div class="about-img-overlap-wrapper">
                    <img src="img/howwework/Stitching.jpg" alt="Master Stitching & Tailoring" class="about-img-overlap">
                </div>
            </div>
        </div>

        <!-- Bottom Row: 3 Luxury Pillars -->
        <div class="about-pillars-wrapper">
            <div class="about-pillars-header reveal">
                <span class="hero-badge"
                    style="color: var(--accent-gold); background-color: var(--accent-light); margin-bottom: 12px; display: inline-block;">Our
                    Core Pillars</span>
                <h3 class="section-title">The Standards We Live By</h3>
            </div>

            <div class="about-pillars-grid">
                <!-- Pillar 1 -->
                <div class="about-pillar-card reveal">
                    <div class="about-pillar-top">
                        <div class="about-pillar-icon-box">
                            <i class="fa-solid fa-gem"></i>
                        </div>
                        <span class="about-pillar-num">01</span>
                    </div>
                    <h4 class="about-pillar-title">Pure Material Sourcing</h4>
                    <p class="about-pillar-desc">We hand-select high-thread-count Belgian linens, organic cottons, rich
                        velvets, and blackout thermal backings directly from our weaving facilities to ensure enduring
                        luxury.</p>
                </div>

                <!-- Pillar 2 -->
                <div class="about-pillar-card reveal reveal-delay-1">
                    <div class="about-pillar-top">
                        <div class="about-pillar-icon-box">
                            <i class="fa-solid fa-compass-drafting"></i>
                        </div>
                        <span class="about-pillar-num">02</span>
                    </div>
                    <h4 class="about-pillar-title">Bespoke Italian Craft</h4>
                    <p class="about-pillar-desc">Every curtain heading, motorized channel, roman fold, and sofa stitch
                        is measured and customized to millimeter precision by certified master artisans.</p>
                </div>

                <!-- Pillar 3 -->
                <div class="about-pillar-card reveal reveal-delay-2">
                    <div class="about-pillar-top">
                        <div class="about-pillar-icon-box">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <span class="about-pillar-num">03</span>
                    </div>
                    <h4 class="about-pillar-title">Lifetime Trust & Support</h4>
                    <p class="about-pillar-desc">From physical showroom consultations across 7 Gujarat outlets to
                        worldwide NRI video styling and comprehensive warranties, we deliver complete peace of mind.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<?php include 'testimonials.php'; ?>

<?php include 'footer.php'; ?>