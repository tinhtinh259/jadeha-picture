<?php
/**
 * Template Name: Photographers Store (Templates & Presets)
 * Template Post Type: page
 *
 * @package JadeHaTheme
 */

get_header();
?>

<!-- ================= STORE MAIN CONTENT ================= -->
<main class="pt-36 pb-24 max-w-6xl mx-auto px-6">
  <?php
  if (have_posts()) :
      while (have_posts()) : the_post();
          $page_content = get_the_content();
          if (!empty(trim($page_content))) :
              the_content();
          else :
  ?>
  <div class="text-center mb-16">
    <h1 class="font-calluna text-4xl sm:text-5xl uppercase tracking-widest text-white mb-4">
      TEMPLATES &amp; PRESETS
    </h1>
    <p class="font-calluna italic text-zinc-400 text-lg">Signature resources for luxury portrait photographers</p>
  </div>

  <!-- Products Grid -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <div class="bg-zinc-950 p-6 border border-white/10 text-center">
      <div class="aspect-square bg-zinc-900 mb-4 overflow-hidden">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/store/photographypricingguide.jpg'); ?>" alt="Pricing Guide" class="w-full h-full object-cover">
      </div>
      <h3 class="font-calluna text-lg text-white uppercase tracking-wider mb-2">Luxury Pricing Guide Template</h3>
      <p class="text-zinc-400 text-xs mb-4">$149.00</p>
      <button class="px-6 py-2 border border-white text-xs uppercase tracking-widest hover:bg-white hover:text-black transition-all">View Details</button>
    </div>

    <div class="bg-zinc-950 p-6 border border-white/10 text-center">
      <div class="aspect-square bg-zinc-900 mb-4 overflow-hidden">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/store/photographerpricingguide.jpg'); ?>" alt="Editorial Presets" class="w-full h-full object-cover">
      </div>
      <h3 class="font-calluna text-lg text-white uppercase tracking-wider mb-2">Editorial Collection LR Presets</h3>
      <p class="text-zinc-400 text-xs mb-4">$89.00</p>
      <button class="px-6 py-2 border border-white text-xs uppercase tracking-widest hover:bg-white hover:text-black transition-all">View Details</button>
    </div>

    <div class="bg-zinc-950 p-6 border border-white/10 text-center">
      <div class="aspect-square bg-zinc-900 mb-4 overflow-hidden">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/store/pricingguideportraitphotographers.jpg'); ?>" alt="Client Welcome Packet" class="w-full h-full object-cover">
      </div>
      <h3 class="font-calluna text-lg text-white uppercase tracking-wider mb-2">Client Welcome Packet Template</h3>
      <p class="text-zinc-400 text-xs mb-4">$129.00</p>
      <button class="px-6 py-2 border border-white text-xs uppercase tracking-widest hover:bg-white hover:text-black transition-all">View Details</button>
    </div>
  </div>
  <?php
          endif;
      endwhile;
  endif;
  ?>
</main>

<?php
get_footer();
