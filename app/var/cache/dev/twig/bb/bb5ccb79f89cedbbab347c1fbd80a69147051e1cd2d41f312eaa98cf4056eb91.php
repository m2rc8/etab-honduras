<?php

/* IndicadoresBundle:FichaTecnicaAdmin:tablero.html.twig */
class __TwigTemplate_5208872302d82b48fe9c4f7a8c4d819fff39eefdc48aa0993f59f94c080a5997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("IndicadoresBundle::standard_layout_tablero.html.twig", "IndicadoresBundle:FichaTecnicaAdmin:tablero.html.twig", 3);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IndicadoresBundle::standard_layout_tablero.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59dbef46022264328df73190c6990b1e57101b3e584669a4c52ad07665cb9235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59dbef46022264328df73190c6990b1e57101b3e584669a4c52ad07665cb9235->enter($__internal_59dbef46022264328df73190c6990b1e57101b3e584669a4c52ad07665cb9235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicadoresBundle:FichaTecnicaAdmin:tablero.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59dbef46022264328df73190c6990b1e57101b3e584669a4c52ad07665cb9235->leave($__internal_59dbef46022264328df73190c6990b1e57101b3e584669a4c52ad07665cb9235_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fb5a3c0b95bb82f93dac30f57677f2009f7b98898ce5e00d14893eae5c361372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5a3c0b95bb82f93dac30f57677f2009f7b98898ce5e00d14893eae5c361372->enter($__internal_fb5a3c0b95bb82f93dac30f57677f2009f7b98898ce5e00d14893eae5c361372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/css/FichaTecnicaAdmin/tablero.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/DataTables/media/css/jquery.dataTables.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/DataTables/media/css/TableTools.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

<!--EDITADO PARA NUEVOS TIPOS DE GRAFICOS (CSS)-->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/css/FichaTecnicaAdmin/gauge.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />


";
        
        $__internal_fb5a3c0b95bb82f93dac30f57677f2009f7b98898ce5e00d14893eae5c361372->leave($__internal_fb5a3c0b95bb82f93dac30f57677f2009f7b98898ce5e00d14893eae5c361372_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a87a9c4cdb574d9e49c4252a827186de134a191c5a22f3342839496a0cb57e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a87a9c4cdb574d9e49c4252a827186de134a191c5a22f3342839496a0cb57e6->enter($__internal_7a87a9c4cdb574d9e49c4252a827186de134a191c5a22f3342839496a0cb57e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/d3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/d3pie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/affix.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/grafico_pastel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/grafico_columnas.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/grafico_lineas.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/tablero.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/comun.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!--EDITADO PARA NUEVOS TIPOS DE GRAFICOS-->
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/SVG/rgbcolor.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/SVG/StackBlur.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/SVG/canvg.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/grafico_gauge.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/grafico_termometro.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/iopctrl.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/grafico_mapa.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/bridge_draggable_touch.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/rasterizeHTML.allinone.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/DataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/DataTables/ZeroClipboard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/DataTables/TableTools.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/bridge_draggable_touch.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/rasterizeHTML.allinone.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/DataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/DataTables/ZeroClipboard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/DataTables/TableTools.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t<!--EDITADO PARA EXPORTACION DE DATOS-->
\t<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/export_plugin/tableExport.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/export_plugin/filesaver.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/export_plugin/jquery.base64.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<!--EXPORTACION A PNG-->
\t<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/export_plugin/html2canvas.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<!--EXPORTACION A PDF-->
\t<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/export_plugin/jspdf/libs/sprintf.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/export_plugin/jspdf/jspdf.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/export_plugin/jspdf/libs/base64.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t<!--EXPORTACION A PDF DICCIONARIO DE DATOS-->
\t<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/pdf/pdfmake.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/pdf/vfs_fonts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script>
\$(document).ready(function(){
\t\$(\"#search_\").autocomplete({
\t\tsource: \"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("autoComplete_Indicador");
        echo "\",
\t\tselect: function (a, b) 
\t\t{
\t\t\tvar valor=b.item.value;
\t\t\tvalor=valor.split(\"]\")[0];
\t\t\tvalor=valor.split(\"[\")[1];\t
\t\t\tsala_agregar_fila(); \t\t\t\t\t\t\t\t
\t\t\trecuperarDimensiones(valor, null);
\t\t},
\t\tposition: {
\t\t\tmy : \"right top\",
\t\t\tat: \"right bottom\"
\t\t}
\t});
\t\$('#search_').click(function() {
        this.value=\"\";
    });
\t
});

</script>
<style>
.ui-autocomplete { max-height: 200px; overflow:visible; z-index:999999999}
</style>
";
        
        $__internal_7a87a9c4cdb574d9e49c4252a827186de134a191c5a22f3342839496a0cb57e6->leave($__internal_7a87a9c4cdb574d9e49c4252a827186de134a191c5a22f3342839496a0cb57e6_prof);

    }

    // line 96
    public function block_content($context, array $blocks = array())
    {
        $__internal_3018689d6b4237c4f94f17531f52eadf6d3210b6141154f0430c5ab1564cbe62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3018689d6b4237c4f94f17531f52eadf6d3210b6141154f0430c5ab1564cbe62->enter($__internal_3018689d6b4237c4f94f17531f52eadf6d3210b6141154f0430c5ab1564cbe62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 97
        echo "
";
        // line 98
        $this->loadTemplate("IndicadoresBundle:FichaTecnicaAdmin:menu_tablero.html.twig", "IndicadoresBundle:FichaTecnicaAdmin:tablero.html.twig", 98)->display($context);
        // line 99
        echo "<div class=\"container-fluid\" id=\"contenedor_tablero\">
    <div class=\"row\" id=\"titulo_header\" style=\"display:none;\">
        <div class=\"col-md-12\">
        <div class=\"page-header\" style=\"padding:1px; margin-top:65px; margin-bottom: -40px;\"><h1 id=\"header_sala\"></h1></div> 
        </div>
    </div>

    <div id=\"sala\" style=\"margin-top: 50px;\"></div>
</div>

<!-- Modal -->

<div id=\"myModal\" class=\"modal fade\" style=\"z-index:999999999\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h3 id=\"myModalLabel\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_sala_situacional_"), "html", null, true);
        echo "</h3>
        </div>
    
        <div class=\"modal-body\">
            <label for=\"nombre_sala\">";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_nombre_sala_"), "html", null, true);
        echo "</label>
            <textarea id='nombre_sala' id-sala='' rows=\"3\" style=\"width: 100%\" class=\"form-control\"></textarea>
            <span class='alert' id='info_sala'></span>
        </div>
    
        <div class=\"modal-footer\">
            <button id='elimina_sala' class=\"btn btn-danger\" style=\"display:none\">
            <i class=\"glyphicon glyphicon-minus\"></i> 
            ";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_eliminar_cambios_"), "html", null, true);
        echo "</button>
            
            <button id='guardar_sala' class=\"btn btn-primary\">
            <i class=\"glyphicon glyphicon-ok\"></i> 
            ";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_guardar_cambios_"), "html", null, true);
        echo "</button>
            
            <button class=\"btn btn-warning\" data-dismiss=\"modal\" aria-hidden=\"true\">
            ";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_cerrar_"), "html", null, true);
        echo "</button>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id=\"myModal2\" class=\"modal fade\" style=\"z-index:999999999\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
       <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
        <h4 id=\"myModalLabel2\"></h4>
    \t</div>
        <div class=\"modal-body\" style=\"max-height:400px; max-width:100%; overflow:auto;\">
        <span class='info' id='sql'></span>
        </div>
        <div class=\"modal-footer\">
        <button class=\"btn btn-warning\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_cerrar_"), "html", null, true);
        echo "</button>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<!-- Modal Menu-->  
<div id=\"myModalMenu\" class=\"modal fade\" style=\"z-index:99999999\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</button>
            <h4 class=\"modal-tilte\">";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_Titulo_indicador"), "html", null, true);
        echo " </h4>
        </div>
        <div class=\"modal-body\">
        
            <ul class=\"nav nav-tabs\">
                <li class=\"active\">
                <a href=\"#s53beb59d6d27d_1\" data-toggle=\"tab\">
                <i class=\"glyphicon glyphicon-exclamation-sign has-errors hide\" data-original-title=\"\" title=\"\"></i>
                ";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_agregar_filtro_"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["clasificacionUso"]) ? $context["clasificacionUso"] : $this->getContext($context, "clasificacionUso"))), "html", null, true);
        echo ")
                </a>
                </li>
                <li>
                <a href=\"#s53beb59d6d27d_2\" data-toggle=\"tab\">
                <i class=\"glyphicon glyphicon-exclamation-sign has-errors hide\" data-original-title=\"\" title=\"\"></i>
                <i class=\"glyphicon glyphicon-star\"></i> 
                ";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("favoritos"), "html", null, true);
        echo " (<span id='cantidad_favoritos'>";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "favoritos", array())), "html", null, true);
        echo "</span>)
                </a>
                </li>
            </ul>
            <div class=\"tab-content\">
            \t<div class=\"tab-pane active\" id=\"s53beb59d6d27d_1\">
                \t
                    <div class=\"col-lg-12\"><br />
                        <div class=\"form-group\">
                            <label for=\"s53beb59d6d27d_establecimiento\">
                            ";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clasificacion_uso-eTAB"), "html", null, true);
        echo "
                            </label>
                            <select class=\"form-control\" id=\"clasificacion_00\">
                            <option value=\"xxx\">
                                ";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_no_clasificados_"), "html", null, true);
        echo " (<span id='cantidad_no_clasificados'>";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["indicadores_no_clasificados"]) ? $context["indicadores_no_clasificados"] : $this->getContext($context, "indicadores_no_clasificados"))), "html", null, true);
        echo ")
                            </option>
                            ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clasificacionUso"]) ? $context["clasificacionUso"] : $this->getContext($context, "clasificacionUso")));
        foreach ($context['_seq'] as $context["_key"] => $context["clasificacion"]) {
            // line 199
            echo "                                ";
            if (($this->getAttribute($context["clasificacion"], "codigo", array()) == (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "clasificacionUso", array(), "any", false, true), "codigo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "clasificacionUso", array(), "any", false, true), "codigo", array()), "")) : ("")))) {
                // line 200
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["clasificacion"], "id", array()), "html", null, true);
                echo "\">
                                     ";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute($context["clasificacion"], "descripcion", array()), "html", null, true);
                echo "
                                    ";
                // line 202
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
                foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                    // line 203
                    echo "                                        ";
                    if (((twig_length_filter($this->env, $this->getAttribute($context["categoria"], "indicadores", array())) > 0) && ($this->getAttribute($this->getAttribute($context["categoria"], "cat", array()), "descripcion", array()) == $this->getAttribute($context["clasificacion"], "descripcion", array())))) {
                        // line 204
                        echo "                                            (";
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["categoria"], "indicadores", array())), "html", null, true);
                        echo ")
                                        ";
                    }
                    // line 206
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 207
                echo "                                </option>
                                ";
            } else {
                // line 209
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["clasificacion"], "id", array()), "html", null, true);
                echo "\" >
                                    ";
                // line 210
                echo twig_escape_filter($this->env, $this->getAttribute($context["clasificacion"], "descripcion", array()), "html", null, true);
                echo "                                        
                                </option>
                                ";
            }
            // line 213
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clasificacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "                           </select>
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <div class=\"form-group\">
                            <label for=\"s53beb59d6d27d_establecimiento\">
                            ";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clasificacion_tecnica"), "html", null, true);
        echo "
                            </label>
                            <select class=\"form-control\" id=\"clasificacion_11\">
                            
                           </select>
                        </div>
                    </div>
                
                    <div class=\"col-lg-12\">
                        <div class=\"input-group\">
                          <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-search\"></i></span>
                          <input type=\"text\" id=\"search_1\" class=\"form-control\" placeholder=\"Buscar...\" autocomplete=\"off\">
                        </div>
                        <br />
                    </div>
                    
                    <div class=\"col-lg-12\">
                    \t<ul id=\"miclasificacion\" class=\"list-group\" >
                            ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["indicadores_no_clasificados"]) ? $context["indicadores_no_clasificados"] : $this->getContext($context, "indicadores_no_clasificados")));
        foreach ($context['_seq'] as $context["_key"] => $context["indicador"]) {
            // line 239
            echo "                            
                                <li class='list-group-item'
                                     style=\"height:100%; width:100%; display:block;\">
                                    <button type=\"button\" class=\"indicador pull-left btn\" style=\"margin-right:15px\" data-id='";
            // line 242
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "id", array()), "html", null, true);
            echo "'
                                    data-unidad-medida='";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "unidadMedida", array()), "html", null, true);
            echo "' id='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "id", array()), "html", null, true);
            echo "'>
                                    <i class=\"glyphicon glyphicon-plus\"></i>
                                    </button>
                                    ";
            // line 246
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "nombre", array()), "html", null, true);
            echo "  <div class=\"clearfix\"></div>                                  
                                </li>
                            
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indicador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        echo "                        </ul>
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"s53beb59d6d27d_2\">
                \t<div class=\"col-lg-12\"><br />
                    \t<div class=\"input-group\">
                          <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-search\"></i></span>
                          <input type=\"text\" id=\"search_2\" class=\"form-control\"  placeholder=\"Buscar...\">
                        </div> 
                        <br />                       
                    </div>
                    <div class=\"col-lg-12\">
                        <ul class=\"list-group\" id='listado-favoritos' >
                            ";
        // line 263
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "favoritos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["indicador"]) {
            // line 264
            echo "                            \t
                            \t<li class='list-group-item'
                                     style=\"height:100%; width:100%; display:block;\">
                                    <button type=\"button\" class=\"indicador pull-left btn\" style=\"margin-right:15px\" data-id='";
            // line 267
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "id", array()), "html", null, true);
            echo "'
                                    data-unidad-medida='";
            // line 268
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "unidadMedida", array()), "html", null, true);
            echo "' id='fav-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "id", array()), "html", null, true);
            echo "'>
                                    <i class=\"glyphicon glyphicon-plus\"></i>
                                    </button>
                                    ";
            // line 271
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "nombre", array()), "html", null, true);
            echo "
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indicador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "                        </ul>
                    </div>
                </div>
            </div>
        <!-- fin body -->        
    \t</div>
        <div class=\"modal-footer\" style=\"margin-top:-20px\">
            <button class=\"btn btn-warning\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_cerrar_"), "html", null, true);
        echo "</button>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id=\"exportarDatos\" class=\"modal fade\" style=\"z-index:999999999\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h3 id=\"myModalLabel\">";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_exportar_datos_lbl"), "html", null, true);
        echo "</h3>
        </div>
    
        <div class=\"modal-body row\">
            <div class=\"col-lg-12\">
                    <label>";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_exportar_datos_opciones_"), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-lg-12\">
                <ul class=\"list-group\" id='listado-favoritos' >                             
                    <li class='list-group-item'>
                        <div class=\"material-switch\">
                            <input id=\"exportar_csv\" value=\"csv\" name=\"exportar_opciones_radio\" type=\"radio\" checked/>
                            <label for=\"exportar_csv\" >CSV</label>
                        </div>
                    </li>
                    <li class='list-group-item'>
                        <div class=\"material-switch\">
                            <input id=\"exportar_xls\" value=\"xls\" name=\"exportar_opciones_radio\" type=\"radio\"/>
                            <label for=\"exportar_xls\" >XLS</label>
                        </div>
                    </li>
                    <li class='list-group-item'>
                        <div class=\"material-switch\">
                            <input id=\"exportar_xml\" value=\"xml\" name=\"exportar_opciones_radio\" type=\"radio\"/>
                            <label for=\"exportar_xml\" >XML</label>
                        </div>
                    </li>
                    <!--li class='list-group-item'>
                        <div class=\"material-switch\">
                            <input id=\"exportar_pdf\" value=\"pdf\" name=\"exportar_opciones_radio\" type=\"radio\"/>
                            <label for=\"exportar_pdf\" class=\"label-primary\">PDF</label>
                        </div>
                    </li-->
                </ul>
            </div>
        </div>
    
        <div class=\"modal-footer\">
            
            <button id='exportar_datos_boton' class=\"btn btn-primary\">
            <i class=\"glyphicon glyphicon-export\"></i> 
            ";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_exportar_datos_boton_"), "html", null, true);
        echo "</button>
            
            <button class=\"btn btn-warning\" data-dismiss=\"modal\" aria-hidden=\"true\">
            ";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_cerrar_"), "html", null, true);
        echo "</button>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id=\"exportarDiccionarioDatos\" class=\"modal fade\" style=\"z-index:999999999\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h3 id=\"myModalLabel\">";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_exportar_diccionario_datos_lbl"), "html", null, true);
        echo "</h3>
        </div>
    
        <div class=\"modal-body row\">
            <div id=\"contenedor_indicadores_diccionario\">
                
            </div>
        </div>
    
        <div class=\"modal-footer\">
            <button id='exportar_diccionario_boton' class=\"btn btn-primary\">
            <i class=\"glyphicon glyphicon-export\"></i> 
            ";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_exportar_datos_boton_"), "html", null, true);
        echo "</button>
            
            <button class=\"btn btn-warning\" data-dismiss=\"modal\" aria-hidden=\"true\">
            ";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_cerrar_"), "html", null, true);
        echo "</button>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


";
        // line 370
        $this->loadTemplate("IndicadoresBundle:FichaTecnicaAdmin:compartir_sala.html.twig", "IndicadoresBundle:FichaTecnicaAdmin:tablero.html.twig", 370)->display($context);
        // line 371
        $this->loadTemplate("IndicadoresBundle:FichaTecnicaAdmin:accion_sala.html.twig", "IndicadoresBundle:FichaTecnicaAdmin:tablero.html.twig", 371)->display($context);
        // line 372
        echo "
<!-- Modal Salas-->  
<div id=\"myModalSalas\" class=\"modal fade\" style=\"z-index:99999999\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
    \t<div class=\"modal-header\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</button><h4 class=\"modal-tilte\">";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_salas_"), "html", null, true);
        echo " </h4></div>
        <div class=\"modal-body\">
            <div class=\"tab-content\">
                <ul class=\"nav nav-tabs\" id=\"salax\">
                    <li class=\"active\">
                    <a href=\"#salas_2\" data-toggle=\"tab\">
                    <i class=\"glyphicon glyphicon-exclamation-sign has-errors hide\" data-original-title=\"\" title=\"\"></i>
                    Mis ";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_salas_"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["salasXusuario"]) ? $context["salasXusuario"] : $this->getContext($context, "salasXusuario"))), "html", null, true);
        echo ")
                    </a>
                    </li>
                    <li>
                    <a href=\"#salas_3\" data-toggle=\"tab\">
                    <i class=\"glyphicon glyphicon-exclamation-sign has-errors hide\" data-original-title=\"\" title=\"\"></i>
                    ";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_salas_"), "html", null, true);
        echo " X Grupo (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["salasXgrupo"]) ? $context["salasXgrupo"] : $this->getContext($context, "salasXgrupo"))), "html", null, true);
        echo ")
                    </a>
                    </li>
                    <li>
                    <a href=\"#salas_1\" data-toggle=\"tab\">
                    <i class=\"glyphicon glyphicon-exclamation-sign has-errors hide\" data-original-title=\"\" title=\"\"></i>
                    ";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_salas_"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["salas"]) ? $context["salas"] : $this->getContext($context, "salas"))), "html", null, true);
        echo ")
                    </a>
                    </li>
                </ul>
            
                <div class=\"tab-content\">
                    <div class=\"tab-pane  active\" id=\"salas_1\">
                        <div class=\"col-lg-12\"><br />
                            <div class=\"input-group\">
                              <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-search\"></i></span>
                              <input type=\"text\" id=\"search_3\" class=\"form-control\"  placeholder=\"Buscar...\">
                            </div> 
                            <br />                       
                        </div>
                        <div class=\"col-lg-12\">
                            <ul class=\"list-group\" id=\"misalax\">                                    
                                ";
        // line 412
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salas"]) ? $context["salas"] : $this->getContext($context, "salas")));
        foreach ($context['_seq'] as $context["_key"] => $context["sala"]) {
            // line 413
            echo "                                    <li  class=\"list-group-item\" style=\"min-height:55px\" id=\"n_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "id", array()), "html", null, true);
            echo "\">
                                        <button type=\"button\" class=\"salas-id pull-left btn\" style=\"margin-right:15px\" data=\"";
            // line 414
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["sala"], "indicadores_sala", array())), "html", null, true);
            echo "\" id='a_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "id", array()), "html", null, true);
            echo "' sala-nombre='";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "nombre", array()), "html", null, true);
            echo "' sala-id='";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "id", array()), "html", null, true);
            echo "'>
                                        <i class=\"glyphicon glyphicon-plus\"></i>
                                        </button>
                                        ";
            // line 417
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "nombre", array()), "html", null, true);
            echo "
                                                                                
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sala'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 421
        echo "                            </ul>                                   
                      </div>
                  </div>
                  <div class=\"tab-pane\" id=\"salas_2\">
                       <div class=\"col-lg-12\"><br />
                            <div class=\"input-group\">
                              <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-search\"></i></span>
                              <input type=\"text\" id=\"search_4\" class=\"form-control\"  placeholder=\"Buscar...\">
                            </div> 
                            <span class='col-lg-12 alert' style=\"display:none\" id='info_sala2'></span>
                            <br />                       
                      </div>
                      <div class=\"col-lg-12\">
                        <ul class=\"list-group\" id='misalax2' >
                            ";
        // line 435
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salasXusuario"]) ? $context["salasXusuario"] : $this->getContext($context, "salasXusuario")));
        foreach ($context['_seq'] as $context["_key"] => $context["sala"]) {
            // line 436
            echo "                                <li  class=\"list-group-item\" style=\"min-height:55px\" id=\"u_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "id", array()), "html", null, true);
            echo "\">
                                \t<button type=\"button\" class=\"salas-id pull-left btn\" style=\"margin-right:15px\" data=\"";
            // line 437
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["sala"], "indicadores_sala", array())), "html", null, true);
            echo "\" id='b_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "id", array()), "html", null, true);
            echo "' sala-nombre='";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "nombre", array()), "html", null, true);
            echo "' sala-id='";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "id", array()), "html", null, true);
            echo "'>
                                        <i class=\"glyphicon glyphicon-plus\"></i>
                                    </button>
                                    ";
            // line 440
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "nombre", array()), "html", null, true);
            echo "
                                    
                                    <a href=\"#myModal\" onclick=\"openModalSala('";
            // line 442
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "id", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "nombre", array()), "html", null, true);
            echo "','0')\" data-toggle=\"modal\" class=\"btn btn-danger pull-right\">
                                        <i class=\"fa fa-minus\"></i> 
                                    </a>
                                    <a href=\"#myModal\" onclick=\"openModalSala('";
            // line 445
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "id", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "nombre", array()), "html", null, true);
            echo "','1')\"data-toggle=\"modal\" class=\"btn btn-info pull-right\" >
                                        <i class=\"fa fa-edit\"></i> 
                                    </a>
                                    
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sala'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 451
        echo "                        </ul>
                     </div>                 
                  </div>
                  
                  
                  <div class=\"tab-pane\" id=\"salas_3\">
                     <div class=\"col-lg-12\"><br />
                        <div class=\"input-group\">
                          <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-search\"></i></span>
                          <input type=\"text\" id=\"search_5\" class=\"form-control\"  placeholder=\"Buscar...\">
                        </div> 
                        <br />                       
                     </div>
                     <div class=\"col-lg-12\">
                        <ul class=\"list-group\" id='misalax3' >                        \t
                            ";
        // line 466
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salasXgrupo"]) ? $context["salasXgrupo"] : $this->getContext($context, "salasXgrupo")));
        foreach ($context['_seq'] as $context["_key"] => $context["sala"]) {
            // line 467
            echo "                                <li class=\"list-group-item\" style=\"min-height:55px\" id=\"g_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "id", array()), "html", null, true);
            echo "\">
                                \t<button type=\"button\" class=\"salas-id pull-left btn\" style=\"margin-right:15px\" data=\"";
            // line 468
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["sala"], "indicadores_sala", array())), "html", null, true);
            echo "\" id='c_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "id", array()), "html", null, true);
            echo "' sala-nombre='";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "nombre", array()), "html", null, true);
            echo "' sala-id='";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "id", array()), "html", null, true);
            echo "'>
                                        <i class=\"glyphicon glyphicon-plus\"></i>
                                    </button>
                                    ";
            // line 471
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sala"], "datos_sala", array()), "nombre", array()), "html", null, true);
            echo "
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sala'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 474
        echo "                        </ul>
                     </div>
                  </div>
              </div>
           </div>
    \t</div>
        <div class=\"modal-footer\" style=\"margin-top:-20px\">
            <button class=\"btn btn-warning\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_cerrar_"), "html", null, true);
        echo "</button>
        </div>
        
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<style>
#myModalMenu li, #myModalSalas li
{
\tcursor:pointer;
}
#myModalMenu li:hover, #myModalSalas li:hover
{
\tcursor:pointer;
\tbackground-color:#EBEBEB;\t
}
#myModalMenu a , #myModalSalas a
{
\ttext-decoration:none;
}
</style>
<script>
\$(document).ready(function(){
\t
\$('#exportar_datos_boton').click(function(){
            
            var datos = [];
            var opcion = \$('input[name=exportar_opciones_radio]:checked').val();
            
            var elementos = [];
            var maxcollength = 0;
            \$('#contenedor_tablero').find('.area_grafico').each(function(i,elemento){
                
                var zona = \$(elemento).attr('id');
                var datasetPrincipal = JSON.parse(\$('#' + zona).attr('datasetPrincipal'));
                var nombre = \$('#' + zona + ' .titulo_indicador').attr('nombre');
                
                var item = new Object();
                item.nombre = nombre;
                item.datos = datasetPrincipal;
                item.zona = zona;
                
                elementos[elementos.length] = item;
                var tamanio = objSize(datasetPrincipal[0]);
                maxcollength = (maxcollength < tamanio) ? tamanio : maxcollength;
            });
            
            var tabla = '<table><tbody>';
            for (i = 0; i < elementos.length; i++) {
                tabla += construir_tabla(elementos[i], maxcollength);
            }
            tabla += '</tbody></table>';            
                                    
            switch(opcion){
                case 'xls':
                    var excelData = \$(tabla).tableExport({type:'excel',escape:'false'});
                    var blob = new Blob([excelData], {type: \"text/comma-separated-values;charset=utf-8\"});
                    saveAs(blob, \"reporte.xls\")
                    break;
                case 'csv':
                    var tdData = \$(tabla).tableExport({type:'csv',escape:'false',separator: ','});                    
                    var blob = new Blob([tdData], {type: \"text/comma-separated-values;charset=utf-8\"});
                    saveAs(blob, \"reporte.csv\");
                    break;
                case 'xml':
                    var xmldata = \$(tabla).tableExport({type:'xml',escape:'false'});
                    var blob = new Blob([xmldata], {type: \"application/xml;charset=utf-8\"});
                    saveAs(blob, \"reporte.xml\");
                    break;
               // case 'pdf':
               //     \$(tabla).tableExport({type:'pdf',escape:'false',pdfLeftMargin : 10, pdfFontSize:10 });
               //     break;
            }
                        
        });
        
        \$('#exportarDiccionarioDatos').on('shown.bs.modal', function (e) {
            
            \$('#contenedor_indicadores_diccionario').html('');
            \$('#contenedor_tablero').find('.area_grafico').each(function(i,elemento){
                
                var zona = \$(elemento).attr('id');
                var nombre = \$('#' + zona + ' .titulo_indicador').attr('nombre');
                var id = \$('#' + zona + ' .titulo_indicador').attr('data-id');
                
                \$('#contenedor_indicadores_diccionario').append('<div class=\"col-lg-12\"><ul class=\"list-group\"><li class=\"list-group-item\"><div class=\"\"><label for=\"indicador_'+zona+'\" ><input class=\"grafico_exportar\" nombre=\"'+nombre+'\" data-id=\"'+id+'\" id=\"indicador_'+zona+'\" type=\"checkbox\" checked/> ' +nombre+'</label></div></li></ul></div>');
            
            });
        
        });
        
        \$('#exportar_diccionario_boton').click(function(){
                    
            var elementos = [];
            \$('#contenedor_indicadores_diccionario').find('.grafico_exportar').each(function(i,elemento){
                
                if(elemento.checked){
                    var zona = \$(elemento).attr('id');
                    var nombre = \$('#' + zona).attr('nombre');
                    var id = \$('#' + zona).attr('data-id');

                    var item = new Object();
                    item.nombre = nombre;
                    item.id = id;
                    item.zona = zona;
                    
                    elementos[elementos.length] = item;   
                }            
        });
            
        var dd = {
            content: [
                { text: 'Diccionario de datos', style: 'subheader' }
            ],
            styles: {
                    header: {
                            fontSize: 18,
                            bold: true,
                            margin: [0, 0, 0, 10]
                    },
                    subheader: {
                            fontSize: 16,
                            bold: true,
                            margin: [0, 10, 0, 5]
                    },
                    tableExample: {
                            margin: [0, 5, 0, 15]
                    },
                    tableHeader: {
                            bold: true,
                            fontSize: 13,
                            color: 'black'
                    }
            }
        }
        
        var revisarfin = setInterval(function(){
            
            for(var i=0;i<elementos.length;i++){
                if (elementos[i].datos == null){
                    return false;
                }
            }
                pdfMake.createPdf(dd).download('diccionario_indicadores.pdf');
                cerrarintervalo();        
            }, 500);
            
            function cerrarintervalo(){
                clearInterval(revisarfin); 
            }

        \$(elementos).each(function(i,elemento){
            zona=\$(this).attr(\"data-id\");
            \$.get(Routing.generate('get_indicador_ficha',{id: elemento.id}),
                function(resp) {
                    var contenido = \$(resp);
                    var tabla = \$('table', contenido);
                    elemento.datos = tabla;
                    dd.content.push(construir_arreglo(elemento));
            }); 
        });
                
                        
        });
        
        function construir_arreglo(elemento) 
        {
            var datos = elemento.datos;
            var nombre = elemento.nombre;
            
            var objeto = [];
            
            var titulo = new Object();
            titulo.text = nombre;
            titulo.style = 'subheader';
            objeto.push(titulo);
            
            var contenido = new Object();
            contenido.style = 'tableExample';
            contenido.table = new Object();
            contenido.table.headerRows = 1;
            contenido.table.body = [];
            var tabla = \$(datos);
            tabla.find('tr').each(function(i,e) {
                
                var \$tds = \$(this).find('td');
                var \$ths = \$(this).find('th');
                var clave = \$ths.eq(0).text();
                var valor = \$tds.eq(0).text();
                
                var dato = new Object();
                
                if (i === 0) {
                    
                    headers = [];
                    var header1 = new Object();
                    header1.text = 'Campo';
                    header1.style = 'tableHeader';
                    headers.push(header1);
                    var header1 = new Object();
                    header1.text = 'Descripción';
                    header1.style = 'tableHeader';
                    headers.push(header1);
                        
                    contenido.table.body.push(headers);
                    
                }else{
                    var fila = [clave,valor];
                    contenido.table.body.push(fila);
                }
            });
         
            objeto.push(contenido);
            
            return objeto;
        }
        

        function construir_tabla(elemento, tamanio) 
        {
            var zona = elemento.zona;
            var datos = elemento.datos;
            var nombre = elemento.nombre;
            
            var tabla_datos = '<tr tipo=\"indicador\"><td tipo=\"nombre\" colspan=\"'+tamanio+'\">'+nombre+'</td></tr>';
            
            \$.each(datos, function(i, fila) {
                if (i === 0) {
                    tabla_datos += '<tr tipo=\"encabezado\">';
                    var longitudfila = objSize(fila);
                    var count = 0;
                    for (var campo in fila) {
                        
                        count +=1;
                        var colspan = (count === longitudfila && longitudfila<tamanio) ? 'colspan=\"'+(tamanio-longitudfila+1)+'\"' : '';
                        if (campo === 'category')
                            campo = \$('#' + zona + ' .dimension').html();
                        else if (campo === 'measure')
                            campo = trans.indicador + ' (' + \$('#' + zona + ' .titulo_indicador').attr('formula') + ')';
                        tabla_datos += '<td '+ colspan +'>' + campo.toUpperCase() + '</td>';
                    }
                    tabla_datos += '</tr>';
                }

                    tabla_datos += '<tr tipo=\"contenido\">';
                    var longitudfila = objSize(fila);
                    var count = 0;                
                    for (var i in fila){

                        count +=1;
                        var colspan = (count === longitudfila && longitudfila<tamanio) ? 'colspan=\"'+(tamanio-longitudfila+1)+'\"' : '';

                        tabla_datos += '<td '+ colspan +'>' + fila[i] + '</td>';
                    }
                    tabla_datos += '</tr>';

            });
            return tabla_datos;
        }
        
        var objSize = function(obj) {
            var count = 0;

            if (typeof obj == \"object\") {

                if (Object.keys) {
                    count = Object.keys(obj).length;
                } else if (window._) {
                    count = _.keys(obj).length;
                } else if (window.\$) {
                    count = \$.map(obj, function() { return 1; }).length;
                } else {
                    for (var key in obj) if (obj.hasOwnProperty(key)) count++;
                }

            }

            return count;
        };
\t\t
\t\$(\"#search_1\").keyup(function(e) {   
\t\tvalor=this.value.toLowerCase();                                                                
\t\t\$('#miclasificacion').find('li').each(function(i,ele)
\t\t{\t\t\t
\t\t\tvar buscar=\" \"+\$.trim(\$(ele).text().toLowerCase());\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\tif(buscar.indexOf(valor)<1)
\t\t\t\t\$(\"#miclasificacion li:nth-child(\"+(i+1)+\")\").attr(\"style\",\"display:none\");
\t\t\telse 
\t\t\t\t\$(\"#miclasificacion li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t\tif(valor==\"\")\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\$(\"#miclasificacion li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t});
\t});\t
\t\$(\"#clasificacion_00\").change(function(e) {
\t\tvar uso=\$(this).val();
\t\tvar valor=this.value.toLowerCase();\t
\t\tche=\"\";
\t\tif(valor==\"xxx\")
\t\t{
\t\t\tvalor=\$(\"#clasificacion_00 option:nth-child(2)\").val();\t\t\t\t\t\t\t\t
\t\t\tindicadoresList(valor,\"che\",\"\");
\t\t\t\$(\"#clasificacion_11\").html(\"\");
\t\t}
\t\telse
\t\t{
\t\t\t\$(\"#miclasificacion\").html(\"\");
\t\t\t\$.ajax({
\t\t\t\turl: Routing.generate(\"clasificacionTecnica\",{'uso':uso,'ficha':\"x\"}),
\t\t\t\tdataType:\"json\",\t
\t\t\t\ttype: 'POST',
\t\t\t\terror: function() 
\t\t\t\t{
\t\t\t\t\t\$(\"#clasificacion_11\").html(li);
\t\t\t\t},
\t\t\t\tsuccess: function(result) 
\t\t\t\t{
\t\t\t\t\tvar li=\"<option value=''>Seleccione</option>\";
\t\t\t\t\tfor (i = 0; i < result.length; i++) 
\t\t\t\t\t{
\t\t\t\t\t\tli+='<option value=\"'+result[i].id+'\" >'+result[i].value+'</option>';
\t\t\t\t\t}
\t\t\t\t\t\$(\"#clasificacion_11\").html(li);\t\t\t\t
\t\t\t\t}
\t\t\t});
\t\t\tindicadoresList(valor,\"\",\"\");
\t\t}
\t});
\t\$(\"#clasificacion_11\").change(function(e) {\t\t
\t\tindicadoresList(\$(\"#clasificacion_00\").val(),\"\",\$(this).val());
\t});\t
\t
\t\$(\"#search_5\").keyup(function(e) {   
\t\tvalor=this.value.toLowerCase();                                                                
\t\t\$('#misalax3').find('li').each(function(i,ele)
\t\t{\t\t\t
\t\t\tvar buscar=\" \"+\$.trim(\$(ele).text().toLowerCase());\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\tif(buscar.indexOf(valor)<1)
\t\t\t\t\$(\"#misalax3 li:nth-child(\"+(i+1)+\")\").attr(\"style\",\"display:none\");
\t\t\telse 
\t\t\t\t\$(\"#misalax3 li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t\tif(valor==\"\")\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\$(\"#misalax3 li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t});
\t});\t\t
\t
\t\t\t\t\t\t\t\t
\t\$(\"#search_4\").keyup(function(e) {   
\t\tvalor=this.value.toLowerCase();                                                                
\t\t\$('#misalax2').find('li').each(function(i,ele)
\t\t{\t\t\t
\t\t\tvar buscar=\" \"+\$.trim(\$(ele).text().toLowerCase());\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\tif(buscar.indexOf(valor)<1)
\t\t\t\t\$(\"#misalax2 li:nth-child(\"+(i+1)+\")\").attr(\"style\",\"display:none\");
\t\t\telse 
\t\t\t\t\$(\"#misalax2 li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t\tif(valor==\"\")\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\$(\"#misalax2 li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t});
\t});\t
\t
\t\$(\"#search_3\").keyup(function(e) {   
\t\tvalor=this.value.toLowerCase();                                                                
\t\t\$('#misalax').find('li').each(function(i,ele)
\t\t{\t\t\t
\t\t\tvar buscar=\" \"+\$.trim(\$(ele).text().toLowerCase());\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\tif(buscar.indexOf(valor)<1)
\t\t\t\t\$(\"#misalax li:nth-child(\"+(i+1)+\")\").attr(\"style\",\"display:none\");
\t\t\telse 
\t\t\t\t\$(\"#misalax li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t\tif(valor==\"\")\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\$(\"#misalax li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t});
\t});\t
\t
\t\$(\"#search_2\").keyup(function(e) {   
\t\tvalor=this.value.toLowerCase();                                                                
\t\t\$('#listado-favoritos').find('li').each(function(i,ele)
\t\t{\t\t\t
\t\t\tvar buscar=\" \"+\$.trim(\$(ele).text().toLowerCase());\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\tif(buscar.indexOf(valor)<1)
\t\t\t\t\$(\"#listado-favoritos li:nth-child(\"+(i+1)+\")\").attr(\"style\",\"display:none\");
\t\t\telse 
\t\t\t\t\$(\"#listado-favoritos li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t\tif(valor==\"\")\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\$(\"#listado-favoritos li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t});
\t});\t
\tfunction maximizar()
\t{\t
\t\tvar tam=((\$(window).width())-150)/3;
\t\tif(((\$(window).width())-120)<300)
\t\t\ttam=(\$(window).width());
\t\tif(tam<350&&tam>300)
\t\t\ttam=((\$(window).width())-150)/2;
\t\tif(tam>400)
\t\t\ttam=410;
\t\t
\t\tvar h1=tam/1.64;
\t\tvar h2=tam/1.07;
\t\t\t
\t\t//\$('.grafico').css({height:h1 , width: h2});
\t\t//\$('.area_grafico').css({height:tam , width: tam});
\t\t
\t\tvar windowH = \$(window).height();
\t\t\$('#listado-favoritos').css({'max-height':(\$(window).height()/2.5)+'px'});
\t\t\$('#listado-favoritos').css({'min-height':'70px'});
\t\t\$('#listado-favoritos').css({'overflow':'auto'});
\t\t
\t\t\$('#miclasificacion').css({'max-height':(\$(window).height()/2.5)+'px'});
\t\t\$('#miclasificacion').css({'min-height':'70px'});
\t\t\$('#miclasificacion').css({'overflow':'auto'});
\t\t
\t\t\$('#misalax').css({'max-height':(\$(window).height()/2.5)+'px'});
\t\t\$('#misalax').css({'min-height':'70px'});
\t\t\$('#misalax').css({'overflow':'auto'});
\t\t
\t\t\$('#misalax2').css({'max-height':(\$(window).height()/2.5)+'px'});
\t\t\$('#misalax2').css({'min-height':'70px'});
\t\t\$('#misalax2').css({'overflow':'auto'});
\t\t
\t\t\$('#misalax3').css({'max-height':(\$(window).height()/2.5)+'px'});
\t\t\$('#misalax3').css({'min-height':'70px'});
\t\t\$('#misalax3').css({'overflow':'auto'});
\t\t
\t\t\$('#acciones_sala').css({'max-height':(\$(window).height()/2.5)+'px'});
        \$('#acciones_sala').css({'min-height':'70px'});
        \$('#acciones_sala').css({'overflow':'auto'});

        \$('#content_mensajes').css({'max-height':(\$(window).height()/2.5)+'px'});
        \$('#content_mensajes').css({'min-height':'70px'});
        \$('#content_mensajes').css({'overflow':'auto'});
\t\t
\t}
\twindow.onresize=maximizar;
\twindow.onload=maximizar;
});
function openModalSala(sala,titulo,edit)
{
\t\$('#nombre_sala').attr('id-sala', sala);
\t\$('#nombre_sala').val(titulo);
\tif(edit==\"0\")
\t{
\t\t\$(\"#elimina_sala\").attr(\"data-id\",sala);
\t\t\$(\"#guardar_sala\").attr(\"style\",\"display:none\");
\t\t\$(\"#elimina_sala\").attr(\"style\",\"display:\");
\t}
\telse
\t{\t\t
\t\t\$(\"#guardar_sala\").attr(\"style\",\"display:\");
\t\t\$(\"#elimina_sala\").attr(\"style\",\"display:none\");
\t}
}
function indicadoresList(valor,che,ft)
{
\t\$(\"#miclasificacion\").html(\"\");
\t
\t\$.ajax({
\t\ttype: \"POST\",
\t\tdataType:\"JSON\",\t\t\t\t\t\t\t\t
\t\turl:(Routing.generate(\"change_clasificacion_uso\",{codigo_clasificacion:valor})),
\t\tdata:{ajax:\"ajax\",che:che,ft:ft},
\t\tsuccess: function(datos) 
\t\t{
\t\t\tvar li=\"\";
\t\t\tfor(var c=0;c<datos.length; c++)
\t\t\t{
\t\t\t\tli=li+'<li class=\"list-group-item\" style=\"height:100%; width:100%; display:block;\">'+
\t\t\t\t'<button type=\"button\" class=\"indicador pull-left btn\" style=\"margin-right:15px\" data-id=\"'+datos[c].id+'\"'+
\t\t\t\t'onclick=\"cargar_indicador('+datos[c].id+');\" id=\"'+datos[c].id+'\">'+
\t\t\t\t'<i class=\"glyphicon glyphicon-plus\"></i>'+
\t\t\t\t'</button>'+datos[c].nombre+'<div class=\"clearfix\"></div></li>';\t\t\t\t\t\t\t\t\t\t
\t\t\t}
\t\t\tif(li==\"\")
\t\t\t\tli=\"<div class='alert alert-warning col-lg-12'>No hay resultados</div>\";\t\t\t\t\t
\t\t\t\$(\"#miclasificacion\").append(li);
\t\t\tmarcar_agregados();
\t\t}
\t});
}
acciones_button();
</script>

";
        
        $__internal_3018689d6b4237c4f94f17531f52eadf6d3210b6141154f0430c5ab1564cbe62->leave($__internal_3018689d6b4237c4f94f17531f52eadf6d3210b6141154f0430c5ab1564cbe62_prof);

    }

    public function getTemplateName()
    {
        return "IndicadoresBundle:FichaTecnicaAdmin:tablero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  924 => 481,  915 => 474,  906 => 471,  894 => 468,  889 => 467,  885 => 466,  868 => 451,  854 => 445,  846 => 442,  841 => 440,  829 => 437,  824 => 436,  820 => 435,  804 => 421,  794 => 417,  782 => 414,  777 => 413,  773 => 412,  752 => 396,  741 => 390,  730 => 384,  720 => 377,  713 => 372,  711 => 371,  709 => 370,  699 => 363,  693 => 360,  678 => 348,  663 => 336,  657 => 333,  618 => 297,  610 => 292,  596 => 281,  587 => 274,  578 => 271,  570 => 268,  566 => 267,  561 => 264,  557 => 263,  542 => 250,  532 => 246,  524 => 243,  520 => 242,  515 => 239,  511 => 238,  490 => 220,  482 => 214,  476 => 213,  470 => 210,  465 => 209,  461 => 207,  455 => 206,  449 => 204,  446 => 203,  442 => 202,  438 => 201,  433 => 200,  430 => 199,  426 => 198,  419 => 196,  412 => 192,  397 => 182,  385 => 175,  374 => 167,  356 => 152,  336 => 135,  330 => 132,  323 => 128,  312 => 120,  305 => 116,  286 => 99,  284 => 98,  281 => 97,  275 => 96,  243 => 70,  235 => 65,  231 => 64,  225 => 61,  221 => 60,  217 => 59,  212 => 57,  207 => 55,  203 => 54,  199 => 53,  193 => 50,  189 => 49,  185 => 48,  181 => 47,  177 => 46,  173 => 45,  168 => 43,  164 => 42,  160 => 41,  156 => 40,  152 => 39,  148 => 38,  143 => 36,  139 => 35,  135 => 34,  131 => 33,  126 => 31,  122 => 30,  118 => 29,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  91 => 20,  87 => 19,  83 => 18,  78 => 17,  72 => 16,  61 => 11,  55 => 8,  51 => 7,  47 => 6,  42 => 5,  36 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Modificado para que agregar el botón para ir al listado #}

{% extends 'IndicadoresBundle::standard_layout_tablero.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
<link rel=\"stylesheet\" href=\"{{ asset('bundles/indicadores/css/FichaTecnicaAdmin/tablero.css') }}\" type=\"text/css\" media=\"all\" />
<link rel=\"stylesheet\" href=\"{{ asset('bundles/indicadores/js/DataTables/media/css/jquery.dataTables.css') }}\" type=\"text/css\" media=\"all\" />
<link rel=\"stylesheet\" href=\"{{ asset('bundles/indicadores/js/DataTables/media/css/TableTools.css') }}\" type=\"text/css\" media=\"all\" />

<!--EDITADO PARA NUEVOS TIPOS DE GRAFICOS (CSS)-->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/indicadores/css/FichaTecnicaAdmin/gauge.css') }}\" type=\"text/css\" media=\"all\" />


{% endblock %}

{% block javascripts %}
    {{ parent() }}
<script src=\"{{ asset('bundles/indicadores/js/d3.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('bundles/indicadores/js/d3pie.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('bundles/indicadores/js/affix.min.js') }}\" type=\"text/javascript\"></script>

<script src=\"{{ asset('bundles/indicadores/js/FichaTecnicaAdmin/grafico_pastel.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('bundles/indicadores/js/FichaTecnicaAdmin/grafico_columnas.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('bundles/indicadores/js/FichaTecnicaAdmin/grafico_lineas.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('bundles/indicadores/js/FichaTecnicaAdmin/tablero.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('bundles/indicadores/js/FichaTecnicaAdmin/comun.js') }}\" type=\"text/javascript\"></script>
    
    <!--EDITADO PARA NUEVOS TIPOS DE GRAFICOS-->
    <script src=\"{{ asset('bundles/indicadores/js/SVG/rgbcolor.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/indicadores/js/SVG/StackBlur.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/indicadores/js/SVG/canvg.js') }}\" type=\"text/javascript\"></script>
    
    <script src=\"{{ asset('bundles/indicadores/js/FichaTecnicaAdmin/grafico_gauge.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/indicadores/js/FichaTecnicaAdmin/grafico_termometro.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/indicadores/js/FichaTecnicaAdmin/iopctrl.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/indicadores/js/FichaTecnicaAdmin/grafico_mapa.js') }}\" type=\"text/javascript\"></script>
\t
    <script src=\"{{ asset('bundles/indicadores/js/bridge_draggable_touch.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/indicadores/js/jquery.ui.touch-punch.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/indicadores/js/rasterizeHTML.allinone.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/indicadores/js/DataTables/jquery.dataTables.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/indicadores/js/DataTables/ZeroClipboard.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/indicadores/js/DataTables/TableTools.min.js') }}\" type=\"text/javascript\"></script>

\t<script src=\"{{ asset('bundles/indicadores/js/bridge_draggable_touch.js') }}\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('bundles/indicadores/js/jquery.ui.touch-punch.js') }}\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('bundles/indicadores/js/rasterizeHTML.allinone.js') }}\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('bundles/indicadores/js/DataTables/jquery.dataTables.min.js') }}\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('bundles/indicadores/js/DataTables/ZeroClipboard.js') }}\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('bundles/indicadores/js/DataTables/TableTools.min.js') }}\" type=\"text/javascript\"></script>

\t<!--EDITADO PARA EXPORTACION DE DATOS-->
\t<script src=\"{{ asset('bundles/indicadores/js/export_plugin/tableExport.js') }}\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('bundles/indicadores/js/export_plugin/filesaver.js') }}\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('bundles/indicadores/js/export_plugin/jquery.base64.js') }}\" type=\"text/javascript\"></script>
\t<!--EXPORTACION A PNG-->
\t<script src=\"{{ asset('bundles/indicadores/js/export_plugin/html2canvas.js') }}\" type=\"text/javascript\"></script>
\t<!--EXPORTACION A PDF-->
\t<script src=\"{{ asset('bundles/indicadores/js/export_plugin/jspdf/libs/sprintf.js') }}\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('bundles/indicadores/js/export_plugin/jspdf/jspdf.js') }}\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('bundles/indicadores/js/export_plugin/jspdf/libs/base64.js') }}\" type=\"text/javascript\"></script>

\t<!--EXPORTACION A PDF DICCIONARIO DE DATOS-->
\t<script src=\"{{ asset('bundles/indicadores/js/pdf/pdfmake.min.js') }}\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('bundles/indicadores/js/pdf/vfs_fonts.js') }}\" type=\"text/javascript\"></script>

<script>
\$(document).ready(function(){
\t\$(\"#search_\").autocomplete({
\t\tsource: \"{{ path('autoComplete_Indicador') }}\",
\t\tselect: function (a, b) 
\t\t{
\t\t\tvar valor=b.item.value;
\t\t\tvalor=valor.split(\"]\")[0];
\t\t\tvalor=valor.split(\"[\")[1];\t
\t\t\tsala_agregar_fila(); \t\t\t\t\t\t\t\t
\t\t\trecuperarDimensiones(valor, null);
\t\t},
\t\tposition: {
\t\t\tmy : \"right top\",
\t\t\tat: \"right bottom\"
\t\t}
\t});
\t\$('#search_').click(function() {
        this.value=\"\";
    });
\t
});

</script>
<style>
.ui-autocomplete { max-height: 200px; overflow:visible; z-index:999999999}
</style>
{% endblock %}

{% block content %}

{% include 'IndicadoresBundle:FichaTecnicaAdmin:menu_tablero.html.twig' %}
<div class=\"container-fluid\" id=\"contenedor_tablero\">
    <div class=\"row\" id=\"titulo_header\" style=\"display:none;\">
        <div class=\"col-md-12\">
        <div class=\"page-header\" style=\"padding:1px; margin-top:65px; margin-bottom: -40px;\"><h1 id=\"header_sala\"></h1></div> 
        </div>
    </div>

    <div id=\"sala\" style=\"margin-top: 50px;\"></div>
</div>

<!-- Modal -->

<div id=\"myModal\" class=\"modal fade\" style=\"z-index:999999999\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h3 id=\"myModalLabel\">{{'_sala_situacional_'|trans}}</h3>
        </div>
    
        <div class=\"modal-body\">
            <label for=\"nombre_sala\">{{'_nombre_sala_'|trans}}</label>
            <textarea id='nombre_sala' id-sala='' rows=\"3\" style=\"width: 100%\" class=\"form-control\"></textarea>
            <span class='alert' id='info_sala'></span>
        </div>
    
        <div class=\"modal-footer\">
            <button id='elimina_sala' class=\"btn btn-danger\" style=\"display:none\">
            <i class=\"glyphicon glyphicon-minus\"></i> 
            {{'_eliminar_cambios_'|trans}}</button>
            
            <button id='guardar_sala' class=\"btn btn-primary\">
            <i class=\"glyphicon glyphicon-ok\"></i> 
            {{'_guardar_cambios_'|trans}}</button>
            
            <button class=\"btn btn-warning\" data-dismiss=\"modal\" aria-hidden=\"true\">
            {{'_cerrar_'|trans}}</button>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id=\"myModal2\" class=\"modal fade\" style=\"z-index:999999999\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
       <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
        <h4 id=\"myModalLabel2\"></h4>
    \t</div>
        <div class=\"modal-body\" style=\"max-height:400px; max-width:100%; overflow:auto;\">
        <span class='info' id='sql'></span>
        </div>
        <div class=\"modal-footer\">
        <button class=\"btn btn-warning\" data-dismiss=\"modal\" aria-hidden=\"true\">{{'_cerrar_'|trans}}</button>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<!-- Modal Menu-->  
<div id=\"myModalMenu\" class=\"modal fade\" style=\"z-index:99999999\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</button>
            <h4 class=\"modal-tilte\">{{\"_Titulo_indicador\"|trans}} </h4>
        </div>
        <div class=\"modal-body\">
        
            <ul class=\"nav nav-tabs\">
                <li class=\"active\">
                <a href=\"#s53beb59d6d27d_1\" data-toggle=\"tab\">
                <i class=\"glyphicon glyphicon-exclamation-sign has-errors hide\" data-original-title=\"\" title=\"\"></i>
                {{\"_agregar_filtro_\"|trans}} ({{clasificacionUso|length}})
                </a>
                </li>
                <li>
                <a href=\"#s53beb59d6d27d_2\" data-toggle=\"tab\">
                <i class=\"glyphicon glyphicon-exclamation-sign has-errors hide\" data-original-title=\"\" title=\"\"></i>
                <i class=\"glyphicon glyphicon-star\"></i> 
                {{\"favoritos\"|trans}} (<span id='cantidad_favoritos'>{{app.user.favoritos|length}}</span>)
                </a>
                </li>
            </ul>
            <div class=\"tab-content\">
            \t<div class=\"tab-pane active\" id=\"s53beb59d6d27d_1\">
                \t
                    <div class=\"col-lg-12\"><br />
                        <div class=\"form-group\">
                            <label for=\"s53beb59d6d27d_establecimiento\">
                            {{'clasificacion_uso-eTAB'|trans}}
                            </label>
                            <select class=\"form-control\" id=\"clasificacion_00\">
                            <option value=\"xxx\">
                                {{\"_no_clasificados_\"|trans}} (<span id='cantidad_no_clasificados'>{{indicadores_no_clasificados|length}})
                            </option>
                            {% for clasificacion in clasificacionUso %}
                                {% if clasificacion.codigo == app.user.clasificacionUso.codigo|default('') %}
                                <option value=\"{{clasificacion.id}}\">
                                     {{clasificacion.descripcion}}
                                    {% for categoria in categorias%}
                                        {% if categoria.indicadores|length > 0 and categoria.cat.descripcion==clasificacion.descripcion   %}
                                            ({{categoria.indicadores|length}})
                                        {% endif %}
                                    {% endfor %}
                                </option>
                                {% else %}
                                <option value=\"{{clasificacion.id}}\" >
                                    {{clasificacion.descripcion}}                                        
                                </option>
                                {% endif %}
                            {% endfor %}
                           </select>
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <div class=\"form-group\">
                            <label for=\"s53beb59d6d27d_establecimiento\">
                            {{'clasificacion_tecnica'|trans}}
                            </label>
                            <select class=\"form-control\" id=\"clasificacion_11\">
                            
                           </select>
                        </div>
                    </div>
                
                    <div class=\"col-lg-12\">
                        <div class=\"input-group\">
                          <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-search\"></i></span>
                          <input type=\"text\" id=\"search_1\" class=\"form-control\" placeholder=\"Buscar...\" autocomplete=\"off\">
                        </div>
                        <br />
                    </div>
                    
                    <div class=\"col-lg-12\">
                    \t<ul id=\"miclasificacion\" class=\"list-group\" >
                            {% for indicador in indicadores_no_clasificados %}
                            
                                <li class='list-group-item'
                                     style=\"height:100%; width:100%; display:block;\">
                                    <button type=\"button\" class=\"indicador pull-left btn\" style=\"margin-right:15px\" data-id='{{indicador.id}}'
                                    data-unidad-medida='{{indicador.unidadMedida}}' id='{{indicador.id}}'>
                                    <i class=\"glyphicon glyphicon-plus\"></i>
                                    </button>
                                    {{indicador.nombre}}  <div class=\"clearfix\"></div>                                  
                                </li>
                            
                            {% endfor %}
                        </ul>
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"s53beb59d6d27d_2\">
                \t<div class=\"col-lg-12\"><br />
                    \t<div class=\"input-group\">
                          <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-search\"></i></span>
                          <input type=\"text\" id=\"search_2\" class=\"form-control\"  placeholder=\"Buscar...\">
                        </div> 
                        <br />                       
                    </div>
                    <div class=\"col-lg-12\">
                        <ul class=\"list-group\" id='listado-favoritos' >
                            {% for indicador in app.user.favoritos %}
                            \t
                            \t<li class='list-group-item'
                                     style=\"height:100%; width:100%; display:block;\">
                                    <button type=\"button\" class=\"indicador pull-left btn\" style=\"margin-right:15px\" data-id='{{indicador.id}}'
                                    data-unidad-medida='{{indicador.unidadMedida}}' id='fav-{{indicador.id}}'>
                                    <i class=\"glyphicon glyphicon-plus\"></i>
                                    </button>
                                    {{indicador.nombre}}
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>
        <!-- fin body -->        
    \t</div>
        <div class=\"modal-footer\" style=\"margin-top:-20px\">
            <button class=\"btn btn-warning\" data-dismiss=\"modal\" aria-hidden=\"true\">{{'_cerrar_'|trans}}</button>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id=\"exportarDatos\" class=\"modal fade\" style=\"z-index:999999999\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h3 id=\"myModalLabel\">{{'_exportar_datos_lbl'|trans}}</h3>
        </div>
    
        <div class=\"modal-body row\">
            <div class=\"col-lg-12\">
                    <label>{{'_exportar_datos_opciones_'|trans}}</label>
            </div>
            <div class=\"col-lg-12\">
                <ul class=\"list-group\" id='listado-favoritos' >                             
                    <li class='list-group-item'>
                        <div class=\"material-switch\">
                            <input id=\"exportar_csv\" value=\"csv\" name=\"exportar_opciones_radio\" type=\"radio\" checked/>
                            <label for=\"exportar_csv\" >CSV</label>
                        </div>
                    </li>
                    <li class='list-group-item'>
                        <div class=\"material-switch\">
                            <input id=\"exportar_xls\" value=\"xls\" name=\"exportar_opciones_radio\" type=\"radio\"/>
                            <label for=\"exportar_xls\" >XLS</label>
                        </div>
                    </li>
                    <li class='list-group-item'>
                        <div class=\"material-switch\">
                            <input id=\"exportar_xml\" value=\"xml\" name=\"exportar_opciones_radio\" type=\"radio\"/>
                            <label for=\"exportar_xml\" >XML</label>
                        </div>
                    </li>
                    <!--li class='list-group-item'>
                        <div class=\"material-switch\">
                            <input id=\"exportar_pdf\" value=\"pdf\" name=\"exportar_opciones_radio\" type=\"radio\"/>
                            <label for=\"exportar_pdf\" class=\"label-primary\">PDF</label>
                        </div>
                    </li-->
                </ul>
            </div>
        </div>
    
        <div class=\"modal-footer\">
            
            <button id='exportar_datos_boton' class=\"btn btn-primary\">
            <i class=\"glyphicon glyphicon-export\"></i> 
            {{'_exportar_datos_boton_'|trans}}</button>
            
            <button class=\"btn btn-warning\" data-dismiss=\"modal\" aria-hidden=\"true\">
            {{'_cerrar_'|trans}}</button>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id=\"exportarDiccionarioDatos\" class=\"modal fade\" style=\"z-index:999999999\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h3 id=\"myModalLabel\">{{'_exportar_diccionario_datos_lbl'|trans}}</h3>
        </div>
    
        <div class=\"modal-body row\">
            <div id=\"contenedor_indicadores_diccionario\">
                
            </div>
        </div>
    
        <div class=\"modal-footer\">
            <button id='exportar_diccionario_boton' class=\"btn btn-primary\">
            <i class=\"glyphicon glyphicon-export\"></i> 
            {{'_exportar_datos_boton_'|trans}}</button>
            
            <button class=\"btn btn-warning\" data-dismiss=\"modal\" aria-hidden=\"true\">
            {{'_cerrar_'|trans}}</button>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


{% include 'IndicadoresBundle:FichaTecnicaAdmin:compartir_sala.html.twig' %}
{% include 'IndicadoresBundle:FichaTecnicaAdmin:accion_sala.html.twig' %}

<!-- Modal Salas-->  
<div id=\"myModalSalas\" class=\"modal fade\" style=\"z-index:99999999\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
    \t<div class=\"modal-header\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</button><h4 class=\"modal-tilte\">{{'_salas_'|trans}} </h4></div>
        <div class=\"modal-body\">
            <div class=\"tab-content\">
                <ul class=\"nav nav-tabs\" id=\"salax\">
                    <li class=\"active\">
                    <a href=\"#salas_2\" data-toggle=\"tab\">
                    <i class=\"glyphicon glyphicon-exclamation-sign has-errors hide\" data-original-title=\"\" title=\"\"></i>
                    Mis {{'_salas_'|trans}} ({{salasXusuario|length}})
                    </a>
                    </li>
                    <li>
                    <a href=\"#salas_3\" data-toggle=\"tab\">
                    <i class=\"glyphicon glyphicon-exclamation-sign has-errors hide\" data-original-title=\"\" title=\"\"></i>
                    {{'_salas_'|trans}} X Grupo ({{salasXgrupo|length}})
                    </a>
                    </li>
                    <li>
                    <a href=\"#salas_1\" data-toggle=\"tab\">
                    <i class=\"glyphicon glyphicon-exclamation-sign has-errors hide\" data-original-title=\"\" title=\"\"></i>
                    {{'_salas_'|trans}} ({{salas|length}})
                    </a>
                    </li>
                </ul>
            
                <div class=\"tab-content\">
                    <div class=\"tab-pane  active\" id=\"salas_1\">
                        <div class=\"col-lg-12\"><br />
                            <div class=\"input-group\">
                              <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-search\"></i></span>
                              <input type=\"text\" id=\"search_3\" class=\"form-control\"  placeholder=\"Buscar...\">
                            </div> 
                            <br />                       
                        </div>
                        <div class=\"col-lg-12\">
                            <ul class=\"list-group\" id=\"misalax\">                                    
                                {% for sala in salas %}
                                    <li  class=\"list-group-item\" style=\"min-height:55px\" id=\"n_{{sala.datos_sala.id}}\">
                                        <button type=\"button\" class=\"salas-id pull-left btn\" style=\"margin-right:15px\" data=\"{{sala.indicadores_sala|json_encode()}}\" id='a_{{sala.datos_sala.id}}' sala-nombre='{{sala.datos_sala.nombre}}' sala-id='{{sala.datos_sala.id}}'>
                                        <i class=\"glyphicon glyphicon-plus\"></i>
                                        </button>
                                        {{sala.datos_sala.nombre}}
                                                                                
                                    </li>
                                {% endfor %}
                            </ul>                                   
                      </div>
                  </div>
                  <div class=\"tab-pane\" id=\"salas_2\">
                       <div class=\"col-lg-12\"><br />
                            <div class=\"input-group\">
                              <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-search\"></i></span>
                              <input type=\"text\" id=\"search_4\" class=\"form-control\"  placeholder=\"Buscar...\">
                            </div> 
                            <span class='col-lg-12 alert' style=\"display:none\" id='info_sala2'></span>
                            <br />                       
                      </div>
                      <div class=\"col-lg-12\">
                        <ul class=\"list-group\" id='misalax2' >
                            {% for sala in salasXusuario %}
                                <li  class=\"list-group-item\" style=\"min-height:55px\" id=\"u_{{sala.datos_sala.id}}\">
                                \t<button type=\"button\" class=\"salas-id pull-left btn\" style=\"margin-right:15px\" data=\"{{sala.indicadores_sala|json_encode()}}\" id='b_{{sala.datos_sala.id}}' sala-nombre='{{sala.datos_sala.nombre}}' sala-id='{{sala.datos_sala.id}}'>
                                        <i class=\"glyphicon glyphicon-plus\"></i>
                                    </button>
                                    {{sala.datos_sala.nombre}}
                                    
                                    <a href=\"#myModal\" onclick=\"openModalSala('{{sala.datos_sala.id}}','{{sala.datos_sala.nombre}}','0')\" data-toggle=\"modal\" class=\"btn btn-danger pull-right\">
                                        <i class=\"fa fa-minus\"></i> 
                                    </a>
                                    <a href=\"#myModal\" onclick=\"openModalSala('{{sala.datos_sala.id}}','{{sala.datos_sala.nombre}}','1')\"data-toggle=\"modal\" class=\"btn btn-info pull-right\" >
                                        <i class=\"fa fa-edit\"></i> 
                                    </a>
                                    
                                </li>
                            {% endfor %}
                        </ul>
                     </div>                 
                  </div>
                  
                  
                  <div class=\"tab-pane\" id=\"salas_3\">
                     <div class=\"col-lg-12\"><br />
                        <div class=\"input-group\">
                          <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-search\"></i></span>
                          <input type=\"text\" id=\"search_5\" class=\"form-control\"  placeholder=\"Buscar...\">
                        </div> 
                        <br />                       
                     </div>
                     <div class=\"col-lg-12\">
                        <ul class=\"list-group\" id='misalax3' >                        \t
                            {% for sala in salasXgrupo %}
                                <li class=\"list-group-item\" style=\"min-height:55px\" id=\"g_{{sala.datos_sala.id}}\">
                                \t<button type=\"button\" class=\"salas-id pull-left btn\" style=\"margin-right:15px\" data=\"{{sala.indicadores_sala|json_encode()}}\" id='c_{{sala.datos_sala.id}}' sala-nombre='{{sala.datos_sala.nombre}}' sala-id='{{sala.datos_sala.id}}'>
                                        <i class=\"glyphicon glyphicon-plus\"></i>
                                    </button>
                                    {{sala.datos_sala.nombre}}
                                </li>
                            {% endfor %}
                        </ul>
                     </div>
                  </div>
              </div>
           </div>
    \t</div>
        <div class=\"modal-footer\" style=\"margin-top:-20px\">
            <button class=\"btn btn-warning\" data-dismiss=\"modal\" aria-hidden=\"true\">{{'_cerrar_'|trans}}</button>
        </div>
        
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<style>
#myModalMenu li, #myModalSalas li
{
\tcursor:pointer;
}
#myModalMenu li:hover, #myModalSalas li:hover
{
\tcursor:pointer;
\tbackground-color:#EBEBEB;\t
}
#myModalMenu a , #myModalSalas a
{
\ttext-decoration:none;
}
</style>
<script>
\$(document).ready(function(){
\t
\$('#exportar_datos_boton').click(function(){
            
            var datos = [];
            var opcion = \$('input[name=exportar_opciones_radio]:checked').val();
            
            var elementos = [];
            var maxcollength = 0;
            \$('#contenedor_tablero').find('.area_grafico').each(function(i,elemento){
                
                var zona = \$(elemento).attr('id');
                var datasetPrincipal = JSON.parse(\$('#' + zona).attr('datasetPrincipal'));
                var nombre = \$('#' + zona + ' .titulo_indicador').attr('nombre');
                
                var item = new Object();
                item.nombre = nombre;
                item.datos = datasetPrincipal;
                item.zona = zona;
                
                elementos[elementos.length] = item;
                var tamanio = objSize(datasetPrincipal[0]);
                maxcollength = (maxcollength < tamanio) ? tamanio : maxcollength;
            });
            
            var tabla = '<table><tbody>';
            for (i = 0; i < elementos.length; i++) {
                tabla += construir_tabla(elementos[i], maxcollength);
            }
            tabla += '</tbody></table>';            
                                    
            switch(opcion){
                case 'xls':
                    var excelData = \$(tabla).tableExport({type:'excel',escape:'false'});
                    var blob = new Blob([excelData], {type: \"text/comma-separated-values;charset=utf-8\"});
                    saveAs(blob, \"reporte.xls\")
                    break;
                case 'csv':
                    var tdData = \$(tabla).tableExport({type:'csv',escape:'false',separator: ','});                    
                    var blob = new Blob([tdData], {type: \"text/comma-separated-values;charset=utf-8\"});
                    saveAs(blob, \"reporte.csv\");
                    break;
                case 'xml':
                    var xmldata = \$(tabla).tableExport({type:'xml',escape:'false'});
                    var blob = new Blob([xmldata], {type: \"application/xml;charset=utf-8\"});
                    saveAs(blob, \"reporte.xml\");
                    break;
               // case 'pdf':
               //     \$(tabla).tableExport({type:'pdf',escape:'false',pdfLeftMargin : 10, pdfFontSize:10 });
               //     break;
            }
                        
        });
        
        \$('#exportarDiccionarioDatos').on('shown.bs.modal', function (e) {
            
            \$('#contenedor_indicadores_diccionario').html('');
            \$('#contenedor_tablero').find('.area_grafico').each(function(i,elemento){
                
                var zona = \$(elemento).attr('id');
                var nombre = \$('#' + zona + ' .titulo_indicador').attr('nombre');
                var id = \$('#' + zona + ' .titulo_indicador').attr('data-id');
                
                \$('#contenedor_indicadores_diccionario').append('<div class=\"col-lg-12\"><ul class=\"list-group\"><li class=\"list-group-item\"><div class=\"\"><label for=\"indicador_'+zona+'\" ><input class=\"grafico_exportar\" nombre=\"'+nombre+'\" data-id=\"'+id+'\" id=\"indicador_'+zona+'\" type=\"checkbox\" checked/> ' +nombre+'</label></div></li></ul></div>');
            
            });
        
        });
        
        \$('#exportar_diccionario_boton').click(function(){
                    
            var elementos = [];
            \$('#contenedor_indicadores_diccionario').find('.grafico_exportar').each(function(i,elemento){
                
                if(elemento.checked){
                    var zona = \$(elemento).attr('id');
                    var nombre = \$('#' + zona).attr('nombre');
                    var id = \$('#' + zona).attr('data-id');

                    var item = new Object();
                    item.nombre = nombre;
                    item.id = id;
                    item.zona = zona;
                    
                    elementos[elementos.length] = item;   
                }            
        });
            
        var dd = {
            content: [
                { text: 'Diccionario de datos', style: 'subheader' }
            ],
            styles: {
                    header: {
                            fontSize: 18,
                            bold: true,
                            margin: [0, 0, 0, 10]
                    },
                    subheader: {
                            fontSize: 16,
                            bold: true,
                            margin: [0, 10, 0, 5]
                    },
                    tableExample: {
                            margin: [0, 5, 0, 15]
                    },
                    tableHeader: {
                            bold: true,
                            fontSize: 13,
                            color: 'black'
                    }
            }
        }
        
        var revisarfin = setInterval(function(){
            
            for(var i=0;i<elementos.length;i++){
                if (elementos[i].datos == null){
                    return false;
                }
            }
                pdfMake.createPdf(dd).download('diccionario_indicadores.pdf');
                cerrarintervalo();        
            }, 500);
            
            function cerrarintervalo(){
                clearInterval(revisarfin); 
            }

        \$(elementos).each(function(i,elemento){
            zona=\$(this).attr(\"data-id\");
            \$.get(Routing.generate('get_indicador_ficha',{id: elemento.id}),
                function(resp) {
                    var contenido = \$(resp);
                    var tabla = \$('table', contenido);
                    elemento.datos = tabla;
                    dd.content.push(construir_arreglo(elemento));
            }); 
        });
                
                        
        });
        
        function construir_arreglo(elemento) 
        {
            var datos = elemento.datos;
            var nombre = elemento.nombre;
            
            var objeto = [];
            
            var titulo = new Object();
            titulo.text = nombre;
            titulo.style = 'subheader';
            objeto.push(titulo);
            
            var contenido = new Object();
            contenido.style = 'tableExample';
            contenido.table = new Object();
            contenido.table.headerRows = 1;
            contenido.table.body = [];
            var tabla = \$(datos);
            tabla.find('tr').each(function(i,e) {
                
                var \$tds = \$(this).find('td');
                var \$ths = \$(this).find('th');
                var clave = \$ths.eq(0).text();
                var valor = \$tds.eq(0).text();
                
                var dato = new Object();
                
                if (i === 0) {
                    
                    headers = [];
                    var header1 = new Object();
                    header1.text = 'Campo';
                    header1.style = 'tableHeader';
                    headers.push(header1);
                    var header1 = new Object();
                    header1.text = 'Descripción';
                    header1.style = 'tableHeader';
                    headers.push(header1);
                        
                    contenido.table.body.push(headers);
                    
                }else{
                    var fila = [clave,valor];
                    contenido.table.body.push(fila);
                }
            });
         
            objeto.push(contenido);
            
            return objeto;
        }
        

        function construir_tabla(elemento, tamanio) 
        {
            var zona = elemento.zona;
            var datos = elemento.datos;
            var nombre = elemento.nombre;
            
            var tabla_datos = '<tr tipo=\"indicador\"><td tipo=\"nombre\" colspan=\"'+tamanio+'\">'+nombre+'</td></tr>';
            
            \$.each(datos, function(i, fila) {
                if (i === 0) {
                    tabla_datos += '<tr tipo=\"encabezado\">';
                    var longitudfila = objSize(fila);
                    var count = 0;
                    for (var campo in fila) {
                        
                        count +=1;
                        var colspan = (count === longitudfila && longitudfila<tamanio) ? 'colspan=\"'+(tamanio-longitudfila+1)+'\"' : '';
                        if (campo === 'category')
                            campo = \$('#' + zona + ' .dimension').html();
                        else if (campo === 'measure')
                            campo = trans.indicador + ' (' + \$('#' + zona + ' .titulo_indicador').attr('formula') + ')';
                        tabla_datos += '<td '+ colspan +'>' + campo.toUpperCase() + '</td>';
                    }
                    tabla_datos += '</tr>';
                }

                    tabla_datos += '<tr tipo=\"contenido\">';
                    var longitudfila = objSize(fila);
                    var count = 0;                
                    for (var i in fila){

                        count +=1;
                        var colspan = (count === longitudfila && longitudfila<tamanio) ? 'colspan=\"'+(tamanio-longitudfila+1)+'\"' : '';

                        tabla_datos += '<td '+ colspan +'>' + fila[i] + '</td>';
                    }
                    tabla_datos += '</tr>';

            });
            return tabla_datos;
        }
        
        var objSize = function(obj) {
            var count = 0;

            if (typeof obj == \"object\") {

                if (Object.keys) {
                    count = Object.keys(obj).length;
                } else if (window._) {
                    count = _.keys(obj).length;
                } else if (window.\$) {
                    count = \$.map(obj, function() { return 1; }).length;
                } else {
                    for (var key in obj) if (obj.hasOwnProperty(key)) count++;
                }

            }

            return count;
        };
\t\t
\t\$(\"#search_1\").keyup(function(e) {   
\t\tvalor=this.value.toLowerCase();                                                                
\t\t\$('#miclasificacion').find('li').each(function(i,ele)
\t\t{\t\t\t
\t\t\tvar buscar=\" \"+\$.trim(\$(ele).text().toLowerCase());\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\tif(buscar.indexOf(valor)<1)
\t\t\t\t\$(\"#miclasificacion li:nth-child(\"+(i+1)+\")\").attr(\"style\",\"display:none\");
\t\t\telse 
\t\t\t\t\$(\"#miclasificacion li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t\tif(valor==\"\")\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\$(\"#miclasificacion li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t});
\t});\t
\t\$(\"#clasificacion_00\").change(function(e) {
\t\tvar uso=\$(this).val();
\t\tvar valor=this.value.toLowerCase();\t
\t\tche=\"\";
\t\tif(valor==\"xxx\")
\t\t{
\t\t\tvalor=\$(\"#clasificacion_00 option:nth-child(2)\").val();\t\t\t\t\t\t\t\t
\t\t\tindicadoresList(valor,\"che\",\"\");
\t\t\t\$(\"#clasificacion_11\").html(\"\");
\t\t}
\t\telse
\t\t{
\t\t\t\$(\"#miclasificacion\").html(\"\");
\t\t\t\$.ajax({
\t\t\t\turl: Routing.generate(\"clasificacionTecnica\",{'uso':uso,'ficha':\"x\"}),
\t\t\t\tdataType:\"json\",\t
\t\t\t\ttype: 'POST',
\t\t\t\terror: function() 
\t\t\t\t{
\t\t\t\t\t\$(\"#clasificacion_11\").html(li);
\t\t\t\t},
\t\t\t\tsuccess: function(result) 
\t\t\t\t{
\t\t\t\t\tvar li=\"<option value=''>Seleccione</option>\";
\t\t\t\t\tfor (i = 0; i < result.length; i++) 
\t\t\t\t\t{
\t\t\t\t\t\tli+='<option value=\"'+result[i].id+'\" >'+result[i].value+'</option>';
\t\t\t\t\t}
\t\t\t\t\t\$(\"#clasificacion_11\").html(li);\t\t\t\t
\t\t\t\t}
\t\t\t});
\t\t\tindicadoresList(valor,\"\",\"\");
\t\t}
\t});
\t\$(\"#clasificacion_11\").change(function(e) {\t\t
\t\tindicadoresList(\$(\"#clasificacion_00\").val(),\"\",\$(this).val());
\t});\t
\t
\t\$(\"#search_5\").keyup(function(e) {   
\t\tvalor=this.value.toLowerCase();                                                                
\t\t\$('#misalax3').find('li').each(function(i,ele)
\t\t{\t\t\t
\t\t\tvar buscar=\" \"+\$.trim(\$(ele).text().toLowerCase());\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\tif(buscar.indexOf(valor)<1)
\t\t\t\t\$(\"#misalax3 li:nth-child(\"+(i+1)+\")\").attr(\"style\",\"display:none\");
\t\t\telse 
\t\t\t\t\$(\"#misalax3 li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t\tif(valor==\"\")\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\$(\"#misalax3 li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t});
\t});\t\t
\t
\t\t\t\t\t\t\t\t
\t\$(\"#search_4\").keyup(function(e) {   
\t\tvalor=this.value.toLowerCase();                                                                
\t\t\$('#misalax2').find('li').each(function(i,ele)
\t\t{\t\t\t
\t\t\tvar buscar=\" \"+\$.trim(\$(ele).text().toLowerCase());\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\tif(buscar.indexOf(valor)<1)
\t\t\t\t\$(\"#misalax2 li:nth-child(\"+(i+1)+\")\").attr(\"style\",\"display:none\");
\t\t\telse 
\t\t\t\t\$(\"#misalax2 li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t\tif(valor==\"\")\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\$(\"#misalax2 li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t});
\t});\t
\t
\t\$(\"#search_3\").keyup(function(e) {   
\t\tvalor=this.value.toLowerCase();                                                                
\t\t\$('#misalax').find('li').each(function(i,ele)
\t\t{\t\t\t
\t\t\tvar buscar=\" \"+\$.trim(\$(ele).text().toLowerCase());\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\tif(buscar.indexOf(valor)<1)
\t\t\t\t\$(\"#misalax li:nth-child(\"+(i+1)+\")\").attr(\"style\",\"display:none\");
\t\t\telse 
\t\t\t\t\$(\"#misalax li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t\tif(valor==\"\")\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\$(\"#misalax li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t});
\t});\t
\t
\t\$(\"#search_2\").keyup(function(e) {   
\t\tvalor=this.value.toLowerCase();                                                                
\t\t\$('#listado-favoritos').find('li').each(function(i,ele)
\t\t{\t\t\t
\t\t\tvar buscar=\" \"+\$.trim(\$(ele).text().toLowerCase());\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\tif(buscar.indexOf(valor)<1)
\t\t\t\t\$(\"#listado-favoritos li:nth-child(\"+(i+1)+\")\").attr(\"style\",\"display:none\");
\t\t\telse 
\t\t\t\t\$(\"#listado-favoritos li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t\tif(valor==\"\")\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\$(\"#listado-favoritos li:nth-child(\"+(i+1)+\")\").removeAttr(\"style\");
\t\t});
\t});\t
\tfunction maximizar()
\t{\t
\t\tvar tam=((\$(window).width())-150)/3;
\t\tif(((\$(window).width())-120)<300)
\t\t\ttam=(\$(window).width());
\t\tif(tam<350&&tam>300)
\t\t\ttam=((\$(window).width())-150)/2;
\t\tif(tam>400)
\t\t\ttam=410;
\t\t
\t\tvar h1=tam/1.64;
\t\tvar h2=tam/1.07;
\t\t\t
\t\t//\$('.grafico').css({height:h1 , width: h2});
\t\t//\$('.area_grafico').css({height:tam , width: tam});
\t\t
\t\tvar windowH = \$(window).height();
\t\t\$('#listado-favoritos').css({'max-height':(\$(window).height()/2.5)+'px'});
\t\t\$('#listado-favoritos').css({'min-height':'70px'});
\t\t\$('#listado-favoritos').css({'overflow':'auto'});
\t\t
\t\t\$('#miclasificacion').css({'max-height':(\$(window).height()/2.5)+'px'});
\t\t\$('#miclasificacion').css({'min-height':'70px'});
\t\t\$('#miclasificacion').css({'overflow':'auto'});
\t\t
\t\t\$('#misalax').css({'max-height':(\$(window).height()/2.5)+'px'});
\t\t\$('#misalax').css({'min-height':'70px'});
\t\t\$('#misalax').css({'overflow':'auto'});
\t\t
\t\t\$('#misalax2').css({'max-height':(\$(window).height()/2.5)+'px'});
\t\t\$('#misalax2').css({'min-height':'70px'});
\t\t\$('#misalax2').css({'overflow':'auto'});
\t\t
\t\t\$('#misalax3').css({'max-height':(\$(window).height()/2.5)+'px'});
\t\t\$('#misalax3').css({'min-height':'70px'});
\t\t\$('#misalax3').css({'overflow':'auto'});
\t\t
\t\t\$('#acciones_sala').css({'max-height':(\$(window).height()/2.5)+'px'});
        \$('#acciones_sala').css({'min-height':'70px'});
        \$('#acciones_sala').css({'overflow':'auto'});

        \$('#content_mensajes').css({'max-height':(\$(window).height()/2.5)+'px'});
        \$('#content_mensajes').css({'min-height':'70px'});
        \$('#content_mensajes').css({'overflow':'auto'});
\t\t
\t}
\twindow.onresize=maximizar;
\twindow.onload=maximizar;
});
function openModalSala(sala,titulo,edit)
{
\t\$('#nombre_sala').attr('id-sala', sala);
\t\$('#nombre_sala').val(titulo);
\tif(edit==\"0\")
\t{
\t\t\$(\"#elimina_sala\").attr(\"data-id\",sala);
\t\t\$(\"#guardar_sala\").attr(\"style\",\"display:none\");
\t\t\$(\"#elimina_sala\").attr(\"style\",\"display:\");
\t}
\telse
\t{\t\t
\t\t\$(\"#guardar_sala\").attr(\"style\",\"display:\");
\t\t\$(\"#elimina_sala\").attr(\"style\",\"display:none\");
\t}
}
function indicadoresList(valor,che,ft)
{
\t\$(\"#miclasificacion\").html(\"\");
\t
\t\$.ajax({
\t\ttype: \"POST\",
\t\tdataType:\"JSON\",\t\t\t\t\t\t\t\t
\t\turl:(Routing.generate(\"change_clasificacion_uso\",{codigo_clasificacion:valor})),
\t\tdata:{ajax:\"ajax\",che:che,ft:ft},
\t\tsuccess: function(datos) 
\t\t{
\t\t\tvar li=\"\";
\t\t\tfor(var c=0;c<datos.length; c++)
\t\t\t{
\t\t\t\tli=li+'<li class=\"list-group-item\" style=\"height:100%; width:100%; display:block;\">'+
\t\t\t\t'<button type=\"button\" class=\"indicador pull-left btn\" style=\"margin-right:15px\" data-id=\"'+datos[c].id+'\"'+
\t\t\t\t'onclick=\"cargar_indicador('+datos[c].id+');\" id=\"'+datos[c].id+'\">'+
\t\t\t\t'<i class=\"glyphicon glyphicon-plus\"></i>'+
\t\t\t\t'</button>'+datos[c].nombre+'<div class=\"clearfix\"></div></li>';\t\t\t\t\t\t\t\t\t\t
\t\t\t}
\t\t\tif(li==\"\")
\t\t\t\tli=\"<div class='alert alert-warning col-lg-12'>No hay resultados</div>\";\t\t\t\t\t
\t\t\t\$(\"#miclasificacion\").append(li);
\t\t\tmarcar_agregados();
\t\t}
\t});
}
acciones_button();
</script>

{% endblock %}
", "IndicadoresBundle:FichaTecnicaAdmin:tablero.html.twig", "C:\\xampp\\htdocs\\etab-honuras-nuevo\\src\\MINSAL\\IndicadoresBundle/Resources/views/FichaTecnicaAdmin/tablero.html.twig");
    }
}
