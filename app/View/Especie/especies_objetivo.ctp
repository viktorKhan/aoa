<?php
// Informamos el título
$this->set('title_for_layout','Especies objetivo');

// Menu
$this->start('menu');
echo $this->element('/menu');
$this->end();

/**
 * Javascript
 */
$this->Html->script(array(
    '/plugin/yoxview/yoxview-init',
), array('inline' => false));
?>

<style>
    p {
        text-align: justify;;
    }

</style>

<script>
    $(document).ready(function() {
        /* INICIO fotos */
        $(".yoxview").yoxview({
            "lang": "es",
            "autoHideMenu": false,
            "autoHideInfo": false,
            "showDescription": true,
            "renderInfoPin": false
        });
        /* FIN fotos */
    });
</script>

<!-- Cuerpo -->
<div>
    <fieldset>
        <legend><?php echo __("Especies objetivo");?></legend>

        <div class="row-fluid">

            <div class="thumbnail span2 text-center pull-right" style="margin-left: 2.5%">
                <img src="/img/Pages/especies-objetivo/alcaudon-real.jpg" alt="Alcaudón real">
                <div class="caption">
                    <h4>Alcaudón real</h4>
                </div>
            </div>

            <p><?=__('El principal objetivo de este anuario ornitológico, es ampliar el conocimiento de la avifauna de la provincia de Albacete. Conocer su fenología, su estatus, la distribución, su origen, qué especies crían y dónde, etc. Para alcanzar este objetivo, es necesario obtener información de todas las especies, independientemente de su escasez o abundancia.')?></p>

            <div class="thumbnail span2 text-center" style="margin-right: 2.5%; margin-left: 0;">
                <img src="/img/Pages/especies-objetivo/gorrion-molinero.jpg" alt="Gorrión molinero">
                <div class="caption">
                    <h4>Gorrión molinero</h4>
                </div>
            </div>

            <p><?=__('En muchas ocasiones, cuando salimos al campo y recogemos las observaciones, solemos anotar básicamente las especies más raras, escasas o llamativas, olvidándonos la mayoría de las veces a las más comunes. Algunas como el gorrión molinero, el verderón común o el pico picapinos no llegan a 10 citas las que se recogen actualmente en el anuario. ')?></p>
            <p><?=__('Pero, ¿cuáles son las más comunes? Para Albacete, bastaría con ir al menú de “Lista de aves de la provincia de Albacete”, y observar por ejemplo la columna de distribución provincial, aquellas especies con tres o cuatro estrellas serán las consideradas más comunes en la provincia.')?></p>
            <p><?=__('SEO/BirdLife lleva avisando desde hace unos años acerca del debilitamiento de las poblaciones de las especies comunes. Para algunas de ellas, este descenso es alarmante como es el caso del alcaudón real, cuyas poblaciones han llegado a disminuir hasta un 65% en el año 2013 respecto a 1998. También es preocupante el caso de otras especies como la codorniz común, la golondrina común o la grajilla occidental con declives de entorno al 30% respecto a aquel año (SEO/BirdLife, 2014). Este hecho hace que sea necesario obtener mayor información sobre estas especies. Este motivo nos ha animado a poner en marcha esta iniciativa y así intentar ayudar a conocer un poco más sobre qué les está pasando a todas estas especies, tanto a nivel provincial como a nivel más global. Para más información, visitad este enlace de la página de <a href="http://www.seo.org/boletin/seguimiento/boletin/2013" target="_blank">SEO/BirdLife</a>.')?></p>
            <p><?=__('Por todo ello, hemos creado esta sección, para intentar llamar la atención sobre estas otras especies, que paradójicamente, son de las que menos datos disponemos. Os animamos a todos/as los/as que colaboráis con este anuario ornitológico a que subáis también las citas de todas estas especies comunes, pues así podremos conocer un poco mejor la situación de las aves de Albacete, ayudando con ello a protegerlas y conservarlas.')?></p>
            <p><?=__('Cada año se elegirán 5 especies para motivar que se introduzcan las observaciones que se recojan de éstas.')?></p>
            <br/>
            <p style="font-size: 18px; font-weight: bold; text-align: center"><?=__('Muchas gracias por colaborar.')?></p>


        </div>

        <div class="row-fluid">

            <div class="page-header">
                <h3><?=__('Especies objetivo 2015')?></h3>
            </div>

            <!-- 2015 -->
            <p><?=__('En el año 2015, las especies objetivo que se han elegido son: la <strong>collalba rubia</strong>, la <strong>collalba gris</strong>, la <strong>collalba negra</strong>, la <strong>paloma zurita</strong> y la <a href="http://www.seo.org/2014/12/08/tortola-europea-ave-del-ano-2015/" target="_blank"><strong>tórtola europea</strong></a>, esta última, elegida como ave del año por  SEO/BirdLife.')?></p>

            <ul class="thumbnails yoxview">
                <li class="offset1"></li>
                <li class="span2">
                    <div class="thumbnail text-center">
                        <a href="/img/Pages/especies-objetivo/collalba-rubia.jpg">
                            <img src="/img/Pages/especies-objetivo/collalba-rubia.jpg" alt="Collalba rubia" title="Collalba rubia">
                        </a>
                        <h4>Collalba rubia</h4>
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail text-center">
                        <a href="/img/Pages/especies-objetivo/collalba-gris.jpg">
                            <img src="/img/Pages/especies-objetivo/collalba-gris.jpg" alt="Collalba gris" title="Collalba gris">
                        </a>
                        <h4>Collalba gris</h4>
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail text-center">
                        <a href="/img/Pages/especies-objetivo/collalba-negra.jpg">
                            <img src="/img/Pages/especies-objetivo/collalba-negra.jpg" alt="Collalba negra" title="Collalba negra">
                        </a>
                        <h4>Collalba negra</h4>
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail text-center">
                        <a href="/img/Pages/especies-objetivo/tortola-europea.jpg">
                            <img src="/img/Pages/especies-objetivo/tortola-europea.jpg" alt="Tórtola europea" title="Tórtola europea">
                        </a>
                        <h4>Tórtola europea</h4>
                    </div>
                </li>
                <li class="span2">
                    <div class="thumbnail text-center">
                        <a href="/img/Pages/especies-objetivo/paloma-zurita.jpg">
                            <img src="/img/Pages/especies-objetivo/paloma-zurita.jpg" alt="Paloma zurita" title="Paloma zurita">
                        </a>
                        <h4>Paloma zurita</h4>
                    </div>
                </li>
            </ul>
        </div>

        <hr/>

        <p><?=__('Referencias:')?></p>
        <ul>
            <li><p><?=__('SEO/BirdLife. Programas de seguimiento de SEO/BirdLife en 2013. <i>60 años de ciencia ciudadana de SEO/BirdLife</i> [en línea] [Madrid, España].')?></p></li>
            <li><p><?=__('SEO/BirdLife 2014. [fecha de consulta: 10 de febrero de 2015]. Disponible en Web: <a href="http://www.seo.org/boletin/seguimiento/boletin/2013" target="_blank">http://www.seo.org/boletin/seguimiento/boletin/2013</a>')?></p></li>
        </ul>
    </fieldset>
</div>

    <!-- Pie -->
<?php
$this->start('pie');
echo $this->element('/pie');
$this->end();
?>