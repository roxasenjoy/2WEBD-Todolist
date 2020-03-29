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

/* registration/register.html.twig */
class __TwigTemplate_e246a9f57de833742752e4541e73b91557bb9a0021e0e5ad5de006e5753438f2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
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
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
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

        ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), 'form_start');
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "firstname", [], "any", false, false, false, 36), 'row');
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "lastname", [], "any", false, false, false, 37), 'row');
        echo "
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), 'row');
        echo "
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "plainPassword", [], "any", false, false, false, 39), 'row');
        echo "
        <div class=\"text-center mb-5 pb-3 fixed-bottom\">
            <button type=\"submit\" class=\"register\">Créer un compte</button>
        </div>
        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), 'form_end');
        echo "


            <!-- <label for=\"lastName\" class=\"col-12\">Nom</label>
            <input type=\"text\" name=\"lastName\" placeholder=\"Entrez votre nom\" class=\"col-12 mb-4\" required>

            <label for=\"email\" class=\"col-12\">Email</label>
            <input type=\"email\" name=\"email\" placeholder=\"Entrez votre adresse email\" class=\"col-12 mb-4\" required>

            <label for=\"password\" class=\"col-12\">Password</label>
            <input type=\"password\" name=\"password\" placeholder=\"Entrez votre mot de passe\" class=\"col-12 mb-4\" required>

            <div class=\"text-center mb-5 pb-3 fixed-bottom\">
                <button type=\"submit\" class=\"register\">Créer un compte</button>
            </div> -->


    </div>
</body>
</html>





";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 43,  98 => 39,  94 => 38,  90 => 37,  86 => 36,  82 => 35,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
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
        <a href=\"{{ path('app_login') }}\">
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

        {{ form_start(registrationForm) }}
            {{ form_row(registrationForm.firstname) }}
            {{ form_row(registrationForm.lastname) }}
            {{ form_row(registrationForm.email) }}
            {{ form_row(registrationForm.plainPassword) }}
        <div class=\"text-center mb-5 pb-3 fixed-bottom\">
            <button type=\"submit\" class=\"register\">Créer un compte</button>
        </div>
        {{ form_end(registrationForm) }}


            <!-- <label for=\"lastName\" class=\"col-12\">Nom</label>
            <input type=\"text\" name=\"lastName\" placeholder=\"Entrez votre nom\" class=\"col-12 mb-4\" required>

            <label for=\"email\" class=\"col-12\">Email</label>
            <input type=\"email\" name=\"email\" placeholder=\"Entrez votre adresse email\" class=\"col-12 mb-4\" required>

            <label for=\"password\" class=\"col-12\">Password</label>
            <input type=\"password\" name=\"password\" placeholder=\"Entrez votre mot de passe\" class=\"col-12 mb-4\" required>

            <div class=\"text-center mb-5 pb-3 fixed-bottom\">
                <button type=\"submit\" class=\"register\">Créer un compte</button>
            </div> -->


    </div>
</body>
</html>





", "registration/register.html.twig", "E:\\12 - SUPINFO\\2 - A.Sc.2\\3 - Projet\\PHPD\\todolist\\templates\\registration\\register.html.twig");
    }
}
