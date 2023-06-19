<section id="iispmun-committees-slideshow">
    <div class="iispmun-committees-cards-wrapper">
        <i id="left" class="glyphicon glyphicon-arrow-left expand-on-hover"></i>
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
                <div class="iispmun-committees-card-container">
                    <div class="iispmun-committee-card expand-on-hover">
                        <img src="<?php the_post_thumbnail(); ?>">
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
                </div>
            <?php endwhile; ?>
        </div>
        <i id="right" class="glyphicon glyphicon-arrow-right expand-on-hover"></i>
    </div>
</section>

<script>
    <?php include "block.js"; ?>
</script>

<style>
    <?php include __DIR__ . "/../committees-card.css"; ?>
    <?php include "style.css"; ?>
</style>
