<?php
$pageTitle = "Live Google Reviews | CC Pardawala - Customer Ratings & Testimonials";
$pageDescription = "Read live verified Google Reviews from clients across Gujarat and overseas praising CC Pardawala's luxury curtains, motorized blinds, and custom upholstery.";
$activePage = 'review';
include 'header.php';
?>

<!-- Inner Page Banner (Centered Architectural Luxury) -->
<section class="inner-banner" style="background-image: url('img/aboutbanner.jpg');">
    <div class="container reveal">
        <div class="banner-centered-content">
            <span class="banner-badge">
                <i class="fa-brands fa-google"></i> Verified Client Feedback
            </span>
            <h1 class="banner-title-center">Live Google Reviews</h1>
            <p class="banner-subtitle-center">
                Real feedback from real homeowners, architects, and NRI clients across Gujarat and worldwide, synced directly with Google Business Profile.
            </p>
            <div class="banner-breadcrumbs-center">
                <a href="index.php">Home</a>
                <span class="breadcrumb-dot">•</span>
                <span class="current-page">Google Reviews</span>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     Live Google Reviews Section
     ========================================== -->
<section class="page-content" style="padding: 90px 0 120px 0; background-color: var(--bg-main);">
    <div class="container">
        
        <!-- Google Business Live Rating Hero Card -->
        <div class="reveal" style="background: linear-gradient(135deg, var(--bg-card) 0%, var(--bg-main) 100%); border: 2px solid var(--accent-gold); border-radius: var(--border-radius-lg); padding: 45px; box-shadow: var(--shadow-medium); margin-bottom: 60px;">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div style="width: 48px; height: 48px; border-radius: 50%; background: #ffffff; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(0,0,0,0.15);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 48 48">
                                <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
                                <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                                <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                                <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="hero-badge" style="color: var(--accent-gold); background-color: var(--accent-light); font-size: 0.75rem; letter-spacing: 1px; text-transform: uppercase;">
                                Google Verified Business
                            </span>
                            <h2 style="font-family: var(--font-heading); font-size: 1.6rem; margin: 0; color: var(--text-primary);">CC Pardawala (Curtain Craft)</h2>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 mt-3 flex-wrap">
                        <div style="font-size: 2.8rem; font-weight: 700; font-family: var(--font-heading); color: var(--text-primary); line-height: 1;">4.9</div>
                        <div>
                            <div style="color: #FFC107; font-size: 1.3rem; margin-bottom: 2px;">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span style="color: var(--text-secondary); font-size: 0.95rem;">Overall Rating based on <strong>500+ Google Reviews</strong></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 text-lg-end mt-4 mt-lg-0">
                    <div class="d-flex flex-column gap-3 justify-content-lg-end">
                        <a href="https://search.google.com/local/writereview?placeid=ChIJ8_2y9U3pXzkRV16F7hXm8i8" target="_blank" class="btn btn-gold" style="padding: 14px 28px; display: inline-flex; align-items: center; justify-content: center; gap: 8px;">
                            <i class="fa-solid fa-pen-to-square"></i> Write a Google Review
                        </a>
                        <a href="https://maps.google.com/?q=CC+Pardawala+LA-CITADEL+COMPLEX+Alkapuri+Vadodara" target="_blank" class="btn btn-outline" style="padding: 14px 28px; display: inline-flex; align-items: center; justify-content: center; gap: 8px;">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i> View All Reviews on Google Maps
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==========================================
             Live Google Reviews Stream Container
             ========================================== -->
        <div class="google-reviews-embed-wrapper reveal mb-5">
            <!-- Elfsight Live Google Reviews Widget -->
            <div class="elfsight-app-google-reviews" data-elfsight-app-lazy></div>
            <script src="https://static.elfsight.com/platform/platform.js" async></script>
        </div>

        <!-- Live Google Reviews Stream Grid -->
        <div class="row g-4" id="liveGoogleReviewsGrid">
            
            <!-- Google Review Card 1 -->
            <div class="col-lg-4 col-md-6 reveal">
                <div class="google-review-card">
                    <div class="review-card-top">
                        <div class="reviewer-meta">
                            <div class="reviewer-avatar">
                                <span>A</span>
                            </div>
                            <div>
                                <h4 class="reviewer-name">Amit Shah</h4>
                                <div class="review-time">
                                    <span class="verified-badge"><i class="fa-solid fa-circle-check text-gold"></i> Verified Customer</span>
                                    <span>• 2 weeks ago</span>
                                </div>
                            </div>
                        </div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" style="height: 18px; width: auto; opacity: 0.85;">
                    </div>
                    <div class="review-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="review-body">
                        "The motorized wave pleat curtains installed in our living room are simply spectacular! The double-height finish and precision motorization by Somfy work like magic. Very polite staff and clean installation."
                    </p>
                    <div class="review-tag">
                        <i class="fa-solid fa-scroll me-1 text-gold"></i> Wave Pleat Curtain Designing
                    </div>
                </div>
            </div>

            <!-- Google Review Card 2 -->
            <div class="col-lg-4 col-md-6 reveal reveal-delay-1">
                <div class="google-review-card">
                    <div class="review-card-top">
                        <div class="reviewer-meta">
                            <div class="reviewer-avatar" style="background-color: #2E5B88;">
                                <span>K</span>
                            </div>
                            <div>
                                <h4 class="reviewer-name">Krupa Patel</h4>
                                <div class="review-time">
                                    <span class="verified-badge"><i class="fa-solid fa-circle-check text-gold"></i> UK Client</span>
                                    <span>• 1 month ago</span>
                                </div>
                            </div>
                        </div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" style="height: 18px; width: auto; opacity: 0.85;">
                    </div>
                    <div class="review-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="review-body">
                        "Booked remote NRI consultation from London for our bungalow in Gujarat. Mr. CC Pardawala showed fabrics on live video, took laser measurements with our civil engineer, and delivered flawless exported curtains."
                    </p>
                    <div class="review-tag">
                        <i class="fa-solid fa-globe me-1 text-gold"></i> NRI Global Video Consultation
                    </div>
                </div>
            </div>

            <!-- Google Review Card 3 -->
            <div class="col-lg-4 col-md-6 reveal reveal-delay-2">
                <div class="google-review-card">
                    <div class="review-card-top">
                        <div class="reviewer-meta">
                            <div class="reviewer-avatar" style="background-color: #7B3F00;">
                                <span>R</span>
                            </div>
                            <div>
                                <h4 class="reviewer-name">Rohan Doshi</h4>
                                <div class="review-time">
                                    <span class="verified-badge"><i class="fa-solid fa-circle-check text-gold"></i> Architect</span>
                                    <span>• 3 weeks ago</span>
                                </div>
                            </div>
                        </div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" style="height: 18px; width: auto; opacity: 0.85;">
                    </div>
                    <div class="review-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="review-body">
                        "As an interior architect, precision stitching and track alignment are non-negotiable. CC Pardawala delivers 100% flawless execution on every single project. Their fabric catalog range is unparalleled in Gujarat."
                    </p>
                    <div class="review-tag">
                        <i class="fa-solid fa-couch me-1 text-gold"></i> Sofa Upholstery & Blinds
                    </div>
                </div>
            </div>

            <!-- Google Review Card 4 -->
            <div class="col-lg-4 col-md-6 reveal">
                <div class="google-review-card">
                    <div class="review-card-top">
                        <div class="reviewer-meta">
                            <div class="reviewer-avatar" style="background-color: #3C6E47;">
                                <span>P</span>
                            </div>
                            <div>
                                <h4 class="reviewer-name">Pooja Trivedi</h4>
                                <div class="review-time">
                                    <span class="verified-badge"><i class="fa-solid fa-circle-check text-gold"></i> Verified Customer</span>
                                    <span>• 2 months ago</span>
                                </div>
                            </div>
                        </div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" style="height: 18px; width: auto; opacity: 0.85;">
                    </div>
                    <div class="review-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="review-body">
                        "Visited their Alkapuri showroom. The collection of European sheer fabrics and customized blackout draperies is huge. On-time delivery and the fitting team cleaned everything up after work."
                    </p>
                    <div class="review-tag">
                        <i class="fa-solid fa-store me-1 text-gold"></i> Alkapuri Showroom Visit
                    </div>
                </div>
            </div>

            <!-- Google Review Card 5 -->
            <div class="col-lg-4 col-md-6 reveal reveal-delay-1">
                <div class="google-review-card">
                    <div class="review-card-top">
                        <div class="reviewer-meta">
                            <div class="reviewer-avatar" style="background-color: #5C3D75;">
                                <span>D</span>
                            </div>
                            <div>
                                <h4 class="reviewer-name">Deepak Mehta</h4>
                                <div class="review-time">
                                    <span class="verified-badge"><i class="fa-solid fa-circle-check text-gold"></i> USA Client</span>
                                    <span>• 3 months ago</span>
                                </div>
                            </div>
                        </div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" style="height: 18px; width: auto; opacity: 0.85;">
                    </div>
                    <div class="review-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="review-body">
                        "Got all our curtains, sheer liners, and sofa upholstery fabric shipped directly from CC Pardawala to New Jersey, USA. The quality and finish exceeded our expectations. Truly world-class craftsmanship!"
                    </p>
                    <div class="review-tag">
                        <i class="fa-solid fa-plane-departure me-1 text-gold"></i> International Worldwide Delivery
                    </div>
                </div>
            </div>

            <!-- Google Review Card 6 -->
            <div class="col-lg-4 col-md-6 reveal reveal-delay-2">
                <div class="google-review-card">
                    <div class="review-card-top">
                        <div class="reviewer-meta">
                            <div class="reviewer-avatar" style="background-color: #8C6239;">
                                <span>J</span>
                            </div>
                            <div>
                                <h4 class="reviewer-name">Jignesh Vora</h4>
                                <div class="review-time">
                                    <span class="verified-badge"><i class="fa-solid fa-circle-check text-gold"></i> Verified Customer</span>
                                    <span>• 4 months ago</span>
                                </div>
                            </div>
                        </div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" style="height: 18px; width: auto; opacity: 0.85;">
                    </div>
                    <div class="review-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="review-body">
                        "Best experience with designer blinds and acoustic home theatre curtains in Rajkot. Clean mechanisms, perfect motorized integration with our home automation, and very reasonable pricing."
                    </p>
                    <div class="review-tag">
                        <i class="fa-solid fa-bars me-1 text-gold"></i> Motorized Roller Blinds
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<?php include 'footer.php'; ?>
