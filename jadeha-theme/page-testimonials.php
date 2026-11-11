<?php
/**
 * Template Name: Testimonials (Cảm Nhận)
 * Template Post Type: page
 *
 * @package JadeHaTheme
 */

get_header();
?>

<!-- ================= MAIN EDITORIAL TESTIMONIALS (EXACT JADE HA 1:1) ================= -->
<main class="pt-28 sm:pt-36 pb-20 max-w-[1250px] mx-auto px-6">
  <?php
  if (have_posts()) :
      while (have_posts()) : the_post();
          $custom_testimonials = get_post_meta(get_the_ID(), '_jadeha_testimonials_data', true);
          if (!empty($custom_testimonials) && is_array($custom_testimonials)) :
  ?>
  <div class="space-y-20 md:space-y-28 lg:space-y-32">
    <?php foreach ($custom_testimonials as $item) : 
        $img = !empty($item['image']) ? $item['image'] : get_template_directory_uri() . '/assets/images/testimonials/webjade_4847-edit.jpg';
        $name = !empty($item['name']) ? $item['name'] : '';
        $quote = !empty($item['quote']) ? $item['quote'] : '';
    ?>
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($name); ?>" class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line"><?php echo esc_html($name); ?></h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“<?php echo nl2br(esc_html($quote)); ?>”</p>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
  <?php
          elseif (!empty(trim(get_the_content()))) :
              the_content();
          else :
  ?>
  <div class="space-y-20 md:space-y-28 lg:space-y-32">
    
    <!-- Testimonial 1 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/webjade_4847-edit.jpg'); ?>" alt="Michelle Beisner-Buck" class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Michelle Beisner-Buck, ESPN</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“This day exceeded every expectation. From the second I walked in, I knew it was going to be an unforgettable day. Jade, your work is impeccable and your vision, instinct, and brilliance shines through in every frame. You made it so easy for me and my hubs Joe Buck. I love you dearly and so appreciate you making this one of the absolute best shoots I have ever been a part of.”</p>
      </div>
    </article>

    <!-- Testimonial 2 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/courtney-kerr-photoshoot-jade.jpg'); ?>" alt="Courtney Kerr" class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Courtney Kerr, Kerrently</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“Literally could cry writing this, but THANK YOU for making a “shoot day” feel fun and carefree again and for capturing me in a way I’ve QUITE LITERALLY never been captured before. Can’t wait for part 2 and 3, 4, 5 etc etc etc. Xoxo”</p>
      </div>
    </article>

    <!-- Testimonial 3 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/Carrie-072.jpg'); ?>" alt="Carrie B." class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Carrie B.</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“You show a woman her true self, the one we don’t believe in. Thank you for showing me mine, she is powerful.”</p>
      </div>
    </article>

    <!-- Testimonial 4 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/luxuryglamourportraitsSTLouis.jpg'); ?>" alt="Jordan B." class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Jordan B.</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“Thank you Jade Ha and team for using your magic to capture mine!”</p>
      </div>
    </article>

    <!-- Testimonial 5 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/reesebondsalon210growandglow.jpg'); ?>" alt="Reese Bond" class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Reese Bond,
Glow &amp; Grow</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“I have no words! 🖤 Your talent created my vision for Glow and Grow. I can’t thank you enough for working with us - you’re just so magical!!!”</p>
      </div>
    </article>

    <!-- Testimonial 6 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/dallasmotherdaughterportraits.jpg'); ?>" alt="Ashley A." class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Ashley A.</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“Thank you a million times! It’s an investment that I’ll cherish literally forever.”</p>
      </div>
    </article>

    <!-- Testimonial 7 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/stephaniehollmanrealhousewivesofdallas.jpg'); ?>" alt="Stephanie Hollman" class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Stephanie Hollman, Real Housewives of Dallas</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“Thank you so much! I needed a day like today. It was so much fun to get away from life and play. The photos are amazing and look like something from a magazine. You are so incredibly talented, I am blown away!”</p>
      </div>
    </article>

    <!-- Testimonial 8 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/web7U1A5800-edit.jpg'); ?>" alt="Robin A." class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Robin A., Skin RX Dallas Owner</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“A MAGICAL, CREATIVE, EMPOWERING day with the brilliant Jade Ha! Ladies, book a session, especially if you’re single and want the photos simply for yourself.”</p>
      </div>
    </article>

    <!-- Testimonial 9 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/Screenshot+2024-02-26+at+11.21.02%E2%80%AFAM.jpg'); ?>" alt="Samantha C." class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Samantha C.</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“I just wanted to say that I loved the photos and the experience. You have a gift that enables people to feel beautiful while memorializing who they are… Thank you for another beautiful experience.”</p>
      </div>
    </article>

    <!-- Testimonial 10 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/emilytravischampagneandchanelMaternityShoot.jpg'); ?>" alt="Emily Travis" class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Emily Travis, Champagne &amp; Chanel</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“Oh my gosh!! I’M BLOWN AWAY!! These are incredible… Jade, thank you so so much.”</p>
      </div>
    </article>

    <!-- Testimonial 11 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/TheCarpoolPodcast-221.jpg'); ?>" alt="Lizz" class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Lizz, The Carpool Podcast</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“JADE! We love the photos! Can’t believe how incredible they are. Thank you so much. We are so happy!!”</p>
      </div>
    </article>

    <!-- Testimonial 12 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/racquelfrisellasalfrisellaphotoshoot.jpg'); ?>" alt="Racquel Frisella" class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Racquel Frisella</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“I really do believe amazing photography is the one way to hit the “pause button” on life. I will cherish Jade’s photos of my family and be able to look back and remember this very stage forever!”</p>
      </div>
    </article>

    <!-- Testimonial 13 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/prongers.jpg'); ?>" alt="Lauren &amp; Chris Pronger" class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Lauren &amp; Chris Pronger, NHL Hall of Famer</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“We recently had the opportunity to be photographed by the VERY talented Jade Ha. This day and photo shoot was everything and more than we ever expected!!! So incredibly talented!!!”</p>
      </div>
    </article>

    <!-- Testimonial 14 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/LizB-386.jpg'); ?>" alt="Liz Beelman" class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Liz Beelman</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“These are sososososososososossoo good! I am so obsessed. I’m never going to get over how good these are. Need to come back asap!”</p>
      </div>
    </article>

    <!-- Testimonial 15 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/stlouisportaitphotographer.jpg'); ?>" alt="Jennifer T." class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Jennifer T.</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“This was more than an experience…it was a reinvention. Everyone needs an experience like this for your soul. It’s never too late to be brand new.”</p>
      </div>
    </article>

    <!-- Testimonial 16 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/dallasglamourphotography.jpg'); ?>" alt="Margaux K." class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Margaux K.</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“You are masterful and this shoot was one of my favorites! I’m so in love with these images. You are an absolute genius and it was such a pleasure to work with you! Still swooning over the entire experience!”</p>
      </div>
    </article>

    <!-- Testimonial 17 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/stlouisengagementportraits.jpg'); ?>" alt="Julie P." class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Julie P.</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“I’m still smiling and wondering if was all real! Thank you so much for a magical day! So many different emotions - it was a tiny bit scary, thrilling , fun, romantic, dreamy and empowering! Thank you for making it all such a spectacular experience.”</p>
      </div>
    </article>

    <!-- Testimonial 18 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/womensphotoshootsportraits.JPG'); ?>" alt="Tori F." class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Tori F.</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“THESE. ARE. INSANE!!! I had such excited nerves on the day of, that I remember the photos, but seeing them now, edited and with your touch on them, I am feeling all kinds of ways... #1 PROUD #2 Wowed #3 Honored. You make it so easy and comfortable to be able to mirror your posing and I feel beyond content in having done this, and having these photos to treasure forever now. From prep, to reviewing the finished product now, I have had such a blast through the entire process! In fact, I’m sad it’s over! I am SOOO happy though to have this timeless documentation of the experience. THANK YOU FROM THE BOTTOM OF MY HEART!”</p>
      </div>
    </article>

    <!-- Testimonial 19 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/alexis-waters-hoopnation-jade-ha.jpg'); ?>" alt="Alexis Waters" class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Alexis Waters, Hoop Nation &amp; The Bachelor 21</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“I’m so grateful to have met and worked with Jade!!! She really inspired me and helped my business elevate with one photoshoot!”</p>
      </div>
    </article>

    <!-- Testimonial 20 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/meghan.jpg'); ?>" alt="Meghan King" class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Meghan King, Real Housewives of Orange County</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“Cannot believe I got to shoot with Jade! It’s been quite a few years and several babies since I thought my slaying days were over. Thanks to Jade, think again.”</p>
      </div>
    </article>

    <!-- Testimonial 21 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/Brianna-314-alt.jpg'); ?>" alt="Brianna R." class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Brianna R.</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“THANK YOU SOOOO MUCH!!! I have never been so confident, comfortable, and happy EVAAA! You truly are so so so amazing. I am already in LOVE with all of the pics 💞”</p>
      </div>
    </article>

    <!-- Testimonial 22 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/7U1A5985-edit.jpg'); ?>" alt="Melissa R." class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Melissa R.</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“Thank you Jade!! You are so much more than a photographer. Thank you for giving me an experience &amp; photos that let me be ME…. Seeing yourself through someone else’s eyes is so valuable… It pushed me out of my comfort zone to see myself a little differently. And just the way that Jade captured it was so beautiful and I’m forever grateful.”</p>
      </div>
    </article>

    <!-- Testimonial 23 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/christie.jpg'); ?>" alt="Christie G." class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Christie G.</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“So...to put it simply, I cried. Then I looked through my portraits, and I still cried again but dangit - I am so very proud of the girl in those images. These photos, your creativity, heart, and skill...they show the woman that I am, the way I feel on the inside. Whatever happens after my surgery, I know I stood in your studio and you captured the essence of my femininity, and the images are stunning. From the bottom of my heart, thank you.”</p>
      </div>
    </article>

    <!-- Testimonial 24 -->
    <article class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 lg:gap-20 items-center">
      <div class="w-full aspect-[2/3] overflow-hidden bg-zinc-100 shadow-sm">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonials/jing.jpg'); ?>" alt="Dr. Jing H." class="w-full h-full object-cover object-center" loading="lazy">
      </div>
      <div class="flex flex-col justify-center py-4 md:py-8">
        <h2 class="font-ambroise text-[26px] sm:text-[34px] md:text-[40px] lg:text-[46px] font-light tracking-[0.04em] uppercase text-black leading-[1.3] mb-6 sm:mb-8 whitespace-pre-line">Dr. Jing H.</h2>
        <p class="font-calluna text-[16px] sm:text-[17.5px] leading-[2.1] md:leading-[2.3] tracking-[0.03em] text-[#111111]">“We had a splendid time and Jade gave us such wonderful coaching! But even more than the beautiful photos, I love having seen the way she captured us, her creative energy and focus on “moments.” Jade, thank you for your incredible talent and kindness. What a life-affirming gift.”</p>
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
