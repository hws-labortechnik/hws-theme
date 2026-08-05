<?php
/**
 * Template for single blog posts (HWS theme)
 */

get_header();
?>

<div class="page-wrap blog-single">
    <div class="container">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="entry-hero">
                        <?php the_post_thumbnail( 'full' ); ?>
                    </div>
                <?php endif; ?>

                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

                    <div class="entry-meta">
                        <?php
                        $author_id  = (int) get_the_author_meta('ID');
                        $tagline    = get_user_meta($author_id, 'hws_byline_tagline', true);
                        $published  = get_post_time('U', true);
                        $modified   = get_post_modified_time('U', true);
                        ?>
                        <span class="entry-byline">
                            <a href="<?php echo esc_url(get_author_posts_url($author_id)); ?>"><?php echo esc_html(get_the_author()); ?></a>
                            <?php if ($tagline) : ?>
                                <span aria-hidden="true"> · </span>
                                <span class="entry-author-tagline"><?php echo esc_html($tagline); ?></span>
                            <?php endif; ?>
                        </span>
                        <span class="entry-date">
                            <?php esc_html_e('Published', 'hws-theme'); ?>
                            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
                        </span>
                        <?php if ($modified !== $published) : ?>
                            <span class="entry-date entry-date-updated">
                                <?php esc_html_e('Updated', 'hws-theme'); ?>
                                <time datetime="<?php echo esc_attr(get_the_modified_date('c')); ?>"><?php echo esc_html(get_the_modified_date()); ?></time>
                            </span>
                        <?php endif; ?>
                        <span class="entry-cats"><?php the_category( ', ' ); ?></span>
                    </div>
                </header>

                <div class="entry-content">
                    <?php
                        the_content();

                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . __( 'Pages:', 'hws-theme' ),
                            'after'  => '</div>',
                        ) );
                    ?>
                </div>

            </article>

        <?php endwhile; endif; ?>

    </div>
</div>

<?php
get_footer();