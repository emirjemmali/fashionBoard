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
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/css/manageBundle.css"), "html", null, true);
        echo "\">
    <div class=\"container-xl\">
        <div class=\"table-responsive\">
            <div class=\"table-wrapper\">
                <div class=\"table-title\">
                    <div class=\"row\">
                        <div class=\"col-sm-8\"><h2>Paquets <b>Details</b></h2></div>
                        <div class=\"col-sm-4\">
                            <div class=\"search-box\">
                                <i class=\"material-icons\">&#xE8B6;</i>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search&hellip;\">
                            </div>
                        </div>
                    </div>
                </div>
                <table class=\"table table-striped table-hover table-bordered\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name <i class=\"fa fa-sort\"></i></th>
                        <th>Address</th>
                        <th>City <i class=\"fa fa-sort\"></i></th>
                        <th>Pin Code</th>
                        <th>Country <i class=\"fa fa-sort\"></i></th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Thomas Hardy</td>
                        <td>89 Chiaroscuro Rd.</td>
                        <td>Portland</td>
                        <td>97219</td>
                        <td>USA</td>
                        <td>
                            <a href=\"#\" class=\"edit\" title=\"Edit\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE254;</i></a>
                            <a href=\"#\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Maria Anders</td>
                        <td>Obere Str. 57</td>
                        <td>Berlin</td>
                        <td>12209</td>
                        <td>Germany</td>
                        <td>
                            <a href=\"#\" class=\"edit\" title=\"Edit\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE254;</i></a>
                            <a href=\"#\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Fran Wilson</td>
                        <td>C/ Araquil, 67</td>
                        <td>Madrid</td>
                        <td>28023</td>
                        <td>Spain</td>
                        <td>
                            <a href=\"#\" class=\"edit\" title=\"Edit\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE254;</i></a>
                            <a href=\"#\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Dominique Perrier</td>
                        <td>25, rue Lauriston</td>
                        <td>Paris</td>
                        <td>75016</td>
                        <td>France</td>
                        <td>
                            <a href=\"#\" class=\"edit\" title=\"Edit\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE254;</i></a>
                            <a href=\"#\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Martin Blank</td>
                        <td>Via Monte Bianco 34</td>
                        <td>Turin</td>
                        <td>10100</td>
                        <td>Italy</td>
                        <td>
                            <a href=\"#\" class=\"edit\" title=\"Edit\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE254;</i></a>
                            <a href=\"#\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE872;</i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class=\"clearfix\">
                    <div class=\"hint-text\">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class=\"pagination\">
                        <li class=\"page-item disabled\"><a href=\"#\"><i class=\"fa fa-angle-double-left\"></i></a></li>
                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">1</a></li>
                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">2</a></li>
                        <li class=\"page-item active\"><a href=\"#\" class=\"page-link\">3</a></li>
                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">4</a></li>
                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">5</a></li>
                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\"><i class=\"fa fa-angle-double-right\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/js/manageBundle.js"), "html", null, true);
        echo "\"></script>

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
        return array (  168 => 109,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('backOffice/css/manageBundle.css') }}\">
    <div class=\"container-xl\">
        <div class=\"table-responsive\">
            <div class=\"table-wrapper\">
                <div class=\"table-title\">
                    <div class=\"row\">
                        <div class=\"col-sm-8\"><h2>Paquets <b>Details</b></h2></div>
                        <div class=\"col-sm-4\">
                            <div class=\"search-box\">
                                <i class=\"material-icons\">&#xE8B6;</i>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search&hellip;\">
                            </div>
                        </div>
                    </div>
                </div>
                <table class=\"table table-striped table-hover table-bordered\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name <i class=\"fa fa-sort\"></i></th>
                        <th>Address</th>
                        <th>City <i class=\"fa fa-sort\"></i></th>
                        <th>Pin Code</th>
                        <th>Country <i class=\"fa fa-sort\"></i></th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Thomas Hardy</td>
                        <td>89 Chiaroscuro Rd.</td>
                        <td>Portland</td>
                        <td>97219</td>
                        <td>USA</td>
                        <td>
                            <a href=\"#\" class=\"edit\" title=\"Edit\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE254;</i></a>
                            <a href=\"#\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Maria Anders</td>
                        <td>Obere Str. 57</td>
                        <td>Berlin</td>
                        <td>12209</td>
                        <td>Germany</td>
                        <td>
                            <a href=\"#\" class=\"edit\" title=\"Edit\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE254;</i></a>
                            <a href=\"#\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Fran Wilson</td>
                        <td>C/ Araquil, 67</td>
                        <td>Madrid</td>
                        <td>28023</td>
                        <td>Spain</td>
                        <td>
                            <a href=\"#\" class=\"edit\" title=\"Edit\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE254;</i></a>
                            <a href=\"#\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Dominique Perrier</td>
                        <td>25, rue Lauriston</td>
                        <td>Paris</td>
                        <td>75016</td>
                        <td>France</td>
                        <td>
                            <a href=\"#\" class=\"edit\" title=\"Edit\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE254;</i></a>
                            <a href=\"#\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Martin Blank</td>
                        <td>Via Monte Bianco 34</td>
                        <td>Turin</td>
                        <td>10100</td>
                        <td>Italy</td>
                        <td>
                            <a href=\"#\" class=\"edit\" title=\"Edit\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE254;</i></a>
                            <a href=\"#\" class=\"delete\" title=\"Delete\" data-toggle=\"tooltip\"><i class=\"material-icons\">&#xE872;</i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class=\"clearfix\">
                    <div class=\"hint-text\">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class=\"pagination\">
                        <li class=\"page-item disabled\"><a href=\"#\"><i class=\"fa fa-angle-double-left\"></i></a></li>
                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">1</a></li>
                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">2</a></li>
                        <li class=\"page-item active\"><a href=\"#\" class=\"page-link\">3</a></li>
                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">4</a></li>
                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">5</a></li>
                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\"><i class=\"fa fa-angle-double-right\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src=\"{{ asset('backOffice/js/manageBundle.js') }}\"></script>

{% endblock %}", "backOffice/manageBundles.html.twig", "/home/emir/Documents/untitled/templates/backOffice/manageBundles.html.twig");
    }
}
