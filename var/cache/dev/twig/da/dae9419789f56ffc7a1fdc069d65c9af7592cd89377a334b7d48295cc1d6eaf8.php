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
class __TwigTemplate_409f30f2a197673a9a5bdbee8035b95e15ed60c977542cd9bf2b7df077c23e75 extends \Twig\Template
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
                    <a href=\"blog-post.html\"><img src=\"images/bundle.jpg\" alt=\"blog\"></a>
                </div>
                <div class=\"blog-content\">
                    <h3 class=\"entry-title\"><a href=\"blog-post.html\" title=\"new Collectios are imported In Our shop.\">This bundle contains<span> one </span>fashion board</a></h3>
                    <div class=\"entry-meta\">
                        <span class=\"post-like\"><a href=\"#\" title=\"224 Likes\"><i class=\"fa fa-heart-o\"></i>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bundle"], "price", [], "any", false, false, false, 20), "html", null, true);
            echo "</a></span>
                    </div>
                    <div class=\"entry-content\">
                        <p>The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost.</p>
                        <a href=\"blog-post.html\" title=\"Read More\" class=\"read-more\">Read More<i class=\"fa fa-long-arrow-right\"></i></a>
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
        return array (  99 => 30,  83 => 20,  72 => 11,  68 => 10,  59 => 3,  52 => 2,  35 => 1,);
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
                    <a href=\"blog-post.html\"><img src=\"images/bundle.jpg\" alt=\"blog\"></a>
                </div>
                <div class=\"blog-content\">
                    <h3 class=\"entry-title\"><a href=\"blog-post.html\" title=\"new Collectios are imported In Our shop.\">This bundle contains<span> one </span>fashion board</a></h3>
                    <div class=\"entry-meta\">
                        <span class=\"post-like\"><a href=\"#\" title=\"224 Likes\"><i class=\"fa fa-heart-o\"></i>{{ bundle.price }}</a></span>
                    </div>
                    <div class=\"entry-content\">
                        <p>The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost.</p>
                        <a href=\"blog-post.html\" title=\"Read More\" class=\"read-more\">Read More<i class=\"fa fa-long-arrow-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>
        {% endfor %}

    </div><!-- Container /- -->
</div>
{% endblock %}", "default/formule.html.twig", "C:\\Users\\Mohamedahmed\\PhpstormProjects\\untitled\\templates\\default\\formule.html.twig");
    }
}
