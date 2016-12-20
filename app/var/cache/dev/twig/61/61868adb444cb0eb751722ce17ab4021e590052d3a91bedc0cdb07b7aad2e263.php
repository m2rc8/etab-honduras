<?php

/* IndicadoresBundle::messages_js.html.twig */
class __TwigTemplate_4f36d67686c2bcd99e4db66c72efbff2758083a184bf602df36796e4a88e80a8 extends Twig_Template
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
        $__internal_0d283f08f87c78476b5f8bbd5eb282b547e3acb4e1383618d7c91b2fb6f3d6d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d283f08f87c78476b5f8bbd5eb282b547e3acb4e1383618d7c91b2fb6f3d6d6->enter($__internal_0d283f08f87c78476b5f8bbd5eb282b547e3acb4e1383618d7c91b2fb6f3d6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndicadoresBundle::messages_js.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    var trans={
            'sentencia_sql_origen_requeridos' : '";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("validacion.sentencia_sql_origen_requeridos"), "html", null, true);
        echo "',
            'debe_elegir_una_opcion' : '";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("validacion.debe_elegir_una_opcion"), "html", null, true);
        echo "',
            'elija_al_menos_un_campo' : '";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("validacion.elija_al_menos_un_campo"), "html", null, true);
        echo "',
            'elija_tipo_dato' : '";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.elija_tipo_dato"), "html", null, true);
        echo "',
            'elija_significado_dato' : '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.elija_significado_dato"), "html", null, true);
        echo "',
            'configure_campos': '";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.configure_campos"), "html", null, true);
        echo "',
            'nombre_campo': '";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.nombre_campo"), "html", null, true);
        echo "',
            'tipo': '";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.tipo"), "html", null, true);
        echo "',
            'significado': '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.significado"), "html", null, true);
        echo "',
            'datos_muestra': '";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.datos_muestra"), "html", null, true);
        echo "',
            'dimension': '";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.dimension"), "html", null, true);
        echo "',
            'ascendente': '";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.ascendente"), "html", null, true);
        echo "',
            'descendente': '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.descendente"), "html", null, true);
        echo "',
            'ordenar_y': '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.ordenar_y"), "html", null, true);
        echo "',
            'ordenar_x': '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.ordenar_x"), "html", null, true);
        echo "',
            'filtro_posicion': '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.filtro_posicion"), "html", null, true);
        echo "',
            'desde': '";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.desde"), "html", null, true);
        echo "',
            'hasta': '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.hasta"), "html", null, true);
        echo "',
            'filtrar': '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.filtrar"), "html", null, true);
        echo "',
            'quitar_filtro': '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.quitar_filtro"), "html", null, true);
        echo "',
            'dimension_opciones': '";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.dimension_opciones"), "html", null, true);
        echo "',
            'cambiar_dimension': '";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.cambiar_dimension"), "html", null, true);
        echo "',
            'exportar_imagen': '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.exportar_imagen"), "html", null, true);
        echo "',
\t\t\t'notas_lectura' : '";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.notas_lectura"), "html", null, true);
        echo "',
\t\t\t'last_reading' : '";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.last_reading"), "html", null, true);
        echo "',
\t\t\t'last_update' : '";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.last_update"), "html", null, true);
        echo "',
\t\t\t'last_confiable' : '";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.last_confiable"), "html", null, true);
        echo "',
\t\t\t'last_fuente' : '";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.last_fuente"), "html", null, true);
        echo "',
\t\t\t'last_nombre' : '";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.last_nombre"), "html", null, true);
        echo "',
\t\t\t'last_origen' : '";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.last_origen"), "html", null, true);
        echo "',
\t\t\t'last_responsable' : '";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.last_responsable"), "html", null, true);
        echo "',
\t\t\t'last_conexion' : '";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.last_conexion"), "html", null, true);
        echo "',
\t\t\t'origen_lectura' : '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.origen_lectura"), "html", null, true);
        echo "',
            'opciones_grafico': '";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.opciones_grafico"), "html", null, true);
        echo "',
            'filtrar_por_elemento': '";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.filtrar_por_elemento"), "html", null, true);
        echo "',
            'alertas_indicador': '";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.alertas_indicador"), "html", null, true);
        echo "',
            'color': '";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.color"), "html", null, true);
        echo "',
            'limite_inf': '";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.limite_inf"), "html", null, true);
        echo "',
            'limite_sup': '";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.limite_sup"), "html", null, true);
        echo "',
            'comentario': '";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.comentario"), "html", null, true);
        echo "',
            'rango_no_especificado': '";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.rango_no_especificado"), "html", null, true);
        echo "',
            'max_escala_y': '";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.max_escala_y"), "html", null, true);
        echo "',
\t\t\t'max_escala_y_manual': '";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.max_escala_y_manual"), "html", null, true);
        echo "',
            'max_indicador': '";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.max_indicador"), "html", null, true);
        echo "',
            'max_rango_alertas': '";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.max_rango_alertas"), "html", null, true);
        echo "',
            'ocultar_listado_indicadores': '";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.ocultar_listado_indicadores"), "html", null, true);
        echo "',
            'mostrar_listado_indicadores': '";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.mostrar_listado_indicadores"), "html", null, true);
        echo "',
            'tipo_grafico': '";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.tipo_grafico"), "html", null, true);
        echo "',
            'agregar_favorito': '";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.agregar_favorito"), "html", null, true);
        echo "',
            'quitar_favorito': '";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.quitar_favorito"), "html", null, true);
        echo "',
            'no_mapa': '";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.no_mapa"), "html", null, true);
        echo "',
            'ver_ficha_tecnica': '";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.ver_ficha_tecnica"), "html", null, true);
        echo "',
            'tabla_datos': '";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.tabla_datos"), "html", null, true);
        echo "',
            'indicador': '";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.indicador"), "html", null, true);
        echo "',
            'descargar_grafico': '";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.descargar_grafico"), "html", null, true);
        echo "',
            'opciones': '";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.opciones"), "html", null, true);
        echo "',
            'ver_sql': '";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.ver_sql"), "html", null, true);
        echo "',
            'diccionario_transformacion' : '";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.diccionario_transformacion"), "html", null, true);
        echo "',
            'elija_diccionario' : '";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.elija_diccionario"), "html", null, true);
        echo "',
            'quitar_indicador' : '";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.quitar_indicador"), "html", null, true);
        echo "',
            'columnas' : '";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.columnas"), "html", null, true);
        echo "',
            'pastel' : '";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.pastel"), "html", null, true);
        echo "',
            'mapa' : '";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.mapa"), "html", null, true);
        echo "',
            'lineas' : '";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.lineas"), "html", null, true);
        echo "',
\t\t\t'refrescar': '";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.refrescar"), "html", null, true);
        echo "',
            'guardar_imagen' : '";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.guardar_imagen"), "html", null, true);
        echo "',
            'por': '";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_por_"), "html", null, true);
        echo "',
            'nada_encontrado' : '";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript._nada_encontrado_"), "html", null, true);
        echo "',
            'mostrando_n_de_n' : '";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript._mostrando_n_de_n_"), "html", null, true);
        echo "',
            'mostrando_0' : '";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript._mostrando_0_"), "html", null, true);
        echo "',
            'filtrados_de': '";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript._filtrados_de_"), "html", null, true);
        echo "',
            'exportar' : '";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("_exportar_"), "html", null, true);
        echo "',
            'no_mas_niveles' : '";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.no_mas_niveles"), "html", null, true);
        echo "',
            'no_graficos_asignados' : '";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.no_graficos_asignados"), "html", null, true);
        echo "',
            'recargar_origen': '";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.recargar_origen"), "html", null, true);
        echo "',
            'ultima_lectura': '";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.ultima_lectura"), "html", null, true);
        echo "',
            'ultima_lectura_exp': '";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("javascript.ultima_lectura_exp"), "html", null, true);
        echo "',
            'maximizar' : '";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("maximizar"), "html", null, true);
        echo "',
            'teclaescape' : '";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teclaescape"), "html", null, true);
        echo "',
            'de' : '";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("de"), "html", null, true);
        echo "',
            'a' : '";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("a"), "html", null, true);
        echo "',
            'indicadorespublicos' : '";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("indicadorespublicos"), "html", null, true);
        echo "',
            'filtro_fecha' : '";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("filtro_fecha"), "html", null, true);
        echo "'\t\t\t
    }
</script>
";
        
        $__internal_0d283f08f87c78476b5f8bbd5eb282b547e3acb4e1383618d7c91b2fb6f3d6d6->leave($__internal_0d283f08f87c78476b5f8bbd5eb282b547e3acb4e1383618d7c91b2fb6f3d6d6_prof);

    }

    public function getTemplateName()
    {
        return "IndicadoresBundle::messages_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 85,  350 => 84,  346 => 83,  342 => 82,  338 => 81,  334 => 80,  330 => 79,  326 => 78,  322 => 77,  318 => 76,  314 => 75,  310 => 74,  306 => 73,  302 => 72,  298 => 71,  294 => 70,  290 => 69,  286 => 68,  282 => 67,  278 => 66,  274 => 65,  270 => 64,  266 => 63,  262 => 62,  258 => 61,  254 => 60,  250 => 59,  246 => 58,  242 => 57,  238 => 56,  234 => 55,  230 => 54,  226 => 53,  222 => 52,  218 => 51,  214 => 50,  210 => 49,  206 => 48,  202 => 47,  198 => 46,  194 => 45,  190 => 44,  186 => 43,  182 => 42,  178 => 41,  174 => 40,  170 => 39,  166 => 38,  162 => 37,  158 => 36,  154 => 35,  150 => 34,  146 => 33,  142 => 32,  138 => 31,  134 => 30,  130 => 29,  126 => 28,  122 => 27,  118 => 26,  114 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/javascript\">
    var trans={
            'sentencia_sql_origen_requeridos' : '{{'validacion.sentencia_sql_origen_requeridos'|trans}}',
            'debe_elegir_una_opcion' : '{{'validacion.debe_elegir_una_opcion'|trans}}',
            'elija_al_menos_un_campo' : '{{'validacion.elija_al_menos_un_campo'|trans}}',
            'elija_tipo_dato' : '{{'javascript.elija_tipo_dato'|trans}}',
            'elija_significado_dato' : '{{'javascript.elija_significado_dato'|trans}}',
            'configure_campos': '{{'javascript.configure_campos'|trans}}',
            'nombre_campo': '{{'javascript.nombre_campo'|trans}}',
            'tipo': '{{'javascript.tipo'|trans}}',
            'significado': '{{'javascript.significado'|trans}}',
            'datos_muestra': '{{'javascript.datos_muestra'|trans}}',
            'dimension': '{{'javascript.dimension'|trans}}',
            'ascendente': '{{'javascript.ascendente'|trans}}',
            'descendente': '{{'javascript.descendente'|trans}}',
            'ordenar_y': '{{'javascript.ordenar_y'|trans}}',
            'ordenar_x': '{{'javascript.ordenar_x'|trans}}',
            'filtro_posicion': '{{'javascript.filtro_posicion'|trans}}',
            'desde': '{{'javascript.desde'|trans}}',
            'hasta': '{{'javascript.hasta'|trans}}',
            'filtrar': '{{'javascript.filtrar'|trans}}',
            'quitar_filtro': '{{'javascript.quitar_filtro'|trans}}',
            'dimension_opciones': '{{'javascript.dimension_opciones'|trans}}',
            'cambiar_dimension': '{{'javascript.cambiar_dimension'|trans}}',
            'exportar_imagen': '{{'javascript.exportar_imagen'|trans}}',
\t\t\t'notas_lectura' : '{{'javascript.notas_lectura'|trans}}',
\t\t\t'last_reading' : '{{'javascript.last_reading'|trans}}',
\t\t\t'last_update' : '{{'javascript.last_update'|trans}}',
\t\t\t'last_confiable' : '{{'javascript.last_confiable'|trans}}',
\t\t\t'last_fuente' : '{{'javascript.last_fuente'|trans}}',
\t\t\t'last_nombre' : '{{'javascript.last_nombre'|trans}}',
\t\t\t'last_origen' : '{{'javascript.last_origen'|trans}}',
\t\t\t'last_responsable' : '{{'javascript.last_responsable'|trans}}',
\t\t\t'last_conexion' : '{{'javascript.last_conexion'|trans}}',
\t\t\t'origen_lectura' : '{{'javascript.origen_lectura'|trans}}',
            'opciones_grafico': '{{'javascript.opciones_grafico'|trans}}',
            'filtrar_por_elemento': '{{'javascript.filtrar_por_elemento'|trans}}',
            'alertas_indicador': '{{'javascript.alertas_indicador'|trans}}',
            'color': '{{'javascript.color'|trans}}',
            'limite_inf': '{{'javascript.limite_inf'|trans}}',
            'limite_sup': '{{'javascript.limite_sup'|trans}}',
            'comentario': '{{'javascript.comentario'|trans}}',
            'rango_no_especificado': '{{'javascript.rango_no_especificado'|trans}}',
            'max_escala_y': '{{'javascript.max_escala_y'|trans}}',
\t\t\t'max_escala_y_manual': '{{'javascript.max_escala_y_manual'|trans}}',
            'max_indicador': '{{'javascript.max_indicador'|trans}}',
            'max_rango_alertas': '{{'javascript.max_rango_alertas'|trans}}',
            'ocultar_listado_indicadores': '{{'javascript.ocultar_listado_indicadores'|trans}}',
            'mostrar_listado_indicadores': '{{'javascript.mostrar_listado_indicadores'|trans}}',
            'tipo_grafico': '{{'javascript.tipo_grafico'|trans}}',
            'agregar_favorito': '{{'javascript.agregar_favorito'|trans}}',
            'quitar_favorito': '{{'javascript.quitar_favorito'|trans}}',
            'no_mapa': '{{'javascript.no_mapa'|trans}}',
            'ver_ficha_tecnica': '{{'javascript.ver_ficha_tecnica'|trans}}',
            'tabla_datos': '{{'javascript.tabla_datos'|trans}}',
            'indicador': '{{'javascript.indicador'|trans}}',
            'descargar_grafico': '{{'javascript.descargar_grafico'|trans}}',
            'opciones': '{{'javascript.opciones'|trans}}',
            'ver_sql': '{{'javascript.ver_sql'|trans}}',
            'diccionario_transformacion' : '{{'javascript.diccionario_transformacion'|trans}}',
            'elija_diccionario' : '{{'javascript.elija_diccionario'|trans}}',
            'quitar_indicador' : '{{'javascript.quitar_indicador'|trans}}',
            'columnas' : '{{'javascript.columnas'|trans}}',
            'pastel' : '{{'javascript.pastel'|trans}}',
            'mapa' : '{{'javascript.mapa'|trans}}',
            'lineas' : '{{'javascript.lineas'|trans}}',
\t\t\t'refrescar': '{{'javascript.refrescar'|trans}}',
            'guardar_imagen' : '{{'javascript.guardar_imagen'|trans}}',
            'por': '{{'_por_'|trans}}',
            'nada_encontrado' : '{{'javascript._nada_encontrado_'|trans}}',
            'mostrando_n_de_n' : '{{'javascript._mostrando_n_de_n_'|trans}}',
            'mostrando_0' : '{{'javascript._mostrando_0_'|trans}}',
            'filtrados_de': '{{'javascript._filtrados_de_'|trans}}',
            'exportar' : '{{'_exportar_'|trans}}',
            'no_mas_niveles' : '{{'javascript.no_mas_niveles'|trans}}',
            'no_graficos_asignados' : '{{'javascript.no_graficos_asignados'|trans}}',
            'recargar_origen': '{{'javascript.recargar_origen'|trans}}',
            'ultima_lectura': '{{'javascript.ultima_lectura'|trans}}',
            'ultima_lectura_exp': '{{'javascript.ultima_lectura_exp'|trans}}',
            'maximizar' : '{{'maximizar'|trans}}',
            'teclaescape' : '{{'teclaescape'|trans}}',
            'de' : '{{'de'|trans}}',
            'a' : '{{'a'|trans}}',
            'indicadorespublicos' : '{{'indicadorespublicos'|trans}}',
            'filtro_fecha' : '{{'filtro_fecha'|trans}}'\t\t\t
    }
</script>
", "IndicadoresBundle::messages_js.html.twig", "C:\\xampp\\htdocs\\etab-honuras-nuevo\\src\\MINSAL\\IndicadoresBundle/Resources/views/messages_js.html.twig");
    }
}
