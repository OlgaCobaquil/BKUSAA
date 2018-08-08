<?php
/**
 * Created by PhpStorm.
 * User: olgac
 * Date: 16/05/2018
 * Time: 11:01 AM
 */
get_header();
?>

<style>
    .centralg {
        padding-left:35%;
        align: center;
    }
</style>

<div class="container" style="background-color: white">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="color: #9CA274;">Mayo 2018 </h1><br>
        </div>

        <div class="col-lg-12">

            <h2 style="color: #9CA274;">Audiencias públicas del caso "Protección Animal" Zoológico Botánico Municipal de Moca </h2>
            <p style="font-size: 120%;">16 de mayo</p>
            <p>
                Funcionarios de las Secretaría de Asuntos Ambientales del DR CAFTA atendieron la primer audiencia pública del caso "Protección Animal" del Zoológico Botánico Municipal de Moca, llevada a cabo en el Hotel Renaissance Santo Domingo Jaragua, Santo Domingo de 9:00 a 13:00 horas.
                Dicha audiencia tuvo por objeto la recepción de información en el marco de la preparación del Expediente de Hechos CAALA/16/002 "Protección Animal - RD".
            </p>
        </div>

        <div class="col-lg-12">
            <div class="centralg">
                <?php
                echo do_shortcode('[envira-gallery id="613"]');
                ?>
            </div>
        </div>
        <div class="col-lg-12">
            <p style="font-size: 120%;">17 de mayo</p>
            <p>
                La Secretaría de Asuntos Ambientales del DR CAFTA atendió la segunda audiencia pública programada en República Dominicana por motivo del caso "Protección Animal -DR". Esta se llevó a cabo en el Hotel Green Palace Moca, Provincia de Espaillat de 9:00 a 16:00 horas.

            </p>

            <div class="col-lg-12">
                <div class="centralg">
                    <?php
                    echo do_shortcode('[envira-gallery id="615"]');
                    ?>
                </div>
            </div
        </div>


    </div>
</div>
<?php
get_footer();
?>
