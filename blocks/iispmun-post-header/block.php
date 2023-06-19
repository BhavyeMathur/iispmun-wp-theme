<?php setup_postdata(get_the_ID()); ?>

<div class="blog-header">
    <img src="<?php the_post_thumbnail_url(); ?>">
    <div class="text">
        <h1>
            <?php the_title(); ?>
        </h1>
        <h4 class="subtitle">
            <span class="author"><?php the_author(); ?></span>
            <?php the_date(); ?>
        </h4>
    </div>
</div>

<style>
    <?php include "style.css"; ?>
</style>