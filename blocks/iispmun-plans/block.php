<section id="iispmun-plans">
    <div>
        <div class="column width-30">
            <div class="number">10</div>
            <div class="label">schools</div>
        </div>
        <div class="column width-40">
            <div class="number">250</div>
            <div class="label">delegates</div>
        </div>
        <div class="column width-30">
            <div class="number">50</div>
            <div class="label">hours</div>
        </div>
    </div>
</section>

<style>
    <?php include "style.css"; ?>

    #iispmun-plans {
        width: 70%;
        max-width: 700px;
        margin: auto;
    }

    #iispmun-plans > div {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    #iispmun-plans .column {
        font-weight: 900;
        text-align: center;
        text-transform: uppercase;
        color: #fff;

        padding: 10px;
    }

    #iispmun-plans .number {
        font-size: min(max(6vw, 40px), 70px);
        padding: 20px 0;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    #iispmun-plans .label {
        font-size: min(max(1.5vw, 15px), 20px);

        width: 100%;
        margin-top: 5px;
        padding: 10px 0;
    }

    #iispmun-plans .width-30 .number {
        background: #443B62;
    }

    #iispmun-plans .width-40 .number {
        background: #61B6BB;
    }

    #iispmun-plans .width-30 .label {
        background: #321F42;
    }

    #iispmun-plans .width-40 .label {
        background: #00827D;
    }

    @media screen and (max-width: 590px) {
        .column {
            width: 100%;
        }

        #iispmun-plans .number {
            font-size: 15vw;
        }

        #iispmun-plans .label {
            font-size: 4vw;
        }
    }
</style>
