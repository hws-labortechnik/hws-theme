<?php
/**
 * Process contact form submissions
 * Sends to HWS and uses a verified From address
 */
function process_contact_form($data) {

    // ---- Sanitize inputs ----
    $country   = sanitize_text_field($data['country'] ?? '');
    $first     = sanitize_text_field($data['first_name'] ?? '');
    $last      = sanitize_text_field($data['last_name'] ?? '');
    $email     = sanitize_email($data['email'] ?? '');
    $user_msg  = isset($data['message']) ? wp_kses_post($data['message']) : '';

    // ---- Recipient(s) ----
    // Primary HWS inbox (replace if you want a different shared inbox)
    $to = 'info@hws-mainz.de';

    // Optional: keep a copy at HQ automatically
    $bcc = 'info@hws-mainz.de';

    // ---- Subject & HTML body ----
    $subject = 'New Contact Form Submission - ' . ($country ?: 'Contact');

    $message = '
    <html>
    <head>
        <title>New Contact Form Submission</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            h2 { color: #444; }
            .info { margin-bottom: 20px; }
            .label { font-weight: bold; }
            .message { margin-top: 20px; padding: 10px; background-color: #f9f9f9; white-space: pre-wrap; }
        </style>
    </head>
    <body>
        <h2>New Contact Form Submission</h2>
        <div class="info">
            <p><span class="label">Country:</span> ' . esc_html($country) . '</p>
            <p><span class="label">Name:</span> ' . esc_html(trim("$first $last")) . '</p>
            <p><span class="label">Email:</span> ' . esc_html($email) . '</p>
        </div>
        <div class="message">
            <p><span class="label">Message:</span></p>
            <p>' . wp_kses_post(nl2br($user_msg)) . '</p>
        </div>
    </body>
    </html>';

    // ---- Headers ----
    // IMPORTANT: use the VERIFIED sender (SMTP2GO) so delivery is accepted
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: HWS Website <info@hws-mainz.de>',
        'Reply-To: ' . trim("$first $last") . ' <' . $email . '>',
        'Bcc: ' . $bcc,
    );

    // ---- Log (optional) ----
    error_log('HWS Contact: sending to ' . $to . ' (subject: ' . $subject . ')');

    // ---- Send ----
    $sent = wp_mail($to, $subject, $message, $headers);

    if (!$sent) {
        $mail_error = error_get_last()['message'] ?? 'Unknown error';
        error_log('HWS Contact: wp_mail failed - ' . $mail_error);
    } else {
        error_log('HWS Contact: email sent successfully');
    }

    return $sent;
}
