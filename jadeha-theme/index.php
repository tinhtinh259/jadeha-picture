<?php
/**
 * The main template file
 *
 * @package JadeHaTheme
 */

get_header();
?>

<div class="pt-32 pb-24 bg-white text-[#222222] min-h-[70vh]">
    <div class="max-w-5xl mx-auto px-6">
        
        <header class="text-center mb-16">
            <span class="text-xs uppercase tracking-widest text-[#999999] font-medium font-calluna">Stories &amp; Inspiration</span>
            <h1 class="font-ambroise text-3xl sm:text-5xl text-[#222222] font-light mt-2 mb-4">
                Journal
            </h1>
            <div class="w-12 h-[1px] bg-zinc-300 mx-auto"></div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white p-6 border border-zinc-200 rounded-sm shadow-sm'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="aspect-[16/10] overflow-hidden mb-4 rounded-sm">
                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover hover:scale-105 transition-transform duration-500')); ?>
                            </div>
                        <?php endif; ?>
                        
                        <p class="text-[10px] text-[#999999] uppercase tracking-widest mb-1 font-calluna"><?php echo get_the_date(); ?></p>
                        <h2 class="font-ambroise text-xl text-[#222222] hover:text-[#ff9061] transition-colors mb-2">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="text-[#555555] text-xs line-clamp-3 font-calluna leading-relaxed mb-4">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="text-xs text-[#222222] uppercase tracking-wider font-calluna hover:text-[#ff9061] transition-colors inline-flex items-center">
                            Read More &rarr;
                        </a>
                    </article>
                    <?php
                endwhile;

                the_posts_pagination(array(
                    'prev_text' => '&larr; Previous',
                    'next_text' => 'Next &rarr;',
                    'class'     => 'col-span-full flex justify-center space-x-2 mt-8',
                ));
            else :
                ?>
                <p class="text-center col-span-2 text-zinc-500 font-calluna">No posts found.</p>
                <?php
            endif;
            ?>
        </div>

    </div>
</div>

<?php
get_footer();
