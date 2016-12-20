<?php

/* IndicadoresBundle:FichaTecnicaAdmin:compartir_sala.html.twig */
class __TwigTemplate_b7bfb40d89f367906ba87dcb93b5f4b1fce3bd6bfe4e1249a2784e346005719d extends Twig_Template
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
        $__internal_ba4c43ec4ca2e80c59c965bca380b2bd61c62915b28927e491fb8aef9d165cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4c43ec4ca2e80c59c965bca380b2bd61c62915b28927e491fb8aef9d165cb4->enter($__internal_ba4c43ec4ca2e80c59c965bca380b2bd61c62915b28927e491fb8aef9d165cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicadoresBundle:FichaTecnicaAdmin:compartir_sala.html.twig"));

        // line 1
        echo "<style>
.select2-drop {
    z-index: 99999999 !important;
}
</style>
<div id=\"compartir\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addActionLabel\" aria-hidden=\"true\" style=\"z-index:99999999\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h3 id=\"addActionLabel\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_compartir_sala_"), "html", null, true);
        echo "</h3>
            </div>

            <div class=\"modal-body\">

                <div class=\"form-horizontal\">
                  <!-- Nav tabs -->
                  <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#c_home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\" >";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User List"), "html", null, true);
        echo " </a></li>
                    <li role=\"presentation\"><a href=\"#c_profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\" >";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_comentarios_"), "html", null, true);
        echo "</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class=\"tab-content\">
                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"c_home\">
                      <br>
                        <div  id=\"users\">
                                                   
                            <form id=\"compartir_frm\" > 
                                <label for=\"usuario\">
                                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_usuario_con"), "html", null, true);
        echo " 
                                </label>                                                     
                               <div id=\"usuarios_sala\"></div>
                               <div class=\"checkbox\">
                                   <label><input type=\"checkbox\" name=\"correo\" id=\"correo\" value=\"1\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_usuario_notificacion"), "html", null, true);
        echo "</label>
                               </div>
                            </form>
                            
                        </div>
                        <hr>
                        <div>
                            <label for=\"usuario_sin\">
                                ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_usuario_sin"), "html", null, true);
        echo " 
                            </label>  
                            <div class=\"well well-sm\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_usuario_sin_inidicacion"), "html", null, true);
        echo "</div>                        
                            <textarea name=\"usuario_sin\" id=\"usuario_sin\" class=\"form-control\"></textarea>                        
                        </div>
                    </div>

                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"c_profile\">
                        <br>
                      <div id=\"coments\" class=\"content tab-pane\" >
                          
                        <label for=\"_comentarios_\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_comentarios_"), "html", null, true);
        echo "</label>                                      
                        <div id=\"chat\">                    
                            <form id=\"chat-form\">                            
                                <textarea name=\"chat-mensaje\" id=\"chat-form-mensaje\" required=\"true\" class=\"form-control\"></textarea>                                        
                            </form>
                            <br>
                            <div class=\"panel panel-default\">
                              <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_foro_"), "html", null, true);
        echo "</h3>
                              </div>
                              <div class=\"panel-body\" id=\"content_mensajes\">
                                <div class=\"comments-container\">
                                    <ul class=\"comments-list\" id=\"chat-mensajes\">
                                                                            
                                    </ul>
                                </div>
                              </div>
                            </div>
                        </div>
                   
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class=\"modal-footer\">                   
                <button id=\"guardar_compartir\" type=\"submit\" class=\"btn btn-primary\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_enviar_"), "html", null, true);
        echo "</button>            
                <button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_cerrar_"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_ba4c43ec4ca2e80c59c965bca380b2bd61c62915b28927e491fb8aef9d165cb4->leave($__internal_ba4c43ec4ca2e80c59c965bca380b2bd61c62915b28927e491fb8aef9d165cb4_prof);

    }

    public function getTemplateName()
    {
        return "IndicadoresBundle:FichaTecnicaAdmin:compartir_sala.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 81,  130 => 80,  108 => 61,  97 => 53,  85 => 44,  80 => 42,  69 => 34,  62 => 30,  49 => 20,  45 => 19,  34 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
.select2-drop {
    z-index: 99999999 !important;
}
</style>
<div id=\"compartir\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addActionLabel\" aria-hidden=\"true\" style=\"z-index:99999999\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h3 id=\"addActionLabel\">{{'_compartir_sala_'|trans}}</h3>
            </div>

            <div class=\"modal-body\">

                <div class=\"form-horizontal\">
                  <!-- Nav tabs -->
                  <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#c_home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\" >{{'User List'|trans}} </a></li>
                    <li role=\"presentation\"><a href=\"#c_profile\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\" >{{'_comentarios_'|trans}}</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class=\"tab-content\">
                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"c_home\">
                      <br>
                        <div  id=\"users\">
                                                   
                            <form id=\"compartir_frm\" > 
                                <label for=\"usuario\">
                                    {{'_usuario_con'|trans}} 
                                </label>                                                     
                               <div id=\"usuarios_sala\"></div>
                               <div class=\"checkbox\">
                                   <label><input type=\"checkbox\" name=\"correo\" id=\"correo\" value=\"1\">{{'_usuario_notificacion'|trans}}</label>
                               </div>
                            </form>
                            
                        </div>
                        <hr>
                        <div>
                            <label for=\"usuario_sin\">
                                {{'_usuario_sin'|trans}} 
                            </label>  
                            <div class=\"well well-sm\">{{'_usuario_sin_inidicacion'|trans}}</div>                        
                            <textarea name=\"usuario_sin\" id=\"usuario_sin\" class=\"form-control\"></textarea>                        
                        </div>
                    </div>

                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"c_profile\">
                        <br>
                      <div id=\"coments\" class=\"content tab-pane\" >
                          
                        <label for=\"_comentarios_\">{{'_comentarios_'|trans}}</label>                                      
                        <div id=\"chat\">                    
                            <form id=\"chat-form\">                            
                                <textarea name=\"chat-mensaje\" id=\"chat-form-mensaje\" required=\"true\" class=\"form-control\"></textarea>                                        
                            </form>
                            <br>
                            <div class=\"panel panel-default\">
                              <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">{{'_foro_'|trans}}</h3>
                              </div>
                              <div class=\"panel-body\" id=\"content_mensajes\">
                                <div class=\"comments-container\">
                                    <ul class=\"comments-list\" id=\"chat-mensajes\">
                                                                            
                                    </ul>
                                </div>
                              </div>
                            </div>
                        </div>
                   
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class=\"modal-footer\">                   
                <button id=\"guardar_compartir\" type=\"submit\" class=\"btn btn-primary\">{{'_enviar_'|trans}}</button>            
                <button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">{{'_cerrar_'|trans}}</button>
            </div>
        </div>
    </div>
</div>


", "IndicadoresBundle:FichaTecnicaAdmin:compartir_sala.html.twig", "C:\\xampp\\htdocs\\etab-honuras-nuevo\\src\\MINSAL\\IndicadoresBundle/Resources/views/FichaTecnicaAdmin/compartir_sala.html.twig");
    }
}
