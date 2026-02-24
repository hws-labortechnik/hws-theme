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
                        <span class="entry-date"><?php echo get_the_date(); ?></span>
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