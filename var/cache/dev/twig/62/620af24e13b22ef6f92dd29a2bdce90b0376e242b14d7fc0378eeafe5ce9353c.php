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

/* backOffice/addProduct.html.twig */
class __TwigTemplate_96ce9a552f3dced26ce7eec405e5d44f697bb7947234c40bfe657e875ca6ddb8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backOffice/addProduct.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "backOffice/addProduct.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "

";
        // line 45
        echo "
";
        // line 48
        echo "    <h1>Ajouter nouveau produit</h1>

    ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_start');
        echo "
    ";
        // line 52
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "nom", [], "any", false, false, false, 52), 'row');
        echo "
    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "prix", [], "any", false, false, false, 53), 'row');
        echo "
    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "image", [], "any", false, false, false, 54), 'row');
        echo "
    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "url", [], "any", false, false, false, 55), 'row');
        echo "

    ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backOffice/addProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 57,  87 => 55,  83 => 54,  79 => 53,  74 => 52,  70 => 50,  66 => 48,  63 => 45,  59 => 33,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}
{#    <div class=\"add-form\">#}
{#        <div class=\"add-form-container\">#}
{#            <form  novalidate class=\"clearfix needs-validation\">#}
{#                <div class=\"containerFormNews\">#}
{#                    <div class=\"fieldsTxt\">#}
{#                        <div class=\"mb-5\">#}
{#                            <div class=\"form-group\">#}
{#                                <label for=\"exampleInputEmail1\">Nom</label>#}
{#                                <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\"#}
{#                                       aria-describedby=\"emailHelp\" placeholder=\"Entrer nom\">#}
{#                            </div>#}
{#                        </span>#}
{#                        </div>#}
{#                        <div class=\"form-group\">#}
{#                            <div class=\"form-group\">#}
{#                                <label for=\"exampleInputEmail1\">Description</label>#}
{#                                <input type=\"description\" class=\"form-control\" placeholder=\"Entrer description\">#}
{#                            </span>#}
{#                            </div>#}
{#                        </div>#}
{#                        <!-- dateAndHour -->#}
{#                        <div class=\"dateAndHour\">#}
{#                            <div class=\"form-group date-time-picker\">#}
{#                                <div class=\"input-group\">#}
{#                                    <label for=\"exampleInputEmail1\">Url</label>#}
{#                                    <input type=\"url\" class=\"form-control\" placeholder=\"Entrer url\">#}
{#                                </div>#}
{#                            </div>#}
{#                        </div>#}


{#                </div>#}
{#                <div class=\"add-options-message\">#}
{#                    <button id =\"btnSubmit\" type=\"submit\" class=\"btn btn-primary btn-md-2\" >#}
{#                        Ajouter#}
{#                        <div class=\"ripple-container\"></div>#}
{#                    </button>#}
{#                </div>#}
{#            #}
{#                </div>#}
{#            </form>#}

{#        </div>#}
{#    </div>#}
    <h1>Ajouter nouveau produit</h1>

    {{ form_start(form) }}
    {# ... #}
    {{ form_row(form.nom) }}
    {{ form_row(form.prix) }}
    {{ form_row(form.image) }}
    {{ form_row(form.url) }}

    {{ form_end(form) }}
{% endblock %}
", "backOffice/addProduct.html.twig", "/home/emir/Bureau/untitled/templates/backOffice/addProduct.html.twig");
    }
}
