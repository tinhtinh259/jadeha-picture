<?php
/**
 * Template Name: Contact Studio
 * Template Post Type: page
 *
 * @package JadeHaTheme
 */

get_header();
?>

<!-- ================= MAIN EDITORIAL CONTENT ================= -->
<main class="pt-32 sm:pt-36 md:pt-40 pb-20 w-full bg-white text-[#222222]">
  
  <!-- Top Centered Header Title (Exact Ambroise Std Jade Ha) -->
  <div class="max-w-[1200px] mx-auto px-6 mb-12 sm:mb-16">
    <h1 class="font-ambroise uppercase text-center text-[38px] sm:text-[48px] md:text-[57px] tracking-[0.04em] text-[#222222] leading-[1.25]">
      DESIGN YOUR DREAM<br>SHOOT
    </h1>
  </div>

  <!-- 2-Column Content Grid: Left Details Sidebar + Right Reservation Form -->
  <div class="max-w-[1200px] mx-auto px-6 grid grid-cols-1 md:grid-cols-12 gap-10 md:gap-14 items-start">
    
    <!-- Left Column: Studio Details (Centered, Calluna 15px) -->
    <aside class="md:col-span-4 lg:col-span-3 text-center font-calluna text-[15px] text-[#222222] space-y-7 md:pt-2">
      <p class="font-bold text-[15px]">By Appointment Only</p>

      <div>
        <p class="font-bold text-[15px]">Location</p>
        <p class="text-[15px] text-[#444444]"><?php echo esc_html(get_theme_mod('jadeha_address', 'St. Louis, MO')); ?></p>
      </div>

      <div>
        <p class="font-bold text-[15px]">Sessions</p>
        <p class="text-[#444444]">Portraits</p>
        <p class="text-[#444444]">Branding</p>
        <p class="text-[#444444]">Maternity</p>
        <p class="text-[#444444]">Boudoir</p>
      </div>

      <div>
        <p class="font-bold text-[15px]">Session includes</p>
        <p class="text-[#444444]">Champagne</p>
        <p class="text-[#444444]">Hair &amp; makeup</p>
        <p class="text-[#444444]">Multiple outfits</p>
        <p class="text-[#444444]">Studio wardrobe</p>
        <p class="text-[#444444]">Directed posing</p>
        <p class="text-[#444444]">Private reveal session</p>
      </div>
    </aside>

    <!-- Right Column: Editorial Message & Form -->
    <section class="md:col-span-8 lg:col-span-8 max-w-[760px]">
      
      <!-- Subheading -->
      <h3 class="font-calluna font-bold uppercase tracking-[0.1em] text-[15px] text-[#333333] text-center mb-6">
        LET’S CREATE SOMETHING INCREDIBLE!
      </h3>

      <!-- Intro Text -->
      <p class="font-calluna text-[15px] text-[#333333] text-center leading-relaxed mb-10 max-w-2xl mx-auto">
        Ready to plan your own shoot? Take a look through the Photoshoot page for all the details, then fill out the Reservations form below. We’ll be in touch shortly with the full Pricing Menu and everything you need to get started. I can’t wait to hear what you have in mind! xx
      </p>

      <!-- Squarespace-style Clean Form -->
      <form method="post" action="" class="space-y-6">
        
        <!-- Name Group (First Name & Last Name) -->
        <div>
          <label class="block font-calluna text-[13px] text-[#222222] font-semibold mb-1.5">Name</label>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label class="block font-calluna text-xs text-zinc-600 mb-1">First Name <span class="text-zinc-400 font-normal">(required)</span></label>
              <input type="text" name="fname" required class="w-full bg-[#fafafa] border border-[#d1d5db] focus:border-[#222222] focus:bg-white px-3 py-2.5 text-sm text-[#111111] outline-none transition-colors">
            </div>
            <div>
              <label class="block font-calluna text-xs text-zinc-600 mb-1">Last Name <span class="text-zinc-400 font-normal">(required)</span></label>
              <input type="text" name="lname" required class="w-full bg-[#fafafa] border border-[#d1d5db] focus:border-[#222222] focus:bg-white px-3 py-2.5 text-sm text-[#111111] outline-none transition-colors">
            </div>
          </div>
        </div>

        <!-- Email Group + Newsletter Checkbox -->
        <div>
          <label class="block font-calluna text-[13px] text-[#222222] mb-1.5">Email <span class="text-zinc-400 font-normal">(required)</span></label>
          <input type="email" name="email" required class="w-full bg-[#fafafa] border border-[#d1d5db] focus:border-[#222222] focus:bg-white px-3 py-2.5 text-sm text-[#111111] outline-none transition-colors">
          <label class="flex items-center space-x-2 text-xs font-calluna text-zinc-600 mt-2.5 cursor-pointer">
            <input type="checkbox" name="newsletter" class="w-4 h-4 rounded-none border-gray-300 text-zinc-800 focus:ring-0">
            <span>Sign up for news and updates</span>
          </label>
        </div>

        <!-- Phone Group -->
        <div>
          <label class="block font-calluna text-[13px] text-[#222222] mb-1.5">Phone <span class="text-zinc-400 font-normal">(required)</span></label>
          <input type="tel" name="phone" required class="w-full bg-[#fafafa] border border-[#d1d5db] focus:border-[#222222] focus:bg-white px-3 py-2.5 text-sm text-[#111111] outline-none transition-colors">
        </div>

        <!-- Zipcode Group -->
        <div>
          <label class="block font-calluna text-[13px] text-[#222222] mb-1.5">Zipcode <span class="text-zinc-400 font-normal">(required)</span></label>
          <input type="text" name="zipcode" required class="w-full bg-[#fafafa] border border-[#d1d5db] focus:border-[#222222] focus:bg-white px-3 py-2.5 text-sm text-[#111111] outline-none transition-colors">
        </div>

        <!-- Session Type Dropdown -->
        <div>
          <label class="block font-calluna text-[13px] text-[#222222] mb-1.5">What kind of session are you interested in? <span class="text-zinc-400 font-normal">(required)</span></label>
          <select name="session_type" required class="w-full bg-[#fafafa] border border-[#d1d5db] focus:border-[#222222] focus:bg-white px-3 py-2.5 text-sm text-[#111111] outline-none cursor-pointer transition-colors">
            <option value="" disabled selected>Select an option</option>
            <option value="Couples">Couples</option>
            <option value="Maternity">Maternity</option>
            <option value="Branding">Branding</option>
            <option value="Boudoir">Boudoir</option>
            <option value="Portrait">Portrait</option>
          </select>
        </div>

        <!-- Timeline Dropdown -->
        <div>
          <label class="block font-calluna text-[13px] text-[#222222] mb-1.5">When would you like to have your shoot? <span class="text-zinc-400 font-normal">(required)</span></label>
          <select name="timeline" required class="w-full bg-[#fafafa] border border-[#d1d5db] focus:border-[#222222] focus:bg-white px-3 py-2.5 text-sm text-[#111111] outline-none cursor-pointer transition-colors">
            <option value="" disabled selected>Select an option</option>
            <option value="ready to book!">ready to book!</option>
            <option value="just getting information">just getting information</option>
          </select>
        </div>

        <!-- Return Client Dropdown -->
        <div>
          <label class="block font-calluna text-[13px] text-[#222222] mb-1.5">Are you a return client?</label>
          <select name="return_client" class="w-full bg-[#fafafa] border border-[#d1d5db] focus:border-[#222222] focus:bg-white px-3 py-2.5 text-sm text-[#111111] outline-none cursor-pointer transition-colors">
            <option value="" disabled selected>Select an option</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
        </div>

        <!-- Referral Group -->
        <div>
          <label class="block font-calluna text-[13px] text-[#222222] mb-1.5">How did you hear about us? <span class="text-zinc-400 font-normal">(required)</span></label>
          <input type="text" name="referral" required class="w-full bg-[#fafafa] border border-[#d1d5db] focus:border-[#222222] focus:bg-white px-3 py-2.5 text-sm text-[#111111] outline-none transition-colors">
        </div>

        <!-- Submit Button -->
        <div class="pt-4 text-left">
          <button type="submit" class="border-[1.6px] border-[#272727] text-[#272727] hover:bg-[#272727] hover:text-white transition-all font-calluna text-[13px] tracking-[0.35em] uppercase py-3.5 px-9 rounded-[3px]">
            SUBMIT
          </button>
        </div>

      </form>

    </section>

  </div>

</main>

<!-- ================= STAGE 1 SIGNATURE FOOTER ================= -->
<div class="max-w-4xl mx-auto px-6 py-16 border-t border-[#e5e5e5] grid grid-cols-1 md:grid-cols-3 gap-8 text-center items-center text-[#222222]">
  <div>
    <p class="font-calluna italic text-sm font-semibold mb-1">Contact</p>
    <a href="mailto:<?php echo esc_attr(get_theme_mod('jadeha_email', 'jadehastudio@gmail.com')); ?>" class="font-calluna text-xs hover:text-[#ff9061] transition-colors"><?php echo esc_html(get_theme_mod('jadeha_email', 'jadehastudio@gmail.com')); ?></a>
  </div>
  <div>
    <p class="font-ambroise text-lg tracking-[0.2em] mb-3">— JADE HA —</p>
    <div class="flex items-center justify-center space-x-4">
      <a href="<?php echo esc_url(get_theme_mod('jadeha_instagram', 'https://www.instagram.com/jadeha_studio_sg/')); ?>" target="_blank" rel="noopener" aria-label="Instagram" class="text-[#222222] hover:text-[#ff9061] transition-colors">
        <svg viewBox="17 17 30 30" class="w-[18px] h-[18px] fill-current">
          <path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"></path>
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
    <p class="font-calluna italic text-sm font-semibold mb-1">Hours</p>
    <p class="font-calluna italic text-xs text-zinc-600">by appointment only</p>
  </div>
</div>

<!-- ================= STAGE 2 BOTTOM DARK GATEWAY (#2b2421) ================= -->
<div class="py-16 px-4 text-center select-none" style="background-color: #2b2421;">
  <p class="font-calluna italic text-base sm:text-lg text-white/90 mb-6 lowercase">
    luxury portrait &amp; fashion studio
  </p>
  <nav class="flex items-center justify-center space-x-8 sm:space-x-14 mb-8">
    <a href="<?php echo esc_url(home_url('/luxury-photoshoot/')); ?>" class="ambroise-giant-link" style="font-size: clamp(28px, 4.5vw, 56px);">
      SHOOTS
    </a>
    <a href="<?php echo esc_url(home_url('/lovejade/')); ?>" class="ambroise-giant-link" style="font-size: clamp(28px, 4.5vw, 56px);">
      JADE
    </a>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ambroise-giant-link active" style="font-size: clamp(28px, 4.5vw, 56px);">
      CONTACT
    </a>
  </nav>
  <div class="text-[10px] tracking-widest text-white/40 uppercase">
    <?php echo esc_html(get_theme_mod('jadeha_copyright', 'Jade Ha Studio - Photography')); ?>
  </div>
</div>

<?php
get_footer();
