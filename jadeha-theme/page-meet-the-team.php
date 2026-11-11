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
          $custom_team = get_post_meta(get_the_ID(), '_jadeha_team_data', true);
          if (!empty($custom_team) && is_array($custom_team)) :
  ?>
  <div class="space-y-16 md:space-y-20 mb-20 md:mb-28">
    <?php foreach ($custom_team as $member) : 
        $img = !empty($member['image']) ? $member['image'] : get_template_directory_uri() . '/assets/images/meet-the-team/jade-ha-405.jpg';
        $name = !empty($member['name']) ? $member['name'] : '';
        $bio  = !empty($member['bio']) ? $member['bio'] : '';
    ?>
    <article class="grid grid-cols-1 md:grid-cols-10 gap-8 md:gap-12 items-center">
      <div class="md:col-span-4 aspect-[5/6] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($name); ?>" class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="md:col-span-6 flex flex-col justify-center">
        <h3 class="font-calluna font-bold text-[15px] tracking-[0.45px] uppercase text-[#333333] mb-3"><?php echo esc_html($name); ?></h3>
        <p class="font-calluna text-[15px] leading-[2.3] tracking-[0.45px] text-[#000000]">
          <?php echo nl2br(esc_html($bio)); ?>
        </p>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
  <?php
          elseif (!empty(trim(get_the_content()))) :
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
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/meet-the-team/lauren-shoot-assistant.png'); ?>" alt="Lauren - Shoot Assistant" class="w-full h-full object-cover object-center" loading="lazy">
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

<?php
get_footer();
