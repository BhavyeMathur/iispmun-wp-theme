<section id="iispmun-committees-overview">
    <div>
        <div class="iispmun-committees-overview-heading" style="background: #321F42">
            <?php
            $committees = wp_count_posts("iispmun_committees")->publish;
            echo $committees;
            ?> Committees
        </div>
        <div class="iispmun-committees-overview-container">
            <?php
            $args = array(
                "post_type"      => "iispmun_committees",
                "posts_per_page" => -1,
            );

            $loop = new WP_Query($args);

            while ( $loop->have_posts() ):
            $loop->the_post();
            ?>
                <p><a href="<?php the_permalink();?>"><?php the_field("acronym");?></a></p>
            <?php endwhile;?>
        </div>
    </div>

    <div>
        <div class="iispmun-committees-overview-heading" style="background: #00827D">
            Press Corps
        </div>
        <div class="iispmun-press-overview-container">
            <p>CNN</p>
            <p>Paparazzi</p>
            <p>BBC</p>

            <p>Times of India</p>
            <p>Reuters</p>

            <?php if ($committees > 6): ?>
            <p>Euronews</p>
            <p>Sky News</p>
            <?php endif;?>
        </div>
    </div>
</section>

<style>
    <?php include "style.css"; ?>
</style>
