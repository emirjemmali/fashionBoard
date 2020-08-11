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

/* @CraueTwigExtensions/ChangeLanguage/changeLanguage_customization.html.twig */
class __TwigTemplate_3472e6aa3a25cde5a298ff1639d2eede27b35bf31c2463f39c45880d50bb81a0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'craue_language_link_text' => [$this, 'block_craue_language_link_text'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@CraueTwigExtensions/ChangeLanguage/changeLanguage_content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CraueTwigExtensions/ChangeLanguage/changeLanguage_customization.html.twig"));

        $this->parent = $this->loadTemplate("@CraueTwigExtensions/ChangeLanguage/changeLanguage_content.html.twig", "@CraueTwigExtensions/ChangeLanguage/changeLanguage_customization.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_craue_language_link_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "craue_language_link_text"));

        // line 4
        echo "\t";
        // line 5
        echo "\t";
        $this->displayParentBlock("craue_language_link_text", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@CraueTwigExtensions/ChangeLanguage/changeLanguage_customization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@CraueTwigExtensions/ChangeLanguage/changeLanguage_content.html.twig' %}

{% block craue_language_link_text %}
\t{# You could use the variable \"locale\" here to add an image or anything else. #}
\t{{ parent() }}
{% endblock %}
", "@CraueTwigExtensions/ChangeLanguage/changeLanguage_customization.html.twig", "C:\\Users\\Mohamedahmed\\PhpstormProjects\\untitled\\vendor\\craue\\twigextensions-bundle\\Resources\\views\\ChangeLanguage\\changeLanguage_customization.html.twig");
    }
}
