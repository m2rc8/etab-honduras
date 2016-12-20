<?php

/* IndicadoresBundle:FichaTecnicaAdmin:pivotTable.html.twig */
class __TwigTemplate_181032bf88b20501105054fd28396794f1a22050ef665568505c80f89a2eafeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("IndicadoresBundle::standard_layout.html.twig", "IndicadoresBundle:FichaTecnicaAdmin:pivotTable.html.twig", 3);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IndicadoresBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a4c72c26ff8fd2ee4a959548517136860d41f4b0f808d4418fb6a96169e1213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a4c72c26ff8fd2ee4a959548517136860d41f4b0f808d4418fb6a96169e1213->enter($__internal_2a4c72c26ff8fd2ee4a959548517136860d41f4b0f808d4418fb6a96169e1213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicadoresBundle:FichaTecnicaAdmin:pivotTable.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a4c72c26ff8fd2ee4a959548517136860d41f4b0f808d4418fb6a96169e1213->leave($__internal_2a4c72c26ff8fd2ee4a959548517136860d41f4b0f808d4418fb6a96169e1213_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_912d8ca09b736c2c6fe61b462a396e4f4641160d09036f6e02eb36335a8c30f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912d8ca09b736c2c6fe61b462a396e4f4641160d09036f6e02eb36335a8c30f2->enter($__internal_912d8ca09b736c2c6fe61b462a396e4f4641160d09036f6e02eb36335a8c30f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/pivotTable/pivot.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />    
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/css/FichaTecnicaAdmin/pivotTable.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />    
\t
";
        
        $__internal_912d8ca09b736c2c6fe61b462a396e4f4641160d09036f6e02eb36335a8c30f2->leave($__internal_912d8ca09b736c2c6fe61b462a396e4f4641160d09036f6e02eb36335a8c30f2_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec0a140c25dd944e867595036fb0ff715e741b5af42726245270e0811bd4bb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0a140c25dd944e867595036fb0ff715e741b5af42726245270e0811bd4bb6c->enter($__internal_ec0a140c25dd944e867595036fb0ff715e741b5af42726245270e0811bd4bb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/FichaTecnicaAdmin/pivotTable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/pivotTable/pivot.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/pivotTable/pivot.es.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/pivotTable/gcharts_renderers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/rasterizeHTML.allinone.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/jquery.searchFilter.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
<style>
.ui-autocomplete { max-height: 200px; overflow:visible; z-index:999999999}

.modal-dialog {
    color: #000;
    padding: 0px;
\tbox-shadow: 0px;
    background: transparent;
    background-clip: padding-box;
    border: 0px solid #acacac;
    border: 0px solid rgba(0,0,0,.333);
    outline: 0;
    position: static;    
}
.modal-dialog .tab-content .col-lg-12
{
 \tmax-height:300px; 
 \toverflow: auto;
}
</style>
";
        
        $__internal_ec0a140c25dd944e867595036fb0ff715e741b5af42726245270e0811bd4bb6c->leave($__internal_ec0a140c25dd944e867595036fb0ff715e741b5af42726245270e0811bd4bb6c_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_1f751ae6161959a4ef10ef125dc0b99649106b3b917ff18552d57a632ee6e438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f751ae6161959a4ef10ef125dc0b99649106b3b917ff18552d57a632ee6e438->enter($__internal_1f751ae6161959a4ef10ef125dc0b99649106b3b917ff18552d57a632ee6e438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 43
        echo "<div id=\"div_carga\" class='affix' style=\"z-index:999999999;\">
    <img id=\"cargador\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/images/ajax-loader.gif"), "html", null, true);
        echo "\"/>
</div>
<nav class=\"navbar navbar-default navbar-fixed-top toolbar-tablero\" style=\"margin-top:50px; background:#FFFFFF\" role=\"navigation\">
    <div class=\"container-fluid\">
    \t<div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#collapseTwo\">
        <span class=\"sr-only\">Toggle navigation</span>
        <i class=\"glyphicon glyphicon-wrench\"></i>
      </button>
    </div>
        <div class=\"collapse navbar-collapse\" id=\"collapseTwo\">
            <a class=\"btn dropdown-toggle btn-success navbar-btn\" href=\"#myModalMenu\" data-toggle=\"modal\" id=\"mimodal\" >
                <i class=\"glyphicon glyphicon-flag\"></i> <span class=\"hidden-xs\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("indicadores"), "html", null, true);
        echo "</span>
            </a> 
            <span id=\"opcion_exportar\" style=\"display:none\">
            <button id='export' class=\"btn btn-info\" title=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_exportar_tabla_datos_"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-list-alt\"></span></button>            
            <button id='ver_ficha' class=\"btn btn-info\" title=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ver_ficha_tecnica"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-briefcase\"></span> </button>  
            <button id='export_grp' class=\"btn btn-primary\" title=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_exportar_grafico_"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-picture\"></span> </button> 
            </span>                    
        </div>
    </div>
</nav>
<div class=\"container-fluid\" id=\"contenedor_tablero\">
    <div class=\"row\" id=\"titulo_header\" style=\"display:none\">
    \t<div class=\"col-md-12\">
\t    <div class=\"page-header\" style=\"padding:1px; margin-top: 35px;\"><h1 id=\"header_sala\"></h1></div> 
        </div>
    </div>

\t<div class=\"content tab-pane active\" id=\"output\"></div>
</div>
<div class=\"content tab-pane\" id=\"tab1\" >            
    <div id=\"output\" ></div>
</div>
<a id=\"dlink\" style=\"display:none;\"></a>
<!-- Modal Menu-->  
<div id=\"myModalMenu\" class=\"modal fade\" style=\"z-index:99999999;\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</button>
            <h4 class=\"modal-tilte\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_Titulo_indicador"), "html", null, true);
        echo " </h4>
        </div>
        <div class=\"modal-body\">
        
            <ul class=\"nav nav-tabs\">
                <li class=\"active\">
                <a href=\"#s53beb59d6d27d_1\" data-toggle=\"tab\">
                <i class=\"glyphicon glyphicon-exclamation-sign has-errors hide\" data-original-title=\"\" title=\"\"></i>
                ";
        // line 93
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
        // line 100
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
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("clasificacion_uso-eTAB"), "html", null, true);
        echo "
                            </label>
                            <select class=\"form-control\" id=\"clasificacion_00\">
                            <option value=\"xxx\">
                                ";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_no_clasificados_"), "html", null, true);
        echo " (<span id='cantidad_no_clasificados'>";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["indicadores_no_clasificados"]) ? $context["indicadores_no_clasificados"] : $this->getContext($context, "indicadores_no_clasificados"))), "html", null, true);
        echo ")
                            </option>
                            ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clasificacionUso"]) ? $context["clasificacionUso"] : $this->getContext($context, "clasificacionUso")));
        foreach ($context['_seq'] as $context["_key"] => $context["clasificacion"]) {
            // line 117
            echo "                                ";
            if (($this->getAttribute($context["clasificacion"], "codigo", array()) == (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "clasificacionUso", array(), "any", false, true), "codigo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "clasificacionUso", array(), "any", false, true), "codigo", array()), "")) : ("")))) {
                // line 118
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["clasificacion"], "id", array()), "html", null, true);
                echo "\">
                                     ";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["clasificacion"], "descripcion", array()), "html", null, true);
                echo "
                                    ";
                // line 120
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
                foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                    // line 121
                    echo "                                        ";
                    if (((twig_length_filter($this->env, $this->getAttribute($context["categoria"], "indicadores", array())) > 0) && ($this->getAttribute($this->getAttribute($context["categoria"], "cat", array()), "descripcion", array()) == $this->getAttribute($context["clasificacion"], "descripcion", array())))) {
                        // line 122
                        echo "                                            (";
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["categoria"], "indicadores", array())), "html", null, true);
                        echo ")
                                        ";
                    }
                    // line 124
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "                                </option>
                                ";
            } else {
                // line 127
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["clasificacion"], "id", array()), "html", null, true);
                echo "\" >
                                    ";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["clasificacion"], "descripcion", array()), "html", null, true);
                echo "                                        
                                </option>
                                ";
            }
            // line 131
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clasificacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                           </select>
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <div class=\"form-group\">
                            <label for=\"s53beb59d6d27d_establecimiento\">
                            ";
        // line 138
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
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["indicadores_no_clasificados"]) ? $context["indicadores_no_clasificados"] : $this->getContext($context, "indicadores_no_clasificados")));
        foreach ($context['_seq'] as $context["_key"] => $context["indicador"]) {
            // line 157
            echo "                            
                                <li class='list-group-item'
                                     style=\"height:100%; min-height:55px; width:100%; display:block;\">
                                    <a class=\"indicador pull-left btn btn-default\" style=\"margin-right:15px\" data-id='";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "id", array()), "html", null, true);
            echo "' data-name='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "nombre", array()), "html", null, true);
            echo "'
                                    data-unidad-medida='";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "unidadMedida", array()), "html", null, true);
            echo "' id='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "id", array()), "html", null, true);
            echo "'>
                                    <i class=\"glyphicon glyphicon-ok\"></i>
                                    </a>
                                    ";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "nombre", array()), "html", null, true);
            echo "  <div class=\"clearfix\"></div>                                  
                                </li>
                            
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indicador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
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
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "favoritos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["indicador"]) {
            // line 182
            echo "                            \t
                            \t<li class='list-group-item'
                                     style=\"height:100%; min-height:55px; width:100%; display:block;\">
                                     <a class=\"indicador pull-left btn btn-default\" style=\"margin-right:15px\" data-id='";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "id", array()), "html", null, true);
            echo "' data-name='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "nombre", array()), "html", null, true);
            echo "'
                                    data-unidad-medida='";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "unidadMedida", array()), "html", null, true);
            echo "' id='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "id", array()), "html", null, true);
            echo "'>
                                    <i class=\"glyphicon glyphicon-ok\"></i>
                                    </a>
                                    ";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "nombre", array()), "html", null, true);
            echo "
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indicador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "                        </ul>
                    </div>
                </div>
            </div>
        <!-- fin body -->        
    \t</div>
        <div class=\"modal-footer\" style=\"margin-top:-20px\">
            <button class=\"btn btn-warning\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_cerrar_"), "html", null, true);
        echo "</button>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id=\"myModal2\" class=\"modal fade\" style=\"z-index:99999999;\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel2\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h3 id=\"myModalLabel2\"></h3>
            </div>

            <div class=\"modal-body\">
                <span class='info' id='sql'></span>
            </div>

            <div class=\"modal-footer\">
                <button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_cerrar_"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>

<div id=\"fichaTecnica\" class=\"modal fade\" style=\"z-index:99999999;\" aria-labelledby=\"fichaTecnicaTitle\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content span12\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h4 id=\"fichaTecnicaTitle\"></h4>
            </div>

            <div class=\"modal-body\">
                <span class='info' id='fichaTecnicaContent'></span>
            </div>

            <div class=\"modal-footer\">
                <button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_cerrar_"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>    
<script>
\$(document).ready(function(){
\t\t\t\t\t\t\t\t
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
\t
\t\$('body').on('click','a.indicador',function() {
        var id_indicador = \$(this).attr('id');
        var nombre_indicador = \$(this).attr('data-name');
        var derivers = \$.pivotUtilities.derivers;
        
        delete \$.pivotUtilities.renderers['Heatmap'] ;
        delete \$.pivotUtilities.renderers['Row Heatmap'];
        delete \$.pivotUtilities.renderers['Col Heatmap'];
        
        var renderers = \$.extend(\$.pivotUtilities.renderers,
                \$.pivotUtilities.gchart_renderers);
        \$('#myModalMenu').modal('hide');
        \$.getJSON(Routing.generate('get_datos_indicador', {id: id_indicador}), function(mps) {
            \$(\"#output\").pivotUI(mps, {
                renderers: renderers
            });                    

            \$(\"#titulo_header\").attr(\"style\",\"display:\");
            \$('#header_sala').html('<span class=\"glyphicon glyphicon-flag\"></span> ' + nombre_indicador );            
        });
    });
});

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
\t\t\t\tli=li+'<li class=\"list-group-item\" style=\"height:100%; min-height:55px; width:100%; display:block;\">'+
\t\t\t\t'<a class=\"indicador pull-left btn btn-default\" style=\"margin-right:15px\" data-id=\"'+datos[c].id+'\"'+
\t\t\t\t'id=\"'+datos[c].id+'\" data-name=\"'+datos[c].nombre+'\" data-unidad-medida = \"'+datos[c].unidadMedida+'\"'+
                'onclick=\"cargar_indicador('+datos[c].id+',\\''+datos[c].nombre+'\\')\">'+
\t\t\t\t'<i class=\"glyphicon glyphicon-ok\"></i>'+
\t\t\t\t'</a>'+datos[c].nombre+'<div class=\"clearfix\"></div></li>';\t\t\t\t\t\t\t\t\t\t
\t\t\t}
\t\t\tif(li==\"\")
\t\t\t\tli=\"<div class='alert alert-warning col-lg-12'>No hay resultados</div>\";\t\t\t\t\t
\t\t\t\$(\"#miclasificacion\").append(li);
\t\t}
\t});
}
</script>
";
        
        $__internal_1f751ae6161959a4ef10ef125dc0b99649106b3b917ff18552d57a632ee6e438->leave($__internal_1f751ae6161959a4ef10ef125dc0b99649106b3b917ff18552d57a632ee6e438_prof);

    }

    public function getTemplateName()
    {
        return "IndicadoresBundle:FichaTecnicaAdmin:pivotTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 237,  436 => 218,  414 => 199,  405 => 192,  396 => 189,  388 => 186,  382 => 185,  377 => 182,  373 => 181,  358 => 168,  348 => 164,  340 => 161,  334 => 160,  329 => 157,  325 => 156,  304 => 138,  296 => 132,  290 => 131,  284 => 128,  279 => 127,  275 => 125,  269 => 124,  263 => 122,  260 => 121,  256 => 120,  252 => 119,  247 => 118,  244 => 117,  240 => 116,  233 => 114,  226 => 110,  211 => 100,  199 => 93,  188 => 85,  161 => 61,  157 => 60,  153 => 59,  147 => 56,  132 => 44,  129 => 43,  123 => 42,  93 => 18,  89 => 17,  85 => 16,  81 => 15,  77 => 14,  73 => 13,  67 => 11,  61 => 10,  51 => 7,  47 => 6,  42 => 5,  36 => 4,  11 => 3,);
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

{% extends 'IndicadoresBundle::standard_layout.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/indicadores/js/pivotTable/pivot.css') }}\" type=\"text/css\" media=\"all\" />    
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/indicadores/css/FichaTecnicaAdmin/pivotTable.css') }}\" type=\"text/css\" media=\"all\" />    
\t
{% endblock %}        
{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
    <script src=\"{{ asset('bundles/indicadores/js/FichaTecnicaAdmin/pivotTable.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/indicadores/js/pivotTable/pivot.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/indicadores/js/pivotTable/pivot.es.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/indicadores/js/pivotTable/gcharts_renderers.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/indicadores/js/rasterizeHTML.allinone.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/indicadores/js/jquery.searchFilter.js') }}\" type=\"text/javascript\"></script>
\t
<style>
.ui-autocomplete { max-height: 200px; overflow:visible; z-index:999999999}

.modal-dialog {
    color: #000;
    padding: 0px;
\tbox-shadow: 0px;
    background: transparent;
    background-clip: padding-box;
    border: 0px solid #acacac;
    border: 0px solid rgba(0,0,0,.333);
    outline: 0;
    position: static;    
}
.modal-dialog .tab-content .col-lg-12
{
 \tmax-height:300px; 
 \toverflow: auto;
}
</style>
{% endblock %}

{% block content %}
<div id=\"div_carga\" class='affix' style=\"z-index:999999999;\">
    <img id=\"cargador\" src=\"{{ asset('bundles/indicadores/images/ajax-loader.gif') }}\"/>
</div>
<nav class=\"navbar navbar-default navbar-fixed-top toolbar-tablero\" style=\"margin-top:50px; background:#FFFFFF\" role=\"navigation\">
    <div class=\"container-fluid\">
    \t<div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#collapseTwo\">
        <span class=\"sr-only\">Toggle navigation</span>
        <i class=\"glyphicon glyphicon-wrench\"></i>
      </button>
    </div>
        <div class=\"collapse navbar-collapse\" id=\"collapseTwo\">
            <a class=\"btn dropdown-toggle btn-success navbar-btn\" href=\"#myModalMenu\" data-toggle=\"modal\" id=\"mimodal\" >
                <i class=\"glyphicon glyphicon-flag\"></i> <span class=\"hidden-xs\">{{\"indicadores\"|trans}}</span>
            </a> 
            <span id=\"opcion_exportar\" style=\"display:none\">
            <button id='export' class=\"btn btn-info\" title=\"{{'_exportar_tabla_datos_'|trans}}\"><span class=\"glyphicon glyphicon-list-alt\"></span></button>            
            <button id='ver_ficha' class=\"btn btn-info\" title=\"{{'ver_ficha_tecnica'|trans}}\"><span class=\"glyphicon glyphicon-briefcase\"></span> </button>  
            <button id='export_grp' class=\"btn btn-primary\" title=\"{{'_exportar_grafico_'|trans}}\"><span class=\"glyphicon glyphicon-picture\"></span> </button> 
            </span>                    
        </div>
    </div>
</nav>
<div class=\"container-fluid\" id=\"contenedor_tablero\">
    <div class=\"row\" id=\"titulo_header\" style=\"display:none\">
    \t<div class=\"col-md-12\">
\t    <div class=\"page-header\" style=\"padding:1px; margin-top: 35px;\"><h1 id=\"header_sala\"></h1></div> 
        </div>
    </div>

\t<div class=\"content tab-pane active\" id=\"output\"></div>
</div>
<div class=\"content tab-pane\" id=\"tab1\" >            
    <div id=\"output\" ></div>
</div>
<a id=\"dlink\" style=\"display:none;\"></a>
<!-- Modal Menu-->  
<div id=\"myModalMenu\" class=\"modal fade\" style=\"z-index:99999999;\">
  <div class=\"modal-dialog modal-lg\">
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
                                     style=\"height:100%; min-height:55px; width:100%; display:block;\">
                                    <a class=\"indicador pull-left btn btn-default\" style=\"margin-right:15px\" data-id='{{indicador.id}}' data-name='{{indicador.nombre}}'
                                    data-unidad-medida='{{indicador.unidadMedida}}' id='{{indicador.id}}'>
                                    <i class=\"glyphicon glyphicon-ok\"></i>
                                    </a>
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
                                     style=\"height:100%; min-height:55px; width:100%; display:block;\">
                                     <a class=\"indicador pull-left btn btn-default\" style=\"margin-right:15px\" data-id='{{indicador.id}}' data-name='{{indicador.nombre}}'
                                    data-unidad-medida='{{indicador.unidadMedida}}' id='{{indicador.id}}'>
                                    <i class=\"glyphicon glyphicon-ok\"></i>
                                    </a>
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

<div id=\"myModal2\" class=\"modal fade\" style=\"z-index:99999999;\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel2\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h3 id=\"myModalLabel2\"></h3>
            </div>

            <div class=\"modal-body\">
                <span class='info' id='sql'></span>
            </div>

            <div class=\"modal-footer\">
                <button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">{{'_cerrar_'|trans}}</button>
            </div>
        </div>
    </div>
</div>

<div id=\"fichaTecnica\" class=\"modal fade\" style=\"z-index:99999999;\" aria-labelledby=\"fichaTecnicaTitle\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content span12\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h4 id=\"fichaTecnicaTitle\"></h4>
            </div>

            <div class=\"modal-body\">
                <span class='info' id='fichaTecnicaContent'></span>
            </div>

            <div class=\"modal-footer\">
                <button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">{{'_cerrar_'|trans}}</button>
            </div>
        </div>
    </div>
</div>    
<script>
\$(document).ready(function(){
\t\t\t\t\t\t\t\t
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
\t
\t\$('body').on('click','a.indicador',function() {
        var id_indicador = \$(this).attr('id');
        var nombre_indicador = \$(this).attr('data-name');
        var derivers = \$.pivotUtilities.derivers;
        
        delete \$.pivotUtilities.renderers['Heatmap'] ;
        delete \$.pivotUtilities.renderers['Row Heatmap'];
        delete \$.pivotUtilities.renderers['Col Heatmap'];
        
        var renderers = \$.extend(\$.pivotUtilities.renderers,
                \$.pivotUtilities.gchart_renderers);
        \$('#myModalMenu').modal('hide');
        \$.getJSON(Routing.generate('get_datos_indicador', {id: id_indicador}), function(mps) {
            \$(\"#output\").pivotUI(mps, {
                renderers: renderers
            });                    

            \$(\"#titulo_header\").attr(\"style\",\"display:\");
            \$('#header_sala').html('<span class=\"glyphicon glyphicon-flag\"></span> ' + nombre_indicador );            
        });
    });
});

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
\t\t\t\tli=li+'<li class=\"list-group-item\" style=\"height:100%; min-height:55px; width:100%; display:block;\">'+
\t\t\t\t'<a class=\"indicador pull-left btn btn-default\" style=\"margin-right:15px\" data-id=\"'+datos[c].id+'\"'+
\t\t\t\t'id=\"'+datos[c].id+'\" data-name=\"'+datos[c].nombre+'\" data-unidad-medida = \"'+datos[c].unidadMedida+'\"'+
                'onclick=\"cargar_indicador('+datos[c].id+',\\''+datos[c].nombre+'\\')\">'+
\t\t\t\t'<i class=\"glyphicon glyphicon-ok\"></i>'+
\t\t\t\t'</a>'+datos[c].nombre+'<div class=\"clearfix\"></div></li>';\t\t\t\t\t\t\t\t\t\t
\t\t\t}
\t\t\tif(li==\"\")
\t\t\t\tli=\"<div class='alert alert-warning col-lg-12'>No hay resultados</div>\";\t\t\t\t\t
\t\t\t\$(\"#miclasificacion\").append(li);
\t\t}
\t});
}
</script>
{% endblock %}
", "IndicadoresBundle:FichaTecnicaAdmin:pivotTable.html.twig", "C:\\xampp\\htdocs\\etab-honuras-nuevo\\src\\MINSAL\\IndicadoresBundle/Resources/views/FichaTecnicaAdmin/pivotTable.html.twig");
    }
}
