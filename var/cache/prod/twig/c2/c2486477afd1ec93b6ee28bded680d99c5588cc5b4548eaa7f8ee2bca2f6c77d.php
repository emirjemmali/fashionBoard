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

/* HWIOAuthBundle:Connect:registration_success.html.twig */
class __TwigTemplate_64e8800477b875003ce1e2284bab1284eef6c0c3a2d105e3fa0a740f27300bbf extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'hwi_oauth_content' => [$this, 'block_hwi_oauth_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@HWIOAuth/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@HWIOAuth/layout.html.twig", "HWIOAuthBundle:Connect:registration_success.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.registration_success", ["%username%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 4), "username", [], "any", false, false, false, 4)], "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:registration_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "HWIOAuthBundle:Connect:registration_success.html.twig", "C:\\Users\\Mohamedahmed\\PhpstormProjects\\untitled\\vendor\\hwi\\oauth-bundle/Resources/views/Connect/registration_success.html.twig");
    }
}
