<?php
/*
Template Name: Contact v3
*/

// Enqueue the contact form script
wp_enqueue_script(
    'contact-form', 
    get_template_directory_uri() . '/assets/js/contact-form.js', 
    ['jquery'], // Add jQuery as a dependency
    '1.0.2', // Increment version to avoid caching
    true
);

// Localize the script with the required data
wp_localize_script(
    'contact-form',
    'contactFormData', // This variable name must match what's used in JS
    [
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('contact_form_v3_nonce'),
        'thankYouMessage' => 'Thank you for your message!',
        'errorMessage' => 'An error occurred. Please try again.'
    ]
);

get_header();
?>

<style>
  .steps-container {
    position: relative;
    /*min-height: 140px;  Set to the height of the tallest step */
  }

  .custom-select {
    position: relative;
    width: 100%;
  }
 .no-bottom-radius {
    border-bottom-left-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
    /*border-top-left-radius: 0 !important;/*
    /*border-top-right-radius: 0 !important;*/
    border-bottom: 0 !important;
  }

  .error-message {
    color: #E61830;
    font-size: 0.875rem;
    margin-top: 0.25rem;
  }

  .error-border {
    border-color: #E61830;
  }

  /* Custom scrollbar styles */
  .scrollable-dropdown {
    max-height: 270px;
    overflow-y: auto;
    scrollbar-width: thin;
    scrollbar-color: #4F4F4F transparent;
  }

  .scrollable-dropdown::-webkit-scrollbar {
    width: 2px!important;
  }

  .scrollable-dropdown::-webkit-scrollbar-track {
    background: transparent!important;
    margin: 8px 0; /* Add margin to scrollbar track */
  }

  .scrollable-dropdown::-webkit-scrollbar-thumb {
    background-color: #4F4F4F!important;
    border-radius: 10px!important;
  }

  .scrollable-dropdown::-webkit-scrollbar-thumb:hover {
    background-color: #666666;
  }


  /* Individual dropdown items */

  #dropdown-options li {
    padding: 10px 22px 10px 22px;
    transition: all 0.2s ease;
  }

  #dropdown-options li:hover {
    background-color: #EAEBEB;
  }

  /* Add arrow icon styles */
  .custom-select .select-arrow {
    position: absolute;
    right: 16px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
    transition: transform 0.2s ease;
  }

  .custom-select.open .select-arrow {
    transform: translateY(-50%) rotate(180deg);
  }

  /* Add disabled button styles */
  #next-btn:disabled {
    cursor: not-allowed;
    opacity: 0.7;
    background-color: #666666;
  }

  /* Update step indicator styles */
  .step-indicator div.outline {
    outline-width: 1px !important;
  }

  /* Add filled input field styles */
  input:not(:placeholder-shown) {
    background-color: #F2F3F3 !important;
  }

  input:-webkit-autofill,
  input:-webkit-autofill:hover, 
  input:-webkit-autofill:focus {
    -webkit-box-shadow: 0 0 0 30px #F2F3F3 inset !important;
  }

  /* Custom checkbox styles */
  input[type="checkbox"] {
    appearance: none;
    -webkit-appearance: none;
    width: 20px;
    height: 20px;
    border: 1px solid #4f4f4f;
    border-radius: 8px;
    cursor: pointer;
    position: relative;
    transition: all 0.2s ease;
  }

  input[type="checkbox"]:checked {
    background-color: black!important;
    border-color: black;
  }

  input[type="checkbox"]:checked::after {
    content: '';
    position: absolute;
    left: 6px;
    top: 2px;
    width: 6px;
    height: 12px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
  }

  /* Add thank you message styles */
  #thank-you-message {
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  #multi-step-form {
    transition: opacity 0.3s ease;
  }

  #ThankYou {
    transition: opacity 0.3s ease-in-out;
    display: 0;
    z-index: -1;
}

#ThankYou.visible {
    opacity: 1;
    z-index: 99999!important;
}
</style>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<main class="mx-auto">

<div
data-aos="fade-in"
data-aos-offset="0"
data-aos-delay="0"
data-aos-duration="600"
data-aos-easing="ease-in-out"   
class="mt-28 pr-16 justify-between items-end inline-flex">
  <div class="px-4 md:px-14 py-12 flex-col justify-start items-start gap-3.5 inline-flex">
    <div class="w-16 text-neutral-600 text-sm font-normal font-['Roboto'] leading-tight">Contact</div>
    <div class=" text-black text-3xl font-light font-['Roboto'] leading-10"><?php the_title(); ?></div>
  </div>
</div>

<div class="grid grid-cols-12 md:gap-20 xl:gap-34 px-4 md:px-14 mb-16">
    <div class="col-span-12 md:col-span-6 mb-12 md:mb-0">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/contact.png" alt="Contact" class="w-full rounded-lg h-auto">
        <div id="ContactList" class="mt-6 mb-6 min-h-max w-full bg-[#EAEBEB] rounded-md px-6 py-12 justify-start items-start gap-12 inline-flex">
            <?php include(get_template_directory() . '/page-lista.php'); ?>
        </div>
    </div>
    <div class="col-span-12 md:col-span-6 relative">
      <!-- the_content(); ?>-->


<!-- form -->
<div class="mx-auto z-50">

        <!-- Progress Bar -->
        <div class="mb-12 relative">
            <div class="flex justify-between relative">
                <div class="z-40 step-indicator active" data-step="1">
                    <div class="mb-2 mx-auto w-3 h-3 bg-gray-200 rounded-full transition-all duration-300"></div>
                    <span class="text-sm font-thin">1. Choose Distributor</span>
                </div>
                <div class="z-40 step-indicator" data-step="2">
                    <div class="mb-2 mx-auto w-3 h-3 bg-gray-200 rounded-full transition-all duration-300"></div>
                    <span class="text-sm text-gray-500">2. Fill Your Contact Details</span>
                </div>
                <div class="z-40 step-indicator" data-step="3">
                    <div class="mb-2 mx-auto w-3 h-3 bg-gray-200 rounded-full transition-all duration-300"></div>
                    <span class="text-sm text-gray-500">3. Send a message</span>
                </div>
                <div class="z-10 absolute top-1 left-12 right-12 h-px bg-black/10 transition-all duration-300 "></div>
            </div>
        </div>

        <!-- Form -->
        <form id="multi-step-form" method="POST" class="space-y-8" onsubmit="handleFormSubmit(event)">
            <!-- Step 1: Location -->
            <div class="step transition-opacity duration-300 opacity-0 hidden" id="step-1">
                <h2 class="text-3xl font-thin mb-8">1. Choose International Distributor</h2>
                <div class="space-y-6">

                    <div id="countryselection" class="custom-select">
                        <label class="block mb-2 text-[#020202] text-xl font-thin font-['Roboto'] leading-[30px]">Country</label>
                        <select name="country" class="text-[#888888] w-full h-14 px-4 py-3 bg-[#F2F3F3] border border-[#888888] focus:outline-none focus:border-black/20 hidden">
                            <option value="">Select Country</option>
                            <option value="italy">Italy - Achelit s.r.l.</option>
                            <option value="switzerland">Switzerland - AMSI-Glas AG</option>
                            <option value="israel">Israel - Bein M. LTD</option>
                            <option value="china">China - Buchiglas China Co., Ltd.</option>
                            <option value="india">India - Buchiglas India Pvt. Ltd.</option>
                            <option value="poland">Poland - IKA POL</option>
                            <option value="britain">Great Britain - Ken Kimble (Reactor Vessels Ltd.)</option>
                            <option value="taiwan">Taiwan - Kou Fua Technology Co.</option>
                            <option value="turkey">Turkey - Kovalent Ltd.</option>
                            <option value="russia">Russia - LABCHIMTECH LTD.</option>
                            <option value="norway">Norway - Nerliens Meszansky AS</option>
                            <option value="france">France - Optimus Instruments</option>
                            <option value="belgium1">Belgium 1 - Optimus Instruments</option>
                            <option value="belgium2">Belgium 2 - EURO-SCIENTIFIC</option>
                            <option value="slovenia">Slovenia - Primalab</option>
                            <option value="croatia">Croatia - Ru-Ve doo</option>
                            <option value="hungary">Hungary - Spektrum 3D</option>
                            <option value="finland">Finland - Ditap Oy / Rembe Oy</option>
                            <option value="spain">Spain - Suministros Nesslab SL</option>
                        </select>
                        <div id="custom-country-dropdown" class="relative cursor-pointer bg-[#F2F3F3] rounded-tl-[30px] rounded-tr-[30px] rounded-bl-[30px] rounded-br-[30px] border border-[#888888] px-6 py-3 w-full">
                          <!-- Placeholder text or selected option -->
                          <span id="dropdown-selected" class="text-[#888888] block pr-8">Select Country</span>
                          <!-- Add arrow icon -->
                          <svg class="select-arrow w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6 9L12 15L18 9" stroke="#4F4F4F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                          <!-- Options list (initially hidden) -->
                                <ul id="dropdown-options" class="text-[16px] font-thin z-10 absolute top-11 left-0 right-0 mt-1 bg-[#F2F3F3] border-l border-r border-b border-[#888888] rounded-tl-none rounded-tr-none rounded-bl-[30px] rounded-br-[30px] hidden scrollable-dropdown">
                                    <!-- JS will populate items -->
                                </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2: Contact Details -->
            <div class="step transition-opacity duration-300 opacity-0 hidden" id="step-2">
                <h2 class="text-3xl font-thin mb-8">2. Fill Your Contact Details</h2>
                <div class="space-y-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block mb-2 text-xl font-light font-['Roboto'] leading-[30px]">First Name</label>
                            <input type="text" name="first_name" placeholder=" " class="bg-[#F2F3F3] w-full px-4 py-3 rounded-full border border-[#4f4f4f] focus:outline-none focus:border-black">
                            <div class="error-message hidden">Please fill out this field</div>
                        </div>
                        <div>
                            <label class="block mb-2 text-xl font-light font-['Roboto'] leading-[30px]">Last Name</label>
                            <input type="text" name="last_name" placeholder=" " class="bg-[#F2F3F3] w-full px-4 py-3 rounded-full border border-[#4f4f4f] focus:outline-none focus:border-black">
                            <div class="error-message hidden">Please fill out this field</div>
                        </div>
                    </div>
                    <div>
                        <label class="block mb-2 text-xl font-light font-['Roboto'] leading-[30px]">Email</label>
                        <input type="email" name="email" placeholder=" " class="bg-[#F2F3F3] w-full px-4 py-3 rounded-full border border-[#4f4f4f] focus:outline-none focus:border-black">
                        <div class="error-message hidden">Please fill out this field</div>
                    </div>
                </div>
            </div>

            <!-- Step 3: Message -->
            <div class="step transition-opacity duration-300 opacity-0 hidden" id="step-3">
                <h2 class="text-xl font-light font-['Roboto'] leading-[30px] mb-8">3. Send a message to the distributor</h2>
                <div class="space-y-6">
                    <div>
                        <label class="block mb-2 text-xl font-light font-['Roboto'] leading-[30px]">Message</label>
                        <textarea name="message" rows="5" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:border-black bg-[#F2F3F3]"></textarea>
                    </div>
                    <div class="flex items-start content-center gap-2">
                        <input type="checkbox" name="privacy" id="privacy" class="mt-0">
                        <label for="privacy" class="text-[#4f4f4f] text-[14px] leading-tight ml-2">
                            I agree to the <a href="/privacy" target="_blank" class="underline underline-offset-2">privacy policy</a> and terms of service
                        </label>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-between pt-6">
                <button type="button" id="prev-btn" class="px-6 py-2 rounded-full border border-gray-200 hover:border-black transition-colors hidden">
                    Back
                </button>
                <button type="button" id="next-btn" class="ml-auto px-6 py-2 rounded-full bg-black text-white hover:bg-gray-800 transition-colors" disabled>
                    Next
                </button>
            </div>
        </form>
    </div>

    <!-- Replace the existing thank you message div with this -->
    <div id="thank-you-message" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center hidden z-50">
        <div class="bg-white p-8 rounded-lg max-w-md mx-4">
            <h2 class="text-3xl font-thin mb-4">Thank you for your message!</h2>
            <p class="text-lg font-light mb-6">We will get back to you as soon as possible.</p>
            <button onclick="location.reload()" class="px-6 py-2 rounded-full bg-black text-white hover:bg-gray-800 transition-colors">
                Back to the website
            </button>
        </div>
    </div>
<!-- END form -->


    </div>
</div>





<div class="justify-between items-end mb-12">
    <div class="px-16 max-w-max mt-28 justify-start items-center">
        <a href="/" class="group transition-all duration-1000 px-4 py-2 rounded-3xl border border-neutral-600 text-sm font-normal leading-tight flex justify-start items-center hover:bg-[#4F4F4F] hover:text-white">
            <svg class="transition-all duration-300 w-4 h-4 float-left mr-2 text-black group-hover:text-white group-hover:w-6 group-hover:h-4 group-hover:mr-4 group-hover:scale-150" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.85355 3.14645C7.04882 3.34171 7.04882 3.65829 6.85355 3.85355L3.70711 7H12.5C12.7761 7 13 7.22386 13 7.5C13 7.77614 12.7761 8 12.5 8H3.70711L6.85355 11.1464C7.04882 11.3417 7.04882 11.6583 6.85355 11.8536C6.65829 12.0488 6.34171 12.0488 6.14645 11.8536L2.14645 7.85355C1.95118 7.65829 1.95118 7.34171 2.14645 7.14645L6.14645 3.14645C6.34171 2.95118 6.65829 2.95118 6.85355 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            Back home
        </a>
    </div>
</div>

</main>
<?php endwhile; endif; ?>




<?php
get_footer();
?>