<?php
if (block_value("profile-url")) {
    $bio_id = url_to_postid(block_value("profile-url"));
} elseif (get_post_type() == "iispmun_people"){
    $bio_id = get_the_ID();
}
?>

<section id="iispmun-bio" class="container-fluid">
    <div class="row">
        <div class="col-md-3 iispmun-card-container">
            <a href="<?php the_permalink($bio_id); ?>">
                <div class="iispmun-card card-shadow expand-on-hover">
                    <div>
                        <img class="img-full-size" src="<?php the_field("profile_picture", $bio_id); ?>">
                    </div>
                    <div class="iispmun-card-title-container">
                        <p>
                            <?php echo get_the_title($bio_id); ?>
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-9 bio-container">
            <?php
            if (get_post_type() == "iispmun_committees"): ?>
                <strong><?php the_field("acronym"); ?> Committee <?php echo $position; ?>
                </strong>
            <?php elseif (block_value("show-position")): ?>
                <strong><?php the_field("position", $bio_id); ?>
                </strong>
            <?php else: ?>
                <strong>About <?php
                    $title = get_the_title($bio_id);
                    $arr = explode(' ', trim($title));
                    echo $arr[0];
                    ?>
                </strong>
            <?php endif; ?>
            <p class="paragraph">
                <?php
                global $post;
                $post_content = get_the_content(null, false, $bio_id);
                $post_content = apply_filters("the_content", $post_content);
                $post_content = str_replace("</p>", "", $post_content);
                $paras = explode("<p>", $post_content);
                array_shift($paras);

                echo $paras[0];
                ?>
            </p>
        </div>
    </div>
</section>

<style>
    <?php include __DIR__ . "/../card.css"; ?>
    <?php include "style.css"; ?>
</style>
