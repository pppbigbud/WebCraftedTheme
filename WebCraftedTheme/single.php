<?php function load_custom_styles()
{
    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('body', get_template_directory_uri() . '/css/body.css');
    wp_enqueue_style('menuHome', get_template_directory_uri() . '/css/menuHome.css');
    wp_enqueue_style('single', get_template_directory_uri() . '/css/single.css');

}

add_action('wp_enqueue_scripts', 'load_custom_styles');
?>

<?php get_header();
/*
  Template Name: Services
  Template Name: Full-width
  Template Post Type: post, page, product
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="post">

        <!--        Ici c'est l'affichage du titre-->
        <h1 class="titleSinglePage"><?php the_title(); ?></h1>

        <!--        Ici c'est l'affichage de l'IMG principale-->
        <div class="imgPrezSingle">
            <?php the_post_thumbnail(); ?>
        </div>

        <!--        Ici c'est l'affichage des catégories-->
        <div class="post__meta">
            <div class="categorySinglePage"><?php the_category(); ?></div>
        </div>

        <!--        Ici c'est l'affichage du contenu-->

        <div class="centrageContainerArticle">

            <div class="post__content">

                <div class="imgContainerArticle">
                    <?php $image = get_field('imgarticle');
                    if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    <?php endif; ?>
                </div>

                <div class="txtContainerArticle">
                    <?php the_field('single_page_txt'); ?>
                </div>

            </div>

        </div>

<!--        <div class="carrouselArticleVedette">-->
<!--            --><?php
//            $categories = get_the_category(); // Récupère les catégories de l'article
//
//            if ($categories) {
//                $category_ids = array(); // Tableau pour stocker les ID des catégories
//
//                foreach ($categories as $category) {
//                    $category_ids[] = $category->term_id; // Ajoute les ID des catégories au tableau
//                }
//
//                $current_category = $category_ids[0]; // Sélectionne la première catégorie
//                // (vous pouvez adapter cette logique selon vos besoins)
//            }
//            ?>
<!---->
<!--            --><?php //$args = array(
//                'post_type' => 'post',
//                'posts_per_page' => 5, // Nombre d'articles à afficher
//                'category__in' => array($current_category), // Utilise la catégorie de l'article consulté comme filtre
//                'post__not_in' => array(get_the_ID()), // Exclut l'article consulté lui-même
//            );
//
//            $query = new WP_Query($args); // Exécute la requête
//
//            if ($query->have_posts()) {
//                echo '<div class="carousel">'; // Début du carrousel
//
//                while ($query->have_posts()) {
//                    $query->the_post();
//
//                    // Affichage des articles du carrousel ici (exemple : titre de l'article)
//                    echo '<h2>' . get_the_title() . '</h2>';
//                    echo '<img>' . get_the_post_thumbnail() . '</img>';
//                }
//
//                echo '</div>'; // Fin du carrousel
//
//                wp_reset_postdata(); // Réinitialise les données de l'article
//            }
//            ?>
<!--        </div>-->


    </article>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
