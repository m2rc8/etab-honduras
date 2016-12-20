<?php

/* IndicadoresBundle::standard_layout_tablero.html.twig */
class __TwigTemplate_7abb1814a3a5fb88c8e60c0851d4092f3454c3ef80b77ba6b6d24188e77565d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'top_bar_before_nav' => array($this, 'block_top_bar_before_nav'),
            'sonata_top_bar_nav' => array($this, 'block_sonata_top_bar_nav'),
            'top_bar_after_nav' => array($this, 'block_top_bar_after_nav'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba9ce133e1c00aec4491a4962236698d134d81d8848fef4e2febe2d569c6e925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba9ce133e1c00aec4491a4962236698d134d81d8848fef4e2febe2d569c6e925->enter($__internal_ba9ce133e1c00aec4491a4962236698d134d81d8848fef4e2febe2d569c6e925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicadoresBundle::standard_layout_tablero.html.twig"));

        // line 10
        $context["_preview"] =         $this->renderBlock("preview", $context, $blocks);
        // line 11
        $context["_form"] =         $this->renderBlock("form", $context, $blocks);
        // line 12
        $context["_show"] =         $this->renderBlock("show", $context, $blocks);
        // line 13
        $context["_list_table"] =         $this->renderBlock("list_table", $context, $blocks);
        // line 14
        $context["_list_filters"] =         $this->renderBlock("list_filters", $context, $blocks);
        // line 15
        $context["_side_menu"] =         $this->renderBlock("side_menu", $context, $blocks);
        // line 16
        $context["_content"] =         $this->renderBlock("content", $context, $blocks);
        // line 17
        $context["_title"] =         $this->renderBlock("title", $context, $blocks);
        // line 18
        $context["_breadcrumb"] =         $this->renderBlock("breadcrumb", $context, $blocks);
        // line 19
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta http-equiv=\"cache-control\" content=\"max-age=0\" />
        <meta http-equiv=\"cache-control\" content=\"no-cache\" />
        <meta http-equiv=\"expires\" content=\"0\" />
        <meta http-equiv=\"expires\" content=\"Tue, 01 Jan 1980 1:00:00 GMT\" />
        <meta http-equiv=\"pragma\" content=\"no-cache\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1\">

        ";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 48
        echo "
        ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "
        <title>
            eTAB
            ";
        // line 119
        echo "        </title>
    </head>
    <body class=\"sonata-bc ";
        // line 121
        if (twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu")))) {
            echo "sonata-ba-no-side-menu";
        }
        echo "\" style=\"margin-top:50px;\">
        ";
        // line 123
        echo "
<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" style=\"z-index:9999999\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#collapseOne\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" id=\"dashboard\" href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio", array("page" => "_inicio"));
        echo "\">
      <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/images/logo.png"), "html", null, true);
        echo "\" style=\"margin-top:-7px; height:34px;\" /> 
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"collapseOne\">
      <ul class=\"nav navbar-nav\">
      <!-- inicio menu -->
      ";
        // line 143
        if (array_key_exists("admin_pool", $context)) {
            // line 144
            echo "\t  ";
            $context["a"] = 0;
            // line 145
            echo "           <!--USUARIO ESTABLECIMIENTO -->
           ";
            // line 146
            $context["ab"] = 0;
            // line 147
            echo "            <!--FIN USUARIO ESTABLECIMIENTO -->
      ";
            // line 149
            echo "        ";
            $this->displayBlock('top_bar_before_nav', $context, $blocks);
            // line 150
            echo "        ";
            $this->displayBlock('sonata_top_bar_nav', $context, $blocks);
            // line 239
            echo "        ";
            $this->displayBlock('top_bar_after_nav', $context, $blocks);
            // line 240
            echo "      ";
        }
        // line 241
        echo "            
        <!-- fin menu -->
      </ul>
      <!-- usuario logueado -->
      ";
        // line 245
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != "")) {
            // line 246
            echo "      <ul class=\"nav navbar-nav navbar-right\">
      ";
            // line 247
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 248
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 249
                    echo "      ";
                    if (($this->getAttribute($context["admin"], "hasroute", array(0 => "tablero"), "method") && ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER_TABLERO")))) {
                        // line 250
                        echo "       <!-- <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "tablero"), "method"), "html", null, true);
                        echo "\"><i class=\"glyphicon glyphicon-dashboard\"></i> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("indicador_tablero"), "html", null, true);
                        echo "</a></li> -->
       <input type=\"hidden\" value=\"";
                        // line 251
                        echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "tablero"), "method"), "html", null, true);
                        echo "\" id=\"tablero\"> 
\t  ";
                    }
                    // line 253
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 254
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\"></span> ";
            // line 256
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><A href='";
            // line 258
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_user_admin_security_logout");
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cerrar_sesion"), "html", null, true);
            echo "</A></li>
            <li><A href='";
            // line 259
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_change_password");
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_cambiar_clave_"), "html", null, true);
            echo "</A></li>
            <li class=\"divider\"></li>
            ";
            // line 261
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 262
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 263
                    echo "              ";
                    if (($this->getAttribute($context["admin"], "hasroute", array(0 => "tablero"), "method") && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
                        // line 264
                        echo "               <!-- <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "tablero"), "method"), "html", null, true);
                        echo "\"><i class=\"glyphicon glyphicon-dashboard\"></i> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("indicador_tablero"), "html", null, true);
                        echo "</a></li> --> 
               <li><a href=\"";
                        // line 265
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/manuales/Manual-Tecnico.pdf"), "html", null, true);
                        echo "\" target=\"_blank\"><i class=\"glyphicon glyphicon-book\"></i> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("manual_tecnico"), "html", null, true);
                        echo "</a></li>
               <li><a href=\"";
                        // line 266
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/manuales/Manual-Operativo.pdf"), "html", null, true);
                        echo "\" target=\"_blank\"><i class=\"glyphicon glyphicon-book\"></i> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("manual_operativo"), "html", null, true);
                        echo "</a></li>
               <li><a href=\"";
                        // line 267
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/manuales/Manual-Usuario.pdf"), "html", null, true);
                        echo "\" target=\"_blank\"><i class=\"glyphicon glyphicon-book\"></i> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("manual_usuario"), "html", null, true);
                        echo "</a></li>
               <input type=\"hidden\" value=\"";
                        // line 268
                        echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "tablero"), "method"), "html", null, true);
                        echo "\" id=\"tablero\">     
              ";
                    }
                    // line 270
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 271
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/manuales/Manual-Tablero.pdf"), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"glyphicon glyphicon-book\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("manual_tablero"), "html", null, true);
            echo "</a></li>
            <li class=\"divider\"></li>
            ";
            // line 274
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(array("es_SV" => "Español", "en_US" => "English"));
            foreach ($context['_seq'] as $context["locale"] => $context["lenguaje"]) {
                // line 275
                echo "                ";
                if (($context["locale"] == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()))) {
                    // line 276
                    echo "                    <li class='active'><A href='#'>";
                    echo twig_escape_filter($this->env, $context["lenguaje"], "html", null, true);
                    echo "</a></li>
                ";
                } else {
                    // line 278
                    echo "                    <li ><a href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("change_locale", array("_locale" => $context["locale"])), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, $context["lenguaje"], "html", null, true);
                    echo "</a></li>
                ";
                }
                // line 280
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['lenguaje'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 281
            echo "          </ul>
        </li>
      </ul>
      ";
        }
        // line 285
        echo "      
      <!-- fin usuario logueado -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <!-- fin menu -->
                

    
           
                <div id=\"div_carga\" class='affix'>
                    <div id=\"cargador\"><span class=\"glyphicon glyphicon-refresh glyphicon-refresh-animate\"></span></div>
                </div>
                ";
        // line 298
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 303
        echo "           

            ";
        // line 305
        $this->displayBlock('footer', $context, $blocks);
        // line 314
        echo "       
    </body>
</html>";
        
        $__internal_ba9ce133e1c00aec4491a4962236698d134d81d8848fef4e2febe2d569c6e925->leave($__internal_ba9ce133e1c00aec4491a4962236698d134d81d8848fef4e2febe2d569c6e925_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86080f9cf8e7bfbc345a7ac7f24b17e0fd8caacd2c96382440f586c0ae3cd704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86080f9cf8e7bfbc345a7ac7f24b17e0fd8caacd2c96382440f586c0ae3cd704->enter($__internal_86080f9cf8e7bfbc345a7ac7f24b17e0fd8caacd2c96382440f586c0ae3cd704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 32
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/jquery/jquery-ui/css/flick/jquery-ui-1.10.3.custom.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <!-- css de eTAB -->
            <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"  />
            <!-- base application asset -->
            
            <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/css/custom_layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/css/ionicons.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/css/ajaxloader.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />            
        
\t\t\t<link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataadmin/vendor/select2/select2.css"), "html", null, true);
        echo "\"  />
            <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataadmin/vendor/select2/select2-bootstrap.css"), "html", null, true);
        echo "\"  />        
        ";
        
        $__internal_86080f9cf8e7bfbc345a7ac7f24b17e0fd8caacd2c96382440f586c0ae3cd704->leave($__internal_86080f9cf8e7bfbc345a7ac7f24b17e0fd8caacd2c96382440f586c0ae3cd704_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aefab76e1f7ddfecafcc6a2da0abdd036e7256441857a8efeb4e7ebed8b72f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aefab76e1f7ddfecafcc6a2da0abdd036e7256441857a8efeb4e7ebed8b72f4d->enter($__internal_aefab76e1f7ddfecafcc6a2da0abdd036e7256441857a8efeb4e7ebed8b72f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/jquery/jquery-2.0.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\">
                window.SONATA_CONFIG = 
                {
                    CONFIRM_EXIT: ";
        // line 54
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 55
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_ICHECK: ";
        // line 56
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_icheck"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 57
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT: '";
        // line 59
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                };          
               
               var sSwfPath = \"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/DataTables/media/swf/copy_csv_xls_pdf.swf"), "html", null, true);
        echo "\";
            
      \$(document).ready(function() {
        \$(\".icon-ok-circle\").attr(\"class\",\"glyphicon glyphicon-ok-circle\");
        \$(\".icon-ban-circle\").attr(\"class\",\"glyphicon glyphicon-ban-circle\");
        \$(\".alert-error\").attr(\"class\",\"alert alert-danger\");
        
      });
      </script>
            <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataadmin/vendor/select2/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            ";
        // line 72
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 73
        echo "            ";
        // line 74
        echo "            ";
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            echo "             
                ";
            // line 75
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 76
            echo "
                ";
            // line 78
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 79
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 81
            echo "            ";
        }
        // line 82
        echo "            
            
            <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/jquery/jquery-ui/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            ";
        // line 89
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataadmin/jquery/jquery.confirmExit.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>";
        }
        // line 90
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/base.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
      <script>
      \$(document).ready(function(e) {
                \$(\"#dashboard\").attr(\"href\",\$(\"#tablero\").val());
            });
      </script>
            ";
        // line 99
        $this->loadTemplate(twig_join_filter(array(0 => "IndicadoresBundle::messages_js.html.twig")), "IndicadoresBundle::standard_layout_tablero.html.twig", 99)->display($context);
        // line 100
        echo "        ";
        
        $__internal_aefab76e1f7ddfecafcc6a2da0abdd036e7256441857a8efeb4e7ebed8b72f4d->leave($__internal_aefab76e1f7ddfecafcc6a2da0abdd036e7256441857a8efeb4e7ebed8b72f4d_prof);

    }

    // line 149
    public function block_top_bar_before_nav($context, array $blocks = array())
    {
        $__internal_5781c1b60f5c2079c1feb9de289515e8aa1c733ecc8af433aa8a5e96dfce945a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5781c1b60f5c2079c1feb9de289515e8aa1c733ecc8af433aa8a5e96dfce945a->enter($__internal_5781c1b60f5c2079c1feb9de289515e8aa1c733ecc8af433aa8a5e96dfce945a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_bar_before_nav"));

        echo " ";
        
        $__internal_5781c1b60f5c2079c1feb9de289515e8aa1c733ecc8af433aa8a5e96dfce945a->leave($__internal_5781c1b60f5c2079c1feb9de289515e8aa1c733ecc8af433aa8a5e96dfce945a_prof);

    }

    // line 150
    public function block_sonata_top_bar_nav($context, array $blocks = array())
    {
        $__internal_c746f0ccfa335d80c5a2d6a9c0c5bb4633c42b163cd14142b6c1e0a1c8aad740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c746f0ccfa335d80c5a2d6a9c0c5bb4633c42b163cd14142b6c1e0a1c8aad740->enter($__internal_c746f0ccfa335d80c5a2d6a9c0c5bb4633c42b163cd14142b6c1e0a1c8aad740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_bar_nav"));

        // line 151
        echo "            ";
        // line 152
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array())) {
            // line 153
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 154
                echo "
                    ";
                // line 155
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
                // line 156
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                        // line 157
                        echo "                        ";
                        $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                        // line 158
                        echo "                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "                    
                    ";
                // line 161
                echo "                    ";
                $context["item_count"] = 0;
                // line 162
                echo "                    ";
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 163
                    echo "                        
                        ";
                    // line 164
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                            // line 165
                            echo "                            ";
                            if (((($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method")) || ($this->getAttribute(                            // line 166
$context["admin"], "hasroute", array(0 => "tablero"), "method") && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER_TABLERO"))) || ($this->getAttribute(                            // line 167
$context["admin"], "hasroute", array(0 => "cubos"), "method") && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER_CUBOS")))) {
                                // line 169
                                echo "                                ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                                // line 170
                                echo "                                <!-- USUARIO ESTABLECIMIENTO -->
                                ";
                                // line 171
                                $context["ab"] = ((isset($context["ab"]) ? $context["ab"] : $this->getContext($context, "ab")) + 1);
                                // line 172
                                echo "                                 <!--FIN USUARIO ESTABLECIMIENTO -->
                            ";
                            }
                            // line 174
                            echo "                        ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 175
                    echo "                    ";
                }
                // line 176
                echo "                           
                    ";
                // line 177
                if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                    // line 178
                    echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 179
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group"], "label", array())), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                            <!--USUARIO ESTABLECIMIENTO-->
                            ";
                    // line 182
                    if ((((isset($context["ab"]) ? $context["ab"] : $this->getContext($context, "ab")) == 1) && ($this->getAttribute($context["group"], "label", array()) == "catalogos"))) {
                        // line 183
                        echo "                                <li><a href=\"";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_ue");
                        echo "\">Usuarios Establecimiento</a></li>
                            ";
                    }
                    // line 185
                    echo "                            <!--FIN USUARIO ESTABLECIMIENTO -->
                                ";
                    // line 186
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 187
                        echo "                                   
                                    ";
                        // line 188
                        if (($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method"))) {
                            // line 189
                            echo "                                        <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["admin"], "label", array())), "html", null, true);
                            echo "</a></li>
                                        
                                    ";
                        }
                        // line 192
                        echo "                                    ";
                        if (($this->getAttribute($context["admin"], "hasroute", array(0 => "tablero"), "method") && ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER_TABLERO")))) {
                            // line 193
                            echo "                                    \t  
                                        <li><a href=\"";
                            // line 194
                            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "tablero"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("indicador_tablero"), "html", null, true);
                            echo "</a></li>
                                    ";
                        }
                        // line 196
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                        // line 197
                        if (($this->getAttribute($context["admin"], "hasroute", array(0 => "pivotTable"), "method") && ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER_PIVOT_TABLE")))) {
                            // line 198
                            echo "                                          
                                        <li><a href=\"";
                            // line 199
                            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "pivotTable"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_tabla_pivote_"), "html", null, true);
                            echo "</a></li>
                                    ";
                        }
                        // line 201
                        echo "\t\t\t\t\t\t\t\t\t
                                    ";
                        // line 207
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 208
                    echo "                                 
                            </ul>
                        </li>
                    ";
                }
                // line 212
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Captura de datos<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                    <li><a href=\"";
            // line 216
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio");
            echo "forn\">FormWeb Gestores</a></li>
                    <li><a href=\"";
            // line 217
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio");
            echo "fornh\">FormWeb Hospitales</a></li>
 \t\t    <li><a href=\"";
            // line 218
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio");
            echo "fornd\">FormWeb Gestores Habilitar</a></li> 
 \t\t    <li><a href=\"";
            // line 219
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio");
            echo "forndh\">FormWeb Hospitales Habilitar</a></li>    
</ul>
                    </li>
                     <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Reportes<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 225
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio");
            echo "reporte\">Reporte - Gestores Variables</a></li>
\t\t\t    <li><a href=\"";
            // line 226
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio");
            echo "reporteh\">Reporte - Hospitales Variables</a></li>
<li><a href=\"";
            // line 227
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio");
            echo "matriz\">Mapa de Calor</a></li>
\t\t\t\t <li><a href=\"";
            // line 228
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio");
            echo "matrizdos\">Matriz de Seguimiento</a></li>
<li><a href=\"";
            // line 229
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio");
            echo "matriztres\">Matriz de Seguimiento Final</a></li>




                        </ul>
                    </li>

            ";
        }
        // line 238
        echo "        ";
        
        $__internal_c746f0ccfa335d80c5a2d6a9c0c5bb4633c42b163cd14142b6c1e0a1c8aad740->leave($__internal_c746f0ccfa335d80c5a2d6a9c0c5bb4633c42b163cd14142b6c1e0a1c8aad740_prof);

    }

    // line 239
    public function block_top_bar_after_nav($context, array $blocks = array())
    {
        $__internal_4a21b77de69856795666e4c6dccdd12b9a73a175e6da416d0ca2c8f25ba1fa0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a21b77de69856795666e4c6dccdd12b9a73a175e6da416d0ca2c8f25ba1fa0f->enter($__internal_4a21b77de69856795666e4c6dccdd12b9a73a175e6da416d0ca2c8f25ba1fa0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_bar_after_nav"));

        echo " ";
        
        $__internal_4a21b77de69856795666e4c6dccdd12b9a73a175e6da416d0ca2c8f25ba1fa0f->leave($__internal_4a21b77de69856795666e4c6dccdd12b9a73a175e6da416d0ca2c8f25ba1fa0f_prof);

    }

    // line 298
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_2bb744f8f2efbec0f5f4f6b9f4de97a88226d4738f4a884567328b3d54a7a7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb744f8f2efbec0f5f4f6b9f4de97a88226d4738f4a884567328b3d54a7a7e2->enter($__internal_2bb744f8f2efbec0f5f4f6b9f4de97a88226d4738f4a884567328b3d54a7a7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 299
        echo "                    ";
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 300
            echo "                        ";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "
                    ";
        }
        // line 302
        echo "                ";
        
        $__internal_2bb744f8f2efbec0f5f4f6b9f4de97a88226d4738f4a884567328b3d54a7a7e2->leave($__internal_2bb744f8f2efbec0f5f4f6b9f4de97a88226d4738f4a884567328b3d54a7a7e2_prof);

    }

    // line 305
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1cdff6508d6c30ed0f768beb0fe8effbef995461928cd594f7c3a59fc77e982b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cdff6508d6c30ed0f768beb0fe8effbef995461928cd594f7c3a59fc77e982b->enter($__internal_1cdff6508d6c30ed0f768beb0fe8effbef995461928cd594f7c3a59fc77e982b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 306
        echo "                <div class=\"container-fluid\"><hr>
                \t<div style=\"text-align:right\">
                    \t<img src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/images/LogoInstitucional.png"), "html", null, true);
        echo "\" height=\"30px\" /> 
                        <img src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/images/EscudoGobiernoChiapas.png"), "html", null, true);
        echo "\" height=\"30px\" /> 
                        <img src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/images/Marca.png"), "html", null, true);
        echo "\" height=\"30px\" /> 
                    </div>        
                </div>
            ";
        
        $__internal_1cdff6508d6c30ed0f768beb0fe8effbef995461928cd594f7c3a59fc77e982b->leave($__internal_1cdff6508d6c30ed0f768beb0fe8effbef995461928cd594f7c3a59fc77e982b_prof);

    }

    public function getTemplateName()
    {
        return "IndicadoresBundle::standard_layout_tablero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  829 => 310,  825 => 309,  821 => 308,  817 => 306,  811 => 305,  804 => 302,  798 => 300,  795 => 299,  789 => 298,  777 => 239,  770 => 238,  758 => 229,  754 => 228,  750 => 227,  746 => 226,  742 => 225,  733 => 219,  729 => 218,  725 => 217,  721 => 216,  716 => 213,  710 => 212,  704 => 208,  698 => 207,  695 => 201,  688 => 199,  685 => 198,  683 => 197,  680 => 196,  673 => 194,  670 => 193,  667 => 192,  658 => 189,  656 => 188,  653 => 187,  649 => 186,  646 => 185,  640 => 183,  638 => 182,  632 => 179,  629 => 178,  627 => 177,  624 => 176,  621 => 175,  614 => 174,  610 => 172,  608 => 171,  605 => 170,  602 => 169,  600 => 167,  599 => 166,  597 => 165,  592 => 164,  589 => 163,  586 => 162,  583 => 161,  580 => 159,  573 => 158,  570 => 157,  564 => 156,  562 => 155,  559 => 154,  554 => 153,  551 => 152,  549 => 151,  543 => 150,  531 => 149,  524 => 100,  522 => 99,  513 => 93,  509 => 92,  503 => 90,  497 => 89,  493 => 88,  488 => 86,  483 => 84,  479 => 82,  476 => 81,  470 => 79,  467 => 78,  464 => 76,  460 => 75,  455 => 74,  453 => 73,  451 => 72,  447 => 71,  435 => 62,  429 => 59,  425 => 57,  419 => 56,  411 => 55,  403 => 54,  395 => 50,  389 => 49,  380 => 46,  376 => 45,  371 => 43,  367 => 42,  363 => 41,  359 => 40,  355 => 39,  351 => 38,  345 => 35,  340 => 33,  337 => 32,  331 => 31,  322 => 314,  320 => 305,  316 => 303,  314 => 298,  299 => 285,  293 => 281,  287 => 280,  279 => 278,  273 => 276,  270 => 275,  266 => 274,  258 => 272,  252 => 271,  246 => 270,  241 => 268,  235 => 267,  229 => 266,  223 => 265,  216 => 264,  213 => 263,  208 => 262,  204 => 261,  197 => 259,  191 => 258,  186 => 256,  183 => 255,  177 => 254,  171 => 253,  166 => 251,  159 => 250,  156 => 249,  151 => 248,  147 => 247,  144 => 246,  142 => 245,  136 => 241,  133 => 240,  130 => 239,  127 => 150,  124 => 149,  121 => 147,  119 => 146,  116 => 145,  113 => 144,  111 => 143,  100 => 135,  96 => 134,  83 => 123,  77 => 121,  73 => 119,  68 => 101,  66 => 49,  63 => 48,  61 => 31,  47 => 19,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  37 => 14,  35 => 13,  33 => 12,  31 => 11,  29 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% set _preview      = block('preview') %}
{% set _form         = block('form') %}
{% set _show         = block('show') %}
{% set _list_table   = block('list_table') %}
{% set _list_filters = block('list_filters') %}
{% set _side_menu    = block('side_menu') %}
{% set _content      = block('content') %}
{% set _title        = block('title') %}
{% set _breadcrumb   = block('breadcrumb') %}
<!DOCTYPE html>
<html class=\"no-js\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta http-equiv=\"cache-control\" content=\"max-age=0\" />
        <meta http-equiv=\"cache-control\" content=\"no-cache\" />
        <meta http-equiv=\"expires\" content=\"0\" />
        <meta http-equiv=\"expires\" content=\"Tue, 01 Jan 1980 1:00:00 GMT\" />
        <meta http-equiv=\"pragma\" content=\"no-cache\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1\">

        {% block stylesheets %}
            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/indicadores/js/jquery/jquery-ui/css/flick/jquery-ui-1.10.3.custom.min.css') }}\" type=\"text/css\" media=\"all\" />
            <!-- css de eTAB -->
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/indicadores/js/bootstrap/css/bootstrap.min.css') }}\" type=\"text/css\" media=\"all\"  />
            <!-- base application asset -->
            
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/sonataadmin/css/layout.css') }}\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/sonataadmin/css/colors.css') }}\" type=\"text/css\" media=\"all\" />
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('bundles/indicadores/css/custom_layout.css') }}\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/indicadores/css/ionicons.min.css') }}\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/indicadores/css/font-awesome.min.css') }}\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/indicadores/css/ajaxloader.css') }}\" type=\"text/css\" media=\"all\" />            
        
\t\t\t<link rel=\"stylesheet\" type=\"text/css\"  href=\"{{ asset('bundles/sonataadmin/vendor/select2/select2.css') }}\"  />
            <link rel=\"stylesheet\" type=\"text/css\"  href=\"{{ asset('bundles/sonataadmin/vendor/select2/select2-bootstrap.css') }}\"  />        
        {% endblock %}

        {% block javascripts %}
        <script src=\"{{ asset('bundles/indicadores/js/jquery/jquery-2.0.3.min.js') }}\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\">
                window.SONATA_CONFIG = 
                {
                    CONFIRM_EXIT: {% if admin_pool is defined and admin_pool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                    USE_SELECT2: {% if admin_pool is defined and admin_pool.getOption('use_select2') %}true{% else %}false{% endif %},
                    USE_ICHECK: {% if admin_pool is defined and admin_pool.getOption('use_icheck') %}true{% else %}false{% endif %}
                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT: '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                };          
               
               var sSwfPath = \"{{ asset('bundles/indicadores/js/DataTables/media/swf/copy_csv_xls_pdf.swf') }}\";
            
      \$(document).ready(function() {
        \$(\".icon-ok-circle\").attr(\"class\",\"glyphicon glyphicon-ok-circle\");
        \$(\".icon-ban-circle\").attr(\"class\",\"glyphicon glyphicon-ban-circle\");
        \$(\".alert-error\").attr(\"class\",\"alert alert-danger\");
        
      });
      </script>
            <script src=\"{{ asset('bundles/sonataadmin/vendor/select2/select2.min.js') }}\" type=\"text/javascript\"></script>
            {% set locale = app.request.locale %}
            {# localize select2 #}
            {% if admin_pool is defined and admin_pool.getOption('use_select2') %}             
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
            
            
            <script src=\"{{ asset('bundles/indicadores/js/jquery/jquery-ui/js/jquery-ui-1.10.3.custom.min.js') }}\" type=\"text/javascript\"></script>

            <script src=\"{{ asset('bundles/indicadores/js/bootstrap/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>

            <script src=\"{{ asset('bundles/sonataadmin/jquery/jquery.form.js') }}\" type=\"text/javascript\"></script>
            {% if admin_pool is defined and admin_pool.getOption('confirm_exit') %}<script src=\"{{ asset('bundles/sonataadmin/jquery/jquery.confirmExit.js') }}\" type=\"text/javascript\"></script>{% endif %}
            <script src=\"{{ asset('bundles/indicadores/js/base.js') }}\" type=\"text/javascript\"></script>

            <script type=\"text/javascript\" src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}\"></script>
      <script>
      \$(document).ready(function(e) {
                \$(\"#dashboard\").attr(\"href\",\$(\"#tablero\").val());
            });
      </script>
            {% include (['IndicadoresBundle::messages_js.html.twig']|join) %}
        {% endblock %}

        <title>
            eTAB
            {#{{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in admin.breadcrumbs(action) %}
                        {% if not loop.first  %}
                            &gt;
                        {% endif %}
                        {{ menu.label }}
                    {% endfor %}
                {% endif %}
            {% endif%}#}
        </title>
    </head>
    <body class=\"sonata-bc {% if _side_menu is empty %}sonata-ba-no-side-menu{% endif %}\" style=\"margin-top:50px;\">
        {# initialize block value #}

<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" style=\"z-index:9999999\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#collapseOne\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" id=\"dashboard\" href=\"{{ path('_inicio', {'page': '_inicio'}) }}\">
      <img src=\"{{ asset('bundles/indicadores/images/logo.png') }}\" style=\"margin-top:-7px; height:34px;\" /> 
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"collapseOne\">
      <ul class=\"nav navbar-nav\">
      <!-- inicio menu -->
      {% if admin_pool is defined %}
\t  {% set a = 0 %}
           <!--USUARIO ESTABLECIMIENTO -->
           {% set ab = 0 %}
            <!--FIN USUARIO ESTABLECIMIENTO -->
      {# MENU PRINCIPAL #}
        {% block top_bar_before_nav %} {% endblock %}
        {% block sonata_top_bar_nav %}
            {#{% if app.security.token and is_granted('ROLE_SONATA_ADMIN') %}#}
            {% if app.security.token  %}
                {% for group in admin_pool.dashboardgroups %}

                    {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
                    {% for role in group.roles if not display %}
                        {% set display = is_granted(role)%}
                    {% endfor %}
                    
                    {# Do not display the group label if no item in group is available #}
                    {% set item_count = 0 %}
                    {% if display %}
                        
                        {% for admin in group.items if item_count == 0 %}
                            {% if admin.hasroute('list') and admin.isGranted('LIST') 
                                or (admin.hasroute('tablero') and is_granted('ROLE_USER_TABLERO'))
                                or (admin.hasroute('cubos') and is_granted('ROLE_USER_CUBOS'))
                            %}
                                {% set item_count = item_count+1 %}
                                <!-- USUARIO ESTABLECIMIENTO -->
                                {% set ab = ab+1 %}
                                 <!--FIN USUARIO ESTABLECIMIENTO -->
                            {% endif %}
                        {% endfor %}
                    {% endif %}
                           
                    {% if display and (item_count > 0) %}
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ group.label|trans }} <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                            <!--USUARIO ESTABLECIMIENTO-->
                            {% if ab==1  and group.label  == 'catalogos'%}
                                <li><a href=\"{{ path('_ue') }}\">Usuarios Establecimiento</a></li>
                            {% endif %}
                            <!--FIN USUARIO ESTABLECIMIENTO -->
                                {% for admin in group.items %}
                                   
                                    {% if admin.hasroute('list') and admin.isGranted('LIST') %}
                                        <li><a href=\"{{ admin.generateUrl('list')}}\">{{ admin.label|trans }}</a></li>
                                        
                                    {% endif %}
                                    {% if admin.hasroute('tablero') and (is_granted('ROLE_SONATA_ADMIN') or is_granted('ROLE_USER_TABLERO')) %}
                                    \t  
                                        <li><a href=\"{{ admin.generateUrl('tablero')}}\">{{ 'indicador_tablero'|trans }}</a></li>
                                    {% endif %}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% if admin.hasroute('pivotTable') and (is_granted('ROLE_SONATA_ADMIN') or is_granted('ROLE_USER_PIVOT_TABLE')) %}
                                          
                                        <li><a href=\"{{ admin.generateUrl('pivotTable')}}\">{{ '_tabla_pivote_'|trans }}</a></li>
                                    {% endif %}
\t\t\t\t\t\t\t\t\t
                                    {# Se oculta cubos
                                    {% if admin.hasroute('cubos') and (is_granted('ROLE_SONATA_ADMIN') or is_granted('ROLE_USER_CUBOS')) %}
                                        <li><a href=\"{{ admin.generateUrl('cubos')}}\">{{ '_cubos_'|trans }}</a></li>
                                    {% endif %}
                                    #}
                                {% endfor %}
                                 
                            </ul>
                        </li>
                    {% endif %}
                {% endfor %}
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Captura de datos<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                    <li><a href=\"{{ path('_inicio') }}forn\">FormWeb Gestores</a></li>
                    <li><a href=\"{{ path('_inicio') }}fornh\">FormWeb Hospitales</a></li>
 \t\t    <li><a href=\"{{ path('_inicio') }}fornd\">FormWeb Gestores Habilitar</a></li> 
 \t\t    <li><a href=\"{{ path('_inicio') }}forndh\">FormWeb Hospitales Habilitar</a></li>    
</ul>
                    </li>
                     <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Reportes<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{ path('_inicio') }}reporte\">Reporte - Gestores Variables</a></li>
\t\t\t    <li><a href=\"{{ path('_inicio') }}reporteh\">Reporte - Hospitales Variables</a></li>
<li><a href=\"{{ path('_inicio') }}matriz\">Mapa de Calor</a></li>
\t\t\t\t <li><a href=\"{{ path('_inicio') }}matrizdos\">Matriz de Seguimiento</a></li>
<li><a href=\"{{ path('_inicio') }}matriztres\">Matriz de Seguimiento Final</a></li>




                        </ul>
                    </li>

            {% endif %}
        {% endblock %}
        {% block top_bar_after_nav %} {% endblock %}
      {% endif %}
            
        <!-- fin menu -->
      </ul>
      <!-- usuario logueado -->
      {% if app.user != '' %}
      <ul class=\"nav navbar-nav navbar-right\">
      {% for group in admin_pool.dashboardgroups %}
      {% for admin in group.items %}
      {% if admin.hasroute('tablero') and (is_granted('ROLE_SONATA_ADMIN') or is_granted('ROLE_USER_TABLERO')) %}
       <!-- <li><a href=\"{{ admin.generateUrl('tablero')}}\"><i class=\"glyphicon glyphicon-dashboard\"></i> {{ 'indicador_tablero'|trans }}</a></li> -->
       <input type=\"hidden\" value=\"{{ admin.generateUrl('tablero')}}\" id=\"tablero\"> 
\t  {% endif %}
      {% endfor %}
      {% endfor %}
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\"></span> {{app.user}} <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><A href='{{url('sonata_user_admin_security_logout')}}'>{{\"cerrar_sesion\"|trans}}</A></li>
            <li><A href='{{url('fos_user_change_password')}}'>{{\"_cambiar_clave_\"|trans}}</A></li>
            <li class=\"divider\"></li>
            {% for group in admin_pool.dashboardgroups %}
              {% for admin in group.items %}
              {% if admin.hasroute('tablero') and (is_granted('ROLE_SONATA_ADMIN') ) %}
               <!-- <li><a href=\"{{ admin.generateUrl('tablero')}}\"><i class=\"glyphicon glyphicon-dashboard\"></i> {{ 'indicador_tablero'|trans }}</a></li> --> 
               <li><a href=\"{{ asset('bundles/indicadores/manuales/Manual-Tecnico.pdf') }}\" target=\"_blank\"><i class=\"glyphicon glyphicon-book\"></i> {{ 'manual_tecnico'|trans }}</a></li>
               <li><a href=\"{{ asset('bundles/indicadores/manuales/Manual-Operativo.pdf') }}\" target=\"_blank\"><i class=\"glyphicon glyphicon-book\"></i> {{ 'manual_operativo'|trans }}</a></li>
               <li><a href=\"{{ asset('bundles/indicadores/manuales/Manual-Usuario.pdf') }}\" target=\"_blank\"><i class=\"glyphicon glyphicon-book\"></i> {{ 'manual_usuario'|trans }}</a></li>
               <input type=\"hidden\" value=\"{{ admin.generateUrl('tablero')}}\" id=\"tablero\">     
              {% endif %}
              {% endfor %}
      {% endfor %}
            <li><a href=\"{{ asset('bundles/indicadores/manuales/Manual-Tablero.pdf') }}\" target=\"_blank\"><i class=\"glyphicon glyphicon-book\"></i> {{ 'manual_tablero'|trans }}</a></li>
            <li class=\"divider\"></li>
            {% for locale, lenguaje in {'es_SV':'Español', 'en_US':'English'} %}
                {% if locale == app.request.locale %}
                    <li class='active'><A href='#'>{{lenguaje}}</a></li>
                {% else %}
                    <li ><a href='{{url('change_locale',{_locale:locale})}}'>{{lenguaje}}</a></li>
                {% endif %}
            {% endfor %}
          </ul>
        </li>
      </ul>
      {% endif %}
      
      <!-- fin usuario logueado -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <!-- fin menu -->
                

    
           
                <div id=\"div_carga\" class='affix'>
                    <div id=\"cargador\"><span class=\"glyphicon glyphicon-refresh glyphicon-refresh-animate\"></span></div>
                </div>
                {% block sonata_admin_content %}
                    {% if _content is not empty %}
                        {{ _content|raw }}
                    {% endif %}
                {% endblock %}
           

            {% block footer %}
                <div class=\"container-fluid\"><hr>
                \t<div style=\"text-align:right\">
                    \t<img src=\"{{ asset('bundles/indicadores/images/LogoInstitucional.png') }}\" height=\"30px\" /> 
                        <img src=\"{{ asset('bundles/indicadores/images/EscudoGobiernoChiapas.png') }}\" height=\"30px\" /> 
                        <img src=\"{{ asset('bundles/indicadores/images/Marca.png') }}\" height=\"30px\" /> 
                    </div>        
                </div>
            {% endblock %}
       
    </body>
</html>", "IndicadoresBundle::standard_layout_tablero.html.twig", "C:\\xampp\\htdocs\\etab-honuras-nuevo\\src\\MINSAL\\IndicadoresBundle/Resources/views/standard_layout_tablero.html.twig");
    }
}
