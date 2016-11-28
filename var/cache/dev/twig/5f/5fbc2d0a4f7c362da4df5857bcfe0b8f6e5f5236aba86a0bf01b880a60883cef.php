<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ae5ef417e7d4ee54eeb1330c2e2ffbd48a79c10f289fc4860b4d7c665edf02ca extends Twig_Template
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
        $__internal_e0816fe192236b5ca4066f461644b4ed383c0e64576733301b4925b854d7227c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0816fe192236b5ca4066f461644b4ed383c0e64576733301b4925b854d7227c->enter($__internal_e0816fe192236b5ca4066f461644b4ed383c0e64576733301b4925b854d7227c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0816fe192236b5ca4066f461644b4ed383c0e64576733301b4925b854d7227c->leave($__internal_e0816fe192236b5ca4066f461644b4ed383c0e64576733301b4925b854d7227c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_28c5b832e1b7ec52f2bd06b02a81ffa8d4c0e7cac27a73327de1d437e6568baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c5b832e1b7ec52f2bd06b02a81ffa8d4c0e7cac27a73327de1d437e6568baa->enter($__internal_28c5b832e1b7ec52f2bd06b02a81ffa8d4c0e7cac27a73327de1d437e6568baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_28c5b832e1b7ec52f2bd06b02a81ffa8d4c0e7cac27a73327de1d437e6568baa->leave($__internal_28c5b832e1b7ec52f2bd06b02a81ffa8d4c0e7cac27a73327de1d437e6568baa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8dc8edaf6b40c61f571d7225a0951b4575f1a69384ff3e3ff22ac438d150217b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc8edaf6b40c61f571d7225a0951b4575f1a69384ff3e3ff22ac438d150217b->enter($__internal_8dc8edaf6b40c61f571d7225a0951b4575f1a69384ff3e3ff22ac438d150217b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8dc8edaf6b40c61f571d7225a0951b4575f1a69384ff3e3ff22ac438d150217b->leave($__internal_8dc8edaf6b40c61f571d7225a0951b4575f1a69384ff3e3ff22ac438d150217b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_474198d8ed9ee4090a2b20b584347274586588a569e31a07cdf0903542c326ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474198d8ed9ee4090a2b20b584347274586588a569e31a07cdf0903542c326ed->enter($__internal_474198d8ed9ee4090a2b20b584347274586588a569e31a07cdf0903542c326ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_474198d8ed9ee4090a2b20b584347274586588a569e31a07cdf0903542c326ed->leave($__internal_474198d8ed9ee4090a2b20b584347274586588a569e31a07cdf0903542c326ed_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/matheusbiagini/Documentos/projetos/codingdojo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
