<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/public/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/public/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/public/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/public/site.webmanifest">
    <?php wp_head(); ?>
</head>
<body class="bg-[#f2f3f3] overflow-x-hidden <?php body_class(); ?>">

<!-- Mobile Menu Sheet -->
<div id="mobileMenuSheet" class="px-2 fixed top-[78px] inset-0 bg-[#f2f3f3]/80 backdrop-blur-sm transform translate-x-full transition-transform duration-300 ease-in-out z-50">
    <div class="flex flex-col h-full px-2 pt-12 pb-6">
        <!-- Close button -->
        <button id="closeMenu" class="absolute -top-14 right-4 w-10 h-10 p-2 bg-transparent bg-[#f2f3f3]">
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
                <a href="<?php echo esc_url( home_url('/') ); ?>" class="text-black text-base font-light">EN</a>
                <a href="<?php echo esc_url( home_url('/de') ); ?>" class="text-black text-base font-light">DE</a>
            </div>
        </div>
    </div>
</div>

<!-- Modified Header with new hamburger button -->
<header id="navbar" class="px-4 md:px-14 fixed w-full top-0 left-0 bg-[#f2f3f3]/40 backdrop-blur-md z-40">
  <div class="max-w-7xl w-full mx-auto h-24 bg-transparent flex justify-between items-center">
    <!-- Logo section -->
    <div class="w-[139px] h-14 relative" style="width:180px; height:75px">
      <a href="/" class="w-[139px] h-auto left-0 top-0 absolute z-[9999]" style="width:180px">
        <img src="<?php echo get_template_directory_uri(); ?>/public/logo-light.svg" alt="HWS Labortechnik" width="180" height="75" class="w-[139px] h-auto" style="width:180px; height:auto" />
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
        class="text-black text-lg font-normal font-['Roboto'] leading-normal"
      >
        Products
      </a>

      <a
        data-aos="fade-in"
        data-aos-offset="0"
      <a
        data-aos="fade-in"
        data-aos-offset="0"
        data-aos-delay="200"
        data-aos-duration="600"
        data-aos-easing="ease-in-out"
        href="/services"
        class="text-black text-lg font-normal font-['Roboto'] leading-normal"
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
        class="text-black text-lg font-normal font-['Roboto'] leading-normal"
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
        class="text-black text-lg font-normal font-['Roboto'] leading-normal"
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
        class="text-black text-lg font-normal font-['Roboto'] leading-normal"
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
        class="text-black text-lg font-normal font-['Roboto'] leading-normal"
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
