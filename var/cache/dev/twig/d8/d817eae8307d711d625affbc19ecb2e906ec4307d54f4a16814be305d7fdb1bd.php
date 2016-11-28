<?php

/* LessonDesignPatternsBundle:Lessons:Strategy.html.twig */
class __TwigTemplate_12d20e73b6012eb40eb2c44ddddfb73e3732f9c29b0049f4b1bbc5e07d97981e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "LessonDesignPatternsBundle:Lessons:Strategy.html.twig", 1);
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
        $__internal_4397f30fb663b348f80eb91e708908f72501072e7e8602c7bdba06b6a7c83024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4397f30fb663b348f80eb91e708908f72501072e7e8602c7bdba06b6a7c83024->enter($__internal_4397f30fb663b348f80eb91e708908f72501072e7e8602c7bdba06b6a7c83024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LessonDesignPatternsBundle:Lessons:Strategy.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4397f30fb663b348f80eb91e708908f72501072e7e8602c7bdba06b6a7c83024->leave($__internal_4397f30fb663b348f80eb91e708908f72501072e7e8602c7bdba06b6a7c83024_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea6a3105f04db22a277252e39c5bc09416457c9312e4bfb6aff90396bcd417af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6a3105f04db22a277252e39c5bc09416457c9312e4bfb6aff90396bcd417af->enter($__internal_ea6a3105f04db22a277252e39c5bc09416457c9312e4bfb6aff90396bcd417af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hypnobox - Dojo: Design Patterns";
        
        $__internal_ea6a3105f04db22a277252e39c5bc09416457c9312e4bfb6aff90396bcd417af->leave($__internal_ea6a3105f04db22a277252e39c5bc09416457c9312e4bfb6aff90396bcd417af_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b1ccdb37c49f1d4d8dc0a90dce22e0d8f2fcca55bc888a60bc013e50b777926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b1ccdb37c49f1d4d8dc0a90dce22e0d8f2fcca55bc888a60bc013e50b777926->enter($__internal_7b1ccdb37c49f1d4d8dc0a90dce22e0d8f2fcca55bc888a60bc013e50b777926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    Strategy
    
";
        
        $__internal_7b1ccdb37c49f1d4d8dc0a90dce22e0d8f2fcca55bc888a60bc013e50b777926->leave($__internal_7b1ccdb37c49f1d4d8dc0a90dce22e0d8f2fcca55bc888a60bc013e50b777926_prof);

    }

    public function getTemplateName()
    {
        return "LessonDesignPatternsBundle:Lessons:Strategy.html.twig";
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
    
    Strategy
    
{% endblock %}    
", "LessonDesignPatternsBundle:Lessons:Strategy.html.twig", "/home/matheusbiagini/Documentos/projetos/codingdojo/src/LessonDesignPatternsBundle/Resources/views/Lessons/Strategy.html.twig");
    }
}
