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
        $__internal_e617a81196b0b3c53ee98ec69f23960fb30a8018cf9e3919c89c405703affd81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e617a81196b0b3c53ee98ec69f23960fb30a8018cf9e3919c89c405703affd81->enter($__internal_e617a81196b0b3c53ee98ec69f23960fb30a8018cf9e3919c89c405703affd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    
    <!-- Bootstrap Core CSS -->
    <link href=\"/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link href=\"/assets/css/freelancer.min.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body id=\"page-top\" class=\"index\">

    <!-- Navigation -->
    <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top navbar-custom\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"#page-top\">
                    Hypnobox - Coding Dojo\t\t
\t\t</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"hidden\">
                        <a href=\"#page-top\"></a>
                    </li>
                    <li class=\"page-scroll\">
                        <a href=\"#dojoaulacurrent\">Aula Dojo</a>
                    </li>
                    <li class=\"page-scroll\">
                        <a href=\"#about\">Time</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <img class=\"img-responsive\" src=\"/assets/img/profile.png\" alt=\"\">
                    <div class=\"intro-text\">
                        <span class=\"name\">Coding Dojo</span>
                        <hr class=\"star-light\">
                        <span class=\"skills\">HypnoDevs</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id=\"dojoaulacurrent\">
    
        ";
        // line 89
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "    
    </section>
    
    <!-- About Section -->
    <section class=\"success\" id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>Time</h2>
                    <hr class=\"star-light\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-lg-offset-2\">
                    <p>Um time que pensa em pessoas antes de processos. Promove conhecimento, e acima de tudo, necessita de conhecimento.</p>
                </div>
                <div class=\"col-lg-4\">
                    <p>A ideia é promover conhecimento através do coding Dojo. Qualquer pessoa é bem vinda, desde que traga chocolates e balas para alimentar essa galera. :)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class=\"text-center\">
        <div class=\"footer-above\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"footer-col col-md-4\">
                        <h3>Localização</h3>
                        <p>Na sala de T.I
                            <br>ou abasteçendo a caneca de café.</p>
                    </div>
                    <div class=\"footer-col col-md-4\">
                        <h3>Redes sociais</h3>
                        <ul class=\"list-inline\">
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-facebook\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-google-plus\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-twitter\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-linkedin\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-dribbble\"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"footer-col col-md-4\">
                        <h3>Quer falar com o time?</h3>
                        <p>Levanta a bunda da cadeira e cola aqui na sala. Isso é ser ágil.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-below\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        Copyright &copy; Time Hypnobox 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class=\"scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md\">
        <a class=\"btn btn-primary\" href=\"#page-top\">
            <i class=\"fa fa-chevron-up\"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src=\"/assets/vendor/jquery/jquery.min.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"/assets/vendor/bootstrap/js/bootstrap.min.js\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

    <!-- Contact Form JavaScript -->
    <script src=\"/assets/js/jqBootstrapValidation.js\"></script>
    <script src=\"/assets/js/contact_me.js\"></script>

    <!-- Theme JavaScript -->
    <script src=\"/assets/js/freelancer.min.js\"></script>

    ";
        // line 184
        $this->displayBlock('javascripts', $context, $blocks);
        // line 185
        echo "    
</body>

</html>
";
        
        $__internal_e617a81196b0b3c53ee98ec69f23960fb30a8018cf9e3919c89c405703affd81->leave($__internal_e617a81196b0b3c53ee98ec69f23960fb30a8018cf9e3919c89c405703affd81_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e3d616d2d5f18afb91dfa6481f6ece62202e70f3deaaf7dbf8cb3f22d6ef731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3d616d2d5f18afb91dfa6481f6ece62202e70f3deaaf7dbf8cb3f22d6ef731->enter($__internal_3e3d616d2d5f18afb91dfa6481f6ece62202e70f3deaaf7dbf8cb3f22d6ef731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hypnobox - Coding Dojo";
        
        $__internal_3e3d616d2d5f18afb91dfa6481f6ece62202e70f3deaaf7dbf8cb3f22d6ef731->leave($__internal_3e3d616d2d5f18afb91dfa6481f6ece62202e70f3deaaf7dbf8cb3f22d6ef731_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_571c163d9b0587ba42f03359463c0568d26d61ec58c41e09d248511253703825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571c163d9b0587ba42f03359463c0568d26d61ec58c41e09d248511253703825->enter($__internal_571c163d9b0587ba42f03359463c0568d26d61ec58c41e09d248511253703825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_571c163d9b0587ba42f03359463c0568d26d61ec58c41e09d248511253703825->leave($__internal_571c163d9b0587ba42f03359463c0568d26d61ec58c41e09d248511253703825_prof);

    }

    // line 89
    public function block_body($context, array $blocks = array())
    {
        $__internal_51928742b5e5836b1ba400ba3e903e07c541cd3d7e5481062ae20ddcf1ad8e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51928742b5e5836b1ba400ba3e903e07c541cd3d7e5481062ae20ddcf1ad8e3c->enter($__internal_51928742b5e5836b1ba400ba3e903e07c541cd3d7e5481062ae20ddcf1ad8e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_51928742b5e5836b1ba400ba3e903e07c541cd3d7e5481062ae20ddcf1ad8e3c->leave($__internal_51928742b5e5836b1ba400ba3e903e07c541cd3d7e5481062ae20ddcf1ad8e3c_prof);

    }

    // line 184
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e9f32019aa3193f2b3b7058e3620a8a1716a4cc5b42e1c492e7260b87168b420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f32019aa3193f2b3b7058e3620a8a1716a4cc5b42e1c492e7260b87168b420->enter($__internal_e9f32019aa3193f2b3b7058e3620a8a1716a4cc5b42e1c492e7260b87168b420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e9f32019aa3193f2b3b7058e3620a8a1716a4cc5b42e1c492e7260b87168b420->leave($__internal_e9f32019aa3193f2b3b7058e3620a8a1716a4cc5b42e1c492e7260b87168b420_prof);

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
        return array (  269 => 184,  258 => 89,  247 => 14,  235 => 12,  224 => 185,  222 => 184,  126 => 90,  124 => 89,  46 => 15,  44 => 14,  39 => 12,  26 => 1,);
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

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %}Hypnobox - Coding Dojo{% endblock %}</title>

    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    
    <!-- Bootstrap Core CSS -->
    <link href=\"/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link href=\"/assets/css/freelancer.min.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body id=\"page-top\" class=\"index\">

    <!-- Navigation -->
    <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top navbar-custom\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"#page-top\">
                    Hypnobox - Coding Dojo\t\t
\t\t</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"hidden\">
                        <a href=\"#page-top\"></a>
                    </li>
                    <li class=\"page-scroll\">
                        <a href=\"#dojoaulacurrent\">Aula Dojo</a>
                    </li>
                    <li class=\"page-scroll\">
                        <a href=\"#about\">Time</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <img class=\"img-responsive\" src=\"/assets/img/profile.png\" alt=\"\">
                    <div class=\"intro-text\">
                        <span class=\"name\">Coding Dojo</span>
                        <hr class=\"star-light\">
                        <span class=\"skills\">HypnoDevs</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id=\"dojoaulacurrent\">
    
        {% block body %}{% endblock %}
    
    </section>
    
    <!-- About Section -->
    <section class=\"success\" id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>Time</h2>
                    <hr class=\"star-light\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-lg-offset-2\">
                    <p>Um time que pensa em pessoas antes de processos. Promove conhecimento, e acima de tudo, necessita de conhecimento.</p>
                </div>
                <div class=\"col-lg-4\">
                    <p>A ideia é promover conhecimento através do coding Dojo. Qualquer pessoa é bem vinda, desde que traga chocolates e balas para alimentar essa galera. :)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class=\"text-center\">
        <div class=\"footer-above\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"footer-col col-md-4\">
                        <h3>Localização</h3>
                        <p>Na sala de T.I
                            <br>ou abasteçendo a caneca de café.</p>
                    </div>
                    <div class=\"footer-col col-md-4\">
                        <h3>Redes sociais</h3>
                        <ul class=\"list-inline\">
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-facebook\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-google-plus\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-twitter\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-linkedin\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-dribbble\"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"footer-col col-md-4\">
                        <h3>Quer falar com o time?</h3>
                        <p>Levanta a bunda da cadeira e cola aqui na sala. Isso é ser ágil.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-below\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        Copyright &copy; Time Hypnobox 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class=\"scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md\">
        <a class=\"btn btn-primary\" href=\"#page-top\">
            <i class=\"fa fa-chevron-up\"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src=\"/assets/vendor/jquery/jquery.min.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"/assets/vendor/bootstrap/js/bootstrap.min.js\"></script>

    <!-- Plugin JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

    <!-- Contact Form JavaScript -->
    <script src=\"/assets/js/jqBootstrapValidation.js\"></script>
    <script src=\"/assets/js/contact_me.js\"></script>

    <!-- Theme JavaScript -->
    <script src=\"/assets/js/freelancer.min.js\"></script>

    {% block javascripts %}{% endblock %}
    
</body>

</html>
", "base.html.twig", "/home/matheusbiagini/Documentos/projetos/codingdojo/app/Resources/views/base.html.twig");
    }
}
