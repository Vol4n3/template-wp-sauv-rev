<?php
/*
 * Template Name: faq
 *
 */
get_header(); ?>

<div class="sauvant-container faq">
    <section class="header-image">
        <img src="<?php the_field('image'); ?>">
        <div class="header-caption">

            <div style="max-width: 405px;" class="blue-heading inline-box <?php if (get_field('right-orientation')) {
                echo('right');
            } ?>">
                <div class="caption-text">
                    <?php the_field('text-caption'); ?>
                    <?php
                    $qod = "";
                    $rod = "";
                    if (have_rows('questions')):
                        while (have_rows('questions')) : the_row();
                            if (get_sub_field('question_du_jour')) {
                                $qod = get_sub_field('question');
                                $rod = get_sub_field('reponse');
                            }
                        endwhile;
                    endif; ?>
                    <h3><?php echo $qod; ?></h3>
                    <p><?php echo $rod; ?></p>
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
            <div class="text-center">
                <h2 class="text-uppercase underline"><?php the_field('title'); ?></h2>
            </div>
            <?php the_field('content'); ?>
            <h3 class="underline">Questions</h3>
            <div class="" id="accordion" role="tablist">
                <?php
                $countFAQ = 0;
                if (have_rows('questions')):
                    while (have_rows('questions')) : the_row();
                        $countFAQ++;
                        ?>
                        <div class="tab-item">
                            <h4>
                                <a role="button" class="tab-title collapsed" data-toggle="collapse"
                                   data-parent="#accordion"
                                   href="#faq-<?php echo $countFAQ; ?>">
                                    <?php the_sub_field('question'); ?>
                                </a>
                            </h4>
                            <div id="faq-<?php echo $countFAQ; ?>" role="tabpanel"
                                 class="panel-collapse collapse">
                                <?php the_sub_field('reponse'); ?>
                            </div>

                        </div>

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
