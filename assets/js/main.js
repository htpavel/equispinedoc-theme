document.addEventListener('DOMContentLoaded', function () {

    // 1. Mobile Menu Toggle
    const menuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                menuBtn.innerHTML = '<i class="fa-solid fa-xmark text-2xl"></i>';
            } else {
                mobileMenu.classList.add('hidden');
                menuBtn.innerHTML = '<i class="fa-solid fa-bars text-2xl"></i>';
            }
        });

        // Close mobile menu upon link click
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                menuBtn.innerHTML = '<i class="fa-solid fa-bars text-2xl"></i>';
            });
        });
    }

    // 2. Interactive Tabs for O mně & Kvalifikace
    const btnOmne = document.getElementById('btn-tab-omne');
    const btnKvalifikace = document.getElementById('btn-tab-kvalifikace');
    const contentOmne = document.getElementById('content-tab-omne');
    const contentKvalifikace = document.getElementById('content-tab-kvalifikace');

    if (btnOmne && btnKvalifikace) {
        btnOmne.addEventListener('click', () => {
            btnOmne.classList.remove('border-transparent', 'text-[#4A5568]/50');
            btnOmne.classList.add('border-[#A3B18A]', 'text-[#2C3E50]');

            btnKvalifikace.classList.remove('border-[#A3B18A]', 'text-[#2C3E50]');
            btnKvalifikace.classList.add('border-transparent', 'text-[#4A5568]/50');

            contentOmne.classList.remove('hidden');
            contentKvalifikace.classList.add('hidden');
        });

        btnKvalifikace.addEventListener('click', () => {
            btnKvalifikace.classList.remove('border-transparent', 'text-[#4A5568]/50');
            btnKvalifikace.classList.add('border-[#A3B18A]', 'text-[#2C3E50]');

            btnOmne.classList.remove('border-[#A3B18A]', 'text-[#2C3E50]');
            btnOmne.classList.add('border-transparent', 'text-[#4A5568]/50');

            contentKvalifikace.classList.remove('hidden');
            contentOmne.classList.add('hidden');
        });
    }

    // 3. Simple Image Lightbox
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxCaption = document.getElementById('lightbox-caption');

    window.openLightbox = function (src, caption) {
        if (lightbox && lightboxImg && lightboxCaption) {
            lightboxImg.src = src;
            lightboxCaption.textContent = caption;
            lightbox.classList.remove('hidden');
        }
    }

    window.closeLightbox = function () {
        if (lightbox) {
            lightbox.classList.add('hidden');
        }
    }

    if (lightbox) {
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox || e.target.tagName === 'BUTTON') {
                closeLightbox();
            }
        });
    }

    // 4. Interactive Pricing Calculator
    const calcService = document.getElementById('calc-service');
    const calcDistance = document.getElementById('calc-distance');
    const calcResult = document.getElementById('calc-result');

    function updateKalkulace() {
        if (calcService && calcDistance && calcResult) {
            const servicePrice = parseInt(calcService.value, 10);
            const distance = parseInt(calcDistance.value, 10) || 0;
            const travelPrice = distance * 12; // 12 Kč per km
            const totalPrice = servicePrice + travelPrice;

            calcResult.textContent = totalPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        }
    }

    if (calcService) calcService.addEventListener('change', updateKalkulace);
    if (calcDistance) calcDistance.addEventListener('input', updateKalkulace);

    updateKalkulace();

    // 5. Contact Form Submission Handling
    window.handleFormSubmit = function (event) {
        event.preventDefault();
        const form = document.getElementById('contact-form');
        const successMsg = document.getElementById('form-success-message');

        if (form && successMsg) {
            form.classList.add('hidden');
            successMsg.classList.remove('hidden');
        }
    }

    // 6. Swiper.js Initialization for Testimonials
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30, // Mezera mezi kartami
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            640: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        },
    });
});