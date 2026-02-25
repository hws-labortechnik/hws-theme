<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet"type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
    <link rel="stylesheet"type="text/css" href="<?php echo get_template_directory_uri(); ?>/theme.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/public/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/public/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/public/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/public/site.webmanifest">
    <?php wp_head(); ?>

    <style>
.trp-language-switcher {
  height: auto;
  position: relative;
  box-sizing: border-box;
  width: auto;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.trp-language-switcher > div {
  box-sizing: border-box;
  padding: 0px 10px 0px 10px!important;
  border: 1px solid #e1e1e1!important;
  border-radius: 30px!important;
  background-image: url("<?php echo get_template_directory_uri(); ?>/public/lang.svg");
  background-repeat: no-repeat;
  background-position: calc(100% - 20px) calc(1em + 2px), calc(100% - 3px) calc(1em + 0px);
  background-size: 8px 8px, 8px 8px;
  background-repeat: no-repeat;
  background-color: transparent;
}

div.trp-ls-shortcode-current-language {
width:85px!important;
}

    </style>


    
</head>
<body class="bg-[#f2f3f3] overflow-x-hidden <?php body_class(); ?>">

<!-- Mobile Menu Sheet -->
<div id="mobileMenuSheet" class="px-2 fixed top-[78px] inset-0 bg-[#f2f3f3]/80 backdrop-blur-sm transform translate-x-full transition-transform duration-300 ease-in-out z-50">
    <div class="flex flex-col h-full px-2 pt-12 pb-6">
        <!-- Close button -->
        <button id="closeMenu" class="absolute -top-14 right-4 w-10 h-10 p-2 bg-transparent bg-[#f2f3f3]">
          <!-- 
          <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>-->
        </button>
        
        <!-- Mobile Navigation Links -->


        <nav class="flex flex-col gap-6 relative">
            <a href="/products" class="text-black text-xl font-light font-['Roboto'] py-2 border-b border-gray-200">Products</a>
            <a href="/services" class="text-black text-xl font-light font-['Roboto'] py-2 border-b border-gray-200">Services</a>
            <a href="/industries" class="text-black text-xl font-light font-['Roboto'] py-2 border-b border-gray-200">Industries</a>
            <a href="/downloads" class="text-black text-xl font-light font-['Roboto'] py-2 border-b border-gray-200">Downloads</a>
            <a href="/blog" class="text-black text-xl font-light font-['Roboto'] py-2 border-b border-gray-200">Blog</a>
            <a href="/contact" class="text-black text-xl font-light font-['Roboto'] py-2 border-b border-gray-200">Contact</a>
        </nav>
        
        <!-- Language Selector in Mobile Menu -->
        <div class="mt-auto">
            <div class="flex gap-4">
                <a href="https://hws-mainz.de" class="text-black text-base font-light">EN</a>
                <a href="https://hws-mainz.de/de" class="text-black text-base font-light">DE</a>
            </div>
        </div>
    </div>
</div>

<!-- Modified Header with new hamburger button -->
<header id="navbar" class="px-4 md:px-14 fixed w-full top-0 left-0 bg-[#f2f3f3]/40 backdrop-blur-md z-40">
  <div class="lg:w-full mx-auto h-24 bg-transparent flex justify-between items-center">
    <!-- Logo section -->
    <div class="w-[139px] h-14 relative">
      <a href="/" class="w-[139px] h-auto left-0 top-0 absolute z-[9999]">
        <svg width="139" height="57" viewBox="0 0 139 57" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_2465_12957)">
        <path d="M119.849 37.3099C114.981 37.3099 110.404 35.4155 106.967 31.9721C103.618 28.6259 99.1718 26.7852 94.4409 26.7852C89.71 26.7852 85.264 28.6259 81.9145 31.9721C78.4711 35.4155 73.8977 37.3099 69.0327 37.3099C64.1676 37.3099 59.5909 35.4155 56.1509 31.9721C52.8047 28.6259 48.3588 26.7852 43.6245 26.7852C38.8902 26.7852 34.4476 28.6259 31.0981 31.9721C27.658 35.4155 23.0847 37.3099 18.2163 37.3099C8.171 37.3099 0 29.1355 0 19.0903C0 9.04502 8.171 0.874023 18.2163 0.874023C23.0411 0.874023 27.5909 2.74158 31.021 6.13471C31.0712 6.18165 31.1249 6.2353 31.1752 6.28559C34.5147 9.58148 38.9338 11.3988 43.6245 11.3988C48.3152 11.3988 52.7376 9.58148 56.0738 6.28559C56.1274 6.2353 56.1743 6.18836 56.2213 6.14142C59.6647 2.74158 64.2112 0.874023 69.0327 0.874023C73.8541 0.874023 78.4007 2.74158 81.8374 6.13471C81.8877 6.18165 81.9413 6.2353 81.9916 6.28559C85.3311 9.58148 89.7502 11.3988 94.4409 11.3988C99.1316 11.3988 103.551 9.58148 106.89 6.28559C106.94 6.2353 106.994 6.18165 107.048 6.13136C110.474 2.74494 115.021 0.877376 119.846 0.877376C129.891 0.877376 138.062 9.04837 138.062 19.0936C138.062 29.1389 129.891 37.3133 119.846 37.3133L119.849 37.3099ZM94.4409 26.2822C99.3059 26.2822 103.879 28.1766 107.323 31.6167C110.666 34.9629 115.115 36.807 119.849 36.807C129.616 36.807 137.562 28.8606 137.562 19.0903C137.562 9.31996 129.616 1.37696 119.849 1.37696C115.155 1.37696 110.736 3.19422 107.4 6.49012C107.343 6.54376 107.296 6.5907 107.246 6.641C103.812 10.0341 99.2624 11.9017 94.4409 11.9017C89.6194 11.9017 85.0729 10.0341 81.6362 6.641C81.5859 6.5907 81.539 6.54376 81.4853 6.49347C78.1425 3.19087 73.72 1.3736 69.0293 1.3736C64.3386 1.3736 59.9195 3.19087 56.58 6.48676C56.523 6.54376 56.4728 6.5907 56.4225 6.641C52.9958 10.0274 48.4493 11.895 43.6245 11.895C38.7997 11.895 34.2565 10.0274 30.8198 6.63429C30.7695 6.584 30.7225 6.53706 30.6689 6.48676C27.3294 3.19422 22.9103 1.37696 18.2163 1.37696C8.44929 1.37696 0.502934 9.32331 0.502934 19.0903C0.502934 28.8573 8.44929 36.807 18.2163 36.807C22.9505 36.807 27.3998 34.9629 30.7427 31.6167C34.1861 28.1766 38.7594 26.2822 43.6245 26.2822C48.4895 26.2822 53.0662 28.1766 56.5063 31.6167C59.8525 34.9629 64.3018 36.807 69.0327 36.807C73.7636 36.807 78.2129 34.9629 81.5591 31.6167C85.0025 28.1766 89.5792 26.2822 94.4409 26.2822Z" fill="#030303"/>
        <path d="M1.57328 56.3444H4.63447V56.787H1.04688V50.5908H1.57328V56.3444Z" fill="#030303"/>
        <path d="M15.8828 55.0468H13.0697L12.4327 56.787H11.8828L14.2298 50.5908H14.7294L17.0764 56.787H16.5333L15.8895 55.0468H15.8828ZM13.2307 54.6042H15.7152L14.4712 51.2279L13.2273 54.6042H13.2307Z" fill="#030303"/>
        <path d="M24.7969 56.787V50.5908H26.6276C27.2914 50.5908 27.7944 50.7283 28.1397 51.0032C28.4817 51.2782 28.6561 51.6805 28.6561 52.2136C28.6561 52.5355 28.5689 52.8138 28.3945 53.0518C28.2202 53.2899 27.9821 53.4575 27.677 53.5615C28.0358 53.642 28.3275 53.8197 28.5488 54.0946C28.7701 54.3695 28.8773 54.6881 28.8773 55.0468C28.8773 55.5933 28.6996 56.0225 28.3476 56.331C27.9955 56.6394 27.5027 56.7937 26.8723 56.7937H24.8002L24.7969 56.787ZM25.3199 53.3704H26.7516C27.1875 53.3603 27.5261 53.2597 27.7675 53.0619C28.0089 52.8641 28.1263 52.5757 28.1263 52.1969C28.1263 51.7979 28.0022 51.5062 27.7541 51.315C27.506 51.1273 27.1305 51.03 26.6276 51.03H25.3199V53.367V53.3704ZM25.3199 53.8129V56.3444H26.8891C27.3384 56.3444 27.6938 56.2304 27.9553 56.0024C28.2168 55.7744 28.3476 55.4592 28.3476 55.0535C28.3476 54.6713 28.2202 54.3695 27.9721 54.1449C27.7206 53.9236 27.3752 53.8096 26.9327 53.8096H25.3199V53.8129Z" fill="#030303"/>
        <path d="M41.5352 54.0239C41.5352 54.5939 41.438 55.0935 41.2401 55.526C41.0423 55.9585 40.7607 56.2904 40.3952 56.5218C40.0297 56.7531 39.6073 56.8705 39.1278 56.8705C38.4036 56.8705 37.8202 56.6123 37.3743 56.0926C36.9283 55.5763 36.707 54.8755 36.707 53.9971V53.36C36.707 52.7967 36.8076 52.2938 37.0054 51.8579C37.2033 51.422 37.4883 51.0868 37.8537 50.8521C38.2192 50.6174 38.6416 50.5 39.1178 50.5C39.5939 50.5 40.0163 50.614 40.3784 50.8453C40.7439 51.0767 41.0256 51.3986 41.2234 51.821C41.4212 52.2402 41.5251 52.7263 41.5352 53.2796V54.0205V54.0239ZM41.0121 53.35C41.0121 52.6023 40.8445 52.0189 40.5059 51.5964C40.1672 51.1739 39.7045 50.9627 39.1178 50.9627C38.531 50.9627 38.0817 51.1739 37.7397 51.5997C37.3977 52.0256 37.2267 52.6157 37.2267 53.3768V54.0239C37.2267 54.7582 37.3977 55.3416 37.7364 55.7707C38.075 56.1999 38.5377 56.4145 39.1245 56.4145C39.7112 56.4145 40.1806 56.2033 40.5126 55.7775C40.8445 55.3516 41.0121 54.7615 41.0121 54.0038V53.3466V53.35Z" fill="#030303"/>
        <path d="M51.9871 54.2048H50.1866V56.7899H49.6602V50.5938H51.6719C52.3324 50.5938 52.8488 50.7547 53.2209 51.0732C53.5931 51.3951 53.7775 51.841 53.7775 52.4177C53.7775 52.8134 53.6602 53.1654 53.4288 53.4672C53.1975 53.7689 52.8856 53.9802 52.4933 54.0975L54.0424 56.7363V56.7932H53.4858L51.9871 54.2082V54.2048ZM50.1866 53.7622H51.7926C52.2318 53.7622 52.5872 53.6382 52.8521 53.3867C53.117 53.1352 53.2511 52.8134 53.2511 52.4144C53.2511 51.9751 53.1103 51.6365 52.8353 51.3951C52.5571 51.1537 52.1681 51.033 51.6652 51.033H50.1866V53.7622Z" fill="#030303"/>
        <path d="M65.8895 51.0334H63.7671V56.787H63.244V51.0334H61.125V50.5908H65.8928V51.0334H65.8895Z" fill="#030303"/>
        <path d="M77.1264 53.8163H74.2262V56.3444H77.559V56.787H73.7031V50.5908H77.5388V51.0334H74.2262V53.3737H77.1264V53.8163Z" fill="#030303"/>
        <path d="M89.8708 54.8555C89.8004 55.5094 89.5657 56.0089 89.1701 56.3543C88.7744 56.6996 88.248 56.874 87.5875 56.874C87.1282 56.874 86.7225 56.76 86.3671 56.5286C86.0117 56.2973 85.7401 55.9721 85.549 55.5529C85.3545 55.1305 85.2573 54.651 85.2539 54.1078V53.3031C85.2539 52.7533 85.3511 52.2638 85.5423 51.8379C85.7367 51.4121 86.0117 51.0835 86.3738 50.8522C86.7359 50.6208 87.1516 50.5068 87.6244 50.5068C88.2883 50.5068 88.8113 50.6845 89.1969 51.0433C89.5825 51.4021 89.8038 51.8949 89.8675 52.5286H89.3411C89.2103 51.4758 88.6403 50.9494 87.6244 50.9494C87.0611 50.9494 86.6152 51.1606 86.2799 51.5798C85.9479 51.9989 85.7803 52.5823 85.7803 53.3233V54.081C85.7803 54.7952 85.9413 55.3685 86.2665 55.7943C86.5917 56.2202 87.0309 56.4348 87.5842 56.4348C88.1374 56.4348 88.5431 56.304 88.8214 56.0425C89.0997 55.7809 89.2707 55.3853 89.3377 54.8622H89.8641L89.8708 54.8555Z" fill="#030303"/>
        <path d="M102.551 56.787H102.025V53.8163H98.484V56.787H97.9609V50.5908H98.484V53.3737H102.025V50.5908H102.551V56.787Z" fill="#030303"/>
        <path d="M115.559 56.787H115.036L111.472 51.4827V56.787H110.945V50.5908H111.472L115.039 55.8984V50.5908H115.559V56.787Z" fill="#030303"/>
        <path d="M124.589 56.787H124.066V50.5908H124.589V56.787Z" fill="#030303"/>
        <path d="M134.485 53.7085L133.613 54.5668V56.7831H133.09V50.5869H133.613V53.9297L136.788 50.5869H137.449L134.853 53.3463L137.65 56.7864H137.013L134.488 53.7085H134.485Z" fill="#030303"/>
        <path d="M22.982 25.2902H21.3391V19.5601H15.0893V25.2902H13.4531V12.8945H15.0893V18.2223H21.3391V12.8945H22.982V25.2902Z" fill="#1392A5"/>
        <path d="M65.337 21.3807L65.5751 23.0169L65.9238 21.545L68.3748 12.8945H69.7528L72.1434 21.545L72.4854 23.0437L72.7503 21.374L74.6748 12.8945H76.3178L73.3136 25.2902H71.8249L69.27 16.2575L69.0755 15.312L68.881 16.2575L66.2323 25.2902H64.7436L61.7461 12.8945H63.3823L65.3404 21.3807H65.337Z" fill="#1392A5"/>
        <path d="M119.753 19.7637C118.352 19.3614 117.333 18.8652 116.692 18.2784C116.052 17.6916 115.733 16.9674 115.733 16.1024C115.733 15.1267 116.122 14.3186 116.903 13.6816C117.685 13.0445 118.697 12.7227 119.948 12.7227C120.799 12.7227 121.557 12.8869 122.224 13.2155C122.892 13.5441 123.408 14.0001 123.773 14.5768C124.139 15.1535 124.323 15.7872 124.323 16.4745H122.68C122.68 15.7235 122.442 15.1334 121.966 14.7009C121.49 14.2717 120.816 14.0571 119.948 14.0571C119.143 14.0571 118.513 14.2348 118.064 14.5902C117.611 14.9456 117.386 15.4385 117.386 16.0688C117.386 16.5751 117.601 17.0043 118.03 17.353C118.459 17.7017 119.187 18.0236 120.219 18.3119C121.252 18.6003 122.057 18.9222 122.637 19.2709C123.217 19.6196 123.649 20.0286 123.931 20.4913C124.213 20.9574 124.354 21.5039 124.354 22.1342C124.354 23.1401 123.961 23.9448 123.18 24.5483C122.399 25.1518 121.349 25.4536 120.038 25.4536C119.187 25.4536 118.392 25.2893 117.654 24.9641C116.917 24.6388 116.347 24.1895 115.948 23.6229C115.549 23.0563 115.348 22.4125 115.348 21.6916H116.991C116.991 22.4393 117.269 23.0328 117.822 23.4653C118.375 23.8978 119.113 24.1158 120.038 24.1158C120.9 24.1158 121.561 23.9414 122.023 23.5894C122.483 23.2373 122.714 22.7579 122.714 22.151C122.714 21.5441 122.503 21.0747 122.077 20.7428C121.651 20.4108 120.88 20.0823 119.76 19.7604L119.753 19.7637Z" fill="#1392A5"/>
        </g>
        <defs>
        <clipPath id="clip0_2465_12957">
        <rect width="138.065" height="56" fill="white" transform="translate(0 0.874023)"/>
        </clipPath>
        </defs>
        </svg>
      </a>
    </div>

    <!-- Hamburger button (mobile only) -->
    <button
      id="toggleMenu"
      class="md:hidden p-2 hover:bg-gray-100 rounded-lg transition-colors z-[9999]"
    >
      <div class="w-6 flex flex-col gap-1.5">
        <span class="block w-6 h-0.5 bg-black transition-transform duration-300"></span>
        <span class="block w-6 h-0.5 bg-black transition-opacity duration-300"></span>
        <span class="block w-6 h-0.5 bg-black transition-transform duration-300"></span>
      </div>
    </button>

   <!-- Nav links (hidden on mobile by default) -->
<nav
  id="mobileMenu"
  class="hidden md:flex flex-col md:flex-row gap-6"
>
  <div class="basis-0 h-9 justify-end items-center gap-12 flex">
    <div class="justify-start items-center gap-6 flex">

      <a
        data-aos="fade-in"
        data-aos-offset="0"
        data-aos-delay="100"
        data-aos-duration="600"
        data-aos-easing="ease-in-out"
        href="/products"
        class="text-black text-base font-normal font-['Roboto'] leading-normal"
      >
        Products
      </a>

      <a
        data-aos="fade-in"
        data-aos-offset="0"
        data-aos-delay="150"
        data-aos-duration="600"
        data-aos-easing="ease-in-out"
        href="https://hws-mainz.de/glass-reactor-parts-accessories/"
        class="text-black text-base font-normal font-['Roboto'] leading-normal"
      >
        Parts &amp; Accessories
      </a>

      <a
        data-aos="fade-in"
        data-aos-offset="0"
        data-aos-delay="200"
        data-aos-duration="600"
        data-aos-easing="ease-in-out"
        href="/services"
        class="text-black text-base font-normal font-['Roboto'] leading-normal"
      >
        Services
      </a>

      <a
        data-aos="fade-in"
        data-aos-offset="0"
        data-aos-delay="300"
        data-aos-duration="600"
        data-aos-easing="ease-in-out"
        href="/industries"
        class="text-black text-base font-normal font-['Roboto'] leading-normal"
      >
        Industries
      </a>

      <a
        data-aos="fade-in"
        data-aos-offset="0"
        data-aos-delay="400"
        data-aos-duration="600"
        data-aos-easing="ease-in-out"
        href="/downloads"
        class="text-black text-base font-normal font-['Roboto'] leading-normal"
      >
        Downloads
      </a>

      <a
        data-aos="fade-in"
        data-aos-offset="0"
        data-aos-delay="500"
        data-aos-duration="600"
        data-aos-easing="ease-in-out"
        href="/blog"
        class="text-black text-base font-normal font-['Roboto'] leading-normal"
      >
        Blog
      </a>

      <a
        data-aos="fade-in"
        data-aos-offset="0"
        data-aos-delay="600"
        data-aos-duration="600"
        data-aos-easing="ease-in-out"
        href="/contact"
        class="text-black text-base font-normal font-['Roboto'] leading-normal"
      >
        Contact
      </a>

    </div>
  </div>
</nav>

        <div
        data-aos="fade-in"
          data-aos-offset="0"
          data-aos-delay="700"
          data-aos-duration="600"
          data-aos-easing="ease-in-out" 
        class="relative inline-block">

          
          <?php echo do_shortcode('[language-switcher] '); ?>


        </div>
      </div>
    </nav>
  </div>
</header>

<style>
/* Add these styles to handle mobile menu animations */
body.menu-open {
    overflow: hidden;
}

#mobileMenuSheet {
    visibility: hidden;
}

#mobileMenuSheet.open {
    visibility: visible;
    transform: translateX(0);
}

/* Hamburger button animations */
.menu-open #toggleMenu span:first-child {
    transform: rotate(45deg) translate(5px, 5px);
}

.menu-open #toggleMenu span:nth-child(2) {
    opacity: 0;
}

.menu-open #toggleMenu span:last-child {
    transform: rotate(-45deg) translate(5px, -5px);
}
</style>

<script>
jQuery(document).ready(function($) {
    const $body = $('body');
    const $menuSheet = $('#mobileMenuSheet');
    const $toggleBtn = $('#toggleMenu');
    const $closeBtn = $('#closeMenu');

    function openMenu() {
        $menuSheet.addClass('open');
        $body.addClass('menu-open');
    }

    function closeMenu() {
        $menuSheet.removeClass('open');
        $body.removeClass('menu-open');
    }

    $toggleBtn.on('click', openMenu);
    $closeBtn.on('click', closeMenu);

    // Close menu on escape key
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') closeMenu();
    });

    // Close menu when clicking on a link
    $('#mobileMenuSheet a').on('click', closeMenu);

    // Handle screen resize
    $(window).on('resize', function() {
        if (window.innerWidth >= 768) closeMenu(); // 768px is Tailwind's md breakpoint
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    let lastScrollTop = 0;
    let scrollTimeout;

    // Add initial classes
    navbar.classList.add('transition-opacity', 'duration-300');

    function showNavbar() {
        navbar.style.opacity = '1';
    }

    function hideNavbar() {
        navbar.style.opacity = '0';
    }

    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        // Clear the previous timeout
        clearTimeout(scrollTimeout);

        // Hide navbar on scroll
        if (scrollTop > lastScrollTop) {
            hideNavbar();
        }

        // Set timeout to show navbar 2 seconds after scrolling stops
        scrollTimeout = setTimeout(() => {
            showNavbar();
        }, 2000);

        lastScrollTop = scrollTop;
    });

    // Show navbar initially
    showNavbar();
});
</script>
