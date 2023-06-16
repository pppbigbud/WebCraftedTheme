<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>

<header class="header">



    <div class="containerLogo">

        <a href="<?php echo home_url('/'); ?>">

            <img class="logoHeader" src="<?php echo get_template_directory_uri(); ?>/img/logoReverie.png" alt="Logo">

        </a>

    </div>



    <nav class="containerMenuHeader">

        <ul class="menuHeaderUl">

            <li class="menuHeaderLi" data-href="/"><a href="/" class="btnHeaderMenu">Accueil</a></li>

            <li class="menuHeaderLi" data-href="/shop"><a href="/shop" class="btnHeaderMenu">Boutique</a></li>

            <li class="menuHeaderLi" data-href="/blog"><a href="/blog" class="btnHeaderMenu">Actualités</a></li>

            <li class="menuHeaderLi" data-href="/contact"><a href="/contact" class="btnHeaderMenu">Contact</a></li>

        </ul>

    </nav>



    <div class="btnCartHeader">

<!--        <img class="logoHeader" src="--><?php //echo get_template_directory_uri(); ?><!--/img/logoReverie.png" alt="Logo">-->

    </div>



</header>



<?php wp_body_open(); ?>