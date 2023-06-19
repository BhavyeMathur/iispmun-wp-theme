<section id="countries">
    <div class="flags-container">
        <?php
        $images = acf_photo_gallery("countries", get_the_ID());
        foreach ($images as $image) { ?>
            <div class="flag">
                <img src="<?php echo $image["full_image_url"]; ?>">
            </div>
            <?php
        }
        ?>
    </div>
</section>

<style>
    <?php include "style.css"; ?>
</style>
