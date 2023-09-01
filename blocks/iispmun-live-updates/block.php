<?php

$the_query = new WP_Query(array(
    "post_type" => "iispmun_press_update",
    "category_name" => get_field("acronym"),
    "posts_per_page" => -1,
    "orderby" => "date"
));

if ($the_query->have_posts()): ?>
    <div class="max-width-900 live-updates-header">
        <div class="live-updates-header-text">Live Updates Header</div>
    </div>
    <?php
    $committee = get_field("name");
    while ($the_query->have_posts()):
        $the_query->the_post(); ?>
        <section class="live-update max-width-900">
            <h4 class="live-update-time">
                <?php echo human_time_diff(get_the_time('U'), current_time ('timestamp')); ?> ago</h4>
            <h1 class="live-update-title"><?php the_title(); ?></h1>
            <h2 class="live-update-author">From <?php the_author(); ?></h2>
            <h3 class="live-update-committee"><?php echo $committee; ?></h3>
            <?php the_content(); ?>

            <?php if (has_post_thumbnail()):
                the_post_thumbnail();
            endif;
            ?>


        </section>
    <?php
    endwhile;
endif;

wp_reset_postdata(); ?>

<style>
    .live-updates-header-text {
        width: 30%;
        background: #FF5757;
        padding: 10px 20px;
        border-radius: 10px 0 0 10px;
        color: #fff;
        text-transform: uppercase;
        min-width: 230px;
        font-weight: 700;
    }

    .live-updates-header {
        background: #FFEFEF;
        border-radius: 10px;
        padding: 0;
        margin: auto;
    }

    .live-update {
        margin: 20px auto;
        border: #eee 2px solid;
        border-radius: 15px;
        padding: 40px;
    }

    .live-update-time {
        font-size: 15px;
        color: #FF5757;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .live-update-title {
        text-align: left;
        font-weight: 800;
        font-size: 30px;
        text-transform: none;
    }

    .live-update-author {
        text-transform: none;
        font-size: 15px;
        color: var(--purple);
        font-weight: 400;
    }

    .live-update-committee {
        color: var(--light-purple);
        font-size: 16px;
        font-weight: 700;
        text-transform: capitalize;
        margin-bottom: 40px;
    }

    .live-update p {
        color: #999;
        text-align: justify;
        line-height: 2;
    }

    .live-update img {
        width: 100%;
        max-height: 350px;
        border: #FF5757 10px solid;
    }
</style>
