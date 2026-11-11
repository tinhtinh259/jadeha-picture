<?php
/**
 * Jade Ha Studio Auto-Setup Engine for Align Child Theme
 *
 * Automatically provisions all 17 studio pages with exact static layouts
 * inside Align Builder (<!-- wp:align/custom-html -->) blocks.
 *
 * @package Align Child
 */

if (!defined('ABSPATH')) {
    exit;
}

class JadeHa_Auto_Setup {

    public static function init() {
        add_action('after_switch_theme', array(__CLASS__, 'run_setup_once'));
        add_action('admin_menu', array(__CLASS__, 'register_admin_menu'));
        add_action('admin_post_jadeha_setup_pages', array(__CLASS__, 'handle_manual_setup'));
    }

    public static function register_admin_menu() {
        add_theme_page(
            __('Cài đặt giao diện Jade Ha', 'align-child'),
            __('Cài đặt Jade Ha Studio', 'align-child'),
            'manage_options',
            'jadeha-setup',
            array(__CLASS__, 'render_admin_page')
        );
    }

    public static function render_admin_page() {
        $nonce = wp_create_nonce('jadeha_setup_nonce');
        ?>
        <div class="wrap" style="max-width: 900px; margin-top: 30px;">
            <h1 style="font-size: 26px; font-weight: 700; margin-bottom: 15px;">🎉 Jade Ha Studio & Align Builder Setup</h1>
            <div style="background: #fff; padding: 25px 30px; border-radius: 8px; border: 1px solid #ccd0d4; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                <h2 style="font-size: 18px; margin-top: 0;">Khởi tạo 17 trang giao diện chuẩn 1:1 cho Align Builder</h2>
                <p style="font-size: 14px; line-height: 1.6; color: #444;">
                    Bấm vào nút bên dưới để tự động tạo (hoặc cập nhật lại) toàn bộ <strong>17 trang giao diện Studio</strong> (Trang chủ, Meet The Team, Transformations, Luxury Photoshoot, Portfolio, Testimonials, v.v.).
                </p>
                <p style="font-size: 14px; line-height: 1.6; color: #444;">
                    Mỗi trang sẽ được đóng gói sẵn trong khối <strong>Align Builder</strong>. Bạn chỉ cần vào <em>Trang (Pages)</em> &rarr; bấm <strong>Edit with Align Builder</strong> là có thể click trực tiếp vào từng chữ, từng ảnh để sửa trên giao diện kéo thả trực quan!
                </p>
                <?php if (isset($_GET['setup_done'])) : ?>
                    <div style="background: #e7f7ed; border-left: 4px solid #28a745; padding: 12px 18px; margin: 20px 0; border-radius: 4px;">
                        <strong style="color: #155724;">✅ Đã thiết lập thành công toàn bộ 17 trang Jade Ha Studio!</strong>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" style="margin-top: 20px;">
                    <input type="hidden" name="action" value="jadeha_setup_pages">
                    <input type="hidden" name="_wpnonce" value="<?php echo esc_attr($nonce); ?>">
                    <button type="submit" class="button button-primary button-hero" style="font-size: 15px; height: 46px; line-height: 44px; padding: 0 30px;">
                        ⚡ Khởi tạo / Cập nhật 17 Trang Giao Diện Ngay
                    </button>
                </form>
            </div>
        </div>
        <?php
    }

    public static function handle_manual_setup() {
        if (!current_user_can('manage_options') || !wp_verify_nonce($_POST['_wpnonce'] ?? '', 'jadeha_setup_nonce')) {
            wp_die('Permission denied');
        }
        self::execute_provisioning();
        wp_safe_redirect(admin_url('themes.php?page=jadeha-setup&setup_done=1'));
        exit;
    }

    public static function run_setup_once() {
        if (!get_option('jadeha_pages_installed_v2')) {
            self::execute_provisioning();
            update_option('jadeha_pages_installed_v2', 1);
        }
    }

    public static function execute_provisioning() {
        $theme_uri = get_stylesheet_directory_uri() . '/assets';
        $pages = self::get_pages_definition();

        if (empty($pages)) {
            return;
        }

        $home_id = 0;

        foreach ($pages as $p) {
            $slug = sanitize_title($p['slug']);
            $title = $p['title'];
            $is_front = !empty($p['is_front']);
            $template = $p['template'] ?? 'default';

            // Resolve assets URL in HTML
            $clean_html = str_replace('##THEME_ASSETS##', $theme_uri, $p['html']);

            $block_id = 'align-' . substr(md5($slug), 0, 8);
            $content = "<!-- wp:align/custom-html " . wp_json_encode(array('blockId' => $block_id, 'enableShortcode' => true)) . " -->\n" . $clean_html . "\n<!-- /wp:align/custom-html -->";

            // Safe query by slug and post_type
            global $wpdb;
            $existing_id = $wpdb->get_var($wpdb->prepare(
                "SELECT ID FROM $wpdb->posts WHERE post_name = %s AND post_type = 'page' LIMIT 1",
                $slug
            ));

            if ($existing_id) {
                wp_update_post(array(
                    'ID'           => $existing_id,
                    'post_title'   => $title,
                    'post_content' => $content,
                    'post_status'  => 'publish'
                ));
                $page_id = $existing_id;
            } else {
                $page_id = wp_insert_post(array(
                    'post_name'    => $slug,
                    'post_title'   => $title,
                    'post_content' => $content,
                    'post_status'  => 'publish',
                    'post_type'    => 'page'
                ));
            }

            if ($template === 'canvas') {
                update_post_meta($page_id, '_wp_page_template', 'canvas');
            } else {
                update_post_meta($page_id, '_wp_page_template', 'default');
            }

            if ($is_front) {
                $home_id = $page_id;
            }
        }

        if ($home_id > 0) {
            update_option('show_on_front', 'page');
            update_option('page_on_front', $home_id);
        }

        update_option('permalink_structure', '/%postname%/');
        flush_rewrite_rules();
    }

    public static function get_pages_definition() {
        $json_file = __DIR__ . '/pages-data.json';
        if (file_exists($json_file)) {
            $data = json_decode(file_get_contents($json_file), true);
            if (is_array($data)) {
                return $data;
            }
        }
        return array();
    }
}

JadeHa_Auto_Setup::init();
