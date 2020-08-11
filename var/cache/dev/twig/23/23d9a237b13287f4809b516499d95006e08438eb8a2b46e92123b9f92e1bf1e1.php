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
class __TwigTemplate_0ddec6dc20c79b6f5a8d73f6273f0cb1dc04a1724f17c77bd884984891d479cd extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/formule.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/formule.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["fashionbundle"]) || array_key_exists("fashionbundle", $context) ? $context["fashionbundle"] : (function () { throw new RuntimeError('Variable "fashionbundle" does not exist.', 10, $this->source); })()));
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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase");
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  105 => 30,  93 => 24,  86 => 20,  81 => 18,  72 => 11,  68 => 10,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
<div class=\"blog-section latest-blog container-fluid\">
    <!-- Container -->
    <div class=\"container\">
        <!-- Section Header -->
        <div class=\"section-header\">
            <h3>Our bundle</h3>
        </div><!-- Section Header /- -->
        {% for bundle in fashionbundle %}

        <div class=\"col-md-4 col-sm-6 col-xs-6\">
            <div class=\"type-post\">
                <div class=\"entry-cover\">
                    <img height=\"255px\" width=\"388px\" src=\"images/bundle.jpg\" alt=\"blog\">
                </div>
                <div class=\"blog-content\">
                    <h3 class=\"entry-title\"><a href=\"blog-post.html\" title=\"new Collectios are imported In Our shop.\">This bundle contains<span> {{ bundle.fashionbordern| craue_spellout  }} </span>fashion board</a></h3>
                    <div class=\"entry-meta\">
                        <span class=\"post-like\"><a href=\"#\" title=\"224 Likes\">price : {{ bundle.price }} euro  <i class=\"fas fa-euro-sign\"></i></a></span>
                    </div>
                    <div class=\"entry-content\">
                        <p></p>
                        <a href=\"{{ path('purchase') }}\" title=\"Read More\" class=\"read-more\">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
        {% endfor %}

    </div><!-- Container /- -->
</div>
{% endblock %}", "default/formule.html.twig", "/home/emir/Documents/untitled/templates/default/formule.html.twig");
    }
}
