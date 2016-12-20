<?php

/* IndicadoresBundle:FichaTecnicaAdmin:menu_tablero.html.twig */
class __TwigTemplate_7ad9662fa3e79648f2f37e1d1a1462f4e9e745273f33aaad003262f31570bcf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa4d4ed1ae80386e0de97b750539179a2fceb8c75642c219d1f487844aceb0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4d4ed1ae80386e0de97b750539179a2fceb8c75642c219d1f487844aceb0dc->enter($__internal_fa4d4ed1ae80386e0de97b750539179a2fceb8c75642c219d1f487844aceb0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicadoresBundle:FichaTecnicaAdmin:menu_tablero.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default navbar-fixed-top toolbar-tablero\" style=\"margin-top:50px; background:#FFFFFF\" role=\"navigation\">
    <div class=\"container-fluid\">
    \t<div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#collapseTwo\">
        <span class=\"sr-only\">Toggle navigation</span>
        <i class=\"glyphicon glyphicon-wrench\"></i>
      </button>
    </div>
        <div class=\"collapse navbar-collapse\" id=\"collapseTwo\">
            
\t    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio");
        echo "forn\" 
\t    style=\"background-color: Orange\"
\t    class=\"btn dropdown-toggle btn-primary navbar-btn\"  >
                <i class=\"glyphicon glyphicon-th-list\"></i> <span class=\"hidden-xs\">FormWeb Gestores</span>
            </a>

           <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio");
        echo "fornh\" 
\t\tstyle=\"background-color: Red\"
\t        class=\"btn dropdown-toggle btn-primary navbar-btn\"  >
                <i class=\"glyphicon glyphicon-th-list\"></i> <span class=\"hidden-xs\">FormWeb Hospitales</span>
            </a>
            
\t    <a href='#myModalSalas' class=\"btn dropdown-toggle btn-primary navbar-btn\" data-toggle=\"modal\" >
                <i class=\"glyphicon glyphicon-th-large\"></i> <span class=\"hidden-xs\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_sala_"), "html", null, true);
        echo "</span>
            </a>
            
            <a class=\"btn dropdown-toggle btn-success navbar-btn\" href=\"#myModalMenu\" data-toggle=\"modal\" id=\"mimodal\" >
                <i class=\"glyphicon glyphicon-flag\"></i> <span class=\"hidden-xs\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("indicadores"), "html", null, true);
        echo "</span>
            </a>
            
            <a href=\"#myModal\" data-toggle=\"modal\" class=\"btn btn-primary\" title=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_guardar_sala_"), "html", null, true);
        echo "\" id=\"_guardar_sala_\" style=\"display:none\">
                <i class=\"fa fa-save\"></i> <span class=\"hidden-xs\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_guardar_sala_"), "html", null, true);
        echo "</span>
            </a>
           
            <a href=\"#addAction\" data-toggle=\"modal\" class=\"btn btn-info\" title=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_sala_acciones_"), "html", null, true);
        echo "\" id=\"_sala_acciones_\" style=\"display:none\">
                <i class=\"fa fa-bookmark\"></i> <span class=\"hidden-xs\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_sala_acciones_"), "html", null, true);
        echo "</span>
            </a>

            <a href=\"#compartir\" data-toggle=\"modal\" class=\"btn btn-info\" title=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_compartir_sala_"), "html", null, true);
        echo "\" id=\"_compartir_sala_\" style=\"display:none\">
                <i class=\"fa fa-share\"></i> <span class=\"hidden-xs\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_compartir_sala_"), "html", null, true);
        echo "</span>
            </a>
            
            
            <div class=\"btn-group\" id=\"_exportar_datos_btn\" style=\"display:none;\">
                <button class=\"btn btn-info dropdown-toggle\" data-toggle=\"dropdown\" title=\"Opciones\">
                    <i class=\"glyphicon glyphicon-export\"></i> <span class=\"hidden-xs\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_exportar_datos_boton_"), "html", null, true);
        echo "</span> <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\" role=\"menu\">
                    <li>
                        <a href=\"#exportarDatos\" data-toggle=\"modal\" class=\"\" title=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_exportar_datos_"), "html", null, true);
        echo "\" id=\"_exportar_datos_\">
                            <i class=\"glyphicon glyphicon-export\"></i>  <span class=\"hidden-xs\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_exportar_datos_"), "html", null, true);
        echo "</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#exportarDiccionarioDatos\" data-toggle=\"modal\" class=\"\" title=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_exportar_diccionario_datos_"), "html", null, true);
        echo "\" id=\"_exportar_diccionario_datos_\">
                            <i class=\"glyphicon glyphicon-export\"></i>  <span class=\"hidden-xs\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_exportar_diccionario_datos_"), "html", null, true);
        echo "</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" onclick=\"imprimirSala()\" title=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_exportar_pdf_"), "html", null, true);
        echo "\" id=\"_exportar_pdf_\">
                            <i class=\"glyphicon glyphicon-export\"></i>  <span class=\"hidden-xs\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_exportar_pdf_"), "html", null, true);
        echo "</span>
                        </a>
                    </li>
                </ul>
            </div>
                        
            <a class=\"btn btn-warning\" title=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_cerrar_sala_"), "html", null, true);
        echo "\" id=\"_cerrar_sala_\" style=\"display:none\">
                <i class=\"fa fa-times\"></i> <span class=\"hidden-xs\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_cerrar_sala_"), "html", null, true);
        echo "</span>
            </a>
        </div>
    </div>
</nav>
";
        
        $__internal_fa4d4ed1ae80386e0de97b750539179a2fceb8c75642c219d1f487844aceb0dc->leave($__internal_fa4d4ed1ae80386e0de97b750539179a2fceb8c75642c219d1f487844aceb0dc_prof);

    }

    public function getTemplateName()
    {
        return "IndicadoresBundle:FichaTecnicaAdmin:menu_tablero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 68,  141 => 67,  132 => 61,  128 => 60,  121 => 56,  117 => 55,  110 => 51,  106 => 50,  99 => 46,  90 => 40,  86 => 39,  80 => 36,  76 => 35,  70 => 32,  66 => 31,  60 => 28,  53 => 24,  43 => 17,  34 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default navbar-fixed-top toolbar-tablero\" style=\"margin-top:50px; background:#FFFFFF\" role=\"navigation\">
    <div class=\"container-fluid\">
    \t<div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#collapseTwo\">
        <span class=\"sr-only\">Toggle navigation</span>
        <i class=\"glyphicon glyphicon-wrench\"></i>
      </button>
    </div>
        <div class=\"collapse navbar-collapse\" id=\"collapseTwo\">
            
\t    <a href=\"{{ path('_inicio') }}forn\" 
\t    style=\"background-color: Orange\"
\t    class=\"btn dropdown-toggle btn-primary navbar-btn\"  >
                <i class=\"glyphicon glyphicon-th-list\"></i> <span class=\"hidden-xs\">FormWeb Gestores</span>
            </a>

           <a href=\"{{ path('_inicio') }}fornh\" 
\t\tstyle=\"background-color: Red\"
\t        class=\"btn dropdown-toggle btn-primary navbar-btn\"  >
                <i class=\"glyphicon glyphicon-th-list\"></i> <span class=\"hidden-xs\">FormWeb Hospitales</span>
            </a>
            
\t    <a href='#myModalSalas' class=\"btn dropdown-toggle btn-primary navbar-btn\" data-toggle=\"modal\" >
                <i class=\"glyphicon glyphicon-th-large\"></i> <span class=\"hidden-xs\">{{'_sala_'|trans}}</span>
            </a>
            
            <a class=\"btn dropdown-toggle btn-success navbar-btn\" href=\"#myModalMenu\" data-toggle=\"modal\" id=\"mimodal\" >
                <i class=\"glyphicon glyphicon-flag\"></i> <span class=\"hidden-xs\">{{\"indicadores\"|trans}}</span>
            </a>
            
            <a href=\"#myModal\" data-toggle=\"modal\" class=\"btn btn-primary\" title=\"{{'_guardar_sala_'|trans}}\" id=\"_guardar_sala_\" style=\"display:none\">
                <i class=\"fa fa-save\"></i> <span class=\"hidden-xs\">{{\"_guardar_sala_\"|trans}}</span>
            </a>
           
            <a href=\"#addAction\" data-toggle=\"modal\" class=\"btn btn-info\" title=\"{{'_sala_acciones_'|trans}}\" id=\"_sala_acciones_\" style=\"display:none\">
                <i class=\"fa fa-bookmark\"></i> <span class=\"hidden-xs\">{{\"_sala_acciones_\"|trans}}</span>
            </a>

            <a href=\"#compartir\" data-toggle=\"modal\" class=\"btn btn-info\" title=\"{{'_compartir_sala_'|trans}}\" id=\"_compartir_sala_\" style=\"display:none\">
                <i class=\"fa fa-share\"></i> <span class=\"hidden-xs\">{{\"_compartir_sala_\"|trans}}</span>
            </a>
            
            
            <div class=\"btn-group\" id=\"_exportar_datos_btn\" style=\"display:none;\">
                <button class=\"btn btn-info dropdown-toggle\" data-toggle=\"dropdown\" title=\"Opciones\">
                    <i class=\"glyphicon glyphicon-export\"></i> <span class=\"hidden-xs\">{{\"_exportar_datos_boton_\"|trans}}</span> <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\" role=\"menu\">
                    <li>
                        <a href=\"#exportarDatos\" data-toggle=\"modal\" class=\"\" title=\"{{'_exportar_datos_'|trans}}\" id=\"_exportar_datos_\">
                            <i class=\"glyphicon glyphicon-export\"></i>  <span class=\"hidden-xs\">{{\"_exportar_datos_\"|trans}}</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#exportarDiccionarioDatos\" data-toggle=\"modal\" class=\"\" title=\"{{'_exportar_diccionario_datos_'|trans}}\" id=\"_exportar_diccionario_datos_\">
                            <i class=\"glyphicon glyphicon-export\"></i>  <span class=\"hidden-xs\">{{\"_exportar_diccionario_datos_\"|trans}}</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" onclick=\"imprimirSala()\" title=\"{{'_exportar_pdf_'|trans}}\" id=\"_exportar_pdf_\">
                            <i class=\"glyphicon glyphicon-export\"></i>  <span class=\"hidden-xs\">{{\"_exportar_pdf_\"|trans}}</span>
                        </a>
                    </li>
                </ul>
            </div>
                        
            <a class=\"btn btn-warning\" title=\"{{'_cerrar_sala_'|trans}}\" id=\"_cerrar_sala_\" style=\"display:none\">
                <i class=\"fa fa-times\"></i> <span class=\"hidden-xs\">{{\"_cerrar_sala_\"|trans}}</span>
            </a>
        </div>
    </div>
</nav>
", "IndicadoresBundle:FichaTecnicaAdmin:menu_tablero.html.twig", "C:\\xampp\\htdocs\\etab-honuras-nuevo\\src\\MINSAL\\IndicadoresBundle/Resources/views/FichaTecnicaAdmin/menu_tablero.html.twig");
    }
}
