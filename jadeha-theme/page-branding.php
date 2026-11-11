<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>St. Louis Branding Photographer | Editorial Portraits for Women — Luxe Portrait Studio</title>
  <meta name="description" content="Editorial branding photographer for women entrepreneurs, executives, and luxury creatives in St. Louis & Dallas.">
  
  <!-- Typekit Genuine Fonts: ambroise-std & calluna -->
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . "/assets/css/fonts.css"); ?>">

  <script src="<?php echo esc_url(get_template_directory_uri() . "/assets/js/tailwindcss.js"); ?>"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            ambroise: ['"ambroise-std"', 'serif'],
            calluna: ['"calluna"', 'Georgia', 'serif'],
          }
        }
      }
    }
  </script>
  <style>
    /* Interactive Background Cross-Fade (Exact portfolio.html) */
    .portfolio-bg-container {
      position: absolute;
      inset: 0;
      background-color: #2b2421;
      overflow: hidden;
      z-index: 0;
    }

    .bg-crossfade {
      position: absolute;
      inset: 0;
      background-size: cover;
      background-position: center;
      opacity: 0;
      transition: opacity 0.4s cubic-bezier(0.4, 0, 0.2, 1), transform 0.7s ease-out;
      transform: scale(1.03);
      pointer-events: none;
    }

    .bg-crossfade.active {
      opacity: 1;
      transform: scale(1);
    }

    .portfolio-overlay {
      position: absolute;
      inset: 0;
      background: rgba(43, 36, 33, 0.35);
      pointer-events: none;
    }

    /* Portfolio Giant Links */
    .portfolio-giant-link {
      font-family: "ambroise-std", serif;
      font-size: clamp(32px, 5vw, 64px);
      font-weight: 300;
      letter-spacing: 0.04em;
      color: #ffffff;
      text-transform: uppercase;
      transition: color 0.3s ease;
      display: inline-block;
      cursor: pointer;
    }

    .portfolio-giant-link:hover,
    .portfolio-giant-link.active {
      color: #ff9061;
    }

    .collection-desc {
      font-family: "calluna", Georgia, serif;
      font-size: 15px;
      letter-spacing: 0.05em;
      font-style: italic;
    }
  </style>
</head>
<body class="header-theme-light bg-white text-[#222222] antialiased selection:bg-[#ff9061] selection:text-white">

  <!-- ================= TOP HEADER NAVIGATION (EXACT JADE HA) ================= -->
  <header class="site-header">
    <div class="site-branding">
      <h1 class="image">
        <a href="<?php echo esc_url(home_url("/")); ?>">
          <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/logo.png"); ?>" alt="Luxe Portrait Studio">
        </a>
      </h1>
    </div>

    <div class="nav-social-wrapper hidden md:flex">
      <nav class="main-navigation">
        <div class="nav-item">
          <a href="<?php echo esc_url(home_url("/")); ?>">Home</a>
        </div>
        
        <div class="nav-item folder">
          <a href="<?php echo esc_url(home_url("/luxury-photoshoot/")); ?>">Photoshoots</a>
          <div class="subnav">
            <a href="<?php echo esc_url(home_url("/testimonials/")); ?>">Testimonials</a>
            <a href="<?php echo esc_url(home_url("/meet-the-team/")); ?>">Meet The Team</a>
            <a href="<?php echo esc_url(home_url("/transformations/")); ?>">Transformations</a>
            <a href="<?php echo esc_url(home_url("/luxury-photoshoot/")); ?>">A Client's Experience</a>
          </div>
        </div>

        <div class="nav-item">
          <a href="<?php echo esc_url(home_url("/portfolio/")); ?>" class="active">Portfolio</a>
        </div>

        <div class="nav-item folder">
          <a href="<?php echo esc_url(home_url("/photographers-store/")); ?>">For Photographers</a>
          <div class="subnav">
            <a href="<?php echo esc_url(home_url("/photographers-store/")); ?>">Photographer Templates &amp; Lightroom Presets</a>
            <a href="<?php echo esc_url(home_url("/mentoring/")); ?>">Mentoring</a>
            <a href="<?php echo esc_url(home_url("/workshop/")); ?>">Workshops</a>
          </div>
        </div>
      </nav>

      <div class="header-social-icons">
        <a href="https://www.instagram.com/jadeha_studio_sg/" target="_blank" rel="noopener" aria-label="Instagram">
          <svg viewBox="17 17 30 30" class="social-svg">
            <path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"></path>
          </svg>
        </a>
        <a href="https://www.facebook.com/jadehastudio/" target="_blank" rel="noopener" aria-label="Facebook">
          <svg viewBox="0 0 24 24" class="social-svg">
            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
          </svg>
        </a>
      </div>
    </div>

    <!-- Mobile Hamburger Toggle -->
    <button id="mobile-toggle" class="md:hidden text-[#222222] focus:outline-none" aria-label="Toggle menu">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"></path></svg>
    </button>
  </header>

  <!-- Mobile Drawer Menu -->
  <div id="mobile-menu" class="hidden fixed inset-0 bg-black/95 z-50 flex flex-col items-center justify-center space-y-6 text-sm tracking-widest uppercase font-light">
    <a href="<?php echo esc_url(home_url("/")); ?>" class="text-white">Home</a>
    <a href="<?php echo esc_url(home_url("/luxury-photoshoot/")); ?>" class="text-zinc-300">Photoshoots</a>
    <a href="<?php echo esc_url(home_url("/testimonials/")); ?>" class="text-zinc-400 text-xs">Testimonials</a>
    <a href="<?php echo esc_url(home_url("/meet-the-team/")); ?>" class="text-zinc-400 text-xs">Meet The Team</a>
    <a href="<?php echo esc_url(home_url("/transformations/")); ?>" class="text-zinc-400 text-xs">Transformations</a>
    <a href="<?php echo esc_url(home_url("/portfolio/")); ?>" class="text-white">Portfolio</a>
    <a href="<?php echo esc_url(home_url("/photographers-store/")); ?>" class="text-zinc-300">For Photographers</a>
    <div class="flex items-center space-x-6 pt-4">
      <a href="https://www.instagram.com/jadeha_studio_sg/" target="_blank" class="text-white">
        <svg viewBox="17 17 30 30" class="w-5 h-5 fill-current"><path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"></path></svg>
      </a>
      <a href="https://www.facebook.com/jadehastudio/" target="_blank" class="text-white" aria-label="Facebook">
        <svg viewBox="0 0 24 24" class="social-svg"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg>
      </a>
    </div>
  </div>

  <!-- ================= MAIN EDITORIAL GALLERY (EXACT AUTOROWS FLUSH FRAME FIT) ================= -->
  <!-- Mathematical aspect-ratio proportional width so both images in a row have identical height with 0px white gap -->
  <main class="pt-0 pb-12 w-full">
    <?php
    $gallery_ids_str = get_post_meta(get_the_ID(), '_jadeha_gallery_image_ids', true);
    $gallery_ids = !empty($gallery_ids_str) ? array_filter(array_map('absint', explode(',', $gallery_ids_str))) : array();

    if (!empty($gallery_ids)) :
        jadeha_render_gallery_from_ids($gallery_ids);
    else :
    ?>
    <div class="w-full m-0 p-0 block">
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 30.7976%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/racquelfrisellaSTLjade-ha.jpg'); ?>" alt="racquelfrisellaSTLjade-ha.jpg" loading="eager" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 69.2024%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/RacquelFrisellaBrandingPhotoshoot.jpg'); ?>" alt="RacquelFrisellaBrandingPhotoshoot.jpg" loading="eager" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 100%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/bustlemagazineRFA.jpg'); ?>" alt="bustlemagazineRFA.jpg" loading="eager" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/racquelfrisella-beauty-branding.jpg'); ?>" alt="racquelfrisella-beauty-branding.jpg" loading="eager" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/rfa-racquel-frisella-photoshoot.jpg'); ?>" alt="rfa-racquel-frisella-photoshoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 100%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/in-touch-magazine-racquel-frisella-photoshoot.jpg'); ?>" alt="in-touch-magazine-racquel-frisella-photoshoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 100%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/RFA-product-branding-racquel-frisella.jpg'); ?>" alt="RFA-product-branding-racquel-frisella.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 100%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/dr-gabrielle-lyon-book-author-photo.jpg'); ?>" alt="dr-gabrielle-lyon-book-author-photo.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 55.6547%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/VICIxEmily.jpg'); ?>" alt="VICIxEmily.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 44.3453%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/dallas-portrait-photographer-vici-emily-travis.jpg'); ?>" alt="dallas-portrait-photographer-vici-emily-travis.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50.3453%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/web7U1A0055-edit.jpg'); ?>" alt="web7U1A0055-edit.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 49.6547%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/web7U1A0084-edit.jpg'); ?>" alt="web7U1A0084-edit.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 52.166%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/house-of-preservation-dmagazine-jade-ha.jpg'); ?>" alt="house-of-preservation-dmagazine-jade-ha.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 47.834%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/brittanyhouseofpreservationphotoshoot.jpg'); ?>" alt="brittanyhouseofpreservationphotoshoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50.0061%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/houseofpreservation-dallas-branding.jpg'); ?>" alt="houseofpreservation-dallas-branding.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 49.9939%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/houseofpreservationDallas.jpg'); ?>" alt="houseofpreservationDallas.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 30.7607%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/emilyfrisella-branding.jpg'); ?>" alt="emilyfrisella-branding.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 69.2393%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/emily-frisella-photoshoot.jpg'); ?>" alt="emily-frisella-photoshoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 100%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/thecarmom-photoshoot-jade-branding.jpg'); ?>" alt="thecarmom-photoshoot-jade-branding.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 58.0298%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/the-car-mom-kelly-liz-photoshoot.jpg'); ?>" alt="the-car-mom-kelly-liz-photoshoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 41.9702%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/thecarpoolpodcastlizzkelly.jpg'); ?>" alt="thecarpoolpodcastlizzkelly.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 100%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/rfa-skincare-banner-photoshoot.jpg'); ?>" alt="rfa-skincare-banner-photoshoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 49.9989%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/RFAphotoshootStLouis.jpg'); ?>" alt="RFAphotoshootStLouis.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50.0011%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/RFAskincare-photoshoot-skincare.jpg'); ?>" alt="RFAskincare-photoshoot-skincare.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 100%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/RFAbrandingshootjade-ha.jpg'); ?>" alt="RFAbrandingshootjade-ha.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/alexis-waters-hoopnation-jade-ha-shoot.jpg'); ?>" alt="alexis-waters-hoopnation-jade-ha-shoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/hoop-nation-alexis-waters-branding-shoot.jpg'); ?>" alt="hoop-nation-alexis-waters-branding-shoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 100%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/grow-and-glow-reese-photoshoot-stl-jade-ha-1.jpg'); ?>" alt="grow-and-glow-reese-photoshoot-stl-jade-ha-1.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/reese-bond-chad-bond-growandglow.jpg'); ?>" alt="reese-bond-chad-bond-growandglow.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/reese-bond-chad-bond-growandglow-branding.jpg'); ?>" alt="reese-bond-chad-bond-growandglow-branding.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 53.5905%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/Screenshot+2026-10-27+at+9.52.22%E2%80%AFAM.png'); ?>" alt="Screenshot 2026-10-27 at 9.52.22 AM.png" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 46.4095%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/theSTLesthetician.jpg'); ?>" alt="theSTLesthetician.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/Nancy-Rogers-NCR-Capital-Dallas.jpg'); ?>" alt="Nancy-Rogers-NCR-Capital-Dallas.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/katie-collier-katiespizzaandpasta-STL.jpg'); ?>" alt="katie-collier-katiespizzaandpasta-STL.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/alexis-poster-8.jpg'); ?>" alt="alexis-poster-8.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/alexis-poster-9.jpg'); ?>" alt="alexis-poster-9.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 30.7735%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/Salon210-brandingshoot.jpg'); ?>" alt="Salon210-brandingshoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 69.2265%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/Salon210-jade-ha.jpg'); ?>" alt="Salon210-jade-ha.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50.0194%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/luxury-branding-photoshoot-sansone-stl.jpg'); ?>" alt="luxury-branding-photoshoot-sansone-stl.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 49.9806%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/brandingportraitsstlouis.jpg'); ?>" alt="brandingportraitsstlouis.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 100%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/Pump+Magazine+Special+Edition+Summer+Fall+20206.jpg'); ?>" alt="Pump Magazine Special Edition Summer Fall 20206.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 33.8506%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/Pump+Magazine+Special+Edition+Summer+Fall+202060.jpg'); ?>" alt="Pump Magazine Special Edition Summer Fall 202060.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 66.1494%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/webMeghanBodysuit2BWfilm.jpg'); ?>" alt="webMeghanBodysuit2BWfilm.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50.0061%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/glow-and-grow-branding-bond.jpg'); ?>" alt="glow-and-grow-branding-bond.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 49.9939%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/reesebondsalon210growandglow.jpg'); ?>" alt="reesebondsalon210growandglow.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 100%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/racquel-aesthetics-branding-photoshoot-jade-ha.jpg'); ?>" alt="racquel-aesthetics-branding-photoshoot-jade-ha.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 33.4702%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/RFA-scrub-swatches.jpg'); ?>" alt="RFA-scrub-swatches.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 66.5298%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/detox-mask-peonies.jpg'); ?>" alt="detox-mask-peonies.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/amy-stuttle-victory-health-jade-ha.jpg'); ?>" alt="amy-stuttle-victory-health-jade-ha.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/amy-stuttle-stlouis-victory-mens-health.jpg'); ?>" alt="amy-stuttle-stlouis-victory-mens-health.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/paige-sparks-photoshoot-lawyer-branding.jpg'); ?>" alt="paige-sparks-photoshoot-lawyer-branding.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/paigesparks-branding-lawyer-photoshoot.jpg'); ?>" alt="paigesparks-branding-lawyer-photoshoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 45.8059%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/krista-med-spa-stlouis.jpg'); ?>" alt="krista-med-spa-stlouis.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 54.1941%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/STL-racquel-frisella-photoshoot.jpg'); ?>" alt="STL-racquel-frisella-photoshoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 49.9933%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/alyssa-suntrup-branding.jpg'); ?>" alt="alyssa-suntrup-branding.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50.0067%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/alyssa-suntrup-real-estate.jpg'); ?>" alt="alyssa-suntrup-real-estate.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/racquel-frisella-aesthetics.jpg'); ?>" alt="racquel-frisella-aesthetics.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/racquelfrisella-rfa-photoshoot.jpg'); ?>" alt="racquelfrisella-rfa-photoshoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/Salon210-stl-photoshoot.jpg'); ?>" alt="Salon210-stl-photoshoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/Salon210-stlouis.jpg'); ?>" alt="Salon210-stlouis.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 100%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/branding/Salon210-branding-shoot-STL.jpg'); ?>" alt="Salon210-branding-shoot-STL.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    </div>
    <?php endif; ?>
  </main>

  <!-- ================= 3-COLUMN WHITE FOOTER (EXACT JADE HA) ================= -->
  <footer class="border-t border-zinc-200 py-12 px-6 max-w-[1108px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center text-[#222222] items-center">
    <div>
      <p class="font-calluna italic text-sm font-semibold mb-1">Contact</p>
      <a href="mailto:jadehastudio@gmail.com" class="font-calluna text-xs hover:text-[#ff9061] transition-colors">jadehastudio@gmail.com</a>
    </div>
    <div>
      <p class="font-ambroise text-lg tracking-[0.2em] mb-3">— JADE HA —</p>
      <div class="flex items-center justify-center space-x-4">
        <a href="https://www.instagram.com/jadeha_studio_sg/" target="_blank" rel="noopener" aria-label="Instagram" class="text-[#222222] hover:text-[#ff9061] transition-colors">
          <svg viewBox="17 17 30 30" class="w-[18px] h-[18px] fill-current">
            <path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"></path>
          </svg>
        </a>
        <a href="https://www.facebook.com/jadehastudio/" target="_blank" rel="noopener" aria-label="Facebook">
          <svg viewBox="0 0 24 24" class="social-svg">
            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
          </svg>
        </a>
      </div>
    </div>
    <div>
      <p class="font-calluna italic text-sm font-semibold mb-1">Hours</p>
      <p class="font-calluna italic text-xs text-zinc-600">by appointment only</p>
    </div>
  </footer>

  <!-- ================= FULLSCREEN PORTFOLIO GATEWAY (EXACT portfolio.html) ================= -->
  <section id="portfolio-gateway" class="relative min-h-screen flex flex-col justify-between select-none overflow-hidden bg-[#2b2421]">
    <!-- Interactive Background Images -->
    <div class="portfolio-bg-container">
      <div id="bg-fashion" class="bg-crossfade" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/portfolio/fashion.jpg'); ?>');"></div>
      <div id="bg-couples" class="bg-crossfade" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/portfolio/couples.jpg'); ?>');"></div>
      <div id="bg-portraits" class="bg-crossfade" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/portfolio/portraits.jpg'); ?>');"></div>
      <div id="bg-branding" class="bg-crossfade active" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/portfolio/branding.jpg'); ?>');"></div>
      <div id="bg-maternity" class="bg-crossfade" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/portfolio/maternity.jpg'); ?>');"></div>
      <div id="bg-boudoir" class="bg-crossfade" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/portfolio/boudoir.jpg'); ?>');"></div>
      <div class="portfolio-overlay"></div>
    </div>

    <!-- Top Spacer to mirror portfolio layout -->
    <div class="pt-16"></div>

    <!-- Center Index Navigation (Exact 2 Columns) -->
    <div class="relative z-10 my-auto text-center px-4 w-full max-w-[1240px] mx-auto py-12">
      <p class="collection-desc mb-6 sm:mb-8 text-white/90">
        <?php echo esc_html(get_theme_mod('jadeha_tagline', 'st. louis luxury photo studio')); ?>
      </p>

      <nav id="portfolio-nav" class="grid grid-cols-2 gap-x-12 sm:gap-x-16 md:gap-x-20 gap-y-2 sm:gap-y-3 md:gap-y-4 max-w-[860px] mx-auto items-center">
        <div class="text-right">
          <a href="<?php echo esc_url(home_url('/fashion/')); ?>" class="portfolio-giant-link" data-bg="bg-fashion">
            FASHION
          </a>
        </div>
        <div class="text-left">
          <a href="<?php echo esc_url(home_url('/couples/')); ?>" class="portfolio-giant-link" data-bg="bg-couples">
            COUPLES
          </a>
        </div>

        <div class="text-right">
          <a href="<?php echo esc_url(home_url('/portraits/')); ?>" class="portfolio-giant-link" data-bg="bg-portraits">
            PORTRAITS
          </a>
        </div>
        <div class="text-left">
          <a href="<?php echo esc_url(home_url('/branding/')); ?>" class="portfolio-giant-link active" data-bg="bg-branding">
            BRANDING
          </a>
        </div>

        <div class="text-right">
          <a href="<?php echo esc_url(home_url('/maternity/')); ?>" class="portfolio-giant-link" data-bg="bg-maternity">
            MATERNITY
          </a>
        </div>
        <div class="text-left">
          <a href="<?php echo esc_url(home_url('/boudoir/')); ?>" class="portfolio-giant-link" data-bg="bg-boudoir">
            BOUDOIR
          </a>
        </div>
      </nav>
    </div>

    <!-- Bottom Location Indicator -->
    <div class="relative z-10 pb-6 text-center text-xs tracking-widest text-white/40 uppercase">
      <?php echo esc_html(get_theme_mod('jadeha_copyright', 'Jade Ha Studio - Photography')); ?>
    </div>
  </section>

  <!-- Interactive Crossfade Script -->
  <script>
    (function() {
      const defaultBgId = 'bg-branding';
      const section = document.getElementById('portfolio-gateway');
      if (!section) return;
      const links = section.querySelectorAll('.portfolio-giant-link');
      const bgs = section.querySelectorAll('.bg-crossfade');

      function setActiveBg(targetId) {
        bgs.forEach(bg => {
          if (bg.id === targetId) {
            bg.classList.add('active');
          } else {
            bg.classList.remove('active');
          }
        });
      }

      links.forEach(link => {
        link.addEventListener('mouseenter', () => {
          const targetId = link.getAttribute('data-bg');
          if (targetId) setActiveBg(targetId);
        });
        link.addEventListener('mouseleave', (e) => {
          if (!e.relatedTarget || typeof e.relatedTarget.closest !== 'function' || !e.relatedTarget.closest('.portfolio-giant-link')) {
            setActiveBg(defaultBgId);
          }
        });
      });

      section.addEventListener('mouseleave', () => {
        setActiveBg(defaultBgId);
      });
    })();
  </script>

  <script src="<?php echo esc_url(get_template_directory_uri() . "/assets/js/header-nav.js"); ?>"></script>
</body>
</html>
