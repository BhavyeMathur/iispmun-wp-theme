<?php setup_postdata(get_the_ID()); ?>

<div class="blog-header">
    <?php if (get_post_type() == "iispmun_people"): ?>
        <img class="img-full-size" style="object-position: bottom" src="<?php the_field("profile_picture"); ?>">
    <?php else: ?>
        <img class="img-full-size" src="<?php the_post_thumbnail_url(); ?>">
    <?php endif; ?>

    <div class="text">
        <?php if (get_post_type() == "iispmun_people"): ?>>
            <h1 class="text-uppercase">
                <?php the_title(); ?>
            </h1>
        <?php elseif (get_post_type() == "iispmun_committees"): ?>
            <h1>
                <?php the_field("name"); ?>
            </h1>
        <?php else: ?>
            <h1>
                <?php the_title(); ?>
            </h1>
        <?php endif; ?>

        <h4 class="subtitle">
            <?php if (get_post_type() == "iispmun_people"): ?>
                <span class="author"><?php the_field("position"); ?></span>
            <?php elseif (get_post_type() == "iispmun_committees"): ?>
                <span class="author">IISP MUN 2023</span>
            <?php else: ?>
                <span class="author"><?php the_author(); ?></span>
            <?php endif; ?>

            <?php
            if (get_post_type() == "iispmun_committees"):
                the_field("acronym");
            elseif (!get_post_type() == "iispmun_people"):
                the_date();
            endif; ?>
        </h4>
    </div>
</div>

<style>
    <?php include "style.css"; ?>
</style>