<?php

/* MobileDetectBundle:Collector:device.html.twig */
class __TwigTemplate_958cc70d31696e8b3b3315b150a7ba6889ab048d82f74bd6a4fe63d6148d0154 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "MobileDetectBundle:Collector:device.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3f83cfeec67587276b5ff8d12f0b6423ace737d26ec78a0f18b542f487f1935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f83cfeec67587276b5ff8d12f0b6423ace737d26ec78a0f18b542f487f1935->enter($__internal_d3f83cfeec67587276b5ff8d12f0b6423ace737d26ec78a0f18b542f487f1935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileDetectBundle:Collector:device.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3f83cfeec67587276b5ff8d12f0b6423ace737d26ec78a0f18b542f487f1935->leave($__internal_d3f83cfeec67587276b5ff8d12f0b6423ace737d26ec78a0f18b542f487f1935_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_75dc2569aed2f4f1c267c85f6483d217b929f132e2d8630a0ae12b5128870c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75dc2569aed2f4f1c267c85f6483d217b929f132e2d8630a0ae12b5128870c41->enter($__internal_75dc2569aed2f4f1c267c85f6483d217b929f132e2d8630a0ae12b5128870c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "
    ";
        // line 5
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 6
        echo "    ";
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) > 1)) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 100 100\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
                    <path fill=\"#AAAAAA\"
                          d=\"m33.975 95h32.05c5.565 0 10.08-4.279 10.08-9.569v-70.855c0-5.285-4.513-9.576-10.07-9.576h-32.05c-5.564 0-10.08 4.291-10.08 9.576v70.854c0 5.288 4.513 9.57 10.08 9.57m16.03-3.257c-2.493 0-4.506-2.02-4.506-4.498 0-2.489 2.01-4.502 4.506-4.502 2.487 0 4.494 2.01 4.494 4.502 0 2.481-2.01 4.498-4.494 4.498m-6.868-80.911h13.727c.556 0 1.01.383 1.01.852 0 .471-.452.854-1.01.854h-13.727c-.55 0-1.01-.383-1.01-.854-.0001-.469.454-.852 1.01-.852m-15.289 10.798c0-.794.675-1.438 1.508-1.438h41.29c.835 0 1.507.641 1.507 1.438v56.49c0 .791-.672 1.433-1.507 1.433h-41.29c-.833 0-1.508-.642-1.508-1.433v-56.49\"/>
                </svg>
            <span class=\"sf-toolbar-value\">View: ";
            // line 12
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "currentView", array())), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 14
            echo "        ";
            ob_start();
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Device Detector</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <span>Switch view:</span>
            </div>
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "views", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["viewData"]) {
                // line 22
                echo "                ";
                $context["viewLink"] = "";
                // line 23
                echo "                ";
                if ($this->getAttribute($context["viewData"], "isCurrent", array())) {
                    // line 24
                    echo "                    ";
                    $context["viewLink"] = "<span class=\"sf-toolbar-status sf-toolbar-status-green\">current</span>";
                    // line 25
                    echo "                ";
                } elseif (($this->getAttribute($context["viewData"], "enabled", array()) == false)) {
                    // line 26
                    echo "                    ";
                    $context["viewLink"] = "External";
                    // line 27
                    echo "                ";
                } else {
                    // line 28
                    echo "                    ";
                    $context["viewLink"] = (("<span><a href=\"" . $this->getAttribute($context["viewData"], "link", array())) . "\">Use this view</a></span>");
                    // line 29
                    echo "                ";
                }
                // line 30
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["viewData"], "label", array()), "html", null, true);
                echo "</b>
                    ";
                // line 32
                echo (isset($context["viewLink"]) ? $context["viewLink"] : $this->getContext($context, "viewLink"));
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['viewData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 36
            echo "    ";
        } else {
            // line 37
            echo "        ";
            // line 38
            echo "        ";
            ob_start();
            // line 39
            echo "            <span>
            <img width=\"14\" height=\"28\" alt=\"Device\"
                 src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAABbklEQVRYR+2XMUvDQBTH37ujS5Eu7QdwVNMuFhykDQEnB2NCJwcRHISCiyDiImRzcS9OuqpIW7+AMQ20g1tSdNVP4NYi7T1JcSo1NamQInfrvXf/3/1ueYeQ8MKE82H+AZY2zGzqk3YIIRfFFgL2CaDpO/WXsL5QA0E479MzMnwEpPcoACBgQTCxi4xXunbd/ak3FKBQNg4JcNVv1fcjhX8XK6q5h4J0321UYgHkVcMKGn2nYa3XPJsB2L8BGQItcsDrj5szICGsrvOgzQxQqnmWWy2MgKatUs0bBUoAaUAakAakAWlAGvhfBhIfSKYNIZP285qh/dlENClAKW+vIGIHGV/z7PvX8ZqZAQqqeUqCcr7bOJ4EUCxupftpfpAZpC7b7bveeI2i6jojrHqt5mbMmdBcFjC0EfgJMnqL8gwkRAaBnSPShffUvIoFEDQpmlnCAR0RE9koAIywBwxuw8KD8+b/axbl1nFqEzfwBYtWrTCbYUHuAAAAAElFTkSuQmCC\">
            View: ";
            // line 42
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "currentView", array())), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 45
            echo "        ";
            ob_start();
            // line 46
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Device Detector</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-device-detector-switcher\">
                    <thead>
                    <tr>
                        <th>View</th>
                        <th>Switch to...</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "views", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["viewData"]) {
                // line 59
                echo "                        ";
                $context["viewLink"] = "";
                // line 60
                echo "                        ";
                if ($this->getAttribute($context["viewData"], "isCurrent", array())) {
                    // line 61
                    echo "                            ";
                    $context["viewLink"] = "<em>current</em>";
                    // line 62
                    echo "                        ";
                } elseif (($this->getAttribute($context["viewData"], "enabled", array()) == false)) {
                    // line 63
                    echo "                            ";
                    $context["viewLink"] = "External";
                    // line 64
                    echo "                        ";
                } else {
                    // line 65
                    echo "                            ";
                    $context["viewLink"] = (("<a href=\"" . $this->getAttribute($context["viewData"], "link", array())) . "\">Use this view</a>");
                    // line 66
                    echo "                        ";
                }
                // line 67
                echo "                        <tr>
                            <td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["viewData"], "label", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 69
                echo (isset($context["viewLink"]) ? $context["viewLink"] : $this->getContext($context, "viewLink"));
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['viewData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                    </tbody>
                </table>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 76
            echo "        <style type=\"text/css\">
            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher {
                width: 100%;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher th,
            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher td {
                border-bottom: 1px solid #ddd;
                padding: 0 4px;
                color: #2f2f2f;
                background-color: #fff;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher th {
                background-color: #eee;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher a {
                color: #00f;
            }
        </style>
    ";
        }
        // line 98
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "MobileDetectBundle:Collector:device.html.twig", 98)->display(array_merge($context, array("link" => false)));
        
        $__internal_75dc2569aed2f4f1c267c85f6483d217b929f132e2d8630a0ae12b5128870c41->leave($__internal_75dc2569aed2f4f1c267c85f6483d217b929f132e2d8630a0ae12b5128870c41_prof);

    }

    public function getTemplateName()
    {
        return "MobileDetectBundle:Collector:device.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 98,  206 => 76,  200 => 72,  191 => 69,  187 => 68,  184 => 67,  181 => 66,  178 => 65,  175 => 64,  172 => 63,  169 => 62,  166 => 61,  163 => 60,  160 => 59,  156 => 58,  142 => 46,  139 => 45,  133 => 42,  128 => 39,  125 => 38,  123 => 37,  120 => 36,  117 => 35,  108 => 32,  104 => 31,  101 => 30,  98 => 29,  95 => 28,  92 => 27,  89 => 26,  86 => 25,  83 => 24,  80 => 23,  77 => 22,  73 => 21,  65 => 15,  62 => 14,  57 => 12,  51 => 8,  48 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}

    {% set profiler_markup_version = profiler_markup_version|default(1) %}
    {% if profiler_markup_version > 1 %}
        {% set icon %}
            <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 100 100\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
                    <path fill=\"#AAAAAA\"
                          d=\"m33.975 95h32.05c5.565 0 10.08-4.279 10.08-9.569v-70.855c0-5.285-4.513-9.576-10.07-9.576h-32.05c-5.564 0-10.08 4.291-10.08 9.576v70.854c0 5.288 4.513 9.57 10.08 9.57m16.03-3.257c-2.493 0-4.506-2.02-4.506-4.498 0-2.489 2.01-4.502 4.506-4.502 2.487 0 4.494 2.01 4.494 4.502 0 2.481-2.01 4.498-4.494 4.498m-6.868-80.911h13.727c.556 0 1.01.383 1.01.852 0 .471-.452.854-1.01.854h-13.727c-.55 0-1.01-.383-1.01-.854-.0001-.469.454-.852 1.01-.852m-15.289 10.798c0-.794.675-1.438 1.508-1.438h41.29c.835 0 1.507.641 1.507 1.438v56.49c0 .791-.672 1.433-1.507 1.433h-41.29c-.833 0-1.508-.642-1.508-1.433v-56.49\"/>
                </svg>
            <span class=\"sf-toolbar-value\">View: {{ collector.currentView | capitalize }}</span>
        {% endset %}
        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Device Detector</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <span>Switch view:</span>
            </div>
            {% for viewData in collector.views %}
                {% set viewLink = '' %}
                {% if viewData.isCurrent %}
                    {% set viewLink = '<span class=\"sf-toolbar-status sf-toolbar-status-green\">current</span>' %}
                {% elseif viewData.enabled == false %}
                    {%  set viewLink = 'External' %}
                {% else %}
                    {%  set viewLink = '<span><a href=\"' ~ viewData.link ~ '\">Use this view</a></span>' %}
                {% endif %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ viewData.label }}</b>
                    {{ viewLink | raw }}
                </div>
            {% endfor %}
        {% endset %}
    {% else %}
        {# Fallback version for symfony versions < 2.8 #}
        {% set icon %}
            <span>
            <img width=\"14\" height=\"28\" alt=\"Device\"
                 src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAABbklEQVRYR+2XMUvDQBTH37ujS5Eu7QdwVNMuFhykDQEnB2NCJwcRHISCiyDiImRzcS9OuqpIW7+AMQ20g1tSdNVP4NYi7T1JcSo1NamQInfrvXf/3/1ueYeQ8MKE82H+AZY2zGzqk3YIIRfFFgL2CaDpO/WXsL5QA0E479MzMnwEpPcoACBgQTCxi4xXunbd/ak3FKBQNg4JcNVv1fcjhX8XK6q5h4J0321UYgHkVcMKGn2nYa3XPJsB2L8BGQItcsDrj5szICGsrvOgzQxQqnmWWy2MgKatUs0bBUoAaUAakAakAWlAGvhfBhIfSKYNIZP285qh/dlENClAKW+vIGIHGV/z7PvX8ZqZAQqqeUqCcr7bOJ4EUCxupftpfpAZpC7b7bveeI2i6jojrHqt5mbMmdBcFjC0EfgJMnqL8gwkRAaBnSPShffUvIoFEDQpmlnCAR0RE9koAIywBwxuw8KD8+b/axbl1nFqEzfwBYtWrTCbYUHuAAAAAElFTkSuQmCC\">
            View: {{ collector.currentView | capitalize }}
            </span>
        {% endset %}
        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Device Detector</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-device-detector-switcher\">
                    <thead>
                    <tr>
                        <th>View</th>
                        <th>Switch to...</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for viewData in collector.views %}
                        {% set viewLink = '' %}
                        {% if viewData.isCurrent %}
                            {% set viewLink = '<em>current</em>' %}
                        {% elseif viewData.enabled == false %}
                            {%  set viewLink = 'External' %}
                        {% else %}
                            {%  set viewLink = '<a href=\"' ~ viewData.link ~ '\">Use this view</a>' %}
                        {% endif %}
                        <tr>
                            <td>{{ viewData.label }}</td>
                            <td>{{ viewLink | raw }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endset %}
        <style type=\"text/css\">
            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher {
                width: 100%;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher th,
            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher td {
                border-bottom: 1px solid #ddd;
                padding: 0 4px;
                color: #2f2f2f;
                background-color: #fff;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher th {
                background-color: #eee;
            }

            .sf-toolbar-block .sf-toolbar-info-piece table.sf-toolbar-device-detector-switcher a {
                color: #00f;
            }
        </style>
    {% endif %}
    {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': false } %}
{% endblock %}
", "MobileDetectBundle:Collector:device.html.twig", "C:\\xampp\\htdocs\\etab-honuras-nuevo\\vendor\\suncat\\mobile-detect-bundle\\SunCat\\MobileDetectBundle/Resources/views/Collector/device.html.twig");
    }
}
