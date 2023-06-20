<!--<section id="iispmun-committee-chairpersons" class="container" style="margin: 0 auto; ">-->
<!--    <div class="row justify-content-center">-->
<!--        <div class="col-md-4 iispmun-card-container">-->
<!--            <a href="--><?php //the_permalink(get_field("co_chair")->ID); ?><!--" style="display: block">-->
<!--                <div class="iispmun-card card-shadow expand-on-hover">-->
<!--                    <div>-->
<!--                        <img class="img-full-size" src="--><?php //the_field("profile_picture", get_field("chair")->ID); ?><!--">-->
<!--                    </div>-->
<!--                    <div class="iispmun-card-title-container">-->
<!--                        <p>-->
<!--                            Chair-->
<!--                            <span>-->
<!--                            --><?php //echo get_field("chair")->post_title; ?>
<!--                            </span>-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </a>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-4 iispmun-card-container">-->
<!--            <a href="--><?php //the_permalink(get_field("co_chair")->ID); ?><!--" style="display: block">-->
<!--                <div class="iispmun-card card-shadow expand-on-hover">-->
<!--                    <div>-->
<!--                        <img class="img-full-size"-->
<!--                             src="--><?php //the_field("profile_picture", get_field("co_chair")->ID); ?><!--">-->
<!--                    </div>-->
<!--                    <div class="iispmun-card-title-container">-->
<!--                        <p>-->
<!--                            Co-Chair-->
<!--                            <span>-->
<!--                            --><?php //echo get_field("co_chair")->post_title; ?>
<!--                            </span>-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<?php
$position = "Chair";
$bio_id = get_field("chair")->ID;
include __DIR__ . "/../iispmun-bio/block.php";

$position = "Co-Chair";
$bio_id = get_field("co_chair")->ID;
include __DIR__ . "/../iispmun-bio/block.php";
?>

<style>
    <?php include __DIR__ . "/../card.css"; ?>
    <?php include "style.css"; ?>
</style>
