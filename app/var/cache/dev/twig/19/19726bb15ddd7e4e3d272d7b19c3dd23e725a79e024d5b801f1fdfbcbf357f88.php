<?php

/* IndicadoresBundle:FichaTecnicaAdmin:accion_sala.html.twig */
class __TwigTemplate_51bf6dd83e58d18860807626df72a9892f2058cd127906dbb9a925d9ff9718bf extends Twig_Template
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
        $__internal_31a5781f0601ffa72f28d53c8ec63a0bc8fd1f833c30cbb7a6dabeae95bd0a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a5781f0601ffa72f28d53c8ec63a0bc8fd1f833c30cbb7a6dabeae95bd0a1a->enter($__internal_31a5781f0601ffa72f28d53c8ec63a0bc8fd1f833c30cbb7a6dabeae95bd0a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicadoresBundle:FichaTecnicaAdmin:accion_sala.html.twig"));

        // line 1
        echo "<div id=\"addAction\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addActionLabel\" aria-hidden=\"true\" style=\"z-index:99999999\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h3 id=\"addActionLabel\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_sala_acciones_"), "html", null, true);
        echo "</h3>
            </div>

            <div class=\"modal-body\">
                <div>
                  <!-- Nav tabs -->
                  <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\" onclick=\"mostrarAccionSala('')\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_agregar_accion_"), "html", null, true);
        echo " </a></li>
                    <li role=\"presentation\"><a href=\"#profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\" onclick=\"mostrarAccionSala('none')\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_historial_accion_"), "html", null, true);
        echo "</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class=\"tab-content\">
                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\">
                      <br>
                      <form id='acciones_frm' class=\"form-horizontal\" role=\"form\">                          
                          <div class=\"form-group\" id=\"acciones_div\">
                            <label for=\"acciones\" class=\"col-sm-2 control-label col-lg-3\">
                              ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_acciones_"), "html", null, true);
        echo "
                            </label>
                            <div class=\"col-sm-10 col-lg-8\">
                              <textarea class=\"form-control\" rows=\"3\" id=\"acciones\"></textarea>
                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label for=\"observaciones\" class=\"col-sm-2 col-lg-3 control-label\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_observaciones_"), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-10 col-lg-8\">
                              <textarea class=\"form-control\" rows=\"3\" id=\"observaciones\"></textarea>
                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label for=\"responsables\" class=\"col-sm-2 control-label col-lg-3\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_responsables_"), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-10 col-lg-8\">
                              <textarea class=\"form-control\" rows=\"3\" id=\"responsables\"></textarea>
                            </div>
                          </div>
                          
                      </form>
                    </div>

                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\">
                      <div id=\"acciones_sala\" class=\"content tab-pane\" ></div>
                    </div>
                  </div>
                </div>
                
                <div id='info_accion' class=\"alert alert-danger\" role=\"alert\" style=\"display: none;\">
                  
                </div>
            </div>

            <div class=\"modal-footer\">   
                <button id='guardar_accion' class=\"btn btn-primary \" >";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_guardar_cambios_"), "html", null, true);
        echo "</button>             
                <button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_cerrar_"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_31a5781f0601ffa72f28d53c8ec63a0bc8fd1f833c30cbb7a6dabeae95bd0a1a->leave($__internal_31a5781f0601ffa72f28d53c8ec63a0bc8fd1f833c30cbb7a6dabeae95bd0a1a_prof);

    }

    public function getTemplateName()
    {
        return "IndicadoresBundle:FichaTecnicaAdmin:accion_sala.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 59,  99 => 58,  75 => 37,  66 => 31,  56 => 24,  43 => 14,  39 => 13,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"addAction\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addActionLabel\" aria-hidden=\"true\" style=\"z-index:99999999\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h3 id=\"addActionLabel\">{{'_sala_acciones_'|trans}}</h3>
            </div>

            <div class=\"modal-body\">
                <div>
                  <!-- Nav tabs -->
                  <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\" onclick=\"mostrarAccionSala('')\">{{'_agregar_accion_'|trans}} </a></li>
                    <li role=\"presentation\"><a href=\"#profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\" onclick=\"mostrarAccionSala('none')\">{{'_historial_accion_'|trans}}</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class=\"tab-content\">
                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\">
                      <br>
                      <form id='acciones_frm' class=\"form-horizontal\" role=\"form\">                          
                          <div class=\"form-group\" id=\"acciones_div\">
                            <label for=\"acciones\" class=\"col-sm-2 control-label col-lg-3\">
                              {{'_acciones_'|trans}}
                            </label>
                            <div class=\"col-sm-10 col-lg-8\">
                              <textarea class=\"form-control\" rows=\"3\" id=\"acciones\"></textarea>
                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label for=\"observaciones\" class=\"col-sm-2 col-lg-3 control-label\">{{'_observaciones_'|trans}}</label>
                            <div class=\"col-sm-10 col-lg-8\">
                              <textarea class=\"form-control\" rows=\"3\" id=\"observaciones\"></textarea>
                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label for=\"responsables\" class=\"col-sm-2 control-label col-lg-3\">{{'_responsables_'|trans}}</label>
                            <div class=\"col-sm-10 col-lg-8\">
                              <textarea class=\"form-control\" rows=\"3\" id=\"responsables\"></textarea>
                            </div>
                          </div>
                          
                      </form>
                    </div>

                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\">
                      <div id=\"acciones_sala\" class=\"content tab-pane\" ></div>
                    </div>
                  </div>
                </div>
                
                <div id='info_accion' class=\"alert alert-danger\" role=\"alert\" style=\"display: none;\">
                  
                </div>
            </div>

            <div class=\"modal-footer\">   
                <button id='guardar_accion' class=\"btn btn-primary \" >{{'_guardar_cambios_'|trans}}</button>             
                <button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">{{'_cerrar_'|trans}}</button>
            </div>
        </div>
    </div>
</div>


", "IndicadoresBundle:FichaTecnicaAdmin:accion_sala.html.twig", "C:\\xampp\\htdocs\\etab-honuras-nuevo\\src\\MINSAL\\IndicadoresBundle/Resources/views/FichaTecnicaAdmin/accion_sala.html.twig");
    }
}
