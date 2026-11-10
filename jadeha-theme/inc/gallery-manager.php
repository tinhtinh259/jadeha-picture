<?php
/**
 * Studio Media Gallery Manager for Pages
 * Allows studio owners to easily upload, reorder, and remove gallery photos directly from WordPress Media Library
 *
 * @package JadeHaTheme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue Media Scripts and Styles in Admin Page Edit Screen
 */
function jadeha_admin_gallery_scripts($hook) {
    global $post_type;
    if (($hook === 'post.php' || $hook === 'post-new.php') && $post_type === 'page') {
        wp_enqueue_media();
        wp_enqueue_script('jquery-ui-sortable');
    }
}
add_action('admin_enqueue_scripts', 'jadeha_admin_gallery_scripts');

/**
 * Register Gallery Meta Box for Pages
 */
function jadeha_register_gallery_metabox() {
    add_meta_box(
        'jadeha_page_gallery',
        __('📸 Bộ Sưu Tập Ảnh Studio (Media Gallery)', 'jadeha-theme'),
        'jadeha_render_gallery_metabox',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'jadeha_register_gallery_metabox');

/**
 * Render Gallery Meta Box HTML
 */
function jadeha_render_gallery_metabox($post) {
    wp_nonce_field('jadeha_save_gallery_meta', 'jadeha_gallery_nonce');

    $gallery_ids_str = get_post_meta($post->ID, '_jadeha_gallery_image_ids', true);
    $gallery_ids = !empty($gallery_ids_str) ? array_filter(array_map('absint', explode(',', $gallery_ids_str))) : array();
    ?>
    <div id="jadeha-gallery-meta-wrapper" style="padding: 10px 0;">
        <p style="font-size: 13.5px; color: #555; margin-bottom: 14px;">
            Quản lý các tác phẩm trong bộ sưu tập này. Bấm <strong>Thêm / Quản lý ảnh</strong> để chọn nhiều ảnh từ Thư viện Media (hoặc tải ảnh mới từ máy tính). Bạn có thể <strong>kéo thả ảnh</strong> để thay đổi thứ tự hiển thị ngoài website.
        </p>

        <!-- Action Buttons -->
        <div style="margin-bottom: 18px; display: flex; align-items: center; gap: 10px;">
            <button type="button" class="button button-primary button-large" id="jadeha_add_gallery_images" style="display: inline-flex; align-items: center;">
                <span class="dashicons dashicons-images-alt2" style="margin-right: 6px; font-size: 18px; line-height: 1;"></span>
                Thêm / Quản lý ảnh từ Thư viện
            </button>
            <button type="button" class="button button-secondary" id="jadeha_clear_gallery_images" style="color: #b32d2e; border-color: #b32d2e;" <?php echo empty($gallery_ids) ? 'disabled' : ''; ?>>
                Xoá tất cả ảnh
            </button>
            <span id="jadeha_gallery_count" style="font-size: 13px; color: #666; margin-left: 10px;">
                (Đang có <strong><?php echo count($gallery_ids); ?></strong> ảnh)
            </span>
        </div>

        <!-- Hidden input storing comma-separated IDs -->
        <input type="hidden" name="jadeha_gallery_image_ids" id="jadeha_gallery_image_ids" value="<?php echo esc_attr(implode(',', $gallery_ids)); ?>">

        <!-- Image Thumbnails Grid -->
        <div id="jadeha_gallery_preview_container" style="display: flex; flex-wrap: wrap; gap: 12px; min-height: 80px; padding: 12px; background: #f9f9f9; border: 2px dashed #ddd; border-radius: 6px;">
            <?php
            if (!empty($gallery_ids)) {
                foreach ($gallery_ids as $id) {
                    $thumb_url = wp_get_attachment_image_url($id, 'thumbnail');
                    if (!$thumb_url) continue;
                    ?>
                    <div class="jadeha-thumb-item" data-id="<?php echo esc_attr($id); ?>" style="position: relative; width: 100px; height: 100px; border-radius: 4px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.15); cursor: grab; background: #fff;">
                        <img src="<?php echo esc_url($thumb_url); ?>" style="width: 100%; height: 100%; object-fit: cover; display: block; pointer-events: none;">
                        <button type="button" class="jadeha-remove-btn" title="Xoá ảnh này" style="position: absolute; top: 3px; right: 3px; background: rgba(0,0,0,0.7); color: #fff; border: none; width: 22px; height: 22px; border-radius: 50%; cursor: pointer; font-size: 14px; line-height: 1; display: flex; align-items: center; justify-content: center; transition: background 0.2s;">&times;</button>
                    </div>
                    <?php
                }
            }
            ?>
        </div>

        <p id="jadeha_gallery_empty_notice" style="display: <?php echo empty($gallery_ids) ? 'block' : 'none'; ?>; color: #888; font-style: italic; margin-top: 10px;">
            💡 Chưa có ảnh nào được tải lên cho trang này. Website sẽ tự động hiển thị <strong>bộ ảnh mẫu demo</strong> tuyệt đẹp ban đầu.
        </p>
    </div>

    <!-- Admin Interactive Script -->
    <script>
    jQuery(document).ready(function($) {
        var frame;
        var $container = $('#jadeha_gallery_preview_container');
        var $hiddenInput = $('#jadeha_gallery_image_ids');
        var $countSpan = $('#jadeha_gallery_count');
        var $clearBtn = $('#jadeha_clear_gallery_images');
        var $emptyNotice = $('#jadeha_gallery_empty_notice');

        function updateIds() {
            var ids = [];
            $container.find('.jadeha-thumb-item').each(function() {
                var id = $(this).data('id');
                if (id) ids.push(id);
            });
            $hiddenInput.val(ids.join(','));
            $countSpan.html('(Đang có <strong>' + ids.length + '</strong> ảnh)');

            if (ids.length > 0) {
                $clearBtn.prop('disabled', false);
                $emptyNotice.hide();
            } else {
                $clearBtn.prop('disabled', true);
                $emptyNotice.show();
            }
        }

        // Enable Drag & Drop Sortable
        if (typeof $container.sortable === 'function') {
            $container.sortable({
                items: '.jadeha-thumb-item',
                cursor: 'grabbing',
                scroll: true,
                placeholder: 'jadeha-sortable-placeholder',
                update: function() {
                    updateIds();
                }
            });
        }

        // Open WP Media Modal
        $('#jadeha_add_gallery_images').on('click', function(e) {
            e.preventDefault();

            if (frame) {
                frame.open();
                return;
            }

            frame = wp.media({
                title: 'Chọn ảnh cho Bộ sưu tập Studio',
                button: { text: 'Thêm vào Bộ sưu tập' },
                multiple: true,
                library: { type: 'image' }
            });

            frame.on('select', function() {
                var selection = frame.state().get('selection');
                selection.map(function(attachment) {
                    attachment = attachment.toJSON();
                    var id = attachment.id;

                    // Avoid duplicate
                    if ($container.find('.jadeha-thumb-item[data-id="' + id + '"]').length > 0) {
                        return;
                    }

                    var thumbUrl = (attachment.sizes && attachment.sizes.thumbnail) ? attachment.sizes.thumbnail.url : attachment.url;

                    var html = '<div class="jadeha-thumb-item" data-id="' + id + '" style="position: relative; width: 100px; height: 100px; border-radius: 4px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,0.15); cursor: grab; background: #fff;">' +
                        '<img src="' + thumbUrl + '" style="width: 100%; height: 100%; object-fit: cover; display: block; pointer-events: none;">' +
                        '<button type="button" class="jadeha-remove-btn" title="Xoá ảnh này" style="position: absolute; top: 3px; right: 3px; background: rgba(0,0,0,0.7); color: #fff; border: none; width: 22px; height: 22px; border-radius: 50%; cursor: pointer; font-size: 14px; line-height: 1; display: flex; align-items: center; justify-content: center; transition: background 0.2s;">&times;</button>' +
                        '</div>';

                    $container.append(html);
                });

                updateIds();
            });

            frame.open();
        });

        // Remove Single Image
        $container.on('click', '.jadeha-remove-btn', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).closest('.jadeha-thumb-item').fadeOut(200, function() {
                $(this).remove();
                updateIds();
            });
        });

        // Hover effect for remove button
        $container.on('mouseenter', '.jadeha-remove-btn', function() {
            $(this).css('background', '#b32d2e');
        }).on('mouseleave', '.jadeha-remove-btn', function() {
            $(this).css('background', 'rgba(0,0,0,0.7)');
        });

        // Clear All Images
        $clearBtn.on('click', function(e) {
            e.preventDefault();
            if (confirm('Bạn có chắc chắn muốn xoá tất cả ảnh khỏi bộ sưu tập này? (Thao tác này chỉ gỡ ảnh khỏi album, không xoá ảnh trong Thư viện Media)')) {
                $container.empty();
                updateIds();
            }
        });
    });
    </script>
    <style>
        .jadeha-sortable-placeholder {
            width: 100px;
            height: 100px;
            background: #e5e5e5;
            border: 2px dashed #999;
            border-radius: 4px;
            visibility: visible !important;
        }
    </style>
    <?php
}

/**
 * Save Gallery Meta Data
 */
function jadeha_save_gallery_metabox($post_id) {
    if (!isset($_POST['jadeha_gallery_nonce']) || !wp_verify_nonce($_POST['jadeha_gallery_nonce'], 'jadeha_save_gallery_meta')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_page', $post_id)) {
        return;
    }

    if (isset($_POST['jadeha_gallery_image_ids'])) {
        $raw_ids = sanitize_text_field($_POST['jadeha_gallery_image_ids']);
        $ids = array_filter(array_map('absint', explode(',', $raw_ids)));
        update_post_meta($post_id, '_jadeha_gallery_image_ids', implode(',', $ids));
    }
}
add_action('save_post_page', 'jadeha_save_gallery_metabox');

/**
 * Intelligent Proportional Responsive Gallery Renderer for Frontend
 * Calculates exact mathematical aspect-ratio balanced row widths with zero gap
 *
 * @param array $ids Array of attachment IDs
 */
function jadeha_render_gallery_from_ids($ids) {
    if (empty($ids) || !is_array($ids)) {
        return;
    }

    $items = array();
    foreach ($ids as $id) {
        $meta = wp_get_attachment_metadata($id);
        $w = (!empty($meta['width']) && is_numeric($meta['width'])) ? (int)$meta['width'] : 1200;
        $h = (!empty($meta['height']) && is_numeric($meta['height'])) ? (int)$meta['height'] : 800;
        $ratio = ($h > 0) ? ($w / $h) : 1.5;

        $url = wp_get_attachment_image_url($id, 'full');
        if (!$url) continue;

        $alt = get_post_meta($id, '_wp_attachment_image_alt', true);
        if (!$alt) $alt = get_the_title($id);

        $items[] = array(
            'id'      => $id,
            'url'     => $url,
            'alt'     => $alt,
            'w'       => $w,
            'h'       => $h,
            'ratio'   => $ratio,
            'is_wide' => ($ratio >= 1.35), // Wide landscape takes 100% full width row
        );
    }

    $count = count($items);
    if ($count === 0) return;

    $i = 0;
    echo '<div class="w-full m-0 p-0 block">';

    while ($i < $count) {
        $curr = $items[$i];

        // 1. If it's a wide banner image or the last odd item, display as 100% full-width
        if ($curr['is_wide'] || $i === $count - 1) {
            ?>
            <div class="flex w-full m-0 p-0 items-stretch">
                <div style="width: 100%;" class="overflow-hidden m-0 p-0 block">
                    <img src="<?php echo esc_url($curr['url']); ?>" alt="<?php echo esc_attr($curr['alt']); ?>" loading="<?php echo ($i < 2 ? 'eager' : 'lazy'); ?>" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
                </div>
            </div>
            <?php
            $i++;
        } else {
            // 2. Pair with the next image using exact mathematical proportion to ensure identical row height
            $next = $items[$i + 1];
            $r1 = $curr['ratio'];
            $r2 = $next['ratio'];
            $pct1 = round(($r1 / ($r1 + $r2)) * 100, 4);
            $pct2 = round(100 - $pct1, 4);
            ?>
            <div class="flex w-full m-0 p-0 items-stretch">
                <div style="width: <?php echo $pct1; ?>%;" class="overflow-hidden m-0 p-0 block">
                    <img src="<?php echo esc_url($curr['url']); ?>" alt="<?php echo esc_attr($curr['alt']); ?>" loading="<?php echo ($i < 2 ? 'eager' : 'lazy'); ?>" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
                </div>
                <div style="width: <?php echo $pct2; ?>%;" class="overflow-hidden m-0 p-0 block">
                    <img src="<?php echo esc_url($next['url']); ?>" alt="<?php echo esc_attr($next['alt']); ?>" loading="<?php echo ($i < 2 ? 'eager' : 'lazy'); ?>" class="w-full h-auto block m-0 p-0 transform hover:scale-[1.01] transition-transform duration-500">
                </div>
            </div>
            <?php
            $i += 2;
        }
    }

    echo '</div>';
}

