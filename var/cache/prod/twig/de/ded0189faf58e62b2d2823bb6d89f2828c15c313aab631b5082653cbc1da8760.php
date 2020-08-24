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
class __TwigTemplate_dbe651645fe715333e2834435a82213786fdd82281d26e2d82a6e84f1604c5e6 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@CraueTwigExtensions/ChangeLanguage/changeLanguage_content.html.twig", "@CraueTwigExtensions/ChangeLanguage/changeLanguage_customization.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_craue_language_link_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        // line 5
        echo "\t";
        $this->displayParentBlock("craue_language_link_text", $context, $blocks);
        echo "
";
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
        return array (  52 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@CraueTwigExtensions/ChangeLanguage/changeLanguage_customization.html.twig", "C:\\Users\\Mohamedahmed\\PhpstormProjects\\untitled\\vendor\\craue\\twigextensions-bundle\\Resources\\views\\ChangeLanguage\\changeLanguage_customization.html.twig");
    }
}
