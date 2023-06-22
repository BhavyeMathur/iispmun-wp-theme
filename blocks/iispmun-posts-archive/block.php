<?php


if (block_value("number")):
    $query = new WP_Query(
        array(
            "numberposts" => block_value("number"),
            "posts_per_page" => block_value("number"),
            "post_status" => "publish",
            "category_name" => block_value("category") ? block_value("category") : null,
        )
    );

    include __DIR__ . "/../../parts/posts-archive.php";

else:?>
    <style>
        <?php include __DIR__ . "/../../parts/posts-archive.css";?>
    </style>
<?php endif; ?>

<style>
    <?php include "style.css"; ?>

    #press:nth-of-type(even) {
        background-color: <?php block_field("even-background-color"); ?>;
    }

    #press:nth-of-type(odd) {
        background-color: <?php block_field("odd-background-color"); ?>;
    }

    #press:nth-of-type(even) h3,
    #press:nth-of-type(even) .read-more {
        color: <?php block_field("even-foreground-color"); ?>;
    }

    #press:nth-of-type(odd) h3,
    #press:nth-of-type(odd) .read-more {
        color: <?php block_field("odd-foreground-color"); ?>;
    }

</style>
