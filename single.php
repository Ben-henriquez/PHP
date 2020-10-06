<?php get_header() ?>

<section class="banner" style="background-image: url(<?php header_image() ?>);">
</section>


<?php while(have_posts()):the_post() ?>

<section  class="container relleno_seccion">
    <div class="row text-center my-4">
      <div class="col-12">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  <div class="row my-4">
    <div class="col-12 col-lg-6 text-center text-lg-right">
    <?php the_post_thumbnail(); ?>

    </div>

    <div class="col-12 col-lg-6 mt-4 mt-lg-0">
      <h2><?php the_content(); ?></h2>
    </div>
  </div>
</section>

<?php endwhile ?>

<?php get_footer() ?>