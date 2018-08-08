

<?php
/**
 * Created by PhpStorm.
 * User: olgac
 * Date: 03/08/2018
 * Time: 10:01 AM
 */
get_header();
?>
<div class="container" style="background-color: white;">
    <div class="row">
        <div class="col-lg-12"  style="margin-top: 2%; font-size: xx-large">
            <p style="color: #9CA274;">Agosto 2018</p>
        </div>

        <div class="col-lg-12">
            <p style="color: #9CA274; font-size: large">Presentación del nuevo servicio de asesoría legal ambiental del CUDEP</p>
        </div>

        <div class="col-lg-12" style="margin-bottom: 2%; margin-top: 2%;">
            <p style="font-size: medium">1 y 2 de agosto</p>
            <p> En estos días se llevó a cabo la presentación del nuevo servicio de asesoría legal ambiental del Bufete Popular del CUDEP-USAC a la comunidad académica de Petén. Dicho servicio brindará a los usuarios herramientas para contribuir a la aplicación de la legislación ambiental.</p>
        </div>

        <div class="col-lg-12">
            <div class="centralg">
                <?php
                echo do_shortcode('[envira-gallery id="802"]');
                ?>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="centralg">
                <?php
                echo do_shortcode('[envira-gallery id="810"]');
                ?>
            </div>
        </div>
    </div>
</div>

<style>
    .centralg{
        margin: 5%;
        margin-top: 2%;
        margin-left: 5%;
        align: center;
    }
</style>
<?php
get_footer();
?>


