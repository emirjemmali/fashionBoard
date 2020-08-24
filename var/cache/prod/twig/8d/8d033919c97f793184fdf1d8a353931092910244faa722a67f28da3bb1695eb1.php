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

/* CraueTwigExtensionsBundle:ChangeLanguage:changeLanguage_content.html.twig */
class __TwigTemplate_3ba4b26296f11679aae3e7389cf79330ffa02cbf03dba2bacbbd811c408b0e3b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("@CraueTwigExtensions/ChangeLanguage/changeLanguage_blocks.html.twig", "CraueTwigExtensionsBundle:ChangeLanguage:changeLanguage_content.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@CraueTwigExtensions/ChangeLanguage/changeLanguage_blocks.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<ul>
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Craue\TwigExtensionsBundle\Twig\Extension\ChangeLanguageExtension']->getAvailableLocales());
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 5
            echo "\t\t<li>";
            // line 6
            $context["craue_language_iscurrent"] = ($context["locale"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 6), "locale", [], "any", false, false, false, 6));
            // line 7
            if (($context["craue_language_iscurrent"] ?? null)) {
                // line 8
                $this->displayBlock("craue_language_link_text", $context, $blocks);
            } else {
                // line 10
                echo "<a href=\"";
                $this->displayBlock("craue_language_link_target", $context, $blocks);
                echo "\">";
                // line 11
                $this->displayBlock("craue_language_link_text", $context, $blocks);
                // line 12
                echo "</a>";
            }
            // line 14
            echo "</li>
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "CraueTwigExtensionsBundle:ChangeLanguage:changeLanguage_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 16,  88 => 14,  85 => 12,  83 => 11,  79 => 10,  76 => 8,  74 => 7,  72 => 6,  70 => 5,  53 => 4,  49 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "CraueTwigExtensionsBundle:ChangeLanguage:changeLanguage_content.html.twig", "C:\\Users\\Mohamedahmed\\PhpstormProjects\\untitled\\vendor\\craue\\twigextensions-bundle/Resources/views/ChangeLanguage/changeLanguage_content.html.twig");
    }
}
