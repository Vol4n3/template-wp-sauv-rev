<?php
/*
 * Template Name: presentation
 *
 */
get_header(); ?>

<div class="sauvant-container presentation">
    <section class="header-image">
        <img src="<?php the_field('image'); ?>">
        <div class="header-caption">

            <div class="blue-heading inline-box y-center <?php if (get_field('right-orientation')) {
                echo('right');
            } ?>">
                <div class="caption-text">
                    <?php the_field('text-caption'); ?>
                </div>

            </div>
        </div>
    </section>
    <section class="relative main-section">
        <div class="box center">
            <div class="circle box center y-center">
                <div>
                    <img width="30px" src="<?php the_field('picto_circle'); ?>">
                </div>

            </div>
        </div>
        <article class="page-content text-center">
            <h2 class="text-uppercase underline"><?php the_field('title'); ?></h2>
            <div class="box between mobile stats">
                <div>
                    <span class="number">
                        <?php the_field('nombre_dossiers_clients'); ?>
                    </span>
                    <img height="50"
                         src="<?php echo get_template_directory_uri(); ?>/img/clients.png"/>
                    <p>
                        <?php the_field('label_dossiers_clients'); ?>
                    </p>
                </div>
                <div>
                    <span class="number">
                        <?php the_field('entreprises_confiantes'); ?>
                    </span>
                    <img height="50"
                         src="<?php echo get_template_directory_uri(); ?>/img/entreprises.png"/>
                    <p>
                        <?php the_field('label_entreprises_confiantes'); ?>
                    </p>
                </div>
                <div>
                    <span class="number">
                        <?php the_field('annees_dexperiences'); ?>
                    </span>
                    <img height="50"
                         src="<?php echo get_template_directory_uri(); ?>/img/experience.png"/>
                    <p>
                        <?php the_field('label_annees_dexperiences'); ?>
                    </p>
                </div>
            </div>
            <?php the_field('content'); ?>
            <div class="box wrap between mobile expertise">
                <?php
                if (have_rows('logo_expertise')):
                    while (have_rows('logo_expertise')) : the_row();
                        ?>
                        <div>
                            <img height="130" src="<?php the_sub_field('logo'); ?>">
                            <p><?php the_sub_field('label'); ?></p>
                        </div>

                        <?php
                    endwhile;
                else :

                endif;

                ?>

            </div>
            <h3 class="underline">
                <?php the_field('titre_equipe'); ?>
            </h3>
            <div class="box between mobile wrap team">
                <?php
                if (have_rows('lequipe')):
                    while (have_rows('lequipe')) : the_row();
                        ?>
                        <figure>
                            <img width="200" src="<?php the_sub_field('photo'); ?>">
                            <figcaption>
                                <h4><?php the_sub_field('nom'); ?></h4>
                                <p><?php the_sub_field('resume'); ?></p>
                            </figcaption>
                        </figure>

                        <?php
                    endwhile;
                else :

                endif;

                ?>

            </div>
        </article>

        <?php include('template/formContact.php'); ?>
    </section>
</div>


<?php get_footer(); ?>
