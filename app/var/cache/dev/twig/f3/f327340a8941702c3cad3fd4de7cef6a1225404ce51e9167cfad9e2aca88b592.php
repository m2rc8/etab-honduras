<?php

/* IndicadoresBundle:Security:login.html.twig */
class __TwigTemplate_911721a8f296d846491f5a651bbf50b4778ff76a71fa3b321abb03dd3854f971 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndicadoresBundle::standard_layout_public.html.twig", "IndicadoresBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IndicadoresBundle::standard_layout_public.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_977efbc7c5d34e162dcf91b8e13f79036a4afdd8035b64007c54368664cd6019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977efbc7c5d34e162dcf91b8e13f79036a4afdd8035b64007c54368664cd6019->enter($__internal_977efbc7c5d34e162dcf91b8e13f79036a4afdd8035b64007c54368664cd6019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicadoresBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_977efbc7c5d34e162dcf91b8e13f79036a4afdd8035b64007c54368664cd6019->leave($__internal_977efbc7c5d34e162dcf91b8e13f79036a4afdd8035b64007c54368664cd6019_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_633546955848f470e241d967ac1da93755997d346ce4ae23973a79264a559393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633546955848f470e241d967ac1da93755997d346ce4ae23973a79264a559393->enter($__internal_633546955848f470e241d967ac1da93755997d346ce4ae23973a79264a559393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<nav class=\"navbar navbar-default\" role=\"navigation\" >
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#collapseTwo\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_inicio", array("page" => "_inicio"));
        echo "\">
      <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/indicadores/images/logo.png"), "html", null, true);
        echo "\" height=\"30px\" /> 
      </a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"collapseTwo\">

        <ul class=\"nav navbar-nav navbar-right\">
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
          \t<i class=\"glyphicon glyphicon-user\"></i>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("lbllenguaje"), "html", null, true);
        echo "
            <span class=\"caret\"></span>
          </a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array("es_SV" => "Español", "en_US" => "English"));
        foreach ($context['_seq'] as $context["locale"] => $context["lenguaje"]) {
            // line 28
            echo "                ";
            if (($context["locale"] == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()))) {
                // line 29
                echo "                    <li class='active'><A href='#'>";
                echo twig_escape_filter($this->env, $context["lenguaje"], "html", null, true);
                echo "</a></li>
                ";
            } else {
                // line 31
                echo "                    <li ><a href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("change_locale", array("_locale" => $context["locale"])), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $context["lenguaje"], "html", null, true);
                echo "</a></li>
                ";
            }
            // line 33
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['locale'], $context['lenguaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "          </ul>
        </li>
       </ul>
    </div>
</nav>
<div class=\"connection\" >
    <form action=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_security_check");
        echo "\" method=\"post\">  
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\"><h4>Login</h4></div>
      <div class=\"panel-body\">
            ";
        // line 44
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 45
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "SonataUserBundle"), "html", null, true);
            echo "</div>
            ";
        }
        // line 47
        echo "
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

            <div class=\"control-group\">
                
                <div class=\"form-group\">
                <label for=\"username\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                   <div class=\"input-group\">
                        <div class=\"input-group-addon\" style=\"height:45px\">
                            <i class=\"glyphicon glyphicon-user\"></i>
                        </div>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" style=\"height:45px\"/>
                    </div>
                </div>
                <div class=\"form-group\">
                <label for=\"password\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                   <div class=\"input-group\">
                        <div class=\"input-group-addon\" style=\"height:45px\">
                            <i class=\"glyphicon glyphicon-lock\"></i>
                        </div>
                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" style=\"height:45px\"/>
                    </div>
                </div>  
                <div class=\"form-group\">
                    <label for=\"remember_me\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                        ";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                    </label>
                </div>
                <div>
                </div>
             </div>
        \t
      </div>
      <div class=\"panel-footer\">
      <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
      </div>
    </div>
    </form>
    </div>
";
        
        $__internal_633546955848f470e241d967ac1da93755997d346ce4ae23973a79264a559393->leave($__internal_633546955848f470e241d967ac1da93755997d346ce4ae23973a79264a559393_prof);

    }

    public function getTemplateName()
    {
        return "IndicadoresBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 82,  164 => 73,  150 => 62,  143 => 58,  135 => 53,  127 => 48,  124 => 47,  118 => 45,  116 => 44,  109 => 40,  101 => 34,  95 => 33,  87 => 31,  81 => 29,  78 => 28,  74 => 27,  67 => 23,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'IndicadoresBundle::standard_layout_public.html.twig' %}

{% block content %}
<nav class=\"navbar navbar-default\" role=\"navigation\" >
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#collapseTwo\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"{{ path('_inicio', {'page': '_inicio'}) }}\">
      <img src=\"{{ asset('bundles/indicadores/images/logo.png') }}\" height=\"30px\" /> 
      </a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"collapseTwo\">

        <ul class=\"nav navbar-nav navbar-right\">
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
          \t<i class=\"glyphicon glyphicon-user\"></i>{{'lbllenguaje'|trans}}
            <span class=\"caret\"></span>
          </a>
          <ul class=\"dropdown-menu\" role=\"menu\">
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
    </div>
</nav>
<div class=\"connection\" >
    <form action=\"{{ path(\"sonata_user_admin_security_check\") }}\" method=\"post\">  
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\"><h4>Login</h4></div>
      <div class=\"panel-body\">
            {% if error %}
                <div class=\"alert alert-danger\">{{ error|trans({}, 'SonataUserBundle') }}</div>
            {% endif %}

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

            <div class=\"control-group\">
                
                <div class=\"form-group\">
                <label for=\"username\">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>
                   <div class=\"input-group\">
                        <div class=\"input-group-addon\" style=\"height:45px\">
                            <i class=\"glyphicon glyphicon-user\"></i>
                        </div>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\" style=\"height:45px\"/>
                    </div>
                </div>
                <div class=\"form-group\">
                <label for=\"password\">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>
                   <div class=\"input-group\">
                        <div class=\"input-group-addon\" style=\"height:45px\">
                            <i class=\"glyphicon glyphicon-lock\"></i>
                        </div>
                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" style=\"height:45px\"/>
                    </div>
                </div>  
                <div class=\"form-group\">
                    <label for=\"remember_me\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                        {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}
                    </label>
                </div>
                <div>
                </div>
             </div>
        \t
      </div>
      <div class=\"panel-footer\">
      <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\" />
      </div>
    </div>
    </form>
    </div>
{% endblock content %}
", "IndicadoresBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\etab-honuras-nuevo\\src\\MINSAL\\IndicadoresBundle/Resources/views/Security/login.html.twig");
    }
}
