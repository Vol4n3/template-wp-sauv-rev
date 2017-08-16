<?php get_header(); ?>
<div class="sauvant-container single sauvant-blog">
    <section class="main-section">
        <article class="page-content">
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
    </section>
</div>


<?php get_footer(); ?>
