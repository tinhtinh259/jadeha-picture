<?php
/**
 * Jade Ha Theme Functions and Definitions
 *
 * @package JadeHaTheme
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Theme Setup
 */
function jadeha_theme_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    register_nav_menus(array(
        'primary' => __('Primary Navigation Menu', 'jadeha-theme'),
        'footer'  => __('Footer Navigation Menu', 'jadeha-theme'),
    ));

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
}
add_action('after_setup_theme', 'jadeha_theme_setup');

/**
 * Enqueue scripts and styles
 */
function jadeha_theme_scripts() {
    wp_enqueue_style(
        'jadeha-fonts',
        get_template_directory_uri() . '/assets/css/google-fonts.css',
        array(),
        '1.2.0'
    );

    wp_enqueue_style(
        'jadeha-typekit-fonts',
        get_template_directory_uri() . '/assets/css/fonts.css',
        array(),
        '1.2.0'
    );

    wp_enqueue_script(
        'tailwind-cdn',
        get_template_directory_uri() . '/assets/js/tailwindcss.js',
        array(),
        '3.4.1',
        false
    );

    wp_enqueue_script(
        'lucide-icons',
        get_template_directory_uri() . '/assets/js/lucide.min.js',
        array(),
        '0.344.0',
        true
    );

    wp_enqueue_style('jadeha-style', get_stylesheet_uri(), array(), '1.1.0');

    wp_enqueue_script(
        'jadeha-header-nav',
        get_template_directory_uri() . '/assets/js/header-nav.js',
        array(),
        '1.2.0',
        true
    );

    wp_enqueue_script(
        'jadeha-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.1.0',
        true
    );

    // Pass AJAX URL to JS
    wp_localize_script('jadeha-main', 'jadehaAjax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('jadeha_contact_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'jadeha_theme_scripts');

/**
 * Add proper header-theme and background classes based on page
 */
function jadeha_body_classes($classes) {
    if (is_front_page() || is_page('portfolio') || is_page_template('page-portfolio.php')) {
        $classes[] = 'header-theme-transparent';
    } elseif (is_page(array('mentoring', 'photographers-store', 'workshop')) || 
              is_page_template(array('page-mentoring.php', 'page-photographers-store.php', 'page-workshop.php'))) {
        $classes[] = 'header-theme-transparent';
        $classes[] = 'bg-black';
        $classes[] = 'text-white';
    } else {
        $classes[] = 'header-theme-light';
        $classes[] = 'bg-white';
        $classes[] = 'text-[#222222]';
    }
    return $classes;
}
add_filter('body_class', 'jadeha_body_classes');

/**
 * Automatically resolve relative asset paths in post content
 * Allows imported content and editor images to load reliably
 */
function jadeha_filter_content_assets($content) {
    if (empty($content)) {
        return $content;
    }
    $theme_uri = get_template_directory_uri();
    return preg_replace('/src=["\']\/?assets\/images\//', 'src="' . esc_url($theme_uri) . '/assets/images/', $content);
}
add_filter('the_content', 'jadeha_filter_content_assets');



/**
 * Handle Contact Form Submission via AJAX
 */
function jadeha_handle_contact_ajax() {
    check_ajax_referer('jadeha_contact_nonce', 'nonce');

    $name    = isset($_POST['client_name']) ? sanitize_text_field($_POST['client_name']) : '';
    $phone   = isset($_POST['client_phone']) ? sanitize_text_field($_POST['client_phone']) : '';
    $email   = isset($_POST['client_email']) ? sanitize_email($_POST['client_email']) : '';
    $session = isset($_POST['session_type']) ? sanitize_text_field($_POST['session_type']) : '';
    $date    = isset($_POST['preferred_date']) ? sanitize_text_field($_POST['preferred_date']) : '';
    $message = isset($_POST['client_message']) ? sanitize_textarea_field($_POST['client_message']) : '';

    if (empty($name) || empty($phone) || empty($email)) {
        wp_send_json_error(array('message' => 'Vui lòng điền đầy đủ các thông tin bắt buộc (*).'));
    }

    $to      = get_theme_mod('jadeha_email', get_option('admin_email'));
    $subject = '[Jade Ha Picture] Yêu Cầu Đặt Lịch Tư Vấn Mới từ: ' . $name;
    $body    = "Họ tên: {$name}\n";
    $body   .= "Số điện thoại/Zalo: {$phone}\n";
    $body   .= "Email: {$email}\n";
    $body   .= "Concept quan tâm: {$session}\n";
    $body   .= "Thời gian dự kiến: {$date}\n\n";
    $body   .= "Ghi chú/Mong muốn:\n{$message}\n";

    $headers = array('Content-Type: text/plain; charset=UTF-8', "Reply-To: {$name} <{$email}>");

    wp_mail($to, $subject, $body, $headers);

    wp_send_json_success(array('message' => 'Cảm ơn bạn! Yêu cầu tư vấn của bạn đã được gửi thành công. Ekip Jade Ha sẽ liên hệ trong vòng 24 giờ.'));
}
add_action('wp_ajax_jadeha_submit_inquiry', 'jadeha_handle_contact_ajax');
add_action('wp_ajax_nopriv_jadeha_submit_inquiry', 'jadeha_handle_contact_ajax');

/**
 * Register Customizer Settings
 */
function jadeha_customize_register($wp_customize) {
    // Luxury Homepage Section
    $wp_customize->add_section('jadeha_hero_section', array(
        'title'    => __('Trang Chủ - Video & Cài Đặt (Jade Ha Style)', 'jadeha-theme'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('jadeha_tagline', array(
        'default'   => 'luxury portrait & fashion studio',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('jadeha_tagline', array(
        'label'    => __('Khẩu hiệu chính giữa trang chủ', 'jadeha-theme'),
        'section'  => 'jadeha_hero_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('jadeha_hero_video_url', array(
        'default'   => 'https://www.youtube.com/embed/YVS1TbJcavw?autoplay=1&mute=1&controls=0&loop=1&playlist=YVS1TbJcavw&playsinline=1',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('jadeha_hero_video_url', array(
        'label'       => __('Link Video Nền (YouTube Embed URL hoặc MP4)', 'jadeha-theme'),
        'description' => __('Gợi ý link YouTube: https://www.youtube.com/embed/[VIDEO_ID]?autoplay=1&mute=1&controls=0&loop=1&playlist=[VIDEO_ID]&playsinline=1', 'jadeha-theme'),
        'section'     => 'jadeha_hero_section',
        'type'        => 'url',
    ));

    $wp_customize->add_setting('jadeha_hero_fallback_image', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'jadeha_hero_fallback_image', array(
        'label'    => __('Ảnh bìa thay thế (nếu video tải chậm)', 'jadeha-theme'),
        'section'  => 'jadeha_hero_section',
    )));

    $wp_customize->add_setting('jadeha_hero_image', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'jadeha_hero_image', array(
        'label'    => __('Ảnh Nền Trang Chủ (Chọn từ Thư Viện Media)', 'jadeha-theme'),
        'description' => __('Nếu không chọn, website sẽ dùng ảnh mặc định.', 'jadeha-theme'),
        'section'  => 'jadeha_hero_section',
    )));

    // Home Button 1
    $wp_customize->add_setting('jadeha_home_btn1_text', array('default' => 'SHOOTS', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('jadeha_home_btn1_text', array('label' => __('Chữ nút 1 (Mặc định: SHOOTS)', 'jadeha-theme'), 'section' => 'jadeha_hero_section'));
    $wp_customize->add_setting('jadeha_home_btn1_url', array('default' => '', 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control('jadeha_home_btn1_url', array('label' => __('Link nút 1 (Để trống = /luxury-photoshoot/)', 'jadeha-theme'), 'section' => 'jadeha_hero_section', 'type' => 'url'));

    // Home Button 2
    $wp_customize->add_setting('jadeha_home_btn2_text', array('default' => 'JADE', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('jadeha_home_btn2_text', array('label' => __('Chữ nút 2 (Mặc định: JADE)', 'jadeha-theme'), 'section' => 'jadeha_hero_section'));
    $wp_customize->add_setting('jadeha_home_btn2_url', array('default' => '', 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control('jadeha_home_btn2_url', array('label' => __('Link nút 2 (Để trống = /lovejade/)', 'jadeha-theme'), 'section' => 'jadeha_hero_section', 'type' => 'url'));

    // Home Button 3
    $wp_customize->add_setting('jadeha_home_btn3_text', array('default' => 'CONTACT', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('jadeha_home_btn3_text', array('label' => __('Chữ nút 3 (Mặc định: CONTACT)', 'jadeha-theme'), 'section' => 'jadeha_hero_section'));
    $wp_customize->add_setting('jadeha_home_btn3_url', array('default' => '', 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control('jadeha_home_btn3_url', array('label' => __('Link nút 3 (Để trống = /contact/)', 'jadeha-theme'), 'section' => 'jadeha_hero_section', 'type' => 'url'));

    // ==========================================
    // Portfolio Landing Page (Hover Crossfade Backgrounds)
    // ==========================================
    $wp_customize->add_section('jadeha_portfolio_section', array(
        'title'       => __('Trang Portfolio (Text, Link & Ảnh Hover)', 'jadeha-theme'),
        'description' => __('Tùy chỉnh 6 mục portfolio và ảnh nền tương ứng khi rê chuột (hover).', 'jadeha-theme'),
        'priority'    => 32,
    ));

    $wp_customize->add_setting('jadeha_portfolio_tagline', array(
        'default'           => 'st. louis luxury photo studio',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('jadeha_portfolio_tagline', array(
        'label'   => __('Dòng chữ phụ trên danh mục', 'jadeha-theme'),
        'section' => 'jadeha_portfolio_section',
    ));

    $default_portfolio_categories = array(
        'fashion'   => array('label' => 'Mục 1: FASHION',   'text' => 'FASHION',   'url' => '/fashion/'),
        'couples'   => array('label' => 'Mục 2: COUPLES',   'text' => 'COUPLES',   'url' => '/couples/'),
        'portraits' => array('label' => 'Mục 3: PORTRAITS', 'text' => 'PORTRAITS', 'url' => '/portraits/'),
        'branding'  => array('label' => 'Mục 4: BRANDING',  'text' => 'BRANDING',  'url' => '/branding/'),
        'maternity' => array('label' => 'Mục 5: MATERNITY', 'text' => 'MATERNITY', 'url' => '/maternity/'),
        'boudoir'   => array('label' => 'Mục 6: BOUDOIR',   'text' => 'BOUDOIR',   'url' => '/boudoir/'),
    );

    foreach ($default_portfolio_categories as $key => $info) {
        // Text
        $wp_customize->add_setting("jadeha_portfolio_{$key}_text", array(
            'default'           => $info['text'],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("jadeha_portfolio_{$key}_text", array(
            'label'   => __($info['label'] . ' - Chữ hiển thị', 'jadeha-theme'),
            'section' => 'jadeha_portfolio_section',
        ));

        // URL
        $wp_customize->add_setting("jadeha_portfolio_{$key}_url", array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("jadeha_portfolio_{$key}_url", array(
            'label'       => __($info['label'] . ' - Đường link', 'jadeha-theme'),
            'description' => __('Để trống sẽ trỏ về: ' . $info['url'], 'jadeha-theme'),
            'section'     => 'jadeha_portfolio_section',
            'type'        => 'url',
        ));

        // Background Image
        $wp_customize->add_setting("jadeha_portfolio_{$key}_bg", array(
            'default'           => '',
            'transport'         => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "jadeha_portfolio_{$key}_bg", array(
            'label'       => __($info['label'] . ' - Ảnh nền khi Hover', 'jadeha-theme'),
            'description' => __('Chọn hoặc tải ảnh từ Thư viện Media (nếu để trống sẽ dùng ảnh mặc định của theme).', 'jadeha-theme'),
            'section'     => 'jadeha_portfolio_section',
        )));
    }

    // Studio Contact Info
    $wp_customize->add_section('jadeha_contact_section', array(
        'title'    => __('Thông Tin Studio & Hotline', 'jadeha-theme'),
        'priority' => 35,
    ));
    $wp_customize->add_setting('jadeha_hotline', array('default' => '090 999 8888', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('jadeha_hotline', array('label' => __('Số điện thoại / Hotline', 'jadeha-theme'), 'section' => 'jadeha_contact_section'));

    $wp_customize->add_setting('jadeha_email', array('default' => 'jadehastudio@gmail.com', 'sanitize_callback' => 'sanitize_email'));
    $wp_customize->add_control('jadeha_email', array('label' => __('Email Studio', 'jadeha-theme'), 'section' => 'jadeha_contact_section'));

    $wp_customize->add_setting('jadeha_address', array('default' => 'TP. Hồ Chí Minh & Hà Nội', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('jadeha_address', array('label' => __('Địa chỉ Studio', 'jadeha-theme'), 'section' => 'jadeha_contact_section'));

    $wp_customize->add_setting('jadeha_copyright', array('default' => 'Jade Ha Studio - Photography', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('jadeha_copyright', array('label' => __('Copyright Footer', 'jadeha-theme'), 'section' => 'jadeha_contact_section'));

    // Social Settings (Instagram & Facebook)
    $wp_customize->add_section('jadeha_social_section', array(
        'title'    => __('Mạng Xã Hội (Instagram & Facebook)', 'jadeha-theme'),
        'priority' => 36,
    ));
    $wp_customize->add_setting('jadeha_instagram', array('default' => 'https://www.instagram.com/jadeha_studio_sg/', 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control('jadeha_instagram', array('label' => __('Instagram URL', 'jadeha-theme'), 'section' => 'jadeha_social_section', 'type' => 'url'));

    $wp_customize->add_setting('jadeha_facebook', array('default' => 'https://www.facebook.com/jadehastudio/', 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_control('jadeha_facebook', array('label' => __('Facebook URL', 'jadeha-theme'), 'section' => 'jadeha_social_section', 'type' => 'url'));
}
add_action('customize_register', 'jadeha_customize_register');

/**
 * Custom Nav Walker for Exact 1:1 Jade Ha Header Dropdown Menu
 */
class Jadeha_Nav_Walker extends Walker_Nav_Menu {
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<div class="subnav">';
    }

    public function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</div>';
    }

    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0) {
        $item = $data_object;
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);

        if ($depth === 0) {
            $folder_class = $has_children ? ' folder' : '';
            $output .= '<div class="nav-item' . $folder_class . '">';
            if ($has_children) {
                $output .= '<span class="folder-toggle">' . esc_html($item->title) . '</span>';
            } else {
                $output .= '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
            }
        } else {
            $output .= '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
        }
    }

    public function end_el(&$output, $data_object, $depth = 0, $args = null) {
        if ($depth === 0) {
            $output .= '</div>';
        }
    }
}

/**
 * Include Studio Media Gallery Manager & Editorial Content Managers
 */
require_once get_template_directory() . '/inc/gallery-manager.php';
require_once get_template_directory() . '/inc/content-managers.php';

