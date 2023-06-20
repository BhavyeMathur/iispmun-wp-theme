<section id="iispmun-instagram" class="container max-width-700 width-85">
    <div class="row">
        <div class="col-sm-4">
            <div class="dp-container">
                <a class="expand-on-hover" style="display: block" href="instagram.com/iispmun">
                <img class="img-full-size card-shadow"
                     src="<?php $logo = get_theme_mod("custom_logo");
                     $image = wp_get_attachment_image_src($logo, "full");
                     $image_url = $image[0];
                     echo $image_url ?>">
                </a>
            </div>
        </div>

        <div class="col-sm-8 bio-container">
            <div>
                <div class="handle-container">
                    <a href="instagram.com/iispmun">
                        <p class="handle">@iispmun</p>
                    </a>
                    <a href="instagram.com/iispmun">
                        <div class="follow expand-on-hover">Follow on Instagram</div>
                    </a>
                    <a href="instagram.com/iispmun">
                        <div class="follow follow-mobile expand-on-hover">Follow</div>
                    </a>
                    <a href="https://ig.me/m/iispmun">
                        <div class="message expand-on-hover">Message</div>
                    </a>
                </div>
                <div class="name">IISP MUN</div>
                <div class="type">Event</div>
                <div class="bio"><?php block_field("bio"); ?></div>
                <div class="link"><?php block_field("link"); ?></div>
            </div>
        </div>
    </div>
</section>

<style>
    <?php include "style.css"; ?>
</style>
