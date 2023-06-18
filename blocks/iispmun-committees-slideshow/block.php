<!--Adapted From https://www.codingnepalweb.com/draggable-image-slider-html-css-javascript/-->

<section id="iispmun-committees-slideshow">
    <div class="iispmun-committees-slideshow-wrapper">
        <i id="left" class="glyphicon glyphicon-arrow-left expand-on-hover"></i>
        <div class="iispmun-committees-slideshow">
            <?php for ($i = 0; $i < 7; $i++): ?>
                <div class="iispmun-committees-slideshow-card-container">
                    <div class="iispmun-committees-slideshow-card expand-on-hover">
                        <img src="https://static1.cbrimages.com/wordpress/wp-content/uploads/2016/11/johnny-depp-as-jack-sparrow-in-pirates-of-the-caribbean.jpg">
                        <div class="iispmun-committees-slideshow-card-title">
                            <p>UNHRC</p>
                            <small>Intermediate</small>
                        </div>
                    </div>
                    <div class="iispmun-committees-slideshow-subtitle">
                        <p>
                            <span>Topic</span>
                            <span>Ethicality of the Death Penalty</span>
                        </p>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <i id="right" class="glyphicon glyphicon-arrow-right expand-on-hover"></i>
    </div>
</section>

<script>
    <?php include "block.js"; ?>
</script>

<style>
    <?php include "style.css"; ?>
</style>
