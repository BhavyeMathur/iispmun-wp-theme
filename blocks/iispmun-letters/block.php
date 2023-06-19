<section id="letters">
    <?php

    $people = array();

    $args = array(
        "post_type" => "iispmun_people",
        "post_type" => "iispmun_people",
    );

    $loop = new WP_Query($args);
    $i = 0;

    while ($loop->have_posts()):
        $loop->the_post();

        if (!get_field("has_letter")) {
            continue;
        }

        $i++;
        $people[] = get_the_ID(); ?>

        <div class="letter-container" style="display: <?php echo ($i == 1 ? "flex" : "none") ?>">
            <div class="letter-dp expand-on-hover">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_field("profile_picture"); ?>">
                </a>
            </div>

            <div class="letter-text">
                <a href="<?php the_permalink(); ?>">
                    <h2 class="name"><?php the_title(); ?></h2>
                </a>
                <p class="position"><?php the_field("position"); ?></p>
                <p class="letter paragraph"><?php the_field("letter"); ?></p>
            </div>
        </div>
    <?php endwhile; ?>

    <div class="people-list">
        <?php
        $i = 0;
        foreach ($people as $post) {
            ?>
            <a class="dp-container expand-on-hover" onclick="showLetter(<?php echo $i; ?>)">
                <div>
                    <img src="<?php the_field("profile_picture", $post); ?>">
                </div>
            </a>
            <?php
            $i++;
        } ?>
    </div>
</section>

<script>
    <?php include "block.js"; ?>
</script>

<style>
    <?php include "style.css"; ?>
</style>
