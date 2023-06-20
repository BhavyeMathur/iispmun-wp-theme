<?php

$query = new WP_Query(
    array(
        "numberposts" => block_value("number"),
        "posts_per_page" => block_value("number"),
        "post_status" => "publish",
        "category_name" => get_field("acronym"),
    )
);

include __DIR__ . "/../../parts/posts-archive.php";
?>

<style>
    <?php include "style.css"; ?>
</style>
