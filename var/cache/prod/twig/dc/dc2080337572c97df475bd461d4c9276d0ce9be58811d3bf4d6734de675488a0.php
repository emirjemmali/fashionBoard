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

/* CraueTwigExtensionsBundle:ChangeLanguage:changeLanguage_blocks.html.twig */
class __TwigTemplate_b5810cc9e1784ee4612c68cc7ccfb2479e4d0cf1ef384b9ac4d53dc2821abed6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'craue_language_link_target' => [$this, 'block_craue_language_link_target'],
            'craue_language_link_text' => [$this, 'block_craue_language_link_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('craue_language_link_target', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('craue_language_link_text', $context, $blocks);
    }

    // line 1
    public function block_craue_language_link_target($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "attributes", [], "any", false, false, false, 2), "get", [0 => "_route"], "method", false, false, false, 2), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3
($context["app"] ?? null), "request", [], "any", false, false, false, 3), "attributes", [], "any", false, false, false, 3), "get", [0 => "_route_params"], "method", false, false, false, 3), ["_locale" => ($context["locale"] ?? null)])), "html", null, true);
    }

    // line 6
    public function block_craue_language_link_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Craue\TwigExtensionsBundle\Twig\Extension\ChangeLanguageExtension']->getLanguageName(($context["locale"] ?? null)), "html", null, true);
    }

    public function getTemplateName()
    {
        return "CraueTwigExtensionsBundle:ChangeLanguage:changeLanguage_blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  57 => 6,  53 => 3,  52 => 2,  48 => 1,  44 => 6,  41 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "CraueTwigExtensionsBundle:ChangeLanguage:changeLanguage_blocks.html.twig", "C:\\Users\\Mohamedahmed\\PhpstormProjects\\untitled\\vendor\\craue\\twigextensions-bundle/Resources/views/ChangeLanguage/changeLanguage_blocks.html.twig");
    }
}
