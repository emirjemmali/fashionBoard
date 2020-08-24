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

/* backOffice/manageProducts.html.twig */
class __TwigTemplate_992dbfb0ec956fa201f8d4469b152ba2a5a93db9f163fb5349e6da3980ea19ec extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backOffice/manageProducts.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "backOffice/manageProducts.html.twig", 1);
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
            <th >Prix

            </th>
            <th >Url

            </th>
            <th class=\"th-sm\">Marque

            </th>
            <th class=\"th-sm\">Image

            </th>
            <th class=\"th-sm\">Actions

            </th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 33
            echo "            <tr>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 34));
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 35));
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "url", [], "any", false, false, false, 36));
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "marque", [], "any", false, false, false, 37));
            echo "</td>
                <td><img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["product"], "brochureFilename", [], "any", false, false, false, 38))), "html", null, true);
            echo "\" style=\"width:100%;height:120px\"></td>
                <td>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateProduct", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">
                        <i class=\"fa fa-edit\" style=\"color:yellowgreen\"></i>
                    </a>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteProduct", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">
                        <i class=\"fa fa-trash-o\" style=\"color:red\"></i>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
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
        return "backOffice/manageProducts.html.twig";
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
            <th >Prix

            </th>
            <th >Url

            </th>
            <th class=\"th-sm\">Marque

            </th>
            <th class=\"th-sm\">Image

            </th>
            <th class=\"th-sm\">Actions

            </th>
        </tr>
        </thead>
        <tbody>
        {% for product in products %}
            <tr>
                <td>{{ product.nom|e }}</td>
                <td>{{ product.prix|e }}</td>
                <td>{{ product.url|e }}</td>
                <td>{{ product.marque|e }}</td>
                <td><img src=\"{{ asset('uploads/brochures/'~product.brochureFilename) }}\" style=\"width:100%;height:120px\"></td>
                <td>
                    <a href=\"{{ path('updateProduct', {'id': product.id}) }}\">
                        <i class=\"fa fa-edit\" style=\"color:yellowgreen\"></i>
                    </a>
                    <a href=\"{{ path('deleteProduct', {'id': product.id}) }}\">
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

{% endblock %}", "backOffice/manageProducts.html.twig", "/home/emir/Bureau/untitled/templates/backOffice/manageProducts.html.twig");
    }
}
