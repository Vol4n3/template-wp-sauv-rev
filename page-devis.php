<?php
/*
 * Template Name: devis
 *
 */
get_header(); ?>
<div class="sauvant-container devis">
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
            <div class="circle box yellow center y-center">
                <div>
                    <img width="30px" src="<?php the_field('picto_circle'); ?>">
                </div>

            </div>
        </div>
        <div class="page-content">
            <article>
                <header class="bg-yellow">
                    <ul class="sauvant-nav-tabs box y-center wrap">
                        <li class="active">
                            <a href="#1a" data-toggle="tab">Votre situation</a>
                        </li>
                        <li>
                            <a href="#2a" data-toggle="tab">Votre identité</a>
                        </li>
                        <li>
                            <a href="#3a" data-toggle="tab">Votre environnement</a>
                        </li>
                        <li>
                            <a href="#4a" data-toggle="tab">Votre conjoint</a>
                        </li>
                    </ul>
                </header>
                <form class="tab-content" id="devis-form" action="/" method="post" novalidate>
                    <div class="tab-pane active" id="1a">
                        <h4>Quelle est votre situation actuelle ?</h4>
                        <div class="box between">
                            <input type="radio" id="devis-form-activity" name="client_situation" value="activité"
                                   checked>
                            <label for="devis-form-activity" class="btn btn-devis">Je suis en activité</label>

                            <input type="radio" id="devis-form-retirement" name="client_situation" value="retraité">
                            <label for="devis-form-retirement" class="btn btn-devis">Je suis retraité</label>
                        </div>
                        <div class="box center">
                            <input type="checkbox" id="devis-form-partner" name="partner-deceased"
                                   value="conjoint décédé">
                            <label for="devis-form-partner" class="btn btn-devis">Mon conjoit est décédé</label>
                        </div>
                        <button type="button" class="btn pull-right tab-btn-next shadow shadow-hover text-uppercase">
                            Suivant
                        </button>
                    </div>

                    <div class="tab-pane" id="2a">
                        <h4>Parlez nous un peu de vous !</h4>
                        <div class="box wrap between">
                            <div class="input-placeholder">
                                <input type="text" name="client_nom" id="devis-form-client_nom"
                                       placeholder="Votre nom" required>
                                <label for="devis-form-client_nom">Votre nom</label>
                            </div>
                            <div class="input-placeholder">
                                <input type="text" name="client_prenom" id="devis-form-client_prenom"
                                       placeholder="Votre prénom" required>
                                <label for="devis-form-client_prenom">Votre prénom</label>
                            </div>
                            <div class="input-placeholder">

                                <input type="text" class="datepicker" name="client_date_naissance"
                                       id="devis-form-client_date_naissance"
                                       placeholder="Votre date de naissance" required>
                                <label for="devis-form-client_date_naissance">Votre date de naissance</label>
                            </div>
                            <div class="input-placeholder">
                                <input type="text" name="client_lieu_naissance" id="devis-form-client_lieu_naissance"
                                       placeholder="Votre lieu de naissance" required>
                                <label for="devis-form-client_lieu_naissance">Votre lieu de naissance</label>
                            </div>
                            <div class="input-placeholder">
                                <input type="email" name="client_email" id="devis-form-client_email"
                                       placeholder="Votre email" required>
                                <label for="devis-form-client_email">Votre email</label>
                            </div>
                            <div class="input-placeholder">
                                <input type="text" name="client_telephone" id="devis-form-client_telephone"
                                       placeholder="Votre téléphone" required>
                                <label for="devis-form-client_telephone">Votre téléphone</label>
                            </div>
                            <div class="input-placeholder">
                                <input type="text" name="client_adresse" id="devis-form-client_adresse"
                                       placeholder="Votre lieu de résidence" required>
                                <label for="devis-form-client_adresse">Votre lieu de résidence</label>
                            </div>
                        </div>
                        <button type="button" class="btn pull-left tab-btn-previous shadow shadow-hover text-uppercase">
                            retour
                        </button>
                        <button type="button" class="btn pull-right tab-btn-next shadow shadow-hover text-uppercase">
                            Suivant
                        </button>
                    </div>

                    <div class="tab-pane" id="3a">
                        <h4>A ce jour êtes vous marié ?</h4>

                        <div class="between box">
                            <input type="radio" id="devis-form-ms_oui" name="mariage_statut" value="est marié">
                            <label for="devis-form-ms_oui" class="btn btn-devis">Oui</label>

                            <input type="radio" id="devis-form-ms_non" name="mariage_statut" value="non marié">
                            <label for="devis-form-ms_non" class="btn btn-devis">Non</label>
                        </div>
                        <div id="detail-mariage" style="display: none">
                            <h4>Avant cette union, avez vous convolé en justes noces ?</h4>

                            <div class="between box">
                                <input type="radio" id="devis-form-other_mary_yes" name="other_mary" value="oui">
                                <label for="devis-form-other_mary_yes" class="btn btn-devis">Oui</label>

                                <input type="radio" id="devis-form-other_mary_no" name="other_mary" value="non">
                                <label for="devis-form-other_mary_no" class="btn btn-devis">Non</label>
                            </div>
                            <div id="more-detail-mariage" style="display: none;">
                                <h4>Dans l'affirmative, combien de mariages précédents ?</h4>

                                <div class="between wrap box">
                                    <input type="radio" id="devis-form-nm_1" name="number_mary" value="1">
                                    <label for="devis-form-nm_1" class="btn btn-devis">1</label>

                                    <input type="radio" id="devis-form-nm_2" name="number_mary" value="2">
                                    <label for="devis-form-nm_2" class="btn btn-devis">2</label>

                                    <input type="radio" id="devis-form-nm_3" name="number_mary" value="3">
                                    <label for="devis-form-nm_3" class="btn btn-devis">3</label>

                                    <input type="radio" id="devis-form-nm_more" name="number_mary" value="3+">
                                    <label for="devis-form-nm_more" class="btn btn-devis">+</label>
                                </div>

                                <h4>Vos ex-conjoints sont ils ?</h4>

                                <div class="box wrap between">
                                    <input type="radio" id="devis-form-remary" name="mariage-ex"
                                           value="conjoints remariés">
                                    <label for="devis-form-remary" class="btn btn-devis">sont Remariés</label>

                                    <input type="radio" id="devis-form-deceases" name="mariage-ex"
                                           value="conjoints décédés">
                                    <label for="devis-form-deceases" class="btn btn-devis">sont Décédés</label>

                                    <input type="radio" id="devis-form-dont-know" name="mariage-ex"
                                           value="conjoints incertitudes">
                                    <label for="devis-form-dont-know" class="btn btn-devis">Je ne sais pas</label>
                                </div>
                            </div>

                        </div>

                        <button type="button" class="btn pull-left tab-btn-previous shadow shadow-hover text-uppercase">
                            Retour
                        </button>
                        <button type="button" class="btn pull-right tab-btn-next shadow shadow-hover text-uppercase">
                            Suivant
                        </button>

                    </div>
                    <div class="tab-pane" id="4a">
                        <h4>Parlez nous de votre conjoint(e) !</h4>
                        <div class="wrap box between">
                            <div class="input-placeholder">
                                <input type="text" name="conjoint_nom" id="devis-form-conjoint_nom"
                                       placeholder="Son nom">
                                <label for="devis-form-conjoint_nom">Son nom</label>
                            </div>
                            <div class="input-placeholder">
                                <input type="text" name="conjoint_prenom" id="devis-form-conjoint_prenom"
                                       placeholder="Son prénom">
                                <label for="devis-form-conjoint_prenom">Son prénom</label>
                            </div>
                            <div class="input-placeholder">
                                <input type="text" class="datepicker" name="conjoint_date_naissance"
                                       id="devis-form-conjoint_date_naissance"
                                       placeholder="Sa date de naissance">
                                <label for="devis-form-conjoint_date_naissance">Sa date de naissance</label>
                            </div>
                            <div class="input-placeholder">
                                <input type="text" name="conjoint_lieu_naissance"
                                       id="devis-form-conjoint_lieu_naissance"
                                       placeholder="Son lieu de naissance">
                                <label for="conjoint_lieu_naissance">Son lieu de naissance</label>
                            </div>
                        </div>
                        <button type="button" class="btn pull-left tab-btn-previous shadow shadow-hover text-uppercase">
                            retour
                        </button>

                        <input type="submit" class="btn pull-right bg-yellow shadow shadow-hover text-uppercase"
                               value="Valider">
                    </div>
                    <div class="clearfix"></div>
                </form>
            </article>

        </div>

        <div class="box between wrap relative text-center devis-def">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/img/gratuit.png"/>
                <figcaption>
                    <p>
                        Demande de devis
                        <br><strong>gratuit</strong> et <strong>sans
                            <br>engagement</strong>
                    </p>
                </figcaption>
            </figure>

            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/img/virements.png"/>
                <figcaption>
                    <p>
                        Une dépense en
                        <br><strong>quatre virements</strong>
                    </p>
                </figcaption>
            </figure>

            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/img/protection.png"/>
                <figcaption>
                    <p>
                        Protection de <strong>vos
                            <br>données</strong> et de
                        <br><strong>votre vie privée</strong>
                    </p>
                </figcaption>
            </figure>
        </div>

        <?php include('template/formContact.php'); ?>
    </section>
</div>
<script>
    jQuery(function () {
        var $ = jQuery;
        $('input[type=radio][name=mariage_statut]').change(function () {
            if (this.value === 'est marié') {
                $('#detail-mariage').slideDown();
            }
            else if (this.value === 'non marié') {
                $('#detail-mariage').slideUp();
            }
        });
        $('input[type=radio][name=other_mary]').change(function () {
            if (this.value === 'oui') {
                $('#more-detail-mariage').slideDown();
            }
            else if (this.value === 'non') {
                $('#more-detail-mariage').slideUp();
            }
        });

        function invalid(elem) {

            var $closest = elem.closest('.tab-pane');
            var id = $closest.attr('id');
            var $a = $('a[href="#' + id + '"]');
            $a.trigger('click');
            $a.addClass('error-animate');
            elem.addClass('error-border-animate');
            setTimeout(function () {
                $a.removeClass('error-animate');
                elem.removeClass('error-border-animate');

            }, 4000);

        }

        var isValidForm = false;

        function getValForm(name, form) {

            //Return statement
            switch (name) {
                case 'mariage_statut':
                    return $(form['partner-deceased']).is(':checked') ?
                        "est veuf(ve)" + " et " + $(form['mariage_statut']).filter(':checked').val() :
                        $(form['mariage_statut']).filter(':checked').val();
                    break;
                case 'mariage_ex':
                    return ($(form['other_mary']).filter(':checked').val() === "oui") ?
                        "nombres de mariages :" + $(form['number_mary']).filter(':checked').val() + " et " + $(form['mariage-ex']).filter(':checked').val() :
                        "aucun mariage précédent";
                    break;
                default:
                    var $elem = $(form[name]);
                    if($elem.prop('type') === 'email'){
                        //mail regex
                        if(!/^([a-z0-9]+(?:[._-][a-z0-9]+)*)@([a-z0-9]+(?:[.-][a-z0-9]+)*\.[a-z]{2,})$/.test($elem.val())){
                            invalid($elem);
                        }
                    }
                    if ($elem.prop('required') && !$elem.val()) {
                        invalid($elem);
                        isValidForm = false;
                    }
                    if ($elem.is(':checkbox') || $elem.is(':radio')) {
                        return $elem.filter(':checked').val();
                    } else {

                        return $elem.val();
                    }
            }
        }

        $('#devis-form').submit(function (ev) {
            ev.preventDefault();
            ev.stopPropagation();
            isValidForm = true;
            var data = {
                "client_nom": getValForm("client_nom", this),
                "client_prenom": getValForm("client_prenom", this),
                "client_date_naissance": getValForm("client_date_naissance", this),
                "client_lieu_naissance": getValForm("client_lieu_naissance", this),
                "client_telephone": getValForm("client_telephone", this),
                "client_email": getValForm("client_email", this),
                "client_adresse": getValForm("client_adresse", this),
                "client_situation": getValForm("client_situation", this),
                "conjoint_nom": getValForm("conjoint_nom", this),
                "conjoint_prenom": getValForm("conjoint_prenom", this),
                "conjoint_date_naissance": getValForm("conjoint_date_naissance", this),
                "conjoint_lieu_naissance": getValForm("conjoint_lieu_naissance", this),
                "mariage_statut": getValForm("mariage_statut", this),
                "mariage_ex": getValForm("mariage_ex", this)
            };
            if (isValidForm) {
                $.ajax({
                    method: $(this).attr('method'),
                    url: $(this).attr('action'),
                    data: data,
                    dataType: 'json',
                    success: function (res, status) {
                        console.log(res);
                    },
                    error: function (res, status, err) {
                        console.log(res);
                    },
                    complete: function (res, status) {
                        console.log(res);
                    }

                })
            }
        });
    })
</script>

<?php get_footer(); ?>
