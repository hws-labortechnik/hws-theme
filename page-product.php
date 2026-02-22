<?php
/*
Template Name: Product
*/

get_header();
?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
<main
data-aos="fade-in-up"
data-aos-offset="300"
data-aos-delay="0"
data-aos-duration="600"
data-aos-easing="ease-in"
>

<div class="mt-28 w-full h-auto justify-between items-end inline-flex">
    <div class="px-4 md:px-14 py-12 flex-col justify-start items-start gap-3.5 inline-flex">
      <div class="w-full text-neutral-600 text-sm font-normal font-['Roboto'] leading-tight"><?php the_field('page_header_text'); ?></div>
      <div class="w-full  text-black text-3xl font-light font-['Roboto'] leading-10"><?php the_field('page_header_title'); ?></div>
    </div>
</div>

<div class="w-full mx-auto grid grid-cols-12 px-4 md:px-14 py-6 md:py-12 gap-6 md:gap-12">
      <div class="col-span-12 md:col-span-5">

        <?php if( have_rows('section1') ): ?>
            <?php while( have_rows('section1') ): the_row(); 
                // Get sub field values.
                $name = get_sub_field('name');
                $description = get_sub_field('description');
                $content = get_sub_field('content');
                ?>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <div class="text-[#4f4f4f] text-sm font-normal font-['Roboto'] leading-tight"><?php the_sub_field('name'); ?></div>
                    <div class="self-stretch text-[#020202] text-[40px] font-light font-['Roboto'] leading-[50px]"><?php the_sub_field('description'); ?></div>
                    <p class="headline"><?php the_sub_field('content'); ?></p>
                </div>

                
                  <?php if( have_rows('accordion') ): ?>

                    <?php $i = 1; ?>
                    <?php while( have_rows('accordion') ): the_row(); 
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');
                        ?>
  
                          <div class="my-accordion">
                            <div class="accordion-section">
                              <div class="accordion-header relative pt-4 pb-4 border-t border-neutral-400">
                                <!--<span class="accordion-number">
                                  < echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>
                                </span>-->
                                <h3><?php echo esc_html($title); ?></h3>
                                <div class="accordion-arrow absolute right-0 top-4">
                                  <img src="<?php echo get_template_directory_uri(); ?>/public/acc.png" alt="accordion arrow">
                                </div>
                              </div>
                              <div class="accordion-body ml-4 md:ml-10 md:mr-10 lead">
                                <?php echo $content; // display full HTML ?>
                              </div>
                            </div>
                          </div>
                          <?php $i++; ?>

                    <?php endwhile; ?>
                  <?php endif; ?>
                
            <?php endwhile; ?>
        <?php endif; ?>
      </div> 

      <div class="col-span-12 md:col-span-7">
                <?php if( have_rows('section1') ): ?>
                    <?php while( have_rows('section1') ): the_row(); 
                        $image = get_sub_field('image');?>
                            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                    <?php endwhile; ?>
                <?php endif; ?>
      </div> 
        
</div>


<div class="w-full mx-auto grid grid-cols-12 px-4 md:px-14 py-6 md:py-12 gap-6 md:gap-12">
      <div class="col-span-12 md:col-span-5">

        <?php if( have_rows('section2') ): ?>
            <?php while( have_rows('section2') ): the_row(); 
                // Get sub field values.
                $name = get_sub_field('name');
                $description = get_sub_field('description');
                $content = get_sub_field('content');
                ?>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <div class="text-[#4f4f4f] text-sm font-normal font-['Roboto'] leading-tight"><?php the_sub_field('name'); ?></div>
                    <div class="self-stretch text-[#020202] text-[40px] font-light font-['Roboto'] leading-[50px]"><?php the_sub_field('description'); ?></div>
                    <p class="headline"><?php the_sub_field('content'); ?></p>
                </div>

                
                  <?php if( have_rows('accordion') ): ?>

                    <?php $i = 1; ?>
                    <?php while( have_rows('accordion') ): the_row(); 
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');
                        ?>
  
                          <div class="my-accordion">
                            <div class="accordion-section">
                              <div class="accordion-header relative pt-4 pb-4 border-t border-neutral-400">
                                <!--<span class="accordion-number">
                                  < echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>
                                </span>-->
                                <h3><?php echo esc_html($title); ?></h3>
                                <div class="accordion-arrow absolute right-0 top-4">
                                  <img src="<?php echo get_template_directory_uri(); ?>/public/acc.png" alt="accordion arrow">
                                </div>
                              </div>
                              <div class="accordion-body ml-4 md:ml-10 md:mr-10 lead">
                                <?php echo $content; // display full HTML ?>
                              </div>
                            </div>
                          </div>
                          <?php $i++; ?>

                    <?php endwhile; ?>
                  <?php endif; ?>
                
            <?php endwhile; ?>
        <?php endif; ?>
      </div> 

      <div class="col-span-12 md:col-span-7">
                <?php if( have_rows('section2') ): ?>
                    <?php while( have_rows('section2') ): the_row(); 
                        $image = get_sub_field('image');?>
                            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                    <?php endwhile; ?>
                <?php endif; ?>
      </div> 
        
</div>

<div class="w-full mx-auto grid grid-cols-12 px-4 md:px-14 py-6 md:py-12 gap-6 md:gap-12">
      <div class="col-span-12 md:col-span-5">

        <?php if( have_rows('section3') ): ?>
            <?php while( have_rows('section3') ): the_row(); 
                // Get sub field values.
                $name = get_sub_field('name');
                $description = get_sub_field('description');
                $content = get_sub_field('content');
                ?>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <div class="text-[#4f4f4f] text-sm font-normal font-['Roboto'] leading-tight"><?php the_sub_field('name'); ?></div>
                    <div class="self-stretch text-[#020202] text-[40px] font-light font-['Roboto'] leading-[50px]"><?php the_sub_field('description'); ?></div>
                    <p class="headline"><?php the_sub_field('content'); ?></p>
                </div>

                
                  <?php if( have_rows('accordion') ): ?>

                    <?php $i = 1; ?>
                    <?php while( have_rows('accordion') ): the_row(); 
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');
                        ?>
  
                          <div class="my-accordion">
                            <div class="accordion-section">
                              <div class="accordion-header relative pt-4 pb-4 border-t border-neutral-400">
                                <!--<span class="accordion-number">
                                  < echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>
                                </span>-->
                                <h3><?php echo esc_html($title); ?></h3>
                                <div class="accordion-arrow absolute right-0 top-4">
                                  <img src="<?php echo get_template_directory_uri(); ?>/public/acc.png" alt="accordion arrow">
                                </div>
                              </div>
                              <div class="accordion-body ml-4 md:ml-10 md:mr-10 lead">
                                <?php echo $content; // display full HTML ?>
                              </div>
                            </div>
                          </div>
                          <?php $i++; ?>

                    <?php endwhile; ?>
                  <?php endif; ?>
                
            <?php endwhile; ?>
        <?php endif; ?>
      </div> 

      <div class="col-span-12 md:col-span-7">
                <?php if( have_rows('section3') ): ?>
                    <?php while( have_rows('section3') ): the_row(); 
                        $image = get_sub_field('image');?>
                            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                    <?php endwhile; ?>
                <?php endif; ?>
      </div> 
        
</div>

<div class="w-full mx-auto grid grid-cols-12 px-4 md:px-14 py-6 md:py-12 gap-6 md:gap-12">
      <div class="col-span-12 md:col-span-5">

        <?php if( have_rows('section4') ): ?>
            <?php while( have_rows('section4') ): the_row(); 
                // Get sub field values.
                $name = get_sub_field('name');
                $description = get_sub_field('description');
                $content = get_sub_field('content');
                ?>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <div class="text-[#4f4f4f] text-sm font-normal font-['Roboto'] leading-tight"><?php the_sub_field('name'); ?></div>
                    <div class="self-stretch text-[#020202] text-[40px] font-light font-['Roboto'] leading-[50px]"><?php the_sub_field('description'); ?></div>
                    <p class="headline"><?php the_sub_field('content'); ?></p>
                </div>

                
                  <?php if( have_rows('accordion') ): ?>

                    <?php $i = 1; ?>
                    <?php while( have_rows('accordion') ): the_row(); 
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');
                        ?>
  
                          <div class="my-accordion">
                            <div class="accordion-section">
                              <div class="accordion-header relative pt-4 pb-4 border-t border-neutral-400">
                                <!--<span class="accordion-number">
                                  < echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>
                                </span>-->
                                <h3><?php echo esc_html($title); ?></h3>
                                <div class="accordion-arrow absolute right-0 top-4">
                                  <img src="<?php echo get_template_directory_uri(); ?>/public/acc.png" alt="accordion arrow">
                                </div>
                              </div>
                              <div class="accordion-body ml-4 md:ml-10 md:mr-10 lead">
                                <?php echo $content; // display full HTML ?>
                              </div>
                            </div>
                          </div>
                          <?php $i++; ?>

                    <?php endwhile; ?>
                  <?php endif; ?>
                
            <?php endwhile; ?>
        <?php endif; ?>
      </div> 

      <div class="col-span-12 md:col-span-7">
                <?php if( have_rows('section3') ): ?>
                    <?php while( have_rows('section3') ): the_row(); 
                        $image = get_sub_field('image');?>
                            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                    <?php endwhile; ?>
                <?php endif; ?>
      </div> 
        
</div>

<div class="w-full justify-between items-end">
    <div class="px-4 md:px-14 max-w-max pt-20 mb-14 justify-start items-center">
        <a href="javascript:history.back()" class="group transition-all duration-1000 px-4 py-3 rounded-3xl border border-neutral-600 text-sm font-normal leading-tight flex justify-start items-center hover:bg-[#4F4F4F] hover:text-white">
            <svg class="transition-all duration-300 w-4 h-4 float-left mr-2 text-black group-hover:text-white group-hover:w-6 group-hover:h-4 group-hover:mr-4 group-hover:scale-150" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.85355 3.14645C7.04882 3.34171 7.04882 3.65829 6.85355 3.85355L3.70711 7H12.5C12.7761 7 13 7.22386 13 7.5C13 7.77614 12.7761 8 12.5 8H3.70711L6.85355 11.1464C7.04882 11.3417 7.04882 11.6583 6.85355 11.8536C6.65829 12.0488 6.34171 12.0488 6.14645 11.8536L2.14645 7.85355C1.95118 7.65829 1.95118 7.34171 2.14645 7.14645L6.14645 3.14645C6.34171 2.95118 6.65829 2.95118 6.85355 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            Previous page
        </a>
    </div>
</div>

</main>

<?php endwhile; endif; ?>


<script>
document.addEventListener('DOMContentLoaded', () => {
  const sections = document.querySelectorAll('.accordion-section');
  sections.forEach((section) => {
    const header = section.querySelector('.accordion-header');
    header.addEventListener('click', () => {
      sections.forEach((other) => {
        if (other !== section) {
          other.classList.remove('open');
        }
      });
      section.classList.toggle('open');
    });
  });
});
</script>

<?php
get_footer();
?>