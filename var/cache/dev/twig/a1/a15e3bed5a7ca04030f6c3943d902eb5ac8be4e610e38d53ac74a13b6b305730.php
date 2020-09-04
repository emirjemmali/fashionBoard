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

/* backOffice/listFashionBoard.html.twig */
class __TwigTemplate_11eb093cc04b599058e4a29c5a0a7ac006327e2f3176e4ff1f9367b911787035 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backOffice/listFashionBoard.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "backOffice/listFashionBoard.html.twig", 1);
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
        echo "    <div class=\"page-title mb-15\">
        <div class=\"pull-left\"><h3 class=\"breadcrumb-header\">FashionBoard</h3>
            <p class=\"text-muted mb-0\">Gérer les planches</p></div>
        <div class=\"pull-right\">
            <div class=\"btn-group mx-auto\">
                <ol class=\"breadcrumb hide-phone pt-4 pb-4 m-0\">
                    <li class=\"breadcrumb-item\"><a href=\"#\">Admin</a></li>
                    <li class=\"breadcrumb-item active\">FashionBoard</li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <table id=\"dtBasicExample\" class=\"table table-striped table-bordered table-sm\"
           cellspacing=\"0\" width=\"100%\">
        <thead>
        <tr>
            <th >Client Name

            </th>
            <th >Client Activation

            </th>
            <th >Admin Validation

            </th>
            <th class=\"th-sm\">Fashion Bundle Name
            </th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fashionBoards"]) || array_key_exists("fashionBoards", $context) ? $context["fashionBoards"] : (function () { throw new RuntimeError('Variable "fashionBoards" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fashionBoard"]) {
            // line 37
            echo "            <tr>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fashionBoard"], "user", [], "any", false, false, false, 38), "firstname", [], "any", false, false, false, 38));
            echo " ";
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fashionBoard"], "user", [], "any", false, false, false, 38), "lastname", [], "any", false, false, false, 38));
            echo "</td>
                ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, $context["fashionBoard"], "clientActivation", [], "any", false, false, false, 39) == true)) {
                // line 40
                echo "                <td>Activé</td>
                ";
            } else {
                // line 41
                echo "<td>Non Activé</td>
                ";
            }
            // line 42
            echo ">
                ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, $context["fashionBoard"], "adminValidation", [], "any", false, false, false, 43) == true)) {
                // line 44
                echo "                <td>Validé</td>
            ";
            } else {
                // line 45
                echo "<td>Non Validé</td>
                ";
            }
            // line 46
            echo ">
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fashionBoard"], "fashionbundle", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fashionBoard'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
        </tbody>
        <tfoot>
        <tr>
            <th >Client Name

            </th>
            <th >Client Activation

            </th>
            <th >Admin Validation

            </th>
            <th >Fashion Bundle Name

            </th>
        </tr>
        </tfoot>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backOffice/listFashionBoard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 50,  133 => 47,  130 => 46,  126 => 45,  122 => 44,  120 => 43,  117 => 42,  113 => 41,  109 => 40,  107 => 39,  100 => 38,  97 => 37,  93 => 36,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}
    <div class=\"page-title mb-15\">
        <div class=\"pull-left\"><h3 class=\"breadcrumb-header\">FashionBoard</h3>
            <p class=\"text-muted mb-0\">Gérer les planches</p></div>
        <div class=\"pull-right\">
            <div class=\"btn-group mx-auto\">
                <ol class=\"breadcrumb hide-phone pt-4 pb-4 m-0\">
                    <li class=\"breadcrumb-item\"><a href=\"#\">Admin</a></li>
                    <li class=\"breadcrumb-item active\">FashionBoard</li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <table id=\"dtBasicExample\" class=\"table table-striped table-bordered table-sm\"
           cellspacing=\"0\" width=\"100%\">
        <thead>
        <tr>
            <th >Client Name

            </th>
            <th >Client Activation

            </th>
            <th >Admin Validation

            </th>
            <th class=\"th-sm\">Fashion Bundle Name
            </th>

        </tr>
        </thead>
        <tbody>
        {% for fashionBoard in fashionBoards %}
            <tr>
                <td>{{ fashionBoard.user.firstname|e }} {{ \" \" }}{{ fashionBoard.user.lastname|e }}</td>
                {% if fashionBoard.clientActivation == true %}
                <td>Activé</td>
                {% else %}<td>Non Activé</td>
                {% endif %}>
                {% if fashionBoard.adminValidation == true %}
                <td>Validé</td>
            {% else %}<td>Non Validé</td>
                {% endif %}>
                <td>{{ fashionBoard.fashionbundle.nom|e }}</td>
            </tr>
        {% endfor %}

        </tbody>
        <tfoot>
        <tr>
            <th >Client Name

            </th>
            <th >Client Activation

            </th>
            <th >Admin Validation

            </th>
            <th >Fashion Bundle Name

            </th>
        </tr>
        </tfoot>
    </table>

{% endblock %}", "backOffice/listFashionBoard.html.twig", "/home/emir/Bureau/fashionBoard/templates/backOffice/listFashionBoard.html.twig");
    }
}
