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
        echo "    <table id=\"dtBasicExample\" class=\"table table-striped table-bordered table-sm\"
           cellspacing=\"0\" width=\"100%\">
        <thead>
        <tr>
            <th >Nom

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
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>
                <a href=\"\">
                    <i class=\"fa fa-edit\" style=\"color:yellowgreen\"></i>
                </a>
                <a href=\"\">
                    <i class=\"fa fa-trash-o\" style=\"color:red\"></i>
                </a>
            </td>
        </tr>
        <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>
                <a href=\"\">
                    <i class=\"fa fa-edit\" style=\"color:yellowgreen\"></i>
                </a>
                <a href=\"\">
                    <i class=\"fa fa-trash-o\" style=\"color:red\"></i>
                </a>

        </tr>

        </tbody>
        <tfoot>
        <tr>
            <th>Nom
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
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}
    <table id=\"dtBasicExample\" class=\"table table-striped table-bordered table-sm\"
           cellspacing=\"0\" width=\"100%\">
        <thead>
        <tr>
            <th >Nom

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
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>
                <a href=\"\">
                    <i class=\"fa fa-edit\" style=\"color:yellowgreen\"></i>
                </a>
                <a href=\"\">
                    <i class=\"fa fa-trash-o\" style=\"color:red\"></i>
                </a>
            </td>
        </tr>
        <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>
                <a href=\"\">
                    <i class=\"fa fa-edit\" style=\"color:yellowgreen\"></i>
                </a>
                <a href=\"\">
                    <i class=\"fa fa-trash-o\" style=\"color:red\"></i>
                </a>

        </tr>

        </tbody>
        <tfoot>
        <tr>
            <th>Nom
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
