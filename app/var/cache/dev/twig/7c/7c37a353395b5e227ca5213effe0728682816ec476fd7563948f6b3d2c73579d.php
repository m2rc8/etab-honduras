<?php

/* IndicadoresBundle::standard_layout_public.html.twig */
class __TwigTemplate_015e3c48f86a3146f8ae1bf73662247e0c30d192388bd385d6afc9b6fab41152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'logo' => array($this, 'block_logo'),
            'actions' => array($this, 'block_actions'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49bb9551c17513ef62abd3d2aacd5cef825cd8dad32490c5f4a8e6dca9c7857a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49bb9551c17513ef62abd3d2aacd5cef825cd8dad32490c5f4a8e6dca9c7857a->enter($__internal_49bb9551c17513ef62abd3d2aacd5cef825cd8dad32490c5f4a8e6dca9c7857a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicadoresBundle::standard_layout_public.html.twig"));

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

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1\">

        ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "
        ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "
        <title>
            eTAB2
            ";
        // line 86
        echo "        </title>
    </head>
    <body >
        ";
        // line 90
        echo "
        <!-- barra superior con el logo y el título -->
        <div class=\"container-fluid\">
        \t<div class=\"row\">
            \t<div class=\"col-md-12\" id=\"collapseOne\">
                \t";
        // line 95
        $this->displayBlock('logo', $context, $blocks);
        // line 99
        echo "            \t</div>
            </div>\t
        </div>

";
        // line 103
        $this->displayBlock('actions', $context, $blocks);
        // line 104
        if ( !twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu")))) {
            // line 105
            echo "                ";
            echo (isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu"));
            echo "
            ";
        }
        // line 107
        echo "            
            ";
        // line 108
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 132
        echo "            
    ";
        // line 133
        $this->displayBlock('notice', $context, $blocks);
        // line 148
        echo "
";
        // line 149
        $this->displayBlock('footer', $context, $blocks);
        // line 151
        echo "        
    </body>
</html>";
        
        $__internal_49bb9551c17513ef62abd3d2aacd5cef825cd8dad32490c5f4a8e6dca9c7857a->leave($__internal_49bb9551c17513ef62abd3d2aacd5cef825cd8dad32490c5f4a8e6dca9c7857a_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43444e3d16a360cb4dd94087114fbe5307e1470cde75796a0ab0f430be147d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43444e3d16a360cb4dd94087114fbe5307e1470cde75796a0ab0f430be147d11->enter($__internal_43444e3d16a360cb4dd94087114fbe5307e1470cde75796a0ab0f430be147d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 27
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/jquery/jquery-ui/css/flick/jquery-ui-1.10.3.custom.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <!-- css de eTAB -->
            <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"  />

            <!-- base application asset -->
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/css/custom_layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/css/ionicons.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/css/ajaxloader.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />            
        ";
        
        $__internal_43444e3d16a360cb4dd94087114fbe5307e1470cde75796a0ab0f430be147d11->leave($__internal_43444e3d16a360cb4dd94087114fbe5307e1470cde75796a0ab0f430be147d11_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4b99c5218f6689e01b7f77f4b7a2b4ddfcf2e03db4cd48d05f9407e35f83e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b99c5218f6689e01b7f77f4b7a2b4ddfcf2e03db4cd48d05f9407e35f83e49->enter($__internal_a4b99c5218f6689e01b7f77f4b7a2b4ddfcf2e03db4cd48d05f9407e35f83e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "            <script type=\"text/javascript\">

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82631160-1', 'auto');
  ga('send', 'pageview');

               
            var sSwfPath = \"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/DataTables/media/swf/copy_csv_xls_pdf.swf"), "html", null, true);
        echo "\";
            </script>
            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/jquery/jquery-2.0.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/jquery/jquery-ui/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/js/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            

            <script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>     

            ";
        // line 66
        $this->loadTemplate(twig_join_filter(array(0 => "IndicadoresBundle::messages_js.html.twig")), "IndicadoresBundle::standard_layout_public.html.twig", 66)->display($context);
        // line 67
        echo "        ";
        
        $__internal_a4b99c5218f6689e01b7f77f4b7a2b4ddfcf2e03db4cd48d05f9407e35f83e49->leave($__internal_a4b99c5218f6689e01b7f77f4b7a2b4ddfcf2e03db4cd48d05f9407e35f83e49_prof);

    }

    // line 95
    public function block_logo($context, array $blocks = array())
    {
        $__internal_8eae362fa07e1762c78e4240578d3258ee3e5bbd8171ddd7dc3b57ceccd4075e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eae362fa07e1762c78e4240578d3258ee3e5bbd8171ddd7dc3b57ceccd4075e->enter($__internal_8eae362fa07e1762c78e4240578d3258ee3e5bbd8171ddd7dc3b57ceccd4075e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 96
        echo "                        
                            <div align=\"center\"><img class=\"bannerPublico\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/images/logo_salud.png"), "html", null, true);
        echo "\" />                        
                    ";
        
        $__internal_8eae362fa07e1762c78e4240578d3258ee3e5bbd8171ddd7dc3b57ceccd4075e->leave($__internal_8eae362fa07e1762c78e4240578d3258ee3e5bbd8171ddd7dc3b57ceccd4075e_prof);

    }

    // line 103
    public function block_actions($context, array $blocks = array())
    {
        $__internal_89e614677a84794ebfbc67659fdf67b077622ebc495ef00822359f41e47d6a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e614677a84794ebfbc67659fdf67b077622ebc495ef00822359f41e47d6a01->enter($__internal_89e614677a84794ebfbc67659fdf67b077622ebc495ef00822359f41e47d6a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_89e614677a84794ebfbc67659fdf67b077622ebc495ef00822359f41e47d6a01->leave($__internal_89e614677a84794ebfbc67659fdf67b077622ebc495ef00822359f41e47d6a01_prof);

    }

    // line 108
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_44cfb10a3cffa6e4f2f790b0aeaeef42670a8291533bc193dcf914acbb1dce70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44cfb10a3cffa6e4f2f790b0aeaeef42670a8291533bc193dcf914acbb1dce70->enter($__internal_44cfb10a3cffa6e4f2f790b0aeaeef42670a8291533bc193dcf914acbb1dce70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 109
        echo "
                ";
        // line 110
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 111
            echo "                    ";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "
                ";
        }
        // line 113
        echo "
                ";
        // line 114
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 115
            echo "                    ";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "
                ";
        }
        // line 117
        echo "
                ";
        // line 118
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 119
            echo "                    ";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "
                ";
        }
        // line 121
        echo "
                ";
        // line 122
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 123
            echo "                   ";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "
                ";
        }
        // line 125
        echo "
                ";
        // line 126
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 127
            echo "                            ";
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                            ";
            // line 128
            echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
            echo "
                ";
        }
        // line 130
        echo "
            ";
        
        $__internal_44cfb10a3cffa6e4f2f790b0aeaeef42670a8291533bc193dcf914acbb1dce70->leave($__internal_44cfb10a3cffa6e4f2f790b0aeaeef42670a8291533bc193dcf914acbb1dce70_prof);

    }

    // line 133
    public function block_notice($context, array $blocks = array())
    {
        $__internal_43dc322add58418358bd2a4a3bdaea879972c9699dfcec60084866bfa42e974d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43dc322add58418358bd2a4a3bdaea879972c9699dfcec60084866bfa42e974d->enter($__internal_43dc322add58418358bd2a4a3bdaea879972c9699dfcec60084866bfa42e974d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 134
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 135
            echo "            ";
            $context["session_var"] = ("sonata_flash_" . $context["notice_level"]);
            // line 136
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => (isset($context["session_var"]) ? $context["session_var"] : $this->getContext($context, "session_var"))), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 137
                echo "                <div class=\"alert ";
                echo twig_escape_filter($this->env, ("alert-" . $context["notice_level"]), "html", null, true);
                echo "\">
                    ";
                // line 138
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flash"], array(), "SonataAdminBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 143
            echo "            <div class=\"alert alert-success\">
                ";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "    ";
        
        $__internal_43dc322add58418358bd2a4a3bdaea879972c9699dfcec60084866bfa42e974d->leave($__internal_43dc322add58418358bd2a4a3bdaea879972c9699dfcec60084866bfa42e974d_prof);

    }

    // line 149
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b5f837a0cc7d79971adfbe937b9fcb6d6f1b69845003a2c36c5ac089a1f404d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f837a0cc7d79971adfbe937b9fcb6d6f1b69845003a2c36c5ac089a1f404d2->enter($__internal_b5f837a0cc7d79971adfbe937b9fcb6d6f1b69845003a2c36c5ac089a1f404d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 150
        echo "
";
        
        $__internal_b5f837a0cc7d79971adfbe937b9fcb6d6f1b69845003a2c36c5ac089a1f404d2->leave($__internal_b5f837a0cc7d79971adfbe937b9fcb6d6f1b69845003a2c36c5ac089a1f404d2_prof);

    }

    public function getTemplateName()
    {
        return "IndicadoresBundle::standard_layout_public.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 150,  392 => 149,  385 => 147,  376 => 144,  373 => 143,  368 => 142,  362 => 141,  353 => 138,  348 => 137,  343 => 136,  340 => 135,  335 => 134,  329 => 133,  321 => 130,  316 => 128,  311 => 127,  309 => 126,  306 => 125,  300 => 123,  298 => 122,  295 => 121,  289 => 119,  287 => 118,  284 => 117,  278 => 115,  276 => 114,  273 => 113,  267 => 111,  265 => 110,  262 => 109,  256 => 108,  245 => 103,  236 => 97,  233 => 96,  227 => 95,  220 => 67,  218 => 66,  213 => 64,  209 => 63,  202 => 59,  197 => 57,  193 => 56,  188 => 54,  175 => 43,  169 => 42,  160 => 39,  155 => 37,  151 => 36,  147 => 35,  143 => 34,  137 => 31,  131 => 28,  128 => 27,  122 => 26,  113 => 151,  111 => 149,  108 => 148,  106 => 133,  103 => 132,  101 => 108,  98 => 107,  92 => 105,  90 => 104,  88 => 103,  82 => 99,  80 => 95,  73 => 90,  68 => 86,  63 => 68,  61 => 42,  58 => 41,  56 => 26,  47 => 19,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  37 => 14,  35 => 13,  33 => 12,  31 => 11,  29 => 10,);
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

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1\">

        {% block stylesheets %}
            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/indicadores/js/jquery/jquery-ui/css/flick/jquery-ui-1.10.3.custom.min.css') }}\" type=\"text/css\" media=\"all\" />

            <!-- css de eTAB -->
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/indicadores/js/bootstrap/css/bootstrap.min.css') }}\" type=\"text/css\" media=\"all\"  />

            <!-- base application asset -->
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('bundles/indicadores/css/custom_layout.css') }}\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/indicadores/css/ionicons.min.css') }}\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/indicadores/css/font-awesome.min.css') }}\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/sonataadmin/css/colors.css') }}\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"{{ asset('bundles/indicadores/css/ajaxloader.css') }}\" type=\"text/css\" media=\"all\" />            
        {% endblock %}

        {% block javascripts %}
            <script type=\"text/javascript\">

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82631160-1', 'auto');
  ga('send', 'pageview');

               
            var sSwfPath = \"{{ asset('bundles/indicadores/js/DataTables/media/swf/copy_csv_xls_pdf.swf') }}\";
            </script>
            <script src=\"{{ asset('bundles/indicadores/js/jquery/jquery-2.0.3.min.js') }}\" type=\"text/javascript\"></script>
            <script src=\"{{ asset('bundles/indicadores/js/jquery/jquery-ui/js/jquery-ui-1.10.3.custom.min.js') }}\" type=\"text/javascript\"></script>

            <script src=\"{{ asset('bundles/indicadores/js/bootstrap/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>

            

            <script type=\"text/javascript\" src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}\"></script>     

            {% include (['IndicadoresBundle::messages_js.html.twig']|join) %}
        {% endblock %}

        <title>
            eTAB2
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
    <body >
        {# initialize block value #}

        <!-- barra superior con el logo y el título -->
        <div class=\"container-fluid\">
        \t<div class=\"row\">
            \t<div class=\"col-md-12\" id=\"collapseOne\">
                \t{% block logo %}
                        
                            <div align=\"center\"><img class=\"bannerPublico\" src=\"{{ asset('bundles/indicadores/images/logo_salud.png') }}\" />                        
                    {% endblock %}
            \t</div>
            </div>\t
        </div>

{%block actions %}{% endblock %}
{% if _side_menu is not empty %}
                {{ _side_menu|raw }}
            {% endif %}
            
            {% block sonata_admin_content %}

                {% if _preview is not empty %}
                    {{ _preview|raw }}
                {% endif %}

                {% if _content is not empty %}
                    {{ _content|raw }}
                {% endif %}

                {% if _show is not empty %}
                    {{ _show|raw }}
                {% endif %}

                {% if _form is not empty %}
                   {{ _form|raw }}
                {% endif %}

                {% if _list_table is not empty or _list_filters is not empty %}
                            {{ _list_table|raw }}
                            {{ _list_filters|raw }}
                {% endif %}

            {% endblock %}
            
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

{% block footer %}

{% endblock %}        
    </body>
</html>", "IndicadoresBundle::standard_layout_public.html.twig", "C:\\xampp\\htdocs\\etab-honuras-nuevo\\src\\MINSAL\\IndicadoresBundle/Resources/views/standard_layout_public.html.twig");
    }
}
