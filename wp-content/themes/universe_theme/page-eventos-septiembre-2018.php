<?php
/**
 * Created by PhpStorm.
 * User: olgac
 * Date: 28/09/2018
 * Time: 12:09 PM
 */
get_header();
?>
<div class="container" style="background-color: white;">
    <div class="row">
        <div class="col-lg-12"  style="margin-top: 2%; font-size: xx-large">
            <p style="color: #9CA274;">Septiembre 2018</p>
        </div>

        <div class="col-lg-12">
            <p style="color: #9CA274; font-size: large">Formación a formadores en materia ambiental, Módulo III</p>
        </div>

        <div class="col-lg-12" style="margin-bottom: 2%; margin-top: 2%;">
            <p style="font-size: medium">26 al 28 de septiembre</p>
            <p> En estos días se llevó a cabo la presentación del nuevo servicio de asesoría legal ambiental del Bufete Popular del CUDEP-USAC a la comunidad académica de Petén. Dicho servicio brindará a los usuarios herramientas para contribuir a la aplicación de la legislación ambiental.</p>
            <p>Es importante destacar que es el segundo módulo del taller que imparte la SAA este año, el primero se llevó a cabo en el mismo lugar los días 27, 28 y 29 de junio. De igual forma que en el anterior, este evento fue organizado en colaboración con la Agencia de los Estados Unidos para el Desarrollo Internacional (USAID), Centro Agronómico Tropical de Investigación y Enseñanza (CATIE), Poder Judicial de Honduras a través de la Escuela Judicial "Francisco Salomón Jiménez Castro" y la Secretaría de Recursos Naturales y Ambiente (Mi Ambiente.)</p>
        </div>

        <div class="col-lg-12">
            <div class="centralg">
                <?php
                echo do_shortcode('[envira-gallery id="843"]');
                ?>
            </div>
        </div>
    </div>
</div>
<style>
    .centralg {
        padding-left: 35%;
        align: center;
    }
</style>
<?php
get_footer();
?>

