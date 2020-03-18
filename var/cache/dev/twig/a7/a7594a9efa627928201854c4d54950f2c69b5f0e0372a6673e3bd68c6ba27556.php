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

/* pages/tasks/edit.html.twig */
class __TwigTemplate_393493bd7cf0ba2b014f9f81162a1cba7874b7248af23acc57b72d1c2618762d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tasks/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tasks/edit.html.twig"));

        $this->parent = $this->loadTemplate("/layouts/layout.html.twig", "pages/tasks/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "TodoList - Edition";
        
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
    <div class=\"m-auto add_form\">
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
        <!-- Tâche à faire -->
        <div>";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), 'label');
        echo "</div>
        <div>";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), 'widget');
        echo "</div>
        <!-- Urgence de la tâche -->
        <div>";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "status", [], "any", false, false, false, 13), 'label');
        echo "</div>
        <div>";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "status", [], "any", false, false, false, 14), 'widget');
        echo "</div>

        <div class=\"text-center fixed-bottom mb-5\">
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tasks_index");
        echo "\" class=\"previous\">Retour</a>
            <button>";
        // line 18
        echo "Valider";
        echo "</button>
        </div>

        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
    </div>

    <style>
        *{
            padding:0px;
            margin: 0px;
            font-family: \"Rockwell Nova Light\";
            color: #1D3557;
            font-size: 18px;
        }

        /* Formulaire */
        .add_form{
            width: 85%;
        }

        /* Les champs des formulaires */
        .add_form .field{
            width: 100%;
        }

        input, select{
            margin-bottom: 40px;
            border: none;
            border-bottom: #1D3557 solid 1px;
        }

        select{
            background-image:
                    linear-gradient(45deg, transparent 50%, white 50%),
                    linear-gradient(135deg, white 50%, transparent 50%),
                    linear-gradient(to right, #1D3557, #1D3557);
            background-position:
                    100% 0;
            background-size:
                    20px 20px, 20px 20px;
            background-repeat: no-repeat;
            -webkit-appearance: none;
        }

        /* Retour à la page précédente */
        .previous{
            text-decoration: none;
            color: #F1FAEE;
            background-color:#1D3557;
            padding: 10px 40px;
            border-radius: 7px;
            margin-right: 5px;
        }

        .previous:hover{
            background-color:#182C47;
            text-decoration: none;
            color: #F1FAEE;
        }

        /* Bouton de validation du formulaire */
        button{
            color: #182C47;
            border: #1D3557 solid 1px;
            border-radius: 7px;
            padding: 7px 40px;
            margin-left: 5px;
        }

        button:hover{
            background-color:#F1FAEE;
            color: #182C47;
            border-color: #182C47;
        }

    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/tasks/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 21,  120 => 18,  116 => 17,  110 => 14,  106 => 13,  101 => 11,  97 => 10,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/layouts/layout.html.twig\" %}

{% block title %}TodoList - Edition{% endblock %}

{% block content %}

    <div class=\"m-auto add_form\">
        {{ form_start(form) }}
        <!-- Tâche à faire -->
        <div>{{ form_label(form.title) }}</div>
        <div>{{ form_widget(form.title) }}</div>
        <!-- Urgence de la tâche -->
        <div>{{ form_label(form.status) }}</div>
        <div>{{ form_widget(form.status) }}</div>

        <div class=\"text-center fixed-bottom mb-5\">
            <a href=\"{{ path('tasks_index') }}\" class=\"previous\">Retour</a>
            <button>{{ 'Valider' }}</button>
        </div>

        {{ form_end(form) }}
    </div>

    <style>
        *{
            padding:0px;
            margin: 0px;
            font-family: \"Rockwell Nova Light\";
            color: #1D3557;
            font-size: 18px;
        }

        /* Formulaire */
        .add_form{
            width: 85%;
        }

        /* Les champs des formulaires */
        .add_form .field{
            width: 100%;
        }

        input, select{
            margin-bottom: 40px;
            border: none;
            border-bottom: #1D3557 solid 1px;
        }

        select{
            background-image:
                    linear-gradient(45deg, transparent 50%, white 50%),
                    linear-gradient(135deg, white 50%, transparent 50%),
                    linear-gradient(to right, #1D3557, #1D3557);
            background-position:
                    100% 0;
            background-size:
                    20px 20px, 20px 20px;
            background-repeat: no-repeat;
            -webkit-appearance: none;
        }

        /* Retour à la page précédente */
        .previous{
            text-decoration: none;
            color: #F1FAEE;
            background-color:#1D3557;
            padding: 10px 40px;
            border-radius: 7px;
            margin-right: 5px;
        }

        .previous:hover{
            background-color:#182C47;
            text-decoration: none;
            color: #F1FAEE;
        }

        /* Bouton de validation du formulaire */
        button{
            color: #182C47;
            border: #1D3557 solid 1px;
            border-radius: 7px;
            padding: 7px 40px;
            margin-left: 5px;
        }

        button:hover{
            background-color:#F1FAEE;
            color: #182C47;
            border-color: #182C47;
        }

    </style>

{% endblock %}
", "pages/tasks/edit.html.twig", "E:\\12 - SUPINFO\\2 - A.Sc.2\\3 - Projet\\PHPD\\todolist\\templates\\pages\\tasks\\edit.html.twig");
    }
}
