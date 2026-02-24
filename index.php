<?php get_header(); ?>



<div 
  id="videoContainer"
  class="fullscreen-video-container"> 
    <video id="myVideo" muted playsinline preload="auto">
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/public/compXXXX.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

<main class="w-full mx-auto overflow-x-hidden main-content">


          <div class="xl:max-w-[1440px] xl:mx-auto w-full px-14 py-12 bg-zinc-100/0 flex-col justify-start items-start gap-2.5 inline-flex">
              <div class=" ">
                <div class="text-Gray dark text-sm font-normal font-['Roboto'] leading-tight">Products</div>
                <div class="w-96 h-11 text-black text-3xl font-light font-['Roboto'] leading-10">Our products</div>
              </div>
          </div>
<div class="min-h-2xl">
  <?php display_products(); ?>
</div> 

  
          <div class="relative  w-full bg-zinc-100/0 h-screen">
  
              <div class="absolute bottom-28 left-12 z-20 bg-white/50 backdrop-blur-md p-12 max-w-[440px] max-h-min rounded-md">
                  <h1 class="text-3xl font-light font-['Roboto'] py-3">Quality / Functionality</h1>
                  <p class="text-xl font-light font-['Roboto'] leading-8 pt-2 pb-4">Through the use of the highest quality raw materials such as borosilicate glass 3.3 and the longstanding experience of our production team, HWS products are manufactured at the highest level to ensure seamless operation in customer processes.</p>
                  <div class="pt-6 justify-start items-center gap-2 inline-flex">
                    <a href="post.html" class="group transition-all duration-1000 px-4 py-3 rounded-3xl border border-neutral-600 text-sm font-normal leading-tight flex justify-start items-center hover:bg-[#4F4F4F] hover:text-white">
                      Contact us
                      <svg class="transition-all duration-300 w-4 h-4 float-right ml-2 text-black group-hover:text-white group-hover:w-6 group-hover:h-4 group-hover:ml-4 group-hover:scale-150" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg> 
                    </a>
                  </div>
              </div>
  
              <video class="absolute top-0 left-0 right-0 z-10" autoplay loop muted class="w-full rounded-md">
                  <source src="<?php echo get_stylesheet_directory_uri(); ?>/public/video2.mp4" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
  
          </div>
  
          <div class="w-full h-screen bg-cover items-center grid md:grid-cols-2 gap-16 pr-12 pt-0 pb-0" style="background-image: url('https://utopia.express/hws/static/public/customers.png'); background-position: center;">
              <div class="md:col-span-1"></div>
              <div class="md:col-span-1 bg-white/30 backdrop-blur-[10px] p-12 rounded-md mt-28">
                  <h1 class="text-4xl font-light font-['Roboto'] py-3">Trusted by Leading Chemical Companies and Research Labs Worldwide</h1>
                  <p class="text-xl font-light font-['Roboto'] leading-8 pt-2 pb-4">HWS products power innovation in labs of all sizes, from the world’s largest chemical corporations to specialized research facilities. Our equipment is designed to meet the highest standards of quality and precision, supporting groundbreaking discoveries and reliable processes across the globe. Join a community of scientists and researchers who trust HWS for their most demanding applications.</p>
                  <div class="pt-6 justify-start items-center gap-2 inline-flex">
                    <a href="post.html" class="group transition-all duration-1000 px-4 py-3 rounded-3xl border border-neutral-600 text-sm font-normal leading-tight flex justify-start items-center hover:bg-[#4F4F4F] hover:text-white">
                      Contact us
                      <svg class="transition-all duration-300 w-4 h-4 float-right ml-2 text-black group-hover:text-white group-hover:w-6 group-hover:h-4 group-hover:ml-4 group-hover:scale-150" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg> 
                    </a>
                  </div>
              </div>
          </div>
  
  
          <div class="w-full h-36 px-16 pt-16 bg-zinc-100 flex-col justify-start items-start gap-2.5 inline-flex">
              <div class="h-20 flex-col justify-start items-start gap-3.5 flex">
                <div class="w-96 h-11 text-black text-3xl font-light font-['Roboto'] leading-10">History</div>
              </div>
          </div>
  
          <div id="History" class="scrollable w-full h-[444px] px-16"> 
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/history.png" alt="History" class="min-w-max" />
          </div>

  
  
          <div class="h-80 py-28 bg-zinc-100 flex-col justify-start items-start gap-2.5 inline-flex">
              <div class="self-stretch h-10 px-14 justify-start items-start gap-32 inline-flex">
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                  <div class="text-center text-black text-3xl font-light font-['Roboto'] leading-10">Certifications & Security Seals</div>
                  <div class="self-stretch text-black text-base font-light font-['Roboto'] leading-normal">First lorem iscovered the undoubtable source. Phasellus venenatis diam et pulvinar egestas. Quisque id iaculis elit. Nam rutrum accumsan mi in interdum. </div>
                </div>
                <div class="grow shrink basis-0 h-20 gap-6 justify-between items-center flex">
                  <div class="w-20 h-20 bg-zinc-500 rounded-full"></div>
                  <div class="w-20 h-20 bg-zinc-500 rounded-full"></div>
                  <div class="w-20 h-20 bg-zinc-500 rounded-full"></div>
                  <div class="w-20 h-20 bg-zinc-500 rounded-full"></div>
                  <div class="w-20 h-20 bg-zinc-500 rounded-full"></div>
                </div>
              </div>
          </div>
  
  
          <div class="w-full h-48 px-14 bg-zinc-100 justify-start items-center gap-12 inline-flex border-t border-neutral-600">
              <div class="flex-col justify-center items-start gap-3.5 inline-flex">
                <div class="text-black text-4xl font-light font-['Roboto'] leading-10">Find our representatives worldwide</div>
              </div>
              <div class="justify-start items-center gap-2 inline-flex">
                <a href="contact.html" class="group transition-all duration-1000 px-4 py-2 rounded-3xl border border-neutral-600 text-sm font-normal leading-tight flex justify-start items-center bg-[#000] hover:bg-[#4F4F4F] text-white">
                  Find
                  <svg class="transition-all duration-300 w-5 h-5 float-right ml-2 text-white group-hover:text-white group-hover:w-6 group-hover:h-4 group-hover:ml-4 group-hover:scale-150" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg> 
                </a>
              </div>
          </div>
  
</main>





<?php get_footer(); ?>
