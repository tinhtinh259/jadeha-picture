<?php
/**
 * Template Name: Workshops
 * Template Post Type: page
 *
 * @package JadeHaTheme
 */

get_header();
?>

<!-- ================= WORKSHOPS MAIN CONTENT ================= -->
<main class="pt-36 pb-24 max-w-4xl mx-auto px-6 text-center">
  <?php
  if (have_posts()) :
      while (have_posts()) : the_post();
          $page_content = get_the_content();
          if (!empty(trim($page_content))) :
              the_content();
          else :
  ?>
  <h1 class="font-calluna text-4xl sm:text-5xl uppercase tracking-widest text-white mb-6">WORKSHOPS</h1>
  <p class="font-calluna italic text-xl text-zinc-300 max-w-xl mx-auto mb-12">
    Intimate group workshops in Dallas &amp; St. Louis with live model shoots, high-fashion styling, and lighting masterclasses.
  </p>
  <div class="border border-white/20 p-8 sm:p-12 max-w-2xl mx-auto text-left space-y-6 text-zinc-300 text-sm font-light">
    <h3 class="font-calluna text-2xl text-white uppercase text-center mb-4">UPCOMING SESSIONS:</h3>
    <p>• Dallas Studio Masterclass (Spring)</p>
    <p>• St. Louis Editorial Lighting Retreat (Fall)</p>
    <div class="text-center pt-6">
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="inline-block px-8 py-3 border border-white text-xs uppercase tracking-widest hover:bg-white hover:text-black transition-all">Join The Waitlist</a>
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

