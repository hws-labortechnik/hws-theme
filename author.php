<?php
/**
 * Template for author archives.
 */

get_header();

$author  = get_queried_object();
$tagline = get_user_meta($author->ID, 'hws_byline_tagline', true);
$bio     = get_user_meta($author->ID, 'description', true);
?>

<div class="page-wrap author-archive">
    <main>
        <header class="mt-28 px-4 md:px-14 w-full">
            <div class="w-full max-w-3xl py-12 flex-col justify-start items-start gap-3.5 flex">
                <div class="text-neutral-600 text-lg font-normal font-['Roboto'] leading-tight"><?php esc_html_e('Author', 'hws-theme'); ?></div>
                <h1 class="text-black text-3xl font-light font-['Roboto'] leading-10"><?php echo esc_html($author->display_name); ?></h1>

                <?php if ($tagline) : ?>
                    <p class="text-neutral-600 text-lg font-normal font-['Roboto'] leading-relaxed"><?php echo esc_html($tagline); ?></p>
                <?php endif; ?>

                <?php if ($bio) : ?>
                    <div class="text-gray-600 text-base font-normal font-['Roboto'] leading-relaxed">
                        <?php echo wpautop(wp_kses_post($bio)); ?>
                    </div>
                <?php endif; ?>
            </div>
        </header>

        <section class="w-full px-4 md:px-14" aria-label="<?php esc_attr_e('Posts by this author', 'hws-theme'); ?>">
            <div class="w-full mx-auto px-0 pb-8">
                <div class="grid grid-cols-12 gap-6">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php $tags = get_the_tags(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg p-5 col-span-12 md:col-span-4 flex flex-col'); ?>>
                                <div class="relative">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium', array('class' => 'aspect-video w-full h-auto object-cover rounded-lg')); ?>
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="mt-4 flex flex-col flex-grow">
                                    <h2 class="text-xl font-medium"><?php the_title(); ?></h2>
                                    <p class="mt-2 text-gray-600 text-sm"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                    <div class="mt-4 flex items-start justify-between flex-col flex-grow">
                                        <div class="flex items-center gap-2 text-sm text-gray-500">
                                            <span><?php echo get_the_date('Y.m.d'); ?></span>
                                            <span>•</span>
                                            <span><?php echo get_the_time(); ?> read</span>
                                        </div>
                                        <?php if ($tags) : ?>
                                            <?php hws_the_post_tags($tags); ?>
                                        <?php endif; ?>
                                        <a href="<?php the_permalink(); ?>" class="mt-auto group px-4 py-2 rounded-3xl border border-neutral-600 text-sm flex items-center hover:bg-[#4F4F4F] hover:text-white">
                                            <?php esc_html_e('Read more', 'hws-theme'); ?>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; ?>

                        <div class="col-span-12 w-full flex justify-center py-10">
                            <?php hws_pagination(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
