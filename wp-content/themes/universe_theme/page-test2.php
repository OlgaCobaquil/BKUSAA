<?php
/** template name: Home Page
 * The Home Page Template.
 *
 * @package WordPress
 * @subpackage Core Framework
 */

get_header();
?>

<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-8">-->
<!--                --><?php //get_template_part('slider'); ?>
<!--            </div> <!-- /.col-md-12 -->-->
<!--            --><?php //if ( is_active_sidebar( 'home-sidebar-3' ) ) : ?>
<!--                <div class="col-md-4 request-information">-->
<!---->
<!--                    --><?php //dynamic_sidebar( 'home-sidebar-3' ); ?>
<!---->
<!--                </div> <!-- /.col-md-4 -->-->
<!--            --><?php //endif; ?>
<!--        </div>-->
<!--    </div>-->

    <div class="container">
        <div class="row">
            <?php
            $sidebar_pos = of_get_option('sidebar_pos');
            if ($sidebar_pos == 'left') {
//                get_sidebar();
            }
            ?>
            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="row">
                    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="col-md-12">
                            <div class="widget-item">

                            <!--  BEGIN: Olga Empieza-->
                                <div class="col-lg-12">
                                    [smartslider3 slider=2]
                                </div>

                                <div class="col-lg-12">
                                    <h2 style="color: #9CA274;">
                                        Sobre la Secretaría de Asuntos Ambientales del CAFTA-DR
                                    </h2>
                                </div>

                                <div class="col-lg-12">
                                    <p>

                                        La Secretaría de Asuntos Ambientales (SAA) es una organización internacional creada dentro del marco del Tratado
                                        de Libre Comercio entre la República Dominicana, Centroamérica y los Estados Unidos de América (CAFTA-DR), el
                                        cual, por primera vez en la región, incluye un capítulo dedicado al medio ambiente (Capítulo 17) en un acuerdo
                                        de libre comercio. En este sentido, la SAA nace con la misión de hacerse cargo de las funciones prescritas en
                                        los artículos 17.7 y 17.8 del CAFTA-DR.
                                    </p>
                                </div>

                                <!-- BEGIN: Seccion de links -->
                                <div class="col-sm-6 col-xs-12">
                                    <h3>
                                        <a style ="color: #9CA274;" href="">
                                            Sobre la Secretaría de Asuntos Ambientales
                                        </a>
                                    </h3>
                                    <p>
                                        En esta sección encontrará información sobre la naturaleza, funciones, mandato y servicios que la Secretaría presta a los ciudadanos de la región CAFTA-DR.
                                    </p>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <h3>
                                        <a style ="color: #9CA274;" href="">
                                            Multimedia
                                        </a>
                                    </h3>
                                    <p>
                                        Acceso a las publicaciones, videos, fotografías y otros materiales de interés sobre los casos, la SAA, el mecanismo y los expedientes de hechos.
                                    </p>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <h3>
                                        <a style ="color: #9CA274;" href="">
                                            Base Legal
                                        </a>
                                    </h3>
                                    <p>
                                        Documentos legales, Decisiones del Consejo de Asuntos Ambientales y otros materiales de interés jurídico.
                                    </p>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <h3>
                                        <a style ="color: #9CA274;" href="">
                                            Casos de Éxito
                                        </a>
                                    </h3>
                                    <p>
                                        Qué tan útil es el mecanismo? Aquí encontrará sistematizados, en videos y documentos, los casos de éxito que le ayudarán a responder esa pregunta.
                                    </p>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <iframe width="100%" height="200px" src="https://www.youtube.com/embed/leB0Z4iunUo" frameborder="0" allowfullscreen=""></iframe>
                                </div>


                                <!--  END: Olga Empieza-->

                            </div> <!-- /.widget-item -->
                        </div> <!-- /.col-md-12 -->
                    <?php endwhile; else : ?>
                        <div class="col-md-12">
                            <div class="widget-main">
                                <div class="widget-inner">
                                    <p><?php _e( 'No posts found.', CORE_THEME_NAME ); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                </div> <!-- /.row -->

                <div class="row">

                    <?php if ( is_active_sidebar( 'home-sidebar-1' ) ) : ?>
                        <div class="col-md-6">
                            <?php dynamic_sidebar( 'home-sidebar-1' ); ?>
                        </div> <!-- /.col-md-6 -->
                    <?php endif; ?>

                    <?php if ( is_active_sidebar( 'home-sidebar-2' ) ) : ?>
                        <div class="col-md-6">
                            <?php dynamic_sidebar( 'home-sidebar-2' ); ?>
                        </div> <!-- /.col-md-6 -->
                    <?php endif; ?>

                </div> <!-- /.row -->

                <?php
                $show_sponsor = of_get_option('show_sponsor');
                if ($show_sponsor) { ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget-main">
                                <div class="widget-main-title">
                                    <h4 class="widget-title"><?php _e('Our Campus', CORE_THEME_NAME ); ?></h4>
                                </div> <!-- /.widget-main-title -->
                                <div class="widget-inner">
                                    <div class="our-campus clearfix">
                                        <ul>
                                            <?php
                                            $sponsor_1 = of_get_option('sponsor_1');
                                            if ($sponsor_1) { ?>
                                                <li><img src="<?php echo $sponsor_1; ?>" alt=""></li>
                                            <?php } ?>
                                            <?php
                                            $sponsor_2 = of_get_option('sponsor_2');
                                            if ($sponsor_2) { ?>
                                                <li><img src="<?php echo $sponsor_2; ?>" alt=""></li>
                                            <?php } ?>
                                            <?php
                                            $sponsor_3 = of_get_option('sponsor_3');
                                            if ($sponsor_3) { ?>
                                                <li><img src="<?php echo $sponsor_3; ?>" alt=""></li>
                                            <?php } ?>
                                            <?php
                                            $sponsor_4 = of_get_option('sponsor_4');
                                            if ($sponsor_4) { ?>
                                                <li><img src="<?php echo $sponsor_4; ?>" alt=""></li>
                                            <?php } ?>
                                            <?php
                                            $sponsor_5 = of_get_option('sponsor_5');
                                            if ($sponsor_5) { ?>
                                                <li><img src="<?php echo $sponsor_5; ?>" alt=""></li>
                                            <?php } ?>

                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- /.widget-main -->
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->
                <?php } ?>

            </div> <!-- /.col-md-8 -->
            <?php
            $sidebar_pos = of_get_option('sidebar_pos');
            if ($sidebar_pos == 'right') {
                get_sidebar();
            }
            ?>
        </div> <!--//.row -->
    </div> <!--//.container -->

<?php get_footer(); ?>