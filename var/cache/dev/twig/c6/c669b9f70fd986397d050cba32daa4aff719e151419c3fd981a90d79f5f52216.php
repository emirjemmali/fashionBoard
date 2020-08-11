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

/* @CraueTwigExtensions/ChangeLanguage/changeLanguage.html.twig */
class __TwigTemplate_d6f7119b370efd7626c824ccd088021da9eca22b4d6508dc55536d9beb7e8e91 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CraueTwigExtensions/ChangeLanguage/changeLanguage.html.twig"));

        // line 1
        $this->loadTemplate("@CraueTwigExtensions/ChangeLanguage/changeLanguage_customization.html.twig", "@CraueTwigExtensions/ChangeLanguage/changeLanguage.html.twig", 1)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@CraueTwigExtensions/ChangeLanguage/changeLanguage.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@CraueTwigExtensions/ChangeLanguage/changeLanguage_customization.html.twig' %}
", "@CraueTwigExtensions/ChangeLanguage/changeLanguage.html.twig", "C:\\Users\\Mohamedahmed\\PhpstormProjects\\untitled\\vendor\\craue\\twigextensions-bundle\\Resources\\views\\ChangeLanguage\\changeLanguage.html.twig");
    }
}
