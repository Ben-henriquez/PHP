<?php get_header() ?>

<?php while(have_posts()):the_post() ?>
<main class="container">
    <div class="row">
        <section class="col-lg-12 text-center m-4 p-4">
            <h1><?php the_title(); ?></h1>
        </section>
    </div>
    <div class="row">   
        <article class="col-lg-12">
            <h2><?php the_content(); ?></h2>
        </article>
    </div> 
</main>
<?php endwhile ?>

<?php get_footer() ?>