<?php
// Determine the current page filename
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : "CC Pardawala | Premium Curtains, Blinds & Home Furnishings"; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : "Discover made-to-measure premium curtains, Roman & roller blinds, and sofa fabrics at CC Pardawala. Servicing Vadodara, Rajkot, Jamnagar & NRIs globally with custom home decor solutions."; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- ==========================================
         Preloader / Spinner Screen
         ========================================== -->
    <div id="preloader">
        <div class="preloader-content">
            <div class="spinner-wrapper">
                <div class="spinner-ring"></div>
                <img src="img/logo.png" alt="CC Pardawala Logo" class="preloader-logo">
            </div>
            <div class="preloader-text">Loading Elegance</div>
        </div>
    </div>

    <!-- ==========================================
         Header & Navigation (Bootstrap Pill Navbar)
         ========================================== -->
    <nav class="navbar navbar-expand-lg header-wrapper">
        <div class="container-fluid px-5 nav-container">
            <a href="<?php echo ($current_page == 'index.php') ? '#' : 'index.php'; ?>" class="logo-link">
                <img src="img/logo.png" alt="CC Pardawala Logo" style="height: 65px; width: auto;">
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto pill-nav-menu position-relative">
                    <li class="nav-item">
                        <a href="index.php" 
                           class="nav-link <?php echo (!isset($activePage) || $activePage == 'home') ? 'active' : ''; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" 
                           class="nav-link <?php echo (isset($activePage) && $activePage == 'about') ? 'active' : ''; ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="services.php" 
                           class="nav-link <?php echo (isset($activePage) && $activePage == 'services') ? 'active' : ''; ?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="whyus.php" 
                           class="nav-link <?php echo (isset($activePage) && $activePage == 'why_us') ? 'active' : ''; ?>">Why us</a>
                    </li>
                    <li class="nav-item">
                        <a href="curtainsfornri.php" 
                           class="nav-link <?php echo (isset($activePage) && $activePage == 'nri') ? 'active' : ''; ?>">NRI Spotlight</a>
                    </li>
                    <li class="nav-item">
                        <a href="gallery.php" 
                           class="nav-link <?php echo (isset($activePage) && $activePage == 'gallery') ? 'active' : ''; ?>">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="shoplocator.php" 
                           class="nav-link <?php echo (isset($activePage) && $activePage == 'shoplocator') ? 'active' : ''; ?>">Store Locator</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" 
                           class="nav-link <?php echo (isset($activePage) && $activePage == 'contact') ? 'active' : ''; ?>">Contact</a>
                    </li>
                    <div class="nav-indicator"></div>
                </ul>

                <div class="nav-actions d-flex align-items-center gap-3">
                    <!-- Dark mode toggle -->
                    <button class="theme-btn" aria-label="Toggle Dark Mode">
                        <i class="fa-solid fa-moon"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
