<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This has been slightly modified (to read environment variables) 
 * for use in Docker.
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */


/**
 * Load ENV vars
 */
function getenv_docker($env, $default) {
    if ($fileEnv = getenv($env . '_FILE')) {
        return rtrim(file_get_contents($fileEnv), "\r\n");
    }
    else if (($val = getenv($env)) !== false) {
        return $val;
    }
    else {
        return $default;
    }
}

/**
 * Set up our global environment constant and load its config first
 */
define('WP_ENV', getenv_docker('WORDPRESS_ENV', 'production'));

/**
 * URLs
 */
define('WP_HOME', getenv_docker('WORDPRESS_HOME', ''));
define('WP_SITEURL', getenv_docker('WORDPRESS_SITEURL', ''));

/**
 * DB settings
 */
define('DB_NAME', getenv_docker('WORDPRESS_DB_NAME', 'wordpress') );
define('DB_USER', getenv_docker('WORDPRESS_DB_USER', 'example username') );
define('DB_PASSWORD', getenv_docker('WORDPRESS_DB_PASSWORD', 'example password'));
define('DB_HOST', getenv_docker('WORDPRESS_DB_HOST', 'mysql') );
define('DB_CHARSET', getenv_docker('WORDPRESS_DB_CHARSET', 'utf8') );
define('DB_COLLATE', getenv_docker('WORDPRESS_DB_COLLATE', '') );
$table_prefix = getenv_docker('WORDPRESS_TABLE_PREFIX', 'wp_');

/**
 * Authentication Unique Keys and Salts
 */
define('AUTH_KEY', getenv_docker('WORDPRESS_AUTH_KEY',         'ab4e793b0a652dd01542b1c6998ca4713a8243c9'));
define('SECURE_AUTH_KEY', getenv_docker('WORDPRESS_SECURE_AUTH_KEY',  '4cb8d693217d231baea6708d3724a70a3f89f26c'));
define('LOGGED_IN_KEY', getenv_docker('WORDPRESS_LOGGED_IN_KEY',    '76e642238ab8d80464dac189dcd404be7f21942d'));
define('NONCE_KEY', getenv_docker('WORDPRESS_NONCE_KEY',        '3b6847bec90b4d7ca12ace95959dfeb819ef1271'));
define('AUTH_SALT', getenv_docker('WORDPRESS_AUTH_SALT',        '7c896930e247a6022c3560ae7ad7ca26e17a8450'));
define('SECURE_AUTH_SALT', getenv_docker('WORDPRESS_SECURE_AUTH_SALT', '5ab1c31ea65d5275671faa9f963fac8650d23092'));
define('LOGGED_IN_SALT', getenv_docker('WORDPRESS_LOGGED_IN_SALT',   'e90f5cd3c169b4b799c9a06282eb1f1ef6ccb784'));
define('NONCE_SALT', getenv_docker('WORDPRESS_NONCE_SALT',       '3e6498469e8ff4924201865912de1958f85206c6'));

/**
 * Custom Settings
 */
define('AUTOMATIC_UPDATER_DISABLED', true);
define('DISABLE_WP_CRON', getenv_docker('DISABLE_WP_CRON', false));

/**
 * Debugging Settings
 */
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', getenv_docker('WP_DEBUG_LOG', false));
define('SCRIPT_DEBUG', false);
ini_set('display_errors', '0');

/**
 * Allow WordPress to detect HTTPS when used behind a reverse proxy or a load balancer
 * See https://codex.wordpress.org/Function_Reference/is_ssl#Notes
 */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

/**
 * Load env specific configuration
 */
$env_config = __DIR__ . '/env/' . WP_ENV . '.php';
if (file_exists($env_config)) {
    require_once $env_config;
}

/**
 * Bootstrap WordPress
 */
if (!defined('ABSPATH')) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** 
 * Sets up WordPress vars and included files
 */
require_once ABSPATH . 'wp-settings.php';