<?php
/**
 * Process contact form submissions
 * 
 * @param array $data Form data to process
 * @return bool Whether the email was sent successfully
 */
function process_contact_form($data) {
    // Default recipient
    $to = 'planktone@gmail.com'; // Replace with your email
    
    // Build email subject with country
    $subject = 'New Contact Form Submission - ' . $data['country'];
    
    // Build HTML email content
    $message = '
    <html>
    <head>
        <title>New Contact Form Submission</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            h2 { color: #444; }
            .info { margin-bottom: 20px; }
            .label { font-weight: bold; }
            .message { margin-top: 20px; padding: 10px; background-color: #f9f9f9; }
        </style>
    </head>
    <body>
        <h2>New Contact Form Submission</h2>
        <div class="info">
            <p><span class="label">Country:</span> ' . esc_html($data['country']) . '</p>
            <p><span class="label">Name:</span> ' . esc_html($data['first_name'] . ' ' . $data['last_name']) . '</p>
            <p><span class="label">Email:</span> ' . esc_html($data['email']) . '</p>
        </div>
        <div class="message">
            <p><span class="label">Message:</span></p>
            <p>' . nl2br(esc_html($data['message'])) . '</p>
        </div>
    </body>
    </html>';
    
    // Set up email headers
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . get_bloginfo('name') . ' <wordpress@' . $_SERVER['HTTP_HOST'] . '>',
        'Reply-To: ' . $data['first_name'] . ' ' . $data['last_name'] . ' <' . $data['email'] . '>'
    );
    
    // Log the email attempt (helpful for debugging)
    error_log('Attempting to send email to: ' . $to . ' with subject: ' . $subject);
    
    // Send email
    $sent = wp_mail($to, $subject, $message, $headers);
    
    // Log the result
    if (!$sent) {
        $mail_error = error_get_last()['message'] ?? 'Unknown error';
        error_log('Failed to send contact form email: ' . $mail_error);
    } else {
        error_log('Contact form email sent successfully');
    }
    
    return $sent;
}
