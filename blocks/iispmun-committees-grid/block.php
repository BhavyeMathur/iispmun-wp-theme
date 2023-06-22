<section id="iispmun-committees-slideshow">
    <div class="iispmun-committees-cards-wrapper">
        <div class="iispmun-committees-cards-container">
            <?php
            $args = array(
                "post_type"      => "iispmun_committees",
                "posts_per_page" => -1,
            );

            $loop = new WP_Query($args);

            while ( $loop->have_posts() ):
                $loop->the_post();
                ?>
                <a class="iispmun-committees-card-container" href="<?php the_permalink(); ?>">
                    <div class="iispmun-committee-card expand-on-hover">
                        <?php the_post_thumbnail(); ?>
                        <div class="iispmun-committee-card-title">
                            <p><?php the_field("acronym"); ?></p>
                            <small><?php the_field("difficulty"); ?></small>
                        </div>
                    </div>
                    <div class="iispmun-committee-card-subtitle">
                        <p>
                            <span>Topic</span>
                            <span><?php the_field("short_agenda"); ?></span>
                        </p>
                    </div>
                </a>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<style>
    <?php include __DIR__ . "/../committees-card.css"; ?>
    <?php include "style.css"; ?>
</style>
