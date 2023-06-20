<?php

if ($query->have_posts()):
    while ($query->have_posts()):
        $query->the_post();

        ?>
        <section id="press">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 thumbnail-container">
                        <a href="<?php the_permalink(); ?>">
                            <div class="thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-7 text">
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <span class="author"><?php the_author(); ?></span>
                        <span class="date"><?php the_date(); ?></span>

                        <p class="paragraph">
                            <?php echo get_the_excerpt(); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>"><p class="read-more">Read More</p></a>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile;
endif; ?>

<style>
    <?php include "posts-archive.css"; ?>
</style>

