<?php
/*
Template Name: FrontPage
*/

get_header();
?>

<div class="hidden md:flex fixed z-10  bottom-0 left-0 right-0  flex-col items-center gap-4 text-neutral-800"id="scrollIndicator">
        <span class="text-sm font-thin opacity-1 scroll-text">Scroll to discover</span>
        <svg 
            width="24" 
            height="32" 
            viewBox="0 0 24 32" 
            fill="none"
            stroke="currentColor" 
            stroke-width="1"
            stroke-linecap="round" 
            stroke-linejoin="round"
            class="scroll-arrow opacity-1"
        >
            <path d="M12 2v22M19 17l-7 7-7-7" />
        </svg>
</div>


<style>
.animation-container {
    height:400vh;
    width: 100vw;
    position: relative;
    scroll-behavior: smooth;
}
#first {
    height: 100vh;
}
#second {
    height: 100vh;
}
#third {
    height: 100vh;
}
#fourth {
    height: 100vh;
}
#ScrollableImage {
    position: fixed;
    transition: all 0.5s ease-out;
    --scroll-progress: 0;
    will-change: transform;
    aspect-ratio: 3/4;
    width: auto;
}

/* Mobile styles (up to 768px) */
@media screen and (max-width: 768px) {
    .animation-container {
 margin-bottom:100px;
}
    #ScrollableImage {
        height: 60vh; /* Smaller height for mobile */
    }

    .scrollposition-1 {
        right: 50%;
        top: 35%;
        transform: translate(50%, -50%) scale(1);
    }

    .scrollposition-2 {
        right: 50%;
        top: 50%;
        transform: translate(50%, -50%) scale(3);
    }

    .scrollposition-3 {
        right: 50%;
        top: 20%;
        transform: translate(50%, -50%) scale(3);
    }

    .scrollposition-4 {
        right: 50%;
        top: -93%;
        transform: translate(50%, 50%) scale(5);
    }
}

/* Desktop styles (769px and above) */
@media screen and (min-width: 769px) {
    #ScrollableImage {
        height: 90vh; /* Original height for desktop */
    }

    .scrollposition-1 {
        right: 46%;
        top: 50%;
        transform: translate(85%, -50%) scale(1);
    }

    .scrollposition-2 {
        right: 40%;
        top: 70%;
        transform: translate(50%, -33%) scale(4);
    }

    .scrollposition-3 {
        right: 33%;
        top: 20%;
        transform: translate(50%, -50%) scale(5);
    }

    .scrollposition-4 {
        right: 40%;
        top: -130%;
        transform: translate(50%, 0%) scale(6);
    }
}
@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

.fade-in {
    opacity: 0;
    animation: fadeIn 1s forwards;
    animation-delay: 1s; /* 200ms delay before animation starts */
}

</style>

<div id="ScrollableImage" class="fade-in">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/kk.png" class="z-[0] h-full w-auto" />
</div>


<div class="animation-container w-full relative"> 
    <div 
    data-aos="fade-in"
    data-aos-offset="100"
    data-aos-delay="0"
    data-aos-duration="600"
    data-aos-easing="ease-in"
    id="first" class="z-10 px-4 md:px-14 py-6 md:py-0 max-w-[820px] flex items-end md:items-center justify-start text-[#020202] text-5xl md:text-6xl font-thin font-['Roboto'] leading-[45px] md:leading-[60px]">Unmatched Precision, Reliability, and Adaptability in One Turnkey Solution</div>
    
    <div 
    data-aos="fade-in"
    data-aos-offset="600"
    data-aos-delay="0"
    data-aos-duration="600"
    data-aos-easing="ease-in"
    id="second" class="z-10 px-4 md:px-14 flex items-end md:items-center justify-start max-w-[720px]  text-[#020202] text-5xl md:text-6xl font-thin font-['Roboto'] leading-[60px]">
        <div class="">
        Stirrer Guide
        <p class="text-[#020202] text-xl font-thin font-['Roboto'] leading-[30px]">Innovative and Proprietary Design for Precision Stirring. High gas tightness and no sealing friction due to special material combinations. High chemical and thermal resistance through the use of high-quality materials.</p>
        </div>
    </div>
    <div id="third" class="z-10 px-4 md:px-14 flex items-end md:items-center justify-start max-w-[720px] text-[#020202] text-5xl md:text-6xl font-thin font-['Roboto'] leading-[60px]">
        <div class="">
        Glass Reactor
        <p class="text-[#020202] text-xl font-thin font-['Roboto'] leading-[30px]">Crafted from Premium Borosilicate Glass for Ultimate Clarity and Strength. Built for Rigorous Performance and Leak-Free Operation. Versatile and Compatible with a Wide Range of Lab Equipment</p>
        </div>
    </div>
    <div id="fourth" class="z-10 px-4 md:px-14 flex items-end md:items-center justify-start max-w-[720px] text-[#020202] text-5xl md:text-6xl font-thin font-['Roboto'] leading-[60px]">
        <div class="">
        Outlet Valve
        <p class="text-[#020202] text-xl font-thin font-['Roboto'] leading-[30px]">Dead Volume-Free Closure with very high safety standards. Temperature-Resistant and Self-Adjusting for Reliable Sealing. Integration in your Process Control System</p>
        </div>
    </div>
</div>



<script>
document.addEventListener('DOMContentLoaded', function() {
    const scrollableImage = document.getElementById('ScrollableImage');
    const container = document.querySelector('.animation-container');
    const sections = ['first', 'second', 'third', 'fourth'].map(id => document.getElementById(id));
    
    // Add initial class
    scrollableImage.classList.add('scrollposition-1');

    function handleScroll() {
        // Get scroll position relative to the animation container
        const scrollPosition = window.scrollY;
        const containerHeight = container.offsetHeight - window.innerHeight;
        
        // Calculate scroll progress (0 to 1)
        const progress = Math.min(Math.max(scrollPosition / containerHeight, 0), 1);
        
        // Update scroll progress CSS variable
        scrollableImage.style.setProperty('--scroll-progress', progress);

        // Determine which section we're in
        if (progress <= 0.25) {
            scrollableImage.classList.remove('scrollposition-2', 'scrollposition-3', 'scrollposition-4');
            scrollableImage.classList.add('scrollposition-1');
        } else if (progress <= 0.5) {
            scrollableImage.classList.remove('scrollposition-1', 'scrollposition-3', 'scrollposition-4');
            scrollableImage.classList.add('scrollposition-2');
        } else if (progress <= 0.75) {
            scrollableImage.classList.remove('scrollposition-1', 'scrollposition-2', 'scrollposition-4');
            scrollableImage.classList.add('scrollposition-3');
        } else {
            scrollableImage.classList.remove('scrollposition-1', 'scrollposition-2', 'scrollposition-3');
            scrollableImage.classList.add('scrollposition-4');
        }
    }

    // Add scroll event listener with requestAnimationFrame for better performance
    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                handleScroll();
                ticking = false;
            });
            ticking = true;
        }
    });
    
    // Initial check
    handleScroll();
});
</script>



<main class="min-w-full h-auto mx-auto overflow-x-hidden main-content bg-[#F3F3F3]">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


          <div class="w-full h-32 mx-auto px-4 md:px-14 py-12 bg-zinc-100/0 flex-col justify-start items-start gap-2.5 inline-flex">
              <div class="w-full h-full">
                <div class="text-Gray dark text-sm font-normal font-['Roboto'] leading-tight">Products</div>
                <div class="w-96 text-black text-3xl font-light font-['Roboto'] leading-10">Our products</div>
              </div>
          </div>
          
          <div class="mb-12">
            <?php display_products(); ?>
          </div> 

  
          <div class="relative  w-full bg-zinc-100/0 h-screen">
  
              <div
              class="absolute bottom-0 left-4 right-4 md:right-auto md:left-12 z-20 bg-white/50 backdrop-blur-md p-12  md:max-w-[440px] max-h-min rounded-md">
                  <h1 class="text-3xl font-light font-['Roboto'] py-3"><?php the_field('title'); ?></h1>
                  <p class="text-xl font-light font-['Roboto'] leading-8 pt-2 pb-4"><?php the_field('text'); ?></p>
                  <div class="pt-6 justify-start items-center gap-2 inline-flex">
                    <a href="/contact" class="group transition-all duration-1000 px-4 py-3 rounded-3xl border border-neutral-600 text-sm font-normal leading-tight flex justify-start items-center hover:bg-[#4F4F4F] hover:text-white">
                      Contact us
                      <svg class="transition-all duration-300 w-4 h-4 float-right ml-2 text-black group-hover:text-white group-hover:w-6 group-hover:h-4 group-hover:ml-4 group-hover:scale-150" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg> 
                    </a>
                  </div>
              </div>
  
              <video class="hidden md:block absolute top-0 bottom-0 left-0 right-0 z-10 w-full min-h-full" autoplay loop muted>
                  <source src="<?php echo get_stylesheet_directory_uri(); ?>/public/video2.mp4" type="video/mp4">
                  Your browser does not support the video tag.
              </video>

              <div class="block md:hidden absolute top-0 bottom-0 left-0 right-0 z-10 w-auto h-[960px] md:w-full md:h-auto rounded-md" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/tuz.gif'); background-position: center;"></div>
  
          </div>
  
          <div class="relative z-100 w-full min-h-[1260px] md:h-screen bg-cover items-center grid md:grid-cols-2 gap-16 pt-0 pb-0 px-4 md:px-14" style="background-image: url('<?php the_field('imaget'); ?>'); background-position: center top; background-size: cover;">

                <div class="absolute bottom-12 left-4 right-4 md:left-auto md:right-12 max-w-[640px] max-h-min">
                  <div class="bg-white/30 backdrop-blur-[10px] rounded-md p-12 w-full h-auto">
                    <h1 class="text-4xl font-light font-['Roboto'] py-3"><?php the_field('titlet'); ?></h1>
                    <p class="text-xl font-light font-['Roboto'] leading-8 xl:pt-2 pb-4"><?php the_field('textt'); ?></p>
                    <div class="pt-6 justify-start items-center gap-2 inline-flex">
                      <a href="/contact" class="group transition-all duration-1000 px-4 py-3 rounded-3xl border border-neutral-600 text-sm font-normal leading-tight flex justify-start items-center hover:bg-[#4F4F4F] hover:text-white">
                        Contact us
                        <svg class="transition-all duration-300 w-4 h-4 float-right ml-2 text-black group-hover:text-white group-hover:w-6 group-hover:h-4 group-hover:ml-4 group-hover:scale-150" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg> 
                      </a>
                    </div>
                  </div>
                </div>
          </div>
  
  
          <div class="pt-12 pb-12 w-full min-h-max px-4 md:px-16 md:pt-16 bg-[#EAEBEB] flex-col justify-start items-start gap-2.5 inline-flex">
              <div class="flex-col justify-start items-start gap-3.5 flex">
                <div 
                data-aos="fade-in"
                  data-aos-offset="100"
                  data-aos-delay="0"
                  data-aos-duration="600"
                  data-aos-easing="ease-in"
                class="w-full text-black text-3xl font-light font-['Roboto'] leading-10">History</div>
              </div>
          </div>


         
<!-- Mobile Timeline --> 
<div id="History" class="block md:hidden w-full min-h-max px-0 pb-12 bg-[#EAEBEB]"> 
  <div class="flex min-h-max items-center justify-center px-4">
        <div class="flex w-full max-w-6xl gap-12">
            <!-- Left side - Content -->
            <div class="relative flex-1">
                <div id="content-container" class="flex flex-col items-start">
                    <div class="relative mb-8 aspect-square w-full overflow-hidden rounded-full bg-black">
                        <img
                            id="timeline-image"
                            src="<?php echo get_template_directory_uri(); ?>/public/h1.png"
                            alt="Historical moment from 1941"
                            class="h-full w-full object-cover"
                        />
                    </div>
                    <h2 id="timeline-year" class="mb-4 text-6xl font-light">1941</h2>
                    <p id="timeline-description" class="text-lg text-gray-600">
                        Founded as a glass production workshop, initially crafting household items like flower vases. This early focus on glassworking laid the foundation for precision manufacturing.
                    </p>
                </div>
            </div>

            <!-- Right side - Timeline -->
            <div class="relative flex w-32 items-center justify-center">
                <div class="absolute h-full w-px bg-gray-200"></div>
                <div id="timeline-nav" class="relative flex flex-col items-center gap-16">
                    <!-- Timeline navigation will be populated by JavaScript -->
                </div>
            </div>
        </div>
  </div>
  <script>
        const timelineData = [
            {
                year: '1941',
                image: '<?php echo get_template_directory_uri(); ?>/public/h1.png',
                description: 'Founded as a glass production workshop, initially crafting household items like flower vases. This early focus on glassworking laid the foundation for precision manufacturing.'
            },
            {
                year: '1952',
                image: '<?php echo get_template_directory_uri(); ?>/public/h2.png',
                description: 'Relocated to Mainz and pivoted to industrial applications, specializing in mercury thermometers for refrigeration systems. This marked the company’s entry into scientific instrumentation.'
            },
            {
                year: '1960',
                image: '<?php echo get_template_directory_uri(); ?>/public/h3.png',
                description: 'Launched production of laboratory glassware, coinciding with the global post-war expansion of chemical research. Early products included basic beakers and flasks, leveraging borosilicate glass for thermal resistance—a material popularized by brands like Pyrex.'
            },
            {
                year: '1976',
                image: '<?php echo get_template_directory_uri(); ?>/public/h4.png',
                description: 'Commissioned a new production facility in Mainz, enabling advanced manufacturing of complex glass systems. This expansion supported tighter quality control and modular designs.'
            },
            {
                year: '1992',
                image: '<?php echo get_template_directory_uri(); ?>/public/h5.png',
                description: 'Innovated critical components for glass reactors, including PTFE-based stirrer guides and dead volume-free outlet valves with self-adjusting temperature compensation springs. These valves, sealing directly at reactor bottoms, minimized residue and improved chemical process efficiency.'
            },
            {
                year: '2020',
                image: '<?php echo get_template_directory_uri(); ?>/public/h6.png',
                description: 'Upgraded workplace safety and comfort by installing air conditioning and exhaust systems, reflecting adherence to modern occupational health standards.'
            },
            {
                year: '2021',
                image: '<?php echo get_template_directory_uri(); ?>/public/h7.png',
                description: 'Enhanced sustainability with solar panel installations, reducing reliance on non-renewable energy sources.'
            },
            {
                year: '2024',
                image: '<?php echo get_template_directory_uri(); ?>/public/h8.png',
                description: 'Plans finalized to boost production capacity via a larger natural gas receiving station, ensuring energy resilience for scaled manufacturing.'
            }
        ];

        let currentIndex = 0;

        function createTimelineNav() {
            const navContainer = document.getElementById('timeline-nav');
            timelineData.forEach((item, index) => {
                const button = document.createElement('button');
                button.className = 'group relative flex items-center';
                button.onclick = () => updateTimeline(index);
                button.innerHTML = `
                    <div class="relative z-10 h-3 w-3 rounded-full transition-all ${index === 0 ? 'h-4 w-4 bg-black outline outline-offset-1 outline-black' : 'bg-gray-300 group-hover:bg-gray-400'}" id="dot-${index}"></div>
                    <span class="absolute left-8 whitespace-nowrap text-sm transition-all ${index === 0 ? 'font-medium text-black' : 'text-gray-400 group-hover:text-gray-600'}" id="year-${index}">${item.year}</span>
                `;
                navContainer.appendChild(button);
            });
        }

        function updateTimeline(index) {
            currentIndex = index;
            
            document.getElementById('timeline-image').src = timelineData[index].image;
            document.getElementById('timeline-image').alt = `Historical moment from ${timelineData[index].year}`;
            document.getElementById('timeline-year').textContent = timelineData[index].year;
            document.getElementById('timeline-description').textContent = timelineData[index].description;
            
            timelineData.forEach((_, i) => {
                const dot = document.getElementById(`dot-${i}`);
                const year = document.getElementById(`year-${i}`);
                
                dot.className = `relative z-10 h-3 w-3 rounded-full transition-all ${
                    i === index 
                        ? 'h-4 w-4 bg-black' 
                        : 'bg-gray-300 group-hover:bg-gray-400'
                }`;
                
                year.className = `absolute left-8 whitespace-nowrap text-sm transition-all ${
                    i === index
                        ? 'font-medium text-black'
                        : 'text-gray-400 group-hover:text-gray-600'
                }`;
            });
        }

        // Initialize the timeline
        createTimelineNav();
</script>
</div>
<!-- END Mobile Timeline -->


<!-- Desktop Timeline --> 
<div id="History" class="hidden md:block w-full min-h-max px-0 pb-12 bg-[#EAEBEB]"> 
<style>
        .timeline-dot {
            transition: all 0.3s ease;
            background-color: #898989;
            outline: 0px solid #030303;
            outline-offset: 0px;
        }
        .timeline-dot.active {
            background-color: #030303;
            outline: 1px solid #030303;
            outline-offset: 1px;
            transition: all 0.3s ease;
        }
        .timeline-line {
            position: absolute;
            width: 1px;
            background-color: #898989;
            left: 4px;
            transform: translateX(-50%);
            opacity: 0.5;
        }
  </style>
<div class="min-h-max p-8 md:p-12">
        
        <div class="relative flex min-h-[600px] items-top justify-center gap-12 md:gap-28">
            <!-- Left Content -->
            <div class="hidden w-1/3 md:block">
                <div class="timeline-image aspect-square overflow-hidden rounded-full bg-[#EAEBEB]">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/public/h1.png"
                        alt="Historical glass item"
                        class="h-full w-full object-cover transition-all duration-500"
                    />
                </div>
            </div>

            <!-- Center Timeline -->
            <div class="relative mx-4 flex h-full flex-col items-top">
                <div class="relative z-10 flex h-full flex-col items-center justify-around " id="timelineDots">
                    <!-- Timeline dots and lines will be inserted here by JavaScript -->
                </div>
            </div>

            <!-- Right Content -->
            <div class="w-full md:w-1/3">
                <div class="timeline-content space-y-6 transition-all duration-500">
                    <h2 class="text-6xl font-extralight" id="yearText">1941</h2>
                    <p class="text-gray-600 leading-relaxed" id="descriptionText">
                        Founded as a glass production workshop, initially crafting household items like flower vases. 
                        This early focus on glassworking laid the foundation for precision manufacturing.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script>
        const historyMilestones = [
            {
                year: '1941',
                image: '<?php echo get_template_directory_uri(); ?>/public/h1.png',
                text: 'Founded as a glass production workshop, initially crafting household items like flower vases. This early focus on glassworking laid the foundation for precision manufacturing.'
            },
            {
                year: '1952',
                image: '<?php echo get_template_directory_uri(); ?>/public/h2.png',
                text: 'Relocated to Mainz and pivoted to industrial applications, specializing in mercury thermometers for refrigeration systems. This marked the company’s entry into scientific instrumentation.'
            },
            {
                year: '1960',
                image: '<?php echo get_template_directory_uri(); ?>/public/h3.png',
                text: 'Launched production of laboratory glassware, coinciding with the global post-war expansion of chemical research. Early products included basic beakers and flasks, leveraging borosilicate glass for thermal resistance—a material popularized by brands like Pyrex.'
            },
            {
                year: '1976',
                image: '<?php echo get_template_directory_uri(); ?>/public/h4.png',
                text: 'Commissioned a new production facility in Mainz, enabling advanced manufacturing of complex glass systems. This expansion supported tighter quality control and modular designs.'
            },
            {
                year: '1992',
                image: '<?php echo get_template_directory_uri(); ?>/public/h5.png',
                text: 'Innovated critical components for glass reactors, including PTFE-based stirrer guides and dead volume-free outlet valves with self-adjusting temperature compensation springs. These valves, sealing directly at reactor bottoms, minimized residue and improved chemical process efficiency.'
            },
            {
                year: '2020',
                image: '<?php echo get_template_directory_uri(); ?>/public/h6.png',
                text: 'Upgraded workplace safety and comfort by installing air conditioning and exhaust systems, reflecting adherence to modern occupational health standards.'
            },
            {
                year: '2021',
                image: '<?php echo get_template_directory_uri(); ?>/public/h7.png',
                text: 'Enhanced sustainability with solar panel installations, reducing reliance on non-renewable energy sources.'
            },
            {
                year: '2024',
                image: '<?php echo get_template_directory_uri(); ?>/public/h8.png',
                text: 'Plans finalized to boost production capacity via a larger natural gas receiving station, ensuring energy resilience for scaled manufacturing.'
            }
        ];

        let activeIndex = 0;
        let isAnimating = false;

        // Initialize timeline dots
        const timelineDots = document.getElementById('timelineDots');
        const yearText = document.getElementById('yearText');
        const descriptionText = document.getElementById('descriptionText');
        const timelineImage = document.querySelector('.timeline-image img');
        const timelineContent = document.querySelector('.timeline-content');

        // Create timeline dots and connecting lines
        historyMilestones.forEach((item, index) => {
            const wrapper = document.createElement('div');
            wrapper.className = 'relative';

            // Add connecting line if not the last item
            if (index < historyMilestones.length - 1) {
                const line = document.createElement('div');
                line.className = 'timeline-line h-full absolute top-[10px] left-[-10px]';
                wrapper.appendChild(line);
            }

            const button = document.createElement('button');
            button.className = `xl:mb-10 2xl:mb-16 group flex items-center gap-0 transition-all duration-300 relative`;
            button.innerHTML = `
                <div class="timeline-dot h-2 w-2 rounded-full border border-gray-300 transition-all duration-300 ${
                    index === activeIndex ? 'active scale-150' : ''
                }"></div>
                <span class="ml-3 w-10 text-right text-sm text-gray-400 transition-all duration-300 ${
                    index === activeIndex ? 'font-medium text-gray-900' : ''
                }">
                    ${item.year}
                </span>
            `;
            button.addEventListener('click', () => handleDotClick(index));
            wrapper.appendChild(button);
            timelineDots.appendChild(wrapper);
        });

        function handleDotClick(index) {
            if (isAnimating || index === activeIndex) return;
            isAnimating = true;

            // Update active dot
            const dots = timelineDots.querySelectorAll('button');
            const currentDot = dots[activeIndex].querySelector('.timeline-dot');
            const currentYear = dots[activeIndex].querySelector('span');
            const newDot = dots[index].querySelector('.timeline-dot');
            const newYear = dots[index].querySelector('span');

            currentDot.classList.remove('active', 'scale-150');
            currentYear.classList.remove('font-medium', 'text-gray-900');
            newDot.classList.add('active', 'scale-150');
            newYear.classList.add('font-medium', 'text-gray-900');

            // Animate content out
            timelineContent.classList.add('translate-y-4', 'opacity-0');
            timelineImage.classList.add('scale-95', 'opacity-80');

            // Update content after brief delay
            setTimeout(() => {
                yearText.textContent = historyMilestones[index].year;
                descriptionText.textContent = historyMilestones[index].text;
                timelineImage.src = historyMilestones[index].image;

                // Animate content in
                timelineContent.classList.remove('translate-y-4', 'opacity-0');
                timelineImage.classList.remove('scale-95', 'opacity-80');

                activeIndex = index;
                setTimeout(() => {
                    isAnimating = false;
                }, 500);
            }, 500);
        }
    </script>
</div>
<!-- END Desktop Timeline --> 

  

          <div
          data-aos="fade-in-up"
          data-aos-offset="300"
          data-aos-delay="0"
          data-aos-duration="600"
          data-aos-easing="ease-in" 
          class="bg-[#F2F3F3]">
              <div class="grid grid-cols-12 px-4 md:px-14 py-24 gap-6 md:gap-12 lg:gap-24">
                <div class="col-span-12 md:col-span-3 lg:col-span-4 flex-col justify-start items-start gap-3 inline-flex">
                  <div class="text-left text-black text-3xl font-light font-['Roboto'] leading-10">Certifications</div>
                  <div class="self-stretch text-black text-base font-light font-['Roboto'] leading-normal">Leading laboratories trust our expertise to create custom glass reactors that meet their precise research needs.</div>
                </div>
                <div class="col-span-12 md:col-span-9 lg:col-span-8">
                    <?php include(get_template_directory() . '/logos.php'); ?>
                </div>
              </div>
          </div>

  
<div
data-aos="fade-in-up"
data-aos-offset="300"
data-aos-delay="0"
data-aos-duration="600"
data-aos-easing="ease-in" 
class="min-w-auto h-px mx-4 md:mx-14 bg-stone-800"></div>

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
        <a href="/contact" class="z-100 group transition-all duration-1000 px-4 py-2 rounded-3xl border border-neutral-600 text-sm font-normal leading-tight flex justify-start items-center bg-[#000] hover:bg-[#4F4F4F] text-white">
          Find
          <svg class="transition-all duration-300 w-5 h-5 float-right ml-2 text-white group-hover:text-white group-hover:w-6 group-hover:h-4 group-hover:ml-4 group-hover:scale-150" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg> 
        </a>
      </div>
  </div>
</div>
          
<?php endwhile; endif; ?> 
</main>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const scrollIndicator = document.getElementById('scrollIndicator');
    let lastScrollTop = 0;
    const scrollThreshold = 100; // Adjust this value to control when the fade starts

    window.addEventListener('scroll', () => {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > scrollThreshold) {
            scrollIndicator.style.opacity = '0';
            scrollIndicator.style.pointerEvents = 'none';
        } else {
            // Calculate opacity based on scroll position
            const opacity = 1 - (scrollTop / scrollThreshold);
            scrollIndicator.style.opacity = opacity;
            scrollIndicator.style.pointerEvents = 'auto';
        }
        
        lastScrollTop = scrollTop;
    });
});
</script>


<?php get_footer(); ?>
