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

/* backOffice/addBundle.html.twig */
class __TwigTemplate_bfd2410773179d5a9f422f82e68f2895f86b162d11b508663f1318934fdb5109 extends \Twig\Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backOffice/addBundle.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "backOffice/addBundle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <form>
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Email address</label>
            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
            <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputPassword1\">Password</label>
            <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
        </div>
        <div class=\"form-group form-check\">
            <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
            <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backOffice/addBundle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}
    <form>
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Email address</label>
            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
            <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
        </div>
        <div class=\"form-group\">
            <label for=\"exampleInputPassword1\">Password</label>
            <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
        </div>
        <div class=\"form-group form-check\">
            <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
            <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
    </form>
{% endblock %}", "backOffice/addBundle.html.twig", "/home/emir/Bureau/fashionBoard/templates/backOffice/addBundle.html.twig");
    }
}
