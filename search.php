<?php get_header(); ?>
<div class="sauvant-container search-page">
    <section class="main-section">
        <div class="page-content">
            <?php if (have_posts()) : ?>
                <h3>Résultat de vos recherches</h3>
            <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink() ?>">
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p>
                </a>
            <?php endwhile;

            else :
            ?>
                <h3>Nous avons trouvez aucun résultat</h3>
            <?php
            endif;
            ?>

        </div>
    </section>
</div>
<?php get_footer(); ?>