document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('multi-step-form');
    const nextBtn = document.getElementById('next-btn');
    const prevBtn = document.getElementById('prev-btn');
    const steps = document.querySelectorAll('.step');
    let currentStep = 1;

    // Form validation helpers
    const validators = {
        step1: () => {
            const country = form.querySelector('[name="country"]').value;
            return !!country;
        },
        step2: () => {
            const firstName = form.querySelector('[name="first_name"]').value.trim();
            const lastName = form.querySelector('[name="last_name"]').value.trim();
            const email = form.querySelector('[name="email"]').value.trim();
            return firstName && lastName && email;
        },
        step3: () => {
            const message = form.querySelector('[name="message"]').value.trim();
            const privacy = form.querySelector('[name="privacy"]').checked;
            return message && privacy;
        }
    };

    // Country selection handler
    const countrySelect = form.querySelector('[name="country"]');
    countrySelect.addEventListener('change', function(e) {
        const country = e.target.value;
        
        // Hide all country boxes within #ContactList
        const contactList = document.getElementById('ContactList');
        if (contactList) {
            contactList.querySelectorAll('[id$="Box"]').forEach(box => {
                box.classList.add('hidden');
            });
            
            // Show selected country box or intro box
            const countryId = country.charAt(0).toUpperCase() + country.slice(1) + 'Box';
            const targetBox = contactList.querySelector('#' + countryId) || contactList.querySelector('#IntroBox');
            
            if (targetBox) {
                targetBox.classList.remove('hidden');
            } else {
                // Fallback to IntroBox if the specific country box wasn't found
                const introBox = contactList.querySelector('#IntroBox');
                if (introBox) {
                    introBox.classList.remove('hidden');
                }
            }
        }

        // Enable next button if country is selected
        nextBtn.disabled = !validators.step1();
    });

    // Step navigation
    function showStep(stepNumber) {
        steps.forEach((step, index) => {
            if (index + 1 === stepNumber) {
                step.classList.remove('hidden', 'opacity-0');
            } else {
                step.classList.add('hidden', 'opacity-0');
            }
        });

        // Update buttons
        prevBtn.classList.toggle('hidden', stepNumber === 1);
        nextBtn.textContent = stepNumber === 3 ? 'Send' : 'Next';
        
        // Update step indicators
        document.querySelectorAll('.step-indicator').forEach((indicator, index) => {
            const dot = indicator.querySelector('div');
            if (index + 1 === stepNumber) {
                dot.classList.add('bg-black', 'outline');
                dot.classList.remove('bg-gray-200');
            } else {
                dot.classList.remove('bg-black', 'outline');
                dot.classList.add('bg-gray-200');
            }
        });

        // Validate current step
        nextBtn.disabled = !validators[`step${stepNumber}`]();
    }

    // Input validation handlers
    form.querySelectorAll('input, textarea').forEach(input => {
        input.addEventListener('input', () => {
            nextBtn.disabled = !validators[`step${currentStep}`]();
        });
    });

    // Navigation button handlers
    nextBtn.addEventListener('click', () => {
        if (currentStep === 3) {
            handleSubmit();
        } else {
            currentStep++;
            showStep(currentStep);
        }
    });

    prevBtn.addEventListener('click', () => {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    });

    // Form submission handler
    async function handleSubmit() {
        const submitBtn = form.querySelector('#next-btn');
        submitBtn.disabled = true;
        submitBtn.textContent = 'Sending...';

        try {
            const formData = new FormData(form);
            formData.append('action', 'send_contact_form_v3');
            formData.append('nonce', contactFormData.nonce); // Fix: Use contactFormData.nonce instead of contactFormNonce

            const response = await fetch(contactFormData.ajaxurl, { // Fix: Use contactFormData.ajaxurl
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if (result.success) {
                form.style.opacity = '0';
                setTimeout(() => {
                    form.classList.add('hidden');
                    const thankYou = document.getElementById('thank-you-message');
                    thankYou.classList.remove('hidden');
                    thankYou.style.opacity = '1';
                    
                    // Auto-close the thank-you message after 3 seconds
                    setTimeout(() => {
                        thankYou.style.opacity = '0';
                        setTimeout(() => {
                            // Redirect to home page or reload the page
                            window.location.href = '/';
                        }, 300);
                    }, 3000);
                }, 300);
            } else {
                throw new Error(result.data?.message || contactFormData.errorMessage);
            }
        } catch (error) {
            alert(error.message || contactFormData.errorMessage);
        } finally {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Send';
        }
    }

    // Initialize form
    showStep(1);
});
