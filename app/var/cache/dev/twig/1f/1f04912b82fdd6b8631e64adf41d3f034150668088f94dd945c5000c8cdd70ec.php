<?php

/* IndicadoresBundle::standard_layout.html.twig */
class __TwigTemplate_3a4ea0860a00c2c078703ac2862f8984b945714338ba415b8f5fbd0e919c40a3 extends Twig_Template
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
            'notice' => array($this, 'block_notice'),
            'actions' => array($this, 'block_actions'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6805389e8e0fbdccac926e4dd0cbe8e10e2c610d1069cabc4e99f7391d08b7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6805389e8e0fbdccac926e4dd0cbe8e10e2c610d1069cabc4e99f7391d08b7dc->enter($__internal_6805389e8e0fbdccac926e4dd0cbe8e10e2c610d1069cabc4e99f7391d08b7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicadoresBundle::standard_layout.html.twig"));

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
    
    <link rel=\"apple-touch-icon\"                 href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/images/logo.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\"   href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/images/logo.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/images/logo.png"), "html", null, true);
        echo "\">
    
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

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
        echo "\" style=\"margin-top:-7px; height:34px;\"/> 
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
            // line 229
            echo "        ";
            $this->displayBlock('top_bar_after_nav', $context, $blocks);
            // line 230
            echo "      ";
        }
        // line 231
        echo "        <!-- fin menu -->
      </ul>
      <!-- usuario logueado -->
      ";
        // line 234
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != "")) {
            // line 235
            echo "      <ul class=\"nav navbar-nav navbar-right\">
      ";
            // line 236
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 237
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 238
                    echo "      ";
                    if (($this->getAttribute($context["admin"], "hasroute", array(0 => "tablero"), "method") && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
                        // line 239
                        echo "       <!-- <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "tablero"), "method"), "html", null, true);
                        echo "\"><i class=\"glyphicon glyphicon-dashboard\"></i> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("indicador_tablero"), "html", null, true);
                        echo "</a></li> --> 
       <input type=\"hidden\" value=\"";
                        // line 240
                        echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "tablero"), "method"), "html", null, true);
                        echo "\" id=\"tablero\">     
\t  ";
                    }
                    // line 242
                    echo "\t  
\t  ";
                    // line 243
                    if (($this->getAttribute($context["admin"], "hasroute", array(0 => "pivotTable"), "method") && ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER_PIVOT_TABLE")))) {
                        // line 244
                        echo "                                          
\t\t\t<li><a href=\"";
                        // line 245
                        echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "pivotTable"), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_tabla_pivote_"), "html", null, true);
                        echo "</a></li>
\t\t";
                    }
                    // line 247
                    echo "      
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 249
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\"></span> ";
            // line 251
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><A href='";
            // line 253
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_user_admin_security_logout");
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cerrar_sesion"), "html", null, true);
            echo "</A></li>
            <li><A href='";
            // line 254
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_change_password");
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_cambiar_clave_"), "html", null, true);
            echo "</A></li>
            <li class=\"divider\"></li>
            ";
            // line 256
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 257
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 258
                    echo "              ";
                    if (($this->getAttribute($context["admin"], "hasroute", array(0 => "tablero"), "method") && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
                        // line 259
                        echo "               <!-- <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "tablero"), "method"), "html", null, true);
                        echo "\"><i class=\"glyphicon glyphicon-dashboard\"></i> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("indicador_tablero"), "html", null, true);
                        echo "</a></li> --> 
               <li><a href=\"";
                        // line 260
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/manuales/Manual-Tecnico.pdf"), "html", null, true);
                        echo "\" target=\"_blank\"><i class=\"glyphicon glyphicon-book\"></i> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("manual_tecnico"), "html", null, true);
                        echo "</a></li>
               <li><a href=\"";
                        // line 261
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/manuales/Manual-Operativo.pdf"), "html", null, true);
                        echo "\" target=\"_blank\"><i class=\"glyphicon glyphicon-book\"></i> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("manual_operativo"), "html", null, true);
                        echo "</a></li>
               <li><a href=\"";
                        // line 262
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/manuales/Manual-Usuario.pdf"), "html", null, true);
                        echo "\" target=\"_blank\"><i class=\"glyphicon glyphicon-book\"></i> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("manual_usuario"), "html", null, true);
                        echo "</a></li>
               <input type=\"hidden\" value=\"";
                        // line 263
                        echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "tablero"), "method"), "html", null, true);
                        echo "\" id=\"tablero\">     
              ";
                    }
                    // line 265
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 266
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/manuales/Manual-Tablero.pdf"), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"glyphicon glyphicon-book\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("manual_tablero"), "html", null, true);
            echo "</a></li>
            <li class=\"divider\"></li>
            ";
            // line 269
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(array("es_SV" => "Español", "en_US" => "English"));
            foreach ($context['_seq'] as $context["locale"] => $context["lenguaje"]) {
                // line 270
                echo "                ";
                if (($context["locale"] == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()))) {
                    // line 271
                    echo "                    <li class='active'><A href='#'>";
                    echo twig_escape_filter($this->env, $context["lenguaje"], "html", null, true);
                    echo "</a></li>
                ";
                } else {
                    // line 273
                    echo "                    <li ><a href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("change_locale", array("_locale" => $context["locale"])), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, $context["lenguaje"], "html", null, true);
                    echo "</a></li>
                ";
                }
                // line 275
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['lenguaje'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            echo "          </ul>
        </li>
      </ul>
      ";
        }
        // line 280
        echo "      
      <!-- fin usuario logueado -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <!-- fin menu -->
        <div class=\"container-fluid\" style=\"margin-top:53px\">
            ";
        // line 287
        $this->displayBlock('notice', $context, $blocks);
        // line 302
        echo "            <div class=\"row\" id='tool_actions'>
                <div class=\"col-md-6\">
                    ";
        // line 304
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 305
            echo "                        <ol class=\"breadcrumb\">.
                            ";
            // line 306
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 307
                echo "                                ";
                if (array_key_exists("action", $context)) {
                    // line 308
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 309
                        echo "                                        ";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 310
                            echo "                                            ";
                            if ((($this->getAttribute($context["menu"], "label", array()) == "Dashboard") || ($this->getAttribute($context["menu"], "label", array()) == "⌂"))) {
                                // line 311
                                echo "                                                <li><a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\"><i class=\"glyphicon glyphicon-home\"></i></a><span class=\"divider\">/</span></li>
                                            ";
                            } else {
                                // line 313
                                echo "                                                <li><a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["menu"], "label", array())), "html", null, true);
                                echo "</a><span class=\"divider\">/</span></li>
                                            ";
                            }
                            // line 315
                            echo "                                        ";
                        } else {
                            // line 316
                            echo "                                            <li class=\"active\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                            echo "</li>
                                        ";
                        }
                        // line 318
                        echo "                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 319
                    echo "                                ";
                }
                // line 320
                echo "                            ";
            } else {
                // line 321
                echo "                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                            ";
            }
            // line 323
            echo "                        </ol>
                    ";
        }
        // line 325
        echo "                </div>

           \t \t<div style=\"float: right\">
                    ";
        // line 328
        $this->displayBlock('actions', $context, $blocks);
        // line 329
        echo "                </div>
            </div>
\t\t\t
            <div class=\"form-group\">
                ";
        // line 333
        if ( !twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu")))) {
            // line 334
            echo "                    <div class=\"sidebar col-md-2\">
                        <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">";
            // line 335
            echo (isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu"));
            echo "</div>
                    </div>
                ";
        }
        // line 338
        echo "
    
                <div class=\"content ";
        // line 340
        echo (( !twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu")))) ? (" col-md-10") : ("col-md-12"));
        echo "\">
                <div id=\"div_carga\" class='affix'>
                    <div id=\"cargador\"><span class=\"glyphicon glyphicon-refresh glyphicon-refresh-animate\"></span></div>
                </div>
                ";
        // line 344
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 374
        echo "                </div>
                </div>

            ";
        // line 377
        $this->displayBlock('footer', $context, $blocks);
        // line 386
        echo "        </div>
    </body>
</html>";
        
        $__internal_6805389e8e0fbdccac926e4dd0cbe8e10e2c610d1069cabc4e99f7391d08b7dc->leave($__internal_6805389e8e0fbdccac926e4dd0cbe8e10e2c610d1069cabc4e99f7391d08b7dc_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a8f62ef8ae203032e3bcc2febd21d8baf976840a5b7ce456edf3c107a8dab23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f62ef8ae203032e3bcc2febd21d8baf976840a5b7ce456edf3c107a8dab23a->enter($__internal_a8f62ef8ae203032e3bcc2febd21d8baf976840a5b7ce456edf3c107a8dab23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo "\"  />\t\t\t
        ";
        
        $__internal_a8f62ef8ae203032e3bcc2febd21d8baf976840a5b7ce456edf3c107a8dab23a->leave($__internal_a8f62ef8ae203032e3bcc2febd21d8baf976840a5b7ce456edf3c107a8dab23a_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81002ab44840acf69eb193f32a956d6a5420f64a0cc7bfaae82aa16dfd6073b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81002ab44840acf69eb193f32a956d6a5420f64a0cc7bfaae82aa16dfd6073b2->enter($__internal_81002ab44840acf69eb193f32a956d6a5420f64a0cc7bfaae82aa16dfd6073b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        $this->loadTemplate(twig_join_filter(array(0 => "IndicadoresBundle::messages_js.html.twig")), "IndicadoresBundle::standard_layout.html.twig", 99)->display($context);
        // line 100
        echo "        ";
        
        $__internal_81002ab44840acf69eb193f32a956d6a5420f64a0cc7bfaae82aa16dfd6073b2->leave($__internal_81002ab44840acf69eb193f32a956d6a5420f64a0cc7bfaae82aa16dfd6073b2_prof);

    }

    // line 149
    public function block_top_bar_before_nav($context, array $blocks = array())
    {
        $__internal_9a78bff6eaba536ec00bbc6d936fe4bd9c81c869d9e40f1c7a27aa1afb5344e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a78bff6eaba536ec00bbc6d936fe4bd9c81c869d9e40f1c7a27aa1afb5344e9->enter($__internal_9a78bff6eaba536ec00bbc6d936fe4bd9c81c869d9e40f1c7a27aa1afb5344e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_bar_before_nav"));

        echo " ";
        
        $__internal_9a78bff6eaba536ec00bbc6d936fe4bd9c81c869d9e40f1c7a27aa1afb5344e9->leave($__internal_9a78bff6eaba536ec00bbc6d936fe4bd9c81c869d9e40f1c7a27aa1afb5344e9_prof);

    }

    // line 150
    public function block_sonata_top_bar_nav($context, array $blocks = array())
    {
        $__internal_9dde9a9f980d895338e10dc382b2f3855efd52ed6331b8e344d8446a2dc00387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dde9a9f980d895338e10dc382b2f3855efd52ed6331b8e344d8446a2dc00387->enter($__internal_9dde9a9f980d895338e10dc382b2f3855efd52ed6331b8e344d8446a2dc00387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_bar_nav"));

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
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                            // line 164
                            echo "                            ";
                            if (((($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method")) || ($this->getAttribute(                            // line 165
$context["admin"], "hasroute", array(0 => "tablero"), "method") && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER_TABLERO"))) || ($this->getAttribute(                            // line 166
$context["admin"], "hasroute", array(0 => "cubos"), "method") && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER_CUBOS")))) {
                                // line 168
                                echo "                                ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                                // line 169
                                echo "                                <!-- USUARIO ESTABLECIMIENTO -->
                                ";
                                // line 170
                                $context["ab"] = ((isset($context["ab"]) ? $context["ab"] : $this->getContext($context, "ab")) + 1);
                                // line 171
                                echo "                                 <!--FIN USUARIO ESTABLECIMIENTO -->
                            ";
                            }
                            // line 173
                            echo "                        ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 174
                    echo "                    ";
                }
                // line 175
                echo "                            
                    ";
                // line 176
                if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                    // line 177
                    echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 178
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group"], "label", array())), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                            \t<!--USUARIO ESTABLECIMIENTO-->
                            ";
                    // line 181
                    if ((((isset($context["ab"]) ? $context["ab"] : $this->getContext($context, "ab")) == 1) && ($this->getAttribute($context["group"], "label", array()) == "catalogos"))) {
                        // line 182
                        echo "                                <li><a href=\"";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_ue");
                        echo "\">Usuarios Establecimiento</a></li>
                            ";
                    }
                    // line 184
                    echo "                            <!--FIN USUARIO ESTABLECIMIENTO -->
                                ";
                    // line 185
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 186
                        echo "                                    ";
                        if (($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method"))) {
                            // line 187
                            echo "                                        <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["admin"], "label", array())), "html", null, true);
                            echo "</a></li>
                                    ";
                        }
                        // line 189
                        echo "                                    ";
                        if (($this->getAttribute($context["admin"], "hasroute", array(0 => "tablero"), "method") && ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER_TABLERO")))) {
                            // line 190
                            echo "                                    \t  
                                        <li><a href=\"";
                            // line 191
                            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "tablero"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("indicador_tablero"), "html", null, true);
                            echo "</a></li>
                                    ";
                        }
                        // line 193
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                        // line 194
                        if (($this->getAttribute($context["admin"], "hasroute", array(0 => "pivotTable"), "method") && ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER_PIVOT_TABLE")))) {
                            // line 195
                            echo "                                          
                                        <li><a href=\"";
                            // line 196
                            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "pivotTable"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_tabla_pivote_"), "html", null, true);
                            echo "</a></li>
                                    ";
                        }
                        // line 198
                        echo "\t\t\t\t\t\t\t\t\t
                                    ";
                        // line 204
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 205
                    echo "                            </ul>
                        </li>
                    ";
                }
                // line 208
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            echo "                     <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Captura de datos<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                    <li><a href=\"";
            // line 213
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio");
            echo "forn\">FormWeb Gestores</a></li>
                    <li><a href=\"";
            // line 214
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio");
            echo "fornh\">FormWeb Hospitales</a></li>
                    </ul>
                    </li>
<li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Reportes<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 220
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio");
            echo "reporte\">Reporte - Gestores Variables</a></li>
\t\t\t    <li><a href=\"";
            // line 221
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio");
            echo "reporte\">Reporte - Hospitales Variables</a></li>
                            <li><a href=\"";
            // line 222
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio");
            echo "matriz\">Mapa de Calor</a></li>
 <li><a href=\"";
            // line 223
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio");
            echo "matrizdos\">Matriz de Seguimiento</a></li>
</ul>
                    </li>

            ";
        }
        // line 228
        echo "        ";
        
        $__internal_9dde9a9f980d895338e10dc382b2f3855efd52ed6331b8e344d8446a2dc00387->leave($__internal_9dde9a9f980d895338e10dc382b2f3855efd52ed6331b8e344d8446a2dc00387_prof);

    }

    // line 229
    public function block_top_bar_after_nav($context, array $blocks = array())
    {
        $__internal_f7a02b65371fa654b24cd1fcd7681c4b5df992a10a9ecec4ceb8153e3dd6edeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a02b65371fa654b24cd1fcd7681c4b5df992a10a9ecec4ceb8153e3dd6edeb->enter($__internal_f7a02b65371fa654b24cd1fcd7681c4b5df992a10a9ecec4ceb8153e3dd6edeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_bar_after_nav"));

        echo " ";
        
        $__internal_f7a02b65371fa654b24cd1fcd7681c4b5df992a10a9ecec4ceb8153e3dd6edeb->leave($__internal_f7a02b65371fa654b24cd1fcd7681c4b5df992a10a9ecec4ceb8153e3dd6edeb_prof);

    }

    // line 287
    public function block_notice($context, array $blocks = array())
    {
        $__internal_443217ff42057dbb8a312864df7d4157e7f3228bfff429c9171540f02bf26506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443217ff42057dbb8a312864df7d4157e7f3228bfff429c9171540f02bf26506->enter($__internal_443217ff42057dbb8a312864df7d4157e7f3228bfff429c9171540f02bf26506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 288
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 289
            echo "                    ";
            $context["session_var"] = ("sonata_flash_" . $context["notice_level"]);
            // line 290
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => (isset($context["session_var"]) ? $context["session_var"] : $this->getContext($context, "session_var"))), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 291
                echo "                        <div class=\"alert ";
                echo twig_escape_filter($this->env, ("alert-" . $context["notice_level"]), "html", null, true);
                echo "\">
                            ";
                // line 292
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flash"], array(), "SonataAdminBundle"), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 297
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 298
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        echo "            ";
        
        $__internal_443217ff42057dbb8a312864df7d4157e7f3228bfff429c9171540f02bf26506->leave($__internal_443217ff42057dbb8a312864df7d4157e7f3228bfff429c9171540f02bf26506_prof);

    }

    // line 328
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8750ce8c8176c3b7fc74727f3702c206614696c653ae9c3c873660bdeaf1ef76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8750ce8c8176c3b7fc74727f3702c206614696c653ae9c3c873660bdeaf1ef76->enter($__internal_8750ce8c8176c3b7fc74727f3702c206614696c653ae9c3c873660bdeaf1ef76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_8750ce8c8176c3b7fc74727f3702c206614696c653ae9c3c873660bdeaf1ef76->leave($__internal_8750ce8c8176c3b7fc74727f3702c206614696c653ae9c3c873660bdeaf1ef76_prof);

    }

    // line 344
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_c5ff40983027adc55fa184c491e1aa170b8024116778781c31d47849f5788536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ff40983027adc55fa184c491e1aa170b8024116778781c31d47849f5788536->enter($__internal_c5ff40983027adc55fa184c491e1aa170b8024116778781c31d47849f5788536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 345
        echo "
                    ";
        // line 346
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 347
            echo "                        <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                    ";
        }
        // line 349
        echo "
                    ";
        // line 350
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 351
            echo "                        <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                    ";
        }
        // line 353
        echo "
                    ";
        // line 354
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 355
            echo "                        <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                    ";
        }
        // line 357
        echo "
                    ";
        // line 358
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 359
            echo "                        <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                    ";
        }
        // line 361
        echo "
                    ";
        // line 362
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 363
            echo "                        <div class=\"\">
                            <div class=\"col-md-10\">
                                ";
            // line 365
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                            </div>
                            <div class=\"col-md-2\">
                                ";
            // line 368
            echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 372
        echo "
                ";
        
        $__internal_c5ff40983027adc55fa184c491e1aa170b8024116778781c31d47849f5788536->leave($__internal_c5ff40983027adc55fa184c491e1aa170b8024116778781c31d47849f5788536_prof);

    }

    // line 377
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f27cdf4df2b184093f66177f87fd10a46a1c10bd651aeb538d450b92777ee795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27cdf4df2b184093f66177f87fd10a46a1c10bd651aeb538d450b92777ee795->enter($__internal_f27cdf4df2b184093f66177f87fd10a46a1c10bd651aeb538d450b92777ee795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 378
        echo "                <div class=\"container-fluid\"><hr>
                \t<div style=\"text-align:right\">
                    \t<img src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/images/LogoInstitucional.png"), "html", null, true);
        echo "\" height=\"30px\" /> 
                        <img src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/images/EscudoGobiernoChiapas.png"), "html", null, true);
        echo "\" height=\"30px\" /> 
                        <img src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/images/Marca.png"), "html", null, true);
        echo "\" height=\"30px\" /> 
                    </div>        
                </div>
            ";
        
        $__internal_f27cdf4df2b184093f66177f87fd10a46a1c10bd651aeb538d450b92777ee795->leave($__internal_f27cdf4df2b184093f66177f87fd10a46a1c10bd651aeb538d450b92777ee795_prof);

    }

    public function getTemplateName()
    {
        return "IndicadoresBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1089 => 382,  1085 => 381,  1081 => 380,  1077 => 378,  1071 => 377,  1063 => 372,  1056 => 368,  1050 => 365,  1046 => 363,  1044 => 362,  1041 => 361,  1035 => 359,  1033 => 358,  1030 => 357,  1024 => 355,  1022 => 354,  1019 => 353,  1013 => 351,  1011 => 350,  1008 => 349,  1002 => 347,  1000 => 346,  997 => 345,  991 => 344,  980 => 328,  973 => 301,  964 => 298,  961 => 297,  956 => 296,  950 => 295,  941 => 292,  936 => 291,  931 => 290,  928 => 289,  923 => 288,  917 => 287,  905 => 229,  898 => 228,  890 => 223,  886 => 222,  882 => 221,  878 => 220,  869 => 214,  865 => 213,  860 => 210,  853 => 208,  848 => 205,  842 => 204,  839 => 198,  832 => 196,  829 => 195,  827 => 194,  824 => 193,  817 => 191,  814 => 190,  811 => 189,  803 => 187,  800 => 186,  796 => 185,  793 => 184,  787 => 182,  785 => 181,  779 => 178,  776 => 177,  774 => 176,  771 => 175,  768 => 174,  761 => 173,  757 => 171,  755 => 170,  752 => 169,  749 => 168,  747 => 166,  746 => 165,  744 => 164,  738 => 163,  735 => 162,  732 => 161,  729 => 159,  722 => 158,  719 => 157,  713 => 156,  711 => 155,  708 => 154,  703 => 153,  700 => 152,  698 => 151,  692 => 150,  680 => 149,  673 => 100,  671 => 99,  662 => 93,  658 => 92,  652 => 90,  646 => 89,  642 => 88,  637 => 86,  632 => 84,  628 => 82,  625 => 81,  619 => 79,  616 => 78,  613 => 76,  609 => 75,  604 => 74,  602 => 73,  600 => 72,  596 => 71,  584 => 62,  578 => 59,  574 => 57,  568 => 56,  560 => 55,  552 => 54,  544 => 50,  538 => 49,  529 => 46,  525 => 45,  520 => 43,  516 => 42,  512 => 41,  508 => 40,  504 => 39,  500 => 38,  494 => 35,  489 => 33,  486 => 32,  480 => 31,  471 => 386,  469 => 377,  464 => 374,  462 => 344,  455 => 340,  451 => 338,  445 => 335,  442 => 334,  440 => 333,  434 => 329,  432 => 328,  427 => 325,  423 => 323,  417 => 321,  414 => 320,  411 => 319,  397 => 318,  391 => 316,  388 => 315,  380 => 313,  374 => 311,  371 => 310,  368 => 309,  350 => 308,  347 => 307,  345 => 306,  342 => 305,  340 => 304,  336 => 302,  334 => 287,  325 => 280,  319 => 276,  313 => 275,  305 => 273,  299 => 271,  296 => 270,  292 => 269,  284 => 267,  278 => 266,  272 => 265,  267 => 263,  261 => 262,  255 => 261,  249 => 260,  242 => 259,  239 => 258,  234 => 257,  230 => 256,  223 => 254,  217 => 253,  212 => 251,  209 => 250,  203 => 249,  196 => 247,  189 => 245,  186 => 244,  184 => 243,  181 => 242,  176 => 240,  169 => 239,  166 => 238,  161 => 237,  157 => 236,  154 => 235,  152 => 234,  147 => 231,  144 => 230,  141 => 229,  138 => 150,  135 => 149,  132 => 147,  130 => 146,  127 => 145,  124 => 144,  122 => 143,  111 => 135,  107 => 134,  94 => 123,  88 => 121,  84 => 119,  79 => 101,  77 => 49,  74 => 48,  72 => 31,  63 => 25,  59 => 24,  55 => 23,  49 => 19,  47 => 18,  45 => 17,  43 => 16,  41 => 15,  39 => 14,  37 => 13,  35 => 12,  33 => 11,  31 => 10,);
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
    
    <link rel=\"apple-touch-icon\"                 href=\"{{ asset('bundles/indicadores/images/logo.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\"   href=\"{{ asset('bundles/indicadores/images/logo.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ asset('bundles/indicadores/images/logo.png') }}\">
    
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

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
            <link rel=\"stylesheet\" type=\"text/css\"  href=\"{{ asset('bundles/sonataadmin/vendor/select2/select2-bootstrap.css') }}\"  />\t\t\t
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
      <img src=\"{{ asset('bundles/indicadores/images/logo.png') }}\" style=\"margin-top:-7px; height:34px;\"/> 
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
                            \t<!--USUARIO ESTABLECIMIENTO-->
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
                    </ul>
                    </li>
<li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Reportes<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{ path('_inicio') }}reporte\">Reporte - Gestores Variables</a></li>
\t\t\t    <li><a href=\"{{ path('_inicio') }}reporte\">Reporte - Hospitales Variables</a></li>
                            <li><a href=\"{{ path('_inicio') }}matriz\">Mapa de Calor</a></li>
 <li><a href=\"{{ path('_inicio') }}matrizdos\">Matriz de Seguimiento</a></li>
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
      {% if admin.hasroute('tablero') and (is_granted('ROLE_SONATA_ADMIN') ) %}
       <!-- <li><a href=\"{{ admin.generateUrl('tablero')}}\"><i class=\"glyphicon glyphicon-dashboard\"></i> {{ 'indicador_tablero'|trans }}</a></li> --> 
       <input type=\"hidden\" value=\"{{ admin.generateUrl('tablero')}}\" id=\"tablero\">     
\t  {% endif %}
\t  
\t  {% if admin.hasroute('pivotTable') and (is_granted('ROLE_SONATA_ADMIN') or is_granted('ROLE_USER_PIVOT_TABLE')) %}
                                          
\t\t\t<li><a href=\"{{ admin.generateUrl('pivotTable')}}\">{{ '_tabla_pivote_'|trans }}</a></li>
\t\t{% endif %}
      
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
        <div class=\"container-fluid\" style=\"margin-top:53px\">
            {% block notice %}
                {% for notice_level in ['success','error','info', 'warning'] %}
                    {% set session_var = 'sonata_flash_' ~ notice_level %}
                    {% for flash in app.session.flashbag.get(session_var) %}
                        <div class=\"alert {{ 'alert-' ~ notice_level }}\">
                            {{ flash|trans([], 'SonataAdminBundle') }}
                        </div>
                    {% endfor %}
                {% endfor %}
                {% for flashMessage in app.session.flashbag.get('notice') %}
                    <div class=\"alert alert-success\">
                        {{ flashMessage|trans }}
                    </div>
                {% endfor %}
            {% endblock %}
            <div class=\"row\" id='tool_actions'>
                <div class=\"col-md-6\">
                    {% if _breadcrumb is not empty or action is defined %}
                        <ol class=\"breadcrumb\">.
                            {% if _breadcrumb is empty %}
                                {% if action is defined %}
                                    {% for menu in admin.breadcrumbs(action) %}
                                        {% if not loop.last  %}
                                            {% if menu.label=='Dashboard' or menu.label=='⌂' %}
                                                <li><a href=\"{{ menu.uri }}\"><i class=\"glyphicon glyphicon-home\"></i></a><span class=\"divider\">/</span></li>
                                            {% else %}
                                                <li><a href=\"{{ menu.uri }}\">{{ menu.label|trans }}</a><span class=\"divider\">/</span></li>
                                            {% endif %}
                                        {% else %}
                                            <li class=\"active\">{{ menu.label }}</li>
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                            {% else %}
                                {{ _breadcrumb|raw }}
                            {% endif %}
                        </ol>
                    {% endif %}
                </div>

           \t \t<div style=\"float: right\">
                    {%block actions %}{% endblock %}
                </div>
            </div>
\t\t\t
            <div class=\"form-group\">
                {% if _side_menu is not empty %}
                    <div class=\"sidebar col-md-2\">
                        <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">{{ _side_menu|raw }}</div>
                    </div>
                {% endif %}

    
                <div class=\"content {{ _side_menu is not empty ? ' col-md-10' : 'col-md-12' }}\">
                <div id=\"div_carga\" class='affix'>
                    <div id=\"cargador\"><span class=\"glyphicon glyphicon-refresh glyphicon-refresh-animate\"></span></div>
                </div>
                {% block sonata_admin_content %}

                    {% if _preview is not empty %}
                        <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                    {% endif %}

                    {% if _content is not empty %}
                        <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                    {% endif %}

                    {% if _show is not empty %}
                        <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                    {% endif %}

                    {% if _form is not empty %}
                        <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                    {% endif %}

                    {% if _list_table is not empty or _list_filters is not empty %}
                        <div class=\"\">
                            <div class=\"col-md-10\">
                                {{ _list_table|raw }}
                            </div>
                            <div class=\"col-md-2\">
                                {{ _list_filters|raw }}
                            </div>
                        </div>
                    {% endif %}

                {% endblock %}
                </div>
                </div>

            {% block footer %}
                <div class=\"container-fluid\"><hr>
                \t<div style=\"text-align:right\">
                    \t<img src=\"{{ asset('bundles/indicadores/images/LogoInstitucional.png') }}\" height=\"30px\" /> 
                        <img src=\"{{ asset('bundles/indicadores/images/EscudoGobiernoChiapas.png') }}\" height=\"30px\" /> 
                        <img src=\"{{ asset('bundles/indicadores/images/Marca.png') }}\" height=\"30px\" /> 
                    </div>        
                </div>
            {% endblock %}
        </div>
    </body>
</html>", "IndicadoresBundle::standard_layout.html.twig", "C:\\xampp\\htdocs\\etab-honuras-nuevo\\src\\MINSAL\\IndicadoresBundle/Resources/views/standard_layout.html.twig");
    }
}
