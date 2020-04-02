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

/* pages/login.html.twig */
class __TwigTemplate_d671788b434a77805c31bfe2cebe3d014b0feb25502ac58db5c6d267edadf11d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>TodoList - Login</title>

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"assets/css/login.css\">
</head>
<body>
    <!-- Header de notre site -->
    <header class=\"col-12 text-center pt-5 pb-5\">
        <h1 class=\"title pt-3 pb-3\">TodoList</h1>
    </header>

    <!-- Formulaire de connexion -->
    <div class=\"m-auto col-10\">
        <h1 id=\"login\" class=\"col-12 mb-4\">LOGIN</h1>
        <form>
            <label for=\"email\" class=\"col-12 justify-content-left\">Email</label>
            <input type=\"text\" name=\"email\" placeholder=\"Entrez votre adresse email\" class=\"col-12 mb-4\" required>

            <label for=\"password\" class=\"col-12\">Password</label>
            <input type=\"password\" name=\"password\" placeholder=\"Entrez votre mot de passe\" class=\"col-12 mb-4\" required>

            <div class=\"text-center mb-5\">
                <button type=\"submit\" >Login</button>
            </div>

        </form>
    </div>

    <!-- Séparation avec le footer -->
    <div class=\"separator\"></div>

    <!-- Création d'un compte -->
    <footer>
        <a id=\"create_account\" class=\"fixed-bottom m-auto col-4 col-12  pb-1\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Créer mon compte</a>
    </footer>

    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 41,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>TodoList - Login</title>

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"assets/css/login.css\">
</head>
<body>
    <!-- Header de notre site -->
    <header class=\"col-12 text-center pt-5 pb-5\">
        <h1 class=\"title pt-3 pb-3\">TodoList</h1>
    </header>

    <!-- Formulaire de connexion -->
    <div class=\"m-auto col-10\">
        <h1 id=\"login\" class=\"col-12 mb-4\">LOGIN</h1>
        <form>
            <label for=\"email\" class=\"col-12 justify-content-left\">Email</label>
            <input type=\"text\" name=\"email\" placeholder=\"Entrez votre adresse email\" class=\"col-12 mb-4\" required>

            <label for=\"password\" class=\"col-12\">Password</label>
            <input type=\"password\" name=\"password\" placeholder=\"Entrez votre mot de passe\" class=\"col-12 mb-4\" required>

            <div class=\"text-center mb-5\">
                <button type=\"submit\" >Login</button>
            </div>

        </form>
    </div>

    <!-- Séparation avec le footer -->
    <div class=\"separator\"></div>

    <!-- Création d'un compte -->
    <footer>
        <a id=\"create_account\" class=\"fixed-bottom m-auto col-4 col-12  pb-1\" href=\"{{ path('app_register') }}\">Créer mon compte</a>
    </footer>

    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
</body>
</html>", "pages/login.html.twig", "E:\\12 - SUPINFO\\2 - A.Sc.2\\3 - Projet\\PHPD\\todolist\\templates\\pages\\login.html.twig");
    }
}
