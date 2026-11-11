<?php
/**
 * Align Child Theme functions and definitions - Jade Ha Studio Edition
 *
 * Fully integrated with Align Builder visual drag-and-drop editor,
 * 100% local fonts, scripts, and pre-built luxury studio layouts.
 *
 * @package Align Child
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * 1. Enqueue Child Theme Styles and Scripts
 */
function jadeha_align_child_assets() {
    $theme_dir = get_stylesheet_directory_uri();

    // Typekit local fonts (Ambroise Std & Calluna)
    wp_enqueue_style(
        'jadeha-typekit-fonts',
        $theme_dir . '/assets/css/fonts.css',
        array(),
        '1.2.0'
    );

    // Google local fonts
    wp_enqueue_style(
        'jadeha-google-fonts',
        $theme_dir . '/assets/css/google-fonts.css',
        array(),
        '1.2.0'
    );

    // Child theme stylesheet
    wp_enqueue_style(
        'align-child-style',
        get_stylesheet_uri(),
        array(),
        '6.2.2'
    );

    // Tailwind CSS Runtime (100% Local)
    wp_enqueue_script(
        'jadeha-tailwind',
        $theme_dir . '/assets/js/tailwindcss.js',
        array(),
        '3.4.1',
        false // in head so Tailwind compiles immediately
    );

    // Lucide Icons (100% Local)
    wp_enqueue_script(
        'jadeha-lucide',
        $theme_dir . '/assets/js/lucide.min.js',
        array(),
        '0.344.0',
        true
    );

    // Header Navigation & Mobile Drawer
    wp_enqueue_script(
        'jadeha-header-nav',
        $theme_dir . '/assets/js/header-nav.js',
        array(),
        '1.2.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'jadeha_align_child_assets', 20);

/**
 * 2. Enqueue Assets for Align Builder & Block Editor Canvas
 */
function jadeha_align_child_editor_assets() {
    $theme_dir = get_stylesheet_directory_uri();

    wp_enqueue_style(
        'jadeha-typekit-fonts-editor',
        $theme_dir . '/assets/css/fonts.css',
        array(),
        '1.2.0'
    );
    wp_enqueue_style(
        'jadeha-google-fonts-editor',
        $theme_dir . '/assets/css/google-fonts.css',
        array(),
        '1.2.0'
    );
    wp_enqueue_script(
        'jadeha-tailwind-editor',
        $theme_dir . '/assets/js/tailwindcss.js',
        array(),
        '3.4.1',
        false
    );
}
add_action('enqueue_block_editor_assets', 'jadeha_align_child_editor_assets');

/**
 * 3. Configure Tailwind Fonts & Global Typography
 */
function jadeha_tailwind_inline_config() {
    ?>
    <script>
      if (typeof tailwind !== 'undefined') {
        tailwind.config = {
          theme: {
            extend: {
              fontFamily: {
                ambroise: ['"ambroise-std"', 'serif'],
                calluna: ['"calluna"', 'Georgia', 'serif'],
              }
            }
          }
        };
      }
    </script>
    <style>
      body {
        font-family: "calluna", Georgia, serif;
      }
      .font-ambroise {
        font-family: "ambroise-std", serif !important;
      }
      .font-calluna {
        font-family: "calluna", Georgia, serif !important;
      }
    </style>
    <?php
}
add_action('wp_head', 'jadeha_tailwind_inline_config', 5);
add_action('admin_head', 'jadeha_tailwind_inline_config', 5);

/**
 * 4. Register Jade Ha Studio Block Pattern Category
 */
function jadeha_register_pattern_category() {
    if (function_exists('register_block_pattern_category')) {
        register_block_pattern_category(
            'jadeha-pages',
            array('label' => __('Jade Ha Studio Pages', 'align-child'))
        );
    }
}
add_action('init', 'jadeha_register_pattern_category');

/**
 * 5. Load Auto-Setup Engine (Creates 17 Pages with Align Builder blocks)
 */
$setup_file = get_stylesheet_directory() . '/inc/setup-pages.php';
if (file_exists($setup_file)) {
    require_once $setup_file;
}

/**
 * 6. Dynamic Asset URL Filter
 */
function jadeha_filter_child_content_assets($content) {
    if (empty($content)) {
        return $content;
    }
    $theme_uri = get_stylesheet_directory_uri();
    $content = preg_replace('/(src|href)=["\']assets\/images\//i', '$1="' . $theme_uri . '/assets/images/', $content);
    return $content;
}
add_filter('the_content', 'jadeha_filter_child_content_assets', 1);
