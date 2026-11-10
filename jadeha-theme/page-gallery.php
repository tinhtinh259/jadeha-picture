<?php
/**
 * Template Name: Portfolio Category Gallery
 * Template Post Type: page
 *
 * @package JadeHaTheme
 */

get_header();

$slug = get_post_field('post_name', get_post());
?>

<div class="pt-36 pb-24 max-w-6xl mx-auto px-6 bg-black text-white font-sans antialiased">
    <div class="text-center mb-12">
      <h1 class="font-calluna text-3xl sm:text-4xl uppercase tracking-widest text-white"><?php the_title(); ?></h1>
      <div class="flex justify-center space-x-6 text-xs uppercase tracking-widest text-zinc-500 mt-4">
        <a href="<?php echo esc_url(home_url('/fashion/')); ?>" class="<?php echo $slug === 'fashion' ? 'text-white border-b border-white pb-1' : 'hover:text-white'; ?>">Fashion</a>
        <a href="<?php echo esc_url(home_url('/couples/')); ?>" class="<?php echo $slug === 'couples' ? 'text-white border-b border-white pb-1' : 'hover:text-white'; ?>">Couples</a>
        <a href="<?php echo esc_url(home_url('/portraits/')); ?>" class="<?php echo $slug === 'portraits' ? 'text-white border-b border-white pb-1' : 'hover:text-white'; ?>">Portraits</a>
        <a href="<?php echo esc_url(home_url('/branding/')); ?>" class="<?php echo $slug === 'branding' ? 'text-white border-b border-white pb-1' : 'hover:text-white'; ?>">Branding</a>
        <a href="<?php echo esc_url(home_url('/maternity/')); ?>" class="<?php echo $slug === 'maternity' ? 'text-white border-b border-white pb-1' : 'hover:text-white'; ?>">Maternity</a>
        <a href="<?php echo esc_url(home_url('/boudoir/')); ?>" class="<?php echo $slug === 'boudoir' ? 'text-white border-b border-white pb-1' : 'hover:text-white'; ?>">Boudoir</a>
      </div>
    </div>

    <!-- Editorial Image Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="aspect-[3/4] overflow-hidden bg-zinc-950">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery/jade-haworkshopsSTL.jpg'); ?>" alt="Gallery Image" class="w-full h-full object-cover">
      </div>
      <div class="aspect-[3/4] overflow-hidden bg-zinc-950">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery/jade-haphotographyworkshop.jpg'); ?>" alt="Gallery Image" class="w-full h-full object-cover">
      </div>
      <div class="aspect-[3/4] overflow-hidden bg-zinc-950">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery/beautifulwomancurvyphotoshoot.jpg'); ?>" alt="Gallery Image" class="w-full h-full object-cover">
      </div>
      <div class="aspect-[3/4] overflow-hidden bg-zinc-950">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery/fashionportraitswomenstlouis.jpg'); ?>" alt="Gallery Image" class="w-full h-full object-cover">
      </div>
      <div class="aspect-[3/4] overflow-hidden bg-zinc-950">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery/mommyandmephotoshootstlouis.jpg'); ?>" alt="Gallery Image" class="w-full h-full object-cover">
      </div>
      <div class="aspect-[3/4] overflow-hidden bg-zinc-950">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/courtney-kerr-photoshoot-jade.jpg'); ?>" alt="Gallery Image" class="w-full h-full object-cover">
      </div>
    </div>
</div>

<?php
get_footer();

