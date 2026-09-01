<?php
$pageTitle = "Project Gallery | CC Pardawala - Real Custom Home Furnishing Installations";
$pageDescription = "Explore authentic project photography from CC Pardawala featuring custom luxury curtains, motorized blinds, sofa upholstery, wallpapers, and carpets across Gujarat.";
$activePage = 'gallery';
include 'header.php';

// Define project categories mapped directly to img/project/ folders
$projectCategories = [
    'curtain' => [
        'num' => '01',
        'name' => 'Bespoke Curtains',
        'title' => 'Bespoke Curtains',
        'sub' => 'Architectural Drapes',
        'desc' => 'Double-height motorized wave pleats, blackout linings, and sheer linen cascades tailored for luxury villas and penthouses.',
        'badge' => 'Curtains',
        'icon' => 'fa-solid fa-scroll',
        'hero' => 'img/project/curtain/IMG-20260312-WA0038.jpg.jpeg',
        'tags' => ['Wave Pleat', 'Ripplefold', 'Somfy Automated', 'Linen Sheers']
    ],
    'binds' => [
        'num' => '02',
        'name' => 'Designer Blinds',
        'title' => 'Designer Blinds',
        'sub' => 'Light & Privacy',
        'desc' => 'Precision timber Venetian slats, motorized roller screens, and textured fabric Roman blinds engineered to millimeter precision.',
        'badge' => 'Blinds',
        'icon' => 'fa-solid fa-bars',
        'hero' => 'img/project/binds/IMG-20260312-WA0041.jpg.jpeg',
        'tags' => ['Venetian Timber', 'Motorized Rollers', 'UV Protective', 'Roman Drapes']
    ],
    'sofa' => [
        'num' => '03',
        'name' => 'Sofa & Upholstery',
        'title' => 'Sofa & Upholstery',
        'sub' => 'Bespoke Seating',
        'desc' => 'High-GSM woven velvets, performance chenille, and stain-resistant luxury upholstery fabrics for custom salon and lounge furniture.',
        'badge' => 'Sofa Fabrics',
        'icon' => 'fa-solid fa-couch',
        'hero' => 'img/project/sofa/IMG-20260304-WA0024.jpg.jpeg',
        'tags' => ['High-GSM Velvet', 'Stain Resistant', 'Custom Re-Craft', '500+ Textures']
    ],
    'wallpaper' => [
        'num' => '04',
        'name' => 'Wallpapers & Decor',
        'title' => 'Wallcoverings',
        'sub' => 'Textured Walls',
        'desc' => 'European textured wallpapers, metallic foil accents, and seamless botanical murals for statement feature walls.',
        'badge' => 'Wallpapers',
        'icon' => 'fa-solid fa-paint-roller',
        'hero' => 'img/project/wallpaper/IMG_9490.JPG.jpeg',
        'tags' => ['Embossed Textures', 'Metallic Accents', 'Seamless Rolls', 'Washable Surface']
    ],
    'carpet' => [
        'num' => '05',
        'name' => 'Carpets & Rugs',
        'title' => 'Carpets & Rugs',
        'sub' => 'Floor Artistry',
        'desc' => 'Hand-tufted wool area rugs, geometric plush textures, and custom-sized runners coordinated to your curtain palettes.',
        'badge' => 'Carpets',
        'icon' => 'fa-solid fa-rug',
        'hero' => 'img/project/carpet/Hand Tufted Wool Area Rug - Black, Teal & Cream Geometric Design.jpg',
        'tags' => ['100% Wool Blends', 'Hand-Tufted', 'Custom Sizing', 'Plush High-Pile']
    ],
    'mattress' => [
        'num' => '06',
        'name' => 'Luxury Mattresses',
        'title' => 'Luxury Mattresses',
        'sub' => 'Sleep Posture',
        'desc' => 'Pocket spring, memory foam, and natural latex mattresses crafted for zero-motion-transfer and spinal alignment.',
        'badge' => 'Mattresses',
        'icon' => 'fa-solid fa-bed',
        'hero' => 'img/project/mattress/IMG_9487.JPG.jpeg',
        'tags' => ['Pocket Springs', 'Natural Latex', 'Zero Motion Transfer', 'Custom Dimensions']
    ]
];

// Scan img/project/ for browser-compatible images (.jpg, .jpeg, .png, .webp)
$galleryItemsByCategory = [];
$categoryCounts = [];

foreach ($projectCategories as $folder => $meta) {
    $dirPath = __DIR__ . '/img/project/' . $folder;
    $galleryItemsByCategory[$folder] = [];
    $categoryCounts[$folder] = 0;
    
    if (is_dir($dirPath)) {
        $files = scandir($dirPath);
        foreach ($files as $file) {
            if ($file === '.' || $file === '..') continue;
            
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            // Filter browser-compatible images (exclude HEIC)
            if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp'])) {
                $categoryCounts[$folder]++;
                $galleryItemsByCategory[$folder][] = [
                    'category' => $folder,
                    'category_name' => $meta['name'],
                    'badge' => $meta['badge'],
                    'filename' => $file,
                    'path' => 'img/project/' . $folder . '/' . $file,
                    'title' => $meta['name'] . ' Installation'
                ];
            }
        }
    }
}
?>

<!-- Inner Page Banner (Centered Architectural Luxury) -->
<section class="inner-banner" style="background-image: url('img/aboutbanner.jpg');">
    <div class="container reveal">
        <div class="banner-centered-content">
            <span class="banner-badge">
                <i class="fa-solid fa-camera-retro"></i> Curated Portfolio
            </span>
            <h1 class="banner-title-center">Project & Work Gallery</h1>
            <p class="banner-subtitle-center">
                Select any design category to view authentic on-site installation photography crafted by CC Pardawala across Gujarat.
            </p>
            <div class="banner-breadcrumbs-center">
                <a href="index.php">Home</a>
                <span class="breadcrumb-dot">•</span>
                <span class="current-page">Gallery</span>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     Main Gallery Section
     ========================================== -->
<section class="gallery-section" id="galleryMainSection">
    <div class="container">

        <!-- ==========================================
             VIEW 1: Editorial Lookbook Category Cards
             ========================================== -->
        <div class="lookbook-view" id="lookbookView">
            
            <div class="text-center mb-5 reveal">
                <span class="hero-badge" style="color: var(--accent-gold); background-color: var(--accent-light); margin-bottom: 12px; display: inline-block;">Design Collections</span>
                <h2 class="section-title">Explore by Craft Category</h2>
                <p style="color: var(--text-secondary); max-width: 680px; margin: 0 auto; font-size: 1.05rem;">Click on any category card below to open its dedicated photo gallery.</p>
            </div>

            <div class="lookbook-stack">
                <?php 
                $i = 0;
                foreach ($projectCategories as $slug => $cat): 
                    $isReverse = ($i % 2 !== 0);
                    $count = $categoryCounts[$slug] ?? 0;
                    $i++;
                ?>
                    <div class="editorial-card reveal" data-category-target="<?php echo $slug; ?>">
                        <div class="editorial-card-grid <?php echo $isReverse ? 'reverse' : ''; ?>">
                            
                            <!-- Sidebar Info Column -->
                            <div class="editorial-sidebar">
                                <div>
                                    <div class="editorial-num"><?php echo $cat['num']; ?> / COLLECTION</div>
                                    <div class="editorial-sub-label"><?php echo $cat['sub']; ?></div>
                                    <p class="editorial-desc"><?php echo $cat['desc']; ?></p>
                                </div>
                                <div>
                                    <span class="editorial-explore-btn">
                                        Open Gallery (<?php echo $count; ?> Photos) <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                </div>
                            </div>

                            <!-- Hero Visual Canvas with Superimposed Typography & Glass Band -->
                            <div class="editorial-visual">
                                <img src="<?php echo $cat['hero']; ?>" alt="<?php echo $cat['name']; ?>" class="editorial-img">
                                
                                <div class="editorial-title-overlay">
                                    <h2 class="editorial-large-title"><?php echo $cat['title']; ?></h2>
                                </div>

                                <div class="editorial-glass-band">
                                    <div class="editorial-tags">
                                        <?php foreach ($cat['tags'] as $idx => $tag): ?>
                                            <span class="editorial-tag-item">
                                                <?php if ($idx > 0): ?><span class="editorial-tag-dot"></span><?php endif; ?>
                                                <?php echo $tag; ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </div>
                                    <span class="editorial-count-badge">
                                        <i class="fa-solid fa-camera me-1"></i> <?php echo $count; ?> Installations
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

        <!-- ==========================================
             VIEW 2: Category Album Photos Grid View
             ========================================== -->
        <div class="category-album-view" id="albumView">
            
            <!-- Sticky / Prominent Navigation Top Bar -->
            <div class="album-top-bar">
                <button class="back-to-categories-btn" id="backToCategoriesBtn">
                    <i class="fa-solid fa-arrow-left"></i> Back to Categories
                </button>
                <div class="album-title-block">
                    <h3 class="album-title-text" id="albumCurrentTitle">Bespoke Curtains</h3>
                    <span class="editorial-count-badge" id="albumCurrentCount">0 Photos</span>
                </div>
            </div>

            <!-- Photos Grid per Category -->
            <?php foreach ($projectCategories as $slug => $cat): ?>
                <div class="album-category-container" id="albumCategory-<?php echo $slug; ?>" style="display: none;">
                    <div class="album-photos-grid">
                        <?php foreach ($galleryItemsByCategory[$slug] as $index => $item): ?>
                            <div class="gallery-card" 
                                 data-category="<?php echo $slug; ?>"
                                 data-index="<?php echo $index; ?>"
                                 data-src="<?php echo htmlspecialchars($item['path']); ?>"
                                 data-badge="<?php echo htmlspecialchars($item['badge']); ?>"
                                 data-title="<?php echo htmlspecialchars($item['title']); ?>">
                                
                                <img src="<?php echo htmlspecialchars($item['path']); ?>" 
                                     alt="<?php echo htmlspecialchars($item['title']); ?>" 
                                     class="gallery-img"
                                     loading="lazy">
                                
                                <div class="gallery-zoom-hint">
                                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                                </div>

                                <div class="gallery-overlay">
                                    <span class="gallery-badge"><?php echo htmlspecialchars($item['badge']); ?></span>
                                    <h3 class="gallery-title"><?php echo htmlspecialchars($item['title']); ?></h3>
                                    <p class="gallery-desc">Click to expand high-resolution view</p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>

<!-- ==========================================
     Full-Screen Luxury Lightbox Modal
     ========================================== -->
<div class="gallery-lightbox-modal" id="galleryLightbox" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="lightbox-content-wrapper">
        
        <!-- Lightbox Top Bar -->
        <div class="lightbox-header">
            <div class="lightbox-info">
                <span class="lightbox-badge" id="lightboxBadge">Category</span>
                <span class="lightbox-counter" id="lightboxCounter">Photo 1 of 1</span>
            </div>
            <button class="lightbox-close-btn" id="lightboxClose" aria-label="Close Lightbox">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <!-- Lightbox Image Center Container -->
        <div class="lightbox-img-container position-relative">
            <img src="" alt="Project Preview" class="lightbox-img" id="lightboxImg">
            
            <!-- Prev & Next Floating Buttons -->
            <button class="lightbox-nav-btn lightbox-prev" id="lightboxPrev" aria-label="Previous Photo">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="lightbox-nav-btn lightbox-next" id="lightboxNext" aria-label="Next Photo">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

    </div>
</div>

<!-- Gallery JS Script -->
<script src="js/gallery.js"></script>

<!-- Testimonials Section -->
<?php include 'testimonials.php'; ?>

<?php include 'footer.php'; ?>
