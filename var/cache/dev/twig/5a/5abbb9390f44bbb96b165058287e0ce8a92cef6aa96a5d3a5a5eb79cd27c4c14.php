<?php

/* base.html.twig */
class __TwigTemplate_5e864da309a5fd62e0dd16dbe97717958d9f4ae4d0f17b8aaa2a339d520e5eab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ce634fa87e3ea5a40dd29996ae357cbd5bd1247828c3b50115cc2ddaef2cb74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce634fa87e3ea5a40dd29996ae357cbd5bd1247828c3b50115cc2ddaef2cb74->enter($__internal_3ce634fa87e3ea5a40dd29996ae357cbd5bd1247828c3b50115cc2ddaef2cb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3ce634fa87e3ea5a40dd29996ae357cbd5bd1247828c3b50115cc2ddaef2cb74->leave($__internal_3ce634fa87e3ea5a40dd29996ae357cbd5bd1247828c3b50115cc2ddaef2cb74_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c84cec2f08c2f85e3aa500743149345ada9f56d4b7afdafb992b5cf8f0b8caac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84cec2f08c2f85e3aa500743149345ada9f56d4b7afdafb992b5cf8f0b8caac->enter($__internal_c84cec2f08c2f85e3aa500743149345ada9f56d4b7afdafb992b5cf8f0b8caac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c84cec2f08c2f85e3aa500743149345ada9f56d4b7afdafb992b5cf8f0b8caac->leave($__internal_c84cec2f08c2f85e3aa500743149345ada9f56d4b7afdafb992b5cf8f0b8caac_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b521ee0b1b91306bc6abc2994cf37cdafe6a733b927e7c1384d4ca3741690fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b521ee0b1b91306bc6abc2994cf37cdafe6a733b927e7c1384d4ca3741690fdc->enter($__internal_b521ee0b1b91306bc6abc2994cf37cdafe6a733b927e7c1384d4ca3741690fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b521ee0b1b91306bc6abc2994cf37cdafe6a733b927e7c1384d4ca3741690fdc->leave($__internal_b521ee0b1b91306bc6abc2994cf37cdafe6a733b927e7c1384d4ca3741690fdc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_30d7703cdb528d2aef0c6540f068f3813ae4130eb0a621efd5b56a32eddb2a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d7703cdb528d2aef0c6540f068f3813ae4130eb0a621efd5b56a32eddb2a38->enter($__internal_30d7703cdb528d2aef0c6540f068f3813ae4130eb0a621efd5b56a32eddb2a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_30d7703cdb528d2aef0c6540f068f3813ae4130eb0a621efd5b56a32eddb2a38->leave($__internal_30d7703cdb528d2aef0c6540f068f3813ae4130eb0a621efd5b56a32eddb2a38_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c161f33eecd3e136901780204959ef93f97ce43cef149ff5149fd148bb65201a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c161f33eecd3e136901780204959ef93f97ce43cef149ff5149fd148bb65201a->enter($__internal_c161f33eecd3e136901780204959ef93f97ce43cef149ff5149fd148bb65201a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c161f33eecd3e136901780204959ef93f97ce43cef149ff5149fd148bb65201a->leave($__internal_c161f33eecd3e136901780204959ef93f97ce43cef149ff5149fd148bb65201a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/matheusbiagini/Documentos/projetos/codingdojo/app/Resources/views/base.html.twig");
    }
}
