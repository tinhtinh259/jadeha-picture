<?php
/**
 * The template for displaying the Homepage (1:1 Exact Jade Ha Clone)
 * Fullscreen Video Cover with Center Gateways: SHOOTS | JADE | CONTACT
 *
 * @package JadeHaTheme
 */

get_header();

$tagline   = get_theme_mod('jadeha_tagline', 'luxury portrait & fashion studio');
$hero_img  = get_theme_mod('jadeha_hero_image', '');
if (empty($hero_img)) {
    $hero_img = get_template_directory_uri() . '/assets/images/home.jpg';
}

$btn1_text = get_theme_mod('jadeha_home_btn1_text', 'SHOOTS');
$btn1_url  = get_theme_mod('jadeha_home_btn1_url', '');
if (empty($btn1_url)) $btn1_url = home_url('/luxury-photoshoot/');

$btn2_text = get_theme_mod('jadeha_home_btn2_text', 'JADE');
$btn2_url  = get_theme_mod('jadeha_home_btn2_url', '');
if (empty($btn2_url)) $btn2_url = home_url('/lovejade/');

$btn3_text = get_theme_mod('jadeha_home_btn3_text', 'CONTACT');
$btn3_url  = get_theme_mod('jadeha_home_btn3_url', '');
if (empty($btn3_url)) $btn3_url = home_url('/contact/');
?>

<!-- ================= FULLSCREEN HERO INDEX (EXACT 1:1 JADE HA HOMEPAGE) ================= -->
<section id="hero-index" class="relative h-screen w-full flex flex-col justify-between items-center overflow-hidden select-none" style="background-color: #2b2421;">
    
    <!-- Background Image Container (Solid #2b2421 fallback & vignette) -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none" style="background-color: #2b2421;">
        <img src="<?php echo esc_url($hero_img); ?>" alt="Jade Ha Picture Studio" class="absolute inset-0 w-full h-full object-cover opacity-90">
        
        <!-- Warm Vignette Overlay matching #2b2421 -->
        <div class="absolute inset-0" style="background: rgba(43, 36, 33, 0.35);"></div>
    </div>

    <!-- Top Spacer to compensate for fixed header -->
    <div class="w-full h-24"></div>

    <!-- Center Content: Tagline + 3 Gateways (SHOOTS | JADE | CONTACT) -->
    <div class="relative z-10 text-center px-4 sm:px-6 w-full max-w-[1400px] mx-auto my-auto">
        
        <!-- Tagline (Exact styling from jadehastudio.com: Calluna 18px Italic) -->
        <p class="collection-desc mb-6 sm:mb-8 text-white/90">
            <?php echo esc_html($tagline); ?>
        </p>

        <!-- The 3 Core Navigation Links: Fluid responsive, stays on 1 line on desktop -->
        <nav class="flex flex-wrap lg:flex-nowrap items-center justify-center gap-4 sm:gap-6 md:gap-8 lg:gap-10 xl:gap-14">
            <a href="<?php echo esc_url($btn1_url); ?>" class="ambroise-giant-link">
                <?php echo esc_html($btn1_text); ?>
            </a>

            <a href="<?php echo esc_url($btn2_url); ?>" class="ambroise-giant-link">
                <?php echo esc_html($btn2_text); ?>
            </a>

            <a href="<?php echo esc_url($btn3_url); ?>" class="ambroise-giant-link">
                <?php echo esc_html($btn3_text); ?>
            </a>
        </nav>

    </div>

    <!-- Bottom Location -->
    <div class="relative z-10 pb-6 text-center text-xs tracking-widest text-white/40 uppercase">
        <?php echo esc_html(get_theme_mod('jadeha_copyright', 'Jade Ha Studio - Photography')); ?>
    </div>

</section>


<?php
get_footer();
