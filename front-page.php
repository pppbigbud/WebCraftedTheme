<?php get_header(); ?>

<div class="slider">
    <?php
    echo do_shortcode('[smartslider3 slider="2"]');
    ?>
</div>

<section>
    <!-----------------------------------------BLOC BOUTIQUE------------------------------->
    <div class="blocBoutique">

        <div class="containerDirRow">
            <div class="containerImgrPrezBoutique">
                <img class="imgrPrezBoutique" src="<?php echo get_template_directory_uri(); ?>/img/imgPrezBoutique.png"
                     alt="Boutique Reverie et Petits Plis">
            </div>


            <div class="blocTxtAcceuilBoutique">

                <h1 class="titreHome">LA BOUTIQUE</h1>

                <p>Notre boutique est spécialisée dans la vente de bijoux uniques et élégants en origami. Tous nos
                    produits
                    sont
                    fabriqués à la main par des artisans talentueux, ce qui garantit une qualité exceptionnelle et un
                    design
                    unique.
                </p>
                <br>
                <p>Nous proposons une large gamme de bijoux en origami, y compris des colliers, des boucles d'oreilles,
                    des
                    bracelets et des pendentifs. Chacun d'entre eux est soigneusement conçu pour refléter la
                    sophistication
                    et l'élégance de l'art de l'origami.
                </p>

                <button>
                    <a href="#" class="btnHome">Visiter la boutique !</a>
                </button>

            </div>

        </div>


    </div>

    <!-----------------------------------------BLOC ACTUALITES------------------------------->


    <div class="blocActu">

        <div class="containerDirRowActu">
            <div class="blocTxtAcceuilActu">
                <h1 class="titreHome">ACTUALITES</h1>
                <p>Notre boutique est spécialisée dans la vente de bijoux uniques et élégants en origami. Tous nos
                    produits
                    sont fabriqués à la main par des artisans talentueux, ce qui garantit une qualité exceptionnelle et
                    un
                    design unique.
                </p>
                <br>
                <p>Nous proposons une large gamme de bijoux en origami, y compris des colliers, des boucles d'oreilles,
                    des
                    bracelets et des pendentifs. Chacun d'entre eux est soigneusement conçu pour refléter la
                    sophistication
                    et l'élégance de l'art de l'origami.
                </p>
                <div class="containerBtnBlog">
                    <button>
                        <a href="#" class="btnHome">Découvrir nos actualités</a>
                    </button>
                </div>
            </div>

            <div class="containerImgrPrezActualite">
                <img class="imgrPrezActualite" src="<?php echo get_template_directory_uri(); ?>/img/imgActu.png"
                     alt="Actualités Reverie et Petits Plis">
            </div>
        </div>

    </div>

    <!-----------------------------------------BLOC COMMANDES------------------------------->

    <div class="blocCMD">

        <h1 class="titreHome">PARCOURS DES COMMANDES</h1>

        <div class="blocShapeOrder">

            <div class="shapeWhiteOrder">
                <img src="<?php echo get_template_directory_uri(); ?>/img/svg/blocCommandeHomePage.svg" alt="Image SVG">
                <img class="imgOrigamiPreparation"
                     src="<?php echo get_template_directory_uri(); ?>/img/origamiPreparationHome.png"
                     alt="Actualités Reverie et Petits Plis">
                <h3>PREPARATION</h3>
                <p>Notre boutique est spécialisée dans la vente de bijoux uniques et élégants en origami.
                    Notre boutique est spécialisée dans la vente de bijoux uniques et élégants en origami
                    Tous nos produits sont fabriqués à la main par </p>
            </div>

            <div class="shapeWhiteOrder">
                <img src="<?php echo get_template_directory_uri(); ?>/img/svg/blocCommandeHomePage.svg" alt="Image SVG">
                <img class="imgOrigamiPreparation"
                     src="<?php echo get_template_directory_uri(); ?>/img/origamiHomeEmballage.png"
                     alt="Actualités Reverie et Petits Plis">
                <h3>EMBALLAGE</h3>
                <p>Notre boutique est spécialisée dans la vente de bijoux uniques et élégants en origami.
                    Notre boutique est spécialisée dans la vente de bijoux uniques et élégants en origami
                    Tous nos produits sont fabriqués à la main par </p>
            </div>

            <div class="shapeWhiteOrder">
                <img src="<?php echo get_template_directory_uri(); ?>/img/svg/blocCommandeHomePage.svg" alt="Image SVG">
                <img class="imgOrigamiPreparation"
                     src="<?php echo get_template_directory_uri(); ?>/img/origamiHomeEnvoi.png"
                     alt="Actualités Reverie et Petits Plis">
                <h3>ENVOI</h3>
                <p>Notre boutique est spécialisée dans la vente de bijoux uniques et élégants en origami.
                    Notre boutique est spécialisée dans la vente de bijoux uniques et élégants en origami
                    Tous nos produits sont fabriqués à la main par </p>
            </div>

        </div>

</section>

<!--ADRESSE-->

<div class="adresseHomePage">
    <h3>NOS PROCHAINS MARCHERS</h3>
<!--    <img class="imgrPrezActualite" src="--><?php //echo get_template_directory_uri(); ?><!--/img/imgActu.png"-->
</div>

<!--ADRESSE-->

<div class="adresseHomePage">
    <h3>ADRESSE</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d122122.50493728172!2d3.313821968543457!3d45.87887327136173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1685000137686!5m2!1sfr!2sfr"
            width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<?php get_footer(); ?>
