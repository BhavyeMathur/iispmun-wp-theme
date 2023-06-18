<h1 style="font-weight: 900; margin: 40px 0;">
    <span><?php block_field("text-1"); ?></span>
    <span><?php block_field("text-2"); ?></span>
</h1>

<style>
    <?php include "style.css"; ?>

    h1 span:first-child {
        color: <?php block_field("color-1"); ?>;
    }

    h1 span:last-child {
        color: <?php block_field("color-2"); ?>;
    }
</style>
