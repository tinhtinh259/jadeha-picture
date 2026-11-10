<?php
/**
 * The header for Jade Ha Theme
 *
 * @package JadeHaTheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-favicon.jpg'); ?>">
    <link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-favicon.jpg'); ?>">

    <!-- Typekit Genuine Fonts: ambroise-std & calluna -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/fonts.css'); ?>">

    <script src="https://cdn.tailwindcss.com"></script>
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
      body { font-family: "calluna", Georgia, serif; }
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class('antialiased selection:bg-[#ff9061] selection:text-white'); ?>>
<?php wp_body_open(); ?>

<!-- ================= SITE HEADER (EXACT JADE HA) ================= -->
<header id="siteHeader" class="site-header fixed top-0 left-0 w-full z-50 flex items-center justify-between px-8 md:px-10 py-8 md:py-9">
    <!-- Site Branding / Logo -->
    <div class="site-branding flex items-center">
        <?php if (has_custom_logo()): ?>
            <?php the_custom_logo(); ?>
        <?php else: ?>
            <h1 class="image m-0 p-0 leading-none">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" class="w-5 h-5 object-contain" />
                </a>
            </h1>
        <?php endif; ?>
    </div>

    <!-- Right Navigation + Social Wrapper -->
    <div class="nav-social-wrapper hidden md:flex items-center">
        <nav id="mainNavigation" class="main-navigation flex items-center">
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'items_wrap'     => '%3$s',
                    'fallback_cb'    => false,
                    'depth'          => 2,
                ));
            } else {
                ?>
                <div class="nav-item">
                    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                </div>
                
                <div class="nav-item folder">
                    <span class="folder-toggle">Photoshoots</span>
                    <div class="subnav">
                        <a href="<?php echo esc_url(home_url('/testimonials/')); ?>">Testimonials</a>
                        <a href="<?php echo esc_url(home_url('/meet-the-team/')); ?>">Meet The Team</a>
                        <a href="<?php echo esc_url(home_url('/transformations/')); ?>">Transformations</a>
                        <a href="<?php echo esc_url(home_url('/luxury-photoshoot/')); ?>">A Client's Experience</a>
                    </div>
                </div>

                <div class="nav-item">
                    <a href="<?php echo esc_url(home_url('/portfolio/')); ?>">Portfolio</a>
                </div>

                <div class="nav-item folder">
                    <span class="folder-toggle">For Photographers</span>
                    <div class="subnav">
                        <a href="<?php echo esc_url(home_url('/photographers-store/')); ?>">Photographer Templates<br>&amp; Lightroom Presets</a>
                        <a href="<?php echo esc_url(home_url('/mentoring/')); ?>">Mentoring</a>
                        <a href="<?php echo esc_url(home_url('/workshop/')); ?>">Workshops</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </nav>

        <!-- Social Icons Right Next To Nav (Exact Jade Ha) -->
        <div class="header-social-icons">
            <a href="<?php echo esc_url(get_theme_mod('jadeha_instagram', 'https://www.instagram.com/jadeha_studio_sg/')); ?>" target="_blank" rel="noopener" aria-label="Instagram">
                <svg viewBox="17 17 30 30" class="social-svg">
                    <path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"></path>
                </svg>
            </a>
            <a href="<?php echo esc_url(get_theme_mod('jadeha_facebook', 'https://www.facebook.com/jadehastudio/')); ?>" target="_blank" rel="noopener" aria-label="Facebook">
                <svg viewBox="0 0 24 24" class="social-svg">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" fill="currentColor"></path>
                </svg>
            </a>
        </div>
    </div>

    <!-- Mobile Header Right Area: Social Icons + Hamburger / Close Button (Ngang hàng với nhau!) -->
    <div class="mobile-header-right flex items-center space-x-4 md:hidden z-50">
        <a href="<?php echo esc_url(get_theme_mod('jadeha_instagram', 'https://www.instagram.com/jadeha_studio_sg/')); ?>" target="_blank" rel="noopener" aria-label="Instagram" class="header-social-link">
            <svg viewBox="17 17 30 30" class="w-[18px] h-[18px] fill-current">
                <path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"></path>
            </svg>
        </a>
        <a href="<?php echo esc_url(get_theme_mod('jadeha_facebook', 'https://www.facebook.com/jadehastudio/')); ?>" target="_blank" rel="noopener" aria-label="Facebook" class="header-social-link">
            <svg viewBox="0 0 24 24" class="w-[18px] h-[18px] fill-current">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
            </svg>
        </a>
        <button id="mobile-toggle" class="header-toggle-btn focus:outline-none" aria-label="Toggle menu">
            <svg class="w-6 h-6 icon-hamburger" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg class="w-6 h-6 icon-close hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
</header>

<!-- ================= MOBILE MENU DRAWER (EXACT JADE HA) ================= -->
<div id="mobile-menu" class="hidden fixed inset-0 z-40 flex flex-col items-center justify-center px-6 py-20 overflow-y-auto">
    <nav class="flex flex-col space-y-6 text-center w-full max-w-sm mx-auto">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="mobile-nav-link">Home</a>
        
        <!-- Photoshoots Folder with Accordion -->
        <div class="mobile-folder">
            <button type="button" class="mobile-folder-toggle flex items-center justify-center w-full py-1 focus:outline-none">
                <span>Photoshoots</span>
                <svg class="w-4 h-4 ml-2 transform transition-transform duration-300 folder-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="mobile-subnav hidden flex-col space-y-2 pt-2 pb-1">
                <a href="<?php echo esc_url(home_url('/testimonials/')); ?>">Testimonials</a>
                <a href="<?php echo esc_url(home_url('/meet-the-team/')); ?>">Meet The Team</a>
                <a href="<?php echo esc_url(home_url('/transformations/')); ?>">Transformations</a>
                <a href="<?php echo esc_url(home_url('/luxury-photoshoot/')); ?>">A Client's Experience</a>
            </div>
        </div>

        <a href="<?php echo esc_url(home_url('/portfolio/')); ?>" class="mobile-nav-link">Portfolio</a>

        <!-- For Photographers Folder with Accordion -->
        <div class="mobile-folder">
            <button type="button" class="mobile-folder-toggle flex items-center justify-center w-full py-1 focus:outline-none">
                <span>For Photographers</span>
                <svg class="w-4 h-4 ml-2 transform transition-transform duration-300 folder-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="mobile-subnav hidden flex-col space-y-2 pt-2 pb-1">
                <a href="<?php echo esc_url(home_url('/photographers-store/')); ?>">Photographer Templates<br>&amp; Lightroom Presets</a>
                <a href="<?php echo esc_url(home_url('/mentoring/')); ?>">Mentoring</a>
                <a href="<?php echo esc_url(home_url('/workshop/')); ?>">Workshops</a>
            </div>
        </div>
    </nav>
</div>
<main id="primary" class="site-main">


