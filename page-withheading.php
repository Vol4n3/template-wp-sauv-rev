<?php
/*
 * Template Name: withheading
 *
 */
get_header(); ?>

<div class="sauvant-container home-page">
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
        <article class="page-content">
            <h2 class="text-uppercase underline"><?php the_field('title'); ?></h2>
            <?php the_field('content'); ?>
        </article>
        <?php include('template/formContact.php');?>
    </section>
</div>

<?php get_footer(); ?>
