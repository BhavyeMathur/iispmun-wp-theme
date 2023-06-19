<section id="theme">
    <h2 class="wp-block-heading"
        style="margin-bottom:var(--wp--preset--spacing--60);font-style:normal;font-weight:800;text-transform:uppercase">
        SEIZING THE
        <span class="has-primary-color">FUTURE!</span>
    </h2>

    <div class="theme-container">
        <div class="logo">
            <?php
            $custom_logo_id = get_theme_mod("custom_logo");
            if ($custom_logo_id) {
                echo wp_get_attachment_image($custom_logo_id, "full", false, array("loading" => false));
            } ?>
        </div>
        <div class="theme-description">
            <p class="paragraph">
                <?php block_field("description"); ?>
            </p>
        </div>
    </div>

    <p class="paragraph">
        <?php block_field("description-2"); ?>
    </p>
</section>

<style>
    <?php include "style.css"; ?>
</style>