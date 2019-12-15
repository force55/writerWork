<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);

function my_nav_wrap() {
    $wrap  = '<ul id="%1$s" class="%2$s">';
    $wrap .= '%3$s';
    $wrap .= "
<li>
<div class='img-group-header'>
<a href=''><img src='".get_template_directory_uri()."/assets/images/telegram_icon.png' alt='1'></a>
<a href=''><img src='".get_template_directory_uri()."/assets/images/vibers.png' alt='2'></a>
<a href=''><img src='".get_template_directory_uri()."/assets/images/instagram.png' alt='3'></a>
</div>
</li>

";
    $wrap .= '</ul>';
    return $wrap;
}

function register_acf_options_pages() {

    // Check function exists.
    if( !function_exists('acf_add_options_page') )
        return;

    // register options page.
    $option_page = acf_add_options_page(array(
        'page_title'    => __('Настройки темы'),
        'menu_title'    => __('Настройки'),
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

// Hook into acf initialization.
add_action('acf/init', 'register_acf_options_pages');

add_action('after_setup_theme', function () {
    load_theme_textdomain('sage', get_template_directory() . '/lang');
});

function str_split_unicode($str, $l = 0) {
    if ($l > 0) {
        $ret = array();
        $len = mb_strlen($str, "UTF-8");
        for ($i = 0; $i < $len; $i += $l) {
            $ret[] = mb_substr($str, $i, $l, "UTF-8");
        }
        return $ret;
    }
    return preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
}

add_action( 'wp_ajax_question_mail','question_mail' );
add_action( 'wp_ajax_nopriv_question_mail','question_mail' );
function question_mail() {

    check_ajax_referer( 'my_nonce', 'nonce_code' );

    $data = $_POST['data'];

    $name = $data['name_questio'];
    $phone = $data['phone_question'];
    $email = $data['email_question'];
    $text = $data['text_question'];

    $content_mail = '';
    ob_start();
    ?>
    <p><?php pll_e('Имя:');?> <?php echo $name;?></p>
    <p><?php pll_e('Номер телефона:');?> <?php echo $phone;?></p>
    <p><?php pll_e('Email:');?> <?php echo $email;?></p>
    <p><?php pll_e('Текст вопроса:');?> <?php echo $text;?></p>
    <?php
    $content_mail = ob_get_clean();

    $admin_email = get_option('admin_email');

    $success = false;

    $headers = array(
        "From: Me Myself <$admin_email>",
        'content-type: text/html',
    );

    if(wp_mail($admin_email,'Вопрос с сайта от '.$email,$content_mail,$headers)){
        $success = true;
    }

    $return = array(
        'data'      => $data,
        'Success'   => $success,
    );

    wp_send_json_success( $return );
}
