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

/* CraueTwigExtensionsBundle:ChangeLanguage:changeLanguage.html.twig */
class __TwigTemplate_ee27296497e0dd87864843160ce8341d5a534ea16b4b9ba3ec01c60bb55a35de extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "CraueTwigExtensionsBundle:ChangeLanguage:changeLanguage.html.twig"));

        // line 1
        $this->loadTemplate("@CraueTwigExtensions/ChangeLanguage/changeLanguage_customization.html.twig", "CraueTwigExtensionsBundle:ChangeLanguage:changeLanguage.html.twig", 1)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "CraueTwigExtensionsBundle:ChangeLanguage:changeLanguage.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@CraueTwigExtensions/ChangeLanguage/changeLanguage_customization.html.twig' %}
", "CraueTwigExtensionsBundle:ChangeLanguage:changeLanguage.html.twig", "/home/emir/Bureau/fashionBoard/vendor/craue/twigextensions-bundle/Resources/views/ChangeLanguage/changeLanguage.html.twig");
    }
}
