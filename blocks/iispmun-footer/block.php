<section id="footer">
    <header>
        <div class="logo-container">
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>
            <div class="logo-text">
                <a href="<?php echo home_url(); ?>">
                    <div class="logo-shorttitle">
                        IISP <span>MUN</span>
                    </div>
                    <div class="logo-subtitle">
                        Indus International School Pune
                    </div>
                    <div class="logo-title">
                        Model <span>United Nations</span>
                    </div>
                </a>
            </div>
        </div>

        <div class="school-logos-container">
            <div class="logo">
                <a href="https://www.ibo.org/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ib-logo.png">
                </a>
            </div>

            <div class="logo">
                <a href="https://www.ibo.org/programmes/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ib-continuum.png">
                </a>
            </div>

            <div class="logo">
                <a href="https://pune.indusschool.com/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iisp-logo.png">
                </a>
            </div>
        </div>
    </header>

    <div class="mid-footer-container">
        <div class="footer-navigation-menu">
            <?php
            wp_nav_menu(
                array(
                    "theme_location" => "footer",
                    "depth" => 2
                )
            );
            ?>
        </div>
        <div class="footer-info-container">
            <div>
                <div class="social-media-container">
                    <a href="https://www.instagram.com/iispmun">
                        <div>
                            <img class="img-full-size" src="<?php echo get_template_directory_uri()?>/assets/images/instagram.svg">
                        </div>
                    </a>

                    <a href="https://www.linkedin.com/company/iisp-mun/">
                        <div>
                            <img class="img-full-size" src="<?php echo get_template_directory_uri()?>/assets/images/linkedin.svg">
                        </div>
                    </a>

                    <a href="https://www.facebook.com/induspune/">
                        <div>
                            <img class="img-full-size" src="<?php echo get_template_directory_uri()?>/assets/images/facebook.svg">
                        </div>
                    </a>

                    <a href="https://pune.indusschool.com/">
                        <div>
                            <img class="img-full-size" src="<?php echo get_template_directory_uri()?>/assets/images/iisp.svg">
                        </div>
                    </a>
                </div>
                <div class="email"><a href="mailto:contact@iispmun.com">contact@iispmun.com</a></div>
            </div>
            <div class="address">
                576, Bhukum, Near Manas Lake<br>
                Angrewadi, Mulshi, Pune<br>
                Maharashtra 412115
            </div>
        </div>
    </div>

    <div>
        <div class="copyright">
            © Indus International School, Pune
        </div>

        <div class="legal-container">
            <div>Privacy Policy</div>
            <div>Terms of Use</div>
        </div>
    </div>
</section>

<style>
    <?php include "style.css"; ?>
</style>
