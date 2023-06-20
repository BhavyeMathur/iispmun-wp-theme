<div class="iispmun-card-container">
    <a href="<?php block_field("link"); ?>" style="display: block">
        <div class="iispmun-card card-shadow expand-on-hover">
            <div>
                <img class="img-full-size"
                     src="<?php block_field("thumbnail"); ?>">
            </div>
            <div class="iispmun-card-title-container">
                <p>
                    <?php block_field("subtitle"); ?>
                    <span><?php block_field("title"); ?></span>
                </p>
            </div>
        </div>
    </a>
</div>

<style>
    <?php include __DIR__ . "/../card.css"; ?>
    <?php include "style.css"; ?>

    .iispmun-card-container {
        width: 100%;
    }

    .iispmun-card img {
        aspect-ratio: unset;
    }

    .iispmun-card {
        max-width: unset;
    }

    .iispmun-card-title-container {
        font-weight: 200;
    }

    .iispmun-card-title-container span {
        font-weight: 700;
        color: var(--yellow);
    }
</style>
