<?php
$pageTitle = "Contact Us | CC Pardawala - Book Home Consultation";
$pageDescription = "Get in touch with CC Pardawala. Schedule an expert in-home measurements session, request material catalogs, or connect with our NRI styling department.";
$activePage = 'contact';
include 'header.php';
?>

<!-- Inner Page Banner (Centered Architectural Luxury) -->
<section class="inner-banner" style="background-image: url('img/contact.jpg');">
    <div class="container reveal">
        <div class="banner-centered-content">
            <span class="banner-badge">
                <i class="fa-solid fa-headset"></i> Connect With Us
            </span>
            <h1 class="banner-title-center">Contact Our Styling Team</h1>
            <p class="banner-subtitle-center">
                Schedule a site consultation, book precision laser measurements, or connect directly with our home styling specialists.
            </p>
            <div class="banner-breadcrumbs-center">
                <a href="index.php">Home</a>
                <span class="breadcrumb-dot">•</span>
                <span class="current-page">Contact Us</span>
            </div>
        </div>
    </div>
</section>

<!-- Page Content Section -->
<section class="page-content" style="padding: 80px 0; background-color: var(--bg-main);">
    <div class="container">
        <div class="row">
            <!-- Contact details -->
            <div class="col-lg-5 mb-5 mb-lg-0">
                <span class="hero-badge" style="color: var(--accent-gold); background-color: rgba(197, 168, 128, 0.1); margin-bottom: 15px; display: inline-block; padding: 6px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 600; letter-spacing: 1px; text-transform: uppercase;">Direct Channels</span>
                <h2 class="section-title-left" style="font-family: var(--font-heading); font-size: 2.25rem; font-weight: 500; margin-bottom: 25px; line-height: 1.3;">Let's Design Together</h2>
                <p style="color: var(--text-secondary); margin-bottom: 40px; font-size: 1.05rem;">Whether you are designing a single window or dressing a full residential property in Gujarat from overseas, our designers are here to assist.</p>

                <!-- Contact Person -->
                <div style="display: flex; gap: 20px; margin-bottom: 30px; align-items: center;">
                    <div style="background-color: var(--accent-light); color: var(--accent-gold); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; flex-shrink: 0;"><i class="fa-solid fa-user"></i></div>
                    <div>
                        <div style="font-size: 0.85rem; text-transform: uppercase; color: var(--text-secondary); letter-spacing: 1px; font-weight: 600;">Contact Person</div>
                        <div style="font-size: 1.2rem; font-weight: 600; color: var(--text-primary);">Mr. Junaid</div>
                    </div>
                </div>

                <!-- Phone -->
                <div style="display: flex; gap: 20px; margin-bottom: 30px; align-items: center;">
                    <div style="background-color: var(--accent-light); color: var(--accent-gold); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; flex-shrink: 0;"><i class="fa-solid fa-phone"></i></div>
                    <div>
                        <div style="font-size: 0.85rem; text-transform: uppercase; color: var(--text-secondary); letter-spacing: 1px; font-weight: 600;">Phone Support</div>
                        <div style="font-size: 1.2rem; font-weight: 600; color: var(--text-primary);">+91 95865 41555</div>
                    </div>
                </div>
 
                <!-- Email -->
                <div style="display: flex; gap: 20px; margin-bottom: 30px; align-items: center;">
                    <div style="background-color: var(--accent-light); color: var(--accent-gold); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; flex-shrink: 0;"><i class="fa-solid fa-envelope"></i></div>
                    <div>
                        <div style="font-size: 0.85rem; text-transform: uppercase; color: var(--text-secondary); letter-spacing: 1px; font-weight: 600;">Email Address</div>
                        <div style="font-size: 1.2rem; font-weight: 600; color: var(--text-primary);">curtaincraft@yahoo.com</div>
                    </div>
                </div>
 
                <!-- Showroom -->
                <!-- <div style="display: flex; gap: 20px; align-items: center;"> -->
                    <!-- <div style="background-color: var(--accent-light); color: var(--accent-gold); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; flex-shrink: 0;"><i class="fa-solid fa-location-dot"></i></div> -->
                    <!-- <div> -->
                        <!-- <div style="font-size: 0.85rem; text-transform: uppercase; color: var(--text-secondary); letter-spacing: 1px; font-weight: 600;">Headquarters Showroom</div> -->
                        <!-- <div style="font-size: 1.05rem; font-weight: 600; color: var(--text-primary); line-height: 1.5; margin-top: 2px;">SB-1 To 5, LA-CITADEL COMPLEX, Nutan Bharat Society, Dr Rustom Cama Marg, Opposite Velvet Bakers, Alkapuri, Vadodra -390007</div> -->
                    <!-- </div> -->
                <!-- </div> -->
            </div>

            <!-- Booking Form -->
            <div class="col-lg-7">
                <div style="background-color: var(--bg-card); padding: 40px; border-radius: var(--border-radius-lg); border: 1px solid var(--border-subtle); box-shadow: var(--shadow-medium);">
                    <h3 style="font-family: var(--font-heading); font-size: 1.75rem; margin-bottom: 10px; color: var(--text-primary);">Request a Styling Consultation</h3>
                    <p style="color: var(--text-secondary); font-size: 0.95rem; margin-bottom: 30px;">Fill in the fields below. A home decorator will reach back shortly.</p>
                    
                    <form id="contactForm" action="#" method="POST">
                        <div class="mb-3">
                            <label for="c-name" class="form-label" style="font-size: 0.85rem; text-transform: uppercase; color: var(--text-secondary); font-weight: 600; letter-spacing: 0.5px;">Full Name *</label>
                            <input type="text" id="c-name" name="name" class="form-control" style="background-color: var(--bg-main); border: 1px solid var(--border-subtle); padding: 12px; border-radius: var(--border-radius-md);" placeholder="e.g. john doe" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="c-phone" class="form-label" style="font-size: 0.85rem; text-transform: uppercase; color: var(--text-secondary); font-weight: 600; letter-spacing: 0.5px;">Phone Number *</label>
                                <input type="tel" id="c-phone" name="phone" class="form-control" style="background-color: var(--bg-main); border: 1px solid var(--border-subtle); padding: 12px; border-radius: var(--border-radius-md);" placeholder="e.g. +91 98765 43210" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="c-email" class="form-label" style="font-size: 0.85rem; text-transform: uppercase; color: var(--text-secondary); font-weight: 600; letter-spacing: 0.5px;">Email Address</label>
                                <input type="email" id="c-email" name="email" class="form-control" style="background-color: var(--bg-main); border: 1px solid var(--border-subtle); padding: 12px; border-radius: var(--border-radius-md);" placeholder="name@domain.com">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="c-service" class="form-label" style="font-size: 0.85rem; text-transform: uppercase; color: var(--text-secondary); font-weight: 600; letter-spacing: 0.5px;">I'm interested in *</label>
                            <select id="c-service" name="service" class="form-control" style="background-color: var(--bg-main); border: 1px solid var(--border-subtle); padding: 12px; border-radius: var(--border-radius-md);" required>
                                <option value="" disabled selected>Select service...</option>
                                <option value="Curtains">Curtain Designing</option>
                                <option value="Blinds">Modern Blinds</option>
                                <option value="Sofa Fabrics">Upholstery & Sofa Fabrics</option>
                                <option value="NRI Consultation">NRI Home Consultation</option>
                                <option value="Full Project">Complete Home Decor Consultation</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="c-message" class="form-label" style="font-size: 0.85rem; text-transform: uppercase; color: var(--text-secondary); font-weight: 600; letter-spacing: 0.5px;">Consultation Notes (Optional)</label>
                            <textarea id="c-message" name="message" class="form-control" rows="4" style="background-color: var(--bg-main); border: 1px solid var(--border-subtle); padding: 12px; border-radius: var(--border-radius-md);" placeholder="Tell us about your window structure, sizes, preferences, or project timeline..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-gold btn-full" style="width: 100%; padding: 14px; background-color: var(--accent-gold); color: #FFF; border: none; border-radius: var(--border-radius-md); font-weight: 600; text-transform: uppercase; letter-spacing: 1px; transition: var(--transition-fast);">
                            Book Styling Consultation <i class="fa-solid fa-paper-plane" style="margin-left: 8px;"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form AJAX Script -->
<script src="js/contact.js"></script>

<?php include 'footer.php'; ?>
