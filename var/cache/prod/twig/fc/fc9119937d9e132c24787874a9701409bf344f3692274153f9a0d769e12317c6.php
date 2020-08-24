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

/* default/formule.html.twig */
class __TwigTemplate_bf505bc4dce8fb49c7f50c3ae269359feaf40c3ff89efffc03a32eacb0f24f92 extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "default/formule.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<div class=\"blog-section latest-blog container-fluid\">
    <!-- Container -->
    <div class=\"container\">
        <!-- Section Header -->
        <div class=\"section-header\">
            <h3>Our bundle</h3>
        </div><!-- Section Header /- -->
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fashionbundle"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bundle"]) {
            // line 11
            echo "
        <div class=\"col-md-4 col-sm-6 col-xs-6\">
            <div class=\"type-post\">
                <div class=\"entry-cover\">
                    <img height=\"255px\" width=\"388px\" src=\"images/bundle.jpg\" alt=\"blog\">
                </div>
                <div class=\"blog-content\">
                    <h3 class=\"entry-title\"><a href=\"blog-post.html\" title=\"new Collectios are imported In Our shop.\">This bundle contains<span> ";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Craue\TwigExtensionsBundle\Twig\Extension\FormatNumberExtension']->formatSpelledOutNumber(twig_get_attribute($this->env, $this->source, $context["bundle"], "fashionbordern", [], "any", false, false, false, 18)), "html", null, true);
            echo " </span>fashion board</a></h3>
                    <div class=\"entry-meta\">
                        <span class=\"post-like\"><a href=\"#\" title=\"224 Likes\">price : ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bundle"], "price", [], "any", false, false, false, 20), "html", null, true);
            echo " euro  <i class=\"fas fa-euro-sign\"></i></a></span>
                    </div>
                    <div class=\"entry-content\">
                        <p></p>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase", ["idbundle" => twig_get_attribute($this->env, $this->source, $context["bundle"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" title=\"Read More\" class=\"read-more\">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bundle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    </div><!-- Container /- -->
</div>
";
    }

    public function getTemplateName()
    {
        return "default/formule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  84 => 24,  77 => 20,  72 => 18,  63 => 11,  59 => 10,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/formule.html.twig", "C:\\Users\\Mohamedahmed\\PhpstormProjects\\untitled\\templates\\default\\formule.html.twig");
    }
}
