<?php
/**
 * Title: Jade Ha: Transformations
 * Slug: jadeha/page-transformations
 * Categories: jadeha-pages
 * Inserter: true
 *
 * @package Align Child
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!-- wp:align/custom-html {"blockId":"align-transformations","enableShortcode":true} -->
<main class="pt-28 sm:pt-36 pb-20">
    
    <!-- Title -->
    <div class="max-w-[1250px] mx-auto px-6 mb-8 sm:mb-10 text-center">
      <h1 class="font-ambroise text-[26px] sm:text-[38px] md:text-[48px] lg:text-[57px] font-light tracking-[2px] uppercase text-[#222222] leading-[1.3]">
        GALLERY OF SAME DAY TRANSFORMATIONS
      </h1>
    </div>

    <!-- Slideshow Wrapper (Exact 1250px width, aspect ratio 2:1, cross-fade) -->
    <div class="max-w-[1250px] mx-auto px-4 sm:px-6">
      <div id="slideshow-box" class="slideshow-wrapper relative w-full h-[320px] sm:h-[480px] md:h-[580px] lg:h-[620px] overflow-hidden bg-zinc-100 select-none shadow-sm">
        
        <!-- Slides Container -->
        <div id="slides-container" class="relative w-full h-full">
          <!-- Slide items injected via JS for fast, optimized loading -->
        </div>

        <!-- Previous Slide Button -->
        <button id="prev-btn" class="slideshow-control absolute left-0 top-1/2 -translate-y-1/2 z-20 w-12 sm:w-16 h-20 sm:h-24 bg-black/20 hover:bg-black/40 text-white flex items-center justify-center focus:outline-none transition-colors" aria-label="Previous Slide">
          <svg class="w-6 sm:w-8 h-6 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7"></path>
          </svg>
        </button>

        <!-- Next Slide Button -->
        <button id="next-btn" class="slideshow-control absolute right-0 top-1/2 -translate-y-1/2 z-20 w-12 sm:w-16 h-20 sm:h-24 bg-black/20 hover:bg-black/40 text-white flex items-center justify-center focus:outline-none transition-colors" aria-label="Next Slide">
          <svg class="w-6 sm:w-8 h-6 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"></path>
          </svg>
        </button>

        <!-- Minimal Slide Counter Indicator -->
        <div class="absolute bottom-4 right-4 z-20 px-3 py-1 bg-black/50 backdrop-blur-sm text-white text-[11px] tracking-widest font-mono rounded">
          <span id="slide-curr">1</span> / <span id="slide-total">47</span>
        </div>

      </div>
    </div>

  </main>
<!-- /wp:align/custom-html -->
