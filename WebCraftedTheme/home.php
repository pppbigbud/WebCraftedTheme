<?php function load_custom_styles()
{
    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('body', get_template_directory_uri() . '/css/body.css');
    wp_enqueue_style('menuHome', get_template_directory_uri() . '/css/menuHome.css');
    wp_enqueue_style('articles', get_template_directory_uri() . '/css/articles.css');

}
    add_action('wp_enqueue_scripts', 'load_custom_styles');
?>

<?php get_header();?>

<?php get_template_part( 'archive' ); ?>

<?php get_footer(); ?>