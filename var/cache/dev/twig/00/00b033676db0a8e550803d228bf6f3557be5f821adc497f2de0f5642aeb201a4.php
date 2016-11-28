<?php

/* LessonDesignPatternsBundle:Lessons:Factory.html.twig */
class __TwigTemplate_28d8c7dc2f4d8f969005ef98e46eec130ee48eff2d127ce002f157bec765152c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "LessonDesignPatternsBundle:Lessons:Factory.html.twig", 1);
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
        $__internal_c1a98d2430f2badcc3348423b91169e1b84397584ad06d1552068802f646d877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a98d2430f2badcc3348423b91169e1b84397584ad06d1552068802f646d877->enter($__internal_c1a98d2430f2badcc3348423b91169e1b84397584ad06d1552068802f646d877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LessonDesignPatternsBundle:Lessons:Factory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1a98d2430f2badcc3348423b91169e1b84397584ad06d1552068802f646d877->leave($__internal_c1a98d2430f2badcc3348423b91169e1b84397584ad06d1552068802f646d877_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4cac994f482a91611660413431656b62ec16c3c9d019c31d796d94c55501feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4cac994f482a91611660413431656b62ec16c3c9d019c31d796d94c55501feb->enter($__internal_c4cac994f482a91611660413431656b62ec16c3c9d019c31d796d94c55501feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hypnobox - Dojo: Design Patterns";
        
        $__internal_c4cac994f482a91611660413431656b62ec16c3c9d019c31d796d94c55501feb->leave($__internal_c4cac994f482a91611660413431656b62ec16c3c9d019c31d796d94c55501feb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_86d73594b25d8473923f92f2c09bae3100be3c2950995857224e2a356f92b322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d73594b25d8473923f92f2c09bae3100be3c2950995857224e2a356f92b322->enter($__internal_86d73594b25d8473923f92f2c09bae3100be3c2950995857224e2a356f92b322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    Factory
    
";
        
        $__internal_86d73594b25d8473923f92f2c09bae3100be3c2950995857224e2a356f92b322->leave($__internal_86d73594b25d8473923f92f2c09bae3100be3c2950995857224e2a356f92b322_prof);

    }

    public function getTemplateName()
    {
        return "LessonDesignPatternsBundle:Lessons:Factory.html.twig";
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
    
    Factory
    
{% endblock %}    
", "LessonDesignPatternsBundle:Lessons:Factory.html.twig", "/home/matheusbiagini/Documentos/projetos/codingdojo/src/LessonDesignPatternsBundle/Resources/views/Lessons/Factory.html.twig");
    }
}
