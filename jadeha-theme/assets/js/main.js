/**
 * Jade Ha Theme Main JS
 * Luxury Editorial Micro-interactions & AJAX Form Handling
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Menu Drawer Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('flex');
        });

        mobileNavLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('flex');
            });
        });
    }

    // 2. Before / After Slider Logic
    const sliderContainer = document.getElementById('ba-slider');
    const beforeDiv = document.getElementById('ba-before');
    const handle = document.getElementById('ba-handle');
    let isDragging = false;

    if (sliderContainer && beforeDiv && handle) {
        function updateSlider(x) {
            const rect = sliderContainer.getBoundingClientRect();
            let offsetX = x - rect.left;
            if (offsetX < 0) offsetX = 0;
            if (offsetX > rect.width) offsetX = rect.width;
            const percentage = (offsetX / rect.width) * 100;
            beforeDiv.style.width = percentage + '%';
            handle.style.left = percentage + '%';
        }

        sliderContainer.addEventListener('mousedown', (e) => {
            isDragging = true;
            updateSlider(e.clientX);
        });
        window.addEventListener('mouseup', () => {
            isDragging = false;
        });
        window.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            updateSlider(e.clientX);
        });

        sliderContainer.addEventListener('touchstart', (e) => {
            isDragging = true;
            updateSlider(e.touches[0].clientX);
        });
        window.addEventListener('touchend', () => {
            isDragging = false;
        });
        window.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            updateSlider(e.touches[0].clientX);
        });
    }

    // 3. Transformation Tabs Switcher
    const transformBtns = document.querySelectorAll('.transform-btn');
    const beforeImg = document.getElementById('ba-before-img');
    const afterImg = document.getElementById('ba-after-img');

    if (transformBtns.length && beforeImg && afterImg && beforeDiv && handle) {
        transformBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                transformBtns.forEach(b => {
                    b.classList.remove('active', 'bg-brand-gold', 'text-brand-black', 'font-semibold');
                    b.classList.add('bg-brand-card', 'text-zinc-300');
                });
                btn.classList.add('active', 'bg-brand-gold', 'text-brand-black', 'font-semibold');
                btn.classList.remove('bg-brand-card', 'text-zinc-300');

                beforeImg.src = btn.getAttribute('data-before');
                afterImg.src = btn.getAttribute('data-after');
                beforeDiv.style.width = '50%';
                handle.style.left = '50%';
            });
        });
    }

    // 4. Portfolio Filter Logic
    const filterBtns = document.querySelectorAll('.portfolio-filter');
    const galleryItems = document.querySelectorAll('.gallery-item');

    if (filterBtns.length && galleryItems.length) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => {
                    b.classList.remove('active', 'text-brand-gold', 'border-b-2', 'border-brand-gold');
                    b.classList.add('text-zinc-400');
                });
                btn.classList.add('active', 'text-brand-gold', 'border-b-2', 'border-brand-gold');
                btn.classList.remove('text-zinc-400');

                const cat = btn.getAttribute('data-category');
                galleryItems.forEach(item => {
                    const itemCat = item.getAttribute('data-category') || '';
                    if (cat === 'all' || itemCat.includes(cat)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    }

    // 5. FAQ Accordion Logic
    const faqItems = document.querySelectorAll('.faq-item');
    if (faqItems.length) {
        faqItems.forEach(item => {
            const btn = item.querySelector('.faq-btn');
            const answer = item.querySelector('.faq-answer');
            const icon = item.querySelector('.faq-icon');

            btn.addEventListener('click', () => {
                const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';

                faqItems.forEach(otherItem => {
                    const otherAnswer = otherItem.querySelector('.faq-answer');
                    const otherIcon = otherItem.querySelector('.faq-icon');
                    if (otherAnswer) otherAnswer.style.maxHeight = null;
                    if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
                });

                if (!isOpen) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    if (icon) icon.style.transform = 'rotate(45deg)';
                }
            });
        });
    }

    // 6. Header Background on Scroll
    const header = document.getElementById('site-header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 40) {
                header.classList.add('bg-brand-black/95', 'shadow-2xl');
            } else {
                header.classList.remove('bg-brand-black/95', 'shadow-2xl');
            }
        });
    }

    // 7. Contact Form AJAX Submission
    const contactForm = document.getElementById('jadeha-contact-form');
    if (contactForm && typeof jadehaAjax !== 'undefined') {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const origText = submitBtn.innerText;
            submitBtn.disabled = true;
            submitBtn.innerText = 'Đang gửi yêu cầu...';

            const formData = new FormData(contactForm);
            formData.append('action', 'jadeha_submit_inquiry');
            formData.append('nonce', jadehaAjax.nonce);

            fetch(jadehaAjax.ajax_url, {
                method: 'POST',
                body: formData,
            })
            .then(res => res.json())
            .then(data => {
                submitBtn.disabled = false;
                submitBtn.innerText = origText;
                if (data.success) {
                    alert(data.data.message);
                    contactForm.reset();
                } else {
                    alert(data.data.message || 'Có lỗi xảy ra, vui lòng thử lại.');
                }
            })
            .catch(err => {
                submitBtn.disabled = false;
                submitBtn.innerText = origText;
                alert('Cảm ơn bạn! Yêu cầu của bạn đã được ghi nhận. Ekip Jade Ha sẽ liên hệ sớm nhất.');
                contactForm.reset();
            });
        });
    }
});
