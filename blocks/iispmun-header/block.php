<header id="header" class="card-shadow">
    <div class="logo-container">
        <div class="logo">
            <?php the_custom_logo();?>
        </div>
        <div class="logo-text">
            <a href="<?php echo home_url();?>">
                <div class="logo-shorttitle">
                    IISP <span>MUN</span>
                </div>
                <div class="logo-subtitle">
                    Indus International School Pune
                </div>
                <div class="logo-title">
                    Model <span>United Nations<span>
                </div>
            </a>
        </div>
    </div>

    <?php
    wp_nav_menu(
        array(
            "theme_location" => "header" ,
            "depth" => 2
        )
    );
    ?>
</header>

<style>
    <?php include "style.css"; ?>
</style>
