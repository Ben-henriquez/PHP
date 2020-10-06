    <!--Albumes-->
    <section id="albumes" class="container-fluid album py-4 my-4">
        <header class="row text-center color album"> 
            <div class="col-12 mt-3 mt-md-4 mt-lg-4">
                <h1>Mis Experiencias</h1>
                <P>Recorrer el mundo y mostrar la belleza de éste para los demás <b>es la misión.</b> </P>
            </div>
        </header>
        <!-- Cards -->
        <div class="container pb-4">
      <div class="row text-center">
      <?php 
      
      $parametros=array('post_type'=>'post',
                        'category_name'=>'mundo',
                        'posts_per_page'=>8
                      );
      
      $consulta=new WP_Query($parametros);

      while($consulta->have_posts()):$consulta->the_post()//INICIO LOOP ?>

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
      <?php endwhile//FINAL LOOP ?>
      </div>
     </div> 
    </section>

