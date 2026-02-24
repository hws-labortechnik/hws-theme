<?php
/*
Template Name: Simple Contact
*/

get_header();
?>

<div class="container mx-auto px-4 py-8 mt-24">
    <div class="max-w-lg mx-auto">
        <form id="simple-contact-form" class="space-y-6">
            <div>
                <label class="block mb-2 text-xl font-light font-['Roboto'] leading-[30px]">Name</label>
                <input type="text" name="name" required 
                    class="w-full px-4 py-3 rounded-full border border-[#4f4f4f] bg-[#F2F3F3] focus:outline-none focus:border-black">
            </div>
            
            <div>
                <label class="block mb-2 text-xl font-light font-['Roboto'] leading-[30px]">Email</label>
                <input type="email" name="email" required 
                    class="w-full px-4 py-3 rounded-full border border-[#4f4f4f] bg-[#F2F3F3] focus:outline-none focus:border-black">
            </div>
            
            <div>
                <button type="submit" 
                    class="w-full px-6 py-3 rounded-full bg-black text-white hover:bg-gray-800 transition-colors">
                    Send Message
                </button>
            </div>

            <div id="form-message" class="hidden text-center p-4 rounded-lg"></div>
        </form>
    </div>
</div>

<script>
document.getElementById('simple-contact-form').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const form = e.target;
    const formData = new FormData(form);
    formData.append('action', 'send_simple_contact');
    formData.append('nonce', '<?php echo wp_create_nonce('simple_contact_nonce'); ?>');

    const submitButton = form.querySelector('button[type="submit"]');
    const messageDiv = document.getElementById('form-message');
    
    try {
        submitButton.disabled = true;
        submitButton.textContent = 'Sending...';
        
        const response = await fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
            method: 'POST',
            body: formData
        });
        
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        
        const result = await response.json();
        console.log('Server response:', result); // Debug log
        
        messageDiv.classList.remove('hidden', 'bg-red-100', 'text-red-700', 'bg-green-100', 'text-green-700');
        
        if (result.success) {
            messageDiv.classList.add('bg-green-100', 'text-green-700');
            form.reset();
            messageDiv.textContent = result.data.message;
        } else {
            messageDiv.classList.add('bg-red-100', 'text-red-700');
            messageDiv.textContent = result.data?.message || 'An error occurred while sending your message.';
        }
        
    } catch (error) {
        console.error('Form submission error:', error); // Debug log
        messageDiv.classList.remove('hidden');
        messageDiv.classList.add('bg-red-100', 'text-red-700');
        messageDiv.textContent = 'An error occurred. Please try again later.';
    } finally {
        submitButton.disabled = false;
        submitButton.textContent = 'Send Message';
        messageDiv.classList.remove('hidden');
    }
});
</script>

<?php get_footer(); ?>
