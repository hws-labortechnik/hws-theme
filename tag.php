<?php
get_header();
?>

<main class="w-full mx-auto overflow-x-hidden">

        <div 
                  data-aos="fade-in"
          data-aos-offset="200"
          data-aos-delay="0"
          data-aos-duration="600"
          data-aos-easing="ease-in-out" 
          class="mt-28 px-4 md:px-14 w-full relative">
  
            <div class="w-full py-12 flex-col justify-start items-start gap-3.5 inline-flex relative">
              <div class="w-16 text-neutral-600 text-sm font-normal font-['Roboto'] leading-tight">Blog</div>
              <div class="w-96 text-black text-3xl font-light font-['Roboto'] leading-10"><?php single_tag_title(); ?></div>
              <div class="w-auto h-auto absolute right-0 bottom-4 text-right md:min-w-max justify-start items-center gap-6 flex">
              <?php
                $current_tag = get_queried_object();
                $all_tags = get_tags();
                if ($all_tags) : ?>
                    <div class="flex gap-6 pb-6">
                            <div class="py-[6px] px-[10px] rounded-lg border border-zinc-500 text-sm opacity-50 hover:opacity-100 transition-all duration-300">
                                <a href="/blog">
                                    All
                                </a>
                            </div>
                        <?php foreach ($all_tags as $tag) : ?>
                            <div class="py-[6px] px-[10px] rounded-lg border border-zinc-500 text-sm opacity-50 hover:opacity-100 transition-all duration-300 <?php echo $tag->term_id == $current_tag->term_id ? 'border-black text-black opacity-100' : ''; ?>">
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
    

  <?php
  $tag = get_queried_object();
  $args = array(
    'tag_id' => $tag->term_id,
    'post_type' => 'post',
    'posts_per_page' => 30,
  );
  $tag_query = new WP_Query($args);
  ?>

  <?php if ($tag_query->have_posts()) : ?>
    <div class="w-full px-4 md:px-14 gap-6 grid grid-cols-12 mb-32">
      <?php while ($tag_query->have_posts()) : $tag_query->the_post(); ?>
                <div class="bg-white rounded-lg p-5 col-span-12 md:col-span-3">
                                <div class="relative">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium', array('class' => 'aspect-video w-full h-auto object-cover rounded-lg')); ?>
                                    <?php endif; ?>

                                    <?php if ($tags) : ?>
                                        <div class="absolute top-3 right-3 flex gap-2">
                                            <?php foreach ($tags as $tag) : ?>
                                                <span class="bg-black/0 text-white border border-white text-xs px-2 py-1 rounded-md">
                                                    <?php echo esc_html($tag->name); ?>
                                                </span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="mt-4">
                                    <h2 class="text-xl font-medium"><?php the_title(); ?></h2>
                                    <p class="mt-2 text-gray-600 text-sm">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                    </p>
                                    <div class="mt-4 flex items-start justify-between flex-col">
                                        <div class="flex items-center gap-2 text-sm text-gray-500">
                                            <span><?php echo get_the_date('Y.m.d'); ?></span>
                                            <span>•</span>
                                            <span><?php echo get_the_time(); ?> read</span>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="mt-6 group transition-all duration-1000 px-4 py-2 rounded-3xl border border-neutral-600 text-sm font-normal leading-tight flex justify-start items-center hover:bg-[#4F4F4F] hover:text-white">
                                            Read more
                                            <svg class="transition-all duration-300 w-4 h-4 float-right ml-2 text-black group-hover:text-white group-hover:w-6 group-hover:h-4 group-hover:ml-4 group-hover:scale-150" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg> 
                                        </a>
                                    </div>
                                </div>
                </div>
      <?php endwhile; ?>
    </div>
    <div class="pagination">
      <?php the_posts_pagination(); ?>
    </div>
  <?php else : ?>
    <p>No posts found with this tag.</p>
  <?php endif; ?>

  <?php wp_reset_postdata(); ?>

  <div class="w-full justify-between items-end">
    <div class="px-4 md:px-14 max-w-max pt-20 mb-14 justify-start items-center">
        <a href="/blog" class="group transition-all duration-1000 px-4 py-3 rounded-3xl border border-neutral-600 text-sm font-normal leading-tight flex justify-start items-center hover:bg-[#4F4F4F] hover:text-white">
            <svg class="transition-all duration-300 w-4 h-4 float-left mr-2 text-black group-hover:text-white group-hover:w-6 group-hover:h-4 group-hover:mr-4 group-hover:scale-150" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.85355 3.14645C7.04882 3.34171 7.04882 3.65829 6.85355 3.85355L3.70711 7H12.5C12.7761 7 13 7.22386 13 7.5C13 7.77614 12.7761 8 12.5 8H3.70711L6.85355 11.1464C7.04882 11.3417 7.04882 11.6583 6.85355 11.8536C6.65829 12.0488 6.34171 12.0488 6.14645 11.8536L2.14645 7.85355C1.95118 7.65829 1.95118 7.34171 2.14645 7.14645L6.14645 3.14645C6.34171 2.95118 6.65829 2.95118 6.85355 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            Back to Blog
        </a>
    </div>
</div>

<div
data-aos="fade-in"
data-aos-offset="200"
data-aos-delay="0"
data-aos-duration="1000"
data-aos-easing="ease-in-out"   
class="min-w-autol h-px mx-4 md:mx-12 bg-stone-800"></div>

<div
data-aos="fade-in-up"
data-aos-offset="300"
data-aos-delay="0"
data-aos-duration="600"
data-aos-easing="ease-in"
>
  <div class="w-full h-48 px-4 md:p-16 bg-zinc-100 justify-start items-center gap-12 inline-flex ">
      <div class="flex-col justify-center items-start gap-3.5 inline-flex">
        <div class="text-black text-4xl font-light font-['Roboto'] leading-10">Find our representatives worldwide</div>
      </div>
      <div class="justify-start items-center gap-2 inline-flex">
        <a href="/contact" class="group transition-all duration-1000 px-4 py-2 rounded-3xl border border-neutral-600 text-sm font-normal leading-tight flex justify-start items-center bg-[#000] hover:bg-[#4F4F4F] text-white">
          Find
          <svg class="transition-all duration-300 w-5 h-5 float-right ml-2 text-white group-hover:text-white group-hover:w-6 group-hover:h-4 group-hover:ml-4 group-hover:scale-150" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg> 
        </a>
      </div>
  </div>
</div>

</main>

<?php
get_footer();
?>
