<?php
// Database configuration (if needed)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'portfolio_db');

// Email configuration
define('CONTACT_EMAIL', 'contact@jenosan.com');
define('MAIL_FROM', 'no-reply@jenosan.com');
define('MAIL_SUBJECT', 'New Contact Form Submission');

// Site configuration
define('SITE_NAME', 'Jenosan Portfolio');
define('SITE_URL', 'https://jenosan.com');

// Enable error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Timezone
date_default_timezone_set('America/Los_Angeles');

// Start session
session_start();

// CSRF protection function
function generate_csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

// Sanitize input function
function sanitize_input($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Simple anti-spam measure
function is_spam($input) {
    $spam_indicators = [
        'http://', 'https://', '[url', '[/url', 
        'viagra', 'cialis', 'href=', 'link='
    ];
    
    foreach ($spam_indicators as $spam) {
        if (stripos($input, $spam) !== false) {
            return true;
        }
    }
    return false;
}
?>