<?php

/* IndicadoresBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_f4d5f25f029e4972c09523f3ea41308ea6f632757f43aca5234db00f9589266a extends Twig_Template
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
        $__internal_ecbc7d8af03f574ac596eadda5ebc4a524013b09c69fd4448cfd983176ffab8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecbc7d8af03f574ac596eadda5ebc4a524013b09c69fd4448cfd983176ffab8c->enter($__internal_ecbc7d8af03f574ac596eadda5ebc4a524013b09c69fd4448cfd983176ffab8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicadoresBundle:Block:block_admin_list.html.twig"));

        // line 1
        echo "<script>document.location.href='minsal/indicadores/fichatecnica/tablero';</script>";
        
        $__internal_ecbc7d8af03f574ac596eadda5ebc4a524013b09c69fd4448cfd983176ffab8c->leave($__internal_ecbc7d8af03f574ac596eadda5ebc4a524013b09c69fd4448cfd983176ffab8c_prof);

    }

    public function getTemplateName()
    {
        return "IndicadoresBundle:Block:block_admin_list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>document.location.href='minsal/indicadores/fichatecnica/tablero';</script>", "IndicadoresBundle:Block:block_admin_list.html.twig", "C:\\xampp\\htdocs\\etab-honuras-nuevo\\src\\MINSAL\\IndicadoresBundle/Resources/views/Block/block_admin_list.html.twig");
    }
}
