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

/* backOffice/manageOrders.html.twig */
class __TwigTemplate_74c82d0af9b9e36768ec58e5446f5b87238474f49ef34f2c21eebd70b829c124 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backOffice/manageOrders.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "backOffice/manageOrders.html.twig", 1);
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
        echo "<div class=\"page-title mb-15\">
    <div class=\"pull-left\"><h3 class=\"breadcrumb-header\">Ordres</h3>
        <p class=\"text-muted mb-0\">Gérer les ordres</p></div>
    <div class=\"pull-right\">
        <div class=\"btn-group mx-auto\">
            <ol class=\"breadcrumb hide-phone pt-4 pb-4 m-0\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Admin</a></li>
                <li class=\"breadcrumb-item active\">Gérer les ordres</li>
            </ol>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <table id=\"dtBasicExample\" class=\"table table-striped table-bordered table-sm\"
           cellspacing=\"0\" width=\"100%\">
        <thead>
        <tr>
            <th >Client

            </th>
            <th >Fashion Bundle

            </th>
            <th >Prix

            </th>


        </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 35
            echo "            <tr>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 36), "firstname", [], "any", false, false, false, 36));
            echo " ";
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 36), "lastname", [], "any", false, false, false, 36));
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "bundle", [], "any", false, false, false, 37), "nom", [], "any", false, false, false, 37));
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "amount", [], "any", false, false, false, 38));
            echo "</td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
        </tbody>
        <tfoot>
        <tr>
            <th >Client

            </th>
            <th >Fashion Bundle

            </th>
            <th >Prix

            </th>
        </tr>
        </tfoot>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backOffice/manageOrders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 42,  109 => 38,  105 => 37,  98 => 36,  95 => 35,  91 => 34,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}
<div class=\"page-title mb-15\">
    <div class=\"pull-left\"><h3 class=\"breadcrumb-header\">Ordres</h3>
        <p class=\"text-muted mb-0\">Gérer les ordres</p></div>
    <div class=\"pull-right\">
        <div class=\"btn-group mx-auto\">
            <ol class=\"breadcrumb hide-phone pt-4 pb-4 m-0\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Admin</a></li>
                <li class=\"breadcrumb-item active\">Gérer les ordres</li>
            </ol>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <table id=\"dtBasicExample\" class=\"table table-striped table-bordered table-sm\"
           cellspacing=\"0\" width=\"100%\">
        <thead>
        <tr>
            <th >Client

            </th>
            <th >Fashion Bundle

            </th>
            <th >Prix

            </th>


        </tr>
        </thead>
        <tbody>
        {% for order in orders %}
            <tr>
                <td>{{ order.user.firstname|e }} {{ \" \" }}{{ order.user.lastname|e }}</td>
                <td>{{ order.bundle.nom|e }}</td>
                <td>{{ order.amount|e }}</td>

            </tr>
        {% endfor %}

        </tbody>
        <tfoot>
        <tr>
            <th >Client

            </th>
            <th >Fashion Bundle

            </th>
            <th >Prix

            </th>
        </tr>
        </tfoot>
    </table>
</div>
{% endblock %}", "backOffice/manageOrders.html.twig", "/home/emir/Bureau/fashionBoard/templates/backOffice/manageOrders.html.twig");
    }
}
