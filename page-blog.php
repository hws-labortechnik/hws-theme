<?php
/*
Template Name: Blog
*/
get_header();
?>

<div class="w-full mx-auto">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main>

<div class="mt-28 px-4 md:px-14 w-full relative">
    <div class="w-full py-12 flex-col justify-start items-start gap-3.5 inline-flex relative">
        <div class="w-auto h-auto absolute right-0 bottom-4 text-right md:min-w-max justify-start items-center gap-6 flex">
        <?php
        $all_tags = get_tags();
        if ($all_tags) : ?>
            <div class="flex gap-6 pb-6">
                <div class="py-[6px] px-[10px] rounded-lg border border-black text-black text-sm">
                    <a href="/blog">All</a>
                </div>
                <?php foreach ($all_tags as $tag) : ?>
                    <div class="py-[6px] px-[10px] rounded-lg border border-zinc-500 text-sm">
                        <a href="<?php echo get_tag_link($tag->term_id); ?>">
                            <?php echo esc_html($tag->name); ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        </div>
    </div>
</div>

<div class="w-full px-4 md:px-14 gap-6 grid-cols-1 md:grid-cols-4">
    <div class="w-full mx-auto px-0 pb-8">
        <div class="grid grid-cols-12 gap-6">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 12,
            'paged' => $paged
        ));

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $tags = get_the_tags();
        ?>
            <div class="bg-white rounded-lg p-5 col-span-12 md:col-span-4">
                <div class="relative">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium', array('class' => 'aspect-video w-full h-auto object-cover rounded-lg')); ?>
                        <?php endif; ?>
                    </a>
                </div>
                <div class="mt-4">
                    <h2 class="text-xl font-medium"><?php the_title(); ?></h2>
                    <p class="mt-2 text-gray-600 text-sm"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                    <div class="mt-4 flex items-start justify-between flex-col">
                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <span><?php echo get_the_date('Y.m.d'); ?></span>
                            <span>•</span>
                            <span><?php echo get_the_time(); ?> read</span>
                        </div>
                        <?php if ($tags) : ?>
                            <div class="text-[#020202] text-sm flex gap-0">
                                <?php foreach ($tags as $index => $tag) : ?>
                                    <span class="py-4 flex items-center">
                                        <?php echo esc_html($tag->name); ?>
                                        <?php if ($index < count($tags) - 1) : ?>
                                            <span class="mx-5 h-4 w-px bg-[#4f4f4f]"></span>
                                        <?php endif; ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <a href="<?php the_permalink(); ?>" class="mt-6 group px-4 py-2 rounded-3xl border border-neutral-600 text-sm flex items-center hover:bg-[#4F4F4F] hover:text-white">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

        <?php
        echo '<div class="col-span-12 w-full flex justify-center py-10">';
        echo paginate_links(array(
            'total' => $query->max_num_pages,
            'prev_text' => __('« Previous'),
            'next_text' => __('Next »'),
        ));
        echo '</div>';
        ?>

        <?php endif; ?>

        </div>
    </div>
</div>

<div class="w-full justify-between items-end">
    <div class="px-4 md:px-14 max-w-max pt-20 mb-14 justify-start items-center">
        <a href="/" class="group px-4 py-3 rounded-3xl border border-neutral-600 text-sm flex items-center hover:bg-[#4F4F4F] hover:text-white">
            <svg class="w-4 h-4 mr-2 text-black group-hover:text-white" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.85355 3.14645C7.04882 3.34171 7.04882 3.65829 6.85355 3.85355L3.70711 7H12.5C12.7761 7 13 7.22386 13 7.5C13 7.77614 12.7761 8 12.5 8H3.70711L6.85355 11.1464C7.04882 11.3417 7.04882 11.6583 6.85355 11.8536C6.65829 12.0488 6.34171 12.0488 6.14645 11.8536L2.14645 7.85355C1.95118 7.65829 1.95118 7.34171 2.14645 7.14645L6.14645 3.14645C6.34171 2.95118 6.65829 2.95118 6.85355 3.14645Z" fill="currentColor"/></svg>
            Back to Home
        </a>
    </div>
</div>

<div class="min-w-autol h-px mx-4 md:mx-12 bg-stone-800"></div>

<div class="w-full h-48 px-4 md:p-16 bg-zinc-100 justify-start items-center gap-12 inline-flex">
    <div class="flex-col justify-center items-start gap-3.5 inline-flex">
        <div class="text-black text-4xl font-light">Find our representatives worldwide</div>
    </div>
    <div class="justify-start items-center gap-2 inline-flex">
        <a href="/contact" class="group px-4 py-2 rounded-3xl border border-neutral-600 text-sm flex items-center bg-[#000] hover:bg-[#4F4F4F] text-white">
            Find
        </a>
    </div>
</div>

</main>
<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>