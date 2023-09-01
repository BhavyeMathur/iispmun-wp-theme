<div class="iispmun-live-quote">
    <blockquote>
        <?php block_field("quotation"); ?>
        <cite><?php block_field("byline"); ?></cite>
    </blockquote>
</div>

<style>
    <?php include "style.css"; ?>

    .iispmun-live-quote blockquote {
        border-radius: 0 !important;
        border-left: 6px solid #F4716D !important;
        padding: 10px 20px !important;
        background: #f7f7f7;
    }

    .iispmun-live-quote blockquote p {
        font-size: 15px !important;
        text-indent: 0 !important;
        margin: 0 !important;
    }

    .iispmun-live-quote cite {
        font-size: 12px;
        font-weight: 100;
    }

</style>
