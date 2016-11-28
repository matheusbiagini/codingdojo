<?php

/* LessonDesignPatternsBundle:Default:index.html.twig */
class __TwigTemplate_271413dd3d4688bfdb441f88c3782ff339ab12979833dcb3ea42fc5ad7f33f9e extends Twig_Template
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
        $__internal_6c1126aa993f3b0216731d7a06f58a5bf47c6d6c9dd5dfc20c01327cc39b26a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1126aa993f3b0216731d7a06f58a5bf47c6d6c9dd5dfc20c01327cc39b26a3->enter($__internal_6c1126aa993f3b0216731d7a06f58a5bf47c6d6c9dd5dfc20c01327cc39b26a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LessonDesignPatternsBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_6c1126aa993f3b0216731d7a06f58a5bf47c6d6c9dd5dfc20c01327cc39b26a3->leave($__internal_6c1126aa993f3b0216731d7a06f58a5bf47c6d6c9dd5dfc20c01327cc39b26a3_prof);

    }

    public function getTemplateName()
    {
        return "LessonDesignPatternsBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "LessonDesignPatternsBundle:Default:index.html.twig", "/home/matheusbiagini/Documentos/projetos/codingdojo/src/LessonDesignPatternsBundle/Resources/views/Default/index.html.twig");
    }
}
