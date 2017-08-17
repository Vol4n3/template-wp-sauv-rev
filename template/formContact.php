<section class="rdv">
    <p class="text-uppercase text-center">
        <strong>Accedez a un contact personnalisé</strong>
        <br>prenez rdv avec nous
    </p>

    <form class="tab-content" action="<?php echo get_template_directory_uri(); ?>/controller/mailFormValidate.php" method="post">
        <div class="tab-pane active">
            <div class="relative">
                <img src="<?php echo get_template_directory_uri(); ?>/img/profil.png" height="40"/>
                <input type="text" class="light" name="lastName" placeholder="Nom">
            </div>
            <div class="relative">
                <img src="<?php echo get_template_directory_uri(); ?>/img/profil.png" height="40"/>
                <input type="text" class="light" name="firstName" placeholder="Prénom">

            </div>

            <button class="pull-right shadow shadow-hover btn-next" type="button">Suivant</button>
        </div>
        <div class="tab-pane">
            <div class="relative">
                <img src="<?php echo get_template_directory_uri(); ?>/img/telephone.png" height="35"/>

                <input type="text" class="light" name="phone" placeholder="Téléphone">
            </div>
            <div class="relative">
                <img src="<?php echo get_template_directory_uri(); ?>/img/email.png" height="30"/>

                <input type="email" class="light" name="mail" placeholder="Email">
            </div>
            <button class="shadow shadow-hover btn-previous" type="button">retour</button>
            <button class="pull-right shadow shadow-hover btn-next" type="button">Suivant</button>
        </div>

        <div class="tab-pane">
            <div class="relative">
                <img src="<?php echo get_template_directory_uri(); ?>/img/calendar.png" height="40"/>

                <input type="text" name="date" class="light datepicker" placeholder="Date">

            </div>
            <div class="relative">
                <img src="<?php echo get_template_directory_uri(); ?>/img/heure.png" height="40"/>

                <input type="text" name="time" class="light timepicker" placeholder="Heure">
            </div>
            <button class="shadow shadow-hover btn-previous" type="button">retour</button>
            <button class="pull-right shadow shadow-hover btn-next" type="button">Suivant</button>
        </div>

        <div class="tab-pane">
            <div class="relative">
                <img src="<?php echo get_template_directory_uri(); ?>/img/skype.png" height="40"/>

                <input type="radio" class="invisible absolute" id="skype" name="rdv" value="skype">
                <label for="skype">Appel internet</label>
            </div>
            <div class="relative ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/localisation.png" height="40"/>

                <input type="radio" class="invisible absolute" id="inplace" name="rdv" value="inplace">
                <label for="inplace">Neuilly-sur-Seine</label>
            </div>
            <button class="shadow shadow-hover btn-previous" type="button">retour</button>
            <input type="submit" class="pull-right shadow shadow-hover" value="Valider"/>
        </div>
    </form>
</section>
<?php
//echo get_bloginfo( 'admin_email', 'raw' );
?>