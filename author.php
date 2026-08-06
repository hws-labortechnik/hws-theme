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
    <div class="container">
        <header class="author-header">
            <h1 class="author-title"><?php echo esc_html($author->display_name); ?></h1>

            <?php if ($tagline) : ?>
                <p class="author-tagline"><?php echo esc_html($tagline); ?></p>
            <?php endif; ?>

            <?php if ($bio) : ?>
                <div class="author-bio">
                    <?php echo wpautop(wp_kses_post($bio)); ?>
                </div>
            <?php endif; ?>
        </header>

        <?php if (have_posts()) : ?>
            <section class="author-posts" aria-label="<?php esc_attr_e('Posts by this author', 'hws-theme'); ?>">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('author-post'); ?>>
                        <h2 class="author-post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <p class="author-post-date">
                            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
                        </p>
                        <?php the_excerpt(); ?>
                    </article>
                <?php endwhile; ?>
            </section>

            <?php the_posts_pagination(); ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
