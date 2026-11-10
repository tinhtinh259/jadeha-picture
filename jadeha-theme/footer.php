<?php
/**
 * The template for displaying the footer
 *
 * @package JadeHaTheme
 */
?>
</main><!-- #primary -->

<?php if (!is_front_page() && !is_page('portfolio') && !is_page_template('page-portfolio.php')): ?>
<!-- ================= 3-COLUMN WHITE FOOTER (EXACT JADE HA) ================= -->
<footer class="border-t border-zinc-200 py-16 px-6 max-w-[1108px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center text-[#222222] items-center font-calluna">
    <div>
        <p class="font-bold italic text-sm mb-1">Contact</p>
        <a href="mailto:<?php echo esc_attr(get_theme_mod('jadeha_email', 'jadehastudio@gmail.com')); ?>" class="text-xs hover:text-[#ff9061] transition-colors"><?php echo esc_html(get_theme_mod('jadeha_email', 'jadehastudio@gmail.com')); ?></a>
    </div>
    <div>
        <p class="font-ambroise text-lg tracking-[0.2em] mb-3">— &nbsp;JADE HA &nbsp;—</p>
        <div class="flex items-center justify-center space-x-4">
            <a href="<?php echo esc_url(get_theme_mod('jadeha_instagram', 'https://www.instagram.com/jadeha_studio_sg/')); ?>" target="_blank" rel="noopener" aria-label="Instagram" class="text-[#222222] hover:text-[#ff9061] transition-colors">
                <svg viewBox="17 17 30 30" class="w-[18px] h-[18px] fill-current">
                    <path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c-0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"></path>
                </svg>
            </a>
            <a href="<?php echo esc_url(get_theme_mod('jadeha_facebook', 'https://www.facebook.com/jadehastudio/')); ?>" target="_blank" rel="noopener" aria-label="Facebook" class="text-[#222222] hover:text-[#ff9061] transition-colors">
                <svg viewBox="0 0 24 24" class="w-[18px] h-[18px] fill-current">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                </svg>
            </a>
        </div>
    </div>
    <div>
        <p class="font-bold italic text-sm mb-1">Hours</p>
        <p class="italic text-xs text-zinc-600"><?php echo esc_html(get_theme_mod('jadeha_hours', 'by appointment only')); ?></p>
    </div>
</footer>
<?php endif; ?>

<?php wp_footer(); ?>
<script src="<?php echo esc_url(get_template_directory_uri() . '/assets/js/header-nav.js'); ?>"></script>
</body>
</html>
