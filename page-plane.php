<?php
/**
 * Template Name: Plain Content Page
 * Description: Minimal template that renders the page editor content.
 */
get_header();
?>
<main class="w-full px-6 md:px-16 py-10">
  <div class="max-w-3xl mx-auto prose prose-invert">
    <?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>
  </div>
</main>
<?php get_footer(); ?>
