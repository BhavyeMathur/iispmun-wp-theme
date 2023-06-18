<section id="iispmun-committees-overview">
    <div>
        <div class="iispmun-committees-overview-heading" style="background: #321F42">
            8 Committees
        </div>
        <div class="iispmun-committees-overview-container">
            <p>UNGA</p>
            <p>WEF</p>
            <p>UNOOSA</p>

            <p>ECOSOC</p>
            <p>DISEC</p>
            <p>UNHRC</p>

            <p>Lok Sabha</p>
            <p>UNSC</p>
        </div>
    </div>

    <div>
        <div class="iispmun-committees-overview-heading" style="background: #00827D">
            Press Corp
        </div>
        <div class="iispmun-press-overview-container">
            <p>CNN</p>
            <p>Paparazzi</p>
            <p>BBC</p>

            <p>Times of India</p>
            <p>Reuters</p>

            <p>Euronews</p>
            <p>Sky News</p>
        </div>
    </div>
</section>

<style>
    <?php include "style.css"; ?>

    #iispmun-committees-overview {
        max-width: 800px;
        margin: 15px auto;

        display: flex;
        align-items: center;
    }

    #iispmun-committees-overview > div {
        width: 50%;
        margin: 15px 20px;
    }

    .iispmun-committees-overview-heading {
        text-transform: uppercase;
        text-align: center;
        font-weight: 800;
        font-size: 24px;

        color: #fff;
        padding: 10px 0;
        margin: 0 1%;
    }

    .iispmun-committees-overview-container,
    .iispmun-press-overview-container {
        display: flex;
        flex-wrap: wrap;

        max-height: 127px;
        overflow: hidden;

        margin-top: 2%;
    }

    .iispmun-committees-overview-container p,
    .iispmun-press-overview-container p {
        flex-grow: 1;
        padding: 5px 4%;
        margin: 0 1% 2%;

        color: rgba(255, 255, 255, 0.9);
        font-weight: 700;
        font-size: 18px;
        text-align: center;
        text-transform: uppercase;
    }

    .iispmun-committees-overview-container p {
        background: #71718D;
    }

    .iispmun-press-overview-container p {
        background: #7AB5B8;
    }

    @media screen and (max-width: 690px) {
        #iispmun-committees-overview {
            flex-direction: column;
        }

        #iispmun-committees-overview > div {
            width: 80%;
        }
    }
</style>
