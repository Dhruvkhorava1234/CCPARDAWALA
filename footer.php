<?php
// Determine the current page filename
$current_page = basename($_SERVER['PHP_SELF']);
?>
    <!-- ==========================================
         Footer
         ========================================== -->
    <footer>
        <div class="container footer-grid">
            
            <!-- Column 1: Brand & Legacy -->
            <div class="footer-brand">
                <a href="<?php echo ($current_page == 'index.php') ? '#' : 'index.php'; ?>" class="logo-link" style="margin-bottom: 18px; display: flex; flex-direction: row; align-items: center; gap: 12px;">
                    <img src="img/logo.png" alt="CC Pardawala Logo" style="height: 44px; width: auto; filter: brightness(0) invert(1);">
                    <div style="display: flex; flex-direction: column;">
                        <span class="logo-title" style="color: var(--text-light); line-height: 1.1; font-size: 1.15rem;">CC PARDAWALA</span>
                        <span class="logo-subtitle" style="color: var(--accent-gold); font-size: 0.72rem; letter-spacing: 2px;">CURTAIN CRAFT</span>
                    </div>
                </a>
                <p style="color: rgba(250, 247, 242, 0.7); font-size: 0.9rem; line-height: 1.65; margin-bottom: 20px;">
                    Curating fine architectural draperies, motorized blinds, tailored upholstery, and luxury living spaces across Gujarat since 2002.
                </p>
                <div class="social-links">
                    <a href="https://www.facebook.com/ccpardawala" target="_blank" class="social-link" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/ccpardawala" target="_blank" class="social-link" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://wa.me/919586541555" target="_blank" class="social-link" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
                <div class="footer-trust-badge">
                    <i class="fa-solid fa-star text-gold"></i> 4.9/5 Rating • 500+ NRI & Luxury Homes
                </div>
            </div>

            <!-- Column 2: Collections & Crafts -->
            <div>
                <h4 class="footer-title">Our Collections</h4>
                <ul class="footer-links">
                    <li class="footer-link-item">
                        <a href="services.php" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.65rem; color: var(--accent-gold);"></i> Bespoke Curtains</a>
                    </li>
                    <li class="footer-link-item">
                        <a href="services.php" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.65rem; color: var(--accent-gold);"></i> Motorized & Roman Blinds</a>
                    </li>
                    <li class="footer-link-item">
                        <a href="services.php" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.65rem; color: var(--accent-gold);"></i> Sofa & Custom Upholstery</a>
                    </li>
                    <li class="footer-link-item">
                        <a href="services.php" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.65rem; color: var(--accent-gold);"></i> Designer Wallpapers</a>
                    </li>
                    <li class="footer-link-item">
                        <a href="services.php" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.65rem; color: var(--accent-gold);"></i> Handcrafted Area Rugs</a>
                    </li>
                    <li class="footer-link-item">
                        <a href="services.php" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.65rem; color: var(--accent-gold);"></i> Orthopedic Mattresses</a>
                    </li>
                </ul>
            </div>

            <!-- Column 3: Client Concierge & Navigation -->
            <div>
                <h4 class="footer-title">Client Concierge</h4>
                <ul class="footer-links">
                    <li class="footer-link-item">
                        <a href="about.php" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.65rem; color: var(--accent-gold);"></i> Heritage & Craft Story</a>
                    </li>
                    <li class="footer-link-item">
                        <a href="whyus.php" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.65rem; color: var(--accent-gold);"></i> Why Choose Us</a>
                    </li>
                    <li class="footer-link-item">
                        <a href="curtainsfornri.php" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.65rem; color: var(--accent-gold);"></i> NRI Global Styling Desk</a>
                    </li>
                    <li class="footer-link-item">
                        <a href="gallery.php" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.65rem; color: var(--accent-gold);"></i> Installation Gallery</a>
                    </li>
                    <li class="footer-link-item">
                        <a href="shoplocator.php" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.65rem; color: var(--accent-gold);"></i> 7 Gujarat Showrooms</a>
                    </li>
                    <li class="footer-link-item">
                        <a href="contact.php" class="footer-link"><i class="fa-solid fa-chevron-right" style="font-size: 0.65rem; color: var(--accent-gold);"></i> Book Home Consultation</a>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Direct Contact & Showroom HQ -->
            <div>
                <h4 class="footer-title">Showroom & Styling Desk</h4>
                <ul class="footer-contact-list">
                    <li class="footer-contact-item">
                        <i class="fa-solid fa-location-dot footer-contact-icon"></i>
                        <span>SB-1 To 5, LA-CITADEL COMPLEX, Alkapuri, Vadodara, Gujarat - 390007</span>
                    </li>
                    <li class="footer-contact-item">
                        <i class="fa-solid fa-phone footer-contact-icon"></i>
                        <a href="tel:+919586541555" class="footer-contact-link">+91 95865 41555</a>
                    </li>
                    <li class="footer-contact-item">
                        <i class="fa-solid fa-envelope footer-contact-icon"></i>
                        <a href="mailto:curtaincraft@yahoo.com" class="footer-contact-link">curtaincraft@yahoo.com</a>
                    </li>
                    <li class="footer-contact-item">
                        <i class="fa-solid fa-clock footer-contact-icon"></i>
                        <span>Open 7 Days • 10:00 AM – 8:30 PM</span>
                    </li>
                </ul>
                <div style="margin-top: 18px;">
                    <a href="contact.php" class="btn btn-gold" style="padding: 9px 20px; font-size: 0.82rem; width: 100%; text-align: center; display: inline-block;">
                        Schedule Home Visit <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

        </div>

        <div class="container footer-bottom">
            <p style="margin: 0;">&copy; 2026 CC Pardawala (Curtain Craft). All rights reserved.</p>
            <p style="margin: 0; color: rgba(250, 247, 242, 0.4);">Luxury Curtains • Motorized Blinds • Bespoke Living • Gujarat, India</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
