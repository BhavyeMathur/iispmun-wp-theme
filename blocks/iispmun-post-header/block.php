<?php setup_postdata(get_the_ID()); ?>

<div class="blog-header">
    <?php if (get_post_type() == "iispmun_people"): ?>
        <img class="img-full-size" style="object-position: bottom" src="<?php the_field("profile_picture"); ?>">
    <?php else: ?>
        <img class="img-full-size" src="<?php the_post_thumbnail_url(); ?>">
    <?php endif; ?>

    <div class="text">
        <h1 <?php if (get_post_type() == "iispmun_people") { echo "class='text-uppercase'"; }?>>
            <?php the_title(); ?>
        </h1>
        <h4 class="subtitle">
            <?php if (get_post_type() == "iispmun_people"): ?>
                <span class="author"><?php the_field("position"); ?></span>
            <?php else: ?>
                <span class="author"><?php the_author(); ?></span>
            <?php endif; ?>

            <?php if (!get_post_type() == "iispmun_people"):
                the_date();
            endif; ?>
        </h4>
    </div>
</div>

<style>
    <?php include "style.css"; ?>
</style>