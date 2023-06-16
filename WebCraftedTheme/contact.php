<?php



/**

 * Template Name: Page de contact

 */



?>



<?php function load_custom_styles()

{

    wp_enqueue_style('contactPage', get_template_directory_uri() . '/css/contactPage.css');

    wp_enqueue_style('formulaireStyle', get_template_directory_uri() . '/css/formulaireStyle.css');

    wp_enqueue_style('commandeHome', get_template_directory_uri() . '/css/commandeHome.css');



}



add_action('wp_enqueue_scripts', 'load_custom_styles');

?>



<?php get_header(); ?>



<div class="separatorHeaderForm"></div>



<div class="containerContactForm">



    <div class="txtContactForm">

        <img class="logoHeader" src="<?php echo get_template_directory_uri(); ?>/img/logoReverie.png" alt="Logo">

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias animi, assumenda

            corporis deleniti deserunt harum illum ipsum laborum libero nemo nihil non odio officia perferendis quas

            recusandae vel velit.

        </p>

    </div>



    <div class="formContact">

        <?php

        echo do_shortcode('[contact-form-7 id="453" title="Contact form 1"]');

        ?>

    </div>

</div>



<?php get_footer(); ?>



