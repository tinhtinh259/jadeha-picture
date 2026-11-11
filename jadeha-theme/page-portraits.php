<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>St. Louis Women's Portrait Photographer | Editorial Vanity Fair Style — Luxe Portrait Studio</title>
  <meta name="description" content="St. Louis celebrity portrait photographer, women's portrait photographer, glamour photographer, and luxury portrait studio.">
  
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
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/jade-haworkshopsSTL.jpg'); ?>" alt="jade-haworkshopsSTL.jpg" loading="eager" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/jade-haphotographyworkshop.jpg'); ?>" alt="jade-haphotographyworkshop.jpg" loading="eager" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/beautifulwomancurvyphotoshoot.jpg'); ?>" alt="beautifulwomancurvyphotoshoot.jpg" loading="eager" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/curvesphotoshootbeauty.jpg'); ?>" alt="curvesphotoshootbeauty.jpg" loading="eager" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/motherdaughterphotoshootstlouis.jpg'); ?>" alt="motherdaughterphotoshootstlouis.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/fashionportraitswomenstlouis.jpg'); ?>" alt="fashionportraitswomenstlouis.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 49.9939%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/SSP_5252-edit+copy.jpg'); ?>" alt="SSP_5252-edit copy.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50.0061%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/mommyandmephotoshootstlouis.jpg'); ?>" alt="mommyandmephotoshootstlouis.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/courtney-kerr-photoshoot-jade.jpg'); ?>" alt="courtney-kerr-photoshoot-jade.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/courtney-kerr-jade-ha-photoshoot.jpg'); ?>" alt="courtney-kerr-jade-ha-photoshoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 49.9878%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/africanqueenphotoshootbeauty.jpg'); ?>" alt="africanqueenphotoshootbeauty.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50.0122%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/dallas-portrait-photographer.jpg'); ?>" alt="dallas-portrait-photographer.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/mommyandbabyphotoshootSTL.jpg'); ?>" alt="mommyandbabyphotoshootSTL.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/mommyandmephotoshoot-stlouis.jpg'); ?>" alt="mommyandmephotoshoot-stlouis.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50.0009%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/JordanBrocks-669+-web.jpg'); ?>" alt="JordanBrocks-669 -web.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 49.9991%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/stlfashionportraitsbeautyglamour.jpg'); ?>" alt="stlfashionportraitsbeautyglamour.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 30.7683%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/watershooteditorial.jpg'); ?>" alt="watershooteditorial.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 69.2317%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/editorialwomensportraits.jpg'); ?>" alt="editorialwomensportraits.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 49.9878%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/mckay-editorial-portraits.jpg'); ?>" alt="mckay-editorial-portraits.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50.0122%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/amy-stuttle-victory-health-jade-ha.jpg'); ?>" alt="amy-stuttle-victory-health-jade-ha.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/silverhairgoddess.jpg'); ?>" alt="silverhairgoddess.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/sexyover60photoshoot.jpg'); ?>" alt="sexyover60photoshoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50.3636%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/seniorportraitsstlouisdancer.jpg'); ?>" alt="seniorportraitsstlouisdancer.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 49.6364%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/fineartportraitsstlouis.jpg'); ?>" alt="fineartportraitsstlouis.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 49.9939%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/champagneandchanelemilytravis.jpg'); ?>" alt="champagneandchanelemilytravis.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50.0061%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/JordanBrocks-394.jpg'); ?>" alt="JordanBrocks-394.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 34.7771%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/VogueReagan2.jpg'); ?>" alt="VogueReagan2.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 65.2229%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/fineart-child-photography-vogue.jpg'); ?>" alt="fineart-child-photography-vogue.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 49.9939%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/stephaniehollmanrealhousewivesofdallas.jpg'); ?>" alt="stephaniehollmanrealhousewivesofdallas.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50.0061%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/NancyRogersMaryKay.jpg'); ?>" alt="NancyRogersMaryKay.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/stlouishighendportraits.jpg'); ?>" alt="stlouishighendportraits.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/webTrinity0424-edit.jpg'); ?>" alt="webTrinity0424-edit.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 100%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/webTrinity0384-edit.jpg'); ?>" alt="webTrinity0384-edit.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/sistersphotoshootbestfriends.jpg'); ?>" alt="sistersphotoshootbestfriends.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/stlouismotherdaughterphotoshoot.jpg'); ?>" alt="stlouismotherdaughterphotoshoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 52.6863%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/ddb210f0-6dc9-11ea-852c-29d5f9aab962_gallery.jpg'); ?>" alt="ddb210f0-6dc9-11ea-852c-29d5f9aab962_gallery.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 47.3137%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/vogue-ballet-dancer-photoshoot.jpg'); ?>" alt="vogue-ballet-dancer-photoshoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 49.8151%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/7U1A4204-edit.jpg'); ?>" alt="7U1A4204-edit.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50.1849%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/dallasbrandingphotographer.jpg'); ?>" alt="dallasbrandingphotographer.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/margauxdallasphotoshoot.jpg'); ?>" alt="margauxdallasphotoshoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/stlouisluxuryportraits.jpg'); ?>" alt="stlouisluxuryportraits.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50.0061%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/KI5A4570-edit.jpg'); ?>" alt="KI5A4570-edit.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 49.9939%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/webjade_5562-edit.jpg'); ?>" alt="webjade_5562-edit.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 30.7839%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/fashionmotherdaughtershoot.jpg'); ?>" alt="fashionmotherdaughtershoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 69.2161%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/mommyandmephotoshootSTL.jpg'); ?>" alt="mommyandmephotoshootSTL.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50.0061%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/vanityfairstyleportraits.jpg'); ?>" alt="vanityfairstyleportraits.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 49.9939%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/graduationphotoshootsenior.jpg'); ?>" alt="graduationphotoshootsenior.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 30.7976%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/nikki-sansone-photoshoot-stl.jpg'); ?>" alt="nikki-sansone-photoshoot-stl.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 69.2024%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/cowgirl-chic-portrait-photoshoot.jpg'); ?>" alt="cowgirl-chic-portrait-photoshoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/stl-editorial-portrait-photographer.jpg'); ?>" alt="stl-editorial-portrait-photographer.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/stlouis-editorial-portraits.jpg'); ?>" alt="stlouis-editorial-portraits.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 100%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/luxurywomensportraitsSTL.jpg'); ?>" alt="luxurywomensportraitsSTL.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/dallas-mother-portraits-family.jpg'); ?>" alt="dallas-mother-portraits-family.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/webjade_0006-edit.jpg'); ?>" alt="webjade_0006-edit.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/fashionbridalportraits.jpg'); ?>" alt="fashionbridalportraits.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/bridalphotoshootstl.jpg'); ?>" alt="bridalphotoshootstl.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/IMG_2137.JPG'); ?>" alt="IMG_2137.JPG" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/IMG_2139-2.jpg'); ?>" alt="IMG_2139-2.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 48.9598%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/stlouisportraits.jpg'); ?>" alt="stlouisportraits.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 51.0402%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/web7U1A9361-edit-BW.jpg'); ?>" alt="web7U1A9361-edit-BW.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 30.7735%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/stlouiseditorialportraits.jpg'); ?>" alt="stlouiseditorialportraits-2.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 69.2265%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/stlouisglamourphotoshoot.jpg'); ?>" alt="stlouisglamourphotoshoot.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/Salon210-836.jpg'); ?>" alt="Salon210-836.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/Salon210-822.jpg'); ?>" alt="Salon210-822.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 49.9933%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/birthday-photoshoot-jade-ha-stl.jpg'); ?>" alt="birthday-photoshoot-jade-ha-stl.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50.0067%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/stl-portraits-bridal-birthday.jpg'); ?>" alt="stl-portraits-bridal-birthday.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50.0061%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/Salon210-reesebond.jpg'); ?>" alt="Salon210-reesebond.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 49.9939%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/candicemotleygarnish.jpg'); ?>" alt="candicemotleygarnish.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/stlouis-boudoir-editorial-portraits.jpg'); ?>" alt="stlouis-boudoir-editorial-portraits.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/web7U1A5800-edit.jpg'); ?>" alt="web7U1A5800-edit.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50.0061%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/editorialportraitphotographerstlouis.jpg'); ?>" alt="editorialportraitphotographerstlouis.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 49.9939%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/chrissiewernerphotoshootstl.jpg'); ?>" alt="chrissiewernerphotoshootstl.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50.0061%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/Natalia-327.jpg'); ?>" alt="Natalia-327.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 49.9939%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/dallasportraitphotographer1.jpg'); ?>" alt="dallasportraitphotographer1.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/7U1A5884-edit+copy.jpg'); ?>" alt="7U1A5884-edit copy.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/webTaylor9661-edit.jpg'); ?>" alt="webTaylor9661-edit.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 49.9817%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/luxurywomensphotoshootsSTL.jpg'); ?>" alt="luxurywomensphotoshootsSTL.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 50.0183%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/stlouiseditorialportraits-2.jpg'); ?>" alt="stlouiseditorialportraits-2.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
    </div>
    <div class="flex w-full m-0 p-0 items-stretch">
      <div style="width: 30.7863%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/felicity-jade-ha.jpg'); ?>" alt="felicity-jade-ha.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
      </div>
      <div style="width: 69.2137%;" class="overflow-hidden m-0 p-0 block">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/portraits/stlouis-editorial-portraits-jade-ha.jpg'); ?>" alt="stlouis-editorial-portraits-jade-ha.jpg" loading="lazy" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
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
      <div id="bg-portraits" class="bg-crossfade active" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/portfolio/portraits.jpg'); ?>');"></div>
      <div id="bg-branding" class="bg-crossfade" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/portfolio/branding.jpg'); ?>');"></div>
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
          <a href="<?php echo esc_url(home_url('/portraits/')); ?>" class="portfolio-giant-link active" data-bg="bg-portraits">
            PORTRAITS
          </a>
        </div>
        <div class="text-left">
          <a href="<?php echo esc_url(home_url('/branding/')); ?>" class="portfolio-giant-link" data-bg="bg-branding">
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
      const defaultBgId = 'bg-portraits';
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
