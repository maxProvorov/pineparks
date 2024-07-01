<?php
function register_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu')
        )
    );
}
add_action('init', 'register_menus');

add_theme_support('align-wide');
add_theme_support('editor-styles');
add_theme_support('wp-block-styles');

function pineparks_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('pineparks-style', get_template_directory_uri() . '/assets/css/pineparks.css', 'style', null);

    wp_enqueue_script('pineparks-script', get_template_directory_uri() . '/assets/js/pineparks.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'pineparks_scripts');


function my_acf_blocks_init()
{
    // Проверяем наличие функции acf_register_block_type()
    if (function_exists('acf_register_block_type')) {
        // Регистрация блока Slider
        acf_register_block_type(
            array(
                'name' => 'slider',
                'title' => __('Slider'),
                'render_template' => 'template-parts/slider.php',
                'enqueue_assets' => function () {
                    wp_enqueue_script('slider-block', get_template_directory_uri() . '/assets/js/slider.js', array(), '', true);
                    wp_enqueue_style('slider-block', get_template_directory_uri() . '/assets/css/slider.css');
                },
            )
        );

        // Регистрация блока Text + Image
        acf_register_block_type(
            array(
                'name' => 'text-image',
                'title' => __('Text + Image'),
                'render_template' => 'template-parts/calc.php',
                'enqueue_assets' => function () {
                    wp_enqueue_script('text-image-block', get_template_directory_uri() . '/assets/js/calc.js', array(), '', true);
                    wp_enqueue_style('text-image-block', get_template_directory_uri() . '/assets/scss/calc.scss');
                },
            )
        );

        // Регистрация блока Accordion
        acf_register_block_type(
            array(
                'name' => 'accordion',
                'title' => __('Accordion'),
                'render_template' => 'template-parts/accordion.php',
                'enqueue_assets' => function () {
                    wp_enqueue_script('accordion-block', get_template_directory_uri() . '/assets/js/accordion.js', array(), '', true);
                    wp_enqueue_style('accordion-block', get_template_directory_uri() . '/assets/css/accordion.scss');
                },
            )
        );
    }
}
add_action('acf/init', 'my_acf_blocks_init');

//Ajax
function handle_calculate()
{
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
    $method = isset($_POST['method']) ? $_POST['method'] : '+';
    $result = 0;

    switch ($method) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Error: Division by zero';
            }
            break;

    }

    echo $result;
    wp_die();
}
add_action('wp_ajax_calculate', 'handle_calculate');
add_action('wp_ajax_nopriv_calculate', 'handle_calculate');
