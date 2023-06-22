<?php

if (is_archive()):
    $the_query = new WP_Query(array(
        "posts_per_page" => -1,
        "post_type" => "iispmun_committees"));
else:
    $the_query = new WP_Query(array(
        "posts_per_page" => 1,
        "post_type" => "iispmun_committees",
        "page_id" => get_the_ID()));
endif;

if ($the_query->have_posts()):
    while ($the_query->have_posts()):
        $the_query->the_post(); ?>

        <section class="single-committee">
            <?php if (is_archive()): ?>
            <div class="image-container">
                <img class="committee-image" src="<?php the_post_thumbnail_url(); ?>">
            </div>
            <?php endif; ?>

            <div class="container">
                <a href="<?php the_permalink(); ?>">
                    <h1 class="committee-name"><?php the_field("name"); ?></h1>
                    <h1 class="committee-name-mobile"><?php the_field("acronym"); ?></h1>
                </a>
                <div class="committee-subheader">
                    <span class="grade committee-subtitle">
                        Grades <?php the_field("min_grade"); ?>-<?php the_field("max_grade"); ?>
                    </span>
                    <span class="difficulty committee-subtitle"><?php the_field("difficulty"); ?> Committee</span>
                </div>

                <div class="committee-container">
                    <div class="committee">
                        <div>
                            <a href="<?php the_permalink(); ?>">
                                <div>
                                    <img class="img-full-size" src="<?php the_field("logo"); ?>">
                                </div>
                                <div><h2><?php the_field("acronym"); ?></h2></div>
                                <div class="delegates">
                                    <strong><?php the_field("delegates"); ?> Delegates</strong>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="committee-body">
                        <strong><?php the_field("agenda"); ?></strong>
                        <p class="agenda paragraph"><?php the_field("agenda_description"); ?></p>
                        <?php if (is_archive()): ?>
                        <a href="<?php the_permalink(); ?>"><p class="read-more">Read More</p></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php
    endwhile;
endif; ?>

<style>
    <?php include "style.css"; ?>
</style>
