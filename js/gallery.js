/**
 * CC Pardawala — Project Gallery & Lightbox Scripts
 */
document.addEventListener('DOMContentLoaded', function() {
    const lookbookView = document.getElementById('lookbookView');
    const albumView = document.getElementById('albumView');
    const backBtn = document.getElementById('backToCategoriesBtn');
    const albumTitle = document.getElementById('albumCurrentTitle');
    const albumCount = document.getElementById('albumCurrentCount');
    const categoryCards = document.querySelectorAll('.editorial-card');
    const categoryContainers = document.querySelectorAll('.album-category-container');

    // Lightbox Elements
    const modal = document.getElementById('galleryLightbox');
    const modalImg = document.getElementById('lightboxImg');
    const modalBadge = document.getElementById('lightboxBadge');
    const modalCounter = document.getElementById('lightboxCounter');
    const closeBtn = document.getElementById('lightboxClose');
    const prevBtn = document.getElementById('lightboxPrev');
    const nextBtn = document.getElementById('lightboxNext');

    let currentCategory = '';
    let currentAlbumCards = [];
    let currentPhotoIndex = 0;

    const categoryNames = {
        'curtain': 'Bespoke Curtains',
        'binds': 'Designer Blinds',
        'sofa': 'Sofa & Upholstery',
        'wallpaper': 'Wallpapers & Decor',
        'carpet': 'Carpets & Rugs',
        'mattress': 'Luxury Mattresses'
    };

    // 1. Function to open specific category album
    function openCategoryAlbum(categorySlug) {
        currentCategory = categorySlug;
        
        // Hide lookbook view
        if (lookbookView) lookbookView.style.display = 'none';

        // Hide all album category containers
        categoryContainers.forEach(container => container.style.display = 'none');

        // Show target container
        const targetContainer = document.getElementById('albumCategory-' + categorySlug);
        if (targetContainer) {
            targetContainer.style.display = 'block';
            currentAlbumCards = Array.from(targetContainer.querySelectorAll('.gallery-card'));
            
            if (albumTitle) albumTitle.textContent = categoryNames[categorySlug] || 'Project Gallery';
            if (albumCount) albumCount.textContent = `${currentAlbumCards.length} Photos`;
        }

        // Show album view with smooth animation
        if (albumView) albumView.classList.add('active');

        // Smooth scroll to top of gallery section
        const gallerySection = document.getElementById('galleryMainSection');
        if (gallerySection) {
            gallerySection.scrollIntoView({ behavior: 'smooth' });
        }
    }

    // 2. Function to go back to category lookbook view
    function backToCategories() {
        if (albumView) albumView.classList.remove('active');
        if (lookbookView) lookbookView.style.display = 'block';
        
        const gallerySection = document.getElementById('galleryMainSection');
        if (gallerySection) {
            gallerySection.scrollIntoView({ behavior: 'smooth' });
        }
    }

    // Attach Click event to each category editorial card
    categoryCards.forEach(card => {
        card.addEventListener('click', function() {
            const target = this.getAttribute('data-category-target');
            if (target) openCategoryAlbum(target);
        });
    });

    if (backBtn) {
        backBtn.addEventListener('click', backToCategories);
    }

    // 3. Lightbox Logic
    function openLightbox(index) {
        if (!modal) return;
        currentPhotoIndex = index;
        updateLightboxPhoto();
        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function updateLightboxPhoto() {
        if (!currentAlbumCards.length || !modalImg) return;
        const card = currentAlbumCards[currentPhotoIndex];
        const src = card.getAttribute('data-src');
        const badge = card.getAttribute('data-badge');

        modalImg.style.opacity = '0';
        modalImg.style.transform = 'scale(0.96)';

        setTimeout(() => {
            modalImg.src = src;
            if (modalBadge) modalBadge.textContent = badge;
            if (modalCounter) modalCounter.textContent = `Photo ${currentPhotoIndex + 1} of ${currentAlbumCards.length}`;
            modalImg.style.opacity = '1';
            modalImg.style.transform = 'scale(1)';
        }, 150);
    }

    function closeLightbox() {
        if (!modal) return;
        modal.classList.remove('active');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    function showNextPhoto() {
        if (!currentAlbumCards.length) return;
        currentPhotoIndex = (currentPhotoIndex + 1) % currentAlbumCards.length;
        updateLightboxPhoto();
    }

    function showPrevPhoto() {
        if (!currentAlbumCards.length) return;
        currentPhotoIndex = (currentPhotoIndex - 1 + currentAlbumCards.length) % currentAlbumCards.length;
        updateLightboxPhoto();
    }

    // Attach click to all gallery photo cards
    document.querySelectorAll('.gallery-card').forEach(card => {
        card.addEventListener('click', function(e) {
            e.stopPropagation();
            const parent = this.closest('.album-category-container');
            if (parent) {
                currentAlbumCards = Array.from(parent.querySelectorAll('.gallery-card'));
                const index = currentAlbumCards.indexOf(this);
                openLightbox(index !== -1 ? index : 0);
            }
        });
    });

    if (closeBtn) closeBtn.addEventListener('click', closeLightbox);
    if (nextBtn) nextBtn.addEventListener('click', showNextPhoto);
    if (prevBtn) prevBtn.addEventListener('click', showPrevPhoto);

    // Close when clicking outside content
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === modal || e.target.classList.contains('lightbox-content-wrapper')) {
                closeLightbox();
            }
        });
    }

    // Keyboard controls
    document.addEventListener('keydown', function(e) {
        if (!modal || !modal.classList.contains('active')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowRight') showNextPhoto();
        if (e.key === 'ArrowLeft') showPrevPhoto();
    });
});
