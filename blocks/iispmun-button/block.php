<?php if (block_value("link")): ?>
<form action="<?php block_field("link"); ?>" style="width: fit-content; margin: auto">
    <?php endif; ?>
    <button class="iispmun-button"
            style="border-radius: <?php block_field("border-radius"); ?>px;
                    background: <?php block_field("color"); ?>;
                    color: <?php block_field("border-color"); ?>;
                    font-size: <?php block_field("font-size"); ?>px;
                    padding: <?php block_field("padding-y"); ?>px <?php block_field("padding-x"); ?>px;
                    border: <?php block_field("border-thickness"); ?>px solid<?php block_field("border-color"); ?>;
                    --hover-background: <?php block_field("border-color"); ?>;
                    --hover-color: <?php block_field("color"); ?>">
        <b class="text-uppercase"><?php block_field("text"); ?></b>
    </button>
    <?php if (block_value("link")): ?>
</form>
<?php endif; ?>

<style>
    .iispmun-button {
        transition: all 0.2s ease-out;
    }

    .iispmun-button-selected,
    .iispmun-button:hover {
        background: var(--hover-background) !important;
        color: var(--hover-color) !important;
    }
</style>
