<section id="portfolio-block" class="expand-on-hover">
    <img class="img-full-size" src="<?php block_field("image"); ?>">

    <div>
        <div class="title-container">
            <div class="portfolio-supertitle"><?php block_field("supertitle"); ?></div>
            <div class="portfolio-title"><?php block_field("title"); ?></div>
        </div>

        <?php if (block_value("subtitle")): ?>
        <div>
            <div class="portfolio-subtitle"><?php block_field("subtitle"); ?></div>
        </div>
        <?php endif; ?>
    </div>
</section>

<style>
    <?php include "style.css"; ?>
</style>
