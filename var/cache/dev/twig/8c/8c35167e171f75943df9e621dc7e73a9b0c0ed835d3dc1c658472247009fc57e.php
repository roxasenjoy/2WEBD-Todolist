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
class __TwigTemplate_7cf34bec970fcf12d5bd39fb4bfc217e20a11442f6ed8223139d9f477bb41fc5 extends Template
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
        echo "    <!---------------
        DASHBOARD
    ----------------->
    ";
        // line 7
        if ((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <div class=\"content_task\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 10
                echo "            <div class=\"task container\">
                <div class=\"row row-cols-3 m-auto\">
                    <!-- Dès que la personne clique sur le bouton la question doit se faire delete -->
                    <!-- Bouton delete -->
                    <form method=\"post\" action=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tasks_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 14)]), "html", null, true);
                echo "\" class=\"delete_padding m-auto pb-2\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 16))), "html", null, true);
                echo "\">
                        <button class=\"delete\"></button>
                    </form>

                    <!-- Tâche à faire -->
                    <div class=\"task_padding col-8\" id=\"";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 21), "html", null, true);
                echo "\">
                        <div class=\"title\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 22), "html", null, true);
                echo "</div>
                        <div class=\"status\">";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 23), "html", null, true);
                echo "</div>
                    </div>

                    <!-- Options de la tâche -->
                    <div class=\"option_padding col-2 m-auto\">
                        <a class=\"share\" href=\"#\"><i class=\"fas fa-share-alt\"></i></a>
                        <a class=\"modify\" href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tasks_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\"><i class=\"fas fa-pencil-alt\"></i></a>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        </div>
        ";
        } else {
            // line 36
            echo "            <h3 class=\"text-center m-auto nothing\"> Vous n'avez rien à faire pour le moment...</h3>
        ";
        }
        // line 38
        echo "

    <!-- Bouton pour ajouter une tâche -->
    <div class=\"fixed-bottom text-right p-3\">
        <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tasks_new");
        echo "\" class=\"add_task\" role=\"button\" aria-pressed=\"true\"><i class=\"fas fa-plus\"></i></a>
    </div>

    <script>
        \$(\".delete\").click(function(event){
            event.preventDefault()
            let token = event.target.form._token.value; // Cheaté 1.0
            \$.ajax({
                method: \"DELETE\", //Delete
                data: {
                    \"_token\": token,
                },
                url: event.target.form.action, // Cheaté 2.0
                success: function(result){
                    event.target.closest(\".task\").remove(); //delete l'affichage
                }
            })
        });

    </script>
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
        return array (  143 => 42,  137 => 38,  133 => 36,  129 => 34,  118 => 29,  109 => 23,  105 => 22,  101 => 21,  93 => 16,  88 => 14,  82 => 10,  78 => 9,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/layouts/layout.html.twig\" %}

{% block content %}
    <!---------------
        DASHBOARD
    ----------------->
    {% if tasks %}
        <div class=\"content_task\">
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
        </div>
        {% else %}
            <h3 class=\"text-center m-auto nothing\"> Vous n'avez rien à faire pour le moment...</h3>
        {% endif %}


    <!-- Bouton pour ajouter une tâche -->
    <div class=\"fixed-bottom text-right p-3\">
        <a href=\"{{ path('tasks_new') }}\" class=\"add_task\" role=\"button\" aria-pressed=\"true\"><i class=\"fas fa-plus\"></i></a>
    </div>

    <script>
        \$(\".delete\").click(function(event){
            event.preventDefault()
            let token = event.target.form._token.value; // Cheaté 1.0
            \$.ajax({
                method: \"DELETE\", //Delete
                data: {
                    \"_token\": token,
                },
                url: event.target.form.action, // Cheaté 2.0
                success: function(result){
                    event.target.closest(\".task\").remove(); //delete l'affichage
                }
            })
        });

    </script>
{% endblock %}


", "pages/tasks/index.html.twig", "E:\\12 - SUPINFO\\2 - A.Sc.2\\3 - Projet\\PHPD\\todolist\\templates\\pages\\tasks\\index.html.twig");
    }
}
