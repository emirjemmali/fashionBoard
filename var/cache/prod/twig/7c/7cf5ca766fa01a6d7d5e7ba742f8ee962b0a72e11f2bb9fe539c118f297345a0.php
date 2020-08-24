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
class __TwigTemplate_37345364c949717e1d72c5847c198a3e1b268b52753d18850a9980c09848cb0d extends \Twig\Template
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
        // line 1
        $this->loadTemplate("@CraueTwigExtensions/ChangeLanguage/changeLanguage_customization.html.twig", "@CraueTwigExtensions/ChangeLanguage/changeLanguage.html.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@CraueTwigExtensions/ChangeLanguage/changeLanguage.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@CraueTwigExtensions/ChangeLanguage/changeLanguage.html.twig", "C:\\Users\\Mohamedahmed\\PhpstormProjects\\untitled\\vendor\\craue\\twigextensions-bundle\\Resources\\views\\ChangeLanguage\\changeLanguage.html.twig");
    }
}
