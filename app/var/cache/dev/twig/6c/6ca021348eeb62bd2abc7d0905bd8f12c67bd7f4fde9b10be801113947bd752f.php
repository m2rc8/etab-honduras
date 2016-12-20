<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5f342bcfe21843ab1357eb5162a47768825dac8605320b85bc6fe7889f642af3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb7e11340394b69de22f6fc30a0cf7835a03a8bc223a22d604264c5ada1b5fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7e11340394b69de22f6fc30a0cf7835a03a8bc223a22d604264c5ada1b5fc2->enter($__internal_fb7e11340394b69de22f6fc30a0cf7835a03a8bc223a22d604264c5ada1b5fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb7e11340394b69de22f6fc30a0cf7835a03a8bc223a22d604264c5ada1b5fc2->leave($__internal_fb7e11340394b69de22f6fc30a0cf7835a03a8bc223a22d604264c5ada1b5fc2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6deb91f80d45e2e30b05ddb53ab76660b50c7f013939da3457ed199c03564e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6deb91f80d45e2e30b05ddb53ab76660b50c7f013939da3457ed199c03564e5e->enter($__internal_6deb91f80d45e2e30b05ddb53ab76660b50c7f013939da3457ed199c03564e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6deb91f80d45e2e30b05ddb53ab76660b50c7f013939da3457ed199c03564e5e->leave($__internal_6deb91f80d45e2e30b05ddb53ab76660b50c7f013939da3457ed199c03564e5e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d84c52daaa9cccf4fe9749de76c019b63ed5fbf83bdeec87709c0b46016494d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84c52daaa9cccf4fe9749de76c019b63ed5fbf83bdeec87709c0b46016494d6->enter($__internal_d84c52daaa9cccf4fe9749de76c019b63ed5fbf83bdeec87709c0b46016494d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d84c52daaa9cccf4fe9749de76c019b63ed5fbf83bdeec87709c0b46016494d6->leave($__internal_d84c52daaa9cccf4fe9749de76c019b63ed5fbf83bdeec87709c0b46016494d6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fea4feba4cf63c7ca00061c0d10b4ea8b266e7b817b96d5fd9dfa1ab9c1750c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea4feba4cf63c7ca00061c0d10b4ea8b266e7b817b96d5fd9dfa1ab9c1750c8->enter($__internal_fea4feba4cf63c7ca00061c0d10b4ea8b266e7b817b96d5fd9dfa1ab9c1750c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fea4feba4cf63c7ca00061c0d10b4ea8b266e7b817b96d5fd9dfa1ab9c1750c8->leave($__internal_fea4feba4cf63c7ca00061c0d10b4ea8b266e7b817b96d5fd9dfa1ab9c1750c8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\etab-honuras-nuevo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
