<section id="iispmun-bio" class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <div class="card-shadow expand-on-hover">
                <img class="img-full-size" src="<?php the_field("profile_picture"); ?>">
                <p class="name"><?php the_title(); ?></p>
            </div>
        </div>

        <div class="col-sm-9">
            <strong>About Rajveer</strong>
            <p class="paragraph">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.
            </p>
        </div>
    </div>
</section>

<style>
    <?php include "style.css"; ?>

    #iispmun-bio .name {
        background: var(--dark-purple);
        color: #fff;

        text-align: center;
        text-transform: uppercase;
        font-size: 13px;
        font-weight: 700;

        height: 30%;
    }
</style>
