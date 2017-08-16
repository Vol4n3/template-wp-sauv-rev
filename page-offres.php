<?php
/*
 * Template Name: offres-group
 *
 */

get_header(); ?>
<div class="sauvant-container offre">
    <?php

    $post_object = get_field('offre1');

    if ($post_object):

        // override $post
        $post = $post_object;
        setup_postdata($post);

        include ('template/offre.php');

         wp_reset_postdata();
        ?>
    <?php endif; ?>
    <?php

    $post_object = get_field('offre2');

    if ($post_object):

        // override $post
        $post = $post_object;
        setup_postdata($post);

        include ('template/offre.php');


         wp_reset_postdata();
        ?>
    <?php endif; ?>
    <?php
        include('template/formContact.php');
    ?>
</div>
<?php get_footer(); ?>
