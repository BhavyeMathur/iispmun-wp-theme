<?php
$query = new WP_Query(
    array(
        "numberposts" => -1,
        "posts_per_page" => -1,
        "post_type" => "iispmun_people",
        "category_name" => "Secretariat",
    )
);
?>

<section class="container max-width-700" style="margin: 0 auto">
    <div class="row">
        <?php
        while ($query->have_posts()):
            $query->the_post();
        ?>

            <div class="col-md-4 iispmun-card-container">
                <a href="<?php the_permalink(); ?>">
                    <div class="iispmun-card card-shadow expand-on-hover">
                        <div>
                            <img class="img-full-size" src="<?php the_field("profile_picture"); ?>">
                        </div>
                        <div class="iispmun-card-title-container">
                            <p>
                                <?php the_title(); ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>

        <?php endwhile; ?>
    </div>
</section>

<style>
    <?php include __DIR__ . "/../card.css"; ?>
    <?php include "style.css"; ?>
</style>
