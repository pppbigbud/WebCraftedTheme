<?php get_header(); ?>

    <div class="sliderArticle">
        <?php
        echo do_shortcode('[smartslider3 slider="2"]');
        ?>
    </div>

    <div class="containerPageArticleAll">

<!--        <div class="containerCategories">-->
<!--            <div class="categories">-->
<!--                <h2>Catégories</h2>-->
<!--                --><?php //echo wppln_list_cat(); ?>
<!--            </div>-->
<!--        </div>-->

        <div class="fullpage">
            <div class="grid-container">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article class="post">

                        <h2><?php the_title(); ?></h2>

                        <div class="imgPrezArticle">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <p class="post__meta">
                            Publié le <?php the_time(get_option('date_format')); ?>
<!--                            par --><?php //the_author(); ?><!-- • --><?php //comments_number(); ?>
                        </p>

                        <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>

                        <p class="lireSuiteContainer">
                            <a href="<?php the_permalink(); ?>" class="post__link">En savoir +</a>
                        </p>
                    </article>
                <?php endwhile; endif; ?>
            </div>


            <div class="containerNavArticle">
                <div class="site__navigation">
                    <div class="site__navigation__prev">
                        <?php previous_posts_link('Page Précédente'); ?>
                    </div>

                    <div class="site__navigation__next">
                        <?php next_posts_link('Page Suivante'); ?>
                    </div>
                </div>
            </div>

        </div>

    </div>
<?php get_footer(); ?>