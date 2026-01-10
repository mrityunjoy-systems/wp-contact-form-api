<?php
/**
 * Plugin Name: WP Contact Form API
 * Description: Handles contact form submissions via REST API.
 * Version: 1.0
 * Author: Mrityunjoy Mukherjee
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Register API route
add_action( 'rest_api_init', function () {
    register_rest_route( 'contact/v1', '/submit', array(
        'methods'  => 'POST',
        'callback' => 'handle_contact_form',
    ));
});

function handle_contact_form( $request ) {
    $name  = sanitize_text_field( $request['name'] );
    $email = sanitize_email( $request['email'] );
    $msg   = sanitize_textarea_field( $request['message'] );

    if ( empty( $name ) || empty( $email ) || empty( $msg ) ) {
        return array(
            'status' => 'error',
            'message' => 'All fields are required.'
        );
    }

    return array(
        'status' => 'success',
        'message' => 'Form submitted successfully!',
        'data' => array(
            'name' => $name,
            'email' => $email,
            'message' => $msg
        )
    );
}
