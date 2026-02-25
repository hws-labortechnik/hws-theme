<footer class="main-content z-50">
    <div class="w-full px-6 md:px-16 pt-12 pb-6 bg-black">
        <!-- Main Footer Grid -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12">
            <!-- Logo & Social Section -->
            <div class="col-span-1 md:col-span-4">
                <div class="flex flex-col justify-between h-full">
                    <!-- Logo -->
                    <div class="w-36 h-14 relative mb-8 md:mb-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/logo-dark.svg" alt="Logo">
                    </div>
                    <!-- Social Icons -->
                    <div class="flex md:justify-between justify-center items-center gap-4 md:gap-0 max-w-[128px]">
                        <div class="w-6 h-6 relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/fb.svg" alt="Facebook">
                        </div>
                        <div class="w-6 h-6 relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/x.svg" alt="Twitter">
                        </div>
                        <div class="w-6 h-6 relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/in.svg" alt="LinkedIn">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Links -->
            <nav class="col-span-1 md:col-span-4 flex flex-col items-center md:items-start text-left md:ml-12">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6 w-full">
                    <div class="flex flex-col gap-4">
                        <a href="<?php echo home_url('/products'); ?>" class="text-white text-sm font-light font-['Roboto'] leading-tight">Products</a>
                        <a href="<?php echo home_url('/services'); ?>" class="text-white text-sm font-light font-['Roboto'] leading-tight">Services</a>
                        <a href="<?php echo home_url('/industries'); ?>" class="text-white text-sm font-light font-['Roboto'] leading-tight">Industries</a>
                        <a href="<?php echo home_url('/downloads'); ?>" class="text-white text-sm font-light font-['Roboto'] leading-tight">Downloads</a>
                        <a href="<?php echo home_url('/blog'); ?>" class="text-white text-sm font-light font-['Roboto'] leading-tight">Blog</a>
                        <a href="<?php echo home_url('/contact'); ?>" class="text-white text-sm font-light font-['Roboto'] leading-tight">Contact</a>

                        <!-- UPDATED: separate legal links -->
                        <a href="<?php echo home_url('/impressum'); ?>" class="text-white text-sm font-light font-['Roboto'] leading-tight">Impressum</a>
                        <a href="<?php echo esc_url( get_permalink( get_option('wp_page_for_privacy_policy') ) ); ?>" class="text-white text-sm font-light font-['Roboto'] leading-tight">Privacy Policy</a>
                    </div>
                </div>
            </nav>

            <!-- Newsletter / Contact CTA -->
            <div class="col-span-1 md:col-span-4 flex flex-col gap-6">
                <h3 class="text-white text-2xl md:text-3xl font-light text-left">Get in touch</h3>
                <div class="flex flex-col gap-4">

                <a href="/contact" class="max-w-36 group transition-all duration-1000 px-4 py-2 rounded-3xl border border-neutral-600 text-sm font-normal leading-tight flex justify-start items-center bg-[#000] hover:bg-[#4F4F4F] text-white">
                Contact us
                <svg class="transition-all duration-300 w-5 h-5 float-right ml-2 text-white group-hover:text-white group-hover:w-6 group-hover:h-4 group-hover:ml-4 group-hover:scale-150" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                </a>

                    <p class="text-white text-sm font-light text-left">
                        Have questions or need assistance? Our team is here to help!<br>Click below to get in touch and find the perfect solution for your needs.
                    </p>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="mt-8 md:mt-9 pt-8 border-t border-neutral-800">
            <div class="flex flex-row justify-between items-center gap-4">
                <div class="text-neutral-600 text-sm">&copy; <?php echo date_i18n('Y'); ?> HWS Labortechnik</div>
                <div class="text-neutral-600 text-sm">by ugraphic</div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
</html>
