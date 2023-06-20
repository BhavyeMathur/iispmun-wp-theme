<?php
$the_query = new WP_Query(array(
    "posts_per_page" => -1,
    "post_type" => "iispmun_resources"));

$committee_id = get_the_ID();
?>

<section class="container" style="margin: 25px auto">
    <div class="row justify-content-center">
        <?php
        if ($the_query->have_posts()):
            while ($the_query->have_posts()):
                $the_query->the_post();
                if (in_array($committee_id, get_field("committee"))):
                    ?>
                    <div class="col-6 col-md-3 expand-on-hover" style="margin: 15px 0">
                        <a style="display: block" href="<?php the_field("resource"); ?>">
                            <img class="img-full-size" src="<?php the_field("thumbnail"); ?>">
                        </a>
                    </div>
                <?php
                endif;
            endwhile;
        endif;
        ?>
    </div>
</section>

<style>
    <?php include "style.css"; ?>
</style>
