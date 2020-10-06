<?php get_header() ?>

<section class="banner" style="background-image: url(<?php header_image() ?>);">
</section>


<main class="container album py-4 my-4">
    <div class="row">
            <?php while(have_posts()):the_post() ?>
                <article class="col-12 col-lg-3 e-verAlt card-margen">
                    <div class="card">
                            <?php the_post_thumbnail(); ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a class="btn btn-primary" href="<?php the_permalink(); ?>">Ver Más</a>
                        </div>
                    </div>
                </article>
            <?php endwhile ?>
    </div>
</main>


<?php get_footer() ?>