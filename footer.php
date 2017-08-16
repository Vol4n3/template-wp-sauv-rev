<footer class="footer">
    <div class="sauvant-container">
        <div class="contact box mobile-col wrap between relative">
            <figure class="mail">

                <img src="<?php echo get_template_directory_uri(); ?>/img/mail.png"/>
                <figcaption>
                    <h4>Envoyez nous un message</h4>
                    <p>
                        <a target="_blank" href="mailto:reversion@sauvant.org">reversion@sauvant.org</a>
                    </p>
                </figcaption>
            </figure>
            <figure class="phone">
                <img src="<?php echo get_template_directory_uri(); ?>/img/phone.png"/>
                <figcaption>
                    <h4>Telephonez nous</h4>
                    <p>
                        <a target="_blank" href="tel:+33147450813">01 47 45 08 13</a>
                    </p>
                </figcaption>
            </figure>
            <figure class="site web">
                <img src="<?php echo get_template_directory_uri(); ?>/img/website.png"/>
                <figcaption>
                    <h4>Consultez notre autre site web</h4>
                    <p>
                        <a target="_blank" href="http://www.bilan-retraite.org/">www.bilan-retraite.org</a>
                    </p>
                </figcaption>
            </figure>

            <figure class="map">
                <img src="<?php echo get_template_directory_uri(); ?>/img/map.png"/>
                <figcaption>
                    <h4>Localisez nous</h4>
                    <p>
                        <a target="_blank"
                           href="https://www.google.com/maps/place/36+Avenue+Charles+de+Gaulle,+92200+Neuilly-sur-Seine,+France/@48.8796433,2.2774402,18.75z/data=!4m5!3m4!1s0x47e665604a254bc9:0x67354d84d7737e06!8m2!3d48.8797311!4d2.2775685">
                            36 avenue Charles de Gaulle
                            <br>92200 Neuilly sur Seine
                        </a>
                    </p>
                </figcaption>
            </figure>
        </div>
        <?php wp_nav_menu(array('theme_location' => 'social-menu', 'container_class' => 'social-menu-container')); ?>
        <?php dynamic_sidebar('footer-widget'); ?>
        <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'container_class' => 'menu-footer-container')); ?>
        <p>
            <br>SAUVANT
            CONSULTANTS &copy;
            Privacy Policy
        <p>
    </div>
</footer>
</div><!-- Page site -->
<?php wp_footer(); ?>

</body>
</html>
