<?php
/**
 * Template Name: Transformations (Before & After Slider)
 * Template Post Type: page
 *
 * @package JadeHaTheme
 */

get_header();
?>

<!-- ================= MAIN CONTENT: SLIDESHOW GALLERY (EXACT JADE HA 1:1) ================= -->
<main class="pt-28 sm:pt-36 pb-20">
  
  <!-- Title -->
  <div class="max-w-[1250px] mx-auto px-6 mb-8 sm:mb-10 text-center">
    <h1 class="font-ambroise text-[26px] sm:text-[38px] md:text-[48px] lg:text-[57px] font-light tracking-[2px] uppercase text-[#222222] leading-[1.3]">
      GALLERY OF SAME DAY TRANSFORMATIONS
    </h1>
  </div>

  <!-- Slideshow Wrapper (Exact 1250px width, aspect ratio 2:1, cross-fade) -->
  <div class="max-w-[1250px] mx-auto px-4 sm:px-6">
    <div id="slideshow-box" class="slideshow-wrapper relative w-full h-[320px] sm:h-[480px] md:h-[580px] lg:h-[620px] overflow-hidden bg-zinc-100 select-none shadow-sm">
      
      <!-- Slides Container -->
      <div id="slides-container" class="relative w-full h-full">
        <!-- Slide items injected via JS -->
      </div>

      <!-- Previous Slide Button -->
      <button id="prev-btn" class="slideshow-control absolute left-0 top-1/2 -translate-y-1/2 z-20 w-12 sm:w-16 h-20 sm:h-24 bg-black/20 hover:bg-black/40 text-white flex items-center justify-center focus:outline-none transition-colors" aria-label="Previous Slide">
        <svg class="w-6 sm:w-8 h-6 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7"></path>
        </svg>
      </button>

      <!-- Next Slide Button -->
      <button id="next-btn" class="slideshow-control absolute right-0 top-1/2 -translate-y-1/2 z-20 w-12 sm:w-16 h-20 sm:h-24 bg-black/20 hover:bg-black/40 text-white flex items-center justify-center focus:outline-none transition-colors" aria-label="Next Slide">
        <svg class="w-6 sm:w-8 h-6 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"></path>
        </svg>
      </button>

      <!-- Minimal Slide Counter Indicator -->
      <div class="absolute bottom-4 right-4 z-20 px-3 py-1 bg-black/50 backdrop-blur-sm text-white text-[11px] tracking-widest font-mono rounded">
        <span id="slide-curr">1</span> / <span id="slide-total">47</span>
      </div>

    </div>
  </div>

</main>

<style>
  .slide-item {
    position: absolute;
    inset: 0;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), visibility 0.8s;
    pointer-events: none;
  }
  .slide-item.active {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
    z-index: 10;
  }
  .slideshow-control {
    opacity: 0;
    transition: opacity 0.3s ease, background-color 0.2s ease, transform 0.2s ease;
  }
  .slideshow-wrapper:hover .slideshow-control {
    opacity: 1;
  }
</style>

<?php
$gallery_ids_str = get_post_meta(get_the_ID(), '_jadeha_gallery_image_ids', true);
$gallery_ids = !empty($gallery_ids_str) ? array_filter(array_map('absint', explode(',', $gallery_ids_str))) : array();
$custom_slides = array();
if (!empty($gallery_ids)) {
    foreach ($gallery_ids as $gid) {
        $url = wp_get_attachment_image_url($gid, 'full');
        if ($url) $custom_slides[] = $url;
    }
}
?>

<script>
  const customSlides = <?php echo json_encode($custom_slides); ?>;
  const demoTransformationImages = [
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/28.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/RobinTRANSFORMATION.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/AydenTRANSFORMATION.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/MelissaTRANSFORMATION.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/felicityTransformatoin.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/AmandaC.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/StevieTransformation.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/AliTransformation.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/MoniqueTransformation.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/12.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/AshleyCTransformation.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/KateSTransformation.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/LaurenTransformation.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/ChristegTRANSFORMATION.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/19.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/DawnTransformation.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/36.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/KristaTRANSFORMATION.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/AlexTransformation.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/JennJonesTranformation.jpeg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/KarenTransformation.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/StefanyTRANSFORMATION.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/JadeTRANSFORMATION.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/ShannaTRANSFORMATION2020.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/SavannaTransformation.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/22.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/17.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/27.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/25.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/30.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/TinaTransformation.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/6.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/9.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/HalleTRANSFORMATION.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/35.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/26.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/BlakeBeforeAfter.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/11.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/37.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/20.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/3.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/33.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/8.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/31.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/40.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/32.jpg'); ?>",
    "<?php echo esc_url(get_template_directory_uri() . '/assets/images/transformations/29.jpg'); ?>"
  ];
  const transformationImages = (customSlides && customSlides.length > 0) ? customSlides : demoTransformationImages;


  const container = document.getElementById('slides-container');
  const totalEl = document.getElementById('slide-total');
  const currEl = document.getElementById('slide-curr');
  const prevBtn = document.getElementById('prev-btn');
  const nextBtn = document.getElementById('next-btn');
  const slideshowBox = document.getElementById('slideshow-box');

  let currentIndex = 0;
  let timer = null;
  const totalSlides = transformationImages.length;
  totalEl.textContent = totalSlides;

  // Build slides DOM
  transformationImages.forEach((url, i) => {
    const slideDiv = document.createElement('div');
    slideDiv.className = `slide-item ${i === 0 ? 'active' : ''}`;
    
    const img = document.createElement('img');
    img.src = url;
    img.alt = `Transformation Portrait ${i + 1}`;
    img.className = 'w-full h-full object-contain md:object-cover object-center';
    if (i > 1) {
      img.loading = 'lazy';
    }
    
    slideDiv.appendChild(img);
    container.appendChild(slideDiv);
  });

  const slideElements = container.querySelectorAll('.slide-item');

  function goToSlide(index) {
    slideElements[currentIndex].classList.remove('active');
    currentIndex = (index + totalSlides) % totalSlides;
    slideElements[currentIndex].classList.add('active');
    currEl.textContent = currentIndex + 1;
  }

  function nextSlide() {
    goToSlide(currentIndex + 1);
  }

  function prevSlide() {
    goToSlide(currentIndex - 1);
  }

  function startAutoplay() {
    stopAutoplay();
    timer = setInterval(nextSlide, 3500);
  }

  function stopAutoplay() {
    if (timer) clearInterval(timer);
  }

  nextBtn.addEventListener('click', () => {
    nextSlide();
    startAutoplay();
  });

  prevBtn.addEventListener('click', () => {
    prevSlide();
    startAutoplay();
  });

  slideshowBox.addEventListener('mouseenter', stopAutoplay);
  slideshowBox.addEventListener('mouseleave', startAutoplay);

  document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowRight') {
      nextSlide();
      startAutoplay();
    } else if (e.key === 'ArrowLeft') {
      prevSlide();
      startAutoplay();
    }
  });

  let touchStartX = 0;
  let touchEndX = 0;

  slideshowBox.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
  }, { passive: true });

  slideshowBox.addEventListener('touchend', (e) => {
    touchEndX = e.changedTouches[0].screenX;
    if (touchStartX - touchEndX > 50) {
      nextSlide();
      startAutoplay();
    } else if (touchEndX - touchStartX > 50) {
      prevSlide();
      startAutoplay();
    }
  }, { passive: true });

  startAutoplay();
</script>

<?php
get_footer();
