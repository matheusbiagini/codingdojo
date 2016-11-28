<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_67ccbd6e79b36363919ad06cdf14f938d50b3e8b69fe603f2dddac157744d43e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1230b77e732f171a8a56b8eb6949f9af16ff87af51dcb6f66e6593c096427731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1230b77e732f171a8a56b8eb6949f9af16ff87af51dcb6f66e6593c096427731->enter($__internal_1230b77e732f171a8a56b8eb6949f9af16ff87af51dcb6f66e6593c096427731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1230b77e732f171a8a56b8eb6949f9af16ff87af51dcb6f66e6593c096427731->leave($__internal_1230b77e732f171a8a56b8eb6949f9af16ff87af51dcb6f66e6593c096427731_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a002d2eef6c28a5027b87309f6fffb70b6a0cf092e480c94e37380f20c2e506e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a002d2eef6c28a5027b87309f6fffb70b6a0cf092e480c94e37380f20c2e506e->enter($__internal_a002d2eef6c28a5027b87309f6fffb70b6a0cf092e480c94e37380f20c2e506e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a002d2eef6c28a5027b87309f6fffb70b6a0cf092e480c94e37380f20c2e506e->leave($__internal_a002d2eef6c28a5027b87309f6fffb70b6a0cf092e480c94e37380f20c2e506e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d9960ddb843832499c799ddd807e55fdcd073180c4eb76331a192818f4165f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9960ddb843832499c799ddd807e55fdcd073180c4eb76331a192818f4165f6->enter($__internal_0d9960ddb843832499c799ddd807e55fdcd073180c4eb76331a192818f4165f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0d9960ddb843832499c799ddd807e55fdcd073180c4eb76331a192818f4165f6->leave($__internal_0d9960ddb843832499c799ddd807e55fdcd073180c4eb76331a192818f4165f6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3395dd6027b1651152b341c7620e508f99f3020e8b7908eca2397327c0338b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3395dd6027b1651152b341c7620e508f99f3020e8b7908eca2397327c0338b3->enter($__internal_e3395dd6027b1651152b341c7620e508f99f3020e8b7908eca2397327c0338b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e3395dd6027b1651152b341c7620e508f99f3020e8b7908eca2397327c0338b3->leave($__internal_e3395dd6027b1651152b341c7620e508f99f3020e8b7908eca2397327c0338b3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/matheusbiagini/Documentos/projetos/codingdojo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
