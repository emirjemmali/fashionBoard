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

/* backOffice/manageBundles.html.twig */
class __TwigTemplate_53fce15eca0ecf2ddc0269414f820eb1954730cb4ec7eb97f533a6d597c14537 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backOffice/manageBundles.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "backOffice/manageBundles.html.twig", 1);
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
        echo "    <ul>

    </ul>
    <table id=\"dtBasicExample\" class=\"table table-striped table-bordered table-sm\"
           cellspacing=\"0\" width=\"100%\">
        <thead>
        <tr>
            <th >Nom

            </th>
            <th >Description

            </th>
            <th >Nb planches

            </th>
            <th class=\"th-sm\">Prix

            </th>
            <th class=\"th-sm\">Promotion

            </th>
            <th class=\"th-sm\">Actions

            </th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fashionBundles"]) || array_key_exists("fashionBundles", $context) ? $context["fashionBundles"] : (function () { throw new RuntimeError('Variable "fashionBundles" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fashionBundle"]) {
            // line 33
            echo "        <tr>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fashionBundle"], "nom", [], "any", false, false, false, 34));
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fashionBundle"], "description", [], "any", false, false, false, 35));
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fashionBundle"], "fashionbordernumber", [], "any", false, false, false, 36));
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fashionBundle"], "price", [], "any", false, false, false, 37));
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fashionBundle"], "promotion", [], "any", false, false, false, 38));
            echo "</td>
            <td>
                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateBundle", ["id" => twig_get_attribute($this->env, $this->source, $context["fashionBundle"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">
                    <i class=\"fa fa-edit\" style=\"color:yellowgreen\"></i>
                </a>
                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteBundle", ["id" => twig_get_attribute($this->env, $this->source, $context["fashionBundle"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">
                    <i class=\"fa fa-trash-o\" style=\"color:red\"></i>
                </a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fashionBundle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
        </tbody>
        <tfoot>
        <tr>
            <th>Nom
            </th>
            <th>Description
            </th>
            <th>Nb planches
            </th>
            <th>Prix
            </th>
            <th>Promotion
            </th>
            <th>Actions
            </th>
        </tr>
        </tfoot>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backOffice/manageBundles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 49,  123 => 43,  117 => 40,  112 => 38,  108 => 37,  104 => 36,  100 => 35,  96 => 34,  93 => 33,  89 => 32,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}
    <ul>

    </ul>
    <table id=\"dtBasicExample\" class=\"table table-striped table-bordered table-sm\"
           cellspacing=\"0\" width=\"100%\">
        <thead>
        <tr>
            <th >Nom

            </th>
            <th >Description

            </th>
            <th >Nb planches

            </th>
            <th class=\"th-sm\">Prix

            </th>
            <th class=\"th-sm\">Promotion

            </th>
            <th class=\"th-sm\">Actions

            </th>
        </tr>
        </thead>
        <tbody>
        {% for fashionBundle in fashionBundles %}
        <tr>
            <td>{{ fashionBundle.nom|e }}</td>
            <td>{{ fashionBundle.description|e }}</td>
            <td>{{ fashionBundle.fashionbordernumber|e }}</td>
            <td>{{ fashionBundle.price|e }}</td>
            <td>{{ fashionBundle.promotion|e }}</td>
            <td>
                <a href=\"{{ path('updateBundle', {'id': fashionBundle.id}) }}\">
                    <i class=\"fa fa-edit\" style=\"color:yellowgreen\"></i>
                </a>
                <a href=\"{{ path('deleteBundle', {'id': fashionBundle.id}) }}\">
                    <i class=\"fa fa-trash-o\" style=\"color:red\"></i>
                </a>
            </td>
        </tr>
        {% endfor %}

        </tbody>
        <tfoot>
        <tr>
            <th>Nom
            </th>
            <th>Description
            </th>
            <th>Nb planches
            </th>
            <th>Prix
            </th>
            <th>Promotion
            </th>
            <th>Actions
            </th>
        </tr>
        </tfoot>
    </table>

{% endblock %}", "backOffice/manageBundles.html.twig", "/home/emir/Bureau/fashionBoard/templates/backOffice/manageBundles.html.twig");
    }
}
