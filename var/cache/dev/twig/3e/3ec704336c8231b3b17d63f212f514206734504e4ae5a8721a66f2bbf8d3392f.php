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

/* pages/tasks/index.html.twig */
class __TwigTemplate_180c819c791f60ec53c230e00b5cd2d4c8aa6c55c33f7cf633cab52915027310 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tasks/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tasks/index.html.twig"));

        $this->parent = $this->loadTemplate("/layouts/layout.html.twig", "pages/tasks/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        if ((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 7
                echo "            <div class=\"task container\">
                <div class=\"row row-cols-3 m-auto\">
                    <!-- Dès que la personne clique sur le bouton la question doit se faire delete -->
                    <!-- Bouton delete -->
                    <form method=\"post\" action=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tasks_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 11)]), "html", null, true);
                echo "\" class=\"delete_padding m-auto pb-2\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 13))), "html", null, true);
                echo "\">
                        <button class=\"delete\"></button>
                    </form>

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
                        <a class=\"modify\" href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tasks_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\"><i class=\"fas fa-pencil-alt\"></i></a>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tasks_new");
        echo "\" class=\"add_task\" role=\"button\" aria-pressed=\"true\"><i class=\"fas fa-plus\"></i></a>
    </div>

    <style>
        /************************************/
        /*               Content             */
        /************************************/

        /* Rien à faire */
        .nothing{
            padding-top: 60%;
            width:95%;
            color: #1D3557;
            font-family: \"Rockwell Nova\";
        }

        /* Section d'une tâche */
        .task{
            border: #1D3557 solid 1px;
            width: 90%;
            padding:5px 0px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        /* Tâche fini - Delete */
        .delete{
            background: #F1FAEE;
            margin-top: 0px;
            border: solid 2px #1D3557;
            width: 20px;
            height: 20px;
            border-radius: 50px;
            cursor:pointer;
        }

        .delete:hover{
            text-decoration: none;
        }

        /* Tâche à faire */
        .title,.status{
            color:#1D3557;
            font-size: 16px;
            font-family: \"Rockwell Nova\";
        }

        .status{
            font-size: 12px;
            font-family: \"Rockwell Nova Light\";
        }

        /* Options*/
        .share, .modify{
            font-size: 25px;
            color:#1D3557;
        }

        /*Delete le padding de bootstrap */
        .delete_padding, .task_padding, .option_padding{
            padding: 0px;
        }

        /* Ajouter une todo */
        .add_task{
            font-size: 40px;
            background: #1D3557;
            border-radius: 150px;
        }

        .add_task:hover{
            background: #182C47;
        }

        /* Icone : + */
        .add_task i{
            padding: 20px 10px;
            color:#F1FAEE;
        }


    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/tasks/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 37,  132 => 34,  128 => 32,  125 => 31,  114 => 26,  105 => 20,  101 => 19,  97 => 18,  89 => 13,  84 => 11,  78 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/layouts/layout.html.twig\" %}

{% block content %}

    {% if tasks %}
        {% for task in tasks %}
            <div class=\"task container\">
                <div class=\"row row-cols-3 m-auto\">
                    <!-- Dès que la personne clique sur le bouton la question doit se faire delete -->
                    <!-- Bouton delete -->
                    <form method=\"post\" action=\"{{ path('tasks_delete', {'id': task.id}) }}\" class=\"delete_padding m-auto pb-2\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ task.id) }}\">
                        <button class=\"delete\"></button>
                    </form>

                    <!-- Tâche à faire -->
                    <div class=\"task_padding col-8\" id=\"{{ task.id }}\">
                        <div class=\"title\">{{ task.title }}</div>
                        <div class=\"status\">{{ task.status }}</div>
                    </div>

                    <!-- Options de la tâche -->
                    <div class=\"option_padding col-2 m-auto\">
                        <a class=\"share\" href=\"#\"><i class=\"fas fa-share-alt\"></i></a>
                        <a class=\"modify\" href=\"{{ path('tasks_edit', {'id': task.id}) }}\"><i class=\"fas fa-pencil-alt\"></i></a>
                    </div>
                </div>
            </div>
        {% endfor %}
    {% else %}
        <h3 class=\"text-center m-auto nothing\"> Vous n'avez rien à faire pour le moment...</h3>
    {% endif %}

    <!-- Bouton pour ajouter une tâche -->
    <div class=\"fixed-bottom text-right p-3\">
        <a href=\"{{ path('tasks_new') }}\" class=\"add_task\" role=\"button\" aria-pressed=\"true\"><i class=\"fas fa-plus\"></i></a>
    </div>

    <style>
        /************************************/
        /*               Content             */
        /************************************/

        /* Rien à faire */
        .nothing{
            padding-top: 60%;
            width:95%;
            color: #1D3557;
            font-family: \"Rockwell Nova\";
        }

        /* Section d'une tâche */
        .task{
            border: #1D3557 solid 1px;
            width: 90%;
            padding:5px 0px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        /* Tâche fini - Delete */
        .delete{
            background: #F1FAEE;
            margin-top: 0px;
            border: solid 2px #1D3557;
            width: 20px;
            height: 20px;
            border-radius: 50px;
            cursor:pointer;
        }

        .delete:hover{
            text-decoration: none;
        }

        /* Tâche à faire */
        .title,.status{
            color:#1D3557;
            font-size: 16px;
            font-family: \"Rockwell Nova\";
        }

        .status{
            font-size: 12px;
            font-family: \"Rockwell Nova Light\";
        }

        /* Options*/
        .share, .modify{
            font-size: 25px;
            color:#1D3557;
        }

        /*Delete le padding de bootstrap */
        .delete_padding, .task_padding, .option_padding{
            padding: 0px;
        }

        /* Ajouter une todo */
        .add_task{
            font-size: 40px;
            background: #1D3557;
            border-radius: 150px;
        }

        .add_task:hover{
            background: #182C47;
        }

        /* Icone : + */
        .add_task i{
            padding: 20px 10px;
            color:#F1FAEE;
        }


    </style>

{% endblock %}


", "pages/tasks/index.html.twig", "E:\\12 - SUPINFO\\2 - A.Sc.2\\3 - Projet\\PHPD\\todolist\\templates\\pages\\tasks\\index.html.twig");
    }
}
