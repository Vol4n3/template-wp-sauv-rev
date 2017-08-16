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
            <h2 class="text-uppercase text-center"><?php the_field('title'); ?></h2>
            <?php the_field('content'); ?>
            <?php if (get_field('encadre')): ?>
                <div class="encadre">
                    <?php the_field('encadre') ?>
                </div>
            <?php endif; ?>
            <?php the_field('bottom_content'); ?>
            <?php if(get_field('yellow_btn_title')): ?>
            <div class="text-center vertical-space">
                <a class="btn btn-demande shadow shadow-hover"
                   href="<?php the_field('yellow_button_url'); ?>"><?php the_field('yellow_btn_title'); ?></a>
            </div>
            <?php endif; ?>
            <?php
            if (have_rows('boutons_documents')):
            while (have_rows('boutons_documents')) : the_row();
            ?>
                <div class="pull-right vertical-space">
                <a class="btn btn-download shadow shadow-hover" target="_blank"
                   href="<?php the_sub_field('fichier'); ?>"><?php the_sub_field('titre'); ?></a>
            </div>
            <div class="clearfix"></div>
            <?php
            endwhile;
            else :
            endif;

            ?>
        </article>
    </section>