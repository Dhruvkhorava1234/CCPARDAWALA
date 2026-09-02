<?php
$pageTitle = "Project Gallery | CC Pardawala - Real Custom Home Furnishing Installations";
$pageDescription = "Explore authentic project photography from CC Pardawala featuring custom luxury curtains, motorized blinds, sofa upholstery, wallpapers, and carpets across Gujarat.";
$activePage = 'gallery';
include 'header.php';

// Define project categories mapped directly to img/project/ folders
$projectCategories = [
    'curtain' => [
        'num' => '01',
        'name' => 'Curtain Designing',
        'title' => 'Curtain Designing',
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
        'hero' => 'img/roman_blinds.jpg',
        'tags' => ['Venetian Timber', 'Motorized Rollers', 'UV Protective', 'Roman Drapes']
    ],
    'sofa' => [
        'num' => '03',
        'name' => 'Sofa & Upholstery',
        'title' => 'Sofa & Upholstery',
        'sub' => 'Custom Seating',
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
        'name' => 'Flooring',
        'title' => 'Flooring',
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
    ],
    'nri' => [
        'num' => '07',
        'name' => 'NRI Work & Global Projects',
        'title' => 'NRI Work & Global Projects',
        'sub' => 'Worldwide Window Styling',
        'desc' => 'Remote consultations, virtual millimeter measurements, custom tailoring, and worldwide door-to-door delivery for international homes across the USA, UK, Canada, Australia, and the Gulf.',
        'badge' => 'NRI Work',
        'icon' => 'fa-solid fa-earth-americas',
        'hero' => 'img/nri_consultation.jpg',
        'tags' => ['Live Video Consultation', 'Millimeter Precision', 'Worldwide Shipping', 'Made-to-Measure']
    ]
];

// Custom descriptive titles for select category photos & videos
$customImageTitles = [
    'nri' => [
        'NRI-Video-Consultation.jpg' => 'Live Showroom Video Consultation & Swatches',
        'Global-NRI-Map.jpg' => 'Global NRI Worldwide Shipping & Delivery Coverage',
        'step1.jpg' => 'Step 01: Connect via WhatsApp',
        'step2.jpg' => 'Step 02: Share Room Photos & Video Walkthroughs',
        'step3.jpg' => 'Step 03: Expert Fabric Recommendations & Curation',
        'step4.jpg' => 'Step 04: Live Video Measurement & Sizing Guide',
        'step5.jpg' => 'Step 05: Stitching Pattern Selection & Pleat Styling',
        'step6.jpg' => 'Step 06: Formal Itemized Transparent Quotation',
        'step7.jpg' => 'Step 07: Secure Order Confirmation & Advance Payment',
        'step8.jpg' => 'Step 08: Master Workshop Custom Tailoring',
        'step9.jpg' => 'Step 09: Steam Pressing, Packing & Cargo Dispatch',
        'step10.jpg' => 'Step 10: Doorstep Delivery Handover & Completion',
        'WhatsApp Video 2026-09-02 at 5.34.09 PM.mp4' => 'NRI Villa Drapes & Motorized Wave Pleat Video Walkthrough',
        'WhatsApp Video 2026-09-02 at 5.34.09 PM (1).mp4' => 'NRI Custom Sheers & Fabric Texture Movement Demo',
        'WhatsApp Video 2026-09-02 at 5.34.09 PM (2).mp4' => 'NRI Ceiling Pocket Curtain Fitting & Smooth Glide Demo',
        'WhatsApp Video 2026-09-02 at 5.34.10 PM.mp4' => 'NRI Living Room Architectural Drapery Video Showcase',
        'WhatsApp Video 2026-09-02 at 5.34.11 PM.mp4' => 'NRI Double-Height Curtain Installation Video Showcase',
        'WhatsApp Video 2026-09-02 at 5.34.12 PM.mp4' => 'NRI Master Bedroom Blackout & Sheer Layering Video',
        'WhatsApp Video 2026-09-02 at 5.34.13 PM.mp4' => 'NRI Full Villa Window Styling & Final Handover Video',
    ]
];

// Scan img/project/ for browser-compatible images and videos
$galleryItemsByCategory = [];
$categoryCounts = [];
$categoryPhotoCounts = [];
$categoryVideoCounts = [];

foreach ($projectCategories as $folder => $meta) {
    $dirPath = __DIR__ . '/img/project/' . $folder;
    $galleryItemsByCategory[$folder] = [];
    $categoryCounts[$folder] = 0;
    $categoryPhotoCounts[$folder] = 0;
    $categoryVideoCounts[$folder] = 0;
    
    if (is_dir($dirPath)) {
        $files = scandir($dirPath);
        foreach ($files as $file) {
            if ($file === '.' || $file === '..') continue;
            
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            $isImage = in_array($ext, ['jpg', 'jpeg', 'png', 'webp']);
            $isVideo = in_array($ext, ['mp4', 'webm', 'mov']);

            if ($isImage || $isVideo) {
                $categoryCounts[$folder]++;
                if ($isImage) $categoryPhotoCounts[$folder]++;
                if ($isVideo) $categoryVideoCounts[$folder]++;

                $badge = $isVideo ? ($meta['badge'] . ' Video') : $meta['badge'];
                $itemTitle = $customImageTitles[$folder][$file] ?? ($isVideo ? ($meta['name'] . ' Video Walkthrough') : ($meta['name'] . ' Installation'));

                $galleryItemsByCategory[$folder][] = [
                    'category' => $folder,
                    'category_name' => $meta['name'],
                    'type' => $isVideo ? 'video' : 'image',
                    'badge' => $badge,
                    'filename' => $file,
                    'path' => 'img/project/' . $folder . '/' . $file,
                    'title' => $itemTitle
                ];
            }
        }
    }
}

// Check for preselected category via URL parameter
$requestedCategory = null;
if (isset($_GET['category']) || isset($_GET['cat'])) {
    $rawCat = strtolower(trim($_GET['category'] ?? $_GET['cat'] ?? ''));
    $catAliases = [
        'curtain' => 'curtain',
        'curtains' => 'curtain',
        'binds' => 'binds',
        'blind' => 'binds',
        'blinds' => 'binds',
        'sofa' => 'sofa',
        'sofas' => 'sofa',
        'upholstery' => 'sofa',
        'wallpaper' => 'wallpaper',
        'wallpapers' => 'wallpaper',
        'carpet' => 'carpet',
        'carpets' => 'carpet',
        'flooring' => 'carpet',
        'mattress' => 'mattress',
        'mattresses' => 'mattress',
        'nri' => 'nri',
        'nris' => 'nri',
        'nriwork' => 'nri',
        'nri-work' => 'nri',
        'global' => 'nri'
    ];
    $mapped = $catAliases[$rawCat] ?? $rawCat;
    if (isset($projectCategories[$mapped])) {
        $requestedCategory = $mapped;
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
        <div class="lookbook-view" id="lookbookView" <?php echo $requestedCategory ? 'style="display: none;"' : ''; ?>>
            
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
                    $photos = $categoryPhotoCounts[$slug] ?? 0;
                    $videos = $categoryVideoCounts[$slug] ?? 0;
                    
                    if ($videos > 0 && $photos > 0) {
                        $btnCountText = "{$photos} Photos & {$videos} Videos";
                    } elseif ($videos > 0) {
                        $btnCountText = "{$videos} Videos";
                    } else {
                        $btnCountText = "{$count} Photos";
                    }
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
                                        Open Gallery (<?php echo $btnCountText; ?>) <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                </div>
                            </div>

                            <!-- Hero Visual Canvas with Superimposed Typography & Glass Band -->
                            <div class="editorial-visual">
                                <?php 
                                $heroSrc = (!empty($cat['hero']) && file_exists(__DIR__ . '/' . $cat['hero'])) 
                                    ? $cat['hero'] 
                                    : (!empty($galleryItemsByCategory[$slug][0]['path']) ? $galleryItemsByCategory[$slug][0]['path'] : 'img/Homebanner.jpg');
                                ?>
                                <img src="<?php echo htmlspecialchars($heroSrc); ?>" alt="<?php echo htmlspecialchars($cat['name']); ?>" class="editorial-img">
                                
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
                                        <i class="fa-solid <?php echo ($videos > 0) ? 'fa-photo-film' : 'fa-camera'; ?> me-1"></i> <?php echo $count; ?> Installations
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
        <div class="category-album-view <?php echo $requestedCategory ? 'active' : ''; ?>" id="albumView">
            
            <!-- Sticky / Prominent Navigation Top Bar -->
            <div class="album-top-bar">
                <button class="back-to-categories-btn" id="backToCategoriesBtn">
                    <i class="fa-solid fa-arrow-left"></i> Back to Categories
                </button>
                <div class="album-title-block">
                    <h3 class="album-title-text" id="albumCurrentTitle"><?php echo $requestedCategory ? htmlspecialchars($projectCategories[$requestedCategory]['name']) : 'Curtain Designing'; ?></h3>
                    <?php 
                    $activeCountText = '0 Items';
                    if ($requestedCategory) {
                        $rPhotos = $categoryPhotoCounts[$requestedCategory] ?? 0;
                        $rVideos = $categoryVideoCounts[$requestedCategory] ?? 0;
                        if ($rVideos > 0 && $rPhotos > 0) {
                            $activeCountText = "{$rPhotos} Photos & {$rVideos} Videos";
                        } elseif ($rVideos > 0) {
                            $activeCountText = "{$rVideos} Videos";
                        } else {
                            $activeCountText = ($categoryCounts[$requestedCategory] ?? 0) . " Photos";
                        }
                    }
                    ?>
                    <span class="editorial-count-badge" id="albumCurrentCount"><?php echo $activeCountText; ?></span>
                </div>
            </div>

            <!-- Photos & Videos Grid per Category -->
            <?php foreach ($projectCategories as $slug => $cat): ?>
                <div class="album-category-container" id="albumCategory-<?php echo $slug; ?>" style="<?php echo ($requestedCategory === $slug) ? 'display: block;' : 'display: none;'; ?>">
                    <div class="album-photos-grid">
                        <?php foreach ($galleryItemsByCategory[$slug] as $index => $item): 
                            $isVideo = ($item['type'] === 'video');
                        ?>
                            <div class="gallery-card <?php echo $isVideo ? 'is-video' : ''; ?>" 
                                 data-category="<?php echo $slug; ?>"
                                 data-index="<?php echo $index; ?>"
                                 data-type="<?php echo $item['type']; ?>"
                                 data-src="<?php echo htmlspecialchars($item['path']); ?>"
                                 data-badge="<?php echo htmlspecialchars($item['badge']); ?>"
                                 data-title="<?php echo htmlspecialchars($item['title']); ?>">
                                
                                <?php if ($isVideo): ?>
                                    <video src="<?php echo htmlspecialchars($item['path']); ?>#t=0.5" 
                                           class="gallery-video" 
                                           preload="metadata" 
                                           muted 
                                           playsinline></video>
                                    
                                    <div class="gallery-play-btn">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                    
                                    <div class="gallery-zoom-hint">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                <?php else: ?>
                                    <img src="<?php echo htmlspecialchars($item['path']); ?>" 
                                         alt="<?php echo htmlspecialchars($item['title']); ?>" 
                                         class="gallery-img"
                                         loading="lazy">
                                    
                                    <div class="gallery-zoom-hint">
                                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                                    </div>
                                <?php endif; ?>

                                <div class="gallery-overlay">
                                    <span class="gallery-badge <?php echo $isVideo ? 'video-badge' : ''; ?>">
                                        <?php if ($isVideo): ?><i class="fa-solid fa-video me-1"></i><?php endif; ?>
                                        <?php echo htmlspecialchars($item['badge']); ?>
                                    </span>
                                    <h3 class="gallery-title"><?php echo htmlspecialchars($item['title']); ?></h3>
                                    <p class="gallery-desc"><?php echo $isVideo ? 'Click to play full-screen video' : 'Click to expand high-resolution view'; ?></p>
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

        <!-- Lightbox Media Center Container -->
        <div class="lightbox-img-container position-relative">
            <img src="" alt="Project Preview" class="lightbox-img" id="lightboxImg">
            <video src="" class="lightbox-video" id="lightboxVideo" controls playsinline></video>
            
            <!-- Prev & Next Floating Buttons -->
            <button class="lightbox-nav-btn lightbox-prev" id="lightboxPrev" aria-label="Previous Media">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="lightbox-nav-btn lightbox-next" id="lightboxNext" aria-label="Next Media">
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
