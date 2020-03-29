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

/* /pages/register.html.twig */
class __TwigTemplate_e62a6a2e1f7c1e0e702229dac2bfb41e37daf799eb9e3517c86f9c4bcb251edf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/pages/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/pages/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>TodoList - Création de compte</title>

    <!-- FontAwesome -->
    <script src=\"https://kit.fontawesome.com/128f69e9e2.js\" crossorigin=\"anonymous\"></script>

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"assets/css/register.css\">
</head>
<body>

    <!-- Flèche pour retourner en arrière -->
   <div class=\"col-11 mt-2\">
       <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">
           <i class=\"fas fa-chevron-left\"></i>
       </a>
   </div>

    <!-- Header de notre site -->
    <header class=\"col-12 text-center pt-3 pb-4\">
        <h1 class=\"title pt-3 pb-3\">TodoList</h1>
    </header>

    <!-- Formulaire de connexion -->
    <div class=\"m-auto col-10\">
        <h1 id=\"login\" class=\"col-12 mb-4\">REGISTER</h1>
        <form>
            <label for=\"firstName\" class=\"col-12 justify-content-left\">Prénom</label>
            <input type=\"text\" name=\"firstName\" placeholder=\"Entrez votre prénom\" class=\"col-12 mb-4\" required>

            <label for=\"lastName\" class=\"col-12\">Nom</label>
            <input type=\"text\" name=\"lastName\" placeholder=\"Entrez votre nom\" class=\"col-12 mb-4\" required>

            <label for=\"email\" class=\"col-12\">Email</label>
            <input type=\"email\" name=\"email\" placeholder=\"Entrez votre adresse email\" class=\"col-12 mb-4\" required>

            <label for=\"password\" class=\"col-12\">Password</label>
            <input type=\"password\" name=\"password\" placeholder=\"Entrez votre mot de passe\" class=\"col-12 mb-4\" required>

            <div class=\"text-center mb-5 pb-3 fixed-bottom\">
                <button type=\"submit\" class=\"register\">Créer un compte</button>
            </div>

        </form>
    </div>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/pages/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>TodoList - Création de compte</title>

    <!-- FontAwesome -->
    <script src=\"https://kit.fontawesome.com/128f69e9e2.js\" crossorigin=\"anonymous\"></script>

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"assets/css/register.css\">
</head>
<body>

    <!-- Flèche pour retourner en arrière -->
   <div class=\"col-11 mt-2\">
       <a href=\"{{ path('login') }}\">
           <i class=\"fas fa-chevron-left\"></i>
       </a>
   </div>

    <!-- Header de notre site -->
    <header class=\"col-12 text-center pt-3 pb-4\">
        <h1 class=\"title pt-3 pb-3\">TodoList</h1>
    </header>

    <!-- Formulaire de connexion -->
    <div class=\"m-auto col-10\">
        <h1 id=\"login\" class=\"col-12 mb-4\">REGISTER</h1>
        <form>
            <label for=\"firstName\" class=\"col-12 justify-content-left\">Prénom</label>
            <input type=\"text\" name=\"firstName\" placeholder=\"Entrez votre prénom\" class=\"col-12 mb-4\" required>

            <label for=\"lastName\" class=\"col-12\">Nom</label>
            <input type=\"text\" name=\"lastName\" placeholder=\"Entrez votre nom\" class=\"col-12 mb-4\" required>

            <label for=\"email\" class=\"col-12\">Email</label>
            <input type=\"email\" name=\"email\" placeholder=\"Entrez votre adresse email\" class=\"col-12 mb-4\" required>

            <label for=\"password\" class=\"col-12\">Password</label>
            <input type=\"password\" name=\"password\" placeholder=\"Entrez votre mot de passe\" class=\"col-12 mb-4\" required>

            <div class=\"text-center mb-5 pb-3 fixed-bottom\">
                <button type=\"submit\" class=\"register\">Créer un compte</button>
            </div>

        </form>
    </div>

</body>
</html>", "/pages/register.html.twig", "E:\\12 - SUPINFO\\2 - A.Sc.2\\3 - Projet\\PHPD\\todolist\\templates\\pages\\register.html.twig");
    }
}
