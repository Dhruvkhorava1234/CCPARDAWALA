<?php
$pageTitle = "CC Pardawala | Premium Handcrafted Curtains, Modern Blinds & Luxury Home Furnishings";
$pageDescription = "Discover premium made-to-measure curtains, motorized & Roman blinds, luxury sofa upholstery fabrics, wallpapers, and mattresses at CC Pardawala across Gujarat and globally for NRIs.";
$pageKeywords = "CC Pardawala, curtains Gujarat, luxury drapes, motorized blinds, roller blinds, sofa fabrics, home decor Vadodara, curtains Rajkot, NRI curtain styling";
$activePage = 'home';
include 'header.php';
?>

    <!-- ==========================================
         Hero Section
         ========================================== -->
    <!-- ==========================================
         Hero Section (Full-page Interactive Banner)
         ========================================== -->
    <section class="hero-banner">
        <div class="hero-bg-underlay"></div>
        <div class="hero-bg-spotlight"></div>
        
        <div class="container hero-banner-content reveal">
            <span class="hero-badge" style="color: var(--accent-gold); background-color: rgba(197, 168, 128, 0.1); margin-bottom: 24px;">Est. 2002 • Handcrafted Luxury</span>
            <h1 class="hero-banner-title">ELEGANCE IN EVERY THREAD<br><span>BEYOND EXPECTATIONS</span></h1>
            <p class="hero-banner-desc">Handcrafted made-to-measure curtains, modern blinds, and luxury sofa fabrics designed to transform your home into a masterpiece of comfort and style.</p>
            <div class="hero-banner-buttons">
                <a href="contact.php" class="btn btn-gold">
                    Schedule Consultation <i class="fa-solid fa-arrow-right btn-icon"></i>
                </a>
                <a href="about.php" class="btn btn-secondary" style="border-color: rgba(250, 247, 242, 0.3); color: #FAF7F2;">Discover More</a>
            </div>
        </div>

        <!-- Slogan Tags at the Bottom (matching nivoconcepts.com) -->
        <div class="hero-banner-tags">
            <div class="container d-flex justify-content-between flex-wrap gap-4">
                <span class="banner-tag-item"><i class="fa-solid fa-circle-notch sep-icon"></i> Curtain Designing</span>
                <span class="banner-tag-item"><i class="fa-solid fa-circle-notch sep-icon"></i> Automated Blinds and Curtains</span>
                <span class="banner-tag-item"><i class="fa-solid fa-circle-notch sep-icon"></i> Complete sofa customization and fabrics.</span>
            </div>
        </div>
    </section>

    <!-- ==========================================
         Philosophy & Stats Section (About Us)
         ========================================== -->
    <section id="about" class="philosophy">
        <div class="container">
            <div class="collections-header reveal">
                <h2 class="section-title">The Art of Fine Living</h2>
                <p class="collections-desc">Welcome to CC Pardawala—the premier wholesaler and manufacturer of elite drapery and custom home furnishings. With over two decades of manufacturing excellence and a fully integrated, state-of-the-art in-house workshop, we specialize in luxury made-to-measure curtain tailoring and bespoke sofa fabrication.</p>
            </div>
            
            <div class="stats-grid">
                <div class="stat-card reveal">
                    <div class="stat-number" data-target="24">24</div>
                    <div class="stat-label">Years</div>
                </div>
                <div class="stat-card reveal reveal-delay-1">
                    <div class="stat-number" data-target="7">7</div>
                    <div class="stat-label">Outlets</div>
                </div>
                <div class="stat-card reveal reveal-delay-2">
                    <div class="stat-number" data-target="500000" data-suffix="+">500,000+</div>
                    <div class="stat-label">Happy Clients</div>
                </div>
                <div class="stat-card reveal reveal-delay-3">
                    <div class="stat-number" data-target="108">108</div>
                    <div class="stat-label">Team Members</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         Collections Section (Interactive Filter)
         ========================================== -->
    <!-- ==========================================
         Collections Section (Product Listing Carousel)
         ========================================== -->
    <section id="collections" class="collections">
        <div class="container">
            <div class="carousel-header-wrapper reveal">
                <div class="carousel-header-left">
                    <span class="hero-badge" style="color: var(--accent-gold); background-color: rgba(197, 168, 128, 0.1); margin-bottom: 12px; display: inline-block;">Our Products</span>
                    <h2 class="carousel-main-title">Premium Home & Design Solutions</h2>
                </div>
                <p class="carousel-header-center">We create custom-designed interior solutions that are thoughtfully tailored to your space, style, and comfort. From elegant curtains and stylish sofas to functional blinds, comfortable mattresses, and beautiful wallpapers, every product is carefully designed with quality materials, attention to detail, and a focus on bringing your vision to life.</p>
                <!-- <div class="carousel-nav-buttons">
                    <button class="carousel-btn prev" aria-label="Previous Products"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="carousel-btn next" aria-label="Next Products"><i class="fa-solid fa-chevron-right"></i></button>
                </div> -->
            </div>

            <!-- Carousel Slider Track -->
            <div class="carousel-slider-track reveal">
                <!-- Card 1: Curtains -->
                <a href="gallery.php?category=curtain" class="carousel-card-item">
                    <div class="carousel-card-img-wrapper">
                        <img src="img/product/Curtains.jpg" alt="Curtain Designing" class="carousel-card-img">
                        <div class="carousel-card-spotlight"></div>
                        <div class="carousel-card-overlay">
                            <h3 class="carousel-card-title">Curtains</h3>
                        </div>
                    </div>
                </a>

                <!-- Card 2: Sofa & Fabrics -->
                <a href="gallery.php?category=sofa" class="carousel-card-item">
                    <div class="carousel-card-img-wrapper">
                        <img src="img/product/Sofa.jpg" alt="Sofa & Fabrics" class="carousel-card-img">
                        <div class="carousel-card-spotlight"></div>
                        <div class="carousel-card-overlay">
                            <h3 class="carousel-card-title">Sofa Fabrics & Upholstery Work</h3>
                        </div>
                    </div>
                </a>

                <!-- Card 3: Blinds -->
                <a href="gallery.php?category=binds" class="carousel-card-item">
                    <div class="carousel-card-img-wrapper">
                        <img src="img/product/blinds.jpg" alt="Modern Blinds" class="carousel-card-img">
                        <div class="carousel-card-spotlight"></div>
                        <div class="carousel-card-overlay">
                            <h3 class="carousel-card-title">Blinds</h3>
                        </div>
                    </div>
                </a>

                <!-- Card 4: Wallpapers -->
                <a href="gallery.php?category=wallpaper" class="carousel-card-item">
                    <div class="carousel-card-img-wrapper">
                        <img src="img/product/Wallpaper.jpg" alt="Premium Wallpapers" class="carousel-card-img">
                        <div class="carousel-card-spotlight"></div>
                        <div class="carousel-card-overlay">
                            <h3 class="carousel-card-title">Wallpapers</h3>
                        </div>
                    </div>
                </a>

                <!-- Card 5: Mattress -->
                <a href="gallery.php?category=mattress" class="carousel-card-item">
                    <div class="carousel-card-img-wrapper">
                        <img src="img/product/Mattress.jpg" alt="Luxury Mattresses" class="carousel-card-img">
                        <div class="carousel-card-spotlight"></div>
                        <div class="carousel-card-overlay">
                            <h3 class="carousel-card-title">Mattress</h3>
                        </div>
                    </div>
                </a>

                <!-- Card 6: Carpets -->
                <a href="gallery.php?category=carpet" class="carousel-card-item">
                    <div class="carousel-card-img-wrapper">
                        <img src="img/product/carpet.jpg" alt="Designer Carpets" class="carousel-card-img">
                        <div class="carousel-card-spotlight"></div>
                        <div class="carousel-card-overlay">
                            <h3 class="carousel-card-title">Flooring Solutions</h3>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Bottom Line Separator -->
            <div class="carousel-bottom-line reveal"></div>
        </div>
    </section>

    <!-- ==========================================
         Why Choose Us Section (Video Showcase)
         ========================================== -->
    <section id="why_us" class="why-us-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column: Video -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="whyus-video-wrapper reveal">
                        <video autoplay loop muted playsinline class="whyus-video">
                            <source src="img/video/whyus.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                
                <!-- Right Column: Content -->
                <div class="col-lg-6 ps-lg-5">
                    <div class="whyus-content reveal">
                        <span class="hero-badge" style="color: var(--accent-gold); background-color: rgba(197, 168, 128, 0.15); margin-bottom: 16px; display: inline-block;">Why Choose Us</span>
                        <h2 class="section-title-left" style="color: var(--text-light); margin-bottom: 24px; padding-bottom: 12px; font-family: var(--font-heading); font-size: 2.25rem;">Crafting Luxury, Comfort & Perfection</h2>
                        <p class="whyus-lead">With over 24 years of pioneering excellence in Saurashtra, Gujarat, we specialize in curtain designing, blinds, and home furnishing fabrics that bring your unique vision to life.</p>
                        
                        <div class="whyus-features">
                            <div class="whyus-feature-item" style="display: flex; gap: 20px; margin-bottom: 25px;">
                                <div style="background-color: rgba(197, 168, 128, 0.15); color: var(--accent-gold); width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; flex-shrink: 0;"><i class="fa-solid fa-industry"></i></div>
                                <div>
                                    <h4 class="whyus-feature-title">Direct Factory Sourcing</h4>
                                    <p class="whyus-feature-desc">Straight from weaving units to your home, removing middlemen markups to ensure unbeatable value.</p>
                                </div>
                            </div>
                            
                            <div class="whyus-feature-item" style="display: flex; gap: 20px; margin-bottom: 25px;">
                                <div style="background-color: rgba(197, 168, 128, 0.15); color: var(--accent-gold); width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; flex-shrink: 0;"><i class="fa-solid fa-scissors"></i></div>
                                <div>
                                    <h4 class="whyus-feature-title">Precision Italian Fitting</h4>
                                    <p class="whyus-feature-desc">Custom-sewn draperies, premium linings, and motorized operations structured to absolute technical perfection.</p>
                                </div>
                            </div>

                            <div class="whyus-feature-item" style="display: flex; gap: 20px;">
                                <div style="background-color: rgba(197, 168, 128, 0.15); color: var(--accent-gold); width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; flex-shrink: 0;"><i class="fa-solid fa-shield-halved"></i></div>
                                <div>
                                    <h4 class="whyus-feature-title">Comprehensive Warranty</h4>
                                    <p class="whyus-feature-desc">Enjoy long-term manufacturer warranty and dedicated site support for automated blind configurations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         How We Work Section (Proven Process)
         ========================================== -->
    <section id="process" class="how-we-work-section">
        <div class="container">
            <!-- Centered Header -->
            <div class="process-header-center text-center reveal">
                <span class="hero-badge" style="color: var(--accent-gold); background-color: rgba(197, 168, 128, 0.15); margin-bottom: 16px; display: inline-block;">How We Work</span>
                <h2 class="process-title-center">Proven Process For Excellence</h2>
            </div>
            
            <!-- 4 Step Cards Grid -->
            <div class="process-cards-row">
                <!-- Step 1: Meeting -->
                <div class="process-card reveal">
                    <div class="process-card-img-wrapper">
                        <img src="img/howwework/Work meeting.jpg" alt="Work Meeting Consultation" class="process-card-img">
                        <div class="process-hover-icon">
                            <i class="fa-solid fa-comments"></i>
                        </div>
                    </div>
                    <span class="process-step-badge">Step 01</span>
                    <h3 class="process-card-title">Meeting</h3>
                    <p class="process-card-desc">We help you select the best fabrics from wide range at our showroom or at your home.</p>
                </div>
                
                <!-- Step 2: Measuring -->
                <div class="process-card reveal reveal-delay-1">
                    <div class="process-card-img-wrapper">
                        <img src="img/howwework/Measure.jpg" alt="Window Measurements" class="process-card-img">
                        <div class="process-hover-icon">
                            <i class="fa-solid fa-ruler-combined"></i>
                        </div>
                    </div>
                    <span class="process-step-badge">Step 02</span>
                    <h3 class="process-card-title">Measuring</h3>
                    <p class="process-card-desc">Taking measurement of your windows for perfect fitting.</p>
                </div>
                
                <!-- Step 3: Stitching -->
                <div class="process-card reveal reveal-delay-2">
                    <div class="process-card-img-wrapper">
                        <img src="img/howwework/Stitching.jpg" alt="Master Stitching & Tailoring" class="process-card-img">
                        <div class="process-hover-icon">
                            <i class="fa-solid fa-scissors"></i>
                        </div>
                    </div>
                    <span class="process-step-badge">Step 03</span>
                    <h3 class="process-card-title">Stitching</h3>
                    <p class="process-card-desc">Curtain Stitching services are rendered by our team of expert tailors using fine quality canvas & threads that are durable for life.</p>
                </div>
                
                <!-- Step 4: Installation -->
                <div class="process-card reveal reveal-delay-3">
                    <div class="process-card-img-wrapper">
                        <img src="img/howwework/installation.png" alt="Professional Installation" class="process-card-img">
                        <div class="process-hover-icon">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </div>
                    </div>
                    <span class="process-step-badge">Step 04</span>
                    <h3 class="process-card-title">Installation</h3>
                    <p class="process-card-desc">Curtain installation from our experienced team.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         Services Section
         ========================================== -->
    

    <!-- ==========================================
         NRI Spotlight Section
         ========================================= -->
    <section id="nri" class="nri-spotlight">
        <div class="container nri-grid">
            <div class="nri-image-wrapper reveal">
                <img src="img/nri_consultation.jpg" alt="Elegant design swatch board and curtains roll in light studio" class="nri-img">
            </div>
            
            <div class="nri-content reveal reveal-delay-1">
                <span class="hero-badge">NRI Services</span>
                <h2 class="section-title-left">Global Consulting & Shipping</h2>
                <p style="margin: 20px 0 15px 0;">Designing your dream home in Gujarat from overseas? Our NRI design department makes remote curtain matching simple and seamless.</p>
                
                <ul class="nri-list">
                    <li class="nri-item">
                        <i class="fa-regular fa-circle-check nri-item-icon"></i> Video call fabric previews and design consulting.
                    </li>
                    <li class="nri-item">
                        <i class="fa-regular fa-circle-check nri-item-icon"></i> Itemized custom quotes with exact sizes.
                    </li>
                    <li class="nri-item">
                        <i class="fa-regular fa-circle-check nri-item-icon"></i> Express international courier stitching and delivery.
                    </li>
                </ul>

                <a href="https://wa.me/919586541555" class="btn btn-gold" target="_blank">Connect Over WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- ==========================================
         Brands & Partners Logo Slider Marquee
         ========================================== -->
    <section class="logo-slider-section">
        <div class="container-fluid px-0">
            <div class="logo-slider-wrapper">
                <div class="logo-slide-track">
                    <?php
                    $logoDir = __DIR__ . '/img/logo';
                    $brandLogos = [];
                    if (is_dir($logoDir)) {
                        $logoFiles = scandir($logoDir);
                        foreach ($logoFiles as $file) {
                            if ($file === '.' || $file === '..') continue;
                            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                            if (in_array($ext, ['png', 'jpg', 'jpeg', 'webp', 'svg'])) {
                                $brandLogos[] = $file;
                            }
                        }
                        natsort($brandLogos);
                    }
                    ?>
                    <!-- Logos list (1st copy) -->
                    <?php foreach ($brandLogos as $logo): ?>
                        <div class="logo-slide-item"><img src="img/logo/<?php echo htmlspecialchars($logo); ?>" alt="Brand Partner"></div>
                    <?php endforeach; ?>

                    <!-- Logos list (2nd copy for seamless loop) -->
                    <?php foreach ($brandLogos as $logo): ?>
                        <div class="logo-slide-item"><img src="img/logo/<?php echo htmlspecialchars($logo); ?>" alt="Brand Partner"></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         Google Reviews Slider Section
         ========================================== -->
    <?php include 'testimonials.php'; ?>

    <!-- ==========================================
         Booking & Contact Section
         ========================================== -->
    <section id="book" class="booking">
        <div class="container booking-grid">
            <div class="booking-info reveal">
                <div>
                    <h2>Let's Design Together</h2>
                    <p>Schedule a site consultation or request product catalogs. Drop us your details, and our styling team will guide you.</p>
                </div>

                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon-box">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div>
                            <div class="contact-label">Contact Person</div>
                            <div class="contact-value">Mr. Junaid</div>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon-box">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <div class="contact-label">Phone Support</div>
                            <div class="contact-value">+91 95865 41555</div>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon-box">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <div class="contact-label">Email Address</div>
                            <div class="contact-value">curtaincraft@yahoo.com</div>
                        </div>
                    </div>

                    <!-- <div class="contact-item">
                        <div class="contact-icon-box">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <div class="contact-label">Main Showroom</div>
                            <div class="contact-value" style="font-size: 0.95rem; line-height: 1.5;">SB-1 To 5, LA-CITADEL COMPLEX, Nutan Bharat Society, Dr Rustom Cama Marg, Opposite Velvet Bakers, Alkapuri, Vadodra -390007</div>
                        </div>
                    </div> -->
                </div>
            </div>

            <!-- Booking Form -->
            <div class="booking-form-wrapper reveal reveal-delay-1">
                <h3 class="form-title">Request a Consultation</h3>
                <p class="form-subtitle">Fill in the fields below. A home decorator will reach back shortly.</p>
                
                <form id="consultationForm" action="#" method="POST">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name *</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="e.g. john doe" required>
                    </div>

                    <div class="form-group-row">
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="e.g. +91 98765 43210" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="name@domain.com">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="service" class="form-label">I'm interested in *</label>
                        <select id="service" name="service" class="form-control" required>
                            <option value="" disabled selected>Select service...</option>
                            <option value="Curtains">Curtain Designing</option>
                            <option value="Blinds">Modern Blinds</option>
                            <option value="Sofa Fabrics">Upholstery & Sofa Fabrics</option>
                            <option value="NRI Consultation">NRI Home Consultation</option>
                            <option value="Full Project">Complete Home Decor Consultation</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Consultation Notes (Optional)</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Tell us about your windows, preferred colors, or details..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-gold btn-full" style="width: 100%; margin-top: 10px;">
                        Book Styling Consultation <i class="fa-solid fa-paper-plane btn-icon"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Consultation Form AJAX Script -->
    <script src="js/contact.js"></script>

<?php include 'footer.php'; ?>
