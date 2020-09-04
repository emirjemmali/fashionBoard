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

/* baseAdmin.html.twig */
class __TwigTemplate_9050430a1f1357c02aad29c3595188bd65a4445074be64e7ff3c44b6d762f020 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Admin Dashboard</title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/css/bootstrap.min.css"), "html", null, true);
        echo "\">
";
        // line 11
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/css/icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/plugins/uniform/css/default.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/plugins/switchery/switchery.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/plugins/morris/morris.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/plugins/morris/morris.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css\"/>

</head>
<body>
<div class=\"page-container\">
    <div class=\"page-sidebar\">
        <a class=\"logo-box\" >
            <span> <i class=\"mdi mdi-chemical-weapon\" id=\"fixed-sidebar-toggle-button\"></i>
                <span>Admin</span> </span>
            <i class=\"mdi mdi-close\" id=\"sidebar-toggle-button-close\"></i>
        </a>
        <div class=\"page-sidebar-inner\">
            <div class=\"page-sidebar-menu\">
                <ul class=\"accordion-menu\">
                    <li class=\"active-page\">
                        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
                            <i class=\"menu-icon mdi mdi-home\">

                            </i><span>Dashboard</span> </a>
                    </li>
                    <li>
                        <a >
                            <i class=\"menu-icon mdi mdi-bullseye\"></i>
                            <span>Gestion des paquets</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                        </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manageBundle");
        echo "\">Liste des paquets</a></li>
                            <li><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addBundle");
        echo "\">Ajouter paquet</a></li>

                        </ul>
                    </li>
                    <li>
                        <a >
                            <i class=\"menu-icon mdi mdi-clipboard-outline\"></i>
                            <span>Gestion des produits</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                        </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manageProduct");
        echo "\">Liste des produits</a></li>
                            <li><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addProduct");
        echo "\">Ajouter produit</a></li>
                        </ul>
                    </li>
                    <li>
                        <a >
                            <i class=\"menu-icon mdi mdi-apple-keyboard-command\"></i>
                            <span>Gestion des planches</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                        </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listFashionBoard");
        echo "\">Liste des planches</a></li>
                            <li><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manageFashionBoard");
        echo "\">Gérer une planche</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class=\"menu-icon mdi mdi-table\"></i>
                            <span>Gestion des ordes</span>
                            <i class=\"accordion-icon fa fa-angle-right\"></i>
                        </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listOrders");
        echo "\">Liste des ordes</a></li>
                        </ul>
                    </li>
";
        // line 86
        echo "
";
        // line 89
        echo "                </ul>
            </div>
        </div>
    </div>
    <div class=\"page-content\">
        <div class=\"page-header\">
            <div class=\"search-form\">
                <form action=\"#\" method=\"GET\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"search\" class=\"form-control search-input\"
                               placeholder=\"Type something...\"> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" id=\"close-search\" type=\"button\">
                            <i class=\"mdi mdi-close\"></i></button> </span></div>
                </form>
            </div>
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <div class=\"logo-sm\">
                            <a href=\"javascript:void(0)\" id=\"sidebar-toggle-button\"><i
                                        class=\"fa fa-bars\"></i></a>
                            <a class=\"logo-box\"><span>admin</span></a>
                        </div>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav d-res-none-full\">
                            <li><a href=\"javascript:void(0)\" id=\"collapsed-sidebar-toggle-button\"><i
                                            class=\"mdi mdi-menu\"></i></a></li>
                            <li><a href=\"javascript:void(0)\" id=\"toggle-fullscreen\"><i
                                            class=\"mdi mdi-fullscreen\"></i></a></li>
                            <li><a href=\"javascript:void(0)\" id=\"search-button\">
                                    <i class=\"mdi mdi-magnify\"></i></a></li>
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"javascript:void(0)\" class=\"right-sidebar-toggle\"
                                   data-sidebar-id=\"main-right-sidebar\"><i class=\"mdi mdi-email-outline\">

                                    </i></a></li>
                            <li class=\"dropdown\">
                                <a href=\"javascript:void(0)\" class=\"dropdown-toggle\"
                                                    data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
                                                    aria-expanded=\"false\"><i class=\"mdi mdi-bell-outline\"></i></a>
                                <ul class=\"dropdown-menu dropdown-lg dropdown-content\">
                                    <li class=\"drop-title\">Notifications<a href=\"#\" class=\"drop-title-link\"><i
                                                    class=\"fa fa-angle-right\"></i></a></li>
                                    <li class=\"slimscroll dropdown-notifications\">
                                        <ul class=\"list-unstyled dropdown-oc\">
                                            <li>
                                                <a href=\"#\">
                                                    <span class=\"notification-badge bg-primary\"><i
                                                                class=\"fa fa-photo\"></i></span>
                                                    <span class=\"notification-info\">Finished uploading photos to gallery
                                                        <b>\"South Africa\"</b>. <small
                                                                class=\"notification-date\">20:00</small>
                                                    </span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown user-dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\"
                                                                  data-toggle=\"dropdown\" role=\"button\"
                                                                  aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <img src=";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/images/avatar/avatar-1.jpg"), "html", null, true);
        echo " alt=\"\" class=\"img-circle\"></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Profile</a></li>
                                    <li><a href=\"#\">Calendar</a></li>
                                    <li><a href=\"#\"><span class=\"badge pull-right badge-danger\">42</span>Messages</a>
                                    </li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Account Settings</a></li>
                                    <li><a  href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class=\"page-inner\">
            ";
        // line 170
        $this->displayBlock('body', $context, $blocks);
        // line 172
        echo "        </div>
    </div>
    </div>
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/plugins/uniform/js/jquery.uniform.standalone.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/plugins/switchery/switchery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/plugins/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/pages/dashborad.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backOffice/js/custom.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js\"></script>
<script>
    \$(document).ready(function () {
        \$('#dtBasicExample').DataTable();
        \$('.dataTables_length').addClass('bs-select');
    });

</script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js\"></script>

</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 170
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 171
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 171,  316 => 170,  296 => 183,  292 => 182,  288 => 181,  284 => 180,  280 => 179,  276 => 178,  272 => 177,  268 => 176,  264 => 175,  259 => 172,  257 => 170,  245 => 161,  234 => 153,  168 => 89,  165 => 86,  159 => 75,  146 => 65,  142 => 64,  130 => 55,  126 => 54,  113 => 44,  109 => 43,  95 => 32,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  55 => 11,  51 => 9,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Admin Dashboard</title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('backOffice/css/bootstrap.min.css') }}\">
{#    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" >#}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('backOffice/css/icons.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('backOffice/plugins/uniform/css/default.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('backOffice/plugins/switchery/switchery.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('backOffice/plugins/morris/morris.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('backOffice/plugins/morris/morris.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('backOffice/css/style.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css\"/>

</head>
<body>
<div class=\"page-container\">
    <div class=\"page-sidebar\">
        <a class=\"logo-box\" >
            <span> <i class=\"mdi mdi-chemical-weapon\" id=\"fixed-sidebar-toggle-button\"></i>
                <span>Admin</span> </span>
            <i class=\"mdi mdi-close\" id=\"sidebar-toggle-button-close\"></i>
        </a>
        <div class=\"page-sidebar-inner\">
            <div class=\"page-sidebar-menu\">
                <ul class=\"accordion-menu\">
                    <li class=\"active-page\">
                        <a href=\"{{ path('dashboard') }}\">
                            <i class=\"menu-icon mdi mdi-home\">

                            </i><span>Dashboard</span> </a>
                    </li>
                    <li>
                        <a >
                            <i class=\"menu-icon mdi mdi-bullseye\"></i>
                            <span>Gestion des paquets</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                        </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"{{ path('manageBundle') }}\">Liste des paquets</a></li>
                            <li><a href=\"{{ path('addBundle') }}\">Ajouter paquet</a></li>

                        </ul>
                    </li>
                    <li>
                        <a >
                            <i class=\"menu-icon mdi mdi-clipboard-outline\"></i>
                            <span>Gestion des produits</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                        </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"{{ path('manageProduct') }}\">Liste des produits</a></li>
                            <li><a href=\"{{ path('addProduct') }}\">Ajouter produit</a></li>
                        </ul>
                    </li>
                    <li>
                        <a >
                            <i class=\"menu-icon mdi mdi-apple-keyboard-command\"></i>
                            <span>Gestion des planches</span><i class=\"accordion-icon fa fa-angle-right\"></i>
                        </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"{{ path('listFashionBoard') }}\">Liste des planches</a></li>
                            <li><a href=\"{{ path('manageFashionBoard') }}\">Gérer une planche</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class=\"menu-icon mdi mdi-table\"></i>
                            <span>Gestion des ordes</span>
                            <i class=\"accordion-icon fa fa-angle-right\"></i>
                        </a>
                        <ul class=\"sub-menu\">
                            <li><a href=\"{{ path('listOrders') }}\">Liste des ordes</a></li>
                        </ul>
                    </li>
{#                    <li>#}
{#                        <a >#}
{#                            <i class=\"menu-icon mdi mdi-stackexchange\"></i>#}
{#                            <span>Gestion des quizs</span><i class=\"accordion-icon fa fa-angle-right\"></i>#}
{#                        </a>#}
{#                        <ul class=\"sub-menu\">#}
{#                            <li><a href=\"{{ path('manageQuiz') }}\">Liste des quizs</a></li>#}
{#                            <li><a href=\"{{ path('addQuiz') }}\">Ajouter quiz</a></li>#}

{#                        </ul>#}
{#                    </li>#}
                </ul>
            </div>
        </div>
    </div>
    <div class=\"page-content\">
        <div class=\"page-header\">
            <div class=\"search-form\">
                <form action=\"#\" method=\"GET\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"search\" class=\"form-control search-input\"
                               placeholder=\"Type something...\"> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" id=\"close-search\" type=\"button\">
                            <i class=\"mdi mdi-close\"></i></button> </span></div>
                </form>
            </div>
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <div class=\"logo-sm\">
                            <a href=\"javascript:void(0)\" id=\"sidebar-toggle-button\"><i
                                        class=\"fa fa-bars\"></i></a>
                            <a class=\"logo-box\"><span>admin</span></a>
                        </div>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav d-res-none-full\">
                            <li><a href=\"javascript:void(0)\" id=\"collapsed-sidebar-toggle-button\"><i
                                            class=\"mdi mdi-menu\"></i></a></li>
                            <li><a href=\"javascript:void(0)\" id=\"toggle-fullscreen\"><i
                                            class=\"mdi mdi-fullscreen\"></i></a></li>
                            <li><a href=\"javascript:void(0)\" id=\"search-button\">
                                    <i class=\"mdi mdi-magnify\"></i></a></li>
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"javascript:void(0)\" class=\"right-sidebar-toggle\"
                                   data-sidebar-id=\"main-right-sidebar\"><i class=\"mdi mdi-email-outline\">

                                    </i></a></li>
                            <li class=\"dropdown\">
                                <a href=\"javascript:void(0)\" class=\"dropdown-toggle\"
                                                    data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
                                                    aria-expanded=\"false\"><i class=\"mdi mdi-bell-outline\"></i></a>
                                <ul class=\"dropdown-menu dropdown-lg dropdown-content\">
                                    <li class=\"drop-title\">Notifications<a href=\"#\" class=\"drop-title-link\"><i
                                                    class=\"fa fa-angle-right\"></i></a></li>
                                    <li class=\"slimscroll dropdown-notifications\">
                                        <ul class=\"list-unstyled dropdown-oc\">
                                            <li>
                                                <a href=\"#\">
                                                    <span class=\"notification-badge bg-primary\"><i
                                                                class=\"fa fa-photo\"></i></span>
                                                    <span class=\"notification-info\">Finished uploading photos to gallery
                                                        <b>\"South Africa\"</b>. <small
                                                                class=\"notification-date\">20:00</small>
                                                    </span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown user-dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\"
                                                                  data-toggle=\"dropdown\" role=\"button\"
                                                                  aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <img src={{ asset('backOffice/images/avatar/avatar-1.jpg') }} alt=\"\" class=\"img-circle\"></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Profile</a></li>
                                    <li><a href=\"#\">Calendar</a></li>
                                    <li><a href=\"#\"><span class=\"badge pull-right badge-danger\">42</span>Messages</a>
                                    </li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Account Settings</a></li>
                                    <li><a  href=\"{{ path('fos_user_security_logout') }}\">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class=\"page-inner\">
            {% block body %}
            {% endblock %}
        </div>
    </div>
    </div>
<script src=\"{{ asset('backOffice/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('backOffice/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('backOffice/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}\"></script>
<script src=\"{{ asset('backOffice/plugins/uniform/js/jquery.uniform.standalone.js') }}\"></script>
<script src=\"{{ asset('backOffice/plugins/switchery/switchery.min.js') }}\"></script>
<script src=\"{{ asset('backOffice/plugins/morris/morris.min.js') }}\"></script>
<script src=\"{{ asset('backOffice/plugins/raphael/raphael-min.js') }}\"></script>
<script src=\"{{ asset('backOffice/pages/dashborad.js') }}\"></script>
<script src=\"{{ asset('backOffice/js/custom.js') }}\"></script>
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js\"></script>
<script>
    \$(document).ready(function () {
        \$('#dtBasicExample').DataTable();
        \$('.dataTables_length').addClass('bs-select');
    });

</script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js\"></script>

</body>
</html>", "baseAdmin.html.twig", "/home/emir/Bureau/fashionBoard/templates/baseAdmin.html.twig");
    }
}
