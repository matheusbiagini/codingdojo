<?php

/* LessonDesignPatternsBundle:Lessons:Default.html.twig */
class __TwigTemplate_16de2d888729ab2ede4816e780f1bed39f0b996c0f76e506da4939c2106b3a61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "LessonDesignPatternsBundle:Lessons:Default.html.twig", 1);
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
        $__internal_c0d3d374c2383ca699e840e4a289754122d8f968276c0a2d2bd330d1a4dba868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d3d374c2383ca699e840e4a289754122d8f968276c0a2d2bd330d1a4dba868->enter($__internal_c0d3d374c2383ca699e840e4a289754122d8f968276c0a2d2bd330d1a4dba868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LessonDesignPatternsBundle:Lessons:Default.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0d3d374c2383ca699e840e4a289754122d8f968276c0a2d2bd330d1a4dba868->leave($__internal_c0d3d374c2383ca699e840e4a289754122d8f968276c0a2d2bd330d1a4dba868_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d5b946c043867894d40bf359cdcc3ab1bce31784b72fdbbcdad7519395b2f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5b946c043867894d40bf359cdcc3ab1bce31784b72fdbbcdad7519395b2f33->enter($__internal_2d5b946c043867894d40bf359cdcc3ab1bce31784b72fdbbcdad7519395b2f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hypnobox - Dojo: Design Patterns";
        
        $__internal_2d5b946c043867894d40bf359cdcc3ab1bce31784b72fdbbcdad7519395b2f33->leave($__internal_2d5b946c043867894d40bf359cdcc3ab1bce31784b72fdbbcdad7519395b2f33_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_be9feee49bc8f1966d98ef3b154606d5b2d8ba43e431f05179432906ea2b4764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9feee49bc8f1966d98ef3b154606d5b2d8ba43e431f05179432906ea2b4764->enter($__internal_be9feee49bc8f1966d98ef3b154606d5b2d8ba43e431f05179432906ea2b4764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- Portfolio Grid Section -->
    <section id=\"dojoaulacurrent\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>Designs Patterns</h2>
                    <hr class=\"star-primary\">
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#designFactory\" class=\"portfolio-link\" data-toggle=\"modal\">
                        <p>Factory</p>
                        <img src=\"/assets/img/portfolio/cabin.png\" class=\"img-responsive\" alt=\"\">
                    </a>
                </div>

                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#designSingleton\" class=\"portfolio-link\" data-toggle=\"modal\">
                        <p>Singleton</p>
                        <img src=\"/assets/img/portfolio/cake.png\" class=\"img-responsive\" alt=\"\">
                    </a>
                </div>

                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#designStrategy\" class=\"portfolio-link\" data-toggle=\"modal\">
                        <p>Strategy</p>
                        <img src=\"/assets/img/portfolio/game.png\" class=\"img-responsive\" alt=\"\">
                    </a>
                </div>

            </div>
        </div>
    </section>


    <!-- Padrões de projetos Modals -->

    <div class=\"portfolio-modal modal fade\" id=\"designFactory\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\"></div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>Factory patterns</h2>
                            <hr class=\"star-primary\">
                            <img src=\"/assets/img/portfolio/cabin.png\" class=\"img-responsive img-centered\" alt=\"\">
                            <p>O padrão Factory fornece uma interface para a criação de famílias de objetos correlatos ou dependentes sem a necessidade de especificar a classe concreta destes objetos.</p>
                            <p>O padrão Factory fornece uma nova instância do objeto, toda vez que invocado.</p>
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=\"portfolio-modal modal fade\" id=\"designSingleton\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\">
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>Singleton patterns</h2>
                            <hr class=\"star-primary\">
                            <img src=\"/assets/img/portfolio/cake.png\" class=\"img-responsive img-centered\" alt=\"\">
                            <p>Singleton é um padrão de projeto de software (do inglês Design Pattern). Este padrão garante a existência de apenas uma instância de uma classe, mantendo um ponto global de acesso ao seu objeto.</p>
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"portfolio-modal modal fade\" id=\"designStrategy\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\">
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>Strategy patterns</h2>
                            <hr class=\"star-primary\">
                            <img src=\"/assets/img/portfolio/game.png\" class=\"img-responsive img-centered\" alt=\"\">
                            
                            <p> Strategy é um padrão de projeto de software (do inglês design pattern), pode ser chamado de policy. Este padrão foi documentado no Catálogo GOF (Gang of Four), sendo categorizado como um padrão comportamental de desenvolvimento de software.  De modo que delega as responsabilidades adquiridas pelas entidades, atribuindo, portanto, o comportamento. Assim a comunicação entre os objetos é aprimorada, pois há a distribuição das responsabilidades. </p>
                            <p> O objetivo é representar uma operação a ser realizada sobre os elementos de uma estrutura de objetos. </p>
                            <p> O padrão Strategy permite definir novas operações sem alterar as classes dos elementos sobre os quais opera.</p>
                            
                            
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
";
        
        $__internal_be9feee49bc8f1966d98ef3b154606d5b2d8ba43e431f05179432906ea2b4764->leave($__internal_be9feee49bc8f1966d98ef3b154606d5b2d8ba43e431f05179432906ea2b4764_prof);

    }

    public function getTemplateName()
    {
        return "LessonDesignPatternsBundle:Lessons:Default.html.twig";
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
    <!-- Portfolio Grid Section -->
    <section id=\"dojoaulacurrent\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>Designs Patterns</h2>
                    <hr class=\"star-primary\">
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#designFactory\" class=\"portfolio-link\" data-toggle=\"modal\">
                        <p>Factory</p>
                        <img src=\"/assets/img/portfolio/cabin.png\" class=\"img-responsive\" alt=\"\">
                    </a>
                </div>

                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#designSingleton\" class=\"portfolio-link\" data-toggle=\"modal\">
                        <p>Singleton</p>
                        <img src=\"/assets/img/portfolio/cake.png\" class=\"img-responsive\" alt=\"\">
                    </a>
                </div>

                <div class=\"col-sm-4 portfolio-item\">
                    <a href=\"#designStrategy\" class=\"portfolio-link\" data-toggle=\"modal\">
                        <p>Strategy</p>
                        <img src=\"/assets/img/portfolio/game.png\" class=\"img-responsive\" alt=\"\">
                    </a>
                </div>

            </div>
        </div>
    </section>


    <!-- Padrões de projetos Modals -->

    <div class=\"portfolio-modal modal fade\" id=\"designFactory\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\"></div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>Factory patterns</h2>
                            <hr class=\"star-primary\">
                            <img src=\"/assets/img/portfolio/cabin.png\" class=\"img-responsive img-centered\" alt=\"\">
                            <p>O padrão Factory fornece uma interface para a criação de famílias de objetos correlatos ou dependentes sem a necessidade de especificar a classe concreta destes objetos.</p>
                            <p>O padrão Factory fornece uma nova instância do objeto, toda vez que invocado.</p>
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=\"portfolio-modal modal fade\" id=\"designSingleton\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\">
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>Singleton patterns</h2>
                            <hr class=\"star-primary\">
                            <img src=\"/assets/img/portfolio/cake.png\" class=\"img-responsive img-centered\" alt=\"\">
                            <p>Singleton é um padrão de projeto de software (do inglês Design Pattern). Este padrão garante a existência de apenas uma instância de uma classe, mantendo um ponto global de acesso ao seu objeto.</p>
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"portfolio-modal modal fade\" id=\"designStrategy\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\">
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>Strategy patterns</h2>
                            <hr class=\"star-primary\">
                            <img src=\"/assets/img/portfolio/game.png\" class=\"img-responsive img-centered\" alt=\"\">
                            
                            <p> Strategy é um padrão de projeto de software (do inglês design pattern), pode ser chamado de policy. Este padrão foi documentado no Catálogo GOF (Gang of Four), sendo categorizado como um padrão comportamental de desenvolvimento de software.  De modo que delega as responsabilidades adquiridas pelas entidades, atribuindo, portanto, o comportamento. Assim a comunicação entre os objetos é aprimorada, pois há a distribuição das responsabilidades. </p>
                            <p> O objetivo é representar uma operação a ser realizada sobre os elementos de uma estrutura de objetos. </p>
                            <p> O padrão Strategy permite definir novas operações sem alterar as classes dos elementos sobre os quais opera.</p>
                            
                            
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
{% endblock %}    
", "LessonDesignPatternsBundle:Lessons:Default.html.twig", "/home/matheusbiagini/Documentos/projetos/codingdojo/src/LessonDesignPatternsBundle/Resources/views/Lessons/Default.html.twig");
    }
}
