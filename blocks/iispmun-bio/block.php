<section id="iispmun-bio" class="container-fluid">
    <div class="row">
        <div class="col-md-3 iispmun-card-container">
            <div class="iispmun-card card-shadow expand-on-hover">
                <div>
                    <img class="img-full-size" src="<?php the_field("profile_picture"); ?>">
                </div>
                <div class="iispmun-card-title-container">
                    <p>
                        <?php the_title();?>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-9 bio-container">
            <strong>About <?php
                $title= get_the_title();
                $arr = explode(' ',trim($title));
                echo $arr[0];
                ?>
            </strong>
            <p class="paragraph">
                <?php
                global $post;
                $post_content = $post->post_content;
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
