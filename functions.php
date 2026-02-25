<?php

function hws_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'hws_theme_setup');

/**
 * Enqueue all theme assets (CSS + JS) in one place.
 */
function hws_enqueue_assets() {
    // --- CSS ---
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('hws-theme-css', get_stylesheet_directory_uri() . '/theme.css', array('theme-style'), '1.0');
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@next/dist/aos.css', array(), null);
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);

    // TranslatePress dynamic background-image (needs PHP for path)
    $trp_inline_css = '.trp-language-switcher > div { background-image: url("' . get_stylesheet_directory_uri() . '/public/lang.svg"); }';
    wp_add_inline_style('hws-theme-css', $trp_inline_css);

    // --- JS ---
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@next/dist/aos.js', array(), null, true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('fancy-dropdown', get_stylesheet_directory_uri() . '/public/js/fancy-dropdown.js', array('jquery'), '1.0', true);
    wp_enqueue_script('hws-main-js', get_stylesheet_directory_uri() . '/js/hws-main.js', array('jquery', 'aos-js', 'swiper-js'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'hws_enqueue_assets');

add_filter('show_admin_bar', '__return_false');

add_image_size('square-600', 600, 600, true);

// Add contact form processing
require_once get_template_directory() . '/inc/process-contact-form.php';

// AJAX handler for the contact form v3
add_action('wp_ajax_send_contact_form_v3', 'handle_contact_form_v3');
add_action('wp_ajax_nopriv_send_contact_form_v3', 'handle_contact_form_v3');

function handle_contact_form_v3() {
    try {
        check_ajax_referer('contact_form_v3_nonce', 'nonce');

        $data = [
            'country'    => isset($_POST['country'])    ? sanitize_text_field($_POST['country'])    : '',
            'first_name' => isset($_POST['first_name']) ? sanitize_text_field($_POST['first_name']) : '',
            'last_name'  => isset($_POST['last_name'])  ? sanitize_text_field($_POST['last_name'])  : '',
            'email'      => isset($_POST['email'])      ? sanitize_email($_POST['email'])           : '',
            'message'    => isset($_POST['message'])     ? sanitize_textarea_field($_POST['message']) : '',
        ];

        if (empty($data['country']) || empty($data['first_name']) ||
            empty($data['last_name']) || empty($data['email']) ||
            empty($data['message'])) {
            throw new Exception('All fields are required');
        }

        if (!is_email($data['email'])) {
            throw new Exception('Invalid email address');
        }

        if (function_exists('process_contact_form')) {
            $result = process_contact_form($data);
            if ($result) {
                wp_send_json_success(['message' => 'Thank you! We will contact you soon.']);
            } else {
                throw new Exception('Failed to send email');
            }
        } else {
            throw new Exception('Contact form processor not available');
        }
    } catch (Exception $e) {
        wp_send_json_error(['message' => $e->getMessage()]);
    }
}

function display_products() {
    $products_page = get_page_by_path('products');
    if ($products_page) {
        setup_postdata($products_page);
        ?>
        <div class="gap-6 grid grid-cols-12 px-4 md:px-14 w-full mx-auto">
            <?php for ($i = 1; $i <= 4; $i++) :
                $image       = get_field('image' . $i, $products_page->ID);
                $name        = get_field('name' . $i, $products_page->ID);
                $description = get_field('description' . $i, $products_page->ID);
                $url         = get_field('url' . $i, $products_page->ID);
                ?>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 max-h-min relative">
                    <?php if ($image) : ?>
                        <div class="w-full h-auto">
                            <?php if ($url) : ?>
                                <a href="<?php echo esc_url($url); ?>">
                                    <?php
                                    $attachment_id    = attachment_url_to_postid($image);
                                    $image_array      = wp_get_attachment_image_src($attachment_id, 'square-600');
                                    $cropped_image_url = $image_array ? $image_array[0] : $image;
                                    ?>
                                    <img class="w-full h-auto object-cover rounded-lg" src="<?php echo esc_url($cropped_image_url); ?>" />
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <div class="h-auto -mt-[80px] xl:-mt-[80px]">
                        <div class="bg-white/40 rounded-lg backdrop-blur-[8px] border-stone-900/20 ml-[23.59px] mr-[23.59px] px-6 py-8">
                            <?php if ($name) : ?>
                                <div class="headline"><?php echo esc_html($name); ?></div>
                            <?php endif; ?>
                            <?php if ($description) : ?>
                                <p class="lead"><?php echo esc_html($description); ?></p>
                            <?php endif; ?>

                            <div class="pt-6 justify-start items-center gap-2 inline-flex">
                                <?php if ($url) : ?>
                                    <a href="<?php echo esc_url($url); ?>" class="group transition-all duration-1000 px-4 py-2 rounded-3xl border border-neutral-600 text-sm font-normal leading-tight flex justify-start items-center hover:bg-[#4F4F4F] hover:text-white">
                                        See more
                                        <svg class="transition-all duration-300 w-4 h-4 float-right ml-2 text-black group-hover:text-white group-hover:w-6 group-hover:h-4 group-hover:ml-4 group-hover:scale-150" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <?php
        wp_reset_postdata();
    }
}
