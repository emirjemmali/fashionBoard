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

/* backOffice/dashboard.html.twig */
class __TwigTemplate_10f11143d4eed62693ebbb6e08d6115ca21d5fd0793f5b6b99fe331b84220e8f extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backOffice/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "backOffice/dashboard.html.twig", 1);
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
        <div class=\"pull-left\"><h3 class=\"breadcrumb-header\">Dashboard</h3>
            <p class=\"text-muted mb-0\">Vue globale de votre flux d'activités</p></div>
        <div class=\"pull-right\">
            <div class=\"btn-group mx-auto\">
                <ol class=\"breadcrumb hide-phone pt-4 pb-4 m-0\">
                    <li class=\"breadcrumb-item\"><a href=\"#\">Admin</a></li>
                    <li class=\"breadcrumb-item active\">Dashboard</li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <div id=\"main-wrapper\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-lg-3\">
                <div class=\"panel mb-30\">
                    <div class=\"panel-body widget-desk\">
                        <div class=\"pull-right\"><h3 class=\"mt-0 mb-0 f-bold\">48505 <span><i
                                            class=\"mdi mdi-arrow-up text-success\"></i></span></h3>
                            <p class=\"text-muted mb-0\">Total Visits</p></div>
                        <div class=\"widget-icon\"><i class=\"mdi mdi-eye\"></i></div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-lg-3\">
                <div class=\"panel mb-30\">
                    <div class=\"panel-body widget-desk\">
                        <div class=\"pull-right\"><h3 class=\"mt-0 mb-0 f-bold\">2832 <span><i
                                            class=\"mdi mdi-arrow-down text-danger\"></i></span></h3>
                            <p class=\"text-muted mb-0\">Sales Analytics</p></div>
                        <div class=\"widget-icon\"><i class=\"mdi mdi-chart-line\"></i></div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-lg-3\">
                <div class=\"panel mb-30\">
                    <div class=\"panel-body widget-desk\">
                        <div class=\"pull-right\"><h3 class=\"mt-0 mb-0 f-bold\">2658 <span><i
                                            class=\"mdi mdi-arrow-up text-success\"></i></span></h3>
                            <p class=\"text-muted mb-0\">Daily Sales</p></div>
                        <div class=\"widget-icon\"><i class=\"mdi mdi-sale\"></i></div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-lg-3\">
                <div class=\"panel mb-30\">
                    <div class=\"panel-body widget-desk\">
                        <div class=\"pull-right\"><h3 class=\"mt-0 mb-0 f-bold\">\$4926 <span><i
                                            class=\"mdi mdi-arrow-down text-danger\"></i></span></h3>
                            <p class=\"text-muted mb-0\">Total Revenue</p></div>
                        <div class=\"widget-icon\"><i class=\"mdi mdi-currency-usd\"></i></div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-8 col-sm-12 col-xs-12 col-lg-8\">
                <div class=\"panel mb-30\">
                    <div class=\"panel-body\"><h5 class=\"header-title mb-30 mt-0\">Order Overview</h5>
                        <div id=\"morris-area-example\" style=\"height:350px;\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-12 col-xs-12 col-lg-4\">
                <div class=\"panel mb-30\">
                    <div class=\"panel-body\"><h5 class=\"header-title mb-30 mt-0\">Yearly Revenue</h5>
                        <div id=\"morris-bar-example\" style=\"height: 350px;\"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backOffice/dashboard.html.twig";
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
    <div class=\"page-title mb-15\">
        <div class=\"pull-left\"><h3 class=\"breadcrumb-header\">Dashboard</h3>
            <p class=\"text-muted mb-0\">Vue globale de votre flux d'activités</p></div>
        <div class=\"pull-right\">
            <div class=\"btn-group mx-auto\">
                <ol class=\"breadcrumb hide-phone pt-4 pb-4 m-0\">
                    <li class=\"breadcrumb-item\"><a href=\"#\">Admin</a></li>
                    <li class=\"breadcrumb-item active\">Dashboard</li>
                </ol>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <div id=\"main-wrapper\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-lg-3\">
                <div class=\"panel mb-30\">
                    <div class=\"panel-body widget-desk\">
                        <div class=\"pull-right\"><h3 class=\"mt-0 mb-0 f-bold\">48505 <span><i
                                            class=\"mdi mdi-arrow-up text-success\"></i></span></h3>
                            <p class=\"text-muted mb-0\">Total Visits</p></div>
                        <div class=\"widget-icon\"><i class=\"mdi mdi-eye\"></i></div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-lg-3\">
                <div class=\"panel mb-30\">
                    <div class=\"panel-body widget-desk\">
                        <div class=\"pull-right\"><h3 class=\"mt-0 mb-0 f-bold\">2832 <span><i
                                            class=\"mdi mdi-arrow-down text-danger\"></i></span></h3>
                            <p class=\"text-muted mb-0\">Sales Analytics</p></div>
                        <div class=\"widget-icon\"><i class=\"mdi mdi-chart-line\"></i></div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-lg-3\">
                <div class=\"panel mb-30\">
                    <div class=\"panel-body widget-desk\">
                        <div class=\"pull-right\"><h3 class=\"mt-0 mb-0 f-bold\">2658 <span><i
                                            class=\"mdi mdi-arrow-up text-success\"></i></span></h3>
                            <p class=\"text-muted mb-0\">Daily Sales</p></div>
                        <div class=\"widget-icon\"><i class=\"mdi mdi-sale\"></i></div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-lg-3\">
                <div class=\"panel mb-30\">
                    <div class=\"panel-body widget-desk\">
                        <div class=\"pull-right\"><h3 class=\"mt-0 mb-0 f-bold\">\$4926 <span><i
                                            class=\"mdi mdi-arrow-down text-danger\"></i></span></h3>
                            <p class=\"text-muted mb-0\">Total Revenue</p></div>
                        <div class=\"widget-icon\"><i class=\"mdi mdi-currency-usd\"></i></div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-8 col-sm-12 col-xs-12 col-lg-8\">
                <div class=\"panel mb-30\">
                    <div class=\"panel-body\"><h5 class=\"header-title mb-30 mt-0\">Order Overview</h5>
                        <div id=\"morris-area-example\" style=\"height:350px;\"></div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-12 col-xs-12 col-lg-4\">
                <div class=\"panel mb-30\">
                    <div class=\"panel-body\"><h5 class=\"header-title mb-30 mt-0\">Yearly Revenue</h5>
                        <div id=\"morris-bar-example\" style=\"height: 350px;\"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}", "backOffice/dashboard.html.twig", "/home/emir/Bureau/fashionBoard/templates/backOffice/dashboard.html.twig");
    }
}
