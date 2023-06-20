<form action="<?php block_field("link"); ?>">
    <button class="iispmun-button" style="border-radius: <?php block_field("border-radius"); ?>px">
        <b class="text-uppercase"><?php block_field("text"); ?></b>
    </button>
</form>

<style>
    .iispmun-button {
        background: <?php block_field("color"); ?>;
        color: <?php block_field("border-color"); ?>;
        font-size: 20px;

        padding: 10px 30px;
        border: <?php block_field("border-thickness"); ?>px solid<?php block_field("border-color"); ?>;

        transition: all 0.2s ease-out;
    }

    .iispmun-button:hover {
        background: <?php block_field("border-color"); ?>;
        color: <?php block_field("color"); ?>;
    }
</style>
