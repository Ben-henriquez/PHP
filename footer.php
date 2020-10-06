    <!--Footer-->
    <footer class="text-center fondo">
        <a href="javascript:;" class="btn_subir"><i class="fas fa-arrow-up icono"></i></a> 
        <br>
        <div class="container">
            <div class="row">
                <article class="col-lg-8">
                <?php
                    dynamic_sidebar('Widget Footer')
                ?>
                </article>
                <article id="menufooter" class="col-lg-4">
                    <?php wp_nav_menu(array('theme_location'=>'footer'))?>
                </article>
            </div>
        </div>
        <br>
    </footer>


    <script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri() ?>/library/fancybox/dist/jquery.fancybox.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri() ?>/library/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri() ?>/library/jquery-validation/jquery-validation-1.19.2/dist/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri() ?>/library/jquery-validation/jquery-validation-1.19.2/dist/localization/messages_es.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/subir.js" type="text/javascript"></script>
    <?php wp_footer()?>

</body>
</html>