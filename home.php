<?php get_header(); ?>
<div class="sauvant-container home-page">
    <?php dynamic_sidebar('slider-widget'); ?>
    <?php dynamic_sidebar('edito-widget'); ?>
    <section class="relative main-section">
        <div class="box center">
            <div class="circle box center y-center">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reversion_picto.png">
                </div>

            </div>
        </div>
        <article class="article"
                 style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/reversion_image.jpg)">
            <h2 class="text-uppercase underline">La reversion</h2>
            <h4 class="">Expliquez nous la réversion ?</h4>
            <p>
                La pension de réversion est une <strong>partie de la retraite</strong> dont
                bénéficiait ou aurait pu bénéficier le conjoint ou ex-conjoint décédé (en activité ou
                retraité).
            </p>
            <p>
                Elle est <strong>versée au conjoint survivant</strong> et/ou aux ex-conjoint(s) , si certaines
                conditions
                sont remplies.
            </p>
        </article>
        <h1 class="text-uppercase text-center">Pourquoi preparer <strong>maintenant</strong> votre
            <br>dossier de reversion ?</h1>

        <div class="box center wrap">
            <div class="reversion-tile">
                <div class="desc"><img src="<?php echo get_template_directory_uri(); ?>/img/organiser_image.png"
                                       alt="Organiser" width="300" height="230">
                    <h3>Prévoir et organiser</h3>
                    <p>Le maintien d’un revenu constant à mon coinjoint : c’est impératif de le mettre à l’abri
                        dans la mesure du possible.</p>

                </div>
            </div>

            <article class="reversion-tile">
                <div class="desc"><img src="<?php echo get_template_directory_uri(); ?>/img/gerer_image.png" alt="gerer"
                                       width="300" height="230">
                    <h3>Gérer dès aujourd'hui,</h3>
                    <p>En toute sérénité, ce dossier sensible avec un expert connu de mon conjoint : c’est
                        rassurant
                        pour la famille.</p>
                </div>
            </article>

            <article class="reversion-tile">
                <div class="desc"><img src="<?php echo get_template_directory_uri(); ?>/img/accompagner_image.png"
                                       alt="Transmettre" width="300"
                                       height="230">
                    <h3>Transmettre à mon entourage</h3>
                    <p>Des informations précieuses sur mes activités professionnelles et rectifier au besoin les
                        anomalies : c’est une mise a jour essentielle..</p>

                </div>
            </article>

            <div class="reversion-tile">
                <div class="desc"><img src="<?php echo get_template_directory_uri(); ?>/img/payement_image.png"
                                       alt="payement" width="300" height="230">
                    <h3>Faciliter la gestion et le paiement des droits,</h3>
                    <p>C’est financièrement rassurant.</p>

                </div>
            </div>

            <article class="reversion-tile">
                <div class="desc"><img src="<?php echo get_template_directory_uri(); ?>/img/echelonner_image.png"
                                       alt="echelonner" width="300" height="230">
                    <h3>Echelonner aujourd'hui,</h3>
                    <p>Une dépenses en plusieurs virements : c’est supportable.</p>

                </div>
            </article>

            <article class="reversion-tile">
                <div class="desc"><img src="<?php echo get_template_directory_uri(); ?>/img/protection_social.png"
                                       alt="carte vitale" width="300"
                                       height="230">
                    <h3>Transmettre à mon entourage</h3>
                    <p>Des informations précieuses sur mes activités professionnelles et rectifier au besoin les
                        anomalies : c’est une mise a jour essentielle.</p>
                </div>
            </article>
        </div>
    </section>
    <?php include('template/formContact.php'); ?>
    <form id="devis-rapide">
        <section class="devis-rapide mobile y-center box wrap between">
            <div>
                <img height="85" src="<?php echo get_template_directory_uri(); ?>/img/devis_1.png">
            </div>
            <p>
                Réalisez un devis en ligne
                <br>gratuitement et sans
                <br>engagement
            </p>
            <select form="devis-rapide" name="status" id="list-status" title="Vous etes ?">
                <option selected disabled>
                    Vous etes ?
                </option>
                <option value="retirement">Retraité</option>
                <option value="active">Actif</option>
            </select>
            <div class="box y-center">
                <input type="email" name="email" class="light" placeholder="Votre adresse mail">
                <input type="submit" value="ok">

            </div>
        </section>
    </form>
</div>
<?php get_footer(); ?>
