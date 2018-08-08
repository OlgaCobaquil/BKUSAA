<?php
/**
 * Created by PhpStorm.
 * User: olgac
 * Date: 13/03/2018
 * Time: 9:39 PM
 */
get_header();
?>

<style>
    .accordion {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
    }

    .active, .accordion:hover {
        background-color: #ccc;
    }

    .panel {
        padding: 0 18px;
        display: none;
        background-color: white;
        overflow: hidden;
    }
</style>

<div class="container" style="background-color: white;">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="color:#9CA274;">
                FAQ
            </h1>
            <p>
                En cumplimiento de su mandato de divulgación y formación la Secretaría ha venido compilando y sistematizando las preguntas y respuestas más frecuentes que las personas formulan sobre el mecanismo, sobre la Secretaría, sobre los expedientes de hechos y sobre otros temas relevantes. Si usted no encuentra la pregunta que exprese su inquietud puede escribirnos a info@saa-sem.org.
            </p>
        </div>

        <div class="col-lg-12">
            <h2 style="color:#9CA274;">
                Mecanismo de comunicaciones ambientales
            </h2>

            <button class="accordion">
                ¿Qué es el mecanismo de comunicaciones ambientales?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección  </p>
            </div>
            <button class="accordion">
                ¿Cuál es el objetivo del mecanismo de comunicaciones ambientales?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección  </p>
            </div>

            <button class="accordion">
                ¿Cómo funciona el mecanismo?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección  </p>
            </div>
            <button class = "accordion">
                ¿Qué etapas tiene el mecanismo?
            </button>

            <div class="panel">
                <p>Respuesta se desplegará en esta sección  </p>
            </div>

            <button class="accordion">
                ¿Qué resultados ofrece el mecanismo?
            </button>

            <div class="panel">
                <p>Respuesta se desplegará en esta sección  </p>
            </div>

            <button class="accordion">
                ¿Quién puede usar el mecanismo?
            </button>

            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>

        </div>

        <div class="col-lg-12">
            <h2 style="color:#9CA274;">
                Secretaría de Asuntos Ambientales del CAFTA-DR
            </h2>

            <button class="accordion">
                ¿Cuáles son las funciones de la Secretaría?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>
            <button class="accordion">
                ¿Es la Secretaría una entidad de Gobierno?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>
            <button class="accordion">
                ¿La Secretaría es parte de SIECA?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>
            <button class="accordion">
                ¿Hay oficinas de la Secretaría en cada país Parte del Tratado?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>
            <button class="accordion">
                ¿Cuál es la fuente de financiación de la Secretaría?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>
            <button class="accordion">
                ¿A quién responde la Secretaría?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>

        </div>

        <div class="col-lg-12">
            <h2 style="color:#9CA274;">
                Expedientes de Hechos:
            </h2>

            <button class="accordion">
                ¿Qué es un expediente de hechos?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>
            <button class="accordion">
                ¿Quién elabora hace el expediente de hechos?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>
            <button class="accordion">
                ¿Qué contiene un expediente de hechos?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>
            <button class="accordion">
                ¿Quién financia la elaboración de un expediente de hechos?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>
            <button class="accordion">
                ¿Cuál es el papel del peticionario en el expediente de hechos?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>
            <button class="accordion">
                ¿Cuántos expedientes de hechos han sido elaborados?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>

        </div>

        <div class="col-lg-12">
            <h2 style="color:#9CA274;">
                Consejo de Asuntos Ambientales:
            </h2>

            <button class="accordion">
                ¿Quiénes integran el Consejo de Asuntos Ambientales?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>
            <button class="accordion">
                ¿Cuáles son las funciones del Consejo?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>

        </div>

        <div class="col-lg-12">
            <h2 style="color:#9CA274;">
                Puntos de Contacto de Comercio y Ambiente
            </h2>

            <button class="accordion">
                ¿Cuáles son las funciones de los Puntos de Contacto?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>
            <button class="accordion">
                ¿Quiénes son los Puntos de Contacto en cada país?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>

        </div>

        <div class="col-lg-12">
            <h2 style="color:#9CA274;">
                Sectores y temas ambientales
            </h2>

            <button class="accordion">
                ¿Cuáles son los sectores en los cuales se han presentado más comunicaciones?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>

        </div>

        <div class="col-lg-12">
            <h2 style="color:#9CA274;">
                Sanciones
            </h2>

            <button class="accordion">
                ¿Cuál es la sanción que recibe un gobierno por incumplimiento de la legislación ambiental?
            </button>
            <div class="panel">
                <p>Respuesta se desplegará en esta sección</p>
            </div>

        </div>

    </div>
</div>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>
<?php
get_footer();
?>
