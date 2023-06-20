<div class="genesis-custom-block iispmun-title-section <?php block_field("className"); ?>">
    <img class="iispmun-watermark" src="<?php block_field("watermark"); ?>"
         style="transform: translateY( <?php block_field("watermark-spacing"); ?>px );">

    <div class="iispmun-title-container">
        <b class="text-uppercase iispmun-supertitle"><?php block_field("supertitle"); ?></b>

        <img style="margin: 20px 0" class="img-full-size" src="<?php block_field("title"); ?>">

        <p class="iispmun-subtitle">
            <b><span><?php block_field("subtitle-bold"); ?></span></b>
            <span><?php block_field("subtitle"); ?></span>
        </p>

        <?php if (block_value("show-details")): ?>
            <p class="text-uppercase text-center iispmun-date"><?php block_field("date"); ?></p>
            <p class="text-uppercase text-center iispmun-location"><b><?php block_field("location"); ?></b></p>
        <?php endif ?>

        <?php if (block_value("show-separator")): ?>
            <div class="iispmun-separator-container">
                <img src="<?php block_field("separator"); ?>">
            </div>
        <?php endif ?>
    </div>
</div>

<style>
    <?php include "style.css"; ?>
</style>
