<?php

/* LessonDesignPatternsBundle:Lessons:Singleton.html.twig */
class __TwigTemplate_b5b83e33d65398a3f758edece760be33fe656f798cc4a3fb062fc36865184e88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "LessonDesignPatternsBundle:Lessons:Singleton.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4c452a6379fb98bfb71d70284576240851fa499ec340e770fb58bbc816860ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c452a6379fb98bfb71d70284576240851fa499ec340e770fb58bbc816860ef->enter($__internal_c4c452a6379fb98bfb71d70284576240851fa499ec340e770fb58bbc816860ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LessonDesignPatternsBundle:Lessons:Singleton.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4c452a6379fb98bfb71d70284576240851fa499ec340e770fb58bbc816860ef->leave($__internal_c4c452a6379fb98bfb71d70284576240851fa499ec340e770fb58bbc816860ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1103499c52e250243a11d53ba1f6c2e01fd555f92214482e2160b801596ca83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1103499c52e250243a11d53ba1f6c2e01fd555f92214482e2160b801596ca83->enter($__internal_f1103499c52e250243a11d53ba1f6c2e01fd555f92214482e2160b801596ca83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hypnobox - Dojo: Design Patterns";
        
        $__internal_f1103499c52e250243a11d53ba1f6c2e01fd555f92214482e2160b801596ca83->leave($__internal_f1103499c52e250243a11d53ba1f6c2e01fd555f92214482e2160b801596ca83_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_54f5355a3f8a22c5cad84f7130db2e97909d3f1a55d67079b6aa8d513c80b2fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f5355a3f8a22c5cad84f7130db2e97909d3f1a55d67079b6aa8d513c80b2fd->enter($__internal_54f5355a3f8a22c5cad84f7130db2e97909d3f1a55d67079b6aa8d513c80b2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    Singleton
    
";
        
        $__internal_54f5355a3f8a22c5cad84f7130db2e97909d3f1a55d67079b6aa8d513c80b2fd->leave($__internal_54f5355a3f8a22c5cad84f7130db2e97909d3f1a55d67079b6aa8d513c80b2fd_prof);

    }

    public function getTemplateName()
    {
        return "LessonDesignPatternsBundle:Lessons:Singleton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Hypnobox - Dojo: Design Patterns{% endblock %}

{% block body %}
    
    Singleton
    
{% endblock %}    
", "LessonDesignPatternsBundle:Lessons:Singleton.html.twig", "/home/matheusbiagini/Documentos/projetos/codingdojo/src/LessonDesignPatternsBundle/Resources/views/Lessons/Singleton.html.twig");
    }
}
