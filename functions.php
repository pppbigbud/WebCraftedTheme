<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

//Charger les polices personnalisée
function mon_theme_enqueue_scripts()
{
    // Charger les polices personnalisées de Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
}

add_action('wp_enqueue_scripts', 'mon_theme_enqueue_scripts');


//Charger CSS dans le wp_head en fonction des pages visitées
function load_CSS_homePage()
{
    if (is_page('')) {
        $stylesheet_url = get_theme_file_uri('style.css');
        wp_enqueue_style('style.css', esc_url($stylesheet_url));

        $stylesheet_url = get_theme_file_uri('css/header.css');
        wp_enqueue_style('header.css', esc_url($stylesheet_url));

        $stylesheet_url = get_theme_file_uri('css/body.css');
        wp_enqueue_style('body.css', esc_url($stylesheet_url));

        $stylesheet_url = get_theme_file_uri('css/boutiqueHome.css');
        wp_enqueue_style('boutiqueHome.css', esc_url($stylesheet_url));

        $stylesheet_url = get_theme_file_uri('css/actualiteHome.css');
        wp_enqueue_style('actualiteHome.css', esc_url($stylesheet_url));

        $stylesheet_url = get_theme_file_uri('css/commandeHome.css');
        wp_enqueue_style('commandeHome.css', esc_url($stylesheet_url));

        $stylesheet_url = get_theme_file_uri('css/sliderHome.css');
        wp_enqueue_style('sliderHome.css', esc_url($stylesheet_url));

        $stylesheet_url = get_theme_file_uri('css/buttonHome.css');
        wp_enqueue_style('buttonHome.css', esc_url($stylesheet_url));

        $stylesheet_url = get_theme_file_uri('css/footer.css');
        wp_enqueue_style('footer.css', esc_url($stylesheet_url));

        $stylesheet_url = get_theme_file_uri('css/adresseHome.css');
        wp_enqueue_style('adresseHome.css', esc_url($stylesheet_url));

        $stylesheet_url = get_theme_file_uri('css/menuHome.css');
        wp_enqueue_style('menuHome.css', esc_url($stylesheet_url));

        $stylesheet_url = get_theme_file_uri('css/store.css');
        wp_enqueue_style('store.css', esc_url($stylesheet_url));

    }
}

add_action('wp_head', 'load_CSS_homePage');


//Ajout style CART woo commerce

function custom_woocommerce_styles() {
    wp_enqueue_style( 'cart.css', get_stylesheet_directory_uri() . '/css/cart.css' );
}
add_action( 'wp_enqueue_scripts', 'custom_woocommerce_styles' );


//Ajout des scripts JS

function enqueue_custom_script()
{
    // Enqueue le fichier JavaScript personnalisé
    wp_enqueue_script('menuClassActive', get_template_directory_uri() . '/js/menuClassActive.js', array(), '1.0', true);
    wp_enqueue_script('lienActifPartoutHeader', get_template_directory_uri() . '/js/lienActifPartoutHeader.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_script');


//Afficher les catégories
function wppln_list_cat()
{
    $string = '<ul>';
    $list_cat = get_terms('category');
    if (!empty($list_cat)) {
        foreach ($list_cat as $key => $cat) {
            $string .= '<li>' . $cat->name . '<br />';
//            $string .= '<em>'. $cat->description . '</em> </li>';
        }
    }
    $string .= '</ul>';

    return $string;
}

add_shortcode('wppln_listcat', 'wppln_list_cat');

//Changer les textes des buttons woo-commerce

function change_woocommerce_button_text($translated_text, $text, $domain)
{
    switch ($translated_text) {
        case 'Add to cart':
            $translated_text = 'Ajouter au panier';
            break;
        case 'View cart':
            $translated_text = 'Voir mon panier';
            break;
        case 'Select options':
            $translated_text = 'Choisir les options';
            break;
        case 'View products':
            $translated_text = 'Voir les produits';
            break;
        case 'Default Sorting':
            $translated_text = 'test';
            break;
        case 'Apply coupon':
            $translated_text = 'Code de reduction';
            break;
        case 'Product':
            $translated_text = 'Produit(s)';
            break;
        case 'Price':
            $translated_text = 'Prix';
            break;
        case 'Quantity':
            $translated_text = 'Quantité(s)';
            break;
        case 'Subtotal':
            $translated_text = 'Sous-Total';
            break;
        case 'Update cart':
            $translated_text = 'Mettre à jour le panier';
            break;
        case 'Cart updated.':
            $translated_text = 'Panier mis à jour';
            break;
        case 'Proceed to checkout':
            $translated_text = 'Passer au paiement';
            break;
        case 'Cart totals':
            $translated_text = 'Total du panier';
            break;
    }


    return $translated_text;
}

add_filter('gettext', 'change_woocommerce_button_text', 20, 3);


//Changer les textes des formulaires

function change_woocommerce_catalog_orderby( $sortby ) {
    $sortby['menu_order'] = 'Trier par';
    $sortby['popularity'] = 'Popularité';
    $sortby['rating'] = 'Évaluation';
    $sortby['date'] = 'Date';
    $sortby['price'] = 'Prix';
    $sortby['price-desc'] = 'Prix décroissant';
    return $sortby;
}
add_filter( 'woocommerce_catalog_orderby', 'change_woocommerce_catalog_orderby', 20 );

