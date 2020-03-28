<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /layouts/layout.html.twig */
class __TwigTemplate_83b0f71dad45437997b5771c1e052a8565cc1c9cf47f73f5805a560e694e6c84 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'page_name' => [$this, 'block_page_name'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/layouts/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/layouts/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">

        <link rel=\"stylesheet\" href=\"/assets/css/white/layout.css\">

        <link rel=\"stylesheet\" href=\"/assets/css/white/dashboard.css\" id=\"dashboard\"> <!-- Dashboard -->
        <link rel=\"stylesheet\" href=\"/assets/css/white/add.css\" id=\"add\"> <!-- Add -->
        <link rel=\"stylesheet\" href=\"/assets/css/white/edit.css\" id=\"edit\"> <!-- Add -->


        ";
        // line 16
        $this->displayBlock('css', $context, $blocks);
        // line 17
        echo "    </head>

    ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 120
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "TodoList - Dashboard  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    <body>
        ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 50
        echo "
        <!-- Défini le titre de la page -->
        <div class=\"m-auto page_name\">
            <h3 class=\"text-center\">";
        // line 53
        $this->displayBlock('page_name', $context, $blocks);
        echo "</h3>
        </div>

        <!-- Contenu de la page -->
        <div class=\"content\">";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        echo " </div>


         <script>
             window.onload = () => {
                 // On va chercher la balise link
                 let themeLink = document.getElementById(\"dashboard\");
                 let add = document.getElementById(\"add\");
                 let edit = document.getElementById(\"edit\");



                // Y'a t-il un thème stocker dans le localStorage
                 if(localStorage.theme != null){
                     themeLink.href = `/assets/css/\${localStorage.theme}/dashboard.css`;
                     add.href = `/assets/css/\${localStorage.theme}/add.css`;
                     edit.href = `/assets/css/\${localStorage.theme}/edit.css`;
                 }else{
                     themeLink.href = \"/assets/css/white/dashboard.css\";
                     add.href = \"/assets/css/white/add.css\";
                     edit.href = \"/assets/css/white/add.css\";
                    localStorage.theme = \"white\";
                 }

                 //Si la personne revient sur la page
                 let theme = document.getElementById(\"theme\");

                 if(localStorage.theme == \"white\"){
                     theme.innerText = \"Thème sombre\";
                 }else{
                     theme.innerText = \"Thème clair\";
                 }

                 // Ecouteur d'évènement \"click\" sur la span
                 theme.addEventListener(\"click\", function(){
                     if(localStorage.theme == \"white\"){
                        localStorage.theme = \"dark\";
                        this.innerText = \"Thème clair\";
                     }else if(localStorage.theme == \"dark\"){
                         localStorage.theme = \"white\";
                         this.innerText = \"Thème sombre\";
                     }
                     themeLink.href = `/assets/css/\${localStorage.theme}/dashboard.css`;
                     add.href = `/assets/css/\${localStorage.theme}/add.css`;
                     edit.href = `/assets/css/\${localStorage.theme}/add.css`;

                 });

             }


         </script>
        <!-- Icone -->
        <script src=\"https://kit.fontawesome.com/128f69e9e2.js\"></script>
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>

    </body>



    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "            <nav class=\"navbar navbar-expand-md sticky-top nav\">
                <!-- Titre de notre site -->
                <a class=\"navbar-brand logo\" href=\"#\">TodoList</a>

                <!-- Toggler/collapsibe Button -->
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menu\">
                    <span><i class=\"fas fa-bars\"></i></span>
                </button>

                <!-- Navbar links -->
                <div class=\"collapse navbar-collapse\" id=\"menu\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\"><i class=\"far fa-address-book\"></i>Mes amis</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\"><i class=\"fas fa-user-plus\"></i>Ajouter des amis</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\" aria-disabled=\"true\" role=\"button\"> <i class=\"fas fa-adjust\" ></i><span id=\"theme\">Thème</span></a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\"><i class=\"fas fa-sign-out-alt\"></i>Deconnexion</a>
                        </li>
                    </ul>
                </div>
            </nav>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_page_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_name"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/layouts/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  294 => 57,  276 => 53,  260 => 44,  236 => 22,  226 => 21,  153 => 57,  146 => 53,  141 => 50,  139 => 21,  136 => 20,  126 => 19,  107 => 16,  88 => 5,  77 => 120,  75 => 19,  71 => 17,  69 => 16,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}TodoList - Dashboard  {% endblock %}</title>

        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">

        <link rel=\"stylesheet\" href=\"/assets/css/white/layout.css\">

        <link rel=\"stylesheet\" href=\"/assets/css/white/dashboard.css\" id=\"dashboard\"> <!-- Dashboard -->
        <link rel=\"stylesheet\" href=\"/assets/css/white/add.css\" id=\"add\"> <!-- Add -->
        <link rel=\"stylesheet\" href=\"/assets/css/white/edit.css\" id=\"edit\"> <!-- Add -->


        {% block css %}    {% endblock %}
    </head>

    {% block body %}
    <body>
        {% block header %}
            <nav class=\"navbar navbar-expand-md sticky-top nav\">
                <!-- Titre de notre site -->
                <a class=\"navbar-brand logo\" href=\"#\">TodoList</a>

                <!-- Toggler/collapsibe Button -->
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menu\">
                    <span><i class=\"fas fa-bars\"></i></span>
                </button>

                <!-- Navbar links -->
                <div class=\"collapse navbar-collapse\" id=\"menu\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\"><i class=\"far fa-address-book\"></i>Mes amis</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\"><i class=\"fas fa-user-plus\"></i>Ajouter des amis</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\" aria-disabled=\"true\" role=\"button\"> <i class=\"fas fa-adjust\" ></i><span id=\"theme\">Thème</span></a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('login') }}\"><i class=\"fas fa-sign-out-alt\"></i>Deconnexion</a>
                        </li>
                    </ul>
                </div>
            </nav>
        {% endblock %}

        <!-- Défini le titre de la page -->
        <div class=\"m-auto page_name\">
            <h3 class=\"text-center\">{% block page_name %}{% endblock %}</h3>
        </div>

        <!-- Contenu de la page -->
        <div class=\"content\">{% block content %}{% endblock %} </div>


         <script>
             window.onload = () => {
                 // On va chercher la balise link
                 let themeLink = document.getElementById(\"dashboard\");
                 let add = document.getElementById(\"add\");
                 let edit = document.getElementById(\"edit\");



                // Y'a t-il un thème stocker dans le localStorage
                 if(localStorage.theme != null){
                     themeLink.href = `/assets/css/\${localStorage.theme}/dashboard.css`;
                     add.href = `/assets/css/\${localStorage.theme}/add.css`;
                     edit.href = `/assets/css/\${localStorage.theme}/edit.css`;
                 }else{
                     themeLink.href = \"/assets/css/white/dashboard.css\";
                     add.href = \"/assets/css/white/add.css\";
                     edit.href = \"/assets/css/white/add.css\";
                    localStorage.theme = \"white\";
                 }

                 //Si la personne revient sur la page
                 let theme = document.getElementById(\"theme\");

                 if(localStorage.theme == \"white\"){
                     theme.innerText = \"Thème sombre\";
                 }else{
                     theme.innerText = \"Thème clair\";
                 }

                 // Ecouteur d'évènement \"click\" sur la span
                 theme.addEventListener(\"click\", function(){
                     if(localStorage.theme == \"white\"){
                        localStorage.theme = \"dark\";
                        this.innerText = \"Thème clair\";
                     }else if(localStorage.theme == \"dark\"){
                         localStorage.theme = \"white\";
                         this.innerText = \"Thème sombre\";
                     }
                     themeLink.href = `/assets/css/\${localStorage.theme}/dashboard.css`;
                     add.href = `/assets/css/\${localStorage.theme}/add.css`;
                     edit.href = `/assets/css/\${localStorage.theme}/add.css`;

                 });

             }


         </script>
        <!-- Icone -->
        <script src=\"https://kit.fontawesome.com/128f69e9e2.js\"></script>
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>

    </body>



    {% endblock %}
</html>
", "/layouts/layout.html.twig", "E:\\12 - SUPINFO\\2 - A.Sc.2\\3 - Projet\\PHPD\\todolist\\templates\\layouts\\layout.html.twig");
    }
}
