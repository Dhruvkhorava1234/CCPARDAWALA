document.addEventListener('DOMContentLoaded', () => {
    
    // ==========================================
    // 0. Preloader Fade Out
    // ==========================================
    const preloader = document.getElementById('preloader');
    if (preloader) {
        const startTime = Date.now();
        const minDuration = 1000; // 3 seconds
        
        const dismissPreloader = () => {
            const elapsed = Date.now() - startTime;
            const delay = Math.max(0, minDuration - elapsed);
            setTimeout(() => {
                preloader.classList.add('fade-out');
            }, delay);
        };
        
        window.addEventListener('load', dismissPreloader);
        
        // Fallback safety timeout
        setTimeout(dismissPreloader, 4500);
    }
    
    // ==========================================
    // 1. Header Scroll Effect
    // ==========================================
    const header = document.querySelector('.header-wrapper');
    const handleScroll = () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };
    window.addEventListener('scroll', handleScroll);
    // Initial check on load
    handleScroll();

    // ==========================================
    // 2. Sliding Navigation Indicator & ScrollSpy
    // ==========================================
    const navMenu = document.querySelector('.pill-nav-menu');
    const indicator = document.querySelector('.nav-indicator');
    const navLinks = document.querySelectorAll('.pill-nav-menu .nav-link');
    const navCollapse = document.getElementById('navbarNav');

    if (navMenu && indicator && navLinks.length > 0) {
        const updateIndicator = (targetLink) => {
            if (window.innerWidth >= 992) {
                const linkRect = targetLink.getBoundingClientRect();
                const menuRect = navMenu.getBoundingClientRect();
                const leftPos = linkRect.left - menuRect.left;
                const width = linkRect.width;
                
                indicator.style.left = `${leftPos}px`;
                indicator.style.width = `${width}px`;

                // Highlight text color under indicator dynamically
                navLinks.forEach(link => {
                    if (link === targetLink) {
                        link.classList.add('indicator-active');
                    } else {
                        link.classList.remove('indicator-active');
                    }
                });
            }
        };

        // Initialize indicator position
        const activeLink = document.querySelector('.pill-nav-menu .nav-link.active') || navLinks[0];
        // Wait briefly for layout to settle (e.g. fonts loading)
        setTimeout(() => updateIndicator(activeLink), 150);

        let isScrollingClick = false;
        let scrollTimeout;

        // Link interactions
        navLinks.forEach(link => {
            // Click: set active link and slide indicator
            link.addEventListener('click', () => {
                isScrollingClick = true;
                navLinks.forEach(l => l.classList.remove('active'));
                link.classList.add('active');
                updateIndicator(link);

                // Handle Mobile menu collapse on click
                if (navCollapse && typeof bootstrap !== 'undefined' && window.innerWidth < 992) {
                    const bsCollapse = bootstrap.Collapse.getInstance(navCollapse) || new bootstrap.Collapse(navCollapse, { toggle: false });
                    bsCollapse.hide();
                }

                // Release scrolling lock after animation completes
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(() => {
                    isScrollingClick = false;
                }, 800);
            });

            // Hover: temporarily slide indicator to hovered link
            link.addEventListener('mouseenter', () => {
                updateIndicator(link);
            });
        });

        // Mouse leaves menu: return indicator back to current active link
        navMenu.addEventListener('mouseleave', () => {
            const currentActive = document.querySelector('.pill-nav-menu .nav-link.active') || navLinks[0];
            updateIndicator(currentActive);
        });

        // Recalculate on resize
        window.addEventListener('resize', () => {
            const currentActive = document.querySelector('.pill-nav-menu .nav-link.active');
            if (currentActive) updateIndicator(currentActive);
        });

        // Reset scroll lock on scrollend for modern browsers
        window.addEventListener('scrollend', () => {
            isScrollingClick = false;
        });
    }

    // ==========================================
    // 3. Dark Theme Mode Toggle
    // ==========================================
    const themeBtn = document.querySelector('.theme-btn');
    if (themeBtn) {
        themeBtn.addEventListener('click', () => {
            document.body.classList.toggle('dark-theme');
            const icon = themeBtn.querySelector('i');
            if (document.body.classList.contains('dark-theme')) {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            } else {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            }
        });
    }

    // ==========================================
    // 3. Product Carousel Cursor & Scroll Navigation
    // ==========================================
    const track = document.querySelector('.carousel-slider-track');
    const collectionsSection = document.getElementById('collections');
    const prevBtn = document.querySelector('.carousel-btn.prev');
    const nextBtn = document.querySelector('.carousel-btn.next');

    if (track && collectionsSection) {
        let isTouchDevice = false;

        // Detect touch device
        window.addEventListener('touchstart', function detectTouch() {
            isTouchDevice = true;
            window.removeEventListener('touchstart', detectTouch);
        }, { passive: true });

        // Variables for smooth mouse movement lerping
        let targetScrollPercent = 0;
        let currentScrollPercent = 0;
        let isMouseOverSection = false;

        // Track cursor X coordinate on viewport relative to the section
        collectionsSection.addEventListener('mousemove', (e) => {
            if (isTouchDevice) return;
            isMouseOverSection = true;
            
            const rect = collectionsSection.getBoundingClientRect();
            const x = e.clientX - rect.left;
            targetScrollPercent = Math.max(0, Math.min(1, x / rect.width));
        });

        collectionsSection.addEventListener('mouseleave', () => {
            isMouseOverSection = false;
        });

        // Animation loop for smooth transition (lerp)
        const updateSliderScroll = () => {
            if (!isTouchDevice && isMouseOverSection) {
                // Easing factor (0.05 for high inertia liquid feel)
                currentScrollPercent += (targetScrollPercent - currentScrollPercent) * 0.05;
                
                const maxScroll = track.scrollWidth - track.clientWidth;
                if (maxScroll > 0) {
                    track.scrollLeft = currentScrollPercent * maxScroll;
                }
            }
            requestAnimationFrame(updateSliderScroll);
        };
        requestAnimationFrame(updateSliderScroll);

        // Optional buttons: Click navigation fallback
        const getScrollAmount = () => {
            const card = track.querySelector('.carousel-card-item');
            if (card) {
                return card.getBoundingClientRect().width + 30; // card width + gap
            }
            return 350;
        };

        if (prevBtn && nextBtn) {
            prevBtn.addEventListener('click', () => {
                track.scrollBy({
                    left: -getScrollAmount(),
                    behavior: 'smooth'
                });
            });
            nextBtn.addEventListener('click', () => {
                track.scrollBy({
                    left: getScrollAmount(),
                    behavior: 'smooth'
                });
            });
        }
    }

    // ==========================================
    // 4. Scroll Reveal Intersection Observer
    // ==========================================
    const revealElements = document.querySelectorAll('.reveal');
    
    if ('IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    // Stop observing once active to prevent repetitive triggers
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        revealElements.forEach(element => {
            revealObserver.observe(element);
        });
    } else {
        // Fallback for older browsers
        revealElements.forEach(element => {
            element.classList.add('active');
        });
    }

    // ==========================================
    // 5. Booking Form Validation & Submit Handlers
    // ==========================================
    const bookingForm = document.getElementById('consultationForm');
    
    if (bookingForm) {
        bookingForm.addEventListener('submit', (e) => {
            e.preventDefault();

            // Basic Validation
            const name = document.getElementById('name').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const email = document.getElementById('email').value.trim();
            const service = document.getElementById('service').value;

            if (!name || !phone || !service) {
                alert('Please fill out all required fields (*)');
                return;
            }

            // Simple Success Message
            const submitBtn = bookingForm.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;

            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Sending details...';

            setTimeout(() => {
                submitBtn.style.backgroundColor = '#2e7d32'; // green
                submitBtn.innerHTML = 'Consultation Booked! ✓';
                
                alert(`Thank you, ${name}! We have received your request for a ${service} consultation. A CC Pardawala designer will contact you shortly.`);
                
                bookingForm.reset();

                setTimeout(() => {
                    submitBtn.disabled = false;
                    submitBtn.style.backgroundColor = '';
                    submitBtn.innerHTML = originalBtnText;
                }, 3000);
            }, 1500);
        });
    }

    // ==========================================
    // 6. Interactive Hero Spotlight Tracker
    // ==========================================
    const heroBanner = document.querySelector('.hero-banner');
    const spotlight = document.querySelector('.hero-bg-spotlight');
    
    if (heroBanner && spotlight) {
        heroBanner.addEventListener('mousemove', (e) => {
            const rect = heroBanner.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            // Set coordinate percentages as CSS custom properties
            heroBanner.style.setProperty('--mouse-x', `${(x / rect.width) * 100}%`);
            heroBanner.style.setProperty('--mouse-y', `${(y / rect.height) * 100}%`);
        });
    }

    // ==========================================
    // 6b. Interactive Carousel Card Spotlight Tracker
    // ==========================================
    const carouselCards = document.querySelectorAll('.carousel-card-item');
    carouselCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            card.style.setProperty('--mouse-x', `${(x / rect.width) * 100}%`);
            card.style.setProperty('--mouse-y', `${(y / rect.height) * 100}%`);
        });
    });

    // ==========================================
    // 7. Stats Counter Animation
    // ==========================================
    const animateCounters = () => {
        const counters = document.querySelectorAll('.stat-number');
        const duration = 2500; // Slower, more luxurious count-up duration (2.5s)

        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'), 10);
            const suffix = counter.getAttribute('data-suffix') || '';
            const startTime = performance.now();
            
            // Explicitly set baseline to 0 before animation frames start
            counter.innerText = "0" + suffix;

            const updateCount = (currentTime) => {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                
                // Ease out quad transition
                const easeProgress = progress * (2 - progress); 
                const currentValue = Math.floor(easeProgress * target);

                if (target >= 1000) {
                    counter.innerText = currentValue.toLocaleString() + suffix;
                } else {
                    counter.innerText = currentValue + suffix;
                }

                if (progress < 1) {
                    requestAnimationFrame(updateCount);
                } else {
                    if (target >= 1000) {
                        counter.innerText = target.toLocaleString() + suffix;
                    } else {
                        counter.innerText = target + suffix;
                    }
                }
            };

            requestAnimationFrame(updateCount);
        });
    };

    // Observer to trigger counters when stats-grid enters viewport
    const statsGrid = document.querySelector('.stats-grid');
    if (statsGrid && 'IntersectionObserver' in window) {
        let animated = false;
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !animated) {
                    animateCounters();
                    animated = true;
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.05 });
        statsObserver.observe(statsGrid);
    } else if (statsGrid) {
        animateCounters();
    }

    // ==========================================
    // 8. Parallax Scroll Transition Effect
    // ==========================================
    const heroBgUnderlay = document.querySelector('.hero-bg-underlay');
    const heroBgSpotlight = document.querySelector('.hero-bg-spotlight');
    const heroContent = document.querySelector('.hero-banner-content');
    const heroTags = document.querySelector('.hero-banner-tags');
    
    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        
        // Optimize: only animate when hero is visible inside viewport
        if (scrollY < window.innerHeight) {
            // Slower sinking vertical translate + subtle scale expansion
            if (heroBgUnderlay) {
                heroBgUnderlay.style.transform = `translateY(${scrollY * 0.3}px) scale(${1 + scrollY * 0.00015})`;
            }
            if (heroBgSpotlight) {
                heroBgSpotlight.style.transform = `translateY(${scrollY * 0.3}px) scale(${1 + scrollY * 0.00015})`;
            }
            
            // Fade out content ratio (reaching 0 opacity at 70% scrolled)
            const fadeRatio = Math.max(0, 1 - (scrollY / (window.innerHeight * 0.7)));
            
            if (heroContent) {
                heroContent.style.opacity = fadeRatio;
                heroContent.style.transform = `translateY(${scrollY * 0.15}px)`; // slight float down
            }
            if (heroTags) {
                heroTags.style.opacity = fadeRatio;
            }
        }
    });

    // ==========================================
    // 9. Google Reviews Slider Logic
    // ==========================================
    const reviewsSlider = document.querySelector('.reviews-slider-container');
    if (reviewsSlider) {
        const track = reviewsSlider.querySelector('.reviews-slider-track');
        const dots = reviewsSlider.querySelectorAll('.review-dot');
        const cards = reviewsSlider.querySelectorAll('.review-slide-card');
        
        let currentIndex = 0;
        let slideInterval;
        
        const getSlidesToShow = () => {
            if (window.innerWidth >= 992) return 3; // 3 cards on desktop
            if (window.innerWidth >= 768) return 2; // 2 cards on tablet
            return 1; // 1 card on mobile
        };
        
        const updateSlider = () => {
            if (cards.length === 0) return;
            const cardWidth = cards[0].getBoundingClientRect().width;
            const gap = 30; // matches CSS gap
            
            const slidesToShow = getSlidesToShow();
            const maxIndex = Math.max(0, cards.length - slidesToShow);
            
            if (currentIndex > maxIndex) {
                currentIndex = maxIndex;
            }
            
            const translateAmount = currentIndex * (cardWidth + gap);
            track.style.transform = `translateX(-${translateAmount}px)`;
            
            dots.forEach(dot => {
                const dotIndex = parseInt(dot.getAttribute('data-index'));
                const groupSize = Math.ceil(cards.length / dots.length);
                const activeDotIndex = Math.floor(currentIndex / groupSize);
                
                if (dotIndex === activeDotIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        };
        
        // Dot clicks event listeners
        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                clearInterval(slideInterval);
                const dotIndex = parseInt(dot.getAttribute('data-index'));
                const groupSize = Math.ceil(cards.length / dots.length);
                currentIndex = dotIndex * groupSize;
                updateSlider();
                startAutoSlide();
            });
        });
        
        const nextSlide = () => {
            const slidesToShow = getSlidesToShow();
            const maxIndex = Math.max(0, cards.length - slidesToShow);
            
            if (currentIndex < maxIndex) {
                currentIndex++;
            } else {
                currentIndex = 0; // loop back to first slide
            }
            updateSlider();
        };
        
        const startAutoSlide = () => {
            slideInterval = setInterval(nextSlide, 5000); // auto slide every 5 seconds
        };
        
        // Initial setup
        updateSlider();
        startAutoSlide();
        
        // Handle window resize events (responsive slide counts)
        window.addEventListener('resize', () => {
            updateSlider();
        });
    }
});
