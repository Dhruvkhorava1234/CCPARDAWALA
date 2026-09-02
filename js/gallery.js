/**
 * CC Pardawala — Project Gallery & Lightbox Scripts (Photos & Video Showcase)
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
    const modalVideo = document.getElementById('lightboxVideo');
    const modalBadge = document.getElementById('lightboxBadge');
    const modalCounter = document.getElementById('lightboxCounter');
    const closeBtn = document.getElementById('lightboxClose');
    const prevBtn = document.getElementById('lightboxPrev');
    const nextBtn = document.getElementById('lightboxNext');

    let currentCategory = '';
    let currentAlbumCards = [];
    let currentPhotoIndex = 0;

    const categoryNames = {
        'curtain': 'Curtain Designing',
        'binds': 'Designer Blinds',
        'sofa': 'Sofa & Upholstery',
        'wallpaper': 'Wallpapers & Decor',
        'carpet': 'Flooring',
        'mattress': 'Luxury Mattresses',
        'nri': 'NRI Work & Global Projects'
    };

    const categoryAliases = {
        'curtain': 'curtain',
        'curtains': 'curtain',
        'binds': 'binds',
        'blind': 'binds',
        'blinds': 'binds',
        'sofa': 'sofa',
        'sofas': 'sofa',
        'upholstery': 'sofa',
        'wallpaper': 'wallpaper',
        'wallpapers': 'wallpaper',
        'carpet': 'carpet',
        'carpets': 'carpet',
        'flooring': 'carpet',
        'mattress': 'mattress',
        'mattresses': 'mattress',
        'nri': 'nri',
        'nris': 'nri',
        'nriwork': 'nri',
        'nri-work': 'nri',
        'global': 'nri'
    };

    // Helper: update category album count label
    function updateAlbumCountLabel(cards) {
        if (!albumCount) return;
        const total = cards.length;
        const videoCount = cards.filter(c => c.getAttribute('data-type') === 'video').length;
        const photoCount = total - videoCount;

        if (videoCount > 0 && photoCount > 0) {
            albumCount.textContent = `${photoCount} Photos & ${videoCount} Videos`;
        } else if (videoCount > 0) {
            albumCount.textContent = `${videoCount} Videos`;
        } else {
            albumCount.textContent = `${total} Photos`;
        }
    }

    // 1. Function to open specific category album
    function openCategoryAlbum(categorySlug, updateUrl = true, shouldScroll = true) {
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
            updateAlbumCountLabel(currentAlbumCards);
        }

        // Show album view with smooth animation
        if (albumView) albumView.classList.add('active');

        // Update URL query parameter without page reload
        if (updateUrl && window.history && window.history.pushState) {
            const newUrl = new URL(window.location.href);
            newUrl.searchParams.set('category', categorySlug);
            window.history.pushState({ category: categorySlug }, '', newUrl.toString());
        }

        // Smooth scroll to top of gallery section
        if (shouldScroll) {
            const gallerySection = document.getElementById('galleryMainSection');
            if (gallerySection) {
                gallerySection.scrollIntoView({ behavior: 'smooth' });
            }
        }
    }

    // 2. Function to go back to category lookbook view
    function backToCategories() {
        if (albumView) albumView.classList.remove('active');
        if (lookbookView) lookbookView.style.display = 'block';
        
        // Clean URL search param without reloading
        if (window.history && window.history.pushState) {
            const newUrl = new URL(window.location.href);
            newUrl.searchParams.delete('category');
            newUrl.searchParams.delete('cat');
            window.history.pushState({}, '', newUrl.pathname);
        }

        const gallerySection = document.getElementById('galleryMainSection');
        if (gallerySection) {
            gallerySection.scrollIntoView({ behavior: 'smooth' });
        }
    }

    // Initial check: if album is already open on page load (server-side render)
    const initialActiveContainer = Array.from(categoryContainers).find(c => c.style.display === 'block');
    if (initialActiveContainer && albumView && albumView.classList.contains('active')) {
        currentAlbumCards = Array.from(initialActiveContainer.querySelectorAll('.gallery-card'));
        currentCategory = initialActiveContainer.id.replace('albumCategory-', '');
        updateAlbumCountLabel(currentAlbumCards);
    } else {
        // Check URL parameter or hash
        const urlParams = new URLSearchParams(window.location.search);
        let categoryParam = urlParams.get('category') || urlParams.get('cat') || window.location.hash.replace('#', '');
        if (categoryParam) {
            categoryParam = categoryParam.toLowerCase().trim();
            const mappedSlug = categoryAliases[categoryParam] || categoryParam;
            if (document.getElementById('albumCategory-' + mappedSlug)) {
                openCategoryAlbum(mappedSlug, false, false);
            }
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

    // 3. Lightbox Logic (Handles both High-Res Photos and Videos)
    function openLightbox(index) {
        if (!modal) return;
        currentPhotoIndex = index;
        updateLightboxPhoto();
        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function updateLightboxPhoto() {
        if (!currentAlbumCards.length) return;
        const card = currentAlbumCards[currentPhotoIndex];
        const src = card.getAttribute('data-src');
        const badge = card.getAttribute('data-badge');
        const type = card.getAttribute('data-type') || 'image';

        if (modalBadge) modalBadge.textContent = badge;

        if (type === 'video') {
            // Video Mode
            if (modalImg) {
                modalImg.style.display = 'none';
                modalImg.src = '';
            }
            if (modalVideo) {
                modalVideo.style.display = 'block';
                modalVideo.src = src;
                modalVideo.play().catch(() => {});
            }
            if (modalCounter) {
                modalCounter.textContent = `Video ${currentPhotoIndex + 1} of ${currentAlbumCards.length}`;
            }
        } else {
            // Image Mode
            if (modalVideo) {
                modalVideo.pause();
                modalVideo.src = '';
                modalVideo.style.display = 'none';
            }
            if (modalImg) {
                modalImg.style.display = 'block';
                modalImg.style.opacity = '0';
                modalImg.style.transform = 'scale(0.96)';

                setTimeout(() => {
                    modalImg.src = src;
                    modalImg.style.opacity = '1';
                    modalImg.style.transform = 'scale(1)';
                }, 150);
            }
            if (modalCounter) {
                modalCounter.textContent = `Photo ${currentPhotoIndex + 1} of ${currentAlbumCards.length}`;
            }
        }
    }

    function closeLightbox() {
        if (!modal) return;
        if (modalVideo) {
            modalVideo.pause();
            modalVideo.src = '';
            modalVideo.style.display = 'none';
        }
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

    // Attach click to all gallery photo and video cards
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

        // Micro-interaction: Play muted preview on card hover if video
        if (card.classList.contains('is-video')) {
            const cardVideo = card.querySelector('video');
            if (cardVideo) {
                card.addEventListener('mouseenter', () => {
                    cardVideo.play().catch(() => {});
                });
                card.addEventListener('mouseleave', () => {
                    cardVideo.pause();
                    cardVideo.currentTime = 0.5;
                });
            }
        }
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
