<?php
/**
 * Studio Editorial Content Managers for Testimonials & Meet The Team
 * Provides visual, locked-layout repeaters so users can easily update photos and text
 * without touching raw HTML or breaking the layout.
 *
 * @package JadeHaTheme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue Media & Scripts for Content Managers
 */
function jadeha_editorial_admin_scripts($hook) {
    global $post_type;
    if (($hook === 'post.php' || $hook === 'post-new.php') && $post_type === 'page') {
        wp_enqueue_media();
    }
}
add_action('admin_enqueue_scripts', 'jadeha_editorial_admin_scripts');

/**
 * Register Meta Boxes for Testimonials & Meet The Team
 */
function jadeha_register_editorial_metaboxes($post = null) {
    if (!$post instanceof WP_Post) {
        global $post;
    }
    if (!$post instanceof WP_Post) {
        $post_id = isset($_GET['post']) ? absint($_GET['post']) : (isset($_POST['post_ID']) ? absint($_POST['post_ID']) : 0);
        if ($post_id) {
            $post = get_post($post_id);
        }
    }
    if (!$post instanceof WP_Post) {
        return;
    }

    $template = get_post_meta($post->ID, '_wp_page_template', true);
    $slug = $post->post_name;

    // Testimonials
    if ($template === 'page-testimonials.php' || $slug === 'testimonials') {
        add_meta_box(
            'jadeha_testimonials_manager',
            __('💬 Danh Sách Cảm Nhận Khách Hàng (Testimonials Manager)', 'jadeha-theme'),
            'jadeha_render_testimonials_metabox',
            'page',
            'normal',
            'high'
        );
    }

    // Meet The Team
    if ($template === 'page-meet-the-team.php' || $slug === 'meet-the-team') {
        add_meta_box(
            'jadeha_team_manager',
            __('👥 Danh Sách Đội Ngũ Studio (Team Members Manager)', 'jadeha-theme'),
            'jadeha_render_team_metabox',
            'page',
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'jadeha_register_editorial_metaboxes');
add_action('add_meta_boxes_page', 'jadeha_register_editorial_metaboxes');

/**
 * Render Testimonials Meta Box
 */
function jadeha_render_testimonials_metabox($post) {
    wp_nonce_field('jadeha_save_testimonials_meta', 'jadeha_testimonials_nonce');
    $testimonials = get_post_meta($post->ID, '_jadeha_testimonials_data', true);
    if (!is_array($testimonials)) {
        $testimonials = array();
    }
    ?>
    <div style="padding: 10px 0;">
        <p style="font-size: 13.5px; color: #555; margin-bottom: 16px; line-height: 1.6;">
            💡 <strong>Bảo vệ bố cục:</strong> Bạn chỉ cần nhập Tên, Lời cảm nhận và bấm "Chọn ảnh chân dung". Giao diện tạp chí ngoài website đã được khóa cố định tỉ lệ chuẩn, <strong>hoàn toàn không lo bị vỡ layout</strong> dù chữ dài hay ngắn.
            <br><em>(Nếu danh sách này để trống, website sẽ tự dùng 24 cảm nhận mẫu chuẩn của Jade Ha Studio).</em>
        </p>

        <div id="jadeha-testimonials-list" style="display: flex; flex-direction: column; gap: 16px;">
            <?php foreach ($testimonials as $index => $item) : 
                $img_url = !empty($item['image']) ? $item['image'] : '';
                $name = !empty($item['name']) ? $item['name'] : '';
                $quote = !empty($item['quote']) ? $item['quote'] : '';
            ?>
            <div class="testimonial-row" style="background: #fdfdfd; border: 1px solid #ddd; border-left: 4px solid #ff9061; border-radius: 4px; padding: 16px; display: grid; grid-template-columns: 140px 1fr auto; gap: 18px; align-items: start;">
                <!-- Image Col -->
                <div style="text-align: center;">
                    <div class="img-preview" style="width: 100%; aspect-ratio: 2/3; background: #eee; border: 1px dashed #ccc; display: flex; align-items: center; justify-content: center; overflow: hidden; margin-bottom: 8px;">
                        <?php if ($img_url) : ?>
                            <img src="<?php echo esc_url($img_url); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                        <?php else : ?>
                            <span style="font-size: 11px; color: #999;">Chưa có ảnh</span>
                        <?php endif; ?>
                    </div>
                    <input type="hidden" name="jadeha_testim_image[]" value="<?php echo esc_attr($img_url); ?>" class="img-input">
                    <button type="button" class="button button-small btn-upload-image" style="width: 100%;">Chọn ảnh</button>
                </div>

                <!-- Info Col -->
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <div>
                        <label style="font-weight: 600; font-size: 12px; display: block; margin-bottom: 3px;">Tên khách hàng & Chức danh:</label>
                        <input type="text" name="jadeha_testim_name[]" value="<?php echo esc_attr($name); ?>" placeholder="Ví dụ: Michelle Beisner-Buck, ESPN" style="width: 100%;">
                    </div>
                    <div>
                        <label style="font-weight: 600; font-size: 12px; display: block; margin-bottom: 3px;">Lời cảm nhận (Review):</label>
                        <textarea name="jadeha_testim_quote[]" rows="3" placeholder="Nhập cảm nhận của khách hàng..." style="width: 100%; resize: vertical;"><?php echo esc_textarea($quote); ?></textarea>
                    </div>
                </div>

                <!-- Action Col -->
                <div>
                    <button type="button" class="button btn-remove-row" style="color: #b32d2e; border-color: #b32d2e;">Xóa</button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div style="margin-top: 20px;">
            <button type="button" class="button button-primary button-large" id="btn-add-testimonial">
                + Thêm Đánh Giá Mới
            </button>
        </div>
    </div>

    <script>
    jQuery(document).ready(function($) {
        // Upload Image
        $(document).on('click', '.btn-upload-image', function(e) {
            e.preventDefault();
            var $btn = $(this);
            var $row = $btn.closest('.testimonial-row, .team-row');
            var $preview = $row.find('.img-preview');
            var $input = $row.find('.img-input');

            var frame = wp.media({
                title: 'Chọn ảnh khách hàng',
                button: { text: 'Dùng ảnh này' },
                multiple: false
            });

            frame.on('select', function() {
                var attachment = frame.state().get('selection').first().toJSON();
                $input.val(attachment.url);
                $preview.html('<img src="' + attachment.url + '" style="width: 100%; height: 100%; object-fit: cover;">');
            });

            frame.open();
        });

        // Remove Row
        $(document).on('click', '.btn-remove-row', function() {
            if (confirm('Bạn có chắc muốn xóa mục này không?')) {
                $(this).closest('.testimonial-row, .team-row').remove();
            }
        });

        // Add Testimonial
        $('#btn-add-testimonial').on('click', function() {
            var html = `
            <div class="testimonial-row" style="background: #fdfdfd; border: 1px solid #ddd; border-left: 4px solid #ff9061; border-radius: 4px; padding: 16px; display: grid; grid-template-columns: 140px 1fr auto; gap: 18px; align-items: start;">
                <div style="text-align: center;">
                    <div class="img-preview" style="width: 100%; aspect-ratio: 2/3; background: #eee; border: 1px dashed #ccc; display: flex; align-items: center; justify-content: center; overflow: hidden; margin-bottom: 8px;">
                        <span style="font-size: 11px; color: #999;">Chưa có ảnh</span>
                    </div>
                    <input type="hidden" name="jadeha_testim_image[]" value="" class="img-input">
                    <button type="button" class="button button-small btn-upload-image" style="width: 100%;">Chọn ảnh</button>
                </div>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <div>
                        <label style="font-weight: 600; font-size: 12px; display: block; margin-bottom: 3px;">Tên khách hàng & Chức danh:</label>
                        <input type="text" name="jadeha_testim_name[]" value="" placeholder="Ví dụ: Michelle Beisner-Buck, ESPN" style="width: 100%;">
                    </div>
                    <div>
                        <label style="font-weight: 600; font-size: 12px; display: block; margin-bottom: 3px;">Lời cảm nhận (Review):</label>
                        <textarea name="jadeha_testim_quote[]" rows="3" placeholder="Nhập cảm nhận của khách hàng..." style="width: 100%; resize: vertical;"></textarea>
                    </div>
                </div>
                <div>
                    <button type="button" class="button btn-remove-row" style="color: #b32d2e; border-color: #b32d2e;">Xóa</button>
                </div>
            </div>`;
            $('#jadeha-testimonials-list').append(html);
        });
    });
    </script>
    <?php
}

/**
 * Render Meet The Team Meta Box
 */
function jadeha_render_team_metabox($post) {
    wp_nonce_field('jadeha_save_team_meta', 'jadeha_team_nonce');
    $team = get_post_meta($post->ID, '_jadeha_team_data', true);
    if (!is_array($team)) {
        $team = array();
    }
    ?>
    <div style="padding: 10px 0;">
        <p style="font-size: 13.5px; color: #555; margin-bottom: 16px; line-height: 1.6;">
            💡 <strong>Bảo vệ bố cục:</strong> Quản lý thành viên Studio dễ dàng. Bấm "Chọn ảnh", điền Tên & Chức danh và đoạn Giới thiệu. Layout tỉ lệ ảnh 5:6 và font chuẩn Ambroise/Calluna được khóa cố định, <strong>không bao giờ bị vỡ trang</strong>.
            <br><em>(Nếu danh sách này để trống, website sẽ tự dùng 3 thành viên mẫu: Jade, Karen, Lauren).</em>
        </p>

        <div id="jadeha-team-list" style="display: flex; flex-direction: column; gap: 16px;">
            <?php foreach ($team as $index => $item) : 
                $img_url = !empty($item['image']) ? $item['image'] : '';
                $name = !empty($item['name']) ? $item['name'] : '';
                $bio = !empty($item['bio']) ? $item['bio'] : '';
            ?>
            <div class="team-row" style="background: #fdfdfd; border: 1px solid #ddd; border-left: 4px solid #111; border-radius: 4px; padding: 16px; display: grid; grid-template-columns: 140px 1fr auto; gap: 18px; align-items: start;">
                <div style="text-align: center;">
                    <div class="img-preview" style="width: 100%; aspect-ratio: 5/6; background: #eee; border: 1px dashed #ccc; display: flex; align-items: center; justify-content: center; overflow: hidden; margin-bottom: 8px;">
                        <?php if ($img_url) : ?>
                            <img src="<?php echo esc_url($img_url); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                        <?php else : ?>
                            <span style="font-size: 11px; color: #999;">Chưa có ảnh</span>
                        <?php endif; ?>
                    </div>
                    <input type="hidden" name="jadeha_team_image[]" value="<?php echo esc_attr($img_url); ?>" class="img-input">
                    <button type="button" class="button button-small btn-upload-image" style="width: 100%;">Chọn ảnh</button>
                </div>

                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <div>
                        <label style="font-weight: 600; font-size: 12px; display: block; margin-bottom: 3px;">Tên thành viên & Vai trò:</label>
                        <input type="text" name="jadeha_team_name[]" value="<?php echo esc_attr($name); ?>" placeholder="Ví dụ: Jade Ha - Photographer & Retoucher" style="width: 100%;">
                    </div>
                    <div>
                        <label style="font-weight: 600; font-size: 12px; display: block; margin-bottom: 3px;">Giới thiệu (Bio):</label>
                        <textarea name="jadeha_team_bio[]" rows="3" placeholder="Đoạn văn tự giới thiệu..." style="width: 100%; resize: vertical;"><?php echo esc_textarea($bio); ?></textarea>
                    </div>
                </div>

                <div>
                    <button type="button" class="button btn-remove-row" style="color: #b32d2e; border-color: #b32d2e;">Xóa</button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div style="margin-top: 20px;">
            <button type="button" class="button button-primary button-large" id="btn-add-team-member">
                + Thêm Thành Viên Mới
            </button>
        </div>
    </div>

    <script>
    jQuery(document).ready(function($) {
        $('#btn-add-team-member').on('click', function() {
            var html = `
            <div class="team-row" style="background: #fdfdfd; border: 1px solid #ddd; border-left: 4px solid #111; border-radius: 4px; padding: 16px; display: grid; grid-template-columns: 140px 1fr auto; gap: 18px; align-items: start;">
                <div style="text-align: center;">
                    <div class="img-preview" style="width: 100%; aspect-ratio: 5/6; background: #eee; border: 1px dashed #ccc; display: flex; align-items: center; justify-content: center; overflow: hidden; margin-bottom: 8px;">
                        <span style="font-size: 11px; color: #999;">Chưa có ảnh</span>
                    </div>
                    <input type="hidden" name="jadeha_team_image[]" value="" class="img-input">
                    <button type="button" class="button button-small btn-upload-image" style="width: 100%;">Chọn ảnh</button>
                </div>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <div>
                        <label style="font-weight: 600; font-size: 12px; display: block; margin-bottom: 3px;">Tên thành viên & Vai trò:</label>
                        <input type="text" name="jadeha_team_name[]" value="" placeholder="Ví dụ: Jade Ha - Photographer & Retoucher" style="width: 100%;">
                    </div>
                    <div>
                        <label style="font-weight: 600; font-size: 12px; display: block; margin-bottom: 3px;">Giới thiệu (Bio):</label>
                        <textarea name="jadeha_team_bio[]" rows="3" placeholder="Đoạn văn tự giới thiệu..." style="width: 100%; resize: vertical;"></textarea>
                    </div>
                </div>
                <div>
                    <button type="button" class="button btn-remove-row" style="color: #b32d2e; border-color: #b32d2e;">Xóa</button>
                </div>
            </div>`;
            $('#jadeha-team-list').append(html);
        });
    });
    </script>
    <?php
}

/**
 * Save Meta Box Data
 */
function jadeha_save_editorial_meta($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Save Testimonials
    if (isset($_POST['jadeha_testimonials_nonce']) && wp_verify_nonce($_POST['jadeha_testimonials_nonce'], 'jadeha_save_testimonials_meta')) {
        $images = isset($_POST['jadeha_testim_image']) ? (array)$_POST['jadeha_testim_image'] : array();
        $names  = isset($_POST['jadeha_testim_name']) ? (array)$_POST['jadeha_testim_name'] : array();
        $quotes = isset($_POST['jadeha_testim_quote']) ? (array)$_POST['jadeha_testim_quote'] : array();

        $data = array();
        for ($i = 0; $i < count($names); $i++) {
            if (!empty(trim($names[$i])) || !empty(trim($quotes[$i])) || !empty($images[$i])) {
                $data[] = array(
                    'image' => esc_url_raw($images[$i]),
                    'name'  => sanitize_text_field($names[$i]),
                    'quote' => sanitize_textarea_field($quotes[$i]),
                );
            }
        }
        update_post_meta($post_id, '_jadeha_testimonials_data', $data);
    }

    // Save Team
    if (isset($_POST['jadeha_team_nonce']) && wp_verify_nonce($_POST['jadeha_team_nonce'], 'jadeha_save_team_meta')) {
        $images = isset($_POST['jadeha_team_image']) ? (array)$_POST['jadeha_team_image'] : array();
        $names  = isset($_POST['jadeha_team_name']) ? (array)$_POST['jadeha_team_name'] : array();
        $bios   = isset($_POST['jadeha_team_bio']) ? (array)$_POST['jadeha_team_bio'] : array();

        $data = array();
        for ($i = 0; $i < count($names); $i++) {
            if (!empty(trim($names[$i])) || !empty(trim($bios[$i])) || !empty($images[$i])) {
                $data[] = array(
                    'image' => esc_url_raw($images[$i]),
                    'name'  => sanitize_text_field($names[$i]),
                    'bio'   => sanitize_textarea_field($bios[$i]),
                );
            }
        }
        update_post_meta($post_id, '_jadeha_team_data', $data);
    }
}
add_action('save_post', 'jadeha_save_editorial_meta');

