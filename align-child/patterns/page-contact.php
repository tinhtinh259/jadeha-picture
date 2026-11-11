<?php
/**
 * Title: Jade Ha: Contact
 * Slug: jadeha/page-contact
 * Categories: jadeha-pages
 * Inserter: true
 *
 * @package Align Child
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!-- wp:align/custom-html {"blockId":"align-contact","enableShortcode":true} -->
<main class="pt-32 sm:pt-36 md:pt-40 pb-20 w-full">
    
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
          <p class="text-[15px] text-[#444444]">St. Louis, MO</p>
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
        <form class="space-y-6">
          
          <!-- Name Group (First Name & Last Name) -->
          <div>
            <label class="contact-form-label font-semibold">Name</label>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="contact-form-label text-xs text-zinc-600 mb-1">First Name <span class="req">(required)</span></label>
                <input type="text" name="fname" required class="contact-form-input">
              </div>
              <div>
                <label class="contact-form-label text-xs text-zinc-600 mb-1">Last Name <span class="req">(required)</span></label>
                <input type="text" name="lname" required class="contact-form-input">
              </div>
            </div>
          </div>

          <!-- Email Group + Newsletter Checkbox -->
          <div>
            <label class="contact-form-label">Email <span class="req">(required)</span></label>
            <input type="email" name="email" required class="contact-form-input">
            <label class="flex items-center space-x-2 text-xs font-calluna text-zinc-600 mt-2.5 cursor-pointer">
              <input type="checkbox" name="newsletter" class="w-4 h-4 rounded-none border-gray-300 text-zinc-800 focus:ring-0">
              <span>Sign up for news and updates</span>
            </label>
          </div>

          <!-- Phone Group -->
          <div>
            <label class="contact-form-label">Phone <span class="req">(required)</span></label>
            <input type="tel" name="phone" required class="contact-form-input">
          </div>

          <!-- Zipcode Group -->
          <div>
            <label class="contact-form-label">Zipcode <span class="req">(required)</span></label>
            <input type="text" name="zipcode" required class="contact-form-input">
          </div>

          <!-- Session Type Dropdown -->
          <div>
            <label class="contact-form-label">What kind of session are you interested in? <span class="req">(required)</span></label>
            <select name="session_type" required class="contact-form-select">
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
            <label class="contact-form-label">When would you like to have your shoot? <span class="req">(required)</span></label>
            <select name="timeline" required class="contact-form-select">
              <option value="" disabled selected>Select an option</option>
              <option value="ready to book!">ready to book!</option>
              <option value="just getting information">just getting information</option>
            </select>
          </div>

          <!-- Return Client Dropdown -->
          <div>
            <label class="contact-form-label">Are you a return client?</label>
            <select name="return_client" class="contact-form-select">
              <option value="" disabled selected>Select an option</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </div>

          <!-- Referral Group -->
          <div>
            <label class="contact-form-label">How did you hear about us? <span class="req">(required)</span></label>
            <input type="text" name="referral" required class="contact-form-input">
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
<!-- /wp:align/custom-html -->
