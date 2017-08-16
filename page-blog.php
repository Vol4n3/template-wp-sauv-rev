<?php
/*
 * Template Name: blog
 *
 */
get_header(); ?>
<div class="sauvant-container sauvant-blog">
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
                    <img width="40px" src="<?php the_field('picto_circle'); ?>">
                </div>

            </div>
        </div>
        <div class="page-content">
            <h2 class="text-uppercase underline"><?php the_field('title'); ?></h2>
            <?php the_field('content'); ?>
            <div class="box down">

            </div>
            <?php
            query_posts(array('post_type' => 'post'));
            if (have_posts()) : while (have_posts()) : the_post();
                ?>
                <article>
                    <figure class="box mobile">
                        <div>
                            <img width="380" src="<?php the_field('thumbnail'); ?>">
                        </div>
                        <figcaption class="relative">
                            <?php $dateString = get_the_date('Y-m-d');
                            $date = new DateTime($dateString);
                            ?>
                            <time datetime="<?php echo $dateString; ?>">le <?php echo $date->format('d/m/Y'); ?></time>
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                            <?php the_content(); ?>
                            <a class="btn btn-more" href="<?php the_field('url_article'); ?>">En savoir</a>
                        </figcaption>
                    </figure>
                </article>
                <?php
            endwhile;
            endif;
            ?>
        </div>
        <?php include('template/formContact.php'); ?>
    </section>
</div>


<?php get_footer(); ?>
