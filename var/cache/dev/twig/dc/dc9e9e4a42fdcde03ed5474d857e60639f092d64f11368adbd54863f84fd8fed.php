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

/* pages/dashboard/dashboard.html.twig */
class __TwigTemplate_e7e372503ccc4f848fcdb1313c9df1e2a38df321d0a658a3d86f000c18078f86 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/layouts/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/dashboard/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/dashboard/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("/layouts/layout.html.twig", "pages/dashboard/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        echo "  <link rel=\"stylesheet\" href=\"assets/css/dashboard.css\"> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    ";
        // line 7
        if ((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 9
                echo "            <div class=\"task container\">
                <div class=\"row row-cols-3 m-auto\">
                    <!-- Dès que la personne clique sur le bouton la question doit se faire delete -->
                    <!-- Bouton delete -->
                    <div class=\"delete_padding col-1 m-auto\">
                        <div class=\"delete\"></div>
                    </div>

                    <!-- Tâche à faire -->
                    <div class=\"task_padding col-8\" id=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 18), "html", null, true);
                echo "\">
                        <div class=\"title\">";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 19), "html", null, true);
                echo "</div>
                        <div class=\"status\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 20), "html", null, true);
                echo "</div>
                    </div>

                    <!-- Options de la tâche -->
                    <div class=\"option_padding col-2 m-auto\">
                        <a class=\"share\" href=\"#\"><i class=\"fas fa-share-alt\"></i></a>
                        <a class=\"modify\" href=\"#\"><i class=\"fas fa-pencil-alt\"></i></a>
                    </div>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    ";
        } else {
            // line 32
            echo "        <h3 class=\"text-center m-auto nothing\"> Vous n'avez rien à faire pour le moment...</h3>
    ";
        }
        // line 34
        echo "
    <!-- Bouton pour ajouter une tâche -->
    <div class=\"fixed-bottom text-right p-3\">
        <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add");
        echo "\" class=\"add_task\" role=\"button\" aria-pressed=\"true\"><i class=\"fas fa-plus\"></i></a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/dashboard/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 37,  141 => 34,  137 => 32,  134 => 31,  117 => 20,  113 => 19,  109 => 18,  98 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/layouts/layout.html.twig\" %}

{% block css %}  <link rel=\"stylesheet\" href=\"assets/css/dashboard.css\"> {% endblock %}

{% block content %}

    {% if tasks %}
        {% for task in tasks %}
            <div class=\"task container\">
                <div class=\"row row-cols-3 m-auto\">
                    <!-- Dès que la personne clique sur le bouton la question doit se faire delete -->
                    <!-- Bouton delete -->
                    <div class=\"delete_padding col-1 m-auto\">
                        <div class=\"delete\"></div>
                    </div>

                    <!-- Tâche à faire -->
                    <div class=\"task_padding col-8\" id=\"{{ task.id }}\">
                        <div class=\"title\">{{ task.title }}</div>
                        <div class=\"status\">{{ task.status }}</div>
                    </div>

                    <!-- Options de la tâche -->
                    <div class=\"option_padding col-2 m-auto\">
                        <a class=\"share\" href=\"#\"><i class=\"fas fa-share-alt\"></i></a>
                        <a class=\"modify\" href=\"#\"><i class=\"fas fa-pencil-alt\"></i></a>
                    </div>
                </div>
            </div>
        {% endfor %}
    {% else %}
        <h3 class=\"text-center m-auto nothing\"> Vous n'avez rien à faire pour le moment...</h3>
    {% endif %}

    <!-- Bouton pour ajouter une tâche -->
    <div class=\"fixed-bottom text-right p-3\">
        <a href=\"{{ path('add') }}\" class=\"add_task\" role=\"button\" aria-pressed=\"true\"><i class=\"fas fa-plus\"></i></a>
    </div>

{% endblock %}
", "pages/dashboard/dashboard.html.twig", "E:\\12 - SUPINFO\\2 - A.Sc.2\\3 - Projet\\PHPD\\todolist\\templates\\pages\\dashboard\\dashboard.html.twig");
    }
}
