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

/* security/login.html.twig */
class __TwigTemplate_f40a3309180875a56b32cc0017b4293b4f52545521e324cf5b65dd890b1c6f54 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

            <!-- SUPER FORMULAIRE -->
            <form method=\"post\">
                ";
        // line 25
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()), "messageKey", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()), "messageData", [], "any", false, false, false, 26), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 28
        echo "
                <label for=\"inputEmail\">Adresse Email</label>
                <input type=\"email\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>

                <label for=\"inputPassword\">Mot de passe</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                <div class=\"checkbox mb-3\">
                    <label>
                        <input type=\"checkbox\" name=\"_remember_me\"> Se souvenir de moi
                    </label>
                </div>

                <button class=\"btn btn-lg btn-primary\" type=\"submit\">Sign in</button>
            </form>
            <!-- <form>
                <label for=\"email\" class=\"col-12 justify-content-left\">Email</label>
                <input type=\"text\" name=\"email\" placeholder=\"Entrez votre adresse email\" class=\"col-12 mb-4\" required>

                <label for=\"password\" class=\"col-12\">Password</label>
                <input type=\"password\" name=\"password\" placeholder=\"Entrez votre mot de passe\" class=\"col-12 mb-4\" required>

                <div class=\"text-center mb-5\">
                    <button type=\"submit\" >Login</button>
                </div>

            </form> -->
        </div>

        <!-- Séparation avec le footer -->
        <div class=\"separator\"></div>

        <!-- Création d'un compte -->
        <footer>
            <a id=\"create_account\" class=\"fixed-bottom m-auto col-4 col-12  pb-1\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Créer mon compte</a>
        </footer>

        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
    </body>
</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 64,  89 => 35,  81 => 30,  77 => 28,  71 => 26,  69 => 25,  43 => 1,);
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

            <!-- SUPER FORMULAIRE -->
            <form method=\"post\">
                {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}

                <label for=\"inputEmail\">Adresse Email</label>
                <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>

                <label for=\"inputPassword\">Mot de passe</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                <div class=\"checkbox mb-3\">
                    <label>
                        <input type=\"checkbox\" name=\"_remember_me\"> Se souvenir de moi
                    </label>
                </div>

                <button class=\"btn btn-lg btn-primary\" type=\"submit\">Sign in</button>
            </form>
            <!-- <form>
                <label for=\"email\" class=\"col-12 justify-content-left\">Email</label>
                <input type=\"text\" name=\"email\" placeholder=\"Entrez votre adresse email\" class=\"col-12 mb-4\" required>

                <label for=\"password\" class=\"col-12\">Password</label>
                <input type=\"password\" name=\"password\" placeholder=\"Entrez votre mot de passe\" class=\"col-12 mb-4\" required>

                <div class=\"text-center mb-5\">
                    <button type=\"submit\" >Login</button>
                </div>

            </form> -->
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
</html>


", "security/login.html.twig", "E:\\12 - SUPINFO\\2 - A.Sc.2\\3 - Projet\\PHPD\\todolist\\templates\\security\\login.html.twig");
    }
}
