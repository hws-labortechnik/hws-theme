<?php
/*
Template Name: Industries
*/

get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main class="w-full min-h-[1400px]">


<div
data-aos="fade-in"
data-aos-offset="0"
data-aos-delay="0"
data-aos-duration="600"
data-aos-easing="ease-in-out" 
class="w-full pr-16 justify-between items-end inline-flex">
        <div class="px-4 md:px-14 py-12 flex-col justify-start items-start gap-3.5 inline-flex">
          <div class="mt-28 w-16 text-neutral-600 text-sm font-normal font-['Roboto'] leading-tight">Industries</div>
          <div class="md:max-w-[60%] text-black text-3xl font-light font-['Roboto'] leading-10"><?php the_title(); ?></div>
        </div>
</div>

<div id="IndustryGrid" class="w-full h-full px-4 md:px-14 grid grid-cols-12 gap-6">
    <div 
    data-aos="fade-in"
data-aos-offset="0"
data-aos-delay="200"
data-aos-duration="600"
data-aos-easing="ease-in-out"
    class="col-span-12 md:col-span-6 bg-black justify-start items-start flex rounded-lg px-6 py-12 min-h-full">
        <div class="self-stretch h-full flex-col justify-start items-start gap-3.5 flex">
          <div class="w-14 h-24 relative">
            <img src="<?php echo esc_url( site_url('/wp-content/uploads/2025/09/Chemical-industry.png') ); ?>" alt="Chemical Industry">
          </div>
          <div class="self-stretch text-white text-3xl font-light font-['Roboto'] leading-10"><?php the_field('name'); ?></div>
          <div class="self-stretch text-white text-base font-light font-['Roboto'] leading-normal"><?php the_field('title'); ?></div>
        </div>
    </div>
    <div
    data-aos="fade-in"
data-aos-offset="0"
data-aos-delay="400"
data-aos-duration="600"
data-aos-easing="ease-in-out" 
    class="col-span-12 md:col-span-6 bg-black rounded-lg justify-start items-start flex px-6 py-12 min-h-full">
      <div class="self-stretch h-full flex-col justify-start items-start gap-3.5 flex">
        <div class="w-14 h-24 relative">
            <img src="<?php echo esc_url( site_url('/wp-content/uploads/2025/09/Pharmaceutical-industry.png') ); ?>" alt="Pharmaceutical Industry">
        </div>
        <div class="self-stretch text-white text-3xl font-light font-['Roboto'] leading-10"><?php the_field('name2'); ?></div>
        <div class="self-stretch text-white text-base font-light font-['Roboto'] leading-normal"><?php the_field('title2'); ?></div>
      </div>
    </div>
</div>

<div class="mt-6 h-full px-4 md:px-16 bg-zinc-100 gap-6 grid grid-cols-12">

    <div class="col-span-12 md:col-span-4 px-6 py-12 bg-black rounded-lg justify-start items-start flex">
      <div class="grow shrink basis-0 flex-col justify-center items-start gap-3.5 inline-flex">
        <div class="w-14 h-24 relative">
            <img src="<?php echo esc_url( site_url('/wp-content/uploads/2025/09/Oil-and-Petrochemical-Industry.png') ); ?>" alt="Oil and Petrochemical Industry">
        </div>
        <div class="self-stretch text-white text-3xl font-light font-['Roboto'] leading-10"><?php the_field('name3'); ?></div>
        <div class="self-stretch text-white text-base font-light font-['Roboto'] leading-normal"><?php the_field('title3'); ?></div>
      </div>
    </div>
    <div class="col-span-12 md:col-span-4  px-6 py-12 bg-black rounded-lg justify-start items-start flex">
      <div class="grow shrink basis-0 flex-col justify-center items-start gap-3.5 inline-flex">
        <div class="w-14 h-24 relative">
            <img src="<?php echo esc_url( site_url('/wp-content/uploads/2025/09/Food-and-Beverage-Industry.png') ); ?>" alt="Food and Beverage Industry">
        </div>
        <div class="self-stretch text-white text-3xl font-light font-['Roboto'] leading-10"><?php the_field('name4'); ?></div>
        <div class="self-stretch text-white text-base font-light font-['Roboto'] leading-normal"><?php the_field('title4'); ?></div>
      </div>
    </div>
    <div class="col-span-12 md:col-span-4 px-6 py-12 bg-black rounded-lg justify-start items-start flex">
      <div class="grow shrink basis-0 flex-col justify-center items-start gap-3.5 inline-flex">
        <div class="w-14 h-24 relative">
            <img src="<?php echo esc_url( site_url('/wp-content/uploads/2025/09/Environmental-Protection-Industry.png') ); ?>" alt="Environmental Protection Industry">
        </div>
        <div class="self-stretch text-white text-3xl font-light font-['Roboto'] leading-10"><?php the_field('name5'); ?></div>
        <div class="self-stretch text-white text-base font-light font-['Roboto'] leading-normal"><?php the_field('title5'); ?></div>
      </div>
    </div>
</div>

<div class="w-full justify-between items-end">
    <div class="px-4 md:px-14 max-w-max pt-20 mb-14 justify-start items-center">
        <a href="/" class="group transition-all duration-1000 px-4 py-3 rounded-3xl border border-neutral-600 text-sm font-normal leading-tight flex justify-start items-center hover:bg-[#4F4F4F] hover:text-white">
            <svg class="transition-all duration-300 w-4 h-4 float-left mr-2 text-black group-hover:text-white group-hover:w-6 group-hover:h-4 group-hover:mr-4 group-hover:scale-150" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.85355 3.14645C7.04882 3.34171 7.04882 3.65829 6.85355 3.85355L3.70711 7H12.5C12.7761 7 13 7.22386 13 7.5C13 7.77614 12.7761 8 12.5 8H3.70711L6.85355 11.1464C7.04882 11.3417 7.04882 11.6583 6.85355 11.8536C6.65829 12.0488 6.34171 12.0488 6.14645 11.8536L2.14645 7.85355C1.95118 7.65829 1.95118 7.34171 2.14645 7.14645L6.14645 3.14645C6.34171 2.95118 6.65829 2.95118 6.85355 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            Back to Home
        </a>
    </div>
</div>

<div
data-aos="fade-in"
data-aos-offset="200"
data-aos-delay="0"
data-aos-duration="1000"
data-aos-easing="ease-in-out"   
class="min-w-autol h-px mx-4 md:mx-14 bg-stone-800"></div>

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
<?php endwhile; endif; ?>
<?php
get_footer();
?>