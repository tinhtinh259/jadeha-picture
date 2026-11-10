<?php
/**
 * The template for displaying all single posts or generic pages
 *
 * @package JadeHaTheme
 */

get_header();
?>

<div class="pt-32 pb-24 bg-white text-[#222222] min-h-[70vh]">
    <div class="max-w-4xl mx-auto px-6">
        
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="text-center mb-12">
                    <h1 class="font-ambroise text-3xl sm:text-5xl text-[#222222] font-light mb-4">
                        <?php the_title(); ?>
                    </h1>
                    <div class="w-12 h-[1px] bg-zinc-300 mx-auto"></div>
                </header>

                <div class="prose max-w-none text-[#222222] font-calluna text-[15px] leading-[2.3] tracking-[0.03em] space-y-6">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
        ?>

    </div>
</div>

<?php
get_footer();
