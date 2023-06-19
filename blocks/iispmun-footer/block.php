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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ib-logo.png">
            </div>
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ib-continuum.png">
            </div>
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iisp-logo.png">
            </div>
        </div>
    </header>

    <div class="mid-footer-container">
        <div class="footer-navigation-menu">
            <?php
            if (get_field("edition")) {
                wp_nav_menu(
                    array(
                        "menu" => get_field("footer_navigation_menu", get_field("edition")),
                        "depth" => 2
                    )
                );
            } else {
                wp_nav_menu(
                    array(
                        "theme_location" => "footer",
                        "depth" => 2
                    )
                );
            }
            ?>
        </div>
        <div class="footer-info-container">
            <div>
                <div class="social-media-container">
<!--                    --><?php
//                    $socials_source = get_field("edition") ?: 'menu_' . get_nav_menu_locations()["footer"];
//                    foreach (get_field("socials", $socials_source) as $platform) { ?>
<!--                        <a href="--><?php //the_field("url", $platform); ?><!--">-->
<!--                            <div>-->
<!--                                <img src="--><?php //the_field("icon", $platform); ?><!--">-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        --><?php
//                    }
//                    ?>
                </div>
                <div class="email">contact@iispmun.com</div>
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
