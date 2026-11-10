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
        'https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'jadeha-typekit-fonts',
        get_template_directory_uri() . '/assets/css/fonts.css',
        array(),
        '1.2.0'
    );

    wp_enqueue_script(
        'tailwind-cdn',
        'https://cdn.tailwindcss.com',
        array(),
        null,
        false
    );

    wp_enqueue_script(
        'lucide-icons',
        'https://unpkg.com/lucide@latest',
        array(),
        null,
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
    } else {
        $classes[] = 'header-theme-light';
        $classes[] = 'bg-white';
        $classes[] = 'text-[#222222]';
    }
    return $classes;
}
add_filter('body_class', 'jadeha_body_classes');

/**
 * Register Custom Post Types for Portfolio & Transformations
 * Helps the studio owner manage photos easily in wp-admin
 */
function jadeha_register_custom_post_types() {
    // 1. Portfolio CPT
    $portfolio_labels = array(
        'name'               => __('Tác Phẩm Portfolio', 'jadeha-theme'),
        'singular_name'      => __('Tác Phẩm', 'jadeha-theme'),
        'menu_name'          => __('Portfolio Studio', 'jadeha-theme'),
        'add_new'            => __('Thêm Tác Phẩm Mới', 'jadeha-theme'),
        'add_new_item'       => __('Thêm Tác Phẩm Mới', 'jadeha-theme'),
        'edit_item'          => __('Chỉnh Sửa Tác Phẩm', 'jadeha-theme'),
        'all_items'          => __('Tất Cả Tác Phẩm', 'jadeha-theme'),
    );
    register_post_type('portfolio_item', array(
        'labels'        => $portfolio_labels,
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-format-gallery',
        'supports'      => array('title', 'thumbnail', 'editor'),
        'show_in_rest'  => true,
    ));

    // Portfolio Categories (Taxonomy)
    register_taxonomy('portfolio_category', 'portfolio_item', array(
        'labels' => array(
            'name'          => __('Chủ Đề (Categories)', 'jadeha-theme'),
            'singular_name' => __('Chủ Đề', 'jadeha-theme'),
        ),
        'hierarchical'      => true,
        'public'            => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
    ));

    // 2. Transformations CPT (Before & After)
    $transform_labels = array(
        'name'               => __('Biến Hóa (Transformations)', 'jadeha-theme'),
        'singular_name'      => __('Biến Hóa', 'jadeha-theme'),
        'menu_name'          => __('Biến Hóa (Before/After)', 'jadeha-theme'),
        'add_new'            => __('Thêm Khách Hàng Mới', 'jadeha-theme'),
        'add_new_item'       => __('Thêm Ca Biến Hóa Mới', 'jadeha-theme'),
        'edit_item'          => __('Chỉnh Sửa Biến Hóa', 'jadeha-theme'),
        'all_items'          => __('Tất Cả Biến Hóa', 'jadeha-theme'),
    );
    register_post_type('transformation_item', array(
        'labels'        => $transform_labels,
        'public'        => true,
        'menu_icon'     => 'dashicons-image-filter',
        'supports'      => array('title', 'thumbnail'),
        'show_in_rest'  => true,
    ));
}
add_action('init', 'jadeha_register_custom_post_types');

/**
 * Add Meta Box for Transformation Item (Before Image & After Image)
 */
function jadeha_add_transformation_metaboxes() {
    add_meta_box(
        'jadeha_transform_meta',
        __('Ảnh Before & After và Thông Tin Khách Hàng', 'jadeha-theme'),
        'jadeha_render_transformation_metabox',
        'transformation_item',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'jadeha_add_transformation_metaboxes');

function jadeha_render_transformation_metabox($post) {
    wp_nonce_field('jadeha_save_transformation_meta', 'jadeha_transform_nonce');
    $before_url = get_post_meta($post->ID, '_jadeha_before_img', true);
    $after_url  = get_post_meta($post->ID, '_jadeha_after_img', true);
    $client_role = get_post_meta($post->ID, '_jadeha_client_role', true);
    ?>
    <p>
        <label><strong>URL Ảnh Trước (Before - Mặt mộc):</strong></label><br>
        <input type="url" name="jadeha_before_img" value="<?php echo esc_attr($before_url); ?>" style="width: 100%;" placeholder="https://...">
    </p>
    <p>
        <label><strong>URL Ảnh Sau (After - Studio hoàn thiện):</strong></label><br>
        <input type="url" name="jadeha_after_img" value="<?php echo esc_attr($after_url); ?>" style="width: 100%;" placeholder="https://...">
    </p>
    <p>
        <label><strong>Nghề nghiệp / Giới thiệu khách hàng:</strong></label><br>
        <input type="text" name="jadeha_client_role" value="<?php echo esc_attr($client_role); ?>" style="width: 100%;" placeholder="Ví dụ: Nữ Doanh Nhân / Luật Sư / Mẹ Bầu">
    </p>
    <?php
}

function jadeha_save_transformation_metabox($post_id) {
    if (!isset($_POST['jadeha_transform_nonce']) || !wp_verify_nonce($_POST['jadeha_transform_nonce'], 'jadeha_save_transformation_meta')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (isset($_POST['jadeha_before_img'])) {
        update_post_meta($post_id, '_jadeha_before_img', esc_url_raw($_POST['jadeha_before_img']));
    }
    if (isset($_POST['jadeha_after_img'])) {
        update_post_meta($post_id, '_jadeha_after_img', esc_url_raw($_POST['jadeha_after_img']));
    }
    if (isset($_POST['jadeha_client_role'])) {
        update_post_meta($post_id, '_jadeha_client_role', sanitize_text_field($_POST['jadeha_client_role']));
    }
}
add_action('save_post_transformation_item', 'jadeha_save_transformation_metabox');

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
 * Include Studio Media Gallery Manager
 */
require_once get_template_directory() . '/inc/gallery-manager.php';

