<?php
/**
 * Template Name: Meet The Team
 * Template Post Type: page
 *
 * @package JadeHaTheme
 */

get_header();
?>

<!-- ================= MAIN TEAM EDITORIAL (EXACT JADE HA 1:1) ================= -->
<main class="pt-28 sm:pt-36 pb-20 max-w-[1108px] mx-auto px-6">
  <?php
  if (have_posts()) :
      while (have_posts()) : the_post();
          $page_content = get_the_content();
          if (!empty(trim($page_content))) :
              the_content();
          else :
  ?>
  <div class="space-y-16 md:space-y-20 mb-20 md:mb-28">
    
    <!-- 1. JADE -->
    <article class="grid grid-cols-1 md:grid-cols-10 gap-8 md:gap-12 items-center">
      <div class="md:col-span-4 aspect-[5/6] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/meet-the-team/jade-ha-405.jpg'); ?>" alt="Jade Ha - Photographer &amp; Retoucher" class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="md:col-span-6 flex flex-col justify-center">
        <h3 class="font-calluna font-bold text-[15px] tracking-[0.45px] uppercase text-[#333333] mb-3">Jade Ha - Photographer &amp; Retoucher</h3>
        <p class="font-calluna text-[15px] leading-[2.3] tracking-[0.45px] text-[#000000]">
          Hi, I’m Jade! I’ve been photographing women for more than a decade, and I still love that every shoot gives us the chance to create something completely different. I’m incredibly hands-on, obsessed with the details, and I’ll guide you through every pose and expression so you never have to wonder what to do in front of the camera. I want your day to feel creative, collaborative, and entirely too much fun. I can’t wait to work with you!
        </p>
      </div>
    </article>

    <!-- 2. KAREN -->
    <article class="grid grid-cols-1 md:grid-cols-10 gap-8 md:gap-12 items-center">
      <div class="md:col-span-4 aspect-[5/6] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/meet-the-team/webjade_4473-edit.jpg'); ?>" alt="Karen - Booking Concierge" class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="md:col-span-6 flex flex-col justify-center">
        <h3 class="font-calluna font-bold text-[15px] tracking-[0.45px] uppercase text-[#333333] mb-3">Karen - Booking Concierge</h3>
        <p class="font-calluna text-[15px] leading-[2.3] tracking-[0.45px] text-[#000000]">
          Hi! I’m Karen and I’m here to walk you through the process of planning your luxe portrait experience. I will keep you on point to make sure every detail is covered, so your day of pampering can be just that. Looking forward to working with you and seeing your gorgeous photos soon!
        </p>
      </div>
    </article>

    <!-- 3. LAUREN -->
    <article class="grid grid-cols-1 md:grid-cols-10 gap-8 md:gap-12 items-center">
      <div class="md:col-span-4 aspect-[5/6] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/meet-the-team/Screenshot+2025-04-02+at+6.32.45%E2%80%AFPM.png'); ?>" alt="Lauren - Shoot Assistant" class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="md:col-span-6 flex flex-col justify-center">
        <h3 class="font-calluna font-bold text-[15px] tracking-[0.45px] uppercase text-[#333333] mb-3">Lauren - Shoot Assistant</h3>
        <p class="font-calluna text-[15px] leading-[2.3] tracking-[0.45px] text-[#000000]">
          Hey friends! I'm Lauren, and I can't wait to assist you during your shoot. I'll be there to make the day fun, comfortable, and provide help to you and Jade any way I can to elevate your entire experience. (I’m also a videographer, so don't mind me while I capture some beautiful behind the scenes footage for you!) I'm so excited for the opportunity to work with you while Jade creates beautiful moments that will last a lifetime!
        </p>
      </div>
    </article>

  </div>
  <?php
          endif;
      endwhile;
  endif;
  ?>
</main>

<!-- ================= 3-COLUMN WHITE FOOTER (EXACT JADE HA) ================= -->
<footer class="border-t border-zinc-200 py-16 px-6 max-w-[1108px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center text-[#222222] items-center">
  <div>
    <p class="font-calluna font-bold italic text-sm mb-1">Contact</p>
    <a href="mailto:jadehastudio@gmail.com" class="font-calluna text-xs hover:text-[#ff9061] transition-colors">jadehastudio@gmail.com</a>
  </div>
  <div>
    <p class="font-ambroise text-lg tracking-[0.2em] mb-3">— JADE HA —</p>
    <div class="flex items-center justify-center space-x-4">
      <a href="https://www.instagram.com/jadeha_studio_sg/" target="_blank" rel="noopener" aria-label="Instagram" class="text-[#222222] hover:text-[#ff9061] transition-colors">
        <svg viewBox="17 17 30 30" class="w-[18px] h-[18px] fill-current">
          <path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"></path>
        </svg>
      </a>
      <a href="https://www.facebook.com/jadehastudio/" target="_blank" rel="noopener" aria-label="Facebook" class="text-[#222222] hover:text-[#ff9061] transition-colors">
        <svg viewBox="0 0 24 24" class="w-[18px] h-[18px] fill-current">
          <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
        </svg>
      </a>
    </div>
  </div>
  <div>
    <p class="font-calluna font-bold italic text-sm mb-1">Hours</p>
    <p class="font-calluna italic text-xs text-zinc-600">by appointment only</p>
  </div>
</footer>

<?php
get_footer();
