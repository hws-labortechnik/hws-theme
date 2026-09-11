<?php
/**
 * Contact form processing: store submission in DB, then send email.
 * Storage-first: a failed send must never lose the inquiry.
 */

/**
 * Register the private CPT that stores contact form submissions.
 */
add_action('init', function () {
    register_post_type('hws_contact_entry', array(
        'labels' => array(
            'name'          => 'Contact Entries',
            'singular_name' => 'Contact Entry',
        ),
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 26,
        'menu_icon'           => 'dashicons-email-alt',
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'show_in_rest'        => false,
        'supports'            => array('title', 'editor', 'custom-fields'),
        'capability_type'     => 'post',
        'capabilities'        => array('create_posts' => 'do_not_allow'),
        'map_meta_cap'        => true,
    ));
});

function process_contact_form($data) {

    // ---- Sanitize inputs ----
    $country  = sanitize_text_field($data['country'] ?? '');
    $first    = sanitize_text_field($data['first_name'] ?? '');
    $last     = sanitize_text_field($data['last_name'] ?? '');
    $email    = sanitize_email($data['email'] ?? '');
    $user_msg = isset($data['message']) ? wp_kses_post($data['message']) : '';
    $name     = trim("$first $last");

    // ---- 1) Store in DB first ----
    $entry_id = wp_insert_post(array(
        'post_type'    => 'hws_contact_entry',
        'post_status'  => 'private',
        'post_title'   => $name . ' (' . ($country ?: '—') . ') — ' . wp_date('Y-m-d H:i'),
        'post_content' => $user_msg,
        'meta_input'   => array(
            '_hws_email'       => $email,
            '_hws_country'     => $country,
            '_hws_first_name'  => $first,
            '_hws_last_name'   => $last,
            '_hws_send_status' => 'pending',
        ),
    ), true);

    if (is_wp_error($entry_id)) {
        error_log('HWS Contact: DB storage failed - ' . $entry_id->get_error_message());
        $entry_id = 0; // proceed with send anyway; email is the fallback for the DB, too
    }

    // ---- 2) Build and send email ----
    $to      = 'info@hws-mainz.de';
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
            <p><span class="label">Name:</span> ' . esc_html($name) . '</p>
            <p><span class="label">Email:</span> ' . esc_html($email) . '</p>
        </div>
        <div class="message">
            <p><span class="label">Message:</span></p>
            <p>' . wp_kses_post(nl2br($user_msg)) . '</p>
        </div>
    </body>
    </html>';

    // From is owned entirely by WP Mail SMTP (Force From Email = ON, website@hws-mainz.de).
    // Do NOT add a From header here: the Graph API rejects sends as any other user.
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    $sent = wp_mail($to, $subject, $message, $headers);

    // ---- 3) Stamp delivery status on the stored entry ----
    if ($entry_id) {
        update_post_meta($entry_id, '_hws_send_status', $sent ? 'sent' : 'failed');
        if (!$sent) {
            update_post_meta($entry_id, '_hws_send_error', error_get_last()['message'] ?? 'Unknown error');
        }
    }

    if (!$sent) {
        error_log('HWS Contact: wp_mail failed - ' . (error_get_last()['message'] ?? 'Unknown error'));
    }

    return $sent;
}
